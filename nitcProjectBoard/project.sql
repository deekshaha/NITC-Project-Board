-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 01:23 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Project` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `Name`, `Project`) VALUES
(17, 'Traffic Analysis Software based on Social Network Data | Deeksha Agrawal', 'Real-time updated traffic reports contain; date, time, location and cause of traffic jams. Project aims to develop a prototype application which provides real-time traffic updates and information on traffic management trends using streaming data from social\r\nmedia sites. Besides traffic updates, the application provides info on traffic trends, maps based on high, medium or low-risk traffic levels and a Safest Route Finder function.\r\n\r\nTeam Members Required: 5\r\n\r\nContact at: deeksha_m190390ca@nitc.ac.in'),
(18, 'Sentiment Analysis of COVID-19 Tweets ? Visualization Dashboard | By Parnika Mathew', 'The sentiment analysis of Indians after the extension of lockdown announcements to be analyzed with the relevant #tags on twitter and build a predictive analytics model to understand the behavior of people if the lockdown is further extended.\r\nAlso develop a dashboard with visualization of people reaction to the govt announcements on lockdown extension.\r\n\r\nTeam Members Required: 3\r\n\r\nContact at: parnika@nitc.ac.in'),
(19, 'AI Recruiter ? Shortlist a Suitable candidate for specific Job Role | By Athira Sivanandan', 'Develop a Software Bot enabled with Artificial Intelligence, which screens the candidate application, shortlists for interview and identify his skills & personality traits through conversation.\r\n\r\nTeam Members Selected:\r\n1. Deeksha Agrawal, MCA\r\n2. Dhanush Karan, B.Tech (ECE)\r\n\r\nTeam Members required: 1\r\n\r\nContact at: athira@nitc.ac.in'),
(20, 'Predicting the energy output of wind turbine based on weather condition | By Amala Ann', 'To Develop a time series model to Predict the power output of wind farm based on the weather condition in the site \r\n(1Hr prediction to 72Hrs. prediction) and To Build an application to recommend the Power Grid to suggest the best time to utilize the energy from wind farm.\r\n\r\nTeam Members Required: 4\r\n\r\nContact at: amala@nitc.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Name`, `Email`, `Password`) VALUES
(3, 'Naziya', 'naziya_m190393ca@nitc.ac.in', 'deeksha'),
(21, 'Deeksha', 'deeksha_m190390ca@nitc.ac.in', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
