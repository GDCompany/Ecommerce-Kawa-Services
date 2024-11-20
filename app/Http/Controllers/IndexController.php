<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    function index ()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
}
