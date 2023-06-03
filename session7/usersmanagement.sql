-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 01:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `actionDescription` varchar(300) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `name`, `actionDescription`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, '*', 'all action of the system ', 'system', '2023-06-03 11:17:13', '2023-06-03 11:17:28'),
(2, 'login', '', 'system', '2023-06-03 11:07:10', '2023-06-03 11:07:10'),
(3, 'restet password', '', 'system', '2023-06-03 11:07:28', '2023-06-03 11:07:28'),
(4, 'get otp', '', 'system', '2023-06-03 11:10:15', '2023-06-03 11:10:15'),
(5, 'get capcha', '', 'system', '2023-06-03 11:10:29', '2023-06-03 11:10:29'),
(6, 'get mail verify', '', 'system', '2023-06-03 11:11:09', '2023-06-03 11:11:09'),
(7, 'register', 'all user must register system ', 'system', '2023-06-03 11:06:53', '2023-06-03 11:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `groupDescription` varchar(300) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `groupDescription`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 'owner', '', 'system', '2023-06-03 11:15:36', '2023-06-03 11:15:36'),
(2, 'admin', '', 'system', '2023-06-03 11:15:36', '2023-06-03 11:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `group_actions`
--

CREATE TABLE `group_actions` (
  `groupID` bigint(20) NOT NULL,
  `actionID` bigint(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `group_actions`
--

INSERT INTO `group_actions` (`groupID`, `actionID`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 1, 'system', '2023-06-03 11:18:18', '2023-06-03 11:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `group_roles`
--

CREATE TABLE `group_roles` (
  `groupID` bigint(20) NOT NULL,
  `roleID` bigint(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `group_roles`
--

INSERT INTO `group_roles` (`groupID`, `roleID`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 1, 'system', '2023-06-03 11:18:51', '2023-06-03 11:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `otp_status`
--

CREATE TABLE `otp_status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `otp_status`
--

INSERT INTO `otp_status` (`id`, `name`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 'first login', 'system', '2023-06-03 11:04:07', '2023-06-03 11:04:07'),
(2, 'all time', 'system', '2023-06-03 11:04:07', '2023-06-03 11:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `roleDescription` varchar(300) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `roleDescription`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 'owner', '', 'system', '2023-06-03 11:12:45', '2023-06-03 11:13:14'),
(2, 'admin', '', 'system', '2023-06-03 11:12:45', '2023-06-03 11:13:39'),
(3, 'user', '', 'system', '2023-06-03 11:12:26', '2023-06-03 11:13:36'),
(4, 'guest', '', 'system', '2023-06-03 11:12:26', '2023-06-03 11:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_actions`
--

CREATE TABLE `role_actions` (
  `roleID` bigint(20) NOT NULL,
  `actionID` bigint(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `role_actions`
--

INSERT INTO `role_actions` (`roleID`, `actionID`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 1, 'system', '2023-06-03 11:19:25', '2023-06-03 11:19:25'),
(4, 2, 'system', '2023-06-03 11:20:13', '2023-06-03 11:20:13'),
(4, 3, 'system', '2023-06-03 11:20:13', '2023-06-03 11:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL COMMENT 'user name of the user and customer',
  `token` varchar(300) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emailVerify` tinyint(1) NOT NULL DEFAULT 0,
  `mobile` varchar(15) NOT NULL,
  `mobileVerify` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(250) NOT NULL COMMENT 'password of the user and customer',
  `passError` int(11) DEFAULT NULL,
  `otpCode` varchar(10) DEFAULT NULL,
  `otpStatusID` int(11) NOT NULL,
  `capchaCode` varchar(10) DEFAULT NULL,
  `lastLogin` timestamp NULL DEFAULT NULL,
  `statusID` int(11) DEFAULT 1,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creariationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='this table for the save user name and pass';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `token`, `name`, `lastName`, `email`, `emailVerify`, `mobile`, `mobileVerify`, `password`, `passError`, `otpCode`, `otpStatusID`, `capchaCode`, `lastLogin`, `statusID`, `createdBy`, `creariationDate`, `modifyDate`) VALUES
('admin', '', 'peyman', 'valikhanli', 'admin@nebka-dev.com', 0, '09365820723', 0, '1234567890', NULL, '', 0, '', NULL, NULL, 'system', '2023-06-03 10:09:11', '2023-06-03 10:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `username` varchar(20) NOT NULL,
  `groupID` bigint(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `username` varchar(20) NOT NULL,
  `nationalCode` varchar(10) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `fatherName` varchar(20) DEFAULT NULL,
  `tel` varchar(15) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `jobPosition` varchar(20) NOT NULL,
  `jobAddress` varchar(300) NOT NULL,
  `jobTel` varchar(15) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `username` varchar(20) NOT NULL,
  `roleID` bigint(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`username`, `roleID`, `createdBy`, `creationDate`, `modifyDate`) VALUES
('admin', 1, 'system', '2023-06-03 11:20:57', '2023-06-03 11:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL DEFAULT 'system',
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifyDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `name`, `createdBy`, `creationDate`, `modifyDate`) VALUES
(1, 'active', 'system', '2023-06-03 11:01:11', '2023-06-03 11:01:11'),
(2, 'blocked', 'system', '2023-06-03 11:01:11', '2023-06-03 11:01:11'),
(3, 'not verify', 'system', '2023-06-03 11:01:48', '2023-06-03 11:01:48'),
(4, 'archive', 'system', '2023-06-03 11:01:48', '2023-06-03 11:01:48'),
(5, 'delete', 'system', '2023-06-03 11:01:58', '2023-06-03 11:01:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `group_actions`
--
ALTER TABLE `group_actions`
  ADD PRIMARY KEY (`groupID`,`actionID`);

--
-- Indexes for table `group_roles`
--
ALTER TABLE `group_roles`
  ADD PRIMARY KEY (`groupID`,`roleID`);

--
-- Indexes for table `otp_status`
--
ALTER TABLE `otp_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `role_actions`
--
ALTER TABLE `role_actions`
  ADD PRIMARY KEY (`roleID`,`actionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel` (`mobile`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`username`,`groupID`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`username`,`roleID`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otp_status`
--
ALTER TABLE `otp_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
