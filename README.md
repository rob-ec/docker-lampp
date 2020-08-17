# docker-lampp
Docker Environment with Apache + MariaDB + PHP + PHPMyAdmin  

*Read this in other languages: [English](README.md), [Português do Brasil](README.pt-BR.md)*

### Setup
```shell
docker-compose up
```
Add `-d` to run in background.

### Quick Start
Access the **/app** content in browser by typing [`127.0.0.1`](http://127.0.0.1)  
Add `:8900` to view **PHPMyAdmin**

### Containers
#### php:7.4-apache
  - port: `80`
  - extensions:
    - msqli
    - pdo
    - xdebug enabled

#### mariadb
  - port: `8889`
  - defaults:
    - host: `db`
    - user: `dev`
    - pass: `devpass`
    - root_pass: `rootpass`

#### phpmyadmin
  - port: `8900`
  - linked to mariadb by default

### Dependences
  - docker
  - docker-compose
