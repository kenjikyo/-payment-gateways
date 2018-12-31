<?php

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

Route::get('/', function () {
    return view('System.Layouts.Slide');
});


Route::get('login','Auth\LoginController@getLogin')->name('getLogin');
Route::get('forgot','Auth\ForgotPasswordController@getForgotPassword')->name('getForgotPassword');
Route::get('transfer','System\TransferController@getTransfer')->name('getTransfer');
Route::get('exchange','System\ExchangeController@getExchange')->name('getExchange');
Route::get('dashboard','System\DashboardController@getDashboard')->name('getDashboard');
Route::get('profile','System\ProfileController@getProfile')->name('getProfile');
Route::get('manage','System\ManageController@getManage')->name('getManage');
Route::get('wallet','System\WalletController@getWallet')->name('getWallet');