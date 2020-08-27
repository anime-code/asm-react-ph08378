<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductGalleryController extends Controller
{


    public function createDetail($id)
    {
        $product = Product::find($id);
        return view('admin.product-gallery.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $nameFile = $file->getClientOriginalName();
                $newNameFile = 'product-gallery-' . $nameFile;
                $path = $file->storeAs('product-gallery', $newNameFile, 'public');
                ProductGallery::create([
                    'product_id' => $request->product_id,
                    'img_url' => 'storage/' . $path
                ]);
            }
        }
        return redirect()->route('product_galleries.show', ['product_gallery' => $request->product_id])->with('msg', 'Thêm thành công');
    }


    public
    function show($id)
    {
        $pro_galleries = ProductGallery::where('product_id', $id)->paginate(10);
        if (empty($pro_galleries)) {
            return redirect()->route('products.index')->with('error', 'Sản phẩm không có ảnh nào!');
        } else {
            return view('admin.product-gallery.detail', compact('pro_galleries'));
        }

    }

    public
    function destroy($id, $product_id)
    {

        if (!empty($id) || isset($id)) {
            ProductGallery::destroy($id);
            return redirect()->route('product_galleries.show', ['product_gallery' => $product_id])->with('msg', 'Xóa thành công!');
        } else {
            return redirect()->route('product_galleries.show', ['product_gallery' => $product_id])->with('error', 'Không tìm thấy ảnh');
        }
    }
}
