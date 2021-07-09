<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MoneyManager;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $moneymanager;
    protected $endpoint;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MoneyManager $moneymanager)
    {
        $this->moneymanager = $moneymanager;
        $this->endpoint = 'category';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->moneymanager->getAll($this->endpoint);
        $transactionTypes = $this->moneymanager->getAll('transaction-type');

        return view('category.index', compact('categories', 'transactionTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transactionTypes = $this->moneymanager->getAll('transaction-type');

        return view('category.create', compact('transactionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moneymanager = $this->moneymanager->createNew($this->endpoint, $request->all());

        if ($moneymanager['status'] == 'error') {
            return redirect()->route('category.create')->withInput($request->all());
        }

        return redirect()->route('category.index')->with('alert', [
            'color' => 'success',
            'icon' => 'check-circle',
            'message' => 'Category successfully added!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->moneymanager->getByID($this->endpoint, $id);
        $transactionTypes = $this->moneymanager->getAll('transaction-type');

        return view('category.show', compact('category', 'transactionTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->moneymanager->getByID($this->endpoint, $id);
        $transactionTypes = $this->moneymanager->getAll('transaction-type');

        return view('category.edit', compact('category', 'transactionTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $moneymanager = $this->moneymanager->updateByID($this->endpoint, $id, $request->all());

        if ($moneymanager['status'] == 'error') {
            return redirect()->route('category.edit', $id)->withInput($request->all());
        }

        return redirect()->route('category.index')->with('alert', [
            'color' => 'success',
            'icon' => 'check-circle',
            'message' => 'Wallet successfully added!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->moneymanager->deleteByID($this->endpoint, $id);
    }
}
