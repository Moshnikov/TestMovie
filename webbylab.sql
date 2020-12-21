-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2020 at 01:05 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbylab`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `release year` varchar(10) NOT NULL,
  `format` varchar(10) NOT NULL,
  `stars` varchar(750) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release year`, `format`, `stars`) VALUES
(412, 'Casablanca', '1942', 'DVD', 'Humphrey Bogart, Ingrid Bergman, Claude Rains, Peter Lorre'),
(413, 'Charade', '1953', 'DVD', 'Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
(414, 'Cool Hand Luke', '1967', 'VHS', 'Paul Newman, George Kennedy, Strother Martin'),
(415, 'Butch Cassidy and the Sundance Kid', '1969', 'VHS', 'Paul Newman, Robert Redford, Katherine Ross'),
(416, 'The Sting', '1973', 'DVD', 'Robert Redford, Paul Newman, Robert Shaw, Charles Durning'),
(417, 'The Muppet Movie', '1979', 'DVD', 'Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton'),
(418, 'Get Shorty ', '1995', 'DVD', 'John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
(419, 'My Cousin Vinny', '1992', 'DVD', 'Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio'),
(420, 'Gladiator', '2000', 'Blu-Ray', 'Russell Crowe, Joaquin Phoenix, Connie Nielson'),
(421, 'Star Wars', '1977', 'Blu-Ray', 'Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones'),
(422, 'Raiders of the Lost Ark', '1981', 'DVD', 'Harrison Ford, Karen Allen'),
(423, 'Serenity', '2005', 'Blu-Ray', 'Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor'),
(424, 'Hooisers', '1986', 'VHS', 'Gene Hackman, Barbara Hershey, Dennis Hopper'),
(425, 'WarGames', '1983', 'VHS', 'Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin'),
(426, 'Spaceballs', '1987', 'DVD', 'Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers'),
(427, 'Young Frankenstein', '1974', 'VHS', 'Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle'),
(428, 'Real Genius', '1985', 'VHS', 'Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton'),
(429, 'Top Gun', '1986', 'DVD', 'Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt'),
(430, 'MASH', '1970 ', 'DVD', 'Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall'),
(431, 'The Russians Are Coming, The Russians Are Coming', '1966', 'VHS', 'Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith'),
(432, 'Jaws', '1975 ', 'DVD', 'Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary '),
(433, '2001: A Space Odyssey', '1968', 'DVD', 'Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain'),
(434, 'Harvey', '1950 ', 'DVD', 'James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
(435, 'Knocked Up', '2007', 'Blu-Ray', 'Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann'),
(436, 'вася ', '2020-12-01', 'VHS', 'пупкин'),
(437, 'дима', '2020-12-01', 'DVD', 'александр'),
(438, 'Алекс', '2020-12-01', 'DVD', 'Понаморев'),
(440, 'алекс', '2020-12-01', 'VHS', 'понаморева'),
(441, 'Вася', '2020-11-05', 'DVD', 'Пипипка'),
(442, 'Дима', '2020-12-02', 'DVD', 'Давно'),
(443, 'casablanka', '2020-12-11', 'DVD', 'asbasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`,`release year`,`stars`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
