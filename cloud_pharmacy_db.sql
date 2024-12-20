-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `cloud_pharmacy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `Image` varchar(11) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Specialty` varchar(11) NOT NULL,
  `Hospital` varchar(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `Working_Hours` varchar(11) DEFAULT NULL,
  `Booking` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`Image`, `Name`, `Specialty`, `Hospital`, `Email`, `Phone`, `Working_Hours`, `Booking`) VALUES
(NULL, 'Dr. James Evan Wilson	', 'Oncology', 'Oman Intern', 'James@hotmail.com', '+968 9999 999', '7:00 am - 3', NULL),
('', 'Dr. Gregory House	', 'Diagnostic ', 'Sultan Qabo', 'House@hotmail.com', '+968 9999 299', '11:00 pm - ', NULL),
(NULL, 'Dr. Shaun Murphy', 'Surgery', 'St. Bonaven', 'ShaunM@hotmail.com', '+9689991234', '8:00 am - 4', NULL),
(NULL, 'Dr. Strange', 'Neurosurger', 'Kamar-Taj M', 'StrangeMD@hotmail.com', '+9689995678', '10:00 am - ', NULL),
(NULL, 'Dr. Eric Foreman', 'Neurology', 'The Royal H', 'Foreman@hotmail.com', '+9689998399', '3:00 pm - 1', NULL),
(NULL, 'Dr. Chris Taub', 'Dermatology', 'Sultan Qabo', 'Taub@hotmail.com', '+9689997499', '6:00 am - 6', NULL),
(NULL, 'Dr. Allison Cameron', 'Fitness', 'Oman Intern', 'Cameron@hotmail.com', '+9689996599', '1:00 am - 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL,
  `Stock` int(11) NOT NULL,
  `Pharmacy_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`ID`, `Name`, `Category`, `Price`, `Description`, `Stock`, `Pharmacy_Name`) VALUES
(1, 'Calcium Citrate Petites 400mg', 'Dietary Supplements', 7.00, 'Smaller size, easier to swallow. With vitamin D3 to assist in calcium absorption.', 50, 'Alarimi Pharmacy'),
(2, 'Vitamin C 500 mg Softgels', 'Dietary Supplements', 4.50, 'Helps maintain immune health. Formulated for easy absorption.', 100, 'Alarimi Pharmacy'),
(3, 'VapoRub Chest Rub Ointment', 'Medicines', 6.00, 'Relieves cough, minor aches, and pains. Use on chest, throat, and muscles.', 30, 'Alarimi Pharmacy'),
(4, 'Adol 500 mg', 'Medicines', 5.00, 'Pain relief for headaches, migraines, and fever. Used for infectious diseases.', 200, 'Alarimi Pharmacy'),
(5, '2nd Foods Baby Food Banana Mango', 'Baby Food & Drinks', 2.80, 'Gerber Organic Banana Mango Baby Food. Mango puree treats for infants.', 150, 'AlHarrasi Pharmacy'),
(6, 'Head-To-Toe Baby Wash & Shampoo', 'Baby Food & Drinks', 4.00, 'Gentle shampoo for baby’s sensitive skin and hair. Gently cleanses.', 120, 'AlHarrasi Pharmacy'),
(7, 'Prosobee Soy-Based Infant Formula', 'Baby Food & Drinks', 12.00, 'Infant formula for 0-12 months. Milk-free and lactose-free.', 60, 'AlShamsi Pharmacy'),
(8, 'PediaSure Complete Chocolate', 'Baby Food & Drinks', 8.00, 'For children 1-10 years. Provides vitamins and minerals for immunity and growth.', 80, 'AlShamsi Pharmacy'),
(9, 'Melt-In Milk Sunscreen Lotion SPF 60', 'Personal Care', 8.00, 'SPF 60 face and body sunscreen for fast absorption. Broad-spectrum protection.', 70, 'AlShamsi Pharmacy'),
(10, 'Deodorant With Natural Deodorizers Fresh', 'Personal Care', 4.20, 'Provides natural protection. Aluminum-free and fights odors.', 90, 'AlShamsi Pharmacy'),
(11, 'Extra Strength Sore Throat & Cough Relief Lozenges', 'Medicines', 3.20, 'Relieves sore throat & sore mouth, For pain of canker sores, Relieves cough.', 330, 'AlHarrasi Pharmacy'),
(12, 'Headache Relief Caplets Extra Strength', 'Medicines', 1.60, 'Compare to the active ingredients in Excedrin Extra Strength, Acetaminophen/aspirin (NSAID)/pain.', 70, 'AlHarrasi Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `Logo` varchar(255) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `Working_Hours` varchar(100) NOT NULL,
  `State` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`Logo`, `Name`, `Location`, `Email`, `Phone`, `Working_Hours`, `State`) VALUES
(NULL, 'AlShamsi Pharmacy', 'Abri', 'AlShamsi@hotmail.com', '2476 3525', '24/7', NULL),
(NULL, 'AlHarrasi Pharmacy', 'Muscat-Sur', 'AlHarrasi@hotmail.com', '2476 3115', '24/7', NULL),
(NULL, 'Alarimi Pharmacy', 'Nizwa-Muscat-Sur-Abri', 'Alarimi@hotmail.com', '2476 3225', '24/7', NULL),
(NULL, 'Bahwan', 'Sur', 'Bahwan@hotmail.com', '2476 3525', '24/7', NULL),
(NULL, 'Hashar', 'Muscat', 'Hashar@hotmail.com', '2476 3335', '8:00 am - 11:00 pm', NULL),
(NULL, 'Muscat', 'Muscat-Sur-Abri', 'Muscat@hotmail.com', '2476 3735', '24-(Saturday & Friday Off)', NULL),
(NULL, 'Nizwa', 'Nizwa-Abri', 'Nizwa@hotmail.com', '2356 3735', '24-(Saturday & Friday Off)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `Image` varchar(255) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`Image`, `Name`, `Role`, `Phone`, `Email`) VALUES
('placeholder1.png', 'AbdulRhman Alarimi', 'CEO', '+96812345678', 'abdelrhman@cloudpharmacy.om'),
('placeholder3.png', 'Abdullah Al Shamsi', 'Developer', '+96887654321', 'abdullah@cloudpharmacy.om'),
('placeholder2.png', 'Muadh Al Harrasi', 'Developer', '+96898765432', 'muadh@cloudpharmacy.om');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
