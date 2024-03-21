<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloName;
use App\Http\Controllers\Operations;
use App\Http\Controllers\TableProduct;
use App\Http\Controllers\ListData;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}/{lastName}', [HelloName::class,'showFullName']);

Route::get('/operation/sum/{number1}/{number2}', [Operations::class,'Sum']);

Route::get('/operation/subtraction/{number1}/{number2}', [Operations::class,'subtraction']);

Route::get('/operation/division/{number1}/{number2}', [Operations::class,'division']);

Route::get('/operation/multiplication/{number1}/{number2}', [Operations::class,'multiplication']);

Route::get('/userData/{name}/{lastName}/{age}/{rm}/{gender}/{adress}',[ListData::class,'showData']);

Route::get('/products',[TableProduct::class,'addProduct']);










