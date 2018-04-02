<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cartridge Manager</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .home_link {
        float: left;
      }

      .left-square, .right-square{
        float: left;
        width: 335px;
        height: 100px;
        transition: width 0.5s;
      }

      .left-triangle {
        float: left;
        width: 0;
        height: 0;
        border-left: 40px solid rgb(52, 125, 193);
        border-bottom:  100px solid transparent;
      }

      .left-square {
        background-color: rgb(52, 125, 193);
      }
      .right-square {
        background-color: rgb(0, 39, 75);
      }

      .right-triangle {
        float: left;
        width: 0;
        height: 0;
        border-right: 40px solid rgb(0, 39, 75);
        border-top:  100px solid transparent;
        margin-left: -40px;
      }

      .text-middle {
                text-align: center;
                vertical-align: middle;
                line-height: 90px;
                color: #fff;
      }

      body {
        background-image: url("{{asset('img/background-grid.png')}}");
        background-size: cover;
      }

      @media screen and (max-width: 1250px){
          .home_link {
            text-align: center;
          }
          .left-triangle, .right-triangle{
            border: 0;
          }

          .left-square, .right-square {
            width: 240px;
          }
      }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('img/logo.png')}}" alt="" height="25px">
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       $(".left-square").mouseover(function(){
         $(".left-square").css('width', '500px');
           $(".right-square").css("width", "170px");
       }).mouseout(function() {
         $(".left-square").css('width', '335px');
           $(".right-square").css("width", "335px");
        });;
    });
    $(document).ready(function(){
       $(".right-square").mouseover(function(){
         $(".right-square").css('width', '500px');
           $(".left-square").css("width", "170px");
       }).mouseout(function() {
         $(".right-square").css('width', '335px');
           $(".left-square").css("width", "335px");
        });;
    });
    </script>
</body>
</html>
