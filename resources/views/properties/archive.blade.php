<x-layout>
  <x-secondary_hero :title="'properties'" />
  <x-item-page>
    {{-- Left/Primary Side --}}
    <div class="col-md-8">
      <div class="aa-properties-content">
        <!-- start properties content head -->
        <div class="aa-properties-content-head">              
          <div class="aa-properties-content-head-left">
            <form action="" class="aa-sort-form">
              <label for="">Sort by</label>
              <select name="">
                <option value="1" selected="Default">Default</option>
                <option value="2">Name</option>
                <option value="3">Price</option>
                <option value="4">Date</option>
              </select>
            </form>
            <form action="" class="aa-show-form">
              <label for="">Show</label>
              <select name="">
                <option value="1" selected="12">6</option>
                <option value="2">12</option>
                <option value="3">24</option>
              </select>
            </form>
          </div>
          <div class="aa-properties-content-head-right">
            <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
            <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
          </div>            
        </div>
        <!-- Start properties content body -->
        <div class="aa-properties-content-body">
          <ul class="aa-properties-nav">
            @foreach ($properties as $property)
              <x-property-card class="col-md-6" :property="$property" />
            @endforeach
          </ul>
        </div>
        <div class="margin-top-sm">
          {{$properties->links()}}
        </div>
      </div>
    </div>
    {{-- Right/Secondary Side --}}
    <x-left-widgets />
  </x-item-page>
</x-layout>