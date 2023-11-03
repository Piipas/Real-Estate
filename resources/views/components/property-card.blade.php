<div {{$attributes}}>
  <article class="aa-properties-item">
    <a class="aa-properties-item-img" href="{{asset('/property/'.$property->property_id)}}">
      <img alt="img" src="{{asset('/storage/'.$property->pictures()->where('main', 1)->first()->name)}}" />
    </a>
    <div class="aa-tag for-sale">For Sale</div>
    <div class="aa-properties-item-content">
      <div class="aa-properties-info">
        <span>{{$property->bedroom}} Bedrooms</span>
        <span>{{$property->bath}} Baths</span>
        <span>{{$property->kitchen}} Kitchens</span>
        <span>1100 SQ FT</span>
      </div>
      <div class="aa-properties-about">
        <h3 title="{{$property->title}}"><a class="show" href="{{asset('/property/'.$property->property_id)}}">{{$property->title}}</a></h3>
        {!! $property->description !!}
      </div>
      <div class="aa-properties-detial">
        <span class="aa-price">
          ${{$property->price}}
        </span>
        <a class="aa-secondary-btn" href="{{asset('/property/'.$property->property_id)}}">View Details</a>
      </div>
    </div>
  </article>
</div>