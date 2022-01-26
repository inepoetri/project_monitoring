-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2022 pada 05.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pm`
--

CREATE TABLE `tbl_pm` (
  `project_name` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `project_leader` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `progress` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pm`
--

INSERT INTO `tbl_pm` (`project_name`, `client`, `project_leader`, `start_date`, `end_date`, `progress`) VALUES
('Pembuatan SI Keuangan', 'Kalimantan Selatan', 'Indra Setiawan', '2022-01-14', '2022-08-14', '30%'),
('Learning Management System', 'Ruang Guru', 'Hilman Syahputra', '2022-01-30', '2022-03-10', '80%'),
('SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', '2022-02-02', '2022-05-30', '40%'),
('Employee Monitoring', 'PT. Bima Sarana Sukses', 'Handoko Aji', '2021-09-02', '2022-01-15', '100%'),
('Pembuatan SI Keuangan', 'Kalimantan Selatan', 'Indra Setiawan', '2022-01-14', '2022-08-14', '30%'),
('Learning Management System', 'Ruang Guru', 'Hilman Syahputra', '2022-01-30', '2022-03-10', '80%'),
('SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', '2022-02-02', '2022-05-30', '40%'),
('Employee Monitoring', 'PT. Bima Sarana Sukses', 'Handoko Aji', '2021-09-02', '2022-01-15', '100%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
