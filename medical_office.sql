-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 08:31 PM
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
(33, 7, '2023-07-06', '13:00:00', 3, 1, '578943', 'Bonitas', 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `docters`
--

CREATE TABLE `docters` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL,
  `Specialisation` varchar(30) NOT NULL,
  `Room_Number` varchar(11) NOT NULL,
  `Profile_pic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docters`
--

INSERT INTO `docters` (`ID`, `Name`, `Surname`, `Age`, `Gender`, `Email`, `Password`, `Phone_Number`, `Specialisation`, `Room_Number`, `Profile_pic`) VALUES
(1, 'Jan', 'Venter', 45, 'Male', 'Jan@gmail.com', 'JH5684', '087345621', 'General Surgeon', 'R4', 'Doctor_1.jpeg'),
(3, 'Kevin', 'Smith', 54, 'Male', 'smi@gmail.com', 'GPS2319', '06435621', 'Genral Surgeon', 'R6', 'Doctor_5.jpeg'),
(4, 'Diana', 'Spencer', 50, 'Female', 'dian@gmail.com', 'DF384f', '0784567321', 'Neuro Surgeon', 'R7', 'Doctor_2.jpeg'),
(5, 'Charles', 'Vindsor', 52, 'Male', 'charl@gmail.com', 'KingC321', '0126543333', 'Orthopedic Surgeon', 'R6', 'Doctor_3.jpeg'),
(6, 'Felix', 'Min', 54, 'Male', 'fel@gmail.com', 'HT3401', '0965462341', 'Transplant Surgeon', 'R5', 'Doctor_6.jpeg'),
(7, 'Meghan', 'Rebel', 45, 'Female', 'megb@gmail.com', 'Meg3215', '0834568976', 'Plastic Surgeon', 'R3', 'Doctor_4.jpeg'),
(14, 'Steven', 'Smith', 55, 'Male', 'sms@gmail.com', 'BG39i1', '06435621', 'Heart Surgen', 'R12', 'Doctor_5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL,
  `Medical_Aid_Number` varchar(11) NOT NULL,
  `Medical_Fund` varchar(30) NOT NULL,
  `Profile_pic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `Name`, `Surname`, `Age`, `Gender`, `Email`, `Password`, `Phone_Number`, `Medical_Aid_Number`, `Medical_Fund`, `Profile_pic`) VALUES
(1, 'Mary', 'Elizabeth', 23, 'Female', 'mary@gmail.com', 'Ml#436', '0815678435', '435746', 'Discovery', 'Patient_1.jpeg'),
(2, 'John', 'Smith', 36, 'Male', ' jo@gmail.com', 'abc123', '0654675678', '486709', 'BestMed', 'Patient_2.jpeg'),
(3, 'Emily', 'Johnson', 42, 'Female', 'ejoh@gmail.com', 'pass1234', '0817045326', '536478', 'Bonitas', 'Patient_8.jpeg'),
(4, 'Michael', 'Davis', 25, 'Male', 'mdav@gmail.com', 'mypass456', '0915559876', '567489', 'Discovery', 'Patient_12.jpeg'),
(5, 'Sarah', 'Thompson', 50, 'Female', 'h.tom@gmail.com', 'securepass4', '0835354321', '487094', 'Bonitas', 'Patient_3.jpeg'),
(6, 'David', 'Rodriguez', 29, 'Male', 'davi@gmail.com', 'p@4ssw0rd!', '0826552468', '567893', 'BestMed', 'Patient_11.jpeg'),
(7, 'Jessica', 'Lee', 38, 'Female', 'jlee@gmail.com', 'mysecretpas', '0915551357', '578943', 'Bonitas', 'Patient_9.jpeg'),
(8, 'Christopher', 'Harris', 31, 'Male', 'chars@gmail.com', 'k12345678', '0515557890', '85973', 'Discovery', 'Patient_15.jpeg'),
(9, 'Megan', 'Wilson', 45, 'Female', 'megw@gmail.com', 'password123', '0934553691', '7084632', 'Bonitas', 'Patient_7.jpeg'),
(10, 'Daniel', 'Anderson', 20, 'Male', 'd.and@gmail.com', 'daniel123', '0215552468', '4537689', 'Bonitas', 'Patient_13.jpeg'),
(11, 'Olivia', 'Martinez', 27, 'Female', 'olivia@gmail.com', 'olivia789', '0152359753', '689435', 'BestMed', 'Patient_4.jpeg'),
(12, 'Mary', 'Johnson', 42, 'Female', 'e.jon@gmail.com', 'securepass1', '0915551234', '479853', 'Bonitas', 'Patient_6.jpeg'),
(13, 'Benjamin', 'Parker', 30, 'Male', 'bpark@gmail.com', 'spiderweb45', '0813355678', '487021', 'BestMed', 'Patient_10.jpeg'),
(18, 'Brett', 'River', 33, 'Male', 'Bretr@gmail.com', 'Br3gh64', '0816089453', '73214', 'Discovery', 'Patient_14.png'),
(21, 'Megan', 'River', 22, 'Female', 'meg@gmail.com', 'BG39i1', '0874653626', 'Bestmed', '', 'Patient_7.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Rank` varchar(20) NOT NULL,
  `SignIn_ID` int(4) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Profile_pic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`ID`, `Name`, `Surname`, `Age`, `Gender`, `Phone_Number`, `Email`, `Password`, `Rank`, `SignIn_ID`, `Status`, `Profile_pic`) VALUES
(1, 'Mary', 'Potter', 41, 'Female', '0125463724', 'mary@gmail.com', 'PW001', 'Master', 1, 'Enabled', 'Receptionist_3.png'),
(2, 'Stephany', 'Middelton', 23, 'Female', '0825642222', 'steph@gmail.com', 'JG298', 'General', 0, 'Enabled', 'Receptionist_2.png'),
(3, 'Elizabeth', 'du Preez', 29, 'Female', '0346571234', 'eli@gmail.com', 'EdP295', 'General', 0, 'Disabled', 'Receptionist_1.png');

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
-- Indexes for table `docters`
--
ALTER TABLE `docters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `docters`
--
ALTER TABLE `docters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
