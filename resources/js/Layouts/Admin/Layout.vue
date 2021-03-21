<template>
  <div class="flex h-screen bg-gray-200">
    <!-- sidebar -->
    <Sidebar />
    <!-- end sidebar -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- header -->
      <Header />
      <!-- end header -->
      <!-- content -->
      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <slot />
      </main>
      <!-- end content -->
    </div>
  </div>
</template>

<script>
import Header from "./Header.vue";
import Sidebar from "./Sidebar.vue";
export default {
  components: { Sidebar, Header },
};
</script>
