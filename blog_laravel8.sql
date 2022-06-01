-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 08:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_laravel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `added_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `added_on`) VALUES
(1, 'Anjali', 'anjali@gmail.com', '988284223', 'This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.This is testing message.', '2022-05-30 14:30:27'),
(10, 'Chandan Kumar', 'chandankumaracp@gmail.com', '+18340460297', '87678687', '2022-05-31 15:22:00'),
(11, 'Pandit Programmer', 'Panditprogrammer@gmail.com', '+918340', 'jkoijjk', '2022-05-31 15:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `page_date` date DEFAULT NULL,
  `added_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `title`, `description`, `status`, `page_date`, `added_on`) VALUES
(7, 'Programming', 'programming', 'This is for programming .', 'hello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello Worldhello World', 1, '2022-05-31', '2022-05-31 16:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `long_desc` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `added_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `short_desc`, `long_desc`, `image`, `post_date`, `status`, `added_on`) VALUES
(58, 'First title updated by redirect', 'Testing post', 'short description updated redirect', 'redirect updated the first post', '1653822603.jpg', '2022-05-29', 1, '2022-05-29 16:40:03'),
(59, 'Testing post update', 'Testing post', 'This is edit post description', 'lorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet new', '1653885573.png', '2022-05-30', 0, '2022-05-29 16:44:54'),
(63, 'Albert Einstein', 'Albert Einstein', 'Albert Einstein', 'lorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newnew', '1653885308.jpg', '2022-05-31', 1, '2022-05-30 08:29:57'),
(64, 'amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet n', 'amet newlorem', 'psum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet new', 'lorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ilorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newlorem ipsum dolor sit amet newnew', '1653883220.jpg', '2022-05-31', 1, '2022-05-30 09:30:20'),
(68, 'Title change', 'hello-slug', 'title change', 'title change', '1653916460.jpg', NULL, 1, '2022-05-30 18:44:21'),
(69, 'testing with slug', 'testing with slug', 'testiiiiiiiiiiiiiiiiiii', 'unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9 unique hello jlja9', '1653966587.jpg', NULL, 1, '2022-05-31 08:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'Panditprogrammer', 'Panditprogrammer@gmail.com', '12345', 1),
(2, 'anjali', 'anjali@gmail.com', '12345', 0),
(3, 'anjali', 'anjali@gmail.com', '1234', 1),
(4, 'demo', 'demo@gmail.com', 'demo', 1),
(5, 'panditprogrammer', 'anjali123@gmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
