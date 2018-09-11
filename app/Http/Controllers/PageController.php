<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Item;
use App\Category;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['indexHome']]);
    }

    public function adminDashboard() {
        if(auth()->check() && auth()->user()->status == 0)
        {
            auth()->logout();
            return redirect()->route('client.index')->with('error','Tài khoản của bạn chưa được kích hoạt, hãy chờ BQT');
        }
        return view('pages.admin.dashboard');
    }

    public function indexPhoto() {
        $products = Product::all();

        return view('pages.client.photo', compact('products'));
    }

    public function indexVideo() {
        $categories = Category::all();

        return view('pages.client.video', compact('categories'));
    }
}
