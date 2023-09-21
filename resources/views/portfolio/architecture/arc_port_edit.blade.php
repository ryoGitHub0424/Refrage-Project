@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/logged_page" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Architecture/Edit your Architecture</p>
        </div>
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$arcPortfolio->thumbnail}}" alt="" />
        </div>

        <form class="add-form-items" method="POST" action="/architecture_portfolios/{{$arcPortfolio->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-item">
            <label for="title">Title</label>
            <input
              type="text"
              name="title"
              placeholder="title..."
              value="{{$arcPortfolio->title}}"
            />
          </div>
          <div class="form-item">
            <label for="concept">Concept</label>
            <input type="text" name="concept" placeholder="concept..."  value="{{$arcPortfolio->concept}}"/>
          </div>
          <div class="form-item">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" placeholder="thumbnail..." value="{{$arcPortfolio->thumbnail}}"/>
          </div>
          <div class="form-item">
            <label for="file">Portfolio</label>
            <input type="text" name="file" placeholder="portfolio..." value="{{$arcPortfolio->file}}"/>
          </div>

          <button class="button add-this-arc-btn">
            Edit this Arc
          </button>
        </form>
      </div>
    </main>
@endsection