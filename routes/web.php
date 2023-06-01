<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\postharvestController;
use App\Http\Controllers\machineController;
use App\Http\Controllers\industryController;
use App\Http\Controllers\smsController;
use App\Http\Controllers\marketController;
use App\Http\Controllers\warehouseController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::get('/aboutus', [App\Http\Controllers\aboutusController::class, 'about'])->name('aboutus.about');
Route::get('/gallery', [App\Http\Controllers\galleryController::class, 'gallery'])->name('galleryone.gallery');
Route::get('/blog', [App\Http\Controllers\blogController::class, 'blog'])->name('blogside.blog');
Route::get('/service', [App\Http\Controllers\serviceController::class, 'service'])->name('ourservice.service');
Route::get('/postharvest', [App\Http\Controllers\postharvestController::class, 'postharvest'])->name('postharvestservice.postharvest');
Route::get('/machine', [App\Http\Controllers\machineController::class, 'machine'])->name('ourmachine.machine');
Route::get('/industry', [App\Http\Controllers\industryController::class, 'industry'])->name('industryservice.industry');
Route::get('/sms', [App\Http\Controllers\smsController::class, 'sms'])->name('smsservice.sms');
Route::get('/market', [App\Http\Controllers\marketController::class, 'market'])->name('marketservice.market');
Route::get('/warehouse', [App\Http\Controllers\warehouseController::class, 'warehouse'])->name('warehouses.warehouse');
