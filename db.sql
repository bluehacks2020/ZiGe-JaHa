/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.5.60-log : Database - zigejaha
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zigejaha` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `zigejaha`;

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `documents` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert  into `profile`(`profile_id`,`first_name`,`middle_name`,`last_name`,`gender`,`address`,`email`,`birth_date`,`photo`,`contact`,`documents`) values 
(3,'q','q','q',1,'Lot 105 Cluster F','a@q','0000-00-00','26194163_525522451151945_521501330_o.jpg','12212211212',NULL),
(4,'1','q','q',1,'qweew','a@w','0000-00-00','26194163_525522451151945_521501330_o.jpg','14414414141',NULL),
(5,'1','q','q',1,'qweew','a@w','0000-00-00','26194163_525522451151945_521501330_o.jpg','14414414141',NULL),
(7,'qwe','qwe','qwe',1,'ewrwrew','admin@admin','0000-00-00','','12212211212',NULL),
(8,'admin','admin','admin',1,'admin','admin@admin','0000-00-00','zid.jpeg','12212211212',NULL),
(9,'hello','fa','fa',1,'qeqae','qd@2','0000-00-00','23157114_167518293831483_4237230071394880970_o.jpg','14414414141',NULL);

/*Table structure for table `trips` */

DROP TABLE IF EXISTS `trips`;

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `occ` int(11) DEFAULT NULL,
  `tourguide` int(11) DEFAULT NULL,
  `iteneraries` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`trip_id`),
  KEY `user_fk` (`tourguide`),
  CONSTRAINT `user_fk` FOREIGN KEY (`tourguide`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `trips` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` int(4) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `profile_fk` int(11) DEFAULT NULL,
  `isApproved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `profile` (`profile_fk`),
  CONSTRAINT `profile` FOREIGN KEY (`profile_fk`) REFERENCES `profile` (`profile_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`username`,`password`,`type`,`created_date`,`profile_fk`,`isApproved`) values 
(3,NULL,'$2y$10$8UrlOD2r77ZbbZm2caNk/OnNE7mhgRN3W8lUwdvGrq1DvD1EwSyGm',1,'2020-02-23',3,1),
(4,'a@w','$2y$10$dgBd/roDRKxKDkEP.eYDSewlCv9zPzo7IpqdaEADyjl5807UF2LOG',1,'2020-02-23',4,1),
(5,'a@w','$2y$10$o5GtBkKXzMaBcpRaWsiPJOcyJ4awF7y1hPjy7BsLiaFNlNM00zYaK',1,'2020-02-23',5,1),
(7,'admin@admin','$2y$10$C.IDfvHcIFQA0GqRPk8gIebEmuZH16WzquD.agKIhRy2uGjqpjVha',1,'2020-02-23',7,NULL),
(8,'admin','$2y$10$PShZ.0EI/rhHNTqVy.UonOZtdYAOwmNO6Inte9RN7trm4xxolMBbu',1,'2020-02-23',8,NULL),
(9,'qd@2','$2y$10$Bw2TNkGEgWJ.ZjsVl27d2uwzIx4ltO98wSgqzdAg37rtYoWA97wMO',1,'2020-02-23',9,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
