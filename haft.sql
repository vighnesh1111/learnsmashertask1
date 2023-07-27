-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 12:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haft`
--

-- --------------------------------------------------------

--
-- Table structure for table `haft`
--

CREATE TABLE `haft` (
  `srno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aim` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `goal_weight` int(11) NOT NULL,
  `goal_calories` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `haft`
--

INSERT INTO `haft` (`srno`, `username`, `password`, `aim`, `fname`, `lname`, `weight`, `height`, `goal_weight`, `goal_calories`, `age`, `dt`) VALUES
(1, 'Vrane', '@12345', 'weight gain', 'Vighnesh', 'Rane', 65, 168, 70, 3000, 20, '2023-06-28 08:43:02'),
(2, 'admin', '123456', 'weight loss', 'Ram', 'Charan', 65, 168, 60, 2000, 20, '2023-06-28 08:44:17'),
(3, 'vighnesh', '123456', 'weight maintain', 'vicky', 'adwd', 65, 168, 65, 2500, 20, '2023-06-28 08:47:10'),
(4, 'vicky', '@12345', 'weight gain', 'vicky', 'red', 56, 168, 70, 3000, 20, '2023-07-02 13:42:01'),
(5, 'vig', '123456', 'weight loss', 'Ram', 'Charan', 65, 168, 60, 2000, 20, '2023-06-28 08:54:14'),
(6, 'okay', 'okay12', 'weight maintain', 'okay', 'okayy', 65, 168, 65, 2500, 20, '2023-06-28 08:56:22'),
(7, 'ygfjf', 'fhgfhgfgh', 'weight loss', 'vicky', 'red', 65, 867, 400, 2000, 56, '2023-06-28 08:58:06'),
(8, 'vicky11', '123456', 'weight gain', 'Vighnesh', 'Rane', 63, 168, 68, 3000, 20, '2023-06-29 06:23:43'),
(9, 'hfhghf', 'hgfhf', 'weight loss', 'okay', 'okayy', 55, 566, 50, 2000, 56, '2023-06-29 06:34:28'),
(10, 'sdff', 'dsfsdfdfd', 'weight gain', 'nvhv', 'hhvhjgj', 65, 168, 70, 3000, 22, '2023-07-02 13:14:06'),
(11, 'vighnesh11', '@12345', 'weight gain', 'Vighnesh', 'Rane', 65, 165, 70, 3000, 45, '2023-07-02 20:30:40'),
(12, 'dgdgdsg', 'ergerttert', 'weight gain', 'Vighnesh', 'Rane', 65, 165, 70, 3000, 45, '2023-07-02 20:30:56'),
(13, 'tryry', 'tyryyr', 'weight gain', 'Vighnesh', 'Rane', 65, 455, 67, 3000, 54, '2023-07-02 20:40:17'),
(14, '', '', 'weight gain', '', '', 65, 455, 67, 3000, 54, '2023-07-02 20:40:23'),
(15, 'rrrrr', 'rrrrrrr', 'weight gain', 'nvhv', 'hhvhjgj', 65, 168, 70, 3000, 22, '2023-07-02 20:41:01'),
(16, 'vranee', '@12345', 'weight gain', 'vighnesh', 'rane', 65, 165, 70, 3000, 20, '2023-07-02 20:48:44'),
(17, 'Vigg', '@12345', 'weight gain', 'Vighnesh', 'Rane', 65, 168, 70, 3000, 20, '2023-07-03 17:50:49'),
(18, 'mnbjhgjgj', 'mjhjkhgjgjh', 'weight gain', 'Vighnesh', 'Rane', 34, 45, 45, 3000, 45, '2023-07-03 18:13:12'),
(19, 'dssdfsdfs', 'sfsfdsfdsdf', 'weight maintain', 'Vighnesh', 'Rane', 45, 234, 67, 2500, 33, '2023-07-03 19:08:49'),
(20, 'admin11', '@1234', 'weight maintain', 'Vighnesh', 'Rane', 65, 65, 65, 2500, 65, '2023-07-03 19:13:32'),
(21, 'jfgjhfj', '', 'weight maintain', 'Vighnesh', 'Rane', 65, 65, 76, 2500, 65, '2023-07-03 19:17:15'),
(22, 'ghfghfghf', 'ghffhf', 'weight maintain', 'Vighnesh', 'Rane', 65, 65, 76, 2500, 65, '2023-07-03 19:17:22'),
(23, 'jfgjhfj', '', 'weight maintain', 'Vighnesh', 'Rane', 65, 65, 76, 2500, 65, '2023-07-03 19:18:05'),
(24, 'bfgbfgf', 'dfgfdgdfg', 'weight gain', 'Vighnesh', 'Rane', 55, 55, 55, 3000, 55, '2023-07-03 19:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haft`
--
ALTER TABLE `haft`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `haft`
--
ALTER TABLE `haft`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
