<x-layout :noheader="true" :nofooter="true">
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="/">Property Home</a>
                <h4>Sign in to your account</h4>
              </div>
              <form class="contactform" method="post" action="/login">
                @csrf
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  @error('email')
                    <p class="h6 text-danger">{{$message}}</p>
                  @enderror
                  <input type="email" required="required" aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password">
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox"> Remember me
                </label>                                                          
                </div> 
                <div class="aa-single-submit">
                  <input type="submit" value="Send Message" class="aa-browse-btn" name="submit">  
                  <p>Don't Have A Account Yet? <a href="register.html">CREATE NOW!</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>