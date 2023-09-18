@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/architecture_references" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Architecture/{{$arcReference->architecture_name}}</p>
        </div>
        
        @auth
        <div class="short-detail-btns">
          <a href="/architecture_references/{{$arcReference->id}}/edit" class="button edit-btn"> edit </a>

          <form method="POST" action="/architecture_references/{{$arcReference->id}}" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="button delete-btn"> delete </button>
          </form>
        </div>
        
        @endauth
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$arcReference->image ? asset('storage/' . $arcReference->image) : asset('/images/house.jpg')}}" alt="" />
        </div>
        <div class="reference-detail">
          <ul>
            <li>
              <p><strong>Architecture:</strong></p>
              <p>{{$arcReference->architecture_name}}</p>
            </li>
            <li>
              <p><strong>Architect:</strong></p>
              <p>{{$arcReference->architect_name}}</p>
            </li>
            <li>
              <p><strong>Year:</strong></p>
              <p>{{$arcReference->year}}</p>
            </li>
            <li>
              <p><strong>Location</strong></p>
              <p>{{$arcReference->location}}</p>
            </li>
            <li>
              <p><strong>How:</strong></p>
              <p>{{$arcReference->how}}</p>
            </li>
            <li>
              <p><strong>Overview:</strong></p>
              <p>
                {{$arcReference->overview}}
              </p>
            </li>
          </ul>
        </div>
      </div>
    </main>

@endsection