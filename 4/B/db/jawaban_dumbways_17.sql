-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2020 at 10:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jawaban_dumbways_17`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `image`, `deskripsi`, `create_time`, `user_id`) VALUES
(7, 'tutorial bootstap 1', 'b4.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repudiandae aperiam cum, dolore doloremque excepturi, eos alias facilis veniam reiciendis, debitis corrupti. Nam mollitia quae iusto debitis ducimus alias suscipit!\r\n', '2020-06-13 08:04:03', 5),
(8, 'tutorial bootstap 2', 'b4.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repudiandae aperiam cum, dolore doloremque excepturi, eos alias facilis veniam reiciendis, debitis corrupti. Nam mollitia quae iusto debitis ducimus alias suscipit!\r\n', '2020-06-13 08:04:18', 5),
(9, 'tutorial hero fany gg', 'download.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repudiandae aperiam cum, dolore doloremque excepturi, eos alias facilis veniam reiciendis, debitis corrupti. Nam mollitia quae iusto debitis ducimus alias suscipit!\r\n', '2020-06-13 08:04:52', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`) VALUES
(5, 'andi', 'aandi30082001@gmail.com'),
(6, 'yana', 'yana@gmail.com'),
(7, 'kimi', 'kimih@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
