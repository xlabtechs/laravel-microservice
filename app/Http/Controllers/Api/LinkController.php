<?php

namespace App\Http\Controllers\Api;

Use \App\Models\Link as Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LinkController extends Controller
{
    public function index()
    {
        return Link::select('id','name','description','url','category_id')->with('category')->get();
    }

    public function show($id)
    {
        return Link::select('id','name','description','url','category_id')->with('category')->find($id);
    }

    public function store(Request $request)
    {
        return Link::select('id','name','description','url','category_id')->with('category')->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $link = Link::select('id','name','description','url','category_id')->with('category')->findOrFail($id);
        $link->update($request->all());

        return $link;
    }

    public function delete(Request $request, $id)
    {
        $link = Link::findOrFail($id);
        $link->delete();

        return 204;
    }
}
