up:
	docker compose up -d
build:
	docker compose build --no-cache --force-rm
init:
	docker compose up -d --build
	docker compose exec php composer install
	docker compose exec php php artisan key:generate
	docker compose exec php php artisan storage:link
	docker compose exec php chmod -R 777 storage bootstrap/cache
	@make fresh
remake:
	@make destroy
	@make init
stop:
	docker compose stop
down:
	docker compose down --remove-orphans
restart:
	@make down
	@make up
destroy:
	docker compose down --rmi all --volumes --remove-orphans
logs:
	docker compose logs
nginx:
	docker compose exec nginx ash
php:
	docker compose exec php bash
migrate:
	docker compose exec php php artisan migrate
fresh:
	docker compose exec php php artisan migrate:fresh --seed
seed:
	docker compose exec php php artisan db:seed
rollback-test:
	docker compose exec php php artisan migrate:fresh
	docker compose exec php php artisan migrate:refresh
tinker:
	docker compose exec php php artisan tinker
test:
	docker compose exec php php artisan test
mysql:
	docker compose exec mysql bash
sql:
	docker compose exec mysql bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
larastan:
	docker compose exec php ./vendor/bin/phpstan analyse --memory-limit=2G
phpcs:
	docker compose exec php ./vendor/bin/phpcs --standard=phpcs.xml ./
phpcbf:
	docker compose exec php ./vendor/bin/phpcbf --standard=phpcs.xml ./
