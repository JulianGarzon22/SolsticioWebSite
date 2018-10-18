<template lang="html">
  <header class="main-header">
    <div class="background-overlay text-white py-5">
      <div class="container">
        <div class="row d-flex h-100">
          <div class="col-lg-8 justify-content-center align-self-center">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/background.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/background.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/background.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-lg-4 justify-content-center align-self-center">
            <h1>En esta pagina usted podrá:</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-outline-secondary btn-lg text-white">
                Read More
              </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- NEWSLETTER  -->
  <section id="newsletter" class="bg-light text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control form-control-lg" placeholder="Ingrese su nombre">
        </div>
        <div class="col-md-4">
          <input type="email" class="form-control form-control-lg" placeholder="Ingrese su correo">
        </div>
        <div class="col-md-4">
          <button class="btn btn-secondary btn-lg btn-block">
            Suscribirse
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section class="text-center team">
    <div class="container p-5">
      <h1 class="text-center text-white">Administradora</h1>
      <p class="text-white">
        Adipisicing unde eum odio aliquam dolor ad voluptas expedita consequuntur aperiam inventore eaque. Dolorum facilis aut eum a delectus. Fugit velit quas harum quisquam amet provident inventore. Repudiandae repudiandae delectus.
      </p>
      <div class="row justify-content-md-center">

        <!-- USER TEAM -->
        <div class="col-lg-4 justify-content-center align-self-center">
          <div class="card">
            <div class="card-body">
              <img src="img/person.png" class="img-fluid rounded-circle w-50">
              <h3>Lady Rincon</h3>
              <p>
                Dolor modi repudiandae quia beatae consectetur? Nam ullafugit ullam, accusamus! Totam mollitia eveniet!
              </p>
              </div>
            </div>
          </div>
        </div>
  </section>

  <footer>
    <div class="container p-3">
      <div class="row text-center">
        <div class="col ml-auto">
          <p>Copyright &copy; 2018</p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  data() {
    return {

    }
  },
  mounted() {
    this.readPost();
  },
  methods: {
    readPost() {
      axios.get().then(response => {
        this.post = response.data
      });
    }
  }
}

</script>

<style lang="css">

  .main-header {
    position: relative;
    background: url(../img/background.jpg);
    background-size: cover;
    min-height: 560px;
  }

  .background-overlay {
    background: rgba(127, 0, 0,.7);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .form-control, .btn{
    border-radius: 0;
  }

  .team {
    background: #7f0000;
  }

  .main-news {
    background: #7f0000;
  }

</style>
