<template>
<Link href="/">index</Link>&nbsp;
<Link href="/show">show</Link>
<slot></slot>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
</script>
