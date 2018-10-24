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
      <div class="row">

    @foreach($posts as $post)

        <div class="col-sm-6">
          <div class="card mb-4">
            <img class="card-img-top" src="{{$post->file}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->excerpt}}</p>
              <a href="#" class="btn btn-secondary">Leer Más</a>
            </div>
          </div>
        </div>

    @endforeach

      </div>
    </div>

    <div class="container">
      <div class="col-sm-6 offset-sm-3">
        {{$posts->links()}}
      </div>
    </div>

    <style media="screen">
      body {
        background: rgba(127, 0, 0);
      }
    </style>

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

  </body>
</html>
