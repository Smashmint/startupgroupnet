<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'sendContactRequest'])->name('contact.post');


Route::get('companies/new-and-co', [CompanyPageController::class, 'newandco'])->name('company.newandco');