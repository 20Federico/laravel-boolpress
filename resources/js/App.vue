<template>
  <div>
    <Navbar></Navbar>

    <router-view></router-view>

    <Footer></Footer>
  </div>
</template>

<script> 
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'

export default {
  components: { 
    Navbar,
    Footer
  },
  name: 'App'
}
</script>

<style lang="scss">
  header {
    background-color: rgba(138, 86, 86, 0.623);
  }
</style>