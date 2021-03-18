<template>
  <h1>posts</h1>
  <ul>
    <li v-for="post in posts" :key="post.id">{{ post.name }}</li>
  </ul>
</template>

<script>
export default {
  props: ["posts"],
};
</script>

<style>
</style>