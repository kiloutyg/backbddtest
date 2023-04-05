#!/bin/sh
chmod 777 . 
composer require --dev phpunit/phpunit ^10
yarn add bootstrap jquery @popperjs/core @fontsource/roboto-condensed @fortawesome/fontawesome-free axios core-js webpack encore webpack-cli webpack-notifier @symfony/webpack-encore --dev
composer install 
yarn install
composer clear-cache

# yarn encore production &

exec apache2-foreground  