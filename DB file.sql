-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 11:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `societydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` smallint(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'kishan', 'kishan'),
(2, 'urvish', 'urvish');

-- --------------------------------------------------------

--
-- Table structure for table `block_a`
--

CREATE TABLE `block_a` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_a`
--

INSERT INTO `block_a` (`id`, `floor`, `flat_no`, `owner_name`, `familymember`, `maintenance`) VALUES
(1, '1', '1', 'gadoya', 2, 0),
(3, '', '2', 'saas', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `block_b`
--

CREATE TABLE `block_b` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_b`
--

INSERT INTO `block_b` (`id`, `floor`, `flat_no`, `owner_name`, `familymember`, `maintenance`) VALUES
(1, '', '1', 'gadoya', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `block_c`
--

CREATE TABLE `block_c` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_d`
--

CREATE TABLE `block_d` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_e`
--

CREATE TABLE `block_e` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_f`
--

CREATE TABLE `block_f` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_g`
--

CREATE TABLE `block_g` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_h`
--

CREATE TABLE `block_h` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_i`
--

CREATE TABLE `block_i` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_j`
--

CREATE TABLE `block_j` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_k`
--

CREATE TABLE `block_k` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_l`
--

CREATE TABLE `block_l` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `block_m`
--

CREATE TABLE `block_m` (
  `id` int(4) NOT NULL,
  `floor` enum('0','1','2') NOT NULL,
  `flat_no` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `owner_name` varchar(34) NOT NULL,
  `familymember` int(2) NOT NULL,
  `maintenance` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `block_a`
--
ALTER TABLE `block_a`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_b`
--
ALTER TABLE `block_b`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_c`
--
ALTER TABLE `block_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_d`
--
ALTER TABLE `block_d`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_e`
--
ALTER TABLE `block_e`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_f`
--
ALTER TABLE `block_f`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_g`
--
ALTER TABLE `block_g`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_h`
--
ALTER TABLE `block_h`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_i`
--
ALTER TABLE `block_i`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_j`
--
ALTER TABLE `block_j`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_k`
--
ALTER TABLE `block_k`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_l`
--
ALTER TABLE `block_l`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- Indexes for table `block_m`
--
ALTER TABLE `block_m`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_flatno` (`floor`,`flat_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `block_a`
--
ALTER TABLE `block_a`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `block_b`
--
ALTER TABLE `block_b`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `block_c`
--
ALTER TABLE `block_c`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_d`
--
ALTER TABLE `block_d`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_e`
--
ALTER TABLE `block_e`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_f`
--
ALTER TABLE `block_f`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_g`
--
ALTER TABLE `block_g`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_h`
--
ALTER TABLE `block_h`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_i`
--
ALTER TABLE `block_i`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_j`
--
ALTER TABLE `block_j`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_k`
--
ALTER TABLE `block_k`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_l`
--
ALTER TABLE `block_l`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block_m`
--
ALTER TABLE `block_m`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
