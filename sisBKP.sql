-- MySQL dump 10.16  Distrib 10.3.9-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	10.3.9-MariaDB-1:10.3.9+maria~bionic

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
-- Table structure for table `afastamentos`
--

DROP TABLE IF EXISTS `afastamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `afastamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `efetivo_id` int(11) NOT NULL,
  `motivo` varchar(45) NOT NULL,
  `retorno` date NOT NULL,
  `finalizado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`efetivo_id`),
  KEY `fk_afastamentos_efetivo_tiop1_idx` (`efetivo_id`),
  CONSTRAINT `fk_afastamentos_efetivo_tiop1` FOREIGN KEY (`efetivo_id`) REFERENCES `efetivo_tiop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `afastamentos`
--

LOCK TABLES `afastamentos` WRITE;
/*!40000 ALTER TABLE `afastamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `afastamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bds`
--

DROP TABLE IF EXISTS `bds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistema_centro_id` int(11) NOT NULL,
  `versao` varchar(45) NOT NULL,
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descricao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bds_sistemas_centros1_idx` (`sistema_centro_id`),
  CONSTRAINT `fk_bds_sistemas_centros1` FOREIGN KEY (`sistema_centro_id`) REFERENCES `sistemas_centros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bds`
--

LOCK TABLES `bds` WRITE;
/*!40000 ALTER TABLE `bds` DISABLE KEYS */;
INSERT INTO `bds` VALUES (1,1,'ACCRE50','2018-09-29 00:00:00',NULL,'2018-10-07 17:18:32','2018-10-07 17:18:32',NULL),(2,2,'ACCAO14','2018-03-15 00:00:00',NULL,'2018-10-07 18:16:01','2018-10-07 18:16:01',NULL),(3,3,'APPRF24','2018-09-02 00:00:00',NULL,'2018-10-07 18:16:57','2018-10-07 18:16:57',NULL),(4,4,'COPM3_1','2018-03-03 00:00:00',NULL,'2018-10-07 18:17:23','2018-10-07 18:17:23',NULL);
/*!40000 ALTER TABLE `bds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centros`
--

DROP TABLE IF EXISTS `centros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `acronimo` varchar(45) NOT NULL,
  `localidade` varchar(45) NOT NULL,
  `descricao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centros`
--

LOCK TABLES `centros` WRITE;
/*!40000 ALTER TABLE `centros` DISABLE KEYS */;
INSERT INTO `centros` VALUES (38,'Centro Controle Área','ACC-RE','Recife',NULL,'2018-09-19 11:42:27','2018-09-19 11:42:27',NULL),(39,'Centro Controle Aproximação','APP-RF','Recife',NULL,'2018-09-19 11:42:48','2018-09-19 11:42:48',NULL),(40,'Centro Controle Área','ACC-AO','Recife',NULL,'2018-09-19 11:43:05','2018-09-19 11:43:05',NULL),(41,'Controle Defesa Aérea','COPM','Recife',NULL,'2018-09-19 11:49:50','2018-09-19 11:49:50',NULL);
/*!40000 ALTER TABLE `centros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `efetivo_id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` text NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`efetivo_id`),
  KEY `fk_cursos_efetivo_tiop1_idx` (`efetivo_id`),
  CONSTRAINT `fk_cursos_efetivo_tiop1` FOREIGN KEY (`efetivo_id`) REFERENCES `efetivo_tiop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `efetivo_tiop`
--

DROP TABLE IF EXISTS `efetivo_tiop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `efetivo_tiop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(100) NOT NULL,
  `posto_gradu` varchar(45) NOT NULL,
  `nome_guerra` varchar(45) NOT NULL,
  `saram` int(10) unsigned NOT NULL,
  `identidade` int(10) unsigned NOT NULL,
  `quadro` varchar(45) NOT NULL,
  `especialidade` varchar(45) NOT NULL,
  `agenda` int(10) unsigned NOT NULL,
  `cpf` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `efetivo_tiop`
--

LOCK TABLES `efetivo_tiop` WRITE;
/*!40000 ALTER TABLE `efetivo_tiop` DISABLE KEYS */;
/*!40000 ALTER TABLE `efetivo_tiop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escala_sobreaviso`
--

DROP TABLE IF EXISTS `escala_sobreaviso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escala_sobreaviso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `efetivo_id` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `dias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_escala_sobreaviso_efetivo_tiop1_idx` (`efetivo_id`),
  CONSTRAINT `fk_escala_sobreaviso_efetivo_tiop1` FOREIGN KEY (`efetivo_id`) REFERENCES `efetivo_tiop` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escala_sobreaviso`
--

LOCK TABLES `escala_sobreaviso` WRITE;
/*!40000 ALTER TABLE `escala_sobreaviso` DISABLE KEYS */;
/*!40000 ALTER TABLE `escala_sobreaviso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paradas_radar`
--

DROP TABLE IF EXISTS `paradas_radar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paradas_radar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cad_efetivo_id` int(11) NOT NULL,
  `radar_id` int(11) NOT NULL,
  `data_prevista` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descricao_motivo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`cad_efetivo_id`,`radar_id`),
  KEY `fk_padas_radar_radares1_idx` (`radar_id`),
  KEY `fk_paradas_radar_efetivo_tiop1_idx` (`cad_efetivo_id`),
  CONSTRAINT `fk_padas_radar_radares1` FOREIGN KEY (`radar_id`) REFERENCES `radares` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_paradas_radar_efetivo_tiop1` FOREIGN KEY (`cad_efetivo_id`) REFERENCES `efetivo_tiop` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paradas_radar`
--

LOCK TABLES `paradas_radar` WRITE;
/*!40000 ALTER TABLE `paradas_radar` DISABLE KEYS */;
/*!40000 ALTER TABLE `paradas_radar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `radares`
--

DROP TABLE IF EXISTS `radares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `localidade` varchar(45) NOT NULL,
  `equipamento` varchar(45) NOT NULL,
  `canalizacao` varchar(45) NOT NULL,
  `protocolo` varchar(45) NOT NULL,
  `sic` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `canal_a` int(11) NOT NULL,
  `canal_b` int(11) NOT NULL,
  `lat` float NOT NULL,
  `long` float NOT NULL,
  `observacoes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `sic_UNIQUE` (`sic`),
  UNIQUE KEY `canal_a_UNIQUE` (`canal_a`),
  UNIQUE KEY `canal_b_UNIQUE` (`canal_b`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `radares`
--

LOCK TABLES `radares` WRITE;
/*!40000 ALTER TABLE `radares` DISABLE KEYS */;
/*!40000 ALTER TABLE `radares` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`%`*/ /*!50003 TRIGGER `mydb`.`radares_AFTER_INSERT` AFTER INSERT ON `radares` FOR EACH ROW
BEGIN
	INSERT INTO status_radar values(NEW.id,'ope','ope',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `rpl`
--

DROP TABLE IF EXISTS `rpl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rpl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bds_id` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `data_carga` date NOT NULL,
  `validade` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rpl_bds1_idx` (`bds_id`),
  CONSTRAINT `fk_rpl_bds1` FOREIGN KEY (`bds_id`) REFERENCES `bds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rpl`
--

LOCK TABLES `rpl` WRITE;
/*!40000 ALTER TABLE `rpl` DISABLE KEYS */;
/*!40000 ALTER TABLE `rpl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistemas`
--

DROP TABLE IF EXISTS `sistemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistemas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `versao` varchar(45) NOT NULL,
  `data_atualizacao` date NOT NULL,
  `descricao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemas`
--

LOCK TABLES `sistemas` WRITE;
/*!40000 ALTER TABLE `sistemas` DISABLE KEYS */;
INSERT INTO `sistemas` VALUES (38,'SAGITARIO','2.3.1.52_MST','2018-09-19','<p>SAGITARIO&nbsp; ACC/APP</p>','2018-09-19 11:40:12','2018-09-19 11:52:18'),(39,'SAGITARIO','2.3.1.52','2018-09-19','<p>SAGITARIO ACC/APP</p>','2018-09-19 11:41:06','2018-09-19 11:51:31'),(40,'DA/COM','4.6.6','2018-03-03','<p>COPM DA/COM</p>','2018-09-19 11:41:37','2018-09-19 11:41:37');
/*!40000 ALTER TABLE `sistemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistemas_centros`
--

DROP TABLE IF EXISTS `sistemas_centros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistemas_centros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistema_id` int(11) NOT NULL,
  `centro_id` int(11) NOT NULL,
  `producao` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sistemas_has_centros_centros1_idx` (`centro_id`),
  KEY `fk_sistemas_has_centros_sistemas1_idx` (`sistema_id`),
  CONSTRAINT `fk_sistemas_has_centros_centros1` FOREIGN KEY (`centro_id`) REFERENCES `centros` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_sistemas_has_centros_sistemas1` FOREIGN KEY (`sistema_id`) REFERENCES `sistemas` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemas_centros`
--

LOCK TABLES `sistemas_centros` WRITE;
/*!40000 ALTER TABLE `sistemas_centros` DISABLE KEYS */;
INSERT INTO `sistemas_centros` VALUES (1,38,38,1,'2018-09-19 11:56:49','2018-09-19 11:56:49',NULL),(2,39,40,1,'2018-09-19 11:57:03','2018-09-19 11:57:03',NULL),(3,38,39,1,'2018-09-19 11:57:19','2018-09-19 11:57:19',NULL),(4,40,41,1,'2018-09-19 11:57:57','2018-09-19 11:57:57',NULL);
/*!40000 ALTER TABLE `sistemas_centros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistemas_centros_radares`
--

DROP TABLE IF EXISTS `sistemas_centros_radares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistemas_centros_radares` (
  `sistemas_centros_id` int(11) NOT NULL,
  `radares_id` int(11) NOT NULL,
  PRIMARY KEY (`sistemas_centros_id`,`radares_id`),
  KEY `fk_sistemas_centros_has_radares_radares1_idx` (`radares_id`),
  KEY `fk_sistemas_centros_has_radares_sistemas_centros1_idx` (`sistemas_centros_id`),
  CONSTRAINT `fk_sistemas_centros_has_radares_radares1` FOREIGN KEY (`radares_id`) REFERENCES `radares` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_sistemas_centros_has_radares_sistemas_centros1` FOREIGN KEY (`sistemas_centros_id`) REFERENCES `sistemas_centros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemas_centros_radares`
--

LOCK TABLES `sistemas_centros_radares` WRITE;
/*!40000 ALTER TABLE `sistemas_centros_radares` DISABLE KEYS */;
/*!40000 ALTER TABLE `sistemas_centros_radares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_radar`
--

DROP TABLE IF EXISTS `status_radar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_radar` (
  `radar_id` int(11) NOT NULL,
  `canal_a` varchar(45) NOT NULL,
  `canal_b` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`radar_id`),
  KEY `fk_radares_has_sistemas_centros_radares1_idx` (`radar_id`),
  CONSTRAINT `fk_radares_has_sistemas_centros_radares1` FOREIGN KEY (`radar_id`) REFERENCES `radares` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_radar`
--

LOCK TABLES `status_radar` WRITE;
/*!40000 ALTER TABLE `status_radar` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_radar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-08 10:24:10
