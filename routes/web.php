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
//     return view('index');
// });
// Route::get('/comparecampus', function () {
//     return view('comparecampus');
// });
Route::get('/', 'App\Http\Controllers\Campus@index');
Route::post('/comparecampus', 'App\Http\Controllers\Campus@comparecampus');
Route::get('/alldata', 'App\Http\Controllers\Campus@alldata');
Route::get('/campus/add_data', 'App\Http\Controllers\Campus@create');
Route::get('/edit/{id}', 'App\Http\Controllers\Campus@edit');
Route::post('/campus/update', 'App\Http\Controllers\Campus@update');
Route::post('/campus/delete/{id}', 'App\Http\Controllers\Campus@delete');
Route::post('/campus/save', 'App\Http\Controllers\Campus@save');