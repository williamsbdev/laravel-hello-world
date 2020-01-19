# laravel-hello-world

To get this project started, I ran:

    composer create-project --prefer-dist laravel/laravel laravel-hello-world

# local development

    docker-compose -f .docker/docker-compose.yml up

This will run the PHP application in local development mode. You can then go to http://localhost:8000 in the browser to visit the application.

# running tests

I installed `phpunit` via brew:

    brew install phpunit

Then I was able to run:

    phpunit
