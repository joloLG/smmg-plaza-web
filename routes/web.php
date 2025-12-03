<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('auth.login'); // Redirect root to login
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Main Dashboard Redirect
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // USER ROUTES
    Route::get('/user/home', [UserController::class, 'userHome'])->name('user.home');
    Route::get('/user/chatbot', [UserController::class, 'chatbot'])->name('user.chatbot');
    Route::get('/user/appointment', [UserController::class, 'appointment'])->name('user.appointment');
    Route::post('/user/appointment', [UserController::class, 'storeAppointment']);
    Route::get('/user/history', [UserController::class, 'history'])->name('user.history');
    Route::get('/user/about', [UserController::class, 'about'])->name('user.about');
});

// ADMIN ROUTES
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/appointments', [AdminController::class, 'showAppointments'])->name('admin.appointments');
    Route::get('/admin/appointment_details/{id}', [AdminController::class, 'appointmentDetails']);
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::post('/admin/send_email/{id}', [AdminController::class, 'sendEmail']);
});

require __DIR__.'/auth.php';