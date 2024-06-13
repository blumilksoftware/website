import blumilkDefault from "@blumilksoftware/eslint-config";
import htmlPlugin from "eslint-plugin-html";

export default [
  ...blumilkDefault,
  {
    files: [ "**/*.blade.php"],
    settings: {
      "html/html-extensions": [".html", ".blade.php"],
    },
    plugins: {
      html: htmlPlugin, 
    },
    rules: {
      "tailwindcss/no-custom-classname": "off",
    },
    languageOptions: {
      globals: {
        mapboxgl: "readonly",
      },
    },
  },
];
