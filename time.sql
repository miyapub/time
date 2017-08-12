-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-22 10:40:10
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timemanager`
--

-- --------------------------------------------------------

--
-- 表的结构 `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `classes`
--

INSERT INTO `classes` (`id`, `title`) VALUES
(1, '学习'),
(2, '工作'),
(3, '阅读'),
(4, '休息'),
(5, '吃饭'),
(6, '购物'),
(7, '出行'),
(8, '聚会'),
(9, '开会'),
(10, '洗澡'),
(11, '亲子'),
(12, '其他'),
(13, '写作'),
(14, '打电话');

-- --------------------------------------------------------

--
-- 表的结构 `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `doing` varchar(300) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `who` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `times`
--

INSERT INTO `times` (`id`, `start`, `end`, `user_id`, `class_id`, `doing`, `address`, `who`) VALUES
(1, '2017-07-11 08:16:35', '0000-00-00 00:00:00', 0, 0, '', NULL, NULL),
(2, '2017-07-11 08:17:00', NULL, 1, 0, '', NULL, NULL),
(3, '2017-07-11 08:17:16', NULL, 1, 1, '', NULL, NULL),
(4, '2017-07-11 08:35:10', NULL, 3, 0, '', NULL, NULL),
(5, '2017-07-11 08:37:33', NULL, 3, 0, '', NULL, NULL),
(6, '2017-07-11 08:38:05', NULL, 3, 0, '', NULL, NULL),
(7, '2017-07-11 08:38:25', '2017-07-11 08:45:18', 3, 9, '产品会', '公司', '全体成员'),
(8, '2017-07-11 08:42:22', '0000-00-00 00:00:00', 3, 13, '你是个有前途的人嘛', '咖啡馆', '小丑鱼'),
(9, '2017-07-11 08:45:43', '2017-07-11 08:46:00', 3, 13, '这样开公司最有效', '公司', ''),
(10, '2017-07-11 08:50:48', '2017-07-11 08:51:06', 3, 2, '写代码', '公司', ''),
(11, '2017-07-11 08:57:24', NULL, 3, 0, '', NULL, NULL),
(12, '2017-07-18 09:07:19', '2017-07-18 09:07:36', 3, 9, '开会', '公司', ''),
(13, '2017-07-18 09:08:35', '2017-07-18 09:09:11', 3, 13, '奇葩', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `time`) VALUES
(1, 'author', '00990000', '2017-07-11 07:51:43'),
(2, 'author', '00990000', '2017-07-11 07:52:14'),
(3, '丑小鸭', '123456', '2017-07-11 07:54:26'),
(4, '大脸猫', '123456', '2017-07-11 07:54:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
