-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 16 2021 р., 15:31
-- Версія сервера: 10.4.18-MariaDB
-- Версія PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `game_shop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'adminka', '08121982');

-- --------------------------------------------------------

--
-- Структура таблиці `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `banner_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `banner`
--

INSERT INTO `banner` (`id_banner`, `banner_name`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id_ca` int(11) NOT NULL,
  `cat_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id_ca`, `cat_name`) VALUES
(1, 'rpq'),
(2, 'sport'),
(3, 'shoter'),
(4, 'adventure');

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_game` text NOT NULL,
  `name_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`id`, `id_game`, `name_comment`) VALUES
(7, 'Minecraft', 'dada'),
(8, 'Minecraft', 'dada'),
(9, 'Minecraft', 'dada'),
(16, 'Minecraft', 'Hello'),
(17, 'Minecraft', 'Hello'),
(18, 'Minecraft', 'Hi there'),
(19, 'Deus Ex: Mankind ...', 'Previous path was better'),
(20, 'Cyberpunk', 'Hello there'),
(21, 'Deus Ex: Mankind ...', 'bla bla'),
(22, 'Need for Speed: Heat', '5 stars for 1 bitcoin'),
(23, 'Destiny', 'ACTION!!!!'),
(24, 'Deus Ex: Mankind ...', 'Harder Better Faster Stronser');

-- --------------------------------------------------------

--
-- Структура таблиці `console`
--

CREATE TABLE `console` (
  `id_console` int(11) NOT NULL,
  `name_console` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `console`
--

INSERT INTO `console` (`id_console`, `name_console`) VALUES
(1, 'Playstation'),
(2, 'Xbox'),
(3, 'Todos'),
(4, 'Pc');

-- --------------------------------------------------------

--
-- Структура таблиці `games`
--

CREATE TABLE `games` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `price` varchar(11) NOT NULL,
  `mark` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_ca` int(11) NOT NULL,
  `id_popularity` int(11) NOT NULL,
  `id_banner` int(11) NOT NULL,
  `id_console` int(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `games`
--

INSERT INTO `games` (`id`, `name`, `author`, `price`, `mark`, `img`, `id_ca`, `id_popularity`, `id_banner`, `id_console`, `description`) VALUES
(1, 'Last of Us:Remastered', 'CDProject 2014', '$99.00', 8.2, 'img/game.png', 4, 2, 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'Gof of War', 'CDProject 2014', '$99.00', 8, 'img/game2.png', 1, 2, 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Need for Speed: Heat', 'CDProject 2014', '$43.00', 7.3, 'img/game3.png', 2, 2, 2, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Assassin`s Creed: Ody...', 'CDProject 2014', '$20.35', 9, 'img/game4.png', 4, 2, 2, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 'Borderlands 3', 'CDProject 2014', '$53.85', 7.3, 'img/game5.jpg', 3, 2, 1, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'Deus Ex: Mankind ...', 'Eidos Montreal', '$24.35', 8, 'img/Deus.jpg', 3, 1, 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(7, 'Minecraft', 'Mojang', '$14.00', 6.5, 'img/MIne.jpg', 4, 2, 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(8, 'Destiny', 'CDProject 2014', '$20.35', 8.2, 'img/Banner.png', 1, 2, 1, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(9, 'Cyberpunk', 'CDProject 2014', '$43.00', 8.7, 'img/Cyber.jpg', 4, 1, 2, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(32, 'Underlord', 'Valve', '$13.25', 7.2, '', 1, 2, 2, 1, 'There must been comment ');

-- --------------------------------------------------------

--
-- Структура таблиці `popularity`
--

CREATE TABLE `popularity` (
  `id_popularity` int(11) NOT NULL,
  `name_popularity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `popularity`
--

INSERT INTO `popularity` (`id_popularity`, `name_popularity`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Структура таблиці `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `settings`
--

INSERT INTO `settings` (`id`, `name`, `description`, `keywords`) VALUES
(1, 'GamingPageNew', 'This is new gaming platform', 'Game, platform, etc..');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`),
  ADD KEY `id_banner` (`id_banner`);

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_ca`),
  ADD KEY `id_ca` (`id_ca`);

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_game` (`id_game`(768));

--
-- Індекси таблиці `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id_console`),
  ADD KEY `id_console` (`id_console`);

--
-- Індекси таблиці `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ca` (`id_ca`),
  ADD KEY `id_popularity` (`id_popularity`),
  ADD KEY `id_banner` (`id_banner`),
  ADD KEY `id_console` (`id_console`);

--
-- Індекси таблиці `popularity`
--
ALTER TABLE `popularity`
  ADD PRIMARY KEY (`id_popularity`),
  ADD KEY `id_popularity` (`id_popularity`);

--
-- Індекси таблиці `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id_ca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблиці `console`
--
ALTER TABLE `console`
  MODIFY `id_console` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `games`
--
ALTER TABLE `games`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблиці `popularity`
--
ALTER TABLE `popularity`
  MODIFY `id_popularity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_ca`) REFERENCES `category` (`id_ca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`id_popularity`) REFERENCES `popularity` (`id_popularity`) ON UPDATE CASCADE,
  ADD CONSTRAINT `games_ibfk_3` FOREIGN KEY (`id_banner`) REFERENCES `banner` (`id_banner`) ON UPDATE CASCADE,
  ADD CONSTRAINT `games_ibfk_4` FOREIGN KEY (`id_console`) REFERENCES `console` (`id_console`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
