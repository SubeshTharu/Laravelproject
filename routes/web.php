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
});

//Route::get('/example/{first}/{second}', function($first, $second) {
//    $mul = $first * $second;
//    return view('example', ['first' => $first, 'second' => $second, 'mul' => $mul]);
//});
//
//Route::get('/replace/{first}/{second}', function ($first, $second) {
//    $sentence = 'hello world with hello everywhere hello!';
//    $replacedSentence = str_replace($first,$second, $sentence);
//    return view('demo', compact('sentence', 'replacedSentence'));
//});

//Route::get('/form', [\App\Http\Controllers\HomeController::class, 'create'])->name('get-form');
//Route::post('/sum', [\App\Http\Controllers\HomeController::class, 'sum'])->name('sum-of-numbers');


//Route::get('/form',[\App\Http\Controllers\HomeController::class,'form']);
//Route::post('/form',[\App\Http\Controllers\HomeController::class,'form']);

Route::get('/register', [\App\Http\Controllers\UserController::class,'create'])->name('register-form');
Route::post('/register', [\App\Http\Controllers\UserController::class,'store'])->name('register');
