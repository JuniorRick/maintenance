-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: voyage
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `cartridges`
--

DROP TABLE IF EXISTS `cartridges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cartridges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `barcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(3) unsigned DEFAULT NULL,
  `reg_state` tinyint(3) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `office` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cartridges`
--

LOCK TABLES `cartridges` WRITE;
/*!40000 ALTER TABLE `cartridges` DISABLE KEYS */;
INSERT INTO `cartridges` VALUES (11,'br12','asdgasd',2,2,'2017-12-14 08:08:32','2017-12-20 10:37:34',NULL),(12,'asdg','asdg',1,2,'2017-12-14 08:08:40','2017-12-20 10:35:44','asdg'),(19,'ba2323','aswedgadsf',1,NULL,'2017-12-15 05:57:38','2017-12-20 10:40:38',NULL),(20,'asdgasd','asdgasdg',1,2,'2018-02-02 05:55:00','2018-02-02 05:55:00',NULL),(21,'asdgasd','asdgasdg',1,2,'2018-02-02 05:55:01','2018-02-02 05:55:01',NULL),(22,'asdgasd','asdgasdg',1,2,'2018-02-02 05:55:01','2018-02-02 05:55:01',NULL),(23,'asdgasd','asdgasdg',1,2,'2018-02-02 05:55:01','2018-02-02 05:55:01',NULL),(24,'asdgasdg','asdgasdgasd',1,2,'2018-02-02 05:55:07','2018-02-02 05:55:07',NULL),(25,'asdgasdg','asdgasdgasd',1,2,'2018-02-02 05:55:08','2018-02-02 05:55:08',NULL),(26,'asdgasdg','sdgasdgasd',NULL,2,'2018-02-02 05:55:15','2018-02-02 05:55:15','asdg'),(27,'asdgasdg','sdgasdgasd',NULL,2,'2018-02-02 05:55:15','2018-02-02 05:55:15','asdg'),(28,'124124','asd',1,2,'2018-02-02 05:55:38','2018-02-02 05:55:38',NULL),(29,'124124','asd',1,2,'2018-02-02 05:55:39','2018-02-02 05:55:39',NULL),(30,'232','asdhadfgha',1,2,'2018-02-02 05:55:47','2018-02-02 05:55:47','asdgasd'),(31,'232','asdhadfgha',1,2,'2018-02-02 05:55:47','2018-02-02 05:55:47','asdgasd'),(32,'235235','23523523',2,2,'2018-02-02 05:55:53','2018-02-02 05:55:53','asdgasdga'),(33,'235235','23523523',2,2,'2018-02-02 05:55:54','2018-02-02 05:55:54','asdgasdga'),(34,'23523','adgasdg',2,2,'2018-02-02 05:56:03','2018-02-02 05:56:03','213'),(35,'23523','adgasdg',2,2,'2018-02-02 05:56:03','2018-02-02 05:56:03','213'),(36,'23523','afhsdfh',NULL,2,'2018-02-02 05:56:12','2018-02-02 05:56:12','23234'),(37,'23523','afhsdfh',NULL,2,'2018-02-02 05:56:12','2018-02-02 05:56:12','23234'),(38,'sdfghasd','sadgasdg',2,2,'2018-02-02 06:28:32','2018-02-02 06:28:32','12324'),(39,'adfasd','fsadgasdg',2,2,'2018-02-02 06:29:04','2018-02-02 06:29:04','121'),(40,'adfasd','fsadgasdg',2,2,'2018-02-02 06:29:04','2018-02-02 06:29:04','121'),(41,'adfasd','fsadgasdg',2,2,'2018-02-02 06:29:04','2018-02-02 06:29:04','121'),(42,'2135123','123512',1,2,'2018-02-02 06:35:19','2018-02-02 06:35:19','123'),(43,'sdgf','q23asgasdg',2,NULL,'2018-02-02 06:35:37','2018-02-02 06:35:37','123'),(44,'12412','124124',2,2,'2018-02-02 06:35:55','2018-02-02 06:35:55','1234');
/*!40000 ALTER TABLE `cartridges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2017-10-04 09:22:50','2017-10-04 09:22:50'),(2,NULL,1,'Category 2','category-2','2017-10-04 09:22:50','2017-10-04 09:22:50');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'author_id','text','Author',1,0,1,1,0,1,'',2),(3,1,'category_id','text','Category',1,0,1,1,1,0,'',3),(4,1,'title','text','Title',1,1,1,1,1,1,'',4),(5,1,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',5),(6,1,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(7,1,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(8,1,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',8),(9,1,'meta_description','text_area','meta_description',1,0,1,1,1,1,'',9),(10,1,'meta_keywords','text_area','meta_keywords',1,0,1,1,1,1,'',10),(11,1,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(12,1,'created_at','timestamp','created_at',0,1,1,0,0,0,'',12),(13,1,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',13),(14,2,'id','number','id',1,0,0,0,0,0,'',1),(15,2,'author_id','text','author_id',1,0,0,0,0,0,'',2),(16,2,'title','text','title',1,1,1,1,1,1,'',3),(17,2,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',4),(18,2,'body','rich_text_box','body',1,0,1,1,1,1,'',5),(19,2,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"}}',6),(20,2,'meta_description','text','meta_description',1,0,1,1,1,1,'',7),(21,2,'meta_keywords','text','meta_keywords',1,0,1,1,1,1,'',8),(22,2,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(23,2,'created_at','timestamp','created_at',1,1,1,0,0,0,'',10),(24,2,'updated_at','timestamp','updated_at',1,0,0,0,0,0,'',11),(25,2,'image','image','image',0,1,1,1,1,1,'',12),(26,3,'id','number','id',1,0,0,0,0,0,'',1),(27,3,'name','text','name',1,1,1,1,1,1,'',2),(28,3,'email','text','email',1,1,1,1,1,1,'',3),(29,3,'password','password','password',0,0,0,1,1,0,'',4),(30,3,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}',10),(31,3,'remember_token','text','remember_token',0,0,0,0,0,0,'',5),(32,3,'created_at','timestamp','created_at',0,1,1,0,0,0,'',6),(33,3,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(34,3,'avatar','image','avatar',0,1,1,1,1,1,'',8),(35,5,'id','number','id',1,0,0,0,0,0,'',1),(36,5,'name','text','name',1,1,1,1,1,1,'',2),(37,5,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(38,5,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(39,4,'id','number','id',1,0,0,0,0,0,'',1),(40,4,'parent_id','select_dropdown','parent_id',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(41,4,'order','text','order',1,1,1,1,1,1,'{\"default\":1}',3),(42,4,'name','text','name',1,1,1,1,1,1,'',4),(43,4,'slug','text','slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(44,4,'created_at','timestamp','created_at',0,0,1,0,0,0,'',6),(45,4,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(46,6,'id','number','id',1,0,0,0,0,0,'',1),(47,6,'name','text','Name',1,1,1,1,1,1,'',2),(48,6,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(49,6,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(50,6,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(51,1,'seo_title','text','seo_title',0,1,1,1,1,1,'',14),(52,1,'featured','checkbox','featured',1,1,1,1,1,1,'',15),(53,3,'role_id','text','role_id',1,1,1,1,1,1,'',9),(54,7,'id','hidden','Id',1,0,0,0,0,0,NULL,1),(55,7,'model','text','Model',1,1,1,1,1,1,NULL,2),(56,7,'quantity','number','Quantity',1,1,1,1,1,1,NULL,3),(57,7,'procure_date','date','Procure Date',1,1,1,1,1,1,NULL,4),(58,7,'price','number','Price',0,1,1,1,1,1,NULL,5),(59,7,'company','text','Company',0,1,1,1,1,1,NULL,6),(60,7,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,7),(61,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,8),(62,8,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(63,8,'barcode','text','Barcode',1,1,1,1,1,1,NULL,2),(64,8,'model','text','Model',1,1,1,1,1,1,NULL,3),(65,8,'type','text','Type',0,1,1,1,1,1,NULL,4),(66,8,'reg_state','text','Reg State',0,1,1,1,1,1,NULL,5),(67,8,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,6),(68,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(69,7,'is_active','text','Is Active',1,1,1,1,1,1,NULL,9),(70,8,'office','text','Office',0,1,1,1,1,1,NULL,8),(71,10,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(72,10,'cartridge_id','checkbox','Cartridge Id',1,1,1,1,1,1,NULL,2),(73,10,'toner_id','checkbox','Toner Id',0,1,1,1,1,1,NULL,3),(74,10,'toner_quantity','checkbox','Toner Quantity',0,1,1,1,1,1,NULL,4),(75,10,'opc','checkbox','Opc',0,1,1,1,1,1,NULL,5),(76,10,'pcr','checkbox','Pcr',0,1,1,1,1,1,NULL,6),(77,10,'magnetic_wave','checkbox','Magnetic Wave',0,1,1,1,1,1,NULL,7),(78,10,'cleaning_blade','checkbox','Cleaning Blade',0,1,1,1,1,1,NULL,8),(79,10,'dr_cleaning_blade','checkbox','Dr Cleaning Blade',0,1,1,1,1,1,NULL,9),(80,10,'chip','checkbox','Chip',0,1,1,1,1,1,NULL,10),(81,10,'description','checkbox','Description',0,1,1,1,1,1,NULL,11),(82,10,'user_id','checkbox','User Id',1,1,1,1,1,1,NULL,12),(83,10,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,13),(84,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,14),(85,11,'id','text','Id',1,0,0,0,0,0,NULL,1),(86,11,'cartridge_id','text','Cartridge Id',1,1,1,1,1,1,NULL,2),(87,11,'toner_id','text','Toner Id',0,1,1,1,1,1,NULL,3),(88,11,'toner_quantity','text','Toner Quantity',0,1,1,1,1,1,NULL,4),(89,11,'opc','checkbox','Opc',0,1,1,1,1,1,NULL,5),(90,11,'pcr','checkbox','Pcr',0,1,1,1,1,1,NULL,6),(91,11,'magnetic_wave','checkbox','Magnetic Wave',0,1,1,1,1,1,NULL,7),(92,11,'cleaning_blade','checkbox','Cleaning Blade',0,1,1,1,1,1,NULL,8),(93,11,'dr_cleaning_blade','checkbox','Dr Cleaning Blade',0,1,1,1,1,1,NULL,9),(94,11,'chip','checkbox','Chip',0,1,1,1,1,1,NULL,10),(95,11,'description','markdown_editor','Description',0,1,1,1,1,1,NULL,11),(96,11,'user_id','text','User Id',1,1,1,1,1,1,NULL,12),(97,11,'created_at','timestamp','Created At',0,1,1,1,0,1,NULL,13),(98,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,14),(99,7,'quantity_remained','text','Quantity Remained',1,1,1,1,1,1,NULL,10),(100,8,'clean_counter','number','Clean Counter',0,1,1,1,1,1,NULL,9);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,'2017-10-04 09:21:31','2017-10-04 09:21:31'),(2,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,'2017-10-04 09:21:31','2017-10-04 09:21:31'),(3,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,'2017-10-04 09:21:31','2017-10-04 09:21:31'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,'2017-10-04 09:21:31','2017-10-04 09:21:31'),(5,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,'2017-10-04 09:21:31','2017-10-04 09:21:31'),(6,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,'2017-10-04 09:21:31','2017-10-04 09:21:31'),(7,'toners','toners','Toner','Toners',NULL,'App\\Toner',NULL,NULL,NULL,1,0,'2017-10-12 05:45:01','2017-10-12 05:45:01'),(8,'cartridges','cartridges','Cartridge','Cartridges',NULL,'App\\Cartridge',NULL,NULL,NULL,1,0,'2017-11-02 07:00:13','2017-11-02 07:00:13'),(10,'management','management','Management','Managements',NULL,'App\\Management',NULL,NULL,NULL,1,0,'2017-11-06 06:15:17','2017-11-06 06:15:17'),(11,'managements','managements','Management','Managements',NULL,'App\\Management',NULL,NULL,NULL,1,0,'2017-11-06 06:16:41','2017-11-06 06:16:41');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managements`
--

DROP TABLE IF EXISTS `managements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cartridge_id` int(10) unsigned NOT NULL,
  `toner_id` int(11) DEFAULT NULL,
  `toner_quantity` int(11) DEFAULT NULL,
  `opc` tinyint(4) DEFAULT NULL,
  `pcr` tinyint(4) DEFAULT NULL,
  `magnetic_wave` tinyint(4) DEFAULT NULL,
  `cleaning_blade` tinyint(4) DEFAULT NULL,
  `dr_cleaning_blade` tinyint(4) DEFAULT NULL,
  `chip` tinyint(4) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `old_toner_quantity` int(11) DEFAULT NULL,
  `cleaned` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managements`
--

LOCK TABLES `managements` WRITE;
/*!40000 ALTER TABLE `managements` DISABLE KEYS */;
INSERT INTO `managements` VALUES (29,10,6,449,0,0,1,1,0,0,'@**if**(App\\Management::**where**(\'cartridge_id\', $cartridge->id)->**get**()->**count**() > 0)',1,'2017-12-05 05:18:17','2017-12-05 06:05:39',449,0),(32,4,6,4545,0,0,0,0,0,0,NULL,1,'2017-12-05 06:26:14','2017-12-05 07:07:12',4545,0),(41,4,6,100,0,0,1,1,1,0,NULL,1,'2017-12-05 06:58:44','2017-12-05 07:07:08',100,0),(42,4,6,103,0,0,1,0,1,0,NULL,1,'2017-12-05 07:01:27','2017-12-06 06:59:36',103,0),(43,5,1,2222,0,0,0,1,0,0,'asdgadfghasdf hadfh adfh adfh',1,'2017-12-14 07:53:19','2017-12-14 07:53:25',2222,0),(44,16,2,22222,0,0,1,0,0,0,'asdgasdfhg adfh adfh asdfh dfh',1,'2017-12-15 05:42:16','2017-12-15 05:43:59',22222,0),(47,11,3,150,0,0,0,0,0,0,NULL,1,'2017-12-15 09:55:56','2017-12-15 09:55:56',NULL,0),(48,11,3,150,0,0,0,0,0,0,NULL,1,'2017-12-15 09:55:57','2017-12-15 09:55:57',NULL,0),(49,11,3,150,0,0,0,0,0,0,NULL,1,'2017-12-15 09:57:08','2017-12-15 09:57:08',NULL,0),(51,12,1,200000,0,0,0,0,0,0,NULL,1,'2017-12-18 04:55:32','2017-12-18 04:55:32',NULL,0),(52,12,1,869,0,0,0,0,0,0,NULL,1,'2017-12-18 05:02:55','2017-12-18 05:02:55',NULL,0),(63,11,1,NULL,0,0,0,0,0,0,NULL,1,'2017-12-21 07:04:57','2017-12-21 07:05:17',NULL,1),(64,11,1,NULL,0,0,0,0,0,0,NULL,1,'2017-12-21 07:05:05','2017-12-21 07:05:05',NULL,0),(65,19,1,NULL,0,0,0,0,0,0,NULL,1,'2017-12-21 07:17:56','2017-12-21 07:17:56',NULL,1),(66,44,3,100,0,0,1,0,1,0,'testingh',2,'2018-03-15 08:36:22','2018-03-15 08:36:22',NULL,1);
/*!40000 ALTER TABLE `managements` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`estinca`@`localhost`*/ /*!50003 TRIGGER UPDATE_TONER BEFORE UPDATE ON managements
FOR EACH ROW
BEGIN
  IF NEW.toner_id != OLD.toner_id THEN
    UPDATE toners SET quantity_remained = quantity_remained + OLD.toner_quantity
    WHERE id = OLD.toner_id;
    UPDATE toners SET quantity_remained = quantity_remained - NEW.toner_quantity
    WHERE id = NEW.toner_id; 
  END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2017-10-04 09:21:33','2017-10-04 09:21:33','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,4,'2017-10-04 09:21:33','2017-12-01 05:35:48','voyager.media.index',NULL),(3,1,'Toners','/toners','_self','voyager-news','#000000',NULL,5,'2017-10-04 09:21:33','2017-12-01 05:36:56',NULL,''),(4,1,'Users','','_self','voyager-person',NULL,NULL,3,'2017-10-04 09:21:33','2017-12-01 05:35:48','voyager.users.index',NULL),(5,1,'Categories','','_self','voyager-categories',NULL,NULL,7,'2017-10-04 09:21:33','2017-10-12 05:04:09','voyager.categories.index',NULL),(6,1,'Pages','/cartridges','_self','voyager-file-text','#000000',NULL,6,'2017-10-04 09:21:33','2017-12-01 05:37:36',NULL,''),(7,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2017-10-04 09:21:34','2017-10-04 09:21:34','voyager.roles.index',NULL),(8,1,'Tools','','_self','voyager-tools',NULL,NULL,8,'2017-10-04 09:21:34','2017-10-12 05:04:09',NULL,NULL),(9,1,'Menu Builder','','_self','voyager-list',NULL,8,1,'2017-10-04 09:21:34','2017-10-12 05:04:09','voyager.menus.index',NULL),(10,1,'Database','','_self','voyager-data',NULL,8,2,'2017-10-04 09:21:34','2017-10-12 05:04:09','voyager.database.index',NULL),(11,1,'Compass','/admin/compass','_self','voyager-compass',NULL,8,3,'2017-10-04 09:21:34','2017-10-12 05:04:09',NULL,NULL),(12,1,'Hooks','/admin/hooks','_self','voyager-hook',NULL,8,4,'2017-10-04 09:21:34','2017-10-12 05:04:09',NULL,NULL),(13,1,'Settings','','_self','voyager-settings',NULL,NULL,9,'2017-10-04 09:21:34','2017-10-12 05:04:09','voyager.settings.index',NULL),(14,2,'Toners','/toners','_self','voyager-paint-bucket','#2e9cd1',NULL,2,'2017-11-01 06:45:50','2017-12-01 06:23:44',NULL,''),(15,2,'Cartridges','/cartridges','_self','voyager-paw','#2784c9',NULL,3,'2017-11-01 10:30:08','2017-12-01 06:23:44',NULL,''),(16,2,'Home','/','_self',NULL,'#ffffff',NULL,1,'2017-12-01 06:23:40','2017-12-14 08:41:17',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2017-10-04 09:21:33','2017-10-04 09:21:33'),(2,'Cartridges','2017-11-01 06:42:48','2017-11-01 06:42:48');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_01_01_000000_create_pages_table',1),(6,'2016_01_01_000000_create_posts_table',1),(7,'2016_02_15_204651_create_categories_table',1),(8,'2016_05_19_173453_create_menu_table',1),(9,'2016_10_21_190000_create_roles_table',1),(10,'2016_10_21_190000_create_settings_table',1),(11,'2016_11_30_135954_create_permission_table',1),(12,'2016_11_30_141208_create_permission_role_table',1),(13,'2016_12_26_201236_data_types__add__server_side',1),(14,'2017_01_13_000000_add_route_to_menu_items_table',1),(15,'2017_01_14_005015_create_translations_table',1),(16,'2017_01_15_000000_add_permission_group_id_to_permissions_table',1),(17,'2017_01_15_000000_create_permission_groups_table',1),(18,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(19,'2017_03_06_000000_add_controller_to_data_types_table',1),(20,'2017_04_11_000000_alter_post_nullable_fields_table',1),(21,'2017_04_21_000000_add_order_to_data_rows_table',1),(22,'2017_07_05_210000_add_policyname_to_data_types_table',1),(23,'2017_08_05_000000_add_group_to_settings_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,1,'Toners','Add,Edit, Remove toners',NULL,'pages/page1.jpg','/toners','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2017-10-04 09:22:50','2017-12-01 04:32:36');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_groups`
--

LOCK TABLES `permission_groups` WRITE;
/*!40000 ALTER TABLE `permission_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(10,2),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(40,2),(41,1),(41,2),(42,1),(42,2),(43,1),(43,2),(44,1),(44,2),(45,1),(45,2),(46,1),(46,2),(47,1),(47,2),(48,1),(48,2),(49,1),(49,2),(50,1),(50,2),(51,1),(51,2),(52,1),(52,2),(53,1),(53,2),(54,1),(54,2),(55,1),(55,2),(56,1),(56,2),(57,1),(57,2),(58,1),(58,2),(59,1),(59,2);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(2,'browse_database',NULL,'2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(3,'browse_media',NULL,'2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(4,'browse_compass',NULL,'2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(5,'browse_menus','menus','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(6,'read_menus','menus','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(7,'edit_menus','menus','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(8,'add_menus','menus','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(9,'delete_menus','menus','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(10,'browse_pages','pages','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(11,'read_pages','pages','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(12,'edit_pages','pages','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(13,'add_pages','pages','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(14,'delete_pages','pages','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(15,'browse_roles','roles','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(16,'read_roles','roles','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(17,'edit_roles','roles','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(18,'add_roles','roles','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(19,'delete_roles','roles','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(20,'browse_users','users','2017-10-04 09:21:34','2017-10-04 09:21:34',NULL),(21,'read_users','users','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(22,'edit_users','users','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(23,'add_users','users','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(24,'delete_users','users','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(25,'browse_posts','posts','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(26,'read_posts','posts','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(27,'edit_posts','posts','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(28,'add_posts','posts','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(29,'delete_posts','posts','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(30,'browse_categories','categories','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(31,'read_categories','categories','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(32,'edit_categories','categories','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(33,'add_categories','categories','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(34,'delete_categories','categories','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(35,'browse_settings','settings','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(36,'read_settings','settings','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(37,'edit_settings','settings','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(38,'add_settings','settings','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(39,'delete_settings','settings','2017-10-04 09:21:35','2017-10-04 09:21:35',NULL),(40,'browse_toners','toners','2017-10-12 05:45:01','2017-10-12 05:45:01',NULL),(41,'read_toners','toners','2017-10-12 05:45:01','2017-10-12 05:45:01',NULL),(42,'edit_toners','toners','2017-10-12 05:45:01','2017-10-12 05:45:01',NULL),(43,'add_toners','toners','2017-10-12 05:45:01','2017-10-12 05:45:01',NULL),(44,'delete_toners','toners','2017-10-12 05:45:01','2017-10-12 05:45:01',NULL),(45,'browse_cartridges','cartridges','2017-11-02 07:00:14','2017-11-02 07:00:14',NULL),(46,'read_cartridges','cartridges','2017-11-02 07:00:14','2017-11-02 07:00:14',NULL),(47,'edit_cartridges','cartridges','2017-11-02 07:00:14','2017-11-02 07:00:14',NULL),(48,'add_cartridges','cartridges','2017-11-02 07:00:14','2017-11-02 07:00:14',NULL),(49,'delete_cartridges','cartridges','2017-11-02 07:00:14','2017-11-02 07:00:14',NULL),(50,'browse_management','management','2017-11-06 06:15:17','2017-11-06 06:15:17',NULL),(51,'read_management','management','2017-11-06 06:15:17','2017-11-06 06:15:17',NULL),(52,'edit_management','management','2017-11-06 06:15:17','2017-11-06 06:15:17',NULL),(53,'add_management','management','2017-11-06 06:15:17','2017-11-06 06:15:17',NULL),(54,'delete_management','management','2017-11-06 06:15:17','2017-11-06 06:15:17',NULL),(55,'browse_managements','managements','2017-11-06 06:16:41','2017-11-06 06:16:41',NULL),(56,'read_managements','managements','2017-11-06 06:16:41','2017-11-06 06:16:41',NULL),(57,'edit_managements','managements','2017-11-06 06:16:41','2017-11-06 06:16:41',NULL),(58,'add_managements','managements','2017-11-06 06:16:41','2017-11-06 06:16:41',NULL),(59,'delete_managements','managements','2017-11-06 06:16:41','2017-11-06 06:16:41',NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-10-04 09:22:50','2017-10-04 09:22:50'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-10-04 09:22:50','2017-10-04 09:22:50'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-10-04 09:22:50','2017-10-04 09:22:50'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-10-04 09:22:50','2017-10-04 09:22:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2017-10-04 09:21:34','2017-10-04 09:21:34'),(2,'user','Normal User','2017-10-04 09:21:34','2017-10-04 09:21:34');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Cartridge manager','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','settings/October2017/oo.jpg','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toners`
--

DROP TABLE IF EXISTS `toners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `procure_date` date NOT NULL,
  `price` int(10) DEFAULT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity_remained` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toners`
--

LOCK TABLES `toners` WRITE;
/*!40000 ALTER TABLE `toners` DISABLE KEYS */;
INSERT INTO `toners` VALUES (1,'asdgasd',232424,'2017-12-14',NULL,NULL,1,'2017-12-14 07:52:58','2017-12-21 06:33:16',27111),(2,'asdgasd',245253,'2017-12-21',NULL,NULL,1,'2017-12-14 07:52:58','2017-12-15 05:43:59',200809),(3,'aswedgadsf',255,'2017-12-15',NULL,NULL,1,'2017-12-14 07:52:58','2018-03-15 08:36:22',400),(4,'hcgcvg',255,'2017-12-15',NULL,NULL,1,'2017-12-14 07:52:58','2018-01-09 11:38:51',555),(5,'aswedgadsf',245253,'2017-12-15',NULL,NULL,1,'2017-12-15 05:53:37','2017-12-15 05:53:37',245253),(6,'adfhadfh',200,'2018-02-21',100,NULL,1,'2018-02-21 06:32:09','2018-02-21 06:32:09',200);
/*!40000 ALTER TABLE `toners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',1,'pt','Post','2017-10-04 09:22:51','2017-10-04 09:22:51'),(2,'data_types','display_name_singular',2,'pt','Página','2017-10-04 09:22:51','2017-10-04 09:22:51'),(3,'data_types','display_name_singular',3,'pt','Utilizador','2017-10-04 09:22:51','2017-10-04 09:22:51'),(4,'data_types','display_name_singular',4,'pt','Categoria','2017-10-04 09:22:51','2017-10-04 09:22:51'),(5,'data_types','display_name_singular',5,'pt','Menu','2017-10-04 09:22:51','2017-10-04 09:22:51'),(6,'data_types','display_name_singular',6,'pt','Função','2017-10-04 09:22:51','2017-10-04 09:22:51'),(7,'data_types','display_name_plural',1,'pt','Posts','2017-10-04 09:22:51','2017-10-04 09:22:51'),(8,'data_types','display_name_plural',2,'pt','Páginas','2017-10-04 09:22:51','2017-10-04 09:22:51'),(9,'data_types','display_name_plural',3,'pt','Utilizadores','2017-10-04 09:22:51','2017-10-04 09:22:51'),(10,'data_types','display_name_plural',4,'pt','Categorias','2017-10-04 09:22:51','2017-10-04 09:22:51'),(11,'data_types','display_name_plural',5,'pt','Menus','2017-10-04 09:22:51','2017-10-04 09:22:51'),(12,'data_types','display_name_plural',6,'pt','Funções','2017-10-04 09:22:51','2017-10-04 09:22:51'),(13,'categories','slug',1,'pt','categoria-1','2017-10-04 09:22:51','2017-10-04 09:22:51'),(14,'categories','name',1,'pt','Categoria 1','2017-10-04 09:22:51','2017-10-04 09:22:51'),(15,'categories','slug',2,'pt','categoria-2','2017-10-04 09:22:51','2017-10-04 09:22:51'),(16,'categories','name',2,'pt','Categoria 2','2017-10-04 09:22:51','2017-10-04 09:22:51'),(17,'pages','title',1,'pt','Olá Mundo','2017-10-04 09:22:51','2017-10-04 09:22:51'),(18,'pages','slug',1,'pt','ola-mundo','2017-10-04 09:22:51','2017-10-04 09:22:51'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2017-10-04 09:22:51','2017-10-04 09:22:51'),(20,'menu_items','title',1,'pt','Painel de Controle','2017-10-04 09:22:51','2017-10-04 09:22:51'),(21,'menu_items','title',2,'pt','Media','2017-10-04 09:22:51','2017-10-04 09:22:51'),(22,'menu_items','title',3,'pt','Publicações','2017-10-04 09:22:51','2017-10-04 09:22:51'),(23,'menu_items','title',4,'pt','Utilizadores','2017-10-04 09:22:51','2017-10-04 09:22:51'),(24,'menu_items','title',5,'pt','Categorias','2017-10-04 09:22:51','2017-10-04 09:22:51'),(25,'menu_items','title',6,'pt','Páginas','2017-10-04 09:22:51','2017-10-04 09:22:51'),(26,'menu_items','title',7,'pt','Funções','2017-10-04 09:22:52','2017-10-04 09:22:52'),(27,'menu_items','title',8,'pt','Ferramentas','2017-10-04 09:22:52','2017-10-04 09:22:52'),(28,'menu_items','title',9,'pt','Menus','2017-10-04 09:22:52','2017-10-04 09:22:52'),(29,'menu_items','title',10,'pt','Base de dados','2017-10-04 09:22:52','2017-10-04 09:22:52'),(30,'menu_items','title',13,'pt','Configurações','2017-10-04 09:22:52','2017-10-04 09:22:52');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png','$2y$10$vNewrQ/51jbv9662nnkuVOJgG9NiqDHPQ5Qz.QnjnLM1BArt6Ca7C','K8n8LddgpgxuNYVl3smqNKzc9Eq04xmHHIk31JaDqLR3DalxO8LwFIALqoO9','2017-10-04 09:22:50','2017-10-04 09:22:50'),(2,2,'User','user@user.com','users/October2017/index1.jpg','$2y$10$6jY2Z.UVITPYQs/DyPvk6eDohPltZ/fmXd/N7ZJ4D96A8TGSx.yR2','GzSrO1YF3cVdQqKMhwEhLOKpMJWkkPvnZl3FNcSTrCVegGyfrSmFCxcm2XLL','2017-10-12 05:09:33','2017-10-12 05:18:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-19  9:02:40
