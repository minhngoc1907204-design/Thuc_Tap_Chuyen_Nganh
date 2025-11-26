<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Carts;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        view()->share("products", Product::all());
        view()->share("comments", Comment::all());
        view()->share("ratings", Rating::all());
    }
    public function index(){
        $products = Product::all();
        $comments = Comment::all();
        $ratings = Rating::all();
        return view("admin.products_management.product-list",compact("products","comments","ratings"));
    }
    public function create(){
        $categories = Category::all();
        return view("admin.products_management.add", ["categories"=>$categories]);
    }
    public function store(Request $request){
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'nullable|string',
        ]);


        if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
        }

        $product = Product::create(
            [
                'category_id' => $request->category_id,
                'name'=> $request->name,
                'price'=> $request->price,
                'stock'=> $request->stock,
                'image'=> $filename ?? null,
                'description'=> $request->description,

            ]
        );
        if($product){
            return redirect()->route('admin.products_management.index');
        }else{
            return back();
        }
    }
    public function show($id){
        $product = Product::find($id);
        return view('admin.products_management.show',compact('product'));
    }
    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products_management.edit',compact('categories','product'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update([
            'name'=> $request->name,
            'price'=> $request->price,
            'stock'=> $request->stock,
            'description'=> $request->description,
            'category_id' => $request->category_id,

        ]);

        if($request->hasFile('image')){
            if ($product->image && file_exists(public_path('images/' . $product->image))) {
            unlink(public_path('images/' . $product->image));
        }

        // Lưu ảnh mới
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        // Cập nhật tên ảnh
        $product->image = $filename;
        }
        
        $product->save();

        if($product){
            return redirect()->route("admin.products_management.index");
        }
        else{
            return back();
        }
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        if($product){
            return redirect()->route("admin.products_management.index");
        }
        else{
            return back();
        }
    }
}