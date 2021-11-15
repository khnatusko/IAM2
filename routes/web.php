<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrzedmiotyController;
use App\Http\Controllers\WiedzaController;
use App\Http\Controllers\UczniowieController;
use App\Http\Controllers\NauczycieleController;
use App\Http\Controllers\KursController;



Route::get('/', function () {
    return view('auth.login');
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

Route::get('przedmioty', [App\Http\Controllers\PrzedmiotyController::class, 'getNauczyciel']);
Route::post('/przedmioty',[App\Http\Controllers\PrzedmiotyController::class,'createPrzedmioty']);

Route::get('wiedza', [App\Http\Controllers\WiedzaController::class, 'index']);
Route::post('/wiedza',[App\Http\Controllers\WiedzaController::class,'createWiedza']);


Route::post('/uczniowie',[App\Http\Controllers\UczniowieController::class,'createUczen']);

Route::get('kurs', [App\Http\Controllers\UczniowieController::class, 'getUczen', ]);
Route::post('/kurs',[App\Http\Controllers\KursController::class,'createKurs']);

//Route::get('kurslist', [App\Http\Controllers\KursController::class, 'getKurs'])->name('downloadkurs');
//Route::get('kurslist' ,[App\Http\Controllers\KursController::class, 'destroy'])->name('delete');

Route::resource('kurslist', KursController::class);
//Route::post('destroy', [App\Http\Controllers\KursController::class, 'destroy']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
