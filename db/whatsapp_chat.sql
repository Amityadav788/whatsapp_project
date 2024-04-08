-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2024 at 04:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whatsapp_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int NOT NULL,
  `sender_id` int DEFAULT NULL,
  `receiver_id` int DEFAULT NULL,
  `msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `receiver_id`, `msg`, `created_date`, `updated_date`) VALUES
(1, 1, NULL, 'hlo', '2024-03-03 22:56:14', '2024-03-03 22:56:14'),
(2, 1, NULL, 'msg', '2024-03-03 22:57:12', '2024-03-03 22:57:12'),
(3, 1, NULL, 'hello amit', '2024-03-03 23:49:59', '2024-03-03 23:49:59'),
(4, 2, NULL, 'chiku ', '2024-03-04 00:05:22', '2024-03-04 00:05:22'),
(5, 2, NULL, 'good night', '2024-03-04 00:06:05', '2024-03-04 00:06:05'),
(6, 2, NULL, 'take care', '2024-03-04 00:06:23', '2024-03-04 00:06:23'),
(7, 3, NULL, 'hello bro', '2024-03-04 00:12:34', '2024-03-04 00:12:34'),
(8, 3, NULL, 'how are u?', '2024-03-04 00:12:46', '2024-03-04 00:12:46'),
(9, 3, NULL, 'hloo ji', '2024-03-04 01:09:57', '2024-03-04 01:09:57'),
(10, 3, NULL, 'ill meet u', '2024-03-04 01:12:08', '2024-03-04 01:12:08'),
(11, 2, NULL, 'ghhjgh', '2024-03-10 21:29:33', '2024-03-10 21:29:33'),
(12, 2, NULL, 'jgsjghj', '2024-03-10 22:09:52', '2024-03-10 22:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `phone` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` text,
  `is_active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_date`, `updated_date`, `image`, `is_active`) VALUES
(1, 'amit yadav', 'amityadav10409@gmail.com', '1234', '09099900990', '2024-03-03 19:16:54', '2024-03-03 19:16:54', '1709473614.jpg', 0),
(2, 'ankit yadav', 'ankityadavdc@gmail.com', '2222', '0909090909', '2024-03-04 00:03:46', '2024-03-04 00:03:46', '1709490826.jpg', 1),
(3, 'bobby', 'bro@gmail.com', '3333', '0909090990', '2024-03-04 00:12:11', '2024-03-04 00:12:11', '1709491331.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
