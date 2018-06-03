-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 10:31 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(10) UNSIGNED NOT NULL,
  `server_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used_memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `server_name`, `cpu`, `used_memory`, `total_memory`, `ip_addr`, `created_at`) VALUES
(1, 'SVR1', '12.94527', '0.8808594', '3.89', '192.168.1.2', '2018-02-02 09:30:16'),
(2, 'SVR1', '7.663783', '0.8847656', '3.89', '192.168.1.2', '2018-02-02 09:30:18'),
(3, 'SVR1', '20.54287', '0.9902344', '3.89', '192.168.1.2', '2018-02-02 09:30:20'),
(4, 'SVR1', '12.16411', '1.00293', '3.89', '192.168.1.2', '2018-02-02 09:30:22'),
(5, 'SVR1', '29.92456', '0.9882813', '3.89', '192.168.1.2', '2018-02-02 09:30:24'),
(6, 'SVR1', '23.0758', '0.9785156', '3.89', '192.168.1.2', '2018-02-02 09:30:26'),
(7, 'SVR1', '14.69804', '0.9824219', '3.89', '192.168.1.2', '2018-02-02 09:30:28'),
(8, 'SVR1', '10.0031', '0.9804688', '3.89', '192.168.1.2', '2018-02-02 09:30:30'),
(9, 'SVR1', '10.99319', '0.9873047', '3.89', '192.168.1.2', '2018-02-02 09:30:32'),
(10, 'SVR1', '11.13767', '0.9960938', '3.89', '192.168.1.2', '2018-02-02 09:30:34'),
(11, 'SVR1', '13.8895', '1.012695', '3.89', '192.168.1.2', '2018-02-02 09:30:36'),
(12, 'SVR1', '24.47946', '0.9833984', '3.89', '192.168.1.2', '2018-02-02 09:30:38'),
(13, 'SVR1', '10.40963', '0.9853516', '3.89', '192.168.1.2', '2018-02-02 09:30:40'),
(14, 'SVR1', '3.173186', '0.9853516', '3.89', '192.168.1.2', '2018-02-02 09:30:42'),
(15, 'SVR1', '5.527177', '0.9873047', '3.89', '192.168.1.2', '2018-02-02 09:30:44'),
(16, 'SVR1', '1.188367', '0.9960938', '3.89', '192.168.1.2', '2018-02-02 09:30:46'),
(17, 'SVR1', '4.478014', '1.024414', '3.89', '192.168.1.2', '2018-02-02 09:30:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
