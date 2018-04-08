<?php

namespace App\Http\Controllers\Api;

Use \App\Models\Category as Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index()
    {
        return Category::select('id','name','description')->get();
    }

    public function show($id)
    {
        return Category::select('id','name','description')->find($id);
    }

    public function store(Request $request)
    {
        return Category::select('id','name','description')->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category = Category::select('id','name','description')->findOrFail($id);
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
