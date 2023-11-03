@props(['aid'])
<div class="col-md-12">
  <div id="respond">
    <h3 class="reply-title">Leave a Comment</h3>
    <form id="commentform" action="/comment/add/{{$aid}}" method="POST">
      @csrf
      @auth
      @else
        <p class="comment-notes">
          Your email address will not be published. Required fields are marked <span class="required">*</span>
        </p>
        <p class="comment-form-author">
          <label for="author">Name <span class="required">*</span></label>
          @error('commenter')
            <p class="h6 text-danger">{{$message}}</p>
          @enderror
          <input type="text" required="required" size="30" name="commenter" value="{{old('commenter')}}">
        </p>
        <p class="comment-form-email">
          <label for="email">Email <span class="required">*</span></label>
          @error('email')
            <p class="h6 text-danger">{{$message}}</p>
          @enderror
          <input type="email" required="required" aria-required="true" name="email" value="{{old('email')}}">
        </p>
      @endauth
      <p class="comment-form-comment">
        <label for="comment">Comment</label>
        @error('comment')
          <p class="h6 text-danger">{{$message}}</p>
        @enderror
        <textarea required="required" aria-required="true" rows="8" cols="45" name="comment">{{old('comment')}}</textarea>
      </p>
      <p class="form-submit">
        <input type="submit" value="Post Comment" class="aa-browse-btn" name="submit">
      </p>        
    </form>
  </div>
</div>