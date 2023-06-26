-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 04:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `Patients_ID` int(11) NOT NULL,
  `Day` date NOT NULL,
  `Time` time NOT NULL,
  `Docter_ID` int(11) NOT NULL,
  `Receptionist_ID` int(11) NOT NULL,
  `Medical_Aid_Number` varchar(11) NOT NULL,
  `Medical_Fund` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ID`, `Patients_ID`, `Day`, `Time`, `Docter_ID`, `Receptionist_ID`, `Medical_Aid_Number`, `Medical_Fund`, `Description`) VALUES
(3, 7, '2023-06-26', '09:00:00', 1, 3, '578943', 'Bonitas', 'Diarhea'),
(8, 18, '2023-06-25', '09:00:00', 3, 1, '73214', 'Discovery', 'Flu'),
(12, 11, '2023-06-23', '14:00:00', 7, 2, '689435', 'BestMed', 'Face'),
(14, 8, '2023-06-22', '08:00:00', 6, 1, '85973', 'Discovery', 'Lung trnasplant'),
(15, 10, '2023-06-07', '09:00:00', 1, 1, '4537689', 'Bonitas', 'Fever'),
(16, 1, '2023-06-05', '12:00:00', 5, 1, '435746', 'Discovery', 'Tooth Ache'),
(18, 18, '2023-06-01', '14:00:00', 3, 1, '73214', 'Discovery', 'Flu'),
(24, 12, '2023-06-24', '14:00:00', 7, 1, '479853', 'Bonitas', 'Face'),
(29, 18, '2023-05-29', '12:00:00', 4, 1, '73214', 'Discovery', 'Fever'),
(30, 18, '2023-06-27', '09:00:00', 7, 2, '73214', 'Discovery', 'Flu'),
(33, 7, '2023-07-06', '13:00:00', 3, 1, '578943', 'Bonitas', 'Fever'),
(34, 8, '2023-07-03', '12:00:00', 3, 1, '85973', 'Discovery', 'Heart trnasplant'),
(35, 9, '2023-07-04', '08:00:00', 4, 2, '7084632', 'Bonitas', 'Bran surgery'),
(36, 9, '2023-07-05', '14:00:00', 5, 2, '7084632', 'Bonitas', 'Bone marrow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Docter_ID` (`Docter_ID`),
  ADD KEY `Docter_ID_2` (`Docter_ID`),
  ADD KEY `Receptionist_ID` (`Receptionist_ID`),
  ADD KEY `Patients_ID` (`Patients_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`Docter_ID`) REFERENCES `docters` (`ID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`Patients_ID`) REFERENCES `patients` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`Receptionist_ID`) REFERENCES `receptionists` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
