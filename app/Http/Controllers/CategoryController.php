<?php

namespace App\Http\Controllers;

Use \App\Models\Category as Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return $category;
    }

    public function delete(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return 204;
    }
}
