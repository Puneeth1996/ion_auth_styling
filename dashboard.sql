-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: dashboard
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'members','General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_menu`
--

DROP TABLE IF EXISTS `tbl_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `is_group` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_menu`
--

LOCK TABLES `tbl_menu` WRITE;
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
INSERT INTO `tbl_menu` VALUES (1,'STL-IGES','','monetization_on',1,0,1),(2,'Financials',' ','monetization_on ',1,1,1),(3,'Operations','','perm_data_setting',2,1,1),(4,'Samples','','photo_library',3,0,1),(5,'Financials','','monetization_on',0,4,1),(6,'Revenue Analysis','reportId=f8b99ca4-952f-428a-a290-14d70f08536b&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,5,0),(7,'Operations','','perm_data_setting',2,4,1),(8,'Currency Report','reportId=0b9cefed-fd4b-4913-9a45-50faeefc2da3&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,7,0),(9,'Others','','archive',3,1,1),(11,'Daily Finacial Report','reportId=3eb9ec29-8c8e-4e1c-8792-d392871ad820&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,2,0),(12,'Reported Finacials','reportId=63993ca7-bf97-4b35-a914-5dca87441d44&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',2,2,0),(13,'Daily Operations','reportId=fadf2268-1c0a-4316-8916-6aab72b3c79f&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,3,0),(14,'IDA','','dashboard',2,0,1),(16,'Financials','','monetization_on',1,14,1),(17,'Operations','','perm_data_setting',2,14,1),(18,'Others','','archive',2,14,1),(19,'Daily Finacial Report','reportId=0753d323-34b7-4384-8992-e012b7d1754f&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,16,0),(20,'Reported Financials','reportId=b3553363-414e-4160-ba81-3a549f8f7017&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',2,16,0),(21,'Daily Operations','reportId=fc3a1f97-2c6d-42b4-8a1b-57a95e0cb336&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,17,0),(22,'P&L','reportId=ff25be68-517c-47b3-a8a0-f0e0c9950296&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',1,5,0),(23,'Daily Analysis','reportId=f8b99ca4-952f-428a-a290-14d70f08536b&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',2,7,0),(24,'Daily Operations','reportId=eb1b4464-b04f-4626-a46a-edd4aa9a2de9&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',3,7,0),(25,'Volume Analysis','reportId=3e1084e5-e90a-4216-ac55-1bdc4ce3e49b&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6','',4,7,0);
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_fav`
--

DROP TABLE IF EXISTS `tbl_user_fav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_fav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `src` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_fav`
--

LOCK TABLES `tbl_user_fav` WRITE;
/*!40000 ALTER TABLE `tbl_user_fav` DISABLE KEYS */;
INSERT INTO `tbl_user_fav` VALUES (4,1,1,'https://app.powerbi.com/reportEmbed?reportId=63993ca7-bf97-4b35-a914-5dca87441d44&autoAuth=true&ctid=80fd8e84-9909-4dca-95b4-21b9178ef5d6');
/*!40000 ALTER TABLE `tbl_user_fav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'127.0.0.1','ravindra','$2y$12$WTS6Viv629H.8CLLo/XaVe8EM.iEFlHB5B90/DwcFVi/jS4AI4hre','ravindra@idanalytics.co.in',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1577772359,1,'Ravindra','Nag','IDA Automation Private Limited','0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,1),(2,1,2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-02  5:30:58
