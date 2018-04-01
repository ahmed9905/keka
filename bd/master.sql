-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2018 г., 04:06
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
(1, 'AT661ER306US', 1, 0, 2),
(2, 'AT114ER267US', 2, 0, 2),
(3, 'AT111ER009US', 3, 0, 2),
(4, 'AT551ER766US', 4, 0, 2),
(5, 'AT451ER897US', 5, 0, 2),
(6, 'AT664ER422US', 6, 0, 2),
(7, 'AT768ER921US', 7, 0, 2),
(8, 'AT611ER000US', 8, 0, 2),
(9, 'AT080ER397US', 9, 0, 3),
(10, 'AT899ER000US', 10, 0, 3),
(11, 'AT438ER129US', 11, 0, 3),
(12, 'AT222ER348US', 12, 0, 3),
(13, 'AT391ER084US', 13, 0, 3),
(14, 'AT974ER300US', 14, 0, 3),
(15, 'AT234ER432US', 15, 0, 3),
(16, 'AT898ER233US', 16, 0, 3),
(17, 'AT112ER274US', 17, 0, 5),
(18, 'AT263ER101US', 18, 0, 5),
(19, 'AT831ER296US', 19, 0, 5),
(20, 'AT111ER777US', 20, 0, 5),
(21, 'AT149ER402US', 21, 0, 5),
(22, 'AT963ER123US', 22, 0, 5),
(23, 'AT085ER389US', 23, 0, 5),
(24, 'AT619ER000US', 24, 0, 5),
(25, 'AT468ER798US', 0, 1, 0),
(26, 'AT532ER465US', 0, 2, 0),
(27, 'AT416ER548US', 0, 3, 0),
(28, 'AT135ER448US', 0, 4, 0),
(29, 'AT762ER132US', 0, 5, 0),
(30, 'AT151ER438US', 0, 6, 0),
(31, 'AT108ER065US', 0, 7, 0),
(32, 'AT167ER498US', 0, 8, 0),
(33, 'AT229ER995US', 0, 9, 0),
(34, 'AT877ER985US', 0, 10, 0),
(35, 'AT501ER376US', 1, 0, 2),
(36, 'AT173ER448US', 2, 0, 2),
(37, 'AT019ER319US', 3, 0, 2),
(38, 'AT941ER844US', 4, 0, 2),
(39, 'AT608ER391US', 5, 0, 2),
(40, 'AT555ER234US', 6, 0, 2),
(41, 'AT177ER296US', 7, 0, 2),
(42, 'AT017ER333US', 8, 0, 2),
(43, 'AT000ER094US', 9, 0, 3),
(44, 'AT117ER092US', 10, 0, 3),
(45, 'AT344ER281US', 11, 0, 3),
(46, 'AT781ER763US', 12, 0, 3),
(47, 'AT156ER399US', 13, 0, 3),
(48, 'AT409ER711US', 14, 0, 3),
(49, 'AT123ER234US', 15, 0, 3),
(50, 'AT711ER469US', 16, 0, 3),
(51, 'AT951ER328US', 17, 0, 5),
(52, 'AT560ER997US', 18, 0, 5),
(53, 'AT432ER158US', 19, 0, 5),
(54, 'AT544ER223US', 20, 0, 5),
(55, 'AT014ER024US', 21, 0, 5),
(56, 'AT486ER579US', 22, 0, 5),
(57, 'AT170ER007US', 23, 0, 5),
(58, 'AT405ER002US', 24, 0, 5),
(59, 'AT816ER791US', 1, 0, 2),
(60, 'AT189ER755US', 2, 0, 2),
(61, 'AT710ER380US', 3, 0, 2),
(62, 'AT248ER793US', 4, 0, 2),
(63, 'AT411ER835US', 5, 0, 2),
(64, 'AT783ER246US', 6, 0, 2),
(65, 'AT992ER221US', 7, 0, 2),
(66, 'AT881ER111US', 8, 0, 2),
(67, 'AT099ER619US', 9, 0, 3),
(68, 'AT174ER380US', 10, 0, 3),
(69, 'AT112ER322US', 11, 0, 3),
(70, 'AT448ER557US', 12, 0, 3),
(71, 'AT385ER021US', 13, 0, 3),
(72, 'AT547ER306US', 14, 0, 3),
(73, 'AT983ER528US', 15, 0, 3),
(74, 'AT242ER739US', 16, 0, 3),
(75, 'AT748ER346US', 17, 0, 5),
(76, 'AT020ER058US', 18, 0, 5),
(77, 'AT224ER331US', 19, 0, 5),
(78, 'AT287ER574US', 20, 0, 5),
(79, 'AT639ER362US', 21, 0, 5),
(80, 'AT745ER514US', 22, 0, 5),
(81, 'AT945ER710US', 23, 0, 5),
(82, 'AT900ER119US', 24, 0, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `master_code_command`
--

CREATE TABLE `master_code_command` (
  `id_code_command` int(11) NOT NULL,
  `id_command` int(11) NOT NULL,
  `id_code` int(11) NOT NULL,
  `id_source` int(11) NOT NULL,
  `stage` int(11) NOT NULL DEFAULT '1',
  `point` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(14, 'ahmed1', 'fddeda688dd755826cdf34091413ca2c', 'db354eff7938c3d05cfe60a48b9501b1', '127.0.0.1', 'Ахмед', 0),
(15, 'ahmed2', 'fddeda688dd755826cdf34091413ca2c', '959bd60a54c5b25d4e554e79b02e2454', '127.0.0.1', 'Команда 2 ', 0),
(16, 'ahmed3', 'fddeda688dd755826cdf34091413ca2c', '72282f7ad4f6d33f27c82c647923c25f', '127.0.0.1', 'Команда 3', 0),
(17, 'ahmed4', 'fddeda688dd755826cdf34091413ca2c', '6e0fb31ec0dcc782221d9b0bdc023e4d', '127.0.0.1', 'Команда 4 ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `master_menu_perc`
--

CREATE TABLE `master_menu_perc` (
  `id` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_menu_perc`
--

INSERT INTO `master_menu_perc` (`id`, `flag`) VALUES
(5, 1);

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
(1, '\\img\\percon\\1.png', '\\img\\percon_once\\1.png'),
(2, '\\img\\percon\\2.png', '\\img\\percon_once\\2.png'),
(3, '\\img\\percon\\3.png', '\\img\\percon_once\\3.png'),
(4, '\\img\\percon\\4.png', '\\img\\percon_once\\4.png'),
(5, '\\img\\percon\\5.png', '\\img\\percon_once\\5.png'),
(6, '\\img\\percon\\6.png', '\\img\\percon_once\\6.png'),
(7, '\\img\\percon\\7.png', '\\img\\percon_once\\7.png'),
(8, '\\img\\percon\\8.png', '\\img\\percon_once\\8.png'),
(9, '\\img\\percon\\9.png', '\\img\\percon_once\\9.png'),
(10, '\\img\\percon\\10.png', '\\img\\percon_once\\10.png');

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

-- --------------------------------------------------------

--
-- Структура таблицы `master_slom`
--

CREATE TABLE `master_slom` (
  `id` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `time` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `master_source`
--

CREATE TABLE `master_source` (
  `id_source` int(11) NOT NULL,
  `source_img_1` varchar(256) NOT NULL DEFAULT '/img/source_1/1.png',
  `source_img_2` varchar(256) NOT NULL DEFAULT '/img/source_2/1.png',
  `source_img` varchar(256) NOT NULL DEFAULT '0',
  `source_img_once` varchar(256) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_source`
--

INSERT INTO `master_source` (`id_source`, `source_img_1`, `source_img_2`, `source_img`, `source_img_once`) VALUES
(1, '/img/source_1/1.png', '/img/source_2/1.png', '/img/source/1.jpg', '/img/source_once/1.png'),
(2, '/img/source_1/2.png', '/img/source_2/2.png', '/img/source/2.png', '/img/source_once/2.png'),
(3, '/img/source_1/3.png', '/img/source_2/3.png', '/img/source/3.png', '/img/source_once/3.png'),
(4, '/img/source_1/4.png', '/img/source_2/4.png', '/img/source/4.png', '/img/source_once/4.png'),
(5, '/img/source_1/5.png', '/img/source_2/5.png', '/img/source/5.png', '/img/source_once/5.png'),
(6, '/img/source_1/6.png', '/img/source_2/6.png', '/img/source/6.png', '/img/source_once/6.png'),
(7, '/img/source_1/7.png', '/img/source_2/7.png', '/img/source/7.png', '/img/source_once/7.png'),
(8, '/img/source_1/8.png', '/img/source_2/8.png', '/img/source/8.png', '/img/source_once/8.png'),
(9, '/img/source_1/9.png', '/img/source_2/9.png', '/img/source/9.jpg', '/img/source_once/9.png'),
(10, '/img/source_1/10.png', '/img/source_2/10.png', '/img/source/10.png', '/img/source_once/10.png'),
(11, '/img/source_1/11.png', '/img/source_2/11.png', '/img/source/11.png', '/img/source_once/11.png'),
(12, '/img/source_1/12.png', '/img/source_2/12.png', '/img/source/12.png', '/img/source_once/12.png'),
(13, '/img/source_1/13.png', '/img/source_2/13.png', '/img/source/13.png', '/img/source_once/13.png'),
(14, '/img/source_1/14.png', '/img/source_2/14.png', '/img/source/14.png', '/img/source_once/14.png'),
(15, '/img/source_1/15.png', '/img/source_2/15.png', '/img/source/15.png', '/img/source_once/15.png'),
(16, '/img/source_1/16.png', '/img/source_2/16.png', '/img/source/16.png', '/img/source_once/16.png'),
(17, '/img/source_1/17.png', '/img/source_2/17.png', '/img/source/17.png', '/img/source_once/17.png'),
(18, '/img/source_1/18.png', '/img/source_2/18.png', '/img/source/18.png', '/img/source_once/18.png'),
(19, '/img/source_1/19.png', '/img/source_2/19.png', '/img/source/19.png', '/img/source_once/19.png'),
(20, '/img/source_1/20.png', '/img/source_2/20.png', '/img/source/20.png', '/img/source_once/20.png'),
(21, '/img/source_1/21.png', '/img/source_2/21.png', '/img/source/21.png', '/img/source_once/21.png'),
(22, '/img/source_1/22.png', '/img/source_2/22.png', '/img/source/22.png', '/img/source_once/22.png'),
(23, '/img/source_1/23.png', '/img/source_2/23.png', '/img/source/23.png', '/img/source_once/23.png'),
(24, '/img/source_1/24.png', '/img/source_2/24.png', '/img/source/24.png', '/img/source_once/24.png');

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
-- Индексы таблицы `master_menu_perc`
--
ALTER TABLE `master_menu_perc`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `master_slom`
--
ALTER TABLE `master_slom`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT для таблицы `master_code_command`
--
ALTER TABLE `master_code_command`
  MODIFY `id_code_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT для таблицы `master_command`
--
ALTER TABLE `master_command`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `master_menu_perc`
--
ALTER TABLE `master_menu_perc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `master_percon`
--
ALTER TABLE `master_percon`
  MODIFY `id_percon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `master_percon_command`
--
ALTER TABLE `master_percon_command`
  MODIFY `id_percon_command` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `master_slom`
--
ALTER TABLE `master_slom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `master_source`
--
ALTER TABLE `master_source`
  MODIFY `id_source` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
