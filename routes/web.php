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

Auth::routes();

/*Admin Phase*/
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('category','CategoryController');

Route::resource('brand','BrandController');

/*End Admin Phase*/
Route::get('product', function () {
    return view('User.product');
});

Route::get('user/category', function () {
    return view('User.category');
});

Route::get('master', function () {
    return view('User.master');
});

Route::get('homepage', function () {
    return view('User.homepage');
});

Route::get('checkout', function () {
    return view('User.checkout');
});

Route::get('checkoutregister', function () {
    return view('User.checkout_register');
});

Route::get('productcompare', function () {
    return view('User.product_compare');
});

Route::get('contact', function () {
    return view('User.contact');
});

Route::get('track', function () {
    return view('User.track');
});

Route::get('login', function () {
    return view('User.login');
});


Route::get('cart', function () {
    return view('User.cart');
});

Route::get('profile', function () {
    return view('User.profile');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user','UserController@index')->name('user');
