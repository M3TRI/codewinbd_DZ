-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 02 2024 г., 04:05
-- Версия сервера: 10.6.18-MariaDB-0ubuntu0.22.04.1
-- Версия PHP: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dz`
--

CREATE TABLE `dz` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `siteimg` varchar(255) NOT NULL,
  `robots` varchar(255) NOT NULL,
  `sitemap` varchar(255) NOT NULL,
  `ssl` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `webserver` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `loadspeed` varchar(255) NOT NULL,
  `loadtime` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dz`
--

INSERT INTO `dz` (`id`, `name`, `description`, `keyword`, `favicon`, `siteimg`, `robots`, `sitemap`, `ssl`, `ip`, `country`, `webserver`, `image`, `loadspeed`, `loadtime`, `links`) VALUES
(1, 'ANIMIKU - Главная', 'Сервис онлайн просмотра аниме в русской озвучке с удобным интерфейсом как на компьютере, так и на мобильных устройствах.', 'Аниме, смотреть аниме онлайн, просмотр аниме, anime, смотреть аниме, аианиме, аианимеру, animiku.biz, аи аниме, ai-anime, аниме.ру', 'https://animiku.cc/templates/anime/images/logo.webp', 'https://screenshot.2ip.io/?url=animiku.cc', 'http://animiku.cc/robots.txt', 'http://animiku.cc/sitemap.xml', 'Найдена', '95.165.132.38', 'Russian Federation Россия', 'nginx/1.18.0 (ubuntu)', '40', '1198.00kb/s', '2.62s', 'внутренних: 187, внешних: 8');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dz`
--
ALTER TABLE `dz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dz`
--
ALTER TABLE `dz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
