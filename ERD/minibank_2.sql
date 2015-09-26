-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2015 at 12:55 PM
-- Server version: 5.6.24-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minibank_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `klasifikasi` varchar(25) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(20) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
('ak', 'Akuntansi'),
('pb', 'Perbankan'),
('pms', 'Pemasaran'),
('tkj', 'Teknik Komputer Jaringan'),
('mm', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(20) NOT NULL,
  `id_jurusan` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(5) NOT NULL,
  `walikelas` varchar(20) NOT NULL,
  `id_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `tahun_ajaran`, `walikelas`, `id_status`) VALUES
('2015mm', 'mm', '2015', '02', 'sk_01'),
('2015tkj', 'tkj', '2015', '03', 'sk_02'),
('2012mm', 'mm', '2012', '01', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `denda` varchar(2) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_transaksi`, `tgl_pengembalian`, `denda`, `nominal`, `id_petugas`) VALUES
('20150814001', '2015-08-14', 'Y', 0, NULL),
('20150814001', '2015-08-14', 'Y', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` text,
  `akses` enum('admin','manager','asisten','pembina') NOT NULL,
  `status` enum('aktif','nonaktif','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `user`, `password`, `akses`, `status`) VALUES
(4, 'teguh', 'f5cd3a020bc94866049206a7cf14e266', 'admin', 'aktif'),
(5, 'rere', 'bd134207f74532a8b094676c4a2ca9ed', 'admin', 'aktif'),
(6, 'tegu', '51673ef26d5237d7edc55a67787a804e', 'admin', 'aktif'),
(7, 'doni', '2da9cd653f63c010b6d6c5a5ad73fe32', 'admin', 'aktif'),
(8, 'hoi', '4216455ceebbc3038bd0550c85b6a3bf', 'admin', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(2) DEFAULT NULL,
  `tempat_lahir` date DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat_asli` varchar(100) NOT NULL,
  `alamat_tinggal` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_bapak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat_asli`, `alamat_tinggal`, `phone`, `sekolah_asal`, `tahun_masuk`, `nama_ibu`, `nama_bapak`) VALUES
('008', 'jkg', 'L', '0000-00-00', '2015-09-09', 'Protestan', 'ds', 'sdf', 'sdf', 'sdf', 0000, 'sdf', 'sdf'),
('009', 'teguh', 'L', '0000-00-00', '2015-09-20', 'Islam', 'malang', 'malang', '0871259', 'kjahdga', 0000, 's`d', 'jhg'),
('010', 'rrr', 'L', '0000-00-00', '2015-09-12', 'Islam', 'MAlang', 'Jombang', '5646543', '54654', 0000, 'sfsd', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `status_bayar`
--

CREATE TABLE IF NOT EXISTS `status_bayar` (
  `id_status` varchar(20) NOT NULL,
  `nama_status` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_jaga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_kelas`
--

CREATE TABLE IF NOT EXISTS `status_kelas` (
  `id_status` varchar(20) NOT NULL,
  `nama_status` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_kelas`
--

INSERT INTO `status_kelas` (`id_status`, `nama_status`, `waktu`) VALUES
('skls_01', 'aktif', '2015-09-30 06:10:35'),
('sk_01', 'aktif', '2015-09-16 05:13:15'),
('sk_02', 'nonaktif', '2015-09-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `status_siswa`
--

CREATE TABLE IF NOT EXISTS `status_siswa` (
  `id_status` varchar(20) NOT NULL,
  `nama_status` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stat_kel`
--

CREATE TABLE IF NOT EXISTS `stat_kel` (
  `id_stat_kel` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stat_kel`
--

INSERT INTO `stat_kel` (`id_stat_kel`, `status`) VALUES
('sk_01', 'skls_01'),
('sk_02', 'skls_01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `id_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `tmpt_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen','Protestan','Budha','Hindu','KongHuChu','Kepercayaan') NOT NULL,
  `pendidikan_akhir` enum('SMA','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `status` enum('pns','gtt','nonaktif','') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nama_guru`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `pendidikan_akhir`, `status`, `alamat`) VALUES
('0', '0', '0', '0000-00-00', '', '', '', '', '0'),
('01', 'Teguh Pribadi', 'Bojonegoro', '1990-12-24', 'L', 'Islam', 'S1', 'gtt', 'Desa Sumberarum RT 05 RW 02 Dander - Bojonegoro'),
('02', 'Angga Eka Sucahyono', 'Bojonegoro', '2015-09-15', 'L', 'Islam', 'S1', 'gtt', 'Desa Sumberarum RT 05 RW 02 Dander - Bojonegoro'),
('03', 'Doni Abdul Fatah', 'Bojonegoro', '2015-09-01', 'L', 'Islam', 'S1', 'gtt', 'Desa Sumberarum RT 05 RW 02 Dander - Bojonegoro');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `kode_buku` varchar(5) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `id_petugas`) VALUES
('20150814001', '102', '12', '2015-08-14', '2015-08-21', 'Y', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
