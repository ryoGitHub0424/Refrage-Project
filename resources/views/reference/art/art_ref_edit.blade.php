@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_references" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Art/Edit your Art</p>
        </div>
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$artReference->image}}" alt="" />
        </div>

        <form class="add-form-items" method="POST" action="/art_references/{{$artReference->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-item">
            <label for="art_name">Art</label>
            <input
              type="text"
              name="art_name"
              placeholder="art..."
              value="{{$artReference->art_name}}"
            />
          </div>
          <div class="form-item">
            <label for="artist_name">Artist</label>
            <input type="text" name="artist_name" placeholder="artist..."  value="{{$artReference->art_name}}"/>
          </div>
          <div class="form-item">
            <label for="year">Year</label>
            <input type="text" name="year" placeholder="year..." value="{{$artReference->year}}"/>
          </div>
          <div class="form-item">
            <label for="location">Location</label>
            <input type="text" name="location" placeholder="location..." value="{{$artReference->location}}"/>
          </div>
          <div class="form-item">
            <label for="medium">Medium</label>
            <input type="text" name="medium" placeholder="medium..." value="{{$artReference->medium}}"/>
          </div>
          <div class="form-item">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="image..." value="{{$artReference->image}}"/>
          </div>
          <div class="form-item">
            <label for="overview">Overview</label>
            <input type="text" name="overview" placeholder="overview..." value="{{$artReference->overview}}"/>
          </div>

          <button class="button add-this-arc-btn">
            Edit this Art
          </button>
        </form>
      </div>
    </main>
@endsection