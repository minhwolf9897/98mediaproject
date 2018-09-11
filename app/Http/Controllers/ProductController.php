<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Item;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $products = Product::paginate($limit);
        return view('pages.admin.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.product.createv2', compact('categories', 'selectedCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:250|min:3',
            'category_id' => 'required|exists:categories,id',
        ]);

        $obj = new Product();
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->category_id = $request->category_id;
        $obj->save();

        $items = $request->item;
        if ($items != null) {
//            Item::insert($items);
            return view('pages.admin.product.test', compact('items'))->with('success', 'Thêm mới dịch vụ thành công');
        }
        return redirect()->route('admin.product.index')->with('success', 'Thêm mới dịch vụ thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.product.edit', compact('obj', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Product::findOrFail($id);
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->category_id = $request->category_id;
        $obj->save();
        $items = $request->item;
        if ($items != null) {
            $request->merge([
                'item' => json_encode($request->get('item'))
            ]);
            $items = $obj->items()->save(new Item($request->get('item')));
//            Item::insert($items);
            return view('pages.admin.product.test', compact('items'))->with('success', 'Thêm mới dịch vụ thành công');
        }
        return redirect()->route('admin.product.index')->with('success', 'Thêm mới dịch vụ thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return response()->json(['error' => 'not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}