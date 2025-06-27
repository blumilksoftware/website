## @blumilksoftware/website
### About application
> Blumilk official website.

---
## Taskfile setup
### Linux

If you don't have Task binary installed, you can install it by running command below. \
If you don't want to install to `/usr/local/bin` (dir for all users in the system) change `-b` flag value. \
Be sure that provided path is in system $PATH, that binary will be available in the terminal.
To check system paths type `$PATH` in the terminal.

```shell
sudo sh -c "$(curl --location https://taskfile.dev/install.sh)" -- -d -b /usr/local/bin v3.42.1
```
_-b sets bindir or installation directory, Defaults to ./bin_ \
_-d turns on debug logging_

Other installation methods: https://taskfile.dev/installation \
GitHub: https://github.com/go-task/task \
Taskfile releases: https://github.com/go-task/task/releases

# Task commands

---
To list all task commands just run:
```shell
task
```
### Task commands completions:

---
Add this line to `.bashrc` if you are using bash:
```
eval "$(task --completion bash)"
```
For other shells see: \
https://taskfile.dev/installation/#option-1-load-the-completions-in-your-shells-startup-config-recommended

# Project initialization

Before first use, project has to be initialized.

First, prepare `.env` file
```shell
cp .env.example .env
```

To initialize project run:
```shell
task init
```
This command will check if `.env` file exists.
Build and run containers. \
Then it will:
- install composer dependencies
- generate `APP_KEY` if not set
- run migrations with seed
- link Laravel storage
- install npm dependencies
- create test database if not exist

### Develop project

To develop project run:
```shell
task dev
```
This command will run Vite development server. \
App will be available at:
- https://website.blumilk.local.env- if you ran Traefik in Blumilk environment. Don't forget to update hosts file.
- http://\<container IP>:5173 - link will be displayed in console

### Running tests

You can run PHPUnit test cases

```
task test
```

### Code style check

You can run PHP-CS-Fixer and ESLint:

```
task fix
```

Application will be running under [localhost:34620](localhost:34620) and [https://website.blumilk.local.env](https://website.blumilk.local.env) in Blumilk traefik environment. If you don't have a Blumilk traefik environment set up yet, follow the instructions from this [repository](https://github.com/blumilksoftware/environment).

#### Commands
Before running any of the commands below, you must run shell:
```
task shell
```
| Command                 | Task                                        |
|:------------------------|:--------------------------------------------|
| `composer <command>`    | Composer                                    |
| `composer test`         | Runs backend tests                          |
| `composer analyse`      | Runs Larastan analyse for backend files     |
| `composer cs`           | Lints backend files                         |
| `composer csf`          | Lints and fixes backend files               |
| `php artisan <command>` | Artisan commands                            |
| `npm run dev`           | Compiles and hot-reloads for development    |
| `npm run build`         | Compiles and minifies for production        |
| `npm run lint`          | Lints frontend files                        |
| `npm run lintf`         | Lints and fixes frontend files              |
| `npm run tsc`           | Runs TypeScript checker                     |


#### Containers

| service    | container name          | default host port               |
|:-----------|:------------------------|:--------------------------------|
| `app`      | `website-app-local`     | [34620](http://localhost:34620) |
| `database` | `website-db-local`      | 34621                           |
| `redis`    | `website-redis-local`   | 34623                           |
| `mailpit`  | `website-mailpit-local` | 34622                           |

### Working with encrypted data

To encrypt/decrypt environment secrets or json files, you can use task commands: \
E.g.: `task secops:decrypt-beta-secrets`

* secops:decrypt-beta-secrets:                             Decrypt app beta secrets
* secops:encrypt-beta-secrets:                             Encrypt app beta secrets

Remember that decryption requires private key (e.g. `SOPS_AGE_BETA_SECRET_KEY` for beta environment) which should be set in `.env` file.
Encryption uses public key which is added in `.sops.yaml` file.
