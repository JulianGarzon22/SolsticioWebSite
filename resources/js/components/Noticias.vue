<template lang="html">
  <div>
    <b-card-group deck v-for="post in posts">
      <b-card :title="post.title"
              :img-src="post.file"
              img-alt="Image"
              img-top
              tag="article"
              style="max-width: 20rem;"
              class="mb-2">
        <p class="card-text">
          {{ post.excerpt }}
        </p>
        <b-button href="#" variant="primary">Leer Más</b-button>
      </b-card>
    </b-card-group>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
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
  }
}
</script>

<style lang="css">
</style>
