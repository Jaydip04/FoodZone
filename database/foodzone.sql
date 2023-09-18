-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2023 at 09:10 AM
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
-- Database: `foodzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_icon` varchar(50) NOT NULL,
  `ad_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_icon`, `ad_id`) VALUES
(1, 'Punjabi', 'category/punjabi/5.jpg', 1),
(2, 'chinese', 'category/chinese dishes/2.jpg', 2),
(3, 'gujarati', 'category/gujarati/1.jpg', 3),
(4, 'italiyan', 'category/italiyan dishes/2.jpg', 4),
(5, 'south indian', 'category/south indian dishes/2.jpg', 5),
(6, 'starter', 'category/starter/1.jpg', 6),
(7, 'sweets', 'category/sweets/2.jpg', 7),
(8, 'holiday speciyal', 'category/holiday/2.jpg', 8),
(10, 'deserts', 'category/deserts/1.jpg', 10),
(11, 'mocktails', 'category/mocktails/1.jpg', 11),
(12, 'ice cream', 'category/icecream/1.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `g_id` int(5) NOT NULL,
  `rest_id` int(5) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`g_id`, `rest_id`, `file`) VALUES
(1, 1, 'Galary/th (1).jpg'),
(2, 2, 'Galary/th (2).jpg'),
(3, 3, 'Galary/th (3).jpg'),
(4, 4, 'Galary/th (4).jpg'),
(5, 5, 'Galary/th (5).jpg'),
(6, 6, 'Galary/th (6).jpg'),
(7, 7, 'Galary/th (7).jpg'),
(8, 8, 'Galary/th (8).jpg'),
(9, 9, 'Galary/th (9).jpg'),
(10, 10, 'Galary/th (11).jpg'),
(11, 11, 'Galary/th (12).jpg'),
(12, 12, 'Galary/th (10).jpg'),
(13, 13, 'Galary/th (12).jpg'),
(14, 14, 'Galary/th (13).jpg'),
(15, 15, 'Galary/th (14).jpg'),
(16, 16, 'Galary/th (13).jpg'),
(17, 17, 'Galary/th (13).jpg'),
(18, 18, 'Galary/th (14).jpg'),
(19, 19, 'Galary/th (15).jpg'),
(20, 20, 'Galary/th (16).jpg'),
(21, 21, 'Galary/th (17).jpg'),
(22, 22, 'Galary/th (18).jpg'),
(23, 23, 'Galary/th (19).jpg'),
(24, 24, 'Galary/th (20).jpg'),
(25, 25, 'Galary/th (21).jpg'),
(26, 26, 'Galary/th (22).jpg'),
(27, 27, 'Galary/th (23).jpg'),
(28, 28, 'Galary/th (24).jpg'),
(29, 29, 'Galary/th (25).jpg'),
(30, 30, 'Galary/th (27).jpg'),
(39, 1, 'Galary/th (26).jpg'),
(40, 1, 'Galary/'),
(41, 0, 'Galary/'),
(42, 0, 'Galary/'),
(43, 0, 'Galary/th (45).jpg'),
(44, 0, 'Galary/th (4).jpg'),
(45, 1, 'Galary/LOGO.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(5) NOT NULL,
  `rest_id` int(5) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `rest_id`, `filename`, `cat_id`, `title`) VALUES
