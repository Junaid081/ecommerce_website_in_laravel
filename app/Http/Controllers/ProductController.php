<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function welcome(){
       
        $data = Product::all();
        return view('products',['products'=>$data]);
    }
    //
}
