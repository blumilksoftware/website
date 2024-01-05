<script setup>
import { Head } from '@inertiajs/vue3'
import Navigation from "@/Layout/Navigation.vue";
</script>

<template>
  <Head title="Strona główna"></Head>
  <Navigation></Navigation>
  <div class="w-full h-screen mx-auto flex flex-col items-center justify-center gap-12">
    <img src="/logo.png" alt="Blumilk logo" class="w-32">
    strona główna
  </div>
</template>
