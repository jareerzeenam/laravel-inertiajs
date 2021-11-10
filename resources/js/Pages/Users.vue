<template>
    <Head title="Users"/>

    <h1 class="text-4xl font-bold">Users</h1>

    <ul>
        <li v-for="user in users" :key="user.id" v-text="user.name"  ></li>
    </ul>

    <div style="margin-top:550px">
        <p>The current time is {{ time }}.</p>

        <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>
            Refreash
        </Link>
    </div>

</template>

<script>

export default{
    props:{
        time:String,
        users:Array
    }
}

</script>
