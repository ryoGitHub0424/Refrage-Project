@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
      <a href="/architecture_portfolios" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Portfolio:Architecture/{{$arcPortfolio->title}} by </p>
        </div>
          <div class="short-detail-btns">
            <a href="/architecture_portfolios/{{$arcPortfolio->id}}/edit" class="button edit-btn"> edit </a>
            <form method="POST" action="/architecture_portfolios/{{$arcPortfolio->id}}" class="delete-form">
              @csrf
              @method('DELETE')
              <button class="button delete-btn"> delete </button>
            </form>
          </div>
      </div>

      <div class="detail-container">
        <div class="reference-thumbnail">
          <img src="{{$arcPortfolio->thumbnail ? asset('storage/' . $arcPortfolio->thumbnail) : asset('/images/house.jpg')}}" alt="" />
        </div>
        <div class="reference-detail">
          <ul>
            <li>
              <p><strong>Account Name:</strong></p>
              <p>ryokaneko20010424</p>
            </li>
            <li>
              <p><strong>Title: </strong></p>
              <p>{{$arcPortfolio->title}}</p>
            </li>
            <li>
              <p><strong>Concept:</strong></p>
              <p>
                {{$arcPortfolio->concept}}
              </p>
            </li>
            <li>
              <p><strong>Portfolio:</strong></p>
              <p>{{$arcPortfolio->file}}</p>
            </li>
          </ul>
        </div>
      </div>
    </main>

@endsection