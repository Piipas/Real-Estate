<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function article() {
        return $this->belongsTo(\App\Models\Article::class, 'article_id', 'article_id');
    }
}
