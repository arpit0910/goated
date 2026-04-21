<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/philosophy', [PageController::class, 'about'])->name('about');
Route::get('/training', [PageController::class, 'classes'])->name('classes');
Route::get('/wall-of-fame', [PageController::class, 'wallOfFame'])->name('wall-of-fame');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [PageController::class, 'contactSubmit'])->name('contact.submit');
