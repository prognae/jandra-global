<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/shop', [HomeController::class, 'displayShop']);

Route::get('/showcase', [HomeController::class, 'displayShowcase']);

Route::get('/blog', [HomeController::class, 'displayBlog']);

Route::get('/about', [HomeController::class, 'displayAbout']);

//Admin routes


Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'displayDashboard']);
    Route::get('dashboard/item/add', [AdminController::class, 'displayListItem']);
    Route::get('dashboard/item/view', [AdminController::class, 'displayListedItems']);

    Route::post('dashboard/item/admin/seller/insert', [AdminController::class, 'create']);



});
