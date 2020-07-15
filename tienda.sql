-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2020 a las 23:39:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) UNSIGNED NOT NULL,
  `nombre_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nombre_cat`) VALUES
(1, 'Tableta'),
(2, 'Celular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(11) UNSIGNED NOT NULL,
  `nombre_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `nombre_color`) VALUES
(1, 'Blanco'),
(2, 'Negro'),
(3, 'Rojo'),
(4, 'verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `usr_compra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prod_compra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cant_compra` int(11) NOT NULL,
  `fecha_compra` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `usr_compra`, `prod_compra`, `cant_compra`, `fecha_compra`) VALUES
(1, 'El usuario Michelle Martinez,Ha realizado una compra', '', 1, '2020-07-15 13:36:49.005079'),
(2, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 2, '2020-07-15 13:40:06.670997'),
(3, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 3, '2020-07-15 13:56:06.695742'),
(4, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 14:22:10.440695'),
(5, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 14:23:20.592817'),
(6, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 14:24:47.137940'),
(7, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 16:41:56.568161'),
(8, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPad', 1, '2020-07-15 16:45:29.610836'),
(9, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPad', 2, '2020-07-15 16:49:15.138642'),
(10, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 16:49:24.594586'),
(11, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone X', 1, '2020-07-15 16:56:30.790451'),
(12, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPad PRO', 1, '2020-07-15 16:56:43.605874'),
(13, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 1, '2020-07-15 16:57:54.104477'),
(14, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 18:23:46.508559'),
(15, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 1, '2020-07-15 18:23:56.698870'),
(16, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 18:24:29.820855'),
(17, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 4, '2020-07-15 18:25:29.008036'),
(18, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 18:29:32.518116'),
(19, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 2, '2020-07-15 18:30:32.287392'),
(20, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 18:31:29.479600'),
(21, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 2, '2020-07-15 18:31:40.545114'),
(22, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 2, '2020-07-15 18:31:47.325168'),
(23, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 2, '2020-07-15 18:32:10.517212'),
(24, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 2, '2020-07-15 18:32:20.995423'),
(25, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 2, '2020-07-15 18:32:54.600941'),
(26, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 2, '2020-07-15 18:34:24.396651'),
(27, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 11', 1, '2020-07-15 18:34:33.907782'),
(28, 'El usuario Michelle Martinez,Ha realizado una compra', 'iPhone 8', 20, '2020-07-15 20:35:20.044406');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nombre_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precio_prod` decimal(20,0) NOT NULL,
  `des_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_prod` int(11) NOT NULL,
  `img_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat` int(10) UNSIGNED DEFAULT NULL,
  `color` int(10) UNSIGNED DEFAULT NULL,
  `venta_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nombre_prod`, `precio_prod`, `des_prod`, `stock_prod`, `img_prod`, `cat`, `color`, `venta_prod`) VALUES
(1, 'iPhone 11', '21999', 'Fotos amplias y perfectas de día y de noche Su cámara ultra gran angular abarca un campo visual hasta cuatro veces más grande para que nada ni nadie se quede afuera de la toma.', 7, 'https://i.blogs.es/aecc19/apple-iphone-11/450_1000.jpg', 2, 1, 1),
(2, 'Samsung Galaxy 20', '32500', 'Conoce a Galaxy S20, un celular renovado que cambiará la forma el mundo fotográfico. Experimenta más con videos en 8K con video Snap que cambia la forma en que capturas los videos y los momentos.', 9, 'https://i.blogs.es/aecc19/apple-iphone-11/450_1000.jpg', 2, 2, 1),
(3, 'iPhone X', '17999', 'El iPhone X cuenta con tecnología de Super Retina en un tamaño de 5.8 pulgadas adicionada con tecnologías que permiten que la pantalla siga un diseño curvo con precisión y termine hasta las elegantes esquinas redondeadas. ', 12, 'https://i.blogs.es/aecc19/apple-iphone-11/450_1000.jpg', 2, 3, 1),
(4, 'iPhone 8', '12999', 'Llévate el nuevo iPhone 8 con vidrio más durable y resistente del mercado, y banda de aluminio de grado aeroespacial más fuerte.', 25, 'https://i.blogs.es/aecc19/apple-iphone-11/450_1000.jpg', 2, 4, 20),
(5, 'iPad PRO', '42999', 'Increíble diseño todo pantalla. Más rápido que la mayoría de las laptops PC. Capaz de transformar la realidad con las cámaras Pro. Y tan versátil que puedes usarlo con el dedo, el Apple Pencil, un teclado y ahora con un trackpad. Es el nuevo iPad Pro.', 6, 'https://www.officedepot.com.mx/medias/88379.jpg-1200ftw?context=bWFzdGVyfHJvb3R8NjYyNTExfGltYWdlL2pwZWd8aGI4L2g4Ny85NjUzNDExNTc3ODg2LmpwZ3w0YTY3MzhjZGNiMmIzZjdiZDY3NWVkNTgwNjEyMjE4NTc4NDNhNTU5YzhmZTBhNTE3MjQ5OGQ1NzRjOTdjZWU3', 1, 1, 1),
(6, 'iPad', '14999', 'Increíble diseño todo pantalla. Más rápido que la mayoría de las laptops PC. Capaz de transformar la realidad con las cámaras Pro. Y tan versátil que puedes usarlo con el dedo, el Apple Pencil, un teclado y ahora con un trackpad. Es el nuevo iPad Pro.', 8, 'https://www.officedepot.com.mx/medias/88379.jpg-1200ftw?context=bWFzdGVyfHJvb3R8NjYyNTExfGltYWdlL2pwZWd8aGI4L2g4Ny85NjUzNDExNTc3ODg2LmpwZ3w0YTY3MzhjZGNiMmIzZjdiZDY3NWVkNTgwNjEyMjE4NTc4NDNhNTU5YzhmZTBhNTE3MjQ5OGQ1NzRjOTdjZWU3', 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) NOT NULL,
  `nombre_usr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_usr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_usr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo_usr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_usr` int(15) NOT NULL,
  `status_usr` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `nombre_usr`, `telefono_usr`, `direccion_usr`, `correo_usr`, `password_usr`, `status_usr`) VALUES
(1, 'Michelle Martinez', '9981234567', 'SM 525 MZ 4 LT 3', 'michelle@unid.edu.mx', 1234567, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `cat` (`cat`),
  ADD KEY `color` (`color`),
  ADD KEY `cat_2` (`cat`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`color`) REFERENCES `colores` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`cat`) REFERENCES `categorias` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
