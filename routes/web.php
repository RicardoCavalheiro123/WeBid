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
// Home
Route::get('/', 'HomeController@home')->name('/');

// API

// Users
Route::get('/profile/{id}', 'UserController@show');

//Others
Route::get('FAQs', 'FAQController@faqs')->name('FAQs');

// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Search
Route::get('/search/api', 'SearchController@getSearchResultsJson');
Route::get('/search', 'SearchController@home')->name('search');
Route::get('/auction/{id}','AuctionController@show');

Route::get('/search/api', 'SearchController@getSearchResultsJson');
Route::get('/search', 'SearchController@home')->name('search');
Route::get('/search/{category}', 'SearchController@homeCatgorySearch')->name('catgorySearch');
