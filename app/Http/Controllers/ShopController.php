<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    public function displayShop(string $category=null) {
        if(!$category) {
            $allProducts = DB::select('SELECT * FROM public.products ORDER BY price ASC');
        }
        else if ($category) {
            $allProducts = DB::select('SELECT * FROM public.products WHERE category = :category ORDER BY price ASC', ['category'=>$category]);
        }
        
        return view('pages.shop', ['products'=>$allProducts]);
    }

    public function displayShopItem($id) {
        $product = DB::select('SELECT * FROM public.products WHERE id = :id ORDER BY price ASC', ['id'=>$id]);

        $relatedProducts = DB::select("SELECT * FROM public.products WHERE category = :category 
                                        AND id NOT IN (:id) ORDER BY price ASC", ['id'=>$id, 'category'=>$product[0]->category]);

        return view('pages.shop_view', ['product'=>$product, 'relatedProducts'=>$relatedProducts]);
    }
}
