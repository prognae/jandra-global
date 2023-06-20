<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.admin-dashboard.item-list');
    }
}
