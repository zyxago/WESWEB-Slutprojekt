-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 12:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slutprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ID` int(255) UNSIGNED NOT NULL,
  `userID` int(255) UNSIGNED NOT NULL,
  `articleText` varchar(10000) COLLATE utf8_swedish_ci NOT NULL,
  `points` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID`, `userID`, `articleText`, `points`) VALUES
(2, 1, 'IT WORKES', 1),
(3, 1, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu nibh quis urna molestie bibendum sit amet in ligula. Ut id dui non dolor tincidunt venenatis ut at massa. Nulla placerat convallis nulla ut aliquet. Aliquam urna mauris, sollicitudin sed finibus nec, pellentesque non felis. Fusce consectetur neque vitae mauris tempor fringilla. Vivamus a lacus aliquam, vestibulum massa dignissim, posuere est. Vestibulum vel faucibus libero, eu porttitor felis. Suspendisse potenti. Donec pharetra posuere maximus. Nulla molestie libero risus, a sagittis tortor pretium non. Vivamus vel ipsum libero. Proin non nunc eleifend, volutpat risus non, eleifend mauris. Morbi in neque vitae quam luctus ultrices sit amet eget augue. Ut nec egestas sapien. Maecenas mollis lacus neque, eget sollicitudin nunc mollis posuere. Nunc ut velit at nunc sagittis porttitor.\r\n\r\nSed a lacus lacinia, eleifend arcu ac, tempor odio. Praesent varius, erat a aliquam scelerisque, quam augue posuere leo, eu malesuada eros purus non risus. Duis condimentum ut tortor et vehicula. Sed orci mi, tincidunt vitae dictum nec, pellentesque quis magna. Quisque varius velit at ligula mollis, non mattis sem suscipit. Ut id mi hendrerit, venenatis erat a, fringilla libero. Praesent et nibh lectus. Aenean bibendum diam ac turpis cursus, a bibendum ex tempus. Vestibulum molestie pulvinar aliquam.\r\n\r\nNunc ac dolor sed eros commodo elementum. Vivamus rhoncus urna a orci tincidunt, vel posuere lorem ullamcorper. Mauris ut odio commodo, molestie ligula maximus, euismod ligula. Etiam tincidunt vestibulum accumsan. Fusce vitae pellentesque nisi, nec finibus diam. Proin ultrices felis felis, sit amet ultrices enim dignissim nec. Duis ullamcorper tellus non nisl tincidunt consectetur. Nunc blandit egestas massa, in bibendum mauris sollicitudin sollicitudin.\r\n\r\nNam fermentum ut nibh a accumsan. Vestibulum tempor tristique tortor, fringilla tempor arcu maximus eu. Nam gravida quis leo sit amet pellentesque. In ut velit lobortis magna iaculis tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan eget urna posuere interdum. In magna sem, euismod nec est ac, convallis bibendum massa. Vivamus in auctor urna, eget facilisis enim. Sed eget tempus diam.\r\n\r\nUt vel aliquet nibh. In ultrices urna eu lobortis posuere. Nullam ultricies ut justo id consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dapibus erat ut massa pharetra, sit amet luctus dui ornare. Morbi varius nisl justo, sit amet lobortis massa porttitor vitae. Praesent porttitor urna eget gravida tincidunt. Curabitur pretium ultricies commodo. Aliquam fringilla velit orci. ', -1),
(5, 1, 'KLART!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(255) UNSIGNED NOT NULL,
  `articleID` int(255) UNSIGNED NOT NULL,
  `userID` int(255) UNSIGNED NOT NULL,
  `comment` varchar(5000) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `articleID`, `userID`, `comment`) VALUES
(13, 3, 1, 'Snakcar vi latin nu me?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `admin`) VALUES
(1, 'Erik', 'erik.hult676@gmail.com', '$2y$10$K5BkcR5YyaO7qhcB3UYqYuIrnD30eGGp3nvVExlqml5A2cUosDAaa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `articleID` (`articleID`),
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`articleID`) REFERENCES `article` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
