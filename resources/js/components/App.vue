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
              <li v-if="post.tags.length > 0">
                Tags: 
                <span v-for="tag in post.tags" :key="tag.id">{{tag.name}}</span>
              </li>  
              <li>Descrizione: {{post.description}}</li>  
              <li>Data di pubblicazione{{post.publish_date}}</li>  
            </ul>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col justify-content-center d-flex">
          <nav>
            <ul class="pagination">
              <li>
                <button class="page-link" @click="fetchPosts(currentPage - 1)">Indietro</button>
              </li>
              <li v-for="page of lastPage" :key="page" class="page-item" :class="{ active: currentPage === page }">
                    <button class="page-link" @click="fetchPosts(page)">{{ page }}</button>
              </li>
              <li>
                <button class="page-link" @click="currentPage === lastPage ? '' : fetchPosts(currentPage + 1)">Avanti</button>
              </li>
            </ul>
          </nav>
        </div>
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
      postList: [],
      currentPage: 1,
      lastPage: null
    };
  },
  methods: {
    fetchPosts(page=1) {
      window.axios.get('/api/posts?page=' + page).then((resp) => {
          this.postList = resp.data.data;
          this.currentPage = resp.data.current_page;
          this.lastPage = resp.data.last_page;
        });
    }
  },

  mounted() {
    // window.axios.get('/api/posts')
    //   .then((resp) => {
    //     this.postList = resp.data;
    //   });
    this.fetchPosts();
  }
}
</script>

<style lang="scss">
  header {
    background-color: rgba(138, 86, 86, 0.623);
  }
</style>