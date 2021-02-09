<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', "PostController@index");
Route::get('home', "PostController@index");



Auth::routes();
Route::resource('post',"PostController");

Route::get("reserved","PostController@admin")->middleware("can:admin,get")->name("admin.show");


