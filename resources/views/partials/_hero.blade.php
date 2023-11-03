<section id="aa-slider">
  <div class="aa-slider-area"> 
    <!-- Top slider -->
    <div class="aa-top-slider">
      @foreach ($slider as $property)
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        {{-- {{dd(asset('/storage/'.$property->pictures->where('main', 1)->first()->name))}} --}}
        <img src="{{asset('/storage/'.$property->pictures->where('main', 1)->first()?->name)}}" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg capitalize">{{$property->type}}</span>
          <h2 class="aa-top-slider-title">{{$property->location}}</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>{{$property->location}}</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">${{$property->price}}</p>
          <a href="/property/{{$property->property_id}}" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      @endforeach
    </div>
  </div>
</section>