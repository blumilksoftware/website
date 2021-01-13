module.exports = {
  env: {
    browser: true,
    node: true,
    mocha: true
  },
  extends: ['standard'],
  parserOptions: {
    ecmaVersion: 2020,
    sourceType: 'module'
  },
  rules: {
    indent: ['error', 2],
    'no-multiple-empty-lines': ['error', { max: 1, maxBOF: 2, maxEOF: 0 }],
    'import/first': ['off']
  },
  plugins: [
    'svelte3',
    'mocha'
  ],
  overrides: [
    {
      files: ['*.svelte'],
      processor: 'svelte3/svelte3'
    }
  ],
  globals: {
    mapboxgl: 'readonly',
    Autolinker: 'readonly'
  }
}
