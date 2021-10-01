<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /*
    public function getCreatedAtAttribute($value)
    {
        return $value->format('d-m-Y');
    }
    */

}
