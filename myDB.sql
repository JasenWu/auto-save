-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-07-04 17:56:02
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `myDB`
--

-- --------------------------------------------------------

--
-- 表的结构 `MyGuests`
--

CREATE TABLE `MyGuests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `MyGuests`
--

INSERT INTO `MyGuests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'John', 'Doe', 'john@example.com', '2019-07-04 14:45:31'),
(2, 'John', 'Doe', 'john@example.com', '2019-07-04 14:50:52'),
(3, 'John', 'Doe', 'john@example.com', '2019-07-04 14:50:55'),
(4, 'John', 'Doe', 'john@example.com', '2019-07-04 14:50:58'),
(5, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:01'),
(6, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:04'),
(7, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:07'),
(8, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:10'),
(9, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:13'),
(10, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:16'),
(11, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:19'),
(12, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:22'),
(13, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:25'),
(14, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:28'),
(15, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:31'),
(16, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:34'),
(17, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:37'),
(18, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:40'),
(19, 'John', 'Doe', 'john@example.com', '2019-07-04 14:51:43'),
(20, 'John', 'Doe', 'john@example.com', '2019-07-04 14:55:52'),
(21, 'John_', 'Doe', 'john@example.com', '2019-07-04 15:09:51'),
(22, 'John_', 'Doe', 'john@example.com', '2019-07-04 15:09:54'),
(23, 'John_', 'Doe', 'john@example.com', '2019-07-04 15:09:57'),
(24, 'John_', 'Doe', 'john@example.com', '2019-07-04 15:10:00'),
(25, 'John____', 'Doe', 'john@example.com', '2019-07-04 15:49:19'),
(26, 'John____2', 'Doe', 'john@example.com', '2019-07-04 15:49:51'),
(27, 'John____3', 'Doe', 'john@example.com', '2019-07-04 15:49:54'),
(28, 'John____4', 'Doe', 'john@example.com', '2019-07-04 15:49:57'),
(29, 'John____5', 'Doe', 'john@example.com', '2019-07-04 15:50:00'),
(30, 'John____6', 'Doe', 'john@example.com', '2019-07-04 15:50:03'),
(31, 'John____7', 'Doe', 'john@example.com', '2019-07-04 15:50:06'),
(32, 'John____8', 'Doe', 'john@example.com', '2019-07-04 15:50:09'),
(33, 'John____9', 'Doe', 'john@example.com', '2019-07-04 15:50:12'),
(34, 'John____10', 'Doe', 'john@example.com', '2019-07-04 15:50:15'),
(35, 'John____11', 'Doe', 'john@example.com', '2019-07-04 15:52:27'),
(36, 'John____12', 'Doe', 'john@example.com', '2019-07-04 15:53:05'),
(37, 'John____13', 'Doe', 'john@example.com', '2019-07-04 15:53:08'),
(38, 'John____14', 'Doe', 'john@example.com', '2019-07-04 15:53:11'),
(39, 'John____15', 'Doe', 'john@example.com', '2019-07-04 15:53:14'),
(40, 'John____16', 'Doe', 'john@example.com', '2019-07-04 15:53:17'),
(41, 'John____17', 'Doe', 'john@example.com', '2019-07-04 15:53:20'),
(42, 'John____18', 'Doe', 'john@example.com', '2019-07-04 15:53:23'),
(43, 'John____19', 'Doe', 'john@example.com', '2019-07-04 15:53:26'),
(44, 'John____20', 'Doe', 'john@example.com', '2019-07-04 15:53:29'),
(45, 'John____21', 'Doe', 'john@example.com', '2019-07-04 15:53:32'),
(46, 'John____22', 'Doe', 'john@example.com', '2019-07-04 15:53:35'),
(47, 'John____23', 'Doe', 'john@example.com', '2019-07-04 15:53:38'),
(48, 'John____24', 'Doe', 'john@example.com', '2019-07-04 15:53:41'),
(49, 'John____25', 'Doe', 'john@example.com', '2019-07-04 15:53:44'),
(50, 'John____26', 'Doe', 'john@example.com', '2019-07-04 15:53:47'),
(51, 'John____27', 'Doe', 'john@example.com', '2019-07-04 15:53:50'),
(52, 'John____28', 'Doe', 'john@example.com', '2019-07-04 15:53:53'),
(53, 'John____29', 'Doe', 'john@example.com', '2019-07-04 15:53:56'),
(54, 'John____30', 'Doe', 'john@example.com', '2019-07-04 15:53:59'),
(55, 'John____31', 'Doe', 'john@example.com', '2019-07-04 15:54:02'),
(56, 'John____32', 'Doe', 'john@example.com', '2019-07-04 15:54:05'),
(57, 'John____33', 'Doe', 'john@example.com', '2019-07-04 15:54:08'),
(58, 'John____34', 'Doe', 'john@example.com', '2019-07-04 15:54:11'),
(59, 'John____35', 'Doe', 'john@example.com', '2019-07-04 15:54:14'),
(60, 'John____36', 'Doe', 'john@example.com', '2019-07-04 15:54:17'),
(61, 'John____37', 'Doe', 'john@example.com', '2019-07-04 15:54:20'),
(62, 'John____38', 'Doe', 'john@example.com', '2019-07-04 15:54:23'),
(63, 'John____39', 'Doe', 'john@example.com', '2019-07-04 15:54:26'),
(64, 'John____40', 'Doe', 'john@example.com', '2019-07-04 15:54:29'),
(65, 'John____41', 'Doe', 'john@example.com', '2019-07-04 15:54:32'),
(66, 'John____42', 'Doe', 'john@example.com', '2019-07-04 15:54:35'),
(67, 'John____43', 'Doe', 'john@example.com', '2019-07-04 15:54:38'),
(68, 'John____44', 'Doe', 'john@example.com', '2019-07-04 15:54:41'),
(69, 'John____45', 'Doe', 'john@example.com', '2019-07-04 15:54:44'),
(70, 'John____46', 'Doe', 'john@example.com', '2019-07-04 15:54:47'),
(71, 'John____47', 'Doe', 'john@example.com', '2019-07-04 15:54:50'),
(72, 'John____48', 'Doe', 'john@example.com', '2019-07-04 15:54:53'),
(73, 'John____49', 'Doe', 'john@example.com', '2019-07-04 15:54:56'),
(74, 'John____50', 'Doe', 'john@example.com', '2019-07-04 15:54:59'),
(75, 'John____51', 'Doe', 'john@example.com', '2019-07-04 15:55:02'),
(76, 'John____52', 'Doe', 'john@example.com', '2019-07-04 15:55:05'),
(77, 'John____53', 'Doe', 'john@example.com', '2019-07-04 15:55:08'),
(78, 'John____54', 'Doe', 'john@example.com', '2019-07-04 15:55:11'),
(79, 'John____55', 'Doe', 'john@example.com', '2019-07-04 15:55:14'),
(80, 'John____56', 'Doe', 'john@example.com', '2019-07-04 15:55:17'),
(81, 'John____57', 'Doe', 'john@example.com', '2019-07-04 15:55:20'),
(82, 'John____58', 'Doe', 'john@example.com', '2019-07-04 15:55:23'),
(83, 'John____59', 'Doe', 'john@example.com', '2019-07-04 15:55:26'),
(84, 'John____60', 'Doe', 'john@example.com', '2019-07-04 15:55:29'),
(85, 'John____61', 'Doe', 'john@example.com', '2019-07-04 15:55:32'),
(86, 'John____62', 'Doe', 'john@example.com', '2019-07-04 15:55:35'),
(87, 'John____63', 'Doe', 'john@example.com', '2019-07-04 15:55:38'),
(88, 'John____64', 'Doe', 'john@example.com', '2019-07-04 15:55:41');

--
-- 转储表的索引
--

--
-- 表的索引 `MyGuests`
--
ALTER TABLE `MyGuests`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `MyGuests`
--
ALTER TABLE `MyGuests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
