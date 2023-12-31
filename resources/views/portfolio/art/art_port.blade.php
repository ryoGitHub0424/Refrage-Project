@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
  <a href="/logged_page" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Art</p>
        </div>
        
        <a href="/art_portfolios/create" class="button show-your-work">
          Show your work
        </a>
      </div>

      <section id="portfolio">

        @foreach($artPortfolios as $artPortfolio)
        <a href="/art_portfolios/{{$artPortfolio->id}}" class="portfolios-container">
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
                <p>{{auth()->user()->name}}</p>
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
            </ul>
          </div>
        </a>

        @endforeach
     
      </section>
    </main>

@endsection