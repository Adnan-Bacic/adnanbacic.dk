module.exports = {
  env: {
    browser: true,
    es2021: true,
  },
  extends: [
    'eslint:recommended',
    'airbnb',
    'airbnb-typescript',
    'airbnb/hooks',
    'plugin:react/recommended',
    'plugin:react-hooks/recommended',
    'plugin:@typescript-eslint/recommended',
    'plugin:jsx-a11y/recommended',
    'plugin:import/recommended',
    'plugin:import/typescript',

  ],
  parser: '@typescript-eslint/parser',
  parserOptions: {
    ecmaFeatures: {
      jsx: true,
    },
    ecmaVersion: 12,
    sourceType: 'module',
    project: './tsconfig.eslint.json',
  },
  plugins: [
    //makes all errors as warnings. to avoid project not running when theres minor errors
    "only-warn",
  ],
  ignorePatterns: [
    ".eslintrc.js"
],
  rules: {
    "arrow-body-style": ['warn', 'always'],
    "react/jsx-max-props-per-line": ['warn', { 'maximum': 1, 'when': 'always' }],
    "react/jsx-first-prop-new-line": ['warn', 'always']
  },
};
