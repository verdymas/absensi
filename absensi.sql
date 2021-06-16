/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.38-MariaDB : Database - absensi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`absensi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `absensi`;

/*Table structure for table `absen` */

DROP TABLE IF EXISTS `absen`;

CREATE TABLE `absen` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `matkul` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `absen` */

insert  into `absen`(`no`,`nim`,`nama_lengkap`,`prodi`,`tanggal`,`matkul`,`keterangan`) values 
(1,'1931733076','Alisia Firda S','Manajemen Informatika','2021-02-05','B.Indonesia','Hadir');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `alamat_lengkap` longtext,
  `agama` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_user`,`nama_admin`,`ttl`,`jenis_kelamin`,`alamat_lengkap`,`agama`) values 
(1,'Maudy ','Kediri, 24 Februari 1991','Perempuan','Pare','Islam');

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `nidn` varchar(20) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `matkul` varchar(30) DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `alamat_lengkap` longtext,
  `agama` varchar(12) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`nidn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

insert  into `dosen`(`nidn`,`nama_dosen`,`matkul`,`ttl`,`jenis_kelamin`,`alamat_lengkap`,`agama`,`updated_at`,`created_at`) values 
('1','Aqila coba edit','1 edit','1 ed','1 eee','1','Islam','2021-06-08 00:00:00',NULL),
('22222','nanaaa','n','n','n','n','n','2021-05-08 00:00:00','2021-05-05 05:19:38'),
('5432112345','Rahman','B.Inggris','Surabaya, 27 April 1993','Perempuan','KEDIRI','Islam',NULL,NULL),
('65645','Rahman','gfgdf','gfdg','gfdg','gfgdf','gdfg',NULL,NULL),
('987654321','Aqila','B.Inggris','Surabaya, 27 April 1993','Perempuan','Kunjang','Islam',NULL,NULL),
('98765432100','Bella','Desain Antarmuka','Lamongan, 20 Agustus 1991','Perempuan','kediri','Islam',NULL,NULL),
('9898989898','q','q','q','q','q','q','2021-05-08 12:43:48','2021-05-08 12:43:48'),
('999','Safira F','Desain Antarmuka','Surabaya, 27 April 1993','a','a','a','2021-04-05 00:00:00',NULL);

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_semester` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kode_matkul` varchar(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` varchar(25) NOT NULL,
  `jam_selesai` time NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

insert  into `jadwal`(`id_jadwal`,`id_semester`,`id_kelas`,`kode_matkul`,`hari`,`jam_mulai`,`jam_selesai`) values 
(1,1,1,'MK001','senin','09:00:00','09:05:00');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(15) NOT NULL,
  `id_semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`nama_kelas`,`id_semester`) values 
(1,'A',1),
(2,'B',1),
(3,'C',1),
(4,'D',1),
(5,'E',1),
(6,'A',2),
(7,'B',2),
(8,'C',2);

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `semester` varchar(2) DEFAULT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `alamat_lengkap` longtext,
  `agama` varchar(12) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`user_id`,`id_kelas`,`id_semester`,`nim`,`nama_mhs`,`prodi`,`semester`,`ttl`,`jenis_kelamin`,`alamat_lengkap`,`agama`,`updated_at`,`created_at`) values 
(2,2,0,0,'1931733087','Ratna Dwi W','Manajemen Informatika','7','Kediri, 03 Januari 2000','Perempuan','Bujel, Kota Kediri','Islam','2021-04-05 00:00:00',NULL),
(3,3,0,0,'1931733082','Virginia Abrinsa','Manajemen Informatika','5','Kediri, 23 September 1999','Perempuan','Gurah, Kab. Kediri','Islam',NULL,NULL),
(10,5,0,0,'1931733057','Yeni','MI','6','Kediri, 12','P','kediri','islam','2021-05-30 04:41:53','2021-05-30 04:41:53');

/*Table structure for table `matkul` */

DROP TABLE IF EXISTS `matkul`;

CREATE TABLE `matkul` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL,
  `sks` varchar(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matkul` */

