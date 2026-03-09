#ESTADO DEL PROYECTO: WIP (Work In Progress). Actualmente en fase de desarrollo temprano. Diseñando migraciones de la base de datos y estructurando modelos.
# Sistema de Gestión de Sanciones (Refactorización a Laravel)

Versión modernizada y escalable del "Sistema de Gestión de Incidencias y Sanciones", originalmente desarrollado en PHP nativo. Este proyecto representa la migración de la lógica de negocio, base de datos y vistas hacia el ecosistema de Laravel, aplicando patrones de diseño modernos y buenas prácticas de desarrollo.

## ¿Por qué esta refactorización?
El objetivo de esta versión es mejorar la mantenibilidad del código, optimizar las consultas a la base de datos mediante Eloquent ORM y robustecer la seguridad del sistema de rutas y autenticación que antes se manejaba manualmente.

## Mejoras Implementadas (Laravel)

* **Arquitectura MVC Estricta:** Separación total de la lógica (Controladores), la estructura de datos (Modelos) y la interfaz (Vistas Blade).
* **Migraciones y Seeders:** Control de versiones de la base de datos MySQL directamente desde el código, eliminando la necesidad de importar archivos `.sql` manualmente.
* **Eloquent ORM:** Sustitución de consultas SQL crudas por relaciones dinámicas (ej. `$alumno->sanciones`).
* **Enrutamiento Seguro:** Reemplazo de los `switch` condicionales por el sistema de rutas web estructuradas de Laravel (`web.php`).
* **Blade Templating:** Vistas dinámicas, modulares y reutilizables, dejando atrás la inyección directa de PHP en el HTML.

##Stack Tecnológico
* **Framework:** Laravel (PHP)
* **Base de Datos:** MySQL
* **Frontend:** Blade, HTML, CSS, JS
