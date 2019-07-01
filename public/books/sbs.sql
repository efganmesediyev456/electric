-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 21 2019 г., 07:32
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
-- База данных: `sbs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `worker_id`, `login`, `password`, `status`, `last_login`) VALUES
(1, 12, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 1, '2019-06-21 07:22:24');

-- --------------------------------------------------------

--
-- Структура таблицы `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_token`
--

INSERT INTO `user_token` (`id`, `user_id`, `token`) VALUES
(274, 1, 'eRiXH4sSXjQ:APA91bEBz0lKT6NPEOEPsA5o1u3Xv7enLQYKyvAJ6Wk3xayNN9HjwtHqOfkGhb-J5FFd6I562DFeCifcBcJYXITShtdJ4VRkcj9Y9METVScZd7Nw-IfAht9ByU5_-RQ6HyLPIcAMv9dY'),
(281, 1, 'eIeYWszkUCE:APA91bE-gEhIutoy_akjKwLNY-Wl4XrVPucXeu4r1Gw1Nt7f6yVvnuw-Kgprghc4dmzTWKLvywF1ZGWWSJvOA1iC6zD4bibJOBeStqVx5IrZ8z38j1XnkOLpmrhowGUaZ3FDmnKVmGnE');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `customer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL,
  `ref` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `user_id`, `customer_id`, `title`, `description`, `status`, `type`, `ref`, `date`) VALUES
(32, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(33, 1, 43, 'est', 'test text', 2, 1, 43, '2019-06-20 10:35:30'),
(34, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(35, 1, 43, 'est', 'test text', 2, 1, 43, '2019-06-20 10:35:30'),
(36, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(37, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(38, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(39, 1, 43, 'est', 'test text', 2, 1, 43, '2019-06-20 10:35:30'),
(40, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(41, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(42, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(43, 1, 43, 'est', 'test text', 1, 1, 43, '2019-06-20 10:35:30'),
(44, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(45, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(46, 0, 43, 'est', 'test text', 0, 1, 43, '2019-06-20 10:35:30'),
(47, 1, 43, 'est', 'test text', 1, 1, 43, '2019-06-20 10:35:30');

-- --------------------------------------------------------

--
-- Структура таблицы `work_log`
--

CREATE TABLE `work_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT '0',
  `work_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` text NOT NULL,
  `pay` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `work_log`
--

INSERT INTO `work_log` (`id`, `user_id`, `work_id`, `customer_id`, `status`, `date`, `note`, `pay`) VALUES
(172, 1, 32, 43, 1, '2019-06-18 16:50:19', '', 0),
(173, 1, 32, 43, 2, '2019-06-18 16:50:24', 'hugug', 0),
(174, 1, 32, 43, 1, '2019-06-18 16:50:34', '', 0),
(175, 1, 32, 43, 3, '2019-06-18 16:53:44', '', 5445),
(176, 1, 32, 43, 1, '2019-06-18 16:54:52', '', 0),
(177, 1, 32, 43, 3, '2019-06-18 16:55:46', '', 0),
(178, 1, 32, 43, 1, '2019-06-18 16:56:05', '', 0),
(179, 1, 32, 43, 3, '2019-06-18 16:56:25', 'her sey eladi', 150),
(180, 1, 32, 43, 1, '2019-06-18 16:56:57', '', 0),
(181, 1, 32, 43, 2, '2019-06-18 16:57:07', 'vaxtim yoxdur', 0),
(182, 1, 32, 43, 1, '2019-06-18 16:58:47', '', 0),
(183, 1, 32, 43, 2, '2019-06-18 16:58:55', 'alinmir mende', 0),
(184, 1, 32, 43, 1, '2019-06-18 17:01:40', '', 0),
(185, 1, 32, 43, 3, '2019-06-19 09:02:17', 'fdfdfdf', 255),
(186, 1, 32, 43, 3, '2019-06-19 09:36:09', 'eeeee', 66.45),
(187, 1, 32, 43, 3, '2019-06-19 09:44:34', '', 0),
(188, 1, 32, 43, 1, '2019-06-19 09:49:52', '', 0),
(189, 1, 33, 43, 1, '2019-06-19 13:50:57', '', 0),
(190, 1, 32, 43, 2, '2019-06-19 13:51:06', 'test yazisi', 0),
(191, 1, 33, 43, 3, '2019-06-19 14:31:45', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33', 250),
(192, 1, 32, 43, 1, '2019-06-19 14:34:24', '', 0),
(193, 1, 32, 43, 2, '2019-06-19 14:34:33', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(194, 1, 32, 43, 1, '2019-06-19 15:03:10', '', 0),
(195, 1, 32, 43, 2, '2019-06-19 15:03:16', '', 0),
(196, 1, 32, 43, 1, '2019-06-19 15:12:01', '', 0),
(197, 1, 32, 43, 2, '2019-06-19 15:12:11', '', 0),
(198, 1, 32, 43, 1, '2019-06-19 15:29:12', '', 0),
(199, 1, 32, 43, 2, '2019-06-19 15:39:41', '', 0),
(200, 1, 32, 43, 1, '2019-06-19 15:39:57', '', 0),
(201, 1, 32, 43, 2, '2019-06-19 15:40:12', '', 0),
(202, 1, 32, 43, 1, '2019-06-19 15:43:19', '', 0),
(203, 1, 32, 43, 2, '2019-06-19 16:07:41', '', 0),
(204, 1, 32, 43, 1, '2019-06-19 16:07:51', '', 0),
(205, 1, 32, 43, 2, '2019-06-19 16:48:42', '', 0),
(206, 1, 32, 43, 1, '2019-06-19 16:58:06', '', 0),
(207, 1, 32, 43, 2, '2019-06-20 08:17:04', '', 0),
(208, 1, 32, 43, 1, '2019-06-20 08:17:39', '', 0),
(209, 1, 32, 43, 2, '2019-06-20 10:11:10', '', 0),
(210, 1, 32, 43, 1, '2019-06-20 10:31:15', '', 0),
(211, 1, 32, 43, 2, '2019-06-20 10:37:49', '', 0),
(212, 1, 32, 43, 1, '2019-06-20 11:17:08', '', 0),
(213, 1, 32, 43, 2, '2019-06-20 11:18:08', '', 0),
(214, 1, 35, 43, 1, '2019-06-20 11:39:50', '', 0),
(215, 1, 39, 43, 3, '2019-06-20 15:30:14', '', 0),
(216, 1, 32, 43, 1, '2019-06-20 15:41:45', '', 0),
(217, 1, 32, 43, 2, '2019-06-20 15:42:05', 'hfffhjh', 0),
(218, 1, 35, 43, 3, '2019-06-20 15:42:12', 'bgg', 4444),
(219, 1, 32, 43, 1, '2019-06-20 15:43:26', '', 0),
(220, 1, 33, 43, 1, '2019-06-20 15:43:47', '', 0),
(221, 1, 32, 43, 2, '2019-06-20 15:44:10', 'xowuma gelmedi', 0),
(222, 1, 33, 43, 3, '2019-06-20 15:45:04', 'hello world', 155),
(223, 1, 32, 43, 1, '2019-06-20 16:01:10', '', 0),
(224, 1, 32, 43, 2, '2019-06-20 16:01:32', 'jgjgjd', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `work_log`
--
ALTER TABLE `work_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `work_log`
--
ALTER TABLE `work_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
