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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@trangchu')->name('home');
Route::get('/theloai', 'HomeController@theloai')->name('theloai');
Route::get('/baiviet', 'HomeController@baiviet')->name('baiviet');
Route::get('/lienhe', 'HomeController@lienhe')->name('lienhe');
Route::get('/gioithieu', 'HomeController@gioithieu')->name('gioithieu');


Route::prefix('admin')
    ->as('admin.')
    ->namespace('Admin')->group(function () {

        Route::get('/index', 'HomeController@index')->name('dashboard');
        Route::get('posts/gioi-thieu', 'PostController@gioiThieu')->name('gioi_thieu');
        Route::get('posts/lien-he', 'PostController@lienHe')->name('lien_he');
        Route::resource('posts', 'PostController');
    });

