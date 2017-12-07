<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController {

    public function index(){


        $categories = Category::where('parent_id',null)->get();

        $products = Product::all();

        echo view('index',compact('categories','products'));


    }

}