<form class="contactform" action="/contact/send" method="POST">
  @csrf
  <p class="comment-form-author">
    <label for="author">Name <span class="required">*</span></label>
    @error('name')
      <p class="h6 text-danger">{{$message}}</p>
    @enderror
    <input type="text" name="name" value="{{old('name')}}" size="30" required="required" />
  </p>
  <p class="comment-form-email">
    <label for="email">Email <span class="required">*</span></label>
    @error('email')
      <p class="h6 text-danger">{{$message}}</p>
    @enderror
    <input type="email" name="email" value="{{old('email')}}" aria-required="true" required="required" />
  </p>
  <p class="comment-form-url">
    <label for="subject">Subject</label>
    @error('subject')
      <p class="h6 text-danger">{{$message}}</p>
    @enderror
    <input type="text" value="{{old('subject')}}" name="subject" />
  </p>
  <p class="comment-form-comment">
    <label for="comment">Message</label>
    @error('comment')
      <p class="h6 text-danger">{{$message}}</p>
    @enderror
    <textarea name="body" cols="45" rows="8" aria-required="true" required="required">{{old('body')}}</textarea>
  </p>
  <p class="form-submit">
    <input type="submit" name="submit" class="aa-browse-btn" value="Send Message" />
  </p>
</form>