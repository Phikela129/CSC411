#NAME?
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 05:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

"SET SQL_MODE = ""NO_AUTO_VALUE_ON_ZERO"";"
"START TRANSACTION;"
"SET time_zone = ""+00:00"";"


"/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;"
"/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;"
"/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;"
"/*!40101 SET NAMES utf8mb4 */;"

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(128) NOT NULL,
  `DATE` date NOT NULL,
  `LOCATION` text NOT NULL,
  `APPLICATION_LINK` text NOT NULL,
  `DEPARTMENT` text NOT NULL,
  `PROGRAM` text NOT NULL
") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;"

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`ID`, `COMPANY_NAME`, `DATE`, `LOCATION`, `APPLICATION_LINK`, `DEPARTMENT`, `PROGRAM`) VALUES
(1, 'University of Eswatini', '2023-06-19', 'Matsapha', 'www.uneswa.ac.sz/apply', 'Science And Engineering', 'Computer Science')




























--
#NAME?
--

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
"  ADD PRIMARY KEY (`ID`);"

--
#NAME?
--

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
"  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;"
"COMMIT;"

"/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;"
"/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;"
"/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;"
