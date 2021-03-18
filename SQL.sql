-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2021 at 08:35 AM
-- Server version: 5.6.51
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `branko83_search_autocomplete`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_tags`
--

CREATE TABLE `search_tags` (
  `search_tags_id` int(11) UNSIGNED NOT NULL,
  `search_tags_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_tags`
--

INSERT INTO `search_tags` (`search_tags_id`, `search_tags_title`) VALUES
(1, 'Web Developing'),
(2, 'Web Design'),
(3, 'Admin Support'),
(4, 'Legal Issues'),
(5, 'Photoshop Design'),
(6, 'Software Engineering'),
(7, 'SEO Optimization'),
(8, 'Facebook Marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_tags`
--
ALTER TABLE `search_tags`
  ADD PRIMARY KEY (`search_tags_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search_tags`
--
ALTER TABLE `search_tags`
  MODIFY `search_tags_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
