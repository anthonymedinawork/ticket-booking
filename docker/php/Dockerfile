ARG APP_IMAGE=spiralscout/php81-grpc:1.0.0
ARG ROAD_RUNNER_IMAGE=2.10.4

ARG SERVICE_NAME='cinema'

# Build rr binary
FROM $APP_IMAGE

RUN apk update

RUN rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install \
        pgsql pdo_pgsql

WORKDIR /var/www
