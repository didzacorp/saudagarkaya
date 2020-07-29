-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: surya_duta
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `harga` decimal(18,2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` decimal(18,2) NOT NULL,
  `diskon` decimal(18,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `id_member` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produk` (`id_produk`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `copy_writing`
--

DROP TABLE IF EXISTS `copy_writing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `copy_writing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi_content` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `detail_transaksi`
--

DROP TABLE IF EXISTS `detail_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `cashback` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penjualan` (`id_transaksi`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `funnel`
--

DROP TABLE IF EXISTS `funnel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_funnel` text NOT NULL,
  `jumlah_trafic` int(11) NOT NULL,
  `link` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `id_admin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `komisi`
--

DROP TABLE IF EXISTS `komisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NOT NULL,
  `komisi` decimal(10,0) NOT NULL,
  `jenis_komisi` text NOT NULL,
  `id_member` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penjualan` (`id_transaksi`),
  CONSTRAINT `komisi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `log_alamat`
--

DROP TABLE IF EXISTS `log_alamat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `kode_pos` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` text NOT NULL,
  `nama_bank` text NOT NULL,
  `nomor_rekening` text NOT NULL,
  `nama_rekening` text NOT NULL,
  `upline_level_1` text NOT NULL,
  `upline_level_2` text NOT NULL,
  `upline_level_3` text NOT NULL,
  `upline_level_4` text NOT NULL,
  `tanggal_join` date NOT NULL,
  `komisi` decimal(10,0) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `lisensi` text NOT NULL COMMENT 'CALON MEMBER, BASIC, AGEN, STOKIS',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `source_video` text NOT NULL,
  `isi_content` longtext NOT NULL,
  `kategori` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `omset`
--

DROP TABLE IF EXISTS `omset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` char(4) NOT NULL,
  `bulan` char(2) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jenis_omset` text NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `omset_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pembayaran_komisi`
--

DROP TABLE IF EXISTS `pembayaran_komisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembayaran_komisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `bukti_transfer` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `pembayaran_komisi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` text NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `harga_member` decimal(10,0) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `promo` longtext NOT NULL,
  `komisi` text NOT NULL,
  `media` longtext NOT NULL,
  `berat` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `diskon` text NOT NULL,
  `nama_diskon` text NOT NULL,
  `cashback` text NOT NULL COMMENT 'isi json / lisensi',
  `create_date` text NOT NULL COMMENT 'dd:mm:yyyy hh:ii:ss',
  `create_by` text NOT NULL COMMENT 'user id',
  `last_update` text NOT NULL COMMENT 'dd:mm:yyyy hh:ii:ss',
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ref_kategori`
--

DROP TABLE IF EXISTS `ref_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` text NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rekap_transaksi`
--

DROP TABLE IF EXISTS `rekap_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rekap_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `komisi` decimal(10,0) NOT NULL,
  `jumlah_penjualan` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `periode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `temp_media_produk`
--

DROP TABLE IF EXISTS `temp_media_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_media_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `media` longtext NOT NULL,
  `id_produk` int(11) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `trafic`
--

DROP TABLE IF EXISTS `trafic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trafic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `unique_id` longtext NOT NULL,
  `id_funnel` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` text NOT NULL,
  `ip_address` text NOT NULL,
  `lokasi` text NOT NULL,
  `user_agent` text NOT NULL,
  `pixel` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_materi` text NOT NULL,
  `deskripsi_materi` longtext NOT NULL,
  `video_souce` text NOT NULL,
  `thumbnail` text NOT NULL,
  `kategori` text NOT NULL,
  `wajib_tonton` text NOT NULL,
  `urutan` int(11) NOT NULL,
  `tanggal_update` date NOT NULL,
  `jam_update` text NOT NULL,
  `status` text NOT NULL,
  `durasi_video` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `nama_pembeli` text NOT NULL,
  `email_pembeli` text NOT NULL,
  `nomor_telepon` text NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `kecamatan_pengiriman` text NOT NULL,
  `kota_pengiriman` text NOT NULL,
  `provinsi_pengiriman` text NOT NULL,
  `kode_pos_pengiriman` text NOT NULL,
  `tanggal` date NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `ongkir` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `cashback` decimal(10,0) NOT NULL,
  `status` text NOT NULL,
  `id_trafic` int(11) NOT NULL,
  `service_pengiriman` text NOT NULL,
  `nomor_resi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_transaksi` text NOT NULL,
  `kode_unik` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `hak_akses` text NOT NULL COMMENT 'MEMBER;PRODUK;BILLING',
  `create_date` text NOT NULL COMMENT 'dd:mm:yyyy hh:ii:ss',
  `last_update` text NOT NULL COMMENT 'dd:mm:yyyy hh:ii:ss',
  `online` int(11) NOT NULL,
  `sesino` text NOT NULL,
  `lastaktif` text NOT NULL,
  `ipaddr` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary table structure for view `view_rekap_komisi`
--

DROP TABLE IF EXISTS `view_rekap_komisi`;
/*!50001 DROP VIEW IF EXISTS `view_rekap_komisi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_rekap_komisi` AS SELECT 
 1 AS `id_member`,
 1 AS `komisi`,
 1 AS `totalPenjualan`,
 1 AS `tanggal`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_rekap_komisi_backup`
--

DROP TABLE IF EXISTS `view_rekap_komisi_backup`;

-- failed on view `view_rekap_komisi_backup`: CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rekap_komisi_backup` AS select `komisi`.`id` AS `id`,`komisi`.`id_penjualan` AS `id_penjualan`,`komisi`.`komisi` AS `komisi`,`komisi`.`jenis_komisi` AS `jenis_komisi`,`komisi`.`id_member` AS `id_member`,`komisi`.`tanggal` AS `tanggal` from `komisi` group by `komisi`.`id_member`


--
-- Table structure for table `watched_training`
--

DROP TABLE IF EXISTS `watched_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `watched_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` text NOT NULL,
  `id_training` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`),
  KEY `id_training` (`id_training`),
  CONSTRAINT `watched_training_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`),
  CONSTRAINT `watched_training_ibfk_2` FOREIGN KEY (`id_training`) REFERENCES `training` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Final view structure for view `view_rekap_komisi`
--

/*!50001 DROP VIEW IF EXISTS `view_rekap_komisi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_rekap_komisi` AS select `member`.`id` AS `id_member`,sum(`komisi`.`komisi`) AS `komisi`,(select count(`komisi`.`id`) from `komisi` where ((`komisi`.`jenis_komisi` = 'PENJUALAN') and (`komisi`.`id_member` = `member`.`id`))) AS `totalPenjualan`,`komisi`.`tanggal` AS `tanggal` from (`komisi` left join `member` on((`member`.`id` = `komisi`.`id_member`))) where (`komisi`.`komisi` > 0) group by `member`.`id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_rekap_komisi_backup`
--

/*!50001 DROP VIEW IF EXISTS `view_rekap_komisi_backup`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_rekap_komisi_backup` AS select `komisi`.`id` AS `id`,`komisi`.`id_penjualan` AS `id_penjualan`,`komisi`.`komisi` AS `komisi`,`komisi`.`jenis_komisi` AS `jenis_komisi`,`komisi`.`id_member` AS `id_member`,`komisi`.`tanggal` AS `tanggal` from `komisi` group by `komisi`.`id_member` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-12 21:51:42
