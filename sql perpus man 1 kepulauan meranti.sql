-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 10:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exp_date_picture_style`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_absen`
--

CREATE TABLE `buku_absen` (
  `id_absen` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `ket_absen` text NOT NULL,
  `date_absen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_absen`
--

INSERT INTO `buku_absen` (`id_absen`, `id_siswa`, `ket_absen`, `date_absen`) VALUES
(16, 21, 'Membaca Buku', '2022-06-26'),
(17, 22, 'Ngambil Buku Kelas', '2022-06-26'),
(18, 21, 'Membaca Buku', '2022-06-25'),
(19, 22, 'embaca Buku diperpustakaan', '2022-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `buku_induk`
--

CREATE TABLE `buku_induk` (
  `id_buku` int(11) NOT NULL,
  `no_induk` varchar(25) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jd_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tmp_terbit` varchar(25) NOT NULL,
  `th_terbit` varchar(25) NOT NULL,
  `ed_cat` varchar(50) NOT NULL,
  `jml` int(15) NOT NULL,
  `bhs` varchar(25) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `sumber` varchar(128) NOT NULL,
  `odc` varchar(25) NOT NULL,
  `jml_pinjam` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_induk`
--

INSERT INTO `buku_induk` (`id_buku`, `no_induk`, `tgl_masuk`, `jd_buku`, `penulis`, `penerbit`, `tmp_terbit`, `th_terbit`, `ed_cat`, `jml`, `bhs`, `isbn`, `sumber`, `odc`, `jml_pinjam`) VALUES
(13, '0004/BI/17', '2022-06-25', 'Bahasa Indonesia Kelas XI ', 'Seherli, dkk', 'Kemendikbud', 'Jakarta', '2017', 'Ke-4', 18, 'Indonesia', '978-602-427-100-8', 'Pembelian', '371.3', 18),
(14, '0005/PKN/17', '2022-06-25', 'Pendidikan Pancasila dan Kewarganegaraan Kelas XI', 'Yuswana Lubis', 'Kemendikbud', 'Jakarta', '2017', 'Ke 4', 18, 'indonesia', '978-602-427-092-6', 'Pembelian', '371.3', 18),
(15, '0006/K.Ing/16', '2022-06-25', 'Kamus Bahasa Inggris', 'Budiono', 'Bintang Indonesia', 'Jakarta', '2016', 'Ke-1', 8, 'Inggris', '602370164-7', 'Pembelian', '423', 8),
(16, '0007/K.Ind/18', '2022-06-25', 'Kamus Lengkap Bahasa Indonesia', 'Desy Anwar', 'Amelia', 'Surabaya', '2018', 'Ke-1', 9, 'Indonesia', '979395502-3', 'Pembelian', '413', 9),
(17, '0008/MTK/18', '2022-06-25', 'Matematika Kelas XII', 'Abdur Rahman As\'ari', 'Kemendikbud', 'Jakarta', '2018', 'Ke-2', 2, 'Indonesia', '978-602-427-114-5', 'Pembelian', '510', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buku_kelas`
--

CREATE TABLE `buku_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(25) NOT NULL,
  `color_kelas` varchar(10) NOT NULL,
  `logo_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_kelas`
--

INSERT INTO `buku_kelas` (`id_kelas`, `nm_kelas`, `color_kelas`, `logo_kelas`) VALUES
(1, 'X IPS 2', 'success', 'fa-users'),
(4, 'X IPA 1', 'success', 'fa-users'),
(5, 'X IPS 2', 'success', 'fa-users'),
(6, 'Guru', 'info', 'fa-user-tie'),
(11, 'XI IPA 1', 'warning', 'fa-users'),
(12, 'XII IPA 1', 'danger', 'fa-users'),
(13, 'XII IPA 3', 'danger', 'fa-users'),
(14, 'XII IPA 2', 'danger', 'fa-users'),
(15, 'XII AGAMA', 'danger', 'fa-users'),
(16, 'XII IPS', 'danger', 'fa-users'),
(17, 'XI IPA 2', 'warning', 'fa-users'),
(18, 'XI IPS 1', 'warning', 'fa-users'),
(19, 'XI IPS 2', 'warning', 'fa-users'),
(20, 'XI AGAMA', 'warning', 'fa-users'),
(21, 'X IPA 2', 'success', 'fa-users'),
(22, 'X AGAMA', 'success', 'fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `buku_kembali`
--

CREATE TABLE `buku_kembali` (
  `no_kembali` int(11) NOT NULL,
  `no_pinjaman` int(11) NOT NULL,
  `tgl_kembal` date NOT NULL,
  `terlambat` int(11) NOT NULL,
  `jml_kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_kembali`
--

INSERT INTO `buku_kembali` (`no_kembali`, `no_pinjaman`, `tgl_kembal`, `terlambat`, `jml_kembali`) VALUES
(29, 31, '2022-06-26', 0, 1),
(30, 31, '2022-06-26', 0, 2),
(31, 32, '2022-06-27', 0, 5),
(32, 33, '2022-06-27', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `buku_pinjam`
--

CREATE TABLE `buku_pinjam` (
  `no_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jml_pinjaman` int(15) NOT NULL,
  `date_create` date NOT NULL,
  `status_pinjaman` int(1) NOT NULL,
  `jns_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_pinjam`
--

INSERT INTO `buku_pinjam` (`no_peminjaman`, `id_buku`, `id_siswa`, `jml_pinjaman`, `date_create`, `status_pinjaman`, `jns_pinjam`, `tgl_kembali`) VALUES
(31, 13, 22, 2, '2022-06-26', 1, 'Kelas', '2022-07-06'),
(32, 17, 22, 5, '2022-06-27', 1, 'Guru', '2020-06-30'),
(33, 17, 22, 10, '2022-06-27', 1, 'Kelas', '2022-07-01'),
(34, 17, 22, 10, '2022-06-27', 0, 'Kelas', '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `buku_siswa`
--

CREATE TABLE `buku_siswa` (
  `id_siswa` int(11) NOT NULL,
  `no_anggota` varchar(15) NOT NULL,
  `nm_siswa` varchar(128) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `tanggal_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_siswa`
--

INSERT INTO `buku_siswa` (`id_siswa`, `no_anggota`, `nm_siswa`, `nisn`, `id_kelas`, `alamat`, `tanggal_terbit`) VALUES
(21, 'P/001', 'Mohd Redho', '123456789', 11, 'Jl. Rintis Gg. Pindang', '2022-06-25'),
(22, 'P/002', 'Data Dummy 1', '12345671', 15, 'Jl. Subang', '2022-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Sandhika Galih', 'sandhikagalih@unpas.ac.id', 'profile1.jpg', '$2y$10$nXnrqGQTjpvg58OtOB/N.evYQjVlz7KIW37oUSQSQ2EgNMD0Dgrzq', 1, 1, 1552120289),
(6, 'Doddy Ferdiansyah', 'doddy@gmail.com', 'profile.jpg', '$2y$10$FhGzXwwTWLN/yonJpDLR0.nKoeWlKWBoRG9bsk0jOAgbJ007XzeFO', 2, 1, 1552285263),
(11, 'Sandhika Galih', 'sandhikagalih@gmail.com', 'default.jpg', '$2y$10$0QYEK1pB2L.Rdo.ZQsJO5eeTSpdzT7PvHaEwsuEyGSs0J1Qf5BoSq', 2, 1, 1553151354),
(12, 'zulkarnaen', 'zulkarnaim70@gmail.com', 'default.jpg', '$2y$10$OZ6Mb2gI.VD2JaIiLmtpu.b.XHr8UtHuYt7BMhWCjHnEAlVzqjr8q', 1, 1, 1633660177);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2),
(10, 1, 5),
(11, 1, 6),
(12, 1, 7),
(13, 2, 5),
(14, 2, 6),
(15, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Anggota'),
(6, 'Buku'),
(7, 'Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 5, 'Data Anggota', 'anggota', 'fas fa-address-card', 1),
(10, 5, 'Data Kelas', 'anggota/kelas', 'fas fa-address-book', 1),
(11, 6, 'Data Buku', 'buku', 'fas fa-book', 1),
(12, 6, 'Data Pinjaman', 'buku/pinjaman', 'fas fa-clipboard-list', 1),
(13, 5, 'Data Absen', 'anggota/absenSiswa', 'fas fa-address-book', 1),
(14, 7, 'Laporan Buku Induk', 'laporan', 'fas fa-book', 1),
(15, 7, 'Laporan Absen Anggota', 'laporan/absen', 'fas fa-book', 1),
(16, 7, 'Laporan Peminjaman', 'laporan/peminjaman', 'fas fa-book', 1),
(17, 7, 'Laporan Pengembalian', 'laporan/pengembalian', 'fas fa-book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'zulkarnaim70@gmail.com', 'h+AsWSks8kTZfkC86UK2quvdP1w5YJnj3Tj2QOcyjWY=', 1633660177);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_absen`
--
ALTER TABLE `buku_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `buku_induk`
--
ALTER TABLE `buku_induk`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `buku_kelas`
--
ALTER TABLE `buku_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `buku_kembali`
--
ALTER TABLE `buku_kembali`
  ADD PRIMARY KEY (`no_kembali`);

--
-- Indexes for table `buku_pinjam`
--
ALTER TABLE `buku_pinjam`
  ADD PRIMARY KEY (`no_peminjaman`);

--
-- Indexes for table `buku_siswa`
--
ALTER TABLE `buku_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `no_anggota` (`no_anggota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_absen`
--
ALTER TABLE `buku_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `buku_induk`
--
ALTER TABLE `buku_induk`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `buku_kelas`
--
ALTER TABLE `buku_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `buku_kembali`
--
ALTER TABLE `buku_kembali`
  MODIFY `no_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `buku_pinjam`
--
ALTER TABLE `buku_pinjam`
  MODIFY `no_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `buku_siswa`
--
ALTER TABLE `buku_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
