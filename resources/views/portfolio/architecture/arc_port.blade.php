@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
  <a href="/logged_page" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Architecture</p>
        </div>
        
        <a href="/architecture_portfolios/create" class="button show-your-work"
          >Show your work
        </a>
      </div>

      <section id="portfolio">
        @foreach ($arcPortfolios as $arcPortfolio)
        {{-- each portfolio --}}
        <a href="/architecture_portfolios/{{$arcPortfolio->id}}" class="portfolios-container">
          <div class="portfolio-item">
            <div class="portfolio-thumbnail">
              <img
                src="{{$arcPortfolio->thumbnail ? asset('storage/' . $arcPortfolio->thumbnail) : asset('image/ghiburi_house.jpg')}}"
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
        {{-- end of each portfolio --}}
        @endforeach
      </section>
    </main>

@endsection