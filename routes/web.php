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

Route::redirect('/', '/accounts');

Route::resource('/accounts', App\Http\Controllers\AccountController::class);
Route::get('/accounts/{account}/transactions/create-credit', [App\Http\Controllers\TransactionController::class, 'createCredit'])->name('credit');
Route::post('/accounts/{account}/transactions/credit', [App\Http\Controllers\TransactionController::class, 'credit'])->name('transactions.credit');
Route::post('/accounts/{account}/transactions/credit', [App\Http\Controllers\TransactionController::class, 'credit'])->name('transactions.credit');
Route::resource('/accounts/{account}/debit', App\Http\Controllers\DebitController::class);
Route::resource('/accounts/{account}/transactions', App\Http\Controllers\TransactionController::class);
