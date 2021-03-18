<template>
  <div class="min-h-screen bg-gray-100 overflow-x-hidden">
    <the-navbar />
    <div class="px-6 py-8">
      <slot />
    </div>
  </div>
</template>

<script>
import TheNavbar from "./TheNavbar";
export default {
  components: {
    TheNavbar,
  },
};
</script>