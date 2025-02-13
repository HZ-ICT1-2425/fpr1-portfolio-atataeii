<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function blog() {
        return view('blog');
    }
    public function studyChoice() {
        return view('blog.study-choice');
    }
    public function swot() {
        return view('blog.swot');
    }
    public function programmingExperience() {
        return view('blog.programming-experience');
    }
    public function feedback() {
        return view('blog.feedback');
    }
    public function cloudConnected() {
        return view('blog.cloud-connected');
    }
    public function ciscoSystems() {
        return view('blog.cisco-systems');
    }
}
