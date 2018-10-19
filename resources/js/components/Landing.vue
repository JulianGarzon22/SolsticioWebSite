<template>
  <div>
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

      <b-carousel-slide v-for="post in posts" :img-src="post.file">
        <h4> {{ post.name }}</h4>
        <p> {{ post.excerpt }} </p>
      </b-carousel-slide>

    </b-carousel>
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
      axios.get('http://localhost/solsticio/public/inicio').then(response => {
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
    /* background: url(../img/background.jpg); */
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
