<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
</head>
<body>

  <div class="section" id="app">
    <div class="container">

      @yield('content')

    </div>
  </div>
  <script src="{!! asset('js/app.js') !!}" charset="utf-8"></script>

</body>
</html>
