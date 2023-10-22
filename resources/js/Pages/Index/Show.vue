<template>
    <div>Show</div>
    <Link :href="route('index')">Index Page</Link>
    {{ listing }}
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
  </script>
  
  <script>
    import MainLayout from '../../Layouts/MainLayout.vue'
    export default {
      layout: MainLayout,
      props: {listing:Object}
    }


  </script>