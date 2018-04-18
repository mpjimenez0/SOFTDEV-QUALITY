-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 04:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canyouworknow`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(11) NOT NULL,
  `Barangay_Name` varchar(45) NOT NULL,
  `city_municipal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `Barangay_Name`, `city_municipal_id`) VALUES
(1, 'Ususan', 16),
(2, 'Lower Bicutan', 16),
(3, 'Hagonoy', 16),
(4, 'Central Signal Village', 16),
(5, 'Fort Bonifacio', 16),
(6, 'Western Bicutan', 16),
(7, 'Bangkal', 4),
(8, 'Bel-Air', 4),
(9, 'Cembo', 4),
(10, 'East Rembo', 4),
(11, 'West Rembo', 4),
(12, 'Magallanes', 4),
(13, 'Urdaneta', 4),
(14, 'Poblacion', 4),
(15, 'Baclaran', 10),
(16, 'BF Homes', 10),
(17, 'Sun Valley', 10),
(18, 'Merville', 10),
(19, 'Agtangao', 41),
(20, 'Angad', 41),
(21, 'Bangbangar', 41),
(22, 'Amti', 42),
(23, 'Bao-yan', 42),
(24, 'Danac East', 42),
(25, 'Abang', 43),
(26, 'Bangbangcag', 43),
(27, 'Bangcagan', 43),
(28, 'Ducligan', 44),
(29, 'Labaan', 44),
(30, 'Lingay', 44),
(31, 'Adams', 45),
(32, 'Bani', 46),
(33, 'Buyon', 46),
(34, 'Cabaruan', 46),
(35, 'Alay-Nangbabaan (Alay 15-B)', 47),
(36, 'Alogoog', 47),
(37, 'Ar-arusip', 47),
(38, 'Abaca', 48),
(39, 'Bacsil', 48),
(40, 'Banban', 48),
(41, 'Aglipay', 49),
(42, 'Baay', 49),
(43, 'Baligat', 49),
(44, 'Ihubok II (Kayvaluganan)', 50),
(45, 'Ihubok I (Kaychanarianan)', 50),
(46, 'San Antonio', 50),
(47, 'Raele', 51),
(48, 'San Rafael (Idiang)', 51),
(49, 'Santa Lucia (Kauhauhasan)', 51),
(50, 'Radiwan', 52),
(51, 'Salagao', 52),
(52, 'San Vicente (Igang)', 52),
(53, 'Kaumbakan', 53),
(54, 'Panatayan', 53),
(55, 'Uvoy', 53);

-- --------------------------------------------------------

--
-- Table structure for table `city_municipal`
--

CREATE TABLE `city_municipal` (
  `id` int(11) NOT NULL,
  `CityMunicipal` varchar(45) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_municipal`
--

INSERT INTO `city_municipal` (`id`, `CityMunicipal`, `region_id`) VALUES
(1, 'Manila', 1),
(2, 'Caloocan', 1),
(3, 'Las Piñas', 1),
(4, 'Makati', 1),
(5, 'Malabon', 1),
(6, 'Mandaluyong', 1),
(7, 'Marikina', 1),
(8, 'Muntinlupa', 1),
(9, 'Navotas', 1),
(10, 'Parañaque', 1),
(11, 'Pasay', 1),
(12, 'Pasig', 1),
(13, 'Pateros', 1),
(14, 'Quezon City', 1),
(15, 'San Juan', 1),
(16, 'Taguig', 1),
(17, 'Valenzuela', 1),
(41, 'Bangued', 3),
(42, 'Boliney', 3),
(43, 'Bucay', 3),
(44, 'Bucloc', 3),
(45, 'Adams', 2),
(46, 'Bacarra', 2),
(47, 'Badoc', 2),
(48, 'Bangui', 2),
(49, 'Batac', 2),
(50, 'Basco', 4),
(51, 'Itbayat', 4),
(52, 'Ivana', 4),
(53, 'Mahatao', 4),
(54, 'Sabtang', 4),
(55, 'Uyugan', 4),
(56, 'Baler', 5),
(57, 'Casiguran', 5),
(58, 'Dilasag', 5),
(59, 'Dinalungan', 5),
(60, 'Dingalan', 5),
(61, 'Agoncillo', 6),
(62, 'Alitagtag', 6),
(63, 'Balayan', 6),
(64, 'Balete', 6),
(65, 'Batangas City', 6),
(66, 'Bacacay', 8),
(67, 'Camalig', 8),
(68, 'Daraga', 8),
(69, 'Guinobatan', 8),
(70, 'Jovellar', 8),
(71, 'Boac', 7),
(72, 'Buenavista', 7),
(73, 'Gasan', 7),
(74, 'Mogpog', 7),
(75, 'Santa Cruz', 7),
(76, 'Altavas', 9),
(77, 'Balete', 9),
(78, 'Banga', 9),
(79, 'Batan ', 9),
(80, 'Buruanga', 9),
(81, 'Alburquerque', 10),
(82, 'Alicia', 10),
(83, 'Anda', 10),
(84, 'Antequera', 10),
(85, 'Baclayon', 10),
(86, 'Biliran', 11),
(87, 'Almeria', 11),
(88, 'Cabucgayan', 11),
(89, 'Caibiran', 11),
(90, 'Culaba', 11),
(91, 'Dapitan City', 12),
(92, 'Dipolog City', 12),
(93, 'Katipunan', 12),
(94, 'La Libertad', 12),
(95, 'Liloy', 12),
(96, 'Baungon', 13),
(97, 'Damulog', 13),
(98, 'Dangcagan', 13),
(99, 'Don Carlos', 13),
(100, 'Impasugong', 13),
(101, 'Compostela', 14),
(102, 'Laak (San Vicente)', 14),
(103, 'Maco', 14),
(104, 'Mawab', 14);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `type` enum('Hangar','Port','MotorPool','Warehouse') DEFAULT NULL,
  `capacity` varchar(45) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `city_municipal_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `contact`, `email`, `type`, `capacity`, `status`, `city_municipal_id`, `region_id`, `barangay_id`) VALUES
