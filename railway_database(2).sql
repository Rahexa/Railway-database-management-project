-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 06:50 PM
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
-- Database: `railway_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Name` varchar(15) NOT NULL,
  `Booking_number` int(4) UNSIGNED NOT NULL,
  `class` varchar(2) NOT NULL,
  `from_station` varchar(15) NOT NULL,
  `to_station` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Date_of_Journey` date NOT NULL,
  `Journey_Type` varchar(20) NOT NULL,
  `Ticket_Type` varchar(11) NOT NULL,
  `train_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Booked_time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `Booking_number`, `class`, `from_station`, `to_station`, `Age`, `sex`, `Status`, `Date_of_Journey`, `Journey_Type`, `Ticket_Type`, `train_no`, `user_id`, `Booked_time`) VALUES
('rahi', 69, 'ec', 'Dhaka Junction', 'Chittagong Cent', 20, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 28, '00:00:00'),
('bn', 68, 'ec', 'Dhaka Junction', 'Chittagong Cent', 5, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 28, '00:00:00'),
('fgsd', 67, 'ec', 'Dhaka Junction', 'Chittagong Cent', 3, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 0, '00:00:00'),
('ma', 66, 'ec', 'Dhaka Junction', 'Khulna Terminal', 5, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1050, 0, '00:00:00'),
('baba', 65, 'ec', 'Dhaka Junction', '0', 5, 'male', 'booked', '2024-02-27', 'oneWay', 'adult', 1020, 28, '00:00:00'),
('hamem', 64, 'ec', 'Dhaka Junction', 'Chittagong Cent', 45, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 0, '00:00:00'),
('Hamim', 63, 'ec', 'Dhaka Junction', 'Chittagong Cent', 20, 'male', 'booked', '2024-02-21', 'oneWay', 'adult', 1020, 0, '00:00:00'),
('nmfrnmg', 70, 'ec', 'Dhaka Junction', 'Chittagong Cent', 50, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 28, '10:12:32'),
('Abir', 71, 'ec', 'Dhaka Junction', 'Chittagong Cent', 20, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 31, '13:26:30'),
('Abir', 72, 'ec', 'Dhaka Junction', 'Chittagong Cent', 12, 'male', 'booked', '2024-02-29', 'roundTrip', 'adult', 1020, 31, '16:06:19'),
('abir', 73, 'ec', 'Dhaka Junction', 'Chittagong Cent', 20, 'male', 'booked', '2024-02-21', 'oneWay', 'adult', 1020, 31, '16:24:09'),
('Abir', 74, 'ec', 'Chittagong Cent', 'Khulna Terminal', 20, 'male', 'booked', '2024-02-21', 'oneWay', 'adult', 0, 31, '16:25:04'),
('abir', 75, 'ec', 'Dhaka Junction', 'Dhaka Junction', 20, 'male', 'booked', '2024-02-29', 'oneWay', 'adult', 0, 31, '16:28:11'),
('Abir', 76, 'ec', 'Dhaka Junction', 'Chittagong Cent', 52, 'male', 'booked', '2024-02-28', 'roundTrip', 'adult', 1020, 31, '16:31:50'),
('Abir', 77, 'bu', 'Dhaka Junction', 'Chittagong Cent', 10, 'male', 'booked', '2024-02-22', 'oneWay', 'adult', 1020, 31, '16:36:26'),
('SAjjad', 78, 'ec', 'Dhaka Junction', 'Chittagong Cent', 10, 'male', 'booked', '2024-02-29', 'oneWay', 'adult', 1020, 31, '16:40:00'),
('Abir', 79, 'ec', 'Dhaka Junction', 'Chittagong Cent', 20, 'male', 'booked', '2024-02-28', 'oneWay', 'adult', 1020, 31, '16:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `interlist`
--

CREATE TABLE `interlist` (
  `Number` int(6) DEFAULT NULL,
  `st1` varchar(10) DEFAULT NULL,
  `st1arrives` varchar(10) DEFAULT NULL,
  `st2` varchar(10) DEFAULT NULL,
  `st2arrives` varchar(10) DEFAULT NULL,
  `st3` varchar(10) DEFAULT NULL,
  `st3arrives` varchar(10) DEFAULT NULL,
  `st4` varchar(10) DEFAULT NULL,
  `st4arrives` varchar(10) DEFAULT NULL,
  `st5` varchar(10) DEFAULT NULL,
  `st5arrives` varchar(10) DEFAULT NULL,
  `origin` varchar(20) NOT NULL,
  `oriarr` varchar(10) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Destiarr` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wed` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seats_availability`
--

CREATE TABLE `seats_availability` (
  `Train_No` int(11) NOT NULL,
  `Train_Name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `1A` int(11) NOT NULL,
  `2A` int(11) NOT NULL,
  `3A` int(11) NOT NULL,
  `AC` int(11) NOT NULL,
  `CC` int(11) NOT NULL,
  `SL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seats_availability`
--

INSERT INTO `seats_availability` (`Train_No`, `Train_Name`, `date`, `1A`, `2A`, `3A`, `AC`, `CC`, `SL`) VALUES
(2131, 'rwqerad', '2024-01-01', 0, 1, 0, 0, 0, 0),
(2131, 'rwqerad', '2024-01-01', 0, 1, 0, 0, 0, 0),
(2131, 'rwqerad', '2024-01-01', 0, 1, 0, 0, 0, 0),
(2131, 'rwqerad', '2024-01-01', 0, 1, 0, 0, 0, 0),
(2131, 'rwqerad', '2024-01-01', 0, 1, 0, 0, 0, 0),
(2131, 'rwqerad', '2024-01-01', 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trainroutes`
--

CREATE TABLE `trainroutes` (
  `TrainNo` int(11) NOT NULL,
  `TrainName` varchar(255) DEFAULT NULL,
  `TrainRoute` varchar(255) DEFAULT NULL,
  `DepartureTime` time DEFAULT NULL,
  `DepartureStation` varchar(100) DEFAULT NULL,
  `ArrivalStation` varchar(100) DEFAULT NULL,
  `ArrivalTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainroutes`
--

INSERT INTO `trainroutes` (`TrainNo`, `TrainName`, `TrainRoute`, `DepartureTime`, `DepartureStation`, `ArrivalStation`, `ArrivalTime`) VALUES
(1020, 'Dhaka to Chittagong Express', 'Dhaka Junction - Chittagong Central', '08:00:00', 'Dhaka Junction', 'Chittagong Central', '12:00:00'),
(1030, 'Chittagong to Dhaka Express', 'Chittagong Central - Dhaka Junction', '09:00:00', 'Chittagong Central', 'Dhaka Junction', '13:00:00'),
(1040, 'Chittagong to Rajshahi Express', 'Chittagong Central - Rajshahi Station', '10:00:00', 'Chittagong Central', 'Rajshahi Station', '14:00:00'),
(1050, 'Dhaka to Khulna Express', 'Dhaka Junction - Khulna Terminal', '11:00:00', 'Dhaka Junction', 'Khulna Terminal', '15:00:00'),
(1060, 'Dhaka to Rajshahi Express', 'Dhaka Junction - Rajshahi Station', '12:00:00', 'Dhaka Junction', 'Rajshahi Station', '16:00:00'),
(1070, 'Dhaka to Sylhet Express', 'Dhaka Junction - Sylhet Junction', '13:00:00', 'Dhaka Junction', 'Sylhet Junction', '17:00:00'),
(1080, 'Dhaka to Barisal Express', 'Dhaka Junction - Barisal Central', '14:00:00', 'Dhaka Junction', 'Barisal Central', '18:00:00'),
(1090, 'Dhaka to Rangpur Express', 'Dhaka Junction - Rangpur Terminal', '15:00:00', 'Dhaka Junction', 'Rangpur Terminal', '19:00:00'),
(2000, 'Dhaka to Comilla Express', 'Dhaka Junction - Comilla Junction', '16:00:00', 'Dhaka Junction', 'Comilla Junction', '20:00:00'),
(2010, 'Dhaka to Mymensingh Express', 'Dhaka Junction - Mymensingh Central', '17:00:00', 'Dhaka Junction', 'Mymensingh Central', '21:00:00'),
(2020, 'Dhaka to Jessore Express', 'Dhaka Junction - Jessore Junction', '18:00:00', 'Dhaka Junction', 'Jessore Junction', '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `train_list`
--

CREATE TABLE `train_list` (
  `Number` int(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `arrives` varchar(10) NOT NULL,
  `Departure` varchar(10) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wed` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL,
  `1A` int(11) NOT NULL,
  `2A` int(11) NOT NULL,
  `3A` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `General` int(11) NOT NULL,
  `Ladies` int(11) NOT NULL,
  `Tatkal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `train_routes_tracking`
--

CREATE TABLE `train_routes_tracking` (
  `TrainNo` int(11) NOT NULL,
  `TrainName` varchar(255) DEFAULT NULL,
  `TrainRoute` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `marital_status`, `dob`, `mobile`) VALUES
(5, 'Rahi', 'ahmed', 'rnjahi96@gmail.com', 'x!}zF2c~,?-SEx;', 'male', '', '1982-02-02', '0225569966'),
(6, 'Rahi', 'ahmed', 'hhhi96@gmail.com', 'x!}zF2c~,?-SEx;', 'male', '', '1982-02-02', '0225569966'),
(8, 'Rahi', 'ahmed', 'hghjjjhhi96@gmail.com', 'x!}zF2c~,?-SEx;', 'male', '', '1982-02-02', '0225569966'),
(14, 'Raihan', 'Sikder', 'rahi@gmail.com', '$2y$10$UpPIBbSCqlOmEUjZDwnTB.j12niguMGpm47HtQ4ECgrhartBmn6.2', 'male', 'married', '1982-02-02', '123555'),
(15, 'akib', 'JABED', 'akib@gmail.com', '$2y$10$E2xDYzLjdTSAclEdGZRrquJxN4OumeFR9rZ9soQf4Z/URd0Wa5hie', 'male', 'married', '1981-02-02', '1222'),
(16, 'sajjad hossain', 'emon', 'emmj@gmail.com', '255966', 'male', 'single', '1980-02-02', '2565656565'),
(17, 'Abir', 'Ahmed', 'Abir265@gmail.com', 'abir255', 'male', 'married', '2016-02-23', '0000005555555'),
(18, 'Rahi', 'ahmed', 'rahi625@gmail.com', '6251', 'm', 'm', '2024-02-15', '22'),
(19, 'RAihan', 'Sikder', 'nur625@gmail.com', '0000000', 'male', 'single', '2024-02-21', '85666663'),
(20, 'ggh', 'jhh', 'abdul26@gmail.com', '252521325', 'male', 'm', '2024-02-28', '000'),
(21, 'hamed', 'hasan', 'hamed52@gmail.com', '4355335225', 'male', 'married', '2024-02-20', '21222222'),
(22, 'hamed', 'hasan', 'jdnf@gmail.com', '4655441241', 'male', 'married', '2024-02-29', '112142142'),
(25, 'ejkhr', 'uweut', 'Abihh25@gmail.com', 'hjhj', 'male', 'married', '2024-02-28', '2414341'),
(27, 'ejkhr', 'uweut', 'Abibhhbhh25@gmail.com', 'hjhj', 'male', 'married', '2024-02-28', '2414341'),
(28, 'ghgh', 'ghgh', 'abdugggl26@gmail.com', '252521325', 'male', 'married', '2024-02-27', '1322'),
(29, 'sajjad', 'emon', 'sa@gmail.com', '12355', 'male', 'married', '2024-02-23', '56566'),
(30, 'sajjad', 'emon', 'saddd@gmail.com', '12355', 'male', 'married', '2024-02-23', '56566'),
(31, 'Abir', 'Mahmud', 'abir@gmail.com', '123456', 'male', 'married', '2024-02-23', '0125555858'),
(33, 'Abir', 'Mahmud', 'abigr@gmail.com', '123456', 'male', 'married', '2024-02-23', '0125555858'),
(34, 'hammam', 'al', 'hammam@gmail.com', '2112112122', 'male', 'married', '2024-02-21', '544145445'),
(35, 'bbabbabba', 'bvabbbaba', 'b@gmail.com', '32223', 'male', 'married', '2024-02-14', '.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_number`);

--
-- Indexes for table `trainroutes`
--
ALTER TABLE `trainroutes`
  ADD PRIMARY KEY (`TrainNo`);

--
-- Indexes for table `train_list`
--
ALTER TABLE `train_list`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `train_routes_tracking`
--
ALTER TABLE `train_routes_tracking`
  ADD PRIMARY KEY (`TrainNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_number` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
