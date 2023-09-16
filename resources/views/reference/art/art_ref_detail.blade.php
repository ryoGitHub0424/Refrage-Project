@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_references" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Art/{{$artReference->art_name}}</p>
        </div>
        <div class="short-detail-btns">
          <a href="/art_references/{{$artReference->id}}/edit" class="button edit-btn"> edit </a>
          <form method="POST" action="/art_references/{{$artReference->id}}" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="button delete-btn"> delete </button>
          </form>
        </div>
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img
            src="{{$artReference->image ? asset('storage/' . $artReference->image) : asset('/images/stary_night.jpg')}}"
            alt=""
          />
        </div>
        <div class="reference-detail">
          <ul>
            <li>
              <p><strong>Art:</strong></p>
              <p>{{$artReference->art_name}}</p>
            </li>
            <li>
              <p><strong>Artist:</strong></p>
              <p>{{$artReference->artist_name}}</p>
            </li>
            <li>
              <p><strong>Year:</strong></p>
              <p>{{$artReference->year}}</p>
            </li>
            <li>
              <p><strong>Location</strong></p>
              <p>{{$artReference->location}}</p>
            </li>
            <li>
              <p><strong>How:</strong></p>
              <p>{{$artReference->medium}}</p>
            </li>
            <li>
              <p><strong>Overview:</strong></p>
              <p>
                {{$artReference->overview}}
              </p>
            </li>
          </ul>
        </div>
      </div>
    </main>
@endsection