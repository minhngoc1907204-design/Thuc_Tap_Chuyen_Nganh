<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $customers = Customer::all();
        view()->share(['customers' => $customers]);
    }
    public function index(){
        $customers = Customer::all();
        return view("admin.customer_management.customer_management-list",compact("customers"));
    }
}
