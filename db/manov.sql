-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2014 pada 08.14
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `manov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
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
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0f4a39c98ba6e967f2c41e6cf3fc2cc2', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36', 1398319914, ''),
('10d7b05495c20bcc61c6ddedd88bc3d7', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36', 1398319914, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIP` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `TempatLahir` varchar(255) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Divisi` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL,
  `TanggalDiterima` date NOT NULL,
  `Foto` varchar(255) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13511082 ;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIP`, `Nama`, `Alamat`, `TempatLahir`, `TanggalLahir`, `Divisi`, `Jabatan`, `TanggalDiterima`, `Foto`) VALUES
(13214, 'ASEP', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(13511009, '12', 'asdasd', 'sds', '0002-02-01', '', '', '0012-12-11', ''),
(13511010, 'wwd', 'wdwd ', 'wdw', '0013-03-13', '', '', '0013-12-13', ''),
(13511011, 'aji', 'sds ', 'sds', '0013-12-13', '0', '0', '0013-12-13', '0'),
(13511075, 'Ichlasul Amal', ' ', '', '0000-00-00', '', '', '0000-00-00', ''),
(13511076, '', ' ', '', '0000-00-00', '', '', '0000-00-00', ''),
(13511077, '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(13511078, '', ' ', '', '0000-00-00', '', '', '0000-00-00', ''),
(13511079, '', ' ', '', '0000-00-00', '', '', '0000-00-00', ''),
(13511080, 'ss', 'as', 'sd', '2014-04-08', '', '', '2014-04-10', ''),
(13511081, 'fkl', 'sdsd', 'kksf', '0001-12-11', '', '', '0021-11-21', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
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
-- Struktur dari tabel `users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1397976319, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '0', NULL, '', NULL, NULL, NULL, NULL, 1397935913, 1397935913, 1, NULL, NULL, NULL, NULL),
(3, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '0', NULL, '', NULL, NULL, NULL, NULL, 1397936032, 1397936032, 1, NULL, NULL, NULL, NULL),
(4, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '', '0', NULL, '', NULL, NULL, NULL, NULL, 1397936052, 1397936052, 1, NULL, NULL, NULL, NULL),
(5, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'ss', '8428d80f08889f346101466f5101b8432dadfda8', NULL, 'ss', NULL, NULL, NULL, NULL, 1397936289, 1397936289, 1, NULL, NULL, NULL, NULL),
(6, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1359090', '88f9088253ec5633ff37bcf5ab251c8f9d903368', NULL, '1359090@vsilicon.com', NULL, NULL, NULL, NULL, 1397939924, 1397939924, 1, NULL, NULL, NULL, NULL),
(8, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511008', 'e2260f1d0ec2d9425dd46e3c6f9439496d44ba21', NULL, '13511008@vsilicon.com', NULL, NULL, NULL, NULL, 1397941585, 1397941585, 1, NULL, NULL, NULL, NULL),
(10, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511009', 'e6e713a8ba29f8c07f8ffe77a359c45f3bc6eab5', NULL, '13511009@vsilicon.com', NULL, NULL, NULL, NULL, 1397941965, 1397941965, 1, NULL, NULL, NULL, NULL),
(11, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511010', 'a4fd363034a75ca92292c9056b0af3bbb7d42d88', NULL, '13511010@vsilicon.com', NULL, NULL, NULL, NULL, 1397980781, 1397980781, 1, NULL, NULL, NULL, NULL),
(13, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '13511011', 'f585e1e63658e17462a4f8ba0c1992722b69af0d', NULL, '13511011@vsilicon.com', NULL, NULL, NULL, NULL, 1397986640, 1397986640, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(9, 8, 2),
(11, 10, 2),
(12, 11, 2),
(14, 13, 2);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
