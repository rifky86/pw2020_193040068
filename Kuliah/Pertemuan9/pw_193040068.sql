-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 08:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040068`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'bangbang', '74983909', 'bangbang@gmail.com', 'Teknik Informatika', 'pic1.jpg'),
(2, 'nartam', '133040123', 'nartam@gmail.com', 'Teknik mesin', 'pic2.jpg'),
(3, 'berto', '153030321', 'berto@gmail.com', 'Ekonomi', 'pic3.jpg'),
(4, 'Rayhan', '193040044', 'rayhan@gmail.com', 'Teknik Informatika', 'pic4.jpg'),
(5, 'Aldi', '193040054', 'aldi@yahoo.com', 'Teknik Informatika', 'pic5.jpg'),
(6, 'Viqri', '193040041', 'viqri@gmail.com', 'Teknik Informatika', 'pic6.jpg'),
(7, 'Usep', '193040051', 'usep@yahoo.com', 'Teknik Informatika', 'pic7.jpg'),
(8, 'Rifky', '193040068', 'rifky@gmail.com', 'Teknik Informatika', 'pic8.jpg'),
(9, 'Aji', '193040046', 'aji@yahoo.com', 'Teknik Informatika', 'pic9.jpg'),
(10, 'Rio', '193040057', 'rio@gmail.com', 'Teknik Informatika', 'pic10.jpg'),
(14, 'bn', 'jkl', 'jk', 'sd', 'pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'gembel', '$2y$10$Wi3Eiu9gqt2PKLZXkBUvlO6GPNyBiSdRDPhhCm/BszJqpJgrtZlDm'),
(3, 'rifky', '$2y$10$AdtswfVmx1u2uirlczG9/.nbd2uGn7lxQ33DnrNTYjq8dJsQPY39u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
