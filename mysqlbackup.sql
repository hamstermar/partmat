-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: partmat
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.13.10.1

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
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (259,'الدار',NULL,NULL),(260,'البيضاء',NULL,NULL),(261,'فاس',NULL,NULL),(262,'مراكش',NULL,NULL),(263,'أكادير',NULL,NULL),(264,'طنجة',NULL,NULL),(265,'مكناس',NULL,NULL),(266,'وجدة',NULL,NULL),(267,'القنيطرة',NULL,NULL),(268,'تطوان',NULL,NULL),(269,'آسفي',NULL,NULL),(270,'تمارة',NULL,NULL),(271,'المحمدية',NULL,NULL),(272,'العيون',NULL,NULL),(273,'خريبكة',NULL,NULL),(274,'بني',NULL,NULL),(275,'ملال',NULL,NULL),(276,'الجديدة',NULL,NULL),(277,'تازة',NULL,NULL),(278,'الناظور',NULL,NULL),(279,'سطات',NULL,NULL),(280,'القصر',NULL,NULL),(281,'الكبير',NULL,NULL),(282,'العرائش',NULL,NULL),(283,'الخميسات',NULL,NULL),(284,'تزنيت',NULL,NULL),(285,'كلميم',NULL,NULL),(286,'برشيد',NULL,NULL),(287,'وادي',NULL,NULL),(288,'زم',NULL,NULL),(289,'الفقيه',NULL,NULL),(290,'بنصالح',NULL,NULL),(291,'تاوريرت',NULL,NULL),(292,'بركان',NULL,NULL),(293,'سيدي',NULL,NULL),(294,'سليمان',NULL,NULL),(295,'الراشيدية',NULL,NULL),(296,'سيدي',NULL,NULL),(297,'قاسم',NULL,NULL),(298,'خنيفرة',NULL,NULL),(299,'الداخلة',NULL,NULL),(300,'تيفلت',NULL,NULL),(301,'الصويرة',NULL,NULL),(302,'تارودانت',NULL,NULL),(303,'قلعة',NULL,NULL),(304,'السراغنة',NULL,NULL),(305,'اولاد',NULL,NULL),(306,'التايمة',NULL,NULL),(307,'اليوسفية',NULL,NULL),(308,'صفرو',NULL,NULL),(309,'بنجرير',NULL,NULL),(310,'طانطان',NULL,NULL),(311,'وزان',NULL,NULL),(312,'جرسيف',NULL,NULL),(313,'ورزازات',NULL,NULL),(314,'الحسيمة',NULL,NULL),(315,'الفنيدق',NULL,NULL),(316,'جرادة',NULL,NULL),(317,'شفشاون',NULL,NULL),(318,'السمارة',NULL,NULL),(319,'بوجدور',NULL,NULL),(320,'زاكورة',NULL,NULL),(321,'تاهلة',NULL,NULL),(322,'سلا',NULL,NULL),(323,'الجديدة',NULL,NULL),(324,'بويزكارن',NULL,NULL),(325,'بومالن',NULL,NULL),(326,'دادس',NULL,NULL);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_08_12_000926_create_cities_table',1),('2016_08_14_003552_create_partmas_table',1),('2016_08_15_003702_create_tels_table',1),('2016_08_16_003650_create_pictures_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partmas`
--

DROP TABLE IF EXISTS `partmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partmas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `surface` decimal(8,2) NOT NULL,
  `typeP` int(11) NOT NULL,
  `addInfo` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partmas_city_id_foreign` (`city_id`),
  KEY `partmas_user_id_foreign` (`user_id`),
  CONSTRAINT `partmas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  CONSTRAINT `partmas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partmas`
--

LOCK TABLES `partmas` WRITE;
/*!40000 ALTER TABLE `partmas` DISABLE KEYS */;
INSERT INTO `partmas` VALUES (4,'124 gev','1',1000.00,265,1,11000.00,1,'','2016-08-31 22:27:27','2016-08-31 22:27:27'),(5,'124 gev','1',1000.00,265,1,11000.00,1,'','2016-08-31 22:29:19','2016-08-31 22:29:19'),(6,'124 gev','1',1000.00,265,1,11000.00,1,'','2016-08-31 22:30:50','2016-08-31 22:30:50'),(7,'124 gev','1',1000.00,265,1,11000.00,1,'','2016-08-31 22:31:39','2016-08-31 22:31:39'),(8,'124 gev','1',1000.00,265,1,11000.00,1,'','2016-08-31 22:34:46','2016-08-31 22:34:46');
/*!40000 ALTER TABLE `partmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pictures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namePic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `partma_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pictures_namepic_unique` (`namePic`),
  KEY `pictures_partma_id_foreign` (`partma_id`),
  CONSTRAINT `pictures_partma_id_foreign` FOREIGN KEY (`partma_id`) REFERENCES `partmas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tels`
--

DROP TABLE IF EXISTS `tels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tel_nb` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `partma_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tels_tel_nb_unique` (`tel_nb`),
  KEY `tels_partma_id_foreign` (`partma_id`),
  CONSTRAINT `tels_partma_id_foreign` FOREIGN KEY (`partma_id`) REFERENCES `partmas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tels`
--

LOCK TABLES `tels` WRITE;
/*!40000 ALTER TABLE `tels` DISABLE KEYS */;
INSERT INTO `tels` VALUES (3,'1020020',8,'2016-08-31 22:34:46','2016-08-31 22:34:46');
/*!40000 ALTER TABLE `tels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ayoub ','najieddine','hamstermar@gmail.com','$2y$10$9ILuLdlLF2vsvAgGhBgIhuN',NULL,'2016-08-31 20:17:44','2016-08-31 20:17:44');
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

-- Dump completed on 2016-09-01  0:56:23
