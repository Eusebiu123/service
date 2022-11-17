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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `timeslot` varchar(200) DEFAULT NULL,
  `resource_id` int DEFAULT NULL,
  `marca` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `piesa` varchar(200) DEFAULT NULL,
  `detalii` varchar(200) DEFAULT NULL,
  `raspuns` varchar(200) DEFAULT NULL,
  `acceptat` int DEFAULT NULL,
  `vazut` int DEFAULT '0',
  `data` date DEFAULT NULL,
  `sort` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (152,'casian@yahoo.com','2022-11-17','09:00AM-09:20AM',1,'bmw','m4','roata','diametru:125',NULL,NULL,0,'2022-11-17',9),(153,'casian@yahoo.com','2022-11-17','11:20AM-11:40AM',2,'audi','a4','motor','cel mai nou',NULL,NULL,0,'2022-11-17',11.2),(154,'casian@yahoo.com','2022-11-17','14:00PM-14:20PM',2,'audi','rs5','volan','negru',NULL,NULL,0,'2022-11-17',14),(155,'morcov@yahoo.com','2022-11-17','14:00PM-14:20PM',1,'ferrari','berlineta','parbriz','fumuriu',NULL,NULL,0,'2022-11-17',14),(156,'morcov@yahoo.com','2022-11-18','13:40PM-14:00PM',1,'lamborghini','urus','motor','an 2022',NULL,NULL,0,'2022-11-18',13.4),(157,'casian@yahoo.com','2022-11-17','16:00PM-16:20PM',3,'lamborghini','aventador','geam','fumuriu',NULL,NULL,0,'2022-11-17',16),(158,'sab@yahoo.com','2022-11-17','15:20PM-15:40PM',1,'porsche','panamera','motor','an 2021',NULL,NULL,0,'2022-11-17',15.2),(159,'alex@yahoo.com','2022-11-22','09:00AM-09:20AM',1,'ferrari','berlineta','parbriz','fumuriu','va asteptam',NULL,1,'2022-11-22',9),(161,'alex@yahoo.com','2022-11-22','13:40PM-14:00PM',1,'audi','a4','frana','buna',NULL,NULL,0,'2022-11-22',13.4);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
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
