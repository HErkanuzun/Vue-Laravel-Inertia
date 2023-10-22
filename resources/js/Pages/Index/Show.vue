<template>
  <div>{{ listing }}</div>
  <div></div>
  <div></div>
  <div></div>
</template>
 
<script setup>
    import MainLayout from '../../Layouts/MainLayout.vue'
    defineProps({
      listing: Object,
    })

</script>