# ************************************************************
# Sequel Ace SQL dump
# Version 20035
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.29)
# Database: CNTTBlog
# Generation Time: 2022-11-16 14:31:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorys`;

CREATE TABLE `categorys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metaTitle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_rewrite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `enabled` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_category_parent` (`parent_id`),
  KEY `idx_category_url_rewrite` (`url_rewrite`),
  CONSTRAINT `fk_category_parent` FOREIGN KEY (`parent_id`) REFERENCES `categorys` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categorys` WRITE;
/*!40000 ALTER TABLE `categorys` DISABLE KEYS */;

INSERT INTO `categorys` (`id`, `parent_id`, `title`, `image`, `metaTitle`, `url_rewrite`, `content`, `enabled`, `created_at`, `updated_at`)
VALUES
	(1,NULL,'Announcements','home_support/rc1.png','Announcements','announcements','This forum is a special forum for general announcements.',1,'2022-11-06 17:44:43',NULL),
	(2,NULL,'Technology','home_support/rc2.png','Technology','technology','Latest technology news and updates from our community.',1,'2022-11-06 17:46:07',NULL),
	(3,NULL,'Marketplaces',NULL,NULL,'marketplaces','fewf',1,'2022-11-07 11:51:46','2022-11-07 11:51:46'),
	(4,NULL,'Marketplaces',NULL,NULL,'marketplaces','fewf',1,'2022-11-07 11:51:53','2022-11-07 11:51:53'),
	(5,NULL,'Marketplaces',NULL,NULL,'marketplacesff','fewf',1,'2022-11-07 12:40:04','2022-11-07 12:40:04'),
	(6,NULL,'Marketplaces',NULL,NULL,'marketplacesfffff','fewf',1,'2022-11-07 12:49:58','2022-11-07 12:49:58'),
	(7,NULL,'Catagory Test',NULL,NULL,'ffff','fewf',1,'2022-11-07 12:55:13','2022-11-07 12:55:13'),
	(8,NULL,'Catagory Test',NULL,NULL,'ffffweffff','fewf',1,'2022-11-07 12:56:48','2022-11-07 12:56:48');

/*!40000 ALTER TABLE `categorys` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table hashtag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hashtag`;

CREATE TABLE `hashtag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('a@a.com','$2y$10$qxWm0lcbDLqYZdCFhU3OqOyFEKLMxNpQngcjBr3z.u7AZNq.zmuIe','2022-11-10 05:02:10');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` tinytext COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table post_categorys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_categorys`;

CREATE TABLE `post_categorys` (
  `post_id` int unsigned NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`post_id`,`category_id`),
  KEY `idx_pc_category` (`category_id`),
  KEY `idx_pc_post` (`post_id`),
  CONSTRAINT `fk_pc_category` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`),
  CONSTRAINT `fk_pc_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table post_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_comments`;

CREATE TABLE `post_comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned NOT NULL,
  `parent_id` int DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `enabled` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_comment_post` (`post_id`),
  KEY `fk_upc_user` (`user_id`),
  KEY `idx_comment_parent` (`parent_id`),
  CONSTRAINT `fk_comment_parent` FOREIGN KEY (`parent_id`) REFERENCES `post_comments` (`id`),
  CONSTRAINT `fk_comment_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `fk_upc_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table post_hashtag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_hashtag`;

CREATE TABLE `post_hashtag` (
  `post_id` int unsigned NOT NULL COMMENT 'Post ID',
  `hashtag_id` int NOT NULL COMMENT 'HashTag ID',
  PRIMARY KEY (`post_id`,`hashtag_id`),
  KEY `idx_hashtag_post_id` (`post_id`),
  KEY `fk_post_hashtag` (`hashtag_id`),
  CONSTRAINT `fk_hashtag_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `fk_post_hashtag` FOREIGN KEY (`hashtag_id`) REFERENCES `hashtag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Post ID',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Post Name',
  `short_description` mediumtext COLLATE utf8mb4_unicode_ci COMMENT 'Post Short Description',
  `metaTitle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `post_content` mediumtext COLLATE utf8mb4_unicode_ci COMMENT 'Post Content',
  `store_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Store Id',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Post Image',
  `views` int DEFAULT NULL COMMENT 'Post Views ',
  `enabled` int DEFAULT '1' COMMENT 'Post Enabled',
  `url_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Post URL Key',
  `allow_comment` int NOT NULL DEFAULT '0' COMMENT 'Post Allow Comment',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Post Created At',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Post Updated At',
  `author_id` int unsigned DEFAULT NULL COMMENT 'Author ID',
  `modifier_id` int unsigned DEFAULT NULL COMMENT 'Author ID',
  `publish_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Post Updated At',
  `banner_image` text COLLATE utf8mb4_unicode_ci COMMENT 'Banner Image',
  `featured_image` text COLLATE utf8mb4_unicode_ci COMMENT 'featured_image',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`),
  KEY `idx_post_user` (`author_id`),
  KEY `idx_post_url_key` (`url_key`),
  KEY `fk_post_modifier` (`modifier_id`),
  CONSTRAINT `fk_post_modifier` FOREIGN KEY (`modifier_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_post_user` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `name`, `short_description`, `metaTitle`, `slug`, `status`, `post_content`, `store_ids`, `image`, `views`, `enabled`, `url_key`, `allow_comment`, `created_at`, `updated_at`, `author_id`, `modifier_id`, `publish_date`, `banner_image`, `featured_image`)
