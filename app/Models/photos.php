<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    //
    protected $fillable = ['album_id', 'photo_path', 'caption'];
    public function album()
    {
        return $this->belongsTo(albums::class);
    }
}
