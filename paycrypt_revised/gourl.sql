-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2018 at 12:26 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gourl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admn_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admn_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `affiliated`
--

CREATE TABLE `affiliated` (
  `affiliated_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `affiPrivateKey` varchar(255) DEFAULT NULL,
  `bitcoinAddress` varchar(255) DEFAULT NULL,
  `bitcoinCashAddress` varchar(255) NOT NULL,
  `litecoinAddress` varchar(255) NOT NULL,
  `dashcoinAddress` varchar(255) NOT NULL,
  `dogecoinAddress` varchar(255) NOT NULL,
  `speedcoinAddress` varchar(255) NOT NULL,
  `universalCurrency` varchar(255) NOT NULL,
  `peercoinAddress` varchar(255) NOT NULL,
  `reddcoinAddress` varchar(255) NOT NULL,
  `potcoinAddress` varchar(255) NOT NULL,
  `feathercoinAddress` varchar(255) NOT NULL,
  `vertcoinAddress` varchar(255) NOT NULL,
  `MonetaryUnitAddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `key_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliated`
--

INSERT INTO `affiliated` (`affiliated_id`, `title`, `affiPrivateKey`, `bitcoinAddress`, `bitcoinCashAddress`, `litecoinAddress`, `dashcoinAddress`, `dogecoinAddress`, `speedcoinAddress`, `universalCurrency`, `peercoinAddress`, `reddcoinAddress`, `potcoinAddress`, `feathercoinAddress`, `vertcoinAddress`, `MonetaryUnitAddress`, `email`, `key_created`, `key_update`) VALUES
(4, 'Shubham Bitcoin', 'DEV082b7a1b163e1db07', 'ascs', 'af', 'sfaf', 'safasf', 'asfa', 'sfsaf', 'asfasf', 'asff', 'asf', 'safsaf', 'asf', 'sfsaf', 'saf', 'shubhamsahu707@gmail.com', '2018-01-03 05:38:30', '2018-01-03 05:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `coin_id` int(11) NOT NULL,
  `coin_name` varchar(255) DEFAULT NULL,
  `coin_image` varchar(255) DEFAULT NULL,
  `coin_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coin`
--

INSERT INTO `coin` (`coin_id`, `coin_name`, `coin_image`, `coin_date`) VALUES
(38, 'BitCoin', 'bitcoin.png', '2017-12-27'),
(39, 'BitCoinCash', 'bitcoincash.png', '2017-12-27'),
(40, 'DashCoin', 'dash.png', '2017-12-27'),
(41, 'LiteCoin', 'litecoin.png', '2017-12-27'),
(42, 'DogeCoin', 'dogecoin.png', '2017-12-27'),
(43, 'FeatherCoin', 'feathercoin.png', '2017-12-27'),
(44, 'MonetaryCoin', 'monetaryunit.png', '2017-12-27'),
(45, 'PeerCoin', 'peercoin.png', '2017-12-27'),
(46, 'PotCoin', 'potcoin.png', '2017-12-27'),
(47, 'RedCoin', 'reddcoin.png', '2017-12-27'),
(48, 'SpeedCoin', 'speedcoin.png', '2017-12-27'),
(49, 'VertCoin', 'vertcoin.png', '2017-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_files`
--

CREATE TABLE `crypto_files` (
  `fileID` int(11) UNSIGNED NOT NULL,
  `fileTitle` varchar(100) NOT NULL DEFAULT '',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `fileName` varchar(100) NOT NULL DEFAULT '',
  `fileSize` double(15,0) NOT NULL DEFAULT '0',
  `fileText` text,
  `priceUSD` double(10,2) NOT NULL DEFAULT '0.00',
  `priceCoin` double(17,5) NOT NULL DEFAULT '0.00000',
  `priceLabel` varchar(6) NOT NULL DEFAULT '',
  `purchases` mediumint(8) NOT NULL DEFAULT '0',
  `userFormat` enum('MANUAL','COOKIE','SESSION','IPADDRESS') NOT NULL,
  `expiryPeriod` varchar(15) NOT NULL DEFAULT '',
  `lang` varchar(2) NOT NULL DEFAULT '',
  `defCoin` varchar(5) NOT NULL DEFAULT '',
  `defShow` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(100) NOT NULL DEFAULT '',
  `imageWidth` smallint(5) NOT NULL DEFAULT '0',
  `priceShow` tinyint(1) NOT NULL DEFAULT '1',
  `paymentCnt` smallint(5) NOT NULL DEFAULT '0',
  `paymentTime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `createtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crypto_membership`
--

CREATE TABLE `crypto_membership` (
  `membID` int(11) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `paymentID` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `disabled` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crypto_membership`
--

INSERT INTO `crypto_membership` (`membID`, `userID`, `paymentID`, `startDate`, `endDate`, `disabled`, `recordCreated`) VALUES
(1, 1, 0, '2017-12-08 00:00:00', '2018-01-08 23:59:00', 0, '2017-12-08 10:25:18'),
(2, 2, 0, '2017-12-08 00:00:00', '2018-01-08 23:59:00', 0, '2017-12-08 10:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_payments`
--

CREATE TABLE `crypto_payments` (
  `paymentID` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `boxID` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(10) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT '0.00000000',
  `amountUSD` double(20,8) NOT NULL DEFAULT '0.00000000',
  `unrecognised` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `crypto_payments`
--

INSERT INTO `crypto_payments` (`paymentID`, `email`, `boxID`, `boxType`, `orderID`, `userID`, `countryID`, `coinLabel`, `amount`, `amountUSD`, `unrecognised`, `addr`, `txID`, `txDate`, `txConfirmed`, `txCheckDate`, `processed`, `processedDate`, `recordCreated`) VALUES
(1, 'chandu2013pal@gmail.com', 1000, 'paymentbox', '1', '1', '1', 'BitCoin', 1.00000000, 1.00000000, 1, '1', '1', '2018-01-24 00:00:00', 1, '2017-12-13 00:00:00', 1, '2017-12-13 00:00:00', '2017-12-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_products`
--

CREATE TABLE `crypto_products` (
  `productID` int(11) UNSIGNED NOT NULL,
  `productTitle` varchar(100) NOT NULL DEFAULT '',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `priceUSD` double(10,2) NOT NULL DEFAULT '0.00',
  `priceCoin` double(17,5) NOT NULL DEFAULT '0.00000',
  `priceLabel` varchar(6) NOT NULL DEFAULT '',
  `purchases` mediumint(8) NOT NULL DEFAULT '0',
  `expiryPeriod` varchar(15) NOT NULL DEFAULT '',
  `lang` varchar(2) NOT NULL DEFAULT '',
  `defCoin` varchar(5) NOT NULL DEFAULT '',
  `defShow` tinyint(1) NOT NULL DEFAULT '1',
  `productText` text,
  `finalText` text,
  `emailUser` tinyint(1) NOT NULL DEFAULT '1',
  `emailUserFrom` varchar(50) NOT NULL DEFAULT '',
  `emailUserTitle` varchar(100) NOT NULL DEFAULT '',
  `emailUserBody` text,
  `emailAdmin` tinyint(1) NOT NULL DEFAULT '1',
  `emailAdminFrom` varchar(50) NOT NULL DEFAULT '',
  `emailAdminTo` text,
  `emailAdminTitle` varchar(100) NOT NULL DEFAULT '',
  `emailAdminBody` text,
  `paymentCnt` smallint(5) NOT NULL DEFAULT '0',
  `ak_action` varchar(255) NOT NULL,
  `paymentTime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `createtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crypto_products`
--

INSERT INTO `crypto_products` (`productID`, `productTitle`, `active`, `priceUSD`, `priceCoin`, `priceLabel`, `purchases`, `expiryPeriod`, `lang`, `defCoin`, `defShow`, `productText`, `finalText`, `emailUser`, `emailUserFrom`, `emailUserTitle`, `emailUserBody`, `emailAdmin`, `emailAdminFrom`, `emailAdminTo`, `emailAdminTitle`, `emailAdminBody`, `paymentCnt`, `ak_action`, `paymentTime`, `updatetime`, `createtime`) VALUES
(1, 'bitcoin', 1, 0.00, 0.12000, 'BTC', 1, '2 MONTHS', 'en', 'BTC', 1, '<p>testing</p>', '<p>testing</p>', 0, 'shubhams@bloque.in', 'shubhams@bloque.in', 'shubhams@bloque.in', 1, 'shubhams@bloque.in', 'shubhams@bloque.in', 'shubhams@bloque.in', 'shubhams@bloque.in', 0, '', NULL, '2017-12-08 10:37:41', '2017-12-08 10:37:41'),
(13, 'litecoin', 1, 0.00, 0.00000, 'liteco', 0, '6 HOURS', 'en', '', 0, NULL, NULL, 1, 'litecoinlitecoin', 'litecoin', 'litecoin', 0, 'litecoin', 'litecoin', '', 'litecoin', 0, 'gourlsave_product', NULL, NULL, NULL),
(25, 'speedcoin', 1, 66.00, 0.00000, 'speedc', 0, '1 HOUR', 'en', '', 0, NULL, NULL, 1, 'speedcoin', 'speedcoin', 'speedcoin', 0, 'speedcoin', 'speedcoin', '', 'speedcoin', 0, 'gourlsave_product', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `monetiser`
--

CREATE TABLE `monetiser` (
  `monetiser_id` int(11) NOT NULL,
  `boxID` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `privateURL` varchar(255) DEFAULT NULL,
  `privateText` varchar(255) DEFAULT NULL,
  `publicTitle` varchar(255) DEFAULT NULL,
  `coinRate` varchar(255) DEFAULT NULL,
  `monUSD` varchar(255) DEFAULT NULL,
  `walletAddress` varchar(255) DEFAULT NULL,
  `expiryDate` varchar(255) DEFAULT NULL,
  `coinLabel` varchar(255) DEFAULT NULL,
  `coin_qty` varchar(255) DEFAULT NULL,
  `monConfirmed` varchar(255) DEFAULT NULL,
  `monConfirmedReceived` varchar(255) DEFAULT NULL,
  `monUnconfirmed` varchar(255) DEFAULT NULL,
  `monUnconfirmedReceived` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mon_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monetiser`
--

INSERT INTO `monetiser` (`monetiser_id`, `boxID`, `email`, `privateURL`, `privateText`, `publicTitle`, `coinRate`, `monUSD`, `walletAddress`, `expiryDate`, `coinLabel`, `coin_qty`, `monConfirmed`, `monConfirmedReceived`, `monUnconfirmed`, `monUnconfirmedReceived`, `active`, `invoice_id`, `created`, `mon_update`) VALUES
(133, '1000', 'chandu2013pal@gmail.com', 'sadfsd', 'asdsad', 'asdsad', '56', '43', 'dsfdsf', '25/01/2018', 'VertCoin', '1', NULL, NULL, NULL, NULL, NULL, '#in-4533823', '2018-01-02 08:43:25', '2018-01-02 08:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `security_key`
--

CREATE TABLE `security_key` (
  `key_id` int(11) NOT NULL,
  `multicurrencyID` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `boxID` varchar(255) DEFAULT NULL,
  `boxName` varchar(255) DEFAULT NULL,
  `publicKey` varchar(255) DEFAULT NULL,
  `privateKey` varchar(255) DEFAULT NULL,
  `coinName` varchar(255) DEFAULT NULL,
  `boxType` varchar(255) DEFAULT NULL,
  `isLockAddr` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `callbackUrl` varchar(255) DEFAULT NULL,
  `isAdult` int(2) DEFAULT NULL,
  `isAdult_exst` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `key_created` timestamp NULL DEFAULT NULL,
  `key_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_key`
--

INSERT INTO `security_key` (`key_id`, `multicurrencyID`, `user_id`, `boxID`, `boxName`, `publicKey`, `privateKey`, `coinName`, `boxType`, `isLockAddr`, `email`, `callbackUrl`, `isAdult`, `isAdult_exst`, `start_time`, `key_created`, `key_update`) VALUES
(51, '1001', '1', '1000', 'BitCoin', 'bznhYLC5kBlitecoinca43762f0f6f1c6d0e48bd703978ac28', '6qxrtcP325litecoin15ffba5c1ffc3a078f9e9af63d6abdc0', 'LiteCoin', 'paymentbox', 'tyuytutuiytiytityiyi', 'shubhamsahu707@gmail.com', 'atshdfjgfjg', -1, '', '', NULL, NULL),
(52, '1001', '1', '1000', 'FeatherCoin', 'm1JunoLMOyFeatherCoin75f9538e14eb7c13851c708519d0b426', 'AOpDRM9sa2FeatherCoin3a1c75fe9fa5da876755a8bfa4f19b2c', 'FeatherCoin', 'paymentbox', 'safasfsad', 'shubhamsahu707@gmail.com', 'safasfsafasf', -1, '', '', NULL, NULL),
(53, '1001', '1', '1000', 'DashCoin', 'D1ZrMpnTYuDashCoin8ac78984d8b13d30e011ea3ec5e3c45a', 'gjX93C07ZIDashCoind460c0ef99dac21ba9ba94562cd04ab6', 'DashCoin', 'paymentbox', 'bfdgjhjgh', 'shubhamsahu707@gmail.com', 'dfdgfhgkhjhg', NULL, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `box_id` varchar(255) NOT NULL,
  `ipAddress` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `monetiser` varchar(255) DEFAULT NULL,
  `affiliate` varchar(255) DEFAULT NULL,
  `notifications` varchar(255) DEFAULT NULL,
  `user_otp` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) NOT NULL,
  `googlesecretkey` varchar(255) NOT NULL,
  `tfastatus` enum('0','1') NOT NULL,
  `currency` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `box_id`, `ipAddress`, `title`, `firstname`, `lastname`, `email`, `country`, `state`, `city`, `username`, `password`, `position`, `company_name`, `company_website`, `phone`, `photo`, `monetiser`, `affiliate`, `notifications`, `user_otp`, `paid`, `business_type`, `googlesecretkey`, `tfastatus`, `currency`, `created`, `updated`) VALUES
(12, '1', '::1', NULL, 'Chandra', 'Prakash', 'chandu2013pal@gmail.com', NULL, NULL, NULL, NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0', '', NULL, NULL),
(13, '2', '::1', NULL, 'Chandra', 'Prakash', 'chandu2013pal2@gmail.com', NULL, NULL, NULL, NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0', '', NULL, NULL),
(15, '3', '127.0.0.1', NULL, 'Shubham', 'Sahu', 'shubhamsahu707@gmail.com', NULL, NULL, NULL, NULL, 'f8a9ad70d5f8ab3830bad1a2f95079342886b0fd45da769768b52f017e9ff3a7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'VVRQSEROTkM3VFdJWFlSUw==', '0', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admn_id`);

--
-- Indexes for table `affiliated`
--
ALTER TABLE `affiliated`
  ADD PRIMARY KEY (`affiliated_id`);

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`coin_id`);

--
-- Indexes for table `crypto_files`
--
ALTER TABLE `crypto_files`
  ADD PRIMARY KEY (`fileID`),
  ADD KEY `fileTitle` (`fileTitle`),
  ADD KEY `active` (`active`),
  ADD KEY `fileName` (`fileName`),
  ADD KEY `fileSize` (`fileSize`),
  ADD KEY `priceUSD` (`priceUSD`),
  ADD KEY `priceCoin` (`priceCoin`),
  ADD KEY `priceLabel` (`priceLabel`),
  ADD KEY `purchases` (`purchases`),
  ADD KEY `userFormat` (`userFormat`),
  ADD KEY `expiryPeriod` (`expiryPeriod`),
  ADD KEY `lang` (`lang`),
  ADD KEY `defCoin` (`defCoin`),
  ADD KEY `defShow` (`defShow`),
  ADD KEY `image` (`image`),
  ADD KEY `imageWidth` (`imageWidth`),
  ADD KEY `priceShow` (`priceShow`),
  ADD KEY `paymentCnt` (`paymentCnt`),
  ADD KEY `paymentTime` (`paymentTime`),
  ADD KEY `updatetime` (`updatetime`),
  ADD KEY `createtime` (`createtime`);

--
-- Indexes for table `crypto_membership`
--
ALTER TABLE `crypto_membership`
  ADD PRIMARY KEY (`membID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `paymentID` (`paymentID`),
  ADD KEY `startDate` (`startDate`),
  ADD KEY `endDate` (`endDate`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `recordCreated` (`recordCreated`);

--
-- Indexes for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `key3` (`boxID`,`orderID`,`userID`,`txID`,`amount`,`addr`),
  ADD KEY `boxID` (`boxID`),
  ADD KEY `boxType` (`boxType`),
  ADD KEY `userID` (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `amount` (`amount`),
  ADD KEY `amountUSD` (`amountUSD`),
  ADD KEY `coinLabel` (`coinLabel`),
  ADD KEY `unrecognised` (`unrecognised`),
  ADD KEY `addr` (`addr`),
  ADD KEY `txID` (`txID`),
  ADD KEY `txDate` (`txDate`),
  ADD KEY `txConfirmed` (`txConfirmed`),
  ADD KEY `txCheckDate` (`txCheckDate`),
  ADD KEY `processed` (`processed`),
  ADD KEY `processedDate` (`processedDate`),
  ADD KEY `recordCreated` (`recordCreated`),
  ADD KEY `key1` (`boxID`,`orderID`),
  ADD KEY `key2` (`boxID`,`orderID`,`userID`);

--
-- Indexes for table `crypto_products`
--
ALTER TABLE `crypto_products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `productTitle` (`productTitle`),
  ADD KEY `active` (`active`),
  ADD KEY `priceUSD` (`priceUSD`),
  ADD KEY `priceCoin` (`priceCoin`),
  ADD KEY `priceLabel` (`priceLabel`),
  ADD KEY `purchases` (`purchases`),
  ADD KEY `expiryPeriod` (`expiryPeriod`),
  ADD KEY `lang` (`lang`),
  ADD KEY `defCoin` (`defCoin`),
  ADD KEY `defShow` (`defShow`),
  ADD KEY `emailUser` (`emailUser`),
  ADD KEY `emailAdmin` (`emailAdmin`),
  ADD KEY `paymentCnt` (`paymentCnt`),
  ADD KEY `paymentTime` (`paymentTime`),
  ADD KEY `updatetime` (`updatetime`),
  ADD KEY `createtime` (`createtime`);

--
-- Indexes for table `monetiser`
--
ALTER TABLE `monetiser`
  ADD PRIMARY KEY (`monetiser_id`);

--
-- Indexes for table `security_key`
--
ALTER TABLE `security_key`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `affiliated`
--
ALTER TABLE `affiliated`
  MODIFY `affiliated_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `coin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `crypto_files`
--
ALTER TABLE `crypto_files`
  MODIFY `fileID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `crypto_membership`
--
ALTER TABLE `crypto_membership`
  MODIFY `membID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  MODIFY `paymentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `crypto_products`
--
ALTER TABLE `crypto_products`
  MODIFY `productID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `monetiser`
--
ALTER TABLE `monetiser`
  MODIFY `monetiser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `security_key`
--
ALTER TABLE `security_key`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
