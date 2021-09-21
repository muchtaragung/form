-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 09:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `create_at`) VALUES
(1, 'Korpora Admin', 'admin@korpora.com', '$2y$10$ovmHuU1rZ1YzMdx2YXDwkO2gM7UDi6LbjfhwuIy6sZspdEy6plQSa', '2021-09-16 03:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_form` int(11) NOT NULL,
  `akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `id_perusahaan`, `id_form`, `akses`) VALUES
(1, 1, 1, 0),
(2, 4, 1, 0),
(3, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `nama`) VALUES
(1, 'FORM OUTCOME BASED THINKING'),
(2, 'FORM UNDERSTANDING OPPONENT');

-- --------------------------------------------------------

--
-- Table structure for table `isi_form`
--

CREATE TABLE `isi_form` (
  `id_isi` int(11) NOT NULL,
  `isi` text NOT NULL,
  `id_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_form`
--

INSERT INTO `isi_form` (`id_isi`, `isi`, `id_form`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada id augue tempor fermentum. Etiam eu justo a velit gravida semper in eu est. Nullam non metus hendrerit felis suscipit viverra ac nec lorem. Vivamus pretium at odio sit amet ornare. Cras dictum elementum ipsum, ut egestas magna molestie sit amet. Praesent volutpat tristique volutpat. Vivamus molestie diam elit. Phasellus tincidunt mi consectetur, vehicula nulla nec, placerat justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut laoreet luctus feugiat. Vestibulum orci augue, vehicula quis diam cursus, mollis fermentum dui. Donec ac leo suscipit, ultrices nisl a, iaculis odio. Nulla in purus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vulputate dictum nunc ac porttitor. - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada id augue tempor fermentum. Etiam eu justo a velit gravida semper in eu est. Nullam non metus hendrerit felis suscipit viverra ac nec lorem. Vivamus pretium at odio sit amet ornare. Cras dictum elementum ipsum, ut egestas magna molestie sit amet. Praesent volutpat tristique volutpat. Vivamus molestie diam elit. Phasellus tincidunt mi consectetur, vehicula nulla nec, placerat justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut laoreet luctus feugiat. Vestibulum orci augue, vehicula quis diam cursus, mollis fermentum dui. Donec ac leo suscipit, ultrices nisl a, iaculis odio. Nulla in purus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vulputate dictum nunc ac porttitor.- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada id augue tempor fermentum. Etiam eu justo a velit gravida semper in eu est. Nullam non metus hendrerit felis suscipit viverra ac nec lorem. Vivamus pretium at odio sit amet ornare. Cras dictum elementum ipsum, ut egestas magna molestie sit amet. Praesent volutpat tristique volutpat. Vivamus molestie diam elit. Phasellus tincidunt mi consectetur, vehicula nulla nec, placerat justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut laoreet luctus feugiat. Vestibulum orci augue, vehicula quis diam cursus, mollis fermentum dui. Donec ac leo suscipit, ultrices nisl a, iaculis odio. Nulla in purus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vulputate dictum nunc ac porttitor.-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada id augue tempor fermentum. Etiam eu justo a velit gravida semper in eu est. Nullam non metus hendrerit felis suscipit viverra ac nec lorem. Vivamus pretium at odio sit amet ornare. Cras dictum elementum ipsum, ut egestas magna molestie sit amet. Praesent volutpat tristique volutpat. Vivamus molestie diam elit. Phasellus tincidunt mi consectetur, vehicula nulla nec, placerat justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut laoreet luctus feugiat. Vestibulum orci augue, vehicula quis diam cursus, mollis fermentum dui. Donec ac leo suscipit, ultrices nisl a, iaculis odio. Nulla in purus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vulputate dictum nunc ac porttitor.-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada id augue tempor fermentum. Etiam eu justo a velit gravida semper in eu est. Nullam non metus hendrerit felis suscipit viverra ac nec lorem. Vivamus pretium at odio sit amet ornare. Cras dictum elementum ipsum, ut egestas magna molestie sit amet. Praesent volutpat tristique volutpat. Vivamus molestie diam elit. Phasellus tincidunt mi consectetur, vehicula nulla nec, placerat justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut laoreet luctus feugiat. Vestibulum orci augue, vehicula quis diam cursus, mollis fermentum dui. Donec ac leo suscipit, ultrices nisl a, iaculis odio. Nulla in purus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vulputate dictum nunc ac porttitor. -Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada id augue tempor fermentum. Etiam eu justo a velit gravida semper in eu est. Nullam non metus hendrerit felis suscipit viverra ac nec lorem. Vivamus pretium at odio sit amet ornare. Cras dictum elementum ipsum, ut egestas magna molestie sit amet. Praesent volutpat tristique volutpat. Vivamus molestie diam elit. Phasellus tincidunt mi consectetur, vehicula nulla nec, placerat justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut laoreet luctus feugiat. Vestibulum orci augue, vehicula quis diam cursus, mollis fermentum dui. Donec ac leo suscipit, ultrices nisl a, iaculis odio. Nulla in purus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vulputate dictum nunc ac porttitor.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `create_at`) VALUES
(1, 'PT test Inter', '2021-09-15 04:21:16'),
(4, 'PT kedua', '2021-09-16 09:20:09'),
(5, 'PT ketiga', '2021-09-16 09:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `id_perusahaan`, `create_at`) VALUES
(1, 'test', 'test@gmail.com', '$2y$10$N0Md0cE4q1/TqUQQhplT0uc7JmgifCWUsGJ.Vmyes4mC0fs27WRIa', 1, '2021-09-15 04:20:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `isi_form`
--
ALTER TABLE `isi_form`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `isi_form`
--
ALTER TABLE `isi_form`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
