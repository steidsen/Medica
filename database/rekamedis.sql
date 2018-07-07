-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 10:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekamedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE `datapasien` (
  `noRegistrasi` varchar(6) NOT NULL,
  `noRekam` int(6) NOT NULL,
  `namaPasien` text NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `tempatLahir` text NOT NULL,
  `tanggalLahir` date NOT NULL,
  `umurTahun` int(5) NOT NULL,
  `umurBulan` int(5) NOT NULL,
  `umurHari` int(5) NOT NULL,
  `noTelp` text NOT NULL,
  `noHp` text NOT NULL,
  `ibuKandung` text NOT NULL,
  `statusKawin` text NOT NULL,
  `namaPasangan` text NOT NULL,
  `agama` text NOT NULL,
  `wargaNegara` text NOT NULL,
  `tglDaftar` date NOT NULL,
  `pembuatRm` text NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(2) NOT NULL,
  `rw` int(2) NOT NULL,
  `provinsi` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `jenisPasien` text NOT NULL,
  `noAskes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapasien`
--

INSERT INTO `datapasien` (`noRegistrasi`, `noRekam`, `namaPasien`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `umurTahun`, `umurBulan`, `umurHari`, `noTelp`, `noHp`, `ibuKandung`, `statusKawin`, `namaPasangan`, `agama`, `wargaNegara`, `tglDaftar`, `pembuatRm`, `alamat`, `rt`, `rw`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `jenisPasien`, `noAskes`) VALUES
('1', 1, 'sdadasdas', 'L', 'sadadas', '1994-05-01', 20, 1, 2, '34423523235', '1232435235234', 'asdsadasd', 'asdada', '', 'dasdasda', 'adasdasdasdas', '2018-05-01', 'sdasdasdas', 'adasdasdasdas', 12, 3, 'dasdadasdasd', 'asdadasdasdasdsa', 'sadasdadasdasdasd', 'asdasdasdasdas', 'adasdasdasdas', 'asdasdasdasdasdasd'),
('2', 180501, 'asdasdas', 'L', 'asdasdsa', '1994-05-01', 24, 2, 15, '11111111111111', '1232223', 'adasdasdasd', 'asdasdas', 'asdasd', 'adsadasdasda', 'sasdasdas', '2018-05-16', 'asdasdadas', 'sadasdas', 12, 1, 'asdasdas', 'sadasda', 'adasdasdas', 'asda', 'asdasda', 'asdasdasda'),
('4', 7, 'asdasdasd', 'L', 'z', '1994-05-01', 24, 2, 1, '5555555555555555', '111111111111111111', 'z', 'z', 'z', 'z', 'z', '2018-05-01', 'z', 'd', 2, 1, 'z', 'z', 'z', 'z', 'z', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kodePenyakit` varchar(4) NOT NULL,
  `namaPenyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kodePenyakit`, `namaPenyakit`) VALUES
('A001', 'Tubercolosis'),
('B002', 'Tifus');

-- --------------------------------------------------------

--
-- Table structure for table `table_seq1`
--

CREATE TABLE `table_seq1` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_seq1`
--

INSERT INTO `table_seq1` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `testdoang`
--

CREATE TABLE `testdoang` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdoang`
--

INSERT INTO `testdoang` (`id`, `nama`) VALUES
(1, 2),
(2, 31232),
(3, 123123),
(4, 123123),
(5, 322231),
(6, 7777),
(7, 666);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`noRegistrasi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`(20));

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kodePenyakit`);

--
-- Indexes for table `table_seq1`
--
ALTER TABLE `table_seq1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdoang`
--
ALTER TABLE `testdoang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_seq1`
--
ALTER TABLE `table_seq1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testdoang`
--
ALTER TABLE `testdoang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
