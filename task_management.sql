-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 01:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` enum('pending','completed') DEFAULT 'pending',
  `priority` enum('low','medium','high') DEFAULT 'medium',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `due_date`, `status`, `priority`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'safdsfdsf', 'sdfsdfsd', '2024-06-15', 'pending', 'medium', 3, '2024-06-15 05:24:25', '2024-06-15 05:24:25'),
(5, 'sdasd', 'sdasdsad', '2024-06-15', 'completed', 'medium', 2, '2024-06-15 05:25:27', '2024-06-15 05:25:27'),
(6, 'create auth', 'create authentication process', '2024-06-30', 'pending', 'medium', 2, '2024-06-15 06:03:08', '2024-06-15 06:03:36'),
(7, 'admin login', 'admin login', '2024-06-25', 'completed', 'high', 4, '2024-06-15 06:06:22', '2024-06-15 06:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `role` varchar(255) DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Sandeep Patel', 'admin@gmail.com', '$2y$10$M0nMqHcTqOsQxqxwgxn7QuBgbgwXqVyH.CTFGbU.QkNYobz99KhFS', 1, 'admin', '2024-06-14 11:49:02', '2024-06-14 11:49:02'),
(2, 'vicky patel', 'user@gmail.com', '$2y$10$l7cZrex.3dJFO0L1OduDvO1a/5FPlYQdnYJJ8KebeP.Ssyo7u9wnm', 1, 'user', '2024-06-14 11:50:36', '2024-06-14 11:50:36'),
(3, 'lucky patel', 'user2@gmail.com', '$2y$10$M8rMDe8o.5cAZFFws4LiyeIRZtWgklr9IzT.OhpwvQPp9DZP6jkI6', 1, 'user', '2024-06-15 03:49:47', '2024-06-15 03:49:47'),
(4, 'ram', 'ramu@gmail.com', '$2y$10$TEW9N4GofOQ.OphcrnX8bOUiv6jxAm2a802oApAJDVqOEiEEZwIEK', 1, 'user', '2024-06-15 06:02:13', '2024-06-15 06:02:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
