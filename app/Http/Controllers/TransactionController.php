<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MoneyManager;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
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
        $this->endpoint = 'transaction';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->moneymanager->getAll('category');
        $wallets = $this->moneymanager->getAll('wallet');

        return view('transaction.create', compact('categories', 'wallets'));
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
            return redirect()->route('transaction.create')->withInput($request->all());
        }

        return redirect()->route('dashboard')->with('alert', [
            'color' => 'success',
            'icon' => 'check-circle',
            'message' => 'Transaction successfully added!',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
