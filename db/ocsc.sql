-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 10:21 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `acc_no` varchar(20) NOT NULL,
  `acc_cust_id` varchar(15) NOT NULL,
  `acc_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `acc_cust_id`, `acc_status`) VALUES
('ACC559e4d945ea4f', 'cus-2015-0001', 'active'),
('ACC559f21c6181f7', 'cus-2015-0002', 'active'),
('ACC559f21f6c4790', 'cus-2015-0003', 'active'),
('ACC559f22598c5c0', 'cus-2015-0004', 'active'),
('ACC559f22c33bbf3', 'cus-2015-0005', 'active'),
('ACC559f23064ec61', 'cus-2015-0006', 'active'),
('ACC559f2351dffd9', 'cus-2015-0007', 'active'),
('ACC559f23837b416', 'cus-2015-0008', 'active'),
('ACC559f23b23c5f3', 'cus-2015-0009', 'active'),
('ACC559f23ddb2ff3', 'cus-2015-0010', 'active'),
('ACC559f4c31ec9b7', 'cus-2015-0011', 'active'),
('ACC559f4c32088c3', 'cus-2015-0011', 'active'),
('ACC559f4c3679d8b', 'cus-2015-0012', 'active'),
('ACC559f4c7879606', 'cus-2015-0013', 'active'),
('ACC559f4cc48d014', 'cus-2015-0014', 'active'),
('ACC559f4d1430dcf', 'cus-2015-0015', 'active'),
('ACC559f4d3cc1fd4', 'cus-2015-0016', 'active'),
('ACC559f4d6496e57', 'cus-2015-0017', 'active'),
('ACC559f4d95a596f', 'cus-2015-0018', 'active'),
('ACC559f4db404e76', 'cus-2015-0019', 'active'),
('ACC559f4dfd4b198', 'cus-2015-0020', 'active'),
('ACC559f4e384b18f', 'cus-2015-0021', 'active'),
('ACC559f4e62a1a1f', 'cus-2015-0022', 'active'),
('ACC559f4e9dd12ae', 'cus-2015-0023', 'active'),
('ACC559f4ed6d1ff4', 'cus-2015-0024', 'active'),
('ACC559f4f09f19e1', 'cus-2015-0025', 'active'),
('ACC559f4f4d31f5a', 'cus-2015-0026', 'active'),
('ACC559f4f81080bd', 'cus-2015-0027', 'active'),
('ACC559f4fdc96048', 'cus-2015-0028', 'active'),
('ACC559f501e11589', 'cus-2015-0029', 'active'),
('ACC559f5053f37bd', 'cus-2015-0030', 'active'),
('ACC559f50b738bb1', 'cus-2015-0031', 'active'),
('ACC559f50efa0d90', 'cus-2015-0032', 'active'),
('ACC559f518d82703', 'cus-2015-0033', 'active'),
('ACC559f51ba2bd08', 'cus-2015-0034', 'active'),
('ACC559f51fbe5be8', 'cus-2015-0035', 'active'),
('ACC559f52617e572', 'cus-2015-0036', 'active'),
('ACC559f5d793e378', 'cus-2015-0037', 'active'),
('ACC559f5daac9c54', 'cus-2015-0038', 'active'),
('ACC559f5e3d80003', 'cus-2015-0039', 'active'),
('ACC559f5e6a650e1', 'cus-2015-0040', 'active'),
('ACC559f5eba577fe', 'cus-2015-0041', 'active'),
('ACC559f5f09e2055', 'cus-2015-0042', 'active'),
('ACC559f5f486d988', 'cus-2015-0043', 'active'),
('ACC559f5f9e21c64', 'cus-2015-0044', 'active'),
('ACC559f654d939ba', 'cus-2015-0045', 'active'),
('ACC559f65b12a6e0', 'cus-2015-0046', 'active'),
('ACC559f65d2614f9', 'cus-2015-0047', 'active'),
('ACC559f65f9c8fb1', 'cus-2015-0048', 'active'),
('ACC559f667f4ceee', 'cus-2015-0049', 'active'),
('ACC559f66b9209ac', 'cus-2015-0050', 'active'),
('ACC559f6776834b9', 'cus-2015-0051', 'active'),
('ACC559f67a7847cc', 'cus-2015-0052', 'active'),
('ACC559f67c454b0d', 'cus-2015-0053', 'active'),
('ACC559f67fe81cbe', 'cus-2015-0054', 'active'),
('ACC559f68282c9f1', 'cus-2015-0055', 'active'),
('ACC559f684822ab5', 'cus-2015-0056', 'active'),
('ACC559f687212717', 'cus-2015-0057', 'active'),
('ACC559f68acc4334', 'cus-2015-0058', 'active'),
('ACC559f68e800c89', 'cus-2015-0059', 'active'),
('ACC559f69152ad95', 'cus-2015-0060', 'active'),
('ACC559f698b435a2', 'cus-2015-0061', 'active'),
('ACC559f875c46743', 'cus-2015-0062', 'active'),
('ACC559f87eacf3c7', 'cus-2015-0063', 'active'),
('ACC559f8817d6397', 'cus-2015-0064', 'active'),
('ACC559f8847772c8', 'cus-2015-0065', 'active'),
('ACC559f886a8aa4a', 'cus-2015-0066', 'active'),
('ACC559f88c33b55c', 'cus-2015-0067', 'active'),
('ACC559f8921e9fb0', 'cus-2015-0068', 'active'),
('ACC559f89586c2e4', 'cus-2015-0069', 'active'),
('ACC559f899445bfa', 'cus-2015-0070', 'active'),
('ACC559f89d1f1549', 'cus-2015-0071', 'active'),
('ACC559f8a03df22f', 'cus-2015-0072', 'active'),
('ACC559f8a2ac726c', 'cus-2015-0073', 'active'),
('ACC559f8a59b2cd5', 'cus-2015-0074', 'active'),
('ACC559f8abc038f2', 'cus-2015-0075', 'active'),
('ACC559f8af120dc7', 'cus-2015-0076', 'active'),
('ACC559f8b1f1e068', 'cus-2015-0077', 'active'),
('ACC559f8b4a1c0be', 'cus-2015-0078', 'active'),
('ACC559f8b7fdc202', 'cus-2015-0079', 'active'),
('ACC559f8c29c2966', 'cus-2015-0080', 'active'),
('ACC559f8c49035e5', 'cus-2015-0081', 'active'),
('ACC559f8e6775644', 'cus-2015-0082', 'active'),
('ACC559f8ed18e3e5', 'cus-2015-0083', 'active'),
('ACC559f8ef64c677', 'cus-2015-0084', 'active'),
('ACC559f8f7c0d5cd', 'cus-2015-0085', 'active'),
('ACC559f90364460e', 'cus-2015-0086', 'active'),
('ACC559f9064994d9', 'cus-2015-0087', 'active'),
('ACC559f90b154395', 'cus-2015-0088', 'active'),
('ACC559f90e3dc50d', 'cus-2015-0089', 'active'),
('ACC559f91313e99b', 'cus-2015-0090', 'active'),
('ACC559f9163c1b1b', 'cus-2015-0091', 'active'),
('ACC559f919fd8629', 'cus-2015-0092', 'active'),
('ACC559f91c3de78b', 'cus-2015-0093', 'active'),
('ACC559f922a96e0f', 'cus-2015-0094', 'active'),
('ACC559f925e2015a', 'cus-2015-0095', 'active'),
('ACC559f928a1b6a1', 'cus-2015-0096', 'active'),
('ACC559f92b672961', 'cus-2015-0097', 'active'),
('ACC559f93581d901', 'cus-2015-0098', 'active'),
('ACC559f93b414e80', 'cus-2015-0099', 'active'),
('ACC559f94bf80b94', 'cus-2015-0100', 'active'),
('ACC559f95467197d', 'cus-2015-0101', 'active'),
('ACC559f97d152699', 'cus-2015-0102', 'active'),
('ACC559f985bd3c72', 'cus-2015-0103', 'active'),
('ACC559f98f60536e', 'cus-2015-0104', 'active'),
('ACC559f993c4cb2f', 'cus-2015-0105', 'active'),
('ACC559f99769d0b9', 'cus-2015-0106', 'active'),
('ACC559f99de02c04', 'cus-2015-0107', 'active'),
('ACC559f9a3edeb73', 'cus-2015-0108', 'active'),
('ACC559f9a7b03f95', 'cus-2015-0109', 'active'),
('ACC559f9abd65a0f', 'cus-2015-0110', 'active'),
('ACC559f9b56b2c0c', 'cus-2015-0111', 'active'),
('ACC559f9bb981755', 'cus-2015-0112', 'active'),
('ACC559f9bee28909', 'cus-2015-0113', 'active'),
('ACC559f9c99e1cdb', 'cus-2015-0114', 'active'),
('ACC559f9de303db1', 'cus-2015-0115', 'active'),
('ACC559f9e713748d', 'cus-2015-0116', 'active'),
('ACC559f9ef4ebac3', 'cus-2015-0117', 'active'),
('ACC559f9f450e74b', 'cus-2015-0118', 'active'),
('ACC559f9f8b4f4a8', 'cus-2015-0119', 'active'),
('ACC559f9fd0cb1c5', 'cus-2015-0120', 'active'),
('ACC559fa04a243b3', 'cus-2015-0121', 'active'),
('ACC559fa09368246', 'cus-2015-0122', 'active'),
('ACC559fa0f38125d', 'cus-2015-0123', 'active'),
('ACC559fa14514214', 'cus-2015-0124', 'active'),
('ACC559fa1967d393', 'cus-2015-0125', 'active'),
('ACC559fa330e7388', 'cus-2015-0126', 'active'),
('ACC559fa3f423b99', 'cus-2015-0127', 'active'),
('ACC559fa43bf3a0a', 'cus-2015-0128', 'active'),
('ACC559fa55343199', 'cus-2015-0129', 'active'),
('ACC559fa5814b5a3', 'cus-2015-0130', 'active'),
('ACC559fa62e3193a', 'cus-2015-0131', 'active'),
('ACC559fa6b55bddb', 'cus-2015-0132', 'active'),
('ACC559fa6ecbd9e8', 'cus-2015-0133', 'active'),
('ACC559fa72647274', 'cus-2015-0134', 'active'),
('ACC559fa755e4ec1', 'cus-2015-0135', 'active'),
('ACC559fa78fc9e9f', 'cus-2015-0136', 'active'),
('ACC559fa7e16ac0b', 'cus-2015-0137', 'active'),
('ACC559fa8666b666', 'cus-2015-0138', 'active'),
('ACC559fa8c618285', 'cus-2015-0139', 'active'),
('ACC559fa935276fd', 'cus-2015-0140', 'active'),
('ACC559fa9eaeb69f', 'cus-2015-0141', 'active'),
('ACC559faa492edd7', 'cus-2015-0142', 'active'),
('ACC559faa8205a3b', 'cus-2015-0143', 'active'),
('ACC559fab611cf55', 'cus-2015-0144', 'active'),
('ACC559fabb9d2e0f', 'cus-2015-0145', 'active'),
('ACC559fac33a1318', 'cus-2015-0146', 'active'),
('ACC559fac790a92a', 'cus-2015-0147', 'active'),
('ACC559facb2627a8', 'cus-2015-0148', 'active'),
('ACC559fad0da05c1', 'cus-2015-0149', 'active'),
('ACC559fad5babeea', 'cus-2015-0150', 'active'),
('ACC559fad9669763', 'cus-2015-0151', 'active'),
('ACC560ec1f4ac601', 'cus-2015-0152', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `account_record`
--

CREATE TABLE IF NOT EXISTS `account_record` (
  `ar_no` varchar(20) NOT NULL,
  `ar_acc_no` varchar(20) NOT NULL,
  `ar_so_no` varchar(25) NOT NULL,
  `ar_balance` decimal(9,2) NOT NULL,
  `ar_status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_record`
--

INSERT INTO `account_record` (`ar_no`, `ar_acc_no`, `ar_so_no`, `ar_balance`, `ar_status`) VALUES
('AR55e94ef1d20a3', 'ACC559f4d3cc1fd4', 'so1555e94ef1c1c25', 31970.40, 'active'),
('AR55e9c5a4766b4', 'ACC559fad0da05c1', 'so1555e9c5a4657dc', 37699.20, 'active'),
('AR55e9f9f2ad0d3', 'ACC559f22598c5c0', 'so1555e9f9f2a5d29', 169433.60, 'active'),
('AR55ea6459d5455', 'ACC559f4d95a596f', 'so1555ea6459c50e5', 15790.50, 'active'),
('AR560d5267a590b', 'ACC559f22598c5c0', 'so15560d526793539', 140448.00, 'active'),
('AR560ecb4c89b89', 'ACC559e4d945ea4f', 'so15560ecb4c7888d', 471172.80, 'active'),
('AR56c6a3f8be872', 'ACC559e4d945ea4f', 'so1656c6a3f8a6eab', 46356.80, 'active'),
('AR56dceb1fe9bb8', 'ACC559f23b23c5f3', 'so1656dceb1fcfdb7', 114643.20, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `charge`
--

CREATE TABLE IF NOT EXISTS `charge` (
  `charge_id` varchar(25) NOT NULL,
  `charge_type` varchar(25) NOT NULL,
  `charge_measure` varchar(50) NOT NULL,
  `charge_rate` decimal(9,2) NOT NULL,
  `charge_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charge`
--

INSERT INTO `charge` (`charge_id`, `charge_type`, `charge_measure`, `charge_rate`, `charge_status`) VALUES
('ch-2015-001', 'To Pick-up', 'Mile', 50.00, 'active'),
('ch-2015-002', 'To Destination', 'Mile', 100.00, 'active'),
('ch-2015-003', 'Regional', 'Region I', 100.00, 'active'),
('ch-2015-004', 'Regional', 'Region II', 100.00, 'active'),
('ch-2015-005', 'Regional', 'Region III', 100.00, 'active'),
('ch-2015-007', 'Regional', 'Region IV-A', 80.00, 'active'),
('ch-2015-008', 'Regional', 'Region IV-B', 80.00, 'active'),
('ch-2015-009', 'Regional', 'Region V', 100.00, 'active'),
('ch-2015-010', 'Regional', 'Region VI', 110.00, 'active'),
('ch-2015-011', 'Regional', 'Region VII', 110.00, 'active'),
('ch-2015-012', 'Regional', 'Region VIII', 110.00, 'active'),
('ch-2015-013', 'Regional', 'Region IX', 150.00, 'active'),
('ch-2015-014', 'Regional', 'Region X', 150.00, 'active'),
('ch-2015-015', 'Regional', 'Region XI', 180.00, 'active'),
('ch-2015-016', 'Regional', 'Region XII', 180.00, 'active'),
('ch-2015-017', 'Regional', 'Region XIII', 150.00, 'active'),
('ch-2015-018', 'Regional', 'ARMM', 180.00, 'active'),
('ch-2015-019', 'Regional', 'CAR', 100.00, 'active'),
('ch1555d70df7bb3bf', 'To Pick-up', '[km] Special Client', 1000.00, 'active'),
('ch1555d70e285c9e3', 'To Destination', '[km] Special Client', 1010.00, 'active'),
('ch15560ec42e8e296', 'Regional', 'NCR', 100.00, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE IF NOT EXISTS `container` (
  `cont_no` varchar(25) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_rate` decimal(9,2) NOT NULL,
  `cont_height` varchar(10) NOT NULL,
  `cont_width` varchar(10) NOT NULL,
  `cont_description` varchar(100) NOT NULL,
  `cont_qty` int(2) NOT NULL,
  `cont_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`cont_no`, `cont_name`, `cont_rate`, `cont_height`, `cont_width`, `cont_description`, `cont_qty`, `cont_status`) VALUES
('co1555964bd9867d3', 'PirateCan', 1000.00, '20xcm', '20cmxcm', 'Can Hold The Magic Banana Itself', 14, 'active'),
('co1555964dcaae5d4', 'Blue Box', 25000.00, '20cm', '20cm', 'Can Call Any Landline No In London Area', 22, 'active'),
('co15560ec516aa1a9', 'Fire Fuel Container', 100.00, '20 Xc', '20cd', 'Can Hold 2000', 2, 'inactive'),
('co1656c637bcacacc', 'Thor''s Mighty', 100.00, '10 CM', '5 CM', 'Can Hold Very Many', 10, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` varchar(15) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_phone` varchar(15) NOT NULL,
  `cust_tel` varchar(15) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_add` varchar(100) NOT NULL,
  `comp_CPname` varchar(50) NOT NULL,
  `comp_CPphone` varchar(15) NOT NULL,
  `cust_type` varchar(10) NOT NULL,
  `cust_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_phone`, `cust_tel`, `cust_email`, `cust_add`, `comp_CPname`, `comp_CPphone`, `cust_type`, `cust_status`) VALUES
