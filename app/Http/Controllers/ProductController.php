<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index()
    {
        $product= Product::all();
        return view ('front.product',['products'=>$product]);
        
        
    }
}
