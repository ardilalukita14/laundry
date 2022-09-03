/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.18-MariaDB : Database - laundry
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laundry` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `laundry`;

/*Table structure for table `admin_login` */

DROP TABLE IF EXISTS `admin_login`;

CREATE TABLE `admin_login` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `Adm_Name` text NOT NULL,
  `Adm_Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin_login` */

insert  into `admin_login`(`ID`,`Adm_Name`,`Adm_Password`) values (1,'admin','admin');

/*Table structure for table `contact_form` */

DROP TABLE IF EXISTS `contact_form`;

CREATE TABLE `contact_form` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `contact_form` */

insert  into `contact_form`(`ID`,`Name`,`Phone_No`,`Message`) values (1,'Coba','00812345678','Sekedar Test Pesan'),(2,'test','','sekedar uji coba pesan saja untuk keperluan blackbox testing'),(3,'sdadasd','','test saja untuk keperluan black box testing\r\n'),(4,'Coba','00812345678','asdasdasd'),(5,'09655','','dsadsdsa'),(6,'Farid Angga','sdsds','dsds'),(7,'angaas','asdas','asdasd'),(8,'sasas','asdas','asdasd'),(9,'angaa','asdas','asdasd'),(10,'sdsd','','dsds'),(11,'sdsd','dsds','dsds'),(12,'sdsd','dsds','dsds'),(13,'','',''),(14,'','','');

/*Table structure for table `m_login` */

DROP TABLE IF EXISTS `m_login`;

CREATE TABLE `m_login` (
  `id_user` varchar(20) NOT NULL COMMENT 'NIP atau NIK atau ID lain',
  `password` varchar(255) DEFAULT NULL,
  `role` enum('super_admin','admin','kasir','pelanggan') DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `m_login` */

/*Table structure for table `order_detail` */

DROP TABLE IF EXISTS `order_detail`;

CREATE TABLE `order_detail` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `User_ID` int(22) NOT NULL,
  `Order_Code` int(20) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Total_Item` int(22) NOT NULL,
  `Total_Price` int(22) NOT NULL,
  `Pick_up_date` date NOT NULL,
  `Delivery_date` date NOT NULL,
  `Phone_No` int(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pick_Up_status` text NOT NULL,
  `Delivery_status` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `order_detail` */

insert  into `order_detail`(`ID`,`User_ID`,`Order_Code`,`User_Name`,`Total_Item`,`Total_Price`,`Pick_up_date`,`Delivery_date`,`Phone_No`,`Address`,`Pick_Up_status`,`Delivery_status`) values (26,9,12345,'Afanza',1,6000,'2020-05-09','2020-05-10',81998585,'Karawang','No','Deliver'),(27,9,843524,'Afanza',1,6000,'2020-05-10','2020-05-11',2147483647,'Karawang','No','Deliver'),(28,12,553155,'admin',1,6000,'2022-03-20','2022-03-20',12345678,'world','No','Deliver'),(29,12,652283,'admin',1,8000,'2022-03-20','2022-03-20',12345678,'world','No','Deliver'),(30,12,728066,'admin',1,7000,'2022-03-20','2022-03-20',12345678,'world','No','Deliver'),(31,12,893761,'admin',1,6000,'2022-03-20','2022-03-21',12345678,'world','No','Deliver'),(32,12,1640,'admin',12,72000,'2022-03-20','2022-03-20',12345678,'world','No','Deliver'),(33,11,172237,'Rahmat',5,30000,'2022-03-29','2022-03-29',2147483647,'Bekasi','No','Pick Up'),(35,18,627638,'Chafith',2,14000,'2022-05-25','2022-05-28',1234,'Jl. Basuki Rahmad Gg.3 No.9 (Depan Musholla Al-Fairuz Persis), Kelurahan Mangunharjo, Kecamatn Mayangan','No','Deliver'),(36,26,59241,'anggatpl07@gmail.com',1,6000,'2022-06-02','2022-06-05',813456,'Jl. Sumbersuko 420','No','Pick Up'),(37,26,440238,'anggatpl07@gmail.com',1,8000,'2022-06-18','2022-06-06',813456,'Jl. Sumbersuko 420','No','Pick Up'),(38,26,927479,'anggatpl07@gmail.com',1,11000,'2022-06-04','2022-06-14',813456,'Jl. Sumbersuko 420','No','Pick Up');

/*Table structure for table `order_temp` */

DROP TABLE IF EXISTS `order_temp`;

CREATE TABLE `order_temp` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `User_ID` int(22) NOT NULL,
  `Services_Name` text NOT NULL,
  `Services_Type` text NOT NULL,
  `Laundry_Price` int(100) NOT NULL,
  `Dry_Price` int(100) NOT NULL,
  `Total_Item` int(100) NOT NULL,
  `Pick_Delivery_Status` text NOT NULL,
  `Order_Status` text NOT NULL,
  `Order_code` varchar(22) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `order_temp` */

insert  into `order_temp`(`ID`,`User_ID`,`Services_Name`,`Services_Type`,`Laundry_Price`,`Dry_Price`,`Total_Item`,`Pick_Delivery_Status`,`Order_Status`,`Order_code`) values (45,9,'Baju','Pakaian',6000,0,1,'2','active','843524'),(46,12,'Baju','Pakaian',6000,0,1,'2','active','553155'),(47,12,'Bulu','Selimut',8000,0,1,'2','active','652283'),(48,12,'Sarung Bantal','Sprei',7000,0,1,'2','active','728066'),(49,12,'Seragam','Pakaian',6000,0,1,'2','active','893761'),(50,12,'Baju','Pakaian',6000,0,12,'2','active','1640'),(51,11,'Baju','Pakaian',6000,0,5,'2','active','172237'),(52,18,'Sperei Kecil','Sprei',7000,0,1,'2','active','627638'),(53,18,'Sarung, Mukenah, dan Sajadah','Alat Sholat',5000,0,1,'2','active','627638'),(54,26,'Sprei Kecil','Alat Sholat',7000,0,1,'2','active','59241'),(55,26,'Sprei Besar','Sprei',10000,0,1,'2','active','59241'),(56,26,'Sarung, Mukenah, dan Sajadah','Alat Sholat',5000,0,1,'2','active','59241'),(57,26,'Sprei Kecil','Alat Sholat',7000,0,1,'2','active','440238'),(58,26,'Boneka Kecil','Boneka',10000,0,1,'2','active','927479'),(59,26,'Sprei Kecil','Alat Sholat',7000,0,1,'1','','');

/*Table structure for table `services_type` */

DROP TABLE IF EXISTS `services_type`;

CREATE TABLE `services_type` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `Services_Name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `services_type` */

insert  into `services_type`(`ID`,`Services_Name`) values (11,'Sprei'),(12,'Alat Sholat'),(13,'Boneka'),(14,'Bed Cover'),(15,'Selimut'),(17,'Tas'),(18,'Alat Tidur'),(19,'Pakaian'),(21,'Alas Kaki');

/*Table structure for table `services_uploade` */

DROP TABLE IF EXISTS `services_uploade`;

CREATE TABLE `services_uploade` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `Services_Name` varchar(100) NOT NULL,
  `Services_Type` varchar(100) NOT NULL,
  `Delivery_Price` int(120) NOT NULL,
  `Laundry_Price` int(120) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `services_uploade` */

insert  into `services_uploade`(`ID`,`Services_Name`,`Services_Type`,`Delivery_Price`,`Laundry_Price`) values (19,'Sprei Kecil','Alat Sholat',10,7000),(20,'Sprei Besar','Sprei',100,10000),(21,'Sarung, Mukenah, dan Sajadah','Alat Sholat',1000,5000),(22,'Boneka Kecil','Boneka',1000,10000),(23,'Boneka Besar','Boneka',1000,20000),(24,'Bed Cover Kecil','Bed Cover',1000,15000),(25,'Bed Cover Besar','Bed Cover',1000,20000),(26,'Selimut Kecil','Selimut',1000,8000),(27,'Selimut Besar','Selimut',1000,15000),(28,'Tas Koper Sedang','Tas',1000,10000),(29,'Tas Koper Besar','Tas',1000,15000),(30,'Bantal','Alat Tidur',1000,10000),(31,'Guling','Alat Tidur',1000,10000),(32,'Baju','Pakaian',1000,5000),(33,'Seragam','Pakaian',1000,5000),(34,'Sepatu','Alas Kaki',1000,10000),(35,'Sandal','Alas Kaki',1000,10000);

/*Table structure for table `user_login` */

DROP TABLE IF EXISTS `user_login`;

CREATE TABLE `user_login` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `user_login` */

insert  into `user_login`(`ID`,`User_Name`,`Password`) values (5,'imran','1234'),(6,'usman','1212'),(7,'admin','123'),(8,'Sikander','shikari'),(9,'Afanza','81998585884'),(10,'Alfanza','081213940989'),(11,'Rahmat','08123456'),(12,'admin',''),(13,'Coba','08123456789'),(14,'pelanggan','0123'),(15,'pelanggan','123'),(16,'test',''),(17,'test','123'),(18,'Chafith','1234'),(19,'','0813');

/*Table structure for table `user_registration` */

DROP TABLE IF EXISTS `user_registration`;

CREATE TABLE `user_registration` (
  `ID` int(22) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(255) NOT NULL,
  `Father_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `user_registration` */

insert  into `user_registration`(`ID`,`User_Name`,`Father_Name`,`Password`,`Address`,`Contact_No`) values (21,'pelanggan','setia','1','Sembarang','1234'),(22,'pelanggan','ramah','0','Bebas',''),(23,'test','saja','0','asas','123'),(24,'Chafith','asdasd','0','Jl. Basuki Rahmad Gg.3 No.9 (Depan Musholla Al-Fairuz Persis), Kelurahan Mangunharjo, Kecamatn Mayangan','1234'),(25,'ank_6a@yahoo.co.id','Farid Angga Pribadi','21232','Jl. Sumbersuko 420','1234'),(26,'anggatpl07@gmail.com','Farid Angga Pribadi','21232f297a57a5a743894a0e4a801fc3','Jl. Sumbersuko 420','0813456');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
