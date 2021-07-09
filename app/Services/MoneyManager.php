<?php

namespace App\Services;

use App\Traits\CanHttpRequest;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class MoneyManager
{
    use CanHttpRequest;

    /**
     * Create money manager class instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('services.moneymanager.api_url'),
            'headers' => $this->getDefaultHeaders(),
        ]);
    }

    /**
     * Get default headers for Client.
     *
     * @return array
     */
    public function getDefaultHeaders()
    {
        return [
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Get all money manager data.
     *
     * @param  string $endpoint
     * @param  array  $params
     * @return array
     */
    public function getAll($endpoint, $params = [])
    {
        return $this->get($endpoint, $params);
    }

    /**
     * Get money manager data by ID.
     *
     * @param  string $endpoint
     * @param  int    $id
     * @param  array  $params
     * @return array
     */
    public function getByID($endpoint, $id, $params = [])
    {
        return $this->get($endpoint.'/'.$id, $params);
    }

    /**
     * Create new money manager data.
     *
     * @param  string $endpoint
     * @param  array  $data
     * @return array
     */
    public function createNew($endpoint, $data)
    {
        return $this->post($endpoint, $data);
    }

    /**
     * Update money manager data by ID.
     *
     * @param  string $endpoint
     * @param  int    $id
     * @param  array  $data
     * @return array
     */
    public function updateByID($endpoint, $id, $data)
    {
        return $this->put($endpoint.'/'.$id, $data);
    }

    /**
     * Delete money manager data by ID.
     *
     * @param  string $endpoint
     * @param  int    $id
     * @return array
     */
    public function deleteByID($endpoint, $id)
    {
        return $this->delete($endpoint.'/'.$id);
    }
}
