<template lang="html">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Solsticio Parque Residencial</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Archivo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clasificados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Peticiones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Censo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeria</a>
          </li>
          <li class="nav-item">
            <a id="pagos" class="nav-link" href="#">Pagos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
}
</script>

<style lang="css">

  .navbar {
    box-shadow: 2px 2px 5px #000;
    opacity: 0.9;
  }

  #pagos {
    color: #d35400;
    font-weight: bold;
  }

</style>
