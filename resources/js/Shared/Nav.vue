<template>
    <nav>
        <ul class="flex space-x-6">

            <li><NavLink href="/" :active=" $page.component == 'Home'">Home</NavLink></li>
            <li><NavLink href="/users" :active=" $page.component == 'Users'">Users</NavLink></li>
            <li><NavLink href="/settings" :active=" $page.component == 'Settings'">Settings</NavLink></li>




            <!-- <li><Link href="/" class="text-blue-500 hover:underline" :class="{'font-bold underline' : $page.url == '/'}">Home</Link></li> -->
            <!-- <li><Link href="/" class="text-blue-500 hover:underline" :class="{'font-bold underline' : $page.component == 'Home'}">Home</Link></li> -->
            <!-- <li><Link href="/users?foo=bar" class="text-blue-500 hover:underline" :class="{'font-bold underline' : $page.url.startsWith('/users')}">Users</Link></li> -->
            <!-- <li><Link href="/users?foo=bar&buz=buzz" class="text-blue-500 hover:underline" :class="{'font-bold underline' : $page.component == 'Users'}">Users</Link></li>
            <li><Link href="/settings" class="text-blue-500 hover:underline" :class="{'font-bold underline' : $page.component == 'Settings'}">Settings</Link></li> -->
            <li><Link href="/test" method="post" :data="{foo:'bar'}" as="button" class="text-blue-500 hover:underline">test</Link></li>

            <li><NavLink href="/logout" method="post">Log Out</NavLink></li>
        </ul>
    </nav>
</template>
<script>

 import NavLink from "../Shared/NavLink";
    export default {
         components:{ NavLink},

    };
</script>
<style lang="">

</style>
