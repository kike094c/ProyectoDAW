-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-05-2019 a las 19:57:34
-- Versión del servidor: 5.7.25-0ubuntu0.18.04.2
-- Versión de PHP: 7.3.4-1+ubuntu18.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causantes`
--

CREATE TABLE `causantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('hdw','sfw','usr') COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('e','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `causantes`
--

INSERT INTO `causantes` (`id`, `nombre`, `tipo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ATB', 'hdw', 'e', '2019-05-14 21:21:01', '2019-05-14 21:21:01'),
(2, 'ATB', 'usr', 'e', '2019-05-14 21:21:09', '2019-05-14 21:21:09'),
(3, 'EMU', 'sfw', 'e', '2019-05-14 21:21:28', '2019-05-14 21:21:28'),
(4, 'BTP', 'hdw', 'e', '2019-05-14 21:23:42', '2019-05-14 21:23:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companias`
--

CREATE TABLE `companias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `handling_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('e','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companias`
--

INSERT INTO `companias` (`id`, `handling_id`, `nombre`, `iata`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, 'IBERIA', 'IBE', 'e', '2019-05-14 21:20:27', '2019-05-14 21:20:27'),
(2, 1, 'TUI FLY', 'TUI', 'e', '2019-05-14 21:20:43', '2019-05-14 21:20:43'),
(3, 3, 'GERMANIA', 'GMI', 'e', '2019-05-14 21:20:55', '2019-05-14 21:20:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `handlings`
--

CREATE TABLE `handlings` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('e','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `handlings`
--

INSERT INTO `handlings` (`id`, `nombre`, `iata`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Groundforce', 'GK3', 'e', '2019-05-14 21:19:49', '2019-05-15 16:48:13'),
(2, 'AviaPartner', 'GL6', 'e', '2019-05-14 21:19:58', '2019-05-14 21:19:58'),
(3, 'AGA', 'HB4', 'e', '2019-05-14 21:20:10', '2019-05-14 21:20:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` int(10) UNSIGNED NOT NULL,
  `causante_id` int(10) UNSIGNED NOT NULL,
  `handling_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `fechaHoraInicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaHoraFin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compania` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoIncidencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `causante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoCausante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nTarjeta` int(11) NOT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `causante_id`, `handling_id`, `usuario_id`, `fechaHoraInicio`, `fechaHoraFin`, `ubicacion`, `compania`, `handling`, `tipoIncidencia`, `causante`, `tipoCausante`, `nTarjeta`, `observaciones`, `solucion`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '2019-05-14T10:00', '2019-05-14T10:08', 'M05', 'IBERIA', 'AviaPartner', 'hdw', 'ATB', 'ATB-ATAS', 45162, 'ATB atasco.', 'retiro atasco y ok.', '2019-05-14 21:24:59', '2019-05-14 21:24:59'),
(2, 4, 1, 1, '2019-05-14T10:08', '2019-05-14T10:08', 'M20', 'TUI FLY', 'Groundforce', 'hdw', 'BTP', 'BTP-BLQ', 45162, 'BTP no imprime', 'Reinicio btp y ok.', '2019-05-14 21:40:52', '2019-05-14 21:40:52'),
(3, 1, 2, 1, '2019-05-14T11:00', '2019-05-14T11:08', 'M05', 'IBERIA', 'AviaPartner', 'hdw', 'ATB', 'ATB-BLQ', 45162, 'ATB no imprime.', 'Reinicio ATB y ok.', '2019-05-14 21:48:14', '2019-05-14 21:48:14'),
(4, 4, 3, 1, '2019-05-14T09:00', '2019-05-14T09:10', 'M13', 'GERMANIA', 'AGA', 'hdw', 'BTP', 'BTP-BLQ', 45162, 'ndneonfi', 'jdsooi', '2019-05-14 21:50:55', '2019-05-14 21:50:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(227, '2014_10_12_000000_create_users_table', 1),
(228, '2014_10_12_100000_create_password_resets_table', 1),
(229, '2019_04_25_215049_create_handlings_table', 1),
(230, '2019_04_25_215230_create_companias_table', 1),
(231, '2019_04_25_215343_create_tiposCausantes_table', 1),
(232, '2019_04_25_215459_create_causantes_table', 1),
(233, '2019_04_25_215553_create_incidencias_table', 1),
(234, '2019_05_02_213714_create_tipos_y_causantes_table', 1),
(235, '2019_05_08_213207_create_roles_table', 1),
(236, '2019_05_08_213448_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-05-08 22:03:58', '2019-05-08 22:03:58'),
(2, 'user', 'User', '2019-05-08 22:03:58', '2019-05-08 22:03:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-05-08 22:03:58', '2019-05-08 22:03:58'),
(2, 1, 2, '2019-05-08 22:03:58', '2019-05-08 22:03:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposCausantes`
--

CREATE TABLE `tiposCausantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('e','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiposCausantes`
--

INSERT INTO `tiposCausantes` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ATB-BLQ', 'e', '2019-05-14 21:21:40', '2019-05-14 21:21:40'),
(2, 'ATB-ATAS', 'e', '2019-05-14 21:21:53', '2019-05-14 21:21:53'),
(3, 'ATB-USER', 'e', '2019-05-14 21:22:04', '2019-05-14 21:22:04'),
(4, 'EMU-BLQ', 'e', '2019-05-14 21:22:11', '2019-05-14 21:22:11'),
(5, 'BTP-BLQ', 'e', '2019-05-14 21:23:54', '2019-05-14 21:23:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposyCausantes`
--

CREATE TABLE `tiposyCausantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipoCausante_id` int(10) UNSIGNED NOT NULL,
  `causante_id` int(10) UNSIGNED NOT NULL,
  `nombreTipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreCausante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiposyCausantes`
--

INSERT INTO `tiposyCausantes` (`id`, `tipoCausante_id`, `causante_id`, `nombreTipo`, `nombreCausante`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ATB-BLQ', 'ATB', '2019-05-14 21:22:20', '2019-05-14 21:22:20'),
(2, 2, 1, 'ATB-ATAS', 'ATB', '2019-05-14 21:22:25', '2019-05-14 21:22:25'),
(3, 3, 2, 'ATB-USER', 'ATB', '2019-05-14 21:22:32', '2019-05-14 21:22:32'),
(4, 4, 3, 'EMU-BLQ', 'EMU', '2019-05-14 21:22:37', '2019-05-14 21:22:37'),
(5, 5, 4, 'BTP-BLQ', 'BTP', '2019-05-14 21:24:06', '2019-05-14 21:24:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('e','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@example.com', NULL, '$2y$10$WLWNPEPtCy9JxbEqihfK5eR4hbG3wbe/jX.tHRe36xYAkNJY4quOq', 'e', NULL, '2019-05-08 22:03:58', '2019-05-08 22:03:58'),
(2, 'admin', 'admin@example.com', NULL, '$2y$10$yeTz98e1m6k3GWIArdFvBuzPFt5PhK3Q7ZdJMUE2teNyHeFdRqB2i', 'e', NULL, '2019-05-08 22:03:58', '2019-05-08 22:03:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `causantes`
--
ALTER TABLE `causantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companias`
--
ALTER TABLE `companias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companias_handling_id_foreign` (`handling_id`);

--
-- Indices de la tabla `handlings`
--
ALTER TABLE `handlings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incidencias_causante_id_foreign` (`causante_id`),
  ADD KEY `incidencias_handling_id_foreign` (`handling_id`),
  ADD KEY `incidencias_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposCausantes`
--
ALTER TABLE `tiposCausantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposyCausantes`
--
ALTER TABLE `tiposyCausantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiposycausantes_tipocausante_id_foreign` (`tipoCausante_id`),
  ADD KEY `tiposycausantes_causante_id_foreign` (`causante_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `causantes`
--
ALTER TABLE `causantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `companias`
--
ALTER TABLE `companias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `handlings`
--
ALTER TABLE `handlings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tiposCausantes`
--
ALTER TABLE `tiposCausantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tiposyCausantes`
--
ALTER TABLE `tiposyCausantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `companias`
--
ALTER TABLE `companias`
  ADD CONSTRAINT `companias_handling_id_foreign` FOREIGN KEY (`handling_id`) REFERENCES `handlings` (`id`);

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_causante_id_foreign` FOREIGN KEY (`causante_id`) REFERENCES `causantes` (`id`),
  ADD CONSTRAINT `incidencias_handling_id_foreign` FOREIGN KEY (`handling_id`) REFERENCES `handlings` (`id`),
  ADD CONSTRAINT `incidencias_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tiposyCausantes`
--
ALTER TABLE `tiposyCausantes`
  ADD CONSTRAINT `tiposycausantes_causante_id_foreign` FOREIGN KEY (`causante_id`) REFERENCES `causantes` (`id`),
  ADD CONSTRAINT `tiposycausantes_tipocausante_id_foreign` FOREIGN KEY (`tipoCausante_id`) REFERENCES `tiposCausantes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
