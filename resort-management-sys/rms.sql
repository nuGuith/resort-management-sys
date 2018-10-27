-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

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

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Area1', 'Pavilion', '', '2018-10-25 09:57:49', '2018-10-25 09:57:49', '2018-10-25 17:57:49'),
(2, 'Area1', 'Pavilion', '', '2018-10-25 09:58:03', '2018-10-25 09:58:03', '2018-10-25 17:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_damage`
--

CREATE TABLE `equipment_damage` (
  `id` int(10) NOT NULL,
  `reservation_id` int(10) NOT NULL,
  `equipment_id` int(10) NOT NULL,
  `damage_condition` varchar(255) DEFAULT NULL,
  `damage_cost` decimal(14,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operating_cost`
--

CREATE TABLE `operating_cost` (
  `id` int(10) NOT NULL,
  `month` tinyint(2) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `amount` decimal(14,2) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `reservation_type_id` int(10) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `downpayment_ref_no` varchar(100) DEFAULT NULL,
  `downpayment_date` datetime DEFAULT NULL,
  `total_amount_due` decimal(14,2) DEFAULT NULL,
  `total_payment` decimal(14,2) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(255) DEFAULT NULL,
  `customer_cancelled` tinyint(1) NOT NULL DEFAULT '0',
  `customer_reason` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_room`
--

CREATE TABLE `reservation_room` (
  `id` int(10) NOT NULL,
  `reservation_id` int(10) NOT NULL,
  `room_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_type`
--

CREATE TABLE `reservation_type` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `reservation_rate` decimal(14,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_type`
--

INSERT INTO `reservation_type` (`id`, `name`, `description`, `reservation_rate`, `updated_at`, `created_at`) VALUES
(1, '', '', '0.00', '2018-10-25 03:28:51', '2018-10-25 03:28:51'),
(2, 'fshjbfs', 'ajsnlmds', '75421.00', '2018-10-25 03:29:00', '2018-10-25 03:29:00'),
(3, 'dlflsk', 'nksld', '74.00', '2018-10-25 04:02:46', '2018-10-25 04:02:46'),
(4, 'Reservation1', 'For events', '20000.00', '2018-10-25 07:58:29', '2018-10-25 07:58:29'),
(5, 'Reservation2', 'For parties', '30000.00', '2018-10-25 08:04:58', '2018-10-25 08:04:58'),
(6, 'fsfl;ds', 'msdlkfsl', '5421.00', '2018-10-25 08:05:09', '2018-10-25 08:05:09'),
(7, 'Reservation3', 'Overnight', '18000.00', '2018-10-25 08:29:44', '2018-10-25 08:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) NOT NULL,
  `room_name` varchar(100) DEFAULT NULL,
  `room_rate` decimal(14,2) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `room_rate`, `description`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Room1', '1500.00', 'Relaxing', '', '2018-10-25 08:40:00', '2018-10-25 08:40:00'),
(2, 'Room2', '2000.00', 'Cute', '', '2018-10-25 08:45:49', '2018-10-25 08:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `contact_no`, `password`, `avatar`, `role`, `bio`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Ivann Nuguid', 'ivann@users.dbcom', NULL, NULL, '$2y$10$88KTgjAmUWbpbmviDDNvUez4XcoEKv0r.3gvGScLYv38AO3EJelzu', NULL, 10, NULL, 'lDacTtc5NlzhdcCnKXfGgWDlhFtLU2Y50XD1aig47z8k46dg5TqMgx9kPdwj', '2018-09-29 11:46:19', '2018-09-28 13:33:22'),
(2, 'Rena Eznaira', 'reznaira@users.dbcom', NULL, NULL, '$2y$10$y2xtGNHYcVFWmW9qRNhf4ec0FH5QEAjzraa5VbJ6m4CC/J.XdlYZa', NULL, 10, NULL, '4eifF2HE28Mv1Ya2qMQ61pUz0mEqGdccmrZQw8Z0i76Ok6Kdz1qjYl89MU89', '2018-10-18 16:49:09', '2018-09-28 05:38:45'),
(3, 'Albus Bumblebee', 'albus@hogwarts.co', NULL, NULL, '$2y$10$MPHPu7Yf/GuJxBbwFRoOZuVckHc.cR7tvQIg0Kin61wzcIbAQ7.gG', NULL, 0, NULL, 'TewlW5QrVtZDiEp2l6Kyw7ZeiDSwYkQsA0RBU5XpxRcAV62D64DXuuUX3hGj', '2018-09-28 18:00:16', '2018-09-28 09:02:47'),
(4, 'Dodge Samuel', 'dodge@weaab.co', NULL, NULL, '$2y$10$4raC/jnFq7YJnfwtYGcEZuur7BHtjx2GiVR0My8fbv4GPZlI7Bflu', NULL, 0, NULL, NULL, '2018-09-28 09:25:44', '2018-09-28 09:25:44'),
(5, 'Sharmil Joy', 'sharms@vamp.co', NULL, NULL, '$2y$10$8s5Pu9W3RvS85ZTxjvZsK.cZVtwW.uCHJJ0sNFCiqIzxB4SUMxEe6', NULL, 0, NULL, '8yMuoIwuxBp9OoHsyMOSxXim526Ug4a1h3NVDimnrWuEhYs4VhOtexO8PHTZ', '2018-09-29 05:21:26', '2018-09-28 09:29:30'),
(6, 'Reveren', 'revrev@gmail.com', NULL, NULL, '$2y$10$fkhvOIdx27yupaRIl1D1aurmo3zz3ZrIxG7HcY0/tnDF/ATu5O36.', NULL, 0, NULL, NULL, '2018-09-28 09:34:27', '2018-09-28 09:34:27'),
(7, 'Jen Gabat', 'jen@email.co', NULL, NULL, '$2y$10$bYQorCvOj/QVjWO0I6si5OcErlEQrtVEDtsimIrGlnuZC6P/Pbkwu', NULL, 0, NULL, NULL, '2018-09-28 21:20:52', '2018-09-28 09:52:36'),
(8, 'Remus Lupin', 'remus@canine.hgwrts', NULL, NULL, '$2y$10$/LIBvwt/9j/X5P3ajqebY.LJhn285cGcGJM2oA7oRHOsirNY4IAUy', NULL, 0, NULL, 'c4AJFcWIMldQcbUNJJ2plut7bmkWHZtdWDme1l8QrJn5gcF28HXOxGEudbz2', '2018-09-29 11:48:32', '2018-09-29 03:47:20'),
(13, 'Albert Nuguid', 'berttt@gmail.com', NULL, NULL, '$2y$10$ocSnwqCkWhoQv/F8m6y9SeCLB6Om/IjH6os8VJnK/B/ZZFyFixM22', NULL, 0, NULL, 'CWlXLxUpJjTlglXhnWZ47fJftA6BTpY9U97bX4gxMuHU5gG9vioy04KoXcYm', '2018-10-17 20:54:38', '2018-09-29 06:16:27'),
(14, 'Guest', 'guest@email.com', NULL, NULL, '$2y$10$B2qvFLU8sJzBpjbHEg6EPOMbnL36Kb14.4D.F.godaXBO6hdiZmbi', NULL, 0, NULL, NULL, '2018-10-16 20:26:10', '2018-10-16 20:26:10'),
(15, 'Berty Bots', 'bot@email.com', NULL, NULL, '$2y$10$vza79fKJpy.R5JXSi23h.eiSRZV4u1REipC4Enu34BxN.tLW/tnpi', 'tWEphpWaJY2ffQbh.jpg', 10, 'I hate lyf.', NULL, '2018-10-16 21:31:15', '2018-10-16 21:31:15'),
(17, 'Eznaira Era', 'eznairaera@gmail.com', NULL, NULL, '$2y$10$lAFBzaBfxwo0yhzBk7yW5ehK7PdkSPveHpUeQgvaqsvpffijnNZ2e', NULL, 0, NULL, NULL, '2018-10-25 03:19:37', '2018-10-25 03:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `downpayment_rate` decimal(14,2) NOT NULL DEFAULT '2000.00',
  `additional_room_cost` decimal(14,2) NOT NULL DEFAULT '1500.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_damage`
--
ALTER TABLE `equipment_damage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operating_cost`
--
ALTER TABLE `operating_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_room`
--
ALTER TABLE `reservation_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_type`
--
ALTER TABLE `reservation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipment_damage`
--
ALTER TABLE `equipment_damage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operating_cost`
--
ALTER TABLE `operating_cost`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_room`
--
ALTER TABLE `reservation_room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_type`
--
ALTER TABLE `reservation_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
