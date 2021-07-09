<?php

namespace App\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

trait CanHttpRequest
{
    /**
     * A Guzzle client.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Contains the last response the request client sent.
     *
     * @var array
     */
    protected $response;

    /**
     * Get the client.
     *
     * @return $client
     *
     * @codeCoverageIgnore
     */
    public function getClient()
    {
        if ($this->client instanceof Client) {
            return $this->client;
        }

        return new Client;
    }

    /**
     * Set the client.
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Set the response.
     *
     * @return $response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Wrapper for the GET request
     *
     * @param string $endpoint
     * @param array $params
     * @param array @headers
     * @return response
     */
    public function get($endpoint, $params = [], $headers = null)
    {
        return $this->sendRequest('GET', $endpoint, [
            'query' => $params,
            'headers' => $headers,
        ]);
    }

    /**
     * Wrapper for the POST request
     *
     * @param string $endpoint
     * @param array $params
     * @param array @headers
     * @return response
     */
    public function post($endpoint, $params = [], $headers = null)
    {
        return $this->sendRequest('POST', $endpoint, [
            'json' => $params,
            'headers' => $headers,
        ]);
    }

    /**
     * Wrapper for the PUT request
     *
     * @param string $endpoint
     * @param array $params
     * @param array @headers
     * @return response
     */
    public function put($endpoint, $params = [], $headers = null)
    {
        return $this->sendRequest('PUT', $endpoint, [
            'json' => $params,
            'headers' => $headers,
        ]);
    }

    /**
     * Wrapper for the DELETE request
     *
     * @param string $endpoint
     * @param array $params
     * @param array @headers
     * @return response
     */
    public function delete($endpoint, $params = [], $headers = null)
    {
        return $this->sendRequest('DELETE', $endpoint, [
            'json' => $params,
            'headers' => $headers,
        ]);
    }

    /**
     * Perform the HTTP request
     *
     * @param string $method
     * @param string $endpoint
     * @param array $params
     * @return object
     */
    protected function sendRequest($method, $endpoint, $params)
    {
        try {
            // To prevent overwriting, unset headers key if no specified headers present
            if (is_null($params['headers'])) {
                unset($params['headers']);
            }

            $response = $this->getClient()->request($method, $endpoint, $params);

            $this->response = $response;
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
        }

        $statusCode = [200, 201, 400, 422];
        if (!in_array($this->getResponse()->getStatusCode(), $statusCode)) {
            if ($this->getResponse()->getStatusCode() == 403) {
                return redirect('/logout?msg=expired_session')->send();
            } elseif ($this->getResponse()->getStatusCode() == 401 && json_decode((string) $this->getResponse()->getBody(), true)['message'] == 'The incoming token has expired') {
                return redirect('/refresh?route='.\Request::path())->send();
            }

            return abort($this->getResponse()->getStatusCode());
        }

        return json_decode((string) $this->getResponse()->getBody(), true);
    }
}
