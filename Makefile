ifeq ($(OS),Windows_NT)

ifneq ($(strip $(filter %sh,$(basename $(realpath $(SHELL))))),)
POSIXSHELL := 1
else
POSIXSHELL :=
endif
else
# not on windows:
POSIXSHELL := 1
endif
ifneq ($(POSIXSHELL),1)
CMDSEP := ;
PSEP := /
CPF := cp -f
else
CMDSEP := &
PSEP := \\
CPF := copy /y
endif

setup:
	@make composer-setup
	@make copy-env
	@make build
	@make run
	# @make migrate
	@echo Setup successful, website running on localhost:8081
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
run:
	docker-compose up -d
copy-env:
	cp -f .env.example .env
composer-setup:
	composer install
migrate:
	echo Starting database migration
	docker exec reservasi-reservasi-app-1 bash -c "yes | php spark migrate:refresh"
	echo Finished database migration
	echo Starting database seeding
	docker exec reservasi-reservasi-app-1 bash -c "php spark db:seed AllSeeder"
	echo Finished database seeding