<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes - S. Caterers Web Application
|--------------------------------------------------------------------------
|
| Here is where all application routes are registered.
| Built for Laravel + Serverless Vercel Deployment.
| Primary Contact: Amit Agarwal | S. Caterers (Lucknow, UP)
|
*/

// =========================================================================
// PUBLIC CLIENT ROUTES
// =========================================================================

// Homepage - Main showcase, hero video, stats, featured offerings
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us - Brand history (1998-present), 100% Pure Veg integrity, team credentials
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Services - Package menus (Silver, Gold, Royal, VIP), live counters, event selector, inquiry form
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::post('/services/inquiry', [HomeController::class, 'submitInquiry'])->name('services.inquiry');

// Contact - Office address (Sachan Complex, Krishna Nagar), phone, email, contact form, Google Map
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [HomeController::class, 'submitContact'])->name('contact.submit');

// Live Media Gallery - Real-time Cloudinary API + SQLite fallback view
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

// =========================================================================
// ADMIN GALLERY DASHBOARD & MEDIA MANAGEMENT ROUTES
// =========================================================================

// Admin Dashboard View (Renders password modal if not authenticated via session/cookie)
Route::get('/admin/gallery', [HomeController::class, 'adminGallery'])->name('admin.gallery');

// Admin Authentication Handler
Route::post('/admin/gallery/login', [HomeController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/gallery/logout', [HomeController::class, 'adminLogout'])->name('admin.logout');

// Cloudinary Direct Upload & Signature Helpers
Route::get('/admin/gallery/cloudinary-signature', [HomeController::class, 'getCloudinarySignature'])->name('admin.signature');
Route::post('/admin/gallery/save-media', [HomeController::class, 'saveCloudinaryMedia'])->name('admin.save-media');

// Database SQL Export for Hostinger / MySQL Backups
Route::get('/admin/gallery/export-db', [HomeController::class, 'exportDatabaseBackup'])->name('admin.export-db');

// Local & Cloud Media Upload Controller Handler
Route::post('/admin/gallery/upload', [HomeController::class, 'adminUpload'])->name('admin.upload');

// Media CRUD Management Operations
Route::post('/admin/gallery/update/{id}', [HomeController::class, 'adminUpdate'])->where('id', '.*')->name('admin.update');
Route::post('/admin/gallery/delete/{id}', [HomeController::class, 'adminDelete'])->where('id', '.*')->name('admin.delete');
Route::post('/admin/gallery/bulk-delete', [HomeController::class, 'adminBulkDelete'])->name('admin.bulk-delete');



