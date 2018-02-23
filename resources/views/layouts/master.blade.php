<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
  <style media="screen">
    #navMenu .navbar-start a{
       padding: 25px;
    }
    .navbar {
      height: 50px;
      position: fixed;
      z-index: 1;
      width: 100vw;
    }
  </style>
</head>
<body>

  <nav class="navbar is-white">
  <div class="container " style="padding-top: 0; margin-top:0;">
    <div class="navbar-brand">
      <a class="navbar-item brand-text" href="../">
        CRDM
      </a>
      <div class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id="navMenu" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/equipments">
          Equipments
        </a>
        <a class="navbar-item" href="/groups" >
          Groups
        </a>
        <a class="navbar-item" href="/issues">
          Issues
        </a>
        <a class="navbar-item" href="#">
          To be continued...
        </a>
      </div>

    </div>
  </div>
</nav>

  <div class="section" id="app">



    <div class="container" style="min-width:980px">

      @yield('content')

    </div>
  </div>

  <script
			  src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

  <script src="{!! asset('js/app.js') !!}" charset="utf-8"></script>
</body>
</html>
