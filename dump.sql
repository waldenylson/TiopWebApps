-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Linux (x86_64)
--
-- Host: 10.80.33.59    Database: sistiop
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
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
  `data_atualizacao` date NOT NULL,
  `descricao` text,
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
INSERT INTO `bds` VALUES (1,1,'ACCRE82','2019-02-05',NULL,'2018-10-07 17:18:32','2019-02-07 14:36:15',NULL),(2,2,'ACCAO28','2018-10-09',NULL,'2018-10-07 18:16:01','2018-10-11 18:51:13',NULL),(3,3,'APPRF30','2018-10-09',NULL,'2018-10-07 18:16:57','2018-10-11 18:51:51',NULL),(4,4,'COPM3_1','2018-10-10',NULL,'2018-10-07 18:17:23','2018-10-11 18:52:45',NULL);
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
  `descricao` text,
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
  `saram` varchar(11) NOT NULL,
  `identidade` int(10) unsigned NOT NULL,
  `quadro` varchar(45) NOT NULL,
  `especialidade` varchar(45) NOT NULL,
  `agenda` int(10) unsigned NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `efetivo_tiop`
--

LOCK TABLES `efetivo_tiop` WRITE;
/*!40000 ALTER TABLE `efetivo_tiop` DISABLE KEYS */;
INSERT INTO `efetivo_tiop` VALUES (1,'Waldenylson Paulo de Souza Silva','2S','Waldenylson','6254004',557054,'QSS','SIN',6715,'(81)99978-7362','07144392409','waldenylsonwpss@fab.mil.br','1987-06-22','2018-11-07 19:40:07','2019-01-10 12:08:29',NULL),(4,'LEANDRO MUNIZ DE OLIVEIRA','1S','MUNIZ','2955695',490932,'QSS','BCO',6712,'(81)98991-4636','00425310710','munizlmo@fab.mil.br','1971-02-07','2018-11-29 14:44:12','2018-11-29 14:44:12',NULL),(5,'Celdo Souza da Silveira','1T','Celdo','3696316',520349,'QOENG','ELN',6940,'(81)98814-4268','00037309056','celdocss@fab.mil.br','1982-06-13','2018-11-29 15:26:39','2018-11-29 15:26:39',NULL),(6,'Sergio Gomes','CV','Sergio','9999999',2954650,'CV','ANS',8327,'(81)99761-3923','74182854420','sergiogomes@ctcea.org.br','1970-08-10','2018-11-29 15:50:19','2018-11-29 15:50:19',NULL),(7,'RODRIGO DA SILVA SOUZA','2S','RODRIGO SOUZA','6324690',559905,'QSS','BET',6717,'(81)99808-4948','06895663444','rodrigosouzarss@fab.mil.br','1987-06-26','2018-11-29 16:04:50','2018-11-29 16:04:50',NULL),(8,'ANTONIO HENRIQUE RIBEIRO','SO','HENRIQUE','3101207',486178,'QSS','BCO',6014,'(81)98757-1065','15967269894','henriqueahr1@fab.mil.br','1972-12-21','2018-11-30 15:03:54','2018-11-30 15:03:54',NULL),(9,'MARCOS AURÉLIO DOS SANTOS','TCEL','SANTOS','1673033',421970,'QOECOM','COM',6922,'(81)98802-6322','05789026800','santosmas@fab.mil.br','1964-08-16','2018-12-03 11:50:01','2018-12-05 12:01:30',NULL),(10,'Luiz Eduardo de Freitas Queiroz','SO','Eduardo','1541269',415882,'QSS','BCO',6207,'(81)99714-9121','24385549320','lefqueiroz@gmail.com','1961-08-30','2018-12-04 03:14:10','2018-12-04 03:14:10',NULL),(11,'DIEGO FERNANDO ALENCAR VAREJÃO','3S','VAREJÃO','6190383',570165,'QSS','SIN',6418,'(81)98655-5764','05459889421','varejaodfav@fab.mil.br','1990-11-14','2019-01-29 12:11:05','2019-01-29 12:11:05',NULL),(12,'Rehilson Gomes da SIlva','2S','Rehilson','6332242',560126,'QSS','BET',6417,'(81)99720-1808','08850072473','rehilsonrgs@fab.mil.br','1992-02-28','2019-01-30 12:27:47','2019-01-30 12:27:47',NULL);
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
  `dias` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_escala_sobreaviso_efetivo_tiop1_idx` (`efetivo_id`),
  CONSTRAINT `fk_escala_sobreaviso_efetivo_tiop1` FOREIGN KEY (`efetivo_id`) REFERENCES `efetivo_tiop` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escala_sobreaviso`