insert  into `matkul`(`kode_matkul`,`nama_matkul`,`sks`,`updated_at`,`created_at`) values 
('MK001','B.indonesia','4',NULL,NULL),
('MK002','B.Inggris','4',NULL,NULL),
('MK003','Kewarganegaraan','8',NULL,NULL),
('MK05','S','S','2021-04-04 12:06:36','2021-04-04 12:06:36'),
('MK06','AAA','A','2021-05-05 01:11:43','2021-05-05 01:11:43');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `pengumuman` longtext,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

insert  into `pengumuman`(`id`,`judul`,`pengumuman`,`updated_at`,`created_at`) values 
(1,'Mata Kuliah diundur','mata kuliah B.Inggris sementara diundur',NULL,NULL),
(2,'Pengumuman','Bahasa Inggris pertemuan ke-4 akan di adakan Quiz',NULL,NULL),
(111,'berita baru akuuu','edittt','2021-05-21 00:00:00','2021-05-08 13:02:31');

/*Table structure for table `semester` */

DROP TABLE IF EXISTS `semester`;

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(15) NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `semester` */

insert  into `semester`(`id_semester`,`semester`) values 
(1,'Ganjil'),
(2,'Genap');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mahasiswa_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`level`,`name`,`username`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`mahasiswa_id`) values 
(3,'mahasiswa','a','alisia','a@gmail.com',NULL,'$2y$10$QJT/b4WE1By83WMK6iEm8ONHRfdNw10fk4AolWcEWPaReIGzsM46u','B4dElkFQ3vzyfUyD2CXY8p3M1cW6piHd1KpLq9UtO4OP9FZkPX3wtU1ccQNO','2021-05-23 07:43:38','2021-05-23 07:43:38',NULL),
(5,'mahasiswa','w','','w@gmail.com',NULL,'$2y$10$EU5YOJUkjlA.jmsQezzIleGLP9vWMrCB6xk.2xKAEAK/I1phdzbrO','YJQnaiJQMQtvY7nKnCwu4aEka1e8ZphJY2cua13VA2FDmw4XnWyxADP1wjh6','2021-05-23 07:57:53','2021-05-23 07:57:53',NULL),
(6,'mahasiswa','Yeni','1931733057',NULL,NULL,'$2y$10$elzKAdFRSCUm89tBH2b9SeibOftHkMJwYYqGW9x00QxEY5fEstK7u',NULL,'2021-05-30 04:43:28','2021-05-30 04:43:28',NULL),
(7,'mahasiswa',NULL,'12',NULL,NULL,'$2y$10$B8KjvGymjJl8kWiTmvwKle0astcwSs1BBjvLJi5uSYdiQrHIs3zn6',NULL,'2021-05-30 05:24:55','2021-05-30 05:24:55',NULL),
(8,'mahasiswa',NULL,'13',NULL,NULL,'$2y$10$fyq9uobE4jr7fhwZlL4jhO1rXDAE87VrptGVdArb5sGdN8hn6giAi',NULL,'2021-05-30 05:25:46','2021-05-30 05:25:46',NULL),
(10,'admin','firda safira','safira','s@gmail',NULL,'$2y$10$Uyqj1Cvl87KYvWB3cjJGD.uyZkAtBCa1pyuaQyqFa.Aqy2EM6rgJu',NULL,'2021-06-05 06:39:10','2021-06-07 00:00:00',NULL),
(11,'admin','admin firda','adminp','admi@gmail',NULL,'$2y$10$4GjGBTpT7n/JT9QFfcpv7e.O5hhB7aoaiAN9LXDAyZ4mwdJO4pN4O',NULL,'2021-06-05 06:51:33','2021-06-07 00:00:00',NULL),
(13,'admin','firda','firday','f@gmail',NULL,'$2y$10$YqAOvVqKVD14YITjAzHMN.UWj5bfmzbaLYHGp4cTP8qTjYDQR6WyW',NULL,NULL,'2021-06-07 00:00:00',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
