-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Apr 2018 pada 14.26
-- Versi Server: 5.6.21
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
-- Struktur dari tabel `tb_admin`
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
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`kd_admin`, `username`, `password`, `nama`, `akses`, `foto`) VALUES
('A0001', 'satria123', '81dc9bdb52d04dc20036dbd8313ed055', 'Egy Satria Hantoro', 'admin', 'foto-1521996102.jpg'),
('A0003', 'anggit1234', '202cb962ac59075b964b07152d234b70', 'Anggit Wibowo AD', 'admin', 'foto-1521995041.jpg'),
('A0004', 'sulis1', '01cfcd4f6b8770febfb40cb906715822', 'Sulistyo Anton WA', 'admin', 'foto-1521995140.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
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

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`kd_alumni`, `nm_alumni`, `tp_lahir`, `tgl_lahir`, `jk`, `alamat`, `thn_masuk`, `thn_keluar`, `no_tlp`, `foto`) VALUES
('AL-002', 'Susi Susanti AW', 'Jepara', '2018-04-01', 'Laki - Laki', 'Gandu II', '2002/2003', '2008/2009', 6543212, 'foto-1522950672.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_arsip`
--

CREATE TABLE IF NOT EXISTS `tb_arsip` (
  `kd_arsip` varchar(25) NOT NULL,
  `judul` text NOT NULL,
  `file` text NOT NULL,
  `tgl_publis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_arsip`
--

INSERT INTO `tb_arsip` (`kd_arsip`, `judul`, `file`, `tgl_publis`) VALUES
('AR-002', 'Kisi - Kisi ABC', 'f-1522129938.doc', '2018-03-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE IF NOT EXISTS `tb_daftar` (
  `kd_daftar` varchar(25) NOT NULL,
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
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_kel`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kel` (
`kode` int(11) NOT NULL,
  `kd_kelas` varchar(25) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `ta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
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
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `nm_guru`, `tp_lahir`, `tgl_lahir`, `jk`, `agama`, `jabatan`, `alamat`, `golongan`, `status`, `password`, `pendidikan`, `foto`) VALUES
('197306051996061002', 'Sriyanto, S.pd', 'Sleman', '1973-06-05', 'Laki - Laki', 'Islam', 'Guru Kelas', 'Karangmojo', 'B', 'PNS', '827ccb0eea8a706c4c34a16891f84e7b', 'D4/S1', 'foto-1522170449.jpg'),
('198001052008012009', 'Sri Budiyarti, S.pd', 'Gunungkidul', '1980-01-05', 'Perempuan', 'Islam', 'Guru Kelas', 'Grogol', 'AB', 'PNS', '827ccb0eea8a706c4c34a16891f84e7b', 'D4/S1', 'foto-1522170302.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `kd_kelas` varchar(25) NOT NULL,
  `kelas` char(3) NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `kelas`, `nip`) VALUES
('K-001', 'I', '198001052008012009'),
('K-006', 'VI', '197306051996061002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE IF NOT EXISTS `tb_mapel` (
  `kd_mapel` varchar(25) NOT NULL,
  `nm_mapel` char(50) NOT NULL,
  `kkm_mapel` float NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `nm_mapel`, `kkm_mapel`, `nip`) VALUES
('M-002', 'Bahasa Inggris', 75, '197306051996061002'),
('M-003', 'Bahasa Inggris', 72, '198001052008012009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `kd_nilai` varchar(25) NOT NULL,
  `nis` varchar(25) NOT NULL,
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
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`kd_nilai`, `nis`, `kd_kelas`, `kd_mapel`, `ta`, `semester`, `n_tugas`, `n_uh`, `n_uts`, `n_uas`, `t_nilai`, `n_akhir`, `ket`) VALUES
('N-001', '1426', 'K-001', 'M-002', '2007/2008', 1, 100, 100, 100, 100, 400, 100, 'Tuntas'),
('N-002', '113', 'K-001', 'M-002', '2016/2017', 2, 100, 86, 96, 86, 368, 92, 'Tuntas'),
('N-003', '1426', 'K-006', 'M-003', '2016/2017', 1, 80, 90, 98, 90, 358, 89.5, 'Tuntas'),
('N-004', '2', 'K-001', 'M-003', '2016/2017', 1, 40, 50, 42, 44, 176, 44, 'Tidak Tuntas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
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
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nm_siswa`, `tp_lahir`, `tgl_lahir`, `agama`, `ta`, `alamat`, `status`, `nm_ayah`, `nm_ibu`, `alamat_ortu`, `pk_ayah`, `pk_ibu`, `password`, `tlp_ortu`, `foto`) VALUES
('113', 'qw', 'qw', '2018-02-26', 'Islam', '2008/2009', 'qw', 'siswa', 'wq', 'wq', 'wq', 'wq', 'wq', '006d2143154327a64d86a264aea225f3', 12, 'foto-1522165973.jpg'),
('1426', 'ADELIA DWI AFIFAH', 'GUNUNGKIDUL', '2018-02-25', 'Islam', '2016/2017', 'siswa', 'Gandu I', 'TARNO', 'SUGIYEM', 'Gandu I', 'Tani', 'Tani', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'foto-1522074719.jpg'),
('2', '2', '2', '2018-03-02', 'Kristen', '2', '234', '234', '2', '2', '2', '2', '2', '4a9bd19b3b8676199592a346051f950c', 2, 'foto-1521912999.jpg');

--
-- Indexes for dumped tables
--

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
 ADD PRIMARY KEY (`kode`), ADD UNIQUE KEY `kd_kelas` (`kd_kelas`,`nis`), ADD KEY `nis` (`nis`);

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
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
 ADD PRIMARY KEY (`kd_nilai`), ADD UNIQUE KEY `nis` (`nis`,`kd_kelas`,`kd_mapel`), ADD KEY `kd_kelas` (`kd_kelas`), ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
 ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_kel`
--
ALTER TABLE `tb_detail_kel`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_kel`
--
ALTER TABLE `tb_detail_kel`
ADD CONSTRAINT `tb_detail_kel_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `tb_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_detail_kel_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
ADD CONSTRAINT `tb_mapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`kd_kelas`) REFERENCES `tb_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`kd_mapel`) REFERENCES `tb_mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
