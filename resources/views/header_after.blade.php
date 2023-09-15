<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>logged_in_page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Permanent+Marker&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style_resp.css') }}" />
  </head>
  <body>
    <header id="header">
      <div class="header-flex">
        <div class="header-flex-left">
          <a class="title" href="/logged_page">Refrege</a>
        </div>

        <div class="header-flex-right">
          <nav>
            <div class="user-name">
              <p>Welcome:</p>
              <p></p>
            </div>
            <li>
              <form method="POST" action="/logout">
                @csrf
                <button class="button" type="submit">Log out</button>
              </form>
            </li>

            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="sidebar">
      <ul>
        <li>
          <a href="/logged_page">HOME</a>
        </li>
        <li>
          <a href="/architecture_references">Ref:Architecture</a>
        </li>
        <li>
          <a href="/art_references">Ref:Art</a>
        </li>
        <li>
          <a href="/architecture_portfolios">Portfolio:Architecture</a>
        </li>
        <li>
          <a href="/art_portfolios">Portfolio:Art</a>
        </li>
        <li>
          <a href="/information">Information</a>
        </li>
      </ul>
    </div>

    @yield('logged_content')

    <script src="{{asset('js/style.js')}}"></script>
  </body>
</html>