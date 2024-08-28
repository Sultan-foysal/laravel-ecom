<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShofyController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
    public function product()
    {
        return view('website.product.index');
    }
    public function productDetail()
    {
        return view('website.product.details');
    }
    public function cart()
    {
        return view('website.cart.index');
    }
    public function checkout()
    {
        return view('website.checkout.index');
    }
}
