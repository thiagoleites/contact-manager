env:
	@cp .env.example .env

prepare:
	@sh ./bin/install.sh

up:
	@./vendor/bin/sail up --force-recreate -d

down:
	@./vendor/bin/sail down

update:
	@./vendor/bin/sail artisan composer update

migrate:
	@./vendor/bin/sail artisan migrate

populate:
	@./vendor/bin/sail artisan migrate:fresh --seed

dev:
	@./vendor/bin/sail npm run dev
