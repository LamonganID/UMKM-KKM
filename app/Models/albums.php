<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class albums extends Model
{
    //
    protected $fillable = ['name', 'slug', 'description'];

    public function photos()
    {
        return $this->hasMany(photos::class);
    }

    public function getFirstPhotoUrlAttribute()
    {
        $firstPhoto = $this->photos()->first();
        return $firstPhoto ? $firstPhoto->photo_url : null;
    }
}
