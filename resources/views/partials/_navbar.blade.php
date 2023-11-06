@props(['categories'])
<section id="aa-menu-area">
  <nav class="navbar navbar-default main-navbar" role="navigation">  
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand aa-logo" href="/"> Home <span>Property</span></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
          <li class="{{(request()->is('/')) ? 'active' : ''}}">
            <a href="/">HOME</a>
          </li>
          <li class="dropdown {{(request()->is('properties')) ? 'active' : ''}}" class="">
            <a class="dropdown-toggle" href="/properties">PROPERTIES</a>
          </li>                                        
          <li class="dropdown {{(request()->is('blog')) ? 'active' : ''}}" class="">
            <a class="dropdown-toggle" href="/blog">BLOG</a>
          </li>
          <li class="{{(request()->is('contact')) ? 'active' : ''}}">
            <a href="/contact">CONTACT</a>
          </li>
        </ul>                            
      </div>      
    </div>          
  </nav> 
</section>