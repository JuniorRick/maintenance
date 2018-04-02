<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $post->title }}</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>{{ $post->title }}</h1>
        <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
        <p> {!! $post->body !!}</p>
      </div>
    </div>
  </div>
</body>
</html>
