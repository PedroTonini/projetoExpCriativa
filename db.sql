-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Table structure for table `avaliacao__funcs`
--

DROP TABLE IF EXISTS `avaliacao__funcs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacao__funcs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `opiEntrosamento` int(11) NOT NULL,
  `opiTexto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcionario_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `avaliacao__funcs_funcionario_id_foreign` (`funcionario_id`),
  CONSTRAINT `avaliacao__funcs_funcionario_id_foreign` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao__funcs`
--

LOCK TABLES `avaliacao__funcs` WRITE;
/*!40000 ALTER TABLE `avaliacao__funcs` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao__funcs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avaliacao_de_compras`
--

DROP TABLE IF EXISTS `avaliacao_de_compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacao_de_compras` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `opiAtendimento` int(11) NOT NULL,
  `opiPreco` int(11) NOT NULL,
  `opiMarca` int(11) NOT NULL,
  `opiProduto` int(11) NOT NULL,
  `compra_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `avaliacao_de_compras_compra_id_foreign` (`compra_id`),
  KEY `avaliacao_de_compras_user_id_foreign` (`user_id`),
  CONSTRAINT `avaliacao_de_compras_compra_id_foreign` FOREIGN KEY (`compra_id`) REFERENCES `compras` (`id`),
  CONSTRAINT `avaliacao_de_compras_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao_de_compras`
--

LOCK TABLES `avaliacao_de_compras` WRITE;
/*!40000 ALTER TABLE `avaliacao_de_compras` DISABLE KEYS */;
INSERT INTO `avaliacao_de_compras` VALUES (1,5,5,5,5,1,3,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(2,5,5,5,5,5,4,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(3,5,5,5,5,6,4,'2020-06-02 20:38:06','2020-06-02 20:38:06');
/*!40000 ALTER TABLE `avaliacao_de_compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Vendedor',2350,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL);
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente_promocaos`
--

DROP TABLE IF EXISTS `cliente_promocaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente_promocaos` (
  `user_id` bigint(20) unsigned NOT NULL,
  `promocao_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  KEY `cliente_promocaos_user_id_foreign` (`user_id`),
  KEY `cliente_promocaos_promocao_id_foreign` (`promocao_id`),
  CONSTRAINT `cliente_promocaos_promocao_id_foreign` FOREIGN KEY (`promocao_id`) REFERENCES `promocaos` (`id`),
  CONSTRAINT `cliente_promocaos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_promocaos`
--

