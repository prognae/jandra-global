<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Homepage Routes
Route::get('/', [HomeController::class, 'displayHomepage']);

//Shop Routes
Route::get('/shop/{category?}', [ShopController::class, 'displayShop']);
Route::get('/shop/view/{id}', [ShopController::class, 'displayShopItem']);

//Showcase Routes
Route::get('/showcase', [HomeController::class, 'displayShowcase']);

//Event Routes
Route::get('/events', [EventController::class, 'displayEvents']);
Route::get('/events/{event_id}', [EventController::class, 'displayEventPage']);

//About Page Routes
Route::get('/about', [HomeController::class, 'displayAbout']);

//Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'adminLogin']);
Route::post('/admin/login', [AdminController::class, 'adminValidateLogin']);

//Admin route group
Route::group(['prefix' => 'admin', 'middleware' => 'checkSessionLogin'], function () { 
    Route::get('dashboard', [AdminController::class, 'displayDashboard']);
    Route::get('dashboard/item/add', [AdminController::class, 'displayListItem']);
    Route::get('dashboard/item/view', [AdminController::class, 'displayListedItems'])->name('admin.ListedItems');

    Route::post('product/create', [AdminController::class, 'addProduct'])->name('product.create');

    Route::get('product/edit/{id}', [AdminController::class, 'showData'])->name('product.edit');
    Route::put('product/update/{id}', [AdminController::class, 'update'])->name('product.update');
    Route::delete('product/delete/{id}', [AdminController::class, 'delete'])->name('product.delete');

    // Route::get('/pagination/paginate-data', [AdminController::class, 'pagination']);
    Route::get('product/search', [AdminController::class, 'search'])->name('product.search');

 


    //Route for events
    Route::get('dashboard/event/add', [AdminController::class, 'displayEventForms']);
    Route::post('dashboard/event/add', [AdminController::class, 'createEvent']);
});

//Logout Route
Route::get('/logout', [AdminController::class, 'logout']);
