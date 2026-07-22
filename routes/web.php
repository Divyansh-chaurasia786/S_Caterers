<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InquiryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::post('/inquiries-submit', [InquiryController::class, 'store'])->name('inquiries.store');