(1, 'ASCom (Army Support Command) - Fort Bonifacio', 'Sgt. Marcelo H. Del Pilar', 'mhdelpilar@army.com', 'MotorPool', '10 acres', 'Active', 16, 1, 5),
(2, 'Manila Ninoy Aquino International Airport', 'Angel Locsin', 'aod@miaa.gov.ph', 'Hangar', '12 hectares', 'Active', 11, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `Region_Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `Region_Name`) VALUES
(1, 'National Capital Region'),
(2, 'Ilocos Region'),
(3, 'Cordillera Administrative Region'),
(4, 'Cagayan Valley'),
(5, 'Central Luzon'),
(6, 'CALABARZON'),
(7, 'Southwestern Tagalog Region'),
(8, 'Bicol Region'),
(9, 'Western Visayas'),
(10, 'Central Visayas'),
(11, 'Eastern Visayas'),
(12, 'Zamboanga Peninsula'),
(13, 'Northern Mindanao'),
(14, 'Davao Region'),
(15, 'SOCCSKSARGEN'),
(16, 'Caraga Region'),
(17, 'Autonomous Region in Muslim Mindanao');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `date_needed` varchar(45) DEFAULT NULL,
  `date_requested` varchar(45) DEFAULT NULL,
  `reason` text,
  `quantity_needed` varchar(45) DEFAULT NULL,
  `priority` varchar(45) DEFAULT NULL,
  `receipient` varchar(45) DEFAULT NULL,
  `beneficiary` varchar(45) DEFAULT NULL,
  `status` enum('In Transit','Pending','Delivered','Confirmed') DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `supply_type` enum('Supply','Equipment') DEFAULT NULL,
  `quantity` varchar(11) DEFAULT NULL,
  `date_delivered` timestamp NULL DEFAULT NULL,
  `date_received` timestamp NULL DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL,
  `expiration_date` varchar(45) DEFAULT NULL,
  `remaining_supply` varchar(45) DEFAULT NULL,
  `supply_category` enum('Agriculture','Clothing/Textile','Construction','Education','Electrical/Survival','Food Items','Houseware','Medical','Sleeping Gear','Vehicle Supplies','WaSH','Others') DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contact_person` varchar(45) DEFAULT NULL,
  `website` varchar(150) DEFAULT NULL,
  `barangay_id` int(11) NOT NULL,
  `city_municipal_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact`, `email`, `contact_person`, `website`, `barangay_id`, `city_municipal_id`, `province_id`, `region_id`) VALUES
