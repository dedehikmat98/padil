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

Route::get('/merek', function () {
    return view('front/merek');
});
Route::get('/merek/{id}', array ('as' => 'showperkategori' ,'uses' => 'FrontendController@showperkategori'));


Route::get('/tipe', function () {
    return view('front/tipe');
});

Route::get('/about', function () {
    return view('front/about');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:adminbesar']], function(){	

Route::resource('User', 'AkunController');
Route::resource('Motor', 'MotorrrController');
Route::resource('Keterangan', 'KettController');

Route::resource('Merek', 'MerrekController');
Route::resource('Tipe', 'TippeController');
Route::resource('', 'TippeController');



});

