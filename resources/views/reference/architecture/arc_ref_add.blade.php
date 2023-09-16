@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/architecture_references" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Architecture/Add your Architecture</p>
        </div>
      </div>

      <div class="add-detail-container">
        <form class="add-form-items" method="POST" action="/architecture_references" enctype="multipart/form-data">
          @csrf
          <div class="form-item">
            <label for="architecture_name">Architecture</label>
            <input
              type="text"
              name="architecture_name"
              placeholder="architecture..."
              value="{{old('architecture_name')}}"
            />
          </div>
            @error('architecture_name')
                <p class="error-message">{{$message}}</p>
            @enderror

          <div class="form-item">
            <label for="architect_name">Architect</label>
            <input type="text" name="architect_name" placeholder="architect..."  value="{{old('architecte_name')}}"/>
          </div>
          @error('architect_name')
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
            <label for="how">How</label>
            <input type="text" name="how" placeholder="how..." value="{{old('how')}}"/>
          </div>
          @error('how')
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
            Add this Arc
          </button>
            </div>
          
        </form>
      </div>
    </main>
@endsection