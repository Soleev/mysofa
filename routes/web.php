<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PasswordProtectedPageController;
use App\Http\Controllers\CallbackController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/contacts', function () {return view('pages.contacts');});
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/about', function () {return view('pages.about');});
Route::get('/faqs', function () {return view('pages.faqs');});
Route::get('/about-me', function () {return view('pages.about-me');});
Route::get('/catalog', function () {return view('pages.catalog');});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/all', [ProductController::class, 'showAllProducts']);
// Отображение формы для добавления товара
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/images/{id}', [ProductController::class, 'deleteImage']);
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// Проверка пароля
Route::get('/products/password', [PasswordProtectedPageController::class, 'showForm'])->name('products.password.form');
Route::post('/products/password', [PasswordProtectedPageController::class, 'checkPassword'])->name('products.password.check');
Route::post('/products/logout', [PasswordProtectedPageController::class, 'logout'])->name('products.password.logout');
// Сохранение нового товара
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/catalog/{slug}', [ProductController::class, 'showByCategorySlug'])->name('catalog.pages');
Route::get('/catalog/{category_slug}', [ProductController::class, 'showByCategorySlug'])->name('products.category');
Route::get('/catalog/{category_slug}/{product_slug}', [ProductController::class, 'showProduct'])->name('products.show');

Route::post('/save-callback', [CallbackController::class, 'store'])->name('save.callback');

