<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public $timestamps = false;

    /**
     * @return BelongsToMany
     */
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }

}
