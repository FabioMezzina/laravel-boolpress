<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_id',
        'title',
        'body',
        'slug'
    ];

    /**
     * DB Relations
     */
    // posts-user
    public function user() {
        return $this->belongsTo('App\User');
    }
}
