-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 08:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bluewall`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `ext_due_date` date DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL,
  `category` char(1) DEFAULT NULL,
  `metric` char(1) DEFAULT NULL,
  `owner` varchar(25) DEFAULT NULL,
  `dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `assignment`, `status`, `due_date`, `ext_due_date`, `comments`, `category`, `metric`, `owner`, `dept_name`) VALUES
(2, 'Second', 0, '2016-06-13', '0000-00-00', 'No Comments', 'a', '2', 'Farrukh', ''),
(3, 'Third', 0, '2016-06-20', '1970-01-01', '', 'a', '2', 'Ajith', 'Industrial'),
(5, 'Fifth', 0, '2016-06-14', '1970-01-01', '', 'a', '5', 'Rajesh', 'Industrial'),
(6, 'sixth', 0, '2016-06-12', '1970-01-01', '', 'a', '1', 'John', 'Industrial'),
(7, 'sixth', 0, '2016-06-12', '0000-00-00', 'No Comments', 'b', '2', 'John', 'Industrial'),
(11, 'Eight', 0, '2016-06-23', '0000-00-00', 'No Comments', 'a', '4', 'Jack', 'Industrial'),
(12, 'Black Belt', 0, '2016-06-29', '0000-00-00', 'No Comments', 'a', '4', 'Ajay', 'Industrial'),
(13, 'Thank you brother', 0, '2016-06-14', '0000-00-00', 'No Comments', 'a', '3', 'Farrukh Engg', 'Industrial');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
