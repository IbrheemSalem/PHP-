-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 12:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `name_card` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `description_card` varchar(255) NOT NULL,
  `price_card` int(20) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcard`
--

INSERT INTO `addcard` (`id`, `name_card`, `email_add`, `description_card`, `price_card`, `img`) VALUES
(1, 'Audi', 'ahmad-ahmad@hotmail.com', 'Airport Road, 7th Circle, Amman, Jordan, Amman, Jordan', 200000, 'download.png'),
(2, 'BMW', 'ahmad-ahmad@hotmail.com', 'BMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\n', 25000, 'friend-05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name_book` varchar(100) NOT NULL,
  `email_book` varchar(100) NOT NULL,
  `subject_book` varchar(255) NOT NULL,
  `data_send` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name_book`, `email_book`, `subject_book`, `data_send`) VALUES
(1, 'BMW ', 'ahmad-ahmad@hotmail.com', 'Certified and Award Winning Car Repair Service Provider', '2023-01-27'),
(2, 'ibraheem salem', 'ebrheem-salem@hotmail.com', '', '2023-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name_con` varchar(100) NOT NULL,
  `email_con` varchar(100) NOT NULL,
  `subject_con` varchar(100) NOT NULL,
  `message_con` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name_con`, `email_con`, `subject_con`, `message_con`) VALUES
(5, 'ibraheem salem', 'ebrheem-salem@hotmail.com', 'ontact form with Ajax', 'The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files \r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `name_log` varchar(100) NOT NULL,
  `email_log` varchar(100) NOT NULL,
  `password_log` varchar(100) NOT NULL,
  `active` float NOT NULL,
  `rols` text NOT NULL,
  `datastart_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `name_log`, `email_log`, `password_log`, `active`, `rols`, `datastart_log`) VALUES
(1, 'Ibraheem Salem', 'ebrheem-salem@hotmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1, 'admin', '2023-01-06 23:19:40'),
(2, 'Ahmmad Salem', 'ahmad-ahmad@hotmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1, 'user', '2023-01-06 23:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'BMW', 'BMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\nBMW BMW BMW BMW BMW BMW BMW BMW BMW \r\n', 25000, 'friend-05.jpg'),
(2, 'Audi', 'Airport Road, 7th Circle, Amman, Jordan, Amman, Jordan', 200000, 'download.png'),
(3, 'Audi', 'Airport Road, 7th Circle, Amman, Jordan, Amman, Jordan', 200000, 'download.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name_ser` varchar(100) NOT NULL,
  `email_ser` varchar(100) NOT NULL,
  `service_ser` varchar(50) NOT NULL,
  `special_request` varchar(255) NOT NULL,
  `data_ser` date NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name_ser`, `email_ser`, `service_ser`, `special_request`, `data_ser`, `phone`) VALUES
(1, 'ibraheem salem', 'ebrheem-salem@hotmail.com', 'Buy or sell check', 'Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magn', '2023-03-03', 789468554);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
