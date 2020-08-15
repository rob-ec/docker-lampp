# set-dev-env
Tools to set a development environment

## Setup
```bash
docker-compose up
```
Add ```-d``` to run in background

## Containers
- php:7.4-apache
  - msqli
  - pdo
  - xdebug enabled

- mariadb
  - default values:
    - host: ```db```
    - user: ```dev```
    - pass: ```devpass```
    - root_pass: ```rootpass```
