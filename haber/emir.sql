-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `haber`
--

DROP TABLE IF EXISTS `haber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haber` (
  `IDHaber` int(11) NOT NULL AUTO_INCREMENT,
  `HaberBaslik` varchar(45) NOT NULL,
  `HaberTarih` date DEFAULT NULL,
  `HaberGunTarih` date DEFAULT NULL,
  `YazarID` int(11) DEFAULT NULL,
  `OSayisi` double DEFAULT NULL,
  `KategoriID` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDHaber`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haber`
--

LOCK TABLES `haber` WRITE;
/*!40000 ALTER TABLE `haber` DISABLE KEYS */;
INSERT INTO `haber` VALUES (2,'Teknoloji Blogu','2011-11-20','2011-11-20',1,15,1),(3,'Oyun Blogu','2015-10-10',NULL,1,16,2),(4,'Kitap Blogu','2015-06-06',NULL,1,16,3),(5,'Dizi Blogu','2007-07-20',NULL,1,17,4),(6,'Sinema Blogu','1998-08-11',NULL,1,18,5),(7,'Müzik','2030-09-12',NULL,1,19,6);
/*!40000 ALTER TABLE `haber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haber_icerik`
--

DROP TABLE IF EXISTS `haber_icerik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haber_icerik` (
  `IcerikID` int(11) NOT NULL AUTO_INCREMENT,
  `HaberID` int(11) DEFAULT NULL,
  `Foto1` mediumtext,
  `Icerik` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`IcerikID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haber_icerik`
--

LOCK TABLES `haber_icerik` WRITE;
/*!40000 ALTER TABLE `haber_icerik` DISABLE KEYS */;
INSERT INTO `haber_icerik` VALUES (1,2,'images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg','ADASDADASDADASDASDASDASDASDASDASDASDA'),(2,3,'images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg','asddsadsdsdaasaddasadsadaddaasddasadsds'),(3,4,'images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg','asddsadasdsdassddsdadasdsaddassaddssasa'),(4,5,'images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg','THY, Bazı Uçuşlarında Yolculara Laptop Verecek!'),(5,6,'images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg','THY, Bazı Uçuşlarında Yolculara Laptop Verecek!'),(6,7,'images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg','THY, Bazı Uçuşlarında Yolculara Laptop Verecek!');
/*!40000 ALTER TABLE `haber_icerik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haber_kategori`
--

DROP TABLE IF EXISTS `haber_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haber_kategori` (
  `KategoriID` int(11) NOT NULL,
  `IcID` int(11) DEFAULT NULL,
  PRIMARY KEY (`KategoriID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haber_kategori`
--

LOCK TABLES `haber_kategori` WRITE;
/*!40000 ALTER TABLE `haber_kategori` DISABLE KEYS */;
INSERT INTO `haber_kategori` VALUES (1,1),(2,2),(3,3);
/*!40000 ALTER TABLE `haber_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `KatID` int(11) NOT NULL AUTO_INCREMENT,
  `Kategori` varchar(45) NOT NULL,
  PRIMARY KEY (`KatID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Teknoloji'),(2,'Oyun'),(3,'Kitap'),(4,'Dizi'),(5,'Sinema'),(6,'Müzik');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yazar`
--

DROP TABLE IF EXISTS `yazar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yazar` (
  `YazarID` int(11) NOT NULL AUTO_INCREMENT,
  `Adi` varchar(45) NOT NULL,
  `Soyadi` varchar(45) NOT NULL,
  `E-mail` varchar(45) NOT NULL,
  `KullaniciAdi` varchar(45) NOT NULL,
  PRIMARY KEY (`YazarID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yazar`
--

LOCK TABLES `yazar` WRITE;
/*!40000 ALTER TABLE `yazar` DISABLE KEYS */;
INSERT INTO `yazar` VALUES (1,'hikmet','semzi','asdasd','hikmos');
/*!40000 ALTER TABLE `yazar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-30 13:21:37
