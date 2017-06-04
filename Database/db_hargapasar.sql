-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2017 at 06:44 AM
-- Server version: 10.1.18-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulianz4_db_hargapasar`
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
('1', 'HARGA PASAR', 'Aplikasi Sistem Informasi Pasar', 'HP', '', 'https://apps.aulianza.com/harga-pasar', 'RPL-4');

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
-- Table structure for table `tb_pasar`
--

CREATE TABLE `tb_pasar` (
  `id_pasar` varchar(8) NOT NULL,
  `no_reg` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `status` varchar(16) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `luas` int(11) NOT NULL,
  `foto1` varchar(128) NOT NULL,
  `foto2` varchar(128) NOT NULL,
  `foto3` varchar(128) NOT NULL,
  `date_crt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasar`
--

INSERT INTO `tb_pasar` (`id_pasar`, `no_reg`, `nama`, `status`, `kelas`, `lokasi`, `tgl_berdiri`, `luas`, `foto1`, `foto2`, `foto3`, `date_crt`) VALUES
('00000001', 'BNA-01', 'Pasar Kartini Peunayong', 'Tradisional', '1.A', 'Jl. Kartini, Peunayong, Kuta Alam, Kota Banda Aceh, Aceh 23122', '2017-01-01', 200, 'pasar-peunayong.jpg', '', '', '2017-05-25'),
('00000002', 'BNA-02', 'Pasar Rukoh', 'Tradisional', '1.A', 'Jl. Rukoh Utama, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23112', '2017-01-01', 150, 'pasar-rukoh.jpg', '', '', '2017-05-25'),
('00000003', 'BNA-03', 'Pasar Seutui', 'Tradisional', '1.A', 'Jl. Teuku Umar, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '2017-01-01', 100, 'pasar-seutui.png', '', '', '2017-05-25'),
('00000005', 'BNA-04', 'Pasar Neusu', 'Tradisional', '1.A', 'Jl. Neusu Aceh, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '2017-01-01', 150, 'pasar-neusu.jpg', '', '', '2017-05-25'),
('00000006', 'ABS-02', 'Pasar Keutapang II', 'Tradisional', '1.A', 'Jl. Keutapang Mata Ie, Kec. Darul Imarah, Kab. Aceh Besar, Aceh 23233', '2017-01-02', 100, 'pasar-keutapang.jpg', '', '', '2017-05-25'),
('00000007', 'ABS-01', 'Pasar Induk Lambaro', 'Tradisional', '1.A', 'Jl. Lambaro, Kec. Ingin Jaya, Kab. Aceh Besar, Aceh 23238', '2017-01-01', 100, 'pasar-lambaro.jpg', '', '', '2017-05-25'),
('00000008', 'BNA-05', 'Pasar Gampong Peuniti', 'Tradisional', '1.A', 'Jl. Peuniti, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', '2017-05-14', 150, 'pasar-peuniti.png', '', '', '2017-05-25');

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
(1, 'Beras I/A (kg)', 'Rp. 11.000,-', '2017-05-24', 'Beras', NULL),
(2, 'Beras I/B (kg)', 'Rp. 10.000,-', '2017-05-24', 'Beras', NULL),
(3, 'Beras Medium (kg)', 'Rp. 11.000,-', '2017-05-25', 'Beras', NULL),
(4, 'Gula Pasir LN (kg)', 'Rp. 13.000,-', '2017-05-22', 'Gula', NULL),
(5, 'Gula Pasir DN (kg)', 'Rp. 13.000,-', '2017-05-25', 'Gula', NULL),
(6, 'Minyak Goreng Bimoli Botol(liter)', 'Rp. 15.000,-', '2017-05-25', 'Minyak Goreng', NULL),
(7, 'Minyak Goreng Tanpa Merk (kg)', 'Rp. 12.000,-', '2017-05-25', 'Minyak Goreng', NULL),
(8, 'Daging Ayam Broiler (kg)', 'Rp. 25.000,-', '2017-05-25', 'Daging', NULL),
(9, 'Daging Ayam Kampung (kg)', 'Rp. 40.000,-', '2017-05-25', 'Daging', NULL),
(10, 'Daging Sapi Murni (kg)', 'Rp. 140.000,-', '2017-05-25', 'Daging', NULL),
(11, 'Telur Ayam Broiler (kg)', 'Rp. 18.600,-', '2017-05-25', 'Telur', NULL),
(12, 'Telur Ayam Kampung (kg)', 'Rp. 42.000,-', '2017-05-25', 'Telur', NULL),
(13, 'SKM Bendera (397 gr)', 'Rp. 15.000,-', '2017-05-25', 'Susu', NULL),
(14, 'SKM Indomilk (390 gr)', 'Rp. 11.000,-', '2017-05-25', 'Susu', NULL),
(15, 'Susu Bubuk Bendera (400 gr)', 'Rp. 36.000,-', '2017-05-25', 'Susu', NULL);

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
('admin', 'aulianza', '123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_config`
--
ALTER TABLE `tb_config`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `tb_kelaspasar`
--
ALTER TABLE `tb_kelaspasar`
  ADD PRIMARY KEY (`id_kelaspasar`);

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
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
