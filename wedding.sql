-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wedding
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.04.2

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
-- Table structure for table `wishes`
--

DROP TABLE IF EXISTS `wishes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishes` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishes`
--

LOCK TABLES `wishes` WRITE;
/*!40000 ALTER TABLE `wishes` DISABLE KEYS */;
INSERT INTO `wishes` VALUES (1,'ajb98.itbhu@gmail.com','Ankur Jain','Hi'),(2,'ankur.jain@citrix.com','AnkurJain','HIMessage:'),(3,'E-mail:','Your Name:','Message:'),(4,'E-mail:','Your Name:','Message:');
/*!40000 ALTER TABLE `wishes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishes_moniter`
--

DROP TABLE IF EXISTS `wishes_moniter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishes_moniter` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `display` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishes_moniter`
--

LOCK TABLES `wishes_moniter` WRITE;
/*!40000 ALTER TABLE `wishes_moniter` DISABLE KEYS */;
INSERT INTO `wishes_moniter` VALUES (1,'ajb98.itbhu@gmail.com','Ankur','HI',1),(2,'nisha@badaaadmi.com','Nishant Pathak','HI hahahaah',1),(3,'ankur.jain@citrix.com','AnkurJain','hihihi',1),(4,'hi','hi','sdkfjh',1),(6,'abc@gmail.com','Amit','arey waah moderate ho raha hai? mast!!',1),(8,'ajb98.itbhu@gmail.com','Ankur Jain','hahaha',1),(12,'sfgfdgd','asdgdfg','sdfgdsgfd',0),(14,'','','',0),(15,'','','',0),(16,'','','',0),(17,'','','',0),(18,'d@gmail.com','d','fgdfdsfwdkfjasdjghlaksdjhfl;kasjdhflkjsdhlfjhasldfjnsalfkdjhasldkfjhasdljflsakdjhfdsakjhflsakjdhflkasjhdflkjashflkjsahdflkjhasdflkjshadlfkjhsdaljkghsadljfsaldjkghlsadjhglsadjhglasjhdglasjdhgfasd',1);
/*!40000 ALTER TABLE `wishes_moniter` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-18 19:09:13
