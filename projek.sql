-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 07:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nama` varchar(50) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `total` int(20) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`nama`, `produk`, `alamat`, `metode`, `total`, `created_at`) VALUES
('abian', 'Deterjen Bubuk 1kg x3, Mie Instan (Isi 5) x1, Tepung Terigu 1kg x1', 'jalan jenengan raya', 'cod', 88000, 2025),
('Efraim Helena Novitasari', 'Minyak Goreng 2L x4, Mie Instan (Isi 5) x12', 'JL. Inajadulu no 69', 'ewallet', 296000, 2025);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(9) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(7) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga`, `gambar`) VALUES
('BR-001', 'Beras Premium 5kg', 'Beras Rojo Lele adalah salah satu varietas beras lokal unggulan yang dikenal dengan aroma khas, tekstur pulen, dan rasa yang lezat. Beras ini berasal dari daerah-daerah pertanian subur di Jawa Tengah dan Jawa Timur, dan telah menjadi pilihan favorit keluarga Indonesia.\r\n\r\nCocok untuk berbagai jenis masakan, mulai dari nasi putih sehari-hari hingga nasi uduk atau nasi goreng. Setiap butir Rojo Lele diproses secara higienis tanpa campuran dan tanpa pemutih, menjaga kualitas alami dan kandungan nutrisinya.\r\n\r\nKemasan: 5 kg\r\nAsal: Jawa Tengah\r\nSaran penyimpanan: Simpan di tempat kering dan tertutup', 75000, 'beras.png'),
('DB-008', 'Deterjen Bubuk 1kg', 'Deterjen berkualitas tinggi untuk mencuci pakaian lebih bersih.', 21000, 'deterjen.png'),
('GP-003', 'Gula Pasir 1kg', 'Gula putih murni untuk kebutuhan dapur harian Anda.', 13500, 'gula.png'),
('KO-007', 'Kopi Sachet (Isi 10)', 'Kopi instan dengan aroma khas dan rasa mantap.', 17000, 'kopi.png'),
('ME-006', 'Mie Instan (Isi 5)', 'Mie instan favorit keluarga dengan rasa lezat dan praktis.', 14000, 'indomi.png'),
('MI-002', 'Minyak Goreng 2L', 'Minyak goreng sehat tanpa kolesterol, cocok untuk memasak berbagai hidangan.', 32000, 'minyak.png'),
('TE-004', 'Telur Ayam 1kg', 'Telur ayam kampung segar dan bergizi tinggi.', 27000, 'telur.png'),
('TT-005', 'Tepung Terigu 1kg', 'Tepung serbaguna untuk membuat kue, gorengan, dan lainnya.', 11000, 'tepung.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `nama_lengkap`) VALUES
('bian', 'bian@gmail.com', 'bian123', 'aloysius'),
('nana', 'nana@gmail.com', 'nana123', 'Efraim Helena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
