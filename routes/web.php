<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/todos','TodoController@index');

Route::get('/todos/create',"TodoController@create");

Route::get('/todos/edit',"TodoController@edit");

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
