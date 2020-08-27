<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function __construct()
    {
        $products = Product::all();
        $categories = Category::where('show_menu', 1)->get();
        view()->share('category', $categories);
        view()->share('product', $products);
    }

    public function index()
    {
        $newProduct = Product::orderBy('id', 'desc')->take(10)->get();
        return view('pages.index', compact('newProduct'));
    }

    public function shopPage()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('pages.shop', compact('products'));

    }

    public function productPage($id)
    {
        $product = Product::find($id);
        $galleries = ProductGallery::where('product_id', $id)->get();
        return view('pages.product', compact('product', 'galleries'));
    }

    public function showProductByCate($id)
    {
        $products = Product::where('cate_id', $id)->orderBy('id', 'desc')->paginate(10);
        return view('pages.shop', compact('products'));
    }

    public function contact()
    {
        return view('pages.contact');
    }


}
