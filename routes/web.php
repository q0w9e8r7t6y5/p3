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

//Route::get('/order', function () {
////    return 'form is working';
//    return ($_GET);
//});

Route::get('/', 'FormController@search'); # <-- NEW 1 of 2
Route::get('order', 'FormController@searchProcess'); # <-- NEW 2 of 2

