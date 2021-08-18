-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 11:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotomax_official`
--
CREATE DATABASE IF NOT EXISTS `fotomax_official` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fotomax_official`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `maintitle` text NOT NULL,
  `subtitle` text NOT NULL,
  `aboutimage` text NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `maintitle`, `subtitle`, `aboutimage`, `description`, `date`) VALUES
(1, 'About Us.', 'Who We Are.', '60c2b591c067b32ffd2db4a2ec452627', 'Fotomax is a well built responsive user interactive entertainment platform owned by naweri industries department of Social  entertainment. this is the plae with the cheapest movie listing and free movies. the only temple online to pass your time', '2021-05-16 01:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `adminsdata`
--

CREATE TABLE `adminsdata` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `passkey` text NOT NULL,
  `sessionkey` text NOT NULL,
  `lastlogon` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsdata`
--

INSERT INTO `adminsdata` (`id`, `username`, `passkey`, `sessionkey`, `lastlogon`) VALUES
(1, 'Admin', '$2y$10$WanLZugZJ80h5hWNpuxLLu/Wnqf9E6cZYQuzzUb29.7gjgCg7SXge', '96QFJBA59EQT07TMR0J441VT47G1ZQ5ZXLOGXHT526U6FZ8GVW8W0NV4E1LLBDGXAAMEWB0SMLJYXYMN7TW5G7H2YTEJ2OIJVJU48V21O584T843KELXN1W8I-JTPP2AEJ57Y0QK9W4EIISDLOF75ME1JKB79IJTRA4-N5C64TTUW0XBEXRM4YD3CQX1R1ZZNFHDTU590TYLBLG2BUKRHIHBKGHBBG2A1-1HASHMA2X-K-LRNK4FVAFRWUWDX02', '2021-04-06 18:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `allaccounts`
--

CREATE TABLE `allaccounts` (
  `indexkey` int(11) NOT NULL,
  `accfirstid` text NOT NULL,
  `acclastid` text NOT NULL,
  `acids` text NOT NULL,
  `accid` text NOT NULL,
  `ackey` text NOT NULL,
  `arkey` text NOT NULL,
  `acagestatus` text NOT NULL,
  `loginstats` text NOT NULL,
  `ackeynow` text NOT NULL,
  `facerecog` text NOT NULL,
  `acdatesdata` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allaccounts`
--

INSERT INTO `allaccounts` (`indexkey`, `accfirstid`, `acclastid`, `acids`, `accid`, `ackey`, `arkey`, `acagestatus`, `loginstats`, `ackeynow`, `facerecog`, `acdatesdata`) VALUES
(1, 'naweri', 'clinton', 'naweriyclinton@gmail.com', '+256751021147', '$2y$10$EQOqzYSPTfo2aKladhLZzuHgigr9K8WNQePEstlOgAkdkacMzSItK', '$2y$10$YxanExRun7iz5qQwr6UiUOGR.tul9vWz8NaZLrv1wjOIj6.Ylax4i', 'old', 'yes', '------SG--M---UR-U-OP--X-I7C-8----E68A---OK--H-W1A-XV6S6YTH---AG-4--6NQ-5AB-SO---6JM2JSGZ-', '6b1d0f05b0d3d27fe0a4a09b0f5abe2f-(1).jpg', '2021-06-03 22:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `general_system_data`
--

CREATE TABLE `general_system_data` (
  `indexnumber` int(11) NOT NULL,
  `sitename` text NOT NULL,
  `siteabr` text NOT NULL,
  `coname` text NOT NULL,
  `sitedesc` text NOT NULL,
  `sitekeys` text NOT NULL,
  `sitelogo` text NOT NULL,
  `siteindexdesktop` text NOT NULL,
  `siteindexmobi` text NOT NULL,
  `siteloginimage` text NOT NULL,
  `siteregimage` text NOT NULL,
  `forgotpassimage` text NOT NULL,
  `payapiimage` text NOT NULL,
  `payapimobiimage` text NOT NULL,
  `sitefavicon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_system_data`
--

INSERT INTO `general_system_data` (`indexnumber`, `sitename`, `siteabr`, `coname`, `sitedesc`, `sitekeys`, `sitelogo`, `siteindexdesktop`, `siteindexmobi`, `siteloginimage`, `siteregimage`, `forgotpassimage`, `payapiimage`, `payapimobiimage`, `sitefavicon`) VALUES
(1, 'Fotomax', 'Fotomax', 'Naweri Industries', 'Watch free Movies Online.', 'Watch free Movies Online, Buy Movies Online, Free movies Online, Sci-fi movies online free', 'logo-fotomax.png', 'pexels-pixabay-326055.jpg', 'h', 'pexels-frans-van-heerden-624015.jpg', 'pexels-luis-del-rã­o-15286.jpg', 'pexels-clive-kim-4220967.jpg', 'l', 'm', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(255) NOT NULL,
  `gnrename` varchar(255) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `gnrename`, `datecreated`, `status`) VALUES
(1, 'Scifi', '2021-06-05 19:10:54', 'enable'),
(2, 'Action', '2021-06-05 19:10:57', 'enable'),
(3, 'Adventure', '2021-06-05 19:11:03', 'enable'),
(4, 'Horror', '2021-06-05 19:13:10', 'enable'),
(5, 'Animation', '2021-06-05 19:13:21', 'enable'),
(6, 'Racing', '2021-06-05 19:13:47', 'enable'),
(7, 'Love', '2021-06-05 19:13:59', 'enable'),
(8, 'High School', '2021-06-05 19:14:04', 'enable'),
(9, 'Kids', '2021-06-05 19:14:16', 'enable'),
(10, 'Christian', '2021-06-05 19:14:21', 'enable');

-- --------------------------------------------------------

--
-- Table structure for table `merchantdata`
--

CREATE TABLE `merchantdata` (
  `id` int(255) NOT NULL,
  `merchantclient` text NOT NULL,
  `merchantsecret` text NOT NULL,
  `dateandtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchantdata`
--

INSERT INTO `merchantdata` (`id`, `merchantclient`, `merchantsecret`, `dateandtime`) VALUES
(1, 'lc@gmail.com', 'L2WKU6NIDFLTD0AG-UPE9--9OLSD1GRRVWD69M3JVPNCB', '2021-05-16 01:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `maintitle` text NOT NULL,
  `subtitle` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  `dateofbirth` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movieslists`
--

CREATE TABLE `movieslists` (
  `id` int(255) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `movieposterportrait` text NOT NULL,
  `moviepotraitlandscape` text NOT NULL,
  `videolink` text NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `movieprice` text NOT NULL,
  `movieviewcount` int(255) NOT NULL,
  `moviepricingstatus` text NOT NULL,
  `moviegenre` text NOT NULL,
  `activity` text NOT NULL,
  `purchases` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieslists`
--

INSERT INTO `movieslists` (`id`, `moviename`, `movieposterportrait`, `moviepotraitlandscape`, `videolink`, `dateadded`, `movieprice`, `movieviewcount`, `moviepricingstatus`, `moviegenre`, `activity`, `purchases`) VALUES
(1, 'Aladdin', 'https://192.168.1.100/fotomax/potraits/K9T2Baladdin-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/K9T2Baladdin-landscape.jpg', 'K9T2Baladdin-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:17:15', '2.99', 42, 'free', '3', 'enable', 0),
(2, 'BloodShot', 'https://192.168.1.100/fotomax/potraits/9M00Xbloodshot-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/9M00Xbloodshot-landscape.jpg', '9M00Xbloodshot-naweri-industries-dept-of-entertainment.mkv', '2021-06-05 19:19:35', '2.99', 0, 'free', '1', 'enable', 0),
(3, 'Dora And The Lost City of Gold', 'https://192.168.1.100/fotomax/potraits/W3MXDdora-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/W3MXDdora-landscape.jpg', 'W3MXDdora.and.the.lost.city.of.gold--naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:22:02', '2.99', 0, 'free', '3', 'enable', 0),
(4, 'Dr Strange', 'https://192.168.1.100/fotomax/potraits/-1X4Wdr-strange-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/-1X4Wdr-strange-landscape.jpg', '-1X4Wdoctor.strange--naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:24:44', '2.99', 0, 'free', '1', 'enable', 0),
(5, 'Fast Five', 'https://192.168.1.100/fotomax/potraits/NFV03fast-five-poster-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/NFV03fast-five-poster-landscape.jpg', 'NFV03fast.five--naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:27:41', '2.99', 19, 'free', '2', 'enable', 0),
(6, 'Godzilla', 'https://192.168.1.100/fotomax/potraits/JIMM7godzilla-king-of-the-monsters-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/JIMM7godzilla-king-of-the-monsters-landscape.jpg', 'JIMM7godzilla.king.of.the.monsters-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:31:04', '2.99', 5, 'free', '1', 'enable', 0),
(7, 'Green Lantern', 'https://192.168.1.100/fotomax/potraits/JTAH8green-lantern-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/JTAH8green-lantern-landscape.jpg', 'JTAH8green.lantern.2011.dvdrip.xvid-amiable.mp4', '2021-06-05 19:34:37', '2.99', 7, 'free', '1', 'enable', 0),
(8, 'Hell Boy', 'https://192.168.1.100/fotomax/potraits/5G6AChellboy-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/5G6AChellboy-landscape.png', '5G6AChellboy--naweri-industries-dept-of-entertainment.mkv', '2021-06-05 19:39:09', '2.99', 1, 'free', '4', 'enable', 0),
(9, 'Hobbs And Shaw', 'https://192.168.1.100/fotomax/potraits/OSKNHhobbs-and-shaw-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/OSKNHhobbs-shaw-poster-landscape.jpg', 'OSKNHfast.and.furious.presents.hobbs.and.shaw--naweri-industries-dept-of-entertainment.mkv', '2021-06-05 19:41:27', '2.99', 3, 'free', '2', 'enable', 0),
(10, 'The Jungle Book', 'https://192.168.1.100/fotomax/potraits/3QMEPjungle-book-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/3QMEPthe-jungle-book-landscape.jpg', '3QMEPthe.jungle.book--naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:44:32', '2.99', 0, 'free', '3', 'enable', 0),
(11, 'Mad Max', 'https://192.168.1.100/fotomax/potraits/92CSHmad-max-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/92CSHmad-max-landscape.jpg', '92CSHmad.max.fury.road.-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:47:26', '2.99', 1, 'free', '2', 'enable', 0),
(12, 'Moana', 'https://192.168.1.100/fotomax/potraits/2Z5FGmoana--potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/2Z5FGmoana--landscape.jpg', '2Z5FGmoana-naweri-industries-dept-of-entertainment.mp4.mp4', '2021-06-05 19:48:59', '2.99', 21, 'free', '5', 'enable', 0),
(13, 'Mortal Engines', 'https://192.168.1.100/fotomax/potraits/EZH-8mortal-engines-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/EZH-8mortal-engines-landscape.jpg', 'EZH-8mortal.engines-naweri-industries-dept-of-entertainment.mkv', '2021-06-05 19:53:22', '2.99', 19, 'free', '1', 'enable', 0),
(14, 'Pirates of The Caribbean', 'https://192.168.1.100/fotomax/potraits/6OLHVpirates-dead-men-potrait.jpeg', 'https://192.168.1.100/fotomax/landscapes/6OLHVpirates-dead-men-potrait-landscape.jpg', '6OLHVpirates.of.the.caribbean.dead.men.tell.no.tales-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 19:59:03', '2.99', 15, 'free', '4', 'enable', 0),
(15, 'Rampage', 'https://192.168.1.100/fotomax/potraits/EM3J4rampage-potrait.jpeg', 'https://192.168.1.100/fotomax/landscapes/EM3J4rampage-landscape.jpg', 'EM3J4rampage-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 20:01:08', '2.99', 0, 'free', '1', 'enable', 0),
(16, 'Star Wars', 'https://192.168.1.100/fotomax/potraits/978O1star-wars-skywalker-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/978O1star-wars-skywalsker-landscape.jpg', '978O1star.wars.the.rise.of.skywalker-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 20:06:52', '2.99', 0, 'free', '1', 'enable', 0),
(17, 'Star Trek', 'https://192.168.1.100/fotomax/potraits/34PGDstar-trek-into-darkness-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/34PGDstar-trek-into-darkness-landscape.jpg', '34PGDstar.trek.into.darkness-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 20:09:10', '2.99', 0, 'free', '1', 'enable', 0),
(18, 'The Tomb Raider', 'https://192.168.1.100/fotomax/potraits/WW1YPtomb-raider-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/WW1YPtomb-raider-landscape.jpg', 'WW1YPtomb.raider-naweri-industries-dept-of-entertainment.mkv', '2021-06-05 20:13:18', '2.99', 0, 'free', '3', 'enable', 0),
(19, 'The Wrath Of Vajra', 'https://192.168.1.100/fotomax/potraits/M6S2Nwrath-of-vajra-potrait.jpg', 'https://192.168.1.100/fotomax/landscapes/M6S2Nwrath-of-vajra-landscape.jpg', 'M6S2Nthe-wrath-of-vajra-naweri-industries-dept-of-entertainment.mp4', '2021-06-05 20:15:42', '2.99', 0, 'free', '2', 'enable', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(255) NOT NULL,
  `movieid` text NOT NULL,
  `userid` text NOT NULL,
  `reference` text NOT NULL,
  `status` text NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `searchterms`
--

CREATE TABLE `searchterms` (
  `id` int(255) NOT NULL,
  `keyword` text NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tou`
--

CREATE TABLE `tou` (
  `id` int(255) NOT NULL,
  `maintitle` text NOT NULL,
  `subtitle` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `dateofsending` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tou`
--

INSERT INTO `tou` (`id`, `maintitle`, `subtitle`, `image`, `description`, `dateofsending`) VALUES
(1, 'Terms of Use', 'Disclaimer', 'pexels-photo-2365457.jpeg', 'Once a movie or video has been purchased, there shall be no refunds and this website is not associated or affiliated to the owners of the content published. this website is built and maintained by naweri industries and that means your personal information shall not be exposed. however, naweri industries shall comply with authorities once informatiion about a particular user is being queried. Naweri industries shall also share your email with payments services providers once you initiate a payment on this website.', '2021-06-04 16:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsdata`
--
ALTER TABLE `adminsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allaccounts`
--
ALTER TABLE `allaccounts`
  ADD PRIMARY KEY (`indexkey`);

--
-- Indexes for table `general_system_data`
--
ALTER TABLE `general_system_data`
  ADD PRIMARY KEY (`indexnumber`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gnrename` (`gnrename`);

--
-- Indexes for table `merchantdata`
--
ALTER TABLE `merchantdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movieslists`
--
ALTER TABLE `movieslists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `moviename` (`moviename`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchterms`
--
ALTER TABLE `searchterms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tou`
--
ALTER TABLE `tou`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminsdata`
--
ALTER TABLE `adminsdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allaccounts`
--
ALTER TABLE `allaccounts`
  MODIFY `indexkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_system_data`
--
ALTER TABLE `general_system_data`
  MODIFY `indexnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `merchantdata`
--
ALTER TABLE `merchantdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movieslists`
--
ALTER TABLE `movieslists`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searchterms`
--
ALTER TABLE `searchterms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tou`
--
ALTER TABLE `tou`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
