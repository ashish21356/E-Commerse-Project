-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 01:49 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `ec_address`
--

CREATE TABLE `ec_address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `town_city` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `zip_code` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country_region` varchar(255) NOT NULL,
  `order_note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_address`
--

INSERT INTO `ec_address` (`address_id`, `user_id`, `first_name`, `last_name`, `state`, `town_city`, `address_1`, `address_2`, `zip_code`, `mobile_number`, `email`, `country_region`, `order_note`) VALUES
(202, NULL, 'dsff', 'fdsfds', 'Punjab', 'ryerye', 'rteyre', 'yrere', '765865', '4564564564', 'afddf@gmail.com', 'fdhgfd', 'fdgdgfd'),
(203, NULL, 'fgfdg', 'vcxvcx', 'Goa', 'vcxvc', 'cvcxv', 'fgfdgfdg', '765756', '6546456456', 'fda@gmail.com', 'vcxv', 'hfghfghfg'),
(204, NULL, 'John', 'Doe', 'Goa', 'Bhopal', 'New street', '', '454543', '0987654321', 'test@gmail.com', 'UK', 'qwe'),
(205, NULL, 'fd', 'ggdfgfd', 'Goa', 'dfgdfgfd', 'fdgdfdfg', 'gfg', '6456456', '756745756675', 'afdddf@gmail.com', 'fgfdg', 'gfdggfd');

-- --------------------------------------------------------

--
-- Table structure for table `ec_admin`
--

CREATE TABLE `ec_admin` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_admin`
--

INSERT INTO `ec_admin` (`id`, `user_id`, `username`, `email`, `password`, `status`, `ip`, `added_on`, `updated_on`) VALUES
(1, 4808, 'ashish', 'ashish90@gmail.com', '$2y$10$O5tWQET4/.5/fqD.dkOaGOFVvfKQnVd/Fv1Ee9uH31/id3UhBdnSW', 1, '::1', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ec_banner`
--

