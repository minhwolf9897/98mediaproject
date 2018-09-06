<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function adminDashboard() {
        if(auth()->check() && auth()->user()->status == 0)
        {
            auth()->logout();
            return redirect()->route('client.index')->with('error','Tài khoản của bạn chưa được kích hoạt, hãy chờ BQT');
        }
        return view('pages.admin.dashboard');
    }
}
