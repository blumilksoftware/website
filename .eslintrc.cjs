module.exports = {
  env: {
    browser: true,
    node: true,
    mocha: true
  },
  extends: ['standard', 'plugin:cypress/recommended'],
  parser: "@babel/eslint-parser",
  parserOptions: {
    ecmaVersion: 2020,
    sourceType: 'module'
  },
  rules: {
    indent: ['error', 2],
    'no-multiple-empty-lines': ['error', { max: 1, maxBOF: 2, maxEOF: 0 }],
    'import/first': ['off'],
    'comma-dangle': ['error', 'always-multiline']
  },
  plugins: [
    'svelte3',
    'mocha'
  ],
  overrides: [
    {
      files: ['*.svelte'],
      processor: 'svelte3/svelte3'
    },
    {
      files: ['src/pages/contact.svelte', 'src/components/map.svelte'],
      processor: 'svelte3/svelte3',
      rules: {
        'dot-notation': 'off'
      }
    }
  ],
  globals: {
    env: 'readonly',
    mapboxgl: 'readonly',
    Autolinker: 'readonly'
  }
}
