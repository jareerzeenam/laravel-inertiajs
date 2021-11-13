<template>
  <Head title="Create Users" />

  <h1 class="text-3xl">Create New User</h1>

  <form @submit.prevent="submit" method="POST" class="max-w-md mx-auto mt-8">
      <div class="md-6">
          <label for="name" class="block mb-2 uppercase font-bold text-xs test-gray-700">
              Name
          </label>

          <input v-model="form.name" type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required>
      </div>
      <div class="md-6">
          <label for="email" class="block mb-2 uppercase font-bold text-xs test-gray-700">
              Email
          </label>

          <input v-model="form.email" type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" required>
      </div>
      <div class="md-6 mb-5">
          <label for="password" class="block mb-2 uppercase font-bold text-xs test-gray-700">
              Password
          </label>

          <input v-model="form.password" type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>
      </div>
      <div class="md-6">
          <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
              Submit
          </button>
      </div>
  </form>
</template>

<script setup>

import { reactive } from "vue";
import {Inertia} from '@inertiajs/inertia';

let form = reactive({
    name:"",
    email:"",
    password:"",
});

let submit = () => {
    Inertia.post('/users',form);
}
</script>
