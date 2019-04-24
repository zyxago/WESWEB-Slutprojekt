-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 12:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
  `points` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID`, `userID`, `articleText`, `points`) VALUES
(1, 1, 'HEJ HEJ HEJ HEJ!!!', 0),
(2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non ullamcorper ipsum. Praesent dictum odio non nunc ullamcorper, et commodo turpis sodales. Morbi sed diam ut purus auctor congue lacinia vel quam. Morbi aliquet, lectus vel placerat egestas, eros eros feugiat nisi, non condimentum arcu nisi in est. Vestibulum congue leo at molestie placerat. Maecenas scelerisque dui eros, ac tristique lectus consectetur at. Duis luctus nisl imperdiet, tincidunt mi viverra, semper massa. Vivamus lobortis posuere est, quis euismod massa gravida sit amet. Cras egestas justo tortor, at pharetra felis tristique vel. Donec tempor massa quis massa fringilla vestibulum. Proin commodo dui vel augue auctor elementum. Vestibulum ac purus id sapien facilisis ullamcorper. In dignissim dictum tortor et egestas. Vestibulum non lectus sit amet nisl molestie fringilla. Nulla tincidunt neque dolor, ut aliquam lectus luctus sed.\r\n\r\nSed faucibus, mi at pulvinar pellentesque, magna mauris rutrum lectus, vitae sodales nulla ipsum vitae diam. Pellentesque nisl velit, gravida ut diam malesuada, porta tristique sem. Praesent accumsan nunc id libero accumsan, vitae imperdiet metus fringilla. Sed vehicula, leo non gravida congue, quam est molestie tellus, at cursus est ante ac velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque quis maximus metus. Nulla dapibus nisi nec augue pretium mollis. Nunc vel magna ac nulla varius ultrices. Aliquam molestie, metus nec accumsan tincidunt, mauris lectus scelerisque metus, at ornare nisi urna nec neque. Morbi sed tempus erat. Nunc nec dui faucibus ligula ullamcorper semper ut nec ex. Integer quis ex non tellus hendrerit bibendum vitae eu mi. Aliquam purus urna, viverra vel dignissim sed, tincidunt nec metus. Sed diam orci, dictum ac rutrum sed, dignissim vitae tellus.\r\n\r\nFusce tempor id odio ut ultricies. Praesent vel nibh posuere lacus hendrerit ultrices id quis dolor. Mauris auctor lacinia porta. Nullam aliquet rhoncus leo. Etiam sodales purus eget arcu condimentum lobortis. Sed nec auctor ipsum. Nunc malesuada nunc at nisl congue, eget pharetra libero efficitur.\r\n\r\nInteger aliquam aliquam eros, quis venenatis ipsum pulvinar non. Mauris sit amet vulputate ante. Pellentesque sem massa, efficitur ac lectus rhoncus, finibus porta dolor. Ut elementum facilisis mi vitae semper. Aliquam in placerat risus. Nulla rhoncus nibh vel nibh pretium, ac lobortis erat maximus. Morbi malesuada nunc tortor, et varius dui luctus nec. Etiam vitae ex non quam placerat gravida. Aenean pellentesque ac odio vitae interdum. Vestibulum id augue nec tellus auctor fringilla nec in eros.\r\n\r\nNulla elementum magna ullamcorper, molestie justo non, laoreet neque. Nam id ante non tellus suscipit imperdiet sit amet a sem. Suspendisse euismod fermentum eros, sit amet pulvinar nulla. Praesent nec ipsum vel purus accumsan convallis. Aenean eget tristique eros. Quisque lacinia, ipsum finibus laoreet bibendum, lectus neque vestibulum urna, eget euismod tortor erat tristique tortor. Nulla ut sodales ante. In a ligula eget lacus bibendum interdum sed in odio. Donec convallis placerat enim, at ultricies arcu finibus venenatis. Aliquam eget tortor et risus pretium placerat eu at purus. Nullam magna mi, dictum accumsan enim ac, tincidunt suscipit mauris. Nam fermentum consequat aliquam. Pellentesque sodales est ut nunc accumsan, in commodo arcu pharetra. Pellentesque eu mauris pellentesque, lacinia risus ac, consectetur turpis. Curabitur feugiat nibh cursus, facilisis nulla in, feugiat nisl. Quisque egestas leo urna, quis interdum quam efficitur ut.', 0),
(3, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non ullamcorper ipsum. Praesent dictum odio non nunc ullamcorper, et commodo turpis sodales. Morbi sed diam ut purus auctor congue lacinia vel quam. Morbi aliquet, lectus vel placerat egestas, eros eros feugiat nisi, non condimentum arcu nisi in est. Vestibulum congue leo at molestie placerat. Maecenas scelerisque dui eros, ac tristique lectus consectetur at. Duis luctus nisl imperdiet, tincidunt mi viverra, semper massa. Vivamus lobortis posuere est, quis euismod massa gravida sit amet. Cras egestas justo tortor, at pharetra felis tristique vel. Donec tempor massa quis massa fringilla vestibulum. Proin commodo dui vel augue auctor elementum. Vestibulum ac purus id sapien facilisis ullamcorper. In dignissim dictum tortor et egestas. Vestibulum non lectus sit amet nisl molestie fringilla. Nulla tincidunt neque dolor, ut aliquam lectus luctus sed.\r\n\r\nSed faucibus, mi at pulvinar pellentesque, magna mauris rutrum lectus, vitae sodales nulla ipsum vitae diam. Pellentesque nisl velit, gravida ut diam malesuada, porta tristique sem. Praesent accumsan nunc id libero accumsan, vitae imperdiet metus fringilla. Sed vehicula, leo non gravida congue, quam est molestie tellus, at cursus est ante ac velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque quis maximus metus. Nulla dapibus nisi nec augue pretium mollis. Nunc vel magna ac nulla varius ultrices. Aliquam molestie, metus nec accumsan tincidunt, mauris lectus scelerisque metus, at ornare nisi urna nec neque. Morbi sed tempus erat. Nunc nec dui faucibus ligula ullamcorper semper ut nec ex. Integer quis ex non tellus hendrerit bibendum vitae eu mi. Aliquam purus urna, viverra vel dignissim sed, tincidunt nec metus. Sed diam orci, dictum ac rutrum sed, dignissim vitae tellus.\r\n\r\nFusce tempor id odio ut ultricies. Praesent vel nibh posuere lacus hendrerit ultrices id quis dolor. Mauris auctor lacinia porta. Nullam aliquet rhoncus leo. Etiam sodales purus eget arcu condimentum lobortis. Sed nec auctor ipsum. Nunc malesuada nunc at nisl congue, eget pharetra libero efficitur.\r\n\r\nInteger aliquam aliquam eros, quis venenatis ipsum pulvinar non. Mauris sit amet vulputate ante. Pellentesque sem massa, efficitur ac lectus rhoncus, finibus porta dolor. Ut elementum facilisis mi vitae semper. Aliquam in placerat risus. Nulla rhoncus nibh vel nibh pretium, ac lobortis erat maximus. Morbi malesuada nunc tortor, et varius dui luctus nec. Etiam vitae ex non quam placerat gravida. Aenean pellentesque ac odio vitae interdum. Vestibulum id augue nec tellus auctor fringilla nec in eros.\r\n\r\nNulla elementum magna ullamcorper, molestie justo non, laoreet neque. Nam id ante non tellus suscipit imperdiet sit amet a sem. Suspendisse euismod fermentum eros, sit amet pulvinar nulla. Praesent nec ipsum vel purus accumsan convallis. Aenean eget tristique eros. Quisque lacinia, ipsum finibus laoreet bibendum, lectus neque vestibulum urna, eget euismod tortor erat tristique tortor. Nulla ut sodales ante. In a ligula eget lacus bibendum interdum sed in odio. Donec convallis placerat enim, at ultricies arcu finibus venenatis. Aliquam eget tortor et risus pretium placerat eu at purus. Nullam magna mi, dictum accumsan enim ac, tincidunt suscipit mauris. Nam fermentum consequat aliquam. Pellentesque sodales est ut nunc accumsan, in commodo arcu pharetra. Pellentesque eu mauris pellentesque, lacinia risus ac, consectetur turpis. Curabitur feugiat nibh cursus, facilisis nulla in, feugiat nisl. Quisque egestas leo urna, quis interdum quam efficitur ut.', 0),
(4, 1, '<h1>Lorem</h1> ipsum dolor sit amet, consectetur adipiscing elit. Sed non ullamcorper ipsum. Praesent dictum odio non nunc ullamcorper, et commodo turpis sodales. Morbi sed diam ut purus auctor congue lacinia vel quam. Morbi aliquet, lectus vel placerat egestas, eros eros feugiat nisi, non condimentum arcu nisi in est. Vestibulum congue leo at molestie placerat. Maecenas scelerisque dui eros, ac tristique lectus consectetur at. Duis luctus nisl imperdiet, tincidunt mi viverra, semper massa. Vivamus lobortis posuere est, quis euismod massa gravida sit amet. Cras egestas justo tortor, at pharetra felis tristique vel. Donec tempor massa quis massa fringilla vestibulum. Proin commodo dui vel augue auctor elementum. Vestibulum ac purus id sapien facilisis ullamcorper. In dignissim dictum tortor et egestas. Vestibulum non lectus sit amet nisl molestie fringilla. Nulla tincidunt neque dolor, ut aliquam lectus luctus sed.\r\n\r\nSed faucibus, mi at pulvinar pellentesque, magna mauris rutrum lectus, vitae sodales nulla ipsum vitae diam. Pellentesque nisl velit, gravida ut diam malesuada, porta tristique sem. Praesent accumsan nunc id libero accumsan, vitae imperdiet metus fringilla. Sed vehicula, leo non gravida congue, quam est molestie tellus, at cursus est ante ac velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque quis maximus metus. Nulla dapibus nisi nec augue pretium mollis. Nunc vel magna ac nulla varius ultrices. Aliquam molestie, metus nec accumsan tincidunt, mauris lectus scelerisque metus, at ornare nisi urna nec neque. Morbi sed tempus erat. Nunc nec dui faucibus ligula ullamcorper semper ut nec ex. Integer quis ex non tellus hendrerit bibendum vitae eu mi. Aliquam purus urna, viverra vel dignissim sed, tincidunt nec metus. Sed diam orci, dictum ac rutrum sed, dignissim vitae tellus.\r\n\r\nFusce tempor id odio ut ultricies. Praesent vel nibh posuere lacus hendrerit ultrices id quis dolor. Mauris auctor lacinia porta. Nullam aliquet rhoncus leo. Etiam sodales purus eget arcu condimentum lobortis. Sed nec auctor ipsum. Nunc malesuada nunc at nisl congue, eget pharetra libero efficitur.\r\n\r\nInteger aliquam aliquam eros, quis venenatis ipsum pulvinar non. Mauris sit amet vulputate ante. Pellentesque sem massa, efficitur ac lectus rhoncus, finibus porta dolor. Ut elementum facilisis mi vitae semper. Aliquam in placerat risus. Nulla rhoncus nibh vel nibh pretium, ac lobortis erat maximus. Morbi malesuada nunc tortor, et varius dui luctus nec. Etiam vitae ex non quam placerat gravida. Aenean pellentesque ac odio vitae interdum. Vestibulum id augue nec tellus auctor fringilla nec in eros.\r\n\r\nNulla elementum magna ullamcorper, molestie justo non, laoreet neque. Nam id ante non tellus suscipit imperdiet sit amet a sem. Suspendisse euismod fermentum eros, sit amet pulvinar nulla. Praesent nec ipsum vel purus accumsan convallis. Aenean eget tristique eros. Quisque lacinia, ipsum finibus laoreet bibendum, lectus neque vestibulum urna, eget euismod tortor erat tristique tortor. Nulla ut sodales ante. In a ligula eget lacus bibendum interdum sed in odio. Donec convallis placerat enim, at ultricies arcu finibus venenatis. Aliquam eget tortor et risus pretium placerat eu at purus. Nullam magna mi, dictum accumsan enim ac, tincidunt suscipit mauris. Nam fermentum consequat aliquam. Pellentesque sodales est ut nunc accumsan, in commodo arcu pharetra. Pellentesque eu mauris pellentesque, lacinia risus ac, consectetur turpis. Curabitur feugiat nibh cursus, facilisis nulla in, feugiat nisl. Quisque egestas leo urna, quis interdum quam efficitur ut.', 0);

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
(1, 4, 1, 'WHAAAAAA IT WOKRS!!!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`) VALUES
(1, 'Erik', 'erik@com', '$2y$10$aN2tkOp5eimF97Km4JXI1uNMPmcqoRhl4DZ5j3qUinqXri9dxSwcm');

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
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`) USING BTREE,
  ADD KEY `ID` (`ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`articleID`) REFERENCES `article` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
