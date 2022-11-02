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
-- Table structure for table `piese`
--

DROP TABLE IF EXISTS `piese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `piese` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `piesa` varchar(200) DEFAULT NULL,
  `cantitate` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piese`
--

LOCK TABLES `piese` WRITE;
/*!40000 ALTER TABLE `piese` DISABLE KEYS */;
INSERT INTO `piese` VALUES (3,'bmw','panamera','oglinda',100),(4,'ferrari','berlineta','parbriz',100),(5,'lamborghini','x7','geam',100),(6,'bmw','x4','frana',100),(7,'mercedes','gle coupe','turbina',100),(8,'bmw','m4','roata',100),(9,'audi','a4','schimbator',100),(10,'audi','a3','frana',100),(11,'wolfsvagen','golf 4','baia',100),(12,'opel','astra','scaun',100),(13,'porche','cayenne','alternator',33),(14,'mercedes','c63','toba',100),(15,'lamborghini','urus','motor',23),(16,'porche','panamera','alternator',135),(17,'porche','panamera','motor',21);
/*!40000 ALTER TABLE `piese` ENABLE KEYS */;
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
