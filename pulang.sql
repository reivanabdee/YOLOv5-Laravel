-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2023 at 02:30 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `pulang`
--

CREATE TABLE `pulang` (
  `id` int UNSIGNED NOT NULL,
  `pulang` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_absen` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pulang`
--

INSERT INTO `pulang` (`id`, `pulang`, `id_absen`) VALUES
(303, '13:16:13', 7),
(304, '13:19:16', 6),
(305, '13:19:37', 1),
(306, '13:19:45', 15),
(307, '13:20:08', 10),
(308, '13:20:09', 9),
(309, '13:20:15', 11),
(310, '13:20:21', 3),
(311, '13:20:26', 4),
(312, '13:20:31', 2),
(313, '13:21:57', 14),
(314, '13:22:16', 13),
(315, '13:23:11', 8),
(316, '13:36:29', 0),
(317, '13:36:58', 5),
(318, '13:37:18', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pulang`
--
ALTER TABLE `pulang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pulang`
--
ALTER TABLE `pulang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
