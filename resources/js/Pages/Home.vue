<template>
    <h1 class="font-bold text-4xl">Home</h1>


    <Nav />
    
</template>

<script>
import Nav from "../Shared/Navbar.vue"

export default {
    components: { Nav },
    props: {
        name: String,
        stacks: Array
    }
 
}
</script>

<style>

</style>