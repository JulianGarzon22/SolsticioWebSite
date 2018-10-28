<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Noticias</title>
  </head>
  <body>

    <div id="app">
      <nav-bar></nav-bar>
    </div>

    <div class="container p-5">
        <h1 class="display-4 mb-3 text-white">{{ $post->name }}</h1>
        <div class="card">
            <div class="card-body">
                @if($post->file)
                    <img src="{{ $post->file }}" class="img-responsive">
                @endif
                <hr>
                <em>{{ $post->excerpt }}</em>
                <hr>
                {!! $post->body !!}
            </div>
        </div>
    </div>

    <style>
        body{
            background: rgba(127, 0, 0); 
        }
        img {
            width: 100%;
        }
    </style>

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

  </body>
</html>