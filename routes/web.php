<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/wallet/{id}/transaction', 'WalletController@indexTransaction')->name('wallet.transaction');
Route::resource('/wallet', 'WalletController');
Route::resource('/category', 'CategoryController');
Route::get('/transaction/income', 'TransactionController@indexIncome')->name('transaction.income');
Route::get('/transaction/expense', 'TransactionController@indexExpense')->name('transaction.expense');
Route::resource('/transaction', 'TransactionController');


