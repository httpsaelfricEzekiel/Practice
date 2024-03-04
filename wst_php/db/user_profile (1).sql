-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 11:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amor`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fbLink` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `instaLink` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `firstName`, `lastName`, `email`, `address`, `fbLink`, `age`, `instaLink`, `password`, `gender`, `school`) VALUES
(1, 'aelfric', 'fgdfgdfg', 'aelfric@gmail.com', '0', 'dgsgsfsdfsd', 20, 'rgrgsrfdsfsdg', 'grgdgdgdgr', 'male', 'University of Iloilo'),
(2, 'rtetretet', 'rrewrw', 'rewrwer@gmail.com', '0', 'rerwer', 43, 'ewrewr', 'rwrewr', 'wfewfwf', 'rewrewwer'),
(3, 'wetjewopt', 'rewplrwekperj', 'fkfmdsk@gmail.com', '0', 'ekqwnekqe', 43, 'ewqeqe', 'ewrewr', 'ewr', 'ewrew'),
(4, 'asdas', 'asdas', 'asd@gmail.com', '0', 'das', 32, 'ew', 'wwe', 'on', 'ewq'),
(5, 'asd', 'asd', 'asd@gmail.com', '0', 'dsa', 43, 'ds', 'ds', 'on', 'ds'),
(6, 'gfdgfd', 'asdsa', 'sdasasd@gmail.com', 'asdd', 'asdas', 564, 'dfds', 'sdfsd', 'on', 'sfd'),
(7, 'asdasds', 'asdasdd', 'asdas@gmail.com', 'dsadsa', 'adasad', 54, 'dsds', 'asdas', 'on', 'gfgfd'),
(8, 'mark', 'gilo', 'markgilo@gmail.com', 'dasd', 'dsad', 43, 'dsad', 'dsad', 'on', 'ds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
