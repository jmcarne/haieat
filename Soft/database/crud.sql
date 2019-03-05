-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 01:09 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `email_address`, `contact`, `gender`, `country`, `datetime`) VALUES
(20, 'Isabella', 'isabella@yahoo.com', '01711000005', 'Female', 'Costa Rica', '2017-08-27 20:11:50'),
(19, 'Sophia', 'sophia@gmail.com', '01711000004', 'Female', 'Belgium', '2017-08-27 20:10:55'),
(18, 'William', 'william@gmail.com', '01711000003', 'Male', 'Brazil', '2017-08-27 20:10:08'),
(16, 'Nahid', 'nahid@yahoo.com', '01711000002', 'Male', 'Bangladesh', '2017-08-27 19:57:35'),
(17, 'Arif', 'arif@gmail.com', '01711000001', 'Male', 'Bangladesh', '2017-08-27 20:04:13'),
(15, 'Md. Rubel', 'rubel@gmail.com', '01712000000', 'Male', 'Bangladesh', '2017-08-27 19:56:20'),
(21, 'Michael', 'michael@gmail.com', '01711000006', 'Male', 'Ecuador', '2017-08-27 20:13:02'),
(22, 'Suman', 'suman@gmail.com', '01711000007', 'Male', 'India', '2017-08-27 20:13:55'),
(23, 'James', 'james@gmail.com', '01711000009', 'Male', 'United Kingdom', '2017-08-27 20:16:05'),
(24, 'Asik', 'asik@gmail.com', '01712000010', 'Male', 'Bangladesh', '2017-08-27 20:19:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `email_client` varchar(100) NOT NULL,
  `project_manager` varchar(30) NOT NULL,
  `database` varchar(15) NOT NULL,
  `programation` varchar(50) NOT NULL,
  `erp` varchar(50) NOT NULL,
  `devices` varchar(50) NOT NULL,
-- `number_lines` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `projects` (`project_id`, `project_name`, `email_client`, `project_manager`, `database`, `programation`, `erp`, `devices` ) VALUES
(2, 'Coplacsil', 'info@coplacsil.com', 'Toni Serra', 'SQL Server 2012', 'VB .NET', 'A especificar','idBlocks'),
(3, 'Exide', 'info@exide.com', 'Toni Serra', 'SQL Server 2012', 'VB .NET', 'A especificar','idBlocks'),
(4, 'Bellsola', 'info@bellsola.com', 'Toni Serra', 'SQL Server 2012', 'VB .NET', 'A especificar','idBlocks'),
(5, 'Biomet', 'info@biomety.com', 'Toni Serra', 'SQL Server 2012', 'VB .NET', 'A especificar','idBlocks'),
(6, 'Travipos', 'info@travipos.com', 'Toni Serra', 'SQL Server 2012', 'VB .NET', 'A especificar','idBlocks'),
(7, 'Unilever USA', 'info@unilver.us', 'Jaume Almirall', 'SQL Server 2012', 'Delphi', 'Sysbase','idBlocks'),
(8, 'Unilever UK', 'info@unilver.uk', 'Jaume Almirall', 'SQL Server 2012', 'Delphi', 'Sysbase','idBlocks'),
(9, 'Unilever HU', 'info@unilever.hu', 'Jaume Almirall', 'SQL Server 2012', 'Delphi', 'Sysbase','idBlocks'),




--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
ADD FOREIGN KEY (`project_name`) REFERENCES students(`student_name`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projects_id`);

