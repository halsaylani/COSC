-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 08:47 AM
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
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subject`, `description`, `deleted`, `username`, `cd`) VALUES
(3, 'php', 'good', 0, 'ali', '2017-11-07'),
(7, 'hi', 'a like this website', 0, 'q', '2017-11-10'),
(8, 'hellow ', 'baby', 0, 'q', '0000-00-00'),
(9, 'sssssss', 'wwwwwww', 1, 'hussan', '0000-00-00'),
(10, 'hi', 'hussan', 0, 'm3tsem', '0000-00-00'),
(15, 'hla', 'hussan', 0, 'hussan', '0000-00-00'),
(16, 'test', 'web', 0, 'hussan', '0000-00-00'),
(17, 'yes', 'no', 0, 'hussan', '0000-00-00');

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
(127, 'hussan', '127.0.0.1', 1, '2017-11-21 07:24:33', 0);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `role` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tuition`
--
ALTER TABLE `tuition`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
