-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 04:33 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COSC`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subject`, `description`, `deleted`, `username`, `cd`) VALUES
(3, 'php', 'good', 0, 'ali', '2017-11-07 05:00:00'),
(7, 'hi', 'a like this website', 0, 'q', '2017-11-10 05:00:00'),
(8, 'hellow ', 'baby', 0, 'q', '0000-00-00 00:00:00'),
(9, 'sssssss', 'wwwwwww', 1, 'hussan', '0000-00-00 00:00:00'),
(10, 'hi', 'hussan', 0, 'm3tsem', '0000-00-00 00:00:00'),
(15, 'hla', 'hussan', 0, 'hussan', '0000-00-00 00:00:00'),
(16, 'test', 'web', 0, 'hussan', '0000-00-00 00:00:00'),
(17, 'yes', 'no', 0, 'hussan', '0000-00-00 00:00:00'),
(18, 'aaass', 'ddddd', 0, 'hussan', '2017-11-27 08:02:38'),
(20, 'sssssss', 'ddddddddd', 0, 'hussan', '2017-11-27 08:03:22'),
(21, 'dddd', 'fff', 0, 'hussan', '2017-11-27 08:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `role` int(255) NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`role`, `permission`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `personalDetails`
--

CREATE TABLE `personalDetails` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personalDetails`
--

INSERT INTO `personalDetails` (`id`, `firstname`, `lastname`, `phonenumber`, `birthdate`, `timedate`, `username`, `emailaddress`) VALUES
(9, '', '', 0, '0000-00-00', '2017-11-26 20:18:58', 'hussan', ''),
(10, '', '', 222222222, '0000-00-00', '2017-11-26 20:19:08', 'hussan', ''),
(11, 'hussan', 'alsaylani', 222222222, '2017-11-01', '2017-11-26 20:22:46', 'hussan', ''),
(12, 'hussan', 'alsaylani', 222222222, '2017-11-01', '2017-11-26 20:23:37', 'hussan', ''),
(15, 'hussn', 'alsaylni', 1, '0000-00-00', '2017-11-26 20:28:21', 'hussan', 'has@mail.com'),
(16, 'hussn', 'alsaylni', 1, '0000-00-00', '2017-11-26 20:51:07', 'hussan', 'has@mail.com'),
(17, 'hussn', 'alsaylni', 1, '0000-00-00', '2017-11-26 20:54:25', 'hussan', 'has@mail.com'),
(18, 'hussn', 'alsaylni', 1, '0000-00-00', '2017-11-26 20:56:53', 'hussan', 'has@mail.com'),
(25, '', '', 0, '0000-00-00', '2017-11-26 21:35:01', 'hussan', ''),
(26, 'hussan', 'alsaylani', 222222222, '1996-10-14', '2017-11-26 21:35:36', 'hussan', 'ha@mw'),
(30, 'abo', 'fz', 222222222, '2017-11-06', '2017-11-26 21:39:00', 'hussan', 'ha@mw'),
(41, 'bb', 'dd', 1, '2017-11-26', '2017-11-27 05:41:20', 'hussan', 'ha,ail'),
(46, 'hussan', 'alsaylani', 1111111111, '2017-11-13', '2017-11-27 06:02:39', 'hussan', 'hasooo7t@hotmail.com'),
(47, 'hussan', 'alsaylani', 1111111111, '2017-11-13', '2017-11-27 06:03:40', 'hussan', 'hasooo7t@hotmail.com'),
(48, 'hussan', 'alsaylani', 22, '2017-11-13', '2017-11-27 06:04:03', 'hussan', 'hasooo7t@hotmail.com'),
(49, 'hussan', 'alsaylani', 22, '2017-11-13', '2017-11-27 06:04:27', 'hussan', 'hasooo7t@hotmail.com'),
(50, 'hussan', 'alsaylani', 222234, '2017-11-20', '2017-11-27 06:04:41', 'hussan', 'hasooo7t@hotmail.com'),
(51, 'hussan', 'alsaylani', 3333333, '1985-11-07', '2017-11-27 06:55:28', 'hussan', 'hasooo7t@hotmail.com'),
(52, 'hussan', 'alsaylani', 334342334, '1983-11-06', '2017-11-27 07:01:06', 'hussan', 'hasooo7t@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tuition`
--

CREATE TABLE `tuition` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ipaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `islogin` int(255) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuition`
--

INSERT INTO `tuition` (`id`, `username`, `ipaddress`, `islogin`, `timedate`, `count`) VALUES
(23, 'alsaylani', '1270', 1, '2017-11-18 04:49:03', 0),
(24, 'alsaylani', '127.0.0.1', 1, '2017-11-18 04:49:03', 0),
(25, 'alsaylani', '127.0.0.1', 1, '2017-11-18 06:56:57', 0),
(26, 'hussan', '127.0.0.1', 1, '2017-11-18 07:20:26', 0),
(27, 'hussan', '127.0.0.1', 0, '2017-11-18 08:28:22', 0),
(28, 'hussan', '127.0.0.1', 1, '2017-11-18 08:41:10', 0),
(29, 'hussan', '127.0.0.1', 0, '2017-11-18 09:02:57', 0),
(30, 'hussan', '127.0.0.1', 1, '2017-11-18 09:11:30', 0),
(31, 'hussan', '127.0.0.1', 0, '2017-11-18 09:16:13', 0),
(32, 'hussan', '127.0.0.1', 1, '2017-11-19 23:56:54', 0),
(37, 'hussan', '127.0.0.1', 0, '2017-11-20 00:09:01', 0),
(38, 'hussan', '127.0.0.1', 1, '2017-11-20 00:09:07', 0),
(39, 'hussan', '127.0.0.1', 0, '2017-11-20 00:59:41', 0),
(47, 'hussan', '127.0.0.1', 0, '2017-11-20 01:30:00', 0),
(48, 'ali', '127.0.0.1', 1, '2017-11-20 01:30:06', 0),
(49, 'ali', '127.0.0.1', 0, '2017-11-20 01:30:18', 0),
(50, 'alsaylani', '127.0.0.1', 1, '2017-11-20 01:30:23', 0),
(51, 'alsaylani', '127.0.0.1', 0, '2017-11-20 01:30:28', 0),
(52, 'hussan', '127.0.0.1', 1, '2017-11-20 01:30:33', 0),
(53, 'hussan', '127.0.0.1', 0, '2017-11-20 01:53:02', 0),
(54, 'hussan', '127.0.0.1', 1, '2017-11-20 01:53:32', 0),
(55, 'hussan', '127.0.0.1', 0, '2017-11-20 01:53:34', 0),
(56, 'hussan', '127.0.0.1', 1, '2017-11-20 01:54:30', 0),
(57, 'hussan', '127.0.0.1', 0, '2017-11-20 01:56:47', 0),
(58, 'hussan', '127.0.0.1', 1, '2017-11-20 01:56:58', 0),
(59, 'hussan', '127.0.0.1', 0, '2017-11-20 01:59:18', 0),
(60, 'hussan12121212', '127.0.0.1', 1, '2017-11-20 01:59:33', 0),
(61, 'hussan', '127.0.0.1', 1, '2017-11-20 01:59:39', 0),
(62, 'hussan', '127.0.0.1', 0, '2017-11-20 02:00:15', 0),
(63, 'hussan', '127.0.0.1', 1, '2017-11-20 02:00:29', 0),
(64, 'hussan', '127.0.0.1', 0, '2017-11-20 02:00:36', 0),
(65, 'hussan', '127.0.0.1', 1, '2017-11-20 02:06:56', 0),
(66, 'hussan', '127.0.0.1', 0, '2017-11-20 02:07:25', 0),
(67, 'hussan', '127.0.0.1', 1, '2017-11-20 03:30:52', 0),
(68, 'hussan', '127.0.0.1', 0, '2017-11-20 03:35:19', 0),
(69, 'alsaylani', '127.0.0.1', 1, '2017-11-20 03:35:48', 0),
(70, 'alsaylani', '127.0.0.1', 0, '2017-11-20 03:38:44', 0),
(71, 'hussan', '127.0.0.1', 1, '2017-11-20 03:39:59', 0),
(72, 'hussan', '127.0.0.1', 0, '2017-11-20 03:43:55', 0),
(73, 'hussan', '127.0.0.1', 1, '2017-11-20 03:44:56', 0),
(74, 'hussan', '127.0.0.1', 0, '2017-11-20 03:45:04', 0),
(75, 'hussan', '127.0.0.1', 1, '2017-11-20 03:46:45', 0),
(76, 'hussan', '127.0.0.1', 0, '2017-11-20 03:46:52', 0),
(77, 'hussan', '127.0.0.1', 1, '2017-11-20 03:50:42', 0),
(78, 'hussan', '127.0.0.1', 0, '2017-11-20 03:50:51', 0),
(79, 'hussan', '127.0.0.1', 1, '2017-11-20 03:54:12', 0),
(80, 'hussan', '127.0.0.1', 1, '2017-11-20 07:37:13', 0),
(81, 'hussan', '127.0.0.1', 0, '2017-11-20 08:42:02', 0),
(82, 'hussan', '127.0.0.1', 0, '2017-11-20 08:42:43', 0),
(83, 'hussan', '127.0.0.1', 0, '2017-11-20 08:43:34', 0),
(84, 'hussan', '127.0.0.1', 1, '2017-11-20 08:44:26', 1),
(85, 'hussan', '127.0.0.1', 0, '2017-11-20 08:44:41', 0),
(86, 'hussan', '127.0.0.1', 1, '2017-11-20 08:44:47', 1),
(87, 'hussan', '127.0.0.1', 0, '2017-11-20 08:45:19', 0),
(88, 'hussan', '127.0.0.1', 1, '2017-11-20 08:45:25', 2),
(89, 'hussan', '127.0.0.1', 0, '2017-11-20 08:45:33', 0),
(90, 'hussan', '127.0.0.1', 1, '2017-11-20 08:45:38', 2),
(91, 'hussan', '127.0.0.1', 0, '2017-11-20 08:45:40', 0),
(92, 'hussan', '127.0.0.1', 1, '2017-11-20 08:49:34', 1),
(93, 'hussan', '127.0.0.1', 1, '2017-11-20 08:49:51', 1),
(94, 'hussan', '127.0.0.1', 0, '2017-11-20 08:50:47', 0),
(95, 'hussan', '127.0.0.1', 1, '2017-11-20 08:51:37', 1),
(96, 'hussan', '127.0.0.1', 0, '2017-11-20 08:58:01', 0),
(97, 'hussan', '127.0.0.1', 1, '2017-11-20 08:58:08', 1),
(98, 'hussan', '127.0.0.1', 0, '2017-11-20 09:27:20', 0),
(99, 'hussan', '127.0.0.1', 1, '2017-11-20 09:28:16', 0),
(100, 'hussan', '127.0.0.1', 0, '2017-11-20 09:28:45', 0),
(101, 'alsaylani', '127.0.0.1', 1, '2017-11-21 05:22:10', 0),
(102, 'alsaylani', '127.0.0.1', 0, '2017-11-21 05:22:20', 0),
(103, 'hussan', '127.0.0.1', 1, '2017-11-21 05:22:28', 0),
(104, 'hussan', '127.0.0.1', 0, '2017-11-21 05:49:49', 0),
(105, 'hussan', '127.0.0.1', 1, '2017-11-21 05:50:21', 0),
(106, 'hussan', '127.0.0.1', 0, '2017-11-21 06:26:33', 0),
(107, 'hussan', '127.0.0.1', 1, '2017-11-21 06:26:39', 0),
(108, 'hussan', '127.0.0.1', 0, '2017-11-21 06:32:13', 0),
(109, 'hussan', '127.0.0.1', 1, '2017-11-21 06:32:18', 0),
(110, 'hussan', '127.0.0.1', 0, '2017-11-21 06:44:15', 0),
(111, '', '127.0.0.1', 1, '2017-11-21 06:44:50', 0),
(112, 'admin', '127.0.0.1', 1, '2017-11-21 06:44:54', 0),
(113, 'admin', '127.0.0.1', 1, '2017-11-21 06:46:04', 0),
(114, 'admin', '127.0.0.1', 1, '2017-11-21 06:46:26', 0),
(115, 'admin', '127.0.0.1', 1, '2017-11-21 06:48:04', 0),
(116, 'admin', '127.0.0.1', 0, '2017-11-21 07:20:59', 0),
(117, 'hussan', '127.0.0.1', 1, '2017-11-21 07:21:04', 0),
(118, 'hussan', '127.0.0.1', 0, '2017-11-21 07:21:18', 0),
(119, 'alsaylani', '127.0.0.1', 1, '2017-11-21 07:21:36', 0),
(120, 'alsaylani', '127.0.0.1', 0, '2017-11-21 07:21:58', 0),
(121, 'alsaylani', '127.0.0.1', 1, '2017-11-21 07:22:02', 0),
(122, 'alsaylani', '127.0.0.1', 0, '2017-11-21 07:22:06', 0),
(123, 'hussan', '127.0.0.1', 1, '2017-11-21 07:22:11', 0),
(124, 'hussan', '127.0.0.1', 0, '2017-11-21 07:23:23', 0),
(125, 'alsaylani', '127.0.0.1', 1, '2017-11-21 07:23:28', 0),
(126, 'alsaylani', '127.0.0.1', 0, '2017-11-21 07:24:28', 0),
(127, 'hussan', '127.0.0.1', 1, '2017-11-21 07:24:33', 0),
(128, 'hussan', '127.0.0.1', 1, '2017-11-22 21:11:59', 0),
(129, 'hussan', '127.0.0.1', 0, '2017-11-22 21:12:04', 0),
(130, 'hussan', '127.0.0.1', 1, '2017-11-22 21:12:31', 0),
(131, 'hussan', '127.0.0.1', 0, '2017-11-22 21:23:04', 0),
(132, 'hussan', '127.0.0.1', 1, '2017-11-22 21:23:45', 0),
(133, 'hussan', '127.0.0.1', 0, '2017-11-22 21:23:48', 0),
(134, 'hussan', '127.0.0.1', 1, '2017-11-22 21:23:54', 0),
(135, 'hussan', '127.0.0.1', 0, '2017-11-22 21:24:04', 0),
(136, 'hussan', '127.0.0.1', 1, '2017-11-22 21:24:10', 0),
(137, 'hussan', '127.0.0.1', 0, '2017-11-23 00:47:01', 0),
(138, 'hussan', '127.0.0.1', 1, '2017-11-25 03:05:12', 0),
(139, 'hussan', '127.0.0.1', 0, '2017-11-25 03:05:30', 0),
(140, '', '127.0.0.1', 1, '2017-11-25 03:05:47', 0),
(141, 's', '127.0.0.1', 1, '2017-11-25 03:05:50', 0),
(142, '', '127.0.0.1', 1, '2017-11-25 03:05:52', 0),
(143, 'hussana', '127.0.0.1', 1, '2017-11-25 03:05:57', 0),
(144, 'hussan', '127.0.0.1', 1, '2017-11-25 03:06:00', 0),
(145, 'hussan', '127.0.0.1', 0, '2017-11-25 03:06:59', 0),
(146, 'hussan', '127.0.0.1', 1, '2017-11-25 03:07:45', 0),
(147, 'hussan', '127.0.0.1', 0, '2017-11-25 03:07:47', 0),
(148, 'd', '127.0.0.1', 1, '2017-11-25 03:07:49', 0),
(149, 'hussan', '127.0.0.1', 1, '2017-11-25 03:07:52', 0),
(150, 'hussan', '127.0.0.1', 1, '2017-11-25 03:07:59', 0),
(151, 'hussan', '127.0.0.1', 0, '2017-11-25 03:08:01', 0),
(152, 'hussan', '127.0.0.1', 1, '2017-11-25 03:08:25', 0),
(153, 'hussan', '127.0.0.1', 0, '2017-11-25 03:08:27', 0),
(154, 'ali', '127.0.0.1', 1, '2017-11-25 03:08:40', 0),
(155, 'hussan', '127.0.0.1', 1, '2017-11-26 18:43:03', 0),
(156, 'hussan', '127.0.0.1', 1, '2017-11-26 18:43:09', 0),
(157, 'hussan', '127.0.0.1', 0, '2017-11-26 19:11:45', 0),
(158, 'hussan', '127.0.0.1', 1, '2017-11-26 19:11:51', 0),
(159, 'hussan', '127.0.0.1', 1, '2017-11-26 19:21:56', 0),
(160, 'hussan', '127.0.0.1', 0, '2017-11-26 19:22:45', 0),
(161, 'alsaylani', '127.0.0.1', 1, '2017-11-26 19:23:00', 0),
(162, 'alsaylani', '127.0.0.1', 0, '2017-11-26 19:24:17', 0),
(163, 'hussan', '127.0.0.1', 1, '2017-11-26 19:24:23', 0),
(164, 'hussan', '127.0.0.1', 1, '2017-11-27 05:16:53', 0),
(165, 'hussan', '127.0.0.1', 0, '2017-11-27 05:46:50', 0),
(166, 'hussan', '127.0.0.1', 1, '2017-11-27 05:46:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(3, 'admin', 'admin', 1),
(19, 'hussan', '12121212', 1),
(28, 'ali', '$2y$10$mEMiMQ7UCQC/ugWOPdv/he/QTI8A0LMgi6cDuNRlHxYNGdZYhConS', 2),
(31, 'alsaylani', '$2y$10$6qrmOMTmsg0mSY3whVELTeI7qB0ATUv1A0hfd2zd.BKYJNI1VO/fW', 3),
(32, 'ssss', '$2y$10$udkHRwEwrqy5/vAldJLlzuDe6illCKsR6OPhahZVCKtW4ItOZCOb2', 0),
(33, 'hussan', '$2y$10$1VU4sdCPbWXeT0Rd23doQuPZI9QVxnraZQcC0RK0dZbgta9t8vMW2', 0),
(34, 'hussan', '$2y$10$ws6UDyTZGnkfgEvA35dLYeIEiWtd89FP38TRveMCdhna7rVa0O2ze', 0),
(35, 'jack', '$2y$10$NVWoS.BK2eS1beq0MTglGeXqsI0vNrBLKbfHmahBBekAsLAVhQ0KS', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `personalDetails`
--
ALTER TABLE `personalDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuition`
--
ALTER TABLE `tuition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `role` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personalDetails`
--
ALTER TABLE `personalDetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tuition`
--
ALTER TABLE `tuition`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