--

LOCK TABLES `escala_sobreaviso` WRITE;
/*!40000 ALTER TABLE `escala_sobreaviso` DISABLE KEYS */;
INSERT INTO `escala_sobreaviso` VALUES (4,1,2,2019,'01,09,17,11,20,28','2019-01-29 17:55:37','2019-01-29 17:55:37',NULL),(13,4,2,2019,'04,13,25,08,16,23','2019-01-29 20:04:40','2019-01-29 20:04:40',NULL),(21,7,2,2019,'02,06','2019-01-29 21:54:00','2019-01-29 21:54:00',NULL),(22,11,1,2019,'29,31','2019-01-29 21:56:22','2019-01-29 21:56:22',NULL),(23,7,1,2019,'30','2019-01-29 21:56:35','2019-01-29 21:56:35',NULL),(24,12,2,2019,'22,24,15,14,18,21,27','2019-01-30 13:30:22','2019-02-12 13:53:45',NULL),(25,11,2,2019,'03,10,12,05,07,19,26','2019-01-30 13:31:06','2019-02-12 13:54:04',NULL),(27,4,3,2019,'07,22,27,30,03','2019-02-07 12:09:25','2019-02-07 12:09:25',NULL),(28,1,3,2019,'05,21,26,29,24','2019-02-07 12:10:05','2019-02-07 12:10:05',NULL),(29,12,3,2019,'01,10,23,12,15,18,28,04','2019-02-07 12:11:01','2019-02-07 12:11:01',NULL),(30,7,3,2019,'06,11,14,19,25,09,17,31','2019-02-07 12:12:09','2019-02-07 12:12:09',NULL),(31,11,3,2019,'08,13,20,16,02','2019-02-07 12:12:49','2019-02-07 12:12:49',NULL),(32,1,4,2019,'01,11,23,27,30','2019-04-09 21:13:15','2019-04-09 21:13:15',NULL),(33,4,4,2019,'02,04,07,12,20,23,29','2019-04-09 21:14:38','2019-04-09 21:14:38',NULL),(34,7,4,2019,'03,06,09,16,19,25','2019-04-09 21:15:32','2019-04-09 21:15:32',NULL),(35,11,4,2019,'10,13,15,18,24,28','2019-04-09 21:16:12','2019-04-09 21:16:12',NULL),(36,12,4,2019,'05,08,14,17,21,26','2019-04-09 21:16:52','2019-04-09 21:16:52',NULL);
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
-- Table structure for table `mnt_programadas`
--

DROP TABLE IF EXISTS `mnt_programadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mnt_programadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `radar_id` int(11) NOT NULL,
  `efetivo_id` int(11) NOT NULL,
  `localidade` varchar(45) DEFAULT NULL,
  `motivo` varchar(255) NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date NOT NULL,
  `hora_ini` time NOT NULL,
  `hora_fim` time NOT NULL,
  `observacoes` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`,`radar_id`,`efetivo_id`),
  KEY `fk_mnt_programadas_radares1_idx` (`radar_id`),
  KEY `fk_mnt_programadas_efetivo_tiop1_idx` (`efetivo_id`),
  CONSTRAINT `fk_mnt_programadas_efetivo_tiop1` FOREIGN KEY (`efetivo_id`) REFERENCES `efetivo_tiop` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mnt_programadas_radares1` FOREIGN KEY (`radar_id`) REFERENCES `radares` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mnt_programadas`
--

