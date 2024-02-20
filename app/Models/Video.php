<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'watchable_type',
        'watchable_id',
        'title',
        'description',
        'url',
    ];

    public function watchable()
    {
        return $this->morphTo();
    }

    public function likes()
    {
        return $this->morphToMany(Like::class, 'likeable')->withTimestamps();
    }
}
