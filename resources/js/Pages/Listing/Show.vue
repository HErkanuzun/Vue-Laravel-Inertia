<template>
 <div>
    <ListingAddress :listing="listing"/>
 </div>
</template>
<script setup>
import ListingAddress from '@/Components/ListingAddres.vue'

    defineProps({
        listing:Object
    })
</script>