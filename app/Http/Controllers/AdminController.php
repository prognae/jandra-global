<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cloudinary\Cloudinary;
//
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
// use Illuminate\Database\Query\IndexHint;


class AdminController extends Controller
{
    //
    public function adminLogin() {
        return view('pages.admin-dashboard.login');
    }

    public function adminValidateLogin(Request $request) {
        try{
        
            $username = $request->input('username');
            $password = $request->input('password'); 

            $validate = DB::select("SELECT username, password from public.account where username = :username;", ['username' => $username]);  

            // Checks if the account is existing
            if(!$validate) {
                // return back with an error if the login fails
                return redirect()->back()->with('error', 'Invalid username or password');
            }
            else if($validate) {
                // If the login is successful, this function hashes the password before storing in the database.
                if(Hash::check($password, $validate[0]->password)) {
                    $request->session()->put('username', $username);

                    return redirect('/admin/dashboard');
                }
                else {
                    // return back with an error if the login fails
                    return redirect()->back()->with('error', 'Invalid username or password');
                }
            }

        } catch(Exception $e) {
            abort(404);
        }
    }

    public function displayDashboard() {
        return view('pages.admin-dashboard.dashboard');
    }

    public function displayListItem() {
        return view('pages.admin-dashboard.item-list');
    }

    public function displayListedItems() {
        // return view('pages.admin-dashboard.listed-items');

        // $products = Product::all();
        $products = DB::select("SELECT * FROM public.products");

        return view('pages.admin-dashboard.listed-items', ['products' => $products]);

    }

    public function addProduct(Request $request)
    {
        $imageFile = $request->input('imageFileb64');    //->store('images'),
        $itemName = $request->input('name');
        $itemCategory = $request->input('category');
        $itemPrice = $request->input('price');
        $itemDescription = $request->input('description');
        $itemLink = $request->input('shop_link');
        // $itemQty = $request->input('quantity');
        $itemProductInfo = $request->input('product_information');
        $itemMaterialUsed = $request->input('material_used');

        function uploadImage($image) {
            $cloudinary = new Cloudinary(
                [
                    'cloud' => [
                        'cloud_name' => env('CLOUDINARY_CLOUDNAME'),
                        'api_key'    => env('CLOUDINARY_APIKEY'),
                        'api_secret' => env('CLOUDINARY_APISECRET'),
                    ],
                ]
            );

            $options = [
                'folder' => 'jandra-assets/jandra-products',
                'use_filename' => true,
                'unique_filename' => false,
                'overwrite' => true
            ];
            
            $imageUpload = $cloudinary->uploadApi()->upload(
                $image, $options
            );

            return $imageUpload['secure_url'];   
            
        }

        $imageUrl = uploadImage($imageFile);

        if(!$imageUrl) {
            abort(404);
        }
        else if($imageUrl) {
            $addProduct = DB::insert('INSERT INTO public.products (name, category, price, description, image_file, shop_link, product_information, material_used)
                                VALUES (:name, :category, :price, :description, :image_file, :shop_link, :product_information, :material_used)',
                                ['name'=>$itemName, 'category'=>$itemCategory, 'price'=>$itemPrice, 'description'=>$itemDescription,
                                'image_file'=>$imageUrl, 'shop_link'=>$itemLink, 'product_information'=>$itemProductInfo, 'material_used'=>$itemMaterialUsed]);
        }
        return redirect('/admin/dashboard');
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

    public function logout() {
        session()->forget('username');
        return redirect('/admin/login');
    }

    public function displayEventForms() {
        return view('pages.admin-dashboard.event-list');
    }

    public function createEvent(Request $request) {
        $eventName = $request->input('name');
        $eventDate = $request->input('event_date');
        $eventDescription = $request->input('description');
        $imageFile = $request->input('imageFileb64');

        function uploadImage($image) {
            $cloudinary = new Cloudinary(
                [
                    'cloud' => [
                        'cloud_name' => env('CLOUDINARY_CLOUDNAME'),
                        'api_key'    => env('CLOUDINARY_APIKEY'),
                        'api_secret' => env('CLOUDINARY_APISECRET'),
                    ],
                ]
            );

            $options = [
                'folder' => 'jandra-assets/jandra-events',
                'use_filename' => true,
                'unique_filename' => false,
                'overwrite' => true
            ];
            
            $imageUpload = $cloudinary->uploadApi()->upload(
                $image, $options
            );

            return $imageUpload['secure_url'];   
            
        }

        $imageUrl = uploadImage($imageFile);

        if(!$imageUrl) {
            abort(404);
        }
        else if($imageUrl) {
            $addProduct = DB::insert('INSERT INTO public.event (event_name, event_image, event_description, event_date)
                                    VALUES(:event_name, :event_image, :event_description, :event_date)',
                                    ['event_name'=>$eventName, 'event_image'=>$imageUrl, 'event_description'=>$eventDescription, 'event_date'=>$eventDate]);
        }
        return redirect('/admin/dashboard');
    }

}

