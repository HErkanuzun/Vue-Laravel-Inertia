<template>
       <div>Index</div>
       <Link :href="route('show',['id'])">Show Page</Link>
    <div>
      The message is {{ message }}
      {{ listing }}
    </div>
</template>
  
<script setup>
  import { Link } from '@inertiajs/vue3'
  defineProps(['message'])
</script>
<script>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue'
export default {
  layout: MainLayout
}
</script>