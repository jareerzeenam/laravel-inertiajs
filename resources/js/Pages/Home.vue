<template>
    <h1>Hello, {{ name }}</h1>

    <p>In thes series, we will use the following frameworks</p>

    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>

    <Nav/>

</template>

<script>
    import Nav from "../Shared/Nav"
    export default {
        components:{ Nav },
        props:{
            name:String,
            frameworks:Array
        },
    };
</script>
