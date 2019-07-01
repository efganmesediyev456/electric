-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 01 2019 г., 12:25
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nevro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `u_id` int(11) UNSIGNED NOT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `u_id`, `l_id`, `title`) VALUES
(7, 1, 1, '1112erer'),
(8, 1, 2, '111'),
(9, 1, 3, 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `category_news`
--

CREATE TABLE `category_news` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `news_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category_news`
--

INSERT INTO `category_news` (`category_id`, `news_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `generals`
--

INSERT INTO `generals` (`id`, `l_id`, `u_id`, `address`, `phone`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Baki, Yasamal1', '05548925531', 'vuqar97@gmail.com12', 'out.png', '2019-06-29 08:35:51', '2019-06-29 08:38:13'),
(2, 2, 1, 'Baki, Yasamalru12', '0554892553ru1', 'vuqar97@gmail.comru1', 'out.png', '2019-06-29 08:35:51', '2019-06-29 08:38:13'),
(3, 3, 1, '+994554892553', '', 'vuqar97@gmail.comwewewe', 'out.png', '2019-06-29 08:40:01', '2019-06-29 08:40:08');

-- --------------------------------------------------------

--
-- Структура таблицы `lngs`
--

CREATE TABLE `lngs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `org_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lngs`
--

INSERT INTO `lngs` (`id`, `u_id`, `org_name`, `short_name`, `icon`, `default`, `ordering`, `deleted_at`) VALUES
(1, 1, 'Azerbaycanca', 'az', 'out.png', 1, 0, NULL),
(2, 2, 'Rusca', 'ru', 'out.png', 0, 0, NULL),
(3, 3, 'English', 'en', 'no_wifi.png', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_id` int(11) NOT NULL DEFAULT '1',
  `u_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `url_tag` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `l_id`, `u_id`, `sub_id`, `ordering`, `title`, `description`, `keyword`, `name`, `text`, `url_tag`, `picture`, `bg_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, 1, '1', '1', '1', '1', NULL, '/', 'out.png', 'backg.jpg', '2019-06-28 15:42:22', '2019-06-29 10:57:59', NULL),
(2, 2, 1, 0, 1, '2', '2', '2', '2', NULL, '2', 'out.png', 'backg.jpg', '2019-06-28 15:42:22', '2019-06-28 15:44:06', NULL),
(3, 3, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'out.png', 'backg.jpg', '2019-06-29 08:39:47', '2019-06-29 08:39:47', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `newses`
--

CREATE TABLE `newses` (
  `id` int(11) NOT NULL,
  `u_id` int(11) UNSIGNED NOT NULL,
  `l_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `newses`
--

INSERT INTO `newses` (`id`, `u_id`, `l_id`, `title`, `text`, `description`, `user_id`, `image`, `created_at`, `updated_at`, `name`, `deleted_at`) VALUES
(42, 1, 1, 'az1', '<p>az</p>', 'az', 1, 'frame.png', '2019-06-29 08:12:24', '2019-06-29 09:02:18', 'az', NULL),
(43, 1, 2, 'ru', '<p>ru</p>', 'ru', 1, 'frame.png', '2019-06-29 08:12:24', '2019-06-29 08:12:24', 'ru', NULL),
(44, 2, 1, 'az2', '<p>az</p>', 'az', 1, 'out.png', '2019-06-29 08:13:04', '2019-06-29 09:02:12', 'az', NULL),
(45, 2, 2, 'ru', NULL, NULL, 1, 'out.png', '2019-06-29 08:13:04', '2019-06-29 08:13:04', NULL, NULL),
(46, 3, 1, 'az3', NULL, 'az', 1, 'out.png', '2019-06-29 08:13:24', '2019-06-29 09:02:23', 'az', NULL),
(47, 3, 2, NULL, NULL, 'ru', 1, 'out.png', '2019-06-29 08:13:24', '2019-06-29 08:13:33', NULL, NULL),
(48, 1, 3, NULL, NULL, NULL, 1, 'frame.png', '2019-06-29 08:39:55', '2019-06-29 08:39:55', NULL, NULL),
(49, 2, 3, NULL, NULL, NULL, 1, 'out.png', '2019-06-29 09:02:07', '2019-06-29 09:02:07', NULL, NULL),
(50, 3, 3, NULL, NULL, NULL, 1, 'out.png', '2019-06-29 09:02:19', '2019-06-29 09:02:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `weight`) VALUES
(1, 'authenticated', 0),
(2, 'administrator', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_path` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `u_id`, `l_id`, `title`, `description`, `button_text`, `button_path`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 'az', 'az', 'az', 'az', 'empty.png', NULL, '2019-06-29 09:40:40', '2019-06-29 09:40:40'),
(6, 1, 2, 'ru', 'ru', 'ru', 'ru', 'empty.png', NULL, '2019-06-29 09:40:40', '2019-06-29 09:42:07'),
(7, 1, 3, 'en', 'en', 'en', 'en', 'empty.png', NULL, '2019-06-29 09:40:40', '2019-06-29 09:42:07');

-- --------------------------------------------------------

--
-- Структура таблицы `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `icon` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `socials`
--

INSERT INTO `socials` (`id`, `l_id`, `u_id`, `icon`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'in.png', 'aza', NULL, '2019-06-29 08:53:38', '2019-06-29 08:54:38'),
(2, 2, 1, 'in.png', 'ru', NULL, '2019-06-29 08:53:38', '2019-06-29 08:53:38'),
(3, 3, 1, 'in.png', 'en', NULL, '2019-06-29 08:53:39', '2019-06-29 08:53:39'),
(4, 1, 2, 'in.png', 'aza', NULL, '2019-06-29 09:24:50', '2019-06-29 09:24:50');

-- --------------------------------------------------------

--
-- Структура таблицы `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `confirmation_code` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `active`, `confirmation_code`, `confirmed`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'vuqar97@gmail.com', '$2y$10$tNkMB5QEimepTrA3pANfbO5VjxehkAf9Tt5c4eNXMnpVP5K.uxSc2', 1, '3cee909f-cee8-4a45-bc12-cc8d6c991963', 1, NULL, NULL, '2019-06-28 15:37:32', '2019-06-28 15:37:32', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
(1, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_l_id_foreign` (`l_id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_l_id_foreign` (`l_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Индексы таблицы `category_news`
--
ALTER TABLE `category_news`
  ADD UNIQUE KEY `cat_and_news_unique` (`category_id`,`news_id`),
  ADD KEY `news_id` (`news_id`);

--
-- Индексы таблицы `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `generals_l_id_foreign` (`l_id`);

--
-- Индексы таблицы `lngs`
--
ALTER TABLE `lngs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_l_id_foreign` (`l_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newses`
--
ALTER TABLE `newses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_l_id_foreign` (`l_id`),
  ADD KEY `news_user_id_foreign` (`user_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_name` (`name`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_l_id_foreign` (`l_id`);

--
-- Индексы таблицы `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socials_l_id_foreign` (`l_id`);

--
-- Индексы таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_accounts_user_id_provider_provider_id_index` (`user_id`,`provider`,`provider_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `users_roles`
--
ALTER TABLE `users_roles`
  ADD UNIQUE KEY `users_roles_user_id_role_id_unique` (`user_id`,`role_id`),
  ADD KEY `foreign_role` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `lngs`
--
ALTER TABLE `lngs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `newses`
--
ALTER TABLE `newses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `category_news`
--
ALTER TABLE `category_news`
  ADD CONSTRAINT `category_news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `category_news_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `newses` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `generals`
--
ALTER TABLE `generals`
  ADD CONSTRAINT `generals_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `newses`
--
ALTER TABLE `newses`
  ADD CONSTRAINT `news_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `socials`
--
ALTER TABLE `socials`
  ADD CONSTRAINT `socials_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `lngs` (`u_id`);

--
-- Ограничения внешнего ключа таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `foreign_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `foreign_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
