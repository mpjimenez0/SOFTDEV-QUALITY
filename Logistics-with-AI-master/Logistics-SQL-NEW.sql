-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2017 at 12:57 PM
-- Server version: 5.7.18
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `barangay_id` varchar(10) NOT NULL,
  `city_municipal_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `street_address_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`, `street_address`, `street_address_2`) VALUES
('174', 2061, 188, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `created_at` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `item_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`created_at`, `user_id`, `item_name`) VALUES
(NULL, 1, 'Super User'),
(NULL, 2, 'Volunteer'),
(NULL, 3, 'Barangay'),
(NULL, 4, 'Regional');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `description` text,
  `data` text,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `auth_rule_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `data`, `created_at`, `updated_at`, `rule_name`, `auth_rule_name`) VALUES
('Barangay', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('City/Municipal', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Provincial', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Regional', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Super User', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Volunteer', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `child` varchar(64) NOT NULL,
  `parent` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `longitude` decimal(20,6) DEFAULT NULL,
  `latitude` decimal(20,6) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `timestamp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `name`, `longitude`, `latitude`, `population`, `timestamp`) VALUES
('1', 'Barangay 1', '121.021205', '14.571091', NULL, NULL),
('10', 'Barangay 10', '120.991056', '14.606909', NULL, NULL),
('11', 'Barangay 11', '120.961994', '14.618785', NULL, NULL),
('110', 'Barangay 119', '121.027593', '14.656082', NULL, NULL),
('111', 'Barangay 120', '120.962809', '14.613417', NULL, NULL),
('112', 'Barangay 121', '120.964288', '14.612704', NULL, NULL),
('113', 'Barangay 122', '121.027594', '14.656082', NULL, NULL),
('114', 'Barangay 123', '120.961253', '14.616433', NULL, NULL),
('115', 'Barangay 124', '120.965050', '14.632349', NULL, NULL),
('116', 'Barangay 125', '121.027594', '14.656082', NULL, NULL),
('117', 'Barangay 126', '120.963939', '14.632364', NULL, NULL),
('118', 'Barangay 127', '120.966232', '14.635036', NULL, NULL),
('119', 'Barangay 128', '120.989386', '14.639762', NULL, NULL),
('12', 'Barangay 12', '120.968706', '14.631751', NULL, NULL),
('120', 'Barangay 129', '120.966333', '14.630753', NULL, NULL),
('121', 'Barangay 130', '121.027595', '14.656082', NULL, NULL),
('122', 'Barangay 131', '120.990621', '14.637834', NULL, NULL),
('123', 'Barangay 132', '121.027595', '14.656082', NULL, NULL),
('124', 'Barangay 133', '120.965045', '14.626927', NULL, NULL),
('125', 'Barangay 134', '120.965762', '14.629411', NULL, NULL),
('126', 'Barangay 135', '120.969169', '14.633927', NULL, NULL),
('127', 'Barangay 136', '120.969348', '14.630179', NULL, NULL),
('128', 'Barangay 137', '120.968093', '14.629554', NULL, NULL),
('129', 'Barangay 138', '120.966479', '14.632541', NULL, NULL),
('13', 'Barangay 13', '120.965942', '14.603014', NULL, NULL),
('130', 'Barangay 139', '120.968183', '14.630916', NULL, NULL),
('131', 'Barangay 140', '120.967197', '14.631142', NULL, NULL),
('132', 'Barangay 141', '120.967734', '14.631872', NULL, NULL),
('133', 'Barangay 142', '120.967017', '14.633272', NULL, NULL),
('134', 'Barangay 143', '120.970244', '14.631827', NULL, NULL),
('135', 'Barangay 144', '120.970244', '14.630857', NULL, NULL),
('136', 'Barangay 145', '120.969527', '14.632580', NULL, NULL),
('137', 'Barangay 146', '120.967914', '14.633625', NULL, NULL),
('138', 'Barangay 147', '120.968272', '14.622247', NULL, NULL),
('139', 'Barangay 148', '120.970065', '14.623602', NULL, NULL),
('14', 'Barangay 14', '120.967017', '14.602533', NULL, NULL),
('140', 'Barangay 149', '120.970782', '14.621556', NULL, NULL),
('141', 'Barangay 150', '120.969886', '14.619908', NULL, NULL),
('142', 'Barangay 151', '120.970782', '14.619615', NULL, NULL),
('143', 'Barangay 152', '120.974367', '14.622324', NULL, NULL),
('144', 'Barangay 153', '120.972754', '14.622399', NULL, NULL),
('145', 'Barangay 154', '120.972216', '14.618757', NULL, NULL),
('146', 'Barangay 155', '14.621030', '14.621030', NULL, NULL),
('147', 'Barangay 156', '120.973471', '14.618088', NULL, NULL),
('148', 'Barangay 157', '120.973112', '120.973471', NULL, NULL),
('149', 'Barangay 158', '120.972395', '14.620834', NULL, NULL),
('15', 'Barangay 15', '120.981519', '14.600544', NULL, NULL),
('150', 'Barangay 159', '120.973919', '14.619397', NULL, NULL),
('151', 'Barangay 160', '120.973830', '14.620300', NULL, NULL),
('152', 'Barangay 161', '120.975084', '14.628043', NULL, NULL),
('153', 'Barangay 162', '120.974547', '14.626990', NULL, NULL),
('154', 'Barangay 163', '120.974009', '14.623995', NULL, NULL),
('155', 'Barangay 164', '120.974188', '14.625101', NULL, NULL),
('156', 'Barangay 165', '120.974547', '14.626019', NULL, NULL),
('157', 'Barangay 166', '120.972216', '14.625876', NULL, NULL),
('158', 'Barangay 167', '120.972216', '14.624581', NULL, NULL),
('159', 'Barangay 168', '120.970065', '14.626191', NULL, NULL),
('16', 'Barangay 16', '120.981456', '14.589771', NULL, NULL),
('160', 'Barangay 169', '120.970065', '14.624897', NULL, NULL),
('161', 'Barangay 170', '120.969169', '14.627131', NULL, NULL),
('162', 'Barangay 171', '120.967981', '14.626254', NULL, NULL),
('163', 'Barangay 172', '120.967914', '14.627801', NULL, NULL),
('164', 'Barangay 173', '120.972933', '14.628359', NULL, NULL),
('165', 'Barangay 174', '120.972216', '14.627170', NULL, NULL),
('166', 'Barangay 175', '120.970961', '14.629134', NULL, NULL),
('167', 'Barangay 176', '120.970065', '14.628132', NULL, NULL),
('168', 'Barangay 177', '120.971499', '14.634394', NULL, NULL),
('169', 'Barangay 178', '120.974367', '14.633973', NULL, NULL),
('17', 'Barangay 17', '120.964149', '14.601982', NULL, NULL),
('170', 'Barangay 179', '120.973650', '14.630195', NULL, NULL),
('171', 'Barangay 180', '120.971499', '14.629864', NULL, NULL),
('172', 'Barangay 181', '120.973471', '14.631030', NULL, NULL),
('173', 'Barangay 182', '120.971499', '14.632452', NULL, NULL),
('174', 'Barangay 183', '120.973650', '14.632137', NULL, NULL),
('175', 'Barangay 184', '120.975801', '14.633763', NULL, NULL),
('176', 'Barangay 185', '120.975084', '14.629338', NULL, NULL),
('177', 'Barangay 186', '120.975084', '14.631279', NULL, NULL),
('178', 'Barangay 187', '120.981717', '14.635968', NULL, NULL),
('18', 'Barangay 18', '120.961101', '14.600002', NULL, NULL),
('189', 'Barangay 198', '120.977236', '14.631611', NULL, NULL),
('19', 'Barangay 19', '121.045787', '14.413665', NULL, NULL),
('190', 'Barangay 199', '120.977684', '14.634053', NULL, NULL),
('191', 'Barangay 200', '120.977056', '14.634064', NULL, NULL),
('192', 'Barangay 201', '120.979387', '14.631295', NULL, NULL),
('193', 'Barangay 202', '120.978670', '14.633342', NULL, NULL),
('194', 'Barangay 202-A', '120.980104', '14.633131', NULL, NULL),
('195', 'Barangay 203', '120.977953', '14.628917', NULL, NULL),
('196', 'Barangay 204', '120.976518', '14.627833', NULL, NULL),
('197', 'Barangay 205', '120.978670', '14.630106', NULL, NULL),
('198', 'Barangay 206', '120.980821', '14.629790', NULL, NULL),
('199', 'Barangay 207', '120.980104', '14.627954', NULL, NULL),
('2', 'Barangay 2', '120.980836', '14.603871', NULL, NULL),
('20', 'Barangay 20', '120.951778', '14.598131', NULL, NULL),
('200', 'Barangay 208', '120.981807', '14.630050', NULL, NULL),
('201', 'Barangay 209', '120.981538', '14.625155', NULL, NULL),
('202', 'Barangay 210', '120.982434', '14.626803', NULL, NULL),
('203', 'Barangay 211', '120.981358', '14.626961', NULL, NULL),
('204', 'Barangay 212', '120.979387', '14.626118', NULL, NULL),
('205', 'Barangay 213', '120.977236', '14.625139', NULL, NULL),
('206', 'Barangay 214', '120.975981', '14.625809', NULL, NULL),
('207', 'Barangay 215', '120.978132', '14.626464', NULL, NULL),
('208', 'Barangay 216', '120.978132', '14.624523', NULL, NULL),
('209', 'Barangay 217', '120.975981', '14.623867', NULL, NULL),
('21', 'Barangay 25', '120.965583', '14.604037', NULL, NULL),
('210', 'Barangay 218', '120.975264', '14.622678', NULL, NULL),
('211', 'Barangay 219', '120.978670', '14.623635', NULL, NULL),
('212', 'Barangay 220', '120.980821', '14.623966', NULL, NULL),
('213', 'Barangay 221', '120.975264', '14.620414', NULL, NULL),
('214', 'Barangay 222', '120.975622', '14.619067', NULL, NULL),
('215', 'Barangay 223', '120.978490', '14.620264', NULL, NULL),
('216', 'Barangay 224', '120.978670', '14.621694', NULL, NULL),
('217', 'Barangay 225', '120.978490', '14.618646', NULL, NULL),
('218', 'Barangay 226', '120.977773', '14.618104', NULL, NULL),
('219', 'Barangay 227', '120.977236', '14.621904', NULL, NULL),
('22', 'Barangay 26', '120.965045', '14.604925', NULL, NULL),
('220', 'Barangay 228', '120.975981', '14.621926', NULL, NULL),
('221', 'Barangay 229', '120.977236', '14.619316', NULL, NULL),
('222', 'Barangay 230', '120.976250', '14.618247', NULL, NULL),
('223', 'Barangay 231', '120.976828', '14.620797', NULL, NULL),
('224', 'Barangay 232', '120.974905', '14.619172', NULL, NULL),
('225', 'Barangay 233', '120.975084', '14.617690', NULL, NULL),
('226', 'Barangay 234', '120.975981', '14.616426', NULL, NULL),
('227', 'Barangay 235', '120.976698', '14.615350', NULL, NULL),
('228', 'Barangay 236', '120.975801', '14.615643', NULL, NULL),
('229', 'Barangay 237', '120.975622', '14.614537', NULL, NULL),
('23', 'Barangay 28', '120.963073', '14.603758', NULL, NULL),
('230', 'Barangay 238', '120.975622', '14.610008', NULL, NULL),
('231', 'Barangay 239', '120.975801', '14.613055', NULL, NULL),
('232', 'Barangay 240', '120.974995', '14.607269', NULL, NULL),
('233', 'Barangay 241', '120.974009', '14.613641', NULL, NULL),
('234', 'Barangay 242', '120.974547', '14.608548', NULL, NULL),
('235', 'Barangay 243', '120.974547', '14.610813', NULL, NULL),
('236', 'Barangay 244', '120.975264', '14.611678', NULL, NULL),
('237', 'Barangay 245', '120.973919', '120.975264', NULL, NULL),
('238', 'Barangay 246', '120.975981', '14.611897', NULL, NULL),
('239', 'Barangay 247', '120.973830', '14.607359', NULL, NULL),
('24', 'Barangay 29', '120.979905', '14.603118', NULL, NULL),
('240', 'Barangay 248', '120.974188', '14.609571', NULL, NULL),
('241', 'Barangay 249', '120.977953', '14.615975', NULL, NULL),
('242', 'Barangay 250', '120.976518', '14.609715', NULL, NULL),
('249', 'Barangay 257', '120.978670', '14.611988', NULL, NULL),
('25', 'Barangay 30', '121.045616', '14.414712', NULL, NULL),
('250', 'Barangay 258', '120.978490', '14.613793', NULL, NULL),
('251', 'Barangay 259', '120.976518', '14.607774', NULL, NULL),
('252', 'Barangay 260', '120.978670', '14.607459', NULL, NULL),
('253', 'Barangay 261', '120.979924', '14.609701', NULL, NULL),
('254', 'Barangay 262', '120.978490', '14.609264', NULL, NULL),
('255', 'Barangay 263', '120.979566', '14.608783', NULL, NULL),
('256', 'Barangay 264', '120.979387', '14.610589', NULL, NULL),
('257', 'Barangay 265', '120.979835', '14.611413', NULL, NULL),
('258', 'Barangay 266', '120.977415', '14.607157', NULL, NULL),
('259', 'Barangay 267', '120.979566', '14.612342', NULL, NULL),
('26', 'Barangay 31', '120.964149', '14.604894', NULL, NULL),
('260', 'Barangay 287', '120.974188', '14.598572', NULL, NULL),
('261', 'Barangay 288', '120.973650', '14.601077', NULL, NULL),
('262', 'Barangay 289', '120.975801', '14.598821', NULL, NULL),
('263', 'Barangay 290', '120.977773', '14.599341', NULL, NULL),
('264', 'Barangay 291', '120.978311', '14.597483', NULL, NULL),
('265', 'Barangay 292', '120.975084', '14.604102', NULL, NULL),
('266', 'Barangay 293', '120.972575', '14.604793', NULL, NULL),
('267', 'Barangay 294', '120.977236', '14.604434', NULL, NULL),
('268', 'Barangay 295', '120.977056', '14.602681', NULL, NULL),
('269', 'Barangay 296', '120.975981', '14.602515', NULL, NULL),
('27', 'Barangay 32', '120.963432', '14.605970', NULL, NULL),
('270', 'Barangay 383', '120.984406', '14.596914', NULL, NULL),
('271', 'Barangay 384', '120.983689', '14.595725', NULL, NULL),
('272', 'Barangay 385', '120.986915', '14.596223', NULL, NULL),
('273', 'Barangay 386', '120.989783', '14.594509', NULL, NULL),
('274', 'Barangay 387', '120.987811', '14.597224', NULL, NULL),
('275', 'Barangay 388', '120.987991', '14.598330', NULL, NULL),
('276', 'Barangay 389', '120.990142', '14.597368', NULL, NULL),
('277', 'Barangay 390', '120.989425', '14.600060', NULL, NULL),
('278', 'Barangay 391', '120.985123', '14.601337', NULL, NULL),
('279', 'Barangay 392', '120.987094', '14.601534', NULL, NULL),
('28', 'Barangay 33', '121.050050', '14.646412', NULL, NULL),
('280', 'Barangay 393', '120.986557', '14.599186', NULL, NULL),
('281', 'Barangay 394', '120.984943', '14.599908', NULL, NULL),
('282', 'Barangay 306', '120.982613', '14.598147', NULL, NULL),
('283', 'Barangay 307', '120.982972', '14.599712', NULL, NULL),
('284', 'Barangay 308', '120.984406', '14.602736', NULL, NULL),
('285', 'Barangay 309', '120.982613', '14.602028', NULL, NULL),
('286', 'Barangay 268', '120.970782', '14.604732', NULL, NULL),
('287', 'Barangay 269', '120.969348', '14.603648', NULL, NULL),
('288', 'Barangay 270', '120.968451', '14.601676', NULL, NULL),
('289', 'Barangay 271', '120.970065', '14.602249', NULL, NULL),
('29', 'Barangay 34', '120.962804', '14.605657', NULL, NULL),
('290', 'Barangay 272', '120.967645', '14.599934', NULL, NULL),
('291', 'Barangay 273', '120.968093', '14.599464', NULL, NULL),
('292', 'Barangay 274', '120.966659', '14.600968', NULL, NULL),
('293', 'Barangay 275', '120.962535', '14.597204', NULL, NULL),
('294', 'Barangay 276', '120.967376', '14.600863', NULL, NULL),
('295', 'Barangay 281', '120.971499', '14.600098', NULL, NULL),
('296', 'Barangay 282', '120.972933', '14.597300', NULL, NULL),
('297', 'Barangay 283', '120.968631', '14.597282', NULL, NULL),
('298', 'Barangay 284', '120.969348', '14.598472', NULL, NULL),
('299', 'Barangay 285', '120.971499', '14.596863', NULL, NULL),
('30', 'Barangay 35', '120.964866', '14.606407', NULL, NULL),
('300', 'Barangay 286', '120.967197', '14.597492', NULL, NULL),
('301', 'Barangay 297', '120.977236', '14.600552', NULL, NULL),
('302', 'Barangay 298', '120.979387', '14.600237', NULL, NULL),
('303', 'Barangay 299', '120.978670', '14.603577', NULL, NULL),
('304', 'Barangay 300', '120.978132', '14.602200', NULL, NULL),
('305', 'Barangay 301', '120.979566', '14.602313', NULL, NULL),
('306', 'Barangay 302', '120.978849', '14.601771', NULL, NULL),
('307', 'Barangay 303', '120.980821', '14.599380', NULL, NULL),
('308', 'Barangay 304', '120.981358', '14.602697', NULL, NULL),
('309', 'Barangay 305', '120.980104', '14.603367', NULL, NULL),
('31', 'Barangay 36', '121.050050', '14.646412', NULL, NULL),
('310', 'Barangay 310', '120.984047', '14.604406', NULL, NULL),
('311', 'Barangay 311', '120.985123', '14.607160', NULL, NULL),
('312', 'Barangay 312', '120.982434', '14.606422', NULL, NULL),
('313', 'Barangay 313', '120.980104', '14.604660', NULL, NULL),
('314', 'Barangay 314', '120.980104', '14.605954', NULL, NULL),
('315', 'Barangay 315', '120.985123', '14.608454', NULL, NULL),
('316', 'Barangay 316', '120.982972', '14.608769', NULL, NULL),
('317', 'Barangay 317', '120.985302', '14.611501', NULL, NULL),
('318', 'Barangay 318', '120.984585', '14.610312', NULL, NULL),
('319', 'Barangay 319', '120.985660', '14.610154', NULL, NULL),
('32', 'Barangay 37', '120.961997', '14.606180', NULL, NULL),
('320', 'Barangay 320', '120.983689', '14.611252', NULL, NULL),
('321', 'Barangay 321', '120.982792', '14.610251', NULL, NULL),
('322', 'Barangay 322', '120.983689', '14.609958', NULL, NULL),
('323', 'Barangay 323', '120.985123', '14.612336', NULL, NULL),
('324', 'Barangay 324', '120.983868', '14.612358', NULL, NULL),
('325', 'Barangay 325', '120.982972', '14.612651', NULL, NULL),
('326', 'Barangay 326', '120.981000', '14.610514', NULL, NULL),
('327', 'Barangay 327', '120.980821', '14.612320', NULL, NULL),
('328', 'Barangay 328', '120.980641', '14.609272', NULL, NULL),
('329', 'Barangay 329', '120.981000', '14.608249', NULL, NULL),
('33', 'Barangay 38', '121.022460', '14.561695', NULL, NULL),
('330', 'Barangay 330', '120.980104', '14.607895', NULL, NULL),
('331', 'Barangay 331', '120.981179', '14.615179', NULL, NULL),
('332', 'Barangay 332', '120.981717', '14.609115', NULL, NULL),
('333', 'Barangay 333', '120.981717', '14.610409', NULL, NULL),
('334', 'Barangay 334', '120.982075', '14.612297', NULL, NULL),
('335', 'Barangay 335', '120.981538', '14.607038', NULL, NULL),
('336', 'Barangay 336', '120.983689', '14.616428', NULL, NULL),
('337', 'Barangay 337', '120.983689', '14.615134', NULL, NULL),
('338', 'Barangay 338', '120.985840', '14.614819', NULL, NULL),
('339', 'Barangay 339', '120.983689', '14.613840', NULL, NULL),
('34', 'Barangay 39', '120.960742', '14.605555', NULL, NULL),
('340', 'Barangay 340', '120.985123', '14.613630', NULL, NULL),
('341', 'Barangay 341', '120.985840', '14.616113', NULL, NULL),
('342', 'Barangay 342', '120.987274', '14.613962', NULL, NULL),
('343', 'Barangay 343', '120.987991', '14.615797', NULL, NULL),
('344', 'Barangay 344', '120.984406', '14.617617', NULL, NULL),
('345', 'Barangay 345', '120.983689', '14.619663', NULL, NULL),
('346', 'Barangay 346', '120.984406', '14.618911', NULL, NULL),
('347', 'Barangay 347', '120.983689', '14.620958', NULL, NULL),
('348', 'Barangay 348', '120.983868', '14.622064', NULL, NULL),
('349', 'Barangay 349', '120.985840', '14.620642', NULL, NULL),
('35', 'Barangay 41', '121.050050', '14.646412', NULL, NULL),
('350', 'Barangay 350', '120.986915', '14.618220', NULL, NULL),
('351', 'Barangay 351', '120.987991', '14.619680', NULL, NULL),
('352', 'Barangay 352', '120.988170', '14.617227', NULL, NULL),
('353', 'Barangay 353', '120.981538', '14.617391', NULL, NULL),
('354', 'Barangay 354', '120.981538', '14.618685', NULL, NULL),
('355', 'Barangay 355', '120.979387', '14.617706', NULL, NULL),
('356', 'Barangay 356', '120.982075', '14.622327', NULL, NULL),
('357', 'Barangay 357', '120.982255', '14.621168', NULL, NULL),
('358', 'Barangay 358', '120.982255', '14.619874', NULL, NULL),
('359', 'Barangay 359', '120.980283', '14.622266', NULL, NULL),
('36', 'Barangay 42', '121.050050', '14.646412', NULL, NULL),
('360', 'Barangay 360', '120.980104', '14.621483', NULL, NULL),
('361', 'Barangay 361', '120.980821', '14.620084', NULL, NULL),
('362', 'Barangay 362', '120.979566', '14.620106', NULL, NULL),
('363', 'Barangay 363', '120.983868', '14.623681', NULL, NULL),
('364', 'Barangay 364', '120.985840', '14.623230', NULL, NULL),
('365', 'Barangay 365', '120.984585', '14.622929', NULL, NULL),
('366', 'Barangay 366', '120.983689', '14.624840', NULL, NULL),
('367', 'Barangay 367', '120.985660', '14.624712', NULL, NULL),
('368', 'Barangay 368', '120.988528', '14.621704', NULL, NULL),
('369', 'Barangay 369', '120.987274', '14.623020', NULL, NULL),
('37', 'Barangay 43', '120.961997', '14.608121', NULL, NULL),
('370', 'Barangay 370', '120.987453', '14.624773', NULL, NULL),
('371', 'Barangay 371', '120.988708', '14.623457', NULL, NULL),
('372', 'Barangay 372', '120.988708', '14.624751', NULL, NULL),
('373', 'Barangay 373', '120.983151', '14.630257', NULL, NULL),
('374', 'Barangay 374', '120.987030', '14.632163', NULL, NULL),
('375', 'Barangay 375', '120.983689', '14.629370', NULL, NULL),
('376', 'Barangay 376', '120.987274', '14.626255', NULL, NULL),
('377', 'Barangay 377', '120.985302', '14.627677', NULL, NULL),
('378', 'Barangay 378', '120.984585', '14.628429', NULL, NULL),
('379', 'Barangay 379', '120.986019', '14.625630', NULL, NULL),
('38', 'Barangay 44', '121.059592', '14.490151', NULL, NULL),
('380', 'Barangay 380', '120.985302', '14.626059', NULL, NULL),
('381', 'Barangay 381', '120.983689', '14.626134', NULL, NULL),
('382', 'Barangay 382', '120.983689', '14.627428', NULL, NULL),
('383', 'Barangay 395', '120.986915', '14.603986', NULL, NULL),
('384', 'Barangay 396', '120.988708', '14.604694', NULL, NULL),
('385', 'Barangay 397', '120.990142', '14.606424', NULL, NULL),
('386', 'Barangay 398', '120.991575', '14.605567', NULL, NULL),
('387', 'Barangay 399', '120.990321', '14.604619', NULL, NULL),
('388', 'Barangay 400', '120.990859', '14.603732', NULL, NULL),
('389', 'Barangay 401', '120.992292', '14.604168', NULL, NULL),
('39', 'Barangay 45', '121.051171', '14.632392', NULL, NULL),
('390', 'Barangay 402', '120.992292', '14.602228', NULL, NULL),
('391', 'Barangay 403', '120.990679', '14.602626', NULL, NULL),
('392', 'Barangay 404', '120.989425', '14.602001', NULL, NULL),
('393', 'Barangay 405', '120.993547', '14.604793', NULL, NULL),
('394', 'Barangay 406', '120.993547', '14.605764', NULL, NULL),
('395', 'Barangay 407', '120.994623', '14.603665', NULL, NULL),
('396', 'Barangay 408', '120.995339', '14.604207', NULL, NULL),
('397', 'Barangay 409', '120.997311', '14.602139', NULL, NULL),
('398', 'Barangay 410', '120.997311', '14.600845', NULL, NULL),
('399', 'Barangay 411', '120.997132', '14.602974', NULL, NULL),
('40', 'Barangay 46', '120.963790', '14.609153', NULL, NULL),
('400', 'Barangay 412', '120.994443', '14.600619', NULL, NULL),
('401', 'Barangay 413', '120.994981', '14.601672', NULL, NULL),
('402', 'Barangay 414', '120.994981', '14.602319', NULL, NULL),
('403', 'Barangay 415', '120.993906', '14.603123', NULL, NULL),
('404', 'Barangay 416', '120.992830', '14.601340', NULL, NULL),
('405', 'Barangay 417', '120.999641', '14.604223', NULL, NULL),
('406', 'Barangay 418', '121.000716', '14.602448', NULL, NULL),
('407', 'Barangay 419', '120.998924', '14.603358', NULL, NULL),
('408', 'Barangay 420', '120.999462', '14.601824', NULL, NULL),
('409', 'Barangay 421', '121.003046', '14.604533', NULL, NULL),
('41', 'Barangay 47', '120.964866', '14.609319', NULL, NULL),
('410', 'Barangay 422', '121.002150', '14.605473', NULL, NULL),
('411', 'Barangay 423', '121.000896', '14.604848', NULL, NULL),
('412', 'Barangay 424', '121.001433', '14.602667', NULL, NULL),
('413', 'Barangay 425', '121.003046', '14.602592', NULL, NULL),
('414', 'Barangay 426', '121.006810', '14.602202', NULL, NULL),
('415', 'Barangay 427', '121.004480', '14.603029', NULL, NULL),
('416', 'Barangay 428', '121.005735', '14.602683', NULL, NULL),
('417', 'Barangay 429', '120.995698', '14.607389', NULL, NULL),
('418', 'Barangay 430', '120.994623', '14.606253', NULL, NULL),
('419', 'Barangay 431', '120.994981', '14.606847', NULL, NULL),
('42', 'Barangay 48', '120.971320', '14.608050', NULL, NULL),
('420', 'Barangay 432', '120.997311', '14.606667', NULL, NULL),
('421', 'Barangay 433', '120.995967', '14.604358', NULL, NULL),
('422', 'Barangay 434', '120.995877', '14.605584', NULL, NULL),
('423', 'Barangay 435', '120.996773', '14.604644', NULL, NULL),
('424', 'Barangay 436', '120.999283', '14.604923', NULL, NULL),
('425', 'Barangay 437', '121.000716', '14.606006', NULL, NULL),
('426', 'Barangay 438', '120.999641', '14.606487', NULL, NULL),
('427', 'Barangay 439', '120.998745', '14.605810', NULL, NULL),
('428', 'Barangay 440', '120.998924', '14.608210', NULL, NULL),
('429', 'Barangay 441', '120.997849', '14.609338', NULL, NULL),
('43', 'Barangay 49', '120.970961', '14.606808', NULL, NULL),
('430', 'Barangay 442', '120.998566', '14.609880', NULL, NULL),
('431', 'Barangay 443', '120.999641', '14.608752', NULL, NULL),
('432', 'Barangay 444', '121.000716', '14.607624', NULL, NULL),
('433', 'Barangay 445', '120.999999', '14.607082', NULL, NULL),
('434', 'Barangay 446', '121.001433', '14.606548', NULL, NULL),
('435', 'Barangay 447', '120.997490', '14.608744', NULL, NULL),
('44', 'Barangay 50', '121.045606', '14.414761', NULL, NULL),
('45', 'Barangay 51', '120.972216', '14.612286', NULL, NULL),
('46', 'Barangay 52', '120.971320', '14.614521', NULL, NULL),
('47', 'Barangay 53', '120.972933', '14.615417', NULL, NULL),
('48', 'Barangay 54', '121.045604', '14.414771', NULL, NULL),
('49', 'Barangay 55', '120.971499', '14.616921', NULL, NULL),
('5', 'Barangay 5', '121.003815', '14.613778', NULL, NULL),
('50', 'Barangay 56', '120.970065', '14.610660', NULL, NULL),
('51', 'Barangay 57', '120.968631', '14.610223', NULL, NULL),
('6', 'Barangay 6', '121.018896', '14.561305', NULL, NULL),
('7', 'Barangay 7', '121.013299', '14.581019', NULL, NULL),
('8', 'Barangay 8', '120.967710', '14.618118', NULL, NULL),
('9', 'Barangay 9', '120.961331', '14.612209', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city_municipal`
--

CREATE TABLE `city_municipal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `longitude` decimal(20,6) DEFAULT NULL,
  `latitude` decimal(20,6) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `timestamp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_municipal`
--

INSERT INTO `city_municipal` (`id`, `name`, `longitude`, `latitude`, `population`, `timestamp`) VALUES
(2027, 'Maasim', NULL, NULL, NULL, NULL),
(2028, 'Maitum', NULL, NULL, NULL, NULL),
(2029, 'Malapatan', NULL, NULL, NULL, NULL),
(2030, 'Malungon', NULL, NULL, NULL, NULL),
(2031, 'Cotabato City (Not A Province)', NULL, NULL, NULL, NULL),
(2032, 'Cotabato City', NULL, NULL, NULL, NULL),
(2033, 'City Of Manila', NULL, NULL, NULL, NULL),
(2034, 'Tondo I / Ii', '120.965967', '14.620565', NULL, NULL),
(2035, 'Binondo', '120.975007', '14.601192', NULL, NULL),
(2036, 'Quiapo', '120.986198', '14.598269', NULL, NULL),
(2037, 'San Nicolas', '120.968989', '14.598201', NULL, NULL),
(2038, 'Santa Cruz', '120.984764', '14.617888', NULL, NULL),
(2039, 'Sampaloc', '120.996236', '14.611030', NULL, NULL),
(2040, 'San Miguel', '120.992651', '14.595383', NULL, NULL),
(2041, 'Ermita', '120.982515', '14.586074', NULL, NULL),
(2042, 'Intramuros', '120.974726', '14.589597', NULL, NULL),
(2043, 'Malate', '120.991585', '14.570199', NULL, NULL),
(2044, 'Paco', '120.999215', '14.579039', NULL, NULL),
(2045, 'Pandacan', '121.002998', '14.589611', NULL, NULL),
(2046, 'Port Area', '120.968989', '14.587849', NULL, NULL),
(2047, 'Santa Ana', '121.013441', '14.582636', NULL, NULL),
(2048, 'City Of Mandaluyong', '121.035917', '14.579444', NULL, NULL),
(2049, 'City Of Marikina', '121.102855', '14.650730', NULL, NULL),
(2050, 'City Of Pasig', '121.085110', '14.576377', NULL, NULL),
(2051, 'Quezon City', '121.043700', '14.676041', NULL, NULL),
(2052, 'City Of San Juan', '121.036889', '14.599415', NULL, NULL),
(2053, 'Caloocan City', '121.044977', '14.756578', NULL, NULL),
(2054, 'City Of Malabon', '120.965845', '14.668075', NULL, NULL),
(2055, 'City Of Navotas', '120.939847', '14.671490', NULL, NULL),
(2056, 'City Of Valenzuela', '120.983023', '14.701056', NULL, NULL),
(2057, 'City Of Las Pi?as', '120.993874', '14.444546', NULL, NULL),
(2058, 'City Of Makati', '121.024445', '14.554729', NULL, NULL),
(2059, 'City Of Muntinlupa', '121.041467', '14.408133', NULL, NULL),
(2060, 'City Of Para?aque', '121.019823', '14.479310', NULL, NULL),
(2061, 'Pasay City', '121.001379', '14.537752', NULL, NULL),
(2062, 'Pateros', '121.070773', '14.548378', NULL, NULL),
(2063, 'Taguig City', '121.050865', '14.517618', NULL, NULL),
(2064, 'Bangued (Capital)', NULL, NULL, NULL, NULL),
(2065, 'Boliney', NULL, NULL, NULL, NULL),
(2066, 'Bucay', NULL, NULL, NULL, NULL),
(2067, 'Bucloc', NULL, NULL, NULL, NULL),
(2068, 'Daguioman', NULL, NULL, NULL, NULL),
(2069, 'Adams', '120.918783', '18.459081', NULL, NULL),
(2070, 'Bacarra', '120.608483', '18.270387', NULL, NULL),
(2071, 'Badoc', '120.475595', '17.925240', NULL, NULL),
(2072, 'Bangui', '120.734958', '18.512734', NULL, NULL),
(2073, 'City of Batac', '120.594078', '18.046032', NULL, NULL),
(2074, 'Burgos', '119.869949', '16.062789', NULL, NULL),
(2075, 'Carasi', '120.872862', '18.213041', NULL, NULL),
(2076, 'Currimao', '120.510106', '18.002948', NULL, NULL),
(2077, 'Dingras', '120.723499', '18.080495', NULL, NULL),
(2078, 'Dumalneg', '120.826923', '18.475582', NULL, NULL),
(2079, 'Banna (Espiritu)', '120.642999', '17.956793', NULL, NULL),
(2080, 'Laoag City', '120.592668', '18.196013', NULL, NULL),
(2081, 'Marcos', '120.700504', '18.020946', NULL, NULL),
(2082, 'Nueva Era', '120.734995', '17.940786', NULL, NULL),
(2083, 'Pagudpud', '120.822083', '18.587468', NULL, NULL),
(2084, 'Paoay', '120.516395', '18.074237', NULL, NULL),
(2085, 'Pasuquin', '120.642999', '18.338592', NULL, NULL),
(2086, 'Piddig', '120.780968', '18.186940', NULL, NULL),
(2087, 'Pinili', '120.539423', '17.942944', NULL, NULL),
(2088, 'San Nicolas', '120.585467', '18.147082', NULL, NULL),
(2089, 'Sarrat', '120.654502', '18.113786', NULL, NULL),
(2090, 'Solsona', '120.780968', '18.102185', NULL, NULL),
(2091, 'Vintar', '120.780968', '18.314129', NULL, NULL),
(2092, 'Alilem', '120.572224', '16.910814', NULL, NULL),
(2093, 'Banayoyo', '120.499121', '17.235073', NULL, NULL),
(2094, 'Bantay', '120.447285', '17.598323', NULL, NULL),
(2095, 'Burgos', '119.869949', '16.062789', NULL, NULL),
(2096, 'Cabugao', '120.454019', '17.791812', NULL, NULL),
(2097, 'City of Candon', '120.446718', '17.187404', NULL, NULL),
(2098, 'Caoayan', '120.395428', '17.538215', NULL, NULL),
(2099, 'Cervantes', '120.689006', '16.976545', NULL, NULL),
(2100, 'Galimuyod', '120.522152', '17.188960', NULL, NULL),
(2101, 'Gregorio Del Pilar (Concepcion)', '120.608483', '17.148174', NULL, NULL),
(2102, 'Lidlidda', '120.539423', '17.265342', NULL, NULL),
(2103, 'Magsingal', '120.447285', '17.683099', NULL, NULL),
(2104, 'Nagbukel', '120.539423', '17.434533', NULL, NULL),
(2105, 'Narvacan', '120.493362', '17.463462', NULL, NULL),
(2106, 'Quirino (Angkaki)', '120.689006', '17.103087', NULL, NULL),
(2107, 'Salcedo (Baugen)', '120.562447', '17.134719', NULL, NULL),
(2108, 'San Emilio', '120.596976', '17.245145', NULL, NULL),
(2109, 'San Esteban', '120.453046', '17.327371', NULL, NULL),
(2110, 'San Ildefonso', '120.395428', '17.623000', NULL, NULL),
(2111, 'San Juan (Lapog)', '120.362758', '16.671967', NULL, NULL),
(2112, 'San Vicente', '120.360846', '17.618247', NULL, NULL),
(2113, 'Santa', '120.447285', '17.513582', NULL, NULL),
(2114, 'Santa Catalina', '120.360846', '17.586441', NULL, NULL),
(2115, 'Santa Cruz', '120.493362', '17.061675', NULL, NULL),
(2116, 'Santa Lucia', '120.470326', '17.128875', NULL, NULL),
(2117, 'Santa Maria', '120.493362', '17.378807', NULL, NULL),
(2118, 'Santiago', '120.447285', '17.280726', NULL, NULL),
(2119, 'Santo Domingo', '120.424240', '17.644617', NULL, NULL),
(2120, 'Sigay', '120.596976', '17.033980', NULL, NULL),
(2121, 'Sinait', '120.504879', '17.853467', NULL, NULL),
(2122, 'Sugpon', '120.596976', '16.780900', NULL, NULL),
(2123, 'Suyo', '120.562447', '16.965822', NULL, NULL),
(2124, 'Tagudin', '120.470326', '16.938750', NULL, NULL),
(2125, 'City Of Vigan (Capital)', '120.387330', '17.570490', NULL, NULL),
(2126, 'Agoo', '120.355081', '16.324704', NULL, NULL),
(2127, 'Aringay', '120.388473', '16.388791', NULL, NULL),
(2128, 'Bacnotan', '120.366610', '16.733971', NULL, NULL),
(2129, 'Bagulin', '120.493362', '16.597530', NULL, NULL),
(2130, 'Balaoan', '120.401191', '16.802249', NULL, NULL),
(2131, 'Bangar', '120.424240', '16.882945', NULL, NULL),
(2132, 'Bauang', '120.355081', '16.514332', NULL, NULL),
(2133, 'Burgos', '120.470326', '16.538032', NULL, NULL),
(2134, 'Caba', '120.378138', '16.447430', NULL, NULL),
(2135, 'Luna', '120.355081', '16.830849', NULL, NULL),
(2136, 'Naguilian', '120.412716', '16.515661', NULL, NULL),
(2137, 'Pugo', '120.476085', '16.321330', NULL, NULL),
(2138, 'Rosario', '120.470326', '16.243367', NULL, NULL),
(2139, 'City Of San Fernando (Capital)', '120.366610', '16.607377', NULL, NULL),
(2140, 'San Gabriel', '120.504879', '16.669426', NULL, NULL),
(2141, 'San Juan', '120.362758', '16.671967', NULL, NULL),
(2142, 'Santo Tomas', '120.401191', '16.275321', NULL, NULL),
(2143, 'Santol', '120.504879', '16.753753', NULL, NULL),
(2144, 'Sudipen', '120.488260', '16.899816', NULL, NULL),
(2145, 'Tubao', '120.424240', '16.355863', NULL, NULL),
(2146, 'Agno', '119.812080', '16.103288', NULL, NULL),
(2147, 'Aguilar', '120.182022', '15.836118', NULL, NULL),
(2148, 'City Of Alaminos', '119.979225', '16.153600', NULL, NULL),
(2149, 'Alcala', '120.539423', '15.854602', NULL, NULL),
(2150, 'Anda', '119.985616', '16.298256', NULL, NULL),
(2151, 'Asingan', '120.654502', '16.004372', NULL, NULL),
(2152, 'Balungao', '120.689006', '15.883709', NULL, NULL),
(2153, 'Bani', '119.858377', '16.222907', NULL, NULL),
(2154, 'Basista', '120.395428', '15.871630', NULL, NULL),
(2155, 'Bautista', '120.516395', '15.795275', NULL, NULL),
(2156, 'Bayambang', '120.412716', '15.800767', NULL, NULL),
(2157, 'Binalonan', '120.596976', '16.065853', NULL, NULL),
(2158, 'Binmaley', '120.285885', '15.998851', NULL, NULL),
(2159, 'Bolinao', '119.892730', '16.342536', NULL, NULL),
(2160, 'Bugallon', '120.182022', '15.920223', NULL, NULL),
(2161, 'Burgos', '120.453609', '15.813761', NULL, NULL),
(2162, 'Calasiao', '120.355081', '15.988132', NULL, NULL),
(2163, 'Dagupan City', '120.333312', '16.043300', NULL, NULL),
(2164, 'Dasol', '119.904659', '15.962587', NULL, NULL),
(2165, 'Infanta', '119.950926', '15.871275', NULL, NULL),
(2166, 'Labrador', '120.124285', '16.002738', NULL, NULL),
(2167, 'Lingayen (Capital)', '120.239734', '16.005987', NULL, NULL),
(2168, 'Mabini', '119.997177', '16.032782', NULL, NULL),
(2169, 'Malasiqui', '120.458806', '15.919545', NULL, NULL),
(2170, 'Manaoag', '120.493362', '16.050618', NULL, NULL),
(2171, 'Mangaldan', '120.401191', '120.493362', NULL, NULL),
(2172, 'Mangatarem', '120.297420', '15.755482', NULL, NULL),
(2173, 'Mapandan', '120.464566', '16.018368', NULL, NULL),
(2174, 'Natividad', '120.838409', '16.038215', NULL, NULL),
(2175, 'Pozorrubio', '120.516395', '16.110011', NULL, NULL),
(2176, 'Rosales', '120.631495', '15.861255', NULL, NULL),
(2177, 'San Carlos City', '120.320487', '15.898934', NULL, NULL),
(2178, 'San Fabian', '120.447285', '16.141876', NULL, NULL),
(2179, 'San Jacinto', '120.447285', '16.078832', NULL, NULL),
(2180, 'San Manuel', '120.677505', '16.105607', NULL, NULL),
(2181, 'San Nicolas', '120.780968', '16.120663', NULL, NULL),
(2182, 'San Quintin', '120.838409', '15.975402', NULL, NULL),
(2183, 'Santa Barbara', '120.424240', '15.977396', NULL, NULL),
(2184, 'Santa Maria', '119.924903', '16.151966', NULL, NULL),
(2185, 'Santo Tomas', '120.576835', '15.867137', NULL, NULL),
(2186, 'Sison', '120.518210', '16.171133', NULL, NULL),
(2187, 'Sual', '120.054968', '16.097667', NULL, NULL),
(2188, 'Tayug', '120.746490', '16.010854', NULL, NULL),
(2189, 'Umingan', '120.826923', '15.903961', NULL, NULL),
(2190, 'Urbiztondo', '120.332020', '15.844654', NULL, NULL),
(2191, 'City Of Urdaneta', '120.570693', '15.975803', NULL, NULL),
(2192, 'Villasis', '120.550936', '15.905233', NULL, NULL),
(2193, 'Laoac', '120.539423', '16.043405', NULL, NULL),
(2194, 'Basco (Capital)', '122.004179', '20.463438', NULL, NULL),
(2195, 'Itbayat', '121.838327', '20.783875', NULL, NULL),
(2196, 'Ivana', '121.930245', '20.378059', NULL, NULL),
(2197, 'Mahatao', '121.952999', '20.405156', NULL, NULL),
(2198, 'Sabtang', '121.844875', '20.305440', NULL, NULL),
(2199, 'Uyugan', '121.952999', '20.373429', NULL, NULL),
(2200, 'Abulug', '121.434190', '18.397278', NULL, NULL),
(2201, 'Alcala', '121.651126', '17.904972', NULL, NULL),
(2202, 'Allacapan', '121.559835', '18.216173', NULL, NULL),
(2203, 'Amulung', '121.742343', '17.846489', NULL, NULL),
(2204, 'Aparri', '121.642006', '18.355084', NULL, NULL),
(2205, 'Baggao', '121.947311', '17.914235', NULL, NULL),
(2206, 'Ballesteros', '121.514162', '18.350989', NULL, NULL),
(2207, 'Buguey', '121.787924', '18.258548', NULL, NULL),
(2208, 'Calayan', '121.477099', '19.261886', NULL, NULL),
(2209, 'Camalaniugan', '121.696744', '18.275337', NULL, NULL),
(2210, 'Claveria', '121.091165', '18.601419', NULL, NULL),
(2211, 'Enrile', '121.651126', '17.568859', NULL, NULL),
(2212, 'Gattaran', '121.879031', '18.073649', NULL, NULL),
(2213, 'Gonzaga', '122.106467', '18.241483', NULL, NULL),
(2214, 'Iguig', '121.753740', '17.749950', NULL, NULL),
(2215, 'Lal-Lo', '121.879031', '18.157672', NULL, NULL),
(2216, 'Lasam', '121.559835', '18.047691', NULL, NULL),
(2217, 'Pamplona', '121.331288', '18.426646', NULL, NULL),
(2218, 'Pe?ablanca', '121.947311', '17.662681', NULL, NULL),
(2219, 'Piat', '121.559835', '17.753154', NULL, NULL),
(2220, 'Rizal', '121.377034', '17.827789', NULL, NULL),
(2221, 'Sanchez-Mira', '121.193945', '18.536275', NULL, NULL),
(2222, 'Santa Ana', '122.155675', '18.481608', NULL, NULL),
(2223, 'Santa Praxedes', '120.999103', '18.518756', NULL, NULL),
(2224, 'Santa Teresita', '121.913176', '18.245914', NULL, NULL),
(2225, 'Santo Ni?o (Faire)', '121.491318', '17.912669', NULL, NULL),
(2226, 'Solana', '121.651126', '17.652836', NULL, NULL),
(2227, 'Tuao', '121.503876', '17.699209', NULL, NULL),
(2228, 'Tuguegarao City (Capital)', '121.727021', '17.613181', NULL, NULL),
(2229, 'Alicia', '121.696744', '16.806905', NULL, NULL),
(2230, 'Angadanan', '121.787924', '16.791298', NULL, NULL),
(2231, 'Aurora', '121.616900', '16.977449', NULL, NULL),
(2232, 'Benito Soliven', '121.924556', '16.934747', NULL, NULL),
(2233, 'Burgos', '121.704415', '17.099411', NULL, NULL),
(2234, 'Cabagan', '121.879031', '17.360780', NULL, NULL),
(2235, 'Cabatuan', '121.662532', '16.927758', NULL, NULL),
(2236, 'City Of Cauayan', '121.787924', '16.916624', NULL, NULL),
(2237, 'Cordon', '121.468470', '16.678350', NULL, NULL),
(2238, 'Dinapigue', '122.220007', '16.695963', NULL, NULL),
(2239, 'Divilacan', '122.151897', '17.270498', NULL, NULL),
(2240, 'Echague', '121.717106', '16.670136', NULL, NULL),
(2241, 'Gamu', '121.787924', '17.083863', NULL, NULL),
(2242, 'Ilagan City (Capital)', '122.010102', '17.126323', NULL, NULL),
(2243, 'Jones', '121.787924', '16.582622', NULL, NULL),
(2244, 'Luna', '121.730945', '16.978719', NULL, NULL),
(2245, 'Maconacon', '122.106467', '17.362137', NULL, NULL),
(2246, 'Delfin Albano (Magsaysay)', '121.742343', '17.259249', NULL, NULL),
(2247, 'Mallig', '121.605489', '17.199338', NULL, NULL),
(2248, 'Naguilian', '121.867646', '16.996839', NULL, NULL),
(2249, 'Palanan', '122.401419', '16.996916', NULL, NULL),
(2250, 'Quezon', '121.605489', '17.325127', NULL, NULL),
(2251, 'Quirino', '121.537000', '16.270042', NULL, NULL),
(2252, 'Ramon', '121.525582', '16.804695', NULL, NULL),
(2253, 'Reina Mercedes', '121.799317', '17.008702', NULL, NULL),
(2254, 'Roxas', '121.616900', '17.103077', NULL, NULL),
(2255, 'San Agustin', '121.833487', '16.491529', NULL, NULL),
(2256, 'San Guillermo', '121.970062', '16.718308', NULL, NULL),
(2257, 'San Isidro', '121.616900', '16.747358', NULL, NULL),
(2258, 'San Manuel', '121.616900', '17.019315', NULL, NULL),
(2259, 'San Mariano', '122.129184', '16.878279', NULL, NULL),
(2260, 'San Mateo', '121.594077', '16.876726', NULL, NULL),
(2261, 'San Pablo', '121.794348', '17.461508', NULL, NULL),
(2262, 'Santa Maria', '121.696744', '17.476852', NULL, NULL),
(2263, 'City Of Santiago', '121.553715', '16.714983', NULL, NULL),
(2264, 'Santo Tomas', '121.730945', '17.355517', NULL, NULL),
(2265, 'Tumauini', '121.809310', '17.275073', NULL, NULL),
(2266, 'Ambaguio', '121.056443', '16.579358', NULL, NULL),
(2267, 'Aritao', '121.010573', '16.251496', NULL, NULL),
(2268, 'Bagabag', '121.285525', '16.583370', NULL, NULL),
(2269, 'Bambang', '121.102294', '16.404147', NULL, NULL),
(2270, 'Bayombong (Capital)', '121.148128', '16.480423', NULL, NULL),
(2271, 'Diadi', '121.331288', '16.659499', NULL, NULL),
(2272, 'Dupax Del Norte', '121.122070', '16.305821', NULL, NULL),
(2273, 'Dupax Del Sur', '121.096790', '16.291992', NULL, NULL),
(2274, 'Kasibu', '121.331288', '16.366589', NULL, NULL),
(2275, 'Kayapa', '120.941737', '16.493264', NULL, NULL),
(2276, 'Quezon', '121.542188', '17.183548', NULL, NULL),
(2277, 'Santa Fe', '120.937922', '16.158428', NULL, NULL),
(2278, 'Solano', '121.182493', '16.527133', NULL, NULL),
(2279, 'Villaverde', '121.148128', '16.606160', NULL, NULL),
(2280, 'Alfonso Castaneda', '121.308409', '15.931890', NULL, NULL),
(2281, 'Aglipay', '121.605489', '16.446433', NULL, NULL),
(2282, 'Cabarroguis (Capital)', '121.514162', '16.419906', NULL, NULL),
(2283, 'Diffun', '121.468470', '16.552876', NULL, NULL),
(2284, 'Maddela', '121.787924', '16.332553', NULL, NULL),
(2285, 'Saguday', '121.571250', '16.546114', NULL, NULL),
(2286, 'Nagtipunan', '121.491318', '16.152433', NULL, NULL),
(2287, 'Abucay', NULL, NULL, NULL, NULL),
(2288, 'Bagac', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_number`
--

CREATE TABLE `contact_number` (
  `id` int(11) NOT NULL,
  `contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_number`
--

INSERT INTO `contact_number` (`id`, `contact_number`) VALUES
(1, '+639261523128'),
(2, '+639354811320'),
(3, '+639288666292'),
(4, '+639274869974'),
(5, '+02122346'),
(6, '+02336699');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE `delivery_status` (
  `id` int(11) NOT NULL,
  `name` enum('Pending','Confirmed','In Transit','Arrived') NOT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_status`
--

INSERT INTO `delivery_status` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Pending', '08-07-2017', NULL),
(2, 'Confirmed', '08-07-2017', NULL),
(3, 'In Transit', NULL, NULL),
(4, 'Arrived', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE `disaster` (
  `id` int(11) NOT NULL,
  `disaster_type` int(11) NOT NULL,
  `month` varchar(45) DEFAULT NULL,
  `day` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `address_barangay_id` varchar(10) NOT NULL,
  `address_city_municipal_id` int(11) NOT NULL,
  `address_province_id` int(11) NOT NULL,
  `address_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `disaster_type`
--

CREATE TABLE `disaster_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disaster_type`
--

INSERT INTO `disaster_type` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Tornadoes and Severe Storms', '08-07-2017', 'Tornadoes are outgrowths of powerful thunderstorms that appear as rotating, funnel-shaped clouds. They extend from a thunderstorm to the ground with violent winds that average 30 miles per hour. Also, they can vary in speed dramatically from being stationary to 70 miles per hour. '),
(2, 'Hurricanes and Tropical Storms', '08-07-2017', NULL),
(3, 'Floods', '08-07-2017', 'They occur when land that is normally dry experiences an overflow of water. Several events cause floods, including hurricanes and tropical storms, failed dams or levees, and flash floods that occur within a few minutes or hours of excessive rainfall.'),
(4, 'Wildfires', '08-07-2017', 'Wildfires are usually triggered by lightning or accidents and often go unnoticed at first. They can spread quickly and are especially destructive if they occur near forests, rural areas, remote mountain sites, and other woodland settings where people live. While not reported as often as floods or tornadoes and severe storms, they, too, can cause emotional distress in people living in affected areas.'),
(5, 'Earthquakes', '08-07-2017', 'An earthquake is the shifting of the EarthÃ¢â‚¬â„¢s plates, which results in a sudden shaking of the ground that can last for a few seconds to a few minutes. Within seconds, mild initial shaking can strengthen and become violent. Earthquakes happen without warning and can happen at any time of year.'),
(6, 'Drought', '08-07-2016', 'A drought is a normal, reoccurring weather event that can vary in intensity and duration by region of the country and even by location within a state. Drought occurs when there is lower than average precipitation over a significant period of time, usually a season or more. Other causes of drought can be a delay in the rainy season or the timing of rain in relation to crop growth.'),
(7, 'Agricultural diseases & pests', '08-07-2016', NULL),
(8, 'Damaging Winds', '08-07-2016', NULL),
(9, 'Emergency diseases (pandemic influenza)', '08-07-2016', NULL),
(10, 'Hail', '08-07-2016', NULL),
(11, 'Landslides & debris flow', '08-07-2016', NULL),
(12, 'Tsunami', '08-07-2016', NULL),
(13, 'Sinkholes', '08-07-2016', NULL),
(14, 'Power service disruption & blackout', '08-07-2017', NULL),
(15, 'Nuclear power plant and nuclear blast', '08-07-2017', NULL),
(16, 'Radiological emergencies', NULL, NULL),
(17, 'Explosion', '08-07-2017', NULL),
(18, 'Volcanic eruption', '08-07-2017', NULL),
(19, 'War', '08-07-2017', NULL),
(20, 'Structure Failure', '08-07-2017', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `donation_type_id` int(11) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donation_type`
--

CREATE TABLE `donation_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(45) DEFAULT NULL,
  `description` text,
  `supply_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `personal_info` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver_of_vehicle`
--

CREATE TABLE `driver_of_vehicle` (
  `vehicle_plate_number` varchar(10) NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `legal_structure`
--

CREATE TABLE `legal_structure` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `legal_structure`
--

INSERT INTO `legal_structure` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Affiliate', NULL, NULL),
(2, 'Corporation', NULL, NULL),
(3, 'Incorporated', NULL, NULL),
(4, 'LLC', NULL, NULL),
(5, 'Non-incorporated', NULL, NULL),
(6, 'Non-Proft', NULL, NULL),
(7, 'Partnership', NULL, NULL),
(8, 'Publicly Traded', NULL, NULL),
(9, 'Solely Owned', NULL, NULL),
(10, 'Subsidiary', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `first` varchar(90) NOT NULL,
  `middle` varchar(90) DEFAULT NULL,
  `last` varchar(90) NOT NULL,
  `birth_month` enum('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `birth_day` int(11) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `nationality` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `address_barangay_id` varchar(10) NOT NULL,
  `address_city_municipal_id` int(11) NOT NULL,
  `address_province_id` int(11) NOT NULL,
  `address_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `first`, `middle`, `last`, `birth_month`, `birth_day`, `birth_year`, `sex`, `nationality`, `contact_number`, `address_barangay_id`, `address_city_municipal_id`, `address_province_id`, `address_region_id`) VALUES
(1, 'Johanna Marisse', 'Credito', 'Heramia', 'December', 2, 1997, 'Female', 1, 1, '174', 2061, 188, 4),
(2, 'Jose Lorenzo', 'Gonzales', 'Tadeo', 'March', 26, 1997, 'Male', 2, 2, '174', 2061, 188, 4),
(3, 'Jana Marie', 'Gavarra', 'Gardon', 'January', 27, 1997, 'Female', 1, 3, '174', 2061, 188, 4),
(4, 'Roselle Wednesday', NULL, 'Gardon', 'January', 1, 1997, 'Female', 2, 4, '174', 2061, 188, 4);

-- --------------------------------------------------------

--
-- Table structure for table `primary_commodity`
--

CREATE TABLE `primary_commodity` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `descrption` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `primary_commodity`
--

INSERT INTO `primary_commodity` (`id`, `name`, `timestamp`, `descrption`) VALUES
(1, 'Animal Supplies', NULL, NULL),
(2, 'Appliances/Kitchen Equipment', NULL, NULL),
(3, 'Architectural and Engineering Services', NULL, NULL),
(4, 'Art, Music, Theatre Equipment and Supplies', NULL, NULL),
(5, 'Athletic Equipment and Supplies', NULL, NULL),
(6, 'Audio-Video, Electronics, Photo Equipment', NULL, NULL),
(7, 'Carpet and Flooring', NULL, NULL),
(8, 'Catering and Beverages Services', NULL, NULL),
(9, 'Chemicals', NULL, NULL),
(10, 'Cleaning Equipment and Supplies', NULL, NULL),
(11, 'Computer Equipment and Accessories (PC, Servers)', NULL, NULL),
(12, 'Construction, Building Support, Repairs, and Renovation Services', NULL, NULL),
(13, 'Consulting, Legal and Professional Services', NULL, NULL),
(14, 'Document Storage Services', NULL, NULL),
(15, 'Dry Ice', NULL, NULL),
(16, 'Educational and Training Services', NULL, NULL),
(17, 'Environmental Services', NULL, NULL),
(18, 'Food and Beverage Product', NULL, NULL),
(19, 'Medical Equipment and Supplies', NULL, NULL),
(20, 'HR Recruiting Services and Temporary Labor Services', NULL, NULL),
(21, 'Miscellaneous', NULL, NULL),
(22, 'Pest Exterminator Services', NULL, NULL),
(23, 'Security Equipment', NULL, NULL),
(24, 'Telecommunications', NULL, NULL),
(25, 'Transportation', NULL, NULL),
(26, 'Utilities', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `longitude` decimal(20,8) DEFAULT NULL,
  `latitude` decimal(20,8) DEFAULT NULL,
  `population` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`, `longitude`, `latitude`, `population`) VALUES
(111, 'Albay', '123.52800000', '12.17750000', NULL),
(112, 'Antique', '122.12920000', '11.09310000', NULL),
(113, 'Apayao', '121.17100000', '18.01200000', NULL),
(114, 'Aurora', '121.63690000', '16.99190000', NULL),
(115, 'Basilan', '122.02320000', '6.69290000', NULL),
(116, 'Bataan', '120.48180000', '14.64170000', NULL),
(117, 'Batanes', '122.00420000', '20.46320000', NULL),
(118, 'Batangas', '121.05810000', '13.75720000', NULL),
(119, 'Benguet', '120.80390000', '16.55770000', NULL),
(120, 'Biliran', '124.46420000', '11.58330000', NULL),
(121, 'Bohol', '124.24220000', '9.79660000', NULL),
(122, 'Bukidnon', '125.03880000', '7.98620000', NULL),
(123, 'Bulacan', '121.17100000', '14.99680000', NULL),
(124, 'Cagayan', '121.81070000', '17.98110000', NULL),
(125, 'Camarines Norte', '122.76330000', '14.13900000', NULL),
(126, 'Camarines Sur', '123.34860000', '13.52500000', NULL),
(127, 'Camiguin', '124.72980000', '9.17320000', NULL),
(128, 'Capiz', '122.62770000', '11.38890000', NULL),
(129, 'Catanduanes', '124.24220000', '13.70890000', NULL),
(130, 'Cavite', '120.89700000', '14.47910000', NULL),
(131, 'Cebu', '123.88540000', '10.31570000', NULL),
(132, 'Compostela Valley', '126.17630000', '7.51250000', NULL),
(133, 'Davao Del Norte', '125.65330000', '7.56180000', NULL),
(134, 'Davao Del Sur', '125.47820000', '6.42420000', NULL),
(135, 'Davao Occidental', '126.08930000', '7.30420000', NULL),
(136, 'Davao Oriental', '126.17630000', '7.08060000', NULL),
(137, 'Dinagat Island', '125.60950000', '10.12820000', NULL),
(138, 'Eastern Leyte', '124.48330000', '11.36670000', NULL),
(139, 'Guimaras', '122.60510000', '10.58440000', NULL),
(140, 'Ifugao', '121.17100000', '16.83310000', NULL),
(141, 'Ilocos Norte', '120.80390000', '18.24650000', NULL),
(142, 'Ilocos Sur', '120.57400000', '17.22790000', NULL),
(143, 'Iloilo', '122.56210000', '10.72020000', NULL),
(144, 'Isabela', '122.98900000', '10.20400000', NULL),
(145, 'Kalinga', '121.70880000', '17.12610000', NULL),
(146, 'La Union', '120.38970000', '16.58260000', NULL),
(147, 'Laguna', '121.49620000', '14.29560000', NULL),
(148, 'Lanao Del Norte', '123.88580000', '7.87220000', NULL),
(149, 'Lanao Del Sur', '124.41980000', '7.82320000', NULL),
(150, 'Leyte', '124.48330000', '11.36670000', NULL),
(151, 'Maguindanao', '124.41980000', '6.94230000', NULL),
(152, 'Marinduque', '121.90320000', '13.47670000', NULL),
(153, 'Masbate', '123.55890000', '12.30600000', NULL),
(154, 'Misamis Occidental', '123.70710000', '8.33750000', NULL),
(155, 'Misamis Oriental', '124.95070000', '8.81180000', NULL),
(156, 'Mountain Province', '121.03350000', '17.06630000', NULL),
(157, 'Negros Occidental', '122.98880000', '10.24770000', NULL),
(158, 'Negros Oriental', '122.98880000', '9.62820000', NULL),
(159, 'North Cotabato', '124.25000000', '7.21670000', NULL),
(160, 'Northern Leyte', '124.48330000', '11.36670000', NULL),
(161, 'Nueva Ecija', '120.98760000', '15.69070000', NULL),
(162, 'Nueva Vizcaya', '121.17100000', '16.33010000', NULL),
(163, 'Occidental Mindoro', '120.76510000', '13.10240000', NULL),
(164, 'Oriental Mindoro', '121.40690000', '13.05650000', NULL),
(165, 'Palawan', '118.73630000', '9.83910000', NULL),
(166, 'Pampanga', '120.62000000', '15.07940000', NULL),
(167, 'Pangasinan', '120.43580000', '15.94410000', NULL),
(168, 'Quezon', '121.04370000', '14.67600000', NULL),
(169, 'Quirino', '121.53700000', '16.27000000', NULL),
(170, 'Rizal', '121.30840000', '14.60370000', NULL),
(171, 'Romblon', '122.28810000', '12.52940000', NULL),
(172, 'Sarangani', '124.99480000', '5.92670000', NULL),
(173, 'Siquijor', '123.51570000', '9.21330000', NULL),
(174, 'Sorsogon', '124.01470000', '12.99270000', NULL),
(175, 'South Cotabato', '124.77410000', '6.33580000', NULL),
(176, 'Southern Leyte', '125.17090000', '10.33460000', NULL),
(177, 'Sultan Kudarat', '124.41980000', '6.50690000', NULL),
(178, 'Sulu', '121.03350000', '5.97490000', NULL),
(179, 'Surigao Del Norte', '125.69700000', '9.51480000', NULL),
(180, 'Surigao Del Sur', '126.00230000', '8.99500000', NULL),
(181, 'Tarlac', '120.59630000', '15.47550000', NULL),
(182, 'Tawi Tawi', '119.95090000', '5.13380000', NULL),
(183, 'Western Samar', '125.03880000', '11.93250000', NULL),
(184, 'Zambales', '120.25130000', '15.13390000', NULL),
(185, 'Zamboanga Del Norte', '122.18890000', '7.02430000', NULL),
(186, 'Zamboanga Del Sur', '123.34860000', '7.92080000', NULL),
(187, 'Zamboanga Sibugay', '122.07900000', '6.92140000', NULL),
(188, 'Metro Manila', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `longitude` decimal(20,0) DEFAULT NULL,
  `latitude` decimal(20,0) DEFAULT NULL,
  `population` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `name`, `longitude`, `latitude`, `population`) VALUES
(1, 'ARMM', '124', '7', 3781387),
(2, 'CAR', '121', '17', 1722006),
(3, 'MIMAROPA Region', '121', '13', 2963360),
(4, 'NCR', '121', '15', 12877253),
(5, 'NIR', '123', '10', 4414131),
(6, 'Region I', '121', '16', 5026128),
(7, 'Region II', '122', '17', 3451410),
(8, 'Region III', '121', '15', 11218177),
(9, 'Region IV-A', '121', '14', 14414774),
(10, 'Region IX', '123', '8', 3629783),
(11, 'Region V', '124', '13', 5796989),
(12, 'Region VI', '123', '11', 4477247),
(13, 'Region VII', '124', '10', 6041903),
(14, 'Region VIII', '125', '12', 4440150),
(15, 'Region X', '125', '8', 4689302),
(16, 'Region XI', '126', '7', 4893318),
(17, 'Region XII', '125', '6', 4545276),
(18, 'Region XIII', '126', '9', 2596709);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `date_requested` varchar(45) DEFAULT NULL,
  `date_needed` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `description` text,
  `tracking_number` varchar(12) DEFAULT NULL,
  `delivery_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_barangay_id` varchar(10) NOT NULL,
  `address_city_municipal_id` int(11) NOT NULL,
  `address_province_id` int(11) NOT NULL,
  `address_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `date_requested`, `date_needed`, `quantity`, `description`, `tracking_number`, `delivery_status`, `user_id`, `address_barangay_id`, `address_city_municipal_id`, `address_province_id`, `address_region_id`) VALUES
(1, '08-12-17', '08-26-17', '520', NULL, 'TN1234567898', 4, 1, '174', 2061, 188, 4),
(2, '08-12-17', '08-25-17', '200', NULL, 'TN8987654321', 3, 2, '174', 2061, 188, 4),
(3, '08-12-17', '08-26-17', '35', NULL, 'NT128K5896PL', 2, 3, '174', 2061, 188, 4),
(4, '08-12-17', '08-26-17', '89', NULL, 'MI1415820142', 4, 4, '174', 2061, 188, 4),
(5, '08/14/2017', '08/15/2017', '1', '', 'NT1221111112', 1, 3, '174', 2061, 188, 4),
(6, '08/29/2017', '09/01/2017', '12', '', 'MO2478491526', 3, 3, '174', 2061, 188, 4),
(7, '08/16/2017', '08/25/2017', '11', '', 'JM6794621587', 3, 3, '174', 2061, 188, 4);

-- --------------------------------------------------------

--
-- Table structure for table `requested_supply`
--

CREATE TABLE `requested_supply` (
  `request_id` int(11) NOT NULL,
  `request_user_info_user_id` int(11) NOT NULL,
  `supply_detail_info_supplier` int(11) NOT NULL,
  `supply_detail_info_supply_code` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `start_date_expected` varchar(45) DEFAULT NULL,
  `start_date_actual` varchar(45) DEFAULT NULL,
  `end_date_expected` varchar(45) DEFAULT NULL,
  `end_date_actual` varchar(45) DEFAULT NULL,
  `vehicle_plate_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `timestamp` varchar(45) DEFAULT NULL,
  `principal_name` varchar(255) DEFAULT NULL,
  `principal_title` enum('CEO','President') DEFAULT NULL,
  `business_number_of_year` int(11) DEFAULT NULL,
  `description` text,
  `supplier_type` int(11) NOT NULL,
  `legal_structure_id` int(11) NOT NULL,
  `primary_commodity_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `email`, `website`, `contact_person`, `timestamp`, `principal_name`, `principal_title`, `business_number_of_year`, `description`, `supplier_type`, `legal_structure_id`, `primary_commodity_id`) VALUES
(1, 'Supplier 1', 'koriricruc@qwfox.com', 'sample1web.com', 'Jemi', NULL, 'Boss 1', 'CEO', 10, NULL, 3, 6, 5),
(2, 'Supplier 2', 'pametretra@hvzoi.com', 'supply1.com.ph', 'Jola', NULL, 'Boss 2', 'President', 10, NULL, 7, 2, 18),
(3, 'Supplier 3', 'ariana.g@gmail.com', 'supplierofdamit2.com', 'Hola', NULL, 'Boss 3', 'CEO', 11, NULL, 6, 10, 7),
(4, 'Supplier 4', 'trysample@ksks.com', 'kilokilo0.com', 'Heya', NULL, 'Boss 4', 'President', 25, NULL, 1, 4, 16),
(5, 'Supplier 5', 'wowamazing.rr@koko.com', 'magandtoh.com', 'Keopi', NULL, 'Boss 5', 'CEO', 1, NULL, 2, 2, 1),
(6, 'Supplier 6', 'hahahaha@hehe.com', 'masarapfood.com', 'Joyami', NULL, 'Boss 6', 'President', 3, NULL, 3, 3, 25),
(7, 'Supplier 7', 'Sisososos@momo.com', 'wowdi2.com', 'Jinggie', NULL, 'Boss 7', 'CEO', 6, NULL, 1, 3, 22),
(8, 'Supplier 8', 'Walang@forever.com', 'puntakana.com.ph', 'Roberto', NULL, 'Boss 8', 'President', 8, NULL, 2, 10, 22),
(9, 'Supplier 9', 'walang@kayo.ph', 'trymorin.com', 'Rodolfo', NULL, 'Boss 9', 'CEO', 23, NULL, 2, 3, 15),
(10, 'Supplier 10', 'jo@hana.com', 'magandangser.com', 'Ricardo', NULL, 'Boss 10', 'President', 3, NULL, 6, 6, 17),
(11, 'Supplier 11', 'sige@oo.com', 'bilinapo.com', 'Oldarrico', NULL, 'Boss 11', 'CEO', 7, NULL, 4, 2, 2),
(12, 'Supplier 12', 'iajsansjdvn@yahoo.com', 'damitlang.com', 'Rick', NULL, 'Boss 12', 'President', 30, NULL, 4, 9, 23),
(13, 'Supplier 13', 'ldr@wawawa.ph', 'shortlang.com', 'Compowa', NULL, 'Boss 13', 'CEO', 24, NULL, 2, 2, 9),
(14, 'Supplier 14', 'jimcas@tull.com', 'bagnarin.com', 'Chuga', NULL, 'Boss 14', 'President', 20, NULL, 5, 3, 10),
(15, 'Supplier 15', 'love@mosha.com', 'mapawow.com', 'Chiga', NULL, 'Boss 15', 'CEO', 22, NULL, 6, 7, 3),
(16, 'Supplier 16', 'dika@mahal.com.ph', 'bililangpokau.com.ph', 'Kokey', NULL, 'Boss 16', 'President', 19, NULL, 6, 8, 10),
(17, 'Supplier 17', 'try.mo.to@yahoo.com', 'oraytzzz.com', 'Lambdam', NULL, 'Boss 17', 'CEO', 18, NULL, 7, 3, 3),
(18, 'Supplier 18', 'oli@jojo.com', 'busogkadito.com', 'Madam', NULL, 'Boss 18', 'CEO', 17, NULL, 3, 7, 10),
(19, 'Supplier 19', 'iddi@kol.com', 'librelang.com', 'Ester', NULL, 'Boss 19', 'President', 16, NULL, 7, 2, 9),
(20, 'Supplier 20', 'shaman@shap.com', 'alisnau.com', 'Kempoy', NULL, 'Boss 20', 'CEO', 14, NULL, 3, 7, 12);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_has_contact_number`
--

CREATE TABLE `supplier_has_contact_number` (
  `supplier_id` int(11) NOT NULL,
  `contact_number_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_type`
--

CREATE TABLE `supplier_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_type`
--

INSERT INTO `supplier_type` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Manufacturers and Vendors', '08-07-2017', 'These are the companies that research, develop and actually produce the finished product ready for purchase. Manufacturers and vendors are the source of the supply chain.  Distributors, wholesalers, resellers and retailers who purchase goods from manufacturers and vendors benefit from the cheapest prices because no other companies have added their margin to cost of the goods yet.'),
(2, 'Wholesalers and Distributors', '08-07-2017', 'These suppliers are companies that buy in bulk from several manufacturers or vendors. They warehouse the goods for reselling to smaller local distributors, wholesalers and retailers. Distributors and wholesalers may also supply larger quantities to organisations or government departments directly. A genuine wholesale supplier will require your VAT or Tax ID number. This distinguishes them from discount retailers and resellers who market, particularly online, as wholesalers.'),
(3, 'Affiliate Merchants ', '08-07-2017', 'An affiliate merchant is a supplier that wishes to drive traffic to their website or sales of their product through banner ads and links placed throughout a network of affiliates. Merchants will normally pay affiliates a commission for every visit to the website or every sales conversion.'),
(4, 'Franchisors', '08-07-2017', 'A franchisor is a business owner and will grant a licence to an individual, which allows them to develop their own business using the trademark, name, know-how and business systems of the franchisor which includes suppliers and often at better pricing than an individual could get themselves.\r\n'),
(5, 'Importers and exporters', '08-07-2017', 'These suppliers will purchase products from manufacturers in one country and either export them to a distributor in a different country, or import them from an exporter into their country. Some may travel abroad to buy direct from suppliers in another country.'),
(6, 'Independent crafts people', '08-07-2017', 'These are normally manufacturers of products they have designed or produced on smaller unique scales of economy and will usually sell direct to retailers or the end consumer through agents or trade shows.'),
(7, 'Dropshippers ', '08-07-2017', 'These are suppliers of products from single or multiple companies that will deliver direct to the buyer once they have made the purchase from your business. This can be cost effective as it eliminates the need for storage or display of the items for sale.');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `code` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_expiration` varchar(25) DEFAULT NULL,
  `date_received` varchar(25) DEFAULT NULL,
  `description` text,
  `timestamp` varchar(25) DEFAULT NULL,
  `supply_type` int(11) NOT NULL,
  `unit_of_measurement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`code`, `name`, `date_expiration`, `date_received`, `description`, `timestamp`, `supply_type`, `unit_of_measurement_id`) VALUES
(58888555, 'Stick-O', '09-12-2025', '08-13-2017', NULL, '08-13-2017', 1, 9),
(79989798, 'Nissin Noodle', '09-12-2050', '08-13-2017', NULL, '08-13-2017', 1, 9),
(89411155, 'Mega Sardines', '09-12-2044', '08-13-2017', NULL, '08-13-2017', 1, 9),
(111111222, 'San Marino Corned Tuna', '09-12-2045', '08-13-2017', NULL, '08-13-2017', 1, 9),
(123212321, 'Shin Cup', '09-12-2052', '08-13-2017', NULL, '08-13-2017', 1, 9),
(123456789, 'Sky Flakes', '09-12-2020', '08-13-2017', NULL, '08-13-2017', 1, 9),
(154879623, 'CDO Luncheon Meat', '09-12-2039', '08-13-2017', NULL, '08-13-2017', 1, 9),
(212125256, 'Absolute Water', '09-12-2041', '08-13-2017', NULL, '08-13-2017', 1, 9),
(222255448, 'CDO Karne Norte', '09-12-2026', '08-13-2017', NULL, '08-13-2017', 1, 9),
(252412566, 'Jacket', '09-12-2067', '08-13-2017', NULL, '08-13-2017', 3, 9),
(252525252, 'Young\'s Town Sardines', '09-12-2048', '08-13-2017', NULL, '08-13-2017', 1, 9),
(256352635, 'Blanket', '09-12-2069', '08-13-2017', NULL, '08-13-2017', 3, 9),
(258596325, 'Nongshim Noodles', '09-12-2053', '08-13-2017', NULL, '08-13-2017', 1, 9),
(262635353, 'Saba Mackerel', '09-12-2049', '08-13-2017', NULL, '08-13-2017', 1, 9),
(287598516, 'Argentina Corned Beef', '09-12-2028', '08-13-2017', NULL, '08-13-2017', 1, 9),
(289746162, 'Hunt\'s Pork & Beans', '09-12-2042', '08-13-2017', NULL, '08-13-2017', 1, 9),
(322145699, 'Spam Luncheon Meat', '09-12-2034', '08-13-2017', NULL, '08-13-2017', 1, 9),
(332215489, 'Face Towel', '09-12-2065', '08-13-2017', NULL, '08-13-2017', 3, 9),
(333333333, 'Highlands Corned Beef', '09-12-2027', '08-13-2017', NULL, '08-13-2017', 1, 9),
(357415968, 'Listerine', '09-12-2059', '08-13-2017', NULL, '08-13-2017', 7, 9),
(363636363, 'Colgate Toothpaste', '09-12-2056', '08-13-2017', NULL, '08-13-2017', 7, 9),
(363636565, 'Closeup Toothpaste', '09-12-2055', '08-13-2017', NULL, '08-13-2017', 7, 7),
(373839343, 'Argentina Meatloaf', '09-12-2038', '08-13-2017', NULL, '08-13-2017', 1, 9),
(464656546, 'Lucky Me Pancit Canton', '09-12-2051', '08-13-2017', NULL, '08-13-2017', 1, 9),
(514728547, 'Colgate Dental Floss', '09-12-2058', '08-13-2017', NULL, '08-13-2017', 7, 9),
(515687452, 'Oreo', '09-12-2023', '08-13-2017', NULL, '08-13-2017', 1, 9),
(517949496, 'Purefoods Luncheon Meat', '09-12-2036', '08-13-2017', NULL, '08-13-2017', 1, 9),
(518915982, 'Purefoods Corned Beef', '09-12-2029', '08-13-2017', NULL, '08-13-2017', 1, 9),
(526982318, 'Palm Corned Beef', '09-12-2030', '08-13-2017', NULL, '08-13-2017', 1, 9),
(532693939, 'King Cup Sardines', '09-12-2046', '08-13-2017', NULL, '08-13-2017', 1, 9),
(534915283, 'Century Tuna', '09-12-2043', '08-13-2017', NULL, '08-13-2017', 1, 9),
(541254796, 'Libby\'s Vienna Sausage', '09-12-2033', '08-13-2017', NULL, '08-13-2017', 1, 9),
(554478963, 'Purefoods Vienna Sausage', '09-12-2032', '08-13-2017', NULL, '08-13-2017', 1, 9),
(585858585, 'Mediplast Medicated Plaster', '09-12-2061', '08-13-2017', NULL, '08-13-2017', 9, 9),
(589766233, 'Pork Luncheon Meat', '09-12-2035', '08-13-2017', NULL, '08-13-2017', 1, 9),
(616154585, '555 Sardines', '09-12-2047', '08-13-2017', NULL, '08-13-2017', 1, 9),
(621479525, 'Summit Mineral Water', '09-12-2040', '08-13-2017', NULL, '08-13-2017', 1, 9),
(685757896, 'Towel', '09-12-2066', '08-13-2017', NULL, '08-13-2017', 3, 9),
(694158923, 'Presto', '09-12-2024', '08-13-2017', NULL, '08-13-2017', 1, 9),
(777711111, 'Absorbent Cotton', '09-12-2063', '08-13-2017', NULL, '08-13-2017', 9, 9),
(779977997, 'Green Cross Alcohol', '09-12-2060', '08-13-2017', NULL, '08-13-2017', 9, 9),
(828249163, 'Bingo Meatloaf', '09-12-2037', '08-13-2017', NULL, '08-13-2017', 1, 9),
(847951566, 'Lucky Me Noodle', '09-12-2054', '08-13-2017', NULL, '08-13-2017', 1, 9),
(885522669, 'Cotton t-shirt', '09-12-2064', '08-13-2017', NULL, '08-13-2017', 3, 9),
(888888888, 'Bandaid Bandage', '09-12-2062', '08-13-2017', NULL, '08-13-2017', 9, 9),
(896521793, 'Cream-O', '09-12-2022', '08-13-2017', NULL, '08-13-2017', 1, 9),
(959595956, 'Long Pants', '09-12-2068', '08-13-2017', NULL, '08-13-2017', 3, 9),
(985418526, 'Fita', '09-12-2021', '08-13-2017', NULL, '08-13-2017', 1, 9),
(989898797, 'Colgate Toothbrush', '09-12-2057', '08-13-2017', NULL, '08-13-2017', 7, 9),
(999874563, 'Libby\'s Corned Beef', '09-12-2031', '08-13-2017', NULL, '08-13-2017', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `supply_detail_info`
--

CREATE TABLE `supply_detail_info` (
  `supplier_id` int(11) NOT NULL,
  `supply_code` int(11) NOT NULL,
  `address_barangay` varchar(10) NOT NULL,
  `address_city_municipal` int(11) NOT NULL,
  `address_province` int(11) NOT NULL,
  `address_region` int(11) NOT NULL,
  `warehouse` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supply_in_warehouse`
--

CREATE TABLE `supply_in_warehouse` (
  `supply_detail_info_supplier_id` int(11) NOT NULL,
  `supply_detail_info_supply_code` int(11) NOT NULL,
  `warehouse_detail_info_warehouse_id` int(11) NOT NULL,
  `warehouse_detail_info_contact_number_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supply_type`
--

CREATE TABLE `supply_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supply_type`
--

INSERT INTO `supply_type` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Class I - Subsistence', '08-07-2017', 'A - Nonperishable\r\nC - Combat Rations\r\nR - Refrigerated\r\nS - Other Nonrefrigerated\r\nW - Water'),
(3, 'Class II - Clothing, Individual Equipment, Tools, Admin. Supplies', '08-07-2017', 'A - Air\r\nB - Ground Support Materiel\r\nE - General Supplies\r\nF - Clothing\r\nG - Electronics\r\nM - Weapons\r\nT - Industrial Supplies'),
(4, 'Class III - Petroleum, Oils, Lubricants', '08-07-2017', 'A - POL for Aircraft\r\nW - POL for Surface Vehicles\r\nP - Packaged POL'),
(5, 'Class IV - Construction Materials', '08-07-2017', 'A - Construction \r\nB - Barrier'),
(6, 'Class V - Ammunition', '08-07-2017', 'A - Air Delivery\r\nW - Ground'),
(7, 'Class VI - Personal Demand Items', '08-07-2017', ''),
(8, 'Class VII - Major End Items: Racks, Pylons, Tracked Vehicles, Etc.', '08-07-2017', 'A - Air\r\nB - Ground Support Materiel\r\nD - Admin. Vehicles\r\nG - Electronics\r\nJ - Racks, Adaptors, Pylons\r\nK - Tactical Vehicles\r\nL - Missiles\r\nM - Weapons\r\nN - Special Weapons\r\nX - Aircraft Engines'),
(9, 'Class VIII - Medical Materials', '08-07-2017', 'A - Medical Materiel\r\nB - Blood / Fluids'),
(10, 'Class IX - Repair Parts', '08-07-2017', 'A - Air\r\nB - Ground Support Materiel\r\nD - Admin. Vehicles\r\nG - Electronics\r\nK - Tactical Vehicles\r\nL - Missiles\r\nM - Weapons\r\nN - Special Weapons\r\nX - Aircraft Engines'),
(11, 'Class X - Material For Nonmilitary Programs (Miscellaneous)', '08-07-2017', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit_of_measurement`
--

CREATE TABLE `unit_of_measurement` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit_of_measurement`
--

INSERT INTO `unit_of_measurement` (`id`, `name`) VALUES
(4, 'Gram'),
(2, 'kilogram (kg)'),
(1, 'meter (m)'),
(6, 'Microgram'),
(5, 'Milligram'),
(9, 'N/A'),
(8, 'Ounce'),
(7, 'Pound'),
(3, 'Tonne');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` varchar(10) DEFAULT NULL,
  `updated_at` varchar(10) DEFAULT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `user_type`) VALUES
(1, 'jcheramia', 'X0-pESM2VklhTvovRuZhT06-qHOSENIo', '$2y$13$ec9/2/II0IIVEZd11MgluuuD6p7k/NPsKIB.o47qLfwDdssgH/p.C', NULL, 'johannaheramia@gmail.com', 10, '1502522295', '1502522295', 2),
(2, 'jgtadeo', 'fe3Pugc_t3a21MPDFXrVtGTkyJdtlXed', '$2y$13$NkY8KCbAUWIH3quJ8RUjme5WriQz1bn9qJAWVcU7YwxgtdF3dPuI6', NULL, 'renzotadeo26@gmail.com', 10, '1502522548', '1502522548', 1),
(3, 'jggardon', 'AMZuQXyBWCUFTzv4U4I5EE8wuT6BPlDL', '$2y$13$sRcQMXiqJvlNGai1r6wcQ.7u0xF0NyJCqvn9Fqa1nasKmIW0OX8ay', NULL, 'janamarie.gardon@gmail.com', 10, '1502522582', '1502522582', 3),
(4, 'rwgardon', '_UU5Y1hdiMHbiuru1Voq5xAWqTHtWd2n', '$2y$13$dVnujaukcejFFhRF05C0wu38OjNl3DL2QQe.x9FikxyieF5DIfaqa', NULL, 'rosellewednesday@gmail.com', 10, '1502602842', '1502602842', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_donation`
--

CREATE TABLE `user_has_donation` (
  `user_info_user_id` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `personal_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Volunteer', '08-11-2017', ''),
(2, 'Super User', '08-11-2017', ''),
(3, 'Barangay', '08-11-2017', ''),
(4, 'City/Municipal', '08-11-2017', ''),
(5, 'Regional', '08-11-2017', ''),
(6, 'Provincial', '08-11-2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `plate_number` varchar(10) NOT NULL,
  `model` varchar(100) DEFAULT NULL,
  `is_lease` tinyint(4) DEFAULT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `vehicle_category` int(11) NOT NULL,
  `vehicle_type` int(11) NOT NULL,
  `available_day` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') DEFAULT NULL,
  `available_hour_start` varchar(10) DEFAULT NULL,
  `available_hour_end` varchar(10) DEFAULT NULL,
  `vehicle_size_id` int(11) NOT NULL,
  `address_barangay_id` varchar(10) NOT NULL,
  `address_city_municipal_id` int(11) NOT NULL,
  `address_province_id` int(11) NOT NULL,
  `address_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`plate_number`, `model`, `is_lease`, `timestamp`, `vehicle_category`, `vehicle_type`, `available_day`, `available_hour_start`, `available_hour_end`, `vehicle_size_id`, `address_barangay_id`, `address_city_municipal_id`, `address_province_id`, `address_region_id`) VALUES
('AB-1234', 'Mitsubishi Pajero', 1, '12:20 PM', 3, 7, 'Monday', '9:00 AM', '5:00 PM', 5, '174', 2061, 188, 4),
('ASD-123', 'Mitsubishi Canter Insulated?Reefer Van Truck', 1, '11:43 AM', 3, 27, 'Tuesday', '10:00 AM', '6:00 PM', 15, '174', 2061, 188, 4),
('AZ-2468', 'Nissan?Titan XD', 1, '4:45 PM', 3, 14, 'Monday', '10:00 AM', '6:00 PM', 6, '174', 2061, 188, 4),
('BC-1235', 'Mitsubishi Pajero', 1, '1:20 PM', 3, 7, 'Tuesday', '10:00 AM', '6:00 PM', 5, '174', 2061, 188, 4),
('BNM-680', 'Fuso Fighter Dropside Truck 2008', 1, '1:55 PM', 3, 11, 'Tuesday', '5:00 AM', '1:00 PM', 16, '174', 2061, 188, 4),
('CD-1236', 'Mitsubishi Pajero', 0, '2:20 PM', 3, 7, 'Wednesday', '11:00 AM', '7:00 PM', 5, '174', 2061, 188, 4),
('DE-1237', 'Mitsubishi Pajero', 0, '3:20 PM', 3, 7, 'Thursday', '12:00 PM', '8:00 PM', 5, '174', 2061, 188, 4),
('EF-1238', 'Mitsubishi Pajero', 1, '4:20 PM', 3, 7, 'Friday', '1:00 PM', '9:00 PM', 5, '174', 2061, 188, 4),
('FG-1239', 'Mitsubishi Pajero', 0, '5:20 PM', 3, 7, 'Saturday', '2:00 PM', '10:00 PM', 5, '174', 2061, 188, 4),
('FGH-789', 'Fuso Fighter Dropside Truck 2009', 0, '2:55 PM', 3, 11, 'Tuesday', '6:00 AM', '2:00 PM', 16, '174', 2061, 188, 4),
('GH-1240', 'Toyota Hiace', 1, '6:20 PM', 3, 29, 'Monday', '3:00 PM', '11:00 PM', 11, '174', 2061, 188, 4),
('HI-1241', 'Toyota Hiace', 1, '7:20 PM', 3, 29, 'Monday', '4:00 PM', '12:00 AM', 11, '174', 2061, 188, 4),
('IJ-1242', 'Toyota Hiace', 1, '8:20 PM', 3, 29, 'Monday', '5:00 PM', '1:00 AM', 11, '174', 2061, 188, 4),
('IOP-246', 'Mitsubishi Canter Insulated?Reefer Van Truck', 1, '5:15 PM', 3, 27, 'Monday', '7:00 AM', '3:00 PM', 15, '174', 2061, 188, 4),
('JK-1243', 'Toyota Hiace', 0, '9:20 PM', 3, 29, 'Sunday', '6:00 PM', '2:00 AM', 11, '174', 2061, 188, 4),
('KL-1244', 'Toyota Hiace', 0, '10:20 PM', 3, 29, 'Monday', '7:00 PM', '3:00 AM', 11, '174', 2061, 188, 4),
('KLM-981', 'Fuso Fighter Dropside Truck 2004', 0, '9:55 AM', 3, 11, 'Monday', '1:00 AM', '9:00 AM', 16, '174', 2061, 188, 4),
('LM-1245', 'Toyota Hiace', 1, '11:20 PM', 3, 29, 'Thursday', '8:00 PM', '4:00 AM', 11, '174', 2061, 188, 4),
('MN-1246', 'Suzuki APV', 0, '10:12 AM', 3, 29, 'Thursday', '9:00 PM', '5:00 AM', 11, '174', 2061, 188, 4),
('NN-2481', 'Isuzu Giga Wing Van Truck', 0, '7:16 AM', 3, 11, 'Thursday', '11:00 PM', '7:00 AM', 18, '174', 2061, 188, 4),
('NO-1247', 'Suzuki APV', 1, '11:12 AM', 3, 29, 'Thursday', '10:00 PM', '6:00 AM', 11, '174', 2061, 188, 4),
('OM-2480', 'Isuzu Giga Wing Van Truck', 0, '6:16 AM', 3, 11, 'Thursday', '10:00 PM', '6:00 AM', 18, '174', 2061, 188, 4),
('OOD-220', 'Isuzu Giga Wing Van Truck', 1, '8:55 AM', 3, 11, 'Tuesday', '12:00 AM', '8:00 AM', 18, '174', 2061, 188, 4),
('OP-1248', 'Suzuki APV', 1, '12:12 PM', 3, 29, 'Wednesday', '11:00 PM', '7:00 AM', 11, '174', 2061, 188, 4),
('PL-2479', 'Isuzu Giga Wing Van Truck', 1, '5:16 AM', 3, 11, 'Thursday', '9:00 PM', '5:00 AM', 18, '174', 2061, 188, 4),
('PQ-1249', 'Suzuki APV', 1, '1:12 PM', 3, 29, 'Wednesday', '12:00 AM', '8:00 AM', 11, '174', 2061, 188, 4),
('QK-2478', 'Isuzu Giga Wing Van Truck', 1, '2:45 AM', 3, 11, 'Thursday', '8:00 PM', '4:00 AM', 18, '174', 2061, 188, 4),
('QPZ-044', 'Fuso Fighter Dropside Truck 2006', 1, '11:55 AM', 3, 11, 'Tuesday', '3:00 AM', '11:00 AM', 16, '174', 2061, 188, 4),
('QR-1250', 'Suzuki APV', 0, '2:12 PM', 3, 29, 'Wednesday', '1:00 AM', '9:00 AM', 11, '174', 2061, 188, 4),
('QWE-098', 'Mitsubishi Canter Insulated?Reefer Van Truck', 1, '10:43 AM', 3, 27, 'Monday', '9:00 AM', '5:00 PM', 15, '174', 2061, 188, 4),
('RGB-730', 'Fuso Fighter Dropside Truck 2005', 1, '10:55 AM', 3, 11, 'Monday', '2:00 AM', '10:00 AM', 16, '174', 2061, 188, 4),
('RJ-2477', 'Isuzu Giga Wing Van Truck', 1, '1:45 AM', 3, 11, 'Tuesday', '7:00 PM', '3:00 AM', 18, '174', 2061, 188, 4),
('RS-1251', 'Suzuki APV', 0, '3:12 PM', 3, 29, 'Tuesday', '2:00 AM', '10:00 AM', 11, '174', 2061, 188, 4),
('SI-2476', '8.5 Metre Inflatable RIB', 1, '12:45 AM', 2, 28, 'Friday', '6:00 PM', '2:00 AM', 13, '174', 2061, 188, 4),
('ST-1252', 'Nissan Frontier', 1, '4:12 PM', 3, 14, 'Tuesday', '3:00 AM', '11:00 AM', 6, '174', 2061, 188, 4),
('TH-2475', '8.5 Metre Inflatable RIB', 1, '11:45 AM', 2, 28, 'Friday', '5:00 PM', '1:00 AM', 13, '174', 2061, 188, 4),
('TU-1253', 'Nissan Frontier', 0, '5:12 PM', 3, 14, 'Friday', '4:00 AM', '12:00 PM', 6, '174', 2061, 188, 4),
('TYU-105', 'Fuso Fighter Dropside Truck 2007', 1, '12:55 PM', 3, 11, 'Thursday', '4:00 AM', '12:00 PM', 16, '174', 2061, 188, 4),
('UG-2474', '8.5 Metre Inflatable RIB', 1, '12:45 PM', 2, 28, 'Friday', '4:00 PM', '12:00 AM', 13, '174', 2061, 188, 4),
('UV-1254', 'Nissan Frontier', 1, '6:12 PM', 3, 14, 'Thursday', '5:00 AM', '1:00 PM', 6, '174', 2061, 188, 4),
('vF-2473', '8.5 Metre Inflatable RIB', 1, '2:45 PM', 2, 28, 'Sunday', '3:00 PM', '11:00 PM', 13, '174', 2061, 188, 4),
('VW-1255', 'Nissan Frontier', 1, '7:12 PM', 3, 14, 'Thursday', '6:00 AM', '2:00 PM', 6, '174', 2061, 188, 4),
('WE-2472', '8.5 Metre Inflatable RIB', 1, '8:45 AM', 2, 28, 'Sunday', '2:00 PM', '10:00 PM', 13, '174', 2061, 188, 4),
('WX-1256', 'Nissan Frontier', 1, '8:12 PM', 3, 14, 'Saturday', '7:00 AM', '3:00 PM', 6, '174', 2061, 188, 4),
('XD-2471', '8.5 Metre Inflatable RIB', 1, '7:45 AM', 2, 28, 'Sunday', '1:00 PM', '9:00 PM', 13, '174', 2061, 188, 4),
('XY-1257', 'Nissan Frontier', 0, '9:12 PM', 3, 14, 'Saturday', '8:00 AM', '4:00 PM', 6, '174', 2061, 188, 4),
('YC-2470', '8.5 Metre Inflatable RIB', 1, '6:45 PM', 2, 28, 'Monday', '12:00 PM', '8:00 PM', 13, '174', 2061, 188, 4),
('YZ-1258', 'Nissan?Titan XD', 0, '3:45 PM', 3, 14, 'Monday', '9:00 AM', '5:00 PM', 6, '174', 2061, 188, 4),
('ZB-2469', 'Nissan?Titan XD', 0, '5:45 PM', 3, 14, 'Monday', '11:00 AM', '7:00 PM', 6, '174', 2061, 188, 4),
('ZXC-456', 'Mitsubishi Canter Insulated?Reefer Van Truck', 1, '6:15 PM', 3, 27, 'Monday', '8:00 AM', '4:00 PM', 15, '174', 2061, 188, 4);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `timestamp` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_category`
--

INSERT INTO `vehicle_category` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Air', '08-07-2017', NULL),
(2, 'Sea', '08-07-2017', NULL),
(3, 'Land', '08-07-2017', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_size`
--

CREATE TABLE `vehicle_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_size`
--

INSERT INTO `vehicle_size` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Subcompact', '08-12-2017', '4 Cylinder; Avg MPG = 32'),
(2, 'Compact', '08-12-2017', '4 Cylinder; Avg MPG = 23'),
(3, 'Intermediate', NULL, '5 Cylinder; Avg MPG = 20'),
(4, 'Full-Size Vehicle', NULL, '6 Cyclinder; Avg MPG = 19'),
(5, 'Compact Pickup', NULL, '4 Cylinder; Avg MPG = 18'),
(6, 'Full-Size Pickup', NULL, '8 Cyclinder; Avg MPG = 13'),
(7, 'Compact Utility', NULL, '4 Cylinder; Avg MPG = 15'),
(8, 'Intermediate Utility', NULL, '6 Cylinder; Avg MPG = 15'),
(9, 'Full-Size Utility', NULL, '8 Cylinder; Avg MPG = 13'),
(10, 'Mini-Van', NULL, '6 Cylinder; Avg MPG = 17'),
(11, 'Full-Size Van', NULL, '6 Cylinder; Avg MPG = 13'),
(12, 'Small Boat', NULL, 'Standard Width: 8\' ||\r\nStandard Length: 12\',13\',14\',15\',16\',18\',19\' ||\r\nStandard Pontoon Diameter: 24\", 26\" ||\r\n Number of Pontoons: 2'),
(13, 'Medium Boat', NULL, 'Standard Width: 8\', 8.5\',10\' ||\r\nStandard Length: 20\', 25\', 30\', 35\', 40\' ||\r\nStandard Pontoon Diameter: 24\", 26\", 28\", 30\", 33\", 36\" ||\r\nNumber of Pontoons: 2 optional 3'),
(14, 'Large', NULL, 'Standard Width: 12\', 14\', 16\', 18\', 20\' ||\r\nStandard Length: 30\', 35\', 40\', 45\', 50\', 55\', 60\' ||\r\nStandard Pontoon Diameter: 30\", 33\", 36\", \r\n39\", 42\", 45\", 48\", 51\", 54\", 57\", 60\" ||\r\nNumber of Pontoons: 2 optional 3'),
(15, 'Small Truck (10-13 ft)', NULL, '1-3000lbs\r\n400-450 cubic feet\r\nMoving 1-5 Furniture items\r\nUp to 120 medium size boxes\r\n\r\nIntended for: Studio/Small 1 bed apartments (400-800 sqft)'),
(16, 'Medium Truck (14-17 ft)', NULL, '3000-5500 lbs\r\n650-850 cubic feet\r\nMoving 1-10 furniture items\r\nUp to 250 medium size boxes\r\n\r\nIntended for: 1-3 bedroom apartments (600-1200 sqft),\r\nSmall 1-2 bedroom houses (600-1200 sqft)'),
(17, 'Large Truck (18-24 ft)', NULL, '5500-6500 lbs\r\n900-1400 cubic feet\r\nUp to 450 medium size boxes\r\n\r\nIntended for: 3-4 bedrooms (1200-2400 sqft)'),
(18, 'X Large Truck (26+ ft)', NULL, '6500-8400 lbs\r\n1400-1500 cubic feet\r\nUp to 550 medium size boxes\r\n\r\nIntended for: 4+ bedrooms (2400+ sq ft)');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Convertible', '08-07-2017', 'If you can drop the top to feel the wind in your hair, the car is a convertible. Convertibles, sometimes called cabriolets or roadsters, come with either a soft folding top or a retractable hardtop.'),
(2, 'Coupe', '08-07-2017', 'A coupe has two doors and a conventional trunk or a sloping back with a hinged rear cargo hatch that opens upward.'),
(3, 'Crossover', '08-07-2017', 'Crossovers are tall wagons and SUVs that are based on a passenger-car platform\'s architecture (as opposed to a truck\'s) for improved ride, comfort and fuel economy. They come in all sizes, and many offer a third-row seat. A light-duty four-wheel-drive or all-wheel-drive system is usually optional. '),
(4, 'Diesel', '08-07-2017', 'A diesel is a vehicle whose engine runs on diesel fuel rather than gasoline. '),
(5, 'Hatchback', '08-07-2017', 'A hatchback is a car with a two- or four-door body configuration and a sloping back with a hinged rear cargo hatch that opens upward. '),
(6, 'Hybrid/Electric', '08-07-2017', 'A hybrid vehicle has both a gasoline-powered engine and an electric motor that operate in unison and/or independently to propel the vehicle.'),
(7, 'Luxury', '08-07-2017', NULL),
(8, 'Minivan', '08-07-2017', 'A minivan has a short hood and a box-shaped body enclosing a large passenger/cargo area. '),
(9, 'Sedan', '08-07-2017', 'A sedan has four doors and a conventional trunk or a sloping back with a hinged rear trunk lid that opens upward. '),
(10, 'SUV', '08-07-2017', 'Sport-utility vehicles offer available four-wheel or all-wheel drive and raised ground clearance in combination with a two- or four-door body. '),
(11, 'Truck', '08-07-2017', 'A truck has two or four doors and an exposed cargo bed.'),
(12, 'Wagon', '08-07-2017', 'Wagons have all the same passenger room and driving characteristics as the sedans they\'re based on, but offer more cargo room. A few of the larger wagons even offer a third-row seat. Automakers sometimes come up with names like \"Avant\" or \"Sportback\" or avoid the term wagon altogether. Here\'s an easy way to determine whether a vehicle is a wagon: The roof line of a wagon continues past the rear doors. '),
(13, 'Agricultural', '08-07-2017', 'For agricultural'),
(14, 'Pickup', '08-07-2017', 'Any vehicle with an open cargo bed in the rear.'),
(15, 'Scooter', '08-07-2017', NULL),
(16, 'Ambulance', '08-07-2017', NULL),
(17, 'Motorcycle', '08-07-2017', NULL),
(18, 'Rickshaw', '08-07-2017', NULL),
(19, 'Bulldozer', '08-07-2017', NULL),
(20, 'Dump Trucks', '08-07-2017', NULL),
(21, 'Tractor', '08-07-2017', NULL),
(22, 'Excavator', '08-07-2017', NULL),
(23, 'Helicopter', '08-07-2017', NULL),
(24, 'Terex', '08-07-2017', NULL),
(25, 'Tank', '08-07-2017', NULL),
(26, 'Boat', '08-07-2017', NULL),
(27, 'Refrigerated', NULL, NULL),
(28, 'Inflatable', NULL, NULL),
(29, 'Van', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(255) DEFAULT NULL,
  `year_established` int(11) DEFAULT NULL,
  `description` text,
  `area` varchar(45) DEFAULT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `open_hours` varchar(15) DEFAULT NULL,
  `close_hours` varchar(15) DEFAULT NULL,
  `open_day` varchar(45) DEFAULT NULL,
  `warehouse_type_id` int(11) NOT NULL,
  `warehouse_category_id` int(11) NOT NULL,
  `address_barangay_id` varchar(10) NOT NULL,
  `address_city_municipal_id` int(11) NOT NULL,
  `address_province_id` int(11) NOT NULL,
  `address_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `contact_person_name`, `year_established`, `description`, `area`, `timestamp`, `open_hours`, `close_hours`, `open_day`, `warehouse_type_id`, `warehouse_category_id`, `address_barangay_id`, `address_city_municipal_id`, `address_province_id`, `address_region_id`) VALUES
(1, 'Warehous A', 'Person 1', 1997, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '174', 2061, 188, 4),
(2, 'Warehouse B', 'Person 2', 2014, NULL, NULL, NULL, '8:00 AM', '8:00 PM', NULL, 1, 9, '174', 2061, 188, 4),
(3, 'Warehouse C', 'Person 3', 2013, NULL, NULL, NULL, '9:00 AM', '8:00 PM', NULL, 1, 10, '174', 2061, 188, 4),
(4, 'Warehouse D', 'Person 5', 2001, NULL, NULL, NULL, '10:00 AM', '10:00 PM', NULL, 1, 5, '174', 2061, 188, 4),
(5, 'Warehouse E', 'Person 7', 2000, NULL, NULL, NULL, '10:00 AM', '8:00 PM', NULL, 1, 6, '174', 2061, 188, 4),
(6, 'Warehouse F', 'Person 9', 1998, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '174', 2061, 188, 4);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_category`
--

CREATE TABLE `warehouse_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(25) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse_category`
--

INSERT INTO `warehouse_category` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'Public Warehouse', '08-06-2017', 'Owned and operated by private individuals for renting purpose. Those who open a public warehouse use it as hire to any interested persons and groups who paid rent fee to the owner of the warehouse.'),
(2, 'Manufacturer Warehouse', '08-06-2017', 'Owned and controlled by producers or companies who are into the production of goods. The companies or producers established the warehouse in order to store their goods after production until they are needed.'),
(3, 'Bonded Warehouse', '08-06-2017', 'Used to store goods whose duty is are not yet paid. Once the owner of the goods settle the custom duty a release Ã¯Â¿Â½warrantÃ¯Â¿Â½ will be issued by custom authorities. This document empowers its holder the goods named on it. This warehouse is normally located at the borders and operated by the custom authority.'),
(4, 'Whosesale Warehouse', '08-06-2017', 'Owned and controlled by the wholesaler for storing goods after purchase from the producers until they are sold to retailers or directly to the final consumers. The wholesaler buy in bulk from the producers and sell in small units to the retailer therefore, the wholesaler break the bulk of goods purchased and kept them in the warehouse until they bought.'),
(5, 'Overseas Warehouse', '08-06-2017', 'These catered for the overseas trade. They became the meeting places for overseas wholesale buyers where printed and plain could be discussed and ordered.'),
(6, 'Packing Warehouse', '08-06-2017', 'The main purpose of packing warehouses was the picking, checking, labelling and packing of goods for export.'),
(7, 'Railway Warehouse', '08-06-2017', 'Warehouses were built close to the major stations in railway hubs.'),
(8, 'Canal Warehouse', '08-06-2017', 'All these warehouse types can trace their origins back to the canal warehouses which were used for trans-shipment and storage.'),
(9, 'Climate-Controlled Warehouse', '08-06-2017', 'Handles many types of products including those that need special handling conditions such as freezers for storing frozen products, humidity-controlled environments for delicate products, such as produce or flowers, and dirt-free facilities for handling highly sensitive computer products.'),
(10, 'Distribution Center', '08-06-2017', 'For temporary activity. These warehouses serve as points in the distribution system at which products are received from many suppliers and quickly shipped out to many customers (e.g. Perishable goods enters in morning and distributed by the end of the day).'),
(11, 'State Warehouse', '08-06-2017', 'Created by the government to store contraband or smuggled goods seized by the custom authority.'),
(12, 'Sorting and Consolidation Warehouses: ', NULL, 'his warehouse type is not principally used for storage, but rather for receiving large inbound shipments and then breaking them down into smaller outbound loads. They might also be used for consolidating small inbound shipments into larger ones for dispatch to customers such as retail chains.'),
(13, 'Storage Warehouses', NULL, ' This warehouse type is often used for long-term storage of finished goods as part of a companyÃ¢â‚¬â„¢s outbound supply chain operation.Storage warehouses are also used by companies specializing in maintenance, repair, and similar activities where parts and equipment need to be stored ready for use when required.');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_detail_info`
--

CREATE TABLE `warehouse_detail_info` (
  `warehouse_id` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_type`
--

CREATE TABLE `warehouse_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timestamp` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse_type`
--

INSERT INTO `warehouse_type` (`id`, `name`, `timestamp`, `description`) VALUES
(1, 'sample', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`barangay_id`,`city_municipal_id`,`province_id`,`region_id`),
  ADD KEY `fk_address_city_municipal1_idx` (`city_municipal_id`),
  ADD KEY `fk_address_province1_idx` (`province_id`),
  ADD KEY `fk_address_region1_idx` (`region_id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`user_id`,`item_name`),
  ADD KEY `fk_auth_assignment_user1_idx` (`user_id`),
  ADD KEY `fk_auth_assignment_auth_item1_idx` (`item_name`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `fk_auth_item_auth_rule1_idx` (`auth_rule_name`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`child`,`parent`),
  ADD KEY `fk_auth_item_has_auth_item_auth_item2_idx` (`parent`),
  ADD KEY `fk_auth_item_has_auth_item_auth_item1_idx` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `city_municipal`
--
ALTER TABLE `city_municipal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `contact_number`
--
ALTER TABLE `contact_number`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `disaster`
--
ALTER TABLE `disaster`
  ADD PRIMARY KEY (`id`,`disaster_type`,`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_disaster_disaster_type1_idx` (`disaster_type`),
  ADD KEY `fk_disaster_address1_idx` (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`);

--
-- Indexes for table `disaster_type`
--
ALTER TABLE `disaster_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_donation_donation_type1_idx` (`donation_type_id`);

--
-- Indexes for table `donation_type`
--
ALTER TABLE `donation_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_donation_type_supply_type1_idx` (`supply_type_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_driver_personal1_idx` (`personal_info`);

--
-- Indexes for table `driver_of_vehicle`
--
ALTER TABLE `driver_of_vehicle`
  ADD PRIMARY KEY (`vehicle_plate_number`,`driver_id`),
  ADD KEY `fk_vehicle_has_driver_driver1_idx` (`driver_id`),
  ADD KEY `fk_vehicle_has_driver_vehicle1_idx` (`vehicle_plate_number`);

--
-- Indexes for table `legal_structure`
--
ALTER TABLE `legal_structure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_personal_contact_number1_idx` (`contact_number`),
  ADD KEY `fk_personal_address1_idx` (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`);

--
-- Indexes for table `primary_commodity`
--
ALTER TABLE `primary_commodity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `tracking_number` (`tracking_number`),
  ADD KEY `fk_request_delivery_status1_idx` (`delivery_status`),
  ADD KEY `fk_request_user_info1_idx` (`user_id`),
  ADD KEY `fk_request_address1_idx` (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`);

--
-- Indexes for table `requested_supply`
--
ALTER TABLE `requested_supply`
  ADD PRIMARY KEY (`request_id`,`request_user_info_user_id`,`supply_detail_info_supplier`,`supply_detail_info_supply_code`,`vehicle_plate_number`),
  ADD KEY `fk_request_has_supply_detail_info_supply_detail_info1_idx` (`supply_detail_info_supplier`,`supply_detail_info_supply_code`),
  ADD KEY `fk_request_has_supply_detail_info_request1_idx` (`request_id`,`request_user_info_user_id`),
  ADD KEY `fk_requested_supply_vehicle1_idx` (`vehicle_plate_number`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_supplier_supplier_type1_idx` (`supplier_type`),
  ADD KEY `fk_supplier_legal_structure1_idx` (`legal_structure_id`),
  ADD KEY `fk_supplier_primary_commodity1_idx` (`primary_commodity_id`);

--
-- Indexes for table `supplier_has_contact_number`
--
ALTER TABLE `supplier_has_contact_number`
  ADD PRIMARY KEY (`supplier_id`,`contact_number_id`),
  ADD KEY `fk_supplier_has_contact_number_contact_number1_idx` (`contact_number_id`),
  ADD KEY `fk_supplier_has_contact_number_supplier1_idx` (`supplier_id`);

--
-- Indexes for table `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `id_UNIQUE` (`code`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_supply_supply_type1_idx` (`supply_type`),
  ADD KEY `fk_supply_unit_of_measurement1_idx` (`unit_of_measurement_id`);

--
-- Indexes for table `supply_detail_info`
--
ALTER TABLE `supply_detail_info`
  ADD PRIMARY KEY (`supplier_id`,`supply_code`),
  ADD KEY `fk_supplier_has_supply_supply1_idx` (`supply_code`),
  ADD KEY `fk_supplier_has_supply_supplier1_idx` (`supplier_id`),
  ADD KEY `fk_supply_detail_info_address1_idx` (`address_barangay`,`address_city_municipal`,`address_province`,`address_region`),
  ADD KEY `fk_supply_detail_info_warehouse1_idx` (`warehouse`);

--
-- Indexes for table `supply_in_warehouse`
--
ALTER TABLE `supply_in_warehouse`
  ADD PRIMARY KEY (`supply_detail_info_supplier_id`,`supply_detail_info_supply_code`,`warehouse_detail_info_warehouse_id`,`warehouse_detail_info_contact_number_id`),
  ADD KEY `fk_warehouse_has_supply_detail_info_supply_detail_info1_idx` (`supply_detail_info_supplier_id`,`supply_detail_info_supply_code`),
  ADD KEY `fk_supply_storage_info_warehouse_detail_info1_idx` (`warehouse_detail_info_warehouse_id`,`warehouse_detail_info_contact_number_id`);

--
-- Indexes for table `supply_type`
--
ALTER TABLE `supply_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `unit_of_measurement`
--
ALTER TABLE `unit_of_measurement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_user_user_type1_idx` (`user_type`);

--
-- Indexes for table `user_has_donation`
--
ALTER TABLE `user_has_donation`
  ADD PRIMARY KEY (`user_info_user_id`,`donation_id`),
  ADD KEY `fk_user_info_has_donation_donation1_idx` (`donation_id`),
  ADD KEY `fk_user_info_has_donation_user_info1_idx` (`user_info_user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_has_personal_personal1_idx` (`personal_id`),
  ADD KEY `fk_user_has_personal_user1_idx` (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`plate_number`),
  ADD UNIQUE KEY `id_UNIQUE` (`plate_number`),
  ADD KEY `fk_vehicle_vehicle_category1_idx` (`vehicle_category`),
  ADD KEY `fk_vehicle_vehicle_type1_idx` (`vehicle_type`),
  ADD KEY `fk_vehicle_vehicle_size1_idx` (`vehicle_size_id`),
  ADD KEY `fk_vehicle_address1_idx` (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`);

--
-- Indexes for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `vehicle_size`
--
ALTER TABLE `vehicle_size`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `vehicle_typecol_UNIQUE` (`name`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_warehouse_warehouse_type1_idx` (`warehouse_type_id`),
  ADD KEY `fk_warehouse_warehouse_category1_idx` (`warehouse_category_id`),
  ADD KEY `fk_warehouse_address1_idx` (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`);

--
-- Indexes for table `warehouse_category`
--
ALTER TABLE `warehouse_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `warehouse_detail_info`
--
ALTER TABLE `warehouse_detail_info`
  ADD PRIMARY KEY (`warehouse_id`,`contact_number`),
  ADD KEY `fk_warehouse_has_contact_number_contact_number1_idx` (`contact_number`),
  ADD KEY `fk_warehouse_has_contact_number_warehouse1_idx` (`warehouse_id`);

--
-- Indexes for table `warehouse_type`
--
ALTER TABLE `warehouse_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_municipal`
--
ALTER TABLE `city_municipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2289;
--
-- AUTO_INCREMENT for table `contact_number`
--
ALTER TABLE `contact_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delivery_status`
--
ALTER TABLE `delivery_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `disaster`
--
ALTER TABLE `disaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disaster_type`
--
ALTER TABLE `disaster_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donation_type`
--
ALTER TABLE `donation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `legal_structure`
--
ALTER TABLE `legal_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `primary_commodity`
--
ALTER TABLE `primary_commodity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `supplier_type`
--
ALTER TABLE `supplier_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=999874564;
--
-- AUTO_INCREMENT for table `supply_type`
--
ALTER TABLE `supply_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `unit_of_measurement`
--
ALTER TABLE `unit_of_measurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_size`
--
ALTER TABLE `vehicle_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `warehouse_category`
--
ALTER TABLE `warehouse_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `warehouse_type`
--
ALTER TABLE `warehouse_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_city_municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_province1` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `fk_auth_assignment_auth_item1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_auth_assignment_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `fk_auth_item_auth_rule1` FOREIGN KEY (`auth_rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `fk_auth_item_has_auth_item_auth_item1` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_auth_item_has_auth_item_auth_item2` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `disaster`
--
ALTER TABLE `disaster`
  ADD CONSTRAINT `fk_disaster_address1` FOREIGN KEY (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`) REFERENCES `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disaster_disaster_type1` FOREIGN KEY (`disaster_type`) REFERENCES `disaster_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk_donation_donation_type1` FOREIGN KEY (`donation_type_id`) REFERENCES `donation_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donation_type`
--
ALTER TABLE `donation_type`
  ADD CONSTRAINT `fk_donation_type_supply_type1` FOREIGN KEY (`supply_type_id`) REFERENCES `supply_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `fk_driver_personal1` FOREIGN KEY (`personal_info`) REFERENCES `personal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `driver_of_vehicle`
--
ALTER TABLE `driver_of_vehicle`
  ADD CONSTRAINT `fk_vehicle_has_driver_driver1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_has_driver_vehicle1` FOREIGN KEY (`vehicle_plate_number`) REFERENCES `vehicle` (`plate_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal_address1` FOREIGN KEY (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`) REFERENCES `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personal_contact_number1` FOREIGN KEY (`contact_number`) REFERENCES `contact_number` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_address1` FOREIGN KEY (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`) REFERENCES `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_delivery_status1` FOREIGN KEY (`delivery_status`) REFERENCES `delivery_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_user_info1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requested_supply`
--
ALTER TABLE `requested_supply`
  ADD CONSTRAINT `fk_request_has_supply_detail_info_request1` FOREIGN KEY (`request_id`,`request_user_info_user_id`) REFERENCES `request` (`id`, `user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_has_supply_detail_info_supply_detail_info1` FOREIGN KEY (`supply_detail_info_supplier`,`supply_detail_info_supply_code`) REFERENCES `supply_detail_info` (`supplier_id`, `supply_code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requested_supply_vehicle1` FOREIGN KEY (`vehicle_plate_number`) REFERENCES `vehicle` (`plate_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_supplier_legal_structure1` FOREIGN KEY (`legal_structure_id`) REFERENCES `legal_structure` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supplier_primary_commodity1` FOREIGN KEY (`primary_commodity_id`) REFERENCES `primary_commodity` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supplier_supplier_type1` FOREIGN KEY (`supplier_type`) REFERENCES `supplier_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier_has_contact_number`
--
ALTER TABLE `supplier_has_contact_number`
  ADD CONSTRAINT `fk_supplier_has_contact_number_contact_number1` FOREIGN KEY (`contact_number_id`) REFERENCES `contact_number` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supplier_has_contact_number_supplier1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `fk_supply_supply_type1` FOREIGN KEY (`supply_type`) REFERENCES `supply_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_unit_of_measurement1` FOREIGN KEY (`unit_of_measurement_id`) REFERENCES `unit_of_measurement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supply_detail_info`
--
ALTER TABLE `supply_detail_info`
  ADD CONSTRAINT `fk_supplier_has_supply_supplier1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supplier_has_supply_supply1` FOREIGN KEY (`supply_code`) REFERENCES `supply` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_detail_info_address1` FOREIGN KEY (`address_barangay`,`address_city_municipal`,`address_province`,`address_region`) REFERENCES `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_detail_info_warehouse1` FOREIGN KEY (`warehouse`) REFERENCES `warehouse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supply_in_warehouse`
--
ALTER TABLE `supply_in_warehouse`
  ADD CONSTRAINT `fk_supply_storage_info_warehouse_detail_info1` FOREIGN KEY (`warehouse_detail_info_warehouse_id`,`warehouse_detail_info_contact_number_id`) REFERENCES `warehouse_detail_info` (`warehouse_id`, `contact_number`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_warehouse_has_supply_detail_info_supply_detail_info1` FOREIGN KEY (`supply_detail_info_supplier_id`,`supply_detail_info_supply_code`) REFERENCES `supply_detail_info` (`supplier_id`, `supply_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_type1` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_donation`
--
ALTER TABLE `user_has_donation`
  ADD CONSTRAINT `fk_user_info_has_donation_donation1` FOREIGN KEY (`donation_id`) REFERENCES `donation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_info_has_donation_user_info1` FOREIGN KEY (`user_info_user_id`) REFERENCES `user_info` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `fk_user_has_personal_personal1` FOREIGN KEY (`personal_id`) REFERENCES `personal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_personal_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_address1` FOREIGN KEY (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`) REFERENCES `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_vehicle_category1` FOREIGN KEY (`vehicle_category`) REFERENCES `vehicle_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_vehicle_size1` FOREIGN KEY (`vehicle_size_id`) REFERENCES `vehicle_size` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_vehicle_type1` FOREIGN KEY (`vehicle_type`) REFERENCES `vehicle_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `fk_warehouse_address1` FOREIGN KEY (`address_barangay_id`,`address_city_municipal_id`,`address_province_id`,`address_region_id`) REFERENCES `address` (`barangay_id`, `city_municipal_id`, `province_id`, `region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_warehouse_warehouse_category1` FOREIGN KEY (`warehouse_category_id`) REFERENCES `warehouse_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_warehouse_warehouse_type1` FOREIGN KEY (`warehouse_type_id`) REFERENCES `warehouse_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `warehouse_detail_info`
--
ALTER TABLE `warehouse_detail_info`
  ADD CONSTRAINT `fk_warehouse_has_contact_number_contact_number1` FOREIGN KEY (`contact_number`) REFERENCES `contact_number` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_warehouse_has_contact_number_warehouse1` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
