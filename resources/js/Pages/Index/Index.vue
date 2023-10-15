<template>
    <div>Index</div>
    <Link :href="route('show')">Show Page</Link>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
  </script>