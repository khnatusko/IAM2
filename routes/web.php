<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrzedmiotyController;
use App\Http\Controllers\WiedzaController;
use App\Http\Controllers\UczniowieController;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/przedmioty', function () {
    return view('przedmioty');
});
Route::get('/wiedza', function () {
    return view('wiedza');
});

Route::get('/uczniowie', function () {
    return view('uczniowie');
});

Route::get('/kurs', function () {
    return view('kurs');
});

Route::get('/kurslist', function () {
    return view('kurslist');
});

Route::get('przedmioty', [App\Http\Controllers\PrzedmiotyController::class, 'index']);
Route::post('/przedmioty',[App\Http\Controllers\PrzedmiotyController::class,'createPrzedmioty']);

Route::get('wiedza', [App\Http\Controllers\WiedzaController::class, 'index']);
Route::post('/wiedza',[App\Http\Controllers\WiedzaController::class,'createWiedza']);

Route::get('uczniowie', [App\Http\Controllers\UczniowieController::class, 'index']);
Route::post('/uczniowie',[App\Http\Controllers\UczniowieController::class,'createUczen']);

Route::get('kurs', [App\Http\Controllers\KursController::class, 'index']);
Route::post('/kurs',[App\Http\Controllers\KursController::class,'createKurs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