('cus-2015-0001', 'Dello Zaito', '0913-827-4190', '783-49-01', 'dello@zaito.com', 'Kahit Saan Sa Manila St.', '', '', 'Individual', 'active'),
('cus-2015-0002', 'Goku San', '0928-312-7493', '782-29-91', 'gokusan@yahoo.com', 'Tokyo, Japan', '', '', 'Individual', 'active'),
('cus-2015-0003', 'Gohan San', '0926-934-8201', '782-39-12', 'gohansan@yahoo.com', 'Takiyaki, Japan', '', '', 'Individual', 'active'),
('cus-2015-0004', 'Baki Kang', '0922-938-1989', '872-19-02', 'kangkang@gmail.com', 'Damuhan, Davao', '', '', 'Individual', 'active'),
('cus-2015-0005', 'Bob Uy', '0928-319-2840', '983-19-29', 'babuy@gmail.com', 'Putikan', '', '', 'Individual', 'active'),
('cus-2015-0006', 'Patrick Pink', '0999-283-1208', '321-02-93', 'patpink@yahoo.com', 'Bikini Botom', '', '', 'Individual', 'active'),
('cus-2015-0007', 'Anigma Sigma', '0923-123-1028', '234-10-92', 'anigma@yahoo.com', 'San Juan', '', '', 'Individual', 'active'),
('cus-2015-0008', 'Smug Las', '0923-112-3093', '827-10-90', 'smuglas@yahoo.com', 'Tarlac', '', '', 'Individual', 'active'),
('cus-2015-0009', 'Abra Him', '0928-371-8291', '672-39-01', 'abrakadabra@yahoo.com', 'Nueva Ecija', '', '', 'Individual', 'active'),
('cus-2015-0010', 'Loonie Tunes', '0928-128-3789', '293-81-02', 'loonietunes@gmail.com', 'Davao', '', '', 'Individual', 'active'),
('cus-2015-0011', 'Shernan Nan', '0928-312-3240', '123-02-83', 'shernan@yahoo.com', 'Bulacan', '', '', 'Individual', 'active'),
('cus-2015-0012', 'Shernan Nan', '0928-312-3240', '123-02-83', 'shernan@yahoo.com', 'Bulacan', '', '', 'Individual', 'inactive'),
('cus-2015-0013', 'Tipsy Diego', '0982-723-1234', '238-01-92', 'tipsydiego@gmail.com', 'Quezon', '', '', 'Individual', 'active'),
('cus-2015-0014', 'Rapido Domingo', '0923-142-9223', '231-94-90', 'rapigo@gmai.com', 'Rizal', '', '', 'Individual', 'active'),
('cus-2015-0015', 'Garen Strong', '0938-219-2824', '235-82-80', 'garens@yahoo.com', 'Batangas', '', '', 'Individual', 'active'),
('cus-2015-0016', 'Master Yi', '0923-128-3903', '782-39-19', 'masteryi@garena.com', 'Quezon City', '', '', 'Individual', 'active'),
('cus-2015-0017', 'Annie Mal', '0923-123-3849', '230-12-99', 'annie@gmail.com', 'Negros', '', '', 'Individual', 'active'),
('cus-2015-0018', 'Heimer Dinger', '0923-214-9123', '159-29-30', 'heimerdinger@gmail.com', 'Tanay', '', '', 'Individual', 'active'),
('cus-2015-0019', 'Captain Teemo', '0999-231-2392', '231-02-30', 'teemo@yahoo.com', 'Ilocos Sur', '', '', 'Individual', 'active'),
('cus-2015-0020', 'Darius Maryosep', '0936-923-0192', '523-20-19', 'darius@gmail.com', 'Bataan', '', '', 'Individual', 'active'),
('cus-2015-0021', 'Zing Ha', '0935-293-1902', '882-93-10', 'zingha@gmail.com', 'Dipolog', '', '', 'Individual', 'active'),
('cus-2015-0022', 'Ziggs Zaggs', '0947-290-3820', '837-10-92', 'ziggs@gmail.com', 'Butuan', '', '', 'Individual', 'active'),
('cus-2015-0023', 'Pant Heon', '0923-128-4923', '892-30-10', 'pantheon@gmail.com', 'Palawan', '', '', 'Individual', 'active'),
('cus-2015-0024', 'Ekko Rosales', '0923-982-0912', '728-30-10', 'ekkoros@gmail.com', 'Cebu', '', '', 'Individual', 'active'),
('cus-2015-0025', 'Ashe Tsing', '0947-290-3192', '923-19-20', 'ashetsing@yahoo.com', 'Babuyan', '', '', 'Individual', 'active'),
('cus-2015-0026', 'Urgot Tohell', '0912-902-3109', '213-09-23', 'urgotto@yahoo.com', 'Spratly', '', '', 'Individual', 'active'),
('cus-2015-0027', 'Tris Tana', '0922-308-2848', '231-82-89', 'tristana@gmai.com', 'Cagayan', '', '', 'Individual', 'active'),
('cus-2015-0028', 'Lux Kas', '0921-827-3910', '876-23-98', 'luxkas@yahoo.com', 'Laguna', '', '', 'Individual', 'active'),
('cus-2015-0029', 'Diana Zobel', '0932-399-2389', '672-09-01', 'dianzob@hotmail.com', 'Pateros', '', '', 'Individual', 'active'),
('cus-2015-0030', 'Syndra Cula', '0923-839-2912', '827-01-29', 'syndracula@lol.com', 'Leyte', '', '', 'Individual', 'active'),
('cus-2015-0031', 'Zed Rick', '0923-781-3290', '213-83-09', 'z3dr1ck0920@yahoo.com', 'Muntinlupa', '', '', 'Individual', 'active'),
('cus-2015-0032', 'Riven Dor', '0912-324-9120', '123-93-04', 'rivendor@gmail.com', 'Pangasinan', '', '', 'Individual', 'active'),
('cus-2015-0033', 'Trynda Mere', '0942-123-2351', '283-12-31', 'tryndamere@lol.com', 'Tawi-Tawi', '', '', 'Individual', 'active'),
('cus-2015-0034', 'Lee Sin', '0923-823-8123', '982-39-12', 'leesin@lol.com', 'Cabanatuan', '', '', 'Individual', 'active'),
('cus-2015-0035', 'Jinks Pakyaw', '0922-878-6671', '928-31-02', 'jinks@yahoo.com', 'General Santos', '', '', 'Individual', 'active'),
('cus-2015-0036', 'Miss Fortune', '0923-212-3982', '130-23-92', 'missfortune@lol.com', 'Pampanga', '', '', 'Individual', 'active'),
('cus-2015-0037', 'Ezreal Pasta', '0973-923-8012', '231-20-30', 'ezrealpasta@yahoo.com', 'Manila', '', '', 'Individual', 'active'),
('cus-2015-0038', 'Kalista Mad', '0922-879-8409', '872-90-12', 'kalistam29@gmail.com', 'Sta. Mesa', '', '', 'Individual', 'active'),
('cus-2015-0039', 'Nasus Uka', '0912-393-8487', '654-23-92', 'nasus9@yahoo.com', 'Malabon', '', '', 'Individual', 'active'),
('cus-2015-0040', 'Jax Giant', '0942-902-8310', '782-90-19', 'jaxgiant@gmail.com', 'Taguig', '', '', 'Individual', 'active'),
('cus-2015-0041', 'Quinn Tas', '0999-828-3791', '989-09-29', 'quinntas@gmail.com', 'Masbate', '', '', 'Individual', 'active'),
('cus-2015-0042', 'Morgana Kumain', '0922-836-6170', '562-39-10', 'morganakain@yahoo.com', 'Pasig', '', '', 'Individual', 'active'),
('cus-2015-0043', 'Nautilus Kaw', '0907-920-3912', '982-09-01', 'nautilus20@hotmail.com', 'Maragundun', '', '', 'Individual', 'active'),
('cus-2015-0044', 'Sona Eclipse', '0910-092-9030', '823-01-92', 'sonaeclipse@yahoo.com', 'Cavite', '', '', 'Individual', 'active'),
('cus-2015-0045', 'Aatrox Machine', '0923-823-0192', '383-21-02', 'aatroxmachine@hotmail.com', 'Calamba', '', '', 'Individual', 'active'),
('cus-2015-0046', 'Kennen Babuy', '0922-897-3784', '298-28-38', 'kennen@yahoo.com', 'Dumaguete', '', '', 'Individual', 'active'),
('cus-2015-0047', 'Rammus Lim', '0925-023-0912', '592-83-09', 'rammuslim@gmail.com', 'Paete', '', '', 'Individual', 'active'),
('cus-2015-0048', 'Gangplank Ton', '0921-923-7278', '183-74-89', 'gangplank@yahoo.com.ph', 'Leyte', '', '', 'Individual', 'active'),
('cus-2015-0049', 'Vel''Koz Tomer', '0926-990-1029', '482-31-90', 'velkoztomer@yahoo.com', 'Mabitac', '', '', 'Individual', 'active'),
('cus-2015-0050', 'Blitz Crank', '0999-283-8178', '392-97-48', 'blitzcrank@lol.com', 'Boni', '', '', 'Individual', 'active'),
('cus-2015-0051', 'Lucian Cian', '0929-109-2837', '723-81-80', 'luciancian@gmail.com', 'Mabalacat', '', '', 'Individual', 'active'),
('cus-2015-0052', 'Jimmy Palapag', '0912-293-9821', '690-28-39', 'jimmy03@gmail.com', 'Quezon City', '', '', 'Individual', 'active'),
('cus-2015-0053', 'Jayson Castrol', '0928-897-2763', '792-69-10', 'jayson17@yahoo.com', 'Valenzuela City', '', '', 'Individual', 'active'),
('cus-2015-0054', 'Kelly-Kelly Willliams', '0998-382-7819', '875-25-91', 'kellywilliams21@yahoo.com', 'Bulacan', '', '', 'Individual', 'active'),
('cus-2015-0055', 'Aaron Abante', '0921-923-7786', '872-38-91', 'aaronabante@gmail.com', 'Makati', '', '', 'Individual', 'active'),
('cus-2015-0056', 'Ryan Bata Reyes', '0925-982-7391', '723-91-60', 'ryanreyes10@yahoo.com', 'Morong', '', '', 'Individual', 'active'),
('cus-2015-0057', 'Jay Washington DC', '0938-267-6172', '725-38-10', 'jaywash@gmail.com', 'Camarines Sur', '', '', 'Individual', 'active'),
('cus-2015-0058', 'Harvey Chicken Carey', '0928-712-9893', '528-31-80', 'harveycarry@yahoo.com.ph', 'Olongapo', '', '', 'Individual', 'active'),
('cus-2015-0059', 'Larry Fonenaria', '0912-397-2739', '623-81-87', 'larry12@gmail.com', 'Malabon', '', '', 'Individual', 'active'),
('cus-2015-0060', 'Willie Revimiller', '0928-120-8312', '528-31-87', 'willie11@yahoo.com', 'Cainta', '', '', 'Individual', 'active'),
('cus-2015-0061', 'Ivan Johnson Powder', '0922-093-8273', '393-82-89', 'ivanjohnson@gmail.com', 'Hulo', '', '', 'Individual', 'active'),
('cus-2015-0062', 'Paul Leebag', '0923-812-9300', '923-98-10', 'paulleebag@yahoo.com', 'Marinduque', '', '', 'Individual', 'active'),
('cus-2015-0063', 'Gabe Flywood', '0921-288-9312', '923-18-28', 'gabeflywood@gmail.com', 'Luneta', '', '', 'Individual', 'active'),
('cus-2015-0064', 'Bobbu Belga', '0923-188-0329', '381-92-93', 'bobbubelga@yahoo.com', 'Tondo', '', '', 'Individual', 'active'),
('cus-2015-0065', 'Jeff Chakit Chan', '0939-291-2831', '923-91-90', 'jeff16@gmail.com', 'Taytay', '', '', 'Individual', 'active'),
('cus-2015-0066', 'Chris Tiutiu', '0923-981-9203', '923-18-09', 'chris_17@yahoo.com', 'Pandakan', '', '', 'Individual', 'active'),
('cus-2015-0067', 'Jr Pinyahan', '0999-238-1273', '239-10-23', 'pinyahan@yahoo.com', 'Dagupan', '', '', 'Individual', 'active'),
('cus-2015-0068', 'Raymond Asaan', '0910-923-8237', '927-36-10', 'raymond57@gmail.com', 'Tuguegarao', '', '', 'Individual', 'active'),
('cus-2015-0069', 'Ty Tang Orange', '0928-391-8230', '293-19-20', 'tytangorange@yahoo.com', 'Marikina', '', '', 'Individual', 'active'),
('cus-2015-0070', 'Jeric Tenga', '0931-239-1237', '929-31-77', 'jerictenga@yahoo.com', 'Romblon', '', '', 'Individual', 'active'),
('cus-2015-0071', 'Mark Bakokang', '0999-238-1293', '029-38-12', 'markoakang@gmail.com', 'Bohol', '', '', 'Individual', 'active'),
('cus-2015-0072', 'Marc Pingrisk', '0923-929-9019', '927-37-81', 'mark_15@yahoo.com', 'Aklan', '', '', 'Individual', 'active'),
('cus-2015-0073', 'James Yuck', '0999-231-2393', '283-81-09', 'jamesyuck@gmail.com', 'Tarlac', '', '', 'Individual', 'active'),
('cus-2015-0074', 'Peter June Singhot', '0923-818-2389', '283-19-08', 'peterjune@yahoo.com', 'Cebu', '', '', 'Individual', 'active'),
('cus-2015-0075', 'Justin Meldown', '0917-293-1823', '283-18-72', 'justinmelt@yahoo.com', 'Capiz', '', '', 'Individual', 'active'),
('cus-2015-0076', 'Joe Timang', '0923-129-3891', '283-12-83', 'joejoejoe@yahoo.com', 'Surigao', '', '', 'Individual', 'active'),
('cus-2015-0077', 'Mark Corona', '0992-830-2138', '273-61-87', 'markcorona@yahoo.com', 'Cardona', '', '', 'Individual', 'active'),
('cus-2015-0078', 'Asi Taukaba', '0927-192-8381', '758-37-48', 'asitaukaba@yahoo.com', 'Navotas', '', '', 'Individual', 'active'),
('cus-2015-0079', 'Japeth Agila', '0923-717-2898', '824-89-39', 'lipadlipad@yahoo.com', 'Cataduanes', '', '', 'Individual', 'active'),
('cus-2015-0080', 'Jc Utal', '0923-821-8389', '873-47-81', 'jcutal@gmail.com', 'Pasig', '', '', 'Individual', 'active'),
('cus-2015-0081', 'Chico Hinete', '0923-192-8312', '747-38-91', 'chicohinete@yahoo.com', 'San Lazaro', '', '', 'Individual', 'active'),
('cus-2015-0082', 'Paulo Hubade', '0923-190-2390', '972-36-17', 'paulohubad@yahoo.com', 'Mindoro', '', '', 'Individual', 'active'),
('cus-2015-0083', 'Terrence Romeogioh', '0925-938-4812', '823-19-82', 'terrence@yahoo.com', 'Bacolod', '', '', 'Individual', 'active'),
('cus-2015-0084', 'Stanley Pringles', '0974-656-1782', '238-19-23', 'pringles03@yahoo.com', 'Cubao', '', '', 'Individual', 'active'),
('cus-2015-0085', 'James Garden', '0923-182-7371', '723-61-27', 'jamesgarden@yahoo.com', 'Nueva Viscaya', '', '', 'Individual', 'active'),
('cus-2015-0086', 'Librun Jimms', '0987-263-6128', '823-67-17', 'librunjimms@yahoo.com', 'Pulilan', '', '', 'Individual', 'active'),
('cus-2015-0087', 'Kobe Bayan', '0922-939-0127', '283-92-10', 'kobebayan@gmail.com', 'Manila', '', '', 'Individual', 'active'),
('cus-2015-0088', 'Rajan Rondodo', '0928-371-2939', '273-78-12', 'rajanrondodo@gmail.com', 'Makati', '', '', 'Individual', 'active'),
('cus-2015-0089', 'Kevin Lovie Poe', '0999-823-1237', '823-12-87', 'kevinloviepoe@yahoo.com', 'Marikina', '', '', 'Individual', 'active'),
('cus-2015-0090', 'Peter Panis', '0923-812-8393', '238-91-28', 'peterpanis@yahoo.com', 'Caloocan', '', '', 'Individual', 'active'),
('cus-2015-0091', 'Ray Allentong', '0923-182-8389', '726-38-71', 'rayallentong@yahoo.com', 'Palawan', '', '', 'Individual', 'active'),
('cus-2015-0092', 'Kaarl Tumalone', '0918-283-7126', '872-37-19', 'kaarltumalone@gmail.com', 'San Juan', '', '', 'Individual', 'active'),
('cus-2015-0093', 'Tony Barker', '0999-231-6238', '231-87-28', 'tonybarker@gmail.com', 'Mandaluyong', '', '', 'Individual', 'active'),
('cus-2015-0094', 'Kaway Leonard', '0912-391-2387', '283-12-32', 'kawayleonard@gmail.com', 'Pasig', '', '', 'Individual', 'active'),
('cus-2015-0095', 'Tim Dunkin', '0927-381-2731', '236-71-87', 'timduckin21@yahoo.com', 'Malabon', '', '', 'Individual', 'active'),
('cus-2015-0096', 'Manukan Ginobili', '0999-239-1278', '278-54-89', 'manukanginobili@gmail.com', 'Navotas', '', '', 'Individual', 'active'),
('cus-2015-0097', 'Jeremy Linta', '0988-238-1828', '274-89-39', 'jeremy17@yahoo.com', 'Nasugbu', '', '', 'Individual', 'active'),
('cus-2015-0098', 'Stephen Pork Curry', '0912-317-9239', '324-71-28', 'stephen30@yahoo.com', 'Bataan', '', '', 'Individual', 'active'),
('cus-2015-0099', 'Kyrie Irvingving', '0917-283-6172', '478-57-81', 'kyrie02@yahoo.com', 'Olongapo', '', '', 'Individual', 'active'),
('cus-2015-0100', 'Larry Birdie', '0927-912-0310', '823-87-12', 'larrybirdie@gmail.com', 'Manila', '', '', 'Individual', 'active'),
('cus-2015-0101', 'Shaquille Banil', '0926-281-2783', '893-89-17', 'shaquille34@yahoo.com', 'Aklan', '', '', 'Individual', 'active'),
('cus-2015-0102', 'Trumporurot Inc.', '0999-231-8238', '934-81-90', 'email@trumpururot.com', 'Manila', 'Puru Rot', '8293-109-2983', 'Company', 'active'),
('cus-2015-0103', 'Shellaine Corporation', '0912-373-8419', '823-71-22', 'shellaine@gmail.com', 'Pasig', 'Shiela Laine', '0923-929-3812', 'Company', 'active'),
('cus-2015-0104', 'Universal Robinhood Inc.', '0999-273-1628', '623-81-81', 'robinhood@gmail.com', 'Makati', 'Robin Hood', '0982-398-19__', 'Company', 'active'),
('cus-2015-0105', 'Baso Inc', '0937-281-8920', '823-81-28', 'baso@baso.com', 'Marikina', 'Jimmy Perez', '0923-823-912_', 'Company', 'active'),
('cus-2015-0106', 'Papilan Corporation', '0923-719-2298', '798-31-92', 'papilan@gmail.com', 'Laguna', 'James Reyes', '0928-318-7212', 'Company', 'active'),
('cus-2015-0107', 'DVD-R Queen Inc.', '0917-283-6182', '738-18-23', 'dvdr@dvdrqueen.com', 'Manila', 'Kristine Galit', '0999-239-1290', 'Company', 'active'),
('cus-2015-0108', 'Ballpenink Inc.', '0999-371-2783', '274-19-23', 'email@ballpenink.com', 'Pasig', 'Otap Marahas', '0999-283-1231', 'Company', 'active'),
('cus-2015-0109', 'Glassy Inc.', '0918-273-7168', '231-27-83', 'glassy@gmail.com', 'Makati', 'Yapit Santos', '0929-317-2792', 'Company', 'active'),
('cus-2015-0110', 'Rubber Dubber Corp.', '0915-892-9190', '263-61-82', 'rubberdubber@yahoo.com', 'Batangas', 'Duffy Ducky', '0922-389-1726', 'Company', 'active'),
('cus-2015-0111', 'Tapperwarehouse Inc.', '0919-782-3812', '727-81-98', 'tapperwarehouse@gmail.com', 'Marikina', 'Kaloy Hernan', '0999-231-2323', 'Company', 'active'),
('cus-2015-0112', 'PantShirts Inc.', '0916-928-3127', '283-78-48', 'pantshirts@gmail.com', 'Santolan', 'Elmer Opas', '0917-823-6167', 'Company', 'active'),
('cus-2015-0113', 'Underwhere Corp.', '0911-223-8921', '737-81-83', 'underwhere@yahoo.com', 'Batanes', 'Inday Iwan', '0931-234-2322', 'Company', 'active'),
('cus-2015-0114', 'Learn Innovation Inc.', '0918-273-6126', '348-12-31', 'email@innovation.com', 'Malabon', 'Rap Fwentas', '0999-231-2312', 'Company', 'active'),
('cus-2015-0115', 'Supplies School Inc.', '0918-725-3561', '278-31-27', 'suppliesforschool@gmail.com', 'Makati', 'Alex Barram', '0912-849-3910', 'Company', 'active'),
('cus-2015-0116', 'Gadgets Strong Corp', '0916-237-8128', '273-18-23', 'gadgetsstrong@gmail.com', 'Davao', 'Narding Sesame', '0916-823-8912', 'Company', 'active'),
('cus-2015-0117', 'Slice And Slice Corporation', '0999-273-1239', '891-23-89', 'sliceandslice@gmail.com', 'Cebu', 'Karding Namote', '0918-236-7156', 'Company', 'active'),
('cus-2015-0118', 'Plastic Warehouse Inc.', '0912-317-8273', '712-73-17', 'plasticwarehouse@yahoo.com', 'Pasig', 'Jeff Lim', '0912-312-4532', 'Company', 'active'),
('cus-2015-0119', 'Steel Rough Inc.', '0923-819-2839', '217-83-89', 'steelrough@gmail.com', 'General Santos', 'Pektus Uy', '0915-236-7127', 'Company', 'active'),
('cus-2015-0120', 'Train Train Services', '0931-239-1902', '283-81-92', 'train@trainservices.com', 'Aklan', 'Domeng Sitow', '0923-192-3812', 'Company', 'active'),
('cus-2015-0121', 'Pizzarap Inc.', '0907-821-8319', '821-39-10', 'email@pizzarap.com', 'Cebu', 'Maila Son', '0912-931-9201', 'Company', 'active'),
('cus-2015-0122', 'LBM Inc.', '0919-273-7812', '721-39-81', 'emailus@lbm.com', 'Masbate', 'Chris Tine', '0918-263-1782', 'Company', 'active'),
('cus-2015-0123', 'Jewelries Ring', '0919-273-1923', '821-31-29', 'jewelriesring@yahoo.com', 'Surigao', 'Myla Kwagoes', '0912-931-8231', 'Company', 'active'),
('cus-2015-0124', 'Paper Clips Inc.', '0912-391-2831', '971-23-81', 'paperclips@gmail.com', 'Navotas', 'Preg Stoney', '0912-361-2831', 'Company', 'active'),
('cus-2015-0125', 'Rock Cafehan Inc', '0919-627-3189', '712-83-19', 'rockcafehan@yahoo.com', 'Bataan', 'Gardo Julan', '0912-637-8192', 'Company', 'active'),
('cus-2015-0126', 'Cellphones Signal Inc.', '0912-831-2390', '712-38-18', 'cellphonesignal@gmail.com', 'Masbate', 'Paul Krew', '0912-738-1129', 'Company', 'active'),
('cus-2015-0127', 'Books Help Inc.', '0919-823-8128', '271-39-12', 'bookshelp@yahoo.com', 'Morong', 'Brando', '0912-312-7481', 'Company', 'active'),
('cus-2015-0128', 'Class Wood Inc.', '0912-631-8278', '123-98-12', 'classwood@gmail.com', 'Batanes', 'Erick', '0912-119-2839', 'Company', 'active'),
('cus-2015-0129', 'ShirtsPants Inc', '0923-891-8231', '127-31-23', 'shirtspants@yahoo.com', 'Capiz', 'Karen', '0912-361-2781', 'Company', 'active'),
('cus-2015-0130', 'Kalderos Inc.', '0919-283-1238', '172-38-91', 'kalderos@yahoo.com', 'Davao', 'Eman', '0912-731-9231', 'Company', 'active'),
('cus-2015-0131', 'Kevin Furnitures', '0919-238-7172', '128-73-12', 'kevinfurnitures@yahoo.com', 'Sampaloc', 'Cruz', '0912-783-1231', 'Company', 'active'),
('cus-2015-0132', 'Pets Lovers Inc.', '0929-172-7831', '187-23-78', 'petslovers@gmail.com', 'Manila', 'Ana', '0935-891-2318', 'Company', 'active'),
('cus-2015-0133', 'Notebooksupplies Corporation', '0919-283-1628', '718-23-61', 'notebooksupplies@yahoo.com', 'Santolan', 'Omeng', '0918-238-1238', 'Company', 'active'),
('cus-2015-0134', 'Chairs Woodies Inc.', '0923-923-1982', '712-38-19', 'chairswoodies@gmail.com', 'Romblon', 'Bella', '0919-273-7218', 'Company', 'active'),
('cus-2015-0135', 'Tables Wood Inc.', '0919-273-1239', '218-38-12', 'tableswood@yahoo.com', 'Marinduque', 'Rico', '0909-278-1828', 'Company', 'active'),
('cus-2015-0136', 'Clothing Fashion', '0999-127-3198', '812-38-91', 'clothingfashion@gmail.com', 'Malabon', 'Rap', '0917-293-1923', 'Company', 'active'),
('cus-2015-0137', 'Brando Appliances Inc', '0912-992-8391', '123-78-12', 'brando_appliances@yahoo.com', 'Palawan', 'Mark', '0932-891-2783', 'Company', 'active'),
('cus-2015-0138', 'Zissiling Plato', '0917-283-1829', '712-38-91', 'zissilingplato@yahoo.com', 'Cebu', 'Karl', '0912-318-2489', 'Company', 'active'),
('cus-2015-0139', 'Colored Paper Inc.', '0912-382-9128', '123-81-98', 'coloredpaper@yahoo.com', 'Tarlac', 'Edmark', '0918-263-1278', 'Company', 'active'),
('cus-2015-0140', 'Appliances EveryOne', '0923-812-8091', '829-31-28', 'everyone_1995@yahoo.com', 'Mindoro', 'Kardo', '0919-238-1823', 'Company', 'active'),
('cus-2015-0141', 'Wine Liquor Inc.', '0919-237-1782', '231-78-23', 'wineliquor@gmail.com', 'Camarines Sur', 'Elma', '0912-361-7283', 'Company', 'active'),
('cus-2015-0142', 'Strong Bags Good', '0912-738-9129', '123-81-89', 'strongbagsgood', 'Marikina', 'Gurlie', '0917-238-9123', 'Company', 'active'),
('cus-2015-0143', 'Shoes Exchanges Inc', '0918-192-8391', '812-38-12', 'shoes_exchanges@gmail.com', 'Marikina', 'Lando', '0919-283-1282', 'Company', 'active'),
('cus-2015-0144', 'Farmers Sunshine', '0912-371-7828', '892-13-81', 'farmerssunshine@gmail.com', 'Pampanga', 'Liza', '0999-123-7128', 'Company', 'active'),
('cus-2015-0145', 'Classic Cotton', '0912-389-1824', '217-36-81', 'emailus@classiccotton.com', 'Manila', 'Fred', '0919-628-3717', 'Company', 'active'),
('cus-2015-0146', 'Pirate Cement Inc', '0912-738-9128', '271-38-12', 'piratecement@gmail.com', 'Cardona', 'Rez', '0905-892-1309', 'Company', 'active'),
('cus-2015-0147', 'Inkie Printing', '0909-871-2831', '271-38-12', 'inkieprinting@gmail.com', 'Paete', 'Jayson', '0910-283-1823', 'Company', 'active'),
('cus-2015-0148', 'Washing Dashing', '0923-719-2389', '172-84-17', 'washingdashing@gmail.com', 'Pasig', 'Hector', '0912-938-1223', 'Company', 'active'),
('cus-2015-0149', 'Ink Paper Jam', '0919-723-8128', '823-18-92', 'inkpaperjam@yahoo.com', 'Pateros', 'Peter', '0917-213-1820', 'Company', 'active'),
('cus-2015-0150', 'Baking Powder Element', '0910-283-1239', '812-63-81', 'email@bakingpowderelement.com', 'Bulacan', 'Edna', '0905-128-3719', 'Company', 'active'),
('cus-2015-0151', 'Bubbly Soap', '0999-267-3167', '172-31-82', 'bubblysoap@gmail.com', 'Bulacan', 'Gina', '0919-273-1283', 'Company', 'inactive'),
('cus-2015-0152', 'Quite Sexy', '0918-234-7190', '748-93-01', 'birdcage@mgs.com', 'Afghanistans', '', '', 'Individual', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `disc_id` varchar(25) NOT NULL,
  `disc_name` varchar(50) NOT NULL,
  `disc_rate` int(2) unsigned zerofill NOT NULL,
  `disc_startDate` date NOT NULL,
  `disc_endDate` date NOT NULL,
  `disc_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`disc_id`, `disc_name`, `disc_rate`, `disc_startDate`, `disc_endDate`, `disc_status`) VALUES
('dc1555969defa5b85', 'Valentines Promo', 25, '2015-06-04', '1970-01-01', 'inactive'),
('dc1555969e312bc6a', 'Valentines Promo', 25, '2015-07-01', '2015-07-31', 'active'),
('dc1555969e5250a17', 'Super Sale', 50, '2015-09-01', '2015-09-30', 'active'),
('dc1555969e83bc7bc', 'Mega Ultra Heroic First T', 85, '2015-09-01', '2015-09-30', 'active'),
('dc1555969eae9a32c', 'Windows 10 Promo', 50, '2015-11-19', '2015-11-20', 'active'),
('dc15560ec7dd78501', 'Quite Boobs', 12, '2015-10-09', '2015-10-13', 'inactive'),
('dc15560ec80fd2bdb', 'Quite''s Aim', 90, '2015-09-27', '2015-10-03', 'inactive'),
('dc1656bb9c09155dd', 'SHIT', 10, '2016-01-14', '2016-02-18', 'active'),
('ds15138490213', 'All Time Low', 10, '2015-06-08', '2015-07-12', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` varchar(15) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_tel` varchar(15) NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `emp_dep` varchar(25) NOT NULL,
  `emp_job` varchar(25) NOT NULL,
  `emp_add` varchar(50) NOT NULL,
  `emp_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_tel`, `emp_phone`, `emp_dep`, `emp_job`, `emp_add`, `emp_status`) VALUES
('emp-2015-0001', 'War Machine', 'warmachine@yahoo.com', '837-24-91', '0918-274-3219', 'Operation', 'Driver', 'Canada Toronto', 'active'),
('emp-2015-0002', 'Edward Elric', 'fullmetalalchemist@gmail.', '748-92-31', '9837-124-9012', 'Operation', 'Helper', 'State New York', 'inactive'),
('emp-2015-0003', 'Iron Man', 'BlackSabbath@yahoo.com', '789-40-21', '0927-841-9034', 'Accounting', 'Clerk', 'uawieopr', 'active'),
('emp-2015-0004', 'asdfasdf', 'adsf', '123-12-31', '1231-231-2312', 'Operation', 'Manager', 'asdfsadf', 'inactive'),
('emp-2015-0005', 'Wacka Wacka', 'wwwww', '789-01-23', '0923-748-1904', 'Operation', 'Manager', 'Wacka Island', 'active'),
('emp-2015-0006', 'Moses Lucas', 'lukeses09@gmail.com', '655-22-62', '0927-323-9007', 'Operation', 'Manager', '4 J Arellano', 'active'),
('emp-2015-0007', 'Roche Tobillo', 'tobilloroche@yahoo.com', '434-23-23', '0926-123-0099', 'Operation', 'Clerk', 'Salapan', 'active'),
('emp-2015-0008', 'Aaron Elvia', 'elvia@yahoo.com', '754-53-76', '0927-765-0322', 'Accounting', 'Clerk', 'Manila', 'active'),
('emp-2015-0009', 'Esteven Buchanan', 'steve@gmail.com', '325-56-56', '0975-645-1299', 'Operation', 'Helper', 'Makati', 'active'),
('emp-2015-0010', 'Emmanuel Abarca', 'emmanuel@yahoo.com', '2142-75-45', '0921-665-4564', 'Operation', 'Helper', 'Lucia', 'active'),
('emp-2015-0011', 'Vicente Abad', 'abad@yahoo.com', '432-34-74', '09353-324-6564', 'Operation', 'Helper', 'San Juan', 'active'),
('emp-2015-0012', 'Terry Abarke', 'abarke@gmail.com', '235-56-56', '0975-235-1239', 'Accounting', 'Clerk', 'Pasay', 'active'),
('emp-2015-0013', 'Betty Lafea', 'lafea@yahoo.com', '545-72-76', '0932-434-6566', 'Operation', 'Helper', 'Mandaluyong', 'active'),
('emp-2015-0014', 'Agot MonteAlegre', 'montealegre@yahoo.com', '2323-64-43', '0975-543-5344', 'Operation', 'Helper', 'Lucena', 'active'),
('emp-2015-0015', 'Emmanuel Caram', 'caram@yahoo.com', '2756-75-45', '0935-656-2342', 'Operation', 'Helper', 'Cavite', 'active'),
('emp-2015-0016', 'Kevin Abdullah', 'abdullah@yahoo.com', '533-54-76', '0935-763-7654', 'Operation', 'Helper', 'New Manila', 'active'),
('emp-2015-0017', 'Jason Abejero', 'jason@hotmail.com', '654-65-64', '0932-765-7655', 'Accounting', 'Clerk', 'San Jose', 'active'),
('emp-2015-0018', 'Timothy Bradley', 'bradley@rocketmail.com', '765-53-23', '0943-756-7653', 'Accounting', 'Clerk', 'Leyte', 'active'),
('emp-2015-0019', 'Manny Pacquiao', 'manny@yahoo.com', '672-76-65', '0926-636-7363', 'Operation', 'Helper', 'Barasoain', 'active'),
('emp-2015-0020', 'Lebron James', 'james@yahoo.com', '876-22-77', '0935-545-3267', 'Operation', 'Manager', 'Little Baguio', 'active'),
('emp-2015-0021', 'Abraham Lincoln', 'lincoln@yahoo.com', '324-55-23', '0935-436-2254', 'Accounting', 'Clerk', 'Boni', 'active'),
('emp-2015-0022', 'Henry Adams', 'adams@hotmail.com', '654-53-54', '0932-644-3267', 'Accounting', 'Clerk', 'Edsa', 'active'),
('emp-2015-0023', 'Abrew Dilan', 'dilan@yahoo.com', '654-22-34', '0923-455-7656', 'Operation', 'Helper', 'Ortigas', 'active'),
('emp-2015-0024', 'Edwin Morseko', 'edwin@yahoo.com', '654-22-55', '0975-763-3756', 'Operation', 'Helper', 'Pasay', 'active'),
('emp-2015-0025', 'Jack Pauljack', 'pauljack@hotmail.com', '235-77-24', '0926-356-3238', 'Operation', 'Helper', 'Salapan', 'active'),
('emp-2015-0026', 'Aliah Nicole', 'nicole@yahoo.com', '234-66-23', '0935-753-545', 'Operation', 'Manager', 'San Juan', 'active'),
('emp-2015-0027', 'Huang Bo', 'huang@yahoo.com', '346-77-65', '0921-234-8634', 'Operation', 'Helper', 'Mandaluyong', 'active'),
('emp-2015-0028', 'George Sebu', 'george@yahoo.com', '754-32-77', '0926-345-7752', 'Accouting', 'Clerk', 'Pureza', 'active'),
('emp-2015-0029', 'Wilson Toh', 'toh@hotmail.com', '634-64-22', '0975-796-5436', 'Accounting', 'Clerk', 'Rizal', 'active'),
('emp-2015-0030', 'James Harder', 'james@rocketmail.com', '643-34-26', '0927-643-7542', 'Operation', 'Helper', 'Crame', 'active'),
('emp-2015-0031', 'Achilles Ramos', 'ramos@yahoo.com', '324-33-24', '0932-765-6743', 'Operation', 'Helper', 'Imus', 'active'),
('emp-2015-0032', 'Lisa Baet', 'baet@yahoo.com', '323-64-75', '0932-753-8643', 'Accounting', 'Clerk', 'Sta.Mesa', 'active'),
('emp-2015-0033', 'Nell Acebu', 'nell@rocketmail.com', '764-36-77', '0935-334-7352', 'Accounting', 'Clerk', 'Caloocan', 'active'),
('emp-2015-0034', 'Clean Germs', 'clean@yahoo.com', '864-32-76', '0926-754-5735', 'Operation', 'Manager', 'Marikina', 'active'),
('emp-2015-0035', 'Kungfu Panda', 'kungfu@hotmail.com', '753-32-75', '0975-753-8563', 'Operation', 'Helper', 'Makati', 'active'),
('emp-2015-0036', 'Kenneth Lopez', 'lopez@yahoo.com', '235-66-24', '0975-347-6544', 'Accounting', 'Clerk', 'Salapan', 'active'),
('emp-2015-0037', 'Steven Seagal', 'steven@yahoo.com', '753-64-54', '0923-756-6544', 'Operation', 'Helper', 'Anonas', 'active'),
('emp-2015-0038', 'Andrew E', 'andrew@rocketmail.com', '754-32-75', '0932-436-7543', 'Operation', 'Helper', 'Maguindanao', 'active'),
('emp-2015-0039', 'Kokonut Jelly', 'kokonut@yahoo.com', '634-75-43', '0922-753-7543', 'Accounting', 'Clerk', 'Santolan', 'active'),
('emp-2015-0040', 'Jerome Usngal', 'usngal@hotmail.com', '753-23-76', '0926-643-7543', 'Operation', 'Helper', 'Katipunan', 'active'),
('emp-2015-0041', 'Hector Augusto', 'augusto@hotmail.com', '435-55-43', '0975-642-7543', 'Operation', 'Helper', 'Banaue', 'active'),
('emp-2015-0042', 'Mario Dumawal', 'dumawal@yahoo.com', '734-75-74', '0921-753-8532', 'Operation', 'Helper', 'Bulacan', 'active'),
('emp-2015-0043', 'Ejay Francisco', 'ejay@rocketmail.com', '753-35-74', '0932-643-7853', 'Accounting', 'Clerk', 'Cebu', 'active'),
('emp-2015-0044', 'Keth Manuel', 'keth@rocketmail.com', '643-85-64', '0928-973-7842', 'Accounting', 'Clerk', 'Katiklan', 'active'),
('emp-2015-0045', 'Jing Ornesta', 'ornesta@yahoo.com', '345-88-22', '0927-236-7744', 'Operation', 'Manager', 'Fairview', 'active'),
('emp-2015-0046', 'Luis Asuncion', 'asuncion@hotmail.com', '463-74-74', '0975-326-7544', 'Operation', 'Helper', 'Cubao', 'active'),
('emp-2015-0047', 'Philip Barcenas', 'philip@yahoo.com', '754-74-35', '0921-847-7432', 'Accounting', 'Clerk', 'Edsa', 'active'),
('emp-2015-0048', 'William Tagumpay', 'william@rocketmail.com', '753-23-86', '0932-234-7563', 'Operation', 'Collector', 'Cebu', 'active'),
('emp-2015-0049', 'Clet Asingaw', 'clet@rocketmail.com', '863-34-75', '0926-342-7453', 'Operation', 'Helper', 'Shaw', 'active'),
('emp-2015-0050', 'Junjun Martinez', 'junjun@yahoo.com', '235-74-33', '0975-734-8434', 'Accounting', 'Clerk', 'Mabini', 'active'),
('emp-2015-0051', 'Skull Face', 'skullface@101.com', '874-30-92', '9821-743-0914', 'Operation', 'Manager', 'Kahit Saan', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_no` varchar(25) NOT NULL,
  `pay_ar_so_no` varchar(25) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_amount` decimal(9,2) NOT NULL,
  `pay_type` varchar(10) NOT NULL,
  `pay_collector` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_no`, `pay_ar_so_no`, `pay_date`, `pay_amount`, `pay_type`, `pay_collector`) VALUES
