@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
  <a href="/logged_page" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Art</p>
        </div>
        <a href="/art_references/create" class="button show-your-work"> Add Art </a>
      </div>
      <div class="references">
        @foreach ($artReferences as $artReference)
            {{-- each reference --}}
        <div class="reference-item">
          <a href="/art_references/{{$artReference->id}}" class="thumbnail-pic">
            <img
              src="{{$artReference->image ? asset('storage/' . $artReference->image) : asset('image/ghiburi_house.jpg')}}"
              alt="artImg"
            />
          </a>
          <div class="short-detail">
            <p>Art: {{$artReference->art_name}}</p>
            <p>Artist: {{$artReference->artist_name}}</p>
          </div>
        </div>
        {{-- end of each reference --}}
        @endforeach
        
        <div class="pagination-ref">
          {{$artReferences->links()}}
        </div>

      </div>
    </main>

@endsection