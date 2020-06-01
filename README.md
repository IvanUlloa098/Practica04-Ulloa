# Practica04 – Mi Agenda Telefónica
Practica 4 Telefono
### PRACTICA DE LABORATORIO
### CARRERA: Computacion
### ASIGNATURA : Programación Hipermedial
### TÍTULO PRÁCTICA : Resolución de problemas sobre PHP y MySQL 
### ESTUDIANTES: JOHN HENRY CHIQUI C. ASCE, IVAN ULLOA
### Objetivo Alcanzado:
* Tener el conocimiento suficiente para que el estudiante pueda entender y organizar de una mejor manera los sitios de web y de negocios en Internet 
#### ACTIVIDADES DESAROLLADAS
1.  Crear un repositorio en GitHub con el nombre “Practica04 – Mi Agenda Telefónica”.
	Usuario de GitHub:IvanUlloa098, johnasce contributor
	Repositorio de la presente práctica: https://github.com/IvanUlloa098/Practica04-Ulloa.git
2.	Realizar un commit y push por cada requerimiento. Se realizaron los commits, y push de acuerdo se fue avanzando en el desarrollo de la página web.
3.	Luego, se debe crear el archivo README del repositorio de GitHub.
    Esta Creado el Archivo Readme en el repositorio
4.	Generar informe de los resultados en el formato de prácticas. Debe incluir:
a.	El diagrama E-R de la solución propuesta.

