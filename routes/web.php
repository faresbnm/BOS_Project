<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routing;
use App\Http\Controllers\sendMail;


Route::get('/', [routing::class, 'home']);
Route::get('/about', [routing::class, 'about']);
Route::get('/services', [routing::class, 'services']);
Route::get('/contact', [routing::class, 'contact']);
Route::post('/', [sendMail::class, 'send'])->name('contact');

