-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 10:09 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`uid`, `username`, `phone`, `email`, `password`) VALUES
(7, 'shiro', '88', 'shiro@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(11, 'guru', '99', 'guru@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(12, 'lenin', '77', 'lenin@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(13, 'guru', '888', 'furu@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(14, 'Raj', '9898', 'Raj@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(16, 'Prasath', '98989', 'Prasath@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(17, 'Antoney', '90887', 'Antoney@gmail.com', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `subject` varchar(1024) NOT NULL,
  `disc` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `uid`, `title`, `subject`, `disc`, `date`, `photo`) VALUES
(20, 12, 'Zoho', 'Dream Company', 'Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!', '2023-01-20 10:02:13', 'photo-1560179707-f14e90ef3623.jpg'),
(21, 12, 'Programming', 'Feature World King', 'Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!', '2023-01-20 10:03:07', 'python-programming-language-programing-workflow-abstract-algorithm-concept-virtual-screen-200850656.jpg'),
(22, 12, 'Travel', 'Travelling is the best Memories', 'Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!', '2023-01-20 10:04:24', 'photo-1503220317375-aaad61436b1b.jpg'),
(23, 12, 'Books', 'Improving Knowladge', 'Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!', '2023-01-20 10:05:11', 'photo-1532012197267-da84d127e765.jpg'),
(24, 12, 'Food Respie', 'Treditional Food', 'Lorem ipsum dolor consectetur adipisicing elit. Commodi, ad!', '2023-01-20 10:06:22', 'pexels-chan-walrus-958545.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD UNIQUE KEY `email` (`uid`) USING BTREE,
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `auth` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
