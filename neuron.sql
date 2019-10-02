-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 16 2019 г., 13:36
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `neuron`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('120fc1c5e9bf4f2cab0e7bf6d8758510cbe7ab23222be7c13e9e03cd7be24950e0df4bf1ebefa712', 1, 1, 'Personal Access Token', '[]', 0, '2019-08-14 06:38:12', '2019-08-14 06:38:12', '2019-08-21 11:38:12'),
('55c070684dd3ab979d063d6fb4ff6f3b8d2dcbce5bfe3f324c8cbf8402c41f037b7cca2afbcbf25f', 1, 1, 'Personal Access Token', '[]', 1, '2019-08-14 06:38:53', '2019-08-14 06:38:53', '2019-08-21 11:38:53'),
('666a6a8258d61b8f5e2fbaaed96778b5cae89db8c1c38e74f4d21c6b4abcd94d256c375ac31a16c7', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:25:29', '2019-08-14 23:25:29', '2019-08-22 04:25:29'),
('7308ee15679ce95e6f3b317ba81d3dd377fdfe30ef96309fe23241089e06b7c64267e713a420ee69', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:23:27', '2019-08-14 23:23:27', '2019-08-22 04:23:27'),
('75021d414c97f7247b87b49ecbb0cc754733826e073ea53d82fa18f84729bea9b6ff808ef0c67927', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:53:20', '2019-08-14 23:53:20', '2019-08-22 04:53:20'),
('90e10c53c1cb71f98ecc43749c627e3177505f436ad4ea222eaaf6954c571bb0678344b6347537cd', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:24:57', '2019-08-14 23:24:57', '2019-08-22 04:24:57'),
('a666befce290babd1135deaf2349519707e7a730542372f6333d5d87b2383f50bfe3c19201f2393f', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:25:16', '2019-08-14 23:25:16', '2019-08-22 04:25:16'),
('c3e7b497cbe884d730d777e07826d71e0a5b83e0a9d94127c5ef4fe99eeddd88ceea292de3fe0e70', 1, 1, 'Personal Access Token', '[]', 0, '2019-08-14 06:35:57', '2019-08-14 06:35:57', '2019-08-21 11:35:58'),
('c3fee70d5f3fe25577a69f073727c1a039668bfc3566ca4a3fa2f5edf9458f8f2a51e64c31fb0d78', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-15 00:05:53', '2019-08-15 00:05:53', '2019-08-22 05:05:53'),
('df032330d30c52545e0d4f63a68804eec9323464e2147b17f7a4c7f6cc1e3bc1e1196ca507f30d27', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:23:54', '2019-08-14 23:23:54', '2019-08-22 04:23:54'),
('eb5bf160555de95f36b9a70184f82de420e83769a2518b762d6dcdc5226a60825ea2ce2abfc3f5f0', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-16 00:07:05', '2019-08-16 00:07:05', '2019-08-23 05:07:06'),
('fd4826151cb313ba33b48ae6f757642e910590a00463d6e858fae7fbc65edb24ecb95abea4be31c6', 2, 1, 'Personal Access Token', '[]', 0, '2019-08-14 23:53:36', '2019-08-14 23:53:36', '2019-08-22 04:53:36');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '8Idn3ZQrceQdH9wExkFts1LmKUsVITFmuVsmAUTp', 'http://localhost', 1, 0, 0, '2019-08-14 05:30:34', '2019-08-14 05:30:34'),
(2, NULL, 'Laravel Password Grant Client', '8npWYK5EZlWHHSa0DBHCJTxHWC5KU3PmTe6clwqI', 'http://localhost', 0, 1, 0, '2019-08-14 05:30:34', '2019-08-14 05:30:34');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-08-14 05:30:34', '2019-08-14 05:30:34');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_type` smallint(4) NOT NULL,
  `operation_type` smallint(4) NOT NULL,
  `used_number` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `operation_number` smallint(4) NOT NULL,
  `question_speed` float NOT NULL,
  `min_number` smallint(4) NOT NULL,
  `max_number` smallint(4) NOT NULL,
  `user_answer` float NOT NULL,
  `true_answer` float NOT NULL,
  `true_question` smallint(4) NOT NULL,
  `game_time` int(11) NOT NULL,
  `participated_numbers` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ball` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tuman`
--

CREATE TABLE `tuman` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(128) NOT NULL,
  `viloyat_id` smallint(6) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `name_ru` varchar(128) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tuman`
--

INSERT INTO `tuman` (`id`, `name_uz`, `viloyat_id`, `status`, `name_ru`, `created_at`, `updated_at`) VALUES
(1, 'Amudaryo tumani', 1, 1, 'Amudaryo tumani', 0, 0),
(2, 'Beruniy tumani', 1, 1, 'Beruniy tumani', 0, 0),
(3, 'Kegayli tumani', 1, 1, 'Kegayli tumani', 0, 0),
(4, 'Qonliko\'l tumani', 1, 1, 'Qonliko\'l tumani', 0, 0),
(5, 'Qorao\'zak tumani', 1, 1, 'Qorao\'zak tumani', 0, 0),
(6, 'Qo\'ng\'irot tumani', 1, 1, 'Qo\'ng\'irot tumani', 0, 0),
(7, 'Mo\'ynoq tumani', 1, 1, 'Mo\'ynoq tumani', 0, 0),
(8, 'Nukus tumani', 1, 1, 'Nukus tumani', 0, 0),
(9, 'Nukus shahar', 1, 1, 'Nukus shahar', 0, 0),
(10, 'Taxtako\'pir tumani', 1, 1, 'Taxtako\'pir tumani', 0, 0),
(11, 'To\'rtko\'l tumani', 1, 1, 'To\'rtko\'l tumani', 0, 0),
(12, 'Xo\'jayli tumani', 1, 1, 'Xo\'jayli tumani', 0, 0),
(13, 'Chimboy tumani', 1, 1, 'Chimboy tumani', 0, 0),
(14, 'Shumanay tumani', 1, 1, 'Shumanay tumani', 0, 0),
(15, 'Ellikqal\'a tumani', 1, 1, 'Ellikqal\'a tumani', 0, 0),
(16, 'Andijon shahri', 2, 1, 'Andijon shahri', 0, 0),
(17, 'Andijon tumani', 2, 1, 'Andijon tumani', 0, 0),
(18, 'Asaka tumani', 2, 1, 'Asaka tumani', 0, 0),
(19, 'Baliqchi tumani', 2, 1, 'Baliqchi tumani', 0, 0),
(20, 'Buloqboshi tumani', 2, 1, 'Buloqboshi tumani', 0, 0),
(21, 'Bo\'z tumani', 2, 1, 'Bo\'z tumani', 0, 0),
(22, 'Jalaquduq tumani', 2, 1, 'Jalaquduq tumani', 0, 0),
(23, 'Izboskan tumani', 2, 1, 'Izboskan tumani', 0, 0),
(24, 'Qorasuv shahri', 2, 1, 'Qorasuv shahri', 0, 0),
(25, 'Qo\'rg\'ontepa tumani', 2, 1, 'Qo\'rg\'ontepa tumani', 0, 0),
(26, 'Marhamat tumani', 2, 1, 'Marhamat tumani', 0, 0),
(27, 'Oltinko\'l tumani', 2, 1, 'Oltinko\'l tumani', 0, 0),
(28, 'Paxtaobod tumani', 2, 1, 'Paxtaobod tumani', 0, 0),
(29, 'Ulug\'nor tumani', 2, 1, 'Ulug\'nor tumani', 0, 0),
(30, 'Xonobod shahri', 2, 1, 'Xonobod shahri', 0, 0),
(31, 'Xo\'jaobod tumani', 2, 1, 'Xo\'jaobod tumani', 0, 0),
(32, 'Shaxrixon tumani', 2, 1, 'Shaxrixon tumani', 0, 0),
(33, 'Buxoro shahri', 3, 1, 'Buxoro shahri', 0, 0),
(34, 'Buxoro tumani', 3, 1, 'Buxoro tumani', 0, 0),
(35, 'Vobkent tumani', 3, 1, 'Vobkent tumani', 0, 0),
(36, 'G\'ijduvon tumani', 3, 1, 'G\'ijduvon tumani', 0, 0),
(37, 'Jondor tumani', 3, 1, 'Jondor tumani', 0, 0),
(38, 'Kogon tumani', 3, 1, 'Kogon tumani', 0, 0),
(39, 'Kogon shahri', 3, 1, 'Kogon shahri', 0, 0),
(40, 'Qorako\'l tumani', 3, 1, 'Qorako\'l tumani', 0, 0),
(41, 'Qorovulbozor tumani', 3, 1, 'Qorovulbozor tumani', 0, 0),
(42, 'Olot tumani', 3, 1, 'Olot tumani', 0, 0),
(43, 'Peshku tumani', 3, 1, 'Peshku tumani', 0, 0),
(44, 'Romitan tumani', 3, 1, 'Romitan tumani', 0, 0),
(45, 'Shofirkon tumani', 3, 1, 'Shofirkon tumani', 0, 0),
(46, 'Arnasoy tumani', 4, 1, 'Arnasoy tumani', 0, 0),
(47, 'Baxmal tumani', 4, 1, 'Baxmal tumani', 0, 0),
(48, 'G\'allaorol tumani', 4, 1, 'G\'allaorol tumani', 0, 0),
(49, 'Do\'stlik tumani', 4, 1, 'Do\'stlik tumani', 0, 0),
(50, 'Jizzax tumani', 4, 1, 'Jizzax tumani', 0, 0),
(51, 'Jizzax shahri', 4, 1, 'Jizzax shahri', 0, 0),
(52, 'Zarbdor tumani', 4, 1, 'Zarbdor tumani', 0, 0),
(53, 'Zafarobod tumani', 4, 1, 'Zafarobod tumani', 0, 0),
(54, 'Zomin tumani', 4, 1, 'Zomin tumani', 0, 0),
(55, 'Mirzacho\'l tumani', 4, 1, 'Mirzacho\'l tumani', 0, 0),
(56, 'Paxtakor tumani', 4, 1, 'Paxtakor tumani', 0, 0),
(57, 'Forish tumani', 4, 1, 'Forish tumani', 0, 0),
(58, 'Yangiobod tumani', 4, 1, 'Yangiobod tumani', 0, 0),
(59, 'G\'uzor tumani', 5, 1, 'G\'uzor tumani', 0, 0),
(60, 'Dehqonobod tumani', 5, 1, 'Dehqonobod tumani', 0, 0),
(61, 'Qamashi tumani', 5, 1, 'Qamashi tumani', 0, 0),
(62, 'Qarshi tumani', 5, 1, 'Qarshi tumani', 0, 0),
(63, 'Qarshi shahri', 5, 1, 'Qarshi shahri', 0, 0),
(64, 'Kasbi tumani', 5, 1, 'Kasbi tumani', 0, 0),
(65, 'Kitob tumani', 5, 1, 'Kitob tumani', 0, 0),
(66, 'Koson tumani', 5, 1, 'Koson tumani', 0, 0),
(67, 'Mirishkor tumani', 5, 1, 'Mirishkor tumani', 0, 0),
(68, 'Muborak tumani', 5, 1, 'Muborak tumani', 0, 0),
(69, 'Nishon tumani', 5, 1, 'Nishon tumani', 0, 0),
(70, 'Chiroqchi tumani', 5, 1, 'Chiroqchi tumani', 0, 0),
(71, 'Shahrisabz tumani', 5, 1, 'Shahrisabz tumani', 0, 0),
(72, 'Yakkabog\' tumani', 5, 1, 'Yakkabog\' tumani', 0, 0),
(73, 'Zarafshon shahri', 6, 1, 'Zarafshon shahri', 0, 0),
(74, 'Karmana tumani', 6, 1, 'Karmana tumani', 0, 0),
(75, 'Qiziltepa tumani', 6, 1, 'Qiziltepa tumani', 0, 0),
(76, 'Konimex tumani', 6, 1, 'Konimex tumani', 0, 0),
(77, 'Navbahor tumani', 6, 1, 'Navbahor tumani', 0, 0),
(78, 'Navoiy shahri', 6, 1, 'Navoiy shahri', 0, 0),
(79, 'Nurota tumani', 6, 1, 'Nurota tumani', 0, 0),
(80, 'Tomdi tumani', 6, 1, 'Tomdi tumani', 0, 0),
(81, 'Uchquduq tumani', 6, 1, 'Uchquduq tumani', 0, 0),
(82, 'Xatirchi tumani', 6, 1, 'Xatirchi tumani', 0, 0),
(83, 'Kosonsoy tumani', 7, 1, 'Kosonsoy tumani', 0, 0),
(84, 'Mingbuloq tumani', 7, 1, 'Mingbuloq tumani', 0, 0),
(85, 'Namangan tumani', 7, 1, 'Namangan tumani', 0, 0),
(86, 'Namangan shahri', 7, 1, 'Namangan shahri', 0, 0),
(87, 'Norin tumani', 7, 1, 'Norin tumani', 0, 0),
(88, 'Pop tumani', 7, 1, 'Pop tumani', 0, 0),
(89, 'To\'raqo\'rg\'on tumani', 7, 1, 'To\'raqo\'rg\'on tumani', 0, 0),
(90, 'Uychi tumani', 7, 1, 'Uychi tumani', 0, 0),
(91, 'Uchqo\'rg\'on tumani', 7, 1, 'Uchqo\'rg\'on tumani', 0, 0),
(92, 'Chortoq tumani', 7, 1, 'Chortoq tumani', 0, 0),
(93, 'Chust tumani', 7, 1, 'Chust tumani', 0, 0),
(94, 'Yangiqo\'rg\'on tumani', 7, 1, 'Yangiqo\'rg\'on tumani', 0, 0),
(95, 'Bulung\'ur tumani', 8, 1, 'Bulung\'ur tumani', 0, 0),
(96, 'Jomboy tumani', 8, 1, 'Jomboy tumani', 0, 0),
(97, 'Ishtixon tumani', 8, 1, 'Ishtixon tumani', 0, 0),
(98, 'Kattaqo\'rg\'on tumani', 8, 1, 'Kattaqo\'rg\'on tumani', 0, 0),
(99, 'Kattaqo\'rg\'on shahri', 8, 1, 'Kattaqo\'rg\'on shahri', 0, 0),
(100, 'Qo\'shrobot tumani', 8, 1, 'Qo\'shrobot tumani', 0, 0),
(101, 'Narpay tumani', 8, 1, 'Narpay tumani', 0, 0),
(102, 'Nurobod tumani', 8, 1, 'Nurobod tumani', 0, 0),
(103, 'Oqdaryo tumani', 8, 1, 'Oqdaryo tumani', 0, 0),
(104, 'Payariq tumani', 8, 1, 'Payariq tumani', 0, 0),
(105, 'Pastdarg\'om tumani', 8, 1, 'Pastdarg\'om tumani', 0, 0),
(106, 'Paxtachi tumani', 8, 1, 'Paxtachi tumani', 0, 0),
(107, 'Samarqand tumani', 8, 1, 'Samarqand tumani', 0, 0),
(108, 'Samarqand shahri', 8, 1, 'Samarqand shahri', 0, 0),
(109, 'Tayloq tumani', 8, 1, 'Tayloq tumani', 0, 0),
(110, 'Urgut tumani', 8, 1, 'Urgut tumani', 0, 0),
(111, 'Angor tumani', 9, 1, 'Angor tumani', 0, 0),
(112, 'Boysun tumani', 9, 1, 'Boysun tumani', 0, 0),
(113, 'Denov tumani', 9, 1, 'Denov tumani', 0, 0),
(114, 'Jarqo\'rg\'on tumani', 9, 1, 'Jarqo\'rg\'on tumani', 0, 0),
(115, 'Qiziriq tumani', 9, 1, 'Qiziriq tumani', 0, 0),
(116, 'Qumqo\'rg\'on tumani', 9, 1, 'Qumqo\'rg\'on tumani', 0, 0),
(117, 'Muzrobot tumani', 9, 1, 'Muzrobot tumani', 0, 0),
(118, 'Oltinsoy tumani', 9, 1, 'Oltinsoy tumani', 0, 0),
(119, 'Sariosiyo tumani', 9, 1, 'Sariosiyo tumani', 0, 0),
(120, 'Termiz tumani', 9, 1, 'Termiz tumani', 0, 0),
(121, 'Termiz shahri', 9, 1, 'Termiz shahri', 0, 0),
(122, 'Uzun tumani', 9, 1, 'Uzun tumani', 0, 0),
(123, 'Sherobod tumani', 9, 1, 'Sherobod tumani', 0, 0),
(124, 'Sho\'rchi tumani', 9, 1, 'Sho\'rchi tumani', 0, 0),
(125, 'Boyovut tumani', 10, 1, 'Boyovut tumani', 0, 0),
(126, 'Guliston tumani', 10, 1, 'Guliston tumani', 0, 0),
(127, 'Guliston shahri', 10, 1, 'Guliston shahri', 0, 0),
(128, 'Mirzaobod tumani', 10, 1, 'Mirzaobod tumani', 0, 0),
(129, 'Oqoltin tumani', 10, 1, 'Oqoltin tumani', 0, 0),
(130, 'Sayxunobod tumani', 10, 1, 'Sayxunobod tumani', 0, 0),
(131, 'Sardoba tumani', 10, 1, 'Sardoba tumani', 0, 0),
(132, 'Sirdaryo tumani', 10, 1, 'Sirdaryo tumani', 0, 0),
(133, 'Xovos tumani', 10, 1, 'Xovos tumani', 0, 0),
(134, 'Shirin shahri', 10, 1, 'Shirin shahri', 0, 0),
(135, 'Yangier shahri', 10, 1, 'Yangier shahri', 0, 0),
(136, 'Angren shahri', 11, 1, 'Angren shahri', 0, 0),
(137, 'Bekobod tumani', 11, 1, 'Bekobod tumani', 0, 0),
(138, 'Bekobod shahri', 11, 1, 'Bekobod shahri', 0, 0),
(139, 'Bo\'ka tumani', 11, 1, 'Bo\'ka tumani', 0, 0),
(140, 'Bo\'stonliq tumani', 11, 1, 'Bo\'stonliq tumani', 0, 0),
(141, 'Zangiota tumani', 11, 1, 'Zangiota tumani', 0, 0),
(142, 'Qibray tumani', 11, 1, 'Qibray tumani', 0, 0),
(143, 'Quyichirchiq tumani', 11, 1, 'Quyichirchiq tumani', 0, 0),
(144, 'Oqqo\'rg\'on tumani', 11, 1, 'Oqqo\'rg\'on tumani', 0, 0),
(145, 'Olmaliq shahri', 11, 1, 'Olmaliq shahri', 0, 0),
(146, 'Ohangaron tumani', 11, 1, 'Ohangaron tumani', 0, 0),
(147, 'Parkent tumani', 11, 1, 'Parkent tumani', 0, 0),
(148, 'Piskent tumani', 11, 1, 'Piskent tumani', 0, 0),
(149, 'O\'rtachirchiq tumani', 11, 1, 'O\'rtachirchiq tumani', 0, 0),
(150, 'Chinoz tumani', 11, 1, 'Chinoz tumani', 0, 0),
(151, 'Chirchiq shahri', 11, 1, 'Chirchiq shahri', 0, 0),
(152, 'Yuqorichirchiq tumani', 11, 1, 'Yuqorichirchiq tumani', 0, 0),
(153, 'Yangiyo\'l tumani', 11, 1, 'Yangiyo\'l tumani', 0, 0),
(154, 'Beshariq tumani', 12, 1, 'Beshariq tumani', 0, 0),
(155, 'Bog\'dod tumani', 12, 1, 'Bog\'dod tumani', 0, 0),
(156, 'Buvayda tumani', 12, 1, 'Buvayda tumani', 0, 0),
(157, 'Dang\'ara tumani', 12, 1, 'Dang\'ara tumani', 0, 0),
(158, 'Yozyovon tumani', 12, 1, 'Yozyovon tumani', 0, 0),
(159, 'Quva tumani', 12, 1, 'Quva tumani', 0, 0),
(160, 'Quvasoy shahri', 12, 1, 'Quvasoy shahri', 0, 0),
(161, 'Qo\'qon shahri', 12, 1, 'Qo\'qon shahri', 0, 0),
(162, 'Qo\'shtepa tumani', 12, 1, 'Qo\'shtepa tumani', 0, 0),
(163, 'Marg\'ilon shahri', 12, 1, 'Marg\'ilon shahri', 0, 0),
(164, 'Oltiariq tumani', 12, 1, 'Oltiariq tumani', 0, 0),
(165, 'Rishton tumani', 12, 1, 'Rishton tumani', 0, 0),
(166, 'So\'x tumani', 12, 1, 'So\'x tumani', 0, 0),
(167, 'Toshloq tumani', 12, 1, 'Toshloq tumani', 0, 0),
(168, 'Uchko\'prik tumani', 12, 1, 'Uchko\'prik tumani', 0, 0),
(169, 'O\'zbekiston tumani', 12, 1, 'O\'zbekiston tumani', 0, 0),
(170, 'Farg\'ona tumani', 12, 1, 'Farg\'ona tumani', 0, 0),
(171, 'Farg\'ona shahri', 12, 1, 'Farg\'ona shahri', 0, 0),
(172, 'Furqat tumani', 12, 1, 'Furqat tumani', 0, 0),
(173, 'Bog\'ot tumani', 13, 1, 'Bog\'ot tumani', 0, 0),
(174, 'Gurlan tumani', 13, 1, 'Gurlan tumani', 0, 0),
(175, 'Qo\'shko\'pir tumani', 13, 1, 'Qo\'shko\'pir tumani', 0, 0),
(176, 'Urganch tumani', 13, 1, 'Urganch tumani', 0, 0),
(177, 'Urganch shahri', 13, 1, 'Urganch shahri', 0, 0),
(178, 'Xiva tumani', 13, 1, 'Xiva tumani', 0, 0),
(179, 'Hazorasp tumani', 13, 1, 'Hazorasp tumani', 0, 0),
(180, 'Xonqa tumani', 13, 1, 'Xonqa tumani', 0, 0),
(181, 'Shovot tumani', 13, 1, 'Shovot tumani', 0, 0),
(182, 'Yangiariq tumani', 13, 1, 'Yangiariq tumani', 0, 0),
(183, 'Yangibozor tumani', 13, 1, 'Yangibozor tumani', 0, 0),
(184, 'Bektemir tumani', 14, 1, 'Bektemir tumani', 0, 0),
(185, 'M.Ulugbek tumani', 14, 1, 'M.Ulugbek tumani', 0, 0),
(186, 'Mirobod tumani', 14, 1, 'Mirobod tumani', 0, 0),
(187, 'Olmazor tumani', 14, 1, 'Olmazor tumani', 0, 0),
(188, 'Sergeli tumani', 14, 1, 'Sergeli tumani', 0, 0),
(189, 'Uchtepa tumani', 14, 1, 'Uchtepa tumani', 0, 0),
(190, 'Yashnobod tumani', 14, 1, 'Yashnobod tumani', 0, 0),
(191, 'Chilonzor tumani', 14, 1, 'Chilonzor tumani', 0, 0),
(192, 'Shayxontoxur tumani', 14, 1, 'Shayxontoxur tumani', 0, 0),
(193, 'Yunusobod tumani', 14, 1, 'Yunusobod tumani', 0, 0),
(194, 'Yakkasaroy tumani', 14, 1, 'Yakkasaroy tumani', 0, 0),
(195, 'Aniqlanmagan', 15, 1, 'Aniqlanmagan', 0, 0),
(196, 'Qoraqalpog\'iston Respublikasi kiritilmagan tu', 1, 1, 'Qoraqalpog\'iston Respublikasi kiritilmagan tu', 0, 0),
(197, 'Andijon kiritilmagan tuman', 2, 1, 'Andijon kiritilmagan tuman', 0, 0),
(198, 'Buxoro kiritilmagan tuman ', 3, 1, 'Buxoro kiritilmagan tuman ', 0, 0),
(199, 'Jizzax kiritilmagan tuman', 4, 1, 'Jizzax kiritilmagan tuman', 0, 0),
(200, 'Qashqadaryo kiritilmagan tuman', 5, 1, 'Qashqadaryo kiritilmagan tuman', 0, 0),
(201, 'Navoiy kiritilmagan tuman', 6, 1, 'Navoiy kiritilmagan tuman', 0, 0),
(202, 'Namangan kiritilmagan tuman', 7, 1, 'Namangan kiritilmagan tuman', 0, 0),
(203, 'Samarqand kiritilmagan tuman', 8, 1, 'Samarqand kiritilmagan tuman', 0, 0),
(204, 'Surxondaryo kiritilmagan tuman', 9, 1, 'Surxondaryo kiritilmagan tuman', 0, 0),
(205, 'Sirdaryo kiritilmagan tuman', 10, 1, 'Sirdaryo kiritilmagan tuman', 0, 0),
(206, 'Toshkent viloyati kiritilmagan tuman', 11, 1, 'Toshkent viloyati kiritilmagan tuman', 0, 0),
(207, 'Farg\'ona kiritilmagan tuman', 12, 1, 'Farg\'ona kiritilmagan tuman', 0, 0),
(208, 'Xorazm kiritilmagan tuman', 13, 1, 'Xorazm kiritilmagan tuman', 0, 0),
(209, 'Toshkent shahri kiritilmagan tuman', 14, 1, 'Toshkent shahri kiritilmagan tuman', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm` int(8) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` smallint(6) NOT NULL,
  `sex` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `viloyat_id` smallint(6) NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `confirm`, `remember_token`, `age`, `sex`, `viloyat_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Colo Terra', '99897774036', NULL, NULL, '$2y$10$VHbXWYe7t3dy49cnhqoE1.NCxZIRZ9QzP/ZVB7EAlR86lxxJekjji', 575005, NULL, 32, '', 1, '/storage/profile/default_user.png', 1, '2019-08-14 06:21:28', '2019-08-14 06:21:28'),
(2, 'Colko', '998977740369', 'ax5165@sdfds.uz', NULL, '$2y$10$926J0KL6rVZkUC9l7/xSxeaUGwDP5iONQ2rV9PR7.p3G4bx7sPvp.', 153490, NULL, 32, '', 9, '/storage/profile/_1565932310.png', 0, '2019-08-14 06:44:45', '2019-08-16 00:11:50'),
(3, 'Nuriddin', '998997919955', NULL, NULL, '$2y$10$eboIPv6LWgmwuxaRQL1kyejz.Rt1mwxwYtFBf0qm2O1J9XzW7DC9O', 220089, NULL, 30, '', 1, '/storage/profile/default_user.png', 1, '2019-08-14 06:45:54', '2019-08-14 06:45:54');

-- --------------------------------------------------------

--
-- Структура таблицы `viloyat`
--

CREATE TABLE `viloyat` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `name_ru` varchar(128) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `viloyat`
--

INSERT INTO `viloyat` (`id`, `name_uz`, `status`, `name_ru`, `created_at`, `updated_at`) VALUES
(1, 'Қорақалпоғистон Республикаси', 1, 'Республика Каракалпакстан', 0, 1544769530),
(2, 'Андижон вилояти', 1, 'Андижанская область', 0, 1544768729),
(3, 'Бухоро вилояти', 1, 'Бухарская область', 0, 1544768801),
(4, 'Жиззах вилояти', 1, 'Джизакская область', 0, 1544768925),
(5, 'Қашқадарё вилояти', 1, 'Кашкадарьинская область', 0, 1544768998),
(6, 'Навоий вилояти', 1, 'Навоийская область', 0, 1544769280),
(7, 'Наманган вилояти', 1, 'Наманганская область', 0, 1544769230),
(8, 'Самарқанд вилояти', 1, 'Самаркандская область', 0, 1544769320),
(9, 'Сурхондарё вилояти', 1, 'Сурхандарьинская область', 0, 1544769374),
(10, 'Сирдарё вилояти', 1, 'Сырдарьинская область', 0, 1544769403),
(11, 'Тошкент вилояти', 1, 'Ташкентская область', 0, 1544769456),
(12, 'Фарғона вилояти', 1, 'Ферганская область', 0, 1544768872),
(13, 'Хоразм вилояти', 1, 'Хорезмская область', 0, 1544769075),
(14, 'Тошкент шаҳри', 1, 'Город Ташкент', 0, 1544769667);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Индексы таблицы `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Индексы таблицы `tuman`
--
ALTER TABLE `tuman`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `viloyat`
--
ALTER TABLE `viloyat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `viloyat_nomi` (`name_uz`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
