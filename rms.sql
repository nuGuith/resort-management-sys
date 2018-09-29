-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 04:13 PM
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
(1, 'Ivann Nuguid', 'ivann@users.dbcom', NULL, '$2y$10$88KTgjAmUWbpbmviDDNvUez4XcoEKv0r.3gvGScLYv38AO3EJelzu', NULL, 10, NULL, 'lDacTtc5NlzhdcCnKXfGgWDlhFtLU2Y50XD1aig47z8k46dg5TqMgx9kPdwj', '2018-09-29 11:46:19', '2018-09-28 13:33:22'),
(2, 'Rena Eznaira', 'reznaira@users.dbcom', NULL, '$2y$10$y2xtGNHYcVFWmW9qRNhf4ec0FH5QEAjzraa5VbJ6m4CC/J.XdlYZa', NULL, 10, NULL, 'tof09eMjelWrxByq29a4PKjbTDaoPArGdvQ0eYRbWQhfHmedMj9Vh84EoQIy', '2018-09-29 06:46:33', '2018-09-28 05:38:45'),
(3, 'Albus Bumblebee', 'albus@hogwarts.co', NULL, '$2y$10$MPHPu7Yf/GuJxBbwFRoOZuVckHc.cR7tvQIg0Kin61wzcIbAQ7.gG', NULL, 0, NULL, 'TewlW5QrVtZDiEp2l6Kyw7ZeiDSwYkQsA0RBU5XpxRcAV62D64DXuuUX3hGj', '2018-09-28 18:00:16', '2018-09-28 09:02:47'),
(4, 'Dodge Samuel', 'dodge@weaab.co', NULL, '$2y$10$4raC/jnFq7YJnfwtYGcEZuur7BHtjx2GiVR0My8fbv4GPZlI7Bflu', NULL, 0, NULL, NULL, '2018-09-28 09:25:44', '2018-09-28 09:25:44'),
(5, 'Sharmil Joy', 'sharms@vamp.co', NULL, '$2y$10$8s5Pu9W3RvS85ZTxjvZsK.cZVtwW.uCHJJ0sNFCiqIzxB4SUMxEe6', NULL, 0, NULL, '8yMuoIwuxBp9OoHsyMOSxXim526Ug4a1h3NVDimnrWuEhYs4VhOtexO8PHTZ', '2018-09-29 05:21:26', '2018-09-28 09:29:30'),
(6, 'Reveren', 'revrev@gmail.com', NULL, '$2y$10$fkhvOIdx27yupaRIl1D1aurmo3zz3ZrIxG7HcY0/tnDF/ATu5O36.', NULL, 0, NULL, NULL, '2018-09-28 09:34:27', '2018-09-28 09:34:27'),
(7, 'Jen Gabat', 'jen@email.co', NULL, '$2y$10$bYQorCvOj/QVjWO0I6si5OcErlEQrtVEDtsimIrGlnuZC6P/Pbkwu', NULL, 0, NULL, NULL, '2018-09-28 21:20:52', '2018-09-28 09:52:36'),
(8, 'Remus Lupin', 'remus@canine.hgwrts', NULL, '$2y$10$/LIBvwt/9j/X5P3ajqebY.LJhn285cGcGJM2oA7oRHOsirNY4IAUy', NULL, 0, NULL, 'c4AJFcWIMldQcbUNJJ2plut7bmkWHZtdWDme1l8QrJn5gcF28HXOxGEudbz2', '2018-09-29 11:48:32', '2018-09-29 03:47:20');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
