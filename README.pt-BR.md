# docker-lampp
Ambiente Docker com Apache + MariaDB + PHP + PHPMyAdmin  

*Read this in other languages: [English](README.md), [Português do Brasil](README.pt-BR.md)*

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

### Habilitar HTTPS (apenas para o phpserver)
Para habilitar o protocolo HTTPS, *antes de executar o docker-compose*, crie o diretório `app/certificates` e coloque seus certificados SSL lá. Então, remova o comentário da seção SSL no `app/Dockerfile` (certifique-se de que os nomes dos arquivos de certificado sejam iguais aos do Dockerfile).  Também descomente a linha da Porta HTTPS em `docker-compose.yml`. Depois de executar o docker-compose, você deve conseguir acessar [https://localhost](https://localhost).