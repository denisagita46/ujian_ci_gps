-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2019 at 04:56 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nik` char(50) DEFAULT NULL,
  `no_ktp` char(50) DEFAULT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `alamat` varchar(90) DEFAULT NULL,
  `tempat_lahir` varchar(90) DEFAULT NULL,
  `tanggal_lahir` char(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tlp` char(50) DEFAULT NULL,
  `nama_ibu_kandung` varchar(50) DEFAULT NULL,
  `status_marital` varchar(50) DEFAULT NULL,
  `nama_pasangan` varchar(50) DEFAULT NULL,
  `jumlah_tanggungan` int(50) DEFAULT NULL,
  `npwp` char(50) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek_bank` char(50) DEFAULT NULL,
  `atas_nama_rekening` varchar(50) DEFAULT NULL,
  `tgl_registrasi` char(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `id_status_anggota` int(10) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nik`, `no_ktp`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `email`, `tlp`, `nama_ibu_kandung`, `status_marital`, `nama_pasangan`, `jumlah_tanggungan`, `npwp`, `nama_bank`, `no_rek_bank`, `atas_nama_rekening`, `tgl_registrasi`, `pass`, `level`, `id_status_anggota`, `flag`) VALUES
(105, '123', '211111111111111111111111', 'ibnu', 'jl. mampjng', 'magelang', '09/13/2019', 'denisagita89@gmail.com', '75871668', 'tuna', 'Menikah', 'cina', 3, '1313121221', 'bri', '3132132312312312', 'deni', '09/12/2019', '1234', 2, 2, 1),
(106, '123', '211111111111111111111111', 'resi', 'sasa', 'magelang', '09/20/2019', 'denisagita78@gmail.com', '0857635265365232', 'rehan', 'Menikah', 'ibu', 1, '1298458758754', 'bri', '465937486126472', 'deni', '09/12/2019', '1234', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk_pembiayaan`
--

CREATE TABLE IF NOT EXISTS `produk_pembiayaan` (
  `id_produk_Pembiayaan` int(30) NOT NULL AUTO_INCREMENT,
  `nama_produk_pembiayaan` varchar(50) DEFAULT NULL,
  `min_pembiayaan` int(100) DEFAULT NULL,
  `max_pembiayaan` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_produk_Pembiayaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produk_pembiayaan`
--

INSERT INTO `produk_pembiayaan` (`id_produk_Pembiayaan`, `nama_produk_pembiayaan`, `min_pembiayaan`, `max_pembiayaan`) VALUES
(1, 'Pembiayaan Reguler', 1000000, 10000000),
(2, 'Pembiayaan Bank (KTA)', 10000001, 300000000);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_pembiayaan`
--

CREATE TABLE IF NOT EXISTS `registrasi_pembiayaan` (
  `id_registrasi_pembiayaan` int(11) NOT NULL AUTO_INCREMENT,
  `nik` char(50) DEFAULT NULL,
  `no_ktp` char(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` char(50) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `status_marital` varchar(50) NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `status_rumah` varchar(50) NOT NULL,
  `npwp` char(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek_bank` char(50) NOT NULL,
  `atas_nama_rek` varchar(50) NOT NULL,
  `id_produk_Pembiayaan` int(20) NOT NULL,
  `jml_pembiayaan` char(50) NOT NULL,
  `jangka_waktu` int(100) NOT NULL,
  `id_tujuan_pembiayaaan` int(50) NOT NULL,
  `gaji_pokok` char(50) NOT NULL,
  `tunjangan_jabatan` varchar(100) NOT NULL,
  `tunjangan_lokasi` varchar(100) NOT NULL,
  `tunjangan_transport` varchar(100) NOT NULL,
  `uang_makan` char(50) NOT NULL,
  `tunjangan_lain` int(100) NOT NULL,
  `tgl_pengajuan` varchar(50) NOT NULL,
  `id_status_pembiayaan` int(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id_registrasi_pembiayaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `registrasi_pembiayaan`
--

INSERT INTO `registrasi_pembiayaan` (`id_registrasi_pembiayaan`, `nik`, `no_ktp`, `name`, `alamat`, `tempat_lahir`, `tgl_lahir`, `email`, `tlp`, `nama_ibu_kandung`, `status_marital`, `nama_pasangan`, `jumlah_tanggungan`, `status_rumah`, `npwp`, `nama_bank`, `no_rek_bank`, `atas_nama_rek`, `id_produk_Pembiayaan`, `jml_pembiayaan`, `jangka_waktu`, `id_tujuan_pembiayaaan`, `gaji_pokok`, `tunjangan_jabatan`, `tunjangan_lokasi`, `tunjangan_transport`, `uang_makan`, `tunjangan_lain`, `tgl_pengajuan`, `id_status_pembiayaan`, `flag`) VALUES
(183, '2147483647', '211111111111111111111111', 'deni sagita', 'jl. babakan pocis ', 'magelang', '30/11/1993', 'denisagita7845@gmail.com', '085672377622', 'indah', 'Menikah', 'reni', 2, 'Sewa', '1298458758754', 'bri', '46593748612623233', 'bri', 1, '12', 48, 8, '100.000', 'kesehatan', 'kesehatan', 'bensin motor', '15000', 0, '09/06/2019', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_anggota`
--

CREATE TABLE IF NOT EXISTS `status_anggota` (
  `id_status_anggota` int(50) NOT NULL AUTO_INCREMENT,
  `status_anggota` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_status_anggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `status_anggota`
--

INSERT INTO `status_anggota` (`id_status_anggota`, `status_anggota`) VALUES
(1, 'Registrasi'),
(2, 'aktif'),
(3, 'non aktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_pembiayaan`
--

CREATE TABLE IF NOT EXISTS `status_pembiayaan` (
  `id_status_pembiayaan` int(100) NOT NULL AUTO_INCREMENT,
  `status_pembiayaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_status_pembiayaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `status_pembiayaan`
--

INSERT INTO `status_pembiayaan` (`id_status_pembiayaan`, `status_pembiayaan`) VALUES
(1, 'Resgitrasi oleh Anggota'),
(2, 'Proses Verifikasi'),
(3, 'Pencairan'),
(4, 'aktif'),
(5, 'lunas'),
(6, 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan_pembiayaan`
--

CREATE TABLE IF NOT EXISTS `tujuan_pembiayaan` (
  `id_tujuan_pembiayaaan` int(50) NOT NULL AUTO_INCREMENT,
  `tujuan_pembiayaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tujuan_pembiayaaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tujuan_pembiayaan`
--

INSERT INTO `tujuan_pembiayaan` (`id_tujuan_pembiayaaan`, `tujuan_pembiayaan`) VALUES
(1, 'Biaya Pendidikan'),
(2, 'Biaya Renovasi'),
(3, 'Biaya Naik Haji/Umroh'),
(4, 'Biaya Pernikahan'),
(5, 'Pembelian Sepeda Motor'),
(6, 'Pembelian Mobil'),
(7, 'Pembelian Rumah / Tanah'),
(8, 'Pembelian Barang Eleltronik / Gadget'),
(9, 'Kebutuhan Rumah Tangga');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
