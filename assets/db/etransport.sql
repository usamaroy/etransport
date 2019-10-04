-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2019 at 05:44 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etransport`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` enum('punjab','sindh','kpk','balochistan','fata','gilgit') NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `login_role` enum('admin','user','super_user') DEFAULT NULL,
  `user_role` enum('transport','cargo','user','null') DEFAULT 'null',
  `ip_address` varchar(30) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `address`, `cnic`, `city`, `province`, `contact`, `email`, `password`, `login_role`, `user_role`, `ip_address`, `image`, `gender`, `date`, `last_name`) VALUES
(1, 'Musawer', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '3120269441941', 'Bahawalpur', 'punjab', '+923336513516', 'usama@gmail.com', '12345678', 'user', 'transport', NULL, 'partner-APW-AMG1076-hd.jpg', 'male', '2019-09-25 07:10:10', 'Ali'),
(2, 'Musawer', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '3120269441941', 'Bahawalpur', 'punjab', '+923336513516', 'pakjalihouse@yahoo.com', 'admin123', NULL, 'cargo', '::1', 'Screenshot from 2019-09-24 14-06-13.png', 'male', '2019-10-01 19:29:33', 'Ali');

-- --------------------------------------------------------

--
-- Table structure for table `transport_detail`
--

CREATE TABLE `transport_detail` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `vehicle_name` varchar(20) NOT NULL,
  `vehicle_owner` varchar(20) NOT NULL,
  `vehicle_color` varchar(20) NOT NULL,
  `vehicle_model` varchar(10) NOT NULL,
  `engine_no` varchar(20) NOT NULL,
  `chasis_no` varchar(20) NOT NULL,
  `seat_capacity` varchar(15) NOT NULL,
  `vehicle_type` enum('car','truck','van','jeep') NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_detail`
--

INSERT INTO `transport_detail` (`user_id`, `user_name`, `reg_no`, `vehicle_name`, `vehicle_owner`, `vehicle_color`, `vehicle_model`, `engine_no`, `chasis_no`, `seat_capacity`, `vehicle_type`, `ip_address`, `date`, `status`, `id`, `image`) VALUES
(1, 'Musawerr', 'VPK 2109', 'Honda', 'Musawer', 'white', '2019', '52423HDC', 'HND19PO89', '4', 'car', '', '2019-10-03 15:30:56', 'active', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_track`
--

CREATE TABLE `transport_track` (
  `id` int(11) NOT NULL,
  `driven_km` int(20) NOT NULL,
  `vehicle_earn` int(20) NOT NULL,
  `driving_hour` int(20) NOT NULL,
  `no_of_orders` int(20) NOT NULL,
  `transport_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_detail`
--
ALTER TABLE `transport_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_track`
--
ALTER TABLE `transport_track`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transport_detail`
--
ALTER TABLE `transport_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transport_track`
--
ALTER TABLE `transport_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;