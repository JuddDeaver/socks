-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: socks
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'red'),(2,'orange'),(3,'yellow'),(4,'green'),(5,'blue'),(6,'navy'),(7,'purple'),(8,'black'),(9,'white'),(10,'grey'),(11,'brown'),(12,'pink'),(13,'multi');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patterns`
--

DROP TABLE IF EXISTS `patterns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patterns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patterns`
--

LOCK TABLES `patterns` WRITE;
/*!40000 ALTER TABLE `patterns` DISABLE KEYS */;
INSERT INTO `patterns` VALUES (1,'argyle'),(2,'characters'),(3,'checkered'),(4,'crosshatch'),(5,'dots'),(6,'fairisle'),(7,'flecks'),(8,'floral'),(9,'geometric'),(10,'paisley'),(11,'solid'),(12,'stripes'),(13,'plant'),(14,'animal'),(15,'diamond'),(16,'camouflage'),(17,NULL);
/*!40000 ALTER TABLE `patterns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `select_color`
--

DROP TABLE IF EXISTS `select_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `select_color` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `select_color`
--

LOCK TABLES `select_color` WRITE;
/*!40000 ALTER TABLE `select_color` DISABLE KEYS */;
INSERT INTO `select_color` VALUES (1,1),(1,6),(1,9),(2,2),(2,10),(3,5),(3,6),(3,10),(3,11),(4,13),(5,6),(5,9),(6,13),(7,1),(7,3),(7,4),(7,8),(8,8),(8,9),(8,11),(9,1),(9,5),(9,6),(9,9),(10,13),(11,13),(12,13),(13,13),(14,3),(14,8),(15,13),(16,13),(17,3),(17,6),(18,1),(18,6),(18,9),(19,13),(20,1),(20,5),(20,6),(20,9),(21,13),(22,13);
/*!40000 ALTER TABLE `select_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `select_pattern`
--

DROP TABLE IF EXISTS `select_pattern`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `select_pattern` (
  `product_id` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  PRIMARY KEY (`pattern_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `select_pattern`
--

LOCK TABLES `select_pattern` WRITE;
/*!40000 ALTER TABLE `select_pattern` DISABLE KEYS */;
INSERT INTO `select_pattern` VALUES (9,1),(6,2),(11,2),(12,2),(13,2),(14,5),(19,5),(4,9),(11,9),(18,9),(5,10),(2,11),(3,11),(22,11),(1,12),(7,12),(16,12),(19,12),(21,12),(22,12),(7,13),(7,14),(8,14),(17,14),(10,15),(12,15),(15,16),(20,17);
/*!40000 ALTER TABLE `select_pattern` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-23 13:41:17
