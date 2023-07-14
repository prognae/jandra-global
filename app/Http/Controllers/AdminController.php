<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cloudinary\Cloudinary;
//
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $products = DB::select("SELECT * FROM public.test");
        dd($products);

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
        $itemQty = $request->input('quantity');

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
            $addProduct = DB::insert('INSERT INTO public.products (name, category, price, description, image_file, shop_link)
                                VALUES (:name, :category, :price, :description, :image_file, :shop_link)',
                                ['name'=>$itemName, 'category'=>$itemCategory, 'price'=>$itemPrice, 'description'=>$itemDescription,
                                'image_file'=>$imageUrl, 'shop_link'=>$itemLink]);
        }
        return redirect('/admin/dashboard');
    }




}

