-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2020 a las 07:33:17
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymfit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_way` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `door` int(11) NOT NULL,
  `floo` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`id`, `type_way`, `name`, `location`, `number`, `postal_code`, `door`, `floo`, `type`, `country`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Calle', 'Calvo Acacio', 'Valencia', 21, 46017, 6, 2, 'delivery_adress', 'Valencia', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `number_card` int(11) NOT NULL,
  `card_owner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` int(11) NOT NULL,
  `date_caducity` date NOT NULL,
  `idUsuario` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCategoria` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `idCategoria`, `created_at`, `updated_at`) VALUES
(1, 'Ropa', NULL, NULL, NULL),
(2, 'Materiales', NULL, NULL, NULL),
(3, 'Accesorios', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `ruta`, `idProducto`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 1, NULL, NULL),
(2, '2.jpg', 1, NULL, NULL),
(3, '3.jpg', 1, NULL, NULL),
(4, '4.jpg', 6, NULL, NULL),
(5, '5.jpg', 6, NULL, NULL),
(6, '6.jpg', 6, NULL, NULL),
(7, '7.jpg', 7, NULL, NULL),
(8, '8.jpg', 7, NULL, NULL),
(9, '9.jpg', 7, NULL, NULL),
(10, '10.jpg', 8, NULL, NULL),
(11, '11.jpg', 8, NULL, NULL),
(12, '11.jpg', 8, NULL, NULL),
(13, '13.jpg', 8, NULL, NULL),
(14, '14.jpg', 9, NULL, NULL),
(15, '15.jpg', 9, NULL, NULL),
(16, '16.jpg', 9, NULL, NULL),
(17, '17.jpg', 10, NULL, NULL),
(18, '18.jpg', 10, NULL, NULL),
(19, '19.jpg', 10, NULL, NULL),
(20, '20.jpg', 11, NULL, NULL),
(21, '21.jpg', 11, NULL, NULL),
(22, '22.jpg', 11, NULL, NULL),
(23, '23.jpg', 12, NULL, NULL),
(24, '24.jpg', 12, NULL, NULL),
(25, '25.jpg', 12, NULL, NULL),
(26, '26.jpg', 13, NULL, NULL),
(27, '27.jpg', 13, NULL, NULL),
(28, '28.jpg', 13, NULL, NULL),
(29, '29.jpg', 14, NULL, NULL),
(30, '30.jpg', 14, NULL, NULL),
(31, '31.jpg', 14, NULL, NULL),
(33, '32.jpg', 17, NULL, NULL),
(34, '33.jpg', 17, NULL, NULL),
(35, '34.jpg', 17, NULL, NULL),
(36, '35.jpg', 18, NULL, NULL),
(37, '36.jpg', 18, NULL, NULL),
(38, '37.jpg', 18, NULL, NULL),
(39, '38.jpg', 19, NULL, NULL),
(40, '39.jpg', 19, NULL, NULL),
(41, '40.jpg', 19, NULL, NULL),
(42, '41.jpg', 20, NULL, NULL),
(43, '42.jpg', 20, NULL, NULL),
(44, '43.jpg', 20, NULL, NULL),
(45, '44.jpg', 21, NULL, NULL),
(46, '45.jpg', 21, NULL, NULL),
(47, '46.jpg', 21, NULL, NULL),
(48, '48.PNG', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `line_order`
--

CREATE TABLE `line_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `idPedido` bigint(20) UNSIGNED NOT NULL,
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_13_223833_create_address_table', 1),
(5, '2020_02_13_224632_create_cards_table', 1),
(6, '2020_02_13_225002_create_orders_table', 1),
(7, '2020_02_13_225155_create_products_table', 1),
(8, '2020_02_13_225654_create_line_order_table', 1),
(9, '2020_02_13_225830_create_stocks_table', 1),
(10, '2020_02_13_234348_add_foreing_key_to_line_order_table', 1),
(11, '2020_02_13_234930_add_foreing_key_to_stocks_table', 1),
(12, '2020_02_14_000901_add_foreing_cards_table', 1),
(13, '2020_02_14_003338_add_foreign_orders_table', 1),
(14, '2020_02_14_170855_add_foreing_to_address_table', 1),
(15, '2020_02_16_015529_create_images_table', 1),
(16, '2020_02_16_015733_add_foreign_to_images', 1),
(17, '2020_02_18_195231_create_categories_table', 1),
(18, '2020_02_18_195415_add_foreign_key_to_categories_table', 1),
(19, '2020_02_20_003156_add_foreing_to_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_methos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `full_price` double(8,2) NOT NULL,
  `idUsuario` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `payment_methos`, `order_date`, `full_price`, `idUsuario`, `created_at`, `updated_at`) VALUES
(1, 'Visa', '2020-02-11', 189.90, 2, NULL, NULL),
(2, 'Paypal', '2020-02-11', 900.90, 3, NULL, NULL),
(3, 'Visa', '2020-02-13', 120.99, 2, NULL, NULL),
(4, 'Visa', '2020-02-13', 130.99, 2, NULL, NULL),
(5, 'Paypal', '2020-02-15', 10.99, 3, NULL, NULL),
(6, 'Tarjeta', '2020-02-25', 10.99, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `iva` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `idCategoria` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `description`, `price`, `iva`, `discount`, `weight`, `idCategoria`, `created_at`, `updated_at`) VALUES
(1, 'Malla larga Pro gris negro', 'Adidas', 'La malla larga Nike Pro tiene un ajuste firme y ofrece comodidad ventilada con el tejido Nike Dry. L', 35.00, 21.00, 0.00, 0.00, 1, NULL, NULL),
(6, 'Camiseta adidas AlphaSkin Sport manga corta negro', 'Adidas', 'La camiseta adidas AlphaSkin Sport manga corta se adapta al cuerpo y te ofrece mayor sujeción muscul', 24.00, 21.00, 0.00, 0.00, 1, NULL, NULL),
(7, 'Sudadera Nike Dry Hoodie FZ Fleece gris negro', 'Nike', 'La sudadera Nike Dry Hoodie FZ Fleece tiene un ajuste personalizable y un diseño moderno. Capa ideal', 42.65, 21.00, 0.00, 0.00, 1, NULL, NULL),
(8, 'Chándal adidas Cotton Relax azul marino blanco', 'Adidas', 'El chándal adidas Cotton Relax combina a la perfección con tu ropa deportiva. La chaqueta presenta u', 56.70, 21.00, 0.00, 0.00, 1, NULL, NULL),
(9, 'Sudadera Puma Nu-Tility Hoody gris amarillo', 'Puma', 'La sudadera Puma Nu-Tility Hoody cuenta con capucha y bolsillos adicionales para guardar lo que quie', 52.30, 21.00, 0.00, 0.00, 1, NULL, NULL),
(10, 'Camiseta Under Armour Sportsyle Left Chest manga corta blanco', 'Under Armour', 'La camiseta Under Armour Sportsyle Left Chest de manga corta es amplia, ligera y te mantiene siempre', 23.25, 21.00, 0.00, 0.00, 1, NULL, NULL),
(11, 'Sujetador Salomon Comet negro', 'Salomon Comet', 'El sujetador Salomon Comet es ligero, transpirable y cuenta con un respaldo elegante para que se pue', 35.05, 21.00, 0.00, 0.00, 1, NULL, NULL),
(12, 'Pantalón corto New Balance Essentials Stacked Logo negro', 'New Balance', 'El pantalón corto New Balance Essentials Stacked Logo son ideales para los días de relax o las tarde', 28.00, 21.00, 0.00, 0.00, 1, NULL, NULL),
(13, 'Pantalón largo Puma Nu-Tility negro', 'Puma', 'El pantalón largo Puma Nu-Tility es una prenda deportiva con un corte cómodo pero favorecedor y un t', 44.25, 21.00, 0.00, 0.00, 1, NULL, NULL),
(14, 'Camiseta adidas FreeLift Sport Ultimate Heather manga corta azul marino', 'Adidas', 'La camiseta adidas FreeLift Sport Ultimate Heather de manga corta presenta un diseño anatómico que a', 23.70, 21.00, 0.00, 0.00, 1, NULL, NULL),
(17, 'Bodytone DS-05 Ciclo Indoor', 'Bodytone', 'Inspirada en el movimiento del ciclismo de carretera y del triatlón, la DS-05 es una bicicleta indoo', 199.00, 21.00, 0.00, 14.00, 2, NULL, NULL),
(18, 'Titanium Strength Smith Machine 680T Total', 'Titanium Strenght', 'La Total Smith es la más completa del mercado, ofreciendo la posibilidad de combinar una barra guiad', 1295.00, 21.00, 0.00, 365.00, 2, NULL, NULL),
(19, 'MANCUERNA DE GOMA HEX 27.5 KG', 'HEX', 'Mancuernas con empuñadura cromada ergonómica y ligeramente contorneada para facilitar el agarre.\r\nEl', 159.90, 21.00, 0.00, 27.50, 2, NULL, NULL),
(20, 'Mancuernas Ajustables MX55', 'MX', 'Espacio Reducido\r\n\r\nUna de las opciones más eficientes y flexibles de entrenamiento de fuerza para o', 595.00, 21.00, 0.00, 25.00, 2, NULL, NULL),
(21, 'Mancuernas de Goma Anytime Fitness AF-1000-02', 'Anytime Fitness', 'Las Mancuernas de Goma Anytime Fitness AF-1000-02 son de calidad superior fabricadas en una sola pie', 24.20, 21.00, 0.00, 20.00, 2, NULL, NULL),
(22, 'Kit Columna de Entrenamiento FunZip Doble', 'FunZip', 'El Kit Columna de Entrenamiento FunZip está formado por dos guías de aluminio de 2m de longitud que ', 239.99, 21.00, 0.00, 0.00, 2, NULL, NULL),
(23, 'CINTA DE CORRER RS-10', 'SALTER', 'Entrena como un profesional sin salir de casa. La línea RS  ofrece grandes prestaciones que te harán', 2408.00, 21.00, 0.00, 0.00, 2, NULL, NULL),
(24, 'Hastings Rueda Abdominal Pro', 'Hastings', 'El Hastings Ab Wheel Pro entrena tus abdominales, espalda, caderas y glúteos para un \"entrenamiento ', 32.95, 21.00, 0.00, 0.00, 2, NULL, NULL),
(25, 'Prueba Imagen', 'ASAS', 'asasasasa', 12.00, 21.00, 55.00, 12.00, 1, NULL, NULL),
(26, 'aa', 'as', 'asasasasa', 12.00, 21.00, 0.00, 12.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `stocks`
--

INSERT INTO `stocks` (`id`, `quantity`, `colour`, `size`, `idProducto`, `created_at`, `updated_at`) VALUES
(1, 0, 'Negro', 'M', 1, NULL, NULL),
(2, 90, 'Negro', 'S', 1, NULL, NULL),
(3, 90, 'Negro', 'XS', 1, NULL, NULL),
(4, 90, 'Negro', 'L', 1, NULL, NULL),
(5, 90, 'Negro', 'XL', 1, NULL, NULL),
(6, 90, 'Negro', 'XL', 6, NULL, NULL),
(7, 90, 'Negro', 'L', 6, NULL, NULL),
(8, 90, 'Negro', 'S', 6, NULL, NULL),
(9, 90, 'Negro', 'M', 6, NULL, NULL),
(10, 90, 'Negro', 'XS', 6, NULL, NULL),
(11, 90, 'Gris-Negro', 'XS', 7, NULL, NULL),
(12, 90, 'Gris-Negro', 'S', 7, NULL, NULL),
(13, 90, 'Gris-Negro', 'M', 7, NULL, NULL),
(14, 90, 'Gris-Negro', 'L', 7, NULL, NULL),
(15, 90, 'Gris-Negro', 'XL', 7, NULL, NULL),
(16, 90, 'Azul Marino', 'XL', 8, NULL, NULL),
(17, 90, 'Azul Marino', 'L', 8, NULL, NULL),
(18, 90, 'Azul Marino', 'S', 8, NULL, NULL),
(19, 90, 'Amarillo', 'L', 8, NULL, NULL),
(20, 90, 'Amarillo', 'XL', 8, NULL, NULL),
(21, 90, 'Amarillo', 'M', 8, NULL, NULL),
(22, 12, 'Negro', 'XS', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firts_surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email_verified_at`, `password`, `nif`, `remember_token`, `created_at`, `updated_at`, `name`, `email`, `firts_surname`, `second_surname`, `date_birth`, `role`) VALUES
(2, NULL, '$2y$10$5SKyCadQ5qsMBxKpoGdmxud8rrNdNVAEwyXex3PamoY8IXPUNdxqG', '123456789X', NULL, '2020-02-21 05:23:22', '2020-02-21 05:23:22', 'pau', 'pau21@gmail.com', 'Llorens', 'Martinez', '1999-01-12', 'admin'),
(3, NULL, '$2y$10$J7faaFTWesnDPQOf582KF.XHM9vBe36XDtfO8jQxkUWbr/XuhBii6', '123456789A', NULL, '2020-02-21 05:24:23', '2020-02-21 05:24:23', 'Alex', 'alex13@gmail.com', 'Salcedo', 'Santamaria', '1996-02-13', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`number_card`),
  ADD KEY `cards_idusuario_foreign` (`idUsuario`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_idcategoria_foreign` (`idCategoria`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_idproducto_foreign` (`idProducto`);

--
-- Indices de la tabla `line_order`
--
ALTER TABLE `line_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `line_order_idpedido_foreign` (`idPedido`),
  ADD KEY `line_order_idproducto_foreign` (`idProducto`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_idusuario_foreign` (`idUsuario`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_idcategoria_foreign` (`idCategoria`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_idproducto_foreign` (`idProducto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `line_order`
--
ALTER TABLE `line_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_idcategoria_foreign` FOREIGN KEY (`idCategoria`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `line_order`
--
ALTER TABLE `line_order`
  ADD CONSTRAINT `line_order_idpedido_foreign` FOREIGN KEY (`idPedido`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `line_order_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_idcategoria_foreign` FOREIGN KEY (`idCategoria`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
