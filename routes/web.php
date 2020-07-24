<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumController;
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
    return view('start');
});
Route::get('calculate', function () {
    return view('calculate');
});

Route::post('calculate', 'SumController@store')->name('calculate');
