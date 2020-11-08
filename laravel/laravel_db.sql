-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 22 2020 г., 02:53
-- Версия сервера: 8.0.21-0ubuntu0.20.04.4
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_10_06_212420_create_contacts_table', 1);

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
-- Структура таблицы `postings`
--

CREATE TABLE `postings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `postings`
--

INSERT INTO `postings` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Tezt', 'zzzzdh@gmail.com', 'Тест', 'Тестовый пост', '2020-10-14 17:13:03', '2020-10-14 17:13:03'),
(2, 'Tezt', 'zzzzdh@gmail.com', 'Тест2', 'Второе сообщение', '2020-10-14 17:13:56', '2020-10-14 17:13:56'),
(3, 'Tezt', 'zzzzdh@gmail.com', 'Letraset sheet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-10-14 17:16:48', '2020-10-14 17:16:48'),
(4, 'Teztrrr', 'konsroh@gmail.com', 'Letraset sheet', 'You may use the transaction method on the DB facade to run a set of operations within a database transaction. If an exception is thrown within the transaction Closure, the transaction will automatically be rolled back. If the Closure executes successfully, the transaction will automatically be committed. You don\'t need to worry about manually rolling back or committing while using the transaction method:', '2020-10-14 18:24:26', '2020-10-14 18:24:26'),
(5, 'Teztrrr', 'konsroh@gmail.com', 'Handling Deadlocks', 'There are several ways to paginate items. The simplest is by using the paginate method on the query builder or an Eloquent query. The paginate method automatically takes care of setting the proper limit and offset based on the current page being viewed by the user. By default, the current page is detected by the value of the page query string argument on the HTTP request. This value is automatically detected by Laravel, and is also automatically inserted into links generated by the paginator.', '2020-10-14 18:25:13', '2020-10-14 18:25:13'),
(7, 'Tezozt', 'sguuuzdh@gmail.com', 'Letraset sheet', 'Основы работы с базами данных\r\n Введение\r\n Настройка\r\n Соединения для чтения и записи\r\n Использование нескольких соединений с БД\r\n Прослушивание событий запросов\r\n Транзакции БД\r\nВведение\r\nLaravel делает взаимодействие с базами данных чрезвычайно простым в различных бэкэндах баз данных - будь то сырой SQL, построитель запросов или Eloquent ORM. На данный момент Laravel поддерживает четыре системы баз данных:\r\n\r\nMySQL 5.6+ (Version Policy)\r\nPostgreSQL 9.4+ (Version Policy)\r\nSQLite 3.8.8+\r\nSQL Server 2017+ (Version Policy)\r\nНастройка', '2020-10-14 18:43:27', '2020-10-14 18:48:31'),
(8, 'Tezozt', 'sguuuzdh@gmail.com', 'Те11111asfasfas', 'gsdadsdsdsgdsgsgdsgdgdsdgssdfggsdsdggdssgdwetetwetwe ttewtwet we twet we twet ewt we', '2020-10-14 18:48:47', '2020-10-14 18:48:47'),
(9, 'Tezozt', 'sguuuzdh@gmail.com', 'Letraset sheet', 'fsaassf afsfsaf 21234124 tgdsvfsdgs', '2020-10-14 18:49:59', '2020-10-14 18:49:59'),
(10, 'aaaaaa', 'heretik4@gmail.com', 'catpostsnum', 'вот теперь думаю, как foreach вложить в foreach. вроде такого еще не видел. нет никаких мыслей?\r\nили из запроса с количеством новостей можно как-то и названия вырезать? просто в phphmyadmin при запросе', '2020-10-14 21:50:14', '2020-10-14 21:50:14'),
(11, 'Qewweqq', 'qqqqw@gmail.com', 'Letraset sheet', 'rwerewrewewrwerwerwerwerwerwerwe', '2020-10-16 20:38:07', '2020-10-16 20:38:07'),
(12, '1ZZa12222112121aaa', 'zzzzdddddh@gmail.com', '1111111111111111111', 'Features Cool stuff Random feature Team feature Stuff for developers Another one Last time Resources Resource Resource name Another resource Final resource About Team Locations Privacy Terms', '2020-10-20 10:51:57', '2020-10-20 12:56:24');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tezt', 'zzzzdh@gmail.com', NULL, '$2y$10$XRrMsOfTmDiWs/mlmGo8weoJ3R1CezCV4CE2k1tPwYiyMUHBBT3ei', NULL, '2020-10-14 17:10:19', '2020-10-14 17:10:19'),
(2, 'василий', 'uasya@gmail.com', NULL, '$2y$10$79RPIuw1y79wHrnuShus9.CZbXdsPOq.7/5uOfuV4B5xWV8JgZGim', NULL, '2020-10-14 18:08:51', '2020-10-14 18:08:51'),
(3, '1111dasdsadasd', 'wtew@gmail.com', NULL, '$2y$10$Nlg4NhJ2n1uzJvfqMvR3.OdAaAs4E/fQTpgcg5LOsVevpSytn/tmS', NULL, '2020-10-14 18:10:40', '2020-10-14 18:10:40'),
(4, 'Teztrrr', 'konsroh@gmail.com', NULL, '$2y$10$uV7OxXyjeeSBBqbRT9g4leIiebj2fWN5EQwxtjGX.HGwlLyGTYoNC', NULL, '2020-10-14 18:18:47', '2020-10-14 18:18:47'),
(5, 'Tezozt', 'sguuuzdh@gmail.com', NULL, '$2y$10$NzGh225HR9MCjGEVwnk8Ue6QZ02C83g7F/9bnoU40dknXwRtIxOiq', NULL, '2020-10-14 18:32:19', '2020-10-14 18:32:19'),
(6, 'aaaaaa', 'heretik4@gmail.com', NULL, '$2y$10$vhCi8F1nIPv7KVKZMAuxZOMdUHeewcQN8ZhVRtfVex4.ZWPABFilW', NULL, '2020-10-14 21:47:55', '2020-10-14 21:47:55'),
(7, 'WWWW', 'wtw@gmail.com', NULL, '$2y$10$t4iIBYVeiMuZQDPFQ.43YeVaRS5lJ9JZ77kUQi8tV/QmaeJRsNYym', NULL, '2020-10-15 13:51:56', '2020-10-15 13:51:56'),
(8, 'Qewweqq', 'qqqqw@gmail.com', NULL, '$2y$10$VUjVQoHnSHm1cEdM8OX0wu2ju4eibP9RwfUzRU5dXP5AEjCP/Veqe', NULL, '2020-10-16 20:21:59', '2020-10-16 20:21:59'),
(9, 'AAAATezzt', 'aaawtew@gmail.com', NULL, '$2y$10$spyoKxowtPJyZ9MAsFXjluorHKNCZ.CCPu.E4.vzm1ef3UydQboZq', NULL, '2020-10-17 02:35:47', '2020-10-17 02:35:47'),
(10, '111aaa2121aaa', 'aaazzfzzzzdh@gmail.com', NULL, '$2y$10$IbShlw1EtG6jgpRoFBofK.zIgLb.rCZG9xeAPd7VSpr0Y4Eyzl./G', NULL, '2020-10-17 03:34:41', '2020-10-17 03:34:41'),
(11, '1ZZa12222112121aaa', 'zzzzdddddh@gmail.com', NULL, '$2y$10$YG1ZQzEuRgXqObHv3DiScu7ssDbQ2kKVT3RRrAXg22gQrhhxHOqvu', NULL, '2020-10-17 04:30:06', '2020-10-17 04:30:06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `postings`
--
ALTER TABLE `postings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;