<?php

use Faker\Guesser\Name;
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
    $comics=config('comics');
    return view('homepage',compact('comics'));
})->name("homepage");

Route::get('/product', function () {
    $comics=config('comics');
    return view('product',compact('comics'));
})->name("product");
