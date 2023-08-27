<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
        $categoris = Categori::all();

        $products = Product::paginate(3);
        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('dashboard', compact('products', 'categoris'));
            } else if ($usertype == 'admin') {
                return view('admin.home');
            } else {
                return redirect()->back();
            }
        }
    }
    public function Product_detail($id)
    {
        $product = Product::where('id', $id)->first();

        return view('fontend.product_detail', compact('product'));
    }

    public function add_to_cart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = Auth::user();
            $product = Product::find($id);
            $cart = new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->name;

            if ($product->discount != null) {
                $cart->price = $product->discount * $request->quentity;
            } else {
                $cart->price = $product->price * $request->quentity;
            }

            $cart->quantity = $request->quentity;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->user_id = $user->id;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('fontend.show_cart', compact('cart'));
        } else {
            return redirect()->route('login');
        }
    }

    public function remove_cart($id)
    {
        $removeCart = Cart::find($id);
        $removeCart->delete();
        return redirect()->back();
    }
}
