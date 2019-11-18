-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 11:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `month` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`id`, `user_id`, `employee_id`, `reason`, `amount`, `month`, `created_at`, `updated_at`) VALUES
(1, '9', 'YTER79697', 'good job', 1200, '11', '2019-10-18 07:00:53', '2019-10-18 07:00:53'),
(2, '8', '6677', 'Papafololo', 10000, '9', '2019-10-18 07:04:29', '2019-10-18 07:04:29'),
(3, '8', '001', 'Improved sales', 2000, '10', '2019-10-18 07:11:48', '2019-10-18 07:11:48'),
(4, '8', '1003', 'Overtime', 3000, '10', '2019-10-18 08:53:46', '2019-10-18 08:53:46'),
(9, '9', 'NQCL03', 'hardwork', 2000, 'october', '2019-10-29 05:49:25', '2019-11-07 10:04:25'),
(13, '16', 'FL47', 'late work', 1000, '11/01/2019', '2019-11-07 10:31:37', '2019-11-07 10:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kra_pin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physical_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_of_employees` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `email`, `organization_name`, `kra_pin`, `physical_address`, `postal_address`, `phone`, `currency`, `info`, `num_of_employees`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '', 'xzy limited', '87989989', 'nairobi', '890909090', '0716029595', 'KES', 'blaaaaa', '51-100', '', '2019-09-25 08:24:37', '2019-09-25 08:24:37'),
(3, '1', 'kast@gmail.com', 'kast', '0896765', 'nairobi', '0887665', '076736566', 'USD', 'yetryteyr hryeruetreuyr uryueury', '1-10', '', '2019-09-25 10:07:43', '2019-09-25 10:07:43'),
(4, '1', 'testoz@gmailnk.com', 'test camp', 'AC8748378457983', 'nairobi', '905609', '071602959509890', 'EURO', 'jhfjdhjf jhkjhkfjdhkjf  ifdkufidufi', '11-50', '', '2019-09-25 10:28:45', '2019-09-25 10:28:45'),
(11, '8', 'admin@tanasuk.co.ke', 'Tanasuk Africa Test', 'A1234567890H', 'Senteu Plaza', '8902', '0700000000', 'KES', 'Design thinking the future.', '1-10', 'images/65289.png', '2019-09-30 08:48:48', '2019-11-05 12:16:02'),
(12, '14', 'testing1@mailinator.com', 'Testing', 'A0098765432', 'Senteu Plaza', 'P.O. Box 456798', '0713222610', 'KES', 'Not at all', '1-10', '', '2019-10-02 11:41:37', '2019-10-02 11:41:37'),
(13, '9', 'gregoecko@gmail.com', 'Fulani  International', '4555kui', 'nairobi', 'n98808', '071666567 89', 'KES', 'blaaa', '1-10', 'images/12855.jpg', '2019-10-13 23:40:00', '2019-11-05 11:30:55'),
(14, '10', 'resport@gmail.com', 'Resport Trading', 'P3344556677', 'Galana Plaza', 'P. O. Box 650098', '254731454545', 'KES', 'None', '1-10', '', '2019-10-28 08:18:12', '2019-10-28 08:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(12) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `emp_id` varchar(200) NOT NULL,
  `personal_relief` double DEFAULT NULL,
  `insurance_relief` double DEFAULT NULL,
  `pension_fund` double DEFAULT NULL,
  `hosp` double DEFAULT NULL,
  `occupier_interest` double DEFAULT NULL,
  `disability_excemption` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `nhif_deduction` double NOT NULL,
  `nssf_deduct` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `user_id`, `emp_id`, `personal_relief`, `insurance_relief`, `pension_fund`, `hosp`, `occupier_interest`, `disability_excemption`, `tax`, `nhif_deduction`, `nssf_deduct`, `created_at`, `updated_at`) VALUES
(2, '8', '6677', 10000, 234, 4566, 456, 67, 0, 10, 150, 30, '2019-10-05 05:21:17', '2019-10-05 05:21:17'),
(8, '9', '86586HJKHK', 1000, 1000, 1000, 1000, 1000, 1000, NULL, 1500, 1440, '2019-10-25 11:10:14', '2019-10-25 11:10:14'),
(12, '8', '0004', 100, 0, 0, 100, 0, 0, NULL, 0, 0, '2019-11-01 08:15:54', '2019-11-05 11:49:43'),
(13, '8', 'NQCL02', 200, 0, 0, 0, 50, 0, NULL, 1700, 720, '2019-11-01 08:16:37', '2019-11-07 10:11:51'),
(14, '10', 'NQCL03', 0, 0, 0, 0, 0, 0, NULL, 1700, 720, '2019-11-01 08:19:40', '2019-11-07 10:12:19'),
(15, '15', 'NQCL03', 0, 0, 0, 0, 0, 0, NULL, 1700, 720, '2019-11-05 09:27:49', '2019-11-07 10:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kra_pin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nssf` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhif` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employement_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_employment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taxsal` double DEFAULT NULL,
  `acc_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residential_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kin_first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `dob`, `gender`, `residence`, `id_number`, `kra_pin`, `nssf`, `nhif`, `marital_status`, `employee_number`, `job_title`, `employement_type`, `date_employment`, `department`, `region`, `salary`, `taxsal`, `acc_name`, `acc_number`, `bank_name`, `bank_branch`, `ns_1`, `ns_2`, `p_email`, `phone`, `postal_address`, `residential_address`, `official_email`, `official_phone`, `kin_first_name`, `kin_last_name`, `relation`, `kin_email`, `kin_phone`, `created_at`, `updated_at`) VALUES
(1, '5', 'ererte', 'rtrtr', 'rytyt', 'tytyt', 'male', 'non resident', 'tytyt7687677', '787878', '98989', '89898', 'single', '89898', '8989', 'Probation', '9898', 'accounts', 'site 1', '45656565', 0, '565ghghgh', 'hjhjhjh', 'hjhjh', 'hjhjh', 'nhif', 'nssf', 'hjhjh', 'hjhjh', 'jhjh', 'jhjh', '9898', '9090', 'tyty', 'yuyu', 'yuyu', 'yuyu', 'yuyu', '2019-10-01 07:23:34', '2019-10-01 07:23:34'),
(7, '14', 'Liz', 'to', 'Go', '12/12/1992', 'female', 'resident', '23456789', 'A000097564', '83492783934', '235247869', 'married', '1234', 'Senior senior', 'Consultant', '12/12/2012', 'sales', 'site 1', '400,000', 0, 'Liztogo', '92739649639629', 'NCBA', 'Yaya', 'nhif', 'nssf', 'liztogo@gmail.com', '078965432', '1234567', 'Mlolongo', 'liztogo@greenhouse.com', '098765235', 'Trying', 'to', 'Husband', 'husband@gmail.com', '075274927', '2019-10-02 11:46:54', '2019-10-02 11:46:54'),
(8, '16', 'Nilma', 'DIpak', 'Shah', '10/02/1992', 'female', 'resident', '30975108', 'A007204590T', '432562826', '3746334', 'single', 'FL45', 'Business Development Manager', 'Regular - Open', '01/11/2017', 'administration', 'head office', '100000', 0, 'Nilma DIpak Shah', '3800519442910', 'I& M Bank Limited', 'Eldama Ravine Branch', 'nhif', 'nssf', '-', '-', '-', '-', 'Nilma@gmail.com', '-', '-', '-', '-', '-', '-', '2019-10-03 09:15:37', '2019-10-03 11:34:59'),
(9, '16', 'Ann', 'Naishorua', 'Kitare', '15/02/1990', 'female', 'resident', '28732405', 'A006218655B', '2020056123', '7441598', 'married', 'FL04', 'Head of Customer Experience', 'Regular - Open', '01/11/2017', 'administration', 'head office', '100000', 0, 'Ann Naishorua Kitare', '-', 'Kenya Commercial Bank', '-', '-', '-', '-', '-', '-', '-', 'ann.kitare@fuzu.co.ke', '-', '-', '-', '-', '-', '-', '2019-10-03 09:34:01', '2019-10-03 11:20:00'),
(10, '16', 'Kelvin', 'Nyabwari', 'Mokaya', '10/02/1992', 'male', 'resident', '29132407', 'A006159946C', '2003861295', '4395535', 'married', 'FL06', 'Creative Content Specialist', 'Regular - Open', '01/11/2017', 'administration', 'head office', '50000', 0, 'Kelvin Nyabwari Mokaya', '-', 'Commercial Bank of Africa', '-', '-', '-', '-', '-', '-', '-', 'kelvin@fuzu.co,ke', '-', '-', '-', '-', '-', '-', '2019-10-03 09:48:51', '2019-10-03 11:20:29'),
(11, '15', 'Christopher', 'Rasugu', 'Obwogi', '26/12/1975', 'male', 'resident', '13601755', 'A002787903D', '87853930', '1162818', 'married', 'NQCL01', 'CEO', 'Regular - Open', '01/01/2016', 'administration', 'head office', '100000', 0, 'Obwogi Rasugu Christopher', '-', 'NIC Bank', '-', '720', '1700', '-', '0733893980', '-', '-', 'chris.rasugu@newquest.co.ke', '0733893980', '-', '-', '-', '-', '-', '2019-10-03 09:56:49', '2019-11-07 10:19:52'),
(12, '15', 'Judith', 'Monyangi', 'Maranga', '17/03/1978', 'female', 'resident', '21717042', 'A005075778E', '2022183715', '4355378', 'married', 'NQCL04', 'Administrator', 'Regular - Open', '01/01/2018', 'administration', 'head office', '100000', 0, 'Maranga Judith  Monyangi', '-', 'Kenya Commercial Bank', '-', '720', '1700', '-', '-', '-', '-', 'judith.maranga@newquest.co.ke', '--', '-', '-', '-', '-', '-', '2019-10-03 10:03:05', '2019-11-07 10:24:34'),
(13, '15', 'Snider', 'Mugese', 'Oganga', '04/12/1994', 'female', 'resident', '31573680', 'A007273706M', '2009855197', '5982012', 'married', 'FL03', 'Accountant', 'Regular - Open', '01/01/2018', 'accounts', 'head office', '50000', 0, 'Oganga Snider Mugese', '-', 'Kenya Commercial Bank', '-', '720', '1700', '-', '--', '-', '-', 'snider.mugese@newquest.co.ke', '-', '--', '-', '-', '-', '-', '2019-10-03 10:09:53', '2019-11-07 10:23:44'),
(14, '15', 'Dennis', '-', 'Angwenyi', '01/08/1995', 'male', 'resident', '30401766', 'A008598703G', '2007423002', '5512871', 'single', 'NQCL02', 'Accountant', 'Regular - Open', '01/01/2018', 'accounts', 'head office', '50000', 0, 'Angwenyi dennis', '100004291580', 'Stanbic Bank', 'westgate', '720', '1700', '-', '-', '-', '-', 'dennis.angwenyi@newquest.co.ke', '-', '-', '-', '-', '-', '-', '2019-10-03 10:16:31', '2019-11-07 10:20:27'),
(15, '16', 'Mark', 'Gitakaya', 'Njihia', '10/02/1990', 'male', 'resident', '28537376', 'A006838912E', '2024343353', '7441598', 'single', 'FL32', 'Software Developer', 'Regular - Open', '01/11/2017', 'administration', 'head office', '150000', 0, 'Mark Gitakaya Njihia', '-', 'NIC Bank', '-', 'nhif', 'nssf', '-', '-', '-', '-', 'mark@gmail.com', '-', '-', '-', '-', '-', '-', '2019-10-03 10:39:45', '2019-10-03 11:21:46'),
(16, '16', 'Evalyne', 'Nyakinyua', 'Murage', '10/02/1991', 'female', 'resident', '29820844', 'A010950050L', '2020046753', '7438284', 'married', 'FL01', 'Business Development Specialist', 'Regular - Open', '01/11/2017', 'administration', 'head office', '60000', 0, 'Evalyne Nyakinyua Murage', '-', 'Kenya Commercial Bank', '-', '-', '-', '-', '-', '-', '-', 'evalyn@gmail.com', '-', '-', '-', '-', '-', '-', '2019-10-03 10:49:25', '2019-10-03 11:19:13'),
(17, '16', 'Luizer', 'Makena', 'Njagi', '10/05/1992', 'female', 'resident', '27522490', 'A005489313V', '241553822', '3059840', 'married', 'FL10', 'Head of Business Development', 'Regular - Open', '01/11/2017', 'administration', 'head office', '150000', 0, 'Luizer Makena Njagi', '-', 'Stanbic Bank', '-', '-', '-', '-', '-', '-', '-', 'luizer@gmail.com', '-', '-', '-', '-', '-', '-', '2019-10-03 11:00:30', '2019-10-03 11:21:05'),
(18, '16', 'Nelly', 'Mumbua', 'Mutula', '15/02/1990', 'female', 'resident', '29545312', 'A006467335Z', '2007469496', '5523487', 'married', 'FL07', 'Head of HR', 'Regular - Open', '01/11/2017', 'administration', 'head office', '100000', 0, 'Nelly Mumbua Mutula', '-', 'Commercial Bank of Africa', '-', 'nhif', 'nssf', '-', '-', '-', '-', 'nelly@fuzu.co.ke', '-', '-', '-', '-', '-', '-', '2019-10-03 11:11:56', '2019-10-03 11:18:40'),
(19, '16', 'Ian', '-', 'Oscar', '15/02/1990', 'male', 'resident', '30956663', 'A007310304W', '2014927582', '6914441', 'single', 'FL16', 'Customer Success Specialist', 'Regular - Open', '01/11/2017', 'administration', 'head office', '52500', 0, 'IanOscar', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-03 11:15:46', '2019-10-03 11:15:46'),
(20, '16', 'Naomi', '-', 'Ndichu', '15/02/1990', 'female', 'resident', '31567573', 'A011718769Z', '2021666637', '7693459', 'married', 'FL17', 'Office Administrator', 'Regular - Open', '01/11/2017', 'administration', 'head office', '38000', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-03 11:25:14', '2019-10-03 11:25:14'),
(21, '16', 'James', 'Mutinda', 'Makau', '10/02/1992', 'male', 'resident', '33859274', 'A011258167Y', '2021845048', '7720085', 'married', 'FL37', 'Content Specialist', 'Regular - Open', '01/11/2017', 'administration', 'head office', '20000', 0, 'James Mutinda Makau', '1241220646', 'Kenya Commercial Bank', 'Thika Branch', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '--', '-', '-', '-', '2019-10-03 11:29:25', '2019-10-03 11:29:25'),
(22, '16', 'Ruth', '-', 'Oloo', '10/02/1992', 'female', 'resident', '27581825', 'A007410110R', '598298827', '4278039', 'married', 'FL26', 'Business Development Manager', 'Regular - Open', '01/11/2017', 'administration', 'head office', '85000', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-03 11:33:37', '2019-10-03 11:33:37'),
(23, '16', 'Grace', '-', 'Gatwiri', '10/05/1992', 'female', 'resident', '28558032', 'A009739273S', '2015110129', '8237425', 'married', 'FL28', 'Content Specialist Team Lead', 'Regular - Open', '01/11/2017', 'administration', 'head office', '28000', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-03 11:39:04', '2019-10-03 11:39:04'),
(24, '16', 'Sharon', 'Muchunu', 'Muthoni', '-', 'female', 'resident', '33516293', 'A011973397M', '2022833589', '7989845', 'married', 'FL29', 'Content Specialist', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1232526525', 'Kenya Commercial Bank', 'Naivasha', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:04:14', '2019-10-04 07:04:14'),
(25, '16', 'Edward', 'Mulinge', 'Musyoki', '-', 'male', 'resident', '33331741', 'A010275612E', '2023325495', '8448135', 'single', 'FL30', 'Content Specialist', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:07:56', '2019-10-04 07:07:56'),
(26, '16', 'Natalie', 'Mwende', 'Mbuvi', '-', 'female', 'resident', '31152161', 'A009720528T', '2006329946', '5357664', 'married', 'FL36', 'Talent Acquisition Specialist', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1005047397', 'NIC bank', 'Kenyatta Avenue', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:11:35', '2019-10-04 07:11:35'),
(27, '16', 'Diana', 'John', 'Anyango', '-', 'female', 'resident', '29881430', 'A007085651V', '567422828', '9771158', 'married', 'FL31', 'Talent Success Specialist', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1108444205000', 'COOPERATIVE BANK OF KENYA', 'NKRUMAH ROAD MOMBASA', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:17:00', '2019-10-04 07:17:00'),
(28, '16', 'Denis', '-', 'Mwiti', '-', 'male', 'resident', '32557021', 'A008128107K', '2017443994', '5036180', 'single', 'FL33', 'Content Specialist', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:19:46', '2019-10-04 07:19:46'),
(29, '16', 'Godfrey', 'otieno', 'Ettah', '-', 'male', 'resident', '28596182', 'A006829404D', '872904911', '3851308', 'single', 'FL39', 'Business Development Manager', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1116162413000', 'COOPERATIVE BANK OF KENYA', 'Kussco Upper-hill', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:23:40', '2019-10-04 07:23:40'),
(30, '16', 'Sarah', 'Awour', 'Afwende', '-', 'female', 'resident', '31067661', 'A008223327J', '2018723473', '7708083', 'single', 'FL40', 'Business Development Associate', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1220443859', 'Kenya Commercial Bank', 'priory house', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:27:51', '2019-10-04 07:27:51'),
(31, '16', 'Alex', 'Muthembwa', 'Matuku', '-', 'male', 'resident', '32067109', 'A007567080I', '2024878178', '8889593', 'married', 'FL42', 'Business Development Associate', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1226504426', 'Kenya Commercial Bank', 'Kipande branch', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:39:09', '2019-10-04 07:39:09'),
(32, '16', 'Consolata', 'Wanjiru', 'Mutahi', '-', 'female', 'resident', '32907125', 'A013516504N', '2027094716', '9934169', 'married', 'FL43', 'Content Specialist', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1222756714', 'Kenya Commercial Bank', 'Karen', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:46:19', '2019-10-04 07:46:19'),
(33, '16', 'Richard', 'Wakori', 'Irungu', '-', 'male', 'resident', '25762775', 'A004472538R', '952525917', '4296024', 'single', 'FL44', 'Business Development Manager', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '1257160095', 'Kenya Commercial Bank', 'Hurlingham', 'nhif', 'nssf', '-', '-', '--', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 07:50:06', '2019-10-04 07:50:06'),
(34, '16', 'Charles', 'Odhiambo', 'Obonyo', '-', 'male', 'resident', '24227395', 'A003353478X', '523496915', '3131837', 'single', 'FL45', '-', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '100004291567', 'Stanbic Bank', 'westgate', 'nhif', 'nssf', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-10-04 08:07:43', '2019-10-04 08:07:43'),
(35, '16', 'Patricia', 'Kamene', 'Awori', '-', 'female', 'resident', '30471385', 'A007180189R', '2017427417', '7265521', 'single', 'FL46', '-', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '-', '--', '-', '-', '-', '--', '-', '2019-10-04 08:12:01', '2019-10-04 08:12:01'),
(36, '16', 'Faith', 'Mercy', 'Wambui', '-', 'female', 'resident', '32948341', 'A008537775Q', '2026966243', '5815091', 'married', 'FL47', '-', 'Regular - Open', '-', 'administration', 'head office', '-', 0, '-', '-', '-', '-', 'nhif', 'nssf', '-', '-', '-', '-', '--', '-', '-', '-', '-', '-', '-', '2019-10-04 08:13:58', '2019-10-04 08:13:58'),
(49, '8', 'Brian', 'Mutoro', 'Ngaira', '01/01/1991', 'female', 'resident', '33490478', 'A12334567H', '116418', '869067', 'married', '00001', 'Social Media Manager & Content Creator', 'Regular - Open', '01/01/2019', 'administration', 'head office', '50000', 35000, NULL, NULL, NULL, NULL, NULL, NULL, 'brianngaish@gmail.com', '0724116418', 'Kahawa', 'Kahawa', 'brianngaish@gmail.com', '0724116418', NULL, NULL, NULL, NULL, NULL, '2019-10-18 11:49:31', '2019-10-18 11:49:31'),
(50, '8', 'Mutugi', 'Mnarobi', 'Mnarobi', '01/01/1980', 'female', 'non resident', '3636363636', 'A78920948G', '116418', '98765', 'married', '0003', 'Director', 'Regular - Open', '01/01/2019', 'administration', 'head office', '10000', 9000, NULL, NULL, NULL, NULL, NULL, NULL, 'mutugi@ihub.co.ke', '0724116418', 'Kahawa', 'Westlands', 'mutugi@ihub.co.ke', '0724116418', NULL, NULL, NULL, NULL, NULL, '2019-10-18 11:51:45', '2019-10-18 11:51:45'),
(51, '9', 'Gregoz', 'test', 'test', '10/25/2019', 'male', 'resident', '46456565', 'JHJH9880', 'HJG790880', 'GJGJ688697', 'married', '86586HJKHK', 'TESTDEV', 'Regular - Open', '77979', 'administration', 'head office', '80000', 56000, 'AST4887', '7668879', 'DTB', 'Nairobi', NULL, NULL, 'gregoecko@gmail.com', '0716029595', '089080', 'Nairobi', 'test@me.com', '07355444', 'test', 'test', 'test', 'test@f.com', '0000000', '2019-10-25 11:08:22', '2019-10-25 11:08:22'),
(52, '9', 'gaz', 'made', 'loot', '10/29/2019', 'male', 'resident', '2343445456', 'ADSD6464', 'NSKR67', 'DJHFDHFJDU958', 'single', '5666HGHHH', 'dEVOPS', '>Regular - Fixed term', '3545464', 'sales', 'head office', '100000', 70000, 'BNAK', 'BANK', 'TESTBANK', 'Nairobi', NULL, NULL, 'gaz@gmail.com', '8943059495', '00000', 'Nairobi', 'gaz2@k.com', '000000', 'test', 'test', 'test', 'test@f.com', '0000000', '2019-10-29 07:34:44', '2019-10-29 07:34:44'),
(53, '8', 'Amos', 'Korir', 'Korir', '10/20/1991', 'male', 'resident', '34940056', 'A030498595J', '87655', '84996', 'single', '0004', 'Developer', 'Consultant', '01/01/2019', 'sales', 'head office', '20000', 35000, NULL, NULL, NULL, NULL, NULL, NULL, 'amoskorir@gmail.com', '0711223344', '200', 'Juja', 'amoskorir@gmail.com', '0711223344', NULL, NULL, NULL, NULL, NULL, '2019-10-30 04:08:06', '2019-11-05 11:49:07'),
(54, '10', 'max', 'omosh', 'vaps', '1990/32/02', 'male', 'nairobi', '674736746', 'AC674756', '48578', '7797899', 'YES', '757585', 'Creator', 'permanent', '42362', 'digital', 'nairobi', '70000', NULL, NULL, 'as6776', 'equity', 'nairobi', '2000', '2300', 'naft@gmail.com', '7466578', 'none', 'nairobi', 'bla@me.com', '7464554', 'testo', 'testting', 'brother', 'test@email.com', '0', '2019-11-01 03:43:36', '2019-11-01 03:43:36'),
(55, '10', 'max', 'omosh', 'vaps', '1990/32/02', 'male', 'nairobi', '674736746', 'AC674756', '48578', '7797899', 'Single', '757585', 'Creator', 'permanent', '42362', 'digital', 'nairobi', '70000', NULL, NULL, 'as6776', 'equity8989', 'nairobi', '2000', '2300', 'nafgfgft@gmail.com', '7466578', 'none', 'nairobi', 'bla@me.com', '7464554', 'testo', 'testting', 'brother', 'test@email.com', '0', '2019-11-01 03:43:36', '2019-11-01 03:45:19'),
(60, '8', 'Liz', 'Kigambi', 'Kigambi', '10/01/2019', 'female', 'resident', '2367365', 'A85889799J', '657867', '37586', 'single', '0007', 'Designer', 'Regular - Open', '10/01/2019', 'administration', 'head office', '30000', 24000, NULL, NULL, NULL, NULL, NULL, NULL, 'liz@tanasuk.com', '0712345678', '3647', 'Kilimani', 'liz@tanasuk.co.ke', '0712345678', NULL, NULL, NULL, NULL, NULL, '2019-11-01 08:28:42', '2019-11-01 08:28:42'),
(61, '10', 'Faith', 'Moraa', 'Ngare', '10/07/1992', 'female', 'resident', '23456789', 'A09767686G', '1234', '4000', 'single', '0060', 'Marketer', 'Consultant', '07/10/2018', 'sales', 'head office', '250000', 175000, NULL, NULL, NULL, NULL, NULL, NULL, 'fmoraa@gmail.com', '0721351898', '1234567', 'Mlolongo', 'fmoraa@resport.co.ke', '0209876543', 'Trying', 'to', 'Husband', 'husband@gmail.com', '0789122466', '2019-11-01 08:30:46', '2019-11-01 08:30:46'),
(62, '8', 'Kennedy', 'Kirui', 'Kirui', '10/01/2019', 'male', 'non resident', '48599607', 'A75896707K', '8596978', '7489596', 'married', '0084', 'Team Lead', '>Regular - Fixed term', '10/01/2019', 'sales', 'site 1', '75000', 52500, 'KKriu', '758697008', 'NCBA', 'Senteu', NULL, NULL, 'krui@kirui.com', '078456788', '200', 'Lavington', 'krui@kituio.com', '08859967', 'Brother', 'Man', 'bro', 'bro@bro.com', '075596998', '2019-11-01 08:36:46', '2019-11-01 08:36:46'),
(63, '8', 'Kennedy', 'Kirui', 'Kirui', '10/01/2019', 'male', 'non resident', '48599607', 'A75896707K', '8596978', '7489596', 'married', '0084', 'Team Lead', '>Regular - Fixed term', '10/01/2019', 'sales', 'site 1', '75000', 52500, 'KKriu', '758697008', 'NCBA', 'Senteu', NULL, NULL, 'krui@kirui.com', '078456788', '200', 'Lavington', 'krui@kituio.com', '08859967', 'Brother', 'Man', 'bro', 'bro@bro.com', '075596998', '2019-11-01 08:37:00', '2019-11-01 08:37:00'),
(64, '10', 'Chris', 'Msando', 'Ogilvy', '04/07/1993', 'male', 'resident', '21345578', 'A08749397K', '6457', '9846', 'married', '00700', 'Accountant', '>Regular - Fixed term', '01/16/2018', 'accounts', 'head office', '450000', 315000, 'Chris Msando', '0917913696', 'NCBA', 'Yaya Centre', NULL, NULL, 'chrism@gmail.com', '0712444898', '23009', 'Caledonia', 'msando@resport.co.ke', '0206547712', 'Hellen', 'Ogilvy', 'Wife', 'wife@gmail.com', '076566234', '2019-11-01 08:38:55', '2019-11-01 08:38:55'),
(65, '9', 'mambo', 'tasto', 'brotha', '10/10/2019', 'female', 'resident', '000900', 'KY567898', 'NS4456767', 'NH57668', 'single', '9898090', 'TEST', 'Consultant', '11/17/2010', 'sales', 'head office', '120000', 84000, NULL, NULL, NULL, NULL, NULL, NULL, 'mambo', '0279889', 'non', 'nairobi', 'mambo@gmail.com', '000000', 'test', 'test', 'test', 'test@f.com', '000000', '2019-11-05 08:10:40', '2019-11-05 08:10:40'),
(66, '8', 'Chris', 'Rasugu', 'Rasugu', '11/01/2019', 'male', 'resident', '4895967', 'A59060708008H', '858697', '75896', 'married', '0005', 'Accountant', 'Regular - Open', '11/04/2019', 'administration', 'head office', '70000', 49000, NULL, NULL, NULL, NULL, NULL, NULL, 'chris@chris.com', '0712345678', '39596', 'Westlands', 'chris@chris.com', '0712345678', NULL, NULL, NULL, NULL, NULL, '2019-11-05 09:16:26', '2019-11-05 09:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_09_25_074314_camps', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taxsal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_relief` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_relief` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pension_fund` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupier_interest` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability_excemption` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhif_deduction` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nssf_deduct` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `month`, `salary`, `taxsal`, `personal_relief`, `insurance_relief`, `pension_fund`, `hosp`, `occupier_interest`, `disability_excemption`, `tax`, `nhif_deduction`, `nssf_deduct`, `emp_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(3, '8', 'November', '50000', '35000', '100', '0', '0', '100', '0', '0', NULL, '1200', '720', '0004', '0', 'paid', '2019-11-05 09:23:20', '2019-11-05 09:23:20'),
(4, '8', 'December', '50000', '35000', '100', '0', '0', '100', '0', '0', NULL, '1200', '720', '0004', '0', 'paid', '2019-11-05 09:23:32', '2019-11-05 09:23:32'),
(5, '8', 'August', '50000', '35000', '100', '0', '0', '100', '0', '0', NULL, '1200', '720', '0004', '0', 'paid', '2019-11-05 09:23:46', '2019-11-05 09:23:46'),
(6, '8', 'December', '50000', '35000', '100', '0', '0', '100', '0', '0', NULL, '1200', '720', '0004', '0', 'paid', '2019-11-05 09:24:32', '2019-11-05 09:24:32'),
(7, '8', 'November', '50000', '35000', '100', '0', '0', '100', '0', '0', NULL, '1200', '720', '0004', '0', 'paid', '2019-11-05 09:30:27', '2019-11-05 09:30:27'),
(8, '8', 'November', '50000', '35000', '100', '0', '0', '100', '0', '0', NULL, '1200', '720', '0004', '0', 'paid', '2019-11-05 09:47:04', '2019-11-05 09:47:04'),
(9, '9', 'November', '80000', '56000', '1000', '1000', '1000', '1000', '1000', '1000', NULL, '1500', '1440', '86586HJKHK', '1000', 'paid', '2019-11-05 11:28:46', '2019-11-05 11:28:46'),
(10, '9', 'November', '100000', '70000', '1000', '2000', '7000', '3000', '1000', '1000', NULL, '1700', '1440', '5666HGHHH', '1000', 'paid', '2019-11-05 11:28:46', '2019-11-05 11:28:46'),
(11, '8', 'November', '20000', '35000', '100', '0', '0', '100', '0', '0', NULL, '0', '0', '0004', '0', 'paid', '2019-11-05 11:50:28', '2019-11-05 11:50:28'),
(12, '8', 'November', '20000', '35000', '100', '0', '0', '100', '0', '0', NULL, '0', '0', '0004', '0', 'paid', '2019-11-05 12:13:21', '2019-11-05 12:13:21'),
(13, '8', 'November', '20000', '35000', '100', '0', '0', '100', '0', '0', NULL, '0', '0', '0004', '0', 'paid', '2019-11-05 12:13:40', '2019-11-05 12:13:40'),
(14, '8', 'November', '20000', '35000', '100', '0', '0', '100', '0', '0', NULL, '0', '0', '0004', '0', 'paid', '2019-11-05 12:16:36', '2019-11-05 12:16:36'),
(15, '15', 'October', '100000', '0', '0', '0', '400', '0', '0', '0', NULL, '1700', '720', 'NQCL01', '0', 'paid', '2019-11-07 10:07:33', '2019-11-07 10:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', '00000000000', 'admin@easypay.co.ke', NULL, '$2y$10$MuB4HWA0qvknFHUHi87WQ.McgWzb4IUyZjwZ1770m0UQllClgBtma', NULL, '1', NULL, '2019-09-25 06:32:51', '2019-09-25 06:32:51'),
(2, 'john mwendia', '075436463543654', 'john@gmail.com', NULL, '$2y$10$nQ3z.jP1sDyB4AlFeIkSDO.rmKS9u14kvpXAR2DSejBk4pVmG3DPG', NULL, '2', NULL, '2019-09-25 06:37:25', '2019-09-25 06:37:25'),
(3, 'Martin Mugo', '0716029595', 'mugo@gmail.com', NULL, '$2y$10$7dw7XPkVNO8uKnm82xU5LepS.uYdHoJTfpUDA7zFd7qfButcHGsXO', NULL, '2', NULL, '2019-09-25 11:43:47', '2019-09-25 11:43:47'),
(4, 'john mwendia', '0700349593', 'migos@gmail.com', NULL, '$2y$10$z93njhjEbKSrrwL39XfEdeYgloslxLL0YuqForTwILIJ7SkBVLB9u', NULL, '2', NULL, '2019-09-25 11:45:22', '2019-09-25 11:45:22'),
(5, 'Gregory Murunga', '0716029595', 'gregoecko545@gmail.com', NULL, '$2y$10$NUxBA1JGQAramBYadstDMOWyw..k6L4feMQ0eA0afzdF2KvRsgDGq', NULL, '2', NULL, '2019-09-26 04:51:37', '2019-09-26 04:51:37'),
(6, 'Gregory Murunga', '0716029595', 'gregoecko979@gmail.com', NULL, '$2y$10$UzUb64LaclhT3hAFbEsNz.2e3/UnAPAcLcL1Nn.NRG54g7UAKC/MO', NULL, '2', NULL, '2019-09-26 04:53:37', '2019-09-26 04:53:37'),
(8, 'Brian', '0724116418', 'brianngaish@gmail.com', '2019-09-26 05:43:56', '$2y$10$Xh.u50KEhCIJgUh22HQopu2taYC3R7f588SKCfiZ5qqLciVdTrmNW', 'cYMSGcT3OZNkJL4v4RJIhSYGhIQE7fVOpAgshLUmj8KTj2iufjzb3VrTCYkm', '2', NULL, '2019-09-26 05:43:15', '2019-10-28 07:15:57'),
(9, 'Gregory Murunga', '0716029595', 'gregoecko@gmail.com', '2019-09-26 05:55:44', '$2y$12$RpRRjTSUALovgTWMBWhDF.sHH6eZsYQeXInTZBelwsyl.kGOdcKku', '6cibDCWkiqgBIZRTXOaoE0hPcT5QkLzQkB01CvlP23Rr7BcOKmJEOokWZMyp', '2', 'profile/23749.png', '2019-09-26 05:53:58', '2019-11-06 06:36:33'),
(10, 'Wambui', '0713222610', 'wambui@ihub.co.ke', '2019-10-28 07:36:38', '$2y$10$cKkWlpMsiAVskumSbmcgxOJsLr32GTDt9NT.AGL3EQ6Fv/ZOHSl7q', 'pW3dsnYvCSGhqmqRG6kdWBTgSvzfvQjVUYn03eKvWm79HODcvsFnvUyEs6ef', '2', NULL, '2019-09-26 06:12:35', '2019-10-28 07:36:38'),
(11, 'Wambui', '0713222610', 'joysawambui@gmail.com', '2019-09-27 03:40:58', '$2y$10$DojrLe0jKUd1YfsUPE9MsO.lp0vP6XhinQASVlHtz1Lz5eQ8G.H22', NULL, '2', NULL, '2019-09-26 06:16:44', '2019-09-27 03:40:58'),
(12, 'Papafololo', '724116418', 'papafololo@mailinator.com', '2019-09-26 06:40:32', '$2y$10$SsBceVEmpEMhflpDXJJpTOX7EQ47TlKnq9K4.NKYkaql.QnuPYF6u', NULL, '2', NULL, '2019-09-26 06:40:10', '2019-09-26 06:40:32'),
(13, 'Tanasuk', '551551561', 'ngaira@ihub.co.ke', '2019-09-26 06:57:06', '$2y$10$YUUNFJgedR1Gehr3f4SbgeGyb0Hx6VgJmj/sWHlcFS9c6mft3dAW6', 'owXknU8RUQDAnojulyAGEsmB1dPwg9dS5oEfO3fT5zzFpXFvbs88uIrJ42Ag', '2', NULL, '2019-09-26 06:56:41', '2019-10-28 07:32:42'),
(14, 'Testing', '0713222610', 'testing1@mailinator.com', '2019-10-02 11:40:35', '$2y$10$HUEDNHaWOi6XuSWY/PAR8OTUqdoBZGkA2PnIIzC4ZXT9E7cryPG2y', NULL, '2', NULL, '2019-10-02 11:40:10', '2019-10-02 11:40:35'),
(15, 'Chris Rasugu', '0733893980', 'info@newquest.co.ke', '2019-10-02 13:57:47', '$2y$10$LAVUY1u8huV6SYsN2Icm7ux0iEkHQx3rsz1o0mz5pyP0.wXfqwQjK', NULL, '2', NULL, '2019-10-02 13:57:14', '2019-10-02 13:57:47'),
(16, 'Chris Rasugu', '0733893980', 'chris.rasugu@fuzu.com', '2019-10-03 03:27:10', '$2y$10$gmss0XvY5dIy3nB4TXhDguD29FEuVxxmh5I3gpGAcK77qVPejkUFi', NULL, '2', NULL, '2019-10-03 03:26:57', '2019-10-03 03:27:10'),
(17, 'matoke', '1234567', 'toneymutinda@gmail.com', NULL, '$2y$10$NZrfPM6Z9VxafkraXQDeNOY96n1j9.vb6FhaGbs2PqZib5RpNDY/m', NULL, '2', NULL, '2019-10-17 07:30:30', '2019-10-17 07:30:30'),
(18, 'Samoturi', '0712345678', 'samoturi@gmail.com', NULL, '$2y$10$ITzKYNu624e7OMGM/Je9Zu4N29zmK70bJYsYdM8f5bfvtUkZHp.ue', NULL, '2', NULL, '2019-10-24 16:01:20', '2019-10-24 16:01:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
