-- MySQL dump 10.13  Distrib 8.0.15, for Linux (x86_64)
--
-- Host: localhost    Database: noleggio_bici
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bici`
--

DROP TABLE IF EXISTS `bici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `bici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `modello` varchar(30) DEFAULT NULL,
  `slot_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slot_id` (`slot_id`),
  CONSTRAINT `bici_ibfk_1` FOREIGN KEY (`slot_id`) REFERENCES `slots` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bici`
--

LOCK TABLES `bici` WRITE;
/*!40000 ALTER TABLE `bici` DISABLE KEYS */;
/*!40000 ALTER TABLE `bici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cc`
--

DROP TABLE IF EXISTS `cc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cc` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `cvc` varchar(30) DEFAULT NULL,
  `num` varchar(30) DEFAULT NULL,
  `utente_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `utente_id` (`utente_id`),
  CONSTRAINT `cc_ibfk_1` FOREIGN KEY (`utente_id`) REFERENCES `utenti` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cc`
--

LOCK TABLES `cc` WRITE;
/*!40000 ALTER TABLE `cc` DISABLE KEYS */;
/*!40000 ALTER TABLE `cc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noleggi`
--

DROP TABLE IF EXISTS `noleggi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `noleggi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `utente_id` int DEFAULT NULL,
  `bici_id` int DEFAULT NULL,
  `stazione_id` int DEFAULT NULL,
  `dataora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `utente_id` (`utente_id`),
  KEY `bici_id` (`bici_id`),
  KEY `stazione_id` (`stazione_id`),
  CONSTRAINT `noleggi_ibfk_1` FOREIGN KEY (`utente_id`) REFERENCES `utenti` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `noleggi_ibfk_2` FOREIGN KEY (`bici_id`) REFERENCES `bici` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `noleggi_ibfk_3` FOREIGN KEY (`stazione_id`) REFERENCES `stazioni` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noleggi`
--

LOCK TABLES `noleggi` WRITE;
/*!40000 ALTER TABLE `noleggi` DISABLE KEYS */;
/*!40000 ALTER TABLE `noleggi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slots`
--

DROP TABLE IF EXISTS `slots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `slots` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stazione_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stazione_id` (`stazione_id`),
  CONSTRAINT `slots_ibfk_1` FOREIGN KEY (`stazione_id`) REFERENCES `stazioni` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slots`
--

LOCK TABLES `slots` WRITE;
/*!40000 ALTER TABLE `slots` DISABLE KEYS */;
/*!40000 ALTER TABLE `slots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stazioni`
--

DROP TABLE IF EXISTS `stazioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `stazioni` (
  `id` int NOT NULL AUTO_INCREMENT,
  `posti` int DEFAULT NULL,
  `occupati` int DEFAULT NULL,
  `liberi` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stazioni`
--

LOCK TABLES `stazioni` WRITE;
/*!40000 ALTER TABLE `stazioni` DISABLE KEYS */;
/*!40000 ALTER TABLE `stazioni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utenti`
--

DROP TABLE IF EXISTS `utenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `utenti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utenti`
--

LOCK TABLES `utenti` WRITE;
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-02 12:15:25
-- MySQL dump 10.13  Distrib 8.0.15, for Linux (x86_64)
--
-- Host: localhost    Database: films
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attori`
--

DROP TABLE IF EXISTS `attori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `attori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `anno_di_nascita` varchar(30) DEFAULT NULL,
  `nazionalita` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attori`
--

LOCK TABLES `attori` WRITE;
/*!40000 ALTER TABLE `attori` DISABLE KEYS */;
INSERT INTO `attori` VALUES (1,'R.williams','1960','Americana'),(2,'S.loren','1940','italiana'),(3,'M.mastroianni','1950','italiana');
/*!40000 ALTER TABLE `attori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films` (
  `id` int NOT NULL AUTO_INCREMENT,
  `anno_di_produzione` varchar(30) DEFAULT NULL,
  `nazionalita` varchar(30) DEFAULT NULL,
  `regista` varchar(30) DEFAULT NULL,
  `genere` varchar(30) DEFAULT NULL,
  `titolo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'sdfasdfasdfasdfasdf','vvvvv','qqqq','sdfasdfasdfasdf','Ppppppppppppppppp'),(2,'20','30','10','50','40'),(3,'1990','francese','tinto bras','storico','film 3'),(4,'1996','italiana','fellini','fantascienza','film 4'),(5,'1966','inglese','tarantino','storico','film 5'),(6,'1936','italiana','fellini','fantascienza','film 6'),(7,'1976','spagnola','spielberg','fantascienza','film 7');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proiezioni`
--

DROP TABLE IF EXISTS `proiezioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `proiezioni` (
  `id` int NOT NULL AUTO_INCREMENT,
  `film_id` int DEFAULT NULL,
  `sala_id` int DEFAULT NULL,
  `incasso` int DEFAULT NULL,
  `data_proiezione` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `film_id` (`film_id`),
  KEY `sala_id` (`sala_id`),
  CONSTRAINT `proiezioni_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `proiezioni_ibfk_2` FOREIGN KEY (`sala_id`) REFERENCES `sale` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proiezioni`
--

LOCK TABLES `proiezioni` WRITE;
/*!40000 ALTER TABLE `proiezioni` DISABLE KEYS */;
INSERT INTO `proiezioni` VALUES (1,3,2,1000,'2004-12-25 00:00:00'),(2,3,2,1000,'2004-12-25 00:00:00'),(3,3,2,1000,'2004-12-25 00:00:00'),(4,3,2,1000,'2007-12-25 00:00:00'),(5,3,2,1000,'2017-12-25 00:00:00'),(6,2,1,1000,'2004-12-25 00:00:00'),(7,4,6,1000,'2004-12-25 00:00:00'),(8,1,6,1000,'2004-12-25 00:00:00'),(9,1,6,1000,'2004-12-05 00:00:00'),(10,2,5,1000,'2004-03-25 00:00:00'),(11,3,5,1000,'2004-04-25 00:00:00'),(12,4,4,1000,'2004-01-25 00:00:00'),(13,5,3,1000,'2004-06-25 00:00:00'),(14,6,3,1000,'2004-11-25 00:00:00'),(15,7,3,1000,'2004-10-25 00:00:00');
/*!40000 ALTER TABLE `proiezioni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recite`
--

DROP TABLE IF EXISTS `recite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `recite` (
  `attore_id` int DEFAULT NULL,
  `film_id` int DEFAULT NULL,
  KEY `attore_id` (`attore_id`),
  KEY `film_id` (`film_id`),
  CONSTRAINT `recite_ibfk_1` FOREIGN KEY (`attore_id`) REFERENCES `attori` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `recite_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recite`
--

LOCK TABLES `recite` WRITE;
/*!40000 ALTER TABLE `recite` DISABLE KEYS */;
INSERT INTO `recite` VALUES (1,1),(2,2),(2,3),(2,4),(3,5),(2,6),(2,7),(3,7),(3,6);
/*!40000 ALTER TABLE `recite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sale` (
  `id` int NOT NULL AUTO_INCREMENT,
  `posti` int DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `citta` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale`
--

LOCK TABLES `sale` WRITE;
/*!40000 ALTER TABLE `sale` DISABLE KEYS */;
INSERT INTO `sale` VALUES (1,156,'sala1','Pisa'),(2,16,'sala2','Pisa'),(3,164,'sala3','Pisa'),(4,123,'sala1','Ferrara'),(5,151,'sala1','Bologna'),(6,140,'sala1','Napoli');
/*!40000 ALTER TABLE `sale` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-02 12:15:25
-- MySQL dump 10.13  Distrib 8.0.15, for Linux (x86_64)
--
-- Host: localhost    Database: officina
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attori`
--

DROP TABLE IF EXISTS `attori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `attori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `anno_di_nascita` varchar(30) DEFAULT NULL,
  `nazionalita` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attori`
--

LOCK TABLES `attori` WRITE;
/*!40000 ALTER TABLE `attori` DISABLE KEYS */;
/*!40000 ALTER TABLE `attori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consegne`
--

DROP TABLE IF EXISTS `consegne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `consegne` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dataora` datetime DEFAULT NULL,
  `riparazione_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riparazione_id` (`riparazione_id`),
  CONSTRAINT `consegne_ibfk_1` FOREIGN KEY (`riparazione_id`) REFERENCES `riparazioni` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consegne`
--

LOCK TABLES `consegne` WRITE;
/*!40000 ALTER TABLE `consegne` DISABLE KEYS */;
/*!40000 ALTER TABLE `consegne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dipendenti`
--

DROP TABLE IF EXISTS `dipendenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `dipendenti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `indirizzo` varchar(30) DEFAULT NULL,
  `anni` int DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `cf` varchar(30) DEFAULT NULL,
  `officina_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `officina_id` (`officina_id`),
  CONSTRAINT `dipendenti_ibfk_1` FOREIGN KEY (`officina_id`) REFERENCES `officine` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dipendenti`
--

LOCK TABLES `dipendenti` WRITE;
/*!40000 ALTER TABLE `dipendenti` DISABLE KEYS */;
/*!40000 ALTER TABLE `dipendenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films` (
  `id` int NOT NULL AUTO_INCREMENT,
  `anno_di_produzione` varchar(30) DEFAULT NULL,
  `nazionalita` varchar(30) DEFAULT NULL,
  `regista` varchar(30) DEFAULT NULL,
  `genere` varchar(30) DEFAULT NULL,
  `titolo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'1986','italiana','fellini','storico','film 1'),(2,'1986','giapponse','fellini','fantascienza','film 2'),(3,'1990','francese','tinto bras','storico','film 3'),(4,'1996','italiana','fellini','fantascienza','film 4'),(5,'1966','inglese','tarantino','storico','film 5'),(6,'1936','italiana','fellini','fantascienza','film 6'),(7,'1976','spagnola','spielberg','fantascienza','film 7'),(8,'1989','italiana','fellini','storico','film 8'),(9,'1945','italiana','leone','storico','film 9'),(10,'2000','francese','leone','fantascienza','film 10'),(11,'2000','giapponese','leone','fantascienza','film 11'),(12,'1945','italiana','leone','storico','Casablanca');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `officine`
--

DROP TABLE IF EXISTS `officine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `officine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `indirizzo` varchar(30) DEFAULT NULL,
  `anno_fondazione` int DEFAULT NULL,
  `numero_dipendenti` int DEFAULT NULL,
  `propietario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `propietario_id` (`propietario_id`),
  CONSTRAINT `officine_ibfk_1` FOREIGN KEY (`propietario_id`) REFERENCES `proprietari` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `officine`
--

LOCK TABLES `officine` WRITE;
/*!40000 ALTER TABLE `officine` DISABLE KEYS */;
/*!40000 ALTER TABLE `officine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proprietari`
--

DROP TABLE IF EXISTS `proprietari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `proprietari` (
  `id` int NOT NULL AUTO_INCREMENT,
  `indirizzo` varchar(30) DEFAULT NULL,
  `n_telefono` varchar(30) DEFAULT NULL,
  `cf` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proprietari`
--

LOCK TABLES `proprietari` WRITE;
/*!40000 ALTER TABLE `proprietari` DISABLE KEYS */;
INSERT INTO `proprietari` VALUES (1,'via dei mille','3406598754','grgcst85htg7s'),(2,'via piva','3406598787','gdscst85htg7s'),(3,'via puccini','3486598787','gcscst85htg7s'),(4,'via puccini','3487598787','gcscst83htg7s'),(5,'via dei mille','3402563594','asdasdasd'),(6,'via dei mille','3402563594','asdasdasd'),(7,'via dei mille','3402563594','asdasdasd'),(8,'via dei mille','3402563594','asdasdasd'),(9,'via dei mille','3402563594','asdasdasd'),(10,'via dei mille','3402563594','asdasdasd'),(11,'via dei mille','3402563594','asdasdasd'),(12,'via dei mille','3402563594','asdasdasd');
/*!40000 ALTER TABLE `proprietari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riparazioni`
--

DROP TABLE IF EXISTS `riparazioni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `riparazioni` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dataora` datetime DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `indirizzo` varchar(30) DEFAULT NULL,
  `officina_id` int DEFAULT NULL,
  `veicolo_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `officina_id` (`officina_id`),
  KEY `veicolo_id` (`veicolo_id`),
  CONSTRAINT `riparazioni_ibfk_1` FOREIGN KEY (`officina_id`) REFERENCES `officine` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `riparazioni_ibfk_2` FOREIGN KEY (`veicolo_id`) REFERENCES `veicoli` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riparazioni`
--

LOCK TABLES `riparazioni` WRITE;
/*!40000 ALTER TABLE `riparazioni` DISABLE KEYS */;
/*!40000 ALTER TABLE `riparazioni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veicoli`
--

DROP TABLE IF EXISTS `veicoli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `veicoli` (
  `id` int NOT NULL AUTO_INCREMENT,
  `modello` varchar(30) DEFAULT NULL,
  `tipologia` varchar(30) DEFAULT NULL,
  `targa` varchar(30) DEFAULT NULL,
  `immatricolazione` datetime DEFAULT NULL,
  `proprietario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proprietario_id` (`proprietario_id`),
  CONSTRAINT `veicoli_ibfk_1` FOREIGN KEY (`proprietario_id`) REFERENCES `proprietari` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veicoli`
--

LOCK TABLES `veicoli` WRITE;
/*!40000 ALTER TABLE `veicoli` DISABLE KEYS */;
INSERT INTO `veicoli` VALUES (1,NULL,NULL,'aaaa',NULL,1),(2,NULL,NULL,'bbbb',NULL,1),(3,NULL,NULL,'cccc',NULL,1),(4,NULL,NULL,'dddd',NULL,2);
/*!40000 ALTER TABLE `veicoli` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-02 12:15:25
