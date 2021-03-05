-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 06:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cn334_final63`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(6) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `subject_name` varchar(500) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `credit` int(2) NOT NULL,
  `grade` varchar(2) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `subject_code`, `subject_name`, `credit`, `grade`, `timestamp`) VALUES
(1, 'วย.100', 'จริยธรรมสำหรับวิศวกร', 0, 'S', '2020-11-23 07:08:32'),
(2, 'วก.100', 'กราฟิกวิศวกรรม', 3, 'B+', '2020-11-23 07:10:10'),
(4, 'วท.133', 'ฟิสิกส์สาหรับวิศวกร 1', 3, 'C+', '2020-11-23 07:12:05'),
(5, 'วท.183', 'ปฏิบัติการฟิสิกส์สำหรับวิศวกร 1', 1, 'B+', '2020-11-23 07:12:05'),
(6, 'วท.123', 'เคมีพื้นฐาน', 3, 'F', '2020-11-24 00:01:47'),
(7, 'วท.173', 'ปฏิบัติการเคมีพื้นฐาน', 1, 'A', '2020-11-24 00:01:47'),
(8, 'วพ.101', 'การเขียนโปรแกรมคอมพิวเตอร์เบื้องต้น ', 3, 'B+', '2020-11-24 00:01:47'),
(9, 'วพ.102', 'การฝึกฝนการโปรแกรม 1', 1, 'B+', '2020-11-24 00:01:47'),
(0, 'วพ.202', 'คณิตศาสตร์แบบไม่ต่อเนื่อง', 3, 'A', '2020-11-24 16:14:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
