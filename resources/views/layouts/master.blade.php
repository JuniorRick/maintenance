<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="1200;http://localhost:8000/" />
  <title>@yield('title')</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style media="screen">
    #navMenu .navbar-start a{
       padding: 25px;
    }
    .navbar {
      height: 50px;
      position: fixed;
      z-index: 1;
      width: 100vw;
      color: #000;
      border-radius: 20px;
    }
  </style>
</head>
<body>

  <nav class="navbar is-white is-mobile">
  <div class="container " style="padding-top: 0; margin-top:0;">
    <div class="navbar-brand">
      <a class="navbar-item brand-text" href="/home">
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
        <a class="navbar-item" href="https://www.youtube.com/watch?v=iT-nrgWNb2M">
          To be continued...
        </a>
      </div>

    </div>
  </div>
</nav>


  <div class="section" id="app">
    @if (Session::has('message'))
      <div class="alert alert-info notification-success">{{ Session::get('message') }}</div>
    @endif

    <div class="container" style="min-width:980px">


      @yield('content')

    </div>
  </div>

  <script
			  src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>


  <script src="{!! asset('js/app.js') !!}" charset="utf-8"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js" charset="utf-8"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      setTimeout(() => { $('.alert').slideUp() }, 5000);


      // // $('select[name="equipment_id"]').select2();
      // $('select[name="equipment_id"]').css('width', '400px');
    });
  </script>
</body>
</html>
