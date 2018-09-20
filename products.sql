-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 02:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `ID` int(110) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Genre` varchar(300) NOT NULL,
  `Price` int(110) NOT NULL,
  `Number` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`ID`, `Name`, `Genre`, `Price`, `Number`) VALUES
(1, 'Control', 'Action & Adventure', 139, 50),
(2, 'Anthem', 'Shooter', 89, 23),
(3, 'Biomutant', 'Action & Adventure', 89, 43),
(4, 'Darksiders 3', 'Action & Adventure', 89, 22),
(5, 'Farming Simulator 19', 'Simulation', 49, 55),
(6, 'Fallout 76', 'Role Playing Game', 69, 33),
(7, 'Battlefield V', 'Shooter', 69, 26),
(8, 'Call of Duty Black Ops 4 Mystery Box Edition', 'Shooter', 279, 99),
(9, 'World of Warcraft: Battle for Azeroth Collector\'s Edition', 'Massively Multiplayer ', 129, 99),
(10, 'Crash Bandicoot N. Sane Trilogy', 'Platform', 69, 20),
(11, 'Vampyr', 'Role Playing Game', 69, 26),
(12, 'The Elder Scrolls Online: Summerset', 'Massively Multiplayer Online', 69, 36),
(13, 'Final Fantasy XV Windows Edition', 'Role Playing Game', 69, 29),
(14, 'Flight Sim World', 'Flight', 39, 29),
(15, 'The Sims 4 Bundle', 'Simulation', 49, 35),
(16, 'Binary Domain', 'Shooter', 15, 32);

-- --------------------------------------------------------

--
-- Table structure for table `ps4`
--

CREATE TABLE `ps4` (
  `ID` int(100) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Genre` varchar(500) NOT NULL,
  `Price` int(100) NOT NULL,
  `Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps4`
--

INSERT INTO `ps4` (`ID`, `Name`, `Genre`, `Price`, `Number`) VALUES
(1, 'Skull & Bones', 'Action & Adventure', 80, 3),
(2, 'Star Wars Jedi Fallen Order', 'Action & Adventure', 99, 15),
(3, 'The Last of Us Part II', 'Action & Adventure', 70, 12),
(4, 'Beyond Good & Evil 2', 'Action & Adventure', 89, 6),
(5, 'DOOM Eternal', 'Shooter', 89, 29),
(6, 'Rage 2', 'Shooter', 99, 15),
(7, 'Starfield', 'Action & Adventure', 129, 40),
(8, 'Ghost of Tsushima', 'Action & Adventure', 99, 20),
(9, 'Babylon\'s Fall', 'Action & Adventure', 89, 22),
(10, 'Wolfenstein: Youngblood', 'Shooter', 119, 20),
(11, 'The Elder Scrolls VI', 'Role Playing Game', 89, 20),
(12, 'Dead or Alive 6', 'Fighting', 89, 30),
(13, 'Cyberpunk 2077', 'Role Playing Game', 80, 20),
(14, 'Dying Light 2', 'Action & Adventure', 89, 22),
(15, 'Genesis Alpha One', 'Strategy', 69, 33),
(16, 'Code Vein', 'Role Playing Game', 79, 45),
(17, 'Tom Clancy\'s The Division 2 Dark Zone Collector\'s Edition', 'Shooter', 179, 50),
(18, 'Anthem: Legion of Dawn Edition', 'Shooter', 169, 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ps4`
--
ALTER TABLE `ps4`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `ID` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ps4`
--
ALTER TABLE `ps4`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
