-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 09:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `carpenter_infos`
--

CREATE TABLE `carpenter_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_done` int(255) NOT NULL DEFAULT '0',
  `currrent_job` int(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carpenter_infos`
--

INSERT INTO `carpenter_infos` (`id`, `name`, `email`, `phone`, `department`, `sex`, `state`, `employment_date`, `job_done`, `currrent_job`, `created_at`, `updated_at`) VALUES
(1, 'alhassan', 'alhassan@gmail.com', '08065234574', 'carpentry', 'Female', 'alhassans', '2016-09-04', 0, 0, '2017-04-28 12:12:28', '2017-05-10 20:09:54'),
(2, 'musa', 'musaup@yahoo.com', '09034268873', 'spray', 'Male', 'kano', '24/04/2017', 0, 0, '2017-04-28 12:13:20', '2017-04-28 12:13:20'),
(3, 'chinedu', 'chinedu@gmail.com', '08101875423', 'upholstery', 'Male', 'rivers', '24/04/2017', 0, 0, '2017-04-28 12:14:49', '2017-04-28 12:14:49'),
(4, 'moses', 'maxwealth17@gmail.com', '09034268873', 'spray', 'Male', 'lagos', '24/04/2017', 0, 0, '2017-05-03 13:30:35', '2017-05-03 13:30:35'),
(5, 'olawale', 'ade31@y.com', '08104044002', 'laminate', 'Male', 'Abuja', '24/04/2017', 0, 0, '2017-05-08 06:38:12', '2017-05-08 06:38:12'),
(6, 'luka', 'luka@yahoo.com', '09098175754', 'laminate', 'Male', 'fct', '2017-05-01', 0, 0, '2017-05-10 06:44:30', '2017-05-10 06:44:30'),
(7, 'kajaki', 'kajaki@gmail.com', '09023654122', 'laminate', 'Female', 'abuja', '2017-05-01', 0, 0, '2017-05-10 20:10:52', '2017-05-10 20:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `client_infos`
--

CREATE TABLE `client_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `client_infos`
--

INSERT INTO `client_infos` (`id`, `client_name`, `client_phone`, `client_email`, `client_delivery_address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'adedotun', '09034268873', 'adedotunolawale1@gmail.com', 'Lugbe', 0, '2017-04-26 18:44:33', '2017-04-26 18:44:33'),
(3, 'the white house abuja', '09034268873', 'twhabj@gmail.com', 'central business district area opposite the radio house FCT abuja', 0, '2017-04-28 04:40:58', '2017-04-28 04:40:58'),
(4, 'amac municipal area council', '09034268873', 'amac@fr.com', 'central business district area abuja fct nigeria', 0, '2017-04-30 20:21:07', '2017-04-30 20:21:07'),
(5, 'the federal government', '07086167345', 'thefeds@yahoo.com', 'central business district area of the FCT', 0, '2017-05-10 06:46:16', '2017-05-10 06:46:16'),
(6, 'dotun olawale', '09034268873', 'adedotunolwale2@gmail.com', 'fct abuja airport road', 0, '2017-05-15 06:05:47', '2017-05-15 06:05:47'),
(7, 'muhammed', '09034268873', 'aa@ymail.com', 'fct abuja airport road', 0, '2017-05-15 06:11:02', '2017-05-15 06:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `client_orders`
--

CREATE TABLE `client_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_key` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `carpenter_id` int(11) DEFAULT '0',
  `laminate_id` int(11) NOT NULL DEFAULT '0',
  `sprayer_id` int(11) DEFAULT '0',
  `upholstery_id` int(11) DEFAULT '0',
  `upholstery_quantity` int(11) NOT NULL DEFAULT '0',
  `sprayer_quantity` int(11) NOT NULL DEFAULT '0',
  `item_type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `item_ref` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `item_size` int(11) NOT NULL DEFAULT '0',
  `item_material` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `design_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `finished_quantity` int(11) NOT NULL DEFAULT '0',
  `current_quantity` int(11) NOT NULL DEFAULT '0',
  `rate` double NOT NULL DEFAULT '0',
  `amount` double NOT NULL DEFAULT '0',
  `deposit` double NOT NULL DEFAULT '0',
  `balance` double NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `specification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Type` int(11) NOT NULL DEFAULT '0',
  `total` int(255) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_orders`
--

INSERT INTO `client_orders` (`id`, `product_key`, `client_id`, `user_id`, `carpenter_id`, `laminate_id`, `sprayer_id`, `upholstery_id`, `upholstery_quantity`, `sprayer_quantity`, `item_type`, `item_ref`, `item_size`, `item_material`, `design_ref`, `quantity`, `finished_quantity`, `current_quantity`, `rate`, `amount`, `deposit`, `balance`, `status`, `specification`, `remarks`, `Type`, `total`, `created_at`, `updated_at`) VALUES
(1, 'SOF-0100-3-W-003', 5, 6, 1, 0, 0, 3, 20, 0, 'SOF', '0100', 3, 'W', '003', 20, 20, 0, 0, 0, 0, 0, 4, 'High Quality', '0', 0, 20, '2017-05-15 04:57:49', '2017-05-15 05:08:14'),
(2, 'SOF-0100-3-L-012', 5, 6, 0, 5, 0, 0, 0, 0, 'SOF', '0100', 3, 'L', '012', 20, 20, 0, 0, 0, 0, 0, 4, NULL, '0', 0, 20, '2017-05-15 05:17:01', '2017-05-15 05:19:58'),
(3, 'DOOR-1500-10-W-014', 3, 6, 1, 0, 4, 3, 70, 20, 'DOOR', '1500', 10, 'W', '014', 90, 90, 0, 0, 0, 0, 0, 4, NULL, '0', 0, 90, '2017-05-15 05:34:23', '2017-05-15 05:45:04'),
(4, 'SOF-0100-3-W-006', 5, 6, 1, 0, 0, 0, 0, 0, 'SOF', '0100', 3, 'W', '006', 45, 0, 0, 0, 0, 0, 0, 0, NULL, '0', 0, 0, '2017-05-15 09:55:42', '2017-05-15 09:55:42'),
(5, 'BED-1000-3-L-013', 4, 6, 0, 6, 0, 0, 0, 0, 'BED', '1000', 3, 'L', '013', 45, 0, 0, 0, 0, 0, 0, 0, NULL, '0', 0, 0, '2017-05-15 09:56:43', '2017-05-15 09:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `client_requests`
--

CREATE TABLE `client_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_key` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `item_type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `item_ref` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `item_size` int(11) NOT NULL DEFAULT '0',
  `item_material` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `design_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `finished_quantity` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `specification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Type` int(11) NOT NULL DEFAULT '0',
  `total` int(255) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_requests`
--

INSERT INTO `client_requests` (`id`, `product_key`, `client_id`, `user_id`, `item_type`, `item_ref`, `item_size`, `item_material`, `design_ref`, `quantity`, `finished_quantity`, `status`, `specification`, `remarks`, `Type`, `total`, `created_at`, `updated_at`) VALUES
(1, 'SOF-0100-3-W-006', 5, 6, 'SOF', '0100', 3, 'W', '006', 45, 0, 0, NULL, '0', 1, 0, '2017-05-15 09:53:12', '2017-05-15 09:53:12'),
(2, 'CON-1900-3-L-018', 2, 6, 'CON', '1900', 3, 'L', '018', 7, 0, 0, NULL, '0', 1, 0, '2017-05-15 12:06:38', '2017-05-15 12:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `goods_items`
--

CREATE TABLE `goods_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_code_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_ref` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_size` int(2) DEFAULT NULL,
  `item_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_material` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `goods_items`
--

INSERT INTO `goods_items` (`id`, `item_name`, `item_code_name`, `item_ref`, `item_size`, `item_description`, `item_material`, `created_at`, `updated_at`) VALUES
(4, 'Side table', 'SDTBL', '0510', 1, '1 seater', 'L', '2017-04-28 04:12:05', '2017-05-10 20:06:13'),
(5, 'Center Table', 'CENTBl', '0400', 1, '1 seater', 'L', '2017-04-28 04:13:08', '2017-04-28 04:13:08'),
(6, 'Sofa', 'SOF', '0100', 1, '1 seater', 'L', '2017-04-28 04:13:53', '2017-04-28 04:13:53'),
(7, 'Bedside Cabinet', 'BDSDCB', '1100', 1, '1 cornerset', 'L', '2017-04-28 04:15:30', '2017-04-28 04:15:30'),
(8, 'Side Board', 'SDBRD', '0800', 1, '1 cornerset', 'L', '2017-04-28 04:16:44', '2017-04-28 04:16:44'),
(9, 'Display Cabinet', 'DSPCB', '0900', 1, '1 cornerset', 'L', '2017-04-28 04:18:09', '2017-04-28 04:18:09'),
(10, 'Bed', 'BED', '1000', 1, 'single', 'L', '2017-04-28 04:19:02', '2017-04-28 04:19:02'),
(11, 'Dinning Chair', 'DINCHR', '0700', 1, '1 seater', 'L', '2017-04-28 04:20:27', '2017-04-28 04:20:27'),
(12, 'Arm Chair', 'ARMCHR', '0300', 1, '1 seater', 'L', '2017-04-28 04:21:07', '2017-04-28 04:21:07'),
(13, 'Dinning Table', 'DINTBL', '0600', 4, '4 seater', 'L', '2017-04-28 04:22:07', '2017-04-28 04:22:07'),
(14, 'Chest of Drawer', 'CHSTDRW', '1200', 1, 'single', 'L', '2017-04-28 04:23:17', '2017-04-28 04:23:17'),
(15, 'Dressing Table', 'DRSTBL', '1300', 1, '1 single', 'L', '2017-04-28 04:24:47', '2017-04-28 04:24:47'),
(16, 'Tv Cabinet', 'TVCB', '1400', 1, '1 stand', 'L', '2017-04-28 04:25:36', '2017-04-28 04:25:36'),
(17, 'Wardrobe', 'WRDRB', '1600', 1, 'single', 'L', '2017-04-28 04:27:35', '2017-04-28 04:27:35'),
(18, 'Paneling', 'PANEl', '1700', 1, 'whole', 'L', '2017-04-28 04:29:48', '2017-04-28 04:29:48'),
(19, 'Door', 'DOOR', '1500', 1, 'whole', 'L', '2017-04-28 04:30:22', '2017-04-28 04:30:22'),
(20, 'Miscellaneous', 'MISC', '1800', 1, 'whole', 'L', '2017-04-28 04:31:11', '2017-04-28 04:31:11'),
(21, 'Console', 'CON', '1900', 1, 'whole', 'L', '2017-04-28 04:31:48', '2017-04-28 04:31:48'),
(22, 'Mirror', 'MIR', '2000', 1, 'whole', 'L', '2017-04-28 04:32:18', '2017-04-28 04:32:18'),
(23, 'Desk', 'DES', '2100', 1, 'whole', 'L', '2017-04-28 04:32:54', '2017-04-28 04:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `goods_item_designs`
--

CREATE TABLE `goods_item_designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `design_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `goods_item_designs`
--

INSERT INTO `goods_item_designs` (`id`, `design_name`, `design_ref`, `created_at`, `updated_at`) VALUES
(5, 'Avento', '001', '2017-04-28 05:07:28', '2017-05-10 20:07:49'),
(6, 'Andy', '002', '2017-04-28 05:07:48', '2017-04-28 05:07:48'),
(7, 'Arc', '003', '2017-04-28 05:08:00', '2017-04-28 05:08:00'),
(8, 'Arch', '004', '2017-04-28 05:08:17', '2017-04-28 05:08:17'),
(9, 'Armani', '005', '2017-04-28 05:08:34', '2017-04-28 05:08:34'),
(10, 'Arrow', '006', '2017-04-28 05:08:50', '2017-04-28 05:08:50'),
(11, 'Artifacto', '007', '2017-04-28 05:09:10', '2017-04-28 05:09:10'),
(12, 'Abi', '008', '2017-04-28 05:09:24', '2017-04-28 05:09:24'),
(13, 'Arte', '009', '2017-04-28 05:09:39', '2017-04-28 05:09:39'),
(14, 'Aroma', '010', '2017-04-28 05:09:53', '2017-04-28 05:09:53'),
(15, 'Atlas', '011', '2017-04-28 05:10:04', '2017-04-28 05:10:04'),
(16, 'Balance', '012', '2017-04-28 05:10:19', '2017-04-28 05:10:19'),
(17, 'Box', '013', '2017-04-28 05:10:37', '2017-04-28 05:10:37'),
(18, 'Box Arm', '014', '2017-04-28 05:10:56', '2017-04-28 05:10:56'),
(19, 'Blue', '015', '2017-04-28 05:11:08', '2017-04-28 05:11:08'),
(20, 'Baron', '016', '2017-04-28 05:11:25', '2017-04-28 05:11:25'),
(21, 'Bartlett', '017', '2017-04-28 05:11:42', '2017-04-28 05:11:42'),
(22, 'Bella', '018', '2017-04-28 05:12:02', '2017-04-28 05:12:02'),
(23, 'Cluster', '019', '2017-04-28 05:12:18', '2017-04-28 05:12:18'),
(24, 'Chest', '020', '2017-04-28 05:12:34', '2017-04-28 05:12:34'),
(25, 'Custom', '021', '2017-04-28 05:12:50', '2017-04-28 05:12:50'),
(26, 'Cluster SQ', '023', '2017-04-28 05:13:09', '2017-04-28 05:13:09'),
(27, 'Cluster RC', '023', '2017-04-28 05:13:46', '2017-04-28 05:13:46'),
(28, 'Crossline', '024', '2017-04-28 05:14:02', '2017-04-28 05:14:02'),
(29, 'Capuccine', '025', '2017-04-28 05:14:21', '2017-04-28 05:14:21'),
(30, 'Cleo', '026', '2017-04-28 05:14:35', '2017-04-28 05:14:35'),
(31, 'Cube', '027', '2017-04-28 05:14:49', '2017-04-28 05:14:49'),
(32, 'Churchill', '028', '2017-04-28 05:15:06', '2017-04-28 05:15:06'),
(33, 'Chin', '029', '2017-04-28 05:15:20', '2017-04-28 05:15:20'),
(34, 'Carrera', '030', '2017-04-28 05:15:38', '2017-04-28 05:15:38'),
(35, 'Casa', '031', '2017-04-28 05:15:52', '2017-04-28 05:15:52'),
(36, 'Devon', '032', '2017-04-28 05:16:58', '2017-04-28 05:16:58'),
(37, 'Diana', '033', '2017-04-28 05:17:12', '2017-04-28 05:17:12'),
(38, 'Dante', '034', '2017-04-28 05:17:29', '2017-04-28 05:17:29'),
(39, 'Diamond', '035', '2017-04-28 05:17:43', '2017-04-28 05:17:43'),
(40, 'Destina', '036', '2017-04-28 05:17:58', '2017-04-28 05:17:58'),
(41, 'Dalgali', '037', '2017-04-28 05:18:11', '2017-04-28 05:18:11'),
(42, 'Ears', '038', '2017-04-28 05:18:23', '2017-04-28 05:18:23'),
(43, 'Elie', '039', '2017-04-28 05:18:46', '2017-04-28 05:18:46'),
(44, 'Esse', '040', '2017-04-28 05:18:56', '2017-04-28 05:18:56'),
(45, 'Floranza', '041', '2017-04-28 05:19:13', '2017-04-28 05:19:13'),
(46, 'Flush', '042', '2017-04-28 05:19:27', '2017-04-28 05:19:27'),
(47, 'Flores', '043', '2017-04-28 05:19:43', '2017-04-28 05:19:43'),
(48, 'Gold Leaf', '044', '2017-04-28 05:20:04', '2017-04-28 05:20:04'),
(49, 'Glit', '045', '2017-04-28 05:20:16', '2017-04-28 05:20:16'),
(50, 'Graff', '046', '2017-04-28 05:20:58', '2017-04-28 05:20:58'),
(51, 'Graff Arm', '047', '2017-04-28 05:21:33', '2017-04-28 05:21:33'),
(52, 'Gatsby', '048', '2017-04-28 05:21:57', '2017-04-28 05:21:57'),
(53, 'Gold', '049', '2017-04-28 05:22:10', '2017-04-28 05:22:10'),
(54, 'Havana', '050', '2017-04-28 05:22:30', '2017-04-28 05:22:30'),
(55, 'Hermingway', '051', '2017-04-28 05:22:48', '2017-04-28 05:22:48'),
(56, 'Irem', '052', '2017-04-28 05:23:10', '2017-04-28 05:23:10'),
(57, 'Jolly', '053', '2017-04-28 05:23:25', '2017-04-28 05:23:25'),
(58, 'Jazz', '054', '2017-04-28 05:23:37', '2017-04-28 05:23:37'),
(59, 'Link', '055', '2017-04-28 05:23:49', '2017-04-28 05:23:49'),
(60, 'Louise', '056', '2017-04-28 05:24:06', '2017-04-28 05:24:06'),
(61, 'Lobby', '057', '2017-04-28 05:24:34', '2017-04-28 05:24:34'),
(62, 'Loft', '058', '2017-04-28 05:24:51', '2017-04-28 05:24:51'),
(63, 'Leaf', '059', '2017-04-28 05:25:20', '2017-04-28 05:25:20'),
(64, 'Luca', '060', '2017-04-28 05:25:37', '2017-04-28 05:25:37'),
(65, 'Lin SH', '061', '2017-04-28 05:27:54', '2017-04-28 05:27:54'),
(66, 'Lewis', '062', '2017-04-28 05:28:11', '2017-04-28 05:28:11'),
(67, 'Muss', '063', '2017-04-28 05:28:27', '2017-04-28 05:28:27'),
(68, 'Monroe', '064', '2017-04-28 05:28:41', '2017-04-28 05:28:41'),
(69, 'Milano', '065', '2017-04-28 05:28:55', '2017-04-28 05:28:55'),
(70, 'Mews', '066', '2017-04-28 05:29:09', '2017-04-28 05:29:09'),
(71, 'Motion', '067', '2017-04-28 05:29:27', '2017-04-28 05:29:27'),
(72, 'Markiz', '068', '2017-04-28 05:29:42', '2017-04-28 05:29:42'),
(73, 'Motif', '069', '2017-04-28 05:30:05', '2017-04-28 05:30:05'),
(74, 'Monza', '070', '2017-04-28 05:30:20', '2017-04-28 05:30:20'),
(75, 'Markiz RC', '071', '2017-04-28 05:30:43', '2017-04-28 05:30:43'),
(76, 'Michelene', '072', '2017-04-28 05:31:00', '2017-04-28 05:31:00'),
(77, 'Natura', '073', '2017-04-28 05:31:17', '2017-04-28 05:31:17'),
(78, 'New Link', '074', '2017-04-28 05:31:38', '2017-04-28 05:31:38'),
(79, 'Nova', '075', '2017-04-28 05:31:49', '2017-04-28 05:31:49'),
(80, 'Olympia', '076', '2017-04-28 05:32:03', '2017-04-28 05:32:03'),
(81, 'Opera', '077', '2017-04-28 05:32:16', '2017-04-28 05:32:16'),
(82, 'Panel', '078', '2017-04-28 05:32:40', '2017-04-28 05:32:40'),
(83, 'Profile', '079', '2017-04-28 05:32:53', '2017-04-28 05:32:53'),
(84, 'Piramit', '080', '2017-04-28 05:33:07', '2017-04-28 05:33:07'),
(85, 'Pi', '081', '2017-04-28 05:33:19', '2017-04-28 05:33:19'),
(86, 'Puka', '082', '2017-04-28 05:33:31', '2017-04-28 05:33:31'),
(87, 'Parissa', '083', '2017-04-28 05:33:44', '2017-04-28 05:33:44'),
(88, 'Queen Ann', '084', '2017-04-28 05:34:02', '2017-04-28 05:34:02'),
(89, 'Royal', '085', '2017-04-28 05:34:17', '2017-04-28 05:34:17'),
(90, 'Riva', '086', '2017-04-28 05:34:30', '2017-04-28 05:34:30'),
(91, 'Roma', '087', '2017-04-28 05:34:46', '2017-04-28 05:34:46'),
(92, 'Rock', '088', '2017-04-28 05:34:58', '2017-04-28 05:34:58'),
(93, 'Rabi', '089', '2017-04-28 05:35:12', '2017-04-28 05:35:12'),
(94, 'Rami', '090', '2017-04-28 05:35:25', '2017-04-28 05:35:25'),
(95, 'Ring', '091', '2017-04-28 05:35:38', '2017-04-28 05:35:38'),
(96, 'Regency', '092', '2017-04-28 05:35:55', '2017-04-28 05:35:55'),
(97, 'Siena', '093', '2017-04-28 05:36:10', '2017-04-28 05:36:10'),
(98, 'Swan', '094', '2017-04-28 05:36:22', '2017-04-28 05:36:22'),
(99, 'Step', '095', '2017-04-28 05:36:35', '2017-04-28 05:36:35'),
(100, 'Sofia', '096', '2017-04-28 05:36:48', '2017-04-28 05:36:48'),
(101, 'Short Wing', '097', '2017-04-28 05:37:11', '2017-04-28 05:37:11'),
(102, 'Sarke', '098', '2017-04-28 05:37:25', '2017-04-28 05:37:25'),
(103, 'Safari', '099', '2017-04-28 05:38:16', '2017-04-28 05:38:16'),
(104, 'Sax', '100', '2017-04-28 05:38:28', '2017-04-28 05:38:28'),
(105, 'Seirra', '101', '2017-04-28 05:40:14', '2017-04-28 05:40:14'),
(106, 'Syrma', '102', '2017-04-28 05:40:30', '2017-04-28 05:40:30'),
(107, 'Snoop', '103', '2017-04-28 05:40:44', '2017-04-28 05:40:44'),
(108, 'Swing', '104', '2017-04-28 05:40:55', '2017-04-28 05:40:55'),
(109, 'Sliding', '105', '2017-04-28 05:41:10', '2017-04-28 05:41:10'),
(110, 'Stand', '106', '2017-04-28 05:41:29', '2017-04-28 05:41:29'),
(111, 'Scroll', '107', '2017-04-28 05:41:46', '2017-04-28 05:41:46'),
(112, 'Twister', '108', '2017-04-28 05:42:04', '2017-04-28 05:42:04'),
(113, 'Trendi', '109', '2017-04-28 05:42:27', '2017-04-28 05:42:27'),
(114, 'Target', '110', '2017-04-28 05:42:44', '2017-04-28 05:42:44'),
(115, 'Totem', '111', '2017-04-28 05:43:17', '2017-04-28 05:43:17'),
(116, 'Verona', '112', '2017-04-28 05:43:49', '2017-04-28 05:43:49'),
(117, 'Verdi', '113', '2017-04-28 05:44:06', '2017-04-28 05:44:06'),
(118, 'Vogue', '114', '2017-04-28 05:44:19', '2017-04-28 05:44:19'),
(119, 'Venedik', '115', '2017-04-28 05:44:35', '2017-04-28 05:44:35'),
(120, 'Victor', '116', '2017-04-28 05:44:49', '2017-04-28 05:44:49'),
(121, 'Viole', '117', '2017-04-28 05:45:33', '2017-04-28 05:45:33'),
(122, 'Versa', '118', '2017-04-28 05:45:48', '2017-04-28 05:45:48'),
(123, 'Waldorf', '119', '2017-04-28 05:46:08', '2017-04-28 05:46:08'),
(124, 'Wood', '120', '2017-04-28 05:46:20', '2017-04-28 05:46:20'),
(125, 'Wooden', '121', '2017-04-28 05:47:43', '2017-04-28 05:47:43'),
(126, 'Wing', '122', '2017-04-28 05:48:01', '2017-04-28 05:48:01'),
(129, 'Zen', '123', '2017-04-30 14:48:31', '2017-04-30 14:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_key` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_orders`
--

CREATE TABLE `inhouse_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(255) NOT NULL DEFAULT '0',
  `product_key` varchar(255) NOT NULL DEFAULT '0',
  `carpenter_id` int(255) NOT NULL DEFAULT '0',
  `worker_id` int(255) DEFAULT '0',
  `sprayer_quantity` int(255) NOT NULL DEFAULT '0',
  `upholstery_quantity` int(255) NOT NULL DEFAULT '0',
  `carp_quantity` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inhouse_orders`
--

INSERT INTO `inhouse_orders` (`id`, `order_id`, `user_id`, `product_key`, `carpenter_id`, `worker_id`, `sprayer_quantity`, `upholstery_quantity`, `carp_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'SOF-0100-3-W-003', 1, 3, 0, 20, 20, '2017-05-15 05:07:08', '2017-05-15 05:07:08'),
(2, 3, 6, 'DOOR-1500-10-W-014', 1, 3, 0, 70, 90, '2017-05-15 05:35:38', '2017-05-15 06:43:44'),
(3, 3, 6, 'DOOR-1500-10-W-014', 1, 4, 20, 0, 90, '2017-05-15 05:39:59', '2017-05-15 05:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `stock_name` varchar(255) NOT NULL,
  `stock_id` int(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `sales_rep` varchar(255) NOT NULL,
  `sale_rep_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL DEFAULT '0',
  `rate` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `stock_name`, `stock_id`, `customer_id`, `customer_name`, `sales_rep`, `sale_rep_id`, `quantity`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'DOOR-1500-10-W-014', 3, 3, NULL, 'ADEDOTUN', 6, 50, NULL, '2017-05-15 12:35:42', '2017-05-15 12:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `fieldName` varchar(250) NOT NULL,
  `fieldValue` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `fieldName`, `fieldValue`, `created_at`, `updated_at`) VALUES
(1, 'address', 'address line 1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(2, 'footer', 'All Rights Reserved, Optimum Script', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(3, 'lastUpdateCheck', '1493937376', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(4, 'latestVersion', '2.4', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(5, 'latestVersionUrl', 'http:', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(6, 'phoneNo', '+1012345678910', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(7, 'siteTitle', 'Wood Factory', '2017-05-06 00:09:30', '2017-05-05 23:10:08'),
(9, 'systemEmail', 'woodfactory@gmail.com', '2017-05-06 00:09:30', '2017-05-05 23:10:08'),
(13, 'finishInstall', '2', '2017-05-06 00:09:30', '2017-05-06 00:15:59'),
(14, 'schoolTerms', '&lt;p&gt;Our school terms :&lt;/p&gt;\n\n&lt;ul&gt;\n	&lt;li&gt;Term 1&lt;/li&gt;\n	&lt;li&gt;Term 2&lt;/li&gt;\n	&lt;li&gt;Term 3&lt;/li&gt;\n	&lt;li&gt;Term 4&lt;/li&gt;\n	&lt;li&gt;Term 5&lt;/li&gt;\n	&lt;li&gt;Term 6&lt;/li&gt;\n	&lt;li&gt;Term 7&lt;/li&gt;\n	&lt;li&gt;Term 8&lt;/li&gt;\n	&lt;li&gt;Term 9&lt;/li&gt;\n	&lt;li&gt;Term 10&lt;/li&gt;\n	&lt;li&gt;Term 11&lt;/li&gt;\n&lt;/ul&gt;\n', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(15, 'attendanceModel', 'subject', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(16, 'smsProvider', '{"smsProvider":"custom","nexmoApiKey":"","nexmoApiSecret":"","nexmoPhoneNumber":"dfc","twilioSID":"ee","twilioToken":"","twilioFN":"","hoiioAppId":"","hoiioAccessToken":"","clickatellApiKey":"","clickatellUserName":"","clickatellPassword":"","intellismsUserName":"","intellismsPassword":"","intellismsSenderNumber":"","bulksmsUserName":"","bulksmsPassword":"","conceptoUserName":"","conceptoPassword":"","conceptoSenderId":"","msg91Authkey":"","msg91SenderId":"","customHTTPToFormat":"+","customHTTPType":"post"}', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(17, 'mailProvider', '{"mailProvider":"mail","smtpHost":"eded","smtpPort":"ee","smtpUserName":"dd","smtpPassWord":"cc","AmazonSESAccessKey":"","AmazonSESSecretKey":"","AmazonSESVerifiedSender":"","smtpTLS":"TLS"}', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(18, 'examDetailsNotif', 'mailsms', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(19, 'examDetailsNotifTo', 'both', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(20, 'absentNotif', 'mailsms', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(21, 'address2', 'address line 2', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(22, 'paypalPayment', 'info@cr-house.com', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(23, 'paymentTax', '10', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(24, 'activatedModules', '["newsboardAct","eventsAct","vacationAct","attendanceAct","staffAttendanceAct","bookslibraryAct","onlineexamsAct","mediaAct","paymentsAct","staticpagesAct","transportAct","reportsAct","materialsAct","assignmentsAct","pollsAct"]', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(25, 'languageDef', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(26, 'languageAllow', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(27, 'layoutColor', 'skin-green', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(28, 'thisVersion', '1.4', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(29, 'currency_code', 'USD', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(30, 'currency_symbol', '$', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(31, 'studentVacationDays', '100', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(32, 'teacherVacationDays', '100', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(33, 'daysWeekOff', '["5","6"]', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(34, 'officialVacationDay', '[1461715200,1461888000,1460419200]', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(35, 'attendanceOnMarksheet', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(36, 'layoutColorUserChange', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(37, 'siteLogo', 'siteName', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(38, 'siteLogoAdditional', 'dwwdwdedwe', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(39, 'allowPublicReg', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(40, 'invoiceGenStudentCreated', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(41, 'invoiceGenStudentPromotion', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(42, 'dateformat', 'd/m/Y', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(43, 'enableSections', '0', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(44, 'emailIsMandatory', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(45, 'finishInstall', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(46, 'finishInstall', '1', '2017-05-06 00:09:30', '2017-05-06 00:09:30'),
(47, 'finishInstall', '2', '2017-05-05 23:10:08', '2017-05-05 23:10:08'),
(48, 'finishInstall', '2', '2017-05-05 23:11:10', '2017-05-05 23:11:10'),
(49, 'finishInstall', '2', '2017-05-05 23:15:58', '2017-05-05 23:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `stock_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '0',
  `size` int(255) NOT NULL DEFAULT '0',
  `design_ref` varchar(255) NOT NULL DEFAULT '0',
  `rate` int(255) NOT NULL DEFAULT '0',
  `amount` int(255) NOT NULL DEFAULT '0',
  `total_goods` int(255) NOT NULL DEFAULT '0',
  `remainder_goods` int(255) NOT NULL DEFAULT '0',
  `sold_goods` int(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `order_id`, `stock_name`, `type`, `size`, `design_ref`, `rate`, `amount`, `total_goods`, `remainder_goods`, `sold_goods`, `created_at`, `updated_at`) VALUES
(1, 1, 'SOF-0100-3-W-003', 'SOF', 3, '003', 0, 0, 20, 20, 0, '2017-05-15 05:08:14', '2017-05-15 05:08:14'),
(2, 2, 'SOF-0100-3-L-012', 'SOF', 3, '012', 0, 0, 20, 20, 0, '2017-05-15 05:19:58', '2017-05-15 05:19:58'),
(3, 3, 'DOOR-1500-10-W-014', 'DOOR', 10, '014', 0, 0, 90, 40, 50, '2017-05-15 05:39:33', '2017-05-15 12:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `access_level` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `department`, `access_level`, `photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'CHRISTIANE CATHERINE', 'christianecatherine1@gmail.com', '08104044002', 'management', 2, '', '$2y$10$Zbsj0txlv7b7RNj74cZRFekIek44cwQMsyM52coJYHmWUjdNaI.G2', 'wUxjH82hHPDjVIwGgG7oE6XSD7fUtang0FMLGL7FqagemLMDqruWRbKGQixx', '2017-04-28 04:47:34', '2017-05-10 20:09:03'),
(6, 'Adedotun', 'adedotunolawale1@gmail.com', '08101984656', 'management', 1, '', '$2y$10$MM4Qh2DYDlyfPomvbtDKx.fEaUFGi85aY578mgT6TqXWRaG2s3v3i', 'lkS8KZ6lqcClEsmkcGhhNBhQ0qa43ak9pfLpubtmr08e3cfTHJcGO6MCfUMl', '2017-04-28 06:57:53', '2017-05-15 01:20:45'),
(7, 'Ade', 'ade@ymail.com', '09034268873', 'management', 3, '', '$2y$10$kb88/LtI1NJOvySviaEhO.6cLwxGXs5l7A7ZnEiYd/wz55koIRlBK', 'EKzyvD5YCWm9X2bxPjPiNFNQAY1PvD05RRjBLzskjqVM3WUopZ64jfQmFNJ8', '2017-04-28 08:16:19', '2017-04-30 19:47:36'),
(8, 'Musa', 'musa@ymail.com', '09034268873', 'management', 4, '', '$2y$10$Beo.KSZR2p0YSiGL..mDxuDcnuMMnPTTOBdf8OlbYaphXzgI7/kDy', 'qHvZGDvASO3sS9Yev6C3Sc7DiCY3GOASLq6Yakii582pSPFWQYjmN9VPgge9', '2017-04-28 08:33:36', '2017-04-30 19:21:09'),
(24, 'Adewale', 'adedotunolawale@gmail.com', '09034268873', '0', 1, 'profile/php300.tmp.jpg', '$2y$10$VaJANETzkRSi4ztZfSOmN.LSR7YdkPVkWQxwF2zNZXwPhUcBj6SDG', NULL, '2017-05-06 00:15:59', '2017-05-06 01:18:31'),
(26, 'GIMBA', 'adedotunolawale2@gmail', '09023654122', 'management', 4, NULL, '$2y$10$pe5pDhshN6JK5ahZbLlaE.UivN/3wsrd5Hrs0dJxObuShaKI96fJC', 'q9uCTrl3WzunjVZc8tuwzyDNg5vTHoyYgY8qZCQPbwgCixHZlgI6PZK1lHGM', '2017-05-15 05:57:30', '2017-05-15 11:20:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carpenter_infos`
--
ALTER TABLE `carpenter_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `client_infos`
--
ALTER TABLE `client_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_orders`
--
ALTER TABLE `client_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_requests`
--
ALTER TABLE `client_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods_items`
--
ALTER TABLE `goods_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods_item_designs`
--
ALTER TABLE `goods_item_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_key` (`product_key`);

--
-- Indexes for table `inhouse_orders`
--
ALTER TABLE `inhouse_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carpenter_infos`
--
ALTER TABLE `carpenter_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `client_infos`
--
ALTER TABLE `client_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `client_orders`
--
ALTER TABLE `client_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `client_requests`
--
ALTER TABLE `client_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `goods_items`
--
ALTER TABLE `goods_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `goods_item_designs`
--
ALTER TABLE `goods_item_designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inhouse_orders`
--
ALTER TABLE `inhouse_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
