@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/art_portfolios" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Art/{{$artPortfolio->title}} by ryokaneko20010424</p>
        </div>
        <div class="short-detail-btns">
          <a href="/art_portfolios/{{$artPortfolio->id}}/edit" class="button edit-btn"> edit </a>
          <form method="POST" action="/art_portfolios/{{$artPortfolio->id}}" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="button delete-btn"> delete </button>
          </form>
        </div>
      </div>

      <section id="portfolio">
        <a href="art_port_detail.html" class="portfolios-container">
          <div class="portfolio-item">
            <div class="portfolio-thumbnail">
              <img
                src="{{$artPortfolio->thumbnail ? asset('storage/' . $artPortfolio->thumbnail) : asset('/images/stary_night.jpg')}}"
                alt="picture"
              />
            </div>
            <ul class="port-detail-list">
              <li>
                <p>Account Name:</p>
                <p>ryokaneko20010424</p>
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