-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 03:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flogelinds_cookiesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_coffee_hot`
--

CREATE TABLE IF NOT EXISTS `productbeverages_coffee_hot` (
`BEV_coffeehot_id` int(11) NOT NULL,
  `BEV_coffeehot_name` varchar(255) NOT NULL,
  `BEV_coffeehot_image` varchar(255) NOT NULL,
  `BEV_coffeehot_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_coffee_hot`
--

INSERT INTO `productbeverages_coffee_hot` (`BEV_coffeehot_id`, `BEV_coffeehot_name`, `BEV_coffeehot_image`, `BEV_coffeehot_price`) VALUES
(81, 'Americano Coffee (hot)', 'BEV_coffee_Americano.png', 50.00),
(82, 'Latte Coffee (hot)', 'BEV_coffee_Latte.png', 60.00),
(83, 'Cappuccino Coffee (hot)', 'BEV_coffee_Cappuccino.png', 60.00),
(84, 'Mocha Coffee (hot)', 'BEV_coffee_Mocha.png', 75.00),
(85, 'Caramel Macchiato Coffee (hot)', 'BEV_coffee_Caramel Macchiato.png', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_coffee_iced`
--

CREATE TABLE IF NOT EXISTS `productbeverages_coffee_iced` (
`BEV_coffeeiced_id` int(11) NOT NULL,
  `BEV_coffeeiced_name` varchar(255) NOT NULL,
  `BEV_coffeeiced_image` varchar(255) NOT NULL,
  `BEV_coffeeiced_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_coffee_iced`
--

INSERT INTO `productbeverages_coffee_iced` (`BEV_coffeeiced_id`, `BEV_coffeeiced_name`, `BEV_coffeeiced_image`, `BEV_coffeeiced_price`) VALUES
(86, 'Americano (iced)', 'BEV_coffee_Americano.png', 70.00),
(87, 'Latte Coffee (iced)', 'BEV_coffee_Latte.png', 80.00),
(88, 'Mocha Coffee (iced)', 'BEV_coffee_Mocha.png', 85.00),
(89, 'Caramel Macchiato Coffee (iced)', 'BEV_coffee_Caramel Macchiato.png', 130.00);

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_lemon_12oz`
--

CREATE TABLE IF NOT EXISTS `productbeverages_lemon_12oz` (
`BEV_lemon12oz_id` int(11) NOT NULL,
  `BEV_lemon12oz_name` varchar(255) NOT NULL,
  `BEV_lemon12oz_image` varchar(255) NOT NULL,
  `BEV_lemon12oz_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_lemon_12oz`
--

INSERT INTO `productbeverages_lemon_12oz` (`BEV_lemon12oz_id`, `BEV_lemon12oz_name`, `BEV_lemon12oz_image`, `BEV_lemon12oz_price`) VALUES
(91, 'Lemonade (12oz)', 'BEV_lemonade.png', 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_lemon_16oz`
--

CREATE TABLE IF NOT EXISTS `productbeverages_lemon_16oz` (
`BEV_lemon16oz_id` int(11) NOT NULL,
  `BEV_lemon16oz_name` varchar(255) NOT NULL,
  `BEV_lemon16oz_image` varchar(255) NOT NULL,
  `BEV_lemon16oz_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_lemon_16oz`
--

INSERT INTO `productbeverages_lemon_16oz` (`BEV_lemon16oz_id`, `BEV_lemon16oz_name`, `BEV_lemon16oz_image`, `BEV_lemon16oz_price`) VALUES
(92, 'Lemonade (16oz)', 'BEV_lemonade.png', 40.00);

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_milkfrappes_12oz`
--

CREATE TABLE IF NOT EXISTS `productbeverages_milkfrappes_12oz` (
`BEV_frappe12oz_id` int(11) NOT NULL,
  `BEV_frappe12oz_name` varchar(255) NOT NULL,
  `BEV_frappe12oz_image` varchar(255) NOT NULL,
  `BEV_frappe12oz_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_milkfrappes_12oz`
--

INSERT INTO `productbeverages_milkfrappes_12oz` (`BEV_frappe12oz_id`, `BEV_frappe12oz_name`, `BEV_frappe12oz_image`, `BEV_frappe12oz_price`) VALUES
(62, 'Caramel Frappe (12oz)', 'BEV_frappe_Caramel.png', 85.00),
(63, 'Strawberry Frappe (12oz)', 'BEV_frappe_Strawberry.png', 85.00),
(64, 'Chocolate Frappe (12oz)', 'BEV_frappe_Chocolate.png', 85.00),
(65, 'Matcha Frappe (12oz)', 'BEV_frappe_Matcha.png', 95.00),
(67, 'Mint Choco Chip Frappe (12oz)', 'BEV_frappe_Mint Choco Chip.png', 100.00),
(69, 'Blue Shark Frappe (12oz)', 'BEV_frappe_Blue Shark.png', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_milkfrappes_16oz`
--

CREATE TABLE IF NOT EXISTS `productbeverages_milkfrappes_16oz` (
`BEV_frappe16oz_id` int(11) NOT NULL,
  `BEV_frappe16oz_name` varchar(255) NOT NULL,
  `BEV_frappe16oz_image` varchar(255) NOT NULL,
  `BEV_frappe16oz_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_milkfrappes_16oz`
--

INSERT INTO `productbeverages_milkfrappes_16oz` (`BEV_frappe16oz_id`, `BEV_frappe16oz_name`, `BEV_frappe16oz_image`, `BEV_frappe16oz_price`) VALUES
(72, 'Caramel Frappe (16oz)', 'BEV_frappe_Caramel.png', 125.00),
(73, 'Strawberry Frappe (16oz)', 'BEV_frappe_Strawberry.png', 125.00),
(74, 'Chocolate Frappe (16oz)', 'BEV_frappe_Chocolate.png', 125.00),
(75, 'Matcha Frappe (16oz)', 'BEV_frappe_Matcha.png', 135.00),
(77, 'Mint Choco Chip Frappe (16oz)', 'BEV_frappe_Mint Choco Chip.png', 140.00),
(79, 'Blue Shark Frappe (160z)', 'BEV_frappe_Blue Shark.png', 140.00);

-- --------------------------------------------------------

--
-- Table structure for table `productbeverages_otherhot`
--

CREATE TABLE IF NOT EXISTS `productbeverages_otherhot` (
`BEV_otherhot_id` int(11) NOT NULL,
  `BEV_otherhot_name` varchar(255) NOT NULL,
  `BEV_otherhot_image` varchar(255) NOT NULL,
  `BEV_otherhot_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productbeverages_otherhot`
--

INSERT INTO `productbeverages_otherhot` (`BEV_otherhot_id`, `BEV_otherhot_name`, `BEV_otherhot_image`, `BEV_otherhot_price`) VALUES
(96, 'Hot Chocolate', 'BEV_others_Hot Chocolate.png', 55.00),
(97, 'Hot Tea with Honey', 'BEV_others_Hot Tea with Honey.png', 40.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_brownies`
--

CREATE TABLE IF NOT EXISTS `productdesserts_brownies` (
`DES_brownies_id` int(11) NOT NULL,
  `DES_brownies_name` varchar(255) NOT NULL,
  `DES_brownies_image` varchar(255) NOT NULL,
  `DES_brownies_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_brownies`
--

INSERT INTO `productdesserts_brownies` (`DES_brownies_id`, `DES_brownies_name`, `DES_brownies_image`, `DES_brownies_price`) VALUES
(51, 'Fudge Brownies', 'DES_brownies_Fudge.png', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_cheesecake`
--

CREATE TABLE IF NOT EXISTS `productdesserts_cheesecake` (
`DES_cheesecake_id` int(11) NOT NULL,
  `DES_cheesecake_name` varchar(255) NOT NULL,
  `DES_cheesecake_image` varchar(255) NOT NULL,
  `DES_cheesecake_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_cheesecake`
--

INSERT INTO `productdesserts_cheesecake` (`DES_cheesecake_id`, `DES_cheesecake_name`, `DES_cheesecake_image`, `DES_cheesecake_price`) VALUES
(46, 'Original NY Cheesecake', 'DES_cheesecake_Original.png', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_classiccookie`
--

CREATE TABLE IF NOT EXISTS `productdesserts_classiccookie` (
`DES_classic_id` int(11) NOT NULL,
  `DES_classic_name` varchar(255) NOT NULL,
  `DES_classic_image` varchar(255) NOT NULL,
  `DES_classic_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_classiccookie`
--

INSERT INTO `productdesserts_classiccookie` (`DES_classic_id`, `DES_classic_name`, `DES_classic_image`, `DES_classic_price`) VALUES
(26, 'Choco Chunks Cookies', 'DES_classic_Choco Chunks.png', 45.00),
(27, 'Double Choco Chunks', 'DES_classic_Double Choco Chunks.png', 45.00),
(28, 'White Choco Chunks', 'DES_classic_White Choco Chunks.png', 45.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_crinkles`
--

CREATE TABLE IF NOT EXISTS `productdesserts_crinkles` (
`DES_crinkles_id` int(11) NOT NULL,
  `DES_crinkles_name` varchar(255) NOT NULL,
  `DES_crinkles_image` varchar(255) NOT NULL,
  `DES_crinkles_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_crinkles`
--

INSERT INTO `productdesserts_crinkles` (`DES_crinkles_id`, `DES_crinkles_name`, `DES_crinkles_image`, `DES_crinkles_price`) VALUES
(56, 'Red Velvet Crinkles', 'DES_crinkles_Red Velvet.png', 80.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_deluxecookie`
--

CREATE TABLE IF NOT EXISTS `productdesserts_deluxecookie` (
`DES_deluxe_id` int(11) NOT NULL,
  `DES_deluxe_name` varchar(255) NOT NULL,
  `DES_deluxe_image` varchar(255) NOT NULL,
  `DES_deluxe_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_deluxecookie`
--

INSERT INTO `productdesserts_deluxecookie` (`DES_deluxe_id`, `DES_deluxe_name`, `DES_deluxe_image`, `DES_deluxe_price`) VALUES
(31, 'Spicy Dark Choco', 'DES_deluxe_Spicy Dark Choco.png', 50.00),
(32, 'Matcha Green Tea with White Chunks', 'DES_deluxe_Matcha Green Tea with White Chunks.png', 50.00),
(33, 'Red Velvet with White Chunks', 'DES_deluxe_Red Velvet with White Chunks.png', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_muffin`
--

CREATE TABLE IF NOT EXISTS `productdesserts_muffin` (
`DES_muffin_id` int(11) NOT NULL,
  `DES_muffin_name` varchar(255) NOT NULL,
  `DES_muffin_image` varchar(255) NOT NULL,
  `DES_muffin_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_muffin`
--

INSERT INTO `productdesserts_muffin` (`DES_muffin_id`, `DES_muffin_name`, `DES_muffin_image`, `DES_muffin_price`) VALUES
(41, 'Choco Cheescake Muffins', 'DES_muffin_Choco Cheescake muffins.png', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `productdesserts_supremecookie`
--

CREATE TABLE IF NOT EXISTS `productdesserts_supremecookie` (
`DES_supreme_id` int(11) NOT NULL,
  `DES_supreme_name` varchar(255) NOT NULL,
  `DES_supreme_image` varchar(255) NOT NULL,
  `DES_supreme_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesserts_supremecookie`
--

INSERT INTO `productdesserts_supremecookie` (`DES_supreme_id`, `DES_supreme_name`, `DES_supreme_image`, `DES_supreme_price`) VALUES
(36, 'Mahattan Macadamia Cookies', 'DES_supreme_Mahattan Macadamia.png', 55.00),
(37, 'Triple Chocolate with Cashew', 'DES_supreme_Triple Chocolate with Cashew.png', 55.00);

-- --------------------------------------------------------

--
-- Table structure for table `productnyfavorites_appetizer`
--

CREATE TABLE IF NOT EXISTS `productnyfavorites_appetizer` (
`NY_appetizer_id` int(11) NOT NULL,
  `NY_appetizer_name` varchar(255) NOT NULL,
  `NY_appetizer_image` varchar(255) NOT NULL,
  `NY_appetizer_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productnyfavorites_appetizer`
--

INSERT INTO `productnyfavorites_appetizer` (`NY_appetizer_id`, `NY_appetizer_name`, `NY_appetizer_image`, `NY_appetizer_price`) VALUES
(21, 'Nachos', 'NY_appetizer_Nachos.png', 120.00),
(22, 'Fries Platter', 'NY_appetizer_Fries Platter.png', 100.00),
(23, 'Chilli Fries Platter', 'NY_appetizer_Chilli Fries Platter.png', 140.00);

-- --------------------------------------------------------

--
-- Table structure for table `productnyfavorites_burger_junior`
--

CREATE TABLE IF NOT EXISTS `productnyfavorites_burger_junior` (
`NY_BRGRjunior_id` int(11) NOT NULL,
  `NY_BRGRjunior_name` varchar(255) NOT NULL,
  `NY_BRGRjunior_image` varchar(255) NOT NULL,
  `NY_BRGRjunior_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productnyfavorites_burger_junior`
--

INSERT INTO `productnyfavorites_burger_junior` (`NY_BRGRjunior_id`, `NY_BRGRjunior_name`, `NY_BRGRjunior_image`, `NY_BRGRjunior_price`) VALUES
(12, 'Staten Island Burger (junior)', 'NY_burger_Staten Island.png', 55.00),
(13, 'Manhattan Burger (junior)', 'NY_burger_Manhattan.png', 80.00),
(14, 'Queens Burger (junior)', 'NY_burger_Queens.png', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `productnyfavorites_burger_supreme`
--

CREATE TABLE IF NOT EXISTS `productnyfavorites_burger_supreme` (
`NY_BRGRsupreme_id` int(11) NOT NULL,
  `NY_BRGRsupreme_name` varchar(255) NOT NULL,
  `NY_BRGRsupreme_image` varchar(255) NOT NULL,
  `NY_BRGRsupreme_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productnyfavorites_burger_supreme`
--

INSERT INTO `productnyfavorites_burger_supreme` (`NY_BRGRsupreme_id`, `NY_BRGRsupreme_name`, `NY_BRGRsupreme_image`, `NY_BRGRsupreme_price`) VALUES
(17, 'Staten Island Burger (supreme)', 'NY_burger_Staten Island.png', 90.00),
(18, 'Manhattan Burger (supreme)', 'NY_burger_Manhattan.png', 115.00),
(19, 'Queens Burger (supreme)', 'NY_burger_Queens.png', 135.00);

-- --------------------------------------------------------

--
-- Table structure for table `productnyfavorites_hotdogsandwich_junior`
--

CREATE TABLE IF NOT EXISTS `productnyfavorites_hotdogsandwich_junior` (
`NY_HDjunior_id` int(11) NOT NULL,
  `NY_HDjunior_name` varchar(255) NOT NULL,
  `NY_HDjunior_image` varchar(255) NOT NULL,
  `NY_HDjunior_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productnyfavorites_hotdogsandwich_junior`
--

INSERT INTO `productnyfavorites_hotdogsandwich_junior` (`NY_HDjunior_id`, `NY_HDjunior_name`, `NY_HDjunior_image`, `NY_HDjunior_price`) VALUES
(1, 'Plain Hotdog Sandwich (junior)', 'NY_hdsandwich_Plain.png', 45.00),
(2, 'New York Hotdog Sandwich (junior)', 'NY_hdsandwich_New York.png', 55.00),
(3, 'Reuben Hotdog Sandwich (junior)', 'NY_hdsandwich_Reuben.png', 55.00),
(4, 'Chili Dog Sandwich (junior)', 'NY_hdsandwich_Chillicon Carne.png', 65.00),
(5, 'Tsunami Hotdog Sandwich (junior)', 'NY_hdsandwich_tsunami.png', 85.00);

-- --------------------------------------------------------

--
-- Table structure for table `productnyfavorites_hotdogsandwich_supreme`
--

CREATE TABLE IF NOT EXISTS `productnyfavorites_hotdogsandwich_supreme` (
`NY_HDsupreme_id` int(11) NOT NULL,
  `NY_HDsupreme_name` varchar(255) NOT NULL,
  `NY_HDsupreme_image` varchar(255) NOT NULL,
  `NY_HDsupreme_price` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productnyfavorites_hotdogsandwich_supreme`
--

INSERT INTO `productnyfavorites_hotdogsandwich_supreme` (`NY_HDsupreme_id`, `NY_HDsupreme_name`, `NY_HDsupreme_image`, `NY_HDsupreme_price`) VALUES
(6, 'Plain Hotdog Sandwich (supreme)', 'NY_hdsandwich_Plain.png', 55.00),
(7, 'New York Hotdog Sandwich (supreme)', 'NY_hdsandwich_New York.png', 65.00),
(8, 'Reuben Hotdog Sandwich (supreme)', 'NY_hdsandwich_Reuben.png', 65.00),
(9, 'Chili Dog Sandwich (supreme)', 'NY_hdsandwich_Chillicon Carne.png', 75.00),
(10, 'Tsunami Hotdog Sandwich (supreme)', 'NY_hdsandwich_tsunami.png', 105.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'merry', 'merry@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'merikris', 'marycrisbaysa@gmail.com', '58b4e38f66bcdb546380845d6af27187'),
(6, 'merryann', 'merry@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'ann', 'merry@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'merryann', 'meme@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'rosalinda', 'rosalinda123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'ann', 'ann@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productbeverages_coffee_hot`
--
ALTER TABLE `productbeverages_coffee_hot`
 ADD PRIMARY KEY (`BEV_coffeehot_id`);

--
-- Indexes for table `productbeverages_coffee_iced`
--
ALTER TABLE `productbeverages_coffee_iced`
 ADD PRIMARY KEY (`BEV_coffeeiced_id`);

--
-- Indexes for table `productbeverages_lemon_12oz`
--
ALTER TABLE `productbeverages_lemon_12oz`
 ADD PRIMARY KEY (`BEV_lemon12oz_id`);

--
-- Indexes for table `productbeverages_lemon_16oz`
--
ALTER TABLE `productbeverages_lemon_16oz`
 ADD PRIMARY KEY (`BEV_lemon16oz_id`);

--
-- Indexes for table `productbeverages_milkfrappes_12oz`
--
ALTER TABLE `productbeverages_milkfrappes_12oz`
 ADD PRIMARY KEY (`BEV_frappe12oz_id`);

--
-- Indexes for table `productbeverages_milkfrappes_16oz`
--
ALTER TABLE `productbeverages_milkfrappes_16oz`
 ADD PRIMARY KEY (`BEV_frappe16oz_id`);

--
-- Indexes for table `productbeverages_otherhot`
--
ALTER TABLE `productbeverages_otherhot`
 ADD PRIMARY KEY (`BEV_otherhot_id`);

--
-- Indexes for table `productdesserts_brownies`
--
ALTER TABLE `productdesserts_brownies`
 ADD PRIMARY KEY (`DES_brownies_id`);

--
-- Indexes for table `productdesserts_cheesecake`
--
ALTER TABLE `productdesserts_cheesecake`
 ADD PRIMARY KEY (`DES_cheesecake_id`);

--
-- Indexes for table `productdesserts_classiccookie`
--
ALTER TABLE `productdesserts_classiccookie`
 ADD PRIMARY KEY (`DES_classic_id`);

--
-- Indexes for table `productdesserts_crinkles`
--
ALTER TABLE `productdesserts_crinkles`
 ADD PRIMARY KEY (`DES_crinkles_id`);

--
-- Indexes for table `productdesserts_deluxecookie`
--
ALTER TABLE `productdesserts_deluxecookie`
 ADD PRIMARY KEY (`DES_deluxe_id`);

--
-- Indexes for table `productdesserts_muffin`
--
ALTER TABLE `productdesserts_muffin`
 ADD PRIMARY KEY (`DES_muffin_id`);

--
-- Indexes for table `productdesserts_supremecookie`
--
ALTER TABLE `productdesserts_supremecookie`
 ADD PRIMARY KEY (`DES_supreme_id`);

--
-- Indexes for table `productnyfavorites_appetizer`
--
ALTER TABLE `productnyfavorites_appetizer`
 ADD PRIMARY KEY (`NY_appetizer_id`);

--
-- Indexes for table `productnyfavorites_burger_junior`
--
ALTER TABLE `productnyfavorites_burger_junior`
 ADD PRIMARY KEY (`NY_BRGRjunior_id`);

--
-- Indexes for table `productnyfavorites_burger_supreme`
--
ALTER TABLE `productnyfavorites_burger_supreme`
 ADD PRIMARY KEY (`NY_BRGRsupreme_id`);

--
-- Indexes for table `productnyfavorites_hotdogsandwich_junior`
--
ALTER TABLE `productnyfavorites_hotdogsandwich_junior`
 ADD PRIMARY KEY (`NY_HDjunior_id`);

--
-- Indexes for table `productnyfavorites_hotdogsandwich_supreme`
--
ALTER TABLE `productnyfavorites_hotdogsandwich_supreme`
 ADD PRIMARY KEY (`NY_HDsupreme_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productbeverages_coffee_hot`
--
ALTER TABLE `productbeverages_coffee_hot`
MODIFY `BEV_coffeehot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `productbeverages_coffee_iced`
--
ALTER TABLE `productbeverages_coffee_iced`
MODIFY `BEV_coffeeiced_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `productbeverages_lemon_12oz`
--
ALTER TABLE `productbeverages_lemon_12oz`
MODIFY `BEV_lemon12oz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `productbeverages_lemon_16oz`
--
ALTER TABLE `productbeverages_lemon_16oz`
MODIFY `BEV_lemon16oz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `productbeverages_milkfrappes_12oz`
--
ALTER TABLE `productbeverages_milkfrappes_12oz`
MODIFY `BEV_frappe12oz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `productbeverages_milkfrappes_16oz`
--
ALTER TABLE `productbeverages_milkfrappes_16oz`
MODIFY `BEV_frappe16oz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `productbeverages_otherhot`
--
ALTER TABLE `productbeverages_otherhot`
MODIFY `BEV_otherhot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `productdesserts_brownies`
--
ALTER TABLE `productdesserts_brownies`
MODIFY `DES_brownies_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `productdesserts_cheesecake`
--
ALTER TABLE `productdesserts_cheesecake`
MODIFY `DES_cheesecake_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `productdesserts_classiccookie`
--
ALTER TABLE `productdesserts_classiccookie`
MODIFY `DES_classic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `productdesserts_crinkles`
--
ALTER TABLE `productdesserts_crinkles`
MODIFY `DES_crinkles_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `productdesserts_deluxecookie`
--
ALTER TABLE `productdesserts_deluxecookie`
MODIFY `DES_deluxe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `productdesserts_muffin`
--
ALTER TABLE `productdesserts_muffin`
MODIFY `DES_muffin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `productdesserts_supremecookie`
--
ALTER TABLE `productdesserts_supremecookie`
MODIFY `DES_supreme_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `productnyfavorites_appetizer`
--
ALTER TABLE `productnyfavorites_appetizer`
MODIFY `NY_appetizer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `productnyfavorites_burger_junior`
--
ALTER TABLE `productnyfavorites_burger_junior`
MODIFY `NY_BRGRjunior_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `productnyfavorites_burger_supreme`
--
ALTER TABLE `productnyfavorites_burger_supreme`
MODIFY `NY_BRGRsupreme_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `productnyfavorites_hotdogsandwich_junior`
--
ALTER TABLE `productnyfavorites_hotdogsandwich_junior`
MODIFY `NY_HDjunior_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `productnyfavorites_hotdogsandwich_supreme`
--
ALTER TABLE `productnyfavorites_hotdogsandwich_supreme`
MODIFY `NY_HDsupreme_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
