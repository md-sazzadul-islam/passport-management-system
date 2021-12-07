

DROP TABLE IF EXISTS `agents`;

CREATE TABLE `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `agents` */

insert  into `agents`(`id`,`title`,`created_at`,`updated_at`) values 
(1,'Agent 1','2020-09-13 13:24:18','2021-11-29 11:25:09'),
(2,'Agent 2','2021-11-29 11:26:08','2021-11-29 11:26:08');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `medical_reports` */

DROP TABLE IF EXISTS `medical_reports`;

CREATE TABLE `medical_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `medical_reports` */

insert  into `medical_reports`(`id`,`title`,`created_at`,`updated_at`) values 
(1,'Fit','2020-09-12 08:29:54','2020-09-12 08:29:54'),
(2,'Unfit','2021-11-29 11:24:55','2021-11-29 11:24:55');

/*Table structure for table `medical_statuses` */

DROP TABLE IF EXISTS `medical_statuses`;

CREATE TABLE `medical_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `medical_statuses` */

insert  into `medical_statuses`(`id`,`title`,`created_at`,`updated_at`) values 
(1,'Wait from medical','2020-09-13 13:24:08','2021-11-29 11:24:30'),
(2,'Select from medical','2021-11-29 11:24:11','2021-11-29 11:24:11');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),
(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),
(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),
(6,'2016_06_01_000004_create_oauth_clients_table',1),
(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),
(8,'2019_08_19_000000_create_failed_jobs_table',1),
(9,'2020_08_19_064132_create_permission_tables',1),
(10,'2020_09_11_171615_create_settings_table',1),
(11,'2020_09_11_210625_create_positions_table',2),
(12,'2020_09_11_210754_create_selection_statuses_table',3),
(13,'2020_09_11_211125_create_references_table',4),
(14,'2020_09_11_212045_create_medical_statuses_table',5),
(15,'2020_09_12_064959_create_agents_table',6),
(16,'2020_09_12_065626_create_medical_reports_table',6),
(17,'2020_09_12_065751_create_passports_table',7),
(18,'2020_09_12_140107_create_testttts_table',8),
(19,'2020_09_12_173808_create_mycontes_table',9),
(20,'2020_09_13_045600_create_mycontes_table',10),
(21,'2020_09_13_133856_create_ronis_table',11),
(22,'2020_09_18_200712_create_payments_table',12);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

/*Table structure for table `mycontes` */

DROP TABLE IF EXISTS `mycontes`;

CREATE TABLE `mycontes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mycontes` */

insert  into `mycontes`(`id`,`test`,`created_at`,`updated_at`) values 
(1,'sdfsdf','2020-09-13 19:34:56','2020-09-13 19:34:56');

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`provider`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values 
(1,NULL,'Laravel Personal Access Client','aEE0PIZVvCPdifzAoo6dhhq1xaepOizJU4luA9dG',NULL,'http://localhost',1,0,0,'2020-09-13 18:38:09','2020-09-13 18:38:09'),
(2,NULL,'Laravel Password Grant Client','4YPF4vztlogeGeSxcNOx0okX9280G8FfZDvUZoYW','users','http://localhost',0,1,0,'2020-09-13 18:38:10','2020-09-13 18:38:10'),
(3,NULL,'Laravel Personal Access Client','LyHS7Yp3GnXRZNLz2SNilCZlgPF66qV9I1q81TCl',NULL,'http://localhost',1,0,0,'2020-09-13 19:49:19','2020-09-13 19:49:19'),
(4,NULL,'Laravel Password Grant Client','nOpBZ1PyD1HDo6dIeuDpZ8SJhOWSHQzOYiSflC79','users','http://localhost',0,1,0,'2020-09-13 19:49:19','2020-09-13 19:49:19');

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

insert  into `oauth_personal_access_clients`(`id`,`client_id`,`created_at`,`updated_at`) values 
(1,1,'2020-09-13 18:38:10','2020-09-13 18:38:10'),
(2,3,'2020-09-13 19:49:19','2020-09-13 19:49:19');

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `passports` */

DROP TABLE IF EXISTS `passports`;

CREATE TABLE `passports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `passport_holder` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_father_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(10) unsigned DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile_no` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selection_status` int(10) unsigned DEFAULT NULL,
  `medical_issue_date` date DEFAULT NULL,
  `medical_status` int(10) unsigned DEFAULT NULL,
  `medical_report` int(10) unsigned DEFAULT NULL,
  `reference` int(10) unsigned DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` int(10) unsigned DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `passports_position_foreign` (`position`),
  KEY `passports_selection_status_foreign` (`selection_status`),
  KEY `passports_medical_status_foreign` (`medical_status`),
  KEY `passports_medical_report_foreign` (`medical_report`),
  KEY `passports_reference_foreign` (`reference`),
  KEY `passports_agent_foreign` (`agent`),
  CONSTRAINT `passports_agent_foreign` FOREIGN KEY (`agent`) REFERENCES `agents` (`id`),
  CONSTRAINT `passports_medical_report_foreign` FOREIGN KEY (`medical_report`) REFERENCES `medical_reports` (`id`),
  CONSTRAINT `passports_medical_status_foreign` FOREIGN KEY (`medical_status`) REFERENCES `medical_statuses` (`id`),
  CONSTRAINT `passports_position_foreign` FOREIGN KEY (`position`) REFERENCES `positions` (`id`),
  CONSTRAINT `passports_reference_foreign` FOREIGN KEY (`reference`) REFERENCES `references` (`id`),
  CONSTRAINT `passports_selection_status_foreign` FOREIGN KEY (`selection_status`) REFERENCES `selection_statuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `passports` */

