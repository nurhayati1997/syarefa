-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 09:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_syamrabu`
--

-- --------------------------------------------------------

--
-- Table structure for table `hrd_user`
--

CREATE TABLE `hrd_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_karyawan` varchar(30) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rule` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_user`
--

INSERT INTO `hrd_user` (`id_user`, `nama`, `status_karyawan`, `jabatan`, `email`, `password`, `rule`, `status`) VALUES
(6, 'Nurhayati Fitriani', '', 'owner', 'nurhayatifitriani77@gmail.com', '$y201$H8m$nI/V0H/vVJ60wQaK0Lfi86WhH.tcWDg5o73ZhNAwZr5oCSpmug', 1, 1),
(127, 're', '1', '1', 'nurhayatifitriani@gmail.com', '$y201$2Ul$La/2iVsC3g0k/2XoQt6plNx.2.ZGW0azV8DDRDzJOB6FOGqPRU', 1, 0),
(1254, 'romi', '1', '3', 'romi@gmail.com', '$y201$mTp$XlQuB.WGO9XabyiaoBb97GUSGO2TCaxnlMrkrjlD/UcTt6/rbg', 1, 0),
(12345, 'romi yati', '1', '1', 'nurhayatifitriani7@gmail.com', '$y201$vg1$fHsZlO52bR0XgbJRRIMkcq/Aze1OIwE3HxFTn70eVdSw3u6HTu', 1, 0),
(123456, 'rere', '4', '1', 'nurhayati@gmail.com', '$y201$2Z6$5sOESMervyrXocBLmKp8uhjkROyekqPYRnQyELZHOI7P926IG9', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `syarefa`
--

CREATE TABLE `syarefa` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_antrian` int(11) DEFAULT NULL,
  `jenis_pasien` int(11) NOT NULL,
  `poli` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarefa`
--

INSERT INTO `syarefa` (`id`, `no_rm`, `nama`, `no_antrian`, `jenis_pasien`, `poli`, `status`, `tgl_input`) VALUES
(1, '1.AVIr0.1', 'inas', 92123, 1, '0', 0, '2021-02-23'),
(2, '2.v1KQP.1', 'mirna', 123123, 1, '1', 1, '2021-02-23'),
(5, '1236', 'yuni', 654, 2, '2', 3, '2022-01-13'),
(7, '543', 'yoi', 57, 2, '3', 2, '2022-01-13'),
(8, '547', 'AHMAD', 12, 1, '1', 3, '2022-01-14'),
(11, '258', 'oi', 97, 2, '1', 2, '2022-01-14'),
(12, '487', 'lu', 98, 1, '1', 2, '2022-01-14'),
(14, '343', 'yati', 124, 1, '2', 2, '2022-01-14'),
(16, '343', 'yatij', 12466, 1, 'an', 4, '2022-01-14'),
(17, '343', 'yatihj', 12466, 2, 'hn', 1, '2022-01-14'),
(18, '343', 'iya', 124890, 1, 'an', 1, '2022-01-14'),
(19, '343', 'iu', 8774, 2, 'ki', 3, '2022-01-14'),
(20, '76', 'yati', 101, 2, 'gigi', 5, '2022-01-16'),
(21, '456', 'romi', 102, 2, 'anak', 5, '2022-01-16'),
(22, '544', 'dedek', 103, 2, 'anak', 4, '2022-01-16'),
(23, '976', 'opo', 104, 1, 'jantung', 2, '2022-01-16'),
(24, '654', 'tutu', 105, 1, 'ortho', 3, '2022-01-16'),
(25, '786', 'teri', 106, 1, 'jia', 1, '2022-01-16');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ambilantrian_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_ambilantrian_bpjs` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ambilantrian_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_ambilantrian_umum` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_obatbelumdiambil_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_obatbelumdiambil_bpjs` (
`no_antrian` int(11)
,`nama` varchar(50)
,`poli` varchar(30)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_obatbelumdiambil_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_obatbelumdiambil_umum` (
`no_antrian` int(11)
,`nama` varchar(50)
,`poli` varchar(30)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sedangdikerjan_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_sedangdikerjan_bpjs` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sedangdikerjan_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_sedangdikerjan_umum` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sisaresep_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_sisaresep_bpjs` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sisaresep_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_sisaresep_umum` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_today`
-- (See below for the actual view)
--
CREATE TABLE `v_today` (
`no_antrian` int(11)
,`no_rm` varchar(12)
,`nama` varchar(50)
,`poli` varchar(30)
,`jenis_pasien` int(11)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_total_bpjs` (
`no_antrian` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_total_umum` (
`no_antrian` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_ambilantrian_bpjs`
--
DROP TABLE IF EXISTS `v_ambilantrian_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambilantrian_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '3' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_ambilantrian_umum`
--
DROP TABLE IF EXISTS `v_ambilantrian_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambilantrian_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '3' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_obatbelumdiambil_bpjs`
--
DROP TABLE IF EXISTS `v_obatbelumdiambil_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_obatbelumdiambil_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`nama` AS `nama`, `v_today`.`poli` AS `poli`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '5' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_obatbelumdiambil_umum`
--
DROP TABLE IF EXISTS `v_obatbelumdiambil_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_obatbelumdiambil_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`nama` AS `nama`, `v_today`.`poli` AS `poli`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '5' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sedangdikerjan_bpjs`
--
DROP TABLE IF EXISTS `v_sedangdikerjan_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sedangdikerjan_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '2' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sedangdikerjan_umum`
--
DROP TABLE IF EXISTS `v_sedangdikerjan_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sedangdikerjan_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '2' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sisaresep_bpjs`
--
DROP TABLE IF EXISTS `v_sisaresep_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sisaresep_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '1' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sisaresep_umum`
--
DROP TABLE IF EXISTS `v_sisaresep_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sisaresep_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '1' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_today`
--
DROP TABLE IF EXISTS `v_today`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_today`  AS SELECT `syarefa`.`no_antrian` AS `no_antrian`, `syarefa`.`no_rm` AS `no_rm`, `syarefa`.`nama` AS `nama`, `syarefa`.`poli` AS `poli`, `syarefa`.`jenis_pasien` AS `jenis_pasien`, `syarefa`.`status` AS `status` FROM `syarefa` WHERE `syarefa`.`tgl_input` = curdate() ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_bpjs`
--
DROP TABLE IF EXISTS `v_total_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_umum`
--
DROP TABLE IF EXISTS `v_total_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`jenis_pasien` = '2' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `syarefa`
--
ALTER TABLE `syarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `syarefa`
--
ALTER TABLE `syarefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
