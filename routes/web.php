<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contacts', function () {return view('pages.contacts');});
Route::get('/about', function () {return view('pages.about');});
Route::get('/faqs', function () {return view('pages.faqs');});
Route::get('/about-me', function () {return view('pages.about-me');});
Route::get('/shop-category', function () {return view('pages.shop-category');});