LOCK TABLES `mnt_programadas` WRITE;
/*!40000 ALTER TABLE `mnt_programadas` DISABLE KEYS */;
INSERT INTO `mnt_programadas` VALUES (2,54,1,'DTCEA-FN','Modernização Sistemas Radar RSM-970S para CIRIUS ','2019-02-11','2019-04-12','11:00:00','20:00:00','<p>Radar ficar&aacute; indispon&iacute;vel durante todo o per&iacute;odo - Parada Total</p>','2019-03-07 18:08:11','2019-02-27 13:49:10'),(3,52,1,NULL,'Manutenção preventiva eletromecânica nível base','2019-03-09','2019-03-11','11:00:00','20:00:00','<p>Radar retorna ao final de cada dia</p>','2019-02-27 14:00:06','2019-02-27 14:00:06'),(4,51,1,NULL,'Manutenção corretiva eletromecânica nível base','2019-03-26','2019-03-27','11:00:00','20:00:00','<p>Parada Total</p>','2019-02-27 14:02:27','2019-02-27 14:02:27'),(5,53,1,NULL,'Manutenção Preventiva Orgânica Mecânica e Eletrônica','2019-03-11','2019-03-11','11:30:00','13:30:00',NULL,'2019-03-07 18:06:21','2019-02-27 18:16:28');
/*!40000 ALTER TABLE `mnt_programadas` ENABLE KEYS */;
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
  `observacoes` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `sic_UNIQUE` (`sic`),
  UNIQUE KEY `canal_a_UNIQUE` (`canal_a`),
  UNIQUE KEY `canal_b_UNIQUE` (`canal_b`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `radares`
--

LOCK TABLES `radares` WRITE;
/*!40000 ALTER TABLE `radares` DISABLE KEYS */;
INSERT INTO `radares` VALUES (47,'Salvador LP','Salvador - BA','LP23+RSM970','Telesat/Embratel','ASTERIX','C0','PRI/SEC',50111,50311,0,0,'<p>VRADAR 19200</p>','2019-02-14 12:17:56','2019-02-18 16:50:31',NULL),(48,'Maceió','Rio Largo - AL','LP23+RSM970','Telesat/Embratel','ASTERIX','C3','PRI/SEC',50112,50312,0,0,'<p>VRADAR 19200</p>','2019-02-14 12:33:38','2019-02-18 16:51:56',NULL),(49,'Natal LP','Natal-RN','LP23+RSM970','Telesat/Embratel','ASTERIX','C2','PRI/SEC',50113,50313,0,0,'<p>VRADAR 19200</p>','2019-02-14 12:35:08','2019-02-18 16:52:15',NULL),(50,'Fortaleza','Fortaleza-CE','LP23+RSM970','Telesat/Embratel','ASTERIX','C1','PRI/SEC',50114,50314,0,0,'<p>VRADAR 19200</p>','2019-02-14 12:36:03','2019-02-18 16:52:35',NULL),(51,'Porto Seguro','Porto Seguro-BA','STAR+RSM970','Telesat/Embratel','ASTERIX','BE','PRI/SEC',50121,50321,0,0,'<p>VRADAR 19200</p>','2019-02-14 12:37:55','2019-02-18 16:52:49',NULL),(52,'BJ Lapa','Bom Jesus da Lapa-BA','SIR-M SEC','Telesat/Embratel','ASTERIX','BB','SEC',50122,50322,0,0,'<p>VRADAR 9600</p>','2019-02-14 13:12:39','2019-02-18 16:53:05',NULL),(53,'Petrolina','Petrolina-PE','SIR-M SEC','Telesat/Embratel','ASTERIX','BA','SEC',50123,50323,0,0,'<p>VRADAR 9600</p>','2019-02-14 13:37:00','2019-02-18 16:53:54',NULL),(54,'F Noronha','Fernando de Noronha-PE','RSM970','Telesat/Embratel','ASTERIX','B8','SEC',50124,50324,0,0,'<p>VRADAR 9600</p>','2019-02-14 13:38:58','2019-02-18 16:54:09',NULL),(55,'Gama','Gama-DF','TRS2230+RSM970','Telesat/Embratel','ASTERIX','A3','PRI/SEC',50131,50331,0,0,'<p>VRADAR 19200</p>','2019-02-14 13:44:29','2019-02-18 16:54:40',NULL),(56,'Sta Teresa','Santa Teresa-ES','LP23+RSM970','Telesat/Embratel','ASTERIX','9D','PRI/SEC',50132,50332,0,0,'<p>VRADAR 19200</p>','2019-02-14 13:50:29','2019-02-18 16:54:49',NULL),(57,'T. Marias','Três Marias-MG','LP23+RSM970','Telesat/Embratel','ASTERIX','9F','PRI/SEC',50133,50333,0,0,'<p>VRADAR 19200</p>','2019-02-14 13:51:40','2019-02-18 16:54:59',NULL),(58,'São Luís','São Luís-MA','ASR23R','Telesat/Embratel','ASTERIX','C4','PRI/SEC',50134,50334,0,0,'<p>VRADAR 9600</p>','2019-02-14 13:56:20','2019-02-18 16:55:17',NULL),(59,'Recife','Recife-PE','TA10+RSM970','Fibra Optica/Par metálico','ASTERIX','B7','PRI/SEC',50141,50341,0,0,'<p>VRADAR 19200</p>','2019-02-14 14:00:41','2019-02-18 16:55:28',NULL),(60,'Salvador ST','Salvador - BA','STAR +RSM970','Telesat/Embratel','ASTERIX','B6','PRI/SEC',50142,50342,0,0,'<p>VRADAR 19200</p>','2019-02-14 16:35:19','2019-02-18 16:55:45',NULL),(61,'Confins','Confins - MG','TA-10','Telesat/Embratel','ASTERIX','A5','PRI',50143,50343,0,0,'<p>VRADAR 19200</p>','2019-02-14 16:40:21','2019-02-18 16:55:56',NULL),(62,'Fortaleza ST','Fortaleza-CE','STAR +RSM970','Telesat/Embratel','ASTERIX','BC','PRI/SEC',50144,50344,0,0,'<p>VRADAR 19200</p>','2019-02-14 16:52:13','2019-02-18 16:56:09',NULL),(63,'Natal ST','Natal - RN','STAR +RSM970','Telesat/Embratel','ASTERIX','BD','PRI/SEC',50211,50411,0,0,'<p>VRADAR 19200</p>','2019-02-14 16:54:24','2019-02-18 16:56:18',NULL),(64,'Imperatriz','Imperatriz - MA','MSSR','Telesat/Embratel','ASTERIX','D1','SEC',50212,50412,0,0,'<p>VRADAR 9600</p>','2019-02-14 16:58:44','2019-02-18 16:56:37',NULL),(65,'C. Araguaia','C. Araguaia - PA','ASR23R','Telesat/Embratel','ASTERIX','C5','PRI/SEC',50213,50413,0,0,'<p>VRADAR 9600</p>','2019-02-14 17:03:15','2019-02-18 16:56:48',NULL),(66,'S.F. Araguaia','S.F. Araguaia - MT','MSSR','Telesat/Embratel','ASTERIX','CE','SEC',50214,50414,0,0,'<p>VRADAR 9600</p>','2019-02-14 17:29:50','2019-02-18 16:57:02',NULL),(67,'Couto','Petrópolis - RJ','LP23+RSM970','Telesat/Embratel','ASTERIX','9C','PRI/SEC',50231,50431,0,0,'<p>VRADAR 19200</p>','2019-02-14 17:33:38','2019-02-18 16:57:10',NULL),(68,'Teresina','Teresina - PI','LP23+RSM970','Embratel/Embratel','ASTERIX','97','PRI/SEC',50232,50432,0,0,'<p>VRADAR 9600</p>','2019-02-14 17:35:18','2019-02-18 16:57:41',NULL),(69,'Palmas','Palmas - TO','LP23+RSM970','Telesat/Embratel','ASTERIX','96','PRI/SEC',50233,50433,0,0,'<p>VRADAR 19200</p>','2019-02-14 17:36:34','2019-02-18 16:57:48',NULL),(70,'Vitoria','Vitoria - ES','RSM970','Embratel/Embratel','ASTERIX','91','SEC',50221,50421,0,0,'<p>VRADAR 19200</p>','2019-02-14 17:39:29','2019-02-18 16:57:55',NULL);
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
/*!50003 CREATE*/ /*!50017 DEFINER=`sistiop`@`%`*/ /*!50003 TRIGGER `sistiop`.`radares_AFTER_INSERT` AFTER INSERT ON `radares` FOR EACH ROW
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rpl`
--

LOCK TABLES `rpl` WRITE;
/*!40000 ALTER TABLE `rpl` DISABLE KEYS */;
INSERT INTO `rpl` VALUES (1,1,'RPL072','2019-01-31','2019-02-08','2018-10-16 12:31:36','2019-01-31 13:07:55',NULL);
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
  `descricao` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemas`
--

LOCK TABLES `sistemas` WRITE;
/*!40000 ALTER TABLE `sistemas` DISABLE KEYS */;
INSERT INTO `sistemas` VALUES (38,'SAGITARIO','2.3.1.52_MST','2018-09-19','<p>SAGITARIO&nbsp; ACC/APP</p>','2018-09-19 11:40:12','2018-09-19 11:52:18'),(39,'SAGITARIO','2.3.1.52','2018-09-19','<p>SAGITARIO ACC/APP</p>','2018-09-19 11:41:06','2018-09-19 11:51:31'),(40,'DA/COM','4.6.6','2018-03-03','<p>COPM DA/COM</p>','2018-09-19 11:41:37','2018-09-19 11:41:37'),(42,'SAGITARIO','2.3.1.52_MST_1.0.0.5','2019-02-05','<p>SAGITARIO ACC-RE</p>','2018-12-27 19:48:11','2019-02-07 14:32:36');
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
INSERT INTO `sistemas_centros` VALUES (1,42,38,1,'2018-09-19 11:56:49','2018-12-27 19:48:40',NULL),(2,39,40,1,'2018-09-19 11:57:03','2018-09-19 11:57:03',NULL),(3,38,39,1,'2018-09-19 11:57:19','2018-09-19 11:57:19',NULL),(4,40,41,1,'2018-09-19 11:57:57','2018-09-19 11:57:57',NULL);
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
INSERT INTO `status_radar` VALUES (47,'ope','ope','2019-02-14 12:11:40','2019-02-14 12:11:40'),(48,'ope','ope','2019-02-14 12:27:22','2019-02-14 12:27:22'),(49,'ope','ope','2019-02-14 12:28:52','2019-02-14 12:28:52'),(50,'ope','ope','2019-02-14 12:29:47','2019-02-14 12:29:47'),(51,'ope','ope','2019-02-14 12:31:39','2019-02-14 12:31:39'),(52,'ope','ope','2019-02-14 13:06:23','2019-02-14 13:06:23'),(53,'ope','ope','2019-02-14 13:30:44','2019-02-14 13:30:44'),(54,'ope','ope','2019-02-14 13:32:42','2019-02-14 13:32:42'),(55,'ope','ope','2019-02-14 13:38:13','2019-02-14 13:38:13'),(56,'ope','ope','2019-02-14 13:44:13','2019-02-14 13:44:13'),(57,'ope','ope','2019-02-14 13:45:23','2019-02-14 13:45:23'),(58,'ope','ope','2019-02-14 13:50:04','2019-02-14 13:50:04'),(59,'ope','ope','2019-02-14 13:54:25','2019-02-14 13:54:25'),(60,'ope','ope','2019-02-14 16:29:03','2019-02-14 16:29:03'),(61,'ope','ope','2019-02-14 16:34:04','2019-02-14 16:34:04'),(62,'ope','ope','2019-02-14 16:45:56','2019-02-14 16:45:56'),(63,'ope','ope','2019-02-14 16:48:08','2019-02-14 16:48:08'),(64,'ope','ope','2019-02-14 16:52:27','2019-02-14 16:52:27'),(65,'ope','ope','2019-02-14 16:56:58','2019-02-14 16:56:58'),(66,'ope','ope','2019-02-14 17:23:34','2019-02-14 17:23:34'),(67,'ope','ope','2019-02-14 17:27:22','2019-02-14 17:27:22'),(68,'ope','ope','2019-02-14 17:29:01','2019-02-14 17:29:01'),(69,'ope','ope','2019-02-14 17:30:18','2019-02-14 17:30:18'),(70,'ope','ope','2019-02-14 17:33:12','2019-02-14 17:33:12');
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

-- Dump completed on 2019-04-09 15:23:00
