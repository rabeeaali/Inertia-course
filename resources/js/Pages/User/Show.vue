<template>
  <div class="flex justify-between container mx-auto">
    <div class="w-full lg:w-8/12">
      <div class="mt-6">
        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
          <div class="pb-3">
            <h1 class="text-3xl">{{ post.name }}</h1>
            <p class="font-light text-gray-600 py-3">{{ post.created_at }}</p>
            <img
              src="https://www.tailwindapp.com/wp-content/uploads/2020/12/2021-trends-blog-post-header-no-text.jpg"
              class="w-100"
            />

            <p class="mt-2 text-gray-600 pt-2">
              {{ post.body }}
            </p>
          </div>
          <div class="flex justify-between items-center mt-4">
            <a
              href="#"
              class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500"
              >Laravel</a
            >
            <a href="#" class="flex items-center"
              ><img
                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                alt="avatar"
                class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block"
              />
              <h1 class="text-gray-700 font-bold hover:underline">Alex John</h1>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="-mx-8 w-4/12 hidden lg:block">
      <div class="mt-10 px-8">
        <h1 class="mb-4 text-xl font-bold text-gray-700">Tags</h1>
        <div
          class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md"
        >
          <ul>
            <li>
              <a
                href="#"
                class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                >- AWS</a
              >
            </li>
            <li class="mt-2">
              <a
                href="#"
                class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                >- Laravel</a
              >
            </li>
            <li class="mt-2">
              <a
                href="#"
                class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                >- Vue</a
              >
            </li>
            <li class="mt-2">
              <a
                href="#"
                class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                >- Design</a
              >
            </li>
            <li class="flex items-center mt-2">
              <a
                href="#"
                class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                >- Django</a
              >
            </li>
            <li class="flex items-center mt-2">
              <a
                href="#"
                class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                >- PHP</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import UserLayout from "@/Layouts/User/Layout";

export default {
  layout: UserLayout,
  props: ["post"],
};
</script>
