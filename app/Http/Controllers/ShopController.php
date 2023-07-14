<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    public function displayShop() {
        $allProducts = DB::select('SELECT * FROM public.products');
        return view('pages.shop', ['products'=>$allProducts]);
    }
}
