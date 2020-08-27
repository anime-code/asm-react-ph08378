<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Invoice;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all()->count();
        $products = Product::all()->count();
        $invoices = Invoice::all()->count();
        $users = User::all()->count();
        return view('admin.dashboard.index', compact('categories', 'products', 'invoices', 'users'));
    }
}
