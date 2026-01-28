# PruebaPHP
Simple prueba de php para Tópicos Especiales de Ingenieria de Software. Desarrollado con XAMPP

## Instrucciones de uso

Para poder usar páginas PHP se requiere un servidor web. Esta prueba fue realizada usando XAMPP.

Si bien XAMPP se instala en distintas partes dependiendo de tu sistema operativo, lo que puede hacer este proceso más o menos fácil, los pasos básicos son:
1. Encuentra tu instalación de XAMPP.
2. Encuentra la carpeta "htdocs" y crea una nueva carpeta adentro, la carpeta que acabamos de crear va a contener los archivos de la página web.
3. Ejecuta XAMPP y verifica que mysql y Apache estén activos.
4. **Estos archivos no incluyen la creación de la base de datos, esto se puede realizar accediendo a localhost/phpmyadmin y usando la dashboard para realizar la creación de forma manual.**
5. Accediendo a localhost/{el nombre de la carpeta que creaste} se llega al formulario.

La página del formulario tiene dos secciones: A la izquierda está el formulario que permite registrar un nombre, y a la derecha se presenta la tabla con todos los nombres registrados.

Al ingresar un nombre, la página se dirige a `insert.php` para actualizar la base de datos SQL y automáticamente se redirige a la página principal (siendo `index.php`). Ya que se actualizó la base de datos, la página reflejará el cambio y mostrará todos los nombres que se hayan ingresado y existan en la base de datos, mostrándose al usuario como si la página se actualizara en tiempo real.

## Datos adicionales

Si bien esto fue un ejercicio auto-diagnóstico, y lo único que fue solicitado fue que la página dejara ingresar un nombre y que la base de datos se actualizara (es decir, no hace falta que la página muestre los nombres, perfectamente se podrían dejar en la página de administración de XAMPP), quería exigirme un poco más para recordar cómo utilizar php de mejor manera, además que la presentación de un proyecto, por más simple que sea, es algo que me importa personalmente.

Por ese mismo motivo hay un archivo css, aunque he de admitir que podría haber hecho la página visualmente más bonita.

Proyecto realizado para **Tópicos Especiales de Ingenieria de Software**, cursando el séptimo semestre de **Ingenieria de Sistemas** en la **universidad EAFIT**.
