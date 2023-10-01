-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 10:51 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('ruet', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` varchar(10) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `nick_name` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `parmanent_address` varchar(60) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` varchar(10) NOT NULL,
  `blood` varchar(6) NOT NULL,
  `path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `full_name`, `nick_name`, `contact`, `email`, `parmanent_address`, `dept`, `gender`, `address`, `blood`, `path`) VALUES
('1503086', 'avijit ', 'avijit', '01789561455', 'mohammadhazrathalicse@gmail.com', 'narail', 'Mechanical Engineering', 'Male', 'hamid', 'B-', 'images/IMG_20160501_011358.jpg'),
('1503100', 'moumita', 'sorno', '0178852672', 'mohammadhazrathalicse@gmail.com', 'dinajpur', 'Computer Science & Engineering', '', 'hasina', 'B+', 'images/flower.jpg'),
('1503105', 'md hazrath ali', 'pulok', '0178852672', 'mohammadhazrathalicse@gmail.com', 'talaimai', 'Electrical & Electronics Engineering', 'Male', 'hamid', 'AB+', 'images/IMG_20160505_183302~2.jpg'),
('1503106', 'Hazrath ali', 'kiyam', '09621667324', 'mohammadhazrathalicse15@gmail.com', 'talaimai', 'Civil Engineering', 'Male', 'hamid', 'B+', 'images/IMG_20160501_011358.jpg'),
('1503110', 'nayeem hassan', 'ridoy', '0178852672', 'mohammadhazrathalicse15@gmail.com', 'talaimai', 'Computer Science & Engineering', 'Male', 'hamid', 'B+', 'images/IMG_20160508_100529_Fotor_Collage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `SL` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `hall_name` varchar(40) NOT NULL,
  `complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`SL`, `name`, `room_no`, `hall_name`, `complain`) VALUES
