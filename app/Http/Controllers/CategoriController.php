<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

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
}
