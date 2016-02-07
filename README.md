# Kiosco-Patri v1.0

Kiosco-Patri es un pequeño sistema de administracion diseñado para esas pequeñas tiendas que quieren manejar la lista de precios de sus productos.

Implementa una interfaz basica que permite crear, editar y eliminar la informacion de los productos (precio y descripción).

Ademas proporciona una interfaz de busqueda para que la tarea de encontrar un precio sea mas sencilla.

Basado en el Framework CakePHP 2.7, mas info en http://cakephp.org/

## Instalación

### Apache, PHP y MySQL
Instrucciones para la instalacion en el Sistema Operativo Ubuntu 14.04 LTS.
Extraidas de http://lignux.com/guia-instalacion-de-apache2-en-ubuntu-14-04/

#### Apache

Ejecutamos los siguientes comandos en el terminal
```sh
$ sudo apt-get update
$ audo apt-get install apache2
```
Comprobar si la instalacion es correcta http://localhost nos mostrara una pantalla con informacion de Apache

#### PHP 5

Para instalar PHP5 ejecutamos en el terminal:
```sh
$ sudo apt-get install php5 libapache2-mod-php5
```
Reiniciamos el servidor
```sh
$ sudo /etc/init.d/apache2 restart
```
Por cuestiones de seguridad cambiamos los permisos en las carpetas del servidor:
```sh
$ sudo chown -R <TU_USUARIO>:www-data /var/www/html
$ sudo chmod -R 755 /var/www/html
```
Donde dice <TU_USUARIO> se reemplaza por tu usuario de ubuntu. Por ejemplo, si mi usuario es usuario seria:
```sh
$ sudo chown -R usuario:www-data /var/www/html
```
Comprobamos que funciona correctamente, creamos un archivo info.php
```sh
$ gedit /var/www/html/info.php
```
Dentro del archivo escribimos la siguiente linea y guardamos:
```sh
<?php phpinfo(); ?>
```
Si todo va correctamente, http://localhost/info.php nos deberia mostrar la informacion de nuestra instalacion de PHP.

#### MySQL
Ejecutamos en el terminal
```sh
$ sudo apt-get install mysql-server mysql-client php5-mcrypt php5-mysql
```
Reiniciamos el servidor y ya deberiamos tener todo configurado correctamente
```sh
$ sudo /etc/init.d/apache2 restart
```

### Kiosco-Patri V1.0




