-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2026 at 08:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beanandbrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `full_name`, `email`) VALUES
(1, 'admin', 'Admin@1234', 'Ghala Aljafr', 'Admin@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Fatmah', 'F@email.com', '1234@F');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `image`, `stock`) VALUES
(1, 'Espresso Dark Roast Blend', 55.00, 'Smooth and nutty flavor with low acidity.', 'Coffee Beans', 'Espresso Dark Roast Blend.jpg', 20),
(2, 'Medium Roast Blend', 60.00, 'Fruity and floral notes with bright acidity.', 'Coffee Beans', 'Medium Roast Blend.jpg', 18),
(3, 'Vanilla Flavored Blend', 55.00, 'Balanced flavor with Vanilla sweetness.', 'Coffee Beans', 'Vanilla Flavored Blend.jpg', 15),
(4, 'Light Roast Blend', 45.00, 'Rich and light flavor for early birds.', 'Coffee Beans', 'Light Roast Blend.jpg', 12),
(5, 'XL Cold Brew Bags', 25.00, 'Organic Cold Brew Elephant Large Coffee Bags', 'Instant Coffee Packets', 'XL Cold Brew Bags.jpg', 30),
(6, 'Flavored Variety Cold Brew Singles', 85.00, 'Enjoy a Variety of Flavored Cold Brew Singles or share it with loved ones.', 'Instant Coffee Packets', 'Flavored Variety Cold Brew Singles.jpg', 25),
(7, 'Organic Variety Cold Brew Singles', 90.00, 'Enjoy Organic Variety Cold Brew Singles and share with loved ones.', 'Instant Coffee Packets', 'Organic Variety Cold Brew Singles.jpg', 28),
(8, 'Vanilla Cold Brew Coffee Singles', 80.00, 'Rich foam coffee Vanilla Cold Brew Coffee Singles.', 'Instant Coffee Packets', 'Vanilla Cold Brew Coffee Singles.jpg', 20),
(9, 'Medium Roast Cold Brew Singles', 85.00, 'Sweet caramel flavor.', 'Instant Coffee Packets', 'Medium Roast Cold Brew Singles.jpg', 18),
(10, 'Matcha Green Tea', 60.00, 'High-quality matcha.', 'Matcha', 'Matcha Green Tea.jpg', 10),
(11, 'Vanilla Matcha Green Tea', 65.00, 'Special Vanilla Green Tea edition.', 'Matcha', 'Vanilla Matcha Green Tea.jpg', 8),
(12, 'Matcha Set', 120.00, 'Complete matcha kit.', 'Matcha', 'matcha_set.jpg', 5),
(13, 'Iced Coffee Glass', 25.00, 'Perfect for iced coffee.', 'Accessories', 'iced_glass.jpg', 20),
(14, 'Ceramic Coffee Cup with plate', 40.00, 'Classic hot coffee cup.', 'Accessories', 'ceramic_cup.jpg', 22),
(15, 'Coffee Scented Candle', 35.00, 'Coffee aroma candle.', 'Accessories', 'coffee_candle.jpg', 15),
(16, 'Matcha Scented Candle', 35.00, 'Relaxing matcha scent.', 'Accessories', 'matcha_candle.jpg', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
