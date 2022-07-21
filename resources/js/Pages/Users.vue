<template>
    <h1 class="font-bold text-4xl">Users</h1>


    <Nav />

    <div class="mt-8" style="margin-top: 400px">
        <p>This is the time right now: {{ time }}</p>
        <Link href="/users" as="button" class="text-blue-600 underline" preserve-scroll>Refresh</Link>
        <!-- <Link href="/logout" method="post" :data="{user: 'Antonday'}" class="text-blue-600 underline" preserve-scroll>Refresh</Link> -->
    </div>
</template>

<script>

import { Link } from "@inertiajs/inertia-vue3"
import Nav from "../Shared/Navbar.vue"

export default {
    components: { Nav, Link },
    props: {
        time: String
    }
 
}
</script>

<style>

</style>