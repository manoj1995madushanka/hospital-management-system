-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 07:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`) VALUES
('D0001'),
('D0002'),
('D0003'),
('D0004'),
('D0005'),
('D0006'),
('D0007'),
('D0008'),
('D0009'),
('D0010'),
('D0011'),
('D0012'),
('D0013'),
('D0014'),
('D0015'),
('D0016'),
('D0017'),
('D0018'),
('D0019'),
('D0020');

-- --------------------------------------------------------

--
-- Table structure for table `externalphysican`
--

CREATE TABLE `externalphysican` (
  `d_id` varchar(5) NOT NULL,
  `d_f_name` varchar(50) NOT NULL,
  `d_l_name` varchar(50) NOT NULL,
  `reg_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `externalphysican`
--

INSERT INTO `externalphysican` (`d_id`, `d_f_name`, `d_l_name`, `reg_no`) VALUES
('D0001', 'Kaeshavan', 'Chelvachandran', 'SLMC631541'),
('D0004', 'Kushan', 'Ravindhu', 'SLMC646413'),
('D0005', 'Pansilu', 'Nilaweera', 'SLMC749413'),
('D0009', 'Kaneel', 'Dias', 'SLMC351312'),
('D0012', 'Asna', 'Aariff', 'SLMC432131'),
('D0015', 'Sachini', 'Chathurangi', 'SLMC646946'),
('D0018', 'Leshani', 'Isanka', 'SLMC654631'),
('D0020', 'Shermi', 'Maleesha', 'SLMC219519');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldoctor`
--

CREATE TABLE `hospitaldoctor` (
  `d_id` varchar(5) NOT NULL,
  `d_f_name` varchar(50) NOT NULL,
  `d_l_name` varchar(50) NOT NULL,
  `reg_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitaldoctor`
--

INSERT INTO `hospitaldoctor` (`d_id`, `d_f_name`, `d_l_name`, `reg_no`) VALUES
('D0002', 'Manoj', 'Madushanka', 'SLMC546462'),
('D0003', 'Buddhi', 'Nisansala', 'SLMC686416'),
('D0006', 'Vethiga', 'Satkunarajah', 'SLMC364164'),
('D0007', 'Kushan', 'Abeyawickrama', 'SLMC646421'),
('D0008', 'Pubhudu', 'Senanayake', 'SLMC984764'),
('D0010', 'Oshadha', 'Senanayake', 'SLMC646178'),
('D0011', 'Vidyasagari', 'Jeganmohan', 'SLMC943301'),
('D0013', 'Mihiran', 'Chamara', 'SLMC646123'),
('D0014', 'Aashmari', 'Pramodya', 'SLMC564641'),
('D0016', 'Shabthika', 'Jeyamanoharan', 'SLMC213589'),
('D0017', 'Shehan', 'Kulathilake', 'SLMC131381'),
('D0019', 'Keshiha', 'Jeyatharan', 'SLMC352684');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` varchar(5) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `consultant_id` varchar(5) DEFAULT NULL,
  `recomanded_DID` varchar(5) DEFAULT NULL,
  `ward_no` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `f_name`, `l_name`, `birth_day`, `address`, `consultant_id`, `recomanded_DID`, `ward_no`) VALUES
