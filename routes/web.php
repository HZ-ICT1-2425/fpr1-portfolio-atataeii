<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FaqController;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [StaticContentController::class, 'home'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/faq/create', [FaqController::class, 'create']);
Route::post('/faqs', [FaqController::class, 'store']);
Route::get('/faq/{id}/edit', [FaqController::class, 'edit']);
Route::put('/faq/{post}', [FaqController::class, 'update']);
Route::delete('/faq/{post}', [FaqController::class, 'destroy']);


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

