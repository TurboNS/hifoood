-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2018 at 09:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5834649_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(255) NOT NULL,
  `adminName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adminUsername` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adminPassword` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `adminName`, `adminUsername`, `adminPassword`) VALUES
(7, 'Sample Restaurant', 'admin@samplerestaurant.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`, `location_status`) VALUES
(3, 53.348499, -6.259881, 'Sample Restaurant', 0),
(4, 53.349140, -6.259967, 'Sample Restaurant http://hifood.000webhostapp.com/restaurant1.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`item_id`, `item_name`) VALUES
(1, 'Starter'),
(2, 'Main'),
(3, 'Beverage'),
(5, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `order_menu`
--

CREATE TABLE `order_menu` (
  `order_id` int(255) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_menu`
--

INSERT INTO `order_menu` (`order_id`, `cust_id`, `item_name`, `price`) VALUES
(48, 'CUST_s.nuth@msn.com', 'Tom Yum Goong', 8),
(49, 'CUST_s.nuth@msn.com', 'Tom Yum Goong', 8),
(50, 'CUST_s.nuth@msn.com', 'Sticky rice Mango', 6);

-- --------------------------------------------------------

--
-- Table structure for table `prepare`
--

CREATE TABLE `prepare` (
  `prepare_id` int(11) NOT NULL,
  `prepare_cust` varchar(250) NOT NULL,
  `prepare_time` time NOT NULL,
  `prepare_comment` text NOT NULL,
  `prepare_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prepare`
--

INSERT INTO `prepare` (`prepare_id`, `prepare_cust`, `prepare_time`, `prepare_comment`, `prepare_status`) VALUES
(6, 'CUST_432', '12:23:00', 'Please cook', 1),
(7, 'gs', '00:00:00', 'gd', 1),
(8, '12', '00:00:12', '12', 1),
(9, 'CUST', '00:00:00', 'LEAVE', 1),
(10, 'CUST_123', '12:30:00', 'I need my chicken red curry thai spice', 1),
(11, 'CUST ', '12:12:00', 'Hey', 1),
(13, 'CUST_145', '18:20:00', 'Please let me know if this okay ', 1),
(14, 'Cust_9465', '10:35:00', 'Please make it Thai spice ', 1),
(15, 'CUST_9488', '13:30:00', 'I have some servere allergies - to all fish, all nuts including shell fish and to all seeds', 1),
(16, 'CUST_3499', '15:30:00', 'I want my somtom thai spce with pla lha please', 1),
(17, 'CUST_4325', '20:21:00', 'I need it spcice', 1),
(18, 's.nuth@msn.com', '19:30:00', 'I am a coeliac allergy, can you please make sure that my dish does not contain any, Thanks!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_item_id` int(255) NOT NULL,
  `menu_item` varchar(255) NOT NULL,
  `sub_menu_item` varchar(255) NOT NULL,
  `menu_info` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_item_id`, `menu_item`, `sub_menu_item`, `menu_info`, `price`) VALUES
(27, 'Starter', 'Tom Yum Goong', 'Thai spicy soup with prawns and coconut milk/ chilli paste/ mushroom/ coriander', 8),
(28, 'Dessert', 'Sticky rice Mango', 'Steamed coconut with sticky rice and yellow mango top with coconut cream and yellow beans', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE `tablebook` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `numpeople` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablebook`
--

INSERT INTO `tablebook` (`id`, `date`, `time`, `numpeople`, `name`, `email`, `phone`) VALUES
(0, '0000-00-00', '7:30am', '1 Person', 'sdfghjk', 'ee@gmail.com', 'fghjkl67890'),
(0, '0000-00-00', '8:00am', '5 Peoples', 'tom', 'tom@gmail.com', '08942356543'),
(0, '1212-12-22', '8:00pm', '2 Peoples', 'Naz', 'nax@gmail.com', '0892958394'),
(0, '0000-00-00', '12:30pm', '2 Peoples', 'Michael Randle', 'michael@gmail.com', '0894237895'),
(0, '0000-00-00', '12:30pm', '2 Peoples', 'Tom', 'tom@gmail.com', '0892345436'),
(0, '2012-12-12', '1:00pm', '1 Person', 'trst', 'test@gmail.com', '0894387689'),
(0, '0000-00-00', '7:00am', '1 Person', 'rytre', '4r@gmail.com', '09876567890'),
(0, '2018-05-21', '1:00pm', '2 Peoples', 'James', 'james@gmail.com', '0899327968'),
(0, '2018-05-06', '7:00am', '1 Person', 'Jamie', 'jamie@roibin.com', '0892345678'),
(0, '2018-05-23', '5:00pm', '2 Peoples', 'M randle', 'mrandle@gmail.com', '0892345678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'test', 'test', '123'),
(2, 'test1', 'test1', '123'),
(3, 'Test2 Test2', 'test2', '123'),
(4, 'demo', 'demo', '123'),
(5, 'Nuth Sirikitiwannakul', 'Nuth', '123'),
(6, 'Michael', 'test', '123'),
(7, 'Turbo Puriphet', 'Turbo', '123'),
(8, 'Jame Simpson', 'Jame@gmail.com', '123'),
(9, 'Jame Simon', 'James', '123'),
(10, 'James', 'James', '123'),
(11, 'Jame', 'James', '123'),
(12, 'Tommy', 'Tommy', '123'),
(13, 'Time', 'Time', '123'),
(14, 'kate', 'kate', '123'),
(15, 'Iri', 'Iri', '123'),
(16, 'Ann', 'Ann', '123'),
(17, 'M Randle', 'mrandle', '123'),
(18, 'Sample', 'sample@gmail.com', '123'),
(19, 'Gghhhj nnnnnj', 'Brunocguedes', 'qwerty'),
(20, 'Simple', 'simple', '123'),
(21, 'Turbo Puriphet', 's.nuth@msn.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_menu`
--
ALTER TABLE `order_menu`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prepare`
--
ALTER TABLE `prepare`
  ADD PRIMARY KEY (`prepare_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_menu`
--
ALTER TABLE `order_menu`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `prepare`
--
ALTER TABLE `prepare`
  MODIFY `prepare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
