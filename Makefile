.PHONY: tests coverage

UID=$(shell id -u)
GID=$(shell id -g)
DOCKER=docker-compose -f docker-compose.yml

default:
	@printf "$$HELP"

help:
	@printf "$$HELP"

initialize: build vendor

test:
	${DOCKER} run phpcli vendor/bin/phpunit -c $(KATA)/phpunit.xml.dist

coverage:
	${DOCKER} run -e XDEBUG_MODE=coverage phpcli vendor/bin/phpunit -c $(KATA)/phpunit.xml.dist --coverage-text --colors=never

coverage-color:
	${DOCKER} run -e XDEBUG_MODE=coverage phpcli vendor/bin/phpunit -c $(KATA)/phpunit.xml.dist --coverage-text

build:
	${DOCKER} build phpcli

start:
	${DOCKER} up -d

stop:
	${DOCKER} down

vendor: katas/composer.json
	if [ ! -d "katas/vendor" ]; then \
		echo "Installing dependencies"; \
		${DOCKER} run --rm -u ${UID}:${GID} phpcli composer install; \
	fi

define HELP
# Docker commands
 - make initialize\t\t\tCreates a PHP image with xdebug and install the dependencies
 - make test KATA=<kata name>\t\tRun the tests for <kata name>
 - make coverage KATA=<kata name>\tRun the code coverage for <kata name>
 - make coverage-color KATA=<kata name>\tRun the code coverage in color mode for <kata name>
\nmake help shows this message.\n\n

endef

export HELP
