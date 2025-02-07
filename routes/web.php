<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/firstFeedBack', function () {
    return view('firstFeedBack');
})->name('firstFeedBack');

Route::get('/firstWork', function () {
    return view('firstWork');
})->name('firstWork');

Route::get('/pdfFile', function () {
    return view('pdfFile');
})->name('pdfFile');

Route::get('/personalSowatAnalysis', function () {
    return view('personalSowatAnalysis');
})->name('personalSowatAnalysis');

Route::get('/programmingEx', function () {
    return view('programmingEx');
})->name('programmingEx');

Route::get('/secondWork', function () {
    return view('secondWork');
})->name('secondWork');

Route::get('/studyChoice', function () {
    return view('studyChoice');
})->name('studyChoice');
