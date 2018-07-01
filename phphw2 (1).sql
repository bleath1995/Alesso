-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-07-01 17:56:15
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
-- 資料表結構 `login_block`
--

CREATE TABLE `login_block` (
  `c_seq` int(10) UNSIGNED NOT NULL,
  `ll_ip` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ll_date` datetime NOT NULL,
  `ll_block` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `login_log`
--

CREATE TABLE `login_log` (
  `c_seq` int(10) UNSIGNED NOT NULL,
  `userid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ll_ip` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ll_date` datetime NOT NULL,
  `ll_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `my_account`
--

CREATE TABLE `my_account` (
  `a_seq` int(11) UNSIGNED NOT NULL,
  `userid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `right1` tinyint(1) NOT NULL,
  `right2` tinyint(1) NOT NULL,
  `right3` tinyint(1) NOT NULL,
  `right4` tinyint(1) NOT NULL,
  `pic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `my_account`
--

INSERT INTO `my_account` (`a_seq`, `userid`, `pwd`, `name`, `tel`, `abbr`, `admin`, `right1`, `right2`, `right3`, `right4`, `pic`, `store_id`) VALUES
(1, 'admin', '1234', 'admin管理者', '', '', 1, 1, 1, 1, 0, '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `my_account_log`
--

CREATE TABLE `my_account_log` (
  `a_seq` int(10) UNSIGNED NOT NULL,
  `m_userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_date` datetime NOT NULL,
  `ll_userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ll_admin` tinyint(1) NOT NULL,
  `ll_right1` tinyint(1) NOT NULL,
  `ll_right2` tinyint(1) NOT NULL,
  `ll_right3` tinyint(1) NOT NULL,
  `ll_right4` tinyint(1) NOT NULL,
  `ll_sql` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `my_food`
--

CREATE TABLE `my_food` (
  `f_seq` int(11) UNSIGNED NOT NULL,
  `f_food` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `login_block`
--
ALTER TABLE `login_block`
  ADD PRIMARY KEY (`c_seq`);

--
-- 資料表索引 `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`c_seq`);

--
-- 資料表索引 `my_account`
--
ALTER TABLE `my_account`
  ADD PRIMARY KEY (`a_seq`);

--
-- 資料表索引 `my_account_log`
--
ALTER TABLE `my_account_log`
  ADD PRIMARY KEY (`a_seq`);

--
-- 資料表索引 `my_food`
--
ALTER TABLE `my_food`
  ADD PRIMARY KEY (`f_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `login_block`
--
ALTER TABLE `login_block`
  MODIFY `c_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `c_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `my_account`
--
ALTER TABLE `my_account`
  MODIFY `a_seq` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `my_account_log`
--
ALTER TABLE `my_account_log`
  MODIFY `a_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `my_food`
--
ALTER TABLE `my_food`
  MODIFY `f_seq` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
