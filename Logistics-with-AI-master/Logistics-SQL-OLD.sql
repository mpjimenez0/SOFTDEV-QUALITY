-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 06:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('External', 4, NULL),
('Municipal', 3, NULL),
('National', 1, NULL),
('National', 5, NULL),
('Regional', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `data`, `created_at`, `updated_at`, `rule_name`) VALUES
('create-item', 2, NULL, NULL, NULL, NULL, NULL),
('create-records', 2, NULL, NULL, NULL, NULL, NULL),
('create-warehouse', 2, NULL, NULL, NULL, NULL, NULL),
('External', 1, 'For external users', NULL, NULL, NULL, NULL),
('Municipal', 1, 'For municipal or city administrators', NULL, NULL, NULL, NULL),
('National', 1, 'For national administrators', NULL, NULL, NULL, NULL),
('read-all-user', 2, NULL, NULL, NULL, NULL, NULL),
('read-donation', 2, NULL, NULL, NULL, NULL, NULL),
('read-expiration-incoming-supply', 2, NULL, NULL, NULL, NULL, NULL),
('read-records', 2, NULL, NULL, NULL, NULL, NULL),
('read-warehouse', 2, NULL, NULL, NULL, NULL, NULL),
('Regional', 1, 'For regional administrators', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `child` varchar(64) NOT NULL,
  `parent` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`child`, `parent`) VALUES
('Municipal', 'create-item'),
('National', 'create-item'),
('Regional', 'create-item');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `name` varchar(255) NOT NULL,
  `city_municipal` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `updated_at` varchar(10) DEFAULT NULL,
  `created_at` varchar(10) DEFAULT NULL,
  `population_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`name`, `city_municipal`, `province`, `region`, `updated_at`, `created_at`, `population_id`) VALUES
('Cabrera', 'Pasay', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Calzada', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Cartimar', 'Pasay', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Central Bicutan', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Edang', 'Pasay', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Fort Bonifacio', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Hagonoy', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Kalayaan', 'Pasay', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Katuparan', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Libertad', 'Pasay', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Malibay', 'Pasay', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Merville', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Moonwalk', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', '2017-04-08', '2017-04-08', NULL),
('Sto. Niño', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Sun Valley', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Tambo', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Tanyag', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Upper Bicutan', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Vitalez', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL),
('Western Bicutan', 'Taguig', 'Metro Manila', 'National Capital Region', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city_municipal`
--

CREATE TABLE `city_municipal` (
  `name` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_municipal`
--

INSERT INTO `city_municipal` (`name`, `province`, `region`) VALUES
('Akbar', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Al-Barka', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Amai Manabilang (Bumbaran)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Bacolod-Kalawi (Bacolod-Grande)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Balabagan', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Balindong (Watu)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Bayang', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Binidayan', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Buadiposo-Buntong', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Bubong', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Butig', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Calanogas', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Caloocan', 'Metro Manila', 'National Capital Region'),
('Ditsaan-Ramain', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Ganassi', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Hadji Mohammad Ajul', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Hadji Muhtamad', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Isabela City', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Kapai', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Kapatagan', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Lamitan', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Lantawan', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Las Piñas', 'Metro Manila', 'National Capital Region'),
('Lumba-Bayabao (Maguing)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Lumbaca-Unayan', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Lumbatan', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Lumbayanague', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Madalum', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Madamba', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Maguing', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Makati', 'Metro Manila', 'National Capital Region'),
('Malabang', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Malabon', 'Metro Manila', 'National Capital Region'),
('Maluso', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Mandaluyong', 'Metro Manila', 'National Capital Region'),
('Manila', 'Metro Manila', 'National Capital Region'),
('Marantao', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Marawi', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Marikina', 'Metro Manila', 'National Capital Region'),
('Marogong', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Masiu', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Mulondo', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Muntinlupa', 'Metro Manila', 'National Capital Region'),
('Navotas', 'Metro Manila', 'National Capital Region'),
('Pagayawan (Tatarikan)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Parañaque', 'Metro Manila', 'National Capital Region'),
('Pasay', 'Metro Manila', 'National Capital Region'),
('Pasig', 'Metro Manila', 'National Capital Region'),
('Pateros', 'Metro Manila', 'National Capital Region'),
('Piagapo', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Picong (Sultan Gumander)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Poona Bayabao (Gata)', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Pualas', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Quezon City', 'Metro Manila', 'National Capital Region'),
('Saguiaran', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('San Juan', 'Metro Manila', 'National Capital Region'),
('Sultan Dumalondong', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Sumisip', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Tabuan-Lasa', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Tagoloan II', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Taguig', 'Metro Manila', 'National Capital Region'),
('Tamparan', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Taraka', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Tipo-Tipo', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Tubaran', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Tuburan', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Tugaya', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Ungkaya Pukan', 'Basilan', 'Autonomous Region in Muslim Mindanao'),
('Valenzuela', 'Metro Manila', 'National Capital Region'),
('Wao', 'Lanao del Sur', 'Autonomous Region in Muslim Mindanao');

-- --------------------------------------------------------

--
-- Table structure for table `disaster_site`
--

CREATE TABLE `disaster_site` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` enum('School','Hospital','Mall','Evacuation Center','Camp') NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `year_established` year(4) NOT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(45) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `type_of_donation` enum('Governmental','Charitable Organization','NGO/Non-Profit','International') DEFAULT NULL,
  `supply_code` int(11) DEFAULT NULL,
  `date_today` varchar(10) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `legal_status_of_org` varchar(255) DEFAULT NULL,
  `total_member` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`name`, `region`) VALUES
