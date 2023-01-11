-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 18.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(99) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(0, 'Pizza Papperoni', 40000, 'piza-pp.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `nameuser` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(25) NOT NULL,
  `name` varchar(20) NOT NULL,
  `desk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`nameuser`, `email`, `number`, `name`, `desk`) VALUES
('Coki Muhammad', 'coki@12', 34, 'Pizza', 'Jl. Bangka Belitung'),
('Rakha Dimas Putra', 'rakha@123', 345, 'Pizza', 'Jl. Melati no.47 Ragunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `method` enum('BCA','BRI','Dana','Credit Card') NOT NULL,
  `flat` int(10) NOT NULL,
  `street` varchar(90) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(90) NOT NULL,
  `total_price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'awdawdw', 432234, 'rakha@gmail.com', '', 4233, 'dwawda', 'dwawda', 'dawawd', 'awdwa', 12345, 'effsef (1) ', 2),
(2, 'Rakha', 333, 'rakha@gmail.com', 'BCA', 4233, 'Melati', 'Jakarta', 'Jakarta Selatan', 'Indonesia', 123, 'Pizza Double Papperoni (1) , Pizza Papperoni (1) ', 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(59, 'Pizza Papperoni', 40000, 'piza-pp.png'),
(60, 'Super Big Mac', 50000, 'home-img.png'),
(61, 'Kebab Zuper Cheese', 30000, 'kebab-jmb.jpg'),
(62, 'Pizza Goreng Beef', 20000, 'pigo.jpg'),
(63, 'Pizza Sausage', 35000, 'piza-s.png'),
(64, 'Kebab Premium', 36000, 'kebab-moza.jpg'),
(65, 'Kebab Premium', 36000, 'kebab-moza.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_br`
--

CREATE TABLE `stock_br` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stock_br`
--

INSERT INTO `stock_br` (`idbarang`, `namabarang`, `deskripsi`, `stock`, `image`) VALUES
(1, 'Ayam Goreng', 'Food', 10, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `user_type`, `email`, `password`) VALUES
(1, 'admin', 'admin@1', '123'),
(2, 'user-p', 'user@1', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`nameuser`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stock_br`
--
ALTER TABLE `stock_br`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `stock_br`
--
ALTER TABLE `stock_br`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
