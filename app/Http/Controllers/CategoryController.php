<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    public function __construct() {
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
        $list_obj = Category::paginate($limit);
        return view('pages.admin.category.list')->with('list_obj', $list_obj);
    }

    public function getProductsByCategoryId($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('pages.admin.category.products')->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'type' => 'required',
        ]);

        $obj = new Category();
        $obj -> name = $request->name;
        $obj -> type = $request->type;
        $obj -> save();
        return redirect()->route('admin.category.index')->with('success', 'Đã tạo danh mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Category::findOrFail($id);
        return view('pages.admin.category.edit', compact('obj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Category::find($id);
        if($obj == null){
            return view('404');
        }
        $obj -> name = $request->name;
        $obj -> type = $request->type;
        $obj -> save();
        return redirect()->route('admin.category.index')->with('success','Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if($obj == null){
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
