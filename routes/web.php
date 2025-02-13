<?php

use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\PostController;

Route::get('/home', [StaticContentController::class, 'home'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');
Route::get('/posts', [PostController::class, 'blog'])->name('blog');

Route::prefix('/posts')->group(function () {
   Route::get('study-choice', [PostController::class, 'studyChoice'])->name('study-choice');
   Route::get('swot', [PostController::class, 'swot'])->name('swot');
   Route::get('programming-experience', [PostController::class, 'programmingExperience'])->name('programming-experience');
   Route::get('feedback', [PostController::class, 'feedback'])->name('feedback');
   Route::get('cloud-connected', [PostController::class, 'cloudConnected'])->name('cloudConnected');
   Route::get('cisco-systems', [PostController::class, 'ciscoSystems'])->name('ciscoSystems');
});


