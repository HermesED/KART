-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 03:11 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kart`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_ukm`
--

CREATE TABLE IF NOT EXISTS `anggota_ukm` (
  `nim` char(8) NOT NULL,
  `namalengkap` varchar(64) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `status` char(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_ukm`
--

INSERT INTO `anggota_ukm` (`nim`, `namalengkap`, `programstudi`, `angkatan`, `status`) VALUES
('31014002', 'Bryant Federico', 'D3 - Sistem Informasi', '2014', 'Tidak Aktif'),
('31014003', 'Faisal T. Supu', 'D3 - Sistem Informasi', '2014', 'Aktif'),
('31014004', 'Herfiani', 'D3 - Sistem Informasi', '2014', 'Aktif'),
('31014005', 'HERMELINDA LONDA', 'D3 - Sistem Informasi', '2014', 'Aktif'),
('51013022', 'Muhammad Fahmi', 'S1 - Sistem Informasi', '2013', 'Aktif'),
('51014003', 'Andy Eric Wijaya', 'S1 - Sistem Informasi', '2014', 'Aktif'),
('51014012', 'Hermes Engel Djohar', 'S1 - Sistem Informasi', '2014', 'Aktif'),
('51015004', 'Billy Tanyawan', 'S1 - Sistem Informasi', '2015', 'Aktif'),
('51015006', 'Evelyn Wilbert Wijaya', 'S1 - Sistem Informasi', '2015', 'Aktif'),
('51015008', 'Florencia Irena', 'S1 - Sistem Informasi', '2015', 'Aktif'),
('51015010', 'Ivan Darmawan', 'S1 - Sistem Informasi', '2015', 'Aktif'),
('51015011', 'Jessica Chandra', 'S1 - Sistem Informasi', '2015', 'Aktif'),
('51015017', 'Yanoris Arnold Nigga', 'S1 - Sistem Informasi', '2015', 'Aktif'),
('52012049', 'Waode Makani Daga', 'S1 - Teknik Informatika', '2012', 'Aktif'),
('52013001', 'Aditya Tricahya Tunggal', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52013007', 'Caroline Layadi', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52013019', 'Gabriel Irfon Elrohi Soen', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52013026', 'Jip William Surya Arif Munandar', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52013040', 'Richard', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52013044', 'Ronnie Chandiawan', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52013053', 'Yohannes Aldrin Pratama', 'S1 - Teknik Informatika', '2013', 'Aktif'),
('52014020', 'Riswandy Tiryasuwiryo', 'S1 - Sistem Informasi', '2014', 'Aktif'),
('52014049', 'Panji Putra Dwiarya Aritanto', 'S1 - Teknik Informatika', '2014', 'Aktif'),
('52015004', 'Alvan Suwandy', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015016', 'Girvan Benedict', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015018', 'Hong William Fondy', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015019', 'Ilfan Diago', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015022', 'Jason Pratama Sunarji', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015023', 'Jesslyn Chandra', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015025', 'Kelvin Gowanto', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015031', 'Prabowo Gosal', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015032', 'Renaldi Pranata', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015036', 'Thias Angela Desan', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015038', 'Thomas Alvin Leonardy Liwang', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52015041', 'Willianto', 'S1 - Teknik Informatika', '2015', 'Aktif'),
('52016001', 'Abed Nego Thendean', 'S1 - Teknik Informatika', '2016', 'Aktif'),
('52016016', 'Fudianto Ciuandi', 'S1 - Teknik Informatika', '2016', 'Aktif'),
('52016017', 'Gilbert Thiodores', 'S1 - Teknik Informatika', '2016', 'Aktif'),
('52016019', 'Ian Yo Sall', 'S1 - Teknik Informatika', '2016', 'Aktif'),
('52016023', 'Jason Loardy', 'S1 - Teknik Informatika', '2016', 'Aktif'),
('52016025', 'Kevin Suharto', 'S1 - Teknik Informatika', '2016', 'Aktif'),
('52016028', 'Michael Pohan', 'S1 - Teknik Informatika', '2016', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `dblogin`
--

CREATE TABLE IF NOT EXISTS `dblogin` (
  `nim` char(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dblogin`
--

INSERT INTO `dblogin` (`nim`, `username`, `password`, `admin`) VALUES
('51014012', 'hermesed23', '$2y$10$WA/.Ci0Ih.47huCJw8JYGe1wLTZzIbXy/lTuCw3grtfxJ50RQQP1a', 1),
('55555555', 'AyamSehat', '$2y$10$qg7I703SIu8vy2LRjfNq/eMLabZz5/fzQ9S5Pu0OR5Ln1cxQjsRZu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(60) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `tanggal`, `judul`, `penulis`, `kegiatan`) VALUES
('1484840197', '0000-00-00', 'ayam', 'ayam', '-- Isi Berita --\r\n\r\nayam mati'),
('1484841794', '0000-00-00', 'aninglo', 'anjinglo', '-- Isi Berita --\r\n\r\nanjinglo');

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

CREATE TABLE IF NOT EXISTS `pembatalan` (
  `nim` char(8) NOT NULL,
  `namalengkap` varchar(60) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `pe_saran` varchar(255) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`nim`, `namalengkap`, `angkatan`, `alasan`, `pe_saran`) VALUES
('51014010', 'ferdinandpangemanan', '2014', 'malas', 'malas');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `namalengkap` varchar(64) NOT NULL,
  `nim` char(8) NOT NULL,
  `programstudi` varchar(64) NOT NULL,
  `pengalamansoftware` varchar(64) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nomor_hp` char(12) NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'Aktif',
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`namalengkap`, `nim`, `programstudi`, `pengalamansoftware`, `angkatan`, `email`, `nomor_hp`, `status`) VALUES
('sad', '444', 'S1 - Sistem Informasi', 'ssdasda', '555', 'asdas@sda', '5252', ''),
('hermes', '51014012', 'S1 - Sistem Informasi', 'corel', '2014', 'aa@aa.com', '000000000000', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
