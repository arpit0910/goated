<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\DanceClassController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/checkout/success/{booking}', [\App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/payment/{booking}', [\App\Http\Controllers\CheckoutController::class, 'payment'])->name('checkout.payment');
Route::get('/checkout/{class}/{price}', [\App\Http\Controllers\CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout/{class}/{price}', [\App\Http\Controllers\CheckoutController::class, 'process'])->name('checkout.process');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('faqs', FaqController::class);
        Route::resource('classes', DanceClassController::class);
        Route::resource('enquiries', EnquiryController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('students', StudentController::class);
        Route::resource('testimonials', TestimonialController::class);
    });
});
