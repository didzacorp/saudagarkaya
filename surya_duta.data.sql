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
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `copy_writing`
--

LOCK TABLES `copy_writing` WRITE;
/*!40000 ALTER TABLE `copy_writing` DISABLE KEYS */;
INSERT INTO `copy_writing` (`id`, `id_produk`, `judul`, `isi_content`, `tanggal`, `status`) VALUES (1,2,'NUTRISIO','NEO BRAIN adalah Superdrink ( jamu tetes konsentrasi tinggi ) dari formulasi 25 ekstrak herbal murni yang terstandar untuk terapi sel â€“ sel otak dan gangguan kesehatan yang berkaitan dengan syaraf otak tepi.\r\n\r\nNEO BRAIN merupakan inovasi formulasi herbal yang diramu secara fungsional dan rasional-medik dengan mengacu teknologi biomolekuler untuk optimalisasi bioavailabilitas.\r\n\r\nDengan memadukan kehebatan kearifan lokal (local genius) â€“ pusaka ramuan jamu nusantara yang telah teruji manfaatnya selama ratusan tahun â€“ menjadi karya formula unik NEO BRAIN yang berkasiat dan mengagumkan.\r\n\r\nManfaat NEO BRAIN Untuk Anak:\r\n- Meningkatkan Daya Ingat, Daya Konsentrasi, dan Kecerdasan.\r\n- Meningkatkan Imunitas.\r\n- Menigkatkan Mood.\r\n- Mencegah Step (Convulsion).\r\n- Meringankan Epilepsi.\r\n- Meringankan Diare, Thypus, DBD (Demam Berdarah)\r\n- Meringankan Autis, ADHD (Attention Defisit Hypheractivity Disorder).\r\n- Mencegah dari bahaya Radiasi (Hp, Laptop, TV, Dll).\r\n- Dll\r\n\r\nManfaat NEO BRAIN untuk Dewasa:\r\n- Mencegah Hipertensi, Stroke, Jantung Koroner, Alzaemer, Depresi, Stress.\r\n- Meringankan Epilepsi, Kejang-Kejang, Vertigo, dan Migrain.\r\n- Meningkatkan Daya Konsentrasi, Relaksasi, dan lain sebagainya.\r\n- Mencegah Kepikunan Dini.\r\n- Membantu Mengendalikan Psoriasis.\r\n- Memulihkan Ingatan.\r\n- Mencegah dari bahaya Radiasi (Hp, Laptop, TV, Dll).\r\n- Dll','2019-08-28','AKTIF');
/*!40000 ALTER TABLE `copy_writing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `detail_transaksi`
--

LOCK TABLES `detail_transaksi` WRITE;
/*!40000 ALTER TABLE `detail_transaksi` DISABLE KEYS */;
INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_produk`, `jumlah`, `harga`, `diskon`, `cashback`, `total`) VALUES (1,4,2,1,40000,0,0,40000),(59,44,2,2,60000,0,0,120000),(60,44,3,1,350000,0,0,350000),(61,47,3,1,350000,0,0,350000);
/*!40000 ALTER TABLE `detail_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `funnel`
--

