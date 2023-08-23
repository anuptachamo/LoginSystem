-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 11:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database: `loginsystem`
--
CREATE DATABASE IF NOT EXISTS `loginsystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loginsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'kritish Rajbhandari', 'kritish123@gmail.com', 'a67f44c8e0bd246a6ef5ef536d2b4a3c', 'admin'),
(3, 'sadsda', 'hksad@gasd.com', 'e99a18c428cb38d5f260853678922e03', 'user'),
(6, 'Rati Madhikarmi', 'ratimadhikarmi@gmail.com', 'b7c6ba51f47cfe0631b7ad1d6a33e49c', 'admin'),
(7, 'naresh khatri', 'nareshkhatri@gmail.com', '7bb1be8a78498a9de40098a593199819', 'admin'),
(8, 'test captcha', 'captcha@gmail.com', '1ccdfb85d47a3288178b9959aae1d2f3', 'user'),
(11, 'gg tt', 'captcha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(12, 'Anup Tachamo', 'kritish@gmail.com', 'a67f44c8e0bd246a6ef5ef536d2b4a3c', 'user'),
(13, 'anup pandey', 'anuppandey@gmai.com', 'e6e6249a9d25e5917fb924679cf53369', 'admin'),
(14, 'shankar baba ', 'shankar@gmail.com', 'dbd9c626e7ca8519a84b245fee5b9ade', 'admin'),
(15, 'jsdg', 'shankar@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(17, 'mero naam', 'meronaam@gmail.com', 'ccc73e18345b3f6aa97100fbc61fc5e1', 'admin'),
(18, 'alish l', 'alishl@gmail.com', '5fec21b567de66a31a5bf293269754d9', 'user'),
(19, 'tachamo anup', 'tachamoanup@gmail.com', 'a5cf5f1b33fa770be64690ecfcd39ae2', 'admin'),
(20, 'Suman Tachamo', 'sumantachamo@gmail.com', 'e62e3bed491ec7456e4a1efff4e93ad2', 'admin'),
(22, 'anup kc', 'kcanup@gmail.com', '8ff69abcace1cc3f4f0f13479af91402', 'user'),
(24, 'yaman Sanda', 'yamansanda@gmail.com', '5e216821155acf0d36cee496eb4ef8c5', 'user'),
(25, 'sanil pandey', 'sanil@gmail.com', 'c88b432122fc7e0637993c09102642a0', 'user'),
(26, 'Anup Tachamo', 'anuptachamo@gmail.com', 'a5cf5f1b33fa770be64690ecfcd39ae2', 'admin'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
