-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 06:22 AM
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
-- Database: `tubes_193040068`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `judul`, `penulis`, `stok`) VALUES
(1, 'pic1.jpg', 'Angels & Demons (2000)', 'Dan Brown', 90),
(2, 'pic2.jpg', 'Harry Potter and the Goblet of Fire (2000)', 'J. K. Rowling', 100),
(3, 'pic3.jpg', 'Ksatria, Puteri, dan Bintang Jatuh (2001)', 'Dee Lestari', 120),
(4, 'pic4.jpg', 'Cantik itu Luka (2002)', 'Eka Kurniawan', 100),
(5, 'pic5.jpg', 'Laskar Pelangi (2005)', 'Andrea Hirata', 109),
(6, 'pic6.jpg', 'Twilight (2005)', 'Stephenie Meyer', 87),
(7, 'pic7.jpg', 'Dear John (2006)', 'Nicholas Sparks', 63),
(8, 'pic8.jpg', 'The Hunger Games (2008)', 'Suzanne Collins', 63),
(9, 'pic9.jpg', 'Negeri 5 Menara (2009)', 'Ahmad Fuadi', 63),
(10, 'pic10.jpg', 'Daun yang Jatuh Tak Pernah Membenci Angin (2010)', 'Tere Liye', 63);

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
(8, 'admin', '$2y$10$a.fBRbQS3eRbovk8W.NvQe/5R6fxtE8fRpDw5EoqVne.58ebIGGaW'),
(9, 'rifky', '$2y$10$OVy46kC3tAKc9Acy2FsxZeAhCdDo.24AC1YVwahSW46DQlXJ1JzY2'),
(10, 'bondan', '$2y$10$wxa./JnmYcbTfc7RwiGUH.FcfEveRb41b2ynLzZHvDOFU/3fuTii2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
