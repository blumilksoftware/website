import svelte from 'rollup-plugin-svelte'
import resolve from '@rollup/plugin-node-resolve'
import replace from '@rollup/plugin-replace'
import commonjs from '@rollup/plugin-commonjs'
import json from '@rollup/plugin-json'
import preprocess from 'svelte-preprocess'
import livereload from 'rollup-plugin-livereload'
import { terser } from 'rollup-plugin-terser'
import { config } from 'dotenv'

const production = !process.env.ROLLUP_WATCH

function serve () {
  let server

  function toExit () {
    if (server) server.kill(0)
  }

  return {
    writeBundle () {
      if (server) return
      server = require('child_process').spawn('npm', ['run', 'start', '--', '--dev'], {
        stdio: ['ignore', 'inherit', 'inherit'],
        shell: true
      })

      process.on('SIGTERM', toExit)
      process.on('exit', toExit)
    }
  }
}

export default {
  input: 'src/main.js',
  output: {
    sourcemap: true,
    format: 'iife',
    name: 'app',
    file: 'public/build/bundle.js',
    inlineDynamicImports: true
  },
  plugins: [
    svelte({
      dev: !production,
      css: (css) => {
        css.write('bundle.css')
      },
      preprocess: preprocess({ postcss: true })
    }),
    resolve({
      browser: true,
      dedupe: ['svelte']
    }),
    replace({
      global: JSON.stringify({
        env: {
          ...config().parsed
        }
      })
    }),
    commonjs(),
    json(),
    !production && serve(),
    !production && livereload('public'),
    production && terser()
  ],
  watch: {
    clearScreen: false
  }
}
