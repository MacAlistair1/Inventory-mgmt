<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Home Page";
        return view('pages.index')->with('title', $title);
    }

    public function addproduct()
    {
        $title = "Add Product to Inventory";
        return view('pages.addproduct')->with('title', $title);
    }
    public function addsales()
    {
      // $products = Product::where('product_name', 'pencil')->pluck('product_name');
       
        $products = Product::pluck('product_name');
         return view('pages.addsales')->with('products', $products);
    }

    public function search()
    {
        $title = "View Stock Product";
        return $title;
    }

}
