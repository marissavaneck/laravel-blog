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
    return view('welcome');
});
Route::resource('/products', 'ProductController');
Route::get('/products/{product}/delete', 'ProductController@delete');
Route::resource('/reviews', 'ReviewController');
Route::get('/reviews/{review}/delete', 'ReviewController@delete');
//Route::get('/reviews/{reviews}')
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['role:owner|moderator|customer']], function () {
    Route::resource('/reviews', 'ReviewController');
    Route::get('/reviews/{review}/delete', 'ReviewController@delete');
});