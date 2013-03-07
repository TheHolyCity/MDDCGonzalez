# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: mobile
# Generation Time: 2013-03-05 00:02:12 -0500
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `friends`;

CREATE TABLE `friends` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid1` int(11) NOT NULL,
  `userid2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;

INSERT INTO `friends` (`id`, `userid1`, `userid2`)
VALUES
	(1,1,3),
	(2,1,5),
	(3,1,9),
	(4,1,10),
	(12,1,9),
	(11,1,9);

/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table points
# ------------------------------------------------------------

DROP TABLE IF EXISTS `points`;

CREATE TABLE `points` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `trail_id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `points` WRITE;
/*!40000 ALTER TABLE `points` DISABLE KEYS */;

INSERT INTO `points` (`id`, `lat`, `lng`, `trail_id`, `type`)
VALUES
	(1,28.698885,-81.308121,3,'start'),
	(2,28.677561,-81.248550,4,'start'),
	(3,28.677544,-81.248550,5,'start'),
	(4,28.677559,-81.248589,6,'start'),
	(5,28.677534,-81.248581,7,'start'),
	(6,28.677561,-81.248543,8,'start'),
	(7,28.677542,-81.248550,9,'start'),
	(8,28.677542,-81.248550,9,'stop'),
	(9,28.677561,-81.248543,10,'start'),
	(10,28.677546,-81.248550,11,'start'),
	(11,28.677561,-81.248550,11,'stop'),
	(12,28.677553,-81.248550,12,'start'),
	(13,28.677559,-81.248550,13,'start'),
	(14,28.677555,-81.248550,14,'start'),
	(15,28.677530,-81.248543,15,'start'),
	(16,28.677540,-81.248543,15,'stop'),
	(17,28.698885,-81.308121,15,'stop'),
	(18,28.677595,-81.248581,15,'stop'),
	(19,28.677530,-81.248550,16,'start'),
	(20,28.698885,-81.308121,17,'start'),
	(21,28.698885,-81.308121,17,'stop'),
	(22,0.000000,0.000000,17,'stop'),
	(23,0.000000,0.000000,17,'stop'),
	(24,28.677568,-81.248550,17,'stop'),
	(25,0.000000,0.000000,17,'stop'),
	(26,0.000000,0.000000,17,'stop'),
	(27,0.000000,0.000000,17,'stop'),
	(28,28.677546,-81.248543,18,'start'),
	(29,28.677622,-81.248573,19,'start'),
	(30,28.677559,-81.248550,19,'stop'),
	(31,28.677547,-81.248550,20,'start'),
	(32,28.677547,-81.248550,20,'stop'),
	(33,28.698885,-81.308121,21,'start'),
	(34,28.677555,-81.248543,21,'ping'),
	(35,28.677574,-81.248543,21,'stop'),
	(36,28.677547,-81.248550,22,'start'),
	(37,28.677547,-81.248550,22,'stop'),
	(38,0.000000,0.000000,0,'stop'),
	(39,0.000000,0.000000,0,'stop'),
	(40,0.000000,0.000000,0,'stop'),
	(41,0.000000,0.000000,0,'stop'),
	(42,0.000000,0.000000,0,'stop'),
	(43,0.000000,0.000000,0,'stop'),
	(44,0.000000,0.000000,0,'stop'),
	(45,0.000000,0.000000,0,'stop'),
	(46,0.000000,0.000000,0,'stop'),
	(47,28.677582,-81.248589,23,'start'),
	(48,28.677582,-81.248589,23,'stop'),
	(49,28.677561,-81.248543,24,'start'),
	(50,28.677561,-81.248543,24,'stop'),
	(51,28.677542,-81.248550,25,'start'),
	(52,28.677542,-81.248550,25,'stop'),
	(53,28.698885,-81.308121,26,'start'),
	(54,28.698885,-81.308121,26,'stop'),
	(55,28.698885,-81.308121,27,'start'),
	(56,28.698885,-81.308121,27,'stop'),
	(57,28.677540,-81.248550,28,'start'),
	(58,28.677540,-81.248550,28,'stop'),
	(59,0.000000,0.000000,28,'stop'),
	(60,0.000000,0.000000,28,'stop'),
	(61,28.677572,-81.248543,29,'start'),
	(62,28.677572,-81.248543,29,'stop'),
	(63,28.677546,-81.248581,30,'start'),
	(64,28.677546,-81.248581,30,'stop'),
	(65,0.000000,0.000000,30,'stop'),
	(66,0.000000,0.000000,30,'stop'),
	(67,0.000000,0.000000,30,'stop'),
	(68,0.000000,0.000000,30,'stop'),
	(69,0.000000,0.000000,30,'stop'),
	(70,0.000000,0.000000,30,'stop'),
	(71,0.000000,0.000000,30,'stop'),
	(72,0.000000,0.000000,30,'stop'),
	(73,0.000000,0.000000,30,'stop'),
	(74,0.000000,0.000000,30,'stop'),
	(75,0.000000,0.000000,30,'stop'),
	(76,0.000000,0.000000,30,'stop'),
	(77,0.000000,0.000000,30,'stop'),
	(78,0.000000,0.000000,30,'stop'),
	(79,0.000000,0.000000,30,'stop'),
	(80,0.000000,0.000000,30,'stop'),
	(81,0.000000,0.000000,30,'stop'),
	(82,0.000000,0.000000,30,'stop'),
	(83,0.000000,0.000000,30,'stop'),
	(84,0.000000,0.000000,30,'stop'),
	(85,28.677547,-81.248550,32,'start'),
	(86,28.677622,-81.248581,32,'stop'),
	(87,28.677555,-81.248581,34,'start'),
	(88,28.677540,-81.248581,34,'stop'),
	(89,28.677582,-81.248589,34,'stop'),
	(90,28.677567,-81.248581,35,'start'),
	(91,28.677584,-81.248581,35,'stop'),
	(92,28.677607,-81.248581,36,'start'),
	(93,28.677557,-81.248543,37,'start'),
	(94,28.677572,-81.248543,38,'start'),
	(95,28.677572,-81.248543,38,'stop'),
	(96,0.000000,0.000000,38,'stop'),
	(97,28.677544,-81.248550,38,'stop'),
	(98,28.677561,-81.248581,38,'stop'),
	(99,28.677572,-81.248581,38,'stop'),
	(100,28.677610,-81.248581,39,'start'),
	(101,28.677565,-81.248589,39,'stop'),
	(102,0.000000,0.000000,39,'stop'),
	(103,28.677540,-81.248550,40,'start'),
	(104,28.677540,-81.248550,40,'stop'),
	(105,0.000000,0.000000,40,'stop'),
	(106,0.000000,0.000000,40,'stop'),
	(107,0.000000,0.000000,40,'stop'),
	(108,28.677578,-81.248581,40,'stop'),
	(109,28.677588,-81.248581,40,'stop'),
	(110,28.677570,-81.248543,40,'stop'),
	(111,28.677542,-81.248543,40,'stop'),
	(112,28.677544,-81.248543,40,'stop'),
	(113,28.677555,-81.248543,40,'stop'),
	(114,28.677563,-81.248543,40,'stop'),
	(115,28.677549,-81.248550,40,'stop'),
	(116,28.677563,-81.248543,40,'stop'),
	(117,28.677549,-81.248543,40,'stop'),
	(118,28.677555,-81.248543,40,'stop'),
	(119,28.677582,-81.248581,40,'stop'),
	(120,28.677599,-81.248589,40,'stop'),
	(121,28.677567,-81.248581,40,'stop'),
	(122,28.677549,-81.248550,40,'stop'),
	(123,0.000000,0.000000,40,'stop'),
	(124,0.000000,0.000000,40,'stop');

/*!40000 ALTER TABLE `points` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table trail_user_assoc
# ------------------------------------------------------------

DROP TABLE IF EXISTS `trail_user_assoc`;

CREATE TABLE `trail_user_assoc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `trail_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table trails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `trails`;

CREATE TABLE `trails` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `distance` decimal(7,2) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `iterations` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `trails` WRITE;
/*!40000 ALTER TABLE `trails` DISABLE KEYS */;

INSERT INTO `trails` (`id`, `name`, `distance`, `tags`, `description`, `userid`, `iterations`)
VALUES
	(22,'BEASTMODE',0.00,NULL,'BEASTTTTTTTT',0,0),
	(23,'test',0.00,NULL,'test',1,0),
	(35,'',0.00,NULL,NULL,0,1),
	(34,'Lorem',0.00,NULL,'Lorem',1,2),
	(36,'',0.00,NULL,NULL,0,1),
	(37,'',0.00,NULL,NULL,0,1),
	(38,'Testing Route 33',11376.22,NULL,'Lorem Ipsum',1,1),
	(39,'',0.00,NULL,NULL,0,1),
	(40,'Some place far',0.00,'#Nature #Pizzza','Cool ride with pizza',11,1);

/*!40000 ALTER TABLE `trails` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `biography` varchar(255) DEFAULT NULL,
  `newsletter` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `biography`, `newsletter`)
VALUES
	(1,'KidxGhst','202cb962ac59075b964b07152d234b70','KidxGhst@gmail.com','This is a test',0),
	(5,'Hi','81dc9bdb52d04dc20036dbd8313ed055','TheHolyGhst@gmail.com',NULL,0),
	(3,'blahblah','202cb962ac59075b964b07152d234b70','blahbalhdfaf',NULL,0),
	(11,'lleztats','953eae71360c67a8ce27f62211946d1f','sstatzell@gmail.com',NULL,0),
	(10,'ThisGuy','202cb962ac59075b964b07152d234b70','ThisGuy@gmail.com',NULL,0),
	(9,'ThatGuy','202cb962ac59075b964b07152d234b70','ThatGuy@gmail.com','Is the homie',0),
	(14,'Randomuser','81dc9bdb52d04dc20036dbd8313ed055','Somebodyfamous@gmail.com',NULL,0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
