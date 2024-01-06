<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        // public const published = 1;
        // public const Draft = 0;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
