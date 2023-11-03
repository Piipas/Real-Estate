<div {{$attributes}}>
  <article class="aa-blog-single">
    <figure class="aa-blog-img">
      <a href="{{asset('/article/'.$article->article_id)}}">
        <img src="{{asset('/storage/'.$article->picture)}}" alt="img"/>
      </a>
      <span class="aa-date-tag">{{date_format($article->created_at, 'd F, y')}}</span>
    </figure>
    <div class="aa-blog-single-content">
      <h3>
        <a href="{{asset('/article/'.$article->article_id)}}">{{$article->title}}</a>
      </h3>
      <p>{{trim(explode('</p>', $article->content)[0], '<p>')}}</p>
      <div class="aa-blog-single-bottom">
        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i>Admin</a>
        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>{{$article->comments()->get()->count()}}</a>
      </div>
    </div>
  </article>
</div>