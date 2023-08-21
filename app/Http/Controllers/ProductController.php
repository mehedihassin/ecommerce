<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.layouts.product-crud.index');
    }

    public function create()
    {
        return view('backend.layouts.product-crud.create');
    }
}
