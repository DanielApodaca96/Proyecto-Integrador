-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2018 at 10:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneami`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(8) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datos`
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`id_persona`, `nombre`, `apellidoP`, `apellidoM`, `edad`, `sexo`, `telefono`, `estado_civil`, `escolaridad`, `created_at`, `updated_at`) VALUES
(1, 'Lorenzo', 'Arredondo', 'Dominguez', 21, 'sexo', 2, 'estado', '2', '2018-03-10 16:09:50', '2018-03-10 16:09:50'),
(2, 'Daniel Gustavo', 'Apodaca', 'Duron', 21, 'sexo', 636, 'estado', '2', '2018-03-12 02:06:23', '2018-03-12 02:06:23'),
(3, 'Joel Eduardo', 'Gomez', 'Almanza', 22, 'sexo', 636, 'estado', '2', '2018-03-12 02:07:33', '2018-03-12 02:07:33'),
(4, 'Ismael', 'Varela', 'Jurado', 22, 'sexo', 636106633, '0', '2', '2018-03-12 02:11:00', '2018-03-12 02:11:00'),
(5, 'Carlos', 'Torres', 'Garcia', 22, 'sexo', 6361066334, 'estado', '2', '2018-03-12 02:16:43', '2018-03-12 02:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(8) NOT NULL,
  `num_grupo` int(3) DEFAULT NULL,
  `nom_grupo` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `num_grupo`, `nom_grupo`, `created_at`, `updated_at`) VALUES
(1, 465, 'Cerezo', '2018-03-12 03:41:32', '2018-03-12 03:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(8) NOT NULL,
  `id_grupo` int(8) DEFAULT NULL,
  `id_persona` int(8) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(8) NOT NULL,
  `pregunta` text,
  `id_categoria` int(8) DEFAULT NULL,
  `tipo_respuesta` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultados`
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

-- --------------------------------------------------------

--
-- Table structure for table `talleres`
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
-- Dumping data for table `talleres`
--

INSERT INTO `talleres` (`id_taller`, `nombre_taller`, `descripcion`, `instructor`, `created_at`, `updated_at`) VALUES
(1, 'Educacion Sexual', 'La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.', 'Daniel Apodaca', '2018-03-12 03:00:54', '2018-03-12 03:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `privilegios`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lorenzo', 'Lorenzomagic21@gmail.com', '$2y$10$Ezr6h4rqJxEPft6OobPQkOtd7cv54ApIoiFvXvdLjpm52py2wEf..', 'administrador', NULL, '2018-03-01 10:16:06', '2018-03-01 10:16:06'),
(2, 'Daniel', 'dapodacafilms@gmail.com', '$2y$10$IUvLB3aXjKXshP7k8gf2yeuvV2znttShkkUxJiGcU7GCmGuHMRJUi', 'administrador', NULL, '2018-03-06 08:31:06', '2018-03-06 08:31:06'),
(3, 'Carlos', 'carlos@gmial.com', '$2y$10$hSKRCUIeYjzbquMT4FJMBuIUXNjsn2zNCuBdI3QcZ0013DQU3A/5e', 'administrador', NULL, '2018-03-07 06:37:23', '2018-03-07 06:37:23'),
(4, 'Joel', 'jou@gmail.com', '$2y$10$/hF6nISKhURDaYbZtUcXdO0irVE/EUzaON6DkHnMGmdqdDG8CJY/W', 'administrador', 'fMf7RskI2lWVqDx2VGjrQnm8bxvjR3QZr35P9BPZztAnpFq1HAbESCpTAdyv', '2018-03-08 10:40:55', '2018-03-08 10:40:55'),
(5, 'Ivan', 'ivan@gmail.com', '$2y$10$KohxLeOY717IeEmXKcdmWeE453tZTj79T45hGXoqFp1hYEOzJCzX.', 'admin', NULL, '2018-03-08 10:49:40', '2018-03-08 10:49:40'),
(6, 'Luis', 'luis@gmail.com', '$2y$10$8jf.SGIUwLrdYntFoP/ZQutaEbQuvjWhfOlDXaVfd8uePU4diDkde', '0', NULL, '2018-03-10 14:27:53', '2018-03-10 14:27:53'),
(7, 'Raul', 'raul@gmail.com', '$2y$10$bUyN.plKUXd09ROu/p9UquQXmcfMuZkzwCH1gue0HY/NjvifDpe4W', '0', NULL, '2018-03-10 14:33:50', '2018-03-10 14:33:50'),
(8, 'Ramiro', 'r@gmail.com', '$2y$10$MJOckWeFomdXhZ8qpUm4e.VnSWUv4aOFUr9Y0Qeawk907YJly183G', '0', NULL, '2018-03-10 14:36:39', '2018-03-10 14:36:39'),
(9, 'Enrique', 'e@gmail.com', '$2y$10$cg2cc6wUTfpafCPTe0M6UOIOjCijfYRUSLHYBJMy1hzPxLtL64B4u', '0', NULL, '2018-03-10 14:40:40', '2018-03-10 14:40:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_inscripcion` (`id_inscripcion`);

--
-- Indexes for table `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id_persona` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id_inscripcion` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id_taller` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `datos` (`id_persona`) ON UPDATE CASCADE;

--
-- Constraints for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON UPDATE CASCADE;

--
-- Constraints for table `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `datos` (`id_persona`) ON UPDATE CASCADE,
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `resultados_ibfk_3` FOREIGN KEY (`id_inscripcion`) REFERENCES `inscripciones` (`id_inscripcion`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
