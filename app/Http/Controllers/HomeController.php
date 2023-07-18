<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function displayHomepage() {
        $newArrivals = DB::select('SELECT * FROM public.products ORDER BY updated_at LIMIT 4');
        return view('pages.homepage', ['newArrivals'=>$newArrivals]);
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
