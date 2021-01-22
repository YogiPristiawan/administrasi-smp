-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2021 pada 13.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'admin', 1611116159),
(2, '::1', 'admin@mail.com', 1611116170),
(4, '::1', 'admin@admin.com', 1611116782),
(5, '::1', 'admin@admin.com', 1611116798),
(6, '::1', 'admin@admin.com', 1611119158),
(7, '::1', 'admin', 1611119168);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_guru`
--

CREATE TABLE `m_guru` (
  `id` int(11) NOT NULL,
  `nip` char(18) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `kd_jab` int(5) DEFAULT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tp_lhr` varchar(20) NOT NULL,
  `tg_lhr` date NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_guru`
--

INSERT INTO `m_guru` (`id`, `nip`, `nm_guru`, `kd_jab`, `jenkel`, `agama`, `alamat`, `tp_lhr`, `tg_lhr`, `nohp`, `email`, `deleted_at`) VALUES
(1, '123456789123456789', 'Yogi', 9, 'L', 'Islam', 'Jogja', 'Yogyakarta', '2019-04-10', '085290444021000', 'yogi@mail.com', NULL),
(2, '123456789987765432', 'dimas', 9, 'L', 'Islam', 'Jogja', 'Jogja', '2021-01-28', '098987987987', 'dimas@mail.com', NULL),
(3, '987654321123456789', 'dewi', 9, 'P', 'Islam', 'Jogja', 'Jogja', '2021-01-13', '085290444021', 'dewi@mail.com', NULL),
(4, '123213123123123123', 'heri', 9, 'L', 'Islam', 'jogja', 'jogja', '2021-01-01', '68668969986', 'admin@sma404.com', NULL),
(5, '728738270103073017', 'marco', 9, 'L', 'Islam', 'papua', 'papua', '2021-02-05', '918301830133', 'marco@gmail.com', NULL),
(6, '927437871740174017', 'kakashi', 9, 'L', 'Islam', 'konoha', 'konoha', '2021-01-22', '342452525', 'kakashi@gmail.com', NULL),
(7, '473424294797027402', 'hiruka', 9, 'L', 'Islam', 'konoha', 'jogja', '2021-01-14', '085290444021000', 'hirukasensei@mail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jabatan`
--

