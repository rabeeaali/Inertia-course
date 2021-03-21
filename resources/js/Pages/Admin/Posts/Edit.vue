<template>
  <div class="container mx-auto px-6 py-8">
    <div class="flex justify-between items-center">
      <h3 class="text-gray-700 text-3xl font-medium">Update User</h3>
      <inertia-link :href="route('admin.posts.index')">
        <svg
          class="w-8"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"
          />
        </svg>
      </inertia-link>
    </div>

    <div class="mt-8">
      <form @submit.prevent="updatePost">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700"
                >Name</label
              >
              <input
                type="text"
                v-model="form.name"
                :class="{ 'border-red-600': errors.name }"
                id="name"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              />
              <p class="mt-1 text-sm text-red-600" v-if="errors">
                {{ errors.name }}
              </p>
            </div>

            <div class="col-span-6">
              <label for="Body" class="block text-sm font-medium text-gray-700"
                >Body</label
              >
              <textarea
                name="body"
                v-model="form.body"
                :class="{ 'border-red-600': errors.body }"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                rows="4"
              ></textarea>
              <p class="mt-1 text-sm text-red-600" v-if="errors">
                {{ errors.body }}
              </p>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
            <button
              type="submit"
              class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Update
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Layout";
export default {
  layout: AdminLayout,
  props: ["post"],
  data() {
    return {
      form: {
        name: this.post.name,
        body: this.post.body,
      },
    };
  },
  computed: {
    errors() {
      return this.$page.props.errors;
    },
  },
  methods: {
    updatePost() {
      this.$inertia.put(route("admin.posts.update", this.post.id), this.form);
    },
  },
};
</script>

<style>
</style>