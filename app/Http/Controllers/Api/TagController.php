<?php

namespace App\Http\Controllers\Api;

Use \App\Models\Tag as Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagController extends Controller
{
    public function index()
    {
        return Tag::select('id','name')->get();
    }

    public function show($id)
    {
        return Tag::select('id','name')->find($id);
    }

    public function store(Request $request)
    {
        return Tag::select('id','name')->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::select('id','name')->findOrFail($id);
        $tag->update($request->all());
		
        return $tag;
    }

    public function delete(Request $request, $id)
    {
        $tag = Tag::select('id','name')->findOrFail($id);
        $tag->delete();

        return 204;
    }
}
