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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/{name}', function ($name) {
//     return "สวัสดี user $name ";
// });

// Route::get('/บวกเลข/{num1}/{num2}', function ($num1, $num2) {
//     return $num1 + $num2;
// });

// Route::get("/showdetail/{nu1}/{nu2}/{nu3}", function ($nu1,$nu2,$nu3) {
//     return "สวัสดี $nu1 คุณมีอายุ $nu2  และคุณพูดว่า$nu3";
// });

Route::get('/', 'HomeController@index');
Route::get('greeting/{name}', 'HomeController@greeting');
Route::get('calculator/{num1}/{num2}/{num3}', 'HomeController@calculator');

Route::get('user', 'UserController@index');
Route::get('user/show/{id}', 'UserController@show');
Route::get('user/show/update/{id1}', 'UserController@update');

Route::get('/todo','TodoController@index');
Route::get('todo/show/{id}','TodosController@show');
Route::get('todo/delete/{id}','TodosController@delete');
