<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $products= product::all();
        return view('front.home',compact('products'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $products= product::all();
        return view('front.products', compact('products'));

    }
    public function showproduct()
    {
        return view('front.showproduct');
    }
}