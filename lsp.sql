-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 03:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE IF NOT EXISTS `akses` (
`id_akses` int(11) NOT NULL,
  `nama_akses` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
`id_gender` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id_gender`, `gender`) VALUES
(1, 'Laki - Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `status`, `alamat`, `gender`, `hak_akses`) VALUES
(1, 'afrano', 'nano@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'jalan paingan 2', '2', 1),
(3, 'afrano amran', 'aji@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'jalana aja hehe okeee', '1', 2),
(10, 'budiaja okeee', 'cek@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 1, 'jalan painga', '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
 ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
 ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD KEY `hak_akses` (`hak_akses`), ADD KEY `hak_akses_2` (`hak_akses`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akses`
--
ALTER TABLE `akses`
ADD CONSTRAINT `akses_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `tb_user` (`hak_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
