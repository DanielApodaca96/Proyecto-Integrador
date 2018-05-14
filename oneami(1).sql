-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2018 a las 02:08:58
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oneami`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(8) NOT NULL,
  `nombre` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `created_at`, `updated_at`) VALUES
(13, 'hola', '2018-05-12 13:21:39', '2018-05-12 13:21:39'),
(14, 'hola que tal', '2018-05-12 13:21:46', '2018-05-12 13:21:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_persona` int(8) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidoP` varchar(30) DEFAULT NULL,
  `apellidoM` varchar(30) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` bigint(15) DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `escolaridad` varchar(40) DEFAULT NULL,
  `anio` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_persona`, `nombre`, `apellidoP`, `apellidoM`, `edad`, `sexo`, `telefono`, `estado_civil`, `escolaridad`, `anio`, `created_at`, `updated_at`) VALUES
(1, 'Lorenzo', 'Arredondo', 'Dominguez', 22, NULL, 5425565465, 'Soltero/a', 'Media Superior', 0000, '2018-05-11 00:06:49', '2018-05-11 06:06:49'),
(3, 'Joel Eduardo', 'Gomez', 'Almanza', 22, 'Femenino', 6361036565, 'Divorciado/a', 'Media Superior', 0000, '2018-05-08 02:32:51', '2018-05-08 08:32:51'),
(4, 'Ismael', 'Varela', 'Jurado', 22, 'Femenino', 636106633, 'Soltero/a', 'Secundaria', 0000, '2018-04-26 20:16:25', '2018-03-22 14:18:44'),
(6, 'Carlos', 'Torres', 'Garcia', 22, 'Masculino', 654654654654, 'Soltero/a', 'Media Superior', 0000, '2018-05-11 00:06:03', '2018-05-11 06:06:03'),
(8, 'Alberto', 'Grijalva', 'Ruiz', 19, 'Masculino', 456456456, 'Soltero/a', 'Superior', 0000, '2018-04-26 20:19:55', '2018-04-11 04:30:19'),
(9, 'Daniel', 'Apodaca', 'Duron', 22, 'Masculino', 321654987, 'Soltero/a', 'Primaria', 2018, '2018-05-02 21:04:55', '2018-04-25 06:50:15'),
(12, 'lil dicky', 'el', 'rapero', 23, 'Masculino', 6361155225, 'Soltero/a', 'Secundaria', 2018, '2018-05-03 03:27:06', '2018-05-03 03:27:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(8) NOT NULL,
  `num_grupo` int(3) DEFAULT NULL,
  `nom_grupo` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_taller` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `num_grupo`, `nom_grupo`, `created_at`, `updated_at`, `id_taller`) VALUES
(3, 666, 'CERESO', '2018-05-12 07:12:57', '2018-05-12 07:12:57', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(8) NOT NULL,
  `id_grupo` int(8) DEFAULT NULL,
  `id_persona` int(8) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id_inscripcion`, `id_grupo`, `id_persona`, `fecha`, `created_at`, `updated_at`) VALUES
(13, 3, 12, '05/05/2018', '2018-05-12 13:18:34', '2018-05-12 13:18:34'),
(15, 3, 3, '03/05/2018', '2018-05-12 13:20:13', '2018-05-12 13:20:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id_metas` int(4) NOT NULL,
  `metas` int(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metas`
--

INSERT INTO `metas` (`id_metas`, `metas`, `created_at`, `updated_at`) VALUES
(1, 630, '2018-04-30 05:52:41', '2018-04-30 05:52:41'),
(2, 630, '2018-04-30 05:54:33', '2018-04-30 05:54:33'),
(3, 100, '2018-05-02 21:19:09', '2018-05-02 21:19:09'),
(4, 25, '2018-05-02 21:27:52', '2018-05-02 21:27:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(8) NOT NULL,
  `pregunta` text,
  `id_categoria` int(8) DEFAULT NULL,
  `tipo_respuesta` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `id_categoria`, `tipo_respuesta`, `created_at`, `updated_at`) VALUES
(13, 'como me llamo', 13, '4 Opciones', '2018-05-12 13:21:58', '2018-05-12 13:21:58'),
(14, 'hola que tal', 14, '4 Opciones', '2018-05-12 13:22:12', '2018-05-12 13:22:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id_resultado` int(3) NOT NULL,
  `id_persona` int(8) DEFAULT NULL,
  `id_pregunta` int(8) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `porcentaje` int(3) DEFAULT NULL,
  `id_inscripcion` int(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id_resultado`, `id_persona`, `id_pregunta`, `tipo`, `porcentaje`, `id_inscripcion`, `created_at`, `updated_at`) VALUES
(1, 4, 13, 'pre', 100, 14, '2018-05-12 13:24:42', '2018-05-12 13:24:42'),
(2, 4, 14, 'pre', 25, 14, '2018-05-12 13:24:45', '2018-05-12 13:24:45'),
(4, 4, 16, 'pre', 100, 14, '2018-05-12 13:24:48', '2018-05-12 13:24:48'),
(5, 4, 13, 'post', 100, 14, '2018-05-12 13:24:53', '2018-05-12 13:24:53'),
(6, 4, 14, 'post', 100, 14, '2018-05-12 13:24:53', '2018-05-12 13:24:53'),
(8, 4, 16, 'post', 0, 14, '2018-05-12 13:24:58', '2018-05-12 13:24:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `id_taller` int(8) NOT NULL,
  `nombre_taller` varchar(50) DEFAULT NULL,
  `descripcion` varchar(600) DEFAULT NULL,
  `instructor` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id_taller`, `nombre_taller`, `descripcion`, `instructor`, `created_at`, `updated_at`) VALUES
(5, 'Crecimiento Personal', 'El objetivo de este taller es desarrollar capacidades, potencialidades y superar situaciones personales modificando conductas y actitudes para desempeñarse mejor como individuos.', 'Daniel Apodaca', '2018-05-12 07:12:30', '2018-05-12 07:12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilegios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `privilegios`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Ivan', 'ivan@gmail.com', '$2y$10$KohxLeOY717IeEmXKcdmWeE453tZTj79T45hGXoqFp1hYEOzJCzX.', 'admin', 'lGYSgrYMh2HUOzpZLr6bVg8Gh8EwqxKJEHMa9iaVT21TQsnMsdC5BBPPtgV5', '2018-03-08 10:49:40', '2018-03-08 10:49:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_taller` (`id_taller`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id_metas`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_inscripcion` (`id_inscripcion`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_persona` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id_inscripcion` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `id_metas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id_resultado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id_taller` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id_taller`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `datos` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `datos` (`id_persona`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
