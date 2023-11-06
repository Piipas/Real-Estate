<x-layout>
  <x-secondary_hero :title="$property->title" />
  <x-item-page :id="'aa-properties'">
    {{-- Left/Primary Side --}}
    <div class="col-md-8">
      <div class="aa-properties-content">
        <!-- Start properties content body -->
        <div class="aa-properties-details">
          <div class="aa-properties-details-img">
            @foreach ($pictures as $picture)
              <img src="{{asset('/storage/'.$picture->name)}}" alt="img" />
            @endforeach
          </div>
          <div class="aa-properties-info">
            <h2>{{$property->title}}</h2>
            <span class="aa-price">${{$property->price}}</span>
            {!! $property->description !!}
            <h4>Propery Features</h4>
            <ul>
              {!! $property->bedroom ? "<li>".$property->bedroom." Bedrooms</li>" : "" !!}
              {!! $property->bath ? "<li>".$property->bath." Baths</li>" : "" !!}
              {!! $property->kitchen ? "<li>".$property->kitchen." Kitchen</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Air Condition</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Belcony</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Gym</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Garden</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." CCTV</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Children Play Ground</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Comunity Center</li>" : "" !!}
              {!! $property->bedromm ? "<li>".$property->bedromm." Security System</li>" : "" !!}
            </ul>
            @if ($property->video)
              <h4>Property Video</h4>
              <iframe width="100%" height="480" src="{{$property->video}}" frameborder="0" allowfullscreen></iframe>
            @endif
            @if ($property->latitude && $property->longitude)
            <h4>Property Map</h4>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"
                width="100%"
                height="450"
                frameborder="0"
                style="border: 0;"
                allowfullscreen
              ></iframe>
            @endif
          </div>
          <!-- Properties social share -->
          <div class="aa-properties-social">
            <ul>
              <li>Share</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
          <!-- Nearby properties -->
          <div class="aa-nearby-properties">
            <div class="aa-title">
              <h2>Nearby Properties</h2>
              <span></span>
            </div>
            <div class="aa-nearby-properties-area">
              <div class="row">
                @foreach ($nearby as $property)
                <x-property-card class="col-md-6" :property="$property" />
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Right/Secondary Side --}}
    <x-right-widgets :categories="$categories" />
  </x-item-page>
</x-layout>