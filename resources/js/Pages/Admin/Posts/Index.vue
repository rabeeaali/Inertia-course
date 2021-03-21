<template>
  <div class="container mx-auto px-6 py-8">
    <div class="flex justify-between items-center mb-5">
      <h1 class="text-3xl py-2 border-b mb-5">Posts</h1>
      <Success />
    </div>

    <div class="mb-4 flex justify-between items-center">
      <div class="flex-1 pr-4">
        <div class="relative md:w-1/3">
          <input
            type="search"
            class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="Search..."
            v-model="search"
            @keyup="searching"
          />
          <div class="absolute top-0 left-0 inline-flex items-center p-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-6 h-6 text-gray-400"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
              <circle cx="10" cy="10" r="7" />
              <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
          </div>
          <div class="absolute top-0 right-0 inline-flex items-center p-2">
            <inertia-link :href="route('admin.posts.index')">
              <svg
                class="w-6 h-6 text-gray-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
            </inertia-link>
          </div>
        </div>
      </div>
      <div>
        <inertia-link
          :href="route('admin.posts.create')"
          class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
          Create
          <svg
            class="w-5 ml-2"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
            />
          </svg>
        </inertia-link>
      </div>
    </div>

    <div class="mt-8">
      <div class="flex flex-col">
        <div
          class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8"
        >
          <div
            class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200"
          >
            <table class="min-w-full">
              <thead>
                <tr>
                  <th
                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Name
                  </th>
                  <th
                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Body
                  </th>
                  <th
                    class="px-6 py-3 border-b border-gray-200 bg-gray-50"
                  ></th>
                </tr>
              </thead>

              <tbody class="bg-white">
                <tr v-for="post in postsData" :key="post.id">
                  <td
                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                  >
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      {{ post.name }}
                    </div>
                  </td>

                  <td
                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                  >
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      {{ post.body }}
                    </div>
                  </td>

                  <td
                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium"
                  >
                    <inertia-link
                      :href="route('admin.posts.edit', post.id)"
                      class="text-indigo-600 hover:text-indigo-900 pr-3"
                      >Edit
                    </inertia-link>
                    <button
                      @click.prevent="deletePost(post.id)"
                      class="text-red-600 hover:text-red-900"
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <tr v-if="!postsData.length">
              <td rowspan="3" class="p-5">There is no results</td>
            </tr>
            <Paginate
              v-if="postsData.length && posts.total > posts.per_page"
              :from="posts.from"
              :to="posts.to"
              :total="posts.total"
              :previous="posts.prev_page_url"
              :next="posts.next_page_url"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Layout";
import Success from "@/Layouts/Admin/Success";
import Paginate from "@/Layouts/Admin/Paginate";
export default {
  layout: AdminLayout,
  props: ["posts"],
  data() {
    return {
      search: "",
    };
  },
  components: { Success, Paginate },
  computed: {
    postsData() {
      return this.posts.data;
    },
  },
  methods: {
    deletePost(postId) {
      this.$inertia.delete(route("admin.posts.destroy", postId), {
        onBefore: () => confirm("Are you sure you want to delete this post?"),
      });
    },
    searching() {
      this.$inertia.replace(
        route("admin.posts.index", { search: this.search })
      );
    },
  },
};
</script>

<style>
</style>