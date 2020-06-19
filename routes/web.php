<?php

use Illuminate\Http\Request;
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
// Route::middleware('auth')->group(function() {//using a middleware to call the auth function



Route::resource('/todo', 'TodoController');

Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');

Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');

// });




Route::get('/', function () {
    return view('welcome');
        });
Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();