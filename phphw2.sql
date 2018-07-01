-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-25 23:48:27
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phphw2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `close_list`
--

CREATE TABLE `close_list` (
  `b_l_seq` int(10) UNSIGNED NOT NULL,
  `b_l_ip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_l_t1` datetime NOT NULL,
  `b_l_t2` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `lo_seq` int(11) UNSIGNED NOT NULL,
  `lo_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_type` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `login`
--

INSERT INTO `login` (`lo_seq`, `lo_id`, `lo_pw`, `lo_name`, `lo_tel`, `lo_con`, `lo_type`) VALUES
(1, 'admin', '1234', '123', '', '', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `situation`
--

CREATE TABLE `situation` (
  `l_seq` int(10) UNSIGNED NOT NULL,
  `l_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_bo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_time` datetime NOT NULL,
  `l_ip` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `situation`
--

INSERT INTO `situation` (`l_seq`, `l_id`, `l_bo`, `l_time`, `l_ip`) VALUES
(1, 'admin', '1', '2018-06-25 21:13:19', '::1'),
(2, 'admin', '1', '2018-06-25 21:13:58', '::1'),
(3, 'admin', '1', '2018-06-25 21:14:08', '::1'),
(4, 'admin', '0', '2018-06-25 21:19:05', '::1'),
(5, 'admin', '0', '2018-06-25 21:25:46', '::1'),
(6, 'admin', '0', '2018-06-25 21:26:48', '::1'),
(7, 'admin', '1', '2018-06-25 21:27:41', '::1'),
(8, 'admin', '1', '2018-06-25 21:28:37', '::1'),
(9, 'admin', '1', '2018-06-25 21:28:50', '::1'),
(10, 'admin', '1', '2018-06-25 21:30:00', '::1'),
(11, 'admin', '1', '2018-06-25 21:31:47', '::1'),
(12, 'admin', '1', '2018-06-25 21:34:49', '::1'),
(13, 'admin', '1', '2018-06-25 21:36:26', '::1'),
(14, 'admin', '0', '2018-06-25 21:43:17', '::1'),
(15, 'admin', '1', '2018-06-25 21:43:31', '::1'),
(16, 'admin', '0', '2018-06-25 21:43:42', '::1'),
(17, 'admin', '0', '2018-06-25 22:10:55', '::1'),
(18, 'admin', '0', '2018-06-25 22:19:59', '::1'),
(19, 'admin', '0', '2018-06-25 22:22:32', '::1'),
(20, 'admin', '0', '2018-06-25 22:24:56', '::1'),
(21, 'admin', '0', '2018-06-25 22:25:06', '::1'),
(22, 'admin', '0', '2018-06-25 22:39:21', '::1'),
(23, 'admin', '0', '2018-06-25 22:43:15', '::1'),
(24, 'admin', '0', '2018-06-25 22:44:31', '::1'),
(25, 'admin', '0', '2018-06-26 05:39:06', '::1');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `close_list`
--
ALTER TABLE `close_list`
  ADD PRIMARY KEY (`b_l_seq`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lo_seq`);

--
-- 資料表索引 `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`l_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `close_list`
--
ALTER TABLE `close_list`
  MODIFY `b_l_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `login`
--
ALTER TABLE `login`
  MODIFY `lo_seq` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `situation`
--
ALTER TABLE `situation`
  MODIFY `l_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
