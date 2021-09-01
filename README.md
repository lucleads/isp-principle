# INTERFACE SEGREGATION PRINCIPLE

Repositorio con un ejemplo de cómo aplicar el principio que representa la letra I de `SOLID`.

El principio de segregación de interfaces establece que:

"*Ningún cliente debería verse forzado a depender de métodos que no utilice*"

`NOTA`: Para cumplir este principio, es necesario definir las interfaces basándose en los clientes que las usan, y no en las implementaciones específicas de estas.

### Despliegue

Para desplegar el proyecto en un contenedor docker, abrir una terminal en el directorio donde se encuentre el archivo `docker-compose.yml`.

En este directorio, creamos un archivo de variables de entorno (`.env`) con la siguiente estructura:

```
CONTAINER_NAME=isp_principle
PHP_VERSION=8.0
PORT=81 
```

y ejecutamos el siguiente comando:

`docker-compose up -d`

Una vez creado el contenedor, accedemos a este con el comando:

`docker exec -it container_id /bin/bash`

Ya dentro del contenedor, ejecutamos el comando `composer install` para generar la carpeta ***vendor*** con todas las dependencias de nuestro proyecto.

### Requisitos

- [Docker](https://docs.docker.com/engine/install/)

- [Docker compose](https://docs.docker.com/compose/install/)

- [PHP](https://www.php.net/manual/es/install.php)

### Prueba

Para probar el programa una vez levantado el contenedor de docker en el puerto deseado, accedemos desde nuestro navegador a la dirección http://localhost:81 (en nuestro caso hemos desplegado en el puerto 81).

