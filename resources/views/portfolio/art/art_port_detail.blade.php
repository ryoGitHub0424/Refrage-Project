@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_portfolios" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Art/{{$artPortfolio->title}} by {{$artPortfolio->user_name}}</p>
        </div>
        
        @auth
        <div class="short-detail-btns">
          <a href="/art_portfolios/{{$artPortfolio->id}}/edit" class="button edit-btn"> edit </a>
          <form method="POST" action="/art_portfolios/{{$artPortfolio->id}}" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="button delete-btn"> delete </button>
          </form>
        </div>
        @endauth
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$artPortfolio->thumbnail}}" alt="" />
        </div>
        <div class="reference-detail">
          <ul>
            <li>
              <p><strong>Account Name:</strong></p>
              <p>{{$artPortfolio->user_name}}</p>
            </li>
            <li>
              <p><strong>Title: </strong></p>
              <p>{{$artPortfolio->title}}</p>
            </li>
            <li>
              <p><strong>Concept:</strong></p>
              <p>
                {{$artPortfolio->concept}}
              </p>
            </li>
            <li>
              <p><strong>Portfolio:</strong></p>
              <p>{{$artPortfolio->file}}</p>
            </li>
          </ul>
        </div>
      </div>
    </main>

@endsection