('py1555e9f47507e38', 'so1555e94ef1c1c25', '2015-09-04', 10000.00, 'cash', 'emp-2015-0041'),
('py1555e9f4e70fbf6', 'so1555e94ef1c1c25', '2015-09-04', 970.40, 'cash', 'emp-2015-0007'),
('py1555e9f650b83dc', 'so1555e9c5a4657dc', '2015-09-04', 2500.20, 'cash', 'emp-2015-0035'),
('py1555e9f672e62e7', 'so1555e9c5a4657dc', '2015-09-04', 2000.00, 'cash', 'emp-2015-0035'),
('py1555e9f6a976cb9', 'so1555e9c5a4657dc', '2015-09-04', 199.00, 'cash', 'emp-2015-0035'),
('py1555e9f6c5dd1d9', 'so1555e9c5a4657dc', '2015-09-04', 500.00, 'cash', 'emp-2015-0001'),
('py1555e9f719b7f03', 'so1555e9c5a4657dc', '2015-09-04', 250.00, 'cash', 'emp-2015-0003'),
('py1555e9f7849b00f', 'so1555e9c5a4657dc', '2015-09-04', 250.00, 'cash', 'emp-2015-0005'),
('py1555e9f8fc406bb', 'so1555e9c5a4657dc', '2015-09-04', 1000.00, 'cash', 'emp-2015-0010'),
('py1555e9f9384f6c8', 'so1555e9c5a4657dc', '2015-09-04', 1000.00, 'cash', 'emp-2015-0011'),
('py1555e9f9a2775ce', 'so1555e9c5a4657dc', '2015-09-04', 100.00, 'cash', 'emp-2015-0005'),
('py1555e9fa1834de9', 'so1555e9f9f2a5d29', '2015-09-04', 20000.00, 'cash', 'emp-2015-0041'),
('py1555e9fa30d8c6e', 'so1555e94ef1c1c25', '2015-09-04', 1000.00, 'cash', 'emp-2015-0008'),
('py1555e9fbee5f3ea', 'so1555e94ef1c1c25', '2015-09-04', 1000.00, 'cash', 'emp-2015-0014'),
('py1555e9fc06200e4', 'so1555e94ef1c1c25', '2015-09-04', 1000.00, 'cash', 'emp-2015-0013'),
('py1555ea65469f9f2', 'so1555ea6459c50e5', '2015-09-05', 1000.00, 'cash', 'emp-2015-0006'),
('py1555ea6560193b2', 'so1555ea6459c50e5', '2015-09-05', 1000.00, 'cash', 'emp-2015-0019'),
('py15560d3a3a31c35', 'so1555e94ef1c1c25', '2015-10-01', 1000.00, 'cash', 'emp-2015-0008'),
('py15560d465aac138', 'so1555ea6459c50e5', '2015-10-01', 790.50, 'cheque', 'emp-2015-0009'),
('py15560d52c6946af', 'so15560d526793539', '2015-10-01', 40000.00, 'cash', 'emp-2015-0009'),
('py15560ecbe37b46e', 'so15560ecb4c7888d', '2015-10-02', 1172.80, 'cash', 'emp-2015-0003'),
('py15560ecbfa59b61', 'so15560ecb4c7888d', '2015-10-02', 20000.00, 'cash', 'emp-2015-0012'),
('py15560ecc1b06092', 'so15560ecb4c7888d', '2015-10-02', 10000.00, 'cash', 'emp-2015-0010'),
('py15560ecc283049c', 'so15560ecb4c7888d', '2015-10-02', 100000.00, 'cash', 'emp-2015-0003'),
('py15561772dd8d092', 'so1555e9f9f2a5d29', '2015-10-09', 12.00, 'cash', 'emp-2015-0048'),
('py15hjin3', 'so1555e94ef1c1c25', '2015-09-04', 4000.00, 'cash', 'emp-2015-0041'),
('py15jwi12', 'so1555e94ef1c1c25', '2015-09-04', 5000.00, 'cash', 'emp-2015-0041'),
('py1656dceb8630c26', 'so1656dceb1fcfdb7', '2016-03-07', 114643.20, 'cash', 'emp-2015-0048');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE IF NOT EXISTS `shipping_details` (
  `sd_no` varchar(25) NOT NULL,
  `sd_so_no` varchar(25) NOT NULL,
  `departure` datetime NOT NULL,
  `pickup_actual` datetime NOT NULL,
  `del_actual` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`sd_no`, `sd_so_no`, `departure`, `pickup_actual`, `del_actual`) VALUES
