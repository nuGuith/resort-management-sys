-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 04:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--
CREATE DATABASE IF NOT EXISTS `rms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rms`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `role` int(10) NOT NULL DEFAULT '0',
  `bio` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `role`, `bio`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Ivann Nuguid', 'ivann@users.dbcom', NULL, '$2y$10$88KTgjAmUWbpbmviDDNvUez4XcoEKv0r.3gvGScLYv38AO3EJelzu', NULL, 10, NULL, 'E5aNBxxpDxxsK6a6FEvRmGcRRx9YVEovcwq4sclKvgb7iuX9OOWSPXWrlZAw', '2018-09-28 14:12:38', '2018-09-28 13:33:22'),
(2, 'Rena Eznaira', 'reznaira@users.dbcom', NULL, '$2y$10$y2xtGNHYcVFWmW9qRNhf4ec0FH5QEAjzraa5VbJ6m4CC/J.XdlYZa', NULL, 10, NULL, NULL, '2018-09-28 05:38:45', '2018-09-28 05:38:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
