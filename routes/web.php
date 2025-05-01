<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Models\Service;
use App\Models\Booking;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/home'); // Jika sudah login, direct ke home
    }
    return redirect('/login'); // Jika belum login, direct ke login
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('forgot');
Route::post('/forgot-password', [AuthController::class, 'sendReset'])->name('forgot.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//user after login
Route::middleware('auth')->group(function () {
    //home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');

    //petcare
    Route::get('/care', function () {
        $services = Service::all();
        $bookings = Booking::all(); // atau filter sesuai kebutuhan
        return view('pages.care', compact('services', 'bookings'));
    })->name('care');

    //booking
    Route::get('/booking', [BookingController::class, 'show'])->name('booking.show');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/booking/{id}/delete', [BookingController::class, 'destroy'])->name('booking.destroy');

    //booking(Admin)
    Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings');
    Route::post('/admin/bookings/{id}/status', [BookingController::class, 'updateStatus'])->name('admin.booking.updateStatus');

    //blog
    Route::get('/blog', function () {
        return view('pages.blog');
    })->name('blog');

    //contactus
    Route::get('/contactus', function () {
        return view('pages.contact');
    })->name('contact');

    //shop
    Route::get('/shop', [ProductController::class, 'index'])->name('pages.shop');
    Route::post('/checkout', [PurchaseController::class, 'checkout'])->name('checkout');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
});