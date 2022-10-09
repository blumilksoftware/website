const { defineConfig } = require('cypress')

module.exports = defineConfig({
  video: false,
  screenshotOnRunFailure: false,
  e2e: {
    setupNodeEvents (on, config) {},
    specPattern: 'test/cypress/integration/**/*.cy.{js,jsx,ts,tsx}',
    baseUrl: 'http://localhost:5173',
    supportFile: false,
  },
  component: {
    devServer: {
      framework: 'svelte',
      bundler: 'vite',
    },
  },
})
