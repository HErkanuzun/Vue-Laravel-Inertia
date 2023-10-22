<template>
    <div v-for="listing in listings" :key="listing.id">
        {{ listing.city }} {{ listing.street }} {{ listing.street_nr }} for {{ listing.price }}
        <Link :href="route('show',[listing.id])">Show Page</Link>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    listings: Array,  
})

</script>