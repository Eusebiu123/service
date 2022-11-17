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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piese`
--

LOCK TABLES `piese` WRITE;
/*!40000 ALTER TABLE `piese` DISABLE KEYS */;
INSERT INTO `piese` VALUES (4,'ferrari','berlineta','parbriz',34),(5,'lamborghini','aventador','geam',67),(6,'bmw','x4','frana',96),(7,'mercedes','gle coupe','turbina',24),(8,'bmw','m4','roata',20),(9,'audi','a4','schimbator',31),(10,'audi','a3','frana',41),(11,'wolfsvagen','golf 4','baia',35),(12,'opel','astra','scaun',23),(15,'lamborghini','urus','motor',42),(16,'porsche','panamera','alternator',23),(17,'porsche','panamera','motor',47),(18,'porsche','panamera','oglinda',46),(19,'bmw','x3','motor',39),(22,'bmw','x3','volan',9),(23,'mercedes','c63','toba',100);
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

-- Dump completed on 2022-11-17  8:52:34
