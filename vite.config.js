import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'
import preprocess from 'svelte-preprocess'
import postcss from './postcss.config.cjs'

export default defineConfig({
  resolve: {
    alias: {
      '@': '/src',
    },
  },
  plugins: [
    svelte({
      preprocess: preprocess({
        postcss: true,
      }),
    }),
  ],
  css: [
    postcss,
  ],
})
