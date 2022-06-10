<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function addCategory (Request $request) {
        $category = new Category;
        $category->category_name = $request-> category_name;
        $category->save();
        return response()->json(["Message"=>"Category Added Successfuly"], 200);
        
    } 
    
    public function addProduct (Request $request) {

        $product = new Product;
        $product->name = $request-> name;
        $product->price = $request-> price;
        $product->picture = $request-> picture;
        $product->category_id = $request-> category_id;
        $product->save();
        return response()->json(["message"=>"Itme Added Successfully"], 200);


    }

    public function allitems () {
        die("hello");
    }

    public function allCategories() {

    }
}
