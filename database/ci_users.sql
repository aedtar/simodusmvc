# Host: localhost  (Version 5.5.5-10.1.25-MariaDB)
# Date: 2018-06-03 23:25:30
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "ci_users"
#

DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `unit` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "ci_users"
#

/*!40000 ALTER TABLE `ci_users` DISABLE KEYS */;
INSERT INTO `ci_users` VALUES (3,NULL,'demo','admin','admin','admin@admin.com','12345','$2y$10$tFY/JX/rEKR8ODW2ktjYtOWf3zTkvOtynrXOvrcZ2Qm9h72r9TaPW',1,'','2017-09-29 10:09:44','2017-09-30 08:09:29',NULL),(5,NULL,'wwe champion','wwe','champion','naumanahmedcs@gmail.com','12345','$2y$10$KB0NxzAOWtbnVj.7OJujRe7G5K1lb6UG5ra3PnAAt/Oc96Wfl5tea',0,'','2017-09-29 11:09:02','2017-10-03 06:10:51',NULL),(7,NULL,'Test1','test','champion','test@gmail.com','12345','$2y$10$J317ib3JnglmhO.IbaADHOyr4j2xSbWZZtO8pHDWW65GUZLZEu63u',0,'','2017-09-29 11:09:02','2017-09-30 08:09:51',NULL),(10,NULL,'sayid tarmizi','sayid','tarmizi','sayidtarmizi@gmail.com','11','$2y$10$HwWqJgow5uz9hCaKAzrJ2.m/YlDDCVRxVinVe8Nflk1KL5MJTrbi6',0,'','2018-05-29 00:00:00','2018-05-29 00:00:00',NULL),(12,NULL,'9 9','9','9','911@gmail.com','18','$2y$10$Qs14/HTXbYd0ooojzvvereGjA5jfkLSSPeMGl4d4X.dYqRZpcjjP.',0,'','2018-05-29 00:00:00','2018-05-29 00:00:00','18'),(13,NULL,'sayid tarmizi','sayid','tarmizi','ii@gmail','0801','$2y$10$p0sLOSN9LV2BBzocZJfdYe3opLmizQNi8kg0HencmTInEHTau3i8e',5,'','2018-05-29 00:00:00','2018-05-29 00:00:00','18301'),(15,'Super Admin','admin','','','admin@admin.com','','$2y$10$gAqArxlGB7zBkxEp477YYuXmh07qYooUgZhqFCCNwv7ThLbpUpXx6',1,'','2018-05-29 00:00:00','2018-05-29 00:00:00','18'),(16,'Sayid','18301admin','','','sayid@gmail.com','','$2y$10$LLMPks.1TtabiWWKCcbjf.NbPHVIxA5luePbSK5CKb/Kbq5YfgCHO',3,'','2018-05-29 00:00:00','2018-05-29 00:00:00','18301');
/*!40000 ALTER TABLE `ci_users` ENABLE KEYS */;
