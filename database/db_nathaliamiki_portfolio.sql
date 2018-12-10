-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2018 at 08:52 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nathaliamiki_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `projects_id` mediumint(7) UNSIGNED NOT NULL,
  `projects_title` varchar(125) NOT NULL,
  `projects_category` varchar(50) NOT NULL,
  `projects_image` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`projects_id`, `projects_title`, `projects_category`, `projects_image`) VALUES
(1, 'Galaxy Explosion ', 'Branding | Identity | Web Design', 'public_html/images/galaxy_web.jpg\r\n'),
(2, 'Chips Ahoy Beer', 'Branding | Identity', 'public_html/images/beer.jpg\r\n'),
(3, 'Dot on the Horizon', 'Web Design', 'public_html/images/dot.jpg\r\n'),
(4, 'Galaxy Explosion', 'Branding | Identity | Web Design', 'public_html/images/galaxy.jpg\r\n'),
(5, 'HK Interior Design', 'Branding | Identity', 'public_html/images/HK_card.jpg\r\n'),
(6, 'Fuel', 'Branding | Identity', 'public_html/images/fuel.jpg\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`projects_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `projects_id` mediumint(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
