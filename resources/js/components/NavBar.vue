<template lang="html">
  <b-navbar toggleable="md" type="light" variant="light">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

    <b-navbar-brand href="#">Solsticio Parque Residencial</b-navbar-brand>

    <b-collapse is-nav id="nav_collapse">

      <b-navbar-nav class="ml-auto">
        <b-nav-item href="/solsticio/public/">Inicio</b-nav-item>
        <b-nav-item href="/solsticio/public/noticias">Noticias</b-nav-item>
        <b-nav-item href="/solsticio/public/servicios">Servicios</b-nav-item>
        <b-nav-item href="#">Archivo</b-nav-item>
        <b-nav-item href="#">Clasificados</b-nav-item>
        <b-nav-item href="#">Peticiones</b-nav-item>
        <b-nav-item href="#">Censo</b-nav-item>
        <b-nav-item href="#">Galeria</b-nav-item>
        <b-nav-item id="pagos" href="#">Pagos</b-nav-item>
      </b-navbar-nav>

    </b-collapse>
  </b-navbar>
</template>

<script>
export default {
}
</script>

<style lang="css">

  .navbar {
    box-shadow: 2px 2px 5px #000;
  }

  #pagos {
    color: #d35400;
    font-weight: bold;
  }

</style>
