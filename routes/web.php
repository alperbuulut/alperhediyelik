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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'PostController@index')->name('guest.index');
Route::get('about', 'PostController@about')->name('guest.about');
Route::get('contact', 'PostController@contact')->name('guest.contact');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

//
Route::get('/category/{slug}','PostController@indexCatBased')->name('category.show');


Route::group(['middleware' => 'auth'], function () {

    //THIS PART PROVIDES PRODUCT PROCESSES FOR AUTH USERS
    Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::get('products/show/{id}', 'ProductController@show')->name('products.show');
    Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('products/{id}', 'ProductController@update')->name('products.update');
    Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
    Route::post('products', 'ProductController@store')->name('products.store');

    //THIS PART PROVIDES CATEGORY PROCESSES FOR AUTH USERS
    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/show/{id}', 'CategoryController@show')->name('categories.show');
    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::put('categories/{id}', 'CategoryController@update')->name('categories.update');
    Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
    Route::post('categories', 'CategoryController@store')->name('categories.store');

});