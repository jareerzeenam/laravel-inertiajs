<template>
        <Head>
            <title>Home</title>
            <meta type="description" content="Home Information" head-key="description">
        </Head>
        <h1 class="text-3xl font-bold">Hello, {{ name }}</h1>

        <p>In thes series, we will use the following frameworks</p>

        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
</template>

<script setup>
    defineProps({
        name:String,
        frameworks:Array
    });
</script>
