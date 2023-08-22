<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $categoris = Categori::all();

        $products = Product::paginate(3);

        return view('fontend.home', compact('products', 'categoris'));
    }

    public function home()
    {
        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('dashboard');
            } else if ($usertype == 'admin') {
                return view('admin.home');
            } else {
                return redirect()->back();
            }
        }
    }
    public function Product_detail()
    {
        $product = Product::all();


        return view('fontend.product_detail', compact('product'));
    }
}
