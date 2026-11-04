-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: kosfix
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Wahyu','1234567','Wahyu  Hidayah'),(2,'budi','1234567','Budi Setiawan');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_fasilitas`
--

DROP TABLE IF EXISTS `daftar_fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_fasilitas` (
  `id_fasilitas` int(3) NOT NULL AUTO_INCREMENT,
  `daftar_fasilitas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_fasilitas`
--

LOCK TABLES `daftar_fasilitas` WRITE;
/*!40000 ALTER TABLE `daftar_fasilitas` DISABLE KEYS */;
INSERT INTO `daftar_fasilitas` VALUES (1,'AC'),(2,'Balkon atau teras'),(3,'WiFi Gratis'),(4,'Dapur'),(5,'TV'),(6,'Parkiran'),(7,'Tempat jemuran'),(8,'Kamar mandi luar'),(9,'Kamar mandi dalam'),(10,'Security'),(11,'Laundry'),(12,'Ruang tamu'),(13,'Kasur beserta perlengkapan tidur');
/*!40000 ALTER TABLE `daftar_fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_kos`
--

DROP TABLE IF EXISTS `daftar_kos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_kos` (
  `id_kos` int(11) NOT NULL AUTO_INCREMENT,
  `id_penyewa` int(11) NOT NULL,
  `nama_kos` varchar(100) NOT NULL,
  `alamat_kos` varchar(100) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `tentang_kos` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_kos`),
  KEY `id_penyewa` (`id_penyewa`),
  CONSTRAINT `daftar_kos_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_kos`
--

LOCK TABLES `daftar_kos` WRITE;
/*!40000 ALTER TABLE `daftar_kos` DISABLE KEYS */;
INSERT INTO `daftar_kos` VALUES (8,2,'Kos Rifqi 2nd','Jalan Hertasning Raya, Pandang, Kota Makassar, Sulawesi Selatan, Indonesia','Samping hotel dalton','Ini kos rifqi yang kedua',1),(9,1,'Wahyu 2nd','Jalan Talasalapang, Gunung Sari, Kabupaten Bantaeng, Sulawesi Selatan, Indonesia','Dekat pertamina','Ini kos wahyu yang kedua',1),(10,2,'Kos Resty','Warung Resty, Moncongloe, Kabupaten Maros, Sulawesi Selatan, Indonesia','Samping jalan masuk royal sentraland','Murah meriah',1),(11,4,'Kos Nyaman Sari Asri','VFFQ+V98, Jl. Sahabat Raya, Tamalanrea Indah, Kec. Tamalanrea, Kota Makassar, Sulawesi Selatan 90245','Bangunan ketiga dari kiri','Kos Nyaman Sari Asri adalah destinasi hunian ideal bagi para mahasiswa, pekerja, dan para profesional muda yang mencari tempat tinggal yang nyaman dan strategis. Berlokasi di pusat kota, kami berkomitmen untuk memberikan lingkungan yang aman, bersih, dan ',1);
/*!40000 ALTER TABLE `daftar_kos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasilitas` (
  `id_fasilitas_kos` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(100) DEFAULT NULL,
  `fasilitas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_fasilitas_kos`),
  KEY `id_kos` (`id_kos`),
  CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_kos`) REFERENCES `daftar_kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas`
--

LOCK TABLES `fasilitas` WRITE;
/*!40000 ALTER TABLE `fasilitas` DISABLE KEYS */;
INSERT INTO `fasilitas` VALUES (12,8,'1'),(13,8,'2'),(14,8,'3'),(15,9,'10'),(16,9,'11'),(17,9,'13'),(18,10,'4'),(19,10,'6'),(20,10,'8'),(21,10,'13'),(22,11,'3'),(23,11,'4'),(24,11,'6'),(25,11,'9');
/*!40000 ALTER TABLE `fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gambar_kamar`
--

DROP TABLE IF EXISTS `gambar_kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gambar_kamar` (
  `id_gambar_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `foto_kamar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gambar_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gambar_kamar`
--

LOCK TABLES `gambar_kamar` WRITE;
/*!40000 ALTER TABLE `gambar_kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `gambar_kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gambar_kamar_temp`
--

DROP TABLE IF EXISTS `gambar_kamar_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gambar_kamar_temp` (
  `id_gambar_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `id_penyewa` int(11) NOT NULL,
  `foto_kamar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gambar_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gambar_kamar_temp`
--

LOCK TABLES `gambar_kamar_temp` WRITE;
/*!40000 ALTER TABLE `gambar_kamar_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `gambar_kamar_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gambar_kos`
--

DROP TABLE IF EXISTS `gambar_kos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gambar_kos` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(11) NOT NULL,
  `foto_kos` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gambar`),
  KEY `id_kos` (`id_kos`),
  CONSTRAINT `gambar_kos_ibfk_1` FOREIGN KEY (`id_kos`) REFERENCES `daftar_kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gambar_kos`
--

LOCK TABLES `gambar_kos` WRITE;
/*!40000 ALTER TABLE `gambar_kos` DISABLE KEYS */;
INSERT INTO `gambar_kos` VALUES (5,8,'http://localhost/kos-kosan/uploads/kos/hotel_interior_furniture_107062_800x600.jpg'),(6,8,'http://localhost/kos-kosan/uploads/kos/Tanpa Judul.jpg'),(7,9,'http://localhost/kos-kosan/uploads/kos/hotel_room_bed_39745_1280x720.jpg'),(8,9,'http://localhost/kos-kosan/uploads/kos/5.jpg'),(9,10,'http://localhost/kos-kosan/uploads/kos/hotel_room_bed_39745_1280x720.jpg'),(10,10,'http://localhost/kos-kosan/uploads/kos/1.jpg'),(11,11,'http://localhost/kos-kosan/uploads/kos/11-illira-hotel-1280x720.jpg'),(12,11,'http://localhost/kos-kosan/uploads/kos/8808.11820.san-diego.la-pensione-hotel.hero-OHZWskPZ-61267-1280x720.jpeg'),(13,11,'http://localhost/kos-kosan/uploads/kos/easpark-hotel-yogyakarta-saham-IDX-EAST-1280x720.jpg'),(14,11,'http://localhost/kos-kosan/uploads/kos/Ersha-Hotel-Banjarmasin-Exterior.JPEG'),(15,11,'http://localhost/kos-kosan/uploads/kos/hotel_room_bed_39745_1280x720.jpg');
/*!40000 ALTER TABLE `gambar_kos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kamar`
--

DROP TABLE IF EXISTS `kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(11) DEFAULT NULL,
  `nama_kamar` varchar(100) DEFAULT NULL,
  `tarif_bulanan` int(11) DEFAULT NULL,
  `tarif_tahunan` int(11) DEFAULT NULL,
  `status_kamar` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kamar`),
  KEY `id_kos` (`id_kos`),
  CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_kos`) REFERENCES `daftar_kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kamar`
--

LOCK TABLES `kamar` WRITE;
/*!40000 ALTER TABLE `kamar` DISABLE KEYS */;
INSERT INTO `kamar` VALUES (25,8,'R101',100000,1000000,'1','http://localhost/kos-kosan/uploads/1.jpg'),(26,8,'R102',150000,2500000,'1','http://localhost/kos-kosan/uploads/8.jpg'),(27,9,'W1',250000,2500000,'1','http://localhost/kos-kosan/uploads/1.jpg'),(28,9,'W2',250000,2500000,'0','http://localhost/kos-kosan/uploads/hotel_interior_furniture_107062_800x600.jpg'),(29,10,'101',500000,5000000,'1','http://localhost/kos-kosan/uploads/Tanpa Judul.jpg'),(30,10,'102',500000,5000000,'0','http://localhost/kos-kosan/uploads/8.jpg'),(31,11,'101',500000,5000000,'1','http://localhost/kos-kosan/uploads/8.jpg'),(32,11,'201',500000,5000000,'0','http://localhost/kos-kosan/uploads/set-up-a-bedroom-that-feels-like-a-hotel-room-.jpg');
/*!40000 ALTER TABLE `kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kamar_temp`
--

DROP TABLE IF EXISTS `kamar_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kamar_temp` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(11) NOT NULL,
  `nama_kamar` varchar(100) DEFAULT NULL,
  `tarif_bulanan` int(11) DEFAULT NULL,
  `tarif_tahunan` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kamar_temp`
--

LOCK TABLES `kamar_temp` WRITE;
/*!40000 ALTER TABLE `kamar_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `kamar_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penghuni`
--

DROP TABLE IF EXISTS `penghuni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penghuni` (
  `id_penghuni` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_penghuni`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghuni`
--

LOCK TABLES `penghuni` WRITE;
/*!40000 ALTER TABLE `penghuni` DISABLE KEYS */;
INSERT INTO `penghuni` VALUES (14,'Rifqi','rifqiagain@mail.com','$2y$10$Tzlad2ndm6f1Jsmfi5dEI.elqexxsSetyiZKbfjKrJtyRbmJChGf2',''),(21,'zahra','zahra@gmail.com','$2y$10$16SFASGouL9qxYZtbAe9lOt/BlfocfJuJfRf/3wEJmF5A/8DsQt/K',NULL),(32,'yasril','yasril@gmail.com','$2y$10$pf8A0aE5ykCa2N5z.EUufe0/Piv00XUGksU6xN3aZOl3y.hd0os2K',NULL),(33,'joseph','joseph@gmail.com','$2y$10$bR3aCbkV7KZE4hUfvoCjCuZ7sPPH5rL1vKpihsyiThZjbKRzUxLU.',NULL),(34,'Angel','angel@gmail.com','$2y$10$kK.9n9rB9C74X36MKKB1oeGxL1LTOzg6C2eKeoo1lJnx/P7q/8EJm',NULL),(35,'mario','mario@gmail.com','$2y$10$KGzVGhTD2g2K0IVSPGn.euIVZsJSkInaIqn9tADePADdwLxWyEI6a',NULL),(36,'yusuf','yusuf@gmail.com','$2y$10$Ld129CDf5ByFpBKXalULhuBN6qP5h6.Aj/KqtPEXnTMS7gZ.HpCEe',NULL),(37,'gegeh','gegeh@gegeh.com','$2y$10$jVlX1KwoNjbCsajbf3HQueT0zMyOL/XP8a8ewBjwiFl8zZ2vzXjAe',NULL),(38,'gegeh1','gegeh1@gegeh1.com','$2y$10$yRcOGoeEQSLwVC/Hdql5r.X26Ke7i5jPT5H2pDbAQYZCG3t1k3nrq',NULL),(39,'wahyu123','wahyu123@gmail.com','$2y$10$Cc9x45hC2aOWIUL4fKeV/.jIFeObtYp4e7EuzwozmqNvJai5KEilK',NULL);
/*!40000 ALTER TABLE `penghuni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyewa`
--

DROP TABLE IF EXISTS `penyewa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penyewa` (
  `id_penyewa` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_penyewa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyewa`
--

LOCK TABLES `penyewa` WRITE;
/*!40000 ALTER TABLE `penyewa` DISABLE KEYS */;
INSERT INTO `penyewa` VALUES (1,'wahyu','wahyu@email.com','081241978859','$2y$10$y/seIaptPmlYsBE6Zoldsun1Zb5iHMuxWCj9WvtVfjmzTdKYkNIhq',NULL),(2,'rifqi','rifqi@gmail.com','123456789','$2y$10$wJeXojeTaSwNvPycS3QBpOVSdBDnvDSZzNjwfRt28abJ4d8xRLBG2',NULL),(3,'wahyu123','wahyu123@gmail.com','082190604707','$2y$10$kgeh8K.FIc4JiCo.3WdFYeIoOVW4uug7xh4wKoW6mzafoyZ24jyR.',NULL),(4,'wahyu1234','wahyuh@gmail.com','082190604707','$2y$10$ecttrld9ThZRH9WI7cp/Nu/QmEL0WC61QHR2dScBcz7Fshz4IK4v6',NULL);
/*!40000 ALTER TABLE `penyewa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kos` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_penghuni` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `expire_date` date NOT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan`
--

LOCK TABLES `pesanan` WRITE;
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` VALUES (1,11,31,33,'2023-08-01','2023-09-01'),(2,8,25,33,'2023-08-01','2023-09-01'),(5,9,27,33,'2023-08-01','2024-08-01'),(6,10,29,33,'2023-08-01','2024-02-01'),(7,8,26,33,'2023-08-01','2023-09-01');
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tes`
--

DROP TABLE IF EXISTS `tes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tes` (
  `tes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tes`
--

LOCK TABLES `tes` WRITE;
/*!40000 ALTER TABLE `tes` DISABLE KEYS */;
INSERT INTO `tes` VALUES (1),(3);
/*!40000 ALTER TABLE `tes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-31  8:03:50