('sd15560d3f74456fa', 'so1555ea6459c50e5', '2015-10-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('sd15560d48704d9f6', 'so1555e94ef1c1c25', '2015-10-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('sd15560d52cfc2e66', 'so15560d526793539', '2015-10-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('sd15560eb462be754', 'so1555e9f9f2a5d29', '2015-10-02 00:00:00', '2015-10-02 13:00:00', '2015-10-02 20:00:00'),
('sd15560ecca561dc7', 'so15560ecb4c7888d', '2015-10-02 00:00:00', '2015-10-02 00:00:00', '2015-10-02 00:00:00'),
('sd1656dceb94c95d7', 'so1656dceb1fcfdb7', '2016-03-07 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_leg`
--

CREATE TABLE IF NOT EXISTS `shipping_leg` (
  `sl_no` varchar(25) NOT NULL,
  `sl_so_no` varchar(25) NOT NULL,
  `sl_cont_no` varchar(25) NOT NULL,
  `sl_cont_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_leg`
--

INSERT INTO `shipping_leg` (`sl_no`, `sl_so_no`, `sl_cont_no`, `sl_cont_qty`) VALUES
('sl1555e94ef1d7a1b', 'so1555e94ef1c1c25', 'co1555964dcaae5d4', 1),
('sl1555e94ef1de4f7', 'so1555e94ef1c1c25', 'co1555964bd9867d3', 3),
('sl1555e9c5a481753', 'so1555e9c5a4657dc', 'co1555964dcaae5d4', 1),
('sl1555e9f9f2b3af8', 'so1555e9f9f2a5d29', 'co1555964bd9867d3', 1),
('sl1555ea6459e17ea', 'so1555ea6459c50e5', 'co1555964bd9867d3', 2),
('sl1555ea6459f3cd5', 'so1555ea6459c50e5', 'co1555964dcaae5d4', 1),
('sl15560d5267ac2c3', 'so15560d526793539', 'co1555964bd9867d3', 2),
('sl15560ecb4c95907', 'so15560ecb4c7888d', 'co1555964dcaae5d4', 1),
('sl1656c6a3f8ccd21', 'so1656c6a3f8a6eab', 'co1555964bd9867d3', 1),
('sl1656dceb2005e96', 'so1656dceb1fcfdb7', 'co1555964bd9867d3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_order`
--

CREATE TABLE IF NOT EXISTS `shipping_order` (
  `so_no` varchar(25) NOT NULL,
  `so_transdate` date NOT NULL,
  `so_emp_id` varchar(15) NOT NULL,
  `so_cl_id` varchar(15) NOT NULL,
  `add_pickup` varchar(100) NOT NULL,
  `add_pickup_reg` varchar(25) NOT NULL,
  `add_del` varchar(100) NOT NULL,
  `add_del_reg` varchar(25) NOT NULL,
  `distance_pickup` int(10) DEFAULT NULL,
  `distance_del` int(10) DEFAULT NULL,
  `cargo_desc` varchar(200) NOT NULL,
  `truck_no` varchar(10) NOT NULL,
  `driver` varchar(15) NOT NULL,
  `helper` varchar(15) NOT NULL,
  `charge_pickup` varchar(25) NOT NULL,
  `charge_del` varchar(25) NOT NULL,
  `pickupExpected` datetime NOT NULL,
  `deliveryExpected` datetime NOT NULL,
  `so_disc_id` varchar(25) NOT NULL,
  `so_tax` decimal(3,2) NOT NULL,
  `so_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_order`
--

INSERT INTO `shipping_order` (`so_no`, `so_transdate`, `so_emp_id`, `so_cl_id`, `add_pickup`, `add_pickup_reg`, `add_del`, `add_del_reg`, `distance_pickup`, `distance_del`, `cargo_desc`, `truck_no`, `driver`, `helper`, `charge_pickup`, `charge_del`, `pickupExpected`, `deliveryExpected`, `so_disc_id`, `so_tax`, `so_status`) VALUES
('so1555e94ef1c1c25', '2015-09-04', 'emp-2015-0003', 'cus-2015-0016', 'Ilocos Sur Hideout Of Many Gri Oiu #1388 Indise Out', 'ch-2015-008', 'Abusayap HQ V. #45', 'ch-2015-012', 178, 200, '325,000 Sealed Vessels', 'JET-198', 'emp-2015-0001', 'emp-2015-0019', 'ch-2015-001', 'ch-2015-002', '2015-09-05 00:00:00', '2015-09-30 00:00:00', 'dc1555969e5250a17', 0.12, 'shipped'),
('so1555e9c5a4657dc', '2015-09-04', 'emp-2015-0021', 'cus-2015-0149', 'Calabarzon Hit In UC#12 St.', 'ch-2015-010', 'San Juan City, #24 Stock Old Warehouse Of BlueLagoon', 'ch-2015-019', 45, 62, '50,000 Nibs (c2)\n50,000 Nibs (c6),\n50,000 Nibs(c8),\n250,000 Nib Holder (Class A)\n420,000 Indian Ink (Class B)', 'JET-198', 'emp-2015-0001', 'emp-2015-0025', 'ch-2015-001', 'ch-2015-002', '2015-09-12 00:00:00', '2015-09-26 00:00:00', '', 0.12, 'deleted'),
('so1555e9f9f2a5d29', '2015-09-04', 'emp-2015-0018', 'cus-2015-0004', 'Hit In Usa #q3 Kj', 'ch-2015-019', 'Hirr #123', 'ch-2015-018', 1000, 1000, 'Many Toys', 'ZZZ-232', 'emp-2015-0001', '', 'ch-2015-001', 'ch-2015-002', '2015-09-04 00:00:00', '2015-10-07 00:00:00', '', 0.12, 'shipped'),
('so1555ea6459c50e5', '2015-09-05', 'emp-2015-0021', 'cus-2015-0018', 'TESTING LANG', 'ch-2015-009', 'TESTAING LANG ULIT', 'ch-2015-011', 10, 10, 'MARAMING CELPHONE', 'JET-198', 'emp-2015-0001', 'emp-2015-0014', 'ch-2015-001', 'ch-2015-002', '2015-09-08 12:00:00', '2015-10-01 15:00:00', 'dc1555969e5250a17', 0.10, 'shipping'),
('so15560d526793539', '2015-10-01', 'emp-2015-0021', 'cus-2015-0004', 'Aasdf', 'ch-2015-019', 'Asdfasdf', 'ch-2015-018', 111, 12, 'Asfd', 'THA-NKS', 'emp-2015-0001', 'emp-2015-0024', 'ch1555d70df7bb3bf', 'ch1555d70e285c9e3', '2015-10-20 00:00:00', '2015-11-05 00:00:00', '', 0.12, 'shipping'),
('so15560ecb4c7888d', '2015-10-02', 'emp-2015-0003', 'cus-2015-0001', 'Afgahnistan', 'ch-2015-018', 'Africa', 'ch-2015-008', 150, 243, '1000 Ak-47', 'THA-NKS', 'emp-2015-0001', '', 'ch1555d70df7bb3bf', 'ch1555d70e285c9e3', '2015-10-09 00:00:00', '2015-10-28 00:00:00', '', 0.12, 'deleted'),
('so1656c6a3f8a6eab', '2016-02-19', 'emp-2015-0003', 'cus-2015-0001', 'San Juan', 'ch-2015-007', 'Butuan', 'ch-2015-012', 20, 20, '10 Baril', 'HSL-872', 'emp-2015-0001', 'emp-2015-0009', 'ch1555d70df7bb3bf', 'ch1555d70e285c9e3', '2016-02-19 00:00:00', '2016-02-20 00:00:00', '', 0.12, 'pending'),
('so1656dceb1fcfdb7', '2016-03-07', 'emp-2015-0033', 'cus-2015-0009', '214 Mabalact St Sanjuan', 'ch-2015-007', 'Romlblon 21', 'ch-2015-007', 2000, 12, 'Shampoo Truck', 'THA-NKS', 'emp-2015-0001', 'emp-2015-0010', 'ch-2015-001', 'ch-2015-002', '2016-03-09 00:00:00', '2016-03-29 00:00:00', '', 0.12, 'shipping');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `tax_id` varchar(25) NOT NULL,
  `tax_name` varchar(25) NOT NULL,
  `tax_rate` int(2) unsigned zerofill NOT NULL,
  `tax_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`, `tax_rate`, `tax_status`) VALUES
('tax-2015-001', 'Max', 99, 'Inactive'),
('tax-2015-002', 'Generic Tax', 12, 'inactive'),
('tax-2015-003', 'ajskdf', 12, 'Inactive'),
('tax-2015-004', 'Min', 01, 'inactive'),
('tax-2015-005', 'vj,', 12, 'inactive'),
('tx155596892458a8b', 'Generic', 12, 'active'),
('tx1555968a00d39a1', 'Super Tax', 99, 'active'),
('tx1555968a26f378a', 'Tiny Tax', 01, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `trails`
--

CREATE TABLE IF NOT EXISTS `trails` (
  `trail_id` varchar(25) NOT NULL,
  `module_type` varchar(25) NOT NULL,
  `module` varchar(25) NOT NULL,
  `action` varchar(25) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trails`
--

INSERT INTO `trails` (`trail_id`, `module_type`, `module`, `action`, `description`, `date`, `username`) VALUES
('at15560ebfdbbc71c', 'Utilities', 'User Accounts', 'CREATE', 'Added user: ', '2015-10-02 19:33:15', 'pwet'),
('at15560ebfeea49fa', 'Utilities', 'User Accounts', 'CREATE', 'Added user: ', '2015-10-02 19:33:34', 'pwet'),
('at15560ec05d2d0ac', 'Utilities', 'User Accounts', 'CREATE', 'Added user: naked-snake user', '2015-10-02 19:35:25', 'tae'),
('at15560ec0d261f30', 'Utilities', 'User Accounts', 'CREATE', 'Added user: Revolver Ocelot Type: user', '2015-10-02 19:37:22', 'poundman'),
('at15560ec149db03e', 'Utilities', 'User Accounts', 'REMOVE', 'Deleted user: snake', '2015-10-02 19:39:21', 'poundman'),
('at15560ec1f4b0ef8', 'Maintenance', 'Customer', 'CREATE', 'Created ID: cus-2015-0152 Name: Quite Sexy', '2015-10-02 19:42:12', 'poundman'),
('at15560ec25453444', 'Maintenance', 'Customer', 'EDIT', 'Updated ID: cus-2015-0152 Name: Quite Sexy', '2015-10-02 19:43:48', 'poundman'),
('at15560ec2967ae71', 'Maintenance', 'Customer', 'REMOVE', 'Deleted ID: cus-2015-0152', '2015-10-02 19:44:54', 'poundman'),
('at15560ec36cd30d9', 'Maintenance', 'Employee', 'CREATE', 'Created ID: emp-2015-0051 Name: Skull Face', '2015-10-02 19:48:28', 'poundman'),
('at15560ec3b0c4957', 'Maintenance', 'Employee', 'EDIT', 'Updated ID: emp-2015-0051 Name: Skull Face', '2015-10-02 19:49:36', 'poundman'),
('at15560ec3b612134', 'Maintenance', 'Employee', 'REMOVE', 'Deleted ID: emp-2015-0051', '2015-10-02 19:49:42', 'poundman'),
('at15560ec42e9ce87', 'Maintenance', 'Charges', 'CREATE', 'Created ID: ch15560ec42e8e296 Type: Regional Measure: NCR Rate: 100', '2015-10-02 19:51:42', 'poundman'),
('at15560ec473ad94a', 'Maintenance', 'Charges', 'EDIT', 'Updated ID: ch-2015-001, Type: To Pick-up, Measure: Mile, Rate: 50.00', '2015-10-02 19:52:51', 'poundman'),
('at15560ec4a496b71', 'Maintenance', 'Charges', 'REMOVE', 'Deleted ID: ch15560ec42e8e296', '2015-10-02 19:53:40', 'poundman'),
('at15560ec516b7bfb', 'Maintenance', 'Container', 'CREATE', 'Created ID: co15560ec516aa1a9, Name: Fire Fuel Container, Rate: 100, Qty: 5', '2015-10-02 19:55:34', 'poundman'),
('at15560ec54a1be94', 'Maintenance', 'Container', 'EDIT', 'Updated ID: co15560ec516aa1a9, Name: Fire Fuel Container, Rate: 100.00, Qty: 2', '2015-10-02 19:56:26', 'poundman'),
('at15560ec579d6b35', 'Maintenance', 'Container', 'REMOVE', 'Deleted ID: co15560ec516aa1a9', '2015-10-02 19:57:13', 'poundman'),
('at15560ec69102375', 'Maintenance', 'Truck', 'CREATE', 'Created Pltno: quite Type: quite', '2015-10-02 20:01:53', 'poundman'),
('at15560ec6c02dae2', 'Maintenance', 'Truck', 'EDIT', 'Updated Pltno:  Type: Quite', '2015-10-02 20:02:40', 'poundman'),
('at15560ec6c8addbd', 'Maintenance', 'Truck', 'REMOVE', 'Deleted ID: quite', '2015-10-02 20:02:48', 'poundman'),
('at15560ec8023b17f', 'Maintenance', 'Discount', 'REMOVE', 'Deleted ID: dc15560ec7dd78501', '2015-10-02 20:08:02', 'poundman'),
('at15560ec80fdb7c2', 'Maintenance', 'Discount', 'CREATE', 'Created ID: dc15560ec80fd2bdb Name: Quite Sexines, Rate: 90', '2015-10-02 20:08:15', 'poundman'),
('at15560ec85ab517c', 'Maintenance', 'Discount', 'EDIT', 'Updated ID: dc15560ec80fd2bdb Name: Quite''s Aim, Rate: 90%', '2015-10-02 20:09:30', 'poundman'),
('at15560ec86e5dab5', 'Maintenance', 'Discount', 'REMOVE', 'Deleted ID: dc15560ec80fd2bdb', '2015-10-02 20:09:50', 'poundman'),
('at15560ec8f618771', 'Session', 'Log', 'Log-IN', ' ', '2015-10-02 20:12:06', 'poundman'),
('at15560eca0f268c4', 'Session', 'Log', 'Signed-OUT', '', '2015-10-02 20:16:47', 'poundman'),
('at15560eca22de948', 'Session', 'Log', 'Signed-IN', ' ', '2015-10-02 20:17:06', 'poundman'),
('at15560eca9727013', 'Transaction', 'Shipment', 'REMOVE', 'Deleted ID: so1555e9c5a4657dc', '2015-10-02 20:19:03', 'poundman'),
('at15560ecb4c9fcaa', 'Transaction', 'Shipment', 'CREATE', 'Created ID: so15560ecb4c7888d', '2015-10-02 20:22:04', 'poundman'),
('at15560ecbfa6770d', 'Transaction', 'Shipment', 'PAYMENT', 'Payment No: py15560ecbfa59b61, SO_NO: so15560ecb4c7888d, Amount: 20000', '2015-10-02 20:24:58', 'poundman'),
('at15560ecc1b14318', 'Transaction', 'Shipment', 'PAYMENT', 'Payment No: py15560ecc1b06092, SO_NO: so15560ecb4c7888d, Amount: 10000, Mode: cash', '2015-10-02 20:25:31', 'poundman'),
('at15560ecc2837585', 'Transaction', 'Shipment', 'PAYMENT', 'Payment No: py15560ecc283049c, SO_NO: so15560ecb4c7888d, Amount: 100000, Mode: cash', '2015-10-02 20:25:44', 'poundman'),
('at15560ecca56e3dd', 'Transaction', 'Shipment', 'EDIT', 'Updated to SHIPPING - ID: so15560ecb4c7888d, Departure: 2015-10-02 00:00:00', '2015-10-02 20:27:49', 'poundman'),
('at15560eccf5b24a0', 'Transaction', 'Shipment', 'REMOVE', 'Deleted ID: so15560ecb4c7888d', '2015-10-02 20:29:09', 'poundman'),
('at15560ecfb1580f5', 'Session', 'Log', 'Signed-OUT', '', '2015-10-02 20:40:49', 'poundman'),
('at15560ecfb62b7b6', 'Session', 'Log', 'Signed-IN', ' ', '2015-10-02 20:40:54', 'poundman'),
('at15560edb861c518', 'Session', 'Log', 'Signed-IN', ' ', '2015-10-02 21:31:18', 'poundman'),
('at15560ee7a45a2d5', 'Maintenance', 'Employee', 'EDIT', 'Updated ID: emp-2015-0050 Name: Junjun Martinez', '2015-10-02 22:23:00', 'poundman'),
('at1556165d0f8f8e7', 'Session', 'Log', 'Signed-IN', ' ', '2015-10-08 14:09:51', 'poundman'),
('at155616609fc2755', 'Session', 'Log', 'Signed-IN', ' ', '2015-10-08 14:25:03', 'poundman'),
('at15561772450dc03', 'Maintenance', 'Employee', 'EDIT', 'Updated ID: emp-2015-0048 Name: William Tagumpay', '2015-10-09 09:52:37', 'poundman'),
('at15561772547305b', 'Maintenance', 'Employee', 'EDIT', 'Updated ID: emp-2015-0033 Name: Nell Acebu', '2015-10-09 09:52:52', 'poundman'),
('at15561772dd9a2fa', 'Transaction', 'Shipment', 'PAYMENT', 'Payment No: py15561772dd8d092, SO_NO: so1555e9f9f2a5d29, Amount: 12, Mode: cash', '2015-10-09 09:55:09', 'poundman'),
('at1656bb9bb948701', 'Session', 'Log', 'Signed-IN', ' ', '2016-02-11 04:21:13', 'admin'),
('at1656bb9c0926223', 'Maintenance', 'Discount', 'CREATE', 'Created ID: dc1656bb9c09155dd Name: SHIT, Rate: 10%', '2016-02-11 04:22:33', 'admin'),
('at1656bb9c11b3cfa', 'Maintenance', 'Discount', 'EDIT', 'Updated ID: dc1656bb9c09155dd Name: SHIT, Rate: 10%', '2016-02-11 04:22:41', 'admin'),
('at1656bbcb704f4cb', 'Session', 'Log', 'Signed-IN', ' ', '2016-02-11 07:44:48', 'admin'),
('at1656c5c35b19483', 'Session', 'Log', 'Signed-IN', ' ', '2016-02-18 21:12:59', 'admin'),
('at1656c5c37654167', 'Maintenance', 'Customer', 'EDIT', 'Updated ID: cus-2015-0048 Name: Gangplank Ton', '2016-02-18 21:13:26', 'admin'),
('at1656c5c37a07058', 'Maintenance', 'Customer', 'REMOVE', 'Deleted ID: cus-2015-0151', '2016-02-18 21:13:30', 'admin'),
('at1656c6373475f4d', 'Session', 'Log', 'Signed-IN', ' ', '2016-02-19 05:27:16', 'admin'),
('at1656c637bcb4fca', 'Maintenance', 'Container', 'CREATE', 'Created ID: co1656c637bcacacc, Name: Thor''s Mighty, Rate: 100, Qty: 10', '2016-02-19 05:29:32', 'admin'),
('at1656c6a205bad6a', 'Session', 'Log', 'Signed-IN', ' ', '2016-02-19 13:03:01', 'admin'),
('at1656c6a3f8dd274', 'Transaction', 'Shipment', 'CREATE', 'Created ID: so1656c6a3f8a6eab', '2016-02-19 13:11:20', 'admin'),
('at1656dcd2e24354e', 'Session', 'Log', 'Signed-IN', ' ', '2016-03-07 09:01:22', 'admin'),
('at1656dcd2e7a6db0', 'Session', 'Log', 'Signed-OUT', '', '2016-03-07 09:01:27', 'admin'),
('at1656dce8637dcb3', 'Session', 'Log', 'Signed-IN', ' ', '2016-03-07 10:33:07', 'admin'),
('at1656dceb2018441', 'Transaction', 'Shipment', 'CREATE', 'Created ID: so1656dceb1fcfdb7', '2016-03-07 10:44:48', 'admin'),
('at1656dceb863d81e', 'Transaction', 'Shipment', 'PAYMENT', 'Payment No: py1656dceb8630c26, SO_NO: so1656dceb1fcfdb7, Amount: 114643.20, Mode: cash', '2016-03-07 10:46:30', 'admin'),
('at1656dceb94f3136', 'Transaction', 'Shipment', 'EDIT', 'Updated to SHIPPING - ID: so1656dceb1fcfdb7, Departure: 2016-03-07 00:00:00', '2016-03-07 10:46:44', 'admin'),
('at1656dd2be6738df', 'Session', 'Log', 'Signed-IN', ' ', '2016-03-07 15:21:10', 'admin'),
('at560ecce9095a5', 'Transaction', 'Shipment', 'EDIT', 'Updated to SHIPPED - ID: so15560ecb4c7888d, Actual Pickup: 2015-10-02 00:00:00, Actual Delivery: 2015-10-02 00:00:00', '2015-10-02 20:28:57', 'poundman');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE IF NOT EXISTS `truck` (
  `tr_pltno` varchar(10) NOT NULL,
  `tr_type` varchar(25) NOT NULL,
  `tr_model` varchar(25) NOT NULL,
  `tr_desc` varchar(50) NOT NULL,
  `tr_usage` varchar(15) NOT NULL,
  `tr_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`tr_pltno`, `tr_type`, `tr_model`, `tr_desc`, `tr_usage`, `tr_status`) VALUES
('HGY-023', 'Hot Wheelszz', 'Private', 'Hohenheim', 'On Shipment', 'active'),
('HSL-872', 'Cargo', 'Hyundai', 'Black', 'Available', 'active'),
('JET-198', 'Monster Truck', 'Death Abyss', 'Dark', 'Available', 'active'),
('JET-918', 'Jet Fighter', 'Toyota', 'Purple', 'On Shipment', 'active'),
('jka-890', 'Van', 'Hyundai', 'Apple Pie', 'Unavailable', 'active'),
('quite', 'Quite', 'Quite', 'Quitre', 'Available', 'inactive'),
('testing', 'Testing', 'Testing', 'Testing', 'Available', 'inactive'),
('THA-NKS', 'Shak Relough', 'Chleo', 'Fast as Yonko', 'On Shipment', 'active'),
('XXX-789', 'Jet', 'Mitsubishi', 'Silver', 'Unavailable', 'active'),
('xxx-holic', 'CAR', 'CAR', 'CAR', 'Available', 'active'),
('ZZZ-232', 'Airplane', 'Honda', 'Invisible', 'Available', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `user_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`username`, `password`, `user_type`, `user_status`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'root', 'active'),
('naked-snake', '08ff67ae6453805c3f771d46fce8b421', 'User', 'active'),
('ocelot', '2fdd64782b4169e3c42c6a88a47faa78', 'User', 'active'),
('poundman', '594aa0a9de0c75cd4d4037b6b65c683e', 'root', 'active'),
('quite', '22c276a05aa7c90566ae2175bcc2a9b0', 'User', 'active'),
('Revolver Ocelot', '62cd275989e78ee56a81f0265a87562e', 'User', 'active'),
('snake', 'De1b2a7baf7850243db71c4abd4e5a39', 'User', 'inactive'),
('snake-eater', '813e20b6cbe19c413e9d9a8c5e031188', 'User', 'active'),
('testing', 'E130e5e618f15cee7a519d8b7b8306a0', 'User', 'active'),
('user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user', 'active'),
('user2', '7e58d63b60197ceb55a1c487989a3720', 'user', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_no`);

--
-- Indexes for table `account_record`
--
ALTER TABLE `account_record`
  ADD PRIMARY KEY (`ar_no`);

--
-- Indexes for table `charge`
--
ALTER TABLE `charge`
  ADD PRIMARY KEY (`charge_id`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`cont_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`disc_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_no`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`sd_no`);

--
-- Indexes for table `shipping_leg`
--
ALTER TABLE `shipping_leg`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `shipping_order`
--
ALTER TABLE `shipping_order`
  ADD PRIMARY KEY (`so_no`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `trails`
--
ALTER TABLE `trails`
  ADD PRIMARY KEY (`trail_id`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`tr_pltno`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
