# Practica3
En este repositorio se encuentra el backend y el frontend de la práctica 3 de DSM 2023
## Backend
Lo primero a hacer luego de abrir el proyecto de backend es crear una base de datos en su gestor de base de datos preferido.
Luego se debera ejecutar el siguiente comando en una terminal de su editor de código: 'copy .env.example .env'
Dentro de este archivo se debera agregar el nombre de su base de datos creada en el campo 'DB_DATABASE='
Luego, debera ejecutar en una terminal el comando 'composer install' (en caso de no funcionar, dirigirse a la sección de Casos especiales)
Después, debe ejecutar el comando 'php artisan key:generate'
Tendra que ejecutar el comando 'php artisan migrate' para crear las tablas dentro de su base de datos, y luego 'php artisan db:seed --class=UsersSeeder' para implementar los datos ya adjuntos en un seeder a la base de datos.
Por último, deberá ejecutar el comando 'php artisan serve --host=0.0.0.0' para inicializar el servidor del backend.
## Frontend
Lo primero que se debe hacer al abrir este proyecto es abrir una terminal y ejectuar el comando: 'npm install'.
Luego, se tendra que ejecutar el comando 'npx react-native start' seguido por el comando (se recomienda abrir otra terminal para no tener problemas) 'npx react-native run-android'.
Por último, se tiene abrir el buscador de windows y ejecutar el programa Síbolo del sistema, aquí se debe ejectuar el comando 'ipconfig' y se tendra que copiar la dirección ipv4 de nuestro dispositivo y reemplazarla por la dirección que aparece dentro del archivo userApi.jsx
## Casos especiales
Si los comandos utilizados anteriormente no se estan ejecutan es posible que no tenga instaladas las dependecias necesarias para ejecutar estos proyectos, por lo que a continuación habra una lista de los elementos que tendra que descargar si desea ejecutar estos proyectos:
- https://getcomposer.org/ (descargar y ejecutar instalador)
- https://nodejs.org/en (descargar y ejecutar instalador)
- https://chocolatey.org/install (seguir pasos de instalación)
- https://www.apachefriends.org/ (descargar y ejecutar instalador, recomendado si es que no posee un gestor de base de datos)
- https://developer.android.com/studio?hl=es-419 (descargar y ejecutar instalador)
- https://reactnative.dev/docs/environment-setup (seguir pasos de instalación React Native CLI Quickstart)
