@extends('header_before')

@section('content')

<main class="main-wrapper">
      <section id="title-page">
        <div class="title-page-left">
          <p class="big-title">Refrege</p>
          <p class="target-exp1">For those who want to store your references</p>
        </div>
        <div class="title-page-right">
          <p class="target-exp2">
            For those who want to show yur work to the world
          </p>

          <div class="account-btn-container">
            <a href="/register" class="button"> Make Your Account </a>
            <a href="/login" class="button"
              >Already Have an Account?
            </a>
          </div>
        </div>
      </section>

      <section id="portfolio">
        <p class="category-title">See Portfolios</p>

        @foreach($artPortfolios as $artPortfolio)
        <a href="/login" class="portfolios-container">
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
            </ul>
          </div>
        </a>

        @endforeach

        <a href="/login" class="button see-more-btn">See more... </a>
      </section>

    </main>

@endsection