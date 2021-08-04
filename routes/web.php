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

Route::get('/landing', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/test', function () {
    return view('Berhasil');
});

// for admin
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin', 'as' => 'admin-'], function () {
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/registration', 'AdminController@registration')->name('registration');
    Route::post('/registration', 'AdminController@save')->name('save');
    Route::post('/registration/edit/{id}', 'AdminController@edit')->name('edit');
    Route::post('/registration/reset/{id}', 'AdminController@reset')->name('reset');
    Route::put('/registration/delete/{id}', 'AdminController@delete')->name('delete');
    Route::get('manage-user', 'AdminController@manageUser')->name('manage-user');
    Route::get('/restaurant-information', 'AdminController@indexInfo')->name('indexInfo');
    Route::get('manage-user', 'AdminController@manageUser')->name('manage-user');
    Route::get('/role', 'AdminController@role')->name('role');
    Route::post('/role', 'AdminController@roleSave')->name('role-save');
    Route::post('/role/edit/{id}', 'AdminController@roleEdit')->name('role-edit');
    Route::get('/role/delete/{id}', 'AdminController@roleDelete')->name('role-delete');
});

// for cashier
Route::group(['prefix' => 'cashier', 'middleware' => 'role:cashier'], function () {
});

// for waiter
Route::group(['prefix' => 'waiter', 'middleware' => 'role:pelayan', 'as' => 'waiter-'], function () {
    Route::get('/', 'HomeController@waiterIndex')->name('index');
    Route::get('/pemesanan', 'OrderController@pemesananIndex')->name('pemesanan-index');
});
Route::post('/pesanan-process', 'OrderController@konfirmasiOrder')->name('konfir-pesanan');

// for koki
Route::group(['prefix' => 'chef', 'middleware' => 'role:koki', 'as' => 'chef-'], function () {
    Route::get('/', 'HomeController@chefIndex')->name('index');
    Route::get('/daftar-pesanan', 'OrderController@listOrder')->name('order-list');
});

Route::group(['middleware' => 'auth'], function () {
    // Table
    Route::get('manage-table', 'TableController@manageTable')->name('manage.table');
    Route::post('manage-table', 'TableController@save')->name('manage.table.save');
    Route::post('manage-table/edit/{id}', 'TableController@edit')->name('manage.table.edit');
    Route::get('manage-table/delete/{id}', 'TableController@delete')->name('manage.table.delete');

    // Menu
    Route::get('manage-menu', 'MenuController@manageMenu')->name('manage.menu');
    Route::post('store-new-menu', 'MenuController@storeMenu')->name('store.menu');
    Route::patch('edit-menu/{idmenu}', 'MenuController@editMenu')->name('edit.menu');
    Route::delete('delete-menu/{idmenu}', 'MenuController@deleteMenu')->name('delete.menu');

    Route::get('manage-kategori', 'MenuKategoriController@index')->name('manage.menu-kategori');
    Route::post('store-new-menu-kategori', 'MenuKategoriController@store')->name('store.menu-kategori');
    Route::patch('edit-kategori/{idkategori}', 'MenuKategoriController@editKategori')->name('edit.kategori');
    Route::delete('delete-kategori/{idkategori}', 'MenuKategoriController@deleteKategori')->name('delete.kategori');
});
