<?php

namespace App\Http\Controllers\Api;

Use \App\Models\Link as Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LinkController extends Controller
{
    public function index()
    {
        return Link::select('id','name','description','url','category_id')->with(['category','tags'])->get();
    }

    public function show($id)
    {
        return Link::select('id','name','description','url','category_id')->with(['category','tags'])->find($id);
    }

    public function store(Request $request)
    {
        return Link::select('id','name','description','url','category_id')->with(['category','tags'])->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $link = Link::select('id','name','description','url','category_id')->with(['category','tags'])->findOrFail($id);
        $link->update($request->all());

        return $link;
    }

    public function delete(Request $request, $id)
    {
        $link = Link::findOrFail($id);
        $link->delete();

        return 204;
    }
	
	/*
	* Tags for link
	* params $id
	*/
	public function tags($id){
		$link = Link::with(['tags'])->findOrFail($id);
		
		return $link;
	}
	
	/*
	* Attach Tags for link
	* params $id
	* params $request
	*/
	public function attachTags(Request $request,$id){
		$link = Link::select('id','name','description','url','category_id')->with(['category','tags'])->findOrFail($id);
		
		//Deatach all previous related tags to the link
		$link->tags()->detach();
		
		//Attach the new tags separated by gomma
		$tagsIds = explode(",",$request->tags_ids);
		
		foreach($tagsIds as $key=>$value){
			$link->tags()->attach($value);
		}
		
		$new_link = Link::select('id','name','description','url','category_id')->with(['category','tags'])->findOrFail($id);
		return $new_link;
	}
	
	/*
	* Detach Tags for link
	* params $id
	*/
	public function detachTags($id){
		$link = Link::select('id','name','description','url','category_id')->with(['category','tags'])->findOrFail($id);
		
		//Detach all previous related tags to the link
		$link->tags()->detach();
	
		$new_link = Link::select('id','name','description','url','category_id')->with(['category','tags'])->findOrFail($id);
		return $new_link;
	}
	
}
