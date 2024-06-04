-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2024-06-04 04:17:10
-- 服务器版本： 8.3.0
-- PHP 版本： 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `releaf`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `rid` int NOT NULL,
  `biid` int NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `suggest_time` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ticket` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `blog_image`
--

DROP TABLE IF EXISTS `blog_image`;
CREATE TABLE IF NOT EXISTS `blog_image` (
  `biid` int NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bid` int NOT NULL,
  PRIMARY KEY (`biid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `itemid` int NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `context` text COLLATE utf8mb4_general_ci NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `event_history`
--

DROP TABLE IF EXISTS `event_history`;
CREATE TABLE IF NOT EXISTS `event_history` (
  `eid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `bid` int DEFAULT NULL,
  `yid` int DEFAULT NULL,
  `mid` int DEFAULT NULL,
  `wnid` int DEFAULT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `lid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `itemid` int NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `meditation`
--

DROP TABLE IF EXISTS `meditation`;
CREATE TABLE IF NOT EXISTS `meditation` (
  `mid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `rid` int NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `length` int NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `meditation_path`
--

DROP TABLE IF EXISTS `meditation_path`;
CREATE TABLE IF NOT EXISTS `meditation_path` (
  `mpid` int NOT NULL AUTO_INCREMENT,
  `mid` int NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `list_order` int NOT NULL,
  PRIMARY KEY (`mpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `star` double NOT NULL DEFAULT '0',
  `count` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `rate_check`
--

DROP TABLE IF EXISTS `rate_check`;
CREATE TABLE IF NOT EXISTS `rate_check` (
  `rcid` int NOT NULL AUTO_INCREMENT,
  `rid` int NOT NULL,
  `uid` int NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`rcid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `nickname` int NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user_setting`
--

DROP TABLE IF EXISTS `user_setting`;
CREATE TABLE IF NOT EXISTS `user_setting` (
  `usid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  PRIMARY KEY (`usid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `white_noise`
--

DROP TABLE IF EXISTS `white_noise`;
CREATE TABLE IF NOT EXISTS `white_noise` (
  `wnid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `rid` int NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `length` int NOT NULL,
  PRIMARY KEY (`wnid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `white_noise_path`
--

DROP TABLE IF EXISTS `white_noise_path`;
CREATE TABLE IF NOT EXISTS `white_noise_path` (
  `wnpid` int NOT NULL AUTO_INCREMENT,
  `wnid` int NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `list_order` int NOT NULL,
  PRIMARY KEY (`wnpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `yoga`
--

DROP TABLE IF EXISTS `yoga`;
CREATE TABLE IF NOT EXISTS `yoga` (
  `yid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `rid` int NOT NULL,
  `length` int NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`yid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `yoga_path`
--

DROP TABLE IF EXISTS `yoga_path`;
CREATE TABLE IF NOT EXISTS `yoga_path` (
  `ypid` int NOT NULL AUTO_INCREMENT,
  `yid` int NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `list_order` int NOT NULL,
  PRIMARY KEY (`ypid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
