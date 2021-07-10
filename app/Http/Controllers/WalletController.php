<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MoneyManager;
use App\Http\Controllers\Controller;

class WalletController extends Controller
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
        $this->endpoint = 'wallet';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets = $this->moneymanager->getAll($this->endpoint);

        return view('wallet.index', compact('wallets'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTransaction($id)
    {
        $transactions = $this->moneymanager->getAll('transaction-detail', 'wallet='.$id);

        return view('.wallet.transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wallet.create');
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
            return redirect()->route('wallet.create')->withInput($request->all());
        }

        return redirect()->route('wallet.index')->with('alert', [
            'color' => 'success',
            'icon' => 'check-circle',
            'message' => 'Wallet successfully added!',
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
        $wallet = $this->moneymanager->getByID($this->endpoint, $id);

        return view('wallet.show', compact('wallet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wallet = $this->moneymanager->getByID($this->endpoint, $id);

        return view('wallet.edit', compact('wallet'));
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
            return redirect()->route('wallet.edit', $id)->withInput($request->all());
        }

        return redirect()->route('wallet.index')->with('alert', [
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
