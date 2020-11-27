<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'posts');

Route::get('normal', [PostController::class, 'index']);
