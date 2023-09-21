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

      <section id="portfolio">
        <a href="art_port_detail.html" class="portfolios-container">
          <div class="portfolio-item">
            <div class="portfolio-thumbnail">
              <img
                src="{{$artPortfolio->thumbnail}}"
                alt="picture"
              />
            </div>
            <ul class="port-detail-list">
              <li>
                <p>Account Name:</p>
                <p>{{$artPortfolio->user_name}}</p>
              </li>
              <li>
                <p>Title:</p>
                <p>{{$artPortfolio->title}}</p>
              </li>
              <li>
                <p>Concept:</p>
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
        </a>
        
      </section>
    </main>

@endsection