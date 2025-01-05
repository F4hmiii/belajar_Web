<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::view('/about', 'page_web.about');
Route::view('/service', 'page_web.service');
Route::view('/testimonial', 'page_web.testimonial');
Route::view('/blog', 'page_web.blog');
Route::view('/contact', 'page_web.contact');

Route::view('/dashboard', 'page_admin.dashboard.dashboard');