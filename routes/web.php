<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\RouteGroup;

//use App\Http\Controllers\LoginController;

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
    return view('landing-page');
});

Route::get('/home', function () {
    return view('coba.hello');
});


    //Route Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/registerStore', [RegisterController::class, 'store'])->name('registerStore');

    //Route Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/loginAuth',[LoginController::class,'auth'])->name('auth');




    Route::get('/index', [HelloController::class, 'index'])->name('index');
    Route::get('/about', [HelloController::class, 'getAbout'])->name('about');
    Route::get('/indexEditActivity/{id}', [HelloController::class, 'indexEditActivity'])->name('indexEditActivity');
    Route::post('/updateActivity/{id}', [HelloController::class, 'updateActivity'])->name('updateActivity');
    Route::get('/destroyActivity/{id}', [HelloController::class, 'destroyActivity'])->name('destroyActivity');
    //logout
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    Route::post('/storeActivity', [HelloController::class, 'storeActivity'])->name('storeActivity');
    Route::get('/indexActivity', [HelloController::class, 'indexActivity'])->name('indexActivity');




