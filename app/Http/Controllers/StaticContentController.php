<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function home() {
        return view('statics.home');
    }
    public function profile() {
        return view('statics.profile');
    }
    public function dashboard() {
        return view('statics.dashboard');
    }
    public function faq() {
        return view('statics.faq');
    }
    public function blog() {
        return view('statics.blog');
    }
}
