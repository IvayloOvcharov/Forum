-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for forum
CREATE DATABASE IF NOT EXISTS `forum` /*!40100 DEFAULT CHARACTER SET utf32 COLLATE utf32_unicode_ci */;
USE `forum`;

-- Dumping structure for table forum.apply
CREATE TABLE IF NOT EXISTS `apply` (
  `Apply_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Apply_User` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Apply_Text` char(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Apply_Theme` int(11) DEFAULT NULL,
  `Apply_Date` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Apply_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table forum.register
CREATE TABLE IF NOT EXISTS `register` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `User_Password` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `User_Email` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table forum.theme
CREATE TABLE IF NOT EXISTS `theme` (
  `Theme_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Theme_Name` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Theme_Comment` char(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Theme_Date` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Theme_User` char(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Theme_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
