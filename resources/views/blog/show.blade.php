<x-layout>
  <x-secondary_hero :title="$article->title" />
  <x-item-page id="aa-blog">
    <div class="aa-blog-area">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-blog-content">
            <div class="row">
              <div class="col-md-12">
                <article class="aa-blog-single aa-blog-details">
                  <figure class="aa-blog-img">
                    <a href="#"><img alt="img" src="{{asset('/storage/'.$article->picture)}}"></a>
                    <span class="aa-date-tag">{{date_format($article->created_at, 'd F, y')}}</span>
                  </figure>
                  <div class="aa-blog-single-content">
                    <h2>{{$article->title}}</h2>
                    <div class="aa-blog-single-bottom">
                      <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> Admin</a>
                      <a class="aa-blog-comments" href="#"><i class="fa fa-comment-o"></i>{{$article->comments()->get()->count()}}</a>
                    </div>
                    {!! $article->content !!}
                  </div>
                </article>
              </div>
              <!-- Post tags -->
              <div class="col-md-12">
                <div class="aa-blog-post-tag">
                  <ul>
                    <li>TAGS:</li>
                    @foreach (explode(',', $article->tags) as $tag)
                      <li><a href="#">{{strtoupper(trim($tag))}}</a></li>,
                    @endforeach                       
                  </ul>
                </div>
              </div>
              <!-- Social Share -->
              <div class="col-md-12">
                <div class="aa-properties-social">
                  <ul>
                    <li>Share</li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
              <!-- post navigation -->
              <div class="col-md-12">
                <div class="aa-blog-navigation">
                  <div class="aa-blog-pagination-left">
                    <a href="#" class="aa-prev">
                      <span class="fa fa-angle-double-left">                            
                      </span>
                      PREVIOUS
                    </a>
                  </div>
                  <div class="aa-blog-pagination-right">
                    <a href="#" class="aa-next">
                      NEXT
                      <span class="fa fa-angle-double-right">                            
                      </span>
                    </a>                          
                  </div>
                </div>
              </div>
              <!-- Related blog post -->
              <div class="col-md-12">
                <div class="aa-blog-related-post">
                  <div class="aa-title">
                    <h2>Related Post</h2>
                    <span></span>
                  </div>
                  <div class="aa-blog-related-post-area">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <article class="aa-blog-single">
                          <figure class="aa-blog-img">
                            <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                            <span class="aa-date-tag">15 April, 16</span>
                          </figure>
                          <div class="aa-blog-single-content">
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                            <div class="aa-blog-single-bottom">
                              <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                              <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                            </div>
                          </div>                   
                        </article>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <article class="aa-blog-single">
                          <figure class="aa-blog-img">
                            <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                            <span class="aa-date-tag">15 April, 16</span>
                          </figure>
                          <div class="aa-blog-single-content">
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                            <div class="aa-blog-single-bottom">
                              <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                              <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                            </div>
                          </div>                   
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
              <!-- comment threats -->
              <div class="col-md-12">
                <div id="comments" class="aa-comments-area">
                  <h3>{{$comments->count()}} Comments</h3>
                  <div class="comments">
                    <ul class="commentlist">
                      @foreach ($comments as $comment)
                        <x-comment :comment="$comment" :author="$comment->id" />
                        @unless($comment->cihldren)
                          <ul class="children">
                            @foreach ($comment->children as $childComment)
                              <x-comment :comment="$childComment" :author="$childComment->id" />
                                @unless($childComment->cihldren)
                                  <ul class="children">
                                    @foreach ($childComment->children as $grandChildComment)
                                      <x-comment :comment="$grandChildComment" :author="$grandChildComment->id" />
                                    @endforeach
                                  </ul>
                                @endunless
                            @endforeach
                          </ul>
                        @endunless
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>   
              <x-comment-form :aid="$article->article_id" />
            </div>                                   
          </div>
        </div>
        {{-- Right/Secondary Side --}}
        <x-right-widgets :categories="$categories" />
      </div>
    </div>
  </x-item-page>
</x-layout>