@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_portfolios" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Art/Edit your Art</p>
        </div>
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$artPortfolio->thumbnail}}" alt="" />
        </div>

        <form class="add-form-items" method="POST" action="/art_portfolios/{{$artPortfolio->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-item">
            <label for="title">Title</label>
            <input
              type="text"
              name="title"
              placeholder="title..."
              value="{{$artPortfolio->title}}"
            />

            {{-- @error('architecture_name')
            <p>{{$message}}</p>
            @enderror --}}
          </div>
          <div class="form-item">
            <label for="concept">Concept</label>
            <input type="text" name="concept" placeholder="concept..."  value="{{$artPortfolio->concept}}"/>
          </div>
          <div class="form-item">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" placeholder="thumbnail..." value="{{$artPortfolio->thumbnail}}"/>
          </div>
          <div class="form-item">
            <label for="file">Portfolio</label>
            <input type="text" name="file" placeholder="portfolio..." value="{{$artPortfolio->file}}"/>
          </div>

          <button class="button add-this-arc-btn">
            Edit this Arc
          </button>
        </form>
      </div>
    </main>


@endsection