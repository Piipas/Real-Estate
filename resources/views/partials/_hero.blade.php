<section id="aa-slider">
  <div class="aa-slider-area"> 
    <!-- Top slider -->
    <div class="aa-top-slider">
      @foreach ($lastProperties as $property)
      <!-- Top slider single slide -->
      <div class="aa-top-slider-single">
        <img src="storage/pictures/2.jpg" alt="img">
        <!-- Top slider content -->
        <div class="aa-top-slider-content">
          <span class="aa-top-slider-catg capitalize">{{$property->type}}</span>
          <h2 class="aa-top-slider-title">{{$property->location}}</h2>
          <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
          <span class="aa-top-slider-off">30% OFF</span>
          <p class="aa-top-slider-price">${{$property->price}}</p>
          <a href="/property/{{$property->id}}" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      @endforeach
    </div>
  </div>
</section>