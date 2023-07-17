NODE_SERVICE_NAME=node

.PHONY: build run shell dev stop restart

build:
	docker-compose build --no-cache --pull

run:
	docker-compose up -d

shell:
	docker-compose exec ${NODE_SERVICE_NAME} ash

dev:
	docker-compose exec ${NODE_SERVICE_NAME} npm run dev

stop:
	docker-compose stop

restart: stop run
