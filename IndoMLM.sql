-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2013 at 09:48 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `IndoMLM`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `passwd` varchar(30) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT '',
  `tgl_lahir` varchar(30) NOT NULL DEFAULT '',
  `nomor_id` varchar(30) NOT NULL DEFAULT '',
  `nomor_ktp` varchar(30) NOT NULL DEFAULT '',
  `alamat` text,
  `kota` varchar(30) NOT NULL DEFAULT '',
  `kodepos` int(255) NOT NULL DEFAULT '12345',
  `nomor_telp` varchar(30) DEFAULT NULL,
  `suami_istri` varchar(30) NOT NULL DEFAULT '',
  `nama_pasangan` varchar(30) NOT NULL DEFAULT '',
  `pekerjaan` varchar(30) NOT NULL DEFAULT '',
  `agama` varchar(30) NOT NULL DEFAULT '',
  `dik_akhir` varchar(30) NOT NULL DEFAULT '',
  `nama_ahli_waris` varchar(30) NOT NULL DEFAULT '',
  `hub_ahli_waris` varchar(30) NOT NULL DEFAULT '',
  `nama_bank` varchar(30) NOT NULL DEFAULT '',
  `cabang` varchar(30) NOT NULL DEFAULT '',
  `nama_nasabah` varchar(30) NOT NULL DEFAULT '',
  `nomor_rek` varchar(60) DEFAULT NULL,
  `nama_sponsor` varchar(30) NOT NULL DEFAULT '',
  `id_sponsor` varchar(30) NOT NULL DEFAULT '',
  `username_sponsor` varchar(30) NOT NULL DEFAULT '',
  `username_upline` varchar(30) NOT NULL DEFAULT '',
  `email_sponsor` varchar(30) NOT NULL DEFAULT '',
  `tanggal_join` int(255) NOT NULL DEFAULT '0',
  `ip_add` varchar(20) NOT NULL DEFAULT '',
  `stat` varchar(20) NOT NULL DEFAULT '',
  `hits` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL DEFAULT '',
  `tanggal` varchar(25) NOT NULL DEFAULT '',
  `isi_berita` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
