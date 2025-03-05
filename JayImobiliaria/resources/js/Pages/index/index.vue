<template >
  <div>
    <MainLayout>
      <h1 class="text-2xl bg-amber-600">Inicio {{ nome }}</h1>
    </MainLayout>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps({ nome: String });
</script>

<style scoped>

</style>

