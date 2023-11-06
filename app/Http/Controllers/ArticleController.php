<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Property;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function archive() {
        return view('blog.archive', [
            'articles' => Article::latest()->paginate(6),
            'categories' => Property::categories
        ]);
    }

    public function show(Article $article) {
        return view('blog.show', [
            'article' => $article,
            'comments' => $article->comments()->get()->toTree(),
            'categories' => Property::categories
        ]);
    }
}
