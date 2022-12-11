<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create()
    {
        return view('Admin.CRUD.Category.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        Category::create($validatedData);
        return redirect('manage-categories')->with('success', 'data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('Admin.CRUD.Category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        Category::where('id', $id)->update($validatedData);
        return redirect('manage-categories')->with('success', 'data berhasil ditambahkan');
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('manage-categories')->with('success', 'data berhasil ditambahkan');
    }
}