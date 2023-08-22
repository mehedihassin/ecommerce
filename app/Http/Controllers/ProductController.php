<?php

namespace App\Http\Controllers;

use Exception;
use Image;
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
}
