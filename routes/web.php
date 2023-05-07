<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// PostsController all method routs
Route::resource('/blog', PostsController::class);



// PagesController index method route
Route::get('/', [PagesController::class, 'index']);



// Auth class that contain all routes to auth system that we added by laravel ui and usin laravel bootstrap
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
