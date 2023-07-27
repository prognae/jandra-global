<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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
    /*
    public function displayDashboard() {
        return view('pages.admin-dashboard.dashboard');
    }
    */
    public function displayDashboard() {
        return view('pages.new-admin.index');
    }

    public function displayListItem() {
        return view('pages.new-admin.item-list');
    }



    // public function displayListedItems()
    // {
    //     $perPage = 10;
    //     $currentPage = request()->query('page', 1);
    //     $offset = ($currentPage - 1) * $perPage;
    
    //     // Replace your raw SQL query with a modified version that includes pagination and descending order
    //     $products = DB::select("SELECT * FROM public.products ORDER BY id DESC OFFSET $offset LIMIT $perPage");
    
    //     // Count the total number of items (needed for pagination)
    //     $totalItems = DB::select("SELECT COUNT(*) as total FROM public.products");
    //     $totalItems = $totalItems[0]->total;
    
    //     // Convert the result objects to an array
    //     $productsArray = json_decode(json_encode($products), true);
    
    //     // Create a LengthAwarePaginator instance to manually paginate the results
    //     $paginator = new LengthAwarePaginator($productsArray, $totalItems, $perPage, $currentPage, [
    //         'path' => request()->url(), // Generate the URL for pagination links
    //     ]);
    
    //     return view('pages.admin-dashboard.listed-items', ['products' => $paginator]);
    // }

    // ...

    // public function displayListedItems(Request $request)
    // {
    //     $category = $request->query('category');

    //     $perPage = 10;
    //     $currentPage = $request->query('page', 1);
    //     $offset = ($currentPage - 1) * $perPage;

    //     $query = "SELECT * FROM public.products";

    //     if ($category) {
    //         $query .= " WHERE category ILIKE '%$category%'";
    //     }

    //     $query .= " ORDER BY id DESC OFFSET $offset LIMIT $perPage";

    //     $products = DB::select($query);

    //     $totalItems = DB::select("SELECT COUNT(*) as total FROM public.products");
    //     $totalItems = $totalItems[0]->total;

    //     $productsArray = json_decode(json_encode($products), true);

    //     $paginator = new LengthAwarePaginator($productsArray, $totalItems, $perPage, $currentPage, [
    //         'path' => request()->url(), // Generate the URL for pagination links
    //     ]);

    //     return view('pages.admin-dashboard.listed-items', ['products' => $paginator]);
    // }

    public function displayListedItems(Request $request)
    {
        $category = $request->query('category');
    
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $offset = ($currentPage - 1) * $perPage;
    
        $query = "SELECT * FROM public.products";
    
        if (!$category || $category === "All Categories") {
            // If "All Categories" is selected or no category is selected, fetch all products
        } else {
            // If a specific category is selected, add the category filter to the query
            $query .= " WHERE category ILIKE '%$category%'";
        }
    
        $query .= " ORDER BY id DESC OFFSET $offset LIMIT $perPage";
    
        $products = DB::select($query);
    
        $totalItems = DB::select("SELECT COUNT(*) as total FROM public.products");
        $totalItems = $totalItems[0]->total;
    
        $productsArray = json_decode(json_encode($products), true);
    
        $paginator = new LengthAwarePaginator($productsArray, $totalItems, $perPage, $currentPage, [
            'path' => request()->url(), // Generate the URL for pagination links
        ]);
    
        return view('pages.admin-dashboard.listed-items', ['products' => $paginator]);
    }
    





    public function addProduct(Request $request)
    {
        $imageFiles = [];
        $imageUrls = [];
        $imageFileMain = $request->input('imageFileb64-main');    //->store('images'),
        $imageFileAlt1 = $request->input('imageFileb64-1'); 
        $imageFileAlt2 = $request->input('imageFileb64-2'); 
        $imageFileAlt3 = $request->input('imageFileb64-3'); 
        $itemName = $request->input('name');
        $itemCategory = $request->input('category');
        $itemPrice = $request->input('price');
        $itemDescription = $request->input('description');
        $itemLink = $request->input('shop_link');
        // $itemQty = $request->input('quantity');
        $itemProductInfo = $request->input('product_information');
        $itemMaterialUsed = $request->input('material_used');

        array_push($imageFiles, $imageFileMain, $imageFileAlt1, $imageFileAlt2, $imageFileAlt3);
        $imageFiles = array_filter($imageFiles);

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

        foreach($imageFiles as $imageFile) {
            $imageUrl = uploadImage($imageFile);
            $imageUrls[] = $imageUrl;
        }

        if(!$imageUrls) {
            abort(404);
        }
        else if($imageUrls) {
            // $addProduct = DB::insert('INSERT INTO public.products (name, category, price, description, image_file, shop_link, product_information, material_used)
            //                     VALUES (:name, :category, :price, :description, :image_file, :shop_link, :product_information, :material_used)',
            //                     ['name'=>$itemName, 'category'=>$itemCategory, 'price'=>$itemPrice, 'description'=>$itemDescription,
            //                     'image_file'=>$imageUrls[0], 'shop_link'=>$itemLink, 'product_information'=>$itemProductInfo, 'material_used'=>$itemMaterialUsed]);
            $addProduct = DB::table('public.products')->insertGetId(['name'=>$itemName, 'category'=>$itemCategory, 'price'=>$itemPrice, 'description'=>$itemDescription,
                                 'image_file'=>$imageUrls[0], 'shop_link'=>$itemLink, 'product_information'=>$itemProductInfo, 'material_used'=>$itemMaterialUsed]);

            array_shift($imageUrls);

            foreach($imageUrls as $imageUrl) {
                $addPhotos = DB::table('public.product_photo')->insert([
                    'product_id' => $addProduct,
                    'image_url' => $imageUrl
                ]);
            }            
            
        }
        return redirect('/admin/dashboard');
    }


    public function showData(Request $request, $id)
    {
        // Use the DB facade to execute the raw PostgreSQL query
        $product = DB::select("SELECT * FROM public.products WHERE id = :id", ['id' => $id]);
    
        // Since DB::select() returns an array of objects, we need to check if the result is not empty
        if (!empty($product)) {
            $product = $product[0]; // Extract the first result from the array
        } else {
            // If the product with the given ID is not found, you can handle the error or redirect to an error page.
            // For example:
            abort(404); // Return a 404 Not Found error page.
        }
    
        // Pass the $product object to the view using compact()
        return view('pages.admin-dashboard.update-items', compact('product'));
    }
    

    public function update(Request $request, $id)
    {
        $productName = $request->input('name');
        $productCategory = $request->input('category');
        $productPrice = $request->input('price');
        $productDescription = $request->input('description');
        $shopLink = $request->input('shop_link');
        $productInformation = $request->input('product_information');
        $materialUsed = $request->input('material_used');
        
        // Use the DB facade to execute the raw PostgreSQL query to update the product
        $updateProduct = DB::update(
            "UPDATE public.products 
            SET name = :name, category = :category, price = :price, description = :description, 
            shop_link = :shop_link,  product_information = :product_information, material_used = :material_used
            WHERE id = :id",
            [
                'id' => $id,
                'name' => $productName,
                'category' => $productCategory,
                'price' => $productPrice,
                'description' => $productDescription,
                'shop_link' => $shopLink,
                'product_information' => $productDescription,
                'material_used' => $materialUsed
            ]
        );

        // Check if the product was successfully updated
        if ($updateProduct) {
            // Redirect to a success page or the updated product page
            return redirect(route('admin.ListedItems'))->with('success', 'Product updated successfully!');
        } else {
            // If the update fails, you can handle the error or redirect to an error page.
            // For example:
            abort(500); // Return a 500 Internal Server Error page.
        }
    }

    public function delete($id)
    {
        // Use the DB facade to execute the raw PostgreSQL query to delete the product
        $deleteProduct = DB::delete("DELETE FROM public.products WHERE id = :id", ['id' => $id]);
    
        // Check if the product was successfully deleted
        if ($deleteProduct) {
            // Redirect back to the previous page
            return back()->with('success', 'Product deleted successfully!');
        } else {
            // If the deletion fails, you can handle the error or redirect to an error page.
            // For example:
            abort(500); // Return a 500 Internal Server Error page.
        }
    }
    

    // public function pagination(Request $request)
    // {
    //     $products = Product::latest()->paginate(10);

    //     return view('pages.admin-dashboard.listed-items', compact('products'))->render();
    // }






    // Working Localhost

    // public function search(Request $request)
    // {

    //     $products = Product::where('name', 'like', '%'.$request->search_string.'%')
    //         ->orWhere('category', 'like', '%'.$request->search_string.'%')
    //         ->orWhere('description', 'like', '%'.$request->search_string.'%')
    //         ->orWhere('price', 'like', '%'.$request->search_string.'%')
    //         ->orderBy('id', 'desc')
    //         ->paginate(10);

    //         if($products->count() >= 1){
    //             return view('pages.admin-dashboard.listed-items', compact('products'));
    //         }else{
    //             return response()->json([
    //                 'status' =>'nothing_found',
    //             ]);
    //         }
  
    // }

    
    public function search(Request $request)
    {
        $searchString = $request->search_string;
    
        $products = DB::select("SELECT * FROM public.products 
                                WHERE name ILIKE :search OR 
                                      category ILIKE :search OR 
                                      description ILIKE :search OR 
                                      CAST(price AS TEXT) ILIKE :search -- Cast price to text for case-insensitive matching
                                ORDER BY id DESC",
                                ['search' => '%' . $searchString . '%']);
    
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $offset = ($currentPage - 1) * $perPage;
        $totalItems = count($products);
    
        // Create a LengthAwarePaginator instance to manually paginate the results
        $paginator = new LengthAwarePaginator(array_slice($products, $offset, $perPage), $totalItems, $perPage, $currentPage, [
            'path' => request()->url(), // Generate the URL for pagination links
        ]);
    
        return view('pages.admin-dashboard.listed-items', ['products' => $paginator]);
    }
    
    
    

    
    



    public function logout() {
        session()->forget('username');
        return redirect('/admin/login');
    }

    public function displayEventForms() {
        return view('pages.new-admin.event-list');
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

    public function displayListedEvents() {
        $this->data['events'] = $events = DB::select("SELECT * FROM public.event");
        // dd($events);
        return view('pages.admin-dashboard.listed-events', $this->data);
    }
    
    public function deleteEvent($id)
    {
        // Use the DB facade to execute the raw PostgreSQL query to delete the product
        $deleteProduct = DB::delete("DELETE FROM public.event WHERE id = :id", ['id' => $id]);
    
        // Check if the product was successfully deleted
        if ($deleteProduct) {
            // Redirect back to the previous page
            return back()->with('success', 'Product deleted successfully!');
        } else {
            // If the deletion fails, you can handle the error or redirect to an error page.
            // For example:
            abort(500); // Return a 500 Internal Server Error page.
        }
    }
    public function showDataEvent(Request $request, $id)
    {
        // Use the DB facade to execute the raw PostgreSQL query
        $events = DB::select("SELECT * FROM public.event WHERE id = :id", ['id' => $id]);
    
        // Since DB::select() returns an array of objects, we need to check if the result is not empty
        if (!empty($events)) {
            $events = $events[0]; // Extract the first result from the array
        } else {
            // If the product with the given ID is not found, you can handle the error or redirect to an error page.
            // For example:
            abort(404); // Return a 404 Not Found error page.
        }
    
        // Pass the $product object to the view using compact()
        return view('pages.admin-dashboard.update-events', compact('events'));
    }
    

    public function updateEvent(Request $request, $id)
    {
        $eventName = $request->input('event_name');
        $eventDate = $request->input('event_date');
        $eventDescription = $request->input('event_description');
   
        // Use the DB facade to execute the raw PostgreSQL query to update the product
        $updateEvent = DB::update(
            "UPDATE public.event 
            SET event_name = :event_name, event_date = :event_date, event_description = :event_description
            WHERE id = :id",
            [
                'id' => $id,
                'event_name' => $eventName,
                'event_date' => $eventDate,
                'event_description' => $eventDescription
            ]
        );

        // Check if the product was successfully updated
        if ($updateEvent) {
            // Redirect to a success page or the updated product page
            return redirect(route('admin.ListedEvents'))->with('success', 'Event updated successfully!');
        } else {
            // If the update fails, you can handle the error or redirect to an error page.
            // For example:
            abort(500); // Return a 500 Internal Server Error page.
        }
    }
}

