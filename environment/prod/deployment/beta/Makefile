export COMPOSE_DOCKER_CLI_BUILD = 1
export DOCKER_BUILDKIT = 1

MAKEFLAGS += --no-print-directory

DOCKER_COMPOSE_FILENAME = docker-compose.beta.yml
DOCKER_COMPOSE_APP_CONTAINER = blumilk-website-beta-app

DOCKER_EXEC_SCRIPT = docker compose --file ${DOCKER_COMPOSE_FILENAME} exec --workdir /application/environment/prod/deployment/scripts ${DOCKER_COMPOSE_APP_CONTAINER} bash

CURRENT_DIR = $(shell pwd)

beta-deploy: decrypt-secrets create-deployment-file
	@docker compose --file ${DOCKER_COMPOSE_FILENAME} pull && \
	docker compose --file ${DOCKER_COMPOSE_FILENAME} up --detach && \
	sleep 5 && \
	echo "App post deploy actions" && \
            ${DOCKER_EXEC_SCRIPT} post-deploy-actions.sh

SOPS_VERSION=3.8.1

decrypt-secrets:
	@wget --output-document ./sops "https://github.com/getsops/sops/releases/download/v${SOPS_VERSION}/sops-v${SOPS_VERSION}.linux.amd64" \
    	&& chmod +x ./sops \
    	&& mv .env.beta .env \
    	&& echo "Decrypting secrets" \
    	&& ./sops --decrypt --input-type=dotenv --output-type=dotenv .env.beta.secrets >> .env \
    	&& echo "Done"

DEPLOYMENT_DATETIME = $(shell TZ=Europe/Warsaw date --rfc-3339=seconds)

create-deployment-file:
	@echo "\
	DEPLOY_DATE='${DEPLOYMENT_DATETIME}'\
	" > .deployment

.PHONY: beta-deploy decrypt-secrets create-deployment-file
