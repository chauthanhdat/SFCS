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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/client', 'client.pages.index');

Route::view('/admin/vendor', 'admin.vendor.pages.index');

Route::group(['prefix' => 'admin/vendor'], function() {
    Route::resource('category', 'CategoryController');
});

Route::view('/admin/foodcourt', 'admin.foodcourt.pages.index');

// Route::group(['prefix' => 'vendor'], function () {
//     Route::resource('category', 'CategoryController');
// });
