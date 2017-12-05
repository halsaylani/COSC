-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 02:05 AM
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
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`, `province`, `id`) VALUES
('Toronto', 'Ontario', 1),
('', 'NS', 2),
('Ottawa', 'Ontario', 3),
('', 'NS', 4),
('Calgary', 'Alberta', 5),
('Edmonton', 'Alberta', 6),
('Red Deer', 'Alberta', 7),
('St. Albert', 'Alberta', 8);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(255) NOT NULL,
  `clientsname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `emailaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `byrole` int(4) NOT NULL,
  `byusername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `clientpass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clientsname`, `phonenumber`, `birthdate`, `emailaddress`, `byrole`, `byusername`, `timedate`, `comments`, `clientpass`) VALUES
(4, 'husan', 2147483647, '1888-01-01', 'm@algomau.ca', 1, 'hussan', '2017-12-02 21:47:50', 'comment', ''),
(6, 'jack', 2147483647, '1986-10-02', 'h@mail.com', 1, 'hussan', '2017-12-02 23:08:29', '', ''),
(7, 'will', 2147483647, '1999-02-02', 'm@algomau.ca', 2, 'ali', '2017-12-02 23:09:21', '', ''),
(8, 'talal', 2147483647, '1111-01-01', 'a@mail.com', 3, 'alsaylani', '2017-12-02 23:10:14', '', ''),
(10, 'ali', 2147483647, '2017-12-05', 'aqmail.com', 1, 'hussan', '2017-12-02 23:39:36', 'a text ', ''),
(34, 'aaaa', 12222222, '2017-11-27', '2ww', 1, 'hussan', '2017-12-03 01:58:46', 'are ', ''),
(35, 'aaaa', 12222222, '2017-11-27', '2ww', 1, 'hussan', '2017-12-03 01:59:56', 'comment', ''),
(59, 'ali', 383746356, '1987-10-03', 'h@algomau.ca', 1, 'hussan', '2017-12-04 06:03:07', 'sdsdfsdfsdfsdfsdfsdfsdf', ''),
(67, 'adddd', 233333, '1990-01-01', 'h@algomau.ca', 1, 'hussan', '2017-12-04 18:21:36', '\r\nhi', ''),
(68, 'mick', 2147483647, '1990-12-09', 'h@algomau.ca', 1, 'hussan', '2017-12-04 18:22:37', 'a text are for comments\r\n', ''),
(69, 'mick', 2147483647, '1990-12-09', 'h@algomau.ca', 1, 'hussan', '2017-12-04 18:25:31', 'a text are for comments\r\n', ''),
(70, 'ss', 2147483647, '1990-12-22', 'h@algomau.ca', 1, 'hussan', '2017-12-04 18:25:58', 'comments...\r\nhla to u all', ''),
(71, 'zalooly', 2147483647, '1990-01-01', 'h@algomau.ca', 1, 'hussan', '2017-12-04 20:46:08', 'nice\r\n', '2323232323'),
(74, 'abdo', 12222222, '1990-01-01', 'h@algomau.ca', 1, 'hussan', '2017-12-04 20:51:43', 'woooow\r\n', '1212121212'),
(75, 'hussan', 383746356, '1990-03-02', 'h@algomau.ca', 1, 'hussan', '2017-12-04 20:53:19', 'test\r\n', '2323232323');

-- --------------------------------------------------------

--
-- Table structure for table `Managers`
--

