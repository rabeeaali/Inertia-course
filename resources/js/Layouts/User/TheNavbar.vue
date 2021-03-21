<template>
  <nav class="bg-white px-6 py-4 shadow">
    <div
      class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between"
    >
      <div class="flex justify-between items-center">
        <div>
          <inertia-link
            :href="route('user.home')"
            class="text-gray-800 text-xl font-bold md:text-2xl"
            >Brand</inertia-link
          >
        </div>
        <div>
          <button
            type="button"
            class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden"
          >
            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
              <path
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              ></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="md:flex flex-col items-center md:flex-row md:-mx-4 hidden">
        <template v-if="userAuth">
          <a
            href="#"
            class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0"
            >{{ userAuth.name }}</a
          >
          <inertia-link
            :href="route('logout')"
            as="button"
            method="post"
            class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0"
          >
            Logout
          </inertia-link>
        </template>
        <template v-else>
          <inertia-link
            :href="route('login')"
            class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0"
            >Login
          </inertia-link>
          <inertia-link
            :href="route('register')"
            class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0"
            >Register
          </inertia-link>
        </template>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  computed: {
    userAuth() {
      return this.$page.props.auth.user;
    },
  },
};
</script>

<style>
</style>