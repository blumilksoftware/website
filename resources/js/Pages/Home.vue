<script setup>
import {Head, usePage} from '@inertiajs/vue3'
import Navigation from '@/Layout/Navigation.vue'
import { useI18n } from 'vue-i18n'

const { t } = useI18n()
const locale = usePage().props.locale

</script>

<template>
  <Head title="Strona główna"></Head>

  <Navigation></Navigation>
  <div class="w-full h-screen mx-auto flex flex-col items-center justify-center gap-12">
    <img src="/logo.png" alt="Blumilk logo" class="w-32">
    {{ t('pages.home.title') }} {{ locale }}
  </div>
</template>
