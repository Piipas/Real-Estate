<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function store(Request $request, Article $article) {
    $formFields = $request->validate([
      "commenter" => "required|min:5|max:20",
      "email" => "required|email",
      "comment" => "required|min:20|max:200",
    ]);

    $formFields["article_id"] = $article->article_id;

    if (auth()) {
      $formFields["user_id"] = auth()->id();
    }

    Comment::create($formFields);

    return redirect('/blog/'.$article->article_id)->with('message', 'Comment added successfuly!');
  }

  public function reply(Request $request, Article $article, Comment $comment) {
    $formFields = $request->validate([
      "commenter" => "required|min:5|max:20",
      "email" => "required|email",
      "comment" => "required|min:20|max:200",
    ]);

    $formFields["article_id"] = $article->article_id;
    $formFields["parent_id"] = $comment->comment_id;

    if (auth()) {
      $formFields["user_id"] = auth()->id();
    }

    return redirect('/blog/'.$article->article_id)->with('message', 'Comment added successfuly!');

  }
}
