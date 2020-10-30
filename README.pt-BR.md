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
  - conectado ao mariadb por padrão

### Dependencias
  - docker
  - docker-compose

### Habilitar HTTPS (apenas para o phpserver)
Para habilitar o protocolo HTTPS, *antes de executar o docker-compose*, crie o diretório `app/certificates` e coloque seus certificados SSL lá.  
Então, descomente a seção SSL no `app/Dockerfile` (certifique-se de que os nomes dos arquivos de certificado sejam iguais aos do Dockerfile).  Também descomente as linhas da "Porta HTTPS" (`# HTTPS Port`) e do "Arquivo de configuração HTTPS" (`# HTTPS Conf. File`) em `docker-compose.yml`.  
Depois de executar o docker-compose, você deve conseguir acessar [https://localhost](https://localhost).

### Corrigir problemas com permissões do usuário do Linux
Para corrigir problemas de permissão do usuário no Linux, descomente os argumentos `USER_ID` e `GROUP_ID` em `docker-compose.yml`.   
Certifique-se de que esses valores são iguais aos seus valores de usuário, você pode verificar esses valores no terminal usando os comandos `id -u` (para visualizar `USER_ID`) e `id -g` (para visualizar `GROUP_ID`).  
Também remova o comentário da seção "PERMISSÃO DO USUÁRIO" em `app/Dockerfile`, bem como os argumentos na parte superior do arquivo (`USER_ID` e `GROUP_ID`).