insert  into `passports`(`id`,`passport_holder`,`holder_father_name`,`passport_no`,`position`,`issue_date`,`expiry_date`,`date_of_birth`,`mobile_no`,`selection_status`,`medical_issue_date`,`medical_status`,`medical_report`,`reference`,`company_name`,`agent`,`remarks`,`created_at`,`updated_at`) values 
(20,'Md sazzadul islam','Father Name','1234567',2,'2021-01-12','2020-09-17','2020-09-17','12345',1,'2020-09-17',1,NULL,1,'Company',1,'teos fsd fsd','2020-09-16 19:04:40','2021-11-29 16:56:12');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('sazzadulisalm6@gmail.com','$2y$10$1AIspMwbX4x4s9flVXft1edL4PTs2nBZnJdTqlNSaybYkVya195Na','2021-11-28 12:05:03');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `passport` int(10) unsigned NOT NULL,
  `date` date DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_passport_foreign` (`passport`),
  CONSTRAINT `payments_passport_foreign` FOREIGN KEY (`passport`) REFERENCES `passports` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payments` */

insert  into `payments`(`id`,`amount`,`passport`,`date`,`note`,`created_at`,`updated_at`) values 
(1,100,20,'2021-04-26','test','2020-09-18 20:17:24','2020-09-18 20:17:24'),
(3,123,20,'2021-11-29','test','2020-11-26 18:12:13','2021-11-29 15:37:08'),
(4,100000,20,'2021-04-26','test','2021-04-26 17:34:10','2021-04-26 17:34:10');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `positions` */

DROP TABLE IF EXISTS `positions`;

CREATE TABLE `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `positions` */

insert  into `positions`(`id`,`title`,`created_at`,`updated_at`) values 
(1,'Manager','2020-09-11 21:16:13','2021-11-29 10:32:31'),
(2,'Executive','2020-09-13 13:23:29','2021-11-29 10:32:21'),
(4,'Sr. Manager','2021-11-29 15:43:07','2021-11-29 15:43:07');

/*Table structure for table `references` */

DROP TABLE IF EXISTS `references`;

CREATE TABLE `references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `references` */

insert  into `references`(`id`,`name`,`phone`,`address`,`created_at`,`updated_at`) values 
(1,'Md Sazzadul islam','0123456789','Dhaka ,Bangladesh.','2020-09-13 13:24:00','2021-11-29 10:34:07');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `ronis` */

DROP TABLE IF EXISTS `ronis`;

CREATE TABLE `ronis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ronis` */

insert  into `ronis`(`id`,`name`,`email`,`created_at`,`updated_at`) values 
(2,'Sazzadul islam','admin@gmail.com','2020-09-13 13:40:56','2020-09-13 13:40:56'),
(3,'Md Sazzadul islam','sazzadulisalm6@gmail.com','2020-09-13 13:41:07','2020-09-13 13:41:07');

/*Table structure for table `selection_statuses` */

DROP TABLE IF EXISTS `selection_statuses`;

CREATE TABLE `selection_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `selection_statuses` */

insert  into `selection_statuses`(`id`,`title`,`created_at`,`updated_at`) values 
(1,'Pending','2020-09-13 13:23:44','2021-11-29 10:32:57'),
(2,'Opening','2021-11-29 10:33:15','2021-11-29 10:33:15'),
(3,'Open','2021-11-29 10:33:26','2021-11-29 10:33:26'),
(4,'Selected','2021-11-29 10:33:42','2021-11-29 10:33:42');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`app_name`,`app_title`,`address`,`phone`,`app_email`,`app_logo`,`created_at`,`updated_at`) values 
(1,'PMS','Passport management','Dhaka-1216 ,Bangladesh.','0123456789','sazzadulislam6@gmail.com','logo/rF0Y2vKXAl85LMhpUZiuUpeiQidIVz3MLY2hBCQa.png','2020-09-11 20:43:00','2021-11-29 16:15:02');

/*Table structure for table `testttts` */

DROP TABLE IF EXISTS `testttts`;

CREATE TABLE `testttts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `testttts` */

insert  into `testttts`(`id`,`test`,`created_at`,`updated_at`) values 
(1,'sdfsdf',NULL,NULL),
(2,'sdfg','2020-09-12 15:11:54','2020-09-12 15:11:54');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin@viewhtml.com',NULL,'$2y$10$0eIJqcrVGNq/nHN5H5l3TeQSdpOZ9Ia98i5O4ttjVtfPJIUfM/Ex.',NULL,'2020-09-11 20:42:30','2021-04-24 17:27:52');

