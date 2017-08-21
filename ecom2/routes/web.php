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



/*Route::get('/' , function () {
    return view('welcome');
});*/


use Illuminate\Support\Facades\Route;

Route::get('/','FrontController@index')-> name('home');
Route::get('/products','FrontController@products')-> name('products');
Route::get('/showproduct','FrontController@showproduct')-> name('showproduct');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\loginController@logout');
Route::group(['prefix'=> 'admin' ,'middleware'=>'auth'] , function(){
    Route::get('/',function(){
        return view('admin.index');
    }) ->name('admin.index');

    Route::resource('cart','CartController');





Route::resource('product','ProductsController');

Route::resource('category','CategoriesController');
});