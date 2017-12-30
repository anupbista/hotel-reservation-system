-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 03:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradise_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `priviledges` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`username`, `password`, `email`, `phone`, `priviledges`) VALUES
('admin', 'admin', 'admin@gmail.com', '9843672756', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_name` varchar(20) NOT NULL,
  `check_in_day` int(10) NOT NULL,
  `check_in_month` varchar(20) NOT NULL,
  `check_in_year` int(20) NOT NULL,
  `check_out_day` int(20) NOT NULL,
  `check_out_month` varchar(20) NOT NULL,
  `check_out_year` int(20) NOT NULL,
  `no_children` int(20) NOT NULL,
  `no_male` int(20) NOT NULL,
  `no_female` int(20) NOT NULL,
  `no_deluxe_room` int(20) NOT NULL,
  `no_db_room` int(20) NOT NULL,
  `no_suite_room` int(20) NOT NULL,
  `no_luxury_room` int(20) NOT NULL,
  `no_superior_room` int(20) NOT NULL,
  `no_premier_room` int(20) NOT NULL,
  `total_rooms_booked` int(20) NOT NULL,
  `booking_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_name`, `check_in_day`, `check_in_month`, `check_in_year`, `check_out_day`, `check_out_month`, `check_out_year`, `no_children`, `no_male`, `no_female`, `no_deluxe_room`, `no_db_room`, `no_suite_room`, `no_luxury_room`, `no_superior_room`, `no_premier_room`, `total_rooms_booked`, `booking_date`) VALUES
('anup', 30, 'Nov', 2016, 2, 'Dec', 2016, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, '2016-11-27'),
('ravi', 10, 'Dec', 2016, 2, 'Jan', 2017, 10, 1, 1, 10, 0, 0, 1, 1, 0, 12, '2016-11-27'),
('anup', 28, 'Nov', 2016, 28, 'Nov', 2016, 3, 3, 3, 1, 0, 0, 0, 0, 0, 1, '2016-11-28'),
('anup', 12, 'Dec', 2016, 12, 'Dec', 2016, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, '2016-12-12'),
('anup', 23, 'Dec', 2016, 23, 'Dec', 2016, 2, 2, 2, 2, 2, 2, 2, 2, 2, 12, '2016-12-23'),
('anup', 27, 'Jan', 2017, 27, 'Jan', 2017, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, '2017-01-27'),
('anup', 1, 'Jan', 2017, 7, 'Feb', 2017, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, '2017-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `user_name` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `hour` int(20) NOT NULL,
  `day_night` varchar(20) NOT NULL,
  `additional` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip_code` int(20) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`user_name`, `phone_no`, `hour`, `day_night`, `additional`, `country`, `city`, `state`, `zip_code`, `payment`) VALUES
('anup', '9843672756', 7, 'P.M', 'Wifi,HotTub,Swimming Pool', 'Nepal', 'Kathmandu', 'Bagmati', 1, 'Paypal'),
('ravi', '9849634282', 12, 'A.M', 'Parking', 'Nepal', 'Kathmandu', 'Bagmati', 1, 'esewa'),
('anup', '984257856', 1, 'A.M', 'Wifi', 'Nepal', 'Kathmandu', 'Bagmati', 1, 'Paypal'),
('anup', '9801111111', 11, 'A.M', 'No', 'UK', 'London', 'East Coast', 225, 'Mastercard'),
('anup', '9845478458', 10, 'A.M', 'Lorem Ipsum Lorem Ipsum Lorem ILorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsumpsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Portuga;', 'Madeira', 'Madeira', 545, 'Mastercard'),
('anup', '9843672756', 10, 'P.M', 'Nope', 'Nepal', 'Kathmandu', 'Bagmati', 1, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `total_rooms` int(11) NOT NULL,
  `deluxe_room` int(11) NOT NULL,
  `double_room` int(11) NOT NULL,
  `suite_room` int(11) NOT NULL,
  `luxury_room` int(11) NOT NULL,
  `superior_room` int(11) NOT NULL,
  `premier_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`total_rooms`, `deluxe_room`, `double_room`, `suite_room`, `luxury_room`, `superior_room`, `premier_room`) VALUES
(300, 50, 50, 50, 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE `room_price` (
  `deluxe_room` int(20) NOT NULL,
  `db_room` int(20) NOT NULL,
  `suite_room` int(20) NOT NULL,
  `luxury_room` int(20) NOT NULL,
  `superior_room` int(20) NOT NULL,
  `premier_room` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`deluxe_room`, `db_room`, `suite_room`, `luxury_room`, `superior_room`, `premier_room`) VALUES
(300, 600, 700, 1200, 500, 900);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `firsname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`firsname`, `lastname`, `username`, `password`, `email`) VALUES
('Anup', 'Bista', 'anup', 'anup', 'anup_b7@outlook.com'),
('Ravi ', 'Balami', 'ravi', 'ravi', 'ravi@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_room_price`
--

CREATE TABLE `user_room_price` (
  `user_name` varchar(20) NOT NULL,
  `total_deluxe_room_price` int(20) NOT NULL,
  `total_db_room_price` int(20) NOT NULL,
  `total_suite_room_price` int(20) NOT NULL,
  `total_luxury_room_price` int(20) NOT NULL,
  `total_superior_room_price` int(20) NOT NULL,
  `total_premier_room_price` int(20) NOT NULL,
  `total_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_room_price`
--

INSERT INTO `user_room_price` (`user_name`, `total_deluxe_room_price`, `total_db_room_price`, `total_suite_room_price`, `total_luxury_room_price`, `total_superior_room_price`, `total_premier_room_price`, `total_price`) VALUES
('anup ', 0, 0, 0, 1200, 0, 0, 1200),
('ravi ', 3000, 0, 0, 1200, 500, 0, 4700),
('anup ', 300, 0, 0, 0, 0, 0, 300),
('anup ', 300, 0, 0, 0, 0, 0, 300),
('anup ', 600, 1200, 1400, 2400, 1000, 1800, 8400),
('anup ', 0, 0, 0, 0, 500, 0, 500),
('anup ', 0, 0, 0, 0, 500, 0, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
