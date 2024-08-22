-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 05:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladdtofavorite`
--

CREATE TABLE `tbladdtofavorite` (
  `Fav_id` int(11) NOT NULL,
  `Car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `Booking_id` int(11) NOT NULL,
  `Car_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Booking_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcardetails`
--

CREATE TABLE `tblcardetails` (
  `Car_id` int(11) NOT NULL,
  `Car_name` varchar(30) NOT NULL,
  `Car_model` varchar(30) NOT NULL,
  `Car_type` varchar(30) NOT NULL,
  `Car_price` float NOT NULL,
  `Car_Length` float NOT NULL,
  `Car_width` float NOT NULL,
  `Car_height` float NOT NULL,
  `Car_capacity` varchar(20) NOT NULL,
  `Car_fule_type` varchar(10) NOT NULL,
  `Car_engine` varchar(20) NOT NULL,
  `Car_mileage` float NOT NULL,
  `Car_transmition_type` varchar(20) NOT NULL,
  `Car_gear` int(20) NOT NULL,
  `Car_airbag` int(20) NOT NULL,
  `Car_colour` varchar(20) NOT NULL,
  `Car_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcardetails`
--

INSERT INTO `tblcardetails` (`Car_id`, `Car_name`, `Car_model`, `Car_type`, `Car_price`, `Car_Length`, `Car_width`, `Car_height`, `Car_capacity`, `Car_fule_type`, `Car_engine`, `Car_mileage`, `Car_transmition_type`, `Car_gear`, `Car_airbag`, `Car_colour`, `Car_image`) VALUES
(14, 'Amaze', '2021', 'sadan', 1500000, 13, 15.5, 5.6, '5', 'petrol', 'BS6', 26, 'asd', 0, 2, 'white', 'image.jpg'),
(15, 'Amaze', '2022', 'sadan', 2000000, 13, 15.5, 5.6, '5', 'petrol', 'BS6', 27, 'asd', 0, 4, 'black', 'image.jpg'),
(16, 'AXZ', 'ASD', 'sadan', 123, 13, 15.5, 31, '1', 'petrol', 'BS6', 26, 'a', 0, 4, 'white', 'image.jpg'),
(17, 'amez', 'a', 'sadan', 0, 0, 0, 0, '6', 'abc', 'abc', 12, 'auto', 5, 5, 'white', 'image.jpg'),
(18, 'amez', '.', 'SUV', 1500000, 13, 0, 0, '5', 'abc', 'abc', 26, 'auto', 6, 5, 'black', 'logo.png'),
(19, 'amez', '.', 'sedan', 1500000, 0, 15.5, 0, '6', 'a', 'abc', 12, 'auto', 5, 5, 'white', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `Staff_id` int(11) NOT NULL,
  `Staff_fname` varchar(20) NOT NULL,
  `Staff_mname` varchar(20) NOT NULL,
  `Staff_lname` varchar(20) NOT NULL,
  `Staff_designation` varchar(20) NOT NULL,
  `Staff_contactno` bigint(10) NOT NULL,
  `Staff_email` varchar(30) NOT NULL,
  `Staff_address` varchar(50) NOT NULL,
  `Staff_doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbltestdrive`
--

CREATE TABLE `tbltestdrive` (
  `Testdrive_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Car_id` int(11) NOT NULL,
  `Testdrive_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Uid` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contactno` bigint(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Uid`, `First_name`, `Middle_name`, `Last_name`, `Address`, `Email`, `Password`, `Contactno`, `image`) VALUES
(31, 'Bharat', 'hareshbhai', 'Ghadiya', 'kavita1', 'bharatghadiya99@gmail.com', '$2y$10$eaubcdyHJ1bLj7GJcznYMuJ0mwQ8M3YzG4JfFrfR9QNP1dA2AUasq', 9879926003, ''),
(38, 'manishsir', 'vala', 'vala', 'jgfytfy', 'manishvala62@gmail.com', '$2y$10$t/guyBWnPPtVdWswCGXSLegLdI6lK736AEA.QC6nJmk/n81WH/b2q', 5252005252, ''),
(39, 'Bharat', 'Hareshbhai', 'Ghadiya', '77 Kavita Row House Surat 395006', 'demo95104@gmail.com', '$2y$10$gj3HvcyBhl1Wt0MxIuhtge8VNTHt9PljLz6O1wV5w5h5cC5VqFlpG', 9856321459, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladdtofavorite`
--
ALTER TABLE `tbladdtofavorite`
  ADD PRIMARY KEY (`Fav_id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `tblcardetails`
--
ALTER TABLE `tblcardetails`
  ADD PRIMARY KEY (`Car_id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`Staff_id`);

--
-- Indexes for table `tbltestdrive`
--
ALTER TABLE `tbltestdrive`
  ADD PRIMARY KEY (`Testdrive_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladdtofavorite`
--
ALTER TABLE `tbladdtofavorite`
  MODIFY `Fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcardetails`
--
ALTER TABLE `tblcardetails`
  MODIFY `Car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `Staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltestdrive`
--
ALTER TABLE `tbltestdrive`
  MODIFY `Testdrive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
