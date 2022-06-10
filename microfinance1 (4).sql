-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 03:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microfinance1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `lname`, `fname`, `mname`, `password`, `email`, `position`) VALUES
(1014, 'Microfinance', ' ', ' ', '8383b7074ff913df63fd292c17e62410', 'microfinance@gmail.com', 'Administrator'),
(1018, 'dayawon', 'moises', 't', '2000b7287e012511c77a7b2517e838ba', 'moises@gmail.com', 'Loan Officer'),
(1019, 'bodino', 'jomar', 'f', '202cb962ac59075b964b07152d234b70', 'jom@gmail.com', 'Finance Manager'),
(1020, 'Marcorde', 'Jake', 'Timajo', '827ccb0eea8a706c4c34a16891f84e7b', 'jakeblack@gmail.com', 'Finance Manager'),
(1021, 'Zuniga', 'Bryan', 'tebelin', 'f772dd197b80806dbf5b1e75f2f929a6', 'zuniga@gmail.com', 'Finance Manager'),
(1022, 'bodino', 'Jomar', 'Francisco', '202cb962ac59075b964b07152d234b70', 'jom123@gmail.com', 'Loan Officer'),
(1023, 'Tebelin', 'john ray', 'Oclares', '202cb962ac59075b964b07152d234b70', 'ray@gmail.com', 'Loan Officer');

-- --------------------------------------------------------

--
-- Table structure for table `comaker`
--

CREATE TABLE `comaker` (
  `id` int(255) NOT NULL,
  `loanid` varchar(255) NOT NULL,
  `clastname` varchar(255) NOT NULL,
  `cfirstname` varchar(255) NOT NULL,
  `cmiddlename` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `ccontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `userid`, `image`) VALUES
(5, '202051', 'cat_walking_4k_hd.jpg'),
(6, '202069', 'buildings_city_river_4k_hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `savings` varchar(255) NOT NULL,
  `depositdate` varchar(255) NOT NULL,
  `depositamount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `userid`, `lastname`, `firstname`, `middlename`, `dateofbirth`, `age`, `gender`, `barangay`, `municipality`, `province`, `email`, `contact`, `savings`, `depositdate`, `depositamount`) VALUES
