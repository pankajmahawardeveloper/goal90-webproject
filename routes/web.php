<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactSender;

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

// front end view routes
Route::view('/','/front-end-view/index');
Route::view('about','/front-end-view/about');

// form sender purpose
Route::view('institute','/front-end-view/institute')->name('contact');
Route::post('/submit_form', [ContactSender::class, 'sendContactForm'])->name('submit_form');

Route::view('pte-voucher','/front-end-view/pte_voucher');
Route::view('pte','/front-end-view/pte');
Route::view('ielts','/front-end-view/ielts');
Route::view('duolingo','/front-end-view/duolingo');
Route::view('celpip','/front-end-view/celpip');