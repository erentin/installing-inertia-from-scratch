<template>
    <div>

        {{ message }} - <Link :href="route('dashboard')">Go To Dashboard</Link>

    </div>

    <Head :title="message" />

    <Head>
        <title>The Home Page</title>
    </Head>

</template>

<script setup>

    import { Head, Link } from '@inertiajs/vue3'

    defineProps({
        message: String
    })

</script>
