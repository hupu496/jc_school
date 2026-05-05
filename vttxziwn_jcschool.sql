-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2026 at 01:24 PM
-- Server version: 10.11.16-MariaDB-cll-lve
-- PHP Version: 8.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vttxziwn_jcschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `added_on` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE `alumini` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `batch` text NOT NULL,
  `profession` text NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`id`, `name`, `phone_no`, `email`, `address`, `city`, `state`, `batch`, `profession`, `added_on`, `status`) VALUES
(1, 'Prabal Biswas', '9212450030', 'prabalgts@gmail.com', 'Ghatsila, Jharkhand', 'Ghatsila', 'Jharkhand', '1994', 'Software Professional', '2026-05-01 13:04:41', 1),
(2, 'Tanushree Paul', '8210702128', 'tanu280685@gmail.com', 'LIC Colony, Kashida , Ghatsila, ', 'Ghatsila', 'Jharkhand', '2001', 'Business', '2026-05-01 18:55:16', 1),
(3, 'Tapas Chatterjee', '9341008974', 'tapasc95@gmail.com', 'Kashida, Ghatsila', 'Ghatsila', 'Jharkhand', '1981', 'President', '2026-05-03 12:16:16', 1),
(4, 'Shaibal Bhattacherjee ', '7759955055', 'shaibalbhattacherjee@gmail.com', 'Uttaran, Main Road, Ghatsila ', 'Ghatsila ', 'Jharkhand ', '1978', 'Retired LIC Official ', '2026-05-03 12:18:03', 1),
(5, 'Nilu Dutta', '9431380650', 'niluduttagts@gmail.com', 'Kashida', 'Ghatsila ', 'Jharkhand', 'all', 'Business ', '2026-05-03 12:18:13', 1),
(6, 'Uttam Sinha', '9223736558', 'uttamsinha96562@gmail.com', '67,GURGA BARI LANE', 'KASHIDA, GHATSILA', 'Jharkhand', '1978', 'Business ', '2026-05-03 12:21:51', 1),
(7, 'Manoranjan Baksi', '6206087025', 'niluduttagts@gmail.com', 'Dahigora, Ghatsila ', 'Ghatsila ', 'Jharkhand ', 'all', 'Secretary, J C High School Managing Committee ', '2026-05-03 12:39:16', 1),
(8, 'Subrata kumar Aditya ', '9304251588', 'subrataaditya398@gmail.com', 'Uparbandha, Po Surda East Singhbhum ', 'Ghatsila ', 'Jharkhand ', '1991', 'Teacher ', '2026-05-03 12:43:22', 1),
(9, 'Deepak Kumar Gantait', '9934184319', 'deepak.gantait1969@gmail.com', 'Dahigora, Ghatsila', 'Ghatsila', 'Jharkhand', '1986', 'Peon', '2026-05-03 13:06:37', 1),
(10, 'Kakali giri', '7001408531', 'kakulipaloigiri@gmail.com', 'Jugal Meena apartment, Subhaspally', 'Midnapore(W)', 'West Bengal', '1991', 'গৃহ বধূ', '2026-05-03 13:11:27', 1),
(11, 'Mousumi Dutta', '8210331567', 'duttamousumi483@gmail.com', 'Kashida, Ghatsila', 'Ghatsila', 'Jharkhand', 'all', 'Asst Teacher(Bengali) ', '2026-05-03 13:28:40', 1),
(12, 'Shrishty Patar', '7857085098', 'patarshrishty@gmail.com', 'Tamakpal ', 'Ghatsila ', 'Jharkhand ', '2023', 'EX Student ', '2026-05-03 13:29:13', 1),
(13, 'Kamalesh Das', '8789308844', 'khushikamal2012@gmail.com', 'Ghatshila ', 'Ghatshila ', 'Jharkhand ', '1991', 'Business ', '2026-05-03 14:39:14', 1),
(14, 'Sunanda Panda', '7903431277', 'sunandapanda333@gmail.com', 'At+Po-Mohulia,Block-Ghatshila,Ps-Galudih,Dist-East Singhbhum,State-Jharkhand,', 'East Singhbhum', 'Jharkhand', '', '1989', '2026-05-03 15:32:36', 1),
(15, 'Sukanta Das', '9805504451', 'sukanta.quality@gmail.com', 'Mahaveer Roshan Heights, 302', 'Seawoods, Navi Mumbai', 'Maharashtra', '1989', 'Head of Quality in pharmaceutical company', '2026-05-03 16:03:55', 1),
(16, 'PARTHA PRATIM GHOSH ', '8825359855', 'partha.12011977@gmail.com', 'At---- Post office road , Ghatsila ', 'Ghatsila ', 'Jharkhand ', '1992', 'Govt .Teacher', '2026-05-03 17:16:01', 1),
(17, 'Banashree Mahato', '6203540922', 'sonasonu18@gmail.com', '1/2 ‘A’ block ,Eden Park, Kadma ', 'Jamshedpur ', 'Jharkhand ', '2005', 'teaching', '2026-05-03 17:18:38', 1),
(18, 'Soumik Kumar Brahma', '9880537132', 'soumik.brahma@gmail.com', 'kasavanahalli Bangalore', 'Bangalore', 'Karnataka', '1999', 'Service ', '2026-05-03 18:00:40', 1),
(19, 'Shakti Prasad Dhal ', '9006238086', 'dhalshaktiprasad@gmail.com', 'At- Dahigora  , Po- Ghatsila, Dist- Singhbhum(E), JHARKHAND ', 'Ghatsila ', 'Jharkhand ', '1979', 'Ex- Employee', '2026-05-03 18:25:39', 1),
(20, 'Mrityunjoy Roy', '9122928078', 'mrityunjoyroy056@gmail.com', 'Mrityunjoy Roy, C/O Tapan Bej, House no.14, Durga path, near Kadma Gurudwara, Ulliyan, Kadma, Jamshefpur, Jharkhand, Pin.831005', 'East Singhbhum', 'Jharkhand', '1989', 'Business ', '2026-05-03 18:34:14', 1),
(21, 'Mrityunjoy Roy', '9122928078', 'mrityunjoyroy056@gmail.com', 'Gopalpur, Ghatshila ', 'East Singhbhum', 'Jharkhand', '1989', 'Business ', '2026-05-03 18:41:21', 1),
(22, 'Saibal Kumar Das', '9681624311', 'saibal.das07@gmail.com', 'Kolkata ', 'South 24 Parganas', 'West Bengal ', '1999', 'Business ', '2026-05-03 19:01:13', 1),
(23, 'Manoj Bhattacharjee', '8092542730', 'manoj.bhattacharjee1@gmail.com', 'Vill- Kashida, PO PS- Ghatshila, Near old durga mandir road, dist - East - Singhbhum. Jharkhand ', 'Ghatshila ', 'Jharkhand ', '1999', 'Private job ', '2026-05-03 22:07:38', 1),
(24, 'DEVABRATA MISRA', '7549057605', 'deb.gts@gmail.com', 'Vikrampur kashida post Ghatshila dist -East Singhbhum 832303', 'Ghatsila ', 'Jharkhand ', '1999', 'Banker', '2026-05-03 22:14:29', 1),
(25, 'BIJAN MALLADEB', '9771544688', 'bijan.malladeb@yahoo.com', '87MJ+8CJ', 'Ranchi', 'Jharkhand', '1978', 'Retired Professional', '2026-05-04 09:41:11', 1),
(26, 'Gopal Biswas', '8092567033', 'gopal2401biswashcl@gmail.com', 'Village Pawrah Ghatsila ', 'Dist East singhbhum', 'Jharkhand', '1997', 'Tata motors supervisor ', '2026-05-04 14:47:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(1, 'admin', 'admin123', 'admin@gmail.com', 'admin', '2026-05-04 09:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_counter`
--

CREATE TABLE `visitor_counter` (
  `id` int(11) NOT NULL,
  `total_visits` int(11) DEFAULT 9999
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitor_counter`
--

INSERT INTO `visitor_counter` (`id`, `total_visits`) VALUES
(1, 10001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumini`
--
ALTER TABLE `alumini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumini`
--
ALTER TABLE `alumini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
