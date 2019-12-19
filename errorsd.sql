-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2019 pada 05.43
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdbadean`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(1) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi_siswa`
--

CREATE TABLE `tb_absensi_siswa` (
  `id_absensi_siswa` int(11) NOT NULL,
  `id_rombel` varchar(35) NOT NULL,
  `id_siswa` varchar(35) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `waktu_masuk` varchar(20) NOT NULL,
  `waktu_keluar` varchar(20) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alamat_ortu`
--

CREATE TABLE `tb_alamat_ortu` (
  `id_alamat_ortu` varchar(35) NOT NULL,
  `jalan_ortu` varchar(50) NOT NULL,
  `desa_ortu` varchar(50) NOT NULL,
  `kec_ortu` varchar(50) NOT NULL,
  `kab_ortu` varchar(50) NOT NULL,
  `prov_ortu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alamat_ortu`
--

INSERT INTO `tb_alamat_ortu` (`id_alamat_ortu`, `jalan_ortu`, `desa_ortu`, `kec_ortu`, `kab_ortu`, `prov_ortu`) VALUES
('436bdbee076b0ca33bd9da6fff8494b1', 'jnajsdn', 'kjand', 'kjand', 'kjnakjn', 'asn'),
('cc41bacb6739ca0d39ca6ba9ce19b1b3', 'jkhd', 'sabd', 'jsbdjd', 'jsd', 'sjc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alamat_wali`
--

CREATE TABLE `tb_alamat_wali` (
  `id_alamat_wali` varchar(35) NOT NULL,
  `jalan_wali` varchar(50) NOT NULL,
  `desa_wali` varchar(50) NOT NULL,
  `kec_wali` varchar(50) NOT NULL,
  `kab_wali` varchar(50) NOT NULL,
  `prov_wali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alamat_wali`
--

INSERT INTO `tb_alamat_wali` (`id_alamat_wali`, `jalan_wali`, `desa_wali`, `kec_wali`, `kab_wali`, `prov_wali`) VALUES
('436bdbee076b0ca33bd9da6fff8494b1', 'akjd', 'ajdn', 'ajdn', 'jasd', 'aksjdd'),
('5460e84a518c89ca2dbef1a1e3650f28', 'adn', 'ajsnd', 'asjdn', 'ajdn', 'ajsnx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_ayah` varchar(35) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_ayah`, `nama_ayah`, `pekerjaan_ayah`) VALUES
('436bdbee076b0ca33bd9da6fff8494b1', 'Moh Ainun', 'Mayang'),
('7870b794bd16deaf0d14c78b4a5212b3', 'ajndsj', 'akjsdn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gtk`
--

CREATE TABLE `tb_gtk` (
  `id_gtk` varchar(35) NOT NULL,
  `nik_gtk` varchar(16) NOT NULL,
  `nip_gtk` varchar(20) NOT NULL,
  `nama_gtk` varchar(50) NOT NULL,
  `tempat_lahir_gtk` varchar(50) NOT NULL,
  `tanggal_lahir_gtk` varchar(10) NOT NULL,
  `jenis_kelamin_gtk` varchar(10) NOT NULL,
  `pajago_gtk` varchar(50) NOT NULL,
  `gelar_gtk` varchar(15) NOT NULL,
  `posisi_gtk` varchar(20) NOT NULL,
  `agama_gtk` varchar(20) NOT NULL,
  `jalan_gtk` varchar(100) NOT NULL,
  `desa_gtk` varchar(100) NOT NULL,
  `kec_gtk` varchar(100) NOT NULL,
  `kab_gtk` varchar(100) NOT NULL,
  `prov_gtk` varchar(100) NOT NULL,
  `tgl_masuk_gtk` varchar(10) NOT NULL,
  `tgl_keluar_gtk` varchar(10) NOT NULL,
  `foto_gtk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` varchar(35) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_ibu`, `nama_ibu`, `pekerjaan_ibu`) VALUES
('436bdbee076b0ca33bd9da6fff8494b1', 'Jnakjsnd', 'kajsnd'),
('9610170fac4bdafdd2592cc9ba47676f', 'ajksbd', 'jasbd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluar_sekolah`
--

CREATE TABLE `tb_keluar_sekolah` (
  `id_keluar_sekolah` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mutasi_masuk_siswa`
--

CREATE TABLE `tb_mutasi_masuk_siswa` (
  `id_mutasi_masuk` int(20) NOT NULL,
  `tanggal_masuk` varchar(10) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pindah_sekolah`
--

CREATE TABLE `tb_pindah_sekolah` (
  `id_pindah_sekolah` int(20) NOT NULL,
  `dari_tingkat` varchar(2) NOT NULL,
  `ke_sekolah` varchar(50) NOT NULL,
  `tanggal_pindah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi_rombel_siswa`
--

CREATE TABLE `tb_relasi_rombel_siswa` (
  `id_relasi_rombel_siswa` varchar(35) NOT NULL,
  `id_rombel` varchar(35) NOT NULL,
  `id_siswa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi_siswa`
--

CREATE TABLE `tb_relasi_siswa` (
  `id_relasi` int(11) NOT NULL,
  `id_siswa` varchar(35) NOT NULL,
  `id_ayah` varchar(35) NOT NULL,
  `id_ibu` varchar(35) NOT NULL,
  `id_alamat_ortu` varchar(35) NOT NULL,
  `id_wali` varchar(35) NOT NULL,
  `id_alamat_wali` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_relasi_siswa`
--

INSERT INTO `tb_relasi_siswa` (`id_relasi`, `id_siswa`, `id_ayah`, `id_ibu`, `id_alamat_ortu`, `id_wali`, `id_alamat_wali`) VALUES
(1, '436bdbee076b0ca33bd9da6fff8494b1', '436bdbee076b0ca33bd9da6fff8494b1', '436bdbee076b0ca33bd9da6fff8494b1', '436bdbee076b0ca33bd9da6fff8494b1', '436bdbee076b0ca33bd9da6fff8494b1', '436bdbee076b0ca33bd9da6fff8494b1'),
(2, 'ee98aa079b6f2f0afb19942c179b575e', '7870b794bd16deaf0d14c78b4a5212b3', '9610170fac4bdafdd2592cc9ba47676f', 'cc41bacb6739ca0d39ca6ba9ce19b1b3', '51a4ce13af0d2cdd311d0bf38a557311', '5460e84a518c89ca2dbef1a1e3650f28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rombel`
--

CREATE TABLE `tb_rombel` (
  `id_rombel` varchar(35) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `nama_rombel` varchar(50) NOT NULL,
  `id_gtk` varchar(35) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(35) NOT NULL,
  `nomor_induk` varchar(10) NOT NULL,
  `nomor_induk_sn` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir_siswa` varchar(50) NOT NULL,
  `tanggal_lahir_siswa` varchar(10) NOT NULL,
  `jenis_kelamin_siswa` varchar(15) NOT NULL,
  `agama_siswa` varchar(15) NOT NULL,
  `kewarganegaraan_siswa` varchar(20) NOT NULL,
  `bahasa_siswa` varchar(20) NOT NULL,
  `golongan_siswa` varchar(2) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `foto_satu` varchar(255) NOT NULL,
  `foto_empat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nomor_induk`, `nomor_induk_sn`, `nama_siswa`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `jenis_kelamin_siswa`, `agama_siswa`, `kewarganegaraan_siswa`, `bahasa_siswa`, `golongan_siswa`, `alamat_siswa`, `foto_satu`, `foto_empat`) VALUES
('436bdbee076b0ca33bd9da6fff8494b1', 'xxx', 'xxxx', 'xxxx', 'Jember', '12122-12-1', 'Laki-laki', 'Islam', 'Indonesia', 'Indonesia', 'AB', '1.jpg', '1.jpg', '1.jpg'),
('ee98aa079b6f2f0afb19942c179b575e', '12323', '123123', '12313', '123', '11111-11-1', 'Perempuan', 'Islam', 'uygqehwq', 'kjahsd', 'AB', '1.jpg', '1.jpg', '1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tamat_belajar`
--

CREATE TABLE `tb_tamat_belajar` (
  `id_tamat_belajar` int(20) NOT NULL,
  `tanggal_tahun` varchar(15) NOT NULL,
  `nomor_sttb` varchar(20) NOT NULL,
  `melanjutkan_ke` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_wali` varchar(35) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `hubungan_kel_wali` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wali`
--

INSERT INTO `tb_wali` (`id_wali`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `hubungan_kel_wali`) VALUES
('436bdbee076b0ca33bd9da6fff8494b1', 'asnd', 'ajknd', 'ajdn', 'a,dn'),
('51a4ce13af0d2cdd311d0bf38a557311', 'jksd', 'sjdn', 'ajsnd', 'ajsdnj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_login` varchar(35) NOT NULL,
  `id_gtk` varchar(35) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_login`, `id_gtk`, `username`, `password`, `jabatan`) VALUES
('87hasd', 'ahjsdh', 'uuuu', '1234567', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_absensi_siswa`
--
ALTER TABLE `tb_absensi_siswa`
  ADD PRIMARY KEY (`id_absensi_siswa`);

--
-- Indeks untuk tabel `tb_alamat_ortu`
--
ALTER TABLE `tb_alamat_ortu`
  ADD PRIMARY KEY (`id_alamat_ortu`);

--
-- Indeks untuk tabel `tb_alamat_wali`
--
ALTER TABLE `tb_alamat_wali`
  ADD PRIMARY KEY (`id_alamat_wali`);

--
-- Indeks untuk tabel `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indeks untuk tabel `tb_gtk`
--
ALTER TABLE `tb_gtk`
  ADD PRIMARY KEY (`id_gtk`);

--
-- Indeks untuk tabel `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_keluar_sekolah`
--
ALTER TABLE `tb_keluar_sekolah`
  ADD PRIMARY KEY (`id_keluar_sekolah`);

--
-- Indeks untuk tabel `tb_mutasi_masuk_siswa`
--
ALTER TABLE `tb_mutasi_masuk_siswa`
  ADD PRIMARY KEY (`id_mutasi_masuk`);

--
-- Indeks untuk tabel `tb_pindah_sekolah`
--
ALTER TABLE `tb_pindah_sekolah`
  ADD PRIMARY KEY (`id_pindah_sekolah`);

--
-- Indeks untuk tabel `tb_relasi_rombel_siswa`
--
ALTER TABLE `tb_relasi_rombel_siswa`
  ADD PRIMARY KEY (`id_relasi_rombel_siswa`);

--
-- Indeks untuk tabel `tb_relasi_siswa`
--
ALTER TABLE `tb_relasi_siswa`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indeks untuk tabel `tb_rombel`
--
ALTER TABLE `tb_rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_tamat_belajar`
--
ALTER TABLE `tb_tamat_belajar`
  ADD PRIMARY KEY (`id_tamat_belajar`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_absensi_siswa`
--
ALTER TABLE `tb_absensi_siswa`
  MODIFY `id_absensi_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_keluar_sekolah`
--
ALTER TABLE `tb_keluar_sekolah`
  MODIFY `id_keluar_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mutasi_masuk_siswa`
--
ALTER TABLE `tb_mutasi_masuk_siswa`
  MODIFY `id_mutasi_masuk` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_relasi_siswa`
--
ALTER TABLE `tb_relasi_siswa`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_tamat_belajar`
--
ALTER TABLE `tb_tamat_belajar`
  MODIFY `id_tamat_belajar` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
