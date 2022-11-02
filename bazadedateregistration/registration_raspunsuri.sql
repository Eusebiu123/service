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
  `vazut` int DEFAULT NULL,
  `acceptat` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raspunsuri`
--

LOCK TABLES `raspunsuri` WRITE;
/*!40000 ALTER TABLE `raspunsuri` DISABLE KEYS */;
INSERT INTO `raspunsuri` VALUES (1,'popescusebi1234@yahoo.com','bmw','x7','motor','vreau cel mai bun motor','bravo mai',NULL,NULL,NULL,NULL,1),(2,'popescusebi1234@yahoo.com','bmw','x7','motor','vreau cel mai bun motor','nu prea pot dar poti sa vii maine dupa ce imi calculez venitul pe acest an',NULL,NULL,NULL,NULL,1),(3,'popescusebi1234@yahoo.com','bmw','x7','motor','vreau cel mai bun motor','nu prea pot dar poti sa vii maine dupa ce imi calculez venitul pe acest an','2022-10-31',9.2,'09:20AM-09:40AM',0,1),(4,'popescusebi1234@yahoo.com','bmw','x7','motor','vreau cel mai bun motor','nu acu ','2022-10-31',10,'10:00AM-10:20AM',1,0),(5,'popescusebi12345555@yahoo.com','bmw','x7','motor','vreau cel mai bun motor','nu prea pot dar poti sa vii maine dupa ce imi calculez venitul pe acest an','2022-10-31',10.2,'10:20AM-10:40AM',NULL,0),(6,'popescusebi1234@yahoo.com','bmw','x7','motor','vreau cel mai bun motor','nu acum','2022-10-31',10.4,'10:40AM-11:00AM',1,0),(7,'sss2a@s','bmw','x7','motor','vreau cel mai bun motor','inca nu','2022-10-31',13.2,'13:20PM-13:40PM',1,1),(8,'morcov@123','bmw','x7','oglinda','transversala','va asteptam cu drag','2022-11-02',13,'13:00PM-13:20PM',NULL,1),(9,'pisi@1234','audi','rs5','motor','puternic','imi pare rau','2022-11-02',13.2,'13:20PM-13:40PM',NULL,0),(10,'sss2a@s','porche','cayenne','oglinda','sa fie alba cu buline','va asteptam','2022-10-31',14.4,'14:40PM-15:00PM',NULL,1),(11,'sss2a@s','porche','panamera','motor','vreau cel mai bun motor','nu putem','2022-10-31',11.2,'11:20AM-11:40AM',NULL,0),(12,'sss2a@s','porche','panamera','luneta','neagra','bravo mai','2022-10-31',16,'16:00PM-16:20PM',1,1),(13,'sab@123','porsche','panamera','motor','vreau cel mai bun motor','nu putem','2022-10-31',16,'16:00PM-16:20PM',1,0),(14,'sab@123','porsche','panamera','oglinda','sa fie alba cu buline','ok..te astept','2022-10-31',13.4,'13:40PM-14:00PM',NULL,1);
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

-- Dump completed on 2022-11-02  9:43:58
