-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2026 at 03:07 PM
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
-- Database: `sismul_ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` varchar(50) NOT NULL,
  `nama_game` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `harga` int(7) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `discount` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `description`, `harga`, `gambar`, `discount`) VALUES
('item69fdb39be232c9.18031388', 'Dead By Daylight', 'Trapped forever in a realm of eldritch evil where even death is not an escape, four determined Survivors face a bloodthirsty Killer in a vicious game of nerve and wits. Pick a side and step into a world of tension and terror with horror gaming\'s best asymmetrical multiplayer.', 220000, 'item69fdb39be232c9_18031388.png', 80),
('item69fdbb68dde377.07229102', 'Cyberpunk 2077', 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the dark future of Night City — a dangerous megalopolis obsessed with power, glamor, and ceaseless body modification.', 700000, 'item69fdbb68dde377_07229102.png', 90),
('item69fdca88b6ee13.96014190', 'Expedition 33', 'Pimpin para anggota Ekspedisi 33 dalam perjalanan mereka untuk mengalahkan Sang Pelukis - hingga dia tak bisa melukis kematian lagi. Arungi dunia yang terinspirasi oleh Belle Époque Prancis dalam RPG berbasis giliran dengan mekanisme real-time.', 500000, 'item69fdca88b6ee13_96014190.png', 60),
('item69fdcaf2269335.04182555', 'Grand Theft Auto V ', 'Experience entertainment blockbusters Grand Theft Auto V and Grand Theft Auto Online — now upgraded for a new generation with stunning visuals, faster loading, 3D audio, and more, plus exclusive content for GTA Online players.', 438998, 'item69fdcaf2269335_04182555.png', 0),
('item69fdcbadb83743.42061089', 'Lies of P', 'Lies of P is a thrilling soulslike that takes the story of Pinocchio, turns it on its head, and sets it against the darkly elegant backdrop of the Belle Epoque era.', 870000, 'item69fdcbadb83743_42061089.png', NULL),
('item69fdcc7d02ace5.85584943', 'Red Dead Redemption', 'Selami kisah mantan pelanggar hukum bernama John Marston seiring dirinya melacak para anggota terakhir dari Geng Van der Linde dalam debut PC dari pendahulu Red Dead Redemption 2 yang sangat terkenal.', 729000, 'item69fdcc7d02ace5_85584943.png', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
