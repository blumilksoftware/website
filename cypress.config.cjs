const { defineConfig } = require('cypress')

module.exports = defineConfig({
  video: false,
  screenshotOnRunFailure: false,
  e2e: {
    setupNodeEvents (on, config) {},
    specPattern: 'test/cypress/integration/**/*.cy.{js,jsx,ts,tsx}',
    baseUrl: 'http://localhost:8080',
    supportFile: false,
  },
  component: {
    devServer: {
      framework: 'svelte',
      bundler: 'vite',
      viteConfig: {
        server: {
          host: '127.0.0.1',
        },
      },
    },
  },
})
