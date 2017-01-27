-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 02:51 PM
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
  `tanggal` char(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `kegiatan` varchar(1000) NOT NULL,
  `like` int(11) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `tanggal`, `username`, `judul`, `penulis`, `kegiatan`, `like`, `view`) VALUES
('1485511004', '0000-00-00', 'hermesed23', 'SPOILER CHAPTER 229', 'TWENTY FIFTH BAM', 'SPOLIER RANK S EPS.229\r\n\r\nGOG = God of Guardians (arti: Dewa Dari Seluruh Para Penjaga) = (Penjaga Rice Pot)\r\n\r\nGOG : Bagaimana cara menjadi dewa?\r\n\r\nBam : ...Ya!\r\n\r\nGOG :  cara menjadi dewa... Permintaan yg aneh. Apa itu karena aku GOG?\r\n\r\nBam : Yah...Ku', 0, 3),
('1485517018', '27 January 2017', 'hermesed23', 'TEST123456', 'Hermes', 'SPOLIER RANK S EPS.229\r\n\r\nGOG = God of Guardians (arti: Dewa Dari Seluruh Para Penjaga) = (Penjaga Rice Pot)\r\nGOG : Bagaimana cara menjadi dewa?\r\nBam : ...Ya!\r\nGOG :  cara menjadi dewa... Permintaan yg aneh. Apa itu karena aku GOG?\r\nBam : Yah...Kupikir kau mungkin tahu cara jadi dewa...\r\nGOG : Maaf tp aku tdk tahu tentang bgmn cara jadi dewa. Julukan ''GOG''tdk lebih dari sebutan yg diberikan para regular. Aku tdk sehebat itu.\r\nBam : Benarkah... Ok.. (Bam Pergi.)\r\nGOG : Hahhhh? Kau pergi....!!? Kau sangat dingin/cuek..!! Kau pst punya masalah diluar sana... Apa yg terjadi padamu?\r\nBam : Aku kehilangan teman2ku.. Tidak ada yg dpt kelakukan pada musuh yg sangat kuat....\r\nItu semua karenaaku memaksa pergi ke lantai kematian!..! Karaka sejak awal sdh ada disana karena aku...!\r\nSemuanya dlm bahaya krn aku..! Tapi tdk ada yg dpt kulakukan.. Pd akhirnya akulah yg ditolong oleh temanku..', 0, 22),
('1485519497', '27 January 2017', 'hermesed23', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhh', 'SPOLIER RANK S EPS.229\r\n\r\nGOG = God of Guardians (arti: Dewa Dari Seluruh Para Penjaga) = (Penjaga Rice Pot)\r\n\r\nGOG : Bagaimana cara menjadi dewa?\r\n\r\nBam : ...Ya!\r\n\r\nGOG :  cara menjadi dewa... Permintaan yg aneh. Apa itu karena aku GOG?\r\n\r\nBam : Yah...Kupikir kau mungkin tahu cara jadi dewa...\r\n\r\nGOG : Maaf tp aku tdk tahu tentang bgmn cara jadi dewa. Julukan ''GOG''tdk lebih dari sebutan yg diberikan para regular. Aku tdk sehebat itu.\r\n\r\nBam : Benarkah... Ok.. (Bam Pergi.)\r\n\r\nGOG : Hahhhh? Kau pergi....!!? Kau sangat dingin/cuek..!! Kau pst punya masalah diluar sana... Apa yg terjadi padamu?\r\n\r\nBam : Aku kehilangan teman2ku.. Tidak ada yg dpt kelakukan pada musuh yg sangat kuat....\r\nItu semua karenaaku memaksa pergi ke lantai kematian!..! Karaka sejak awal sdh ada disana karena aku...!\r\nSemuanya dlm bahaya krn aku..! Tapi tdk ada yg dpt kulakukan.. Pd akhirnya akulah yg ditolong oleh temanku..\r\n', 0, 0),
('1485523679', '27 January 2017', 'hermesed23', 'TESTTESTESTTEST', 'JSDjajkjdaskajds', 'SIU Blog\r\n\r\nThis week, we see a bit of Baam using the Divine Whirlpool technique.\r\nI had to think deeply about the visual I wanted for the Divine Whirlpool,\r\nand I, unlike how Shinsoo previously looked, wanted to go for a "light" based, or something primal...\r\nActually, Shinsoo itself was based on the concept that water is the source of life so it''s an extension of the same idea, in a way.\r\nAnd the Divine Whirlpool is not even in its final form yet, so you''ll get to see it developed further.\r\nEndorssi and Koon both developed in some manner, the details to be revealed in the Floor of Death. (Buy the previews..?)\r\nKoon and Endorssi will both go through a lot of changes in the Floor of Death.\r\nTaking the time I''m going to show lots of fun things.\r\nWe''re finally at the Floor of Death.', 0, 4),
('1485523839', '27 January 2017', 'hermesed23', 'testestestes', 'ajdflajflsjadlads', 'SIU Blog\r\n\r\nThis week, we see a bit of Baam using the Divine Whirlpool technique.\r\nI had to think deeply about the visual I wanted for the Divine Whirlpool,\r\nand I, unlike how Shinsoo previously looked, wanted to go for a "light" based, or something primal...\r\nActually, Shinsoo itself was based on the concept that water is the source of life so it''s an extension of the same idea, in a way.\r\nAnd the Divine Whirlpool is not even in its final form yet, so you''ll get to see it developed further.\r\nEndorssi and Koon both developed in some manner, the details to be revealed in the Floor of Death. (Buy the previews..?)\r\nKoon and Endorssi will both go through a lot of changes in the Floor of Death.\r\nTaking the time I''m going to show lots of fun things.\r\nWe''re finally at the Floor of Death.\r\nSince this is the most important arc in the Hell Train arcs,\r\nI wasn''t sure if I should take a break prior, and I may take a break in between if needed.\r\nIt won''t be a short arc.', 0, 0);

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
