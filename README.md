# Sistema de Gestión de Incidencias Tecnológicas

Aplicación web desarrollada en PHP y MySQL diseñada para centralizar, registrar y dar seguimiento a las fallas o incidencias tecnológicas reportadas en los laboratorios de computación de una institución educativa.

---

## Características Principales

* Registrar una incidencia con el nombre de quien reporta, laboratorio, equipo afectado, descripción del problema y prioridad.
* Mostrar en una tabla todas las incidencias almacenadas en la base de datos junto con su fecha de registro.
* Editar la información de una incidencia previamente registrada.
* Cambiar el estado de una incidencia entre Pendiente, En proceso y Resuelta.
* Eliminar una incidencia, solicitando confirmación antes de ejecutar la acción.
* Buscar o filtrar incidencias por laboratorio, estado o prioridad.

---

## Requisitos Previos

Para ejecutar este proyecto en tu entorno local, asegúrate de tener instalado:
* XAMPP (o un entorno local equivalente con soporte para Apache y PHP).
* Un navegador web (Chrome, Firefox, Edge, etc.).

---

## Instrucciones de Instalación y Configuración

Sigue estos pasos para poner en marcha la aplicación en tu equipo:

### 1. Copiar los archivos del proyecto
Coloca la carpeta raíz del proyecto dentro del directorio htdocs de XAMPP:
* En Windows: C:\xampp\htdocs\
* En Linux u macOS: la ruta correspondiente donde se encuentre instalada la carpeta htdocs de XAMPP.

### 2. Iniciar los servicios
1. Abre el Panel de Control de XAMPP.
2. Inicia los módulos de Apache y MySQL.

### 3. Configurar la Base de Datos
1. Abre tu navegador e ingresa a phpMyAdmin (habitualmente en http://localhost/phpmyadmin/).
2. Crea una nueva base de datos.
3. Selecciona la base de datos creada e ingresa a la pestaña Importar.
4. Selecciona y ejecuta el archivo DB_sistema.sql incluido en la raíz del proyecto para crear las tablas necesarias.

### 4. Ejecutar la aplicación
Abre tu navegador e ingresa a la siguiente dirección en la barra de navegación (reemplazando "nombre-de-tu-carpeta" por el nombre exacto de la carpeta que guardaste en htdocs):

http://localhost/nombre-de-tu-carpeta/

---

## Estructura del Proyecto

* DB_sistema.sql - Archivo con las consultas SQL para crear las tablas del sistema.
* Archivos PHP - Código fuente con la interfaz, formularios y lógica del sistema.