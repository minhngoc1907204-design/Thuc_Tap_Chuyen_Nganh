<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $categories = Category::all();
        view()->share(['categories' => $categories]);
    }
    public function index(){
        $categories = Category::all();
        return view("admin.category.category-list",compact("categories"));
    }
}
