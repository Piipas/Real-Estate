<div class="col-md-4">
  <aside class="aa-sidebar">
    <!-- Start Single properties sidebar -->
    <div class="aa-properties-single-sidebar">
      <h3>Properties Search</h3>
      <form action="/properties" method="GET">
        <div class="aa-single-advance-search">
          <input type="text" placeholder="Type Your Location" name="query">
        </div>
        <div class="aa-single-advance-search">
          <select id="" name="category">
            <option selected="" value="0">Category</option>
            @foreach ($categories as $category)
              <option value="{{$category}}">{{ucfirst($category)}}</option>
            @endforeach
          </select>
        </div>
        {{-- <div class="aa-single-advance-search">
          <select id="" name="">
            <option selected="" value="0">Type</option>
            <option value="1">Flat</option>
            <option value="2">Land</option>
            <option value="3">Plot</option>
            <option value="4">Commercial</option>
          </select>
        </div>
        <div class="aa-single-advance-search">
          <select id="" name="">
            <option selected="" value="0">Type</option>
            <option value="1">Flat</option>
            <option value="2">Land</option>
            <option value="3">Plot</option>
            <option value="4">Commercial</option>
          </select>
        </div> --}}
        <div class="aa-single-filter-search">
          <span>AREA (SQ)</span>
          <span>FROM</span>
          <span id="skip-value-lower" class="example-val">30.00</span>
          <span>TO</span>
          <span id="skip-value-upper" class="example-val">100.00</span>
          <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
          </div>                  
        </div>
        <div class="aa-single-filter-search">
          <span>PRICE ($)</span>
          <span>FROM</span>
          <span id="skip-value-lower2" class="example-val">30.00</span>
          <span>TO</span>
          <span id="skip-value-upper2" class="example-val">100.00</span>
          <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
          </div>      
        </div>
        <div class="aa-single-advance-search">
          <input type="submit" value="Search" class="aa-search-btn">
        </div>
      </form>
    </div> 
    <!-- Start Single properties sidebar -->
    <div class="aa-properties-single-sidebar">
      <h3>Popular Properties</h3>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="/img/item/1.jpg" alt="img">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="#">This is Title</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
          <span>$65000</span>
        </div>              
      </div>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="/img/item/1.jpg" alt="img">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="#">This is Title</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
          <span>$65000</span>
        </div>              
      </div>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="/img/item/1.jpg" alt="img">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="#">This is Title</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
          <span>$65000</span>
        </div>              
      </div>
    </div>
  </aside>
</div>