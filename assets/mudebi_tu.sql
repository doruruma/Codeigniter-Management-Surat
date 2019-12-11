-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Des 2019 pada 05.15
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mudebi_tu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik_nip` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat_gol` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nik_nip`, `nama`, `pangkat_gol`, `jabatan`, `status`) VALUES
('128 982 930', 'Jihan Rasyidah', '-', 'Guru', '1'),
('132 652 531', 'Andra Yuda', '-', 'Guru', '1'),
('991 004 045', 'Tedi Rosadi S.T', '-', 'Guru', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perihal`
--

CREATE TABLE `perihal` (
  `kd_perihal` int(11) NOT NULL,
  `perihal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perihal`
--

INSERT INTO `perihal` (`kd_perihal`, `perihal`) VALUES
(1, 'Dalam rangka Pengantaran Siswa Prakerin, untuk kepentingan dinas kepala UPT SMK Negeri 4 Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `kd_alamat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota_kab` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`kd_alamat`, `alamat`, `kecamatan`, `kota_kab`, `provinsi`, `perusahaan`) VALUES
(1, 'Jl. Imam Bonjol No 13 kavling pemda', 'karawaci', 'Kota Tangerang', 'Banten', 'PT. Aman Sejahtera Abadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_keluar` int(11) NOT NULL,
  `no_surat_keluar` varchar(20) NOT NULL,
  `kd_perihal` int(11) NOT NULL,
  `nik_nip` varchar(30) NOT NULL,
  `kd_alamat` int(11) NOT NULL,
  `tgl_keluar` text NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_keluar`, `no_surat_keluar`, `kd_perihal`, `nik_nip`, `kd_alamat`, `tgl_keluar`, `tgl_berangkat`, `keterangan`, `file`) VALUES
(3, 'XXX/723 TU 2019', 1, '132 652 531', 1, '20-08-2019', '2019-08-15', 'apa aja', ''),
(5, 'XXX/724 TU 2019', 1, '128 982 930', 1, '20-08-2019', '2019-08-15', 'apa aja ke dua', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_masuk` int(11) NOT NULL,
  `no_surat_masuk` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kd_perihal` int(11) NOT NULL,
  `kd_alamat` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('1','0') NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `img`) VALUES
(1, 'calciffer', '$2y$10$Khxgmlkvh8K0Ol0DziY4X.adrTGYrRV5UqA8a73.0LJKw/Gro9NSq', '1', 'login.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik_nip`);

--
-- Indeks untuk tabel `perihal`
--
ALTER TABLE `perihal`
  ADD PRIMARY KEY (`kd_perihal`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`kd_alamat`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_keluar`),
  ADD UNIQUE KEY `no_surat_out` (`no_surat_keluar`),
  ADD KEY `kd_perihal` (`kd_perihal`),
  ADD KEY `nik_nip` (`nik_nip`),
  ADD KEY `kd_alamat` (`kd_alamat`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_masuk`),
  ADD UNIQUE KEY `no_surat_masuk` (`no_surat_masuk`),
  ADD KEY `kd_perihal` (`kd_perihal`),
  ADD KEY `kd_alamat` (`kd_alamat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perihal`
--
ALTER TABLE `perihal`
  MODIFY `kd_perihal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `kd_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `no_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `no_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`kd_perihal`) REFERENCES `perihal` (`kd_perihal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_masuk_ibfk_2` FOREIGN KEY (`kd_alamat`) REFERENCES `perusahaan` (`kd_alamat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
