<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contacts', function () {return view('pages.contacts');});
Route::get('/about', function () {return view('pages.about');});
Route::get('/faqs', function () {return view('pages.faqs');});
Route::get('/about-me', function () {return view('pages.about-me');});
Route::get('/catalog', function () {return view('pages.catalog');});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Отображение формы для добавления товара
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Сохранение нового товара
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/catalog/{slug}', [ProductController::class, 'showByCategorySlug'])->name('catalog.pages');
