@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/architecture_references" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Architecture/Edit your Architecture</p>
        </div>
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$arcReference->image}}" alt="" />
        </div>

        <form class="add-form-items" method="POST" action="/architecture_references/{{$arcReference->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-item">
            <label for="architecture_name">Architecture</label>
            <input
              type="text"
              name="architecture_name"
              placeholder="architecture..."
              value="{{$arcReference->architecture_name}}"
            />
          </div>
          <div class="form-item">
            <label for="architect_name">Architect</label>
            <input type="text" name="architect_name" placeholder="architect..."  value="{{$arcReference->architect_name}}"/>
          </div>
          <div class="form-item">
            <label for="year">Year</label>
            <input type="text" name="year" placeholder="year..." value="{{$arcReference->year}}"/>
          </div>
          <div class="form-item">
            <label for="location">Location</label>
            <input type="text" name="location" placeholder="location..." value="{{$arcReference->location}}"/>
          </div>
          <div class="form-item">
            <label for="how">How</label>
            <input type="text" name="how" placeholder="how..." value="{{$arcReference->how}}"/>
          </div>
          <div class="form-item">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="image..." value="{{$arcReference->image}}"/>
          </div>
          <div class="form-item">
            <label for="overview">Overview</label>
            <input type="text" name="overview" placeholder="overview..." value="{{$arcReference->overview}}"/>
          </div>

          <button class="button add-this-arc-btn">
            Edit this Arc
          </button>
        </form>
      </div>
    </main>
@endsection