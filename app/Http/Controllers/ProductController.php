<?php

namespace App\Http\Controllers;

use PDF;
use Image;
use Exception;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function index()
    {


        $products = Product::all();
        return view('backend.layouts.product-crud.index', compact('products'));
    }

    public function create()
    {
        $categoris = Categori::all();

        return view('backend.layouts.product-crud.create', compact('categoris'));
    }

    public function store(Request $request)
    {

        try {
            $data = $request->all();

            if ($request->image) {
                $image = $this->imageUpload($request->name, $request->image);
            }
            $data['image'] = $image;

            Product::create($data);
            return redirect()->route('product_index', compact('data'));
        } catch (Exception $e) {
            return ($e->getMessage());
        }
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('backend.layouts.product-crud.edit', compact('products'));
    }

    public function update(Request $request, $id)

    {
        $products = $request->except('_token');
        Product::where('id', $id)->update($products);
        return redirect()->route('product_index');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }


    public function imageUpload($name, $image)
    {

        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());



        $file_name = $timestamp . '-' . $name . '.' . $image->getClientOriginalExtension();

        $pathToUpload = storage_path() . '/app/public/products/';  // image  upload application save korbo

        if (!is_dir($pathToUpload)) {

            mkdir($pathToUpload, 0755, true);
        }

        Image::make($image)->resize(634, 792)->save($pathToUpload . $file_name);

        return $file_name;
    }

    public function order_list()
    {
        $orders = Order::paginate(5);

        return view('backend.layouts.product-crud.orderList', compact('orders'));
    }

    public function orderd($id)
    {

        $order = Order::find($id);
        $order->delevery_status = 'Deleverd';
        $order->save();
        return redirect()->back();
    }

    public function print_pdf($id)
    {
        $orders = Order::find($id);

        $pdf = PDF::loadView('backend.layouts.product-crud.pdf', compact('orders'));
        return $pdf->download('order details.pdf');
    }

    public function search_product(Request $request)

    {
        $searchText = $request->search;

        $orders = Order::where('name', 'LIKE', "%$searchText%")->get();
        return view('backend.layouts.product-crud.orderList', compact('orders'));
    }

    public function dashboard_view()
    {
        $total_product = Product::all()->count();
        $total_order = Order::all()->count();
        $total_customer = User::all()->count();
        $order = Order::all();
        $total_revenue = 0;
        foreach ($order as $order) {
            $total_revenue = $total_revenue + $order->price;
        }
        $total_deleverd = Order::where('delevery_status', '=', 'deleverd')->get()->count();
        $total_processing = Order::where('delevery_status', '=', 'processing')->get()->count();

        return view('admin.dashboard_view', compact('total_product', 'total_order', 'total_customer', 'total_revenue', 'total_deleverd', 'total_processing'));
    }
}
