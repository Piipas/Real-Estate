<header id="aa-header">  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-header-area">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="aa-header-left">
                <div class="aa-telephone-no">
                  <span class="fa fa-phone"></span>
                  1-900-523-3564
                </div>
                <div class="aa-email hidden-xs">
                  <span class="fa fa-envelope-o"></span> contact@markups.com
                </div>
              </div>              
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="aa-header-right">
                @auth
                  <a class="aa-register">Hi, {{auth()->user()->name}}.</a>
                  <form action="/logout" method="post" style="display:inline">
                    @csrf
                    <input type="submit" class="aa-login" value="Logout" style="background-color:transparent;outline:none;border:0;cursor:pointer">
                  </form>
                @else
                  <a href="/register" class="aa-register">Register</a>
                  <a href="/login" class="aa-login">Login</a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>