CREATE TABLE `m_jabatan` (
  `kd_jab` int(5) NOT NULL,
  `nm_jab` varchar(30) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_jabatan`
--

INSERT INTO `m_jabatan` (`kd_jab`, `nm_jab`, `deleted_at`) VALUES
(7, 'KEPALA SEKOLAH', NULL),
(8, 'WAKA KURIKULUM', NULL),
(9, 'GURU MATA PELAJARAN', NULL),
(10, 'GURU WALI KELAS', NULL),
(11, 'STAFF TATA USAHA', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jam`
--

CREATE TABLE `m_jam` (
  `kd_jam` int(5) NOT NULL,
  `jam_ke` int(2) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_jam`
--

INSERT INTO `m_jam` (`kd_jam`, `jam_ke`, `jam_awal`, `jam_akhir`, `deleted_at`) VALUES
(1, 1, '21:38:00', '22:05:00', NULL),
(2, 2, '23:56:00', '00:56:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kelas`
--

CREATE TABLE `m_kelas` (
  `kd_kelas` int(5) NOT NULL,
  `nm_kelas` varchar(10) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_kelas`
--

INSERT INTO `m_kelas` (`kd_kelas`, `nm_kelas`, `deleted_at`) VALUES
(10, '7A', NULL),
(11, '7B', NULL),
(12, '7C', NULL),
(13, '8A', NULL),
(14, '8B', NULL),
(15, '8C', NULL),
(16, '9A', NULL),
(17, '9B', NULL),
(18, '9C', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mapel`
--

CREATE TABLE `m_mapel` (
  `kd_mapel` int(5) NOT NULL,
  `nm_mapel` varchar(40) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_mapel`
--

INSERT INTO `m_mapel` (`kd_mapel`, `nm_mapel`, `deleted_at`) VALUES
(16, 'BIOLOGI', NULL),
(17, 'MATEMATIKA', NULL),
(18, 'PENJASKES', NULL),
(19, 'BAHASA INGGRIS', NULL),
(20, 'BAHASA INDONESIA', NULL),
(21, 'FISIKA', NULL),
(22, 'KIMIA', NULL),
(23, 'AGAMA', NULL),
(24, 'IPS', NULL),
(25, 'AKUNTANSI', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pengajar`
--

CREATE TABLE `m_pengajar` (
  `id` int(11) NOT NULL,
  `kd_mapel` int(5) DEFAULT NULL,
  `nip` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_pengajar`
--

INSERT INTO `m_pengajar` (`id`, `kd_mapel`, `nip`) VALUES
(1, 23, '123213123123123123'),
(2, 17, '123456789123456789'),
(3, 25, '123456789987765432'),
(4, 20, '123213123123123123'),
(5, 16, '728738270103073017'),
(8, 21, '987654321123456789'),
(9, 19, '987654321123456789'),
(10, 16, '987654321123456789'),
(11, 23, '927437871740174017'),
(12, 21, '927437871740174017'),
(13, 22, '473424294797027402'),
(14, 17, '987654321123456789'),
(15, 21, '123456789123456789'),
(16, 18, '123213123123123123'),
(18, 18, '473424294797027402'),
(21, 18, '987654321123456789'),
(22, 16, '123456789987765432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_presensi`
--

CREATE TABLE `m_presensi` (
  `id_presensi` int(11) NOT NULL,
  `tg_presensi` date NOT NULL,
  `kd_kelas` int(5) DEFAULT NULL,
  `th_ajaran` varchar(20) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `hadir` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hadir`)),
  `sakit` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sakit`)),
  `izin` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`izin`)),
  `terlambat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`terlambat`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_siswa`
--

CREATE TABLE `m_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `kd_kelas` int(5) DEFAULT NULL,
  `tp_lhr` varchar(30) NOT NULL,
  `tg_lhr` date NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `agama` varchar(18) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `th_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_siswa`
--

INSERT INTO `m_siswa` (`id`, `nis`, `nm_siswa`, `kd_kelas`, `tp_lhr`, `tg_lhr`, `jenkel`, `agama`, `alamat`, `nohp`, `email`, `th_ajaran`) VALUES
(1, '0820840284', 'naruto', 10, 'Yogyakarta', '2021-01-12', 'L', 'Islam', 'Yogyakarta', '085290444021', 'dewi@mail.com', '2019/2020'),
(2, '112', 'dewi', 12, 'Jogja', '2021-01-18', 'P', 'Islam', 'NGANJUK., JAWA TIMUR', '098987987987', 'dimas@mail.com', '2019/2020'),
(3, '113', 'sasuke', 11, 'konoha', '2021-01-05', 'L', 'Islam', 'jogja', '3927204', 'sasuke@mail.com', '2019/2020'),
(5, '2340820480284', 'septi', 14, 'jogja', '2021-01-05', 'P', 'Islam', 'jogja', '2424242', 'septi@gmail.com', '2019/2020'),
(6, '2423423424', 'miya', 13, 'konoha', '2021-01-05', 'P', 'Islam', 'konoha', '2424246464', 'miya@mail.com', '2019/2020'),
(7, '24414141', 'alex', 16, 'gunungkidul', '2021-01-21', 'L', 'Islam', 'purwokerto', '2820482', 'alex@gmail.com', '2019/2020'),
(8, '2492479274', 'olaf', 13, 'kalimantan', '2021-01-19', 'P', 'Islam', 'kalimantan', '224242424', 'olaf@mail.com', '2019/2020'),
(9, '324002482048', 'restu', 17, 'papua', '2021-01-26', 'L', 'Islam', 'papua', '3244234', 'restu@gmail.com', '2019/2020'),
(10, '324234324', 'sakura', 14, 'konoha', '2021-01-12', 'P', 'Islam', 'KEDIRI, JAWA TIMUR', '08028042848', 'sakura@gmail.com', '2019/2020'),
(11, '123456789', 'song jong ki', 10, 'garut', '2021-01-13', 'L', 'Islam', 'Yogyakarta', '085290444021', 'jongki@gmail.com', '2019/2020'),
(12, '089923902802844', 'obito', 10, 'kirigakure', '2021-01-06', 'L', 'Islam', 'Yogyakarta', '085290444021', 'obito@gmail.com', '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(5) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `keterangan`, `deleted_at`) VALUES
(1, 'Admin', NULL),
(2, 'Guru', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kd_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `kd_jam` int(5) DEFAULT NULL,
  `kd_kelas` int(5) NOT NULL,
  `kd_mapel` int(5) NOT NULL,
  `nip_guru` char(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal_mengajar`
--

CREATE TABLE `tb_jurnal_mengajar` (
  `id` int(11) NOT NULL,
  `kd_jurnal` char(14) NOT NULL,
  `tg_jurnal` date NOT NULL,
  `kd_jam` int(5) DEFAULT NULL,
  `kd_kelas` int(5) DEFAULT NULL,
  `materi` varchar(50) NOT NULL,
  `kd_mapel` int(5) DEFAULT NULL,
  `nip_guru` char(18) DEFAULT NULL,
  `catatan` varchar(100) NOT NULL,
  `izin` varchar(10) NOT NULL,
  `terlambat` varchar(10) NOT NULL,
  `sakit` varchar(10) NOT NULL,
  `hadir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurnal_mengajar`
--

INSERT INTO `tb_jurnal_mengajar` (`id`, `kd_jurnal`, `tg_jurnal`, `kd_jam`, `kd_kelas`, `materi`, `kd_mapel`, `nip_guru`, `catatan`, `izin`, `terlambat`, `sakit`, `hadir`) VALUES
(1, 'JRL20210122001', '2021-01-22', 1, 10, 'Tutorial tidak melakukan apa-apa', 18, '123213123123123123', 'Lancar bgtttttt hyungg', '1', '19', '2', '1'),
(3, 'JRL20210122002', '2021-01-22', 1, 10, 'Tutorial nembak doi', 17, '123456789123456789', 'lancar bgt', '1', '19', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` char(18) DEFAULT NULL,
  `id_akses` int(5) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama`, `nip`, `id_akses`, `password`) VALUES
(1, 'admin', 'Administrator', NULL, 1, '1'),
(2, 'yogi', 'Yogi Pristiawan', '123456789123456789', 2, '1'),
(3, 'dimas', 'Dimas Maulana', '123456789987765432', 2, '1'),
(4, 'dewi', 'Dewi Setiawati', '987654321123456789', 2, '1'),
(5, 'heri', 'Heri Ganteng', '123213123123123123', 2, '1'),
(6, 'marco', 'Marco Selalu Benar', '728738270103073017', 2, '1'),
(7, 'kakashi', 'Hatake Kakashi', '927437871740174017', 2, '1'),
(8, 'hiruka', 'Hiruka Sensei', '473424294797027402', 2, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_guru`
--
ALTER TABLE `m_guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `fk_guru_kd_jab` (`kd_jab`);

--
-- Indeks untuk tabel `m_jabatan`
--
ALTER TABLE `m_jabatan`
  ADD PRIMARY KEY (`kd_jab`);

--
-- Indeks untuk tabel `m_jam`
--
ALTER TABLE `m_jam`
  ADD PRIMARY KEY (`kd_jam`);

--
-- Indeks untuk tabel `m_kelas`
--
ALTER TABLE `m_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `m_mapel`
--
ALTER TABLE `m_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indeks untuk tabel `m_pengajar`
--
ALTER TABLE `m_pengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengajar_mapel` (`kd_mapel`),
  ADD KEY `fk_guru_pengajar` (`nip`);

--
-- Indeks untuk tabel `m_presensi`
--
ALTER TABLE `m_presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD UNIQUE KEY `kd_kelas` (`kd_kelas`);

--
-- Indeks untuk tabel `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `kd_kelas` (`kd_kelas`) USING BTREE;

--
-- Indeks untuk tabel `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`),
  ADD UNIQUE KEY `keterangan` (`keterangan`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`kd_jadwal`),
  ADD UNIQUE KEY `kelas` (`kd_kelas`),
  ADD UNIQUE KEY `kd_mapel` (`kd_mapel`),
  ADD UNIQUE KEY `guru` (`nip_guru`),
  ADD UNIQUE KEY `kd_jam` (`kd_jam`);

--
-- Indeks untuk tabel `tb_jurnal_mengajar`
--
ALTER TABLE `tb_jurnal_mengajar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_jurnal` (`kd_jurnal`),
  ADD KEY `kelas` (`kd_kelas`) USING BTREE,
  ADD KEY `jam_ke` (`kd_jam`) USING BTREE,
  ADD KEY `guru` (`nip_guru`) USING BTREE,
  ADD KEY `mapel` (`kd_mapel`) USING BTREE;

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `role` (`id_akses`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `m_guru`
--
ALTER TABLE `m_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `m_jabatan`
--
ALTER TABLE `m_jabatan`
  MODIFY `kd_jab` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `m_jam`
--
ALTER TABLE `m_jam`
  MODIFY `kd_jam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_kelas`
--
ALTER TABLE `m_kelas`
  MODIFY `kd_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `m_mapel`
--
ALTER TABLE `m_mapel`
  MODIFY `kd_mapel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `m_pengajar`
--
ALTER TABLE `m_pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `m_presensi`
--
ALTER TABLE `m_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `m_siswa`
--
ALTER TABLE `m_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `kd_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal_mengajar`
--
ALTER TABLE `tb_jurnal_mengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_guru`
--
ALTER TABLE `m_guru`
  ADD CONSTRAINT `fk_guru_kd_jab` FOREIGN KEY (`kd_jab`) REFERENCES `m_jabatan` (`kd_jab`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `m_pengajar`
--
ALTER TABLE `m_pengajar`
  ADD CONSTRAINT `fk_guru_pengajar` FOREIGN KEY (`nip`) REFERENCES `m_guru` (`nip`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengajar_mapel` FOREIGN KEY (`kd_mapel`) REFERENCES `m_mapel` (`kd_mapel`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `m_presensi`
--
ALTER TABLE `m_presensi`
  ADD CONSTRAINT `fk_presensi_kelas` FOREIGN KEY (`kd_kelas`) REFERENCES `m_kelas` (`kd_kelas`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD CONSTRAINT `fk_siswa_kelas` FOREIGN KEY (`kd_kelas`) REFERENCES `m_kelas` (`kd_kelas`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `fk_jadwal_guru` FOREIGN KEY (`nip_guru`) REFERENCES `m_guru` (`nip`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jadwal_jam` FOREIGN KEY (`kd_jam`) REFERENCES `m_jam` (`kd_jam`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jadwal_kelas` FOREIGN KEY (`kd_kelas`) REFERENCES `m_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jadwal_mapel` FOREIGN KEY (`kd_mapel`) REFERENCES `m_mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jurnal_mengajar`
--
ALTER TABLE `tb_jurnal_mengajar`
  ADD CONSTRAINT `fk_jurnal_guru` FOREIGN KEY (`nip_guru`) REFERENCES `m_guru` (`nip`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jurnal_jam` FOREIGN KEY (`kd_jam`) REFERENCES `m_jam` (`kd_jam`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jurnal_kelas` FOREIGN KEY (`kd_kelas`) REFERENCES `m_kelas` (`kd_kelas`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jurnal_mapel` FOREIGN KEY (`kd_mapel`) REFERENCES `m_mapel` (`kd_mapel`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_user_akses` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_nip` FOREIGN KEY (`nip`) REFERENCES `m_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