CREATE TABLE `ec_banner` (
  `id` int(11) NOT NULL,
  `bann_id` int(10) DEFAULT NULL,
  `bann_image` text DEFAULT NULL,
  `status` int(6) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_banner`
--

INSERT INTO `ec_banner` (`id`, `bann_id`, `bann_image`, `status`, `added_on`, `updated_on`) VALUES
(13, 3262, 'product-134.jpg', 1, '2024-06-18', NULL),
(14, 7176, 'product-82.jpg', 1, '2024-06-18', NULL),
(15, 9347, 'product-11.jpg', 1, '2024-06-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ec_cart`
--

CREATE TABLE `ec_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(30) NOT NULL,
  `cart_id` int(10) DEFAULT NULL,
  `pro_id` int(50) DEFAULT NULL,
  `pro_name` text DEFAULT NULL,
  `pro_qty` int(10) DEFAULT NULL,
  `pro_price` int(30) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_cart`
--

INSERT INTO `ec_cart` (`id`, `user_id`, `cart_id`, `pro_id`, `pro_name`, `pro_qty`, `pro_price`, `slug`, `pro_image`, `added_on`, `updated_on`, `order_id`, `payment_mode`, `status`) VALUES
(43, 8348, 2427, 3223, 'Mi Bluetooth', 3, 12000, 'mi-bluetooth', 'product-32.jpg', '2024-06-18', '2024-06-19 10:24:44', 174028, 'Bank Transfer', 'on the way'),
(44, 8348, 8758, 1592, 'Mi Tablet', 1, 10000, 'mi-tablet', 'product-133.jpg', '2024-06-18', '2024-06-19 10:24:44', 174028, 'Bank Transfer', 'Delivered'),
(46, 8348, 7645, 5660, 'Watch', 1, 8000, 'watch', 'product-83.jpg', '2024-06-19', '2024-06-19 12:04:44', 756327, 'Cash on Delivery', 'on the way');

-- --------------------------------------------------------

--
-- Table structure for table `ec_category`
--

CREATE TABLE `ec_category` (
  `id` int(11) NOT NULL,
  `cate_id` int(10) DEFAULT NULL,
  `cate_name` varchar(50) DEFAULT NULL,
  `parent_id` text DEFAULT NULL,
  `Cat_image` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_category`
--

INSERT INTO `ec_category` (`id`, `cate_id`, `cate_name`, `parent_id`, `Cat_image`, `slug`, `status`, `added_on`, `updated_on`) VALUES
(5, 8448, 'MI Bluetooth', '9855', 'Power_Bank1.jpg', 'mi-bluetooth', 1, '2024-06-06 07:44:34', NULL),
(8, 8737, 'Heat Pump', '9855', 'product-5-1.jpg', 'heat-pump', 1, '2024-06-15 13:07:57', NULL),
(10, 9855, 'Tablet', '', 'product-131.jpg', 'tablet', 1, '2024-06-15 13:16:21', NULL),
(12, 1275, 'Mi Tablet', '9855', 'product-31.jpg', 'mi-bluetooth', 1, '2024-06-15 13:25:28', NULL),
(13, 2483, 'One+ Watch', '', 'product-2.jpg', 'new-one', 1, '2024-06-15 13:27:24', NULL),
(14, 5302, 'Samsung ', '', 'product-81.jpg', 'samsung-watch', 1, '2024-06-15 13:28:54', NULL),
(15, 3942, 'Samsung Tablet', '5302', 'product-132.jpg', 'samsung-tablet', 1, '2024-06-15 13:29:36', NULL),
(16, 7234, 'Samsung Earbuds', '5302', 'product-7.jpg', 'samsung-earbuds', 1, '2024-06-15 13:30:41', NULL),
(17, 4805, 'Samsung Earphone', '5302', 'product-9.jpg', 'samsung-earphone', 1, '2024-06-15 13:31:35', NULL),
(18, 5229, 'Samsung Playstation', '5302', 'product-5-2.jpg', 'samsung-playstation', 1, '2024-06-15 13:32:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ec_customer`
--

CREATE TABLE `ec_customer` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` int(30) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` int(30) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ec_order`
--

CREATE TABLE `ec_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(30) DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `pro_id` int(30) DEFAULT NULL,
  `pro_name` text DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `pro_qty` int(30) DEFAULT NULL,
  `pro_price` varchar(30) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `delivery_charges` varchar(15) DEFAULT NULL,
  `total` varchar(30) DEFAULT NULL,
  `payment_mode` text DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `customer_mobile` varchar(15) DEFAULT NULL,
  `customer_email` varchar(30) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address_2` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `added_on` varchar(50) DEFAULT NULL,
  `updated_on` varchar(50) DEFAULT NULL,
  `delivery_date` varchar(50) DEFAULT NULL,
  `order_date` varchar(50) DEFAULT NULL,
  `order_status` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ec_pincode`
--

CREATE TABLE `ec_pincode` (
  `id` int(11) NOT NULL,
  `pincode` int(10) DEFAULT NULL,
  `delivery_charge` varchar(15) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_pincode`
--

INSERT INTO `ec_pincode` (`id`, `pincode`, `delivery_charge`, `status`) VALUES
(1, 12345, '1289', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ec_product`
--

CREATE TABLE `ec_product` (
  `id` int(11) NOT NULL,
  `pro_id` int(10) DEFAULT NULL,
  `category` int(10) DEFAULT NULL,
  `sub_category` text DEFAULT NULL,
  `pro_name` text DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `featured` text DEFAULT NULL,
  `highlights` text DEFAULT NULL,
  `discription` text DEFAULT NULL,
  `meta_tittle` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `pro_main_image` varchar(255) DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `selling_pricce` float DEFAULT NULL,
  `sold` int(5) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `slug` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_product`
--

INSERT INTO `ec_product` (`id`, `pro_id`, `category`, `sub_category`, `pro_name`, `brand`, `featured`, `highlights`, `discription`, `meta_tittle`, `meta_keywords`, `meta_desc`, `pro_main_image`, `gallery_image`, `stock`, `mrp`, `selling_pricce`, `sold`, `status`, `added_on`, `updated_on`, `ip`, `slug`) VALUES
(49, 1592, 9855, '8448', 'Mi Tablet', 'MI', '2', 'With up to 1TB of expandable storage, there\'s plenty of space for all your downloads.With its large 27.94cm(11-inch) display.', 'Redmi Pad SE is an all new tablet from the house of Xiaomi. Crafted to be taken wherever you go, Redmi Pad SE has a metal unibody design which is available in 3 colours - Graphite Gray, Lavender Purple and Mint Green. Weighing just 478 grams and 7.36mm thin, you can take it everywhere.', '', '', '', 'product-133.jpg', NULL, 4000, 7000, 10000, NULL, 1, '2024-06-15 13:56:09', NULL, NULL, 'mi-tablet'),
(50, 4049, 5302, '7234', 'Earbuds', 'Samsung', '2', '24bit Hi-Fi sound for quality listening experience. ANC with 3 high SNR microphones eliminate more exterior noise. Ergonomic design for comfort fit.', 'Looking for a Samsung Smartwatch? Explore, compare Galaxy Smartwatches. Find features and specifications and choose the right one. View complete range here.', '', '', '', 'product-71.jpg', NULL, 9999, 15000, 18000, NULL, 1, '2024-06-15 13:59:11', NULL, NULL, 'earbuds'),
(51, 1457, 5302, '5229', 'Playstation', 'Samsung', '2', 'PULSE 3D™ Wireless Gaming Over Ear headset (PlayStation®5, Black) | Dual Noise-Cancellation Mic, USB Type-C Charging, 12H Battery, 3.5mm Jack.', 'The PlayStation 5 (PS5) is a home video game console developed by Sony Interactive Entertainment.', '', '', '', 'product-5-21.jpg', NULL, 3333, 70000, 100000, NULL, 1, '2024-06-15 14:02:42', NULL, NULL, 'playstation'),
(52, 3223, 9855, '8448', 'Mi Bluetooth', 'MI', '1', 'Mi-Sts Black Dk15 Sports Stereo Bluetooth Neckband Headphone Long Battery Bluetooth Headset, In The Ear', 'Never miss a beat.Never miss a call.Enjoy wireless music and answer phone calls in crystal clear stereo sound with this bluetooth headset.It connects easily to your mobile phones,tablets or other supported devices using bluetooth technology and enables you to stream hi-quality stereo music.', '', '', '', 'product-32.jpg', NULL, 4000, 9000, 12000, NULL, 1, '2024-06-15 14:05:14', NULL, NULL, 'mi-bluetooth'),
(53, 5660, 5302, '3942', 'Watch', 'Samsung', '2', 'The watch that knows you best is back with a more personalized health experience and better yet, upgraded sleep tracking.', 'The watch that knows you best is back with a more personalized health experience and better yet, upgraded sleep tracking.', '', '', '', 'product-83.jpg', NULL, 3000, 6000, 8000, NULL, 1, '2024-06-19 11:48:12', NULL, NULL, 'watch'),
(54, 2341, 2483, NULL, 'One+', 'One+', '2', 'In line with high-end watches, the watch face is crafted using specially-treated sapphire', 'In line with high-end watches, the watch face is crafted using specially-treated sapphire', '', '', '', 'product-21.jpg', NULL, 600, 7000, 12000, NULL, 1, '2024-06-19 11:50:32', NULL, NULL, 'one-'),
(55, 8959, 2483, NULL, 'Power Bank', 'One+', '2', 'One+ 10000mAh Slim & Compact Powerbank, 22.5W Fast Charging, USB & Type C Output, Power Delivery,', 'One+ 10000mAh Slim & Compact Powerbank, 22.5W Fast Charging, USB & Type C Output, Power Delivery,', '', '', '', 'product-5.jpg', NULL, 400, 7000, 9000, NULL, 1, '2024-06-19 11:52:26', NULL, NULL, 'power-bank'),
(56, 9495, 9855, '8448', 'Monitor', 'MI', '2', 'The 11\" large FHD+ display with 16.7 million colors and 90Hz AdaptiveSync refresh rate ensures a vivid and smooth visual experience for daily entertainment.', 'The 11\" large FHD+ display with 16.7 million colors and 90Hz AdaptiveSync refresh rate ensures a vivid and smooth visual experience for daily entertainment.', '', '', '', 'product-12.jpg', NULL, 9000, 9000, 11000, NULL, 1, '2024-06-19 11:53:30', NULL, NULL, 'monitor');

-- --------------------------------------------------------

--
-- Table structure for table `ec_users`
--

CREATE TABLE `ec_users` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_users`
--

INSERT INTO `ec_users` (`id`, `user_id`, `username`, `email`, `password`, `status`, `ip`, `added_on`, `updated_on`) VALUES
(12, 6727, 'Will Smith', 'ashishwadbude@gmail.com', '$2y$10$aUWhz.H32cMUxhSdPxNMb.1E2GEJKn1Zpq90Vomka0JQN97pb1NPO', 1, '::1', '1', NULL),
(13, 3591, 'ashish56', 'a@gmail.com', '$2y$10$PZzMcDAq3B4Yt.monWdCdO.T5XkWfbh4Mbre71M9Hbcq8Qs1s.HM2', 1, '::1', '1', NULL),
(14, 3428, 'ashish56', 'ashishwadbude16@gmail.com', '$2y$10$aUSGMBn9/yvAaIU4cyla0u9K14ibj5zhsAS/ift/k4gpjLJfP8xDq', 1, '::1', '1', NULL),
(15, 5142, 'ashish56', 'ashishwadgrfdgbbude@gmail.com', '$2y$10$lVDlNh2yBKoDkmiSSTrzKu1DUcTLrleW1MJzG/O3QN8.JXraY248C', 1, '::1', '1', NULL),
(16, 2604, 'ashish', 'acdszcvdszc@gmail.com', '$2y$10$SQRxR2kG9I6FfT1jUPkqwOf39JuYTbWyJ4ScZ3zIxlbnJPEzDlWpq', 1, '::1', '1', NULL),
(17, 5499, 'Will Smith', 'willsmith@gmail.com', '$2y$10$SZKcwXd1fDxMfgAGMUAVG.cukJ1bhkmxuYculDnATyzGl6jRiZOe.', 1, '::1', '1', NULL),
(18, 7284, 'ashish56', 'ashishwadfcvbude@gmail.com', '$2y$10$EhF0Mb8vjef77XPFEP6Js.QIGz2cyqpIIrvsunhCDphxh7zq6xDHS', 1, '::1', '1', NULL),
(19, 3067, 'ashish56', 'ashisshwadbude@gmail.com', '$2y$10$UYVkvga7NcBHootCSLNQpuRpxLghPLwd1kTqS3s8GJVHcZItHVyue', 1, '::1', '1', NULL),
(20, 2945, 'Will Smith', 'szfca@gmail.com', '$2y$10$xevpUvQZrYBZlp628t2xNuNR/Ok8CoNnGrni3gtgyKapfIxcDkm0u', 1, '::1', '1', NULL),
(21, 8348, 'ashish', 'hg@gmail.com', '$2y$10$nBVaZ3X1N5LPe9kvG9AeaeIDOXsS2L5UXUykxj1SaKa5Bl0xzr0vS', 1, '::1', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ec_wishlist`
--

CREATE TABLE `ec_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `wishlist_id` int(10) DEFAULT NULL,
  `pro_id` int(50) DEFAULT NULL,
  `pro_name` text DEFAULT NULL,
  `pro_price` int(30) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_address`
--
ALTER TABLE `ec_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `ec_admin`
--
ALTER TABLE `ec_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_banner`
--
ALTER TABLE `ec_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_cart`
--
ALTER TABLE `ec_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_category`
--
ALTER TABLE `ec_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_customer`
--
ALTER TABLE `ec_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_order`
--
ALTER TABLE `ec_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_pincode`
--
ALTER TABLE `ec_pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_product`
--
ALTER TABLE `ec_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_users`
--
ALTER TABLE `ec_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_wishlist`
--
ALTER TABLE `ec_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_address`
--
ALTER TABLE `ec_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `ec_admin`
--
ALTER TABLE `ec_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ec_banner`
--
ALTER TABLE `ec_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ec_cart`
--
ALTER TABLE `ec_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ec_category`
--
ALTER TABLE `ec_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ec_customer`
--
ALTER TABLE `ec_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ec_order`
--
ALTER TABLE `ec_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ec_pincode`
--
ALTER TABLE `ec_pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ec_product`
--
ALTER TABLE `ec_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `ec_users`
--
ALTER TABLE `ec_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ec_wishlist`
--
ALTER TABLE `ec_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
