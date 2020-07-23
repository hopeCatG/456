# Host: localhost  (Version: 5.5.53)
# Date: 2020-07-23 09:15:13
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "aa"
#

DROP TABLE IF EXISTS `aa`;
CREATE TABLE `aa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "aa"
#

/*!40000 ALTER TABLE `aa` DISABLE KEYS */;
INSERT INTO `aa` VALUES (4,'啊啊','2576755215@qq.com','37b111fee0e821721a3275a2f62d1cdc'),(5,'','','d41d8cd98f00b204e9800998ecf8427e'),(6,'','','d41d8cd98f00b204e9800998ecf8427e'),(7,'','','d41d8cd98f00b204e9800998ecf8427e'),(8,'','','d41d8cd98f00b204e9800998ecf8427e'),(9,'','','d41d8cd98f00b204e9800998ecf8427e'),(10,'','2576755215@qq.com','d41d8cd98f00b204e9800998ecf8427e'),(11,'','','d41d8cd98f00b204e9800998ecf8427e'),(14,'1','11@qq.com','7fa8282ad93047a4d6fe6111c93b308a'),(15,'2','2576755215@qq.com','b6d767d2f8ed5d21a44b0e5886680cb9'),(16,'admin','admin@qq.com','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `aa` ENABLE KEYS */;
