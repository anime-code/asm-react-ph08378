<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStore;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CategoryUpdate;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword == null) {
            $categories = Category::orderBy('id', 'desc')->paginate(10);
        } else {
            $categories = Category::where('cate_name', 'like', '%' . $keyword . '%')->paginate(3);
        }
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStore $request)
    {

        $category = new Category();
        $category->fill($request->all());
        $category->show_menu = $request->has('show_menu') ? $request->show_menu : null;
        $category->save();
        return redirect()->route('categories.index')->with('msg', 'Create Succses');
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
        $category = Category::find($id);
        if (empty($category)) {
            return redirect()->route('categories.index')->with('error', 'Không tìm thấy danh mục');
        } else {
            return view('admin.category.edit', compact('category'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdate $request, $id)
    {
        $request->validate(['cate_name' => Rule::unique('categories')->ignore($id),]);
        $category = Category::find($id);
        $category->fill($request->all());
        $category->show_menu = $request->has('show_menu') ? $request->show_menu : null;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if (!empty($id)) {
                $productid = Product::select('id')->where('cate_id', $id)->pluck('id')->toArray();
            }
            if (!empty($productid)) {
                Product::destroy($productid);
                Log::info(' >>>productid>>>' . json_encode($productid));
            }
            Category::destroy($id);
            return redirect()->route('categories.index')->with('msg', 'Delete Success');
        } catch (\Exception $e) {
            Log::info('>>>Exception>>>' . $e->getMessage());
            return $e->getMessage();
        }

    }
}
