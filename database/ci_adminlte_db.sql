-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2017 at 07:34 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-4+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_adminlte_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `is_admin`, `last_ip`, `created_at`, `updated_at`) VALUES
(3, 'demo', 'admin', 'admin', 'admin@admin.com', '12345', '$2y$10$tFY/JX/rEKR8ODW2ktjYtOWf3zTkvOtynrXOvrcZ2Qm9h72r9TaPW', 1, '', '2017-09-29 10:09:44', '2017-09-30 08:09:29'),
(7, 'Test1', 'test', 'champion', 'test@gmail.com', '12345', '$2y$10$J317ib3JnglmhO.IbaADHOyr4j2xSbWZZtO8pHDWW65GUZLZEu63u', 0, '', '2017-09-29 11:09:02', '2017-09-30 08:09:51'),
(6, 'Ali Raza', 'Ali', 'Raza', 'ali@admin.com', '123456', '$2y$10$RoUcgnJ1AaK125c/hFmkWexGRvEhvQKXm21YRYlNrEHuvQcH2zMMG', 0, '', '2017-10-03 06:10:31', '2017-10-03 05:10:25'),
(5, 'wwe champion', 'wwe', 'champion', 'naumanahmedcs@gmail.com', '12345', '$2y$10$KB0NxzAOWtbnVj.7OJujRe7G5K1lb6UG5ra3PnAAt/Oc96Wfl5tea', 0, '', '2017-09-29 11:09:02', '2017-10-03 06:10:51'),
(8, 'John Smith', 'John', 'Smith', 'johnsmith@gmail.com', '12345', '$2y$10$J317ib3JnglmhO.IbaADHOyr4j2xSbWZZtO8pHDWW65GUZLZEu63u', 0, '', '2017-09-29 11:09:02', '2017-09-30 08:09:51'),
(9, 'Herry Jhone', 'Herry', 'Jhone', 'herrypro@gmail.com', '449548545624', '$2y$10$.P.vz6NaSbLPq.BvOY0umulTKBj9Ovds2jaQBdGbyKzlfjOV0O4RW', 0, '', '2017-10-03 07:10:26', '2017-10-03 07:10:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_users`
--
ALTER TABLE `ci_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_users`
--
ALTER TABLE `ci_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