('P0001', 'Peheliya', 'De Silva', '1995-05-05', 'Galle', 'D0002', 'D0001', 'w0001'),
('P0002', 'Jayanatha', 'Abimani', '1996-06-25', 'Matara', 'D0002', 'D0004', 'w0001'),
('P0003', 'Fathima', 'Safiya', '1996-04-20', 'Puttalam', 'D0002', 'D0005', 'w0001'),
('P0004', 'Hasitha', 'Amarathunga', '1996-09-12', 'Embilipitiya', 'D0002', 'D0009', 'w0001'),
('P0005', 'Udara', 'Guruge', '1996-04-10', 'Matale', 'D0002', 'D0012', 'w0001'),
('P0006', 'Kithmi', 'Ranaweera', '1996-10-05', 'Matara', 'D0002', 'D0015', 'w0001'),
('P0007', 'Himasha', 'Wijayasinghe', '1996-07-08', 'Kalutara', 'D0002', 'D0018', 'w0001'),
('P0008', 'Sasanka', 'Karunarathne', '1996-06-17', 'Nuwara Eliya', 'D0002', 'D0020', 'w0001'),
('P0009', 'Suwini', 'Umanga', '1996-09-15', 'Matara', 'D0003', 'D0001', 'w0001'),
('P0010', 'Heshan', 'Amila', '1996-08-01', 'Tholangamuva', 'D0003', 'D0004', 'w0001'),
('P0011', 'Isuru', 'Dilhan', '1995-07-05', 'Rathnapura', 'D0003', 'D0005', 'w0002');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `pid` varchar(10) NOT NULL,
  `test_no` varchar(10) NOT NULL,
  `TestResult` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`pid`, `test_no`, `TestResult`) VALUES
('P0001', 'T0003', 'POSITIVE'),
('P0001', 'T0016', 'POSITIVE'),
('P0002', 'T0008', 'NEGATIVE'),
('P0003', 'T0014', 'NEGATIVE'),
('P0005', 'T0013', 'NORMAL'),
('P0007', 'T0014', 'NORMAL'),
('P0007', 'T0017', 'POSITIVE'),
('P0008', 'T0009', 'NEGATIVE'),
('P0008', 'T0014', 'POSITIVE'),
('P0011', 'T0013', 'NEGATIVE');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `name`) VALUES
('T0001', 'Allergy, Skin Test'),
('T0002', 'Analysis of Urine'),
('T0003', 'Colonoscopy'),
('T0004', 'Glucose Tolerance Test'),
('T0005', 'Screening Cancer'),
('T0006', 'Strep Throat Infection Test'),
('T0007', 'Thyroid Scan'),
('T0008', 'Ultrasound of the Heart'),
('T0009', 'Upper Endoscopy'),
('T0010', 'X-Ray'),
('T0011', 'CAT Scan'),
('T0012', 'ECG (Electrocardiogram (ECG or EKG))'),
('T0013', 'MRI Scan'),
('T0014', 'Nerve Conduction'),
('T0015', 'Capsule Endoscopy'),
('T0016', 'CGG Test'),
('T0017', 'Cholesterol Test'),
('T0018', 'C-Reactive Protein (CRP)');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `first` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `usertype`, `first`, `pwd`) VALUES
('admin1', 'ADMIN', 'admin1', '123'),
('doc001', 'DOCTOR', 'doc001', '123'),
('pat001', 'PATIENT', 'pat001', '123');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `u_t_no` int(2) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`u_t_no`, `user_type`) VALUES
(1, 'ADMIN'),
(2, 'DOCTOR'),
(3, 'PATIENT');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `ward_no` varchar(5) NOT NULL,
  `ward_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_no`, `ward_name`) VALUES
('w0001', 'Cardiology'),
('w0002', 'Dermatology'),
('w0003', 'Neurology'),
('w0004', 'Orthopedics'),
('w0005', 'Pediatrics'),
('w0006', 'Urology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `externalphysican`
--
ALTER TABLE `externalphysican`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `hospitaldoctor`
--
ALTER TABLE `hospitaldoctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `consultant_id` (`consultant_id`),
  ADD KEY `recomanded_DID` (`recomanded_DID`),
  ADD KEY `ward_no` (`ward_no`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`pid`,`test_no`),
  ADD KEY `test_no` (`test_no`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `fk_u_p` (`usertype`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`user_type`),
  ADD UNIQUE KEY `u_t_no` (`u_t_no`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`ward_no`,`ward_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `externalphysican`
--
ALTER TABLE `externalphysican`
  ADD CONSTRAINT `externalphysican_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospitaldoctor`
--
ALTER TABLE `hospitaldoctor`
  ADD CONSTRAINT `hospitaldoctor_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `hospitaldoctor` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`recomanded_DID`) REFERENCES `externalphysican` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`ward_no`) REFERENCES `ward` (`ward_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`test_no`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `fk_u_p` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`user_type`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
