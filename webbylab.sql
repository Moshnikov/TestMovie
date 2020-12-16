-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 12:38 PM
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
  `title` tinytext NOT NULL,
  `release year` tinytext NOT NULL,
  `format` tinytext NOT NULL,
  `stars` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release year`, `format`, `stars`) VALUES
(42, 'Knocked Up', '2007', 'Blu-Ray', 'Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann'),
(45, 'Charade', '1953', 'DVD', 'Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
(46, 'Cool Hand Luke', '1967', 'VHS', 'Paul Newman, George Kennedy, Strother Martin'),
(48, 'The Sting', '1973', 'DVD', 'Robert Redford, Paul Newman, Robert Shaw, Charles Durning'),
(49, 'The Muppet Movie', '1979', 'DVD', 'Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton'),
(50, 'Get Shorty ', '1995', 'DVD', 'John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
(51, 'My Cousin Vinny', '1992', 'DVD', 'Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio'),
(52, 'Gladiator', '2000', 'Blu-Ray', 'Russell Crowe, Joaquin Phoenix, Connie Nielson'),
(53, 'Star Wars', '1977', 'Blu-Ray', 'Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones'),
(54, 'Raiders of the Lost Ark', '1981', 'DVD', 'Harrison Ford, Karen Allen'),
(55, 'Serenity', '2005', 'Blu-Ray', 'Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor'),
(56, 'Hooisers', '1986', 'VHS', 'Gene Hackman, Barbara Hershey, Dennis Hopper'),
(57, 'WarGames', '1983', 'VHS', 'Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin'),
(58, 'Spaceballs', '1987', 'DVD', 'Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers'),
(59, 'Young Frankenstein', '1974', 'VHS', 'Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle'),
(60, 'Real Genius', '1985', 'VHS', 'Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton'),
(61, 'Top Gun', '1986', 'DVD', 'Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt'),
(62, 'MASH', '1970 ', 'DVD', 'Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall'),
(63, 'The Russians Are Coming, The Russians Are Coming', '1966', 'VHS', 'Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith'),
(64, 'Jaws', '1975 ', 'DVD', 'Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary '),
(65, '2001: A Space Odyssey', '1968', 'DVD', 'Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain'),
(66, 'Harvey', '1950 ', 'DVD', 'James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
(67, 'Knocked Up', '2007', 'Blu-Ray', 'Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann'),
(68, 'Blazing Saddles', '1974', 'VHS', 'Mel Brooks, Clevon Little, Harvey Korman, Gene Wilder, Slim Pickens, Madeline Kahn'),
(69, 'Casablanca', '1942', 'DVD', 'Humphrey Bogart, Ingrid Bergman, Claude Rains, Peter Lorre'),
(70, 'Charade', '1953', 'DVD', 'Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
(71, 'Cool Hand Luke', '1967', 'VHS', 'Paul Newman, George Kennedy, Strother Martin'),
(72, 'Butch Cassidy and the Sundance Kid', '1969', 'VHS', 'Paul Newman, Robert Redford, Katherine Ross'),
(73, 'The Sting', '1973', 'DVD', 'Robert Redford, Paul Newman, Robert Shaw, Charles Durning'),
(74, 'The Muppet Movie', '1979', 'DVD', 'Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton'),
(75, 'Get Shorty ', '1995', 'DVD', 'John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
(76, 'My Cousin Vinny', '1992', 'DVD', 'Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio'),
(77, 'Gladiator', '2000', 'Blu-Ray', 'Russell Crowe, Joaquin Phoenix, Connie Nielson'),
(78, 'Star Wars', '1977', 'Blu-Ray', 'Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones'),
(79, 'Raiders of the Lost Ark', '1981', 'DVD', 'Harrison Ford, Karen Allen'),
(80, 'Serenity', '2005', 'Blu-Ray', 'Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor'),
(81, 'Hooisers', '1986', 'VHS', 'Gene Hackman, Barbara Hershey, Dennis Hopper'),
(82, 'WarGames', '1983', 'VHS', 'Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin'),
(83, 'Spaceballs', '1987', 'DVD', 'Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers'),
(84, 'Young Frankenstein', '1974', 'VHS', 'Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle'),
(85, 'Real Genius', '1985', 'VHS', 'Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton'),
(86, 'Top Gun', '1986', 'DVD', 'Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt'),
(87, 'MASH', '1970 ', 'DVD', 'Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall'),
(88, 'The Russians Are Coming, The Russians Are Coming', '1966', 'VHS', 'Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith'),
(89, 'Jaws', '1975 ', 'DVD', 'Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary '),
(91, 'Harvey', '1950 ', 'DVD', 'James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
(92, 'Knocked Up', '2007', 'Blu-Ray', 'Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
