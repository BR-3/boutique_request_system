-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 08:20 PM
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
-- Database: `clothing_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorized_users`
--

CREATE TABLE `authorized_users` (
  `userId` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authorized_users`
--

INSERT INTO `authorized_users` (`userId`, `username`, `password`, `firstName`, `lastName`, `role`) VALUES
(1, 'bestWorker', 'clothingRocks!', 'Bluma', 'Rodkin', 'administrator'),
(2, 'brodkin', 'fashionBoutiqueEmployee123', 'B', 'R', 'user'),
(3, 'fb123', '1lovec@ts', 'Shprintzy', 'Cohen', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `clothing_data`
--

CREATE TABLE `clothing_data` (
  `clothingType` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `clothingImage` varchar(50) NOT NULL,
  `clothingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothing_data`
--

INSERT INTO `clothing_data` (`clothingType`, `name`, `clothingImage`, `clothingID`) VALUES
('dress', 'dress1', './images/dress1.png', 10001),
('dress', 'dress2', './images/dress2.png', 10002),
('dress', 'dress3', './images/dress3.png', 10003),
('dress', 'dress4', './images/dress4.png', 10004),
('dress', 'dress5', './images/dress5.png', 10005),
('dress', 'dress6', './images/dress6.png', 10006),
('dress', 'dress7', './images/dress7.png', 10007),
('dress', 'dress8', './images/dress8.png', 10008),
('dress', 'dress9', './images/dress9.png', 10009),
('dress', 'dress10', './images/dress10.png', 10010),
('dress', 'dress11', './images/dress11.png', 10011),
('dress', 'dress12', './images/dress12.png', 10012),
('dress', 'dress13', './images/dress13.png', 10013),
('dress', 'dress14', './images/dress14.png', 10014),
('dress', 'dress15', './images/dress15.png', 10015),
('skirt', 'skirt1', './images/skirt1.png', 20001),
('skirt', 'skirt2', './images/skirt2.png', 20002),
('skirt', 'skirt3', './images/skirt3.png', 20003),
('skirt', 'skirt4', './images/skirt4.png', 20004),
('skirt', 'skirt5', './images/skirt5.png', 20005),
('skirt', 'skirt6', './images/skirt6.png', 20006),
('skirt', 'skirt7', './images/skirt7.png', 20007),
('skirt', 'skirt8', './images/skirt8.png', 20008),
('skirt', 'skirt9', './images/skirt9.png', 20009),
('skirt', 'skirt10', './images/skirt10.png', 20010),
('shirt', 'shirt1', './images/shirt1.png', 30001),
('shirt', 'shirt2', './images/shirt2.png', 30002),
('shirt', 'shirt3', './images/shirt3.png', 30003),
('shirt', 'shirt4', './images/shirt4.png', 30004),
('shirt', 'shirt5', './images/shirt5.png', 30005),
('shirt', 'shirt6', './images/shirt6.png', 30006),
('shirt', 'shirt7', './images/shirt7.webp', 30007);

-- --------------------------------------------------------

--
-- Table structure for table `clothing_inventory`
--

CREATE TABLE `clothing_inventory` (
  `clothingID` int(5) NOT NULL,
  `x-small` int(15) NOT NULL,
  `small` int(15) NOT NULL,
  `medium` int(15) NOT NULL,
  `large` int(15) NOT NULL,
  `x-large` int(15) NOT NULL,
  `sizeKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothing_inventory`
--

INSERT INTO `clothing_inventory` (`clothingID`, `x-small`, `small`, `medium`, `large`, `x-large`, `sizeKey`) VALUES
(10001, 23, 14, 36, 72, 26, 1),
(10015, 2, 0, 7, 1, 3, 2),
(10014, 3, 53, 32, 7, 33, 3),
(10013, 32, 23, 33, 33, 13, 4),
(10012, 12, 4, 15, 12, 0, 5),
(10011, 0, 0, 3, 2, 2, 6),
(10009, 15, 12, 12, 13, 11, 7),
(10010, 5, 22, 32, 65, 5, 8),
(10008, 16, 12, 22, 16, 17, 9),
(10002, 15, 15, 15, 15, 15, 10),
(10003, 9, 9, 6, 5, 8, 11),
(10004, 14, 23, 32, 6, 7, 12),
(10005, 25, 24, 15, 23, 27, 13),
(10006, 8, 9, 10, 11, 12, 14),
(10007, 18, 16, 17, 19, 20, 15),
(30006, 26, 25, 25, 25, 28, 16),
(30005, 62, 53, 51, 54, 48, 17),
(30004, 43, 42, 32, 38, 29, 18),
(30003, 26, 28, 29, 31, 36, 19),
(30002, 12, 13, 14, 15, 0, 20),
(30001, 5, 0, 21, 23, 26, 21),
(30007, 12, 21, 25, 26, 28, 22),
(20007, 65, 6, 0, 0, 0, 23),
(20007, 65, 6, 5, 25, 26, 46),
(20001, 25, 29, 36, 37, 3, 48),
(20003, 25, 29, 36, 37, 32, 49),
(20004, 15, 16, 28, 37, 56, 50),
(20005, 33, 32, 31, 37, 16, 51),
(20006, 22, 0, 26, 27, 28, 52),
(20010, 11, 12, 13, 14, 15, 53),
(20009, 19, 18, 29, 26, 27, 54),
(20008, 22, 22, 12, 26, 24, 55),
(20002, 16, 18, 17, 19, 22, 56);

-- --------------------------------------------------------

--
-- Table structure for table `request_history`
--

CREATE TABLE `request_history` (
  `clothingID` int(11) NOT NULL,
  `x-small` int(11) NOT NULL DEFAULT 0,
  `small` int(11) NOT NULL DEFAULT 0,
  `medium` int(11) NOT NULL DEFAULT 0,
  `large` int(11) NOT NULL DEFAULT 0,
  `x-large` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_history`
--

INSERT INTO `request_history` (`clothingID`, `x-small`, `small`, `medium`, `large`, `x-large`) VALUES
(10001, 0, 0, 1, 1, 0),
(20003, 1, 0, 1, 1, 0),
(30007, 0, 0, 1, 0, 0),
(20002, 0, 0, 4, 0, 0),
(10007, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_list`
--

CREATE TABLE `request_list` (
  `clothingID` int(5) NOT NULL,
  `clothingType` varchar(50) NOT NULL,
  `size` varchar(15) NOT NULL,
  `urgency` tinyint(1) NOT NULL DEFAULT 0,
  `additionalInfo` text NOT NULL,
  `requestFilled` tinyint(1) NOT NULL DEFAULT 0,
  `requestID` int(50) NOT NULL,
  `requestDateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_list`
--

INSERT INTO `request_list` (`clothingID`, `clothingType`, `size`, `urgency`, `additionalInfo`, `requestFilled`, `requestID`, `requestDateTime`) VALUES
(10001, 'dress', 'medium', 1, 'Please include the belt.', 1, 43, '2024-10-30 13:19:13.000000'),
(10001, 'dress', 'large', 1, '', 1, 44, '2024-10-30 13:19:41.000000'),
(20003, 'skirt', 'large', 0, '', 0, 45, '2024-10-30 13:20:06.000000'),
(30007, 'shirt', 'medium', 0, '', 0, 46, '2024-10-30 13:21:12.000000'),
(20002, 'skirt', 'medium', 0, '', 0, 47, '2024-10-30 13:29:59.000000'),
(20002, 'skirt', 'medium', 0, '', 1, 48, '2024-10-30 13:35:22.000000'),
(20002, 'skirt', 'medium', 0, '', 0, 49, '2024-10-30 13:35:46.000000'),
(20002, 'skirt', 'medium', 0, '', 0, 50, '2024-10-30 13:36:40.000000'),
(10007, 'dress', 'x-large', 0, '', 0, 51, '2024-10-30 13:37:35.000000'),
(20003, 'skirt', 'medium', 1, 'Please send the blue with white flowers.', 0, 52, '2024-10-31 17:41:22.000000'),
(20003, 'skirt', 'x-small', 0, '', 0, 53, '2024-11-04 10:54:35.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorized_users`
--
ALTER TABLE `authorized_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `clothing_data`
--
ALTER TABLE `clothing_data`
  ADD PRIMARY KEY (`clothingID`);

--
-- Indexes for table `clothing_inventory`
--
ALTER TABLE `clothing_inventory`
  ADD PRIMARY KEY (`sizeKey`),
  ADD KEY `clothingID` (`clothingID`);

--
-- Indexes for table `request_history`
--
ALTER TABLE `request_history`
  ADD KEY `clothingID` (`clothingID`);

--
-- Indexes for table `request_list`
--
ALTER TABLE `request_list`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `clothingID` (`clothingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorized_users`
--
ALTER TABLE `authorized_users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clothing_inventory`
--
ALTER TABLE `clothing_inventory`
  MODIFY `sizeKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `request_list`
--
ALTER TABLE `request_list`
  MODIFY `requestID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clothing_inventory`
--
ALTER TABLE `clothing_inventory`
  ADD CONSTRAINT `clothing_inventory_ibfk_1` FOREIGN KEY (`clothingID`) REFERENCES `clothing_data` (`clothingID`);

--
-- Constraints for table `request_history`
--
ALTER TABLE `request_history`
  ADD CONSTRAINT `request_history_ibfk_1` FOREIGN KEY (`clothingID`) REFERENCES `clothing_data` (`clothingID`);

--
-- Constraints for table `request_list`
--
ALTER TABLE `request_list`
  ADD CONSTRAINT `request_list_ibfk_1` FOREIGN KEY (`clothingID`) REFERENCES `clothing_data` (`clothingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