LOCK TABLES `funnel` WRITE;
/*!40000 ALTER TABLE `funnel` DISABLE KEYS */;
INSERT INTO `funnel` (`id`, `nama_funnel`, `jumlah_trafic`, `link`, `status`) VALUES (1,'Ground',16,'http://suryaduta.fujindev.online/ground','AKTIF'),(2,'Starter',1,'http://suryaduta.fujindev.online/starter','AKTIF'),(3,'Red Nutrisio',0,'http://suryaduta.fujindev.online/rednutrisio','AKTIF'),(4,'Green Nutrisio',0,'http://suryaduta.fujindev.online/greennutrisio','AKTIF');
/*!40000 ALTER TABLE `funnel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`id`, `tanggal`, `gambar`, `id_admin`) VALUES (2,'2019-03-23','upload/a33229ce956c6a5b64376288a9a5a629628fe4896137d3f4d288c559dd2cb517.jpg','');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `komisi`
--

LOCK TABLES `komisi` WRITE;
/*!40000 ALTER TABLE `komisi` DISABLE KEYS */;
INSERT INTO `komisi` (`id`, `id_transaksi`, `komisi`, `jenis_komisi`, `id_member`, `tanggal`) VALUES (2,5,100000,'PENDAFTARAN','6','2019-09-02'),(5,4,0,'PENJUALAN','5','2019-09-02'),(6,4,4000,'PENJUALAN','4','2019-09-02'),(7,4,3000,'PENJUALAN','3','2019-09-02'),(8,6,500000,'UPGRADE LISENSI AGEN','4','2019-09-03'),(9,6,375000,'UPGRADE LISENSI AGEN','3','2019-09-03'),(10,44,30000,'PENJUALAN','0','2019-09-11'),(11,44,23000,'PENJUALAN','0','2019-09-11'),(12,47,20000,'PENJUALAN','2','2019-09-11'),(13,47,15000,'PENJUALAN','0','2019-09-11'),(14,48,100000,'PENDAFTARAN','3','2019-09-11');
/*!40000 ALTER TABLE `komisi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `log_alamat`
--

LOCK TABLES `log_alamat` WRITE;
/*!40000 ALTER TABLE `log_alamat` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_alamat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`id`, `nama`, `username`, `email`, `alamat`, `nomor_telepon`, `nama_bank`, `nomor_rekening`, `nama_rekening`, `upline_level_1`, `upline_level_2`, `upline_level_3`, `upline_level_4`, `tanggal_join`, `komisi`, `jumlah_transaksi`, `jumlah_barang`, `lisensi`) VALUES (2,'Dzakir Harist Abdullah','dzakir3628','dzakirharista@gmail.com','Jl Junaedi no 6 Kota Bandung','081223744803','BCA Syariah','0350042248','Dzakir','0','0','0','0','2019-03-14',5000,0,0,'BASIC'),(3,'Ananda Mahdar','ananda2376','anandamahdar@gmail.com','Jl Cibodas No.1','081223744803','Bank RIBA','0213219312','','2','0','0','0','2019-03-18',70000,0,0,'AGEN'),(4,'Andy ABa','andy2376','andy@gmail.com','Surapati Core','081223744803','Bank RIBA','0213219312','Andy','3','2','0','0','2019-03-18',70000,0,0,'AGEN'),(5,'Julius','julius2376','julius@gmail.com','Setia Budi','081223744803','Bank RIBA','0213219312','Julius','4','3','2','0','2019-03-18',75000,0,0,'AGEN'),(6,'Syifa','syifa2376','syifa@gmail.com','Dago','081223744803','Bank RIBA','0213219312','Syifa','5','4','3','2','2019-03-18',230000,0,0,'AGEN'),(8,'Dini Yuliani','dini2376','dini@gmail.com','','0826966779','','','','6','5','4','3','2019-08-31',0,0,0,'BASIC'),(9,'rahmat','rahmat2535','rahmat.ecoracing@gmail.com','q','q','q','q','q','3','2','0','0','2019-09-11',0,0,0,'BASIC');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `judul`, `source_video`, `isi_content`, `kategori`, `tanggal`, `jam`, `status`) VALUES (3,'Dashboard Content','https://www.youtube.com/watch?v=C-xF2MAFw5s','PGRpdiBjbGFzcz0icWwtZWRpdG9yIiBkYXRhLWdyYW1tPSJmYWxzZSIgY29udGVudGVkaXRhYmxlPSJ0cnVlIiBkYXRhLXBsYWNlaG9sZGVyPSJDb21wb3NlIGFuIGVwaWMuLi4iPjxoNT5QZW1iYWdpYW4gVW1yb2ggTW90b3IgTGFwdG9wIEhQIHwgUmVrb3IgQm9udXMgVGVyYmVzYXIgfCBQZW1haGFtYW4g','DASHBOARD','2019-09-08','16:29:28','AKTIF'),(4,'Trafic ','https://youtu.be/hxmRle2prh8','PGRpdiBjbGFzcz0icWwtZWRpdG9yIHFsLWJsYW5rIiBkYXRhLWdyYW1tPSJmYWxzZSIgY29udGVudGVkaXRhYmxlPSJ0cnVlIiBkYXRhLXBsYWNlaG9sZGVyPSJDb21wb3NlIGFuIGVwaWMuLi4iPjxwPjxicj48L3A+PC9kaXY+PGRpdiBjbGFzcz0icWwtY2xpcGJvYXJkIiBjb250ZW50ZWRpdGFibGU9InRydWUiIHRhYmluZGV4PSItMSI+PC9kaXY+PGRpdiBjbGFzcz0icWwtdG9vbHRpcCBxbC1oaWRkZW4iPjxhIGNsYXNzPSJxbC1wcmV2aWV3IiB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iYWJvdXQ6YmxhbmsiPjwvYT48aW5wdXQgdHlwZT0idGV4dCIgZGF0YS1mb3JtdWxhPSJlPW1jXjIiIGRhdGEtbGluaz0iaHR0cHM6Ly9xdWlsbGpzLmNvbSIgZGF0YS12aWRlbz0iRW1iZWQgVVJMIj48YSBjbGFzcz0icWwtYWN0aW9uIj48L2E+PGEgY2xhc3M9InFsLXJlbW92ZSI+PC9hPjwvZGl2Pg==','TRAFIC / LEADS','2019-09-08','16:32:18','AKTIF'),(5,'Funnel','https://www.youtube.com/watch?v=AyTNwlWHsZU&feature=youtu.be','PGRpdiBjbGFzcz0icWwtZWRpdG9yIiBkYXRhLWdyYW1tPSJmYWxzZSIgY29udGVudGVkaXRhYmxlPSJ0cnVlIiBkYXRhLXBsYWNlaG9sZGVyPSJDb21wb3NlIGFuIGVwaWMuLi4iPjxwPkJhZ2FpbWFuYSBDYXJhIE1lbmdndW5ha2FuIA==','FUNNEL','2019-09-08','17:06:58','AKTIF'),(6,'Copy Writing','https://www.youtube.com/watch?v=AyTNwlWHsZU&feature=youtu.be','PGRpdiBjbGFzcz0icWwtZWRpdG9yIiBkYXRhLWdyYW1tPSJmYWxzZSIgY29udGVudGVkaXRhYmxlPSJ0cnVlIiBkYXRhLXBsYWNlaG9sZGVyPSJDb21wb3NlIGFuIGVwaWMuLi4iPjxwPlBhc3Rpa2FuIEFuZGEgbWVub250b24gdmlkZW8gZGkgYXRhcyBkZW5nYW4gbGVuZ2thcCwgYWdhciBBbmRhIHRhdSA=','COPYWRITING','2019-09-08','17:09:09','AKTIF');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `omset`
--

LOCK TABLES `omset` WRITE;
/*!40000 ALTER TABLE `omset` DISABLE KEYS */;
/*!40000 ALTER TABLE `omset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pembayaran_komisi`
--

LOCK TABLES `pembayaran_komisi` WRITE;
/*!40000 ALTER TABLE `pembayaran_komisi` DISABLE KEYS */;
INSERT INTO `pembayaran_komisi` (`id`, `id_member`, `tanggal`, `jumlah`, `bukti_transfer`) VALUES (2,2,'2019-03-28',5000,'');
/*!40000 ALTER TABLE `pembayaran_komisi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `harga_member`, `deskripsi`, `promo`, `komisi`, `media`, `berat`, `kategori`, `diskon`, `nama_diskon`, `cashback`, `create_date`, `create_by`, `last_update`, `status`) VALUES (2,'Red Nutrisio',60000,40000,'TWFuZmFhdCBOZW8gQnJhaW4gdW50dWsgQW5hayA6Ck1lbmluZ2thdGthbiBEYXlhIEluZ2F0LCBEYXlhIEtvbnNlbnRyYXNpLCBkYW4gS2VjZXJkYXNhbi4KTWVuaW5na2F0a2FuIEltdW5pdGFzCk1lbmlna2F0a2FuIE1vb2QKTWVuY2VnYWggU3RlcCAoQ29udnVsc2lvbikKTWVyaW5nYW5rYW4gRXBpbGVwc2kKTWVyaW5nYW5rYW4gRGlhcmUsIFRoeXB1cywgREJEIChEZW1hbSBCZXJkYXJhaCkKTWVyaW5nYW5rYW4gQXV0aXMsIEFESEQgKEF0dGVudGlvbiBEZWZpc2l0IEh5cGhlcmFjdGl2aXR5IERpc29yZGVyKSwgZGxsCk1hbmZhYXQgTmVvIEJyYWluIHVudHVrIFJlbWFqYS9EZXdhc2EgOgpNZW5jZWdhaCBIaXBlcnRlbnNpLCBTdHJva2UsIEphbnR1bmcgS29yb25lciwgQWx6YWVtZXIsIERlcHJlc2ksIFN0cmVzcwpNZXJpbmdhbmthbiBFcGlsZXBzaSwgS2VqYW5nLUtlamFuZywgVmVydGlnbywgZGFuIE1pZ3JhaW4KTWVuaW5na2F0a2FuIERheWEgS29uc2VudHJhc2ksIFJlbGFrc2FzaSwgZGFuIGxhaW4gc2ViYWdhaW55YQpNZW5jZWdhaCBLZXBpa3VuYW4gRGluaQpNZW1iYW50dSBNZW5nZW5kYWxpa2FuIFBzb3JpYXNpcwpNZW11bGloa2FuIEluZ2F0YW4sIGRsbA==','','[\"5000\",\"4000\",\"3000\",\"2000\"]','[{\"sourceMedia\":\"https://s4.bukalapak.com/img/4924111638/w-1000/data.png\",\"type\":\"GAMBAR\"},{\"sourceMedia\":\"https://2.bp.blogspot.com/-ETKvk7l4Oh0/XNpope_9ZZI/AAAAAAAABpw/lfp9ZU2L65sFF6NrziRRoUByx6VmmHu5QCLcBGAs/s1600/P_20190513_093622%255B1%255D.jpg\",\"type\":\"GAMBAR\"},\r\n{\"sourceMedia\":\"https://nutrisio.net/wp-content/uploads/2019/01/IMG_20190106_103405.jpg\",\"type\":\"GAMBAR\"}]\r\n\r\n\r\n',250,'1','0','','','','','','AKTIF'),(3,'Green Nutrisio',350000,250000,'TWFuZmFhdCBOZW8gQnJhaW4gdW50dWsgQW5hayA6Ck1lbmluZ2thdGthbiBEYXlhIEluZ2F0LCBEYXlhIEtvbnNlbnRyYXNpLCBkYW4gS2VjZXJkYXNhbi4KTWVuaW5na2F0a2FuIEltdW5pdGFzCk1lbmlna2F0a2FuIE1vb2QKTWVuY2VnYWggU3RlcCAoQ29udnVsc2lvbikKTWVyaW5nYW5rYW4gRXBpbGVwc2kKTWVyaW5nYW5rYW4gRGlhcmUsIFRoeXB1cywgREJEIChEZW1hbSBCZXJkYXJhaCkKTWVyaW5nYW5rYW4gQXV0aXMsIEFESEQgKEF0dGVudGlvbiBEZWZpc2l0IEh5cGhlcmFjdGl2aXR5IERpc29yZGVyKSwgZGxsCk1hbmZhYXQgTmVvIEJyYWluIHVudHVrIFJlbWFqYS9EZXdhc2EgOgpNZW5jZWdhaCBIaXBlcnRlbnNpLCBTdHJva2UsIEphbnR1bmcgS29yb25lciwgQWx6YWVtZXIsIERlcHJlc2ksIFN0cmVzcwpNZXJpbmdhbmthbiBFcGlsZXBzaSwgS2VqYW5nLUtlamFuZywgVmVydGlnbywgZGFuIE1pZ3JhaW4KTWVuaW5na2F0a2FuIERheWEgS29uc2VudHJhc2ksIFJlbGFrc2FzaSwgZGFuIGxhaW4gc2ViYWdhaW55YQpNZW5jZWdhaCBLZXBpa3VuYW4gRGluaQpNZW1iYW50dSBNZW5nZW5kYWxpa2FuIFBzb3JpYXNpcwpNZW11bGloa2FuIEluZ2F0YW4sIGRsbA==+PC9kaXY+PGRpdiBjbGFzcz0icWwtY2xpcGJvYXJkIiBjb250ZW50ZWRpdGFibGU9InRydWUiIHRhYmluZGV4PSItMSI+PC9kaXY+PGRpdiBjbGFzcz0icWwtdG9vbHRpcCBxbC1oaWRkZW4iPjxhIGNsYXNzPSJxbC1wcmV2aWV3IiB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iYWJvdXQ6YmxhbmsiPjwvYT48aW5wdXQgdHlwZT0idGV4dCIgZGF0YS1mb3JtdWxhPSJlPW1jXjIiIGRhdGEtbGluaz0iaHR0cHM6Ly9xdWlsbGpzLmNvbSIgZGF0YS12aWRlbz0iRW1iZWQgVVJMIj48YSBjbGFzcz0icWwtYWN0aW9uIj48L2E+PGEgY2xhc3M9InFsLXJlbW92ZSI+PC9hPjwvZGl2Pg==','','[\"20000\",\"15000\",\"10000\",\"5000\"]','[{\"sourceMedia\":\"https://nutrisio.co.id/frontend/images/products/green_nutrio_leaf.png\",\"type\":\"GAMBAR\"},\r\n{\"sourceMedia\":\"https://s1.bukalapak.com/img/68803188611/original/65293372_344829332873666_1764031088835749626_n.jpg\",\"type\":\"GAMBAR\"}]',200,'1','-','-','','','','','AKTIF');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ref_kategori`
--

LOCK TABLES `ref_kategori` WRITE;
/*!40000 ALTER TABLE `ref_kategori` DISABLE KEYS */;
INSERT INTO `ref_kategori` (`id`, `nama_kategori`, `gambar`) VALUES (1,'NUTRISIO','https://lh3.googleusercontent.com/Tw9lRs1v4AlucRHK0-ZJb7Hdy7iTqa_E9I5kF8tUGWSxN5EAAorxMT5LUY2yYYPUOtM0f-oK=w1080-h608-p-no-v0'),(2,'SINERGY','https://s3-ap-southeast-1.amazonaws.com/prelo/images/resized/512x512/products/5cef6361259af40823a8edb8/essenzo-essential-oil-clove-bud-ea0597d1ec9d-7663lN-2-1559192417748.jpg'),(3,'MERCHANDISE','https://www.deherba.com/wp-content/uploads/2015/08/5d6b6306cfec933ce38306cd828210d5.jpg'),(4,'EVENT','https://cdn1-production-images-kly.akamaized.net/wAY_FJ3RPRZcTZQkBNyUCPNY4fE=/680x383/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2570058/original/076603100_1546466009-beberapa-herbal-terbaik-untuk-menyeimbangkan-hormon-anda.jpg');
/*!40000 ALTER TABLE `ref_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `rekap_transaksi`
--

LOCK TABLES `rekap_transaksi` WRITE;
/*!40000 ALTER TABLE `rekap_transaksi` DISABLE KEYS */;
INSERT INTO `rekap_transaksi` (`id`, `id_member`, `komisi`, `jumlah_penjualan`, `jumlah_barang`, `periode`) VALUES (1,16,100000,2,9,'2019-04');
/*!40000 ALTER TABLE `rekap_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` (`id`, `nama`, `isi`) VALUES (1,'URL_GAMBAR','https://admin.nutrisio.rm-rf.studio/'),(2,'KOMISI PENDAFTARAN','100000'),(3,'KOMISI UPGRADE','20;15;10');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `temp_media_produk`
--

LOCK TABLES `temp_media_produk` WRITE;
/*!40000 ALTER TABLE `temp_media_produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_media_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `trafic`
--

LOCK TABLES `trafic` WRITE;
/*!40000 ALTER TABLE `trafic` DISABLE KEYS */;
INSERT INTO `trafic` (`id`, `id_member`, `unique_id`, `id_funnel`, `tanggal`, `jam`, `ip_address`, `lokasi`, `user_agent`, `pixel`) VALUES (1,6,'GA1.2.1762263390.1552573313','1','2019-03-14','07:00','123.231.253.230','Bandung','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36','FACEBOOK'),(2,2,'r0bejk4a593c177r8euhgr9u96e0dln6','1','2019-09-06','12:18:47','192.168.7.93','UNKNOWN','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36','Facebook'),(5,2,'051k506ql1g0o4djjj82017tgq9bhhp5','1','2019-09-08','08:12:20','103.78.218.150','UNKNOWN','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0','Posster'),(7,2,'8hfuoo9aemi091pg72jnjdi8jejbgjs8','1','2019-09-08','08:15:50','140.213.52.121','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','udin'),(8,2,'fjddoivrt2781g5s6874tr703c1o5st4','2','2019-09-08','08:17:50','103.78.218.150','UNKNOWN','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36','PIXEL'),(9,2,'fjcbp9nl5u5qkhbcrcgcmu2tc90bgods','1','2019-09-08','22:42:40','103.78.218.150','UNKNOWN','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0','TestFireFox'),(10,2,'a0v1rqifa22ddufikojri60vtvdv9ivo','1','2019-09-09','17:28:34','192.168.7.75','UNKNOWN','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36','Boniw'),(11,2,'98nhoodknafvq4rl2etogffvo7am5dhj','1','2019-09-09','17:28:49','192.168.7.75','UNKNOWN','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36','Boniw'),(12,3,'blc96ufnk4q5b4me60r6kq8eb4316u61','1','2019-09-11','21:33:42','36.71.234.224','UNKNOWN','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36','FaceBook'),(13,3,'8hfuoo9aemi091pg72jnjdi8jejbgjs8','1','2019-09-11','21:40:15','140.213.26.48','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','IG'),(14,3,'qg7ekaj9sgkuk510vlmfm9erfab25oa6','1','2019-09-11','21:45:53','140.213.26.48','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','IG90'),(15,3,'ha4v0eea0pc1i3c2nea58h3ld19l8iv1','1','2019-09-11','21:46:59','140.213.26.48','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','IG69'),(16,3,'lsthotcj75qqmtib1ro694a5jbue8os6','1','2019-09-11','21:50:05','140.213.26.48','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','IG98'),(17,2,'4tupi5qlct4shheeun3gobevmg48k1c8','1','2019-09-11','21:56:14','140.213.26.48','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','PIXEL'),(18,3,'4tupi5qlct4shheeun3gobevmg48k1c8','1','2019-09-11','21:57:06','140.213.26.48','UNKNOWN','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','PIXEL'),(19,3,'r0bejk4a593c177r8euhgr9u96e0dln6','1','2019-09-11','22:03:23','36.71.234.224','UNKNOWN','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36','PIXEL'),(20,3,'1r3ttphdlpqou0g7iqrql08fs9b5obaf','1','2019-09-11','22:34:10','36.71.232.136','UNKNOWN','Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36','PIXEL');
/*!40000 ALTER TABLE `trafic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `training`
--

LOCK TABLES `training` WRITE;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
INSERT INTO `training` (`id`, `judul_materi`, `deskripsi_materi`, `video_souce`, `thumbnail`, `kategori`, `wajib_tonton`, `urutan`, `tanggal_update`, `jam_update`, `status`, `durasi_video`) VALUES (1,'Pengenalan Surya duta','QmFnYWltYW5hIENhcmEgTWVtYmFuZ3VuIEJpc25pcyBEaWdpdGFsIERlbmdhbiBUZXBhdCBTZWhpbmdnYSBTZWdlcmEgUHJvZml0LCBXYWxhdXB1biBHYXB0ZWsgLyBCZWx1bSBQdW55YSBQZW5nYWxhbWFuPwooQUJEaSBha2FuIG1lbWJlcmlrYW4gU0VNVUEgeWFuZyBBbmRhIGJ1dHVoa2FuIHVudHVrIGJpc2EgbWVuZ2hhc2lsa2FuIGRhcmkgZHVuaWEgZGlnaXRhbCBzZWphayBCVUxBTiBQRVJUQU1BKQoKbWVuZ3Vhc2FpIGRpZ2l0YWwgbWFya2V0aW5nIGl0dSBwZW50aW5nIA==','http://iandevlin.github.io/mdn/video-player/video/tears-of-steel-battle-clip-medium.mp4','https://sproutingphotographer.com/wp-content/uploads/2018/02/Business-of-Photography-Hero-Image-0113.jpg','MATERI TRAINING','WAJIB',1,'2019-08-20','00:00','AKTIF','12:00'),(2,'Bagi Hasil Surya Duta','PGRpdiBjbGFzcz0iY29sLW1kLTEyIj48cD48aDU+TGF1bmNoaW5nIFByb2R1ayBCYXJ1IEFCRGkgKyBIYWRpYWggVG90YWwgNTAgSnV0YSBSdXBpYWghISE8L2g1PjxoNT48YnI+PC9oNT48aDU+QWtoaXJueWEgeWFuZyBkaXR1bmdndS10dW5nZ3UgZGF0YW5nIGp1Z2EsIFByb2R1ayBCYXJ1IGRhcmkgQUJEaSB5YW5nIGZva3VzIGJlcnR1anVhbiB1bnR1ayBtZW1iYW50dSBBbmRhIGhpZHVwIGxlYmloIHNlaGF0ICZhbXA7IG1lbXBlcmJlc2FyIHBlbmdoYXNpbGFuIEFuZGEuIEFhbWlpbiA6KTxicj48YnI+QUJEaSBzZWRhbmcgc2FuZ2F0IGZva3VzIGtlIGluZHVzdHJpIGluaSBrYXJlbmEgc2VsYWluIGluZHVzdHJpbnlhIHlhbmcgc2FuZ2F0IGJlc2FyIChUL3RhaHVuKSwgdGVybnlhdGEga2VzZW1wYXRhbiB1bnR1ayBtZW5qYWRpIGJhZ2lhbiBiZXNhciBpbmR1c3RyaSBpbmkgVEVSQlVLQSBTQU5HQVQgTEVCQVIgYXNhbCB0YXUgdHJpayAmYW1wOyBzdHJhdGVnaW55YS4gRGFuIGJlcnVudHVuZ255YSwgc2VtdWEgeWFuZyBBQkRpIGxha3VrYW4gc2VsYW1hIGluaSwgbWVuZ2FyYWgga2UgaGFsIHlhbmcgdGVwYXQgdW50dWsgYmlzYSBtZW5qYWRpIGJhZ2lhbiBiZXNhciBkaSBpbmR1c3RyaSBpbmkuJm5ic3A7PC9oNT48aDU+U2FuZ2F0IGFtYXQgc2F5YW5nIHNla2FsaSBiaWxhIEFuZGEgdGlkYWsgaWt1dCBtZW5nYW1iaWwgYmFnaWFuIGRhcmkga2V1bnR1bmdhbiBiZXNhciBpbmkuPC9oNT48aDU+VGFucGEgYmFueWFrIGJhc2EtYmFzaSBsYWdpLCBzZWdlcmEgdG9udG9uIERFTkdBTiBMRU5HS0FQIGRhcmkgYXdhbCBzYW1wYWkgYWtoaXIgeWFhLCBqYWRpbGFoIG9yYW5nIGF3YWwgeWFuZyB0YXUgaWxtdW55YSwgdGF1IHByb21vbnlhICZhbXA7IG1lbWFuZmF0a2FuIHNlbXVhIGtldW50dW5nYW5ueWEuPC9oNT48aDU+PGJyPjxicj4qbW9ob24gZGlwYWhhbWksIHNhYXQgbGF1bmNoaW5nIHByb2R1ayB5YW5nIGR1bHUtZHVsdSwga2FtaSBtZWxha3VrYW4gUmUtU3RvY2sgc2FhdCBzdWRhaCBoYWJpcy4gTmFtdW4ga2FsaSBpbmkga2FtaSBha2FuIGJ1YXQgdGVyYmF0YXMgZGFuIHRpZGFrIGFrYW4gZGkgUmUtU3RvY2sgYmlsYSBzdWRhaCBoYWJpcy48YnI+PGJyPjwvaDU+PHA+PHN0cm9uZz5TaWxhaGthbiB0YW55YSBrZXBhZGEgYWRtaW4gYmlsYSBhZGEgeWFuZyBiZWx1bSBqZWxhcyA6IDA4MTIxOTk4Njg3NiAoVGVsZWdyYW0pPC9zdHJvbmc+PC9wPjxwPjxzdHJvbmc+RGFuIGphbmdhbiBsdXBhIHVudHVrIG1hc3VrIGtlIENoYW5uZWwgVGVsZWdyYW0gUmVzbWkgQUJEaSAmYW1wOyBDaGFubmVsIFRlbGVncmFtIEJhbmsgRGF0YSBBQkRpLiAoVG9tYm9sIHVudHVrIGxhbmdzdW5nIGJlcmdhYnVuZyBrZSBDaGFubmVsIFRlbGVncmFtIEFCRGkgYWRhIGRpIGF0YXMgdHVsaXNhbiBpbmksIHNpbGFoa2FuIGtsaWspPC9zdHJvbmc+PC9wPjxwPjxicj48L3A+PHA+PHN0cm9uZz5UZXJpbWEga2FzaWggOik8L3N0cm9uZz48L3A+PC9wPjwvZGl2Pg==','http://iandevlin.github.io/mdn/video-player/video/tears-of-steel-battle-clip-medium.mp4','http://sdlawtimmins.com/wp-content/uploads/2017/10/business-purchase-img.jpg','TRAINING','WAJIB',2,'2019-08-28','10:45:39','AKTIF','00:10:00');
/*!40000 ALTER TABLE `training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id`, `id_member`, `nama_pembeli`, `email_pembeli`, `nomor_telepon`, `alamat_pengiriman`, `kecamatan_pengiriman`, `kota_pengiriman`, `provinsi_pengiriman`, `kode_pos_pengiriman`, `tanggal`, `sub_total`, `ongkir`, `total`, `diskon`, `cashback`, `status`, `id_trafic`, `service_pengiriman`, `nomor_resi`, `keterangan`, `jenis_transaksi`, `kode_unik`, `update_time`) VALUES (4,6,'2','nunu@gmail.com','0812645786','Jl. Ir. H. Juanda No.348, Dago','Coblong','Kota Bandung','Jawa Barat ','40135','2019-09-02',40000,11000,51235,0,0,'TERKONFIRMASI',0,'JNE OKE','','','PENJUALAN',235,'2019-08-31 04:19:54'),(5,6,'Dini Yuliani','dini@gmail.com','0826966779','-','-','-','-','-','2019-09-02',0,0,500123,0,0,'TERKONFIRMASI',1,'-','','','PENDAFTARAN MEMBER (BASIC)',123,'2019-08-31 03:37:56'),(6,5,'Julius','julius@gmail.com','','','','','','','2019-09-03',0,0,2500005,0,0,'TERKONFIRMASI',0,'','','','UPGRADE LISENSI AGEN',5,'2019-09-03 21:47:13'),(8,2,'asada','asada@gmail.com','','','','','','','2019-09-08',0,0,0,0,0,'',7,'','','','PENDAFTARAN MEMBER (BASIC)',0,'2019-09-08 22:42:25'),(9,2,'Imam Mutaqien','devops@rm-rf.studio','','','','','','','2019-09-08',0,0,0,0,0,'',9,'','','','PENDAFTARAN MEMBER (BASIC)',0,'2019-09-08 22:43:32'),(10,2,'ucad','ucad@pilar.web.id','','','','','','','2019-09-09',0,0,0,0,0,'',11,'','','','PENDAFTARAN MEMBER (BASIC)',0,'2019-09-09 17:29:12'),(11,2,'JAKIR HORAS','Jakir@tuyul.online','089124124124','Batu Berbaris','Bandung Barat','17','1','0','2019-09-11',0,26000,0,0,0,'',0,'0','','','PENJUALAN',0,'2019-09-11 15:37:35'),(12,2,'Test a','test','084213123','qweqwewqe','test','232','3','0','2019-09-11',0,15000,0,0,0,'MENUNGGU KONFIRMASI',0,'0','','','PENJUALAN',0,'2019-09-11 16:40:00'),(13,2,'Boniw','boniw@gmail.com','0812312321','test','test','24','9','0','2019-09-11',0,8000,0,0,0,'MENUNGGU KONFIRMASI',0,'0','','','PENJUALAN',0,'2019-09-11 16:42:33'),(14,2,'Nunu NUNU','nunu@gmail.com','08912838123812','Jalan junaedi no 7','','Bandung','Jawa Barat','0','2019-09-11',1060000,10000,1050000,0,0,'MENUNGGU KONFIRMASI',0,'1','','','PENJUALAN',0,'2019-09-11 16:44:53'),(44,2,'DINDA','Dinda@tuyul.online','089124124124','CIBODAS','','Bangli','Bali','0','2019-09-11',496000,26000,470000,0,0,'TERKONFIRMASI',0,'0','','','PENJUALAN',4,'2019-09-11 21:05:52'),(45,3,'melissa evans','melissa.evans@broshegroup.com','','','','','','','2019-09-11',0,0,0,0,0,'',12,'','','','PENDAFTARAN MEMBER (BASIC)',0,'2019-09-11 21:50:21'),(46,2,'','','','','','','','','2019-09-11',0,0,0,0,0,'',2,'','','','PENDAFTARAN MEMBER (BASIC)',0,'2019-09-11 22:03:52'),(47,3,'Fajar','fajar','0894947474','tdtr4f\ntg\ntg','','Bangka Barat','Bangka Belitung','0','2019-09-11',392000,42000,350000,0,0,'TERKONFIRMASI',0,'1','','','PENJUALAN',4,'2019-09-11 21:13:03'),(48,3,'rahmat','rahmat.ecoracing@gmail.com','','','','','','','2019-09-11',0,0,0,0,0,'TERKONFIRMASI',20,'','','','PENDAFTARAN MEMBER (BASIC)',0,'2019-09-11 21:37:40'),(49,9,'rahmat','rahmat.ecoracing@gmail.com','','','','','','','2019-09-11',0,0,48,0,0,'BELUM BAYAR',0,'','','','UPGRADE LISENSI STOKIS',48,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `id_member`, `email`, `password`, `status`, `hak_akses`, `create_date`, `last_update`, `online`, `sesino`, `lastaktif`, `ipaddr`) VALUES (2,0,'vulnwalker@pilar.web.id','a61d31eebabb9247ff6abdd62c8361aa','AKTIF','ALL MODUL','','',1,'698298589','2019-08-21 14:17:33','103.84.140.49'),(3,0,'taufantritama69@gmail.com','202CB962AC59075B964B07152D234B70','AKTIF','ALL MODUL','','',1,'1016405044','2019-08-18 20:38:36','103.23.35.117'),(4,0,'kszxpo','a3bf5a28aef3c4d7d3d3417d7b41f023','AKTIF','ADMIN','','',1,'645197740','2019-09-11 21:35:35','36.71.234.224'),(5,2,'jakir@test.com','202cb962ac59075b964b07152d234b70','AKTIF','ADMIN','','',1,'195565726','2019-08-28 20:50:50','103.84.141.102'),(6,3,'anandamahdar@gmail.com','202cb962ac59075b964b07152d234b70','AKTIF','MEMBER','','',1,'195565726','2019-08-28 20:50:50','103.84.141.102'),(7,9,'rahmat.ecoracing@gmail.com','e10adc3949ba59abbe56e057f20f883e','AKTIF','MEMBER','','',0,'','','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
