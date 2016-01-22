-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2016 at 06:46 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oprecristek2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `role` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `role`) VALUES
('ammar.fathin', 'cs'),
('anthony31', 'cp'),
('ilham.fathy', 'dv'),
('jatmiko.budi', 'ds'),
('jundi.ahmad', 'sp'),
('kustiawanto.halim', 'es'),
('made.nindyatama', 'pr'),
('mohammad.awwaab', 'sp'),
('muhammad.azmi41', 'gd'),
('muhammad.firza', 'sp'),
('rahma.khairunisa', 'wb'),
('rizki.mubarok', 'ns'),
('shylla.estee', 'ux'),
('siti.fatimah34', 'sp'),
('teresa.pranyoto', 'md');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `timestamp` datetime(6) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `npm` char(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`timestamp`, `username`, `name`, `npm`, `jurusan`, `angkatan`, `email`, `phone`) VALUES
('2016-01-22 09:36:31.000000', 'anak.ilang', 'Anak Ilang', '1301234567', 'Ilmu Sihir', '2013', 'anak.ilang@gmail.com', '+6281313121214'),
('2016-01-22 09:58:46.000000', 'ginevra.molly', 'Ginevra Molly Weasly', '1308291042', 'Ilmu Sihir', '2013', 'ginevra.weasly@gmail.com', '+6285710294231'),
('2016-01-22 09:36:31.000000', 'harry.james', 'Harry James Potter', '1301301301', 'Ilmu Sihir', '2013', 'harry.potter@gmail.com', '+6281324354678'),
('2016-01-22 09:50:06.000000', 'hermione.jean', 'Hermione Jean Granger', '1304829384', 'Ilmu Sihir', '2013', 'hermione.granger@gmail.com', '+628782049128'),
('2016-01-17 07:18:28.000000', 'jundi.ahmad', 'Jundi Ahmad Alwan', '1306464114', 'Sistem Informasi (Information System)', '2013', 'jundi.alwan@gmail.com', '+6281399274252'),
('2016-01-22 09:58:46.000000', 'luna.lovegood', 'Luna Lovegood', '1302719923', 'Ilmu Sihir', '2013', 'luna.lovegood@gmail.com', '+6282201993488'),
('2016-01-22 09:50:06.000000', 'ronald.bilius', 'Ronlad Bilius Weasly', '1309876543', 'Ilmu Sihir', '2013', 'ronald.weasly@gmail.com', '+628123456789');

-- --------------------------------------------------------

--
-- Table structure for table `kualifikasi`
--

CREATE TABLE `kualifikasi` (
  `username` varchar(30) NOT NULL,
  `isPil1Qualified` int(1) NOT NULL DEFAULT '0',
  `isPil2Qualified` int(1) NOT NULL DEFAULT '0',
  `biohash` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kualifikasi`
--

INSERT INTO `kualifikasi` (`username`, `isPil1Qualified`, `isPil2Qualified`, `biohash`) VALUES
('anak.ilang', 1, 0, 'ae45fa0dca191bb80671c6b4508793bd'),
('ginevra.molly', 0, 0, 'e052eeba315ff22135376d1b4299dccb'),
('harry.james', 0, 0, '2abd2d843c8c68ce365107f8cfad74c7'),
('hermione.jean', 1, 0, 'd19deb18e99cf9576e1d5bde708978c0'),
('jundi.ahmad', 1, 0, '1b7d12f0f59e04efc3c3e269782bf665'),
('luna.lovegood', 0, 1, '78653141b1044d331eb3f30e42b40cb6'),
('ronald.bilius', 1, 0, '3ea6de57d6b0f94418719bc436f4114b');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `username` varchar(50) NOT NULL,
  `sig1` char(2) DEFAULT NULL,
  `alasan1` text,
  `sig2` char(2) DEFAULT NULL,
  `alasan2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`username`, `sig1`, `alasan1`, `sig2`, `alasan2`) VALUES
('anak.ilang', 'cp', 'lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet', 'wb', 'lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet'),
('ginevra.molly', 'pr', 'I love writing and relate with others', 'pr', 'I love writing and relate with others'),
('harry.james', 'es', 'di hogwarts gak ada embed', 'ux', 'sekarang ux banyak permintaannya'),
('hermione.jean', 'ds', 'data is my life', 'ds', 'data is my life'),
('jundi.ahmad', 'cp', 'asd', 'ux', 'qwe'),
('luna.lovegood', 'hr', 'caring is love and love is good :)', 'hr', 'caring is love and love is good :)'),
('ronald.bilius', 'gd', 'gak ada dosen gamedev di hogwarts', 'gd', 'gak ada dosen gamedev di hogwarts');

