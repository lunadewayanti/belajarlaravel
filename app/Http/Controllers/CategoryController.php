<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data_category = CategoryProduct::orderBy('id_category', 'desc')->paginate(10);

        return view('pages.category.show', [
            'data_kategori' => $data_category
        ]);
    }

    public function create()
    {
        return view('pages.category.addCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_category' => 'required|min:3|max:50',
        ]);

        CategoryProduct::create([
            'name_category' => $request->name_category,
        ]);

        return redirect('/category')->with('message', 'Kategori Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $data_category = CategoryProduct::findOrFail($id);

        return view('pages.category.detail', [
            'data_kategori' => $data_category
        ]);
    }

    public function edit($id)
    {
        $data_category = CategoryProduct::findOrFail($id);

        return view('pages.category.editCategory', [
            'data_kategori' => $data_category
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_category' => 'required|min:3|max:50',
        ]);

        $data_category = CategoryProduct::findOrFail($id);
        $data_category->update([
            'name_category' => $request->name_category,
        ]);

        return redirect('/category')->with('message', 'Kategori Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $data_category = CategoryProduct::findOrFail($id);
        $data_category->delete();

        return redirect('/category')->with('message', 'Kategori Berhasil Dihapus');
    }
}
