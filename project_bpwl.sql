-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2021 pada 20.32
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bpwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(100) NOT NULL,
  `id_produk` varchar(100) NOT NULL,
  `id_supplier` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_produk`, `id_supplier`, `jumlah`, `tanggal`) VALUES
('BL-001', 'B-002', 'S-001', '6', '01-08-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` varchar(100) NOT NULL,
  `id_produk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_produk`, `jumlah`, `total_harga`, `tanggal_transaksi`) VALUES
('JL-001', 'B-002', '2', '100000', '02-08-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori_produk` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori_produk`, `harga`, `stok`) VALUES
('B-001', 'Diamond', 'Hijab', '30000', '8'),
('B-002', 'Mahkota', 'Hijab', '50000', '6'),
('B-003', 'Rinz', 'Hijab', '35000', '5'),
('B-004', 'Crincle', 'Blouse', '65000', '3'),
('B-005', 'Zalfa', 'Blouse', '70000', '2'),
('B-006', 'Kika', 'Blouse', '80000', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(100) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `notelp_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `notelp_supplier`) VALUES
('S-001', 'Zahra Busana', 'JL. Jend. Sudirman, Pekanbaru, Riau', '081365594121'),
('S-002', 'Abe Grosir', 'Jl. Jend Sudirman, Pekanbaru, Riau', '081374986878');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'azre', '12345', 'pemilik'),
(2, 'hanif', 'azre', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
