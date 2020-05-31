/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - hafizclass
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hafizclass` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hafizclass`;

/*Table structure for table `harian` */

DROP TABLE IF EXISTS `harian`;

CREATE TABLE `harian` (
  `ID_HARIAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TARGET` int(11) NOT NULL,
  `TANGGAL_HARIAN` date NOT NULL,
  PRIMARY KEY (`ID_HARIAN`),
  KEY `ID_PROGRESS` (`ID_TARGET`),
  CONSTRAINT `harian_ibfk_1` FOREIGN KEY (`ID_TARGET`) REFERENCES `target` (`ID_TARGET`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `harian` */

insert  into `harian`(`ID_HARIAN`,`ID_TARGET`,`TANGGAL_HARIAN`) values 
(6,7,'2020-05-28'),
(7,7,'2020-05-29'),
(8,8,'2020-05-29'),
(9,9,'2020-05-31'),
(10,9,'2020-06-01');

/*Table structure for table `komentar` */

DROP TABLE IF EXISTS `komentar`;

CREATE TABLE `komentar` (
  `ID_KOMEN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROGRESS` int(11) NOT NULL,
  `NAMA_PENGIRIM` varchar(50) DEFAULT NULL,
  `AVATAR_PENGIRIM` text,
  `ISI_KOMEN` text,
  `TANGGAL_KOMEN` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_KOMEN`),
  KEY `ID_PROGRESS` (`ID_PROGRESS`),
  CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`ID_PROGRESS`) REFERENCES `progress` (`ID_PROGRESS`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `komentar` */

insert  into `komentar`(`ID_KOMEN`,`ID_PROGRESS`,`NAMA_PENGIRIM`,`AVATAR_PENGIRIM`,`ISI_KOMEN`,`TANGGAL_KOMEN`) values 
(1,10,'Akbar','Books_HD_8314929977-1024x682.jpg','kurang jelas','29-May-2020 16:56:40 '),
(2,10,'Ikhwan N A','masjid-pogung-dalangan-t5wNqFyCkTI-unsplash2.jpg','baik akan saya perbaiki','29-May-2020 17:00:00 '),
(3,14,'Akbar','Books_HD_8314929977-1024x682.jpg','untuk progress ini sudah cukup baik',''),
(4,15,'kusuma','quran.jpg',NULL,'29-May-2020 21:56:05'),
(5,15,'kusuma','quran.jpg','jika perlu diperbaiki bilang saja pak','29-May-2020 21:56:55'),
(6,15,'kusuma','quran.jpg','test','29-May-2020 22:02:26'),
(9,15,'Akbar','Books_HD_8314929977-1024x682.jpg','siap','30-May-2020 12:30:43'),
(10,15,'kusuma','quran.jpg','ok','30-May-2020 12:31:25'),
(11,15,'Ust cccc','ngaji.jpg','mmantap nak','30-May-2020 13:33:25'),
(12,11,'Ust cccc','ngaji.jpg','asd','30-May-2020 13:33:58');

/*Table structure for table `penguji` */

DROP TABLE IF EXISTS `penguji`;

CREATE TABLE `penguji` (
  `ID_PENGUJI` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL_PENGUJI` varchar(50) DEFAULT NULL,
  `PASSWORD_PENGUJI` varchar(25) DEFAULT NULL,
  `NAMA_PENGUJI` varchar(50) DEFAULT NULL,
  `JK_PENGUJI` varchar(20) DEFAULT NULL,
  `ALAMAT_PENGUJI` text NOT NULL,
  `TELEPON_PENGUJI` int(11) DEFAULT NULL,
  `FOTO_PENGUJI` text,
  `TINGKAT_MENGUJI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_PENGUJI`),
  UNIQUE KEY `EMAIL_PENGUJI` (`EMAIL_PENGUJI`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `penguji` */

insert  into `penguji`(`ID_PENGUJI`,`EMAIL_PENGUJI`,`PASSWORD_PENGUJI`,`NAMA_PENGUJI`,`JK_PENGUJI`,`ALAMAT_PENGUJI`,`TELEPON_PENGUJI`,`FOTO_PENGUJI`,`TINGKAT_MENGUJI`) values 
(1,'penguji@gmail.com','54321','Akbar','Laki-laki','Jl. Kedurus, Karang Pilang',2147483647,'Books_HD_8314929977-1024x682.jpg','Hafalan Jus 29 dan 30'),
(2,'aaa@gmail.com','aaa','aaa','Perempuan','Jl. Mawar',87654323,'avatar.jpg','Membaca AL-Qur\'an'),
(4,'bbb@gmail.com','bbb','bbb','Perempuan','Jl. Sepatu',8473649,'car-rental2.png','observer'),
(5,'ccc@gmail.com','ccc','ccvvcv','Perempuan','Jl. kenangan',2386916,'car-rental1.png','observer ');

/*Table structure for table `progress` */

DROP TABLE IF EXISTS `progress`;

CREATE TABLE `progress` (
  `ID_PROGRESS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_HARIAN` int(11) NOT NULL,
  `JUDUL_PROGRESS` varchar(50) DEFAULT NULL,
  `DESKRIPSI_PROGRESS` text NOT NULL,
  `JENIS_PROGRESS` varchar(25) DEFAULT NULL,
  `STATUS_PROGRESS` varchar(25) NOT NULL,
  `AUDIO` text,
  PRIMARY KEY (`ID_PROGRESS`),
  KEY `ID_HARIAN` (`ID_HARIAN`),
  CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`ID_HARIAN`) REFERENCES `harian` (`ID_HARIAN`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `progress` */

insert  into `progress`(`ID_PROGRESS`,`ID_HARIAN`,`JUDUL_PROGRESS`,`DESKRIPSI_PROGRESS`,`JENIS_PROGRESS`,`STATUS_PROGRESS`,`AUDIO`) values 
(10,6,'asd','aaaa','Menghafal','Remidi','WhatsApp_Audio_2020-05-28_at_17.01.21.mp3'),
(11,6,'asdasdasd','asdasdasd','Menghafal','Lancar','WhatsApp_Audio_2020-05-28_at_17.01.033.ogg'),
(14,7,'vbvb','vbvb','Menghafal','Belum Dinilai','s2-2018-360607-tableofcontent.pdf'),
(15,8,'surat al-fatihah','menghafal surat al-fatihah, maaf jika kurang lancar','Menghafal','Remidi','WhatsApp_Audio_2020-05-28_at_17.01.16.ogg'),
(16,9,'bbbbbb','bbbbbbbbb','Muroja\'ah','Belum Dinilai','WhatsApp_Audio_2020-05-28_at_17.01.212.mp3'),
(17,10,'hhhhh','hhhhh','Muroja\'ah','Belum Dinilai','WhatsApp_Audio_2020-05-28_at_17.01.082.ogg');

/*Table structure for table `santri` */

DROP TABLE IF EXISTS `santri`;

CREATE TABLE `santri` (
  `ID_SANTRI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PENGUJI` int(11) NOT NULL,
  `EMAIL_SANTRI` varchar(50) DEFAULT NULL,
  `PASSWORD_SANTRI` varchar(25) DEFAULT NULL,
  `NAMA_SANTRI` varchar(50) DEFAULT NULL,
  `JK_SANTRI` varchar(20) DEFAULT NULL,
  `ALAMAT_SANTRI` text NOT NULL,
  `TINGKAT_PENDIDIKAN` varchar(10) NOT NULL,
  `TELEPON_SANTRI` int(15) DEFAULT NULL,
  `FOTO_SANTRI` text,
  PRIMARY KEY (`ID_SANTRI`),
  UNIQUE KEY `EMAIL_SANTRI` (`EMAIL_SANTRI`),
  KEY `santri_ibfk_1` (`ID_PENGUJI`),
  CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`ID_PENGUJI`) REFERENCES `penguji` (`ID_PENGUJI`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `santri` */

insert  into `santri`(`ID_SANTRI`,`ID_PENGUJI`,`EMAIL_SANTRI`,`PASSWORD_SANTRI`,`NAMA_SANTRI`,`JK_SANTRI`,`ALAMAT_SANTRI`,`TINGKAT_PENDIDIKAN`,`TELEPON_SANTRI`,`FOTO_SANTRI`) values 
(1,1,'santri@gmail.com','12345','Ikhwan N A','Laki-laki','Jl. Kamboja','SMP',87152375,'masjid-pogung-dalangan-t5wNqFyCkTI-unsplash2.jpg'),
(2,1,'asha@gmail.com','asha','asha','Perempuan','Jl. Anggrek','SD',0,'kusmayadi-sasmitha-ONlDOQkqDbA-unsplash.jpg'),
(3,2,'kusuma@gmail.com','12345','kusuma','Laki-laki','Jl. Lurian','SMP',87936826,'quran.jpg');

/*Table structure for table `target` */

DROP TABLE IF EXISTS `target`;

CREATE TABLE `target` (
  `ID_TARGET` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SANTRI` int(11) NOT NULL,
  `ID_PENGUJI` int(11) NOT NULL,
  `JUDUL_TARGET` varchar(50) DEFAULT NULL,
  `DESKRIPSI_TARGET` text,
  `STATUS_TARGET` varchar(25) DEFAULT NULL,
  `TANGGAL_UPLOAD` date DEFAULT NULL,
  `BATAS_UPLOAD` date DEFAULT NULL,
  PRIMARY KEY (`ID_TARGET`),
  KEY `ID_SANTRI` (`ID_SANTRI`),
  KEY `ID_PENGUJI` (`ID_PENGUJI`),
  CONSTRAINT `target_ibfk_1` FOREIGN KEY (`ID_SANTRI`) REFERENCES `santri` (`ID_SANTRI`),
  CONSTRAINT `target_ibfk_2` FOREIGN KEY (`ID_PENGUJI`) REFERENCES `penguji` (`ID_PENGUJI`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `target` */

insert  into `target`(`ID_TARGET`,`ID_SANTRI`,`ID_PENGUJI`,`JUDUL_TARGET`,`DESKRIPSI_TARGET`,`STATUS_TARGET`,`TANGGAL_UPLOAD`,`BATAS_UPLOAD`) values 
(7,1,1,'Hafalan juz 30','Hafalan Juz 30 bisa dicicil','Belum Tuntas','2020-05-28','2020-06-28'),
(8,3,4,'Hafalan Jus 1','Surat Al-Baqoroh panjang, semangat ya','Belum Tuntas','2020-05-28','2020-06-28'),
(9,1,2,'aaa','aaa','Sudah Tuntas','2020-05-28','2020-05-31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
