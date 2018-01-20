-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2018 at 06:03 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah2`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdministrator` int(2) NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guru_idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Siswa_idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_murid_idWali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Kep_sek_idKep_sek` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`, `current_login`, `last_login`, `T_U_idT_U`, `Guru_idGuru`, `Siswa_idSiswa`, `Wali_kelas_idWali_kelas`, `Wali_murid_idWali_murid`, `Kep_sek_idKep_sek`) VALUES
(1, 'Fuad Octrianto', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-12-19 20:25:57', '2017-12-19 20:25:57', '', '', '', '', '', NULL),
(3, 'Qutsiyah', 'qutsi', 'b9dc597fff690a099a7662fe97c253da', '2012-02-06 11:29:10', '2013-12-12 23:12:11', '', '', '', '', '', NULL),
(2, 'Achmad Fauzi', 'fauzi', '0bd9897bf12294ce35fdc0e21065c8a7', '2012-02-06 11:29:10', '2013-12-12 23:12:11', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idGuru` int(5) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wali_kelas` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `nama`, `alamat`, `wali_kelas`, `password`, `foto`, `Wali_kelas_idWali_kelas`) VALUES
(1, 'Budi Sentosa', 'Pamekasan', 'X-1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(2, 'Bahruddin', 'Sampang', 'X-2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(3, 'Sitti Zulaiha', 'Pamekasan', 'X-3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(4, 'Dani ramadhan', 'Sumenep', 'X-4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(5, 'Susanto Bakri', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(6, 'Megawati Pratiwi', 'Pamekasan', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(7, 'Midun', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(8, 'Moh Salman', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(9, 'Dewi Karisma', 'Kamal', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(10, 'Reny Sinta', 'Bangkalan', 'XI IPS 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(11, 'Algi', 'Dijalan', 'XI IPS 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/WhatsApp Image 2017-12-19 at 3.24.55 PM.jpeg', NULL),
(12, 'Dina Atiqah', 'Sampang', 'XI IPS 4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(13, 'Citra Ananda', 'Kamal', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(14, 'Hidayatul Mustafidah', 'Gresik', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(15, 'Karebet Keserempet', 'Jalan Kenangan', 'Tidak', '25d55ad283aa400af464c76d713c07ad', 'foto/index.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru_has_mata_pelajaran`
--

CREATE TABLE `guru_has_mata_pelajaran` (
  `idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `idRuang_Kelas` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru_has_mata_pelajaran`
--

INSERT INTO `guru_has_mata_pelajaran` (`idGuru`, `idmata_pelajaran`, `idRuang_Kelas`) VALUES
('10', '11', 2),
('11', '11', 1),
('11', '14', 6),
('12', '12', 5),
('13', '9', 5),
('14', '13', 5),
('2', '9', 2),
('3', '10', 1),
('4', '14', 5),
('6', '15', 3),
('8', '14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kep_sek`
--

CREATE TABLE `kep_sek` (
  `idKep_sek` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kep_sek`
--

INSERT INTO `kep_sek` (`idKep_sek`, `nama`, `username`, `password`, `T_U_idT_U`) VALUES
('1', 'Karebet', 'maskarebet', '25d55ad283aa400af464c76d713c07ad', '');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `idmata_pelajaran` int(5) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`idmata_pelajaran`, `nama`) VALUES
(9, 'Matematika'),
(10, 'Bahasa Inggris'),
(11, 'Fisika'),
(12, 'Biologi'),
(13, 'Pendidikan Agama Islam'),
(14, 'Teknologi Informasi Dan Komunikasi'),
(15, 'Sosiologi'),
(16, 'Bahasa Daerah'),
(18, 'Kimia'),
(19, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran_has_ruang_kelas`
--

CREATE TABLE `mata_pelajaran_has_ruang_kelas` (
  `idmata_pelajaran` int(3) NOT NULL,
  `idRuang_Kelas` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `hari` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `jampelajaran` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran_has_ruang_kelas`
--

INSERT INTO `mata_pelajaran_has_ruang_kelas` (`idmata_pelajaran`, `idRuang_Kelas`, `hari`, `jampelajaran`) VALUES
(10, '1', 'Senin', '07:00 - 08:30 '),
(11, '1', 'Senin', '08:30 - 09:30'),
(9, '2', 'Senin', '07:00 - 08:00 '),
(14, '6', 'Senin', '07:00 - 08:00 '),
(11, '2', 'Senin', '08:00 - 09:00 '),
(14, '3', 'Senin', '07:00 - 08:30'),
(15, '3', 'Senin', '07:00 - 08:10'),
(9, '5', 'Senin', '07:00 - 08:00 '),
(14, '5', 'Senin', '08:00 - 09:00 '),
(12, '5', 'Selasa', '07:00 - 08:00 '),
(13, '5', 'Selasa', '08:00 - 09:00 ');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE `ruang_kelas` (
  `idRuang_Kelas` int(5) NOT NULL,
  `nama` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`idRuang_Kelas`, `nama`, `jumlah_siswa`) VALUES
(1, 'X - 1', 40),
(2, 'X - 2', 42),
(3, 'X - 3', 40),
(4, 'X - 4', 40),
(5, 'XI IPA 1', 40),
(6, 'XI IPA 2', 40),
(7, 'XI IPA 3', 40),
(8, 'XI IPA 4', 38),
(9, 'XI IPS 1', 40),
(10, 'XI IPS 2', 40),
(11, 'XI IPS 3', 35),
(12, 'XI IPS 4', 40);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nama`, `alamat`, `kelas`, `password`) VALUES
('1234', 'Eko Sulistiyanto', 'Jawa', 'XI IPA 1', '9643b5085fd981ed726f4861daf3f84a'),
('1222', 'Qutsiyah', 'Sumenep', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('2112', 'Dudi Irawan ', 'Sidoarjo', 'XII IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1221', 'Ananda Septia', 'Sampang', 'XII IPS 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1215', 'Ayu Ismawati', 'Bangkalan', 'XII IPS 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2111', 'Dina Cintya', 'Pamekasan', 'XII IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('2113', 'Dinda Asmara', 'Sampang', 'XII IPA 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('2114', 'Suci Permata', 'Sumenep', 'XII IPA 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2115', 'Asmirandah', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1110', 'Fandi Irawan', 'Sampang', 'X - 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1212', 'Gilang Ramadhan', 'Sampang', 'X - 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('1010', 'Misbahul Munir', 'Sampang', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1000', 'Eka Sucianti', 'Pamekasan', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('1001', 'Wardatul Hayati', 'Kamal', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('1023', 'Soraya Putri', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1432', 'Ekoparjo', 'Tangerang', 'XI IPA 1', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_mata_pelajaran`
--

CREATE TABLE `siswa_has_mata_pelajaran` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `semester` enum('Ganjil','Genap') COLLATE utf8_unicode_ci NOT NULL,
  `thn_ajaran` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `afektif` int(3) DEFAULT NULL,
  `komulatif` int(3) DEFAULT NULL,
  `psikomotorik` int(3) DEFAULT NULL,
  `rata` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa_has_mata_pelajaran`
--

INSERT INTO `siswa_has_mata_pelajaran` (`idSiswa`, `idmata_pelajaran`, `semester`, `thn_ajaran`, `afektif`, `komulatif`, `psikomotorik`, `rata`) VALUES
('1001', '9', 'Ganjil', '2009-2010', 90, 90, 95, 92),
('1110', '15', 'Ganjil', '2009-2010', 83, 87, 97, 89),
('1110', '14', 'Ganjil', '2009-2010', 99, 91, 94, 95),
('1234', '9', 'Ganjil', '2009-2010', 91, 91, 94, 92),
('2115', '11', 'Ganjil', '2011-2012', 98, 83, 74, 85),
('2115', '10', 'Ganjil', '2009-2010', 90, 97, 92, 93),
('1222', '14', 'Ganjil', '2010-2011', 95, 89, 98, 94),
('1234', '14', 'Ganjil', '2010-2011', 99, 90, 92, 94),
('1234', '9', 'Genap', '2009-2010', 80, 75, 80, 78),
('1234', '14', 'Ganjil', '2009-2010', 97, 98, 98, 98),
('1023', '9', 'Ganjil', '2009-2010', 84, 87, 95, 89),
('1023', '14', 'Ganjil', '2009-2010', 99, 92, 94, 95),
('1023', '12', 'Ganjil', '2009-2010', 98, 82, 6, 62),
('1023', '9', 'Genap', '2009-2010', 72, 80, 74, 75),
('1023', '14', 'Genap', '2009-2010', 97, 84, 86, 89),
('1023', '9', 'Ganjil', '2010-2011', 86, 98, 80, 88),
('1023', '9', 'Genap', '2010-2011', 87, 70, 71, 76),
('1023', '14', 'Genap', '2010-2011', 74, 65, 69, 69),
('1023', '14', 'Ganjil', '2011-2012', 78, 82, 89, 83),
('1023', '12', 'Genap', '2011-2012', 98, 93, 85, 92),
('1023', '13', 'Genap', '2011-2012', 98, 97, 89, 95),
('1234', '9', 'Ganjil', '2017-2018', 90, 94, 90, 91);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `bulan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_bayar` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `nis`, `bulan`, `tgl_bayar`, `jumlah`) VALUES
(1, 1023, 'juni 2012', '03-07-2012', 120000),
(2, 1222, 'juni 2012', '04-07-2012', 120000),
(3, 1234, 'juni 2012', '03-07-2012', 120000),
(4, 1212, 'juni 2012', '06-06-2012', 120000),
(5, 2115, 'mei 2012', '03-07-2012', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `t_u`
--

CREATE TABLE `t_u` (
  `idT_U` int(5) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_u`
--

INSERT INTO `t_u` (`idT_U`, `nama`, `alamat`, `username`, `password`) VALUES
(6, 'Sofyan Jalil', 'Pamekasan', 'sofyan', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'Idris Sulaiman', 'Sampang', 'idris', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Ian Antono', 'Bangkalan', 'ian', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_guru`
--

CREATE TABLE `t_u_has_guru` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guru_idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_mata_pelajaran`
--

CREATE TABLE `t_u_has_mata_pelajaran` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mata_pelajaran_idmata_pelajaran` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_ruang_kelas`
--

CREATE TABLE `t_u_has_ruang_kelas` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Ruang_Kelas_idRuang_Kelas` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_wali_murid`
--

CREATE TABLE `t_u_has_wali_murid` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_murid_idWali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE `wali_murid` (
  `idwali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`idwali_murid`, `nama`, `alamat`, `password`) VALUES
('001234', 'Moh Ishak', 'Pamekasan', '827ccb0eea8a706c4c34a16891f84e7b'),
('001001', 'Suhriyanto', 'Sumenep', '827ccb0eea8a706c4c34a16891f84e7b'),
('001023', 'Agus Priyantoro', 'Bangkalan', '827ccb0eea8a706c4c34a16891f84e7b'),
('001000', 'Ramli', 'Pamekasan', '827ccb0eea8a706c4c34a16891f84e7b'),
('001215', 'Suhriyanto', 'Sumenep', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid_has_siswa`
--

CREATE TABLE `wali_murid_has_siswa` (
  `idwali_murid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idSiswa` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid_has_siswa`
--

INSERT INTO `wali_murid_has_siswa` (`idwali_murid`, `idSiswa`) VALUES
('001000', '1000'),
('001001', '1001'),
('001023', '1023'),
('001215', '1215'),
('001234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdministrator`,`T_U_idT_U`,`Guru_idGuru`,`Siswa_idSiswa`,`Wali_kelas_idWali_kelas`,`Wali_murid_idWali_murid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_Administrator_T_U` (`T_U_idT_U`),
  ADD KEY `fk_Administrator_Guru` (`Guru_idGuru`),
  ADD KEY `fk_Administrator_Siswa` (`Siswa_idSiswa`),
  ADD KEY `fk_Administrator_Wali_kelas` (`Wali_kelas_idWali_kelas`),
  ADD KEY `fk_Administrator_Wali_murid` (`Wali_murid_idWali_murid`),
  ADD KEY `fk_Administrator_Kep_sek` (`Kep_sek_idKep_sek`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`),
  ADD KEY `fk_Guru_Wali_kelas` (`Wali_kelas_idWali_kelas`);

--
-- Indexes for table `guru_has_mata_pelajaran`
--
ALTER TABLE `guru_has_mata_pelajaran`
  ADD PRIMARY KEY (`idGuru`,`idmata_pelajaran`,`idRuang_Kelas`),
  ADD KEY `fk_Guru_has_mata_pelajaran_Guru` (`idGuru`),
  ADD KEY `fk_Guru_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`),
  ADD KEY `fk_Guru_has_mata_pelajaran_ruang_kelas` (`idRuang_Kelas`);

--
-- Indexes for table `kep_sek`
--
ALTER TABLE `kep_sek`
  ADD PRIMARY KEY (`idKep_sek`,`T_U_idT_U`),
  ADD KEY `fk_Kep_sek_T_U` (`T_U_idT_U`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`idmata_pelajaran`);

--
-- Indexes for table `mata_pelajaran_has_ruang_kelas`
--
ALTER TABLE `mata_pelajaran_has_ruang_kelas`
  ADD PRIMARY KEY (`idmata_pelajaran`,`idRuang_Kelas`,`hari`),
  ADD KEY `fk_mata_pelajaran_has_Ruang_Kelas_mata_pelajaran` (`idmata_pelajaran`),
  ADD KEY `fk_mata_pelajaran_has_Ruang_Kelas_Ruang_Kelas` (`idRuang_Kelas`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD PRIMARY KEY (`idRuang_Kelas`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- Indexes for table `siswa_has_mata_pelajaran`
--
ALTER TABLE `siswa_has_mata_pelajaran`
  ADD PRIMARY KEY (`idSiswa`,`idmata_pelajaran`,`semester`,`thn_ajaran`),
  ADD KEY `fk_Siswa_has_mata_pelajaran_Siswa` (`idSiswa`),
  ADD KEY `fk_Siswa_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_u`
--
ALTER TABLE `t_u`
  ADD PRIMARY KEY (`idT_U`);

--
-- Indexes for table `t_u_has_guru`
--
ALTER TABLE `t_u_has_guru`
  ADD PRIMARY KEY (`T_U_idT_U`,`Guru_idGuru`),
  ADD KEY `fk_T_U_has_Guru_T_U` (`T_U_idT_U`),
  ADD KEY `fk_T_U_has_Guru_Guru` (`Guru_idGuru`);

--
-- Indexes for table `t_u_has_mata_pelajaran`
--
ALTER TABLE `t_u_has_mata_pelajaran`
  ADD PRIMARY KEY (`T_U_idT_U`,`mata_pelajaran_idmata_pelajaran`),
  ADD KEY `fk_T_U_has_mata_pelajaran_T_U` (`T_U_idT_U`),
  ADD KEY `fk_T_U_has_mata_pelajaran_mata_pelajaran` (`mata_pelajaran_idmata_pelajaran`);

--
-- Indexes for table `t_u_has_ruang_kelas`
--
ALTER TABLE `t_u_has_ruang_kelas`
  ADD PRIMARY KEY (`T_U_idT_U`,`Ruang_Kelas_idRuang_Kelas`),
  ADD KEY `fk_T_U_has_Ruang_Kelas_T_U` (`T_U_idT_U`),
  ADD KEY `fk_T_U_has_Ruang_Kelas_Ruang_Kelas` (`Ruang_Kelas_idRuang_Kelas`);

--
-- Indexes for table `t_u_has_wali_murid`
--
ALTER TABLE `t_u_has_wali_murid`
  ADD PRIMARY KEY (`T_U_idT_U`,`Wali_murid_idWali_murid`),
  ADD KEY `fk_T_U_has_Wali_murid_T_U` (`T_U_idT_U`),
  ADD KEY `fk_T_U_has_Wali_murid_Wali_murid` (`Wali_murid_idWali_murid`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`idWali_kelas`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`idwali_murid`);

--
-- Indexes for table `wali_murid_has_siswa`
--
ALTER TABLE `wali_murid_has_siswa`
  ADD PRIMARY KEY (`idwali_murid`,`idSiswa`),
  ADD KEY `fk_wali_murid_has_siswa_wali_murid` (`idwali_murid`),
  ADD KEY `fk_wali_murid_has_siswa_siswa` (`idSiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idAdministrator` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `idmata_pelajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `mata_pelajaran_has_ruang_kelas`
--
ALTER TABLE `mata_pelajaran_has_ruang_kelas`
  MODIFY `idmata_pelajaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  MODIFY `idRuang_Kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_u`
--
ALTER TABLE `t_u`
  MODIFY `idT_U` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
