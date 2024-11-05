<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PasswordProtectedPageController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/contacts', function () {return view('pages.contacts');});
Route::get('/about', function () {return view('pages.about');});
Route::get('/faqs', function () {return view('pages.faqs');});
Route::get('/about-me', function () {return view('pages.about-me');});
Route::get('/catalog', function () {return view('pages.catalog');});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Отображение формы для добавления товара
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Проверка пароля
Route::get('/products/password', [PasswordProtectedPageController::class, 'showForm'])->name('products.password.form');
Route::post('/products/password', [PasswordProtectedPageController::class, 'checkPassword'])->name('products.password.check');
Route::post('/products/logout', [PasswordProtectedPageController::class, 'logout'])->name('products.password.logout');
// Сохранение нового товара
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/catalog/{slug}', [ProductController::class, 'showByCategorySlug'])->name('catalog.pages');

Route::get('/products/details', function () {return view('products.details');});
