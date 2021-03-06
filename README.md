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

### Habilitar AllowOverride
Editar el archivo apache2.conf

```sh
$ sudo gedit /etc/apache2/apache2.conf
```

Y modificamos donde pone 
```sh
AllowOverride None
```
Ponemos
```sh
AllowOverride All
```
En todos, luego reinicamos el servidor
```sh
$ sudo service apache2 restart
```

### Kiosco-Patri
Clonamos los archivos del repositorio con git:
```sh
$ cd /var/www/html/
$ git clone -b <branch> --single-branch https://github.com/exequiellares/kiosco-patri.git
```
En <branch> ponemos el branch que deseamos descargar. Por ejemplo: master

Tambien podemos descargar los archivos comprimidos y descomprimirlos en "/var/www/html/kiosco-patri-v1.0" desde https://github.com/exequiellares/kiosco-patri/releases

Damos permisos los permisos necesarios a la carpeta
```sh
$ sudo chmod -R 777 /var/www/html
```

### Base de Datos (MySQL)
En MySQL creamos una nueva base de datos de nombre "kiosco-patri" u otro de nuestra preferencia e importamos el archivo kiosco-patri/db/structure.sql en la base de datos.

Podemos usar phpmyadmin u otro de nuestra preferencia.
```sh
$ sudo apt-get install phpmyadmin
```

Copiamos el archivo de configuracion y lo renombramos
```sh
$ cd /var/www/html/kiosco-patri/app/Config/
$ cp database.php.default database.php
```
Dentro de database.php ponemos los datos de conexión de nuestra base de datos:
```sh
public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'tu_usuario_mysql',
		'password' => 'constraseña_mysql',
		'database' => 'nombre_de_la_base_de_datos_kiosco-patri',
		'prefix' => '',
		'encoding' => 'utf8',
	);
```

Guardamos los cambios y ya podemos usar el sistema. 
Para acceder al mismo lo hacemos desde: http://localhost/kiosco-patri





