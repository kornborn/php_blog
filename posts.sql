-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 05 2018 г., 12:38
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `text`, `date`, `views`) VALUES
(1, 'Дикая природа идёт к вам: 13 необычных домашних питомцев, которые хозяева окружили любовью и заботой ', '', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34);\"><font size=\"5\"><span style=\"color: rgb(0, 0, 0);\"><font face=\"georgia\" style=\"\">Котики и рыбки, собаки и птички – сегодня все они самые обычные обитатели городских квартир. Но порой люди заводят себе самых необычных питомцев. Игуаны, пони и даже львы, обитающие рядом с человеком, не могут не вызывать удивление. Но глядя на то, как трепетно к ним относятся хозяева, и как они отвечают им нежностью, сомнений не возникает – это любовь.</font></span><span style=\"font-family: Georgia, serif, Tahoma; color: rgb(0, 0, 0);\">&nbsp;</span><br style=\"color: rgb(0, 0, 0); font-family: Georgia, serif, Tahoma;\"></font><br></p>', '2018-07-04', 19),
(3, 'Дикие животные на расстоянии вытянутой руки: очаровательные снимки из Шотландии ', '', '<h3><font size=\"4\"><font face=\"helvetica\" style=\"\"><span style=\"color: rgb(0, 0, 0);\">Увидеть диких животных на расстоянии вытянутой руки можно на снимках Франа Марта, фотографа, который четыре года назад переехал в Эдинбург из Испании и с тех пор путешествует по Шотландии, запечатлевая красоту этой северной страны. Главный художественный принцип, которым руководствуется Март, - не использовать опцию «зум», а всегда пробовать наладить такой контакт с животными, чтобы они не боялись подойти поближе…&nbsp;<br></span></font><font face=\"helvetica\" style=\"\"><span style=\"color: rgb(0, 0, 0);\">«Для меня фотография – это атмосфера вечеров у костра с чашкой свежезаваренного кофе или стаканом виски, когда тебя окружают близкие друзья, с которыми ты можешь разделить очарование этих мгновений», - рассказывает Март. И действительно, его фотокартины погружают зрителей в блаженное чувство единения с природой. Рассматривая их, легко представить самого себя путешественником, который чувствует свободу, живет в мире и покое, на равных общается с животными.&nbsp;</span></font></font></h3><br>', '2018-07-05', 19),
(6, 'Парни в фуражках', '', '<p style=\"margin-bottom: 0.53cm; font-variant-numeric: normal; font-variant-east-asian: normal; orphans: 2; widows: 2;\"><font face=\"apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\" size=\"4\">er gert hrsth rth rth srth rsth rsth rsth srh rsthsr hrt hsrh srh srh srh srh srh srhg erg aeogfnerg neriog jeoirgj eoigtrm oiaergmeiorgio rm[WK JG[OWEIRJG OEIRGJ MEO[ARg e r&nbsp; J GH ortjgh iortj hrthj rioth rth rwth g egltrkeop rkgeoirgj eiorjgpoe jgopjgrtgmba ;egj e[gk aepjgioerj e; e45 yje45 yj4e5o 5 h45h j4r[5h sw[thk ropth p k3qk[3k 5 ky]5k q5ky 45y 4 srth srth rsth rt</font><br></p><style type=\"text/css\">\r\n		@page { margin: 2cm }\r\n		p { margin-bottom: 0.25cm; line-height: 115% }\r\n	</style>', '2018-07-05', 14);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;