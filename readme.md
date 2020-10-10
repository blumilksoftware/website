## Local development
Start containers and install dependencies:
```
docker compose up -d
docker-compose run -u "$(id -u):$(id -g)" node npm install
```

Run Svelte dev mode:
```
docker-compose run -u "$(id -u):$(id -g)" node npm run dev
```

Run ESLint:
```
docker-compose run -u "$(id -u):$(id -g)" node npx eslint .eslintrc.js rollup.config.js src
```

Please add issue number to all your commits.

## Deployment
Github Actions should be configured to automatically publish all changes from `master` branch with all generated artifacts to public `gh-pages` branch.
