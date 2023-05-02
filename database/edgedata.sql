-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 04:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edgedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_username` varchar(500) NOT NULL DEFAULT '',
  `admin_password` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_name` text NOT NULL,
  `phone_num` text NOT NULL,
  `user_email` text NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

CREATE TABLE `influencers` (
  `influencer_id` int(11) NOT NULL,
  `influencer_email` varchar(1000) NOT NULL,
  `influencer_password` varchar(1000) NOT NULL,
  `influencer_firstname` varchar(1000) NOT NULL,
  `influencer_lastname` varchar(1000) NOT NULL,
  `influencer_address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`influencer_id`, `influencer_email`, `influencer_password`, `influencer_firstname`, `influencer_lastname`, `influencer_address`) VALUES
(1, 'DonnyP@gmail.com', 'tink', 'Donny', 'Pangilinan', 'Manila'),
(13, 'NadineL@gmail.com', '2222', 'Nadine', 'Lustre', 'Baclaran'),
(22, 'CocoM@gmail.com', '1111', 'Coco', 'Martina', 'Quiapo');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(5000) NOT NULL DEFAULT '',
  `item_price` double DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_image`, `item_date`) VALUES
(5, 'item3', 1002, '147124.jpg', '2016-11-10'),
(6, 'Item3', 50, '181757.jpg', '2016-11-10'),
(7, 'Item4', 60, '783298.jpg', '2016-11-10'),
(8, 'Item5', 55, '14231.jpg', '2016-11-10'),
(9, 'Item6', 90, '289865.jpg', '2016-11-10'),
(11, 'Item1', 40, '722934.jpg', '2016-11-10'),
(12, 'Item101', 1000, '838084.jpg', '2016-11-14'),
(13, 'Item102', 500, '320199.jpg', '2016-11-14'),
(14, 'Item103', 300, '361204.jpg', '2016-11-14'),
(15, 'Item105', 500, '444526.jpg', '2016-11-14'),
(16, 'Item106', 600, '956983.jpg', '2016-11-14'),
(17, 'Item107', 300, '855187.jpg', '2016-11-14'),
(18, 'Item108', 400, '45968.jpg', '2016-11-14'),
(19, 'item909', 50.5, '158191.jpg', '2016-11-14'),
(21, 'Empire Dress', 3000, '388888.jpg', '2023-04-13'),
(22, 'A-Line Dress', 3500, '517966.jpg', '2023-04-13'),
(23, 'Shift Dress', 2500, '578789.jpeg', '2023-04-13'),
(24, 'Baby Doll Dress', 3000, '364851.jpg', '2023-04-13'),
(25, 'Janet Gaynor', 4000, '860816.jpeg', '2023-04-13'),
(26, 'Mary PickFord', 3500, '341566.jpg', '2023-04-13'),
(27, 'Bette Davis', 5000, '139904.jpg', '2023-04-13'),
(28, 'Ginger Dress', 3500, '566880.jpg', '2023-04-13'),
(29, 'Olivia Dress', 4000, '322918.jpeg', '2023-04-13'),
(30, 'Luise Dress', 4500, '660062.jpg', '2023-04-13'),
(31, 'Loretta Dress', 5500, '193128.jpeg', '2023-04-13'),
(32, 'Jane Wyman', 3000, '659143.jpg', '2023-04-13'),
(33, 'Helon Hayes', 2000, '711401.jpg', '2023-04-13'),
(34, 'Selana Dress', 4500, '810711.jpg', '2023-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `order_name` varchar(1000) NOT NULL DEFAULT '',
  `order_price` double NOT NULL DEFAULT 0,
  `order_quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order_total` double NOT NULL DEFAULT 0,
  `order_status` varchar(45) NOT NULL DEFAULT '',
  `order_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `user_id`, `order_name`, `order_price`, `order_quantity`, `order_total`, `order_status`, `order_date`) VALUES
(34, 9, 'Empire Dress', 3000, 1, 3000, 'Ordered_Finished', '2023-04-23'),
(35, 9, 'Shift Dress', 2500, 1, 2500, 'Ordered', '2023-04-23'),
(36, 9, 'Ginger Dress', 3500, 1, 3500, 'Ordered', '2023-04-23'),
(37, 9, 'Bette Davis', 5000, 1, 5000, 'Ordered', '2023-04-23'),
(38, 9, 'A-Line Dress', 3500, 1, 3500, 'Pending', '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(1000) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `user_firstname` varchar(1000) NOT NULL,
  `user_lastname` varchar(1000) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  `phone_num` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_address`, `phone_num`) VALUES
(1, 'gebb.freelancer@gmail.com', 'gebbz03', 'Gebb', 'Ebero', 'Badas', '0'),
(3, 'gebb.sage@gmail.com', 'gebbz03', 'sdffs', 'adad', 'ssad', '0'),
(4, 'mik@gmail.com', 'mik', 'Gebb', 'Ebero', 'Badas', '0'),
(6, 'shainaapolinar5@gmail.com', 'shai', 'Shai', 'Apolinar', 'San Juan City', '09279791051'),
(9, 'bernadethmercado2@gmail.com', '123', 'berna', 'oliverio', '82 Coronado St. Mandaluyong City', '2147483647');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`influencer_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_orderdetails_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `influencers`
--
ALTER TABLE `influencers`
  MODIFY `influencer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_orderdetails_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
