-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?12 �?17 �?12:23
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `message`
--

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `user`, `message`, `time`) VALUES
(1, 'admin', '保持对新生事物的关注，跟上时代的节奏', '2018-12-17 12:22:01'),
(2, 'admin', '成为可靠的人，能被人信任的人', '2018-12-17 12:22:11'),
(6, 'admin', '成为一个不断成长，不断进步的人', '2018-12-17 12:22:19'),
(7, 'admin', '成为一个大度有广阔胸襟的人', '2018-12-17 12:22:47'),
(8, 'admin2', '成为一个可以保护到周围的朋友、亲人的人', '2018-12-17 12:22:47'),
(9, 'admin2', '成为一个乐观积极向上的人', '2018-12-17 12:23:20'),
(10, 'admin3', '成为一个善良的，不会去害人的人', '2018-12-17 12:23:20');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(10) NOT NULL,
  `passwd` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user`, `passwd`) VALUES
('admin', 'admin'),
('admin2', '111111'),
('admin3', '111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
