<script setup>
import { ref } from 'vue';
</script>
<template>
  <aside
      class="transform top-0 right-0 w-full md:w-2/5 shadow-2xl bg-white fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30 -translate-x-0"
      ref="sidePanel">
      <div class="p-8">
       <slot :name="'aside'"></slot>
      </div>
    </aside>
  
</template>