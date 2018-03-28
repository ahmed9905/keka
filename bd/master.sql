-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2018 г., 13:22
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
  `id_person` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_code`
--

INSERT INTO `master_code` (`id_code`, `code`, `id_source`, `id_person`) VALUES
(1, 'NbFXmjdsiJHX', 1, 0),
(2, 'vOJm1tVZgLT4', 2, 0),
(3, 'dCff3a0GNJ3k', 3, 0),
(4, 'pGFiEZN3sU43', 4, 0),
(5, 'V8CPbix4U1FX', 5, 0),
(6, 'RLDONCjYa5p4', 6, 0),
(7, 'o4DZkQ9uhkl8', 7, 0),
(8, 'o4DukQ9yhkl8', 8, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `master_code_command`
--

CREATE TABLE `master_code_command` (
  `id_code_command` int(11) NOT NULL,
  `id_command` int(11) NOT NULL,
  `id_code` int(11) NOT NULL,
  `id_source` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_code_command`
--

INSERT INTO `master_code_command` (`id_code_command`, `id_command`, `id_code`, `id_source`) VALUES
(26, 14, 3, 3),
(25, 14, 2, 2),
(24, 14, 1, 1),
(23, 14, 8, 8),
(22, 14, 7, 7),
(27, 14, 5, 5),
(28, 14, 4, 4),
(29, 14, 6, 6);

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
  `Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='таблица команд';

--
-- Дамп данных таблицы `master_command`
--

INSERT INTO `master_command` (`id`, `Login`, `Password`, `Hash`, `ip`, `Name`) VALUES
(14, 'ahmed1', 'fddeda688dd755826cdf34091413ca2c', '18945d83a19375a54fd7671a7714a2c2', '127.0.0.1', 'Ахмед'),
(15, 'ahmed2', 'fddeda688dd755826cdf34091413ca2c', 'e742a29ae89301aafbce0ce530747536', '127.0.0.1', 'Команда 2 '),
(16, 'ahmed3', 'fddeda688dd755826cdf34091413ca2c', '72042176b71164c643bfbdfc8ec93b7e', '127.0.0.1', 'Команда 3'),
(17, 'ahmed4', 'fddeda688dd755826cdf34091413ca2c', '', '0', 'Команда 4 ');

-- --------------------------------------------------------

--
-- Структура таблицы `master_percon`
--

CREATE TABLE `master_percon` (
  `id_percon` int(10) NOT NULL,
  `ing_percon` varchar(256) NOT NULL,
  `name_percon` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `master_percon_command`
--

CREATE TABLE `master_percon_command` (
  `id_percon_command` int(10) NOT NULL,
  `id_command` int(10) NOT NULL,
  `id_percone` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `master_source`
--

CREATE TABLE `master_source` (
  `id_source` int(11) NOT NULL,
  `source` varchar(256) NOT NULL DEFAULT '0',
  `source_once` varchar(256) NOT NULL DEFAULT '0',
  `source_img` varchar(256) NOT NULL DEFAULT '0',
  `source_img_once` varchar(256) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_source`
--

INSERT INTO `master_source` (`id_source`, `source`, `source_once`, `source_img`, `source_img_once`) VALUES
(1, 'Духовной жаждою томим,\r\nВ пустыне мрачной я влачился,\r\nИ шестикрылый серафим\r\nНа перепутье мне явился;', '   ', '0', '0'),
(2, 'Перстами легкими как сон\r\nМоих зениц коснулся он:\r\nОтверзлись вещие зеницы,\r\nКак у испуганной орлицы.', '\r\n\r\n\r\n\r\n', '0', '0'),
(3, 'Моих ушей коснулся он,\r\nИ их наполнил шум и звон:\r\nИ внял я неба содроганье,\r\nИ горний ангелов полет,', '\r\n\r\n\r\n\r\n', '0', '0'),
(4, 'И гад морских подводный ход,\r\nИ дольней лозы прозябанье.\r\nИ он к устам моим приник,\r\nИ вырвал грешный мой язык,', '   ', '0', '0'),
(5, 'И празднословный и лукавый,\r\nИ жало мудрыя змеи\r\nВ уста замершие мои\r\nВложил десницею кровавой.', '   ', '0', '0'),
(6, 'И он мне грудь рассек мечом,\r\nИ сердце трепетное вынул,\r\nИ угль, пылающий огнем,\r\nВо грудь отверстую водвинул.', '   ', '0', '0'),
(7, 'Как труп в пустыне я лежал,\r\nИ бога глас ко мне воззвал:\r\n«Восстань, пророк, и виждь, и внемли,\r\nИсполнись волею моей,\r\nИ, обходя моря и земли,\r\nГлаголом жги сердца людей».', '   ', '0', '0'),
(8, '0', '0', '/img/source/1.jpg', '/img/source_once/1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `master_code`
--
ALTER TABLE `master_code`
  ADD PRIMARY KEY (`id_code`);

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
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `master_code_command`
--
ALTER TABLE `master_code_command`
  MODIFY `id_code_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `master_command`
--
ALTER TABLE `master_command`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `master_percon`
--
ALTER TABLE `master_percon`
  MODIFY `id_percon` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `master_percon_command`
--
ALTER TABLE `master_percon_command`
  MODIFY `id_percon_command` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `master_source`
--
ALTER TABLE `master_source`
  MODIFY `id_source` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
