<x-layout>
  {{-- Hero Section --}}
  @include('partials._hero')
  {{-- Advanced Search Section --}}
  <section id="aa-advance-search">
  <div class="container">
    <div class="aa-advance-search-area">
    <form class="form" action="/properties" method="GET">
      <div class="aa-advance-search-top">
      <div class="row">
        <div class="col-md-4">
        <div class="aa-single-advance-search">
          <input type="text" placeholder="Type Your Location" name="query" />
        </div>
        </div>
        <div class="col-md-2">
        <div class="aa-single-advance-search">
          <select name="category">
            <option>Category</option>
          @foreach ($categories as $category)
            <option value="{{$category}}">{{$category}}</option>
          @endforeach
          </select>
        </div>
        </div>
        <div class="col-md-2">
        <div class="aa-single-advance-search">
          <select>
          <option value="0" selected>Type</option>
          <option value="1">Flat</option>
          <option value="2">Land</option>
          <option value="3">Plot</option>
          <option value="4">Commercial</option>
          </select>
        </div>
        </div>
        <div class="col-md-2">
        <div class="aa-single-advance-search">
          <select>
          <option value="0" selected>Type</option>
          <option value="1">Flat</option>
          <option value="2">Land</option>
          <option value="3">Plot</option>
          <option value="4">Commercial</option>
          </select>
        </div>
        </div>
        <div class="col-md-2">
        <div class="aa-single-advance-search">
          <input class="aa-search-btn" type="submit" value="Search" />
        </div>
        </div>
      </div>
      </div>
      <div class="aa-advance-search-bottom">
      <div class="row">
        <div class="col-md-6">
        <div class="aa-single-filter-search">
          <span>AREA (SQ)</span>
          <span>FROM</span>
          <span id="skip-value-lower" class="example-val">30.00</span>
          <span>TO</span>
          <span id="skip-value-upper" class="example-val">100.00</span>
          <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="aa-single-filter-search">
          <span>PRICE (&dollar;)</span>
          <span>FROM</span>
          <span id="skip-value-lower2" class="example-val">30.00</span>
          <span>TO</span>
          <span id="skip-value-upper2" class="example-val">100.00</span>
          <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
        </div>
        </div>
      </div>
      </div>
    </form>
    </div>
  </div>
  </section>
  {{-- About Us Section --}}
  <section id="aa-about-us">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="aa-about-us-area">
      <div class="row">
        <div class="col-md-5">
        <div class="aa-about-us-left">
          <img src="img/about-us.png" alt="image">
        </div>
        </div>
        <div class="col-md-7">
        <div class="aa-about-us-right">
          <div class="aa-title">
          <h2>About Us</h2>
          <span></span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>                  
          <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  </section>
  {{-- Latest Properties Section --}}
  <section id="aa-latest-property">
  <div class="container">
    <div class="aa-latest-property-area">
    <div class="aa-title">
      <h2>Latest Properties</h2>
      <span></span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>         
    </div>
    <div class="aa-latest-properties-content">
      <div class="row">
      @foreach ($latest as $property)
      <x-property-card class="col-md-4" :property="$property" />
      @endforeach
      </div>
    </div>
    </div>
  </div>
  </section>
  {{-- Services Section --}}
  <section id="aa-service">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="aa-service-area">
      <div class="aa-title">
        <h2>Our Service</h2>
        <span></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
      </div>
      <!-- service content -->
      <div class="aa-service-content">
        <div class="row">
        <div class="col-md-3">
          <div class="aa-single-service">
          <div class="aa-service-icon">
            <span class="fa fa-home"></span>
          </div>
          <div class="aa-single-service-content">
            <h4><a href="#">Property Sale</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
          </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="aa-single-service">
          <div class="aa-service-icon">
            <span class="fa fa-check"></span>
          </div>
          <div class="aa-single-service-content">
            <h4><a href="#">Property Rent</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
          </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="aa-single-service">
          <div class="aa-service-icon">
            <span class="fa fa-crosshairs"></span>
          </div>
          <div class="aa-single-service-content">
            <h4><a href="#">Property Development</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
          </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="aa-single-service">
          <div class="aa-service-icon">
            <span class="fa fa-bar-chart-o"></span>
          </div>
          <div class="aa-single-service-content">
            <h4><a href="#">Market Analysis</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  </section>
  {{-- Promo Banner Section --}}
  <section id="aa-promo-banner">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="aa-promo-banner-area">
      <h3>Find Your Best Property</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
      <a href="#" class="aa-view-btn">View Details</a>
      </div>
    </div>
    </div>
  </div>
  </section>
  {{-- Agents Section --}}
  <section id="aa-agents">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="aa-agents-area">
      <div class="aa-title">
        <h2>Our Agents</h2>
        <span></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
      </div>
      <!-- agents content -->
      <div class="aa-agents-content">
        <ul class="aa-agents-slider">
        @foreach ($agents as $agent)
        <li>
          <div class="aa-single-agents">
          <div class="aa-agents-img">
            <img src="{{asset('storage/'.$agent->picture)}}" alt="agent member image">
          </div>
          <div class="aa-agetns-info">
            <h4><a href="#">{{$agent->name}}</a></h4>
            <span>{{$agent->profession}}t</span>
            <div class="aa-agent-social">
            <a href="{{$agent->facebook}}"><i class="fa fa-facebook"></i></a>
            <a href="{{$agent->twitter}}"><i class="fa fa-twitter"></i></a>
            <a href="{{$agent->linkedin}}"><i class="fa fa-linkedin"></i></a>
            <a href="{{$agent->googleplus}}"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
          </div>
        </li>
        @endforeach
        </ul>
      </div>
      </div>
    </div>
    </div>
  </div>
  </section>
  {{-- Reviews Section --}}
  <section id="aa-client-testimonial">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <div class="aa-client-testimonial-area">
      <div class="aa-title">
        <h2>What Client Say</h2>
        <span></span>
        <p>
        Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Necessitatibus eaque quas
        debitis animi ipsum, veritatis!
        </p>
      </div>
      <!-- testimonial content -->
      <div class="aa-testimonial-content">
        <!-- testimonial slider -->
        <ul class="aa-testimonial-slider">
        @foreach ($reviews as $review)
        <li>
          <div class="aa-testimonial-single">
          <div class="aa-testimonial-img">
            <img
            src="{{asset('storage/'.$review->avatar)}}"
            alt="testimonial img"
            />
          </div>
          <div class="aa-testimonial-info">
            <p>
            {{$review->review}}
            </p>
          </div>
          <div class="aa-testimonial-bio">
            <p>{{$review->reviewer}}</p>
            <span>{{$review->profession}}</span>
          </div>
          </div>
        </li>
        @endforeach
        </ul>
      </div>
      </div>
    </div>
    </div>
  </div>
  </section>
  {{-- Articles Section --}}
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Latest News</h2>
              <span></span>
              <p>
                Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Saepe magni, est harum
                repellendus. Accusantium, nostrum!
              </p>
            </div>
            <div class="aa-latest-blog-content">
              <div class="row">
                @foreach ($articles as $article)
                  <x-article-card class="col-md-4" :article="$article" />
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>