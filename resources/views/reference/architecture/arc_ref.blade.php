@extends('header_after')

@section('logged_content')
<main class="main-wrapper">
  <a href="/logged_page" class="button back-btn">Back</a>
      <div class="category-info">
        <div class="category-name">
          <p>Reference:Architecture</p>
        </div>
        
        <a href="/architecture_references/create" class="button show-your-work"> Add Arc </a>
      </div>
      <div class="references">

        {{-- each reference --}}

        @foreach($arcReferences as $arcReference)
        <a href="/architecture_references/{{$arcReference->id}}" class="reference-item">
          <div class="thumbnail-pic">
            <img
              src="{{$arcReference->image}}"
              alt="architectureImg"
            />
          </div>
          <div class="short-detail">
            <p>Architecture: {{ $arcReference->architecture_name}}</p>
            <p>Architect: {{ $arcReference->architect_name}}</p>
            
          </div>
        </a>
        @endforeach
        {{-- end of each reference --}}
      </div>
    </main>

@endsection