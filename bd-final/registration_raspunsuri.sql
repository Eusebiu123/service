-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: registration
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `raspunsuri`
--

DROP TABLE IF EXISTS `raspunsuri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `raspunsuri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `marca` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `piesa` varchar(200) DEFAULT NULL,
  `detalii` varchar(200) DEFAULT NULL,
  `raspuns` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `ora` double DEFAULT NULL,
  `timeslot` varchar(200) DEFAULT NULL,
  `pret` varchar(200) DEFAULT '348',
  `acceptat` int DEFAULT NULL,
  `vazut` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raspunsuri`
--

LOCK TABLES `raspunsuri` WRITE;
/*!40000 ALTER TABLE `raspunsuri` DISABLE KEYS */;
INSERT INTO `raspunsuri` VALUES (74,'alex@yahoo.com','ferrari','berlineta','parbriz','fumuriu','va asteptam','2022-11-22',9,'09:00AM-09:20AM','576',1,1),(75,'alex@yahoo.com','bmw','x3','oglinda','alba cu buline','reveniti in cateva saptamani','2022-11-22',13.4,'13:40PM-14:00PM','348',0,1);
/*!40000 ALTER TABLE `raspunsuri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-17  8:52:34
