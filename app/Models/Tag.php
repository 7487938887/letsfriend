<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

}
