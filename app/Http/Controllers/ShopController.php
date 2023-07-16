<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    public function displayShop(string $category=null) {
        if(!$category) {
            $allProducts = DB::select('SELECT * FROM public.products');
        }
        else if ($category) {
            $allProducts = DB::select('SELECT * FROM public.products WHERE category = :category', ['category'=>$category]);
        }
        
        return view('pages.shop', ['products'=>$allProducts]);
    }
}
