@props(['comment' => 'comment', 'author' => 'author'])
<li class="author-comments">
  <div class="media">
    <div class="media-left">    
      <img alt="img" src="{{asset('/img/unknown.webp')}}" class="media-object news-img">      
    </div>
    <div class="media-body">
      <h4 class="author-name">{{$comment->commenter}}</h4>
      <span class="comments-date">{{date_format($comment->created_at, 'jS F, Y')}}</span>
      @if ($author == $comment->user_id)
        <span class="author-tag">Author</span>
      @endif
      <p>{{$comment->comment}}</p>
      <a class="reply-btn" href="#">Reply</a>
    </div>
  </div>
</li>