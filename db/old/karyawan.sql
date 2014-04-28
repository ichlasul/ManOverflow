-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2014 pada 13.37
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP TABLE IF EXISTS `karyawan`;

--
-- Basis data: `manov`
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
