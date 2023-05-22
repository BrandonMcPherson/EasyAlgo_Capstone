-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 04:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyalgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `username` varchar(255) NOT NULL,
  `score` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`username`, `score`) VALUES
('bdon', 2),
('glenz', 2),
('mjane', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `userName` varchar(225) NOT NULL,
  `userEmail` varchar(225) NOT NULL,
  `userUid` varchar(225) NOT NULL,
  `userPwd` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userUid`, `userPwd`) VALUES
(1, 'Brandon', 'bdon@gmail.com', 'algoman', '$2y$10$y/kohEI6AJhqt0hp.CBB6.J2BIEX3MuwUs91JWypyMM1YolDBIoda'),
(2, 'Ally', 'Ally@gmail.com', 'ally', '$2y$10$3FgFjx1zmFvyolFeY4.ah.vgGHIEX7mOkHaxXMmK9zyG6Pvs82M1C'),
(3, 'Mary Jane', 'mj@gmail.com', 'mjane', '$2y$10$2m7WqiD8rNW8lK6Q5QNEqOwXumpi2PWrVR3qO9rgEHI/EAmGoMXrm'),
(4, 'Glendon McPherson', 'gdon@gmail.com', 'glenz', '$2y$10$PusIgeshyzGx/3RAvrMZm.9KG3baak1Kro/9SULAroYvDbbEuQbhy'),
(5, 'JoeB', 'Jbrow@gmail.com', 'Jbrizzle', '$2y$10$n3O9ex609YeJNzwsUPNDHOFLYoRsnOZc18w0Fwmw1kVBEtaUTPNjW'),
(6, 'Kev', 'kev@gmail.com', 'kevski', '$2y$10$Yzdwmb/xOgMu7CexJ7E6YOGBg1lJ1YkCmIOAsuo9LCFKz5/lnyl2G'),
(7, 'Brandon2', 'bdon2@gmail.com', 'bdon', '$2y$10$cvcr6tgtdyHZ90z8AlcQ8eKBbCmWJlvqGuFWWdU982F7Ciqr1oOzW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
