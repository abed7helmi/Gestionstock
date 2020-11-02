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
})->middleware('auth')->name('home');

Route::post('demandes',[\App\Http\Controllers\DemandeController::class,'store']);
Route::get('list',[\App\Http\Controllers\DemandeController::class,'list'])->middleware('auth')->name('list');
 

Route::get('home', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Route::post('register"', function () {
    return view('/register"');
});