(1, 1, 'menu/punjabi 2.jpg', 1, 'punjabi'),
(2, 2, 'menu/dosa.jpg', 5, 'south indian'),
(3, 3, 'menu/chinese menu 2.jpg', 2, 'chinese'),
(4, 4, 'menu/gujrati menu.jpg', 3, 'gujrati'),
(5, 5, 'menu/sweets menu.jpg', 7, 'sweet'),
(6, 6, 'menu/indian starter.jpg', 6, 'starter'),
(7, 7, 'menu/italian menu 2.jpg', 4, 'italian'),
(8, 8, 'menu/cake menu.jpg', 6, 'cake'),
(9, 9, 'menu/deserts menu.jpg', 8, 'deserts'),
(10, 10, 'menu/sabji menu.jpg', 1, 'gujarati'),
(11, 11, 'menu/mocktail menu.jpg', 1, 'mocktails'),
(12, 12, 'menu/punjabi curry menu.jpg', 0, 'punjabi'),
(13, 13, 'menu/chinese menus.jpg', 2, 'chinese'),
(14, 14, 'menu/south indian menu.jpg', 3, 'south indian'),
(15, 15, 'menu/starter center.jpg', 4, 'starter'),
(16, 16, 'menu/starter center.jpg', 4, 'starter'),
(17, 17, 'menu/italian menu.jpg', 5, 'italian'),
(18, 18, 'menu/punjabi menu 1..jpg', 0, 'punjabi'),
(19, 19, 'menu/th.jpg', 3, 'south indian'),
(20, 20, 'menu/the-banyan-tree.jpg', 2, 'chinese'),
(21, 1, 'menu/starters menu.jpg', 4, 'starter'),
(22, 2, 'menu/th (1).jpg', 4, 'starter'),
(23, 3, 'menu/deserts menu 2.jpg', 8, 'deserts'),
(24, 4, 'menu/sweets.jpg', 1, 'sweet'),
(25, 5, 'menu/sabji.jpg', 1, 'gujarati'),
(26, 6, 'menu/deserts 3.jpg', 8, 'deserts'),
(27, 7, 'menu/salad menu.jpg', 4, 'salad'),
(28, 8, 'menu/drinks menu.jpg', 1, 'mocktails'),
(29, 9, 'menu/buku-menu-2.png', 1, 'mocktails'),
(30, 10, 'menu/icecream.png', 1, 'icecream'),
(31, 11, 'menu/th.jpg', 5, 'italian'),
(32, 12, 'menu/rice menu.jpg', 0, 'punjabi'),
(33, 13, 'menu/ab_veg_menu_1 (1).jpg', 3, 'south indian'),
(34, 14, 'menu/th.jpg', 0, 'punjabi'),
(35, 15, 'menu/ab_veg_menu_1 (1).jpg', 3, 'south indian'),
(36, 16, 'menu/vegetarian-menu-32.jpg', 2, 'chinese'),
(37, 17, 'menu/th.jpg', 1, 'gujarati'),
(38, 18, 'menu/th (1).jpg', 1, 'gujrati'),
(39, 19, 'menu/indian starter.jpg', 4, 'starter'),
(40, 20, 'menu/buku-menu-2.png', 1, 'mocktails'),
(41, 1, 'menu/', 0, 'cake'),
(42, 0, 'menu/cheesy-veezy-pulav.jpg', 0, 'punjabi');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantprofile`
--

CREATE TABLE `restaurantprofile` (
  `pro_id` int(5) NOT NULL,
  `rest_id` int(5) NOT NULL,
  `rest_name` varchar(50) NOT NULL,
  `area` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `star` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurantprofile`
--

INSERT INTO `restaurantprofile` (`pro_id`, `rest_id`, `rest_name`, `area`, `city`, `address`, `contact`, `star`) VALUES
(1, 1, 'Barbeque Nation', 'Drive in road', 'Ahemdabad', 'shop no 3,stone complex,ahemdabad', '+917243254650', '3'),
(2, 2, 'Agashiye', 'sidi shaiyad jali', 'Ahemdabad', '3rd floor,laldarwaja,sidi saiyad jali,ahemdabad', '+917943254650', '4'),
(3, 3, 'Maruti Dining', 'Ambaji Temple', 'Ahemdabad', 'near malay talav,jivraj tolnaka 380026', '+917976759867', '2'),
(4, 4, 'Vishala', 'opp.kashmiram mill', 'Ahemdabad', 'Ambawadi, ahemdabad', '+917876759867', '4'),
(5, 5, 'Manek chowk Night', 'Manek chowk', 'Ahemdabad', 'Manekchowk ahemdabad', '+917943254650', '3'),
(6, 6, 'The Courtyard Restaurant', 'Dr.yagnik road', 'Rajkot', 'The imperical palace,counge level rajkot', '+918778986556', '3'),
(7, 7, 'Nirali Restaurans & Party launge', 'Kalawad Road', 'Rajkot', 'opp.engineering clg,rajkot', '+918643254650', '2'),
(8, 8, 'Global Platter', 'Nirmala Main Road', 'Rajkot', 'near sbi bank,rajkot', '+189876543366', '3'),
(9, 9, 'Jaddu\'s food field', 'cross road building', 'Rajkot', 'Near praduman  coard\'s rajkot', '+912812561619', '4'),
(10, 10, 'Bizz the hotel', 'Yagnik road', 'Rajkot', 'Janath ploat ,rajkot', '+912812473000', '5'),
(11, 11, 'Black pepper', 'Dumas road', 'Surat', '8/9 international business center,surat', '+919712033333', '3'),
(12, 12, 'Italian Dining', 'Dumas road', 'Surat', 'no 13,Athva dumas road,surat', '+9126972697898', '3'),
(13, 13, 'The lime tree', 'Ring road', 'Surat', 'Cords plaza,root top,delhi gate,surat', '+918980001098', '3'),
(14, 14, 'TGB restaurant', 'Shivalik western road', 'Surat', 'Adajan road,surat', '+912613066666', '3'),
(15, 15, 'Ziba', 'The grand bhagwati', 'Surat', 'Dumas road,maodalla circle,surat', '+91026292734900', '3'),
(16, 16, 'Cafe Piano', 'Dumas road', 'Surat', 'Magdolla Circle,surat', '+912613066666', '3'),
(17, 17, 'Welcome cafe cambay', 'R.C dutt road', 'Vadodara', 'Alkapuri,Vadodara', '+91265233058', '5'),
(18, 18, 'The barbeque nation ', 'R.C dutt road', 'Vadodara', 'Near Alka puri,petrol pump,vadodara', '+912652280496', '4'),
(19, 19, 'Mainland china', 'Square mall', 'Vadodara', '3rd floor,Navratna road,near Genda circle,vadodara', '+9126522880496', '3'),
(20, 20, 'Gazeboo Restaurant', 'Bhimpura road', 'Vadodara', 'opp.FGI road,vadodara', '+918758311311', '4'),
(21, 21, 'Yellow chili restaurant', 'opp.inox multiplex', 'Vadodara', 'ring road ,vadodara', '+912656561213', '4');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantregister`
--

CREATE TABLE `restaurantregister` (
  `rest_id` int(5) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurantregister`
--

INSERT INTO `restaurantregister` (`rest_id`, `user_name`, `email`, `password`, `contact`, `status`) VALUES
(1, 'Raghvendrasigh zala', 'rest@gmail.com', '123456789', '+189876543366', 'active'),
(2, 'Pratik sheth', 'Pratiksheth@gmail.com', 'pratik', '+918691077783', 'active'),
(3, 'Jayesh rathod', 'Jayesh@gmail.com', 'jayesh', '+919779900889', 'active'),
(4, 'Kalpesh parekh', 'Kalpesh@gmail.com', 'kalpesh', '+917878986556', 'active'),
(5, 'Kaushal vora', 'Kaushalvora@gmail.com', 'kaushal', '+918987809876', 'active'),
(6, 'Niki sheth', 'Nikisheth@gmail.com', 'shethniki', '+919825260535', 'active'),
(7, 'Amit Doshi', 'Amitdoshi@gmail.com', 'doshiamit', '+919974599087', 'active'),
(8, 'Vishal patel', 'vishalpatel@gmail.com', 'vishal', '+917678569867', 'active'),
(9, 'Abhishek oberoi', 'Abhishek@gmail.com', 'abhishek', '+917922761401', 'active'),
(10, 'Gaurav parmar', 'Gauravparmar@gmail.com', 'gauravparmar', '+918718007887', 'active'),
(11, 'Kishan chauhan', 'kishan@gmail.com', 'kishan', '+919988675434', 'active'),
(12, 'Ishani parekh', 'Ishaniparekh@gmail.com', 'ishani', '+917876759867', 'active'),
(13, 'Nemi shah', 'Nemishah@gmail.com', 'nemi', '+917678569867', 'active'),
(14, 'Samyak vora', 'Samyakvora@gmail.com', 'samyak', '+919987866755', 'active'),
(15, 'Aayushi Gandhi', 'Aayushi@gmail.com', 'aayushi', '+917922761401', 'active'),
(16, 'Karan shah', 'Karanshah@gmail.com', 'karan', '+917243254650', 'active'),
(17, 'Varun solanki', 'Varunsolanki@gmail.com', 'varun', '+918691077783', 'active'),
(18, 'Karan vora', 'Karanvora@gmail.com', 'karanvora', '+918987809876', 'active'),
(19, 'Shiwangi zala', 'Shiwangi@gmail.com', 'zala', '+919988675434', 'active'),
(20, 'Jigar rathod', 'Jigar@gmail.com', 'jigar', '+917678569867', 'active'),
(21, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(5) NOT NULL,
  `rest_id` int(5) NOT NULL,
  `rev_date` date NOT NULL,
  `user_id` int(5) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `rest_id`, `rev_date`, `user_id`, `comment`) VALUES
(1, 1, '2017-08-30', 1, 'helooo; nyc restaurant'),
(2, 2, '2017-09-14', 0, 'fasfa'),
(3, 0, '2017-09-14', 1, ''),
(4, 2, '2017-09-14', 1, 'ad'),
(5, 0, '2017-09-14', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'Gidwani Sumit', 'user@gmail.com', '123456789', 2147483647),
(2, 'Vishakha gohel', 'vishakha@gmail.com', 'vishakha', 2147483647),
(3, 'Kresha Rajput', 'kresha@gmail.comG', 'kresha', 787865456),
(4, 'Neal tilvani', 'neal@gmail.com', 'nealjk', 2147483647),
(5, 'Urmi Soni', 'urmisoni@gmail.com', 'urmisoni', 2147483647),
(6, 'Mittal shah', 'mittalshah@gmail.com', 'mittal', 909999089),
(7, 'Saloni shah', 'salu@gmail.com', 'saloniu', 2147483647),
(8, 'Puja omkara', 'puja@gmail.com', 'pooja', 2147483647),
(9, 'Aasha pithwa', 'aasha@gmail.com', 'aasha', 88779996),
(10, 'Aardhana', 'aaru@gmail.com', 'aardhana', 2147483647),
(11, 'Krystal', 'pooja@gmail.com', 'Kajol1', 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `restaurantprofile`
--
ALTER TABLE `restaurantprofile`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `restaurantregister`
--
ALTER TABLE `restaurantregister`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `g_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `restaurantprofile`
--
ALTER TABLE `restaurantprofile`
  MODIFY `pro_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `restaurantregister`
--
ALTER TABLE `restaurantregister`
  MODIFY `rest_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
