<template>
  <div>
    <header class="main-header">
      <div class="background-overlay text-white py-5">
        <div class="container">
          <div class="row d-flex h-100">
            <div class="col-lg-8 justify-content-center align-self-center">
              <b-carousel id="carousel1"
                          style="text-shadow: 1px 1px 2px #333;"
                          controls
                          indicators
                          background="#ababab"
                          :interval="4000"
                          img-width="1024"
                          img-height="480"
                          v-model="slide"
                          @sliding-start="onSlideStart"
                          @sliding-end="onSlideEnd"
              >

                <b-carousel-slide v-for="post in posts" :key="post.id" :img-src="post.file">
                  <h3> {{ post.name }}</h3>
                  <p> {{ post.excerpt }} </p>
                  <a href="#" class="btn btn-outline-secondary btn-lg text-white">
                    Leer Más
                  </a>
                </b-carousel-slide>
              </b-carousel>
            </div>
            <div class="col-lg-4 justify-content-center align-self-center">
              <h1>En esta pagina usted podrá:</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- TEAM -->
    <section class="text-center team">
      <div class="container p-5">
        <h1 class="text-center text-black">Administradora</h1>
        <p class="text-dark">
          Adipisicing unde eum odio aliquam dolor ad voluptas expedita consequuntur aperiam inventore eaque. Dolorum facilis aut eum a delectus. Fugit velit quas harum quisquam amet provident inventore. Repudiandae repudiandae delectus.
        </p>

          <!-- USER TEAM -->
        <div class="row justify-content-md-center">
          <div class="col-lg-4 justify-content-center align-self-center">
            <div class="card">
              <div class="card-body">
                <img src="http://localhost/solsticio/public/images/person.png" class="img-fluid rounded-circle w-50">
                <h3>Lady Rincon</h3>
                <p>
                  Dolor modi repudiandae quia beatae consectetur? Nam ullafugit ullam, accusamus! Totam mollitia eveniet!
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <footer>
      <div class="container p-3">
        <div class="row text-center">
          <div class="col ml-auto">
            <p class="text-white">Copyright &copy; 2018</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
      slide: 0,
      sliding: null
    }
  },
  created() {
    this.readPost();
  },
  methods: {
    readPost() {
      axios.get('http://localhost/solsticio/public/inicio.json').then(response => {
        this.posts = response.data
      });
    },
    onSlideStart (slide) {
      this.sliding = true
    },
    onSlideEnd (slide) {
      this.sliding = false
    }
  }
}

</script>

<style lang="css">

  .main-header {
    position: relative;
    background: url(http://localhost/solsticio/public/images/background.jpg);
    background-size: cover;
    min-height: 400px;
  }

  .background-overlay {
    background: rgba(127, 0, 0,.7);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .main-header .btn {
    padding: 3px;
    border-radius: 8px;
    width: 80%;
  }

  .card-body img {
    width: 50%;
  }

  footer {
    background: rgba(127, 0, 0);
  }

</style>