![image](https://user-images.githubusercontent.com/51840139/83415401-a4bde200-a3e4-11ea-8f3f-b4a91bd654cd.png)

b.	Nombre de la base de datos.
La base de datos tiene como nombre “hipermedial”.

![db](https://user-images.githubusercontent.com/51840139/83415591-ebabd780-a3e4-11ea-894e-6b969a223b16.png)

![db2](https://user-images.githubusercontent.com/51840139/83415623-f9f9f380-a3e4-11ea-91a6-978da242fffc.png)

c.	Sentencias SQL de la estructura de la base de datos 


d.	El desarrollo de cada uno de los requerimientos antes descritos. 

e.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puede generar fotografías instantáneas (pantallazos). 

f.	La evidencia del correcto funcionamiento de cada uno de los puntos requeridos.

g.	El informe debe incluir conclusiones apropiadas.

h.	En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica)

i.	En el informe se debe incluir la firma digital del estudiante.

6.  Se pide desarrollar una aplicación PHP que permita implementar una agenda telefónica en donde un usuario de la aplicación podrá gestionar su información y la misma estará disponible para el público. Es decir, cada uno de estos usuarios podrá tener asignado uno o más teléfonos de contacto de diferente tipo y operador, por ejemplo:

El usuario “Juanito” tiene los teléfonos 0998121212 de tipo celular y operadora Movistar; así como también tiene asignado el teléfono 0728222111 de tipo convencional y operador CNT. 

![6listar_Tels](https://user-images.githubusercontent.com/51840139/83415732-30377300-a3e5-11ea-83f7-caa74cba0fe3.png)

El usuario john tene como teléfono y el tipo de operadora CNT y tiene asignado un teléfono convencional

Por lo cuál, con base al archivo PHP (Apuntes y ejercicios) se pide realizar los siguientes ajustes: 
• Agregar roles a la tabla usuario. Un usuario puede tener un rol de “admin” o “user” 
• Crear una tabla para almacenar los teléfonos de los usuarios 

![usuario](https://user-images.githubusercontent.com/51840139/83415797-4e9d6e80-a3e5-11ea-9017-6e84a57a2f67.png)
![usuaTelefonos](https://user-images.githubusercontent.com/51840139/83415798-4f360500-a3e5-11ea-9a9e-e66649f6d9d6.png)


Indicaciones:

• Además, los requerimientos funcionales del sistema son: 
• Los usuarios “anónimos” pueden registrarse en la aplicación a través de un formulario de creación de cuentas. 

![tipocuenta5](https://user-images.githubusercontent.com/51840139/83415889-7b518600-a3e5-11ea-85ec-175db603f0eb.png)

Los usuarios anónimos pueden crearse una cuenca con en link “Crear una Cuenta”.

• Los usuarios “anónimos” listar los números de teléfono de un usuario usando su número de cédula o correo electrónico.

![6listar_Tels](https://user-images.githubusercontent.com/51840139/83416100-c7042f80-a3e5-11ea-8716-4895e57f8883.png)

Al ingresar la cedula del usuario que se requiere listar la cedula aparece el nombre y los teléfonos que le pertenece

• Un usuario puede iniciar sesión usando su correo y contraseña, y decidiendo del rol podrá: a. Los usuarios con rol de “admin” pueden: agregar, modificar, eliminar, buscar, listar y cambiar la contraseña de cualquier usuario de la base de datos. 

![7logeo](https://user-images.githubusercontent.com/51840139/83416191-ebf8a280-a3e5-11ea-86b1-b2168e66589c.png)

El usuario deberá iniciar sesión para poder hacer agregar, modificar, eliminar buscar etc.

• De igual manera, se pide manejar sesiones para que existe seguridad en el sistema de agenda telefónica. Por lo qué, debe existir una parte pública y una privada. Para lo cuál, se debe tener en cuenta:
•	Un usuario “anónimo”, es decir, un usuario que no ha iniciado sesión puede  acceder únicamente a los archivos de la carpeta pública.
•	Un usuario con rol de “admin” puede acceder únicamente a los archivos de la carpeta admin → vista → admin; y admin → controladores → admin
•	Un usuario con rol de “user” puede acceder únicamente a los archivos de la carpeta admin → vista → user; y admin → controladores → user

![8Acceso_Carpetas](https://user-images.githubusercontent.com/51840139/83416285-10547f00-a3e6-11ea-8a55-03320937bf03.png)

El usuario que es anonimo podra solo ver la parte publica donde se encuentra el login, consultar telefono etc, los usuarios que son ”user” o “admin” pueden ir a la parte privada, esta es la estructura de lo s archivos.

![9PartePublica](https://user-images.githubusercontent.com/51840139/83416326-23674f00-a3e6-11ea-88b8-d66b20c0a1e6.png)

La URL muestra que se esta en la parte publica para el login o listar telefonos.

•	La parte pública (usuario anónimos) y privada (usuario registrado) ha sido descrita en los requisitos antes planteados. Se debe generar una página con la experiencia e interfaz de usuario apropiada, como la que se muestra a continuación: 

![10Interfaz](https://user-images.githubusercontent.com/51840139/83416430-41cd4a80-a3e6-11ea-88e4-cf73de9a26b7.png)


6.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puedezgenerar fotografías instantáneas (pantallazos).

**Pagina index.html**

![11validator](https://user-images.githubusercontent.com/51840139/83416667-a092c400-a3e6-11ea-8c70-664c9b77ac89.png)

**Pagina Login.html**

![11validator3](https://user-images.githubusercontent.com/51840139/83416742-bbfdcf00-a3e6-11ea-87fa-4655bae28621.png)

**Pagina Consultar_telefono.html**

![11validator4](https://user-images.githubusercontent.com/51840139/83416789-d2a42600-a3e6-11ea-833b-238859ddf683.png)

**Css formulario.css**

![12validatorcss1](https://user-images.githubusercontent.com/51840139/83416853-ea7baa00-a3e6-11ea-9b57-8ea4b1dd1a69.png)

**Css login.css Validator**

![12validator_login2](https://user-images.githubusercontent.com/51840139/83416918-fff0d400-a3e6-11ea-8cf8-8f719b6c4b72.png)


**7. Sentencia SQL de la Base de Datos**
Sentncia sql de la estructura de la base de datos
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2020 a las 04:23:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hipermedial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `tel_codigo` int(11) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  `tel_nombre` varchar(255) NOT NULL DEFAULT 'NINGUNO',
  `tel_numero` varchar(10) CHARACTER SET utf8 NOT NULL,
  `tel_tipo` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `tel_eliminado` varchar(1) NOT NULL DEFAULT 'N',
  `tel_fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`tel_codigo`, `usu_codigo`, `tel_nombre`, `tel_numero`, `tel_tipo`, `tel_eliminado`, `tel_fecha_modificacion`) VALUES
(1, 4, 'NINGUNO', '123456', 'CELULAR', 'N', NULL),
(2, 4, 'NINGUNO', '1234567', 'CELULAR', 'N', NULL),
(7, 4, 'Tel1', '9999999999', 'CELULAR ', 'N', NULL),
(8, 4, 'Tel2', '12345676', 'CONVENCION', 'S', '2020-05-30'),
(9, 4, 'NINGUNO', '1234888', 'CONVENCION', 'S', '2020-05-30'),
(10, 4, 'NINGUNO', '7777777777', 'CELULAR ', 'N', NULL),
(14, 4, 'LLL', '9999999999', 'CELULAR ', 'N', NULL),
(15, 4, 'RRRR', '9999999999', 'CELULAR ', 'N', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_codigo` int(11) NOT NULL,
  `usu_cedula` varchar(10) CHARACTER SET utf8 NOT NULL,
  `usu_nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usu_apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usu_direccion` varchar(75) CHARACTER SET utf8 NOT NULL,
  `usu_telefono` varchar(20) CHARACTER SET utf8 NOT NULL,
  `usu_correo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `usu_password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `usu_fecha_nacimiento` date NOT NULL,
  `usu_eliminado` varchar(1) CHARACTER SET utf8 DEFAULT 'N',
  `usu_fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `usu_fecha_modificacion` timestamp NULL DEFAULT NULL,
  `usu_rol` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_codigo`, `usu_cedula`, `usu_nombres`, `usu_apellidos`, `usu_direccion`, `usu_telefono`, `usu_correo`, `usu_password`, `usu_fecha_nacimiento`, `usu_eliminado`, `usu_fecha_creacion`, `usu_fecha_modificacion`, `usu_rol`) VALUES
(1, '1111111111', 'AAA AAA', 'BBB BBBB', 'CCCCCCCCCCCCCCC', '0000000000', 'sdddddddd', '5d5cc48db70ecce234a443a9a05d66ee', '0000-00-00', 'N', '2020-05-19 16:42:33', NULL, 'U'),
(2, '2222222222', 'AAA AAA', 'BBB BBB', 'CCCCCCCCCCCCCCCCCCCCCCC', '9999999999', 'algo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1990-05-12', 'N', '2020-05-20 14:26:20', NULL, 'A'),
(4, '3333333333', 'CCC CCC', 'DDD DDD', 'EEEEEEEEEEEEE', '9999999999', 'ejemplo@gmail.com', '202cb962ac59075b964b07152d234b70', '1995-05-06', 'S', '2020-05-20 15:39:19', '2020-05-21 21:31:09', 'U'),
(5, '4444444444', 'DDDDD DDD', 'CCCCC CCC', 'GGGGGGGG', '9999999999', 'lel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1998-05-19', 'N', '2020-05-29 20:20:22', NULL, 'U'),
(12, '5555555555', 'EE EEE', 'FFFF FFFF', 'TTTTTTTTTTTT', '999999999', 'lelele@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-19', 'N', '2020-05-29 22:32:21', NULL, 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`tel_codigo`),
  ADD KEY `fk_usu_codigo` (`usu_codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `tel_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_usu_codigo` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`usu_codigo`);
COMMIT;


**8. Explicacion de la estructura de cada pagina html**

Elementos en común para todas las páginas: En todas las páginas se encuentran elementos comunes o similares, en este caso son los siguientes:

**En la pagina index.html:**
Esta pagina permite ser visible para los usuarios “user” y “anónimos” la pagina se encuentra en una ubicación de la carpeta public ya que es visible para los usuarios, tiene interfaz gráfica así como css. 

**En la pagina Login.html:**
Esta pagina permite ingresar con un usuario y contraseña para poder navegar entre las distintas secciones, si no se tiene una cuenta se deberá registrar previamente para poder gestionar la página interna.

**En la pagina_usuario.php:**
En esta página se podrá ingresar con un usuario y una contraseña y esto ya está protegido para que solo cierto usuario pueda acceder y no cualquier usuario, esta pagina se encuentra en el directorio private, aquí el usuario podrá gestionar sus contactos, así como consultar los mismo.

**Cada pagina esta creado de tal manera que sea segura.**
Las paginas de privadas o tipo private tiene la variable sesión que sirve para loguearse y poder navegar internamente y se puede determinar que usuario esta logeado a las paginas internas.

**Los proceso que puede hacer un user tipo “admin”**
Para ingresar a las paginas privadas del administrador el usuario deberá contar con un correo y una contraseña y a su ves ser de tipo administrado que le permita loguearse y hacer procesos de tipo “admin”, Las paginas para el administrador se encuentran en un directorio llamado “admin”.
Le permitirá gestionar los procesos de los demás usuarios así como también modificar sus contraseñas y modificar que tipo de rol de usuario.

**Carpetas**
Las carpetas están dividas internamente en controladores y vista que permitan separa la lógica de negocio como la interfaz del usuario para que no se mescle y tener una jerarquía de ordenamiento y separar, a donde se puede acceder internamente y que no cualquier usuario pueda acceder.

9. Generar informe de los resultados en el formato de prácticas. Debe incluir:
**a. El informe debe incluir conclusiones apropiadas.**
**b. En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica)
	Usuario de GitHub:johnasce, IvanUlloa098
	Repositorio de la presente práctica: https://github.com/IvanUlloa098/Practica04-Ulloa.git**

**c. El informe debe incluir conclusiones apropiadas.**

**d. En el informe se debe incluir la firma digital del estudiante.**
