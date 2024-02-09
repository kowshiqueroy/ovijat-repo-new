-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 04:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `frommail` varchar(50) NOT NULL,
  `tomail` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `frommail`, `tomail`, `msg`, `ts`) VALUES
(141, 'a', 'jhgdjgasgdasgdgasgdsgadgsagdsa', 'hi', '2024-01-31 10:15:51'),
(142, 'a', 'jhgdjgasgdasgdgasgdsgadgsagdsa', 'hi', '2024-01-31 10:16:03'),
(143, 'a', 'jhgdjgasgdasgdgasgdsgadgsagdsa', 'hi', '2024-01-31 10:16:16'),
(144, 'a', 'b', 'hi', '2024-01-31 10:16:43'),
(145, 'a', 'b', 'hi', '2024-01-31 10:16:47'),
(146, 'b', 'a', 'hello', '2024-01-31 10:18:03'),
(147, 'b', 'a', 'hello', '2024-01-31 10:18:33'),
(148, 'a', 'test', 'new', '2024-01-31 10:18:59'),
(149, 'a', 'b', 'hi', '2024-01-31 20:55:20'),
(150, 'a', 'b', 'hi', '2024-01-31 20:59:30'),
(151, 'a', 'b', 'hello', '2024-02-01 07:26:49'),
(152, 'a', 'arpon', 'hello', '2024-02-01 07:27:02'),
(153, 'b', 'a', 'from b', '2024-02-05 14:06:55'),
(154, 'a', 'b', 'from a', '2024-02-05 14:07:01'),
(155, 'b', 'a', 'saw your add', '2024-02-05 14:08:01'),
(156, 'a', 'help@admin.com', 'hello', '2024-02-05 14:17:36'),
(157, 'a', 'jhgdjgasgdasgdgasgdsgadgsagdsa', 'test', '2024-02-06 16:48:26'),
(158, 'a', 'jhgdjgasgdasgdgasgdsgadgsagdsa', 'hi', '2024-02-06 16:48:30'),
(159, 'a', 'b', 'hi', '2024-02-06 16:48:35'),
(160, 'a', 'b', 'hi', '2024-02-06 16:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `recuring` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `regularprice` float NOT NULL,
  `saleprice` float NOT NULL,
  `del` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `user`, `ts`, `name`, `type`, `category`, `detail`, `photo`, `stock`, `recuring`, `period`, `regularprice`, `saleprice`, `del`) VALUES
(38, 'a', '2024-01-28 23:23:09', 'Test product item name', 'Rent', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'items/1706484189.jpg', 0, 0, 11, 11100, 10000, 0),
(39, 'b', '2024-01-28 23:23:50', 'Test product item name', 'Rent', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'items/1706484230.jpg', -1, 0, 11, 11100, 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `fromuser` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `ts` date NOT NULL DEFAULT current_timestamp(),
  `pts` date NOT NULL,
  `foruser` varchar(50) NOT NULL,
  `banking` varchar(100) NOT NULL,
  `txid` varchar(50) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `pay`, `fromuser`, `item`, `price`, `ts`, `pts`, `foruser`, `banking`, `txid`, `confirm`) VALUES
(18, '14', 'a', 'Test product item name', 10000, '2024-02-09', '2024-02-09', 'b', 'bkash 038728378237', '32423432', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `byuser` varchar(50) NOT NULL,
  `foruser` varchar(50) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(20) NOT NULL,
  `details` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `recuring` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL,
  `sts` date DEFAULT NULL,
  `ets` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `iid`, `byuser`, `foruser`, `itemname`, `ts`, `category`, `details`, `type`, `recuring`, `period`, `price`, `status`, `stock`, `sts`, `ets`) VALUES
(9, 39, 'b', 'a', 'Test product item name', '2024-02-08 18:24:02', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'Rent', 0, 11, 10000, 0, 0, '2024-02-08', '2024-02-08'),
(10, 39, 'b', 'a', 'Test product item name', '2024-02-08 18:28:59', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'Rent', 0, 11, 10000, 3, 2, NULL, '2024-02-08'),
(11, 38, 'a', '', 'Test product item name', '2024-02-08 19:07:05', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'Rent', 0, 11, 10000, 2, 1, '2024-02-09', NULL),
(12, 45, '', 'a', '', '2024-02-09 13:07:09', '', '', '', 0, 0, 0, 0, 0, NULL, NULL),
(13, 38, 'a', 'b', 'Test product item name', '2024-02-09 13:16:04', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'Rent', 0, 11, 10000, 2, 2, '2024-02-09', NULL),
(14, 38, 'a', 'b', 'Test product item name', '2024-02-09 13:17:32', 'category name ', 'jdjahs daskdjkas aksbdjkas kbjdasj kbskajdsa kjnjdjas bjdjas jnjjasd jjasjhd kjjdjas 77e jd jhahsd', 'Rent', 0, 11, 10000, 2, 1, '2024-02-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `banking` varchar(50) NOT NULL,
  `balance` float NOT NULL,
  `lastlogin` varchar(30) NOT NULL,
  `lastlogout` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL DEFAULT 'users/logo.png',
  `verify` int(11) NOT NULL,
  `hide` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `address`, `phone`, `institute`, `nid`, `banking`, `balance`, `lastlogin`, `lastlogout`, `photo`, `verify`, `hide`, `status`) VALUES
('a', '0cc175b9c0f1b6a831c399e269772661', '1', '1', '1', '1', '1', 'bkash 038728378237', 0, '', '', 'users/1706467539.jpeg', 0, 0, 866811),
('b', '92eb5ffee6ae2fec3ad71c777531578f', '', '', '', '', '', '', 0, '', '', 'users/logo.png', 0, 0, 734536);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
