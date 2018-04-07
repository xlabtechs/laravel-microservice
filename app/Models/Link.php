<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    /**
     * Each link can have many tags.
     *
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimeStamps();
    }
	
}
