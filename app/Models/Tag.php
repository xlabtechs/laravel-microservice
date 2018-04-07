<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Each tag can have many links.
     *
     */
    public function links()
    {
        return $this->belongsToMany('App\Models\Link');
    }
}