('Abra', 'Cordillera Administrative Region'),
('Agusan del Norte', 'Caraga'),
('Agusan del Sur', 'Caraga'),
('Aklan', 'Western Visayas'),
('Albay', 'Bicol Region'),
('Antique', 'Western Visayas'),
('Apayao', 'Cordillera Administrative Region'),
('Aurora', 'Central Luzon'),
('Basilan', 'Autonomous Region in Muslim Mindanao'),
('Bataan', 'Central Luzon'),
('Batanes', 'Cagayan Valley'),
('Batangas', 'CALABARZON'),
('Benguet', 'Cordillera Administrative Region'),
('Biliran', 'Eastern Visayas'),
('Bohol', 'Central Visayas'),
('Bukidnon', 'Northern Mindanao'),
('Bulacan', 'Central Luzon'),
('Cagayan', 'Cagayan Valley'),
('Camarines Norte', 'Bicol Region'),
('Camarines Sur', 'Bicol Region'),
('Camiguin', 'Northern Mindanao'),
('Capiz', 'Western Visayas'),
('Catanduanes', 'Bicol Region'),
('Cavite', 'CALABARZON'),
('Cebu', 'Central Visayas'),
('Compostela Valley', 'Davao Region'),
('Cotabato', 'SOCCSKSARGEN'),
('Davao del Norte', 'Davao Region'),
('Davao del Sur', 'Davao Region'),
('Davao Occidental', 'Davao Region'),
('Davao Oriental', 'Davao Region'),
('Dinagat Islands', 'Caraga'),
('Eastern Samar', 'Eastern Visayas'),
('Guimaras', 'Western Visayas'),
('Ifugao', 'Cordillera Administrative Region'),
('Ilocos Norte', 'Ilocos Region'),
('Ilocos Sur ', 'Ilocos Region'),
('Iloilo', 'Western Visayas'),
('Isabela', 'Cagayan Valley'),
('Kalinga', 'Cordillera Administrative Region'),
('La Union', 'Ilocos Region'),
('Laguna', 'CALABARZON'),
('Lanao del Norte', 'Northern Mindanao'),
('Lanao del Sur', 'Autonomous Region in Muslim Mindanao'),
('Leyte', 'Eastern Visayas'),
('Maguindanao', 'Autonomous Region in Muslim Mindanao'),
('Marinduque', 'Southwestern Tagalog Region'),
('Masbate', 'Bicol Region'),
('Metro Manila', 'National Capital Region'),
('Misamis Occidental', 'Northern Mindanao'),
('Misamis Oriental', 'Northern Mindanao'),
('Mountain Province', 'Cordillera Administrative Region'),
('Negros Occidental', 'Negros Island Region'),
('Negros Oriental', 'Negros Island Region'),
('Northern Samar', 'Eastern Visayas'),
('Nueva Ecija', 'Central Luzon'),
('Nueva Vizcaya', 'Cagayan Valley'),
('Occidental Mindoro', 'Southwestern Tagalog Region'),
('Oriental Mindoro', 'Southwestern Tagalog Region'),
('Palawan', 'Southwestern Tagalog Region'),
('Pampanga', 'Central Luzon'),
('Pangasinan', 'Ilocos Region'),
('Quezon', 'CALABARZON'),
('Quirino', 'Cagayan Valley'),
('Rizal', 'CALABARZON'),
('Romblon', 'Southwestern Tagalog Region'),
('Samar', 'Eastern Visayas'),
('Sample', 'National Capital Region'),
('Sarangani', 'SOCCSKSARGEN'),
('Siquijor', 'Central Visayas'),
('Sorsogon', 'Bicol Region'),
('South Cotabato', 'SOCCSKSARGEN'),
('Southern Leyte', 'Eastern Visayas'),
('Sultan Kudarat', 'SOCCSKSARGEN'),
('Sulu', 'Autonomous Region in Muslim Mindanao'),
('Surigao del Norte', 'Caraga'),
('Surigao del Sur', 'Caraga'),
('Tarlac', 'Central Luzon'),
('Tawi-Tawi', 'Autonomous Region in Muslim Mindanao'),
('Zambales', 'Central Luzon'),
('Zamboanga del Norte', 'Zamboanga Peninsula'),
('Zamboanga del Sur', 'Zamboanga Peninsula'),
('Zamboanga Sibugay', 'Zamboanga Peninsula');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `name` varchar(255) NOT NULL,
  `number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`name`, `number`) VALUES
('Caraga', ' XIII'),
('Negros Island Region', ' XVIII'),
('Autonomous Region in Muslim Mindanao', 'ARMM'),
('Cordillera Administrative Region', 'CAR'),
('Ilocos Region', 'I'),
('Cagayan Valley', 'II'),
('Central Luzon', 'III'),
('CALABARZON', 'IV-A'),
('Zamboanga Peninsula', 'IX'),
('Southwestern Tagalog Region', 'MIMAROPA'),
('National Capital Region', 'NCR'),
('Bicol Region', 'V'),
('Western Visayas', 'VI'),
('Central Visayas', 'VII'),
('Eastern Visayas', 'VIII'),
('Northern Mindanao', 'X'),
('Davao Region', 'XI'),
('SOCCSKSARGEN', 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `date_needed` varchar(10) NOT NULL,
  `date_requested` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `quantity_needed` int(11) NOT NULL,
  `receipient` varchar(255) NOT NULL,
  `beneficiary` varchar(255) DEFAULT NULL,
  `priority` enum('High','Medium','Low') DEFAULT NULL,
  `status` enum('Transit','Pending','Delivered','Confirmed') DEFAULT NULL,
  `total_quantity` int(11) DEFAULT NULL,
  `total_request` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `vehicle_plate_number` varchar(20) DEFAULT NULL,
  `supply_code` int(11) DEFAULT NULL,
  `volunteer` int(11) DEFAULT NULL,

  `volunteer_occupation` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(45) DEFAULT NULL,
  `vehicle_name` varchar(255) DEFAULT NULL,
  `supply_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `date_needed`, `date_requested`, `reason`, `quantity_needed`, `receipient`, `beneficiary`, `priority`, `status`, `total_quantity`, `total_request`, `user`, `vehicle_plate_number`, `supply_code`, `volunteer`, `volunteer_occupation`, `vehicle_type`, `vehicle_name`, `supply_type`) VALUES
