# Proyecto de Gestión de Alumnos

Este proyecto consiste en una aplicación de gestión de alumnos que utiliza un backend desarrollado en Laravel y un frontend en Angular. La aplicación permite agregar y consultar registros de alumnos.

## Estructura del Proyecto

- **back-end**: Contiene el API desarrollado en Laravel.
- **front-end**: Contiene la interfaz de usuario desarrollada en Angular.

---

## Back-End (Laravel)

### Requisitos

- PHP >= 7.3
- Composer
- MySQL o MongoDB (según la configuración)

### Instalación

1. Clona el repositorio:

   ```bash
   git clone <URL_DEL_REPOSITORIO> back-end
   cd back-end

2. Instala las dependencias de Composer:

   ```bash
    composer install
    Configura el archivo .env:

3. Copia el archivo de ejemplo:

   ```bash
    cp .env.example .env
    Configura la conexión a la base de datos y otros parámetros.

4. Genera la clave de la aplicación:

   ```bash
    php artisan key:generate

5. Ejecuta las migraciones:

   ```bash
    php artisan migrate

6. Inicia el servidor:

   ```bash
    php artisan serve

La API estará disponible en http://localhost:8000.

Endpoints

    POST /crear-alumno: Inserta un nuevo alumno.
    GET /consultar-alumno/{idGrado}: Consulta alumnos por grado.


---

## Front-End (Angular)
### Requisitos
- Node.js (recomendado LTS)
- Angular CLI

### Instalación

1. Clona el repositorio:

    ```bash
    git clone <URL_DEL_REPOSITORIO> front-end
    cd front-end

2. Instala las dependencias de NPM

    ```bash
    npm install

3. Asegúrate de que la API del backend esté corriendo en http://localhost:8000. Esto es necesario para que el frontend pueda realizar las peticiones.

4. Inicia el servidor de desarrollo:

    ```bash
    ng serve
    La aplicación estará disponible en http://localhost:4200

---

##Características

Formulario para agregar nuevos alumnos.
Tabla para listar alumnos existentes.
Conexión a la API del backend para realizar las operaciones.
