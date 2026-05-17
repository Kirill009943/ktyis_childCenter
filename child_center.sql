-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: MySQL-8.4:3306
-- Generation Time: May 17, 2026 at 06:42 PM
-- Server version: 8.4.6
-- PHP Version: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `circle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_age` int NOT NULL,
  `start_date` date NOT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Новая',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `circle`, `child_age`, `start_date`, `payment_method`, `status`, `created_at`) VALUES
(1, 9, 'Изобразительное искусство', 5, '2001-01-20', '', 'Новая', '2026-05-17 15:26:24'),
(2, 9, 'Изобразительное искусство', 15, '2001-01-20', '', 'Новая', '2026-05-17 15:26:56'),
(3, 9, 'Изобразительное искусство', 15, '2001-01-20', 'online', 'Новая', '2026-05-17 15:27:46'),
(4, 9, 'Изобразительное искусство', 5, '2001-01-20', 'online', 'Новая', '2026-05-17 15:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password_hash`, `full_name`, `phone`, `email`, `role`, `created_at`) VALUES
(1, 'Admin', '$2y$12$sT0hsTOkfdx1lZROgxaY/upIGo2k8aCTAVCVO8GXmvQ4RRQyM4vpm', 'Администратор', '8(000)000-00-00', 'admin@childcenter.local', 'admin', '2026-05-17 12:45:30'),
(2, 'fdgbdfbdf', 'bdfbdfbdf', 'bdfbdfbdf', 'b325325', 'dsgvsdv@gdsg', 'user', '2026-05-17 15:10:36'),
(7, 'fdgbdfbdffdgfdg', 'bdfbdfbdf', 'bdfbdfbdf', 'b325325', 'dsgvgdsfsdv@gdsg', 'user', '2026-05-17 15:11:24'),
(9, 'kkikkkkikk', '$2y$12$ZMp8NYRxNpdPIH4PCneF0eXiMawZFno2d1mA182CVkHELCciwGZ7.', 'kkikkkkikk', 'kkikkkkikk', 'kkikk@kkikkkkikk', 'user', '2026-05-17 15:22:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_applications_user_id` (`user_id`),
  ADD KEY `idx_applications_status` (`status`),
  ADD KEY `idx_applications_circle` (`circle`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `fk_applications_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
