setup:
	@make copy-env
	@make build
	@make run
	@make composer-setup
	@make database-migrate
	@echo Setup successful, website running on localhost:8080
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
run:
	docker-compose up -d
copy-env:
	cp .env.example .env
composer-setup:
	docker exec wahanaku-app-1 bash -c "composer install"
database-migrate:
	echo Starting database migration
	docker exec -i wahanaku-database-1 bash -c "sleep 10"
	docker exec wahanaku-app-1 bash -c "yes | php spark migrate:refresh"
	echo Finished database migration
	echo Starting database seeding
	docker exec wahanaku-app-1 bash -c "php spark db:seed AllSeeder"
	echo Finished database seeding