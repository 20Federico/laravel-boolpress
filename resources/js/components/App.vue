<template>
  <div>
    <Navbar></Navbar>

    <header>
      <div class="container py-5 text-center">
        <h1>Laravel Boolpress</h1>
        <h3>Benvenuti in questo strabiliante blog!</h3>
      </div>
    </header>

    <main>
      <h3 v-if="postList.length === 0" class="text-center fw-bold py-5">Ancora nessun dato disponibile...</h3>

      <div class="d-flex justify-content-center py-5">
        <ul class="list-group col-8">
          <li v-for="post in postList" :key="post.id" class="list-group-item">
            <strong>{{post.title}}</strong>
            <ul>
              <li>Autore: {{post.user.name}}</li>  
              <li>Categoria: {{post.category.name}}</li>  
              <li>Descrizione: {{post.description}}</li>  
              <li>Data di pubblicazione{{post.publish_date}}</li>  
            </ul>
          </li>
        </ul>
      </div>

    </main>

    <Footer></Footer>
  </div>
</template>

<script> 
import Navbar from './partials/Navbar.vue'
import Footer from './partials/Footer.vue'

export default {
  components: { 
    Navbar,
    Footer
  },
  name: 'App',
  data() {
    return {
      postList: []
    };
  },

  mounted() {
    window.axios.get('/api/posts')
      .then((resp) => {
        this.postList = resp.data;
      });
  }
}
</script>

<style lang="scss">
  header {
    background-color: rgba(138, 86, 86, 0.623);
  }
</style>