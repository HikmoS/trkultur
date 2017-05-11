-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: news
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
-- Table structure for table `haber_icerik`
--

DROP TABLE IF EXISTS `haber_icerik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haber_icerik` (
  `IcerikID` int(11) NOT NULL AUTO_INCREMENT,
  `HaberID` int(11) NOT NULL,
  `Foto1` mediumtext,
  `Icerik` varchar(10000) DEFAULT NULL,
  `sil` int(11) DEFAULT '1',
  PRIMARY KEY (`IcerikID`,`HaberID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haber_icerik`
--

LOCK TABLES `haber_icerik` WRITE;
/*!40000 ALTER TABLE `haber_icerik` DISABLE KEYS */;
INSERT INTO `haber_icerik` VALUES (14,14,'http://sosyalmedya.co/wp-content/uploads/2015/11/5-Ways-To-Fix-IPhone-Cannot-Connect-To-ITunes-Store-610x290.jpg','Apple’ın iOS işletim sistemi akıllı telefonları olan iPhone akıllı telefonlarının Android serisi akıllı telefonlardan en büyük eksiklikleri uygulama ön belleklerinin kolay kolay silinemiyor olması. Bunun için belli başlı işlemler yapmak ya da uygulamalar için bakacak olursak uygulamaları silip yeniden yükleme gibi işlemler yapmanız gerekebiliyor. Android akıllı telefonlarda ise bu işlemi sadece uygulama menüsüne girerek Belki uygulama bazında baktığımız da uygulamaların silinip yeniden yüklenmesi ya da uygulamaların kendi özelliklerinde yer alan sistemleri kullanarak ön bellek temizleme işlemini yapmak uzun ve yorucu olabilir fakat telefonun RAM belleğini temizlemek o kadar da zor olmuyor. iPhone akıllı telefonlarında uzun süre RAM temizleme işlemi yapılmadığında zamanla telefonun yavaşlamasına hatta uygulamaları çalıştırırken uygulamalarda donma sorunları yaşanması gibi sorunlarla da karşı karşıya kalınabiliyor. Peki iPhone RAM temizleme işlemi için kullanıcıların deneyebilecekleri kolay yöntemler var mı? iPhone RAM temizleme işlemi için nasıl işlemler uygulanabilir? Daha detaylı olarak bakalım.',1);
/*!40000 ALTER TABLE `haber_icerik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-12  0:29:02
