# set-dev-env
Tools to set a development environment

### Setup
```bash
docker-compose up
```
Add ```-d``` to run in background.  
> Access the **/app** content in browser by typing ```127.0.0.1```  
> Add ```:8900``` to view **PHPMyAdmin**

### Containers
#### php:7.4-apache
  - port: ```80```
  - extensions:
    - msqli
    - pdo
    - xdebug enabled

#### mariadb
  - port: ```8889```
  - defaults:
    - host: ```db```
    - user: ```dev```
    - pass: ```devpass```
    - root_pass: ```rootpass```

#### phpmyadmin
  - port: ```8900```
  - linked to mariadb by default

### Dependences
  - docker
  - docker-compose
