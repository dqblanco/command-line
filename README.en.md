# Cómo crear un script de líneas de comandos con PHP usando el componente Console de Symfony
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

La ídea general es crear un script que funcione usando las líneas de comando (PHP-CLI). 
Para delimitar el demo, definiremos el alcance y los requesitos técnicos del desarrollo.

## Requerimientos a desarrollar 

* El script debe ejecutarse desde las líneas de comandos
* Se deben usar colores para imprimir resultados
* El script debe recibir dos números (Inicio y Fin)
* De deben imprimir la suma de ambos números
* Agregar una opción para repetir el proceso de suma N cantidad de veces.

## Qué se hizo de interesante

* Se uso el componente [Console de Symfony]( https://symfony.com/doc/current/components/console.html).
* Se empaquetó el proyeto para que sea portable usando composer.
* Se agrego el composer en los archivos de el proyecto.

## Requerimientos técnicos

* Versión de php usada: `php -v` - **PHP 7.3.11**

## Instalación
* Clonar proyecto
* Ejecutar: `php bin/composer install`
* Permisos necesarios: `chmod +x bin/console` 

## Cómo ejecutar el script

* Para listar los comandos de consola disponibles usar: `bin/console`
* Ejemplo de ejecución con parametros: 
  * `bin/console onlyphp:demo 2 5 -i 5`
  * `bin/console onlyphp:demo 2 5 --iterations 5`
  * `bin/console onlyphp:demo 2 5 --iterations=5`

## Tip

  * Cuando se agrega una nueva clase en la carpeta "src/" es necesario ejecutar el comando `bin/composer dump -o`. De esta forma se auto cargan las clases

:gift: [David Quinones]( https://github.com/dqblanco).