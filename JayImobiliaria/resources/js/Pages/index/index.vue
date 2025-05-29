<template>
    <div>
        <MainLayout>
            <h1 class="text-2xl bg-amber-600">Inicio {{ nome }}</h1>
            <div v-for="casa in casas" :key="casa.id">
                <p>{{ casa.nome }}</p>
                <p>{{ casa.cidade }}</p>
                <p>{{ casa.valor }}</p>
            </div>
        </MainLayout>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps({ casas: Array });
</script>

<style scoped></style>
