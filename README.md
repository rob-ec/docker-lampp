# set-dev-env
Tools to set a development environment

### Setup
```bash
docker-compose up
```
Add ```-d``` to run in background

### Containers
#### php:7.4-apache
  - extensions:
    - msqli
    - pdo
    - xdebug enabled

#### mariadb
  - defaults:
    - host: ```db```
    - user: ```dev```
    - pass: ```devpass```
    - root_pass: ```rootpass```

#### adminer

### Dependences
  - docker
  - docker-compose
