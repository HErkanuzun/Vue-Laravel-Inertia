<template>
    <slot name="header"></slot>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>


<!--<div>The Page with time {{ timer }}</div>
    <div>The Page with time {{ dnm }}</div> -->
     <div v-if="page.props.flash.success" class="success">{{page.props.flash.success}} </div>

    <slot>Default</slot>
</template>

<script setup>
    import { Link, usePage} from '@inertiajs/vue3'
    import { ref } from 'vue'
    const page = usePage()
    console.log(page.props)   
    //page.props.valiu.flash.success



    //const timer = ref(0)
    //const dnm = ref(0)
    //setInterval(() => timer.value++, 1000);
    //setTimeout(()=>dnm.value++,2000)
</script>

<style scoped>
    .success {
        background-color: blue;
        color: orangered;
    }
</style>