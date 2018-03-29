-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2018 г., 18:13
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
-- Структура таблицы `master_percon`
--

CREATE TABLE `master_percon` (
  `id_percon` int(10) NOT NULL,
  `img_percon` varchar(256) NOT NULL,
  `img_percon_once` varchar(256) NOT NULL,
  `name_percon` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_percon`
--

INSERT INTO `master_percon` (`id_percon`, `img_percon`, `img_percon_once`, `name_percon`) VALUES
(1, '\\img\\percon\\1.jpg', '\\img\\percon_once\\1.jpg', 'Басуx'),
(2, '\\img\\percon\\2.jpg', '\\img\\percon_once\\2.jpg', 'Что то там'),
(3, '\\img\\percon\\3.jpg', '\\img\\percon_once\\3.jpg', 'Бчьы'),
(4, '\\img\\percon\\4.jpg', '\\img\\percon_once\\4.jpg', 'ЫВбывы'),
(5, '\\img\\percon\\5.jpg', '\\img\\percon_once\\5.jpg', 'Двывф'),
(6, '\\img\\percon\\6.jpg', '\\img\\percon_once\\6.jpg', 'выыф');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `master_percon`
--
ALTER TABLE `master_percon`
  ADD PRIMARY KEY (`id_percon`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `master_percon`
--
ALTER TABLE `master_percon`
  MODIFY `id_percon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
