-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 08:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steamfast`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about` varchar(500) NOT NULL,
  `vision` varchar(500) DEFAULT NULL,
  `mission` varchar(500) DEFAULT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about`, `vision`, `mission`, `picture`) VALUES
(1, 'Steam Fast restaurant is an eatry with an aim of providing nutritious food to all our current and esteemed customers. This is achieved through quality services that surpases customers satisfaction. Along with our business philosophy, we aim to be a convenient way of delivering food right at your door step with no extra shipping cost incurred. Yes we are here to you and to meet your stomach needs.', 'To become the world most respected brand in delivering quality food to all our customers and esteeemed customers', 'To provide affordable, quality, and nutritious food to all our customers and esteemed customers.', 'about-us.png');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `office_Address` varchar(200) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `office_Address`, `tel`, `email`) VALUES
(1, 'No. 1 Karji Junction, Ungwar rimi, kaduna, Nigeria', '+234 805 970 9121', 'steamfast878@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `fullName` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `picture` varchar(350) NOT NULL,
  `address` varchar(100) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `fullName`, `email`, `picture`, `address`, `userName`, `password`) VALUES
(1, 'Michael Gabriel Hishen', 'michaelgabriel165@gmail.com', '20180924_094417.jpg', 'Karji Junction, Kaduna', 'admin', '1995'),
(2, 'Mercy Lambo', 'suleiman@yahoo.com', 'images (4).jpeg', 'No. 1 Off Yakowa Road, Karji Junction, Kaduna', 'admin3', '1995'),
(3, 'Precious Faith', 'preshmilbert@gmail.com', 'images-1.jpeg', 'Karji Junction, Kaduna', 'presh', '1995');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_menu`
--

