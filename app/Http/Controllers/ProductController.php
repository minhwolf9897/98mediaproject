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

        if($obj->category->type != 2)
        {

            $item_urls = $request->item_urls;
            $item_urls_array = explode("@img@", $item_urls);
            $arrayItem = array();
            foreach ($item_urls_array as $link) {
                if(strlen($link)>0){
                    $item = array();
                    $item['link'] = $link;
                    $item['product_id'] = $obj->id;
                    array_push($arrayItem, $item);
                }
            }
            Item::insert($arrayItem); // check so luong phan tu truowc khi save.
        }
        else {
            $item = new Item;
            $item->product_id = $obj->id;
            $item->link = $request->item;
            $item->save();
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
        if($obj->category->type == 2)
        {
            return view('pages.admin.product.edit', compact('obj', 'categories'));
        }
        else {
            return view('pages.admin.product.editv2', compact('obj', 'categories'));
        }
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

        if($obj->items->first() != null)
        {
            $item = $obj->items->first();
            $item->product_id = $obj->id;
            $item->link = $request->item;
            $item->save();
        }
        else {
            $item = new Item;
            $item->product_id = $obj->id;
            $item->link = $request->item;
            $item->save();
        }

        return redirect()->route('admin.product.index')->with('success', 'Lưu dịch vụ thành công');

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