<template>
  <Layout>
    <h1 class="text-4xl font-bold">Users</h1>


    <div style="margin-top:550px">
        <p>The current time is {{ time }}.</p>

        <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>
            Refreash
        </Link>
    </div>
  </Layout>
</template>

<script>
    import Layout from "../Shared/Layout";
    export default {
        components:{ Layout },

        props:{
            time:String
        }

    };
</script>
