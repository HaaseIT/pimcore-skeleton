FROM pimcore/pimcore:php8.3-debug-latest
RUN apt-get update && apt-get -y install npm
