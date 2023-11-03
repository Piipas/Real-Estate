<x-layout>
  <x-secondary_hero :title="'Blog'" />
  {{-- Right/Primary Side --}}
  <x-item-page id="aa-blog">
    <div class="col-md-12">
      <div class="aa-blog-area">
        <div class="row">
          <div class="col-md-8">
            <div class="aa-blog-content">
              <div class="row">
                @foreach ($articles as $article)
                  <x-article-card class="col-md6 col-sm-6" :article="$article" />
                @endforeach
              </div>
            </div>
          </div>
          <x-right-widgets />
        </div>
      </div>
    </div>
  </x-item-page>
</x-layout>