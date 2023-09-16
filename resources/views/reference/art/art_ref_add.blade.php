@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_references" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Art/Add your Art</p>
        </div>
      </div>

      <div class="add-detail-container">
        <form class="add-form-items" method="POST" action="/art_references" enctype="multipart/form-data">
          @csrf
          <div class="form-item">
            <label for="art_name">Art</label>
            <input
              type="text"
              name="art_name"
              placeholder="art..."
              value="{{old('art_name')}}"
            />
          </div>
          @error('art_name')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="artist_name">Artist</label>
            <input type="text" name="artist_name" placeholder="artist..." value="{{old('artist_name')}}"/>
          </div>
          @error('artist_name')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="year">Year</label>
            <input type="text" name="year" placeholder="year..." value="{{old('year')}}"/>
          </div>
          @error('year')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="location">Location</label>
            <input type="text" name="location" placeholder="location..." value="{{old('location')}}"/>
          </div>
          @error('location')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="medium">Medium</label>
            <input type="text" name="medium" placeholder="medium..." value="{{old('medium')}}"/>
          </div>
            @error('medium')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="image..." />
          </div>
            @error('image')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div class="form-item">
            <label for="overview">Overview</label>
            <input type="text" name="overview" placeholder="overview..." value="{{old('overview')}}"/>
          </div>
            @error('overview')
                <p class="error-message">{{$message}}</p>
            @enderror
          <div>
          <button class="button add-this-arc-btn">
            Add this Art
          </button>
          </div>
          
        </form>
      </div>
    </main>
@endsection