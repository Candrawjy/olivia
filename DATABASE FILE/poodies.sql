-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 07:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kategori`
--

CREATE TABLE `jenis_kategori` (
  `id_jeniskategori` int(11) NOT NULL,
  `nama_jeniskategori` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `thumbnail_kategori` text DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kategori`
--

INSERT INTO `jenis_kategori` (`id_jeniskategori`, `nama_jeniskategori`, `target`, `thumbnail_kategori`, `slug`, `created_at`) VALUES
(9, 'Minuman', 'UMKM', 'minuman_2.jpg', 'minuman', '2022-10-01 17:58:19'),
(10, 'Jajanan', 'UMKM', 'jajanan_2.jpeg', 'jajanan', '2022-10-01 17:58:34'),
(11, 'Cepat Saji', 'UMKM', 'cepatsaji_2.jpg', 'cepat-saji', '2022-10-01 17:58:58'),
(12, 'Seafood', 'UMKM', 'seafood_2.jpg', 'seafood', '2022-10-01 17:59:27'),
(13, 'Desain Grafis', 'Jasa Kreatif', 'grafis_2.jpg', 'desain-grafis', '2022-10-01 18:00:15'),
(14, 'Illustrasi', 'Jasa Kreatif', 'illust_2.jpg', 'illustrasi', '2022-10-01 18:00:27'),
(15, 'Video Editor', 'Jasa Kreatif', 'editor_2.jpg', 'video-editor', '2022-10-01 18:00:37'),
(16, 'Programmer', 'Jasa Kreatif', 'programmer_2.jpg', 'programmer', '2022-10-01 18:00:51'),
(17, 'Aneka Nasi', 'UMKM', 'louis-hansel-CvLZ6hbIemI-unsplash_7.jpg', 'aneka-nasi', '2022-10-01 18:01:43'),
(18, 'Aneka Mie', 'UMKM', 'chinese-noodles-with-chicken-2022-01-18-23-53-18-utc~1_7.jpg', 'aneka-mie', '2022-10-01 21:31:02'),
(19, 'Italia', 'UMKM', 'classic-lasagna-with-bolognese-sauce-2021-08-26-23-06-51-utc~1_7.jpg', 'italia', '2022-10-01 21:34:08'),
(20, 'Burger', 'UMKM', 'hamburger-with-beef-meat-2022-01-19-00-15-04-utc~1_7.jpg', 'burger', '2022-10-01 21:38:17'),
(21, 'Kebab', 'UMKM', 'kebabs-with-meat-and-pumpkin-2021-09-02-08-45-26-utc~1_7.jpg', 'kebab', '2022-10-01 21:56:42'),
(22, 'Dessert', 'UMKM', 'sweet-cake-tasty-chocolate-dessert-2021-12-16-00-22-54-utc~2_7.jpg', 'dessert', '2022-10-01 21:58:34'),
(23, 'Sushi', 'UMKM', 'sushi-2021-08-26-18-10-33-utc~1_7.jpg', 'sushi', '2022-10-01 21:59:52'),
(24, 'Ice Cream', 'UMKM', 'tasty-ice-cream-with-blueberries-flower-flavour-i-2022-03-31-18-26-58-utc~1_7.jpg', 'ice-cream', '2022-10-01 22:08:31'),
(25, 'Pizza', 'UMKM', 'top-view-of-tasty-italian-pizzas-on-wooden-tableto-2022-02-01-22-39-47-utc~2_7.jpg', 'pizza', '2022-10-01 22:10:04'),
(26, 'Makanan', 'UMKM', 'makanan_2.jpeg', 'makanan', '2022-10-03 14:12:57'),
(27, 'Poster', 'Jasa Kreatif', 'POSTER_7.png', 'poster', '2022-10-03 14:53:43'),
(28, 'Logo', 'Jasa Kreatif', 'Street-Food-Festival-logo_7.png', 'logo', '2022-10-03 14:54:02'),
(29, 'Music Production', 'Jasa Kreatif', 'matt-botsford-OKLqGsCT8qs-unsplash_7.jpg', 'music-production', '2022-10-05 15:48:28'),
(30, 'Percetakan', 'Jasa Kreatif', 'percetakan-jakarta_2.jpg', 'percetakan', '2022-10-28 08:16:58'),
(31, 'Spanduk', 'Jasa Kreatif', 'spanduk_2.jpg', 'spanduk', '2022-10-28 08:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_umkm_jasa` int(11) NOT NULL,
  `id_jeniskategori` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_umkm_jasa`, `id_jeniskategori`, `nama_produk`, `deskripsi`, `harga`, `foto`, `created_at`) VALUES
(5, 13, 28, 'Desain Logo', 'Jasa desain logo dengan range harga Rp50.000 - Rp500.000 dan dengan ketentuan maksimal 3x revisi.', 200000, 'Street-Food-Festival-logo_11_2.png', '2022-10-01 18:30:54'),
(6, 13, 27, 'Desain Poster', 'Jasa desain logo dengan range harga Rp50.000 - Rp300.000 dan dengan ketentuan maksimal 3x revisi.', 50000, 'Poster-Produk_7.png', '2022-10-01 18:32:17'),
(7, 13, 15, 'Video Company Profile', 'Jasa edit video company profile dengan range harga Rp250.000 - Rp1.000.000 dan dengan ketentuan maksimal 3x revisi.', 250000, 'wahid-khene-iKdQCIiSMlQ-unsplash~1_7.jpg', '2022-10-01 18:35:00'),
(8, 13, 15, 'Motion Grafis', 'Jasa edit video motion grafis dengan range harga Rp150.000 - Rp700.000 dan dengan ketentuan maksimal 3x revisi.', 150000, 'sarath-p-raj-p8GmCEgSmmo-unsplash_7.jpg', '2022-10-01 18:36:17'),
(9, 13, 16, 'Jasa Pembuatan Website', 'Jasa pembuatan website dengan range harga Rp250.000 - Rp1.000.000 dan dengan ketentuan maksimal 3x revisi.', 250000, 'ilya-pavlov-OqtafYT5kTw-unsplash_7.jpg', '2022-10-01 18:37:22'),
(11, 14, 26, 'Ati & Ampela Goreng', 'Ati dan Ampela yang digoreng dengan tekstur yang renyah', 5000, 'Ati--Ampela-Goreng_2.jpg', '2022-10-03 14:06:39'),
(12, 14, 26, 'Ayam Bakar Blambangan', 'Ayam Bakar yang dibakar dengan bumbu khas blambangan', 15000, 'Ayam-Bakar-Blambangan_2.png', '2022-10-03 14:11:57'),
(13, 14, 26, 'Bumbu Rendang Daging Sapi', 'Bumbu Rendang yang dibuat dengan rasa yang khas Padang asli', 7000, 'Bumbu-Rendang-Daging-Sapi_2.jpg', '2022-10-03 14:14:38'),
(14, 14, 26, 'Perkedel Kentang', 'Perkedel yang dibuat dengan kentang yang ditumbuk halus', 2500, 'Perkedel-Kentang_2.jpg', '2022-10-03 14:15:27'),
(15, 14, 26, 'Soto Rendang', 'Soto yang dibuat dengan rasa Rendang yang khas', 20000, 'Soto-Ayam_7.png', '2022-10-03 14:16:22'),
(16, 18, 26, 'Cungkring', 'Makanan yang bikin banyak orang ketagihan ini merupakan paduan dari bibir, otot kaki sapi, dan lontong yang dilumuri bumbu kacang', 25000, 'Cungkring_7.png', '2022-10-03 14:18:49'),
(17, 17, 10, 'Lumpia Basah', 'Lumpia basah adalah camilan khas Jawa Barat yang rasanya lezat, bergizi, murah, dan juga mengenyangkan', 15000, 'Lumpia-Basah_7.png', '2022-10-03 14:20:00'),
(18, 16, 22, 'Martabak Coklat Keju', 'Martabak manis yang dipadukan dengan coklat dan keju asli', 30000, 'Martabak-Keju-Coklat-Encek_7.png', '2022-10-03 14:21:49'),
(19, 16, 22, 'Martabak Keju', 'Martabak manis yang dipadukan dengan keju asli yang berlimpah', 25000, 'Martabak-Keju-Encek_7.png', '2022-10-03 14:22:48'),
(20, 15, 10, 'Mie Ayam Asin', 'Mie ayam dengan rasa asin yang khas dan lezat', 15000, 'MIE-Asin-Bangka-_7.png', '2022-10-03 14:24:21'),
(21, 15, 10, 'Mie Ayam Yamin', 'Mie ayam yamin dengan rasa manis yang khas dan lezat', 16000, 'MIE-Yamin-Bangka_7.png', '2022-10-03 14:25:08'),
(22, 15, 17, 'Nasi Tim Ayam in Jakarta', 'Nasi tim yang dipadukan dengan Ayam dan bumbu yang khas nan lezat', 25000, 'NASI-TIM-NEW_7.png', '2022-10-03 14:26:12'),
(23, 19, 10, 'Sate Kambing', 'Sate dengan bumbu kacang yang kental, dan daging kambing yang lembut', 20000, 'Sate-Ayam_7.png', '2022-10-03 14:41:51'),
(24, 20, 21, 'Kebab Ayam', 'Kebab ayam dengan balutan tortila yang lembu dengan bumbu rempah kaya rasa dari timur.', 15000, 'KEBAB-JAY-NEW_7.png', '2022-10-03 14:44:59'),
(27, 21, 15, 'VIdeo Editor', 'Editing video cepat dengan waktu pengerjaan 2-3 Hari dengan kriteria. \r\nComplete Brief \r\nFootage yang tersusun', 100000, 'peter-stumpf-FhZEpxtTI_Y-unsplash_7.jpg', '2022-10-05 15:43:48'),
(28, 21, 29, 'Music Composer', 'Musik composer digital yang memberikan anda backsound dan soundtrack untuk video anda. Dengan waktu pengerjaan 5-7 Hari yaitu dengan kriteria .\r\n\r\nFull Creative Brief\r\nReference', 250000, 'james-stamler-k3heD_KwH0A-unsplash_7.jpg', '2022-10-05 16:00:15'),
(29, 22, 18, 'Mie Ayam Biasa', 'Mie Ayam dengan', 27000, 'Mie-Biasa_12.png', '2022-10-26 22:03:35'),
(30, 22, 18, 'Mie Ayam Bakso', 'Mie ayam bakso dengan ayam suir kecap.', 36000, 'Mie-Ayam-Bakso_12.png', '2022-10-26 22:09:20'),
(31, 22, 18, 'Mie Goreng', 'Mie Goreng Seafood dengan udang dan beserta seafood yang menggoda janda.', 45000, 'Mie-Goreng_12.png', '2022-10-26 22:11:31'),
(32, 23, 26, 'Gudeg', 'Gudeg biasa di lengkapi dengan nasi putih, ayam, telur rebus, tahu atau tempe, dan rebusan terbuat dari kulit sapi segar atau lebih dikenal dengan nama sambal goreng krecek', 27000, 'gudeg_7.jpg', '2022-10-27 22:59:23'),
(33, 23, 26, 'Sayur Krecek', 'Kulit sapi yang di keringkan dapat digunakan dalam masakan atau dibuat kerupuk, cara masak menggunakan bumbu-bumbunya sama dengan bumbu-bumbu sambal goreng, hanya kuahnya agak banyak', 27000, 'Krecek_7.jpg', '2022-10-27 23:04:08'),
(34, 24, 13, 'Produksi Paperbag Laminating Doft dan Spot UV', 'PAPERBAG SMALL \r\nSpesifikasi Paperbag :\r\n- Bahan Art Carton 260 gr\r\n- Ukuran  23 X 17 X 7\r\n- Laminating doft + Spot UV\r\n\r\nORDER 1000 @Rp. 18.000\r\nORDER 3000 @RP. 16.500\r\nORDER 6000 @Rp. 14.500', 17900, 'paper-bag-small_34.jpeg', '2022-10-28 07:52:22'),
(35, 24, 14, 'Paper Bag Bahan Art Carton 260 gr Ukuran Jumbo SPOT UV LOGO 4 SISI', 'Paper Bag Bahan Art Carton 260 gr (Finishing = Laminating doft + spot UV)\r\n\r\n- Paper Bag uk. 40 X 40 X 10, Khusus Castum, Minimal 1000 pcs, Lama Pekerjaan 3 Minggu', 49500, 'paper-bag-besar_34.jpeg', '2022-10-28 07:54:24'),
(36, 25, 13, 'Jasa Design Kalender Tahunan', 'Kami menawarkan jasa pembuatan design kalender (meja & dinding) tahunan dengan design custom sesuai dengan dengan request/brief.', 70000, 'brand-company-desain-kalender_35.png', '2022-10-28 08:06:14'),
(37, 25, 14, 'Jasa Cetak Buku Annual Report', 'Kami menawarkan jasa pembuatan cetak buku Laporan tahunan dengan design custom sesuai dengan dengan request/brief.', 500000, 'annual-report_35.jpeg', '2022-10-28 08:07:27'),
(38, 26, 13, 'Brosur Penawaran Energi Baik & Produk LNG', '- Bahan art paper\r\n- Ukuran 23,5 x 15 cm\r\n- Cetak digital printing\r\n- Finishing Jilid Stapless', 22500, 'e585504c5bc44375a044e79709c57c_36.jpg', '2022-10-28 08:15:48'),
(39, 26, 31, 'Spanduk 3,75x1,75 meter', '- Bahan Flexy \r\n- Ukuran 3,75x1,75 meter\r\n- Cetak digital printing', 400000, 'c0092299ca9ab163121efa2d2b7fb0_36.jpg', '2022-10-28 08:19:37'),
(40, 27, 30, 'Cetak Stiker Label Full Color (Express)', 'Cetak label kini bisa cepat, HANYA 1 JAM sudah termasuk finishing maksimal 15 lembar A3 tanpa laminasi, sehingga customer tidak perlu antri dan datang kembali untuk mengambil pekerjaan tersebut.', 11000, '16645210501807-STIKER---SLIDE-1--1-jam-jadi_37.png', '2022-10-28 08:27:13'),
(41, 27, 31, 'Cetak Banner 5 Meter', 'Cetak Banner 5 Meter secara cepat dan murah', 100000, '16541504291903-A_Page_3_37.png', '2022-10-28 08:29:56'),
(42, 27, 27, 'Poster A0 Kualitas Tinggi - UV', 'Poster A0 dengan Kualitas Tinggi - UV', 45000, '16559632671911-uv-a0_37.png', '2022-10-28 08:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_umkm_jasa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jml_rating` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_umkm_jasa`, `id_user`, `jml_rating`, `judul`, `deskripsi`, `status`, `created_at`) VALUES
(7, 21, 12, 8, 'keren', 'keren', 1, '2022-10-15 12:36:11'),
(8, 20, 12, 10, 'Rasa', 'enak rasanya, apalagi kebab ayamnya', 1, '2022-10-26 09:49:15'),
(9, 17, 17, 9, 'Lumpia Basah', '????', 0, '2022-10-26 11:06:34'),
(10, 15, 16, 10, 'Harga', 'Mie ayamnya enak, banyak, tapi nggak terlalu mahal ????\r\n ', 1, '2022-10-26 11:07:45'),
(11, 19, 19, 9, 'Rasa', 'Untuk daging cukup empuk dan rasa menyerap hingga kedalam', 1, '2022-10-26 11:26:46'),
(12, 20, 21, 10, 'Enak', 'Mantap', 1, '2022-10-26 11:32:12'),
(13, 20, 25, 10, 'review kebab', 'makanannya enak', 1, '2022-10-26 12:24:30'),
(14, 16, 25, 10, 'review martabak', 'martabaknya enak, manisnya pas', 1, '2022-10-26 12:25:07'),
(15, 13, 29, 10, 'Mantap', 'Pelayanannya bagus dan mantap', 1, '2022-10-26 13:12:44'),
(16, 20, 28, 10, 'Tasty and worth it to buy', 'The taste is good, I think for 15.000 rupiah it\'s worth it to buy.', 1, '2022-10-26 13:25:27'),
(17, 22, 32, 5, 'Very Good', 'Rasa bumbunya pas dan terasa, kematangan mienya yang pas (tidak terlalu matang dan tidak terlalu keras)', 1, '2022-10-26 23:01:22'),
(18, 16, 32, 6, 'Enak sekali', 'Rasanya sangat enak dan teksturnya halus. Keju yang diberikan juga banyak', 1, '2022-10-26 23:02:46'),
(19, 23, 2, 8, 'Mantap', 'Rasa nasi gudegnya enak dan mantap', 1, '2022-10-28 08:33:41'),
(20, 15, 29, 5, 'User', 'sangat enak', 1, '2022-10-28 08:34:08'),
(21, 17, 2, 9, 'Mantap', 'Rasa lumpia basahnya enak dan banyak variantnya', 1, '2022-10-28 08:34:33'),
(22, 24, 2, 8, 'Mantap', 'Hasil produksinya bagus', 1, '2022-10-28 08:36:22'),
(23, 25, 2, 8, 'Mantap', 'Hasil desain yang dibuat bagus dan kreatif', 1, '2022-10-28 08:36:48'),
(24, 26, 2, 8, 'Mantap', 'Bahan produk bagus dan kualitasnya terjamin', 1, '2022-10-28 08:37:16'),
(25, 27, 2, 10, 'Mantap', 'Hasil cetak bagus dan memang menggunakan bahan dengan kualitas yang sempurna', 1, '2022-10-28 08:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `created_at`) VALUES
(1, 'administrator', '2022-09-27 00:15:51'),
(2, 'user', '2022-09-27 00:16:16'),
(3, 'partner', '2022-09-27 00:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `umkm_jasa`
--

CREATE TABLE `umkm_jasa` (
  `id_umkm_jasa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jeniskategori` int(11) NOT NULL,
  `nama_umkmjasa` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jam_operasional` varchar(100) NOT NULL,
  `nohp_umkmjasa` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `jenis` int(11) NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umkm_jasa`
--

INSERT INTO `umkm_jasa` (`id_umkm_jasa`, `id_user`, `id_jeniskategori`, `nama_umkmjasa`, `deskripsi`, `jam_operasional`, `nohp_umkmjasa`, `kota`, `lokasi`, `thumbnail`, `jenis`, `slug`, `created_at`) VALUES
(13, 1, 13, 'Digivoks', 'Digivoks adalah digital agensi yang memberikan jasa desain grafis, pembuatan website, dan editing video.', '08.00 - 20.00', '62895377562532', 'Kota Bogor', 'https://goo.gl/maps/TCkisqx5pQGHUesm6', 'Banner-Desain_7.PNG', 2, 'digivoks', '2022-10-01 18:18:36'),
(14, 9, 17, 'RM Makan Ayam Bakar Blambangan', 'Ayam Bakar Blambangan adalah ayam bakar khas Palembang yang memiliki ciri khas yaitu berupa marinasi ayam yang sangat nikmat dan penuh rempah rempah. Ditambah dengan bumbu sambal yang lumayan membuat ayam blambangan menggoyang lidah penikmatnya.', '10.00 – 22.00', '6285283884218', 'Kab. Bogor', 'https://goo.gl/maps/6LgyFAZRGymrZ52T6', 'Banner-Preview_7.jpg', 1, 'rm-makan-ayam-bakar-blambangan', '2022-10-01 21:22:35'),
(15, 9, 18, 'Mie Ayam Bangka AL', 'Mi kenyal yang dimasak dengan kecap ini cocok banget untuk memanjakan lidahmu malam ini.\r\nSelain itu, ada juga bakso dan tahu dengan kuah kaldu gurih yang bisa kamu campurkan sendiri.\r\nUntuk menikmati makan malam di warung Mie Ayam Bakso Bangka AL, kamu juga bisa pesan es campur yang menyegarkan.', '10.00 – 23.00', '628128145888', 'Kota Bogor', 'https://goo.gl/maps/gny2LHqr2a7xfBQy5', 'Banner-Preview_71.jpg', 1, 'mie-ayam-bangka-al', '2022-10-01 22:19:06'),
(16, 9, 10, 'Martabak Encek Suryakencana', 'Martabak Encek atau yang disebut juga dengan Martabak Suken ini merupakan salah satu yang kondang di Bogor. Keberadaanya meramaikan dunia kuliner sudah sejak puluhan tahun yang lalu.\r\nTepatnya berjualan sejak tahun 1975, dan tetap eksis samapi sekarang ini. Bahkan, saking larisnya, baru 3 jam saja sudah ludes diburu pembeli. Para pembeli datang bahkan sebelum buka, dan antre dengan sabarnya.', '10.00 – 18.00', '628567079427', 'Kota Bogor', 'https://g.page/martabak-bangka-legenda?share', 'Martabak-Banner_7.jpeg', 1, 'martabak-encek-suryakencana', '2022-10-01 22:20:42'),
(17, 9, 10, 'Lumpia Basah Suryakencana', 'Lumpia Gang aut ini termasuk satu di antara tempat makan lumpia basah yang cukup populer di Bogor.\r\nSudah ada sejak 1972, Lumpia Gang Aut ini bisa kamu kunjungi di Gang Aut, Jl Suryakencana.\r\nTidak sulit menemukan lumpia ini karena punya ciri khas gerobak warna hijau yang selalu mangkal di depan Ngo Hiang.\r\nSatu porsinya terdiri dari isian yang komplit yaitu ada tauge, bengkuang, tahu, ebi giling, dan telur.\r\nMeski sudah sangat terkenal dan legendaris, Lumpia Gang Aut hanya dibanderol sebesar Rp 15 ribu saja.', '09.00 – 18.00', '6289533919358', 'Kota Bogor', 'https://goo.gl/maps/D7X2MPGayetZ7suy5', 'Banner-Lumpia_7.png', 1, 'lumpia-basah-suryakencana', '2022-10-01 22:25:12'),
(18, 9, 10, 'Cungkring Pak Jumat Suryakencana', 'Dalam bahasa Sunda, Cungkring itu adalah potongan kikil dari bagian kepala sapi yang dimasak bumbu kuning. Kemudian diguyur bumbu kacang.\r\nPak Jumat sendiri sudah mulai berjualan sejak tahun 1975. Cungkring Pak Jumat terletak di ujung jalan Suryakencana lebih dekat ke Gang Aut. Lokasinya strategis karena persis di bahu jalan. Bisa take away atau makan di tempat.', '07.00 – 17.00', '628981636162', 'Kota Bogor', 'https://goo.gl/maps/4Fb9y4wPQbnYSSA46', 'Banner-Cungkring_7.png', 1, 'cungkring-pak-jumat-suryakencana', '2022-10-01 22:29:03'),
(19, 9, 17, 'Sate Anda Kali Abang', 'Sate Anda Kali Abang sudah ada sejak tahun 1978, yang merupakan milik Haji Thohir Murtado. Di sini, kamu bisa menikmati aneka menu oalahan daging. Ada tongseng, sop iga, gulai, hingga sate yang menjadi menu andalananya. Harga per porsi sate kambing berisikan 10 tusuk dibanderol Rp 40.000. Sementara untuk menu sop, tongseng, dan gulai dibanderol dengan harga mulai dari Rp 35.000-40.000.', '10.00 - 20.30', '0218877881', 'Bekasi', 'https://goo.gl/maps/cBYbu72kD5fWGkkj9', 'banner_7.jpg', 1, 'sate-anda-kali-abang', '2022-10-03 11:06:28'),
(20, 1, 10, 'Kebab Jay', 'Kebab Ayam & Sapi', '15.00 - 22.00', '6282112411808', 'Jakarta', 'https://www.google.com/maps/dir//kebab+jay/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e698ceec0cae95b:0x28d4', 'kbab_jay_9.jpg', 1, 'kebab-jay', '2022-10-03 14:06:22'),
(21, 1, 15, 'Hearman Studio', 'Hearman Studio merupakan sebuah production house yang bergerak di bidang Musik dan juga Videografi. Dengan style visual yang modern dan elegan membuat hearman studio memiliki kredibilitas dalam seni visual.', '07.00 - 19.00', '6285892878087', 'Kab.Bogor', '-', 'Preview-02-01_7.png', 2, 'hearman-studio', '2022-10-05 15:33:31'),
(22, 30, 18, 'Mie Ayam Gondangdia', 'Terletak di wilayah Gondangdia, tempat makan mie satu ini sudah hadir di tengah warga Jakarta sejak tahun 1968. Setelah resto pertama mereka di Jalan RP. Soeroso nomor 36 Cikini mengalami kebakaran pada tahun 2014, sekarang mereka berpindah ke lokasi baru yang ada di Jalan Cikini IV nomor 12A, Menteng, Jakarta Pusat.\r\n\r\nMenu favorit di Mie Ayam Gondangdia sendiri adalah mie ayam jamur. Di sini kamu akan melihat sajian dari mie yang lebih keriting ditaburi dengan potongan ayam serta jamur di bagian atasnya. Mie pun akan terasa semakin lezat dengan tambahan minyak rahasia yang memberikan rasa gurih.', '10.00 - 20.00', '6281315165247', 'Jakarta', 'https://goo.gl/maps/QYG7BZ2cCA2CPxPL8', 'Banner-Mie-Gondangdia_12.png', 1, 'mie-ayam-gondangdia', '2022-10-26 21:56:02'),
(23, 30, 26, 'Nasi Gudeg Bu Rini', 'Warung makan sederhana ini menyediakan masakan rumahan yang bakal bikin kamu kangen sama Jogja. Menu utama yang ditawarkan adalah nasi gudeg dengan berbagai pilihan lauk seperti ayam goreng, ayam opor, telor pindang, dan rendang', '07.30-19.30', '0218875072', 'Bekasi', 'https://goo.gl/maps/o3NfAjE5Q3WnBzr87', 'Banner_7.jpg', 1, 'nasi-gudeg-bu-rini', '2022-10-27 22:49:38'),
(24, 34, 13, 'MISSINDO UTAMA', 'Masindo Utama Nusantara adalah pemasok independen terkemuka untuk instalasi peralatan GSM, 3G dan Serat optik dan layanan terkelola untuk Industri Telekomunikasi Indonesia termasuk pemeliharaan tingkat pertama, manajemen proyek, integrasi jaringan turnkey, CME, SITAC, optimasi Base station, LOS, dan konsultasi teknik. Kami menyediakan berbagai layanan infrastruktur telekomunikasi untuk operator jaringan dan melayani perusahaan penyewaan saluran tetap, nirkabel, dan menara melalui jaringan kantor regional kami yang luas yang mencakup sebagian besar provinsi di Indonesia.', '08.00 - 17.00', '6282112090157', 'Jakarta', 'https://goo.gl/maps/mgBTNEvgSYP3f2ZD7', 'TZWwxz.jpg', 2, 'missindo-utama', '2022-10-28 07:49:23'),
(25, 35, 13, 'BRAND MEDIA APAAJA', 'BrandCompany, salah satu perusahaan di bawah naungan Brandcompanygroup, merupakan creative agency yang bergerak di bidang jasa desain (termasuk copywriting, translasi, ilustrasi, fotografi, videografi dan percetakan) dengan spesialisasi produk marketing & corporate branding communication seperti branding, annual report, sustainability report, kalender & agenda, company profile, brosur, katalog, merchandise, video production, website, advertisement, digital interaktif, konten publikasi, media dan desain kolateral lainnya.\r\n\r\nBrandCompany telah dipercaya dan berpengalaman menangani ratusan klien korporat dari berbagai lini industri.', '09.00 - 16.00', '0895377562532', 'Jakarta', 'https://goo.gl/maps/YZpwaJieoypSDvgF8', 'brand-company_35.jpeg', 2, 'brand-media-apaaja', '2022-10-28 08:04:50'),
(26, 36, 13, 'Mitra Cipta Utama', 'Mitra Cipta Utama terdaftar di Bekasi Indonesia. Itu diterbitkan dalam Berita Negara pada 2014 dengan BN 102 TBN 49017.', '08.00 - 16.00', '62895377562532', 'Kota Bekasi', 'https://goo.gl/maps/kGdmmNDgWWRKMk6D9', NULL, 2, 'mitra-cipta-utama', '2022-10-28 08:14:39'),
(27, 37, 30, 'Gundaling Printing', 'Perusahaan yang bergerak di bidang printing dan document service, menyediakan solusi pencetakan demi layanan dokumen secara efektif dan efisien dengan teknologi terkini, berkualitas, serta bertujuan membina hubungan dengan klien secara berkelanjutan.', '07.00 - 22.00', '6281311228399', 'Kota Bogor', 'https://goo.gl/maps/jwCjXMrGGre4cqNCA', 'booth_37.jpg', 2, 'gundaling-printing', '2022-10-28 08:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nohp_user` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `nama_user`, `email_user`, `password`, `nohp_user`, `is_active`, `created_at`) VALUES
(1, 3, 'CANDRA WIJAYA', 'canderaw8@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '91806', 1, '2022-09-27 11:21:04'),
(2, 1, 'Candra Wijaya', 'candraw71@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0895377562532', 1, '2022-09-27 11:30:55'),
(7, 1, 'Farhan Hermansyah', 'farhankaldu@gmail.com', 'd1bbb2af69fd350b6d6bd88655757b47', '085892878087', 1, '2022-09-27 13:12:59'),
(9, 1, 'Dewa Satria', 'dewa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '081311293294', 1, '2022-10-01 17:56:58'),
(10, 2, 'Test User', 'zeroyproud@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0895377562532', 1, '2022-10-01 23:47:07'),
(11, 2, 'dfsfs', 'fsfds@dsgsgd', 'fcea920f7412b5da7be0cf42b8c93759', '342342', 0, '2022-10-14 14:49:33'),
(12, 1, 'Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '91806', 1, '2022-10-14 22:23:23'),
(13, 2, 'nama', 'nama@nama.com', '25f9e794323b453885f5181f1b624d0b', '12345678910', 0, '2022-10-15 12:32:10'),
(14, 2, 'Muhammad Arya Rifan ', 'muhammadaryarifan17@gmail.com', '702a8ee01b245983b292a113ecc5fd44', '085780706300', 0, '2022-10-26 10:58:22'),
(15, 2, 'Aulia Khairunisa', 'auliakhai02@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', '081266042549', 1, '2022-10-26 11:00:03'),
(16, 2, 'Kamil', 'orkhansahin@gmail.com', '14806479947076b54314a4c7934466db', '081296967383', 1, '2022-10-26 11:00:31'),
(17, 2, 'Rahma Fairuz Rania', 'rahmarahma@apps.ipb.ac.id', '81649130eeae0b7d66eccce16702c3b6', '081214603038', 1, '2022-10-26 11:03:28'),
(18, 2, 'Putri Maulani Rahma', 'pmaulanirahma94@gmail.com', 'b6ccce0dffdb1c06659ed4ecdacedc7f', '082386117090', 1, '2022-10-26 11:12:53'),
(19, 2, 'Hafiz Zamiliusri Ramadhan', 'Hafizzamiliusri@gmail.com', 'eb1de7412f0340f23c18cf89a3761890', '081295220442', 1, '2022-10-26 11:23:57'),
(21, 2, 'Muhammad Fiqih', 'muhammadfiqih953@gmail.com', 'e1aebf8e44b5e35385d43f6bcd34474d', '085155411077', 1, '2022-10-26 11:27:58'),
(22, 2, 'muthi', 'muthiahhumaira@apps.ipb.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', '11', 0, '2022-10-26 11:28:49'),
(23, 2, 'rian', 'rian@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '08123456789', 0, '2022-10-26 11:45:40'),
(24, 2, 'Nova Sukmawati', 'novasukmawati6@gmail.com', '98768edd27aec08e4949f272b858e52e', '081212493908', 1, '2022-10-26 12:03:56'),
(25, 2, 'alya azzahra', 'alyaazzahhra@gmail.com', 'c8ce5d98a06a52cba67191a5a2abe76f', '081212400113', 1, '2022-10-26 12:21:20'),
(26, 2, 'Muhammad Aldryansyah Pamungkas', 'aldryansyah30@gmail.com', '3b2fff77a2460eef8954ade859d2b472', '0895608837548', 1, '2022-10-26 12:30:06'),
(28, 2, 'Hazimah A. harjanti', 'ha.harjanti@gmail.com', '634e04804db7cc489f6355fe1a021a32', '081932295992', 1, '2022-10-26 13:09:52'),
(29, 2, 'User', 'user@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '91806', 1, '2022-10-26 13:10:22'),
(30, 3, 'Partner', 'partner@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '91806', 1, '2022-10-26 13:10:44'),
(31, 2, 'Yuni Nur Rohmatilah', 'ynurrohmatilah@gmail.com', '5fe39f3aaf9069b4b17b405692d295cb', '087776572428', 0, '2022-10-26 15:51:40'),
(32, 2, 'dinda', 'adindakeshia@gmail.com', 'e4186a8fc0b1c6c3931d3ad54fcaa024', '085883219530', 1, '2022-10-26 22:58:40'),
(33, 2, 'Ahmad Fairuz Zaki Widyatna ', 'zakruz23.1@gmail.com', 'ddd06de928f7127a9236973779c397e5', '081331058501', 1, '2022-10-27 06:22:02'),
(34, 3, 'PT. MISSINDO UTAMA', 'missindo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '085217294729', 1, '2022-10-28 07:43:06'),
(35, 3, 'PT BRAND MEDIA APAAJA', 'brand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '085189261739', 1, '2022-10-28 08:00:12'),
(36, 3, 'Mitra Cipta Utama', 'mitracipta@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '089518936591', 1, '2022-10-28 08:09:24'),
(37, 3, 'Gundaling Printing', 'gundaling@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '08118114188', 1, '2022-10-28 08:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `token` text NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email_user`, `token`, `created_at`) VALUES
(5, 'fsfds@dsgsgd', 'WTDNQqW9f8D9s/a/jH6b5ktV7rARBdzuOhLzWN7U4Ik=', 1665733773),
(6, 'nama@nama.com', 'Q79g75jdcEcYCwmytmeaLzs4hPQz0MrStAMYyRRBpuc=', 1665811930),
(7, 'muhammadaryarifan17@gmail.com', 'cjUnW4ZZTcJuFtGH2eNOsQ5lFfKYlJuUAXmBt7ZoH1k=', 1666756702),
(13, 'yoonmin@gmail.com', 'S3d0SaEwYNB6BkwjkFs90ODau9LHFyHtKGjjysMHJHI=', 1666758283),
(15, 'muthiahhumaira@apps.ipb.ac.id', 'O+PpLxfOuFsn2rdwefwEabEq4zMjDI0MrOZQUOk6Bt4=', 1666758529),
(16, 'rian@gmail.com', '5EX0OVIqECalqf51GC30Yyp+VvM/C36txbrFBuuxG3o=', 1666759540),
(20, 'mingyuunv_k@gmail.com', 'KNWrX23bobSrURncQKBlnAJT3hTvvgP96uICLzihnyU=', 1666764019),
(22, 'ynurrohmatilah@gmail.com', 'SucsgnmP7OEHlfo60r8C/1Ys92ODEZtA3uF1T0tXLZI=', 1666774300);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_umkm_jasa` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_user`, `id_umkm_jasa`, `created_at`) VALUES
(14, 2, 17, '2022-10-01 23:43:40'),
(15, 2, 15, '2022-10-01 23:43:48'),
(16, 2, 16, '2022-10-01 23:44:04'),
(17, 10, 14, '2022-10-01 23:49:14'),
(19, 7, 15, '2022-10-25 22:00:06'),
(20, 7, 20, '2022-10-25 22:00:20'),
(21, 7, 16, '2022-10-25 22:01:33'),
(23, 21, 20, '2022-10-26 11:31:36'),
(25, 29, 13, '2022-10-26 13:11:46'),
(26, 12, 20, '2022-10-27 20:52:03'),
(27, 12, 21, '2022-10-27 20:52:12'),
(28, 29, 15, '2022-10-28 08:31:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kategori`
--
ALTER TABLE `jenis_kategori`
  ADD PRIMARY KEY (`id_jeniskategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jeniskategori` (`id_jeniskategori`),
  ADD KEY `id_umkm_jasa` (`id_umkm_jasa`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_umkm_jasa` (`id_umkm_jasa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `jml_rating` (`jml_rating`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `umkm_jasa`
--
ALTER TABLE `umkm_jasa`
  ADD PRIMARY KEY (`id_umkm_jasa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jeniskategori` (`id_jeniskategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_umkm_jasa` (`id_umkm_jasa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kategori`
--
ALTER TABLE `jenis_kategori`
  MODIFY `id_jeniskategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `umkm_jasa`
--
ALTER TABLE `umkm_jasa`
  MODIFY `id_umkm_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
