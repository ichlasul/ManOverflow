-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2014 at 06:51 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manov`
--
CREATE DATABASE IF NOT EXISTS `manov` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `manov`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('83b1d5378d0d6b4888ae0bbaec41d6f2', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36', 1399221893, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:13:"administrator";s:8:"username";s:13:"administrator";s:5:"email";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:14:"old_last_login";s:10:"1399221361";}'),
('ee7da20688ec90712635e04cba5a15e0', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36', 1399222062, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:8:"13511002";s:8:"username";s:8:"13511002";s:5:"email";s:21:"13511002@vsilicon.com";s:7:"user_id";s:2:"17";s:14:"old_last_login";s:10:"1399221224";}');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `nomor` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `prioritas` text NOT NULL,
  `pemimpin_proyek` text NOT NULL,
  `peserta_proyek` text NOT NULL,
  PRIMARY KEY (`nomor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1015 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`nomor`, `judul`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `prioritas`, `pemimpin_proyek`, `peserta_proyek`) VALUES
(1003, 'Besok Kumpul 5', 'Besok Kumpul The Series Continues', '2005-02-03', '2015-06-07', 'Sangat Rendah', '13511002 Felicita', '13511005 Bandung, 13511006 Cek, 13511007 Budi, 13511008 Haha, '),
(1012, 'Besok Kumpul 2.1', 'Besok kumpul', '2001-01-01', '2017-02-02', 'Sangat Tinggi', '13511001 Danti', '13511002 Felicita, 13511003 Anjani, '),
(1013, 'Besok Kumpul 2.3', 'Besok Kumpul, Incs', '2002-01-01', '2004-02-26', 'Sangat Tinggi', '13511002 Felicita', '13511005 Bandung, 13511007 Budi, '),
(1014, 'Besok Kumpul 4', 'Besok Kumpul The Series', '2000-01-01', '2020-02-02', 'Sangat Tinggi', '13511003 Anjani', '13511000 Asep, 13511001 Danti, 13511002 Felicita, ');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIP` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `TempatLahir` varchar(255) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Divisi` text NOT NULL,
  `Jabatan` text NOT NULL,
  `TanggalDiterima` date NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `CurrentProyek` int(11) NOT NULL DEFAULT '0',
  `ListCurrentProyek` text,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13511009 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIP`, `Nama`, `Alamat`, `TempatLahir`, `TanggalLahir`, `Divisi`, `Jabatan`, `TanggalDiterima`, `Foto`, `CurrentProyek`, `ListCurrentProyek`) VALUES
(1001, '0', '0', '0', '0000-00-00', '0', '0', '0000-00-00', '0', 0, ''),
(13511000, 'Asep', 'Bandung', 'Bandung', '1999-01-01', '0', '0', '2014-02-02', '0', 1, '1014, '),
(13511001, 'Danti', 'Bandung', 'Bandung', '1999-01-01', '0', '0', '2009-02-02', '0', 2, '1012, 1014, '),
(13511002, 'Felicita', 'Bandung', 'Bandung', '2000-03-03', '0', '0', '2013-01-31', '0', 3, '1003, 1012, 1014, '),
(13511003, 'Anjani', 'Bandung', 'Bandung', '1999-01-01', '0', '0', '1999-02-02', '0', 2, '1014, 1012, '),
(13511005, 'Bandung', 'Cimahi', 'Cimahi', '1999-01-01', '0', '0', '2014-02-02', '0', 1, '1003, '),
(13511006, 'Cek', 'Cek', 'Cek', '1992-01-01', '0', '0', '1999-02-02', '0', 1, '1003, '),
(13511007, 'Budi', 'Bandung', 'Bandung', '1999-01-01', '0', '0', '1999-02-02', '0', 1, '1003, '),
(13511008, 'Haha', 'Bandfung', 'Besok', '1991-01-01', '0', '0', '2001-01-01', '0', 1, '1003, ');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE IF NOT EXISTS `pengetahuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `poster_nip` int(11) NOT NULL,
  `waktu_dibuat` datetime NOT NULL,
  `waktu_modifikasi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `judul`, `konten`, `poster_nip`, `waktu_dibuat`, `waktu_modifikasi`) VALUES
(1, 'Masdas', 'sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd sadaslkdj asldkas asdlkas alskd lkasnd ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1399221430, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(15, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511000', '2e041f245136ec0451f48af15ae66403c39a527b', NULL, '13511000@vsilicon.com', NULL, NULL, NULL, NULL, 1398778789, 1398778789, 1, NULL, NULL, NULL, NULL),
(16, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511001', '3f39bc9c2a021fb1da1c0c380e81be1abdeb2e15', NULL, '13511001@vsilicon.com', NULL, NULL, NULL, NULL, 1398778906, 1398778926, 1, NULL, NULL, NULL, NULL),
(17, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511002', '5972e4927b7e76dcf2c8790e8a52f1447a404d45', NULL, '13511002@vsilicon.com', NULL, NULL, NULL, NULL, 1398778964, 1399221393, 1, NULL, NULL, NULL, NULL),
(18, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511003', 'aec9edc1cedf128db786ce62df7699c4b097bb35', NULL, '13511003@vsilicon.com', NULL, NULL, NULL, NULL, 1398779320, 1398779320, 1, NULL, NULL, NULL, NULL),
(19, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511005', '49c96fdd554efff898af9e6ede37ce09764651c1', NULL, '13511005@vsilicon.com', NULL, NULL, NULL, NULL, 1398791609, 1398791609, 1, NULL, NULL, NULL, NULL),
(20, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511006', '23c192ab276d096fdac3858f7310ca62a277f456', NULL, '13511006@vsilicon.com', NULL, NULL, NULL, NULL, 1398793386, 1398793386, 1, NULL, NULL, NULL, NULL),
(21, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511007', 'bf70f9e3fa89967d09a59d1e2346c6974ed20f51', NULL, '13511007@vsilicon.com', NULL, NULL, NULL, NULL, 1398884191, 1398884191, 1, NULL, NULL, NULL, NULL),
(22, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511008', '782872c16bff632f71302db7974f21843f4191c6', NULL, '13511008@vsilicon.com', NULL, NULL, NULL, NULL, 1399117290, 1399117290, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(16, 15, 2),
(17, 16, 1),
(18, 17, 2),
(19, 18, 2),
(20, 19, 2),
(21, 20, 2),
(22, 21, 2),
(23, 22, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
