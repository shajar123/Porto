<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $categories= Category::count();
        $products=Product::count();
        return view('admin.dashboard',compact('categories','products'));
    }
}
