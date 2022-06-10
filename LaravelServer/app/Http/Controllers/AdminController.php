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

    public function allProducts($id = null){
        if($id != null){
            $products = Product::find($id);
        }else{
            $products = Product::all();
        }
        
        return response()->json([
            "status" => "Success",
            "products" => $products
        ], 200);
    }

    public function allCategories($id = null) {
        if($id != null){
            $categories = Category::find($id);
        }else{
            $categories = Category::all();
        }
        
        return response()->json([
            "status" => "Success",
            "categories" => $categories
        ], 200);
    }
}
