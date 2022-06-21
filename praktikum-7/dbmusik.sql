-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 08:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmusik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `alb_id` int(11) NOT NULL,
  `alb_id_artist` int(11) NOT NULL,
  `alb_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`alb_id`, `alb_id_artist`, `alb_name`) VALUES
(1, 1, 'Bintang di surga'),
(2, 3, 'mantan kekasihku'),
(3, 1, 'kekasih bayangan'),
(4, 1, 'separuh aku'),
(5, 2, 'raja segala ku'),
(8, 2, 'Planet Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artist`
--

CREATE TABLE `tb_artist` (
  `art_id` int(11) NOT NULL,
  `art_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artist`
--

INSERT INTO `tb_artist` (`art_id`, `art_name`) VALUES
(1, 'Ariel'),
(3, 'Naga'),
(2, 'Raja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_played`
--

CREATE TABLE `tb_played` (
  `ply_id` int(11) NOT NULL,
  `ply_id_track` int(11) NOT NULL,
  `ply_played` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_played`
--

INSERT INTO `tb_played` (`ply_id`, `ply_id_track`, `ply_played`) VALUES
(1, 1, '2022-05-01 18:10:47'),
(2, 2, '2022-05-04 01:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_track`
--

CREATE TABLE `tb_track` (
  `trc_id` int(11) NOT NULL,
  `trc_name` varchar(100) NOT NULL,
  `trc_id_album` int(11) NOT NULL,
  `trc_waktu` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_track`
--

INSERT INTO `tb_track` (`trc_id`, `trc_name`, `trc_id_album`, `trc_waktu`) VALUES
(1, 'Rekaman Mantan Kekasihku', 2, '3'),
(2, 'Rekaman Planet Kosong', 8, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`alb_id`),
  ADD UNIQUE KEY `alb_name` (`alb_name`),
  ADD KEY `alb_id_artist` (`alb_id_artist`);

--
-- Indexes for table `tb_artist`
--
ALTER TABLE `tb_artist`
  ADD PRIMARY KEY (`art_id`),
  ADD UNIQUE KEY `art_name` (`art_name`);

--
-- Indexes for table `tb_played`
--
ALTER TABLE `tb_played`
  ADD PRIMARY KEY (`ply_id`),
  ADD KEY `ply_id_track` (`ply_id_track`);

--
-- Indexes for table `tb_track`
--
ALTER TABLE `tb_track`
  ADD PRIMARY KEY (`trc_id`),
  ADD UNIQUE KEY `trc_name` (`trc_name`),
  ADD KEY `trc_id_album` (`trc_id_album`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_artist`
--
ALTER TABLE `tb_artist`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_played`
--
ALTER TABLE `tb_played`
  MODIFY `ply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_track`
--
ALTER TABLE `tb_track`
  MODIFY `trc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`alb_id_artist`) REFERENCES `tb_artist` (`art_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_played`
--
ALTER TABLE `tb_played`
  ADD CONSTRAINT `tb_played_ibfk_1` FOREIGN KEY (`ply_id_track`) REFERENCES `tb_track` (`trc_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_track`
--
ALTER TABLE `tb_track`
  ADD CONSTRAINT `tb_track_ibfk_1` FOREIGN KEY (`trc_id_album`) REFERENCES `tb_album` (`alb_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
