-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 07:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2d_klp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `id_att` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `id_tiket` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id_att`, `nama`, `email`, `no_tlp`, `id_tiket`) VALUES
(1, 'Andi Pratama', 'andi.pratama@email.com', '085612345678', 1),
(2, 'Budi Santoso', 'budi.santoso@email.com', '085698765432', 2),
(3, 'Siti Aisyah', 'siti.aisyah@email.com', '082312345678', 3),
(4, 'Ahmad Fauzi', 'ahmad.fauzi@email.com', '087612345678', 4),
(5, 'Lina Widya', 'lina.widya@email.com', '085412345678', 5),
(6, 'Arfa', 'Arfa@gmail.com', '08571245424', 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_events` int NOT NULL,
  `nama_acara` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `id_org` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_events`, `nama_acara`, `deskripsi`, `tanggal`, `waktu`, `lokasi`, `id_org`) VALUES
(1, 'Konser Musik', 'Konser musik yang menampilkan band lokal.', '2024-12-25', '18:30:00', 'Gedung A', 1002),
(2, 'Pameran Seni', 'Pameran seni dengan berbagai karya lukis dan patung.', '2024-12-26', '10:00:00', 'Galeri Seni X', 1002),
(3, 'Seminar Teknologi', 'Seminar tentang perkembangan teknologi terbaru.', '2024-12-27', '09:00:00', 'Auditorium Y', 1003),
(4, 'Festival Kuliner', 'Festival kuliner dengan berbagai jenis makanan dari seluruh dunia.', '2024-12-28', '15:00:00', 'Taman Kota', 1004),
(5, 'Workshop Fotografi', 'Workshop untuk belajar teknik fotografi dengan profesional.', '2024-12-29', '13:00:00', 'Studio Foto Z', 1005);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `id_org` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id_org`, `nama`, `kontak`, `email`, `jabatan`) VALUES
(1001, 'Budi Santoso', '081234567890', 'budi.santoso@email.com', 'Manajer Acara'),
(1002, 'Siti Aisyah', '081987654321', 'siti.aisyah@email.com', 'Koordinator Pameran'),
(1003, 'Ahmad Fauzi', '082134567890', 'ahmad.fauzi@email.com', 'Penyelenggara Seminar'),
(1004, 'Lina Widya', '083234567890', 'lina.widya@email.com', 'Ketua Festival'),
(1005, 'Rudi Hartono', '084134567890', 'rudi.hartono@email.com', 'Instruktur Workshop');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id_tiket` int NOT NULL,
  `jenis_tiket` enum('VIP','REGULAR') NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `kuota` int NOT NULL,
  `id_events` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id_tiket`, `jenis_tiket`, `harga`, `kuota`, `id_events`) VALUES
(1, 'VIP', 500000.00, 1000, 1),
(2, 'REGULAR', 150000.00, 200, 1),
(3, 'VIP', 600000.00, 50, 2),
(4, 'REGULAR', 100000.00, 300, 2),
(5, 'VIP', 700000.00, 80, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id_att`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `id_org` (`id_org`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`id_org`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_events` (`id_events`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id_att` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `id_org` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendees`
--
ALTER TABLE `attendees`
  ADD CONSTRAINT `attendees_ibfk_1` FOREIGN KEY (`id_tiket`) REFERENCES `tickets` (`id_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_org`) REFERENCES `organizers` (`id_org`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_events`) REFERENCES `events` (`id_events`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
