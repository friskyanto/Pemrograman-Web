-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 08:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aboutme` longtext DEFAULT NULL,
  `aboutme2` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aboutme`, `aboutme2`) VALUES
('Perkenalkan Nama Saya Friskyanto Wicaksono, Umur Saya 21Tahun, Saya Lulusan Dari SMAN 10 Tangerang Selatan Dan Sekarang Saya Seorang Mahasiswa Dari Univeristas Pembangunan Jaya Jurusan Teknik Informatika Tahun Ajaran 2019.', 'Saya Lahir Tanggal 13 Januari 2000 Tangerang , Tempat Tinggal Saya Di Jln. Empang Sari No.28A Tangerang Selatan, Hobi Saya Adalah Bermain Game, Saya Masuk Jurusan Teknik Informatika Ini Karna Memliki Ketertarikan Dengan Jaringan Komputer Dan Saya Ingin Mendalaminya Lagi, Mungkin Itu Saja Dari Perkenalan Diri . Terima Kasih');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Facebook` varchar(50) DEFAULT NULL,
  `IG` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Facebook`, `IG`, `email`) VALUES
('Friskyanto Wicaksono', 'Friskyanto47', 'Friskyantowck@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`name`, `status`) VALUES
('Friskyanto Wicaksono', 'Mahasiswa Universitas Pembangunan Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projects1` longtext DEFAULT NULL,
  `projects2` longtext DEFAULT NULL,
  `projects3` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projects1`, `projects2`, `projects3`) VALUES
('Membuat Project Tinkercad Sensor Gas,untuk Mediteksi apabila terjadi gas bocor di suatu ruangan', 'Saya Membuat Blog Pribadi dan membuat artikel', 'Membuat Web Protofolio Menggunakan PhP dan Bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `Java` varchar(50) DEFAULT NULL,
  `Python` varchar(50) DEFAULT NULL,
  `CSS` varchar(50) DEFAULT NULL,
  `Bootstrap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`Java`, `Python`, `CSS`, `Bootstrap`) VALUES
('Java', 'Python', 'CSS', 'Bootstrap');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
