-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 03:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sahaduta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_acces_menu`
--

CREATE TABLE `tb_acces_menu` (
  `id_acces` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_acces_menu`
--

INSERT INTO `tb_acces_menu` (`id_acces`, `id_status`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(2) NOT NULL,
  `agama` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khonghucu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `id_jenis_kelamin` int(2) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(9) NOT NULL,
  `no_rm` int(7) NOT NULL,
  `Kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `no_rm`, `Kritik`, `saran`) VALUES
(3, 2, 'CS nya cantek sekale', 'Iya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `menu`) VALUES
(1, 'Super Admin'),
(2, 'admin'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_rm` int(7) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `id_pendidikan` int(2) NOT NULL,
  `id_pekerjaan` int(2) NOT NULL,
  `id_jenis_kelamin` int(2) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `NIK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_rm`, `password`, `nama_pasien`, `tgl_lahir`, `alamat`, `nama_kk`, `id_agama`, `id_pendidikan`, `id_pekerjaan`, `id_jenis_kelamin`, `no_hp`, `NIK`) VALUES
(2, '', 'Marco Simic Rahmatullah', '2019-04-04', 'Jl.Mawarr', 'Marco Simic Rahmatullah', 3, 3, 5, 1, '08211', '3509091212120002'),
(4, '4', 'Andrea Pirlo Hidayatullah', '2019-05-01', 'Jl.Mawar', 'Andrea Stinky', 2, 1, 3, 1, '0821217727727', '3506061512980003'),
(5, '4', 'Ridwan Barkoui', '1998-12-15', 'Desa Plaosan Kec. Wates Kab. Kediri', 'Ridwanizer', 1, 3, 2, 1, '0821217727727', '3509091212120001'),
(6, '1679091c5a880faf6fb5', 'Manu Wanggai', '1988-12-12', 'Kota Jayapura', 'Ahmad Wanggai', 1, 6, 1, 1, '0821217727727', '3509091212120001'),
(7, '8f14e45fceea167a5a36', 'Yurike Anjani', '1999-02-16', 'Kota Boyolali', 'Merry Anjani', 1, 3, 1, 2, '082812991726', '3506061512980004'),
(8, '8f14e45fceea167a5a36', 'Younghusband', '1998-12-12', 'plaosan', 'Younghusband Jayadiningrat', 2, 4, 4, 1, '082122233322', '3509091212120002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `id_status` int(6) NOT NULL,
  `isactive` int(1) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `NIK`, `nama_pegawai`, `alamat`, `no_hp`, `email`, `pass`, `id_status`, `isactive`, `foto`, `last_login`, `last_update`) VALUES
(1, '3509091212120002', 'Anonim', 'Probolinggo', '101010', 'anonim@gmail.com', '74e59720dd08b1db45f7152d082c5051', 1, 1, '01-thumbnail.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '351314', 'admin', 'jember', '10101', 'admin@gmail.com', 'a152e841783914146e4bcd4f39100686', 2, 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '3506061212120001', 'tahes', 'jl plaosan', '086', 'tahes@gmail.com', 'tahes', 1, 1, '01-thumbnail.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '3509091212120002', 'Haji', 'Jl.Mawar', '082122233322', 'haji@gmail.com', '3d1102f8d75f56bc6de99aff5cd8d6ea', 1, 1, 'Yusuf.JPG', '2019-06-30 21:15:04', '2019-06-30 08:57:47'),
(10, '3509091212120002', 'Biasa', 'Jl.Mawar', '082122233322', 'biasa@gmail.com', '428d0e7a73d305245da72e307ae51e57', 2, 1, 'Fatihal.JPG', '2019-06-30 08:58:25', '2019-06-30 10:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(2) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'Belum/tidak bekerja'),
(2, 'Pelajar/mahasiswa'),
(3, 'PNS'),
(4, 'Wiraswasta'),
(5, 'Buruh/pegawai'),
(6, 'Pensiunan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(7) NOT NULL,
  `no_antrian` int(3) NOT NULL,
  `no_rm` int(7) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `waktu_pemesanan` time NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `status_pemesanan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `no_antrian`, `no_rm`, `tgl_pemesanan`, `waktu_pemesanan`, `id_pegawai`, `status_pemesanan`) VALUES
(1, 1, 2, '2019-05-04', '05:18:27', 0, 0),
(9, 1, 2, '2019-05-14', '00:00:00', 0, 0),
(10, 2, 2, '2019-05-14', '00:00:00', 0, 0),
(13, 1, 4, '2019-05-15', '10:16:03', 0, 0),
(14, 1, 2, '2019-05-20', '09:32:21', 0, 0),
(15, 1, 2, '2019-05-27', '12:53:13', 0, 0),
(18, 3, 4, '2019-05-27', '14:34:04', 0, 0),
(19, 1, 2, '2019-06-10', '20:18:41', 4, 0),
(20, 2, 4, '2019-06-10', '21:10:50', 1, 0),
(21, 1, 2, '2019-06-19', '19:35:12', 0, 0),
(22, 2, 5, '2019-06-19', '19:52:35', 9, 0),
(23, 3, 4, '2019-06-19', '19:55:18', 9, 0),
(25, 1, 2, '2019-06-22', '09:54:22', 9, 0),
(26, 2, 4, '2019-06-22', '09:58:26', 9, 0),
(30, 1, 2, '2019-06-27', '12:04:08', 10, 0),
(31, 1, 4, '2019-06-29', '16:26:02', 9, 0),
(32, 2, 7, '2019-06-29', '16:33:45', 9, 0),
(33, 3, 5, '2019-06-29', '17:13:36', 9, 0),
(34, 4, 6, '2019-06-29', '17:14:05', 9, 0),
(35, 5, 2, '2019-06-29', '17:34:04', 9, 0),
(36, 1, 4, '2019-06-30', '10:06:06', 10, 0),
(37, 2, 2, '2019-06-30', '10:06:18', 10, 0),
(38, 3, 5, '2019-06-30', '21:45:53', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(2) NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'SD / Sederajat'),
(2, 'SMP / Sederajat'),
(3, 'SMA / Sederajat'),
(4, 'Strata 1 (S1)'),
(5, 'Strata 2 (S2)'),
(6, 'Strata 3 (S3)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `nama_status`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_menu`
--

CREATE TABLE `tb_sub_menu` (
  `id_submenu` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sub_menu`
--

INSERT INTO `tb_sub_menu` (`id_submenu`, `id_menu`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fa fa-dashboard', 1),
(2, 2, 'Pasien', 'pasien', 'fa fa-wheelchair', 1),
(3, 2, 'Pemesanan', 'pemesanan', 'fa fa-history', 1),
(4, 1, 'Pegawai', 'pegawai', 'fa fa-users', 1),
(5, 1, 'Komentar', 'komentar', 'fa fa-comments-o', 1),
(6, 2, 'Laporan', 'laporan', 'fa fa-file-archive-o', 1),
(7, 3, 'Akses Admin', 'aksesadmin', 'fa fa-bar-chart-o', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acces_menu`
--
ALTER TABLE `tb_acces_menu`
  ADD PRIMARY KEY (`id_acces`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_sub_menu`
--
ALTER TABLE `tb_sub_menu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_acces_menu`
--
ALTER TABLE `tb_acces_menu`
  MODIFY `id_acces` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `no_rm` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sub_menu`
--
ALTER TABLE `tb_sub_menu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `tb_pasien` (`no_rm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
