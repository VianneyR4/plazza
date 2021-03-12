-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 10:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plazza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(225) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `admin_mail` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL,
  `date_admin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_name`, `admin_mail`, `admin_password`, `date_admin`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123456', '2021-03-10 16:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(225) NOT NULL,
  `bloger` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `date_blog` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(225) NOT NULL,
  `entre` varchar(225) NOT NULL,
  `sortie` varchar(225) NOT NULL,
  `numChambre` int(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `confirmation` varchar(225) NOT NULL,
  `pu` int(225) NOT NULL,
  `prix` int(225) NOT NULL,
  `date_booking` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chambres`
--

CREATE TABLE `chambres` (
  `ID` int(225) NOT NULL,
  `disponibilite` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `numero` int(225) NOT NULL,
  `standard` varchar(225) NOT NULL,
  `stars` int(225) NOT NULL,
  `description` text NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `tv` varchar(10) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_chambres` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chambre_img`
--

CREATE TABLE `chambre_img` (
  `ID` int(225) NOT NULL,
  `chambre_num` int(225) NOT NULL,
  `img_name` varchar(225) NOT NULL,
  `img_type` varchar(225) NOT NULL,
  `img_size` int(225) NOT NULL,
  `date_chambre_img` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `ID` int(225) NOT NULL,
  `img_name` varchar(225) NOT NULL,
  `img_type` varchar(225) NOT NULL,
  `img_size` int(225) NOT NULL,
  `date_galerie` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`ID`, `img_name`, `img_type`, `img_size`, `date_galerie`) VALUES
(1, 'Plazza-IMG-Galerie-6048e1f6b29fb2.33829568.jpg', 'jpg', 1600489, '2021-03-10 17:12:54'),
(2, 'Plazza-IMG-Galerie-6048e1f6e1fb24.36774772.jpg', 'jpg', 1491189, '2021-03-10 17:12:54'),
(3, 'Plazza-IMG-Galerie-6048e1f702fc71.84626072.jpg', 'jpg', 1141520, '2021-03-10 17:12:55'),
(4, 'Plazza-IMG-Galerie-6048e1f74f8454.75739351.jpg', 'jpg', 1044912, '2021-03-10 17:12:55'),
(5, 'Plazza-IMG-Galerie-6048e1f7805806.51641014.jpg', 'jpg', 1267631, '2021-03-10 17:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `ID` int(225) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `date_news_letter` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temoignage`
--

CREATE TABLE `temoignage` (
  `ID` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `article` text NOT NULL,
  `stars` int(225) NOT NULL,
  `date_temoignage` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temoignage`
--

INSERT INTO `temoignage` (`ID`, `name`, `article`, `stars`, `date_temoignage`) VALUES
(1, 'Vianney R', 'Si vous regardez des pièces vides sur le Web, vous pouvez être très confus au\r\ndifférence de prix. ici Vous pouvez en voir pour le prix standard chacun.', 4, '2021-03-11 10:19:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chambre_img`
--
ALTER TABLE `chambre_img`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chambre_img`
--
ALTER TABLE `chambre_img`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
