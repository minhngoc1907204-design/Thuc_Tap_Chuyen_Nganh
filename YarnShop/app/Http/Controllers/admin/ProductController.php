<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $products = Product::all();
        view()->share(['products' => $products]);
    }
    public function index(){
        $products = Product::all();
        return view("admin.products_management.product-list",compact("products"));
    }
}
