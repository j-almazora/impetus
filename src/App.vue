<template>
  <div id="app">
    <!-- <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div> -->
    <!-- <router-view/> -->

    <!-- BEGINNING -->
    <Navbar />
    <Home />
  </div>
</template>

<script>

import Navbar from '@/components/Navbar.vue'
import Home from '@/views/Home.vue'

export default {
  name:'app',
  components: {
    Home,
    Navbar
  }
}
</script>


<style>
#nav {
  text-align: center;
}

#app, html {
  background-color: rgb(219, 219, 219);
}

</style>