(4, 'avijit', '505', 'Zia hall', 'Vestibulum ante ipsum primis in faucibus vestibulum.\r\n\r\n'),
(5, 'md hazrath', '129', 'Tinshed Ha', 'Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus'),
(6, 'urmi', '202', 'Sheikh Hasina Hall', ' name of the provost is frequently changed. '),
(9, 'md hazrath', '202', 'Selim Hall', 'wertthgf'),
(10, 'md hazrath', '129', 'Shahidul Hall', 'empus euismod. Vestibulum ante ipsum primis in faucibus '),
(11, 'avijit', '202', 'Sheikh Mujibur Hall', 'lis sagittis eget. tempus euismod.'),
(12, 'md hazrath', '202', 'Hamid Hall', 'Vestibulum ante ipsum primis in faucibus ');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `user_name` varchar(15) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`user_name`, `full_name`, `email`, `password`, `photo`) VALUES
('1503011', 'md hazrath ali', 'mohammadhazrathalicse15@gmail.com', 'c5cc809f179c172d8fd786444e8fcf4b5a3287fe', 'image/FB_IMG_1462203778459.jpg'),
('1503012', 'md hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/FB_IMG_1462203778459.jpg'),
('1503018', 'nayeem hassan', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503027', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/FB_IMG_1462203778459.jpg'),
('1503028', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/FB_IMG_1462203778459.jpg'),
('1503033', 'nayeem hassan', 'mohammdhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503045', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/FB_IMG_1469584268503.jpg'),
('1503046', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/FB_IMG_1462205041014.jpg'),
('1503102', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', 'ae8fe380dd9aa5a7a956d9085fe7cf6b87d0d028', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503105', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503106', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503107', 'Hazrath ali', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503108', 'md hazrath ali', 'mohammadhazrathalicse@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/FB_IMG_1462203778459.jpg'),
('1503110', 'moumita', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/Apple-Desktop-Wallpapers-HD-Free-Download.jpg'),
('1503111', 'alif', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/Download-apple-desktop-wallpaper-hd.jpg'),
('1503118', 'pulok', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/074ec2114b06cafad5df6a62b66e66bd.jpg'),
('1503119', 'urmi sen', 'mohammadhazrathalicse15@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'image/Download-apple-desktop-wallpaper-hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `SL` int(11) NOT NULL,
  `about` varchar(300) NOT NULL,
  `path` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`SL`, `about`, `path`) VALUES
(1, 'xvdfgvcx', 'file/Document.pdf'),
(9, 'yrudvhdusahchsd', 'file/hazrath.pdf'),
(10, 'yrudvhdusahchsd', 'file/hazrath.pdf'),
(14, 'exam notice', 'file/Document.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(15) NOT NULL,
  `id` int(8) NOT NULL,
  `account_no` varchar(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `id`, `account_no`, `amount`, `pay_date`) VALUES
('23134', 1503115, '128', 50, '2018-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tokenhamidhall`
--

CREATE TABLE `tokenhamidhall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `meal` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokenhamidhall`
--

INSERT INTO `tokenhamidhall` (`id`, `recipt_no`, `meal`, `date`, `totalbill`) VALUES
('1503120', 'hazrath', '333', '2018-05-23', 50),
('1503115', '23134', '1+1', '2018-07-06', 50),
('', '23134', '1+1', '2018-07-06', 50),
('1503120', '23134', '1+1', '2018-07-13', 50),
('1503120', '23134', '1+1', '2018-07-13', 50),
('1503120', '23134', '1+0', '2018-07-13', 25),
('1503120', '23134', '1+0', '2018-07-13', 25),
('1503115', '23134', '1+0', '2018-07-13', 25),
('1503120', '23134', '1+1', '2018-07-19', 50),
('1503120', '23134', '1+0', '0000-00-00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tokenhasinahall`
--

CREATE TABLE `tokenhasinahall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `meal` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokenhasinahall`
--

INSERT INTO `tokenhasinahall` (`id`, `recipt_no`, `meal`, `date`, `totalbill`) VALUES
('1503112', 'urmi', '222', '2018-05-08', 50),
('1503119', 'urmi', '201', '2018-05-12', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tokenmujibhall`
--

CREATE TABLE `tokenmujibhall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `meal` int(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokenmujibhall`
--

INSERT INTO `tokenmujibhall` (`id`, `recipt_no`, `meal`, `date`, `totalbill`) VALUES
('1503120', 'hazrath', 201, '2018-05-22', 0),
('1503120', 'hazrath', 201, '2018-05-22', 50),
('1503119', 'urmi', 205, '2018-05-17', 50),
('1503120', 'hazrath', 222, '2018-05-09', 50),
('1503115', 'avijit', 109, '2018-07-03', 25),
('1503115', 'avijit', 109, '2018-07-20', 25),
('1503115', 'avijit', 109, '2018-07-11', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tokenselimhall`
--

CREATE TABLE `tokenselimhall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `meal` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tokenshahidulhall`
--

CREATE TABLE `tokenshahidulhall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `meal` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokenshahidulhall`
--

INSERT INTO `tokenshahidulhall` (`id`, `recipt_no`, `meal`, `date`, `totalbill`) VALUES
('1503119', 'urmi', '222', '2018-05-31', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tokentinshedhall`
--

CREATE TABLE `tokentinshedhall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `room` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokentinshedhall`
--

INSERT INTO `tokentinshedhall` (`id`, `recipt_no`, `room`, `date`, `totalbill`) VALUES
('1503119', 'urmi', '201', '2018-05-22', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tokenziahall`
--

CREATE TABLE `tokenziahall` (
  `id` varchar(10) NOT NULL,
  `recipt_no` varchar(30) NOT NULL,
  `meal` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `totalbill` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokenziahall`
--

INSERT INTO `tokenziahall` (`id`, `recipt_no`, `meal`, `date`, `totalbill`) VALUES
('1503120', 'hazrath', '222', '2018-05-27', 50),
('1503120', '23134', '1+1', '2018-07-19', 50),
('1503120', '23134', '1+1', '2018-07-19', 50),
('1503120', '23134', '1+1', '2018-07-24', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `SL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
