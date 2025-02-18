<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function home() {
        return view('staticsPages.home');
    }

    public function profile() {
        return view('staticsPages.profile');
    }

    public function dashboard() {
        return view('staticsPages.dashboard');
    }

    public function faq() {
        return view('staticsPages.faq');
    }

}
