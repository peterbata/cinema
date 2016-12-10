-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 22:31:24
-- Versión del servidor: 5.6.28-log
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'ASDASD', '2016-11-24 02:45:23', '2016-11-24 02:45:23'),
(2, 'ASDASD', '2016-11-24 02:49:44', '2016-11-24 02:49:44'),
(3, 'ASDASD', '2016-11-24 02:50:01', '2016-11-24 02:50:01'),
(4, 'ASDASD', '2016-11-24 02:51:06', '2016-11-24 02:51:06'),
(5, 'HOLA', '2016-11-24 02:52:30', '2016-11-24 02:52:30'),
(6, 'DRAMA', '2016-11-24 02:53:23', '2016-11-24 02:53:23'),
(7, 'TERROR ', '2016-11-24 03:01:30', '2016-11-24 03:01:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_11_112812_create_genres_table', 1),
('2016_10_11_112838_create_movies_table', 1),
('2016_10_31_004125_add_deleted_to_users_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'Brayan Murphy Crespo Espinoza', 'brayanMurphy@hotmail.com', '$2y$10$EPryb4AvuFgOEE.b.RTl1.DqLb3QOWZ.0szqYbkODOrf5YoJjt4pu', 'SQrZVu0k0pUwTO7j8iAURGfb2DzaoGoVjO89pI0gVuyjFPeS1xXpof4uDVyd', '2016-10-16 16:50:30', '2016-11-24 21:04:14', NULL),
(16, 'naruto', 'naruto@hotmail.com', '$2y$10$1tXJ7ueAOQaXc62Gy9p1HeBhWh0oVgGx3lCkpGEa7FY7eHqlC.N2W', 'qZ54w9Zm4rivPKRgEqYm2kZWivhqQ3SGVJLJ0h46msN94ar7u5XehWcvEI9d', '2016-10-16 23:13:37', '2016-11-24 00:08:58', NULL),
(18, 'naruto Rasengan', 'nartuoasd@hotmail.com', '$2y$10$KaABZxqEiEu/Dc8s4GaA8.1y2E0dWB4QuDzCviCr/ZYkccAIejjz6', NULL, '2016-10-16 23:14:20', '2016-11-04 01:13:56', NULL),
(19, 'naruto2', 'nartuoaas2sd@hotmail.com', '$2y$10$wG3Uf./r5wbPpyGQKATAp.w9mJZthkOrW7qdsMz5syiKlzevWqjKC', NULL, '2016-10-16 23:15:08', '2016-11-03 23:26:06', NULL),
(22, 'asdaSDASDASD', 'brayanASDFSDF@hotmail.com', '$2y$10$wJ9A95WnKyzJL2X8S5FkGOtOgsjpitDrKwzcx6aNlw6xIrMr2/NB6', NULL, '2016-10-31 01:56:55', '2016-10-31 05:46:05', '2016-10-31 05:46:05'),
(23, 'Juan peta', 'peta@hotmail.com', '$2y$10$4jLMhZ.ZlIYcZ3lUOk02subKjoKjCoiS/lrHaySHeVtqQXQAKZxvu', NULL, '2016-11-01 04:44:39', '2016-11-01 04:44:39', NULL),
(24, 'thalia tatiana', 'thaliatatiana@hotmail.com', '$2y$10$PT24aRJCbCDWNPPjUSZZ0.lir3jElHHBhoflgut/AVe2KubN3VS7y', NULL, '2016-11-01 04:46:17', '2016-11-01 04:46:17', NULL),
(25, 'nueva prueba2', 'prueba@hotmail.com', '$2y$10$Ho6yox3GLfBQ1/FwFq/ENujBOfir6NMCO.LpHfkwi.le7lNMEeqgO', NULL, '2016-11-01 06:11:21', '2016-11-01 06:11:29', NULL),
(26, 'BrayanMur', 'BrayanMurphyC@hotmail.com', '$2y$10$CIDAzdDy3EvxLPKVvrx7AuyIH9IO25G1jhArT2TvIP9O1m..EQWt2', 'JYkQGLuuxy6kPtZeg47G8RsIK1TcLmDpCIcqhimZNy5oi0kxR3y3nA1cDo0K', '2016-11-01 15:03:20', '2016-11-02 02:24:41', NULL),
(27, 'LOCA ', 'Loca@hotmail.com', '$2y$10$G71bjE2ZMrktRBVwZ2RdNO.Y0HR/uytvN4mCV.tuMWb9ubLX4cZ2u', NULL, '2016-11-04 20:15:48', '2016-11-04 20:15:48', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
