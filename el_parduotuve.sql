-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 03:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el_parduotuve`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_userid`
--

CREATE TABLE `cart_userid` (
  `vartotojo_id` int(11) NOT NULL,
  `prekes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `image` varchar(66) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `name`, `category`, `image`, `price`) VALUES
(1, 'Batutas', '', '1.jpg', 100.00),
(2, 'Rieduciai', '', '2.jpg', 50.55),
(3, 'Zirneliai', 'Saldytos', '3.jpg', 0.99),
(4, 'Braskes', 'Saldytos', '4.jpg', 2.99),
(5, 'Kopustas', 'Sviezios', '5.jpg', 0.99),
(6, 'Smidrai', 'Sviezios', '6.jpg', 3.99),
(7, 'Gipso kartonas', '', '7.jpg', 20.44),
(8, 'Dazai', '', '8.jpg', 25.99);

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(16) NOT NULL,
  `pavarde` varchar(16) NOT NULL,
  `slaptazodis` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `pavarde`, `slaptazodis`) VALUES
(1, 'Petras', 'Petraitis', 'slaptazodis123'),
(2, 'Antanas', 'Antanaitis', 'slapt');

-- --------------------------------------------------------

--
-- Table structure for table `vertinimas`
--

CREATE TABLE `vertinimas` (
  `vartotojo_vardas` varchar(66) NOT NULL,
  `vidurkis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vertinimas`
--

INSERT INTO `vertinimas` (`vartotojo_vardas`, `vidurkis`) VALUES
('0', 0),
('0', 0),
('0', 0),
('0', 0),
('0', 0),
('0', 0),
('0', 0),
('0', 2),
('0', 2),
('0', 2),
('0', 2),
('0', 2),
('0', 1),
('0', 1),
('0', 2),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 1),
('Antanas', 2),
('Antanas', 2),
('Antanas', 2),
('Antanas', 1),
('Antanas', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
