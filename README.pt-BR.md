# docker-lampp
Ambiente Docker com Apache + MariaDB + PHP + PHPMyAdmin  

*Leia isso em outros idiomas: [English](README.md), [Português](README.pt-BR.md)*

### Instalar
```shell
docker-compose up
```
Adicione `-d` para executar em segundo plano.

### Como começar
Acesse o conteúdo de **/app** no navegador digitando [`127.0.0.1`](http://127.0.0.1)  
Adicione `:8900` para visualizar o **PHPMyAdmin**

### Containers
#### php:7.4-apache
  - porta: `80`
  - extensões:
    - msqli
    - pdo
    - xdebug enabled

#### mariadb
  - porta: `8889`
  - valores padrão:
    - host: `db`
    - user: `dev`
    - pass: `devpass`
    - root_pass: `rootpass`

#### phpmyadmin
  - porta: `8900`
  - conectado ao mariadb po padrão

### Dependencias
  - docker
  - docker-compose
