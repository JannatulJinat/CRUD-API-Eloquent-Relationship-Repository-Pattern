<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'likeable')->withTimestamps();
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'likeable')->withTimestamps();
    }
}
