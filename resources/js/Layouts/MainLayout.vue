<template>
    <slot name="header"></slot>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>
    <div>The Page with time {{ timer }}</div>
    <div>The Page with time {{ dnm }}</div>
    <slot>Default</slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import { ref } from 'vue'

    const timer = ref(0)
    const dnm = ref(0)
    setInterval(() => timer.value++, 1000);
    setTimeout(()=>dnm.value++,2000)
</script>
