<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function displayHomepage() {
        return view('pages.homepage');
    }    

    public function displayShowcase() {
        return view('pages.showcase');
    }

    public function displayBlog() {
        return view('pages.blog');
    }

    public function displayAbout() {
        return view('pages.about');
    }

    public function displayMask() {
        return view('pages.homepage');
    }
}
