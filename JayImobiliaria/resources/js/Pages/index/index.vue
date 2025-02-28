<template>
    <div>
      <h1 class="text-3xl bg-amber-300">Inicio {{ counter }}</h1>
    </div>
  </template>

  <script setup>
  import { ref, onMounted } from "vue";

  const counter = ref(0);

  onMounted(() => {
    setInterval(() => {
      counter.value++;
    }, 1000); // Atualiza a cada 1 segundo
  });
  </script>

  <style scoped>
  </style>
