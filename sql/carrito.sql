-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2016 a las 23:37:51
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detpedidos`
--

CREATE TABLE `detpedidos` (
  `id` int(5) NOT NULL,
  `pedido_id` int(5) NOT NULL,
  `producto_id` int(5) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `idpro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `name`, `idpro`) VALUES
(1, '4fan', 1),
(2, 'angry', 2),
(3, 'argo', 3),
(4, 'batman', 4),
(5, 'death', 5),
(6, 'gravedad', 6),
(7, 'hitch', 7),
(8, 'madmax', 8),
(9, 'scarface', 9),
(10, 'sherlock', 10),
(11, 'shrek', 11),
(12, 'sinister', 12),
(13, 'spo', 13),
(14, 'steve', 14),
(15, 'poltergeist', 15),
(16, 'salt', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Admin', '', 'admin@gmail.com', 'admin', 1),
(2, 'Oscar', 'oscar', 'oscar@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(5) NOT NULL,
  `cliente_id` int(5) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `vig` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `edad` varchar(100) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `precio`, `vig`, `empresa`, `idioma`, `edad`) VALUES
(1, 'Los Cuatro Fantasticos', '9.00', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 13 años'),
(2, 'Angry Birds: La Pelicula', '12.99', 'Disponible', 'Sony', 'Multilenguaje', 'Todos los publicos'),
(3, 'Argo', '11.00', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 18 años'),
(4, 'Batman: Under the Red Hood', '29.00', 'Disponible', 'DC', 'Multilenguaje', 'Mayores de 16 años'),
(5, 'Death Race', '9.99', 'Disponible', 'Carrera Mortal', 'Multilenguaje', 'Mayores de 14 años'),
(6, 'Gravedad', '16.00', 'Disponible', 'Warner Bros', 'Multilenguaje', 'Mayores de 15 años'),
(7, 'Hitch', '9.99', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 16 años'),
(8, 'Mad Max: Fury Road', '29.00', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 14 años'),
(9, 'Scarface Limited Edition', '27.99', 'Disponible', 'DC', 'Multilenguaje', 'Mayores de 17 años'),
(10, 'Sherlock: The Abominable Bride', '29.99', 'Disponible', 'DC', 'Totalmente en Ingles', 'Todos los Publicos'),
(11, 'Shrek: The Whole Story', '50.00', 'Disponible', 'Sony', 'Multilenguaje', 'Todos los Publicos'),
(12, 'Sinister', '10.00', 'Disponible', 'DC', 'Multilenguaje', 'Mayores de 17 años'),
(13, 'Spotlight', '24.99', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 16 años'),
(14, 'Steve Jobs', '29.99', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 16 años'),
(15, 'Poltergeist', '24.99', 'Disponible', 'Sony', 'Multilenguaje', 'Mayores de 16 años');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detpedidos`
--
ALTER TABLE `detpedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detpedidos`
--
ALTER TABLE `detpedidos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
