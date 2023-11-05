<x-layout :noheader="true" :nofooter="true">
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="/">Property Home</a>
                <h4>Create your account and Stay with us</h4>
              </div>
              <form class="contactform" action="/register" method="POST">
                @csrf
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="{{old('name')}}" name="name">
                  @error('name')
                    <p class="h6 text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="{{old('email')}}" name="email">
                  @error('email')
                    <p class="h6 text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password"> 
                  @error('password')
                    <p class="h6 text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="aa-single-field">
                  <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                  <input type="password" name="password_confirmation">
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit">                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</x-layout>