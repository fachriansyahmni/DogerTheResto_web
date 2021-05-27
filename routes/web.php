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

Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::middleware('role:pelayan')->get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', function () {
    return 'Dashboard';
})->name('dashboard');


// for admin
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
});

// for cashier
Route::group(['prefix' => 'cashier', 'middleware' => 'role:cashier'], function () {
});

// for waiter
Route::group(['prefix' => 'waiter', 'middleware' => 'role:waiter'], function () {
});

// for koki
Route::group(['prefix' => 'chef', 'middleware' => 'role:chef'], function () {
});
