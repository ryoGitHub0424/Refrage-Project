@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_portfolios" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Art/Show your work</p>
        </div>
      </div>

      <div class="add-detail-container">

        <form class="add-form-items" method="POST" action="/art_portfolios" enctype="multipart/form-data">
          @csrf
          <div class="form-item-account-name">
            <p>Account Name:</p>
            <p>{{auth()->user()->name}}</p>
          </div>
          <div class="form-item">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="title..." value="{{old('title')}}"/>
          </div>
            @error('title')
              <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="concept">Concept</label>
            <input type="text" name="concept" placeholder="concept..." value="{{old('concept')}}"/>
          </div>
            @error('concept')
              <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" placeholder="thumbnail..." value="{{old('thumbnail')}}"/>
          </div>
            @error('thumbnail')
              <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="file">Portfolio</label>
            <input
              type="text"
              name="file"
              placeholder="your portfolio..."
              value="{{old('file')}}"
            />
          </div>
            @error('file')
              <p class="error-message">{{$message}}</p>
            @enderror
            
            <div>
              <button class="button add-this-arc-btn">
                Show Your Work
              </button>
            </div>
        </form>
      </div>
    </main>
@endsection