-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.25-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema libra
--

CREATE DATABASE IF NOT EXISTS libra;
USE libra;

--
-- Definition of table `tblaccounts`
--

DROP TABLE IF EXISTS `tblaccounts`;
CREATE TABLE `tblaccounts` (
  `accountID` int(10) NOT NULL AUTO_INCREMENT,
  `accountFullName` varchar(50) NOT NULL,
  `accountUserName` varchar(50) NOT NULL,
  `acountPassWord` varchar(50) NOT NULL,
  `accountProfession` varchar(50) NOT NULL,
  `accountEmail` varchar(50) NOT NULL,
  `accountContactInfo` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccounts`
--

/*!40000 ALTER TABLE `tblaccounts` DISABLE KEYS */;
INSERT INTO `tblaccounts` (`accountID`,`accountFullName`,`accountUserName`,`acountPassWord`,`accountProfession`,`accountEmail`,`accountContactInfo`,`dateCreated`) VALUES 
 (1,'jesse basco','oddjobs','pa55','IT Enthusiast','jesseemmanuel@gmail.com','09978366415','2022-10-26 19:04:39');
/*!40000 ALTER TABLE `tblaccounts` ENABLE KEYS */;


--
-- Definition of table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
CREATE TABLE `tblbooks` (
  `bookID` int(10) NOT NULL AUTO_INCREMENT,
  `accountID` int(10) NOT NULL,
  `bookTitle` varchar(50) NOT NULL,
  `bookDesc` varchar(255) NOT NULL,
  `bookCategory` varchar(50) NOT NULL,
  `bookCover` varchar(50) NOT NULL,
  `bookFile` varchar(50) NOT NULL,
  `bookType` int(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`bookID`),
  KEY `userbook` (`accountID`),
  CONSTRAINT `userbook` FOREIGN KEY (`accountID`) REFERENCES `tblaccounts` (`accountID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooks`
--

/*!40000 ALTER TABLE `tblbooks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblbooks` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
