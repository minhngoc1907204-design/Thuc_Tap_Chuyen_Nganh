<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $orders = Order::all();
        view()->share(['orders' => $orders]);
    }
    public function index(){
        $orders = Order::all();
        return view("admin.order_management.order_management-list",compact("orders"));
    }
}
