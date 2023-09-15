@extends('header_after')

@section('logged_content')

<main class="main-wrapper">
      <div class="welcome-container">
        <div class="welcome-message">
          <p>
            #Welcome <br />
            <span class="span-to">To</span><br />
            <span class="span-refrege">"Refrage"</span>
          </p>
        </div>

        <div class="welcome-category-container">
          <div class="category-btns">
            <p>Reference</p>
            <a href="/architecture_references" class="button"> Architecture </a>
            <a href="/art_references" class="button"> Art </a>
          </div>
          <div class="category-btns">
            <p>Portfolio</p>
            <a href="/architecture_portfolios" class="button"> Architecture </a>
            <a href="/art_portfolios" class="button"> Art </a>
          </div>
          <div class="category-btns">
            <p>Information</p>
            <a href="/information" class="button"> Information </a>
          </div>
        </div>
      </div>

      <section id="portfolio">
        <p class="category-title">See Architecture's Portfolios</p>
        @foreach ($arcPortfolios as $arcPortfolio)
        <a href="/architecture_portfolios/{{$arcPortfolio->id}}" class="portfolios-container">
          <div class="portfolio-item">
            <div class="portfolio-thumbnail">
              <img
                src="{{$arcPortfolio->thumbnail ? asset('storage/' . $arcPortfolio->thumbnail) : asset('/images/house.jpg')}}"
                alt="picture"
              />
            </div>
            <ul class="port-detail-list">
              <li>
                <p>Account Name:</p>
                <p></p>
              </li>
              <li>
                <p>Title:</p>
                <p>{{$arcPortfolio->title}}</p>
              </li>
              <li>
                <p>Concept:</p>
                <p>
                  {{$arcPortfolio->concept}}
                </p>
              </li>
            </ul>
          </div>
        </a>
          @endforeach
      
        <div class="pagination">
          {{$arcPortfolios->links()}}
        </div>
      </section>

      <section id="portfolio">
        <p class="category-title">See Art's Portfolios</p>

        @foreach($artPortfolios as $artPortfolio)
        <a href="/art_portfolios/{{$artPortfolio->id}}" class="portfolios-container">
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
                <p>dddddddd</p>
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
        <div class="pagination">
          {{$artPortfolios->links()}}
        </div>
      </section>

    </main>
@endsection