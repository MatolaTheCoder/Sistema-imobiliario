<template >
  <div>
    <MainLayout>
      <h1 class="text-7xl bg-amber-300">Inicio {{ nome }}</h1>
    </MainLayout>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import '../../../css/app.css';
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps({ nome: String });
</script>

<style scoped>

</style>

