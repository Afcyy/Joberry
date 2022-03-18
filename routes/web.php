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
    return view('index');
});

Route::view('/', 'index');
Route::view('/companies', 'companies');
Route::view('/jobinfo', 'jobinfo');
Route::view('/login', 'login');
Route::view('/profile', 'profile');
Route::view('/register', 'register');
Route::view('/users', 'users');
Route::view('/vacancies', 'vacancies');
