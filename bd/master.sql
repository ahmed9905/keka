-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2018 г., 22:10
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `master`
--

-- --------------------------------------------------------

--
-- Структура таблицы `master_code`
--

CREATE TABLE `master_code` (
  `id_code` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `id_source` int(11) NOT NULL DEFAULT '0',
  `id_person` int(11) NOT NULL DEFAULT '0',
  `point` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_code`
--

INSERT INTO `master_code` (`id_code`, `code`, `id_source`, `id_person`, `point`) VALUES
(1, 'NbFXmjdsiJHX', 1, 0, 2),
(2, 'vOJm1tVZgLT4', 2, 0, 2),
(3, 'dCff3a0GNJ3k', 3, 0, 2),
(4, 'pGFiEZN3sU43', 4, 0, 2),
(5, 'V8CPbix4U1FX', 5, 0, 2),
(6, 'RLDONCjYa5p4', 6, 0, 2),
(7, 'o4DZkQ9uhkl8', 7, 0, 2),
(8, 'o4DukQ9yhkl8', 8, 0, 2),
(9, 'dwff3F0DvJ3k', 9, 0, 3),
(10, 'phFikjN3sU7F', 10, 0, 3),
(11, 'i8CFbGx9U1Ff', 11, 0, 3),
(12, 'RfgqNCjYa5F4', 12, 0, 3),
(13, 'o9fZkf9uhkl8', 13, 0, 3),
(14, 'N1DLkQfyhkl8', 14, 0, 3),
(15, 'P9fZ9f9uGkD8', 15, 0, 3),
(16, 'N1DOkQH6hkl8', 16, 0, 3),
(17, 'KwHf3F3DJJ3k', 17, 0, 5),
(18, 'Mhfikjt3sU7F', 18, 0, 5),
(19, 'i9LFbSx9URF8', 19, 0, 5),
(20, 'Easrt6jYa5F4', 20, 0, 5),
(21, 'oOfZ849u2kl8', 21, 0, 5),
(22, 'N1D2k5f7h8l8', 22, 0, 5),
(23, 'P9fZ9Z9ZGfD8', 23, 0, 5),
(24, 'N1DOJQS662l8', 24, 0, 5),
(25, 'N8DOHQD762l8', 0, 1, 0),
(26, 'L8DyGQT762l8', 0, 2, 0),
(27, 'D1SyAFT56AW9', 0, 3, 0),
(28, 'U5DyHQT762l7', 0, 4, 0),
(29, 'I6DyHQT762l2', 0, 5, 0),
(30, 'O7DyHQT762l3', 0, 6, 0),
(31, 'L9DyHQT76Gl4', 0, 7, 0),
(32, 'D2DyHQT76fl5', 0, 8, 0),
(33, 'A1DyHQT76Al6', 0, 9, 0),
(34, 'D3DyHQT76227', 0, 10, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `master_code_command`
--

CREATE TABLE `master_code_command` (
  `id_code_command` int(11) NOT NULL,
  `id_command` int(11) NOT NULL,
  `id_code` int(11) NOT NULL,
  `id_source` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_code_command`
--

INSERT INTO `master_code_command` (`id_code_command`, `id_command`, `id_code`, `id_source`, `point`, `datetime`) VALUES
(88, 15, 5, 5, 2, '30.03.18 22:02:26'),
(85, 14, 19, 19, 5, '30.03.18 21:16:11'),
(87, 15, 3, 3, 2, '30.03.18 22:02:24'),
(84, 14, 8, 8, 2, '30.03.18 21:15:45'),
(83, 14, 2, 2, 2, '30.03.18 21:15:35');

-- --------------------------------------------------------

--
-- Структура таблицы `master_command`
--

CREATE TABLE `master_command` (
  `id` int(10) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Hash` varchar(32) NOT NULL,
  `ip` varchar(256) DEFAULT '0',
  `Name` varchar(255) NOT NULL,
  `prev` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='таблица команд';

--
-- Дамп данных таблицы `master_command`
--

INSERT INTO `master_command` (`id`, `Login`, `Password`, `Hash`, `ip`, `Name`, `prev`) VALUES
(14, 'ahmed1', 'fddeda688dd755826cdf34091413ca2c', '69488d0c4c835ecf1399f58d37296093', '127.0.0.1', 'Ахмед', 0),
(15, 'ahmed2', 'fddeda688dd755826cdf34091413ca2c', '2fe1df2b9263bb4e0037e34851f8e430', '127.0.0.1', 'Команда 2 ', 0),
(16, 'ahmed3', 'fddeda688dd755826cdf34091413ca2c', '72282f7ad4f6d33f27c82c647923c25f', '127.0.0.1', 'Команда 3', 0),
(17, 'ahmed4', 'fddeda688dd755826cdf34091413ca2c', '6e0fb31ec0dcc782221d9b0bdc023e4d', '127.0.0.1', 'Команда 4 ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `master_percon`
--

CREATE TABLE `master_percon` (
  `id_percon` int(10) NOT NULL,
  `img_percon` varchar(256) NOT NULL,
  `img_percon_once` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_percon`
--

INSERT INTO `master_percon` (`id_percon`, `img_percon`, `img_percon_once`) VALUES
(1, '\\img\\percon\\1.jpg', '\\img\\percon_once\\1.jpg'),
(2, '\\img\\percon\\2.jpg', '\\img\\percon_once\\2.jpg'),
(3, '\\img\\percon\\3.jpg', '\\img\\percon_once\\3.jpg'),
(4, '\\img\\percon\\4.jpg', '\\img\\percon_once\\4.jpg'),
(5, '\\img\\percon\\5.jpg', '\\img\\percon_once\\5.jpg'),
(6, '\\img\\percon\\6.jpg', '\\img\\percon_once\\6.jpg'),
(7, '\\img\\percon\\3.jpg', '\\img\\percon_once\\3.jpg'),
(8, '\\img\\percon\\4.jpg', '\\img\\percon_once\\4.jpg'),
(9, '\\img\\percon\\5.jpg', '\\img\\percon_once\\5.jpg'),
(10, '\\img\\percon\\6.jpg', '\\img\\percon_once\\6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `master_percon_command`
--

CREATE TABLE `master_percon_command` (
  `id_percon_command` int(10) NOT NULL,
  `id_command` int(10) NOT NULL,
  `id_code` int(10) NOT NULL,
  `id_percon` int(10) NOT NULL,
  `point` int(10) NOT NULL DEFAULT '0',
  `datetime` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_percon_command`
--

INSERT INTO `master_percon_command` (`id_percon_command`, `id_command`, `id_code`, `id_percon`, `point`, `datetime`) VALUES
(25, 15, 29, 5, 0, '30.03.18 22:02:34'),
(24, 14, 28, 4, 0, '30.03.18 21:39:43');

-- --------------------------------------------------------

--
-- Структура таблицы `master_source`
--

CREATE TABLE `master_source` (
  `id_source` int(11) NOT NULL,
  `source_img` varchar(256) NOT NULL DEFAULT '0',
  `source_img_once` varchar(256) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_source`
--

INSERT INTO `master_source` (`id_source`, `source_img`, `source_img_once`) VALUES
(1, '/img/source/3.jpg', '/img/source_once/3.jpg'),
(2, '/img/source/2.jpg', '/img/source_once/2.jpg'),
(3, '/img/source/1.jpg', '/img/source_once/1.jpg'),
(4, '/img/source/4.jpg', '/img/source_once/4.jpg'),
(5, '/img/source/5.jpg', '/img/source_once/5.jpg'),
(6, '/img/source/6.jpg', '/img/source_once/6.jpg'),
(7, '/img/source/1.jpg', '/img/source_once/1.jpg'),
(8, '/img/source/2.jpg', '/img/source_once/2.jpg'),
(9, '/img/source/3.jpg', '/img/source_once/3.jpg'),
(10, '/img/source/4.jpg', '/img/source_once/4.jpg'),
(11, '/img/source/5.jpg', '/img/source_once/5.jpg'),
(12, '/img/source/6.jpg', '/img/source_once/6.jpg'),
(13, '/img/source/1.jpg', '/img/source_once/1.jpg'),
(14, '/img/source/2.jpg', '/img/source_once/2.jpg'),
(15, '/img/source/3.jpg', '/img/source_once/3.jpg'),
(16, '/img/source/4.jpg', '/img/source_once/4.jpg'),
(17, '/img/source/5.jpg', '/img/source_once/5.jpg'),
(18, '/img/source/6.jpg', '/img/source_once/6.jpg'),
(19, '/img/source/1.jpg', '/img/source_once/1.jpg'),
(20, '/img/source/2.jpg', '/img/source_once/2.jpg'),
(21, '/img/source/3.jpg', '/img/source_once/3.jpg'),
(22, '/img/source/4.jpg', '/img/source_once/4.jpg'),
(23, '/img/source/5.jpg', '/img/source_once/5.jpg'),
(24, '/img/source/6.jpg', '/img/source_once/6.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `master_code`
--
ALTER TABLE `master_code`
  ADD PRIMARY KEY (`id_code`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Индексы таблицы `master_code_command`
--
ALTER TABLE `master_code_command`
  ADD PRIMARY KEY (`id_code_command`);

--
-- Индексы таблицы `master_command`
--
ALTER TABLE `master_command`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- Индексы таблицы `master_percon`
--
ALTER TABLE `master_percon`
  ADD PRIMARY KEY (`id_percon`);

--
-- Индексы таблицы `master_percon_command`
--
ALTER TABLE `master_percon_command`
  ADD PRIMARY KEY (`id_percon_command`);

--
-- Индексы таблицы `master_source`
--
ALTER TABLE `master_source`
  ADD PRIMARY KEY (`id_source`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `master_code`
--
ALTER TABLE `master_code`
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `master_code_command`
--
ALTER TABLE `master_code_command`
  MODIFY `id_code_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT для таблицы `master_command`
--
ALTER TABLE `master_command`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `master_percon`
--
ALTER TABLE `master_percon`
  MODIFY `id_percon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `master_percon_command`
--
ALTER TABLE `master_percon_command`
  MODIFY `id_percon_command` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `master_source`
--
ALTER TABLE `master_source`
  MODIFY `id_source` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
