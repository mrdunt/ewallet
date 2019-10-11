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
    return view('login');
});


Route::resources([
    'transactions' => 'TransactionController',
    'users' => 'UserController'
]);

Route::get('/login',function(){
	return view('login');
});
Route::post('/','UserController@store')->name('users.store');
Route::post('/users/','UserController@login')->name('users.login');
Route::get('/logout','UserController@logout')->name('users.logout');
Route::get('/register','UserController@register')->name('users.register');

Route::get('/transfer','TransactionController@transfer')->name('users.transfer');
Route::post('/proccessTransfer/','TransactionController@proccessTransfer')->name('users.proccessTransfer');

Route::get('/topup','TransactionController@topup')->name('users.topup');
Route::post('/proccessTransfer/','TransactionController@proccessTopup')->name('users.proccessTopup');


