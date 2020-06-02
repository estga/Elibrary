# Que es Elibrary

Elibrary es un sistema de gestion de prestamos de libros.
Dicho proyecto es un desarrollo de software particular diseñado para cumplir con los requisitos para la carrera de LSI (Licensiatura en sistemas de informacion).
Esta desarrollado utilizando el lenguaje PHP mediante el framework Codeigniter y utilizando el editor de texto Visual Studio Code.

---

### Objetivos


Nuestro objetivo es desarrollar un sistema de gestión de biblioteca para agilizar el alquiler de libros, la disponibilidad de inventarios y demás consultas del establecimiento, además de permitir la creación de cuentas de usuario.

---

### Metodología


Para este proyecto elegimos la metodología de Programación Extrema (XP), ya que optimiza los tiempos y se adapta al desarrollo de este sistema sin mayor documentación, el código es claro y simple.

---

### Funcionalidad del producto


El Sistema permitirá:
- Creación de nuevo usuario.
- Inicio de sesión de usuarios.
- Consulta de un libro.
- Administrar el préstamo de libros.

---

### Requerimientos Funcionales


| ID Nº | Descripción del requerimiento |
| --------- | --------- |
| RF-1 | Para la utilización e identificación en el sistema, los usuarios tendrán un nombre de usuario y contraseña |
| RF-2 | El sistema debe permitir la creación de una cuenta de usuario con nombre de usuario y contraseña |
| RF-3 | El sistema debe permitir la modificación de una cuenta de usuario |
| RF-4 | El sistema debe permitir dar de baja una cuenta de usuario |
| RF-5 | El sistema debe permitir la consulta del libro solicitado |
| RF-6 | El sistema debe registrar el préstamo del libro |
| RF-7 | El sistema debe permitir consultar el estado del préstamo |

---

### Requerimientos No Funcionales


| ID Nº | Descripción del requerimiento |
| --------- | --------- |
| RNF-1 | El sistema debe responder en un tiempo inferior a 2 segundos |
| RNF-2 | Deben poder realizar requisitos a la base de datos de forma recurrente |
| RNF-3 | Los datos personales de los socios deben estar almacenados y protegidos dentro de nuestra base de datos |
| RNF-4 | Ante un eventual corte de energía eléctrica, el sistema debe ser capaz de evitar pérdida de información |
| RNF-5 | El sistema dispondrá de una interfaz intuitiva, sencilla y de fácil uso |
| RNF-6 | El sistema debe estar disponible en cualquier momento que el usuario necesite acceder a él |
| RNF-7 | El sistema tendrá una documentación de fácil entendimiento. Que facilitará las futuras mejoras al sistemas |
| RNF-8 | El sistema se implementará bajo plataforma de Windows 7 o superior |

---

### Selección de Arquitectura


La arquitectura elegida para este proyecto es Cliente-Servidor, con la característica de ser lo bastante liviano como para ser controlado por un protocolo de solicitud / respuesta utilizado para que los clientes tengan acceso a la gran variedad de libros disponibles.
Otra característica por la cual elegimos Cliente/Servidor para este sistema, es el uso de su servicio remoto, el cual permite que los datos se encuentren encriptados brindando así una mayor seguridad al usuario
Esta implementación brinda la posibilidad de escalar el sistema fácilmente a un mayor número de usuarios concurrentes a medida que el establecimiento se expande con el tiempo con otras sucursales.

---

### Resources


Report security issues to our `Security Panel <mailto:estiga_27@gmail.com>`\_ thank you.
