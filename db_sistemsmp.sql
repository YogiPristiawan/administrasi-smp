-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemsmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_guru`
--

CREATE TABLE `m_guru` (
  `kd_guru` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `kd_jab` varchar(10) NOT NULL,
  `jenkel` varchar(12) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tp_lhr` varchar(20) NOT NULL,
  `tg_lhr` date NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_guru`
--

INSERT INTO `m_guru` (`kd_guru`, `nip`, `nm_guru`, `kd_jab`, `jenkel`, `agama`, `alamat`, `tp_lhr`, `tg_lhr`, `nohp`, `email`) VALUES
(1, '9955750652200002', 'Untung Nandra K., S.Pd.', '1', 'Laki-laki', 'Islam', 'Green Royal Residence Edelwis II No. 1 Probolinggo', 'Jombang', '2020-10-22', '08523217405', 'nandrauntung@yahoo.com'),
(2, '4443754656300013', '  Umi Farida Ariani, S.Pd.', '2', 'Perempuan', 'Islam', 'Barat Stasiun KA II/41A RT7 / RW 10 Sumberkedawung', 'Lumajang', '2020-10-07', '081234567890', 'umiiii@yahoo.com'),
(3, '123451234512345', 'Abdul Malik, S.Pd.', '3', 'Laki-laki', 'Islam', 'Belakang Perum Leces Permai K5 Kec.Leces Proboling', 'Nganjuk', '1973-01-05', '085232174058', 'abd.malik@gmail.com'),
(4, '4463745648200002', 'Drs. Susilo', '3', 'Laki-laki', 'Islam', ' Perum Leces Permai K-1 Kec.Leces Probolinggo', 'Ponorogo', '1967-01-31', '085220274321', 'susilo@gmail.com'),
(5, '45214464543134', 'Drs. H. Ahmad Shawaby, M.Pd.I..', '3', 'Laki-laki', 'Islam', 'Leces', 'Probolinggo', '1978-02-02', '081234567890', 'syawabiiii@yahoo.com'),
(6, '5467854134645235', 'Ninuk Indriani, S.Pd.', '3', 'Perempuan', 'Islam', 'Leces', 'Probolinggo', '1973-01-01', '0852135225', 'nininuk@gmail.com'),
(7, '8789513541321', 'Eni Susilowati, S.Pd.', '4', 'Perempuan', 'Kristen', 'Leces', 'Probolinggo', '1978-12-12', '085334565375', 'susieni@gmail.com'),
(8, '5456454545412', 'Sunarsih, S.Pd.', '3', 'Perempuan', 'Islam', 'Leces', 'Probolinggo', '1989-11-03', '089766567586', 'sunarsih@yahoo.com'),
(9, '45478410015420002', 'Nieken Alia Regina, S.Pd.', '3', 'Perempuan', 'Kristen', 'Pahlawan', 'Nganjuk', '1979-10-31', '081234567890', 'nieken@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `m_jabatan`
--

CREATE TABLE `m_jabatan` (
  `kd_jab` int(11) NOT NULL,
  `nm_jab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_jabatan`
--

INSERT INTO `m_jabatan` (`kd_jab`, `nm_jab`) VALUES
(1, 'KEPALA SEKOLAH'),
(2, 'WAKA KURIKULUM'),
(3, 'GURU MATA PELAJARAN'),
(4, 'GURU WALI KELAS'),
(6, 'STAFF TU');

-- --------------------------------------------------------

--
-- Table structure for table `m_jam`
--

CREATE TABLE `m_jam` (
  `kd_jam` int(11) NOT NULL,
  `jam_ke` int(2) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_jam`
--

