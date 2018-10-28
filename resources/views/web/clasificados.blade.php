<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Clasificados</title>
  </head>
  <body>

    <div id="app">
        <nav-bar></nav-bar>
    </div>

    <div class="container p-5">
      <div class="row">
    @foreach($classifieds as $classified)
	    <div class="col-sm-6">
          <div class="card mb-4">
            <img class="card-img-top" src="{{$classified->file}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$classified->name}}</h5>
              <p class="card-text">{{$classified->excerpt}}</p>
              <a href="#" class="btn btn-secondary">Leer Más</a>
            </div>
          </div>
        </div>
    @endforeach
      </div>
    </div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6 offset-sm-4">
        		{{$classifieds->links()}}
    		</div>
		</div>
    </div>

	<style>
		body {
			background: rgba(127, 0, 0);
		}
	</style>

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

  </body>
</html>