<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    protected $fillable = ['title', 'slug', 'content', 'thumbnail', 'category_id', 'author_id', 'status', 'published_at'];

    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
