import { fileURLToPath, URL } from 'node:url'
import { defineConfig, loadEnv } from 'vite'
import type { UserConfigExport } from 'vite'
import vue from '@vitejs/plugin-vue'

export default ({ mode }): UserConfigExport => {
  process.env = { ...process.env, ...loadEnv(mode, process.cwd()) }

  return defineConfig({
    server: {
      port: Number(process.env.VITE_PORT),
    },
    resolve: {
      alias: {
        '@': fileURLToPath(new URL('./src', import.meta.url))
      },
    },
    plugins: [vue()],
  })
}