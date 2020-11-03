<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    //return env('APP_NAME');
    //return view('welcome');
    return View::make('welcome');
});

Route::get('/Hello',function(){
    return view('home');
});

Route::get('/user','UserController@index');

Route::post('/upload','UserController@uploadImage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
