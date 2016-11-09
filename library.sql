-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2016 a las 01:14:58
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `library`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `titulo` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `edicion` varchar(10) NOT NULL,
  `editorial` varchar(15) NOT NULL,
  `año` int(11) NOT NULL,
  `isbn` varchar(60) NOT NULL,
  `idioma` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `pags` int(11) NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`titulo`, `autor`, `edicion`, `editorial`, `año`, `isbn`, `idioma`, `pags`, `descripcion`, `codigo`, `id`) VALUES
('Orgullo y Prejuicio', 'Jane Austen', '1a', 'Austral', 2016, '978-607-07-3272-0', 'EspaÃ±ol', 352, '', 'NJ123-456', 1),
('Oscuros', 'Lauren Kate', '1a', 'Montena', 2012, ' 9788484415992', 'EspaÃ±ol', 416, 'Es noche cerrada y dos jÃ³venes conversan en una remota casa de campo. Se sienten irresistiblemente atraÃ­dos el uno por el otro, pero Ã©l insiste en que no pueden estar juntos. ', 'NJ123-457', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'admin', ' ,¹b¬Y[–K-#Kp'),
(3, 'AnaT', '1\rË¿LÎb÷b¢ª¡HÕV½'),
(6, 'Ana', ' ,¹b¬Y[–K-#Kp'),
(7, 'alumno', 'iQ¡ŠåI{ph'),
(8, 'alumno2', ' ,¹b¬Y[–K-#Kp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
