<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;

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

Route::get('/hello', function () {
    return 'helloworld';
});

Route::resource('products', 'ProductController');

Auth::routes(['register' => false]);

Route::get('logout', 'Auth\LoginController@logout') -> name('logout');

Route::resource('transactions','TransactionController');
