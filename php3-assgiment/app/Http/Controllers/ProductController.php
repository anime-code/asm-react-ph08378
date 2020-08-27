<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdate;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStore;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ProductUpdate;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function __construct()
    {
        $products = Product::all();
        $categories = Category::all();
        view()->share('product', $products);
        view()->share('category', $categories);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword == null) {
            $products = Product::orderBy('id', 'desc')->paginate(10);
        } else {
            $products = Product::where('name', 'like', '%' . $keyword . '%')->paginate(10);
        }
        return view('admin.product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStore $request)
    {
        $product = new  Product();
        $product->fill($request->all());
        if ($request->hasFile('image')) {
            $nameFile = $request->image->getClientOriginalName();
            $newNameFile = 'product-' . $nameFile;

            $path = $request->image->storeAs('products', $newNameFile, 'public');
            $product->image = 'storage/' . $path;
        }
        $product->save();
        return redirect()->route('products.index')->with('msg', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $productEdit = Product::find($id);
        if (empty($productEdit)) {
            return redirect()->route('products.index')->with('error', 'Không tìm thấy sản phẩm');
        } else {
            return view('admin.product.edit', compact('productEdit', 'categories'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdate $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $nameFile = $request->image->getClientOriginalName();
            $newNameFile = 'product-' . $nameFile;
            $path = $request->image->storeAs('products', $newNameFile, 'public');
            $product->image = 'storage/' . $path;

        } else {
            $product->image = $request->oldImage;
        }
        $product->fill($request->all());
        $product->save();
        return redirect()->route('products.index')->with('msg', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {
            if (!empty($id)) {
                $gallerytid = ProductGallery::select('id')->where('product_id', $id)->pluck('id')->toArray();
            }
            if (!empty($gallerytid)) {
                ProductGallery::destroy($gallerytid);
                Log::info(' >>>gallerytid>>>' . json_encode($gallerytid));
            }
            Product::destroy($id);
            return redirect()->route('products.index')->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('products.index')->with('error', 'Không tìm thấy sản phẩm');
        }
    }
}
