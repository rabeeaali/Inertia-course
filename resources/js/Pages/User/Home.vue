<template>
  <div class="flex justify-between container mx-auto">
    <div class="w-full lg:w-8/12">
      <h1 class="font-bold text-gray-700 md:text-3xl">Posts</h1>

      <div class="mt-6">
        <div class="max-w-4xl bg-white rounded-lg shadow-md">
          <div class="px-10 py-6">
            <div>
              <a
                href="single.html"
                class="text-2xl text-gray-700 font-bold hover:underline"
                >Build Your New Idea with Laravel Freamwork.</a
              >
              <p class="mt-2 text-gray-600">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Tempora expedita dicta totam aspernatur doloremque. Excepturi
                iste iusto eos enim reprehenderit nisi, accusamus delectus nihil
                quis facere in modi ratione libero!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="-mx-8 w-4/12 hidden lg:block">
      <div class="mt-10 px-8">
        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
        <div
          class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md"
        >
          <ul>
            <li>
              <a
                href="tag.html"
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
};
</script>

<style>
</style>