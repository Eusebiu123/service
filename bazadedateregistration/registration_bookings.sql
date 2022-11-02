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
  `vazut` int DEFAULT NULL,
  `data` date DEFAULT NULL,
  `sort` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (51,'ana@123','2022-11-02','13:40PM-14:00PM',3,'mercedes','c63','toba','lunga',NULL,NULL,NULL,'2022-11-02',13.4),(52,'casa@123','2022-11-02','14:00PM-14:20PM',2,'ferrari','berlineta','parbriz','fumuriu',NULL,NULL,NULL,'2022-11-02',14),(53,'pisici@123','2022-11-02','14:20PM-14:40PM',2,'lamborghini','x7','geam','fumuriu',NULL,NULL,NULL,'2022-11-02',14.2),(54,'morcov@123','2022-11-02','14:40PM-15:00PM',2,'bmw','x4','frana','cu pisici',NULL,NULL,NULL,'2022-11-02',14.4),(55,'pisi@1234','2022-11-11','15:00PM-15:20PM',1,'mercedes','gle coupe','turbina','cu sclipici',NULL,NULL,NULL,'2022-11-11',15),(56,'aaa@aa','2022-11-11','15:20PM-15:40PM',1,'bmw','m4','roata','mare si neagra',NULL,NULL,NULL,'2022-11-11',15.2),(57,'mica@123','2022-11-11','15:40PM-16:00PM',3,'audi','a3','frana','placute frana',NULL,NULL,NULL,'2022-11-11',15.4),(58,'sirena@12','2022-11-11','16:00PM-16:20PM',3,'audi','a4','schimbator','automat',NULL,NULL,NULL,'2022-11-11',16),(59,'gigi@123','2022-11-11','16:20PM-16:40PM',3,'wolfsvagen','golf 4','baia','baie buna',NULL,NULL,NULL,'2022-11-11',16.2),(60,'becali@123','2022-11-11','16:40PM-17:00PM',2,'opel','astra','scaun','scaun roz',NULL,NULL,NULL,'2022-11-11',16.4),(61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12.4),(63,'ana@123445',NULL,NULL,NULL,'bmw','e33','motor','vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor','1',NULL,NULL,NULL,NULL),(67,'sss2a@s','2022-11-02','13:40PM-14:00PM',1,'bmw','panamera','oglinda','sa fie frumoasa',NULL,NULL,NULL,'2022-11-02',13.4),(70,'aaa@aa','2022-10-31','09:40AM-10:00AM',2,'porche','panamera','motor','vreau cel mai bun motor','da',NULL,NULL,'2022-10-31',9.4),(71,'sebi1234@555','2022-10-31','13:20PM-13:40PM',2,'porsche','cayenne','oglinda','sa fie alba cu buline','da',NULL,NULL,'2022-10-31',13.2),(72,'ana@1234','2022-10-31','11:20AM-11:40AM',1,'porsche','panamera','motor','vreau cel mai bun motor',NULL,NULL,NULL,'2022-10-31',11.2),(73,'ana@1234','2022-10-31','11:40AM-12:00PM',1,'porsche','cayenne','oglinda','sa fie alba cu buline',NULL,NULL,NULL,'2022-10-31',11.4),(76,'sab@123','2022-10-31','16:20PM-16:40PM',1,'porsche','rs5','alternator','vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor vreau cel mai bun motor',NULL,NULL,NULL,'2022-10-31',16.2);
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

-- Dump completed on 2022-11-02  9:43:58
