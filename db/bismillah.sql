-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 02:13 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(50) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `hadir` varchar(50) NOT NULL,
  `izin` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `tgl_absen` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_kelas` varchar(50) DEFAULT NULL,
  `absen` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_siswa`, `hadir`, `izin`, `sakit`, `tgl_absen`, `kode_kelas`, `absen`, `kelas`) VALUES
(1, '9700', '0', '1', '0', '2020-05-30 13:06:36', '01', 'S', 'X'),
(8, '9000', '1', '0', '0', '2020-05-30 13:07:27', '02', 'I', 'XI'),
(9, '6700', '0', '0', '1', '2020-05-30 13:08:26', '03', 'T', 'XII'),
(10, '', '10', '10', '10', '2020-06-05 17:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_absen`
--

CREATE TABLE `detail_absen` (
  `id_detailabsen` int(11) NOT NULL,
  `id_infoabsen` int(11) NOT NULL,
  `id_siswa` varchar(25) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_absen`
--

INSERT INTO `detail_absen` (`id_detailabsen`, `id_infoabsen`, `id_siswa`, `keterangan`) VALUES
(1, 1, '0000', 'A'),
(2, 1, '6700', 'H'),
(3, 2, '9000', 'A'),
(4, 2, '9700', 'A'),
(5, 2, '9999', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` int(50) DEFAULT NULL,
  `id_dtltransaksi` int(50) NOT NULL,
  `total_bayar` int(50) DEFAULT NULL,
  `tgl_bayar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `harga_spp` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `qty_spp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_dtltransaksi`, `total_bayar`, `tgl_bayar`, `harga_spp`, `status`, `qty_spp`) VALUES
(1, 3, 0, NULL, '10000', NULL, '2'),
(2, 16, NULL, NULL, '1000000', NULL, '6'),
(3, 18, NULL, NULL, '200000', NULL, '6'),
(2, 19, NULL, '2020-05-29 17:00:00', '100000', NULL, '6'),
(2, 20, NULL, '2020-05-29 17:00:00', '100000', NULL, '6'),
(2, 21, NULL, '0000-00-00 00:00:00', '20000', NULL, '6'),
(2, 22, NULL, '2020-05-05 17:00:00', '100000', NULL, '2'),
(5, 24, NULL, NULL, '20000', NULL, '6'),
(5, 25, NULL, NULL, '100000', NULL, '6'),
(5, 26, NULL, NULL, '20000', NULL, '2'),
(5, 27, NULL, NULL, '90000', NULL, '6'),
(5, 28, NULL, NULL, '500000', NULL, '2'),
(5, 29, NULL, NULL, '100000', NULL, '6'),
(3, 33, NULL, NULL, '700000', NULL, '2'),
(3, 34, NULL, NULL, '10000', NULL, '2'),
(5, 35, NULL, NULL, '300000', NULL, '6'),
(2, 36, NULL, NULL, '100000', NULL, '3'),
(2, 37, NULL, NULL, '100000', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_absen`
--

CREATE TABLE `informasi_absen` (
  `id_infoabsen` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_pengajar` varchar(150) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jurusan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_absen`
--

INSERT INTO `informasi_absen` (`id_infoabsen`, `tanggal`, `nama_pengajar`, `kelas`, `jurusan`) VALUES
(1, '2020-06-30 00:00:00', 'Dwi', 10, 'IPA'),
(2, '2020-06-02 00:00:00', 'Ulvia Yulianti', 12, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `id_user` int(50) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_lahir` text,
  `alamat` text,
  `gender` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `foto`, `id_user`, `umur`, `agama`, `nama`, `tgl_lahir`, `alamat`, `gender`, `no_hp`, `nama_ortu`, `jurusan`, `kelas`) VALUES
('0000', 'LOGO_POLITEKNIK_NEGERI_MALANG1.png', NULL, 10, 'kristen', 'Ulvia', '2020-05-27', 'Malang', 'Perempuan', '7892', 'kumbiati', 'IPA', '10'),
('5756', NULL, NULL, 25, 'islam', 'Annisa Safata', '2020-03-26', 'Kesamben Blitar', 'Perempuan', '08766386267728', 'haha', 'IPS', '10'),
('6700', NULL, NULL, 12, 'islam', 'Ulvia Yulianti', '2020-05-14', '2020-03-19', 'Perempuan', '889', 'sutaji', 'IPA', '10'),
('7800', NULL, NULL, 12, 'islam', 'Ulvia Yulianti', '2020-05-26', 'Malang', 'Perempuan', '831830830', 'kumbiati', 'IPA', '11'),
('8978', NULL, NULL, 16, 'islam', 'Tiara Anggun', '2020-04-14', 'Kediri', 'Perempuan', '37896846474892', 'Irawan', 'IPS', '11'),
('9000', NULL, NULL, 20, 'islam', 'Via', '2020-05-06', 'malag', 'Perempuan', '4819840', 'sutaji', 'IPA', '12'),
('9700', NULL, 0, 19, 'Islam', 'Ulvia ', '16-8-2000', 'Ngantang', 'Perempuan', '839482', 'Kumbiati', 'IPA', '12'),
('9999', 'ulvia.jpeg', NULL, 20, 'islam', 'Lina', '2020-05-30', 'Ngantang', 'Perempuan', '48904809', 'sutaji', 'IPA', '12');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `status` varchar(50) NOT NULL DEFAULT 'LUNAS',
  `id_transaksi` int(50) NOT NULL,
  `id_siswa` varchar(50) NOT NULL,
  `tgl_bayar` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`status`, `id_transaksi`, `id_siswa`, `tgl_bayar`) VALUES
('LUNAS', 1, '9700', '2020-05-30 07:33:39'),
('LUNAS', 2, '8978', '2020-05-30 07:25:32'),
('LUNAS', 3, '8978', '2020-05-30 07:25:32'),
('LUNAS', 5, '0000', '2020-05-30 08:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `active`) VALUES
(1, 'admin', 'admin', 'Admin', 0),
(2, 'admin', '1234', 'Admin', 0),
(3, 'admin', 'admin', 'Admin', 0),
(4, 'admin', '2345', 'Admin', 0),
(5, 'ulvia', '0000', 'Admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `detail_absen`
--
ALTER TABLE `detail_absen`
  ADD PRIMARY KEY (`id_detailabsen`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_dtltransaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `informasi_absen`
--
ALTER TABLE `informasi_absen`
  ADD PRIMARY KEY (`id_infoabsen`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_absen`
--
ALTER TABLE `detail_absen`
  MODIFY `id_detailabsen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_dtltransaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `informasi_absen`
--
ALTER TABLE `informasi_absen`
  MODIFY `id_infoabsen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `FK_detail_transaksi_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_transaksi_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
