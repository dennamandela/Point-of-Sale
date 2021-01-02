-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2019 pada 10.14
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farl_computer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `harga`, `image`) VALUES
(44, 52, 'Keyboard Rexus', 500000, 'keyboard.jpg'),
(45, 53, 'Simbada', 40000, 'speaker.jpg'),
(46, 53, 'JBL Speaker', 10000, 'speaker.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`kategori_id`, `nama_kategori`) VALUES
(52, 'Keyboard'),
(53, 'Speaker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `last_login` date NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_pengguna`, `email`, `password`, `username`, `last_login`, `level`) VALUES
(6, 'edi@gmail.com', '68add833c844a1f865faa9fb3fa46be6', 'edi', '0000-00-00', 'admin'),
(20, 'farel@gmail.com', 'd0d5e85d32257c6c8addcf18caef8982', 'Farel', '0000-00-00', 'admin'),
(21, 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Admin', '0000-00-00', 'admin'),
(25, 'plazazoya@gmail.com', '8726654fb3b792b6a92f0d5491e670b7', 'Plazazoya', '0000-00-00', 'admin'),
(31, 'rayyan@gmail.com', '62ed597b338095651312245f2063ef2a', 'Rayyan', '0000-00-00', 'admin'),
(33, 'fadillah@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Fadillah', '0000-00-00', 'admin'),
(34, '', '21232f297a57a5a743894a0e4a801fc3', 'admin', '0000-00-00', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `tanggal_transaksi`, `id_pengguna`) VALUES
(65, '2019-04-16', NULL),
(66, '2019-04-16', NULL),
(67, '2019-04-16', NULL),
(68, '2019-04-16', NULL),
(69, '2019-04-16', NULL),
(70, '2019-04-16', NULL),
(71, '2019-04-16', NULL),
(72, '2019-04-17', 6),
(73, '2019-04-17', 6),
(74, '2019-04-17', 6),
(75, '2019-04-17', 6),
(76, '2019-04-17', 6),
(77, '2019-04-17', 20),
(78, '2019-04-18', 21),
(79, '2019-04-18', 21),
(80, '2019-04-18', 21),
(81, '2019-04-18', 25),
(82, '2019-04-18', 31),
(83, '2019-04-18', 31),
(84, '2019-04-19', 20),
(85, '2019-04-19', 20),
(86, '2019-04-20', 25),
(87, '2019-04-20', 25),
(88, '2019-04-20', 25),
(89, '2019-04-20', 25),
(90, '2019-04-20', 25),
(91, '2019-04-20', 25),
(92, '2019-04-20', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `detail_id` int(11) NOT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`detail_id`, `barang_id`, `qty`, `transaksi_id`, `harga`, `status`) VALUES
(54, 36, 1, 86, 500000, '1'),
(55, 37, 2, 87, 1000000, '1'),
(56, 39, 4, 89, 250000, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD UNIQUE KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_barang` (`kategori_id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `login` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`transaksi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
