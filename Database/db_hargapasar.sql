-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 11:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hargapasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_config`
--

CREATE TABLE `tb_config` (
  `id_app` varchar(1) NOT NULL,
  `nama_app` varchar(16) NOT NULL,
  `desc_app` varchar(64) NOT NULL,
  `alias_app` varchar(3) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url_app` varchar(64) NOT NULL,
  `anchor_app` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_config`
--

INSERT INTO `tb_config` (`id_app`, `nama_app`, `desc_app`, `alias_app`, `logo`, `url_app`, `anchor_app`) VALUES
('1', 'HARGA PASAR', 'Aplikasi Sistem Informasi Pasar', 'HP', '', 'https://apps.aulianza.com/hargapasar', 'RPL-4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kat`, `nama`) VALUES
(1, 'Bahan Bakar'),
(2, 'Bawang'),
(3, 'Beras'),
(4, 'Besi'),
(5, 'Cabai'),
(6, 'Daging'),
(7, 'Garam'),
(8, 'Gula'),
(9, 'Ikan'),
(10, 'Kacang'),
(11, 'Kayu'),
(12, 'Kopi'),
(13, 'Margarin'),
(14, 'Mie Instant'),
(15, 'Minyak Goreng'),
(16, 'Palawija'),
(17, 'Pupuk'),
(18, 'Rempah'),
(19, 'Sayuran'),
(20, 'Semen'),
(21, 'Seng'),
(22, 'Susu'),
(23, 'Telur'),
(24, 'Tepung Terigu'),
(25, 'Lain-lain'),
(26, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelaspasar`
--

CREATE TABLE `tb_kelaspasar` (
  `id_kelaspasar` varchar(4) NOT NULL,
  `kelaspasar` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelaspasar`
--

INSERT INTO `tb_kelaspasar` (`id_kelaspasar`, `kelaspasar`) VALUES
('0001', '1.A'),
('0002', '1.B'),
('0003', '1.C');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logharga`
--

CREATE TABLE `tb_logharga` (
  `id_log` int(11) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `hrglama` varchar(100) NOT NULL,
  `hrgbaru` varchar(100) NOT NULL,
  `waktu_setelah` date NOT NULL,
  `waktu_sebelum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_logharga`
--

INSERT INTO `tb_logharga` (`id_log`, `id_produk`, `namaproduk`, `kategori`, `hrglama`, `hrgbaru`, `waktu_setelah`, `waktu_sebelum`) VALUES
(7, 86, 'Minyak Tanah (liter)', 'Bahan Bakar', 'Rp. 10.500,-', 'Rp. 10.250,-', '2017-06-02', '2017-05-26'),
(8, 1, 'Beras I/A (kg)', 'Beras', 'Rp. 12.000,-', 'Rp. 12.000,-', '2017-06-02', '2017-05-31'),
(9, 2, 'Beras I/B (kg)', 'Beras', 'Rp. 11.000,-', 'Rp. 10.500,-', '2017-05-26', '2017-06-02'),
(10, 3, 'Beras Medium (kg)', 'Beras', 'Rp. 10.000,-', 'Rp. 9.000,-', '2017-05-26', '2017-06-02'),
(11, 4, 'Gula Pasir LN (kg)', 'Gula', 'Rp. 13.000,-', 'Rp. 13.000,-', '2017-05-26', '2017-06-02'),
(12, 5, 'Gula Pasir DN (kg)', 'Gula', 'Rp. 13.000,-', 'Rp. 13.000,-', '2017-05-26', '2017-06-02'),
(13, 6, 'Minyak Goreng Bimoli Botol (liter)', 'Minyak Goreng', 'Rp. 15.000,-', 'Rp. 15.000,-', '2017-05-25', '2017-06-02'),
(14, 7, 'Minyak Goreng Tanpa Merk (kg)', 'Minyak Goreng', 'Rp. 12.000,-', 'Rp. 12.000,-', '2017-05-26', '2017-06-02'),
(15, 8, 'Daging Ayam Broiler (kg)', 'Daging', 'Rp. 24.500,-', 'Rp. 32.500,-', '2017-05-26', '2017-06-02'),
(16, 9, 'Daging Ayam Kampung (kg)', 'Daging', 'Rp. 36.000,-', 'Rp. 45.000,-', '2017-05-26', '2017-06-02'),
(17, 10, 'Daging Sapi Murni (kg)', 'Daging', 'Rp. 155.000,-', 'Rp. 135.000,-', '2017-05-26', '2017-05-31'),
(18, 90, 'Solar (liter)', 'Bahan Bakar', 'Rp. 7.500,-', 'Rp. 7.500,-', '2017-05-26', '2017-06-02'),
(19, 87, 'Gas Elpiji 12 kg (tabung)', 'Bahan Bakar', 'Rp. 150.000,-', 'Rp. 150.000,-', '2017-05-26', '2017-06-02'),
(20, 88, 'Gas Elpiji 3 kg (tabung)', 'Bahan Bakar', 'Rp. 18.000,-', 'Rp. 18.000,-', '2017-05-26', '2017-06-02'),
(21, 89, 'Premium (liter)', 'Bahan Bakar', 'Rp. 8.000,-', 'Rp. 8.000,-', '2017-05-26', '2017-06-02'),
(22, 16, 'Beras UB (kg)', 'Beras', 'Rp. 10.000,-', 'Rp. 11.000,-', '2017-05-26', '2017-06-02'),
(23, 17, 'Beras Keumala (kg)', 'Beras', 'Rp. 10.000,-', 'Rp. 10.000,-', '2017-05-26', '2017-06-02'),
(24, 18, 'Beras Kampung (kg)', 'Beras', 'Rp. 9.000,-', 'Rp. 11.000,-', '2017-05-26', '2017-06-02'),
(25, 19, 'Gula Merah (kg)', 'Gula', 'Rp. 13.000,-', 'Rp. 13.000,-', '2017-05-26', '2017-06-02'),
(26, 20, 'Gula Semut (kg)', 'Gula', 'Rp. 24.000,-', 'Rp. 30.000,-', '2017-05-26', '2017-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasar`
--

CREATE TABLE `tb_pasar` (
  `id_pasar` varchar(8) NOT NULL,
  `no_reg` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `status` varchar(16) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `luas` int(11) NOT NULL,
  `foto1` varchar(128) NOT NULL,
  `date_crt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasar`
--

INSERT INTO `tb_pasar` (`id_pasar`, `no_reg`, `nama`, `status`, `lokasi`, `tgl_berdiri`, `luas`, `foto1`, `date_crt`) VALUES
('00000001', 'BNA-01', 'Pasar Kartini Peunayong', 'Tradisional', 'Jl. Kartini, Peunayong, Kuta Alam, Kota Banda Aceh, Aceh 23122', '2017-01-01', 200, 'pasar-peunayong.jpg', '2017-05-25'),
('00000002', 'BNA-02', 'Pasar Rukoh', 'Tradisional', 'Jl. Rukoh Utama, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23112', '2017-01-01', 150, 'pasar-rukoh.jpg', '2017-05-25'),
('00000003', 'BNA-03', 'Pasar Seutui', 'Tradisional', 'Jl. Teuku Umar, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '2017-01-01', 100, 'pasar-seutui.png', '2017-05-25'),
('00000005', 'BNA-04', 'Pasar Neusu', 'Tradisional', 'Jl. Neusu Aceh, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '2017-01-01', 150, 'pasar-neusu.jpg', '2017-05-25'),
('00000006', 'ABS-02', 'Pasar Keutapang II', 'Tradisional', 'Jl. Keutapang Mata Ie, Kec. Darul Imarah, Kab. Aceh Besar, Aceh 23233', '2017-01-02', 100, 'pasar-keutapang.jpg', '2017-05-25'),
('00000007', 'ABS-01', 'Pasar Induk Lambaro', 'Tradisional', 'Jl. Lambaro, Kec. Ingin Jaya, Kab. Aceh Besar, Aceh 23238', '2017-01-01', 100, 'pasar-lambaro.jpg', '2017-05-25'),
('00000008', 'BNA-05', 'Pasar Gampong Peuniti', 'Tradisional', 'Jl. Peuniti, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '2017-05-14', 150, 'pasar-peuniti.png', '2017-05-25'),
('00000009', 'ABS-03', 'Pasar Lambaro Angan', 'Tradisional', 'Jl. Lambaro Angan, Kec. Darussalam, Kab. Aceh Besar, Aceh 23373', '2017-05-01', 150, 'pasar-lambaro-angan.jpg', '2017-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedagang`
--

CREATE TABLE `tb_pedagang` (
  `id_ped` varchar(8) NOT NULL,
  `id_pasar` varchar(8) NOT NULL,
  `kioslos` varchar(16) NOT NULL,
  `luas_kl` int(11) NOT NULL,
  `reg_ped` varchar(32) NOT NULL,
  `tgl_reg` date NOT NULL,
  `status` varchar(16) NOT NULL,
  `dagangan` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat_lhr` varchar(64) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `ket` varchar(128) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `date_crt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pedagang`
--

INSERT INTO `tb_pedagang` (`id_ped`, `id_pasar`, `kioslos`, `luas_kl`, `reg_ped`, `tgl_reg`, `status`, `dagangan`, `nama`, `tempat_lhr`, `tgl_lhr`, `alamat`, `telp`, `ket`, `foto`, `date_crt`) VALUES
('00000001', '00000003', 'K.1', 16, '201601010004', '2016-01-11', 'Kontrak', 'Kelontong', 'aulianza', 'Banda Aceh', '1995-12-30', 'Jl. Banda Aceh-Medan No. 11', '08118880551', 'Edit', '', '2016-10-17'),
('00000002', '00000002', 'K.1', 24, '201601010001', '2016-01-05', 'Kontrak', 'Sayuran', 'Miftahul Jannah', 'Banda Aceh', '1999-11-18', 'Jl. Banda Aceh-Medan No. 11 No. 33', '085756575639', '', '', '2016-10-17'),
('00000003', '00000001', 'K.2', 12, '201601010002', '2016-10-01', 'Kontrak', 'Pecah Belah', 'Dwi Riesky', 'Padang', '1991-03-01', 'Jl. Banda Aceh-Medan No. 11 No.09', '085756575631', '', '9.jpg', '2016-10-17'),
('00000004', '00000001', 'K.4', 24, '201601010003', '2016-01-01', 'Kontrak', 'Elektronik', 'Supardi Gunawan', 'Medan', '1979-01-02', 'Jl. Banda Aceh-Medan No. 11 No. 13', '085756575636', '', '', '2016-10-17'),
('00000005', '00000001', 'L.1', 6, '201601001003', '2016-10-10', 'Non Kontrak', 'Sayuran', 'Sayed', 'Pati', '1984-06-06', 'Jl. Banda Aceh-Medan No. 11 No. 31', '098984624545', '', '', '2016-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `tgl_harga` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `foto` int(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama`, `harga`, `tgl_harga`, `kategori`, `foto`) VALUES
(1, 'Beras I/A (kg)', 'Rp. 12.000,-', '2017-06-02', 'Beras', NULL),
(2, 'Beras I/B (kg)', 'Rp. 10.500,-', '2017-06-02', 'Beras', NULL),
(3, 'Beras Medium (kg)', 'Rp. 9.000,-', '2017-06-02', 'Beras', NULL),
(4, 'Gula Pasir LN (kg)', 'Rp. 13.000,-', '2017-06-02', 'Gula', NULL),
(5, 'Gula Pasir DN (kg)', 'Rp. 13.000,-', '2017-06-02', 'Gula', NULL),
(6, 'Minyak Goreng Bimoli Botol (liter)', 'Rp. 15.000,-', '2017-06-02', 'Minyak Goreng', NULL),
(7, 'Minyak Goreng Tanpa Merk (kg)', 'Rp. 12.000,-', '2017-06-02', 'Minyak Goreng', NULL),
(8, 'Daging Ayam Broiler (kg)', 'Rp. 32.500,-', '2017-06-02', 'Daging', NULL),
(9, 'Daging Ayam Kampung (kg)', 'Rp. 45.000,-', '2017-06-02', 'Daging', NULL),
(10, 'Daging Sapi Murni (kg)', 'Rp. 135.000,-', '2017-05-31', 'Daging', NULL),
(11, 'Telur Ayam Broiler (kg)', 'Rp. 18.550,-', '2017-05-26', 'Telur', NULL),
(12, 'Telur Ayam Kampung (kg)', 'Rp. 36.000,-', '2017-05-26', 'Telur', NULL),
(13, 'SKM Bendera (397 gr)', 'Rp. 14.500,-', '2017-05-26', 'Susu', NULL),
(14, 'SKM Indomilk (390 gr)', 'Rp. 10.000,-', '2017-05-26', 'Susu', NULL),
(15, 'Susu Bubuk Bendera (400 gr)', 'Rp. 39.500,-', '2017-05-26', 'Susu', NULL),
(16, 'Beras UB (kg)', 'Rp. 11.000,-', '2017-06-02', 'Beras', NULL),
(17, 'Beras Keumala (kg)', 'Rp. 10.000,-', '2017-06-02', 'Beras', NULL),
(18, 'Beras Kampung (kg)', 'Rp. 11.000,-', '2017-06-02', 'Beras', NULL),
(19, 'Gula Merah (kg)', 'Rp. 13.000,-', '2017-06-02', 'Gula', NULL),
(20, 'Gula Semut (kg)', 'Rp. 30.000,-', '2017-06-02', 'Gula', NULL),
(21, 'Gula Tebu (kg)', 'Rp. 130.000,-', '2017-05-24', 'Gula', NULL),
(22, 'Kunci Mas (2 liter)', 'Rp. 28.000,-', '2017-05-26', 'Minyak Goreng', NULL),
(23, 'Daging Bebek (kg)', 'Rp. 45.000,-', '2017-05-26', 'Daging', NULL),
(24, 'Telur Bebek Asin (kg)', 'Rp. 37.500,-', '2017-05-26', 'Telur', NULL),
(25, 'SKM Carnation (375 gr)', 'Rp. 9.000,-', '2017-05-26', 'Susu', NULL),
(26, 'SKM Tigas Sapi (380 gr)', 'Rp. 9.000,-', '2017-05-26', 'Susu', NULL),
(27, 'Susu Bubuk Indomilk (400 gr)', 'Rp. 34.500,-', '2017-05-26', 'Susu', NULL),
(28, 'Susu Bubuk Dancow (400 gr)', 'Rp. 43.500,-', '2017-05-26', 'Susu', NULL),
(29, 'Jagung Pipilan (kg)', 'Rp. 6.500,-', '2017-05-26', 'Palawija', NULL),
(30, 'Ketela Pohon (kg)', 'Rp. 7.000,-', '2017-05-26', 'Palawija', NULL),
(31, 'Garam Bata (Non Yodium) (250 gr)', 'Rp. 3.000,-', '2017-05-24', 'Garam', NULL),
(32, 'Garam Halus (Beryodium) (kg)', 'Rp. 8.000,-', '2017-05-26', 'Garam', NULL),
(33, 'Terigu Segitiga Biru (Kw Medium) (kg)', 'Rp. 7.750,-', '2017-05-26', 'Tepung Terigu', NULL),
(34, 'Terigu Biasa (kg)', 'Rp. 6.500,-', '2017-05-26', 'Tepung Terigu', NULL),
(35, 'Terigu Cap Payung (kg)', 'Rp. 5.500,-', '2017-05-26', 'Tepung Terigu', NULL),
(36, 'Terigu Lencana Merah (kg)', 'Rp. 7.500,-', '2017-05-26', 'Tepung Terigu', NULL),
(37, 'Kacang Kedelai Lokal (kg)', 'Rp. 8.000,-', '2017-05-26', 'Kacang', NULL),
(38, 'Kacang Kedelai Eks Impor (kg)', 'Rp. 8.000,-', '2017-05-26', 'Kacang', NULL),
(39, 'Kacang Hijau (kg)', 'Rp. 19.500,-', '2017-05-26', 'Kacang', NULL),
(40, 'Kacang Tanah (kg)', 'Rp. 24.000,-', '2017-05-26', 'Kacang', NULL),
(41, 'Indomie Kari Ayam (bungkus)', 'Rp. 2.250,-', '2017-05-26', 'Mie Instant', NULL),
(42, 'Cabai Hijau Besar (kg)', 'Rp. 10.000,-', '2017-05-26', 'Cabai', NULL),
(43, 'Cabai Merah Keriting (kg)', 'Rp. 18.000,-', '2017-05-26', 'Cabai', NULL),
(44, 'Cabai Merah Biasa (kg)', 'Rp. 22.000,-', '2017-05-26', 'Cabai', NULL),
(45, 'Cabai Merah Besar (kg)', 'Rp. 14.000,-', '2017-05-26', 'Cabai', NULL),
(46, 'Cabai Rawit (kg)', 'Rp. 12.500,-', '2017-05-26', 'Cabai', NULL),
(47, 'Cabai Rawit Hijau (kg)', 'Rp. 10.000,-', '2017-05-26', 'Cabai', NULL),
(48, 'Bawang Merah (kg)', 'Rp. 29.000,-', '2017-05-26', 'Bawang', NULL),
(49, 'Bawang Putih (kg)', 'Rp. 50.500,-', '2017-05-26', 'Bawang', NULL),
(50, 'Bawang Merah Medan (kg)', 'Rp. 10.000,-', '2017-05-26', 'Bawang', NULL),
(51, 'Ikan Asin Teri No. 1 (kg)', 'Rp. 137.500,-', '2017-05-26', 'Ikan', NULL),
(52, 'Udang Segar (kg)', 'Rp. 150.000,-', '2017-05-26', 'Ikan', NULL),
(53, 'Ikan Asin Teri Bunga (kg)', 'Rp. 120.000,-', '2017-05-24', 'Ikan', NULL),
(54, 'Biji Pinang Bulat (w)', 'Rp. 15.000,-', '2017-05-26', 'Rempah', NULL),
(55, 'Biji Pinang Belah (kg)', 'Rp. 15.000,-', '2017-05-26', 'Rempah', NULL),
(56, 'Emping Melinjo (kg)', 'Rp. 55.000,-', '2017-05-26', 'Rempah', NULL),
(57, 'Coklat (kg)', 'Rp. 22.000,-', '2017-05-26', 'Rempah', NULL),
(58, 'Jahe Basah (kg)', 'Rp. 10.000,-', '2017-05-26', 'Rempah', NULL),
(59, 'Biji Kopi Arabika (kg)', 'Rp. 70.000,-', '2017-05-26', 'Rempah', NULL),
(60, 'Biji Kopi Robusta (kg)', 'Rp. 25.000,-', '2017-05-26', 'Rempah', NULL),
(61, 'Lada Hitam (kg)', 'Rp. 140.000,-', '2017-05-26', 'Rempah', NULL),
(62, 'Lada Putih (kg)', 'Rp. 190.000,-', '2017-05-26', 'Rempah', NULL),
(63, 'Kemiri (Kupas) (kg)', 'Rp. 25.000,-', '2017-05-26', 'Rempah', NULL),
(64, 'Kemiri (Belum Kupas) (kg)', 'Rp. 5.000,-', '2017-05-26', 'Rempah', NULL),
(65, 'Kopra (Basah) (kg)', 'Rp. 5.700,-', '2017-05-26', 'Rempah', NULL),
(66, 'Biji Pala A (kg)', 'Rp. 53.000,-', '2017-05-26', 'Rempah', NULL),
(67, 'Biji Pala B (kg)', 'Rp. 50.000,-', '2017-05-26', 'Rempah', NULL),
(68, 'Biji Pala C (kg)', 'Rp. 47.000,-', '2017-05-26', 'Rempah', NULL),
(69, 'Cengkeh Kering (Asalan) (kg)', 'Rp. 80.000,-', '2017-05-26', 'Rempah', NULL),
(70, 'Arabika Biji Kering (kg)', 'Rp. 70.000,-', '2017-05-26', 'Kopi', NULL),
(71, 'Arabika Biji Labu (kg)', 'Rp. 33.000,-', '2017-05-24', 'Kopi', NULL),
(72, 'Arabika Gabah (kg)', 'Rp. 31.000,-', '2017-05-26', 'Kopi', NULL),
(73, 'Arabika Gelondong (kg)', 'Rp. 28.000,-', '2017-05-24', 'Kopi', NULL),
(74, 'Robusta Biji Mutu I (kg)', 'Rp. 25.000,-', '2017-05-26', 'Kopi', NULL),
(75, 'Robusta Biji Mutu II (kg)', 'Rp. 25.000,-', '2017-05-23', 'Kopi', NULL),
(76, 'Robusta Bubuk Kopi (kg)', 'Rp. 60.000,-', '2017-05-23', 'Kopi', NULL),
(77, 'Kentang (kg)', 'Rp. 12.000,-', '2017-05-26', 'Sayuran', NULL),
(78, 'Tomat Lokal (kg)', 'Rp. 8.000,-', '2017-05-26', 'Sayuran', NULL),
(79, 'Buncis (kg)', 'Rp. 7.000,-', '2017-05-26', 'Sayuran', NULL),
(80, 'Kol Kubis (kg)', 'Rp. 4.000,-', '2017-05-26', 'Sayuran', NULL),
(81, 'Kelapa Bulat (kg)', 'Rp. 3.000,-', '2017-05-26', 'Sayuran', NULL),
(82, 'Wortel (kg)', 'Rp. 10.000,-', '2017-05-26', 'Sayuran', NULL),
(83, 'Semen OPC Andalas (40 kg)', 'Rp. 53.000,-', '2017-05-26', 'Semen', NULL),
(84, 'Semen PPC Andalas (40 kg)', 'Rp. 55.000,-', '2017-05-24', 'Semen', NULL),
(85, 'Semen OPC Padang (40 kg)', 'Rp. 53.000,-', '2017-05-26', 'Semen', NULL),
(86, 'Minyak Tanah (liter)', 'Rp. 10.250,-', '2017-06-02', 'Bahan Bakar', NULL),
(87, 'Gas Elpiji 12 kg (tabung)', 'Rp. 150.000,-', '2017-06-02', 'Bahan Bakar', NULL),
(88, 'Gas Elpiji 3 kg (tabung)', 'Rp. 18.000,-', '2017-06-02', 'Bahan Bakar', NULL),
(89, 'Premium (liter)', 'Rp. 8.000,-', '2017-06-02', 'Bahan Bakar', NULL),
(90, 'Solar (liter)', 'Rp. 7.500,-', '2017-06-02', 'Bahan Bakar', NULL),
(91, 'Margarin Blue Band (kg)', 'Rp. 24.000,-', '2017-05-26', 'Margarin', NULL),
(92, 'Margarin Simas (kg)', 'Rp. 14.000,-', '2017-05-26', 'Margarin', NULL),
(93, 'Blue Band Kaleng (kg)', 'Rp. 45.000,-', '2017-05-26', 'Margarin', NULL),
(94, 'Seng Gelombang 8 Kaki BJLS 0,18 (lembar)', 'Rp. 50.000,-', '2017-05-26', 'Seng', NULL),
(95, 'Seng Gelombang 8 Kaki BJLS 0,20 (lembar)', 'Rp. 53.000,-', '2017-05-26', 'Seng', NULL),
(96, 'Seng Gelombang 8 Kaki BJLS 0,30 (lembar)', 'Rp. 70.000,-', '2017-05-26', 'Seng', NULL),
(97, 'Seng Gelombang 8 Kaki BJLS 0,35 (lembar)', 'Rp. 75.000,-', '2017-05-26', 'Seng', NULL),
(98, 'Seng Plat 8 Kaki BJLS 0,18 (lembar)', 'Rp. 60.000,-', '2017-05-26', 'Seng', NULL),
(99, 'Seng Plat 8 Kaki BJLS 0,20 (lembar)', 'Rp. 65.000,-', '2017-05-26', 'Seng', NULL),
(100, 'Seng Plat 8 Kaki BJLS 0,30 (lembar)', 'Rp. 100.000,-', '2017-05-26', 'Seng', NULL),
(101, 'Seng Plat 8 Kaki BJLS 0,35 (lembar)', 'Rp. 110.000,-', '2017-05-26', 'Seng', NULL),
(102, 'Seng Gelombang 6 Kaki BJLS 0,20 (lembar)', 'Rp. 39.750,-', '2017-05-26', 'Seng', NULL),
(103, 'Seng Gelombang 7 Kaki BJLS 0,20 (lembar)', 'Rp. 46.400,-', '2017-05-26', 'Seng', NULL),
(104, 'Seng Plat 6 Kaki BJLS 0,20 (lembar)', 'Rp. 48.750,-', '2017-05-26', 'Seng', NULL),
(105, 'Seng Plat 7 Kaki BJLS 0,20 (lembar)', 'Rp. 56.900,-', '2017-05-26', 'Seng', NULL),
(106, 'Besi Beton Ukuran 6 mm (batang)', 'Rp. 18.000,-', '2017-05-26', 'Besi', NULL),
(107, 'Besi Beton Ukuran 8 mm (batang)', 'Rp. 28.000,-', '2017-05-26', 'Besi', NULL),
(108, 'Besi Beton Ukuran 9 mm (batang)', 'Rp. 31.000,-', '2017-05-26', 'Besi', NULL),
(109, 'Besi Beton Ukuran 10 mm (batang)', 'Rp. 40.000,-', '2017-05-26', 'Besi', NULL),
(110, 'Besi Beton Ukuran 12 mm (batang)', 'Rp. 58.000,-', '2017-05-26', 'Besi', NULL),
(111, 'Pupuk Urea (zak)', 'Rp. 95.000,-', '2017-05-26', 'Pupuk', NULL),
(112, 'Pupuk KCL (zak)', 'Rp. 290.000,-', '2017-05-26', 'Pupuk', NULL),
(113, 'Pupuk ZA (zak)', 'Rp. 75.000,-', '2017-05-26', 'Pupuk', NULL),
(114, 'Pupuk TSP (kg)', 'Rp. 300.000,-', '2017-05-26', 'Pupuk', NULL),
(115, 'Pupuk NPK Phoska (zak)', 'Rp. 125.000,-', '2017-05-26', 'Pupuk', NULL),
(116, 'Pupuk Organik (zak)', 'Rp. 20.000,-', '2017-05-26', 'Pupuk', NULL),
(117, 'Pupuk SP-365 (zak)', 'Rp. 110.000,-', '2017-05-26', 'Pupuk', NULL),
(118, 'Kayu Balok (6 x 15 x 20 cm)', 'Rp. 5.000.000,-', '2017-05-26', 'Kayu', NULL),
(119, 'Kayu Balok (8 x 12 x 40 cm)', 'Rp. 5.200.000,-', '2017-05-26', 'Kayu', NULL),
(120, 'Kayu Papan (5 x 0,2 x 20 cm)', 'Rp. 4.800.000,-', '2017-05-26', 'Kayu', NULL),
(121, 'Tikar Pandan Lapis Satu (lembar)', 'Rp. 75.000,-', '2017-05-26', 'Lain-lain', NULL),
(122, 'Gambir (kg)', 'Rp. 45.000,-', '2017-05-26', 'Lain-lain', NULL);

--
-- Triggers `tb_produk`
--
DELIMITER $$
CREATE TRIGGER `before_produk_update` BEFORE UPDATE ON `tb_produk` FOR EACH ROW BEGIN
    INSERT INTO tb_logharga
    set id_produk = OLD.id_produk,
    namaproduk = OLD.nama,
	kategori=OLD.kategori,
    hrgbaru=new.harga,
    hrglama=old.harga,
    waktu_sebelum=new.tgl_harga,
    waktu_setelah=old.tgl_harga;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `password`, `hak_akses`) VALUES
('admin', 'admin', '123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_config`
--
ALTER TABLE `tb_config`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tb_kelaspasar`
--
ALTER TABLE `tb_kelaspasar`
  ADD PRIMARY KEY (`id_kelaspasar`);

--
-- Indexes for table `tb_logharga`
--
ALTER TABLE `tb_logharga`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_pasar`
--
ALTER TABLE `tb_pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `tb_pedagang`
--
ALTER TABLE `tb_pedagang`
  ADD PRIMARY KEY (`id_ped`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_logharga`
--
ALTER TABLE `tb_logharga`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
