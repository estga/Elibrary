###############
Que es Elibrary
###############

Elibrary es un sistema de gestion de prestamos de libros. 
Dicho proyecto es un desarrollo de software particular diseñado para cumplir con los requisitos para la carrera de LSI (Licensiatura en sistemas de informacion).
Esta desarrollado utilizando el lenguaje PHP mediante el framework Codeigniter y utilizando el editor de texto Visual Studio Code.

*********
Objetivos
*********

Nuestro objetivo es desarrollar un sistema de gestión de biblioteca para agilizar el alquiler de libros, la disponibilidad de inventarios y demás consultas del establecimiento, además de permitir la creación de cuentas de usuario.

***********
Metodología
***********

Para este proyecto elegimos la metodología de Programación Extrema (XP), ya que optimiza los tiempos y se adapta al desarrollo de este sistema sin mayor documentación, el código es claro y simple.

**************************
Funcionalidad del producto
**************************

El Sistema permitirá:
-  Creación de nuevo usuario._
-  Inicio de sesión de usuarios._
-  Consulta de un libro._
-  Administrar el préstamo de libros._

**************************
Requerimientos Funcionales
**************************

ID Nº	Descripción del requerimiento.
RF-1	Para la utilización e identificación en el sistema, los usuarios tendrán un nombre de usuario y contraseña.
RF-2	El sistema debe permitir la creación de una cuenta de usuario con nombre de usuario y contraseña.
RF-3	El sistema debe permitir la modificación de una cuenta de usuario.
RF-4	El sistema debe permitir dar de baja una cuenta de usuario.
RF-5	El sistema debe permitir la consulta del libro solicitado.
RF-6	El sistema debe registrar el préstamo del libro.
RF-7	El sistema debe permitir consultar el estado del préstamo.

*****************************
Requerimientos No Funcionales
*****************************

ID Nº	Descripción del requerimiento
RNF-1	El sistema debe responder en un tiempo inferior a 2 segundos.
RNF-2	Deben poder realizar requisitos a la base de datos de forma recurrente.
RNF-3	Los datos personales de los socios deben estar almacenados y protegidos dentro de nuestra base de datos.
RNF-4	Ante un eventual corte de energía eléctrica, el sistema debe ser capaz de evitar pérdida de información.
RNF-5	El sistema dispondrá de una interfaz intuitiva, sencilla y de fácil uso.
RNF-6	El sistema debe estar disponible en cualquier momento que el usuario necesite acceder a él.
RNF-7	El sistema tendrá una documentación de fácil entendimiento. Que facilitará las futuras mejoras al sistemas.
RNF-8	El sistema se implementará bajo plataforma de Windows 7 o superior.

*************************
Selección de Arquitectura
*************************

La arquitectura elegida para este proyecto es Cliente-Servidor, con la característica de ser lo bastante liviano como para ser controlado por un protocolo de solicitud / respuesta utilizado para que los clientes tengan acceso a la gran variedad de libros disponibles.
Otra característica por la cual elegimos Cliente/Servidor para este sistema, es el uso de su servicio remoto, el cual permite que los datos se encuentren encriptados brindando así una mayor seguridad al usuario
Esta implementación brinda la posibilidad de escalar el sistema fácilmente a un mayor número de usuarios concurrentes a medida que el establecimiento se expande con el tiempo con otras sucursales.

*********
Resources
*********

Report security issues to our `Security Panel <mailto:estiga_27@gmail.com>`_
thank you.

###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <https://webchat.freenode.net/?channels=%23codeigniter>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
