install:
	composer install

validate:
	composer validate

brain-games:
	./bin/brain-games

autoload:
	composer dump-autoload

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin