<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
//
use App\Models\Product;


class AdminController extends Controller
{
    //
    public function displayDashboard() {
        return view('pages.admin-dashboard.dashboard');
    }

    public function displayListItem() {
        return view('pages.admin-dashboard.item-list');
    }

    public function displayListedItems() {
        // return view('pages.admin-dashboard.listed-items');

        $products = Product::all();

        return view('pages.admin-dashboard.listed-items', ['products' => $products]);

    }

    public function create(Request $request)
    {
        // $validatedData = $request->validate([
        //     'imageFile' => 'required|image',
        //     'name' => 'required',
        //     'category' => 'required',
        //     'price' => 'required|numeric',
        //     'description' => 'required',
        //     'quantity' => 'required|integer|min:1',
        // ]);

        $existingProduct = Product::where('name', $request->input('name'))
            ->where('category', $request->input('category'))
            ->first();

        if ($existingProduct) {
            // Product already exists, update the quantity
            $existingProduct->quantity += $request->input('quantity');
            $existingProduct->save();
        } else {
            // Create a new product instance
            $product = new Product([
                'imageFile' => $request->file('imageFile'),       //->store('images'),
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'quantity' => $request->input('quantity'),
            ]);

            // Save the product to the database
            $product->save();
    }
    
    return back();
    }




}

