<template>
  <header>
    <div class="container py-5 text-center">
      <h1>{{title}}</h1>
      <h3>{{subTitle}}</h3>
    </div>
  </header>
</template>

<script>
export default {
  props: {
    title: String,
    subTitle: String
  } 
}
</script>

<style>

</style>