<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fe\home_controller;
use App\Http\Controllers\fe\login_controller;
use App\Http\Controllers\fe\signup_controller;
use App\Http\Controllers\fe\profile_controller;

Route::get('/', [home_controller::class, 'index']);
Route::get('/login', [login_controller::class, 'index']);
Route::post('/login', [login_controller::class, 'login']);
Route::get('/signup', [signup_controller::class, 'index']);
Route::post('/signup', [signup_controller::class, 'signup']);

Route::get('/profile/{uname}', [profile_controller::class, 'index']);