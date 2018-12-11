-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 06:27 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sd_bendungan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `set_tgl`
--

CREATE TABLE IF NOT EXISTS `set_tgl` (
`id` int(11) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `tgl_awal` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `kd_admin` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` char(50) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kd_admin`, `username`, `password`, `nama`, `akses`, `foto`) VALUES
('A0001', 'satria123', '81dc9bdb52d04dc20036dbd8313ed055', 'Egy Satria Hantoro', 'admin', 'foto-1521996102.jpg'),
('A0003', 'anggit1234', '202cb962ac59075b964b07152d234b70', 'Anggit Wibowo AD', 'admin', 'foto-1521995041.jpg'),
('A0004', 'sulis1', '01cfcd4f6b8770febfb40cb906715822', 'Sulistyo Anton WA', 'admin', 'foto-1521995140.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE IF NOT EXISTS `tb_alumni` (
  `kd_alumni` varchar(25) NOT NULL,
  `nm_alumni` char(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `thn_masuk` varchar(12) NOT NULL,
  `thn_keluar` varchar(12) NOT NULL,
  `no_tlp` int(16) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip`
--

CREATE TABLE IF NOT EXISTS `tb_arsip` (
  `kd_arsip` varchar(25) NOT NULL,
  `judul` text NOT NULL,
  `file` text NOT NULL,
  `tgl_publis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arsip`
--

INSERT INTO `tb_arsip` (`kd_arsip`, `judul`, `file`, `tgl_publis`) VALUES
('AR-001', 'Nilai Matematika', 'f-1531288658.docx', '2018-07-11'),
('AR-002', 'Kisi - Kisi ABC', 'f-1522129938.doc', '2018-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE IF NOT EXISTS `tb_daftar` (
  `kd_daftar` varchar(25) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `nm_pendaftar` char(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindu','Budha') NOT NULL,
  `alamat` text NOT NULL,
  `nm_ayah` char(50) NOT NULL,
  `nm_ibu` char(50) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `pk_ayah` varchar(50) NOT NULL,
  `pk_ibu` varchar(50) NOT NULL,
  `tlp_ortu` varchar(16) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`kd_daftar`, `kelas`, `nm_pendaftar`, `tp_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `tlp_ortu`, `tgl_daftar`, `status`, `foto`) VALUES
('P0001', 'I', 'Egy Hantoro', 'Tawarsari', '1996-12-05', 'Laki - Laki', 'Islam', 'Tawarsari', 'Sugianto', 'Eny Sumaryanti', 'Tawarsari', 'Swasta', 'PNS', '089504854846', '2018-06-08', 1, 'foto-1528457443.jpg'),
('P0002', 'I', 'Anggit Wibowo', 'Grogol, Paliyan', '1996-05-07', 'Laki - Laki', 'Islam', 'Paliyan', 'Sartonio', 'Poniyem', 'Paliyan', 'Swasta', 'Swasta', '089504854846', '2018-06-30', 1, 'foto-1530375951.jpg'),
('P0003', 'I', 'Dani Setiawan', 'Dlingo', '1993-03-05', 'Laki - Laki', 'Kristen', 'Paliyan', 'Sartonio', 'Poniyem', 'Paliyan', 'Swasta', 'Swasta', '089504854846', '2018-07-10', 1, 'foto-1531205474.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kel`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kel` (
`kode` int(11) NOT NULL,
  `kd_kelas` varchar(25) NOT NULL,
  `kd_siswa` varchar(25) NOT NULL,
  `ta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE IF NOT EXISTS `tb_guru` (
  `nip` varchar(25) NOT NULL,
  `nm_guru` char(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `golongan` enum('A','B','AB','O') NOT NULL,
  `status` enum('PNS','Honorer') NOT NULL,
  `password` varchar(50) NOT NULL,
  `pendidikan` enum('SLTA','D3','D4/S1','S2','S3') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `nm_guru`, `tp_lahir`, `tgl_lahir`, `jk`, `agama`, `jabatan`, `alamat`, `golongan`, `status`, `password`, `pendidikan`, `foto`) VALUES
('0533750652300082', 'Eny Sumaryanti, S.pd.SD', 'Gunungkidul', '1972-02-01', 'Perempuan', 'Islam', 'Gunungkidul', 'Watudalang', 'AB', 'PNS', '1f32aa4c9a1d2ea010adcf2348166a04', 'SLTA', 'foto-1526903444.jpg'),
('0759742646210022', 'Herini Kustiningsih, S.pd.SD', 'Gunungkidul', '1965-04-27', 'Perempuan', 'Islam', 'Gunungkidul', 'Logandeng', 'AB', 'PNS', '1f32aa4c9a1d2ea010adcf2348166a04', 'SLTA', 'foto-1526903187.jpg'),
('197306051996061002', 'Sriyanto, S.pd.SD', 'Sleman', '1973-06-05', 'Laki - Laki', 'Islam', 'Sleman', 'Karangmojo', 'B', 'PNS', '1f32aa4c9a1d2ea010adcf2348166a04', 'SLTA', 'foto-1522170449.jpg'),
('198001052008012009', 'Sri Budiyarti, S.pd.SD', 'Gunungkidul', '1980-01-05', 'Perempuan', 'Islam', 'Gunungkidul', 'Grogol', 'AB', 'PNS', '58b1216b06850385d9a4eadbedc806c4', 'SLTA', 'foto-1522170302.jpg'),
('3142765667300003', 'Agustina Sriwiyati, S.pd.SD', 'Gunungkidul', '1987-08-10', 'Perempuan', 'Islam', 'Gunungkidul', 'Baleharjo', 'AB', 'PNS', '827ccb0eea8a706c4c34a16891f84e7b', 'SLTA', 'foto-1526902978.jpg'),
('4047748650300093', 'Sujinah, S.pd.SD', 'Bantul', '1970-07-15', 'Perempuan', 'Islam', 'Bantul', 'Watudalang', 'B', 'PNS', '1f32aa4c9a1d2ea010adcf2348166a04', 'SLTA', 'foto-1526903622.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `kd_kelas` varchar(25) NOT NULL,
  `kelas` char(3) NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `kelas`, `nip`) VALUES
('K-001', 'I', '198001052008012009'),
('K-002', 'II', '3142765667300003'),
('K-003', 'III', '0759742646210022'),
('K-004', 'IV', '0533750652300082'),
('K-005', 'V', '4047748650300093'),
('K-006', 'VI', '197306051996061002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE IF NOT EXISTS `tb_mapel` (
  `kd_mapel` varchar(25) NOT NULL,
  `nm_mapel` char(50) NOT NULL,
  `kkm_mapel` float NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `nm_mapel`, `kkm_mapel`, `nip`) VALUES
('M-0001', 'Matematika', 75, '4047748650300093'),
('M-0002', 'Bahasa Inggris', 70, '198001052008012009');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master`
--

CREATE TABLE IF NOT EXISTS `tb_master` (
  `kd_master` varchar(25) NOT NULL,
  `thn_ajaran` varchar(25) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_master`
--

INSERT INTO `tb_master` (`kd_master`, `thn_ajaran`, `status`) VALUES
('M0001', '2015/2016', 0),
('M0002', '2016/2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `kd_nilai` varchar(25) NOT NULL,
  `kd_siswa` varchar(25) NOT NULL,
  `kd_kelas` varchar(25) NOT NULL,
  `kd_mapel` varchar(25) NOT NULL,
  `ta` varchar(15) NOT NULL,
  `semester` float NOT NULL,
  `n_tugas` float NOT NULL,
  `n_uh` float NOT NULL,
  `n_uts` float NOT NULL,
  `n_uas` float NOT NULL,
  `t_nilai` float NOT NULL,
  `n_akhir` float NOT NULL,
  `ket` enum('Tuntas','Tidak Tuntas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`kd_nilai`, `kd_siswa`, `kd_kelas`, `kd_mapel`, `ta`, `semester`, `n_tugas`, `n_uh`, `n_uts`, `n_uas`, `t_nilai`, `n_akhir`, `ket`) VALUES
('N0001', 'P0002', 'K-001', 'M-0002', '', 1, 80, 90, 100, 90, 360, 90, 'Tuntas'),
('N0002', 'P0001', 'K-001', 'M-0001', '2015/2016', 1, 100, 100, 100, 90, 390, 97.5, 'Tuntas'),
('N0003', 'P0001', 'K-002', 'M-0002', '2015/2016', 1, 80, 90, 100, 100, 370, 92.5, 'Tuntas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `kd_siswa` varchar(25) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nm_siswa` char(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(35) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(45) NOT NULL,
  `nm_ayah` char(50) NOT NULL,
  `nm_ibu` char(50) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `pk_ayah` varchar(50) NOT NULL,
  `pk_ibu` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tlp_ortu` int(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`kd_siswa`, `nis`, `nm_siswa`, `tp_lahir`, `tgl_lahir`, `agama`, `ta`, `alamat`, `status`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `password`, `tlp_ortu`, `foto`) VALUES
('P0001', 'P0001', 'Egy Hantoro', 'Tawarsari', '1996-12-05', 'Islam', '2015/2016', 'Tawarsari', 'siswa', 'Sugianto', 'Eny Sumaryanti', 'Tawarsari', 'Swasta', 'PNS', '1f32aa4c9a1d2ea010adcf2348166a04', 2147483647, 'foto-1528457470.'),
('P0002', 'P0002', 'Anggit Wibowo', 'Grogol, Paliyan', '1996-05-07', 'Islam', '2015/2016', 'Paliyan', 'siswa', 'Sartonio', 'Poniyem', 'Paliyan', 'Swasta', 'Swasta', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'foto-1530410955.'),
('P0003', 'P0003', 'Dani Setiawan', 'Dlingo', '1993-03-05', 'Kristen', '2015/2016', 'Paliyan', 'siswa', 'Sartonio', 'Poniyem', 'Paliyan', 'Swasta', 'Swasta', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'foto-1531205524.');

-- --------------------------------------------------------

--
-- Table structure for table `thn_ajaran`
--

CREATE TABLE IF NOT EXISTS `thn_ajaran` (
  `id` varchar(25) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `siswa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `set_tgl`
--
ALTER TABLE `set_tgl`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
 ADD PRIMARY KEY (`kd_alumni`);

--
-- Indexes for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
 ADD PRIMARY KEY (`kd_arsip`);

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
 ADD PRIMARY KEY (`kd_daftar`);

--
-- Indexes for table `tb_detail_kel`
--
ALTER TABLE `tb_detail_kel`
 ADD PRIMARY KEY (`kode`), ADD UNIQUE KEY `kd_kelas` (`kd_kelas`,`kd_siswa`), ADD KEY `nis` (`kd_siswa`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
 ADD PRIMARY KEY (`kd_kelas`), ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
 ADD PRIMARY KEY (`kd_mapel`), ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tb_master`
--
ALTER TABLE `tb_master`
 ADD PRIMARY KEY (`kd_master`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
 ADD PRIMARY KEY (`kd_nilai`), ADD UNIQUE KEY `nis` (`kd_siswa`,`kd_kelas`,`kd_mapel`), ADD KEY `kd_kelas` (`kd_kelas`), ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
 ADD PRIMARY KEY (`kd_siswa`);

--
-- Indexes for table `thn_ajaran`
--
ALTER TABLE `thn_ajaran`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `set_tgl`
--
ALTER TABLE `set_tgl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detail_kel`
--
ALTER TABLE `tb_detail_kel`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_kel`
--
ALTER TABLE `tb_detail_kel`
ADD CONSTRAINT `tb_detail_kel_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `tb_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_detail_kel_ibfk_2` FOREIGN KEY (`kd_siswa`) REFERENCES `tb_siswa` (`kd_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
ADD CONSTRAINT `tb_mapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`kd_kelas`) REFERENCES `tb_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`kd_mapel`) REFERENCES `tb_mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`kd_siswa`) REFERENCES `tb_siswa` (`kd_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
