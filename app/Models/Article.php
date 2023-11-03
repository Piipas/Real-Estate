<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = "article_id";

    public function comments() {
        return $this->hasMany(\App\Models\Comment::class, 'article_id', 'article_id');
    }
}