-- --------------------------------------------------------

--
-- Table structure for table `sigproperty`
--

CREATE TABLE `sigproperty` (
  `sig` char(2) NOT NULL,
  `booklink` varchar(50) NOT NULL,
  `linkname` varchar(100) NOT NULL,
  `logolink` varchar(50) NOT NULL,
  `signame` varchar(50) NOT NULL,
  `sigshortname` varchar(10) NOT NULL,
  `tasklink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigproperty`
--

INSERT INTO `sigproperty` (`sig`, `booklink`, `linkname`, `logolink`, `signame`, `sigshortname`, `tasklink`) VALUES
('cp', 'https://ristek2016-cp.youcanbook.me', 'Youcanbook.me Competitive Programming SIG', 'assets/img/cp.png', 'Competitive Programming SIG', 'CP', 'files/template_resume_ristek.docx'),
('ds', 'https://ristek2016-ds.youcanbook.me/', 'Youcanbook.me Data Science SIG', 'assets/img/ds.png', 'Data Science SIG', 'DatSci', 'files/template_resume_ristek.docx'),
('es', 'https://ristek2016-embed.youcanbook.me/', 'Youcanbook.me Embedded System SIG', 'assets/img/embed.png', 'Embedded System SIG', 'Embed', 'files/template_resume_ristek.docx'),
('gd', 'https://ristek2016-game.youcanbook.me/', 'Youcanbook.me Game Development SIG', 'assets/img/game.png', 'Game Development SIG', 'GameDev', 'files/template_resume_ristek.docx'),
('hr', 'https://ristek2016-hrd.youcanbook.me/', 'Youcanbook.me Human Resource Management Division', 'assets/img/hr.png', 'Human Resource Management Division', 'HRM', 'files/template_resume_ristek.docx'),
('md', 'https://ristek2016-mobapp.youcanbook.me/', 'Youcanbook.me Mobile Application Development SIG', 'assets/img/mob.png', 'Mobile Application Development SIG', 'MobApp', 'files/template_resume_ristek.docx'),
('ns', 'https://ristek2016-netsos.youcanbook.me/', 'Youcanbook.me Network Security and Operating System SIG', 'assets/img/netsos.png', 'Network Security and Operating System SIG', 'NetSos', 'files/template_resume_ristek.docx'),
('pr', 'https://ristek2016-pr.youcanbook.me/', 'Youcanbook.me Public Relation Division', 'assets/img/pr.png', 'Public Relation Division', 'PR', 'files/template_resume_ristek.docx'),
('ux', 'https://ristek2016-uiux.youcanbook.me/', 'Youcanbook.me UI/UX SIG', 'assets/img/ux.png', 'UI/UX SIG', 'UI/UX', 'files/template_resume_ristek.docx'),
('wb', 'https://ristek2016-web.youcanbook.me/', 'Youcanbook.me Web Development SIG', 'assets/img/web.png', 'Web Development SIG', 'WebDev', 'files/template_resume_ristek.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `username` varchar(30) NOT NULL,
  `essay` varchar(200) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `tugas1` varchar(200) DEFAULT NULL,
  `tugas2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`username`, `essay`, `resume`, `tugas1`, `tugas2`) VALUES
('anak.ilang', NULL, NULL, NULL, NULL),
('ginevra.molly', NULL, NULL, NULL, NULL),
('harry.james', NULL, NULL, NULL, NULL),
('hermione.jean', NULL, NULL, NULL, NULL),
('jundi.ahmad', NULL, 'http://facebook.com/jundi.alwan', NULL, 'http://facebook.com'),
('luna.lovegood', NULL, NULL, NULL, NULL),
('ronald.bilius', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `npm` (`npm`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kualifikasi`
--
ALTER TABLE `kualifikasi`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sigproperty`
--
ALTER TABLE `sigproperty`
  ADD PRIMARY KEY (`sig`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD CONSTRAINT `pilihan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `biodata` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`username`) REFERENCES `biodata` (`username`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
