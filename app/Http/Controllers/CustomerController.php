<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register()
    {
        return view('website.customer.register');
    }
    public function login()
    {
        return view('website.customer.login');
    }
}
