#!/bin/sh

# -e is for "automatic error detection", tell shell to abort any time an error occurred
set -e

ARTISAN_PATH="/application/artisan"

php ${ARTISAN_PATH} storage:link && \
php ${ARTISAN_PATH} migrate --force && \
php ${ARTISAN_PATH} optimize && \
php ${ARTISAN_PATH} filament:optimize
