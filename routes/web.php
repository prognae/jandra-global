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

Route::get('/shop/{category?}', [ShopController::class, 'displayShop']);

Route::get('/shop/view/{id}', [ShopController::class, 'displayShopItem']);

Route::get('/showcase', [HomeController::class, 'displayShowcase']);

Route::get('/events', [HomeController::class, 'displayBlog']);

Route::get('/events/{event_id}', [EventController::class, 'displayEventPage']);

Route::get('/about', [HomeController::class, 'displayAbout']);

//Admin routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminController::class, 'adminLogin']);
    Route::post('login', [AdminController::class, 'adminValidateLogin']);

    Route::get('dashboard', [AdminController::class, 'displayDashboard']);
    Route::get('dashboard/item/add', [AdminController::class, 'displayListItem']);
    Route::get('dashboard/item/view', [AdminController::class, 'displayListedItems'])->name('admin.ListedItems');

    Route::post('product/create', [AdminController::class, 'addProduct'])->name('product.create');

    Route::get('product/edit/{id}', [AdminController::class, 'showData'])->name('product.edit');
    Route::put('product/update/{id}', [AdminController::class, 'update'])->name('product.update');
    Route::delete('product/delete/{id}', [AdminController::class, 'delete'])->name('product.delete');

    // Route::get('/pagination/paginate-data', [AdminController::class, 'pagination']);
    Route::get('product/search', [AdminController::class, 'search'])->name('product.search');
});
