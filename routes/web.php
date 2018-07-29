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



//Route::resource('login','UserController');

Route::get('/', function () {
    return view('site.pages.home');
});
Route::get('/gallery', function () {
    return view('site.pages.gallery');
});


Route::get('/login', 'UserController@login');
Route::get('/signup', 'UserController@signup');
Route::get('/forget-password', 'UserController@forgetPassword');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/clients','AdminController@clients');
Route::get('/clients/create','AdminController@clientsCreate');
Route::get('/invoice','AdminController@invoice');
Route::get('/invoice/create','AdminController@invoiceCreate');

// Route::get('/signup', function () {
//     return view('login.pages.signup');
// });
// Route::get('/forget-password', function () {
//     return view('login.pages.forget-password');
// });
// Route::get('/dashboard', function () {
//     return view('admin.pages.dashboard');
// });
// Route::get('/clients', function () {
//     return view('admin.pages.clients.index');
// });
// Route::get('/clients/create', function () {
//     return view('admin.pages.clients.create');
// });
// Route::get('/invoice', function () {
//     return view('admin.pages.invoice.index');
// });
// Route::get('/invoice/create', function () {
//     return view('admin.pages.invoice.create');
// });
