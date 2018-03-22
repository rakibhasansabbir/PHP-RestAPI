-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: studentDB
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.17.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fees_collections`
--

DROP TABLE IF EXISTS `fees_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees_collections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `feesAmount` int(11) NOT NULL,
  `paidAmount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees_collections`
--

LOCK TABLES `fees_collections` WRITE;
/*!40000 ALTER TABLE `fees_collections` DISABLE KEYS */;
INSERT INTO `fees_collections` VALUES (1,1,1000,500,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(2,2,1000,500,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(3,3,1000,556,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(4,4,1000,721,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(5,5,1000,678,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(6,6,1000,620,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(7,7,1000,904,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(8,8,1000,288,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(9,9,1000,347,'2018-03-20 13:39:42','2018-03-20 13:39:42'),(10,10,1000,64,'2018-03-20 13:39:42','2018-03-20 13:39:42');
/*!40000 ALTER TABLE `fees_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Emelie Nader','146 Cummerata Lane Suite 175\nWest Marion, HI 86821','2018-03-20 13:39:42','2018-03-20 13:39:42'),(2,'Janick Kihn','863 Tiffany Walk\nBeattystad, OH 47144','2018-03-20 13:39:42','2018-03-20 13:39:42'),(3,'Lillian Ankunding','7853 Stanton Meadow Apt. 042\nBruenfurt, WA 35159','2018-03-20 13:39:42','2018-03-20 13:39:42'),(4,'Dr. Lamar Windler','6847 Jakob Island Suite 314\nNew Cydney, OH 44004-3945','2018-03-20 13:39:42','2018-03-20 13:39:42'),(5,'Athena Breitenberg','25983 Ziemann Brooks Suite 122\nNorth Arturo, FL 74361','2018-03-20 13:39:42','2018-03-20 13:39:42'),(6,'Rene Reichert','4879 Christopher Cape\nKoelpinchester, IN 03410-5288','2018-03-20 13:39:42','2018-03-20 13:39:42'),(7,'Kaley Wyman','6566 Schulist Via Suite 366\nAnabelleberg, FL 50559-9044','2018-03-20 13:39:42','2018-03-20 13:39:42'),(8,'Dr. Clemmie Prohaska','693 Sammy Oval Apt. 800\nLake Baby, MO 33480','2018-03-20 13:39:42','2018-03-20 13:39:42'),(9,'Mrs. Shanny Lueilwitz','85344 Schulist Inlet\nLake Judgefort, ME 95969','2018-03-20 13:39:42','2018-03-20 13:39:42'),(10,'Alvis Kihn','63521 Heidenreich Loaf\nHumbertomouth, SC 89372-7972','2018-03-20 13:39:42','2018-03-20 13:39:42');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-22 13:28:02
