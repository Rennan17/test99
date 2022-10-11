<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('dashboard',['products => $products']);
    }
}
