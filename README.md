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

### Fix Fedora 33 compatibility
_(That's not exactly a problem with this code, but commonly affect it.)_  
Fedora 33 uses cgroups v2 by default and it makes Docker broke. To fix it folow the steps here.  

**Add the repository**

```bash
$ sudo dnf config-manager --add-repo https://download.docker.com/linux/fedora/docker-ce.repo
```

**Install Docker & Docker compose**

```bash
$ sudo dnf install docker-ce docker-compose
```

**GRUB configuration**

Check the `/etc/default/grub` file. In the line that contains `GRUB_CMDLINE_LINUX` the parameter `system.unified_cgroup_hierarchy=0` should be set, if not, make it. With the **vim** editor it could be made by:

```bash
$ sudo vim /etc/default/grub
```

If some change was necesary in this file, run the following command to update grub config:

```bash
$ sudo grub2-mkconfig
```

**Start Docker**
```bash
$ sudo systemctl start docker
```

If the comand bellow runs without any problem, docker-compose shuold also do. 
```
$ sudo docker run hello-world
```
