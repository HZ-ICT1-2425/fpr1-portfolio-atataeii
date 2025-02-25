<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function home() {
        return view('statics-pages.home');
    }

    public function profile() {
        return view('statics-pages.profile');
    }

    public function dashboard() {
        return view('statics-pages.dashboard');
    }

    public function faq() {
        return view('statics-pages.faq');
    }

}
