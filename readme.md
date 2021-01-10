# blumilk-website
The source code of website hosted under [https://blumilk.pl/](https://blumilk.pl/)

![Homepage screenshot](screenshot.png)

## Local development
Install dependencies and create `.env` file based on example:
```
dcr node npm install
cp .env.example .env
```

Run ESLint and Mocha tests:
```
dcr node npm run lint
dcr node npm test
```

Run Svelte development mode:
```
dcr node npm run dev
```

Please maintain our project guidelines:
* keep Issues well described, labeled and in English
* add issue number to all your commits
* add issue number to your branch name
* squash your commits into one commit with standardized name

> `dcr` should be an alias to `docker-compose run -u "$(id -u):$(id -g)"`

## Deployment
Github Actions are configured to automatically publish all changes from `master` branch with all generated artifacts to `public` branch. GitHub Pages are configured to host built website.
