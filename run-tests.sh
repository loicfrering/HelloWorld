#!/bin/sh
php -d include_path='vendor/' vendor/phpunit --colors src/Tests
