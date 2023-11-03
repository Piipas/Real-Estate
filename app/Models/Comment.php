<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Comment extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $fillable = ['user_id', 'commenter', 'comment', 'email', 'article_id'];

    public function article() {
        return $this->belongsTo(\App\Models\Article::class, 'article_id', 'article_id');
    }
}
