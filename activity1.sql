-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 20, 2020 at 07:21 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `activity1`
--

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `user_id`, `Title`, `body`, `published`, `created_at`) VALUES
(2, 2, 'New post', 'words words words', 0, '2020-10-19 17:45:22'),
(3, 2, 'New post', 'words words words', 1, '2020-10-19 17:45:49'),
(4, 4, 'Unreleased Music', 'Condolonses billy idol', 1, '2020-10-19 17:48:25');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `BIRTHDAY`) VALUES
(1, 'Abel', 'Mesfin', 'AMesfin', 'abel.mesfin13@gmail.com', 'Password', '2020-08-31'),
(2, 'Kevin', 'Hart', 'KHart', 'kevinhart@gmail.com', 'funny', '1994-02-15'),
(3, 'Abel', 'Mesfin', 'AMesfin', 'abel.mesfin@gmail.com', 'Password', '2000-06-12'),
(4, 'Juice', 'Wrld', 'JWrld', 'Juice999@gmail.com', '999', '1999-09-09'),
(5, 'Debbie', 'Ryan', 'DRyan', 'deb_ryan@cjusd.net', 'Piggy', '2020-09-03'),
(6, 'Derek', 'Shepard', 'DShepard', 'DShepard@gmail.com', 'Brains123', '2020-09-29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
