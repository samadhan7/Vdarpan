-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 08:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `Organization` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `ContactNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Organization`, `FirstName`, `LastName`, `ContactNo`) VALUES
('Ravi', 'Kumar', '11111111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(8, 'Sinhgad College of Engineering', 'http://cms.sinhgad.edu/SIM_Web_Assets/images/sinhgad-logo-colour-1.png', 'http://cms.sinhgad.edu/sinhgad_engineering_institutes/sknsits_lonavala/fee-structure.aspx', 'PUNE'),
(10, 'Ahmednagar College', 'https://www.aca.edu.in/Attachments/HomeBannerMst/nz1itlhl.jpg', 'https://www.aca.edu.in/', 'Ahmednagar'),
(21, 'Vishwakarma Institute of Technology', 'https://www.vit.edu/images/vit-logo.png', 'https://www.vit.edu/', 'pune'),
(22, 'Zeal Institute', 'none', 'none', 'Pune'),
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'http://www.unipune.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'PIMPRI CHINCHWAD COLLEGE OF ENGINEERING', 'http://www.pccoepune.com/images/pccoe-logo-new.webp', 'http://www.pccoepune.com/', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `computerservices`
--

CREATE TABLE `computerservices` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computerservices`
--

INSERT INTO `computerservices` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'https://www.iimb.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(75, 'Punee College', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'AnatRao Pawar', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innercolleges.html', 'pune'),
(79, 'Pawanputra Super Market...', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'xyz', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'https://www.iimb.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(75, 'Punee College', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'AnatRao Pawar', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innercolleges.html', 'pune'),
(79, 'Pawanputra Super Market...', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'xyz', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE `groceries` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `logo_url` text NOT NULL,
  `website_url` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groceries`
--

INSERT INTO `groceries` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(1, 'Manmoti Super Market', 'https://lh3.googleusercontent.com/EnON3lIVIratgEZsR8JQLMAK0OYiju9Non6F1x-rOj2apFybjmyO7YPeL3NfVeBxuYkCUJxzms4DkdTY8vytOKjjvswhsqZ3y5VlvDzZ=w900-rw', 'none', 'pune'),
(2, 'Pawanputra Super Market', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'None', 'mumbai'),
(6, 'Pune Bazzar', 'none', 'none', 'pune'),
(5, 'FOOD JUNCTION', 'data:image/jpeg;base64,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', 'none', 'pune'),
(11, 'New Market', 'https://sanchetihospital.org/wp-content/uploads/2022/10/nabh-logo.png', 'none', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'https://www.iimb.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(75, 'Punee College', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'AnatRao Pawar', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innercolleges.html', 'pune'),
(79, 'Pawanputra Super Market...', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'xyz', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'https://www.iimb.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(75, 'Punee College', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'AnatRao Pawar', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innercolleges.html', 'pune'),
(79, 'Pawanputra Super Market...', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'xyz', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `newadminsign`
--

CREATE TABLE `newadminsign` (
  `name` char(50) NOT NULL,
  `email` char(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `birthdate` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newadminsign`
--

INSERT INTO `newadminsign` (`name`, `email`, `password`, `birthdate`, `address`) VALUES
('', 'Admi@gmail.com', '', '', ''),
('Ram', 'admin1@gmail.com', '123', '1990-12-05', 'banglore'),
('RUSHIKESH', 'rushi123@gmail.com', '1234', '2000-10-09', 'PUNE'),
('RUSHIKESH', 'rushii1234@gmail.com', '123', '2000-10-10', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `newusersign`
--

CREATE TABLE `newusersign` (
  `name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `birthdate` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newusersign`
--

INSERT INTO `newusersign` (`name`, `email`, `password`, `birthdate`, `address`) VALUES
('user3', 'fds@gmail.com', 'User3', '2000-10-25', 'mumbai'),
('Bangar Rushikesh Adinath', 'rushi11@gmail.com', 'Pass', '2000-12-21', 'A/P Narayandoho , Tal-Dist: Ahmednagar\r\nA/P Narayandoho , Tal-Dist: Ahmednagar'),
('RUSHIKESH', 'rushi123@gmail.com', '1234', '2000-10-09', 'Ahmednagar'),
('RUSHIKESH', 'rushibangar9888@gmail.com', '123456', '2000-10-10', 'pune'),
('RUSHIKESH', 'rushibangar988@gmail.com', '123', '2000-10-10', 'pune'),
('rushi', 'rushibangar98@gmail.com', 'Pass', '2000-10-09', 'Nagar'),
('User1', 'User!@gmail.com', '123', '2000-10-09', 'Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `pgs`
--

CREATE TABLE `pgs` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pgs`
--

INSERT INTO `pgs` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'https://www.iimb.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(75, 'Punee College', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'AnatRao Pawar', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innercolleges.html', 'pune'),
(79, 'Pawanputra Super Market...', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'xyz', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`title`, `text`, `rating`) VALUES
('About Feedback', 'Your services were excellent .', 1);

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `name`, `logo_url`, `website_url`, `city`) VALUES
(61, 'University Of Pune', 'https://lh3.googleusercontent.com/p/AF1QipOqhVQFhJuMUtrnDuVHSAqwXfpifFgaKXDpjZQ=s1360-w1360-h1020', 'https://www.iimb.ac.in/', 'Pune'),
(62, 'PESs Modern College Of Engineering, Pune', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(75, 'Punee College', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innerpages.html', 'Pune'),
(78, 'AnatRao Pawar', 'https://moderncoe.edu.in/images/new_bannernew.jpg', 'innercolleges.html', 'pune'),
(79, 'Pawanputra Super Market...', 'https://lh3.googleusercontent.com/kLVtrSr1SBxq5dBQ-jcorT_fLcoofY4ICOd1GVw-WaUdzNSAzK-i_lehI8FkniyAgymGN7dAgbONPrWPkZsQ_HWqS1RJk-5ncs06S70=w900-rw', 'xyz', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Neha', 'neha@gmail.com', 147),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.comq', 11),
('Rushikesh', 'new@gmail.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`ContactNo`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newadminsign`
--
ALTER TABLE `newadminsign`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `newusersign`
--
ALTER TABLE `newusersign`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