CREATE TABLE `breakfast_menu` (
  `id` int(11) NOT NULL,
  `food_name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `picture` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast_menu`
--

INSERT INTO `breakfast_menu` (`id`, `food_name`, `price`, `picture`) VALUES
(49, 'Breakfast Burrito', 'N200', 'breakfast_burrito.jpg'),
(50, 'French Toast', 'N500', 'french_toast.jpg'),
(51, 'Egg Benedict', 'N15000', 'egg_benedict.jpg'),
(52, 'Beakfast Partfait', 'N200', 'breakfast_parfait.jpg'),
(53, 'Hashbrowns AKA Potato Pancakes', 'N500', 'hashbrowns_aka_potato_pancakes.jpg'),
(54, 'Toasted English Muffin', 'N15000', 'toasted_english_muffin.jpg'),
(56, 'French Toast', 'N200', 'french_toast.jpg'),
(57, 'Griddle Cakes', 'N300', 'griddlecakes.jpg'),
(58, 'Fruit Smoothie', 'N300', 'egg_benedict.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fullName` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` text,
  `phone` varchar(50) NOT NULL,
  `message` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fullName`, `email`, `subject`, `phone`, `message`, `date`) VALUES
(1, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', 'Price of Food', '08137950284', 'reduce the price', '2020-02-21 13:31:13'),
(2, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', 'Price of Food', '08137950284', 'Please add price', '2020-02-21 13:31:13'),
(4, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', 'Price of Food', '08137966532', 'Pls change things', '2020-02-21 13:31:13'),
(5, 'Linus Ejen', 'suleiman@yahoo.com', 'Price of Food', '08137966532', 'change menu', '2020-02-21 13:31:13'),
(6, 'Linus Ejen', 'suleiman@yahoo.com', 'Price of Food', '08137966532', 'change menu', '2020-02-21 13:31:13'),
(7, 'Linus Livinus', 'suleiman@yahoo.com', 'KASU/15/CSC/1004   (CSC 412 ASSIGNMENT)', '08137966532', 'ok', '2020-02-21 13:33:12'),
(8, 'Mercy Lambo', 'michaelgabriel118@yahoo.com', 'KASU_SCE_18_POL_2019 GST 202 ASSIGNMENT', '08137966532', 'yes', '2020-02-21 13:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `drinks_menu`
--

CREATE TABLE `drinks_menu` (
  `id` int(11) NOT NULL,
  `food_name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `picture` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks_menu`
--

INSERT INTO `drinks_menu` (`id`, `food_name`, `price`, `picture`) VALUES
(2, 'Breakfast Parfait', 'N500', 'breakfast_parfait.jpg'),
(3, 'Breakfast Burrito', 'N200', 'breakfast_burrito.jpg'),
(6, 'Hot Oatmeal or Poridge', 'N15000', 'hot_oatmeal_or_porridge.jpg'),
(7, 'Hot Oatmeal or Poridge', 'N500', 'hot_oatmeal_or_porridge.jpg'),
(8, 'Fruit Smoothie', 'N200', 'breakfast_burrito.jpg'),
(9, 'Beakfast Partfait', 'N300', 'breakfast_parfait.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture`) VALUES
(18, 'egg_benedict.jpg'),
(19, 'breakfast_burrito.jpg'),
(23, 'egg_benedict.jpg'),
(24, 'hot_oatmeal_or_porridge.jpg'),
(25, 'french_toast.jpg'),
(26, 'french_toast.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `meals_menu`
--

CREATE TABLE `meals_menu` (
  `id` int(11) NOT NULL,
  `food_name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `picture` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals_menu`
--

INSERT INTO `meals_menu` (`id`, `food_name`, `price`, `picture`) VALUES
(4, 'Nigerian Coconut Fried Rice', 'N500', 'nigerian-coconut-fried-rice.jpg'),
(7, 'Beacon Eggs', 'N200', 'bacon_and_Eggs.jpg'),
(8, 'Hot Oatmeal or Poridge', 'N300', 'hot_oatmeal_or_porridge.jpg'),
(13, 'Nigerian Coconut Fried Rice', 'N200', 'nigerian-coconut-fried-rice.jpg'),
(14, 'Groundnut', 'N300', 'nigerian-coconut-fried-rice.jpg'),
(15, 'French Toast', 'N500', 'nigerian-coconut-fried-rice.jpg'),
(16, 'French Toast', 'N200', 'nigerian-coconut-fried-rice.jpg'),
(18, 'Hot Oatmeal or Poridge', 'N300', 'hot_oatmeal_or_porridge.jpg'),
(20, 'Beacon Eggs', 'N300', 'bacon_and_Eggs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `breakfast` varchar(300) DEFAULT NULL,
  `meals` varchar(300) DEFAULT NULL,
  `snacks` varchar(300) DEFAULT NULL,
  `drinks` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL,
  `monday` varchar(50) DEFAULT NULL,
  `tuesday` varchar(50) DEFAULT NULL,
  `wednesday` varchar(50) DEFAULT NULL,
  `thursday` varchar(50) DEFAULT NULL,
  `friday` varchar(50) DEFAULT NULL,
  `saturday` varchar(50) DEFAULT NULL,
  `sunday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '7:00 am to 12 pm', '7:00 am to 12 pm', '7:00 am to 12 pm', '7:00 am to 12 pm', '7:00 am to 12 pm', '9:00 am to 10 pm', '10:00 am to 12 pm');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `persons` varchar(30) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `reserved_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` varchar(50) NOT NULL,
  `message` varchar(40) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `fullName`, `email`, `mobile`, `persons`, `date`, `reserved_date`, `time`, `message`, `status`) VALUES
(1, 'Mercy Lambo', 'mercyattonyx@gmail.com', '0706289378', '3 People', '02/21/2020', '2020-03-26 15:54:40', '3:05', 'i will love my table to be colorful', '0'),
(4, 'Mercy Lambo', 'suleiman@yahoo.com', '08137950201', '8 People', '02/08/2020', '2020-03-26 15:54:47', '20:03', 'Please i am will be coming soon', '1'),
(6, 'Mercy Lambo', 'suleiman@yahoo.com', '08137950201', '10 People', '02/29/2020', '2020-03-29 17:36:59', '20:03', 'okk', '1'),
(7, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', '08137950201', '9 People', '02/21/2020', '2020-05-27 11:16:30', '20:03', 'ionjkn jn', '1'),
(8, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', '08059709121', '9 People', '02/26/2020', '2020-05-27 11:16:51', '21:09', 'nkjnnk', 'Invalid'),
(9, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', '08137950201', '8 People', '02/15/2020', '2021-03-12 17:31:53', '14:34', 'ddd', 'Invalid'),
(10, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', '0815598267', '9 People', '02/15/2020', '2021-03-12 17:32:05', '03:23', 'pl', '1'),
(11, 'Linus Livinus', 'michaelgabriel5968@yahoo.com', '08137950200', '3 People', '03/02/2020', '2020-05-27 11:16:13', '15:34', 'ok', '1'),
(12, 'Mercy Lambo', 'suleiman@yahoo.com', '0706289378', '9 People', '02/15/2020', '2021-03-12 17:32:17', '14:34', 'kj', 'Invalid'),
(13, 'Mercy Lambo', 'michaelgabriel4968@yahoo.com', '0815598267', '8 People', '02/26/2020', '2020-03-26 11:35:35', '14:34', 'ok', '2'),
(14, 'Jane', 'mercyattonyxx@gmail.com', '07062893782', '8 People', '02/08/2020', '2020-03-30 11:57:23', '3:20am', 'good', '3');

-- --------------------------------------------------------

--
-- Table structure for table `snacks_menu`
--

CREATE TABLE `snacks_menu` (
  `id` int(11) NOT NULL,
  `food_name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `picture` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snacks_menu`
--

INSERT INTO `snacks_menu` (`id`, `food_name`, `price`, `picture`) VALUES
(1, 'Griddle Cakes', 'N1500', 'egg_benedict.jpg'),
(2, 'Breakfast Burito', 'N500', 'breakfast_burrito.jpg'),
(3, 'French Toast', 'N300', 'french_toast.jpg'),
(4, 'Egg Benedict', 'N300', 'egg_benedict.jpg'),
(5, 'Potato Pancake', 'N500', 'hashbrowns_aka_potato_pancakes.jpg'),
(6, 'Toasted English Muffin', 'N1000', 'toasted_english_muffin.jpg'),
(7, 'Beakfast Partfait', 'N200', 'breakfast_parfait.jpg'),
(8, 'French Toast', 'N500', 'french_toast.jpg'),
(9, 'Biscuit and Gravy', 'N500', 'biscuits_and_gravy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstName`, `lastName`, `middleName`, `position`, `picture`) VALUES
(2, 'Gabriel', 'k', 'l', 'Cook', 'images (7).jpeg'),
(3, 'Ben', 'Bulus', 'Hishen', 'Cook', 'images (9).jpeg'),
(5, 'Benedicta', 'Bulus', 'Geshomm', 'Pastry Chef', 'images (6).jpeg'),
(6, 'Ben', 'Bulus', 'Geshomm', 'Pastry Chef', 'images (4).jpeg'),
(7, 'Gabriel', 'Bulus', 'Hishen', 'Cook', 'images (6).jpeg'),
(8, 'Matthew', 'Achaajan', 'Milbert', 'Cashier', 'images (6).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast_menu`
--
ALTER TABLE `breakfast_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks_menu`
--
ALTER TABLE `drinks_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals_menu`
--
ALTER TABLE `meals_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks_menu`
--
ALTER TABLE `snacks_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `breakfast_menu`
--
ALTER TABLE `breakfast_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `drinks_menu`
--
ALTER TABLE `drinks_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `meals_menu`
--
ALTER TABLE `meals_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `snacks_menu`
--
ALTER TABLE `snacks_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
