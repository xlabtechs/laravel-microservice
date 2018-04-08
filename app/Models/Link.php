<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	protected $table = 'links';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'url',
        'category_id',
    ];
	
    /**
     * Each link can have many tags.
     *
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimeStamps();
    }
	
	public function category(){
		return $this->belongsTo('App\Models\Category','category_id');
	}
}
