<?php

use App\Http\Controllers\StaticPagesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/', [StaticPagesController::class, 'home']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/help', [StaticPagesController::class, 'help']);
