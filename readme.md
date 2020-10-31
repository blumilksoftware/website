## Local development
Start containers and install dependencies:
```
docker compose up -d
docker-compose run -u "$(id -u):$(id -g)" node npm install
```

Create `.env` file based on example and fill values:
```
cp .env.example .env
```

Run Svelte dev mode:
```
docker-compose run -u "$(id -u):$(id -g)" node npm run dev
```

Run ESLint:
```
docker-compose run -u "$(id -u):$(id -g)" node npm run lint
```

Run Mocha tests:
```
docker-compose run -u "$(id -u):$(id -g)" node npm test
```

Please add issue number to all your commits.

## Deployment
Github Actions should be configured to automatically publish all changes from `master` branch with all generated artifacts to public `gh-pages` branch.