(1021, '202061', 'bodino', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san miguel', 'catanduanes', 'jom123@gmail.com', '09123456789', '700', '2022-06-07', '500'),
(1022, '202058', 'zuniga', 'bryan', 'vargas', '1999-05-01', '23 years old', 'Male', 'tagbacan', 'san andress', 'catanduanes', 'zunigabryan@gmail.com', '09123456789', '700', '2022-06-07', '400'),
(1023, '202051', 'Bodino', 'Jomar', 'Franscisco', '1996-04-18', '26 years old', 'Male', 'Buhi', 'San Miguel', 'Catanduanes', 'Jom@gmail.com', '09123456789', '1200', '2022-06-07', '500'),
(1024, '202069', 'bod', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san', 'cat', 'j@gmai.com', '091273916723', '300', '2022-06-08', '300'),
(1025, '202069', 'bod', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san', 'cat', 'j@gmai.com', '091273916723', '300', '2022-06-08', '300'),
(1026, '202069', 'bod', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san', 'cat', 'j@gmai.com', '091273916723', '550', '2022-06-08', '250');

-- --------------------------------------------------------

--
-- Table structure for table `loanpayment`
--

CREATE TABLE `loanpayment` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `loantype` varchar(255) NOT NULL,
  `loandate` varchar(255) NOT NULL,
  `months` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `monthlypayment` varchar(255) NOT NULL,
  `duedate` varchar(255) NOT NULL,
  `totalpayableamount` varchar(255) NOT NULL,
  `totalbalance` varchar(255) NOT NULL,
  `lasttransaction` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `clastname` varchar(255) NOT NULL,
  `cfirstname` varchar(255) NOT NULL,
  `cmiddlename` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `ccontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanpayment`
--

INSERT INTO `loanpayment` (`id`, `lastname`, `firstname`, `middlename`, `dateofbirth`, `age`, `gender`, `barangay`, `municipality`, `province`, `contact`, `email`, `userid`, `loantype`, `loandate`, `months`, `interest`, `amount`, `monthlypayment`, `duedate`, `totalpayableamount`, `totalbalance`, `lasttransaction`, `status`, `clastname`, `cfirstname`, `cmiddlename`, `caddress`, `cemail`, `ccontact`) VALUES
(100032, 'bod', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san', 'cat', '091273916723', 'j@gmai.com', '202069', 'housing loan', '2022-06-09', '6', '12', '20000', '3733.33', '2022-06-23', '22398', '3733', '2022-06-16', 'On Process', 'Bod', 'jom', 'f', 'buhi', 'j@gmail.com', '0193918273');

-- --------------------------------------------------------

--
-- Table structure for table `loanplans`
--

CREATE TABLE `loanplans` (
  `loanplansid` int(255) NOT NULL,
  `planid` varchar(255) NOT NULL,
  `loantype` varchar(255) NOT NULL,
  `monthlypayment` varchar(255) NOT NULL,
  `totalpayment` varchar(255) NOT NULL,
  `months` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanplans`
--

INSERT INTO `loanplans` (`loanplansid`, `planid`, `loantype`, `monthlypayment`, `totalpayment`, `months`, `amount`, `interest`) VALUES
(20211, '84264', 'micro business', '1866.67', '11196', '6', '10000', '12'),
(20212, '54264', 'educational business', '933.33', '5598', '6', '5000', '12'),
(20213, '144264', 'housing loan', '3733.33', '22398', '6', '20000', '12'),
(20214, '42264', 'water and sanitation', '560.00', '3360', '6', '3000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `loantypes`
--

CREATE TABLE `loantypes` (
  `id` int(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loantypes`
--

INSERT INTO `loantypes` (`id`, `types`, `description`) VALUES
(48, 'micro business', 'Micro Business'),
(49, 'educational business', 'Educational Business'),
(50, 'housing loan', 'housing loan'),
(51, 'water and sanitation', 'water and sanitation');

-- --------------------------------------------------------

--
-- Table structure for table `loanuserpayment`
--

CREATE TABLE `loanuserpayment` (
  `id` int(255) NOT NULL,
  `loanid` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loandate` varchar(255) NOT NULL,
  `loantype` varchar(255) NOT NULL,
  `months` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `totalpayableamount` varchar(255) NOT NULL,
  `monthlypayment` varchar(255) NOT NULL,
  `duedate` varchar(255) NOT NULL,
  `totalbalance` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `lasttransaction` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanuserpayment`
--

INSERT INTO `loanuserpayment` (`id`, `loanid`, `userid`, `lastname`, `firstname`, `middlename`, `dateofbirth`, `age`, `barangay`, `municipality`, `province`, `gender`, `contact`, `email`, `loandate`, `loantype`, `months`, `interest`, `amount`, `totalpayableamount`, `monthlypayment`, `duedate`, `totalbalance`, `payment`, `lasttransaction`, `status`) VALUES
(287, '', '202058', 'zuniga', 'bryan', 'vargas', '1999-05-01', '', 'tagbacan', 'san andress', 'catanduanes', 'Male', '09123456789', 'zunigabryan@gmail.com', '2022-06-07', 'Calamity Loan', '2', '10', '5000', '5500', '2750.00', '2022-07-07', '2750', '2750.00', '2022-06-07', 'On Process'),
(288, '', '202059', 'tebelin', 'john ray', 'oclares', '1998-11-03', '', 'soboc', 'viga', 'catanduanes', 'Male', '09511443278', 'ray@gmail.com', '2022-06-07', 'Business Loan', '2', '10', '5000', '5500', '2750.00', '2022-07-07', '2750', '2750.00', '2022-06-07', 'On Process'),
(289, '', '202061', 'bodino', 'jom', 'f', '1999-04-18', '', 'buhi', 'san miguel', 'catanduanes', 'Male', '09123456789', 'jom123@gmail.com', '2022-06-07', 'Business Loan', '2', '10', '5000', '5500', '2750.00', '2022-07-07', '2750', '2750.00', '2022-06-07', 'On Process'),
(290, '100027', '202058', 'zuniga', 'bryan', 'vargas', '1999-05-01', '', 'tagbacan', 'san andress', 'catanduanes', 'Male', '09123456789', 'zunigabryan@gmail.com', '2022-06-07', 'Calamity Loan', '2', '10', '5000', '5500', '2750.00', '2022-07-07', '0', '2750.00', '2022-06-07', 'Finished'),
(291, '100032', '202069', 'bod', 'jom', 'f', '1999-04-18', '', 'buhi', 'san', 'cat', 'Male', '091273916723', 'j@gmai.com', '2022-06-09', 'housing loan', '6', '12', '20000', '22398', '3733.33', '2022-07-16', '18665', '3733.33', '2022-06-16', 'On Process'),
(292, '100032', '202069', 'bod', 'jom', 'f', '1999-04-18', '', 'buhi', 'san', 'cat', 'Male', '091273916723', 'j@gmai.com', '2022-06-09', 'housing loan', '6', '12', '20000', '22398', '3733.33', '2022-07-16', '14932', '3733.33', '2022-06-16', 'On Process'),
(293, '100032', '202069', 'bod', 'jom', 'f', '1999-04-18', '', 'buhi', 'san', 'cat', 'Male', '091273916723', 'j@gmai.com', '2022-06-09', 'housing loan', '6', '12', '20000', '22398', '3733.33', '2022-07-16', '11199', '3733.33', '2022-06-16', 'On Process'),
(294, '100032', '202069', 'bod', 'jom', 'f', '1999-04-18', '', 'buhi', 'san', 'cat', 'Male', '091273916723', 'j@gmai.com', '2022-06-09', 'housing loan', '6', '12', '20000', '22398', '3733.33', '2022-07-16', '7466', '3733.33', '2022-06-16', 'On Process'),
(295, '100032', '202069', 'bod', 'jom', 'f', '1999-04-18', '', 'buhi', 'san', 'cat', 'Male', '091273916723', 'j@gmai.com', '2022-06-09', 'housing loan', '6', '12', '20000', '22398', '3733.33', '2022-07-16', '3733', '3733.33', '2022-06-16', 'On Process');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `loanstatus` varchar(255) NOT NULL,
  `savings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `middlename`, `dateofbirth`, `age`, `gender`, `province`, `municipality`, `barangay`, `email`, `password`, `contact`, `loanstatus`, `savings`) VALUES
(202051, 'Jomar', 'Bodino', 'Franscisco', '1996-04-18', '26 years old', 'Male', 'Catanduanes', 'San Miguel', 'Buhi', 'Jom@gmail.com', '', '09123456789', 'Finished', '700'),
(202057, 'Salvador', 'Tavera', 'Faustino', '1998-11-01', '23 years old', 'Male', 'Catanduanes', 'San Miguel', 'Pagsangahan', 'taverasalvador@gmail.com', '', '09123456789', 'Finished', '100'),
(202058, 'bryan', 'zuniga', 'vargas', '1999-05-01', '23 years old', 'Male', 'catanduanes', 'san andress', 'tagbacan', 'zunigabryan@gmail.com', '', '09123456789', 'Finished', '300'),
(202059, 'john ray', 'tebelin', 'oclares', '1998-11-03', '23 years old', 'Male', 'catanduanes', 'viga', 'soboc', 'ray@gmail.com', '', '09511443278', 'On Process', '25000'),
(202069, 'jom', 'bod', 'f', '1999-04-18', '23 years old', 'Male', 'cat', 'san', 'buhi', 'j@gmai.com', '', '091273916723', 'On Process', '50');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `userid`, `name`, `image`) VALUES
(21, '202051', '', 'abstract_audifonos_wallpaper_4k_hd.jpg'),
(22, '202058', '', '1125628.png'),
(23, '202057', '', '3.jpg'),
(24, '202059', '', '4.jpg'),
(25, '202061', '', 'alan_walker_4k.jpg'),
(26, '202069', '', 'hoodie_boy_with_powers_4k_hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `savings` varchar(255) NOT NULL,
  `withdrawdate` varchar(255) NOT NULL,
  `withdrawamount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `userid`, `lastname`, `firstname`, `middlename`, `dateofbirth`, `age`, `gender`, `barangay`, `municipality`, `province`, `email`, `contact`, `savings`, `withdrawdate`, `withdrawamount`) VALUES
(1015, '202061', 'bodino', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san miguel', 'catanduanes', 'jom123@gmail.com', '09123456789', '200', '2022-06-07', '500'),
(1016, '202057', 'Tavera', 'Salvador', 'Faustino', '1998-11-01', '23 years old', 'Male', 'Pagsangahan', 'San Miguel', 'Catanduanes', 'taverasalvador@gmail.com', '09123456789', '100', '2022-06-07', '500'),
(1017, '202058', 'zuniga', 'bryan', 'vargas', '1999-05-01', '23 years old', 'Male', 'tagbacan', 'san andress', 'catanduanes', 'zunigabryan@gmail.com', '09123456789', '300', '2022-06-07', '400'),
(1018, '202051', 'Bodino', 'Jomar', 'Franscisco', '1996-04-18', '26 years old', 'Male', 'Buhi', 'San Miguel', 'Catanduanes', 'Jom@gmail.com', '09123456789', '700', '2022-06-07', '500'),
(1019, '202051', 'Bodino', 'Jomar', 'Franscisco', '1996-04-18', '26 years old', 'Male', 'Buhi', 'San Miguel', 'Catanduanes', 'Jom@gmail.com', '09123456789', '700', '2022-06-07', '500'),
(1020, '202069', 'bod', 'jom', 'f', '1999-04-18', '23 years old', 'Male', 'buhi', 'san', 'cat', 'j@gmai.com', '091273916723', '50', '2022-06-08', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comaker`
--
ALTER TABLE `comaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanpayment`
--
ALTER TABLE `loanpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanplans`
--
ALTER TABLE `loanplans`
  ADD PRIMARY KEY (`loanplansid`);

--
-- Indexes for table `loantypes`
--
ALTER TABLE `loantypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanuserpayment`
--
ALTER TABLE `loanuserpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1027;

--
-- AUTO_INCREMENT for table `loanpayment`
--
ALTER TABLE `loanpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100033;

--
-- AUTO_INCREMENT for table `loanplans`
--
ALTER TABLE `loanplans`
  MODIFY `loanplansid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20215;

--
-- AUTO_INCREMENT for table `loantypes`
--
ALTER TABLE `loantypes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `loanuserpayment`
--
ALTER TABLE `loanuserpayment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202070;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