(1, '04/14/2017', '04/13/2017', 'For Yolanda''s victim', 255, 'National', 'Children', NULL, 'Pending', NULL, NULL, 1, 'ABC-123', 1, 1, '1', 'ABC-123', 'ABC-123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `name` varchar(255) NOT NULL,
  `acronym` varchar(255) DEFAULT NULL,
  `contact` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`name`, `acronym`, `contact`, `email`, `contact_person`, `website`, `barangay`, `city_municipal`, `province`, `region`) VALUES
('ACE Hardware Store', 'AHS', '0926152128', 'ace@yahoo.com', 'Toti Casino', '', 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region'),
('Toti Shoe Corporation', 'TSC', '09261523128', 'tsc@yahoo.com', 'Jana Marie Gardon', '', 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `code` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Agriculture','Building Materials','Clothing/Textile','Equipment & Tools','Food Items','Fuel','Houseware Supplies','Kids Supplies','Medical Equipment/Supplies','Services','Electrical Supplies/Survival','Sleeping Gear','Sports/Recreation','WaSH','Others') NOT NULL,
  `quantity` int(11) NOT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `date_delivered` varchar(10) DEFAULT NULL,
  `date_received` varchar(10) DEFAULT NULL,
  `expiration_date` varchar(10) DEFAULT NULL,
  `remaining_supply` int(11) DEFAULT NULL,
  `total_supply` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `warehouse_name` varchar(255) NOT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) NOT NULL,
  `supplier_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`code`, `name`, `type`, `quantity`, `weight`, `date_delivered`, `date_received`, `expiration_date`, `remaining_supply`, `total_supply`, `comments`, `warehouse_name`, `barangay`, `city_municipal`, `province`, `region`, `supplier_name`) VALUES
(1, 'ATM', 'Agriculture', 11, NULL, '2017-04-10', '2017-04-09', NULL, NULL, NULL, NULL, 'ARMM Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(2, 'Air Compressor', 'Equipment & Tools', 100, NULL, '2017-04-10', '2017-04-11', NULL, NULL, NULL, NULL, 'FO1 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(3, 'Anticeptic', 'Medical Equipment/Supplies', 1000, NULL, '2017-04-07', '2017-04-10', NULL, NULL, NULL, NULL, 'NROC Warehouse A', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(4, 'Asphalt', 'Building Materials', 266, NULL, '2017-04-08', '2017-04-10', NULL, NULL, NULL, NULL, 'FO11 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(5, 'Bandages', 'Medical Equipment/Supplies', 88, NULL, '2017-04-01', '2017-04-10', NULL, NULL, NULL, NULL, 'FO3 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(6, 'Bath Towel', 'WaSH', 1222, NULL, '2017-04-10', '2017-04-10', NULL, NULL, NULL, NULL, 'FO11 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(7, 'Boat', 'Equipment & Tools', 5, NULL, '2017-04-10', '2017-04-10', NULL, NULL, NULL, NULL, 'NROC Warehouse B', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(8, 'Children''s Clothing', 'Kids Supplies', 24556, NULL, '2017-04-10', '2017-04-10', NULL, NULL, NULL, NULL, 'FO6 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(9, 'Cooking Utensils', 'Houseware Supplies', 998, NULL, '2017-04-10', '0000-00-00', NULL, NULL, NULL, NULL, 'FO4B Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(10, 'Diapers', 'Kids Supplies', 10000, NULL, '2017-04-09', '2017-04-10', NULL, NULL, NULL, NULL, 'FO3 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(11, 'Face Masks', 'Medical Equipment/Supplies', 15000, NULL, '2017-04-10', '2017-04-10', NULL, NULL, NULL, NULL, 'FO3 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(12, 'First Aid Kit', 'Medical Equipment/Supplies', 999, '', '04/15/2017', '2017-04-10', '04/29/2017', NULL, NULL, '', 'FO2 Warehouse', 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', 'ACE Hardware Store'),
(13, 'General Cable', 'Equipment & Tools', 56, NULL, '2017-04-07', '2017-04-10', NULL, NULL, NULL, NULL, 'FO10 Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(14, 'Garbage Can', 'Equipment & Tools', 9999, NULL, '2017-04-06', '2017-04-08', NULL, NULL, NULL, NULL, 'NCR Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(15, 'Ice', 'Food Items', 9988, NULL, '2017-04-10', '2017-04-10', NULL, NULL, NULL, NULL, 'NCR Warehouse', NULL, 'Pasay', NULL, 'National Capital Region', NULL),
(16, 'Hand Soap', 'WaSH', 123, '', '04/15/2017', '04/14/2017', '08/10/2017', NULL, NULL, '', 'NROC Warehouse B', 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', 'ACE Hardware Store');

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
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `marital_status` enum('Married','Single') NOT NULL,
  `active_inactive` enum('Active','Inactive') DEFAULT NULL,
  `birth_year` year(4) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `type` enum('National','Regional','Municipal','External') DEFAULT NULL,
  `total_user` int(11) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `first_name`, `middle_name`, `last_name`, `contact`, `marital_status`, `active_inactive`, `birth_year`, `organization`, `type`, `total_user`, `barangay`, `city_municipal`, `province`, `region`, `image`) VALUES
(1, 'jcheramia', 'UBREe__pvuwg35yd2WGdwEV_0j7UUbzs', '$2y$13$1Qs5kY2eNWzjzxXyGdbnguvFObNBqIVtv1PQeENSbLvJHSChL5RzS', NULL, 'johannaheramia@gmail.com', 10, '1491637951', '1491637951', 'Johanna Marisse', 'Credito', 'Heramia', '09261523128', 'Single', 'Active', 1997, 'Asia Pacific College', 'National', NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', ''),
(2, 'jggardon', 'F1mMYtvra9aPtY8a8G6Z6bSGD0qFunls', '$2y$13$JShj08UNR4GeOHRNMoRPUOO7MeM.s8.M.ZR7PDcBJmVmBw6DcrTHC', NULL, 'janamarie.gardon@gmail.com', 10, '1491638521', '1491638521', 'Jana Marie', 'Gavarra', 'Gardon', '09064902062', 'Single', 'Active', 1997, 'Asia Pacific College', 'Regional', NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', ''),
(3, 'jgtadeo', 'oyefcDZRGRoQveNnuJlAuBM-UTDxXdPj', '$2y$13$O.D17HbcikzlSEgfFYKVueftlt1/7oqkpPChGA6xl15g.7LZPLl5.', NULL, 'renzotadeo26@gmail.com', 10, '1491849071', '1491849071', 'Jose Lorenzo', 'Gonzales', 'Tadeo', '09354811320', 'Single', 'Active', 1997, 'Asia Pacific College', 'Municipal', NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', ''),
(4, 'mlbelchez', 'tgVKKR-8LgLCFOkgulFUfloyRRGIOrde', '$2y$13$VBJMDrZCtcsVq3CGby8qYurCN0mudBidvA4Uch2BUNjM.0IliL/Ti', NULL, 'mlbelchez@student.apc.edu.ph', 10, '1491850198', '1491850198', 'Maica', 'Lucero', 'Belchez', '09153743329', 'Single', 'Active', 1997, 'Asia Pacific College', 'External', NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', ''),
(5, 'ecasiño', '52rO_uGJY1klujcgSW7BieQiCz8UhiOA', '$2y$13$2LXacyEO/xYTtQxeAsrWqutNua4DZlbaaFZWLWdKGhH8V00kI/wpi', NULL, 'edmundo@gmail.com', 10, '1492182327', '1492182327', 'Edmundo', '', 'Casiño', '09261523128', 'Single', 'Active', 1997, 'Asia Pacific College', 'National', NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', NULL),
(6, 'dpbalcena', 'fMnvRR8QGQMe81M3biJUgsJuWLgICGxT', '$2y$13$YL8obJRruHtHS4kTbuLU0eRK3a//GdVOcykCYBGpumst6xvwz3jNC', NULL, 'dpbalcena@student.apc.edu.ph', 10, '1492336122', '1492336122', 'Danya', 'Pateño', 'Balcena', '09261523128', 'Single', 'Active', 1997, 'Asia Pacific College', NULL, NULL, 'Sun Valley', 'Parañaque', 'Metro Manila', 'National Capital Region', NULL),
(7, 'fghaboc', 'GS8COYKPsE6bYachJTk_eLq5OLwWqoSZ', '$2y$13$OFo7hMS9ZIt29tgZrHXLf.i4uQla2ccndRboUNzt.RfQ0GHopy1fq', NULL, 'fghaboc@student.apc.edu.ph', 10, '1492336529', '1492336529', 'Florence Gail', 'Gumogda', 'Haboc', '09064902062', 'Single', 'Active', 1997, 'Asia Pacific College', NULL, NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `plate_number` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Light Vehicle','Medium Vehicle','Heavy Vehicle') NOT NULL,
  `type_star` enum('Sea','Air','Road') NOT NULL,
  `classification` enum('Private','Public') NOT NULL,
  `width` varchar(45) DEFAULT NULL,
  `length` varchar(45) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `fuel_capacity` varchar(45) DEFAULT NULL,
  `max_distance_fuel` varchar(45) DEFAULT NULL,
  `capacity` varchar(45) DEFAULT NULL,
  `owner` varchar(255) NOT NULL,
  `rent_owned` enum('Rent','Owned') NOT NULL,
  `speed` varchar(45) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `remaining_vehicle` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`plate_number`, `name`, `type`, `type_star`, `classification`, `width`, `length`, `height`, `fuel_capacity`, `max_distance_fuel`, `capacity`, `owner`, `rent_owned`, `speed`, `quantity`, `remaining_vehicle`, `comment`, `barangay`, `city_municipal`, `province`, `region`) VALUES
('ABC-123', 'Light SUV', 'Light Vehicle', 'Road', 'Private', NULL, NULL, NULL, NULL, NULL, NULL, 'Toti Casiño', 'Rent', NULL, 12, NULL, NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region'),
('TUV-555', 'Dump Truck', 'Medium Vehicle', 'Road', 'Public', NULL, NULL, NULL, NULL, NULL, NULL, 'Toti Casiño', 'Rent', NULL, 11, NULL, NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region'),
('TUV-585', 'Bulldozer', 'Heavy Vehicle', 'Road', 'Public', NULL, NULL, NULL, NULL, NULL, NULL, 'Toti Casiño', 'Rent', NULL, 11, NULL, NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `birth_year` year(4) NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_registered` varchar(10) DEFAULT NULL,
  `occupation` enum('Firefighting','Accounting','Care and shelter','Fumigation','Debris removal','Health care','Construction','General labor','Transportation','Translation','Resource protection','Search and rescue','Engineering','Housing','Skilled Labor','Communications','Automative repair','Security','Demolition','Architecture','Legal','Administrative','Planning','Catering','Photography','Household repair','Warehousing') NOT NULL,
  `available_start_time` varchar(10) NOT NULL,
  `available_end_time` varchar(10) DEFAULT NULL,
  `available_day` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `total_volunteer` int(11) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city_municipal` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `middle_name`, `last_name`, `organization`, `birth_year`, `contact`, `email`, `date_registered`, `occupation`, `available_start_time`, `available_end_time`, `available_day`, `total_volunteer`, `barangay`, `city_municipal`, `province`, `region`) VALUES
(1, 'Kyle', 'Vee', 'Lee', 'Asia Pacific Organization', 1997, NULL, NULL, NULL, 'Engineering', '9:00', '10:00', 'Monday', NULL, 'Nichols', 'Pasay', 'Metro Manila', 'National Capital Region');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `name` varchar(255) NOT NULL,
  `status` enum('Rent','Owned') NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `year_established` year(4) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `private_public` enum('Private','Public') NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `total_warehouse` int(11) DEFAULT NULL,
  `created_at` varchar(10) DEFAULT NULL,
  `updated_at` varchar(10) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`name`, `status`, `contact`, `email`, `area`, `year_established`, `capacity`, `room`, `private_public`, `comments`, `total_warehouse`, `created_at`, `updated_at`, `user`, `longitude`, `latitude`) VALUES
('ARMM Warehouse', 'Owned', NULL, NULL, NULL, 2010, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CAR Warehouse', 'Owned', NULL, NULL, NULL, 2016, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CARAGA Warehouse', 'Owned', NULL, NULL, NULL, 2000, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO1 Warehouse', 'Owned', NULL, NULL, NULL, 2001, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO10 Warehouse', 'Owned', NULL, NULL, NULL, 1998, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO11 Warehouse', 'Owned', NULL, NULL, NULL, 2013, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO12 Warehouse', 'Rent', NULL, NULL, NULL, 2012, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO2 Warehouse', 'Owned', NULL, NULL, NULL, 1996, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO3 Warehouse', 'Owned', NULL, NULL, NULL, 2002, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO4A Warehouse', 'Owned', NULL, NULL, NULL, 2006, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO4B Warehouse', 'Rent', NULL, NULL, NULL, 2009, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO5 Warehouse', 'Owned', NULL, NULL, NULL, 2005, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO6 Warehouse', 'Owned', NULL, NULL, NULL, 2011, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO7 Warehouse', 'Rent', NULL, NULL, NULL, 2005, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO8 Warehouse', 'Owned', NULL, NULL, NULL, 1999, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FO9 Warehouse', 'Rent', NULL, NULL, NULL, 2012, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NCR Warehouse', 'Rent', NULL, NULL, NULL, 2000, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse A', 'Owned', NULL, NULL, NULL, 1997, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse B', 'Rent', NULL, NULL, NULL, 1990, NULL, NULL, 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse C', 'Rent', NULL, NULL, NULL, 2000, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse D', 'Owned', NULL, NULL, NULL, 2003, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse E', 'Rent', NULL, NULL, NULL, 1992, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse F', 'Owned', NULL, NULL, NULL, 1997, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NROC Warehouse G', 'Owned', NULL, NULL, NULL, 1999, NULL, NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `fk_auth_assignment_user1_idx` (`user_id`),
  ADD KEY `fk_auth_assignment_auth_item1_idx` (`item_name`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_auth_item_auth_rule1_idx` (`rule_name`);

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
  ADD PRIMARY KEY (`name`,`city_municipal`,`province`,`region`),
  ADD UNIQUE KEY `number_UNIQUE` (`name`),
  ADD KEY `fk_barangay_city_municipal1_idx` (`city_municipal`,`province`,`region`),
  ADD KEY `fk_barangay_population1_idx` (`population_id`);

--
-- Indexes for table `city_municipal`
--
ALTER TABLE `city_municipal`
  ADD PRIMARY KEY (`name`,`province`,`region`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_city_municipal_province1_idx` (`province`,`region`);

--
-- Indexes for table `disaster_site`
--
ALTER TABLE `disaster_site`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_disaster_site_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_donor_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`),
  ADD KEY `fk_donation_supply1_idx` (`supply_code`);

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`name`,`region`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_province_region1_idx` (`region`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD UNIQUE KEY `number_UNIQUE` (`number`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_request_user1_idx` (`user`),
  ADD KEY `fk_request_vehicle1_idx` (`vehicle_plate_number`),
  ADD KEY `fk_request_supply1_idx` (`supply_code`),
  ADD KEY `fk_request_volunteer1_idx` (`volunteer`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_supplier_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`code`,`warehouse_name`),
  ADD KEY `fk_supply_warehouse1_idx` (`warehouse_name`),
  ADD KEY `fk_supply_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`),
  ADD KEY `fk_supply_supplier1_idx` (`supplier_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_user_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`plate_number`),
  ADD UNIQUE KEY `plate_number_UNIQUE` (`plate_number`),
  ADD KEY `fk_vehicle_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_volunteer_barangay1_idx` (`barangay`,`city_municipal`,`province`,`region`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD KEY `fk_warehouse_user1_idx` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disaster_site`
--
ALTER TABLE `disaster_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `population`
--
ALTER TABLE `population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `fk_auth_item_auth_rule1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `fk_auth_item_has_auth_item_auth_item1` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_auth_item_has_auth_item_auth_item2` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barangay`
--
ALTER TABLE `barangay`
  ADD CONSTRAINT `fk_barangay_city_municipal1` FOREIGN KEY (`city_municipal`,`province`,`region`) REFERENCES `city_municipal` (`name`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barangay_population1` FOREIGN KEY (`population_id`) REFERENCES `population` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city_municipal`
--
ALTER TABLE `city_municipal`
  ADD CONSTRAINT `fk_city_municipal_province1` FOREIGN KEY (`province`,`region`) REFERENCES `province` (`name`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `disaster_site`
--
ALTER TABLE `disaster_site`
  ADD CONSTRAINT `fk_disaster_site_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk_donation_supply1` FOREIGN KEY (`supply_code`) REFERENCES `supply` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donor_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `fk_province_region1` FOREIGN KEY (`region`) REFERENCES `region` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_supply1` FOREIGN KEY (`supply_code`) REFERENCES `supply` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_user1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_vehicle1` FOREIGN KEY (`vehicle_plate_number`) REFERENCES `vehicle` (`plate_number`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_volunteer1` FOREIGN KEY (`volunteer`) REFERENCES `volunteer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_supplier_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `fk_supply_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_supplier1` FOREIGN KEY (`supplier_name`) REFERENCES `supplier` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_warehouse1` FOREIGN KEY (`warehouse_name`) REFERENCES `warehouse` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `fk_volunteer_barangay1` FOREIGN KEY (`barangay`,`city_municipal`,`province`,`region`) REFERENCES `barangay` (`name`, `city_municipal`, `province`, `region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `fk_warehouse_user1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