CREATE TABLE `Managers` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` tinyint(4) NOT NULL,
  `managerpass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Managers`
--

INSERT INTO `Managers` (`id`, `firstname`, `lastname`, `emailaddress`, `phonenumber`, `birthdate`, `timedate`, `role`, `managerpass`) VALUES
(1, 'muhammed', 'alsaylani', 'h@hotmail.com', '2147483647', '2017-12-12', '2017-12-02 01:49:44', 0, ''),
(2, 'muhammed', 'alsaylani', 'h@hotmail.com', '2147483647', '2017-12-16', '2017-12-02 02:00:33', 0, ''),
(3, 'alo', 'alsaylani', 'h@hotmail.com', '2147483647', '2017-11-26', '2017-12-02 02:06:18', 2, ''),
(4, 'alo', 'alsaylani', 'aaa', '2147483647', '2017-11-27', '2017-12-02 02:10:07', 2, ''),
(5, 'alo', 'alsaylani', 'aaa', '2147483647', '2017-11-27', '2017-12-02 02:10:31', 2, ''),
(6, 'muhammed', 'alsaylani', 'h@hotmail.com', '2147483647', '1979-12-04', '2017-12-02 02:36:36', 2, ''),
(7, 'muhammed', 'alsaylani', 'h@hotmail.com', '5453675432', '1990-12-03', '2017-12-02 02:38:12', 2, ''),
(8, 'muhammed', 'ali', 'h@hotmail.com', '2323435677', '1970-02-03', '2017-12-02 21:51:49', 2, ''),
(9, 'abdo', 'alal', 'h@algomau.ca', '2323232323', '1990-01-01', '2017-12-04 20:22:38', 2, '12121212'),
(10, 'abdo', 'alal', 'h@algomau.ca', '2323232323', '1990-01-01', '2017-12-04 20:26:46', 2, '12121212'),
(11, 'salah', 'ali', 'h@algomau.ca', '232323232', '1990-01-01', '2017-12-04 20:27:14', 2, 'pwpwpwpw'),
(12, 'dsdsdsd', 'ewewewe', 'h@algomau.ca', '323232323', '1992-02-02', '2017-12-04 20:29:45', 2, '2323232'),
(13, 'skult', 'alfaiz', 'h@algomau.ca', '3333332333', '1993-02-02', '2017-12-04 20:31:29', 2, '3232323'),
(14, 'skult', 'alfaiz', 'h@algomau.ca', '3333332333', '1993-02-02', '2017-12-04 20:36:49', 2, '3232323');

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
(52, 'hussan', 'alsaylani', 334342334, '1983-11-06', '2017-11-27 07:01:06', 'hussan', 'hasooo7t@hotmail.com'),
(53, 'hussan', 'alsaylani', 1, '1966-12-06', '2017-11-30 02:39:53', 'hussan', 'h@hotmail.com'),
(54, 'muhammed', 'alsaylani', 2147483647, '1990-01-13', '2017-11-30 22:04:16', 'hussan', 'h@hotmail.com'),
(55, 'muhammed', 'alsaylani', 2147483647, '1990-01-01', '2017-11-30 22:47:48', 'hussan', 'h@hotmail.com'),
(56, 'muhammed', 'alsaylani', 2147483647, '1990-01-01', '2017-11-30 22:58:50', 'hussan', 'h@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `managerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `staffpass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`id`, `firstname`, `lastname`, `emailaddress`, `phonenumber`, `birthdate`, `timedate`, `managerName`, `role`, `staffpass`) VALUES
(1, 'hussan', 'alsaylani', 'h2mail.com', 22222221, '2017-11-28', '2017-12-02 02:23:45', '', 0, ''),
(2, 'hussan', 'alsaylani', 'h2mail.com', 22222221, '2017-12-12', '2017-12-02 02:23:58', '', 0, ''),
(3, 'hussan', 'alsaylani', 'h2mail.com', 22222221, '2017-12-12', '2017-12-02 02:24:44', '', 0, ''),
(4, 'hussan', 'alsaylani', 'h2mail.com', 22222221, '2017-12-12', '2017-12-02 02:24:44', '', 0, ''),
(5, 'ali', 'faiz', 'h2mail.com', 2147483647, '1988-12-06', '2017-12-02 02:39:23', '', 3, ''),
(6, 'hussan', 'alsaylani', 'h2mail.com', 2147483647, '1992-12-21', '2017-12-02 02:47:40', 'ali', 3, ''),
(7, 'hussan', 'alsaylani', 'h2mail.com', 2147483647, '1983-12-05', '2017-12-02 02:48:45', 'muhammed', 3, ''),
(8, 'salh', 'abbo', 'a@mail.com', 2147483647, '1987-11-30', '2017-12-02 02:50:28', 'ali', 3, ''),
(9, 'ali', 'faiz', 'h2mail.com', 2147483647, '1986-12-02', '2017-12-02 02:51:49', 'jack', 3, ''),
(10, 'jhon', 'ahmed', 'h@algomau.ca', 1212121212, '1990-01-01', '2017-12-04 20:40:39', 'hussan', 3, '2323232323'),
(11, 'alooly', 'baloly', 'h@algomau.ca', 1212121212, '1990-01-01', '2017-12-04 20:41:17', 'alsaylani', 3, '2323232323');

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
(166, 'hussan', '127.0.0.1', 1, '2017-11-27 05:46:57', 0),
(167, 'hussan', '127.0.0.1', 1, '2017-11-28 03:38:56', 0),
(168, 'hussan', '127.0.0.1', 0, '2017-11-28 03:39:08', 0),
(169, 'hussan', '127.0.0.1', 1, '2017-11-28 03:39:39', 0),
(170, 'hussan', '127.0.0.1', 0, '2017-11-28 03:41:37', 0),
(171, 'hussan', '127.0.0.1', 1, '2017-11-30 02:38:04', 0),
(172, 'hussan', '127.0.0.1', 1, '2017-11-30 20:20:59', 0),
(173, 'hussan', '127.0.0.1', 1, '2017-12-02 01:10:10', 0),
(174, 'hussan', '127.0.0.1', 0, '2017-12-02 03:33:49', 0),
(175, 'alsaylani', '127.0.0.1', 1, '2017-12-02 03:34:10', 0),
(176, 'alsaylani', '127.0.0.1', 0, '2017-12-02 03:36:51', 0),
(177, 'muhammed', '127.0.0.1', 1, '2017-12-02 03:39:45', 0),
(178, 'muhammed', '127.0.0.1', 1, '2017-12-02 03:41:21', 0),
(179, 'hussan', '127.0.0.1', 1, '2017-12-02 03:41:29', 0),
(180, 'hussan', '127.0.0.1', 1, '2017-12-02 03:41:36', 0),
(181, 'muhammed', '127.0.0.1', 1, '2017-12-02 03:43:39', 0),
(182, 'hussan', '127.0.0.1', 1, '2017-12-02 03:43:46', 0),
(183, 'hussan', '127.0.0.1', 1, '2017-12-02 03:44:00', 0),
(184, 'hussan', '127.0.0.1', 1, '2017-12-02 03:44:17', 0),
(185, 'hussan', '127.0.0.1', 1, '2017-12-02 03:44:58', 0),
(186, 'hussan', '127.0.0.1', 0, '2017-12-02 03:45:00', 0),
(187, 'alsaylani', '127.0.0.1', 1, '2017-12-02 03:45:36', 0),
(188, 'alsaylani', '127.0.0.1', 0, '2017-12-02 03:59:48', 0),
(189, 'hussan', '127.0.0.1', 1, '2017-12-02 03:59:54', 0),
(190, 'hussan', '127.0.0.1', 0, '2017-12-02 04:00:02', 0),
(191, 'ali', '127.0.0.1', 1, '2017-12-02 04:00:15', 0),
(192, 'ali', '127.0.0.1', 0, '2017-12-02 04:02:30', 0),
(193, 'alsaylani', '127.0.0.1', 1, '2017-12-02 04:02:35', 0),
(194, 'alsaylani', '127.0.0.1', 0, '2017-12-02 04:02:38', 0),
(195, 'hussan', '127.0.0.1', 1, '2017-12-02 04:02:50', 0),
(196, 'hussan', '127.0.0.1', 0, '2017-12-02 04:04:05', 0),
(197, 'hussan', '127.0.0.1', 1, '2017-12-02 04:04:11', 0),
(198, 'hussan', '127.0.0.1', 0, '2017-12-02 07:01:42', 0),
(199, 'hussan', '127.0.0.1', 1, '2017-12-02 07:02:00', 0),
(200, 'hussan', '127.0.0.1', 1, '2017-12-02 19:19:54', 0),
(201, 'hussan', '127.0.0.1', 0, '2017-12-02 23:08:50', 0),
(202, 'ali', '127.0.0.1', 1, '2017-12-02 23:09:00', 0),
(203, 'ali', '127.0.0.1', 0, '2017-12-02 23:09:40', 0),
(204, 'alsaylani', '127.0.0.1', 1, '2017-12-02 23:09:52', 0),
(205, 'alsaylani', '127.0.0.1', 0, '2017-12-02 23:10:24', 0),
(206, 'hussan', '127.0.0.1', 1, '2017-12-02 23:10:30', 0),
(207, 'hussan', '127.0.0.1', 1, '2017-12-03 19:57:12', 0),
(208, 'hussan', '127.0.0.1', 0, '2017-12-04 02:34:55', 0),
(209, 'hussan', '127.0.0.1', 1, '2017-12-04 02:38:57', 0),
(210, 'hussan', '127.0.0.1', 0, '2017-12-04 02:51:16', 0),
(211, 'ali', '127.0.0.1', 1, '2017-12-04 02:51:29', 0),
(212, 'ali', '127.0.0.1', 0, '2017-12-04 02:53:18', 0),
(213, 'hussan', '127.0.0.1', 1, '2017-12-04 02:53:24', 0),
(214, 'hussan', '127.0.0.1', 0, '2017-12-04 03:05:52', 0),
(215, 'ali', '127.0.0.1', 1, '2017-12-04 03:06:03', 0),
(216, 'ali', '127.0.0.1', 0, '2017-12-04 03:08:07', 0),
(217, 'hussan', '127.0.0.1', 1, '2017-12-04 03:08:15', 0),
(218, 'hussan', '127.0.0.1', 1, '2017-12-04 03:49:50', 0),
(219, 'hussan', '127.0.0.1', 0, '2017-12-04 11:00:42', 0),
(220, 'hussan', '127.0.0.1', 1, '2017-12-04 17:44:01', 0),
(221, 'hussan', '127.0.0.1', 1, '2017-12-04 17:44:08', 0),
(222, 'hussan', '127.0.0.1', 0, '2017-12-04 18:32:45', 0),
(223, 'abdo', '127.0.0.1', 1, '2017-12-04 18:38:37', 0),
(224, 'abdo', '127.0.0.1', 1, '2017-12-04 18:41:23', 0),
(225, 'abdo', '127.0.0.1', 0, '2017-12-04 18:41:30', 0),
(226, 'ali', '127.0.0.1', 1, '2017-12-04 18:57:52', 0),
(227, 'ali', '127.0.0.1', 1, '2017-12-04 18:58:31', 0),
(228, 'ali', '127.0.0.1', 1, '2017-12-04 18:59:03', 0),
(229, 'ali', '127.0.0.1', 0, '2017-12-04 20:15:57', 0),
(230, 'hussan', '127.0.0.1', 1, '2017-12-04 20:16:02', 0),
(231, 'hussan', '127.0.0.1', 1, '2017-12-04 20:16:37', 0),
(232, 'hussan', '127.0.0.1', 0, '2017-12-04 22:35:22', 0),
(233, 'ali', '127.0.0.1', 1, '2017-12-04 22:35:35', 0),
(234, 'ali', '127.0.0.1', 0, '2017-12-04 22:37:19', 0),
(235, 'hussan', '127.0.0.1', 1, '2017-12-04 22:37:24', 0),
(236, 'hussan', '127.0.0.1', 0, '2017-12-04 22:37:59', 0),
(237, 'ali', '127.0.0.1', 1, '2017-12-04 22:38:07', 0),
(238, 'ali', '127.0.0.1', 0, '2017-12-04 22:44:52', 0),
(239, 'hussan', '127.0.0.1', 1, '2017-12-04 22:44:57', 0),
(240, 'hussan', '127.0.0.1', 0, '2017-12-04 22:45:10', 0),
(241, 'alsaylani', '127.0.0.1', 1, '2017-12-04 22:45:16', 0),
(242, 'alsaylani', '127.0.0.1', 0, '2017-12-04 22:53:40', 0),
(243, 'hussan', '127.0.0.1', 1, '2017-12-04 22:53:45', 0);

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
(19, 'hussan', '12121212', 1),
(28, 'ali', '$2y$10$mEMiMQ7UCQC/ugWOPdv/he/QTI8A0LMgi6cDuNRlHxYNGdZYhConS', 2),
(31, 'alsaylani', '$2y$10$6qrmOMTmsg0mSY3whVELTeI7qB0ATUv1A0hfd2zd.BKYJNI1VO/fW', 3),
(32, 'ssss', '$2y$10$udkHRwEwrqy5/vAldJLlzuDe6illCKsR6OPhahZVCKtW4ItOZCOb2', 0),
(35, 'jack', '$2y$10$NVWoS.BK2eS1beq0MTglGeXqsI0vNrBLKbfHmahBBekAsLAVhQ0KS', 0),
(36, 'muhammed', '$2y$10$AHtX/ePqrTQhJqBpDW2HQuY4aPag.Jnp8NqaXcKxZ9coxz/K2M2R.', 0),
(37, 'd', '$2y$10$.K60TkR6O2G587Zwx5B4MO.x5/eUVxsHOQiphabZ/4OyCSkJXO.Ui', 0),
(42, 'abdo', '12121212', 2),
(43, 'salah', 'pwpwpwpw', 2),
(44, 'dsdsdsd', '$2y$10$vf89czWcmpb2ShXnsZyEq.iS5PoDHSeLqs4sUjcUIzHv50VdLj9lC', 2),
(45, 'skult', '$2y$10$o5ASrbd8Q5665CmYHDyDOugofOMdL8qVrZXhWqfChJYePEQjQXTta', 2),
(47, 'jhon', '$2y$10$gqNDSdqPs.mcDu6egOygVOjHhwH2xbrzMJs5vYi5uItrYF6rJUXDa', 3),
(49, 'alooly', '$2y$10$qJOIGJCe6gOv5LveZFYB7O73.3/E4qJq3f0.GDfUURzn2TNLa9p.S', 3),
(50, 'zalooly', '$2y$10$2JJo6PK.PWfHpSqUa5SoYeKhj9M4SAKuPKZGeT82XCD.blSOjPYeW', 0),
(53, 'abdo', '$2y$10$7dVGCF3qqA0vRTKpMyJbEuD/9fSXGASknbTWWAVapAtAur/SoUqpW', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Managers`
--
ALTER TABLE `Managers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `Managers`
--
ALTER TABLE `Managers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tuition`
--
ALTER TABLE `tuition`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
