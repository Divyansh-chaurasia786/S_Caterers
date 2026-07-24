<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::post('/services/inquiry', [HomeController::class, 'submitInquiry'])->name('services.inquiry');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::post('/contact/submit', [HomeController::class, 'submitContact'])->name('contact.submit');

// Admin Gallery Routes
Route::get('/admin/gallery', [HomeController::class, 'adminGallery'])->name('admin.gallery');
Route::post('/admin/gallery/login', [HomeController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/gallery/logout', [HomeController::class, 'adminLogout'])->name('admin.logout');
Route::get('/admin/gallery/cloudinary-signature', [HomeController::class, 'getCloudinarySignature'])->name('admin.signature');
Route::post('/admin/gallery/save-media', [HomeController::class, 'saveCloudinaryMedia'])->name('admin.save-media');
Route::get('/admin/gallery/export-db', [HomeController::class, 'exportDatabaseBackup'])->name('admin.export-db');
Route::post('/admin/gallery/upload', [HomeController::class, 'adminUpload'])->name('admin.upload');

Route::post('/admin/gallery/update/{id}', [HomeController::class, 'adminUpdate'])->where('id', '.*')->name('admin.update');
Route::post('/admin/gallery/delete/{id}', [HomeController::class, 'adminDelete'])->where('id', '.*')->name('admin.delete');
Route::post('/admin/gallery/bulk-delete', [HomeController::class, 'adminBulkDelete'])->name('admin.bulk-delete');


