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

Route::get('/', 'GuestController@welcome');

Route::get('/login', 'GuestController@login')->name('login');
Route::post('/login', 'GuestController@loginPost');
Route::post('/logout', 'GuestController@logout')->name('logout');

Route::get('/password/change', 'HomeController@passwordChange')->name('password.change');
Route::post('/password/change', 'HomeController@passwordChangePost');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

	Route::get('/products/list', 'ProductController@datalist')->name('products.list');
	Route::resource('products', 'ProductController');
});
Route::prefix('images')->group(function() {
	Route::get('/welcome/slider/{image}', function($image) {
		$path = storage_path() . '/app/public/welcomeSlider/' . $image;
		if(file_exists($path))
		{
			return Response::file($path);
		}
		else
		{
			return '-';
		}
	})->name('img.welcomeSlider');

	Route::get('/product/{image}', function($image) {
		$path = storage_path() . '/app/public/product/' . $image;
		if(file_exists($path))
		{
			return Response::file($path);
		}
		else
		{
			return '-';
		}
	})->name('img.product');
});
