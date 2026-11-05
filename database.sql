-- MySQL dump 10.13  Distrib 26.7.0, for macos26.6 (arm64)
--
-- Host: localhost    Database: demo_recept
-- ------------------------------------------------------
-- Server version	26.7.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ 'b45099b6-c0d8-11f1-a10b-224b14814aef:1-143';

--
-- Current Database: `demo_recept`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `demo_recept` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `demo_recept`;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `naam` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Ontbijt'),(2,'Lunch'),(3,'Diner'),(4,'Dessert');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demo_recept`
--

DROP TABLE IF EXISTS `demo_recept`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `demo_recept` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gerecht` varchar(30) NOT NULL,
  `beschrijving` text,
  `instructie` text,
  `ingredienten` text,
  `foto` blob,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`),
  CONSTRAINT `demo_recept_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demo_recept`
--

LOCK TABLES `demo_recept` WRITE;
/*!40000 ALTER TABLE `demo_recept` DISABLE KEYS */;
INSERT INTO `demo_recept` VALUES (54,'Toast','TOAST','HAHA EASY','BreaD',_binary 'toast.webp',1),(55,'Sushi','Yummy yummy yum','OKE','Fih and rih',_binary 'Sushi.webp',3),(56,'Olliebollen','Bol','ROLL ROLL ROLL','Floor heh',_binary 'ollie.webp',4),(57,'Spaghetti','Lekker eten','Test','Pasta',_binary 'spa.webp',2),(58,'Baked Chicken','Lekker kip','Baken','Kip',_binary 'chic.webp',3),(59,'Fasulye','Lekker turks gerecht','IDK','IDK',_binary 'turk.webp',3),(60,'Ramen','Gerecht van Japan!','IDK','IDK',_binary 'ramen.webp',3),(61,'Ice Cream','ICE','ICE','ICE',_binary 'ice.webp',4),(62,'Bacon','Bacon','Bacon','Bacon',_binary 'bacon.webp',1),(63,'Salmon','FIH','FIH','FIH',_binary 'salm.webp',2),(64,'Pancakes','PAN','Pan','PAN',_binary 'pan.webp',1),(65,'Cereal','YE','YE','YE',_binary 'ce.webp',1),(66,'Pizza','He','He','He',_binary 'pizza.webp',2),(67,'Curry','Ha','Ha','Ha',_binary 'curry.webp',2),(68,'Yogurt','Yo','Yo','Yo',_binary 'yo.webp',4),(72,'Cupcake','Een lekker dessert!','IDK','Flour',_binary 'cup.webp',4);
/*!40000 ALTER TABLE `demo_recept` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gebruikers`
--

DROP TABLE IF EXISTS `gebruikers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gebruikers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gebruikers`
--

LOCK TABLES `gebruikers` WRITE;
/*!40000 ALTER TABLE `gebruikers` DISABLE KEYS */;
INSERT INTO `gebruikers` VALUES (1,'markie','$2y$12$QVgXpESzVdp4lvrz0njPe.MkwQotRAqB5TP.TC7r0hCJWl.8TnCoG'),(2,'emre','$2y$12$I/MiNKDvwNl4khpFOPBPje1Dl6RQNy7Z0nr0Il.WXCf2QqFYUaTrC'),(3,'test','$2y$12$RbaLVg3QwfhB6EM1PPjgv.mzkGg29BlL59aD4UGSOIkYMPtSHQzm2'),(4,'tariq','$2y$12$dW04R3JwgrtgwkAUV9IgEu4YlPx1A2WzhtrsF75laXAYtbscoWa9e'),(5,'baas','$2y$12$HgZ64Gzy/AGS0NnShMHc5.08UoYGqa8gFPDr2mwIdtstqnbXZJsry'),(6,'markie-mark','$2y$12$y4UGtpsViiRRLe78RAfB8uV0Z15XA927gVt3v1G9it2nPVrlCuktm');
/*!40000 ALTER TABLE `gebruikers` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-11-05 10:56:17
