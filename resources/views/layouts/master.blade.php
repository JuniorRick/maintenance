<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
</head>
<body>

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