INSERT INTO `m_jam` (`kd_jam`, `jam_ke`, `jam_awal`, `jam_akhir`) VALUES
(1, 1, '06:45:00', '07:33:00'),
(2, 2, '07:30:00', '08:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_jurnal_mengajar`
--

CREATE TABLE `m_jurnal_mengajar` (
  `kd_jurnal` varchar(5) NOT NULL,
  `tg_jurnal` date NOT NULL,
  `jam_ke` varchar(2) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `mapel` varchar(40) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `izin` varchar(2) NOT NULL,
  `terlambat` varchar(2) NOT NULL,
  `sakit` varchar(2) NOT NULL,
  `hadir` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_jurnal_mengajar`
--

INSERT INTO `m_jurnal_mengajar` (`kd_jurnal`, `tg_jurnal`, `jam_ke`, `kelas`, `materi`, `mapel`, `guru`, `catatan`, `izin`, `terlambat`, `sakit`, `hadir`) VALUES
('J001', '2020-01-28', '1', 'Kelas 7A', 'Aljabar', 'MATEMATIKA', 'Umi Farida Ariani, S.Pd.', '', '', '', '', ''),
('J002', '2019-11-28', '1', 'Kelas 7A', 'Menulis cerita selama libur sekolah dengan EYD yan', 'BAHASA INDONESIA', 'Umi Farida Ariani, S.Pd.', 'S : 3243', '', '', '', ''),
('J003', '2020-12-03', '1', 'Kelas 9C', 'Mengamati gambar bagian-bagian reporduksi pada bun', 'BIOLOGI', 'Umi Farida Ariani, S.Pd.', 'I = 3592', '', '', '', ''),
('J004', '2020-12-03', '1', 'Kelas 9A', 'Menyampaikan kondisi geografis negara ASEAN dan ke', 'Ilmu Pengetahuan Sosial', 'Nieken Alia Regina, S.Pd.', 'I=3579', '', '', '', ''),
('J008', '2020-12-03', '1', 'Kelas 7A', 'materi kesenian', 'KESENIAN', 'Untung Nandra K., S.Pd', 'hadir', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_kelas`
--

CREATE TABLE `m_kelas` (
  `kd_kelas` int(1) NOT NULL,
  `nm_kelas` varchar(10) NOT NULL,
  `jml_siswa` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_kelas`
--

INSERT INTO `m_kelas` (`kd_kelas`, `nm_kelas`, `jml_siswa`) VALUES
(1, '7A', '39'),
(2, '7B', '40'),
(3, '7C', '39'),
(4, '8A', '41'),
(5, '8B', '39'),
(6, '8C', '40'),
(7, '9A', '39'),
(8, '9B', '40'),
(9, '9C', '39');

-- --------------------------------------------------------

--
-- Table structure for table `m_mapel`
--

CREATE TABLE `m_mapel` (
  `kd_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(10) NOT NULL,
  `nm_mapel` varchar(40) NOT NULL,
  `kd_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_mapel`
--

INSERT INTO `m_mapel` (`kd_mapel`, `kode_mapel`, `nm_mapel`, `kd_guru`) VALUES
(1, 'BIND', 'BAHASA INDONESIA', 4),
(2, 'BING', 'BAHASA INGGRIS', 1),
(3, 'BIO', 'BIOLOGI', 3),
(4, 'BJAWA', 'BAHASA JAWA', 4),
(5, 'FIS', 'FISIKA', 5),
(7, 'KSN', 'KESENIAN', 3),
(8, 'MTK', 'MATEMATIKA', 2),
(9, 'PAI', 'Pendidikan Agama Islam (PAI)', 6),
(14, 'IPA', 'Ilmu Pengetahuan Alam', 9);

-- --------------------------------------------------------

--
-- Table structure for table `m_presensi`
--

CREATE TABLE `m_presensi` (
  `id_presensi` int(5) NOT NULL,
  `tg_presensi` date NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `kehadiran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_presensi`
--

INSERT INTO `m_presensi` (`id_presensi`, `tg_presensi`, `kelas`, `nis`, `nm_siswa`, `kehadiran`) VALUES
(13, '2020-11-28', 'Kelas 7A', '3243', 'ACHMAD CAHYO AGUNG ', 'hadir'),
(14, '2020-11-28', 'Kelas 7A', '3245', 'AFIF ZHARKASI DWI WARDANA', 'hadir'),
(15, '2020-11-28', 'Kelas 7A', '3243', 'ACHMAD CAHYO AGUNG ', 'sakit'),
(16, '2020-11-28', 'Kelas 7A', '3245', 'AFIF ZHARKASI DWI WARDANA', 'hadir'),
(17, '2020-12-03', 'Kelas 9C', '3592', 'ILMA NURRIN AZKIA', 'izin'),
(18, '2020-12-03', 'Kelas 9C', '3982', 'Azzam Izzudin', 'hadir'),
(19, '2020-12-03', 'Kelas 9A', '3578', 'ERIKA AYUNING PUTRI', 'hadir'),
(20, '2020-12-03', 'Kelas 9A', '3579', 'FABIM AZKA ALI ZAHMID', 'izin'),
(21, '2020-12-03', 'Kelas 7A', '3243', 'ACHMAD CAHYO AGUNG ', 'hadir'),
(22, '2020-12-03', 'Kelas 7A', '3245', 'AFIF ZHARKASI DWI WARDANA', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `m_siswa`
--

CREATE TABLE `m_siswa` (
  `nis` varchar(20) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `tp_lhr` varchar(30) NOT NULL,
  `tg_lhr` date NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `agama` varchar(18) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `th_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_siswa`
--

INSERT INTO `m_siswa` (`nis`, `nm_siswa`, `kd_kelas`, `tp_lhr`, `tg_lhr`, `jenkel`, `agama`, `alamat`, `nohp`, `email`, `th_ajaran`) VALUES
('3243', 'ACHMAD CAHYO AGUNG ', '1', 'LUMAJANG', '2007-10-14', 'Laki-laki', 'Hindu', 'DUSUN KRAJAN RT 10 RW 1 Desa WATES WETAN', '0897665675865', 'achmadcahyo@gmail.com', '2018/2019'),
('3245', 'AFIF ZHARKASI DWI WARDANA', '1', 'PROBOLINGGO', '2020-10-21', 'Laki-laki', 'Kristen', 'LECES                                   ', '081234567890', 'a@gmail.com', '2020/2021'),
('3249', 'ALMAZ SURYA HASAN', '2', 'Probolinggo', '2006-07-22', 'Laki-laki', 'Islam', 'JL.ANGGUR RT 3 RW 1 Desa WONOASIH Kec. W', '085334565375', 'surya.hasan@gmail.com', '2020/2021'),
('3252', 'ANGGUN RETNO WULANDARI', '2', 'Probolinggo', '2007-01-27', 'Perempuan', 'Islam', 'jl.bantaran 54 RT 20 RW 9 Desa pondok wu', '081234567890', 'anggun@gmail.com', '2020/2021'),
('3253', 'ANNISA FITRIA HENGKY', '3', 'Probolinggo', '2007-03-13', 'Perempuan', 'Islam', 'JL. BARAT STASIUN RT 10 RW 7 Desa SUMBER', '085649333323', 'annisa@gmail.com', '2020/2021'),
('3257', 'ATRASS NAUFAL HIRZHI', '3', 'Probolinggo', '2006-11-24', 'Laki-laki', 'Agama', 'Perum Sumbertaman Indah Blok NN No 03 RT', '081234567890', 'naufal@gmail.com', '2020/2021'),
('3266', 'DAFANA DANISWARA BAHTIAR', '4', 'Probolinggo', '2007-05-29', 'Perempuan', 'Islam', 'JL. KENANGA 149 RT 7 RW 3 Desa SUMBER KE', '081234567890', 'dafana@yahoo.com', '2020/2021'),
('3529', 'AULIA NURIL FITRIANI', '4', 'Probolinggo', '2006-10-30', 'Perempuan', 'Islam', '- RT 1 RW 1 Desa Leces Kec. Leces', '081234567890', 'aulia@gmail.com', '2020/2021'),
('3569', 'DENYS YANUAR ADI NUGRAHA', '5', 'Probolinggo', '2007-01-13', 'Laki-laki', 'Islam', 'Jl. Pahlawan I no. t38 RT 3 RW 3 Desa Le', '085123456785', 'denys@yahoo.com', '2019/2020'),
('3570', 'DEWI SUCI NANDA MAHARANI', '5', 'Probolinggo', '2009-09-13', 'Perempuan', 'Islam', 'BRANTAS RT 1 RW 2 Desa KADEMANGAN Kec. K', '085230448847', 'dewi@gmail.com', '2019/2020'),
('3574', 'DWI ALYA RIZMA PUTRI', '6', 'Probolinggo', '2007-11-09', 'Perempuan', 'Islam', 'jl.ronggojalu RT 18 RW 5 Desa Sumberbulu', '081258749526', 'alya@gmail.com', '2019/2020'),
('3577', 'EMAGENE GANATHA PHALASA', '6', 'Probolinggo', '2006-06-05', 'Laki-laki', 'Islam', 'DUSUN KARANG TENGAH RT 9 RW 3 Desa CLARA', '0854715412525', 'emagene@gmail.com', '2019/2020'),
('3578', 'ERIKA AYUNING PUTRI', '7', 'Probolinggo', '2006-12-07', 'Perempuan', 'Islam', 'Jl. Bantaran 27 RT 1 RW 7 Desa sumber ke', '089126987451', 'erika@gmail.com', '2019/2020'),
('3579', 'FABIM AZKA ALI ZAHMID', '7', 'Probolinggo', '2007-02-05', 'Laki-laki', 'Islam', 'Jl.SUMBERKERIS RT 1 RW 8 Desa WATUWUNGKU', '085245852147', 'fabim@gmal.com', '2019/2020'),
('3585', 'FERDIANSYAH PURBO SETYO', '7', 'Probolinggo', '2009-11-30', 'Laki-laki', 'Islam', 'Jl Pahlawan I  No 111 RT 3 RW 5 Desa Sum', '081258963322', 'setyo@yahoo.com', '2019/2020'),
('3590', 'GHAITSA NADINE ALYKAPUTERI', '8', 'Probolinggo', '2007-06-04', 'Perempuan', 'Islam', 'JL.SATELIT RT 0 RW 0 Desa LECES Kec. Lec', '08212522545', 'ghaitsa@gmail.com', '2019/2020'),
('3592', 'ILMA NURRIN AZKIA', '8', 'Probolinggo', '2006-09-12', 'Perempuan', 'Islam', 'PERUM KADEMANGAN ASRI B8 RT 3 RW 4 Desa ', '085214755585', 'ilma@gmail.com', '2019/2020'),
('3982', 'Azzam Izzudin', '9', 'Wonogiri', '1997-03-31', 'Laki-laki', 'Islam', 'Dusun krajan RT 3 RW 3 Desa Leces Kec.Le', '081234567890', 'azzamizzudin@gmail.com', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `kd_detail` varchar(5) NOT NULL,
  `kd_siswa` varchar(5) NOT NULL,
  `kd_kelas` varchar(5) NOT NULL,
  `kd_th_ajaran` varchar(5) NOT NULL,
  `tgl_absensi` date NOT NULL,
  `semester` varchar(20) NOT NULL,
  `kehadiran` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `nama`, `ket`) VALUES
(1, 'admin', 'Admin Sekolah'),
(2, 'guru', 'Guru Mata Pelajaran dan Wali Kelas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kelas`
--

CREATE TABLE `tb_detail_kelas` (
  `kd_detail` varchar(5) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `kd_kelas` varchar(5) NOT NULL,
  `kd_th_ajaran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kd_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `kd_jam` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `mapel` varchar(40) NOT NULL,
  `guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`kd_jadwal`, `hari`, `kd_jam`, `jam_mulai`, `jam_akhir`, `kelas`, `mapel`, `guru`) VALUES
(22, 'Senin', 2, '07:00:00', '08:00:00', 'Kelas 7A', 'BAHASA INDONESIA', 'Untung Nandra K., S.Pd.'),
(23, 'Senin', 1, '09:00:00', '10:00:00', 'Kelas 7A', 'BAHASA INGGRIS', 'Abdul Malik, S.Pd.'),
(24, 'Senin', 1, '09:30:00', '10:30:00', 'Kelas 7A', 'BIOLOGI', 'Drs. Susilo'),
(25, 'kamis', 1, '07:00:00', '08:00:00', 'Kelas 7A', 'BAHASA INDONESIA', 'Umi Farida Ariani, S.Pd.'),
(26, 'kamis', 1, '08:00:00', '09:00:00', 'Kelas 7A', 'BAHASA JAWA', 'Sunarsih, S.Pd.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_th_ajaran`
--

CREATE TABLE `tb_th_ajaran` (
  `kd_th_ajaran` varchar(5) NOT NULL,
  `th_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama`, `tingkat`, `password`, `id_akses`) VALUES
(1, 'admin', 'Administrator', 'admin', '1', 1),
(2, 'nandra', 'Untung Nandra K., S.Pd', 'guru', '1', 2),
(3, 'umi', 'Umi Farida Ariani, S.Pd.', 'guru', '1', 2),
(5, 'malik', 'Abdul Malik, S.Pd.', 'guru', '1', 2),
(6, 'susilo', ' Drs. Susilo', 'guru', '1', 2),
(7, 'shawaby', 'Drs. H. Ahmad Shawaby, M.Pd.I..', 'guru', '1', 2),
(8, 'ninuk', 'Ninuk Indriani, S.Pd.', 'guru', '1', 2),
(9, 'eni', 'Eni Susilowati, S.Pd.', 'guru', '1', 2),
(10, 'sunarsih', 'Sunarsih, S.Pd.', 'guru', '1', 2),
(11, 'nieken', 'Nieken Alia Regina, S.Pd.', 'guru', '1', 2),
(12, 'alifia', 'Alifia', 'guru', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_access_menu`
--

CREATE TABLE `tb_user_access_menu` (
  `id` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_access_menu`
--

INSERT INTO `tb_user_access_menu` (`id`, `id_akses`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_menu`
--

CREATE TABLE `tb_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_menu`
--

INSERT INTO `tb_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_sub_menu`
--

CREATE TABLE `tb_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_sub_menu`
--

INSERT INTO `tb_user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'menu-icon fa fa-fw  fa-dashboard', 1),
(2, 2, 'My Profile', 'user', 'menu-icon fa-fw fa fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_guru`
--
ALTER TABLE `m_guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  ADD PRIMARY KEY (`kd_jab`);

--
-- Indexes for table `m_jam`
--
ALTER TABLE `m_jam`
  ADD PRIMARY KEY (`kd_jam`);

--
-- Indexes for table `m_jurnal_mengajar`
--
ALTER TABLE `m_jurnal_mengajar`
  ADD PRIMARY KEY (`kd_jurnal`);

--
-- Indexes for table `m_kelas`
--
ALTER TABLE `m_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `m_mapel`
--
ALTER TABLE `m_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `m_presensi`
--
ALTER TABLE `m_presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`kd_detail`);

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_detail_kelas`
--
ALTER TABLE `tb_detail_kelas`
  ADD PRIMARY KEY (`kd_detail`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indexes for table `tb_th_ajaran`
--
ALTER TABLE `tb_th_ajaran`
  ADD PRIMARY KEY (`kd_th_ajaran`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_guru`
--
ALTER TABLE `m_guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  MODIFY `kd_jab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_jam`
--
ALTER TABLE `m_jam`
  MODIFY `kd_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_kelas`
--
ALTER TABLE `m_kelas`
  MODIFY `kd_kelas` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_mapel`
--
ALTER TABLE `m_mapel`
  MODIFY `kd_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_presensi`
--
ALTER TABLE `m_presensi`
  MODIFY `id_presensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `kd_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