VALUES
	(1,'Test Create','showffff',NULL,'ff','pending','wefwefw','32',NULL,NULL,1,'test-create',0,'2022-11-07 12:56:48','2022-11-07 12:56:48',7,NULL,'2022-11-07 12:56:48',NULL,NULL);

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_permissions`;

CREATE TABLE `role_permissions` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `permission_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`,`permission_id`),
  KEY `idx_rp_role` (`role_id`),
  KEY `idx_rp_permissions` (`permission_id`),
  CONSTRAINT `fk_rp_permission` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `fk_rp_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` tinytext COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `title`, `slug`, `description`, `active`, `created_at`, `updated_at`, `content`)
VALUES
	(1,'User','user',NULL,1,'2022-11-07 12:53:46','2022-11-07 12:53:46',NULL);

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middleName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastLogin` timestamp NULL DEFAULT NULL,
  `intro` tinytext COLLATE utf8mb4_unicode_ci,
  `profile` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `enabled` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `idx_user_role` (`role_id`),
  CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `firstName`, `middleName`, `lastName`, `lastLogin`, `intro`, `profile`, `password`, `remember_token`, `created_at`, `updated_at`, `enabled`)
VALUES
	(1,1,'Tan Dat','dat.vu@boofly.com',NULL,'Tan',NULL,'Dat',NULL,NULL,NULL,'$2y$10$kmHtaCSIHeLx88mpnJq8k.wGxHozOdkI.9mNyYUMEWh95/ykc2146',NULL,'2022-11-07 12:53:47','2022-11-07 12:53:47',1),
	(3,1,'Tan Dat','dat.vu.f@boofly.com',NULL,'Tan',NULL,'Dat',NULL,NULL,NULL,'$2y$10$shWpknsk3YkwgH.LWKPBx.8o4u9I1JM750RiuUyN7mWc43BGILxdW',NULL,'2022-11-07 12:55:13','2022-11-07 12:55:13',1),
	(5,1,'Tan Dat','dat.vu.ff@boofly.com',NULL,'Tan',NULL,'Dat',NULL,NULL,NULL,'$2y$10$FE9Ba/TDaL/sTEDJh9UyzekUSaepMpe8MmlMIKjSRdCB611DOFhoq',NULL,'2022-11-07 12:55:34','2022-11-07 12:55:34',1),
	(7,1,'Tan Dat','dat.vu.ffd@boofly.com',NULL,'Tan',NULL,'Dat',NULL,NULL,NULL,'$2y$10$o3Po8tU6uGXFknIX3yWACudLcCHAEdQBLQtyNP2N6cIeDs.ihvNv6',NULL,'2022-11-07 12:56:47','2022-11-07 12:56:47',1),
	(8,1,'Vu Tan Dat','a@a.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$m6OKIL44lV2s6ejMNtrHQ.B8Sfy/9tPyctovd/gdAqVpTEC/JmqTC',NULL,'2022-11-10 01:57:18','2022-11-10 01:57:18',1),
	(9,1,'DatfTan','v@g.com',NULL,'Tan',NULL,'Dat',NULL,NULL,NULL,'$2y$10$H8sh2y2EfN4M.qOJNlAgb.HGvA9x6zYG3cGOoLB4ammJl8a.zJlRe',NULL,'2022-11-10 08:25:18','2022-11-10 08:25:18',1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
