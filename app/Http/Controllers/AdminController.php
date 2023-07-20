<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;




class AdminController extends Controller
{
    public function displayDashboard() {
        return view('pages.admin-dashboard.dashboard');
    }

    public function displayListItem() {
        return view('pages.admin-dashboard.item-list');
    }

    public function displayListedItems()
    {
        $products = Product::orderByDesc('id')->paginate(10);

        return view('pages.admin-dashboard.listed-items', compact('products'));
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
                                             //    LOGIC FOR QUANTITY
                                                            // $existingProduct = Product::where('name', $request->input('name'))
                                                            //     ->where('category', $request->input('category'))
                                                            //     ->first();
                                                                                 
                                                            // if ($existingProduct) {
                                                            //     // Product already exists, update the quantity
                                                            //     $existingProduct->quantity += $request->input('quantity');
                                                            //     $existingProduct->save();
                                                            // } else {
            // Create a new product instance
            $product = new Product([
                'imageFile' => $request->file('imageFile'),       //->store('images'),
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                // 'quantity' => $request->input('quantity'),
            ]);

            // Save the product to the database
            $product->save();
    
            return redirect(route('admin.ListedItems'))->with('success', 'Product created successfully!');
    }

    
    public function showData(Request $request, $id)
    {
        $product = Product::find($id);
        return view('pages.admin-dashboard.update-items', ['product' => $product]);

    }
    

    public function update(Request $request, $id)
    {
        // Fetch the product based on the provided ID
        $product = Product::findOrFail($id);
    
        // Update the product data with the values from the form fields
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        // Update other fields as needed
    
        // Save the updated product
        $product->save();
    
        // Redirect to a success page or the updated product page
        return redirect(route('admin.ListedItems'))->with('success', 'Product updated successfully!');
    }
    

    public function delete($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
        }

        return back();
    } 



    // public function pagination(Request $request)
    // {
    //     $products = Product::latest()->paginate(10);

    //     return view('pages.admin-dashboard.listed-items', compact('products'))->render();
    // }


    public function search(Request $request)
    {

        $products = Product::where('name', 'like', '%'.$request->search_string.'%')
            ->orWhere('category', 'like', '%'.$request->search_string.'%')
            ->orWhere('description', 'like', '%'.$request->search_string.'%')
            ->orWhere('price', 'like', '%'.$request->search_string.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);

            if($products->count() >= 1){
                return view('pages.admin-dashboard.listed-items', compact('products'));
            }else{
                return response()->json([
                    'status' =>'nothing_found',
                ]);
            }
  
    }
    

    



}

