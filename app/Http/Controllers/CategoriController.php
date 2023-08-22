<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CategoriController extends Controller
{
    public function admin()
    {

        return view('backend.admin');
    }
    public function index()
    {
        $categoris = Categori::all();
        return view('backend.layouts.index', compact('categoris'));
    }
    public function create()
    {
        return view('backend.layouts.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        if ($request->image) {
            $image = $this->imageUpload($request->categori, $request->image);
        }
        $data['image'] = $image;

        Categori::create($data);
        return redirect()->route('category_index');
    }

    public function edit($id)
    {
        $categoris = Categori::find($id);
        return view('backend.layouts.edit', compact('categoris'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        Categori::where('id', $id)->update($data);
        return redirect()->route('category_index');
    }

    public function delete($id)
    {
        $delCategory = Categori::find($id);
        $delCategory->delete();
        return redirect()->back();
    }

    public function imageUpload($categori, $image)
    {

        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());



        $file_name = $timestamp . '-' . $categori . '.' . $image->getClientOriginalExtension();

        $pathToUpload = storage_path() . '/app/public/categoris/';  // image  upload application save korbo

        if (!is_dir($pathToUpload)) {

            mkdir($pathToUpload, 0755, true);
        }

        Image::make($image)->resize(634, 792)->save($pathToUpload . $file_name);

        return $file_name;
    }
}