(1, 'Procter & Gamble Distributing (Phils.), Inc.', '+632 894 39 55', 'depadua.d@pg.com', 'Deirdre de Padua', 'https://us.pg.com/', 8, 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Agriculture','Building Materials','Clothing/Textile','Equipment & Tools','Food Items','Fuel','Houseware Supplies','Kids Supplies','Medical Equipment/Supplies','Services','Electrical Supplies/Survival','Sleeping Gear','Sports/Recreation','WaSH','Others') NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `date_delivered` datetime DEFAULT NULL,
  `date_received` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `city_municipal_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `account_status` enum('Active','Inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `external_type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `city_municipal_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `account_status`, `first_name`, `middle_name`, `last_name`, `contact`, `role`, `external_type`, `region_id`, `city_municipal_id`, `barangay_id`) VALUES
(1, 'canyouworkagainpls', 'f2u9PyPp5T1wzqGlVwnxjSLO9_OUMlOu', '$2y$13$AdHYlsMjhMDKL.SU1DymV.oJcQbOquKQ/o2ezK1aB8WF4Am6t78L2', NULL, 'pleasexd@xd.com', 10, 1521883994, 1521883994, 'Active', 'testboi', 'boitest', 'beeeee', '09876544444', 'National Admin', 'International Humanitarian Relations', 1, 16, 1),
(2, 'ushiwaka', 'xvO6sE2p4cO2qZ8Cr-t2rtPp_lazkic2', '$2y$13$R9i/kCJB7dcU4Tv3e3c5MOLf1oq7Xi05KJDqM3ue6/Dx1Zrf7AnXe', NULL, 'asdfg@gmail.com', 10, 1521987056, 1521987056, 'Active', 'Ushijima', 'Wakatosh', 'Wakatoshi', '09876555555', 'National Admin', 'Protection', 1, 16, 1),
(3, 'testagainbois', 'zMF1DM0pOjpCRfAPQhyZmYDJCA4LXIF0', '$2y$13$7yLN9FCOHfOTB0vatpzbx.63uDnsJwM8MKjuafrpXm7do47yr8mAS', NULL, 'testagainbois@apc.edu.ph', 10, 1522417411, 1522417411, 'Active', 'test', 'again', 'bois', '09876544444', 'National Admin', 'Camp Coordination and Camp Management', 1, 16, 2),
(4, 'sample', 'FS2pbHlYXHu2BmWOXQmuj7Swi4vYol4u', '$2y$13$8u6bf7qE10p..zeHrNdehuEPI4hpS8yrmjdNYrU9C8qUvHZI45BOa', NULL, 'sample@sample.com', 10, 1522503137, 1522503137, 'Active', 'Sample', 'Sample', 'Sample', '09260198935', 'National Admin', NULL, 1, 16, 6),
(5, 'sample1', 'CiQUgGS-Nq0nRRiQ4yuzXRZKNMoPvSOP', '$2y$13$ad9gF33nEqXcZ8LyRY99b.QcLvi52bxO/9eFItC2TC5et7p0Y98Au', NULL, 'sample1@sample.sample', 10, 1522600821, 1522600821, 'Active', 'sample1', 'sample1', 'sample1', '12345678901', 'External User', NULL, 1, 11, 7);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `type` enum('Light Vehicle','Medium Vehicle','Heavy Vehicle') NOT NULL,
  `type_star` enum('Sea','Air','Road') NOT NULL,
  `classification` enum('Rent','Owned') NOT NULL,
  `status` enum('In Transit','Available','Unavailable') NOT NULL,
  `region_id` int(11) NOT NULL,
  `city_municipal_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Barangay_City_Municipal1_idx` (`city_municipal_id`);

--
-- Indexes for table `city_municipal`
--
ALTER TABLE `city_municipal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_City_Municipal_Region1_idx` (`region_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Warehouse_City_Municipal1_idx` (`city_municipal_id`),
  ADD KEY `fk_Warehouse_Region1_idx` (`region_id`),
  ADD KEY `fk_Warehouse_Barangay1_idx` (`barangay_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Request_User1_idx` (`user_id`),
  ADD KEY `fk_Request_resource1_idx` (`resource_id`),
  ADD KEY `fk_Request_Vehicle1_idx` (`vehicle_id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Supply_Supplier1_idx` (`supplier_id`),
  ADD KEY `fk_Supply_Warehouse1_idx` (`location_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Supplier_Barangay1_idx` (`barangay_id`),
  ADD KEY `fk_Supplier_City_Municipal1_idx` (`city_municipal_id`),
  ADD KEY `fk_Supplier_Region1_idx` (`region_id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supply_region1_idx` (`region_id`),
  ADD KEY `fk_supply_city_municipal1_idx` (`city_municipal_id`),
  ADD KEY `fk_supply_barangay1_idx` (`barangay_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `fk_user_Region_idx` (`region_id`),
  ADD KEY `fk_user_City_Municipal1_idx` (`city_municipal_id`),
  ADD KEY `fk_user_Barangay1_idx` (`barangay_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicle_region1_idx` (`region_id`),
  ADD KEY `fk_vehicle_city_municipal1_idx` (`city_municipal_id`),
  ADD KEY `fk_vehicle_barangay1_idx` (`barangay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `city_municipal`
--
ALTER TABLE `city_municipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangay`
--
ALTER TABLE `barangay`
  ADD CONSTRAINT `fk_Barangay_City_Municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city_municipal`
--
ALTER TABLE `city_municipal`
  ADD CONSTRAINT `fk_City_Municipal_Region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_Warehouse_Barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Warehouse_City_Municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Warehouse_Region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_Request_User1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Request_Vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Request_resource1` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resource`
--
ALTER TABLE `resource`
  ADD CONSTRAINT `fk_Supply_Supplier10` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Supply_Warehouse10` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `fk_Supplier_Barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Supplier_City_Municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Supplier_Region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `fk_supply_barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_city_municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supply_region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_Barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_City_Municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_Region` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_city_municipal1` FOREIGN KEY (`city_municipal_id`) REFERENCES `city_municipal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
