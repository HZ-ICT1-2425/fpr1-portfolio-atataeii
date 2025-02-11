<?php

use App\Http\Controllers\StaticContentController;

Route::get('/home', [StaticContentController::class, 'home'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');
Route::get('/blog', [StaticContentController::class, 'blog'])->name('blog');

