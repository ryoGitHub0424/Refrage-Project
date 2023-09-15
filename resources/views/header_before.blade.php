<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REFRAGE</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Permanent+Marker&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_resp.css') }}" />
  </head>
  <body>
    <header id="header">
      <div class="header-flex">
        <div class="header-flex-left">
          <a class="title" href="/">Refrege</a>
        </div>

        <div class="header-flex-right">
          <nav>
            <li>
              <a href="/register">Register</a>
            </li>
            <li>
              <a href="/login">Login</a>
            </li>
            <!--<li>-->
            <!--  <a href="/org_login_form">Organization</a>-->
            <!--</li>-->

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
          <a href="#title-page">HOME</a>
        </li>
        <li>
          <a href="#portfolio">PORTFOLIO</a>
        </li>
        <li>
          <a href="#information">INFORMATION</a>
        </li>
      </ul>
    </div>

    @yield('content')

    <script src="{{asset('js/style.js')}}"></script>
  </body>
</html>