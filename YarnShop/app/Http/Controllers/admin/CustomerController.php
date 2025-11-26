<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Adress;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Rating;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
        $customers = Customer::all();
        $adresses = Adress::all();
        view()->share(['customers' => $customers]);
        view()->share(['adresses'=> $adresses]);

    }
    public function index(){
        $customers = Customer::all();
        $adresses = Adress::all();
        return view("admin.customer_management.customer_management-list",compact("customers","adresses"));
    }
}
