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

### Enable HTTPS (only to phpserver)
To enable the HTTPS Protocol, *before running docker-compose*, create the path `app/certificates` and put your SSL Certificates there.  
Then, uncomment the SSL Section in `app/Dockerfile` (make sure that the certificate file names are the same as in the Dockerfile). Also uncomment the "HTTPS Port" (`# HTTPS Port`) and "HTTPS Configuration FIle" (`# HTTPS Conf. File`) in `docker-compose.yml`.  
After running the docker-compose you should be able to access [https://localhost](https://localhost).

### Fix Linux User's Permissions
To correct user permission issues on Linux, uncoment the `USER_ID` and `GROUP_ID` arguments in `docker-compose.yml`.  
Make sure this values are the same as your user values, you can check these values in the terminal using the `id -u` (to view `USER_ID`) & `id -g` (to view `GROUP_ID`) commands.  
Also uncomment the "USER'S PERMISSION" section in `app/Dockerfile`, as well as the arguments at the top of the file (`USER_ID` and `GROUP_ID`).