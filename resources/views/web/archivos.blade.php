<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Archivo</title>
  </head>
  <body>

    <div id="app">
        <nav-bar></nav-bar>
    </div>

    <div class="container p-5">
			<h1 class="display-3 text-white">Archivos</h1>
			<h5 class="text-white mt-3">Lorem ipsum dolor sit amet consectetur adipiscing elit velit condimentum non nec, dapibus curabitur nulla sem at est molestie rutrum integer lacus penatibus eros, vehicula ullamcorper netus in dui dictum ornare interdum quisque tellus. At tortor porta nam cras ligula a leo convallis risus torquent, suspendisse aptent hac platea pretium volutpat erat laoreet. Conubia eu ligula nisi pretium vel aenean nunc scelerisque cubilia velit vehicula, lacus malesuada nascetur integer varius convallis litora egestas sodales placerat.</h5>
		<table class="table mt-5">
		<thead class="thead-dark">
			<tr>
			<th scope="col">#</th>
			<th scope="col">Nombre</th>
			<th scope="col">Resumen</th>
			<th scope="col">Descargas</th>
			</tr>
		</thead>
		<tbody>
			@foreach($files as $file)
			<tr class="bg-light">
			<th scope="row">{{$file -> id}}</th>
			<td>{{$file -> name}}</td>
			<td>{{$file -> summary}}</td>
			<td><button type="button" class="btn btn-dark">Descargar</button></td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>

    <div class="container">
      <div class="col-sm-6 offset-sm-4">
        {{$files->links()}}
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