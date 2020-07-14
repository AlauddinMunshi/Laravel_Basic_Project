<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('welcome');
});

Route::get('/home','HomeController@home');
Route::get('/about','AboutController@about');
Route::get('/contact','HelloController@contact');
Route::get('/blog','BlogController@blog'); 
Route::get('/testHelloWorld','TestController@test1')->name('test1');



//Route::get('/about','HelloController@test');


