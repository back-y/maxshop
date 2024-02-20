-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'saymen', 'a@gmail.com', '1', 'cat_image.jpg', 'addis', '<p>new life is good for some reasonsnew life is good for some reasonsnew life is good for some reasonsnew life is good for some reasons</p>', '2519-7303-3007', 'WD'),
(2, 'tiyakealem', 'bereketgezha99@gmail.com', '1', 'Black Blouse Versace Coat2.jpg', 'ad', 'fffffff', '33', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus nemo voluptates deleniti architecto dolor quidem dolorum! Culpa, itaque ut.'),
(2, 'Women', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus nemo voluptates deleniti architecto dolor quidem dolorum! Culpa, itaque ut.'),
(3, 'kids', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus nemo voluptates deleniti architecto dolor quidem dolorum! Culpa, itaque ut.'),
(4, 'Other', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus nemo voluptates deleniti architecto dolor quidem dolorum! Culpa, itaque ut.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'a', 'bereketgezha99@gmail.com', '11', 'Ethiopia', 'Eagan', '0000', '3035 Eagan dale Place', 'cat_image.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 1, 11, 571354441, 1, 'Medium', '2022-09-04', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 571354441, 123, 'Back Code', 8, 34772, '7/8/2021');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(1, 1, 571354441, '9', 1, 'Medium', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_img5` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_price`, `product_keywords`, `product_desc`) VALUES
(2, 1, 4, '2022-09-04 12:12:49', 'ssssssssssss', '1.png', '2.png', '5.png', '1.png', '2.png', 88, 'Cotton', '<p>new new new new new new new new new new new&nbsp;</p>'),
(3, 3, 4, '2022-08-26 06:04:39', 'wash machine', '1.png', '5.png', 'b8.jpg', 'f9.jpg', '2.png', 99, 'wm', 'new tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tabletnew tablet'),
(4, 3, 4, '2022-08-26 06:23:40', 'hp pc', 'e3.jpg', 'e3_3.jpg', 'e3.jpg', 'e3_3.jpg', 'e3.jpg', 98, 'hp', 'new hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pc'),
(5, 3, 4, '2022-08-26 06:24:45', 'desctop', 'e11.jpg', 'e12.jpg', 'f14.jpg', 'f13.jpg', 'e11.jpg', 87, 'apple', 'new hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pc'),
(6, 3, 2, '2022-08-26 06:26:03', 'cosmo', 'm1.jpg', 'm2.jpg', 'm1.jpg', 'm2.jpg', 'm2.jpg', 66, 'cm', 'new hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pc'),
(7, 3, 2, '2022-08-26 06:27:05', 'braslate', 'j4.jpg', 'j5.jpg', 'j9.jpg', 'j4.jpg', 'j5.jpg', 54, 'br', 'new hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pc'),
(8, 3, 4, '2022-08-26 06:28:01', 'elec', '34.jpg', '35.jpg', 'b5.jpg', '34.jpg', 'b6.jpg', 66, 'el', 'new hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pc'),
(9, 3, 4, '2022-09-04 11:18:22', 'ddddddddddddddd', '9.jpg', '141.jpg', '141.jpg', '9.jpg', '9.jpg', 11, 'cm', '<p>new hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pcnew hp pc</p>'),
(13, 3, 1, '2022-09-04 12:45:00', 'Security Camera', 'fur coat with button2.jpg', 'fur coat with button1.jpg', 'fur coat with button3.jpg', 'fur coat with button1.jpg', 'fur coat with button2.jpg', 809, 'shofa', '<p>nnnnnnn</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Smartphone', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus nemo voluptates deleniti architecto dolor quidem dolorum! Culpa, itaque ut.	'),
(2, 'Tablets', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus nemo voluptates deleniti architecto dolor quidem dolorum! Culpa, itaque ut.'),
(3, 'Electronics', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nostrum aliquid atque vero necessitatibus ullam impedit maiores. Commodi, voluptas quibusdam.						'),
(4, 'Shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nostrum aliquid atque vero necessitatibus ullam impedit maiores. Commodi, voluptas quibusdam.						'),
(5, 'Watches', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nostrum aliquid atque vero necessitatibus ullam impedit maiores. Commodi, voluptas quibusdam.						');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', '1.jpg'),
(2, 'Slide number 2', '2.jpg'),
(3, 'Slide number 3', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
