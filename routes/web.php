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
    return view('index');
});

Route::get('/login.html', function () {
    return view('login');
});
Route::get('/user.html', function () {
    return view('user');
});
Route::get('/add-address.html', function () {
    return view('add-address');
});
Route::get('/address.html', function () {
    return view('address');
});
Route::get('/car.html', function () {
    return view('car');
});
Route::get('/index(logined).html', function () {
    return view('index(logined)');
});
Route::get('/login.html', function () {
    return view('login');
});
Route::get('/modify.html', function () {
    return view('modify');
});
Route::get('/order.html', function () {
    return view('order');
});
Route::get('/pay.html', function () {
    return view('pay');
});
Route::get('/proinfo.html', function () {
    return view('proinfo');
});
Route::get('/reg.html', function () {
    return view('reg');
});
Route::get('/success.html', function () {
    return view('success');
});
Route::get('/time.html', function () {
    return view('time');
});
Route::get('/tixian.html', function () {
    return view('tixian');
});
