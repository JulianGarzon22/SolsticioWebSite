<template lang="html">
  <b-navbar toggleable="md" type="light" variant="light">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

    <b-navbar-brand href="/solsticio/public/">Solsticio Parque Residencial</b-navbar-brand>

    <b-collapse is-nav id="nav_collapse">

      <b-navbar-nav class="ml-auto">
        <b-nav-item href="/solsticio/public/">Inicio</b-nav-item>
        <b-nav-item href="/solsticio/public/noticias">Noticias</b-nav-item>
        <b-nav-item href="/solsticio/public/servicios">Servicios</b-nav-item>
        <b-nav-item href="/solsticio/public/archivos">Archivos</b-nav-item>
        <b-nav-item href="/solsticio/public/clasificados">Clasificados</b-nav-item>
        <b-nav-item href="/solsticio/public/peticiones">Peticiones</b-nav-item>
        <b-nav-item href="/solsticio/public/censo">Censo</b-nav-item>
        <b-nav-item id="pagos" href="/solsticio/public/pagos">Pagos</b-nav-item>
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
