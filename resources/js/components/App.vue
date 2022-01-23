<template>
  <div>
    <Navbar></Navbar>

    <header>
      <div class="container py-5 text-center">
        <h1>Laravel Boolpress</h1>
        <h3>Benvenuti nel blog che non contiene ancora nulla!</h3>
      </div>
    </header>

    <main>
      <h3 class="text-center fw-bold py-5">Ancora nessun dato disponibile...</h3>
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
}
</script>

<style lang="scss">
  header {
    background-color: rgba(138, 86, 86, 0.623);
  }
</style>