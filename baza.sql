-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.33:3306
-- Время создания: Май 31 2021 г., 21:17
-- Версия сервера: 10.5.10-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `world5saas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `contains` longtext DEFAULT NULL,
  `front` varchar(256) NOT NULL,
  `top` varchar(256) NOT NULL,
  `bottom` varchar(256) NOT NULL,
  `side` varchar(256) NOT NULL,
  `lid_front` varchar(256) NOT NULL,
  `lid_top` varchar(256) NOT NULL,
  `lid_bottom` varchar(256) NOT NULL,
  `lid_side` varchar(256) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `is_free` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cases`
--

INSERT INTO `cases` (`id`, `name`, `contains`, `front`, `top`, `bottom`, `side`, `lid_front`, `lid_top`, `lid_bottom`, `lid_side`, `price`, `is_free`, `created_at`, `updated_at`) VALUES
(1, 'Бронзовый', '[{\"type\":\"2\",\"value\":\"8\",\"chance\":\"30\",\"rarity\":\"none\"},{\"type\":\"1\",\"value\":\"0.25\",\"chance\":\"20\",\"rarity\":\"green\"},{\"type\":\"1\",\"value\":\"0.5\",\"chance\":\"20\",\"rarity\":\"rare\"},\r\n{\"type\":\"1\",\"value\":\"1\",\"chance\":\"20\",\"rarity\":\"purple\"}]', '/img/case/bronze/front.jpg', '/img/case/template/top.png', '/img/case/bronze/bottom.jpg', '/img/case/bronze/side.jpg', '/img/case/bronze/lid_front.jpg', '/img/case/bronze/lid_top.jpg', '/img/case/bronze/bottom.jpg', '/img/case/bronze/lid_side.jpg', '0.00', 1, '2020-02-07 19:56:02', '2020-02-07 23:03:38'),
(2, 'Серебрянный', '[{\"type\":\"2\",\"value\":\"16\",\"chance\":\"55\",\"rarity\":\"none\"},{\"type\":\"1\",\"value\":\"0.15\",\"chance\":\"77\",\"rarity\":\"green\"},{\"type\":\"1\",\"value\":\"0.5\",\"chance\":\"60\",\"rarity\":\"rare\"},\r\n{\"type\":\"1\",\"value\":\"1.5\",\"chance\":\"10\",\"rarity\":\"orange\"}]', '/img/case/silver/front.jpg', '/img/case/template/top.png', '/img/case/silver/lid_bottom.jpg', '/img/case/silver/side.jpg', '/img/case/silver/lid_front.jpg', '/img/case/silver/lid_top.jpg', '/img/case/silver/lid_bottom.jpg', '/img/case/silver/lid_side.jpg', '0.30', 0, '2020-02-07 20:06:14', '2020-02-07 20:06:14'),
(3, 'Золотой', '[{\"type\":\"1\",\"value\":\"2\",\"chance\":\"76\",\"rarity\":\"green\"},{\"type\":\"1\",\"value\":\"7\",\"chance\":\"96\",\"rarity\":\"rare\"},\r\n{\"type\":\"1\",\"value\":\"15\",\"chance\":\"1\",\"rarity\":\"purple\"},{\"type\":\"1\",\"value\":\"20\",\"chance\":\"1\",\"rarity\":\"orange\"}]', '/img/case/gold/front.jpg', '/img/case/template/top.png', '/img/case/gold/lid_bottom.jpg', '/img/case/gold/side.jpg', '/img/case/gold/lid_front.jpg', '/img/case/gold/lid_top.jpg', '/img/case/gold/lid_bottom.jpg', '/img/case/gold/lid_side.jpg', '5.00', 0, '2020-02-07 20:13:30', '2020-02-07 20:13:30'),
(4, 'Синька', '[{\"type\":\"1\",\"value\":\"10\",\"chance\":\"101\",\"rarity\":\"rare\"},{\"type\":\"1\",\"value\":\"15\",\"chance\":\"0\",\"rarity\":\"purple\"},{\"type\":\"1\",\"value\":\"45\",\"chance\":\"0\",\"rarity\":\"purple\"},{\"type\":\"1\",\"value\":\"75\",\"chance\":\"0\",\"rarity\":\"orange\"}]', '/img/case/blue/front.jpg', '/img/case/template/top.png', '/img/case/blue/lid_bottom.jpg', '/img/case/blue/side.jpg', '/img/case/blue/lid_front.jpg', '/img/case/blue/lid_top.jpg', '/img/case/blue/lid_bottom.jpg', '/img/case/blue/lid_side.jpg', '30.00', 0, '2020-02-07 20:19:42', '2020-02-07 20:19:42'),
(5, 'Зелёнка', '[{\"type\":\"1\",\"value\":\"15\",\"chance\":\"101\",\"rarity\":\"rare\"},{\"type\":\"1\",\"value\":\"30\",\"chance\":\"0\",\"rarity\":\"purple\"},{\"type\":\"1\",\"value\":\"60\",\"chance\":\"0\",\"rarity\":\"orange\"},{\"type\":\"1\",\"value\":\"100\",\"chance\":\"0\",\"rarity\":\"orange\"}]', '/img/case/green/front.jpg', '/img/case/template/top.png', '/img/case/green/lid_bottom.jpg', '/img/case/green/side.jpg', '/img/case/green/lid_front.jpg', '/img/case/green/lid_top.jpg', '/img/case/green/lid_bottom.jpg', '/img/case/green/lid_side.jpg', '45.00', 0, '2020-02-07 20:19:42', '2020-02-07 20:19:42'),
(6, 'Победный', '[{\"type\":\"1\",\"value\":\"75\",\"chance\":\"101\",\"rarity\":\"rare\"},{\"type\":\"1\",\"value\":\"175\",\"chance\":\"0\",\"rarity\":\"purple\"},{\"type\":\"1\",\"value\":\"350\",\"chance\":\"0\",\"rarity\":\"orange\"},{\"type\":\"1\",\"value\":\"800\",\"chance\":\"0\",\"rarity\":\"orange\"}]', '/img/case/platinum/front.jpg', '/img/case/template/top.png', '/img/case/platinum/lid_bottom.jpg', '/img/case/platinum/side.jpg', '/img/case/platinum/lid_front.jpg', '/img/case/platinum/lid_top.jpg', '/img/case/platinum/lid_bottom.jpg', '/img/case/platinum/lid_side.jpg', '150.00', 0, '2020-02-07 20:19:42', '2020-02-07 20:19:42');

-- --------------------------------------------------------

--
-- Структура таблицы `filtered_words`
--

CREATE TABLE `filtered_words` (
  `id` int(11) NOT NULL,
  `word` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `filtered_words`
--

INSERT INTO `filtered_words` (`id`, `word`, `created_at`, `updated_at`) VALUES
(1, 'http', '2020-03-03 16:42:21', '2020-03-03 16:42:21'),
(2, 'winbee', '2020-03-03 16:42:33', '2020-03-03 16:42:33'),
(3, 'наёб', '2020-03-03 16:42:39', '2020-03-03 16:42:39'),
(4, 'scam', '2020-03-03 16:42:55', '2020-03-03 16:42:55'),
(5, 'плей2х', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(6, 'play2x', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(7, 'хуйня', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(8, 'пиздец', '2020-03-03 16:42:21', '2020-03-03 16:42:21'),
(9, 'хуй', '2020-03-03 16:42:33', '2020-03-03 16:42:33'),
(10, 'мудак', '2020-03-03 16:42:39', '2020-03-03 16:42:39'),
(11, 'гондон', '2020-03-03 16:42:55', '2020-03-03 16:42:55'),
(12, 'гандон', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(13, 'гавно', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(14, 'говно', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(15, 'блять', '2020-03-03 16:42:21', '2020-03-03 16:42:21'),
(16, 'скам', '2020-03-03 16:42:33', '2020-03-03 16:42:33'),
(17, 'наеб', '2020-03-03 16:42:39', '2020-03-03 16:42:39'),
(18, 'scaam', '2020-03-03 16:42:55', '2020-03-03 16:42:55'),
(19, 'xyz', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(20, 'play2x', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(21, 'хуйня', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(22, 'пиздец', '2020-03-03 16:42:21', '2020-03-03 16:42:21'),
(23, 'хуй', '2020-03-03 16:42:33', '2020-03-03 16:42:33'),
(24, 'мудак', '2020-03-03 16:42:39', '2020-03-03 16:42:39'),
(25, 'гондон', '2020-03-03 16:42:55', '2020-03-03 16:42:55'),
(26, 'гандон', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(27, 'гавно', '2020-03-05 16:50:50', '2020-03-05 16:50:50'),
(28, 'говно', '2020-03-05 16:50:50', '2020-03-05 16:50:50');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `bet` decimal(13,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `cell_1` decimal(13,2) DEFAULT NULL,
  `cell_2` decimal(13,2) DEFAULT NULL,
  `cell_3` decimal(13,2) DEFAULT NULL,
  `cell_4` varchar(1500) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `win` decimal(13,2) DEFAULT NULL,
  `may_win` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `game_id` int(11) NOT NULL DEFAULT 0,
  `multiplier` decimal(13,2) DEFAULT NULL,
  `server_seed` varchar(64) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `demo` tinyint(2) NOT NULL DEFAULT 0,
  `history` varchar(1000) NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `global_promocodes`
--

CREATE TABLE `global_promocodes` (
  `id` int(11) NOT NULL,
  `code` varchar(256) CHARACTER SET latin1 NOT NULL,
  `usages` int(11) NOT NULL,
  `sum` decimal(13,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` int(11) NOT NULL DEFAULT 0,
  `tick` tinyint(2) NOT NULL DEFAULT 0,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `read_status` tinyint(4) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` varchar(7000) NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `amount` decimal(13,2) NOT NULL,
  `user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `type` varchar(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `promocodes`
--

CREATE TABLE `promocodes` (
  `id` int(11) NOT NULL,
  `code` varchar(121) NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `promo_bot_list`
--

CREATE TABLE `promo_bot_list` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL DEFAULT '',
  `avatar` varchar(512) NOT NULL DEFAULT '',
  `vk_public` varchar(256) NOT NULL DEFAULT '',
  `vk_id` int(11) NOT NULL,
  `tutorial` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `namesite` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(451) CHARACTER SET cp1251 NOT NULL,
  `vk_url` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `telegram_url` varchar(65) NOT NULL,
  `techworks` tinyint(2) NOT NULL DEFAULT 0,
  `build` tinyint(2) NOT NULL DEFAULT 0,
  `system_key` varchar(20) NOT NULL DEFAULT '123',
  `support_email` varchar(256) DEFAULT NULL,
  `chance` int(11) NOT NULL,
  `yt_chance` int(11) NOT NULL,
  `promo_sum` decimal(13,2) NOT NULL,
  `promo_percent` int(11) NOT NULL,
  `fk_id` int(11) NOT NULL,
  `fk_secret1` varchar(8) NOT NULL,
  `fk_secret2` varchar(8) NOT NULL,
  `min_bet` int(11) NOT NULL,
  `min_with` int(11) NOT NULL,
  `warn_enabled` tinyint(2) NOT NULL DEFAULT 0,
  `warn_title` varchar(4000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `warn_text` varchar(4000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `slide_enabled` tinyint(2) NOT NULL DEFAULT 0,
  `slider` int(2) NOT NULL,
  `slide_title` varchar(4000) CHARACTER SET utf8 NOT NULL,
  `slide_text` varchar(4000) CHARACTER SET utf8 NOT NULL,
  `wheel_green` int(11) NOT NULL DEFAULT 0,
  `wheel_redblack` int(11) NOT NULL DEFAULT 0,
  `crash_s` int(11) NOT NULL DEFAULT 0,
  `crash_m` int(11) NOT NULL DEFAULT 0,
  `crash_b` int(11) NOT NULL DEFAULT 0,
  `mines_a` int(11) NOT NULL DEFAULT 0,
  `mines_b` int(11) NOT NULL DEFAULT 0,
  `dice` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `crash_h` int(11) NOT NULL DEFAULT -1,
  `crash_u` int(11) NOT NULL DEFAULT -1,
  `tower_1` int(11) NOT NULL DEFAULT 0,
  `tower_2` int(11) NOT NULL DEFAULT 0,
  `tower_3` int(11) NOT NULL DEFAULT 0,
  `tower_4` int(11) NOT NULL DEFAULT 0,
  `tower_5` int(11) NOT NULL DEFAULT 0,
  `tower_6` int(11) DEFAULT 0,
  `tower_7` int(11) NOT NULL DEFAULT 0,
  `tower_8` int(11) NOT NULL DEFAULT 0,
  `tower_9` int(11) NOT NULL DEFAULT 0,
  `tower_10` int(11) NOT NULL DEFAULT 0,
  `roulette` int(11) NOT NULL DEFAULT 0,
  `roulette_2` int(11) NOT NULL DEFAULT 0,
  `roulette_3` int(11) NOT NULL DEFAULT 0,
  `stairs_1` int(11) NOT NULL DEFAULT 0,
  `stairs_2` int(11) NOT NULL DEFAULT 0,
  `stairs_3` int(11) NOT NULL DEFAULT 0,
  `stairs_4` int(11) NOT NULL DEFAULT 0,
  `stairs_5` int(11) NOT NULL DEFAULT 0,
  `stairs_6` int(11) NOT NULL DEFAULT 0,
  `stairs_7` int(11) NOT NULL DEFAULT 0,
  `stairs_8` int(11) NOT NULL DEFAULT 0,
  `stairs_9` int(11) NOT NULL DEFAULT 0,
  `stairs_10` int(11) NOT NULL DEFAULT 0,
  `stairs_11` int(11) NOT NULL DEFAULT 0,
  `stairs_12` int(11) NOT NULL DEFAULT 0,
  `stairs_13` int(11) NOT NULL DEFAULT 0,
  `coinflip` int(11) NOT NULL DEFAULT 0,
  `hilo` int(11) NOT NULL DEFAULT 0,
  `messages_secret` varchar(256) DEFAULT NULL,
  `temp_promo_sum` decimal(13,2) NOT NULL DEFAULT 0.45,
  `ap_id` int(11) NOT NULL DEFAULT 1,
  `ap_secret` varchar(64) NOT NULL DEFAULT '1',
  `payment_disabled` tinyint(2) NOT NULL DEFAULT 0,
  `ap_api_key` varchar(64) NOT NULL DEFAULT '1',
  `ap_api_id` varchar(64) NOT NULL DEFAULT '1',
  `max_bet_increase` int(11) NOT NULL,
  `min_in` int(11) NOT NULL DEFAULT 1,
  `vk_service` varchar(256) NOT NULL DEFAULT '',
  `game_fake` int(2) NOT NULL DEFAULT 0,
  `time_fake` int(11) NOT NULL DEFAULT 10,
  `realtime_fake` int(121) NOT NULL DEFAULT 0,
  `chat_fake` int(2) NOT NULL DEFAULT 0,
  `realtime_chat_fake` int(121) NOT NULL DEFAULT 0,
  `time_chat_fake` tinyint(12) NOT NULL,
  `live_fake` int(2) NOT NULL DEFAULT 0,
  `realtime_live_fake` int(121) NOT NULL DEFAULT 0,
  `withdraw_fake` int(2) NOT NULL DEFAULT 0,
  `withdraw_time_fake` tinyint(121) NOT NULL DEFAULT 0,
  `realtime_withdraw_fake` int(121) NOT NULL DEFAULT 0,
  `fakesumwithdraw` int(121) NOT NULL DEFAULT 0,
  `fakesumusers` varchar(112) NOT NULL,
  `fakeonline_games` varchar(12) NOT NULL,
  `google_client_id` varchar(100) DEFAULT NULL,
  `google_client_secret` varchar(100) DEFAULT NULL,
  `facebook_client_id` varchar(100) DEFAULT NULL,
  `facebook_client_secret` varchar(100) DEFAULT NULL,
  `vk_client_id` varchar(100) DEFAULT NULL,
  `vk_client_secret` varchar(100) DEFAULT NULL,
  `minfakebet` varchar(100) DEFAULT NULL,
  `maxfakebet` varchar(100) DEFAULT NULL,
  `min_withdraw_dep` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `namesite`, `keywords`, `vk_url`, `telegram_url`, `techworks`, `build`, `system_key`, `support_email`, `chance`, `yt_chance`, `promo_sum`, `promo_percent`, `fk_id`, `fk_secret1`, `fk_secret2`, `min_bet`, `min_with`, `warn_enabled`, `warn_title`, `warn_text`, `slide_enabled`, `slider`, `slide_title`, `slide_text`, `wheel_green`, `wheel_redblack`, `crash_s`, `crash_m`, `crash_b`, `mines_a`, `mines_b`, `dice`, `updated_at`, `created_at`, `crash_h`, `crash_u`, `tower_1`, `tower_2`, `tower_3`, `tower_4`, `tower_5`, `tower_6`, `tower_7`, `tower_8`, `tower_9`, `tower_10`, `roulette`, `roulette_2`, `roulette_3`, `stairs_1`, `stairs_2`, `stairs_3`, `stairs_4`, `stairs_5`, `stairs_6`, `stairs_7`, `stairs_8`, `stairs_9`, `stairs_10`, `stairs_11`, `stairs_12`, `stairs_13`, `coinflip`, `hilo`, `messages_secret`, `temp_promo_sum`, `ap_id`, `ap_secret`, `payment_disabled`, `ap_api_key`, `ap_api_id`, `max_bet_increase`, `min_in`, `vk_service`, `game_fake`, `time_fake`, `realtime_fake`, `chat_fake`, `realtime_chat_fake`, `time_chat_fake`, `live_fake`, `realtime_live_fake`, `withdraw_fake`, `withdraw_time_fake`, `realtime_withdraw_fake`, `fakesumwithdraw`, `fakesumusers`, `fakeonline_games`, `google_client_id`, `google_client_secret`, `facebook_client_id`, `facebook_client_secret`, `vk_client_id`, `vk_client_secret`, `minfakebet`, `maxfakebet`, `min_withdraw_dep`) VALUES
(1, 'Bets Play2x', 'steel, roll2won, opcash, battlecash,battle,crash,jackpot,pvp,wheel,nvuti.dice, Заработок денег, Игры онлайн.', 'bets.play2x', '@BetsPlay2x', 0, 0, 'tpu356rca881', 'support@mail.ri', 32, 55, '10.00', 5, 172961, '123', '123', 1, 150, 0, 'Технические работы', 'Bets Play2X может быть временно недоступен, пока сайт проходит плановое обслуживание.', 1, 1, 'БЕСПЛАТНЫЙ БОНУС', 'ПРОМОКОД - R9EDUO', 1, 100, 70, 80, 90, 45, 40, 55, '2021-05-06 02:03:25', '2020-01-06 18:20:24', 99, 100, 2, 4, 5, 7, 12, 14, 15, 76, 80, 97, 95, 36, 36, 80, 67, 63, 53, 30, 25, 23, 20, 17, 15, 13, 10, 5, 35, 33, 'c7b2d3f42cf53fd0e5b374e4eeb551299e0ee17377ac7058594353461aae94f1a927a8c8a2828b8976dad', '10.00', 181437, '1mhpwrjo', 0, '2r98dde9', '123', 4000, 1, 'f3eff310f3eff310f3eff31940f5019d100f3e0f3eff31504befb72b9a69895a3a2a37', 1, 3, 1620255805, 1, 1620255805, 2, 1, 1620255805, 1, 25, 1620255796, 389684329, '682415', '36', '208094193763-1rdct8pgob6hqlv2nv5nok84u5km6el7.apps.googleusercontent.com', '5kaT1OL7w5jH32SZGhzl-PEr', '285631152422904', 'd8f4493db2e17971f7735136f30c2f0a', '7268064', 'db8E1eFvGqeFdM10e2ro', '1', '57', 200);

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `json` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `active` int(2) NOT NULL,
  `game_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `reward` decimal(13,2) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT '2016-11-08 21:32:40.000000',
  `updated_at` timestamp(6) NOT NULL DEFAULT '2016-11-08 21:32:40.000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `sum` decimal(13,2) NOT NULL,
  `type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` varchar(256) DEFAULT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL,
  `login` varchar(256) DEFAULT NULL,
  `money` decimal(13,2) NOT NULL DEFAULT 0.00,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `is_yt` int(11) NOT NULL DEFAULT 0,
  `ref_code` varchar(256) NOT NULL,
  `ref_use` varchar(256) DEFAULT NULL,
  `open_box` int(255) NOT NULL DEFAULT 0,
  `win` int(255) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `login2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bonus_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '2016-11-08 19:43:23',
  `deposit` int(11) NOT NULL DEFAULT 0,
  `nick` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `ban_support` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `vk_bonus` tinyint(1) NOT NULL DEFAULT 0,
  `latest_bonus_claim` int(11) NOT NULL DEFAULT 0,
  `gp_used` varchar(2048) NOT NULL DEFAULT '[]',
  `chat_role` int(11) NOT NULL DEFAULT 0,
  `is_chat_banned` tinyint(2) NOT NULL DEFAULT 0,
  `chat_total_bans` int(11) NOT NULL DEFAULT 0,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `client_seed` varchar(64) DEFAULT NULL,
  `email_confirmed` tinyint(2) NOT NULL DEFAULT 0,
  `email_confirm_hash` varchar(64) DEFAULT NULL,
  `email_notification` varchar(14) NOT NULL DEFAULT '0',
  `tasks_completed` varchar(1500) NOT NULL DEFAULT '[]',
  `task_tries` varchar(2048) NOT NULL DEFAULT '[]',
  `time` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `exp` int(11) NOT NULL DEFAULT 0,
  `ref_in_used` varchar(1500) NOT NULL DEFAULT '[]',
  `ref_wheel_used` varchar(1500) NOT NULL DEFAULT '[]',
  `global_ban` tinyint(2) NOT NULL DEFAULT 0,
  `mute` int(11) NOT NULL DEFAULT 0,
  `tp_used` int(11) NOT NULL DEFAULT 0,
  `tp_reset` int(11) NOT NULL DEFAULT 0,
  `free_case_time` int(11) NOT NULL DEFAULT 0,
  `achievements` varchar(10000) NOT NULL DEFAULT '[]',
  `notify_bonus` tinyint(2) NOT NULL DEFAULT 0,
  `welcome_notification` tinyint(2) NOT NULL DEFAULT 0,
  `latest_event_time` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `avatar`, `login`, `money`, `is_admin`, `is_yt`, `ref_code`, `ref_use`, `open_box`, `win`, `remember_token`, `login2`, `bonus_time`, `deposit`, `nick`, `uid`, `ban_support`, `created_at`, `updated_at`, `vk_bonus`, `latest_bonus_claim`, `gp_used`, `chat_role`, `is_chat_banned`, `chat_total_bans`, `email`, `password`, `client_seed`, `email_confirmed`, `email_confirm_hash`, `email_notification`, `tasks_completed`, `task_tries`, `time`, `level`, `exp`, `ref_in_used`, `ref_wheel_used`, `global_ban`, `mute`, `tp_used`, `tp_reset`, `free_case_time`, `achievements`, `notify_bonus`, `welcome_notification`, `latest_event_time`) VALUES
(1, 'amsmx', '/avatar/6055dcc6c1158', 'amsmx', '19.32', 1, 0, '15433075', NULL, 0, 0, '2sbeInVMFMuoNOEkUKvM2nRIBxUGzZkHTIqCaMOaw6snEwpzUpNBhyfkGNoF', 'amsmx', '2016-11-08 19:43:23', 100000, '6b7bb1a120135fdb', '6055dcc69078a', 0, '2021-05-31 21:17:10', '2021-05-06 00:05:00', 0, 1616308161, '[]', 3, 0, 0, 'ams@mail.ru', '494d0b8a90c0084a75e1c280a7cc9ad5', '1f101c1543293aa25cc707586aa133', 1, '86521ea07286212b4c2b1a49f90dd1', '0', '[]', '[]', 1616239814, 4, 186, '[]', '[]', 0, 0, 0, 0, 1618401115, '{\"0\":{\"id\":18,\"p\":1},\"1\":{\"id\":14,\"time\":1616424691},\"2\":{\"id\":1,\"time\":1616690761},\"223\":{\"id\":39,\"time\":1616694535},\"488\":{\"id\":36,\"time\":1616694738},\"1230\":{\"id\":33,\"p\":8},\"1231\":{\"id\":34,\"p\":8},\"1232\":{\"id\":35,\"p\":8},\"1687\":{\"id\":8,\"p\":1},\"1692\":{\"id\":21,\"p\":8},\"1693\":{\"id\":24,\"p\":1},\"1696\":{\"id\":30,\"p\":3},\"1719\":{\"id\":37,\"p\":134},\"1720\":{\"id\":38,\"p\":134},\"1728\":{\"id\":5,\"p\":21},\"1729\":{\"id\":6,\"p\":21},\"1730\":{\"id\":7,\"p\":21},\"1735\":{\"id\":45,\"p\":3},\"1736\":{\"id\":46,\"p\":3},\"1737\":{\"id\":47,\"p\":3},\"1974\":{\"id\":40,\"p\":102},\"1975\":{\"id\":41,\"p\":102},\"1984\":{\"id\":2,\"p\":676},\"1985\":{\"id\":3,\"p\":676}}', 0, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `system` varchar(256) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `wallet` varchar(25) CHARACTER SET utf8 NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filtered_words`
--
ALTER TABLE `filtered_words`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `global_promocodes`
--
ALTER TABLE `global_promocodes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promo_bot_list`
--
ALTER TABLE `promo_bot_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `filtered_words`
--
ALTER TABLE `filtered_words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `global_promocodes`
--
ALTER TABLE `global_promocodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `promo_bot_list`
--
ALTER TABLE `promo_bot_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=630;

--
-- AUTO_INCREMENT для таблицы `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