LOCK TABLES `cliente_promocaos` WRITE;
/*!40000 ALTER TABLE `cliente_promocaos` DISABLE KEYS */;
INSERT INTO `cliente_promocaos` VALUES (3,1,'2020-06-02 20:38:06','2020-06-02 20:38:06',0);
/*!40000 ALTER TABLE `cliente_promocaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `funcionario_id` bigint(20) unsigned NOT NULL,
  `CPFCliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorTotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `compras_funcionario_id_foreign` (`funcionario_id`),
  CONSTRAINT `compras_funcionario_id_foreign` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (1,1,'46729986220',256.3,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(2,1,'46729986220',125.45,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(3,1,'46729986220',350.2,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(4,1,'46729986220',44.9,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(5,1,'12853415031',264,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(6,1,'12853415031',150.5,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(7,1,'12853415031',46,'2020-06-02 20:38:06','2020-06-02 20:38:06'),(8,1,'12853415031',230,'2020-06-02 20:38:06','2020-06-02 20:38:06');
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `cargo_id` bigint(20) unsigned DEFAULT NULL,
  `dataAdmissao` date NOT NULL,
  `ferias` int(11) NOT NULL DEFAULT 30,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `funcionarios_user_id_foreign` (`user_id`),
  KEY `funcionarios_cargo_id_foreign` (`cargo_id`),
  CONSTRAINT `funcionarios_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`),
  CONSTRAINT `funcionarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (1,2,1,'2020-02-15',30,'2020-06-02 20:38:06','2020-06-02 20:38:06',NULL),(2,5,1,'2020-03-24',30,'2020-06-02 20:38:06','2020-06-02 20:38:06',NULL),(3,6,1,'2020-03-10',30,'2020-06-02 20:38:06','2020-06-02 20:38:06',NULL);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_15_105324_create_roles_table',1),(4,'2016_01_15_114412_create_role_user_table',1),(5,'2016_01_26_115212_create_permissions_table',1),(6,'2016_01_26_115523_create_permission_role_table',1),(7,'2016_02_09_132439_create_permission_user_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2020_04_22_015251_create_promocaos_table',1),(10,'2020_05_01_204708_create_cargos_table',1),(11,'2020_05_02_204406_create_funcionarios_table',1),(12,'2020_05_02_205000_create_compras_table',1),(13,'2020_05_02_205000_create_sms_marketings_table',1),(14,'2020_05_02_205030_create_cliente_promocaos_table',1),(15,'2020_05_02_205056_create_avaliacao_de_compras_table',1),(16,'2020_05_29_170913_create_avaliacao__funcs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
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
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocaos`
--

DROP TABLE IF EXISTS `promocaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocaos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `validade` timestamp NULL DEFAULT NULL,
  `promoCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocaos`
--

LOCK TABLES `promocaos` WRITE;
/*!40000 ALTER TABLE `promocaos` DISABLE KEYS */;
INSERT INTO `promocaos` VALUES (1,'R$25 OFF',25,NULL,'25OFF','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(2,'R$50 OFF',50,'2020-06-13 03:00:00','50OFF','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(3,'R$10 OFF',10,NULL,'10OFF','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(4,'R$20 OFF',20,NULL,'20OFF','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL);
/*!40000 ALTER TABLE `promocaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,1,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(2,2,2,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(3,3,3,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(4,3,4,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(5,2,5,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(6,2,6,'2020-06-02 20:38:05','2020-06-02 20:38:05',NULL);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
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
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','admin','Admin Role',5,'2020-06-02 20:38:04','2020-06-02 20:38:04',NULL),(2,'Funcionario','funcionario','Funcionario Role',3,'2020-06-02 20:38:04','2020-06-02 20:38:04',NULL),(3,'Cliente','cliente','Cliente Role',1,'2020-06-02 20:38:04','2020-06-02 20:38:04',NULL),(4,'Unverified','unverified','Unverified Role',0,'2020-06-02 20:38:04','2020-06-02 20:38:04',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms_marketings`
--

DROP TABLE IF EXISTS `sms_marketings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sms_marketings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocao_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sms_marketings_promocao_id_foreign` (`promocao_id`),
  CONSTRAINT `sms_marketings_promocao_id_foreign` FOREIGN KEY (`promocao_id`) REFERENCES `promocaos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms_marketings`
--

LOCK TABLES `sms_marketings` WRITE;
/*!40000 ALTER TABLE `sms_marketings` DISABLE KEYS */;
INSERT INTO `sms_marketings` VALUES (1,'Você recebeu uma promoção da loja Rosa Chock, utilize o cupom <promoCode>\r\n            e ganhe R$ 25 de desconto na sua próxima compra',1,'2020-06-02 20:38:06','2020-06-02 20:38:06');
/*!40000 ALTER TABLE `sms_marketings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_cpf_unique` (`CPF`),
  UNIQUE KEY `users_telefone_unique` (`telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administradores gerais','admin@avaliasys.com',NULL,'$2y$10$9PE26QdDQ3KcZx0wso9hRu4zpuXpkjD61t2A0Cjy1dsiwDlcHdV62',NULL,'00000000000','0000-01-01','00000000000','2020-06-02 20:38:04','2020-06-02 20:38:04',NULL),(2,'Heloise Esther Marcela Monteiro','heloisemonteiro@avaliasys.com',NULL,'$2y$10$vVomHO/ihdYa/duuvEXiFOzfb7WJ5p87l2V2GOZCsySVEdJJkKbfS',NULL,'64207009493','1944-05-17','67983821663','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(3,'Marcelo Lara','marcelolara@cbsaperfeicoamento.com',NULL,'$2y$10$Cufwt5hnpMWFa9ngR8GrQ.rITqlgXPmkpnzLQQjQ3Crznv7gL3qUa',NULL,'46729986220','1991-01-04','83994415257','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(4,'Maria Fernanda Oliveira','mariaoliveira@email.com',NULL,'$2y$10$oOYkJz6UFYc670NaezjK8OSEFi6.uw0UXG.EJ116yp8qRpOe2MTbO',NULL,'12853415031','1988-02-24','14997824257','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(5,'Daniela Arbex','daniela@avaliasys.com',NULL,'$2y$10$UHAhvWmsGuS2aimhLpwqC.xN0yEB.lxgMZYR80smR3bCu7I4y3CkK',NULL,'55575713024','1980-10-22','17923904663','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL),(6,'Maria Luiza Carriel','marialuiza@avaliasys.com',NULL,'$2y$10$pdSJxHmZgXz6flFyH3jgQ.YkDB66r.7f6tPW9j08xYM/6dACRKWKS',NULL,'56842330076','1983-12-17','14983251678','2020-06-02 20:38:05','2020-06-02 20:38:05',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'laravel'
--

--
-- Dumping routines for database 'laravel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-02 15:23:16
