-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 12-08-2025 a las 06:13:56
-- Versión del servidor: 11.5.2-MariaDB
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `w3schools`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(17) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `lvl` varchar(20) NOT NULL,
  `fini` varchar(10) NOT NULL,
  `ffin` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `category`, `lvl`, `fini`, `ffin`, `price`, `hours`, `idioma`, `state`) VALUES
(1, 'HTML', 'Curso de HTML web', 'Frontend', 'Principiante', '10/11/2025', '10/12/2025', 150, 40, 'Frances', 'Online:'),
(2, 'Desarrollo', 'Curso de desarrollo web', 'Backend', 'Avanzado', '20/05/2024', '20/06/2024', 180, 50, 'Portugues', 'Presencial:'),
(3, 'Desplegamiento', 'Curso de desplegamiento web', 'FullStack', 'Medio', '21/02/2024', '10/07/2024', 599, 120, 'Aleman', 'Online:Presencial:'),
(5, 'Python', 'Curso de python para gente con experiencia', 'Backend', 'Avanzado', '20/05/2024', '20/06/2024', 180, 50, 'Aleman', 'Presencial:'),
(6, 'Java', 'Curso de java', 'FullStack', 'Medio', '21/02/2024', '10/07/2024', 599, 120, 'Portugues', 'Online:Presencial:'),
(141, 'JavaScript', 'Curso de js', 'Frontend', 'Medio', '05/02/2025', '21/02/2025', 600, 150, 'Portugues', 'Online:Presencial:'),
(142, 'PHP', 'Curso de PHP', 'Backend', 'Avanzado', '06/02/2025', '28/02/2025', 250, 40, 'EspaÃ±ol', 'Online:Presencial:'),
(143, 'SQL', 'Curso de consultas SQL y lenguaje DDL', 'Backend', 'Avanzado', '20/02/2025', '20/06/2025', 1200, 300, 'EspaÃ±ol', 'Presencial:');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `nom_prod` varchar(40) NOT NULL,
  `sexo_prod` varchar(50) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `entrega` varchar(40) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `stock` int(50) NOT NULL,
  `precio` int(5) NOT NULL,
  `fini` varchar(10) NOT NULL,
  `ffin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `marca`, `categoria`, `tipo`, `nom_prod`, `sexo_prod`, `talla`, `entrega`, `descripcion`, `condicion`, `stock`, `precio`, `fini`, `ffin`) VALUES
(71, 'Nike', 'ropa', 'exterior', 'Zapatillas', 'masculino:', 'S', 'domicilio', 'descripcion de las zapatillas', 'Bueno', 2, 32, '05/02/2025', '20/02/2025'),
(72, 'Nike', 'accesorio', 'exterior', 'Pelota', 'masculino:femenino:', 'L', 'persona', 'pelota para jugar baloncesto', 'Aceptable', 1, 15, '06/02/2025', '27/02/2025'),
(73, 'Adidas', 'accesorio', 'interior', 'Gorra', 'femenino:', 'L', 'domicilio', 'Descripcion de la gorra', 'Aceptable', 2, 20, '06/02/2025', '28/02/2025'),
(74, 'Puma', 'ropa', 'exterior', 'Sueter', 'masculino:', 'S', 'persona', 'Sueter deportivo de Puma para hombres', 'Aceptable', 1, 17, '07/02/2025', '27/02/2025');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
