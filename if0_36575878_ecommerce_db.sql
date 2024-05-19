-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 06:10 PM
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
-- Database: `e-commerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `productID`, `comment`) VALUES
(1, 1, 'Delicious');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `prodName` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` double UNSIGNED DEFAULT NULL,
  `pic` varchar(500) DEFAULT NULL,
  `isFeatured` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prodName`, `description`, `price`, `pic`, `isFeatured`) VALUES
(1, 'Margherita', 'A classic Italian pizza topped with tomato sauce, fresh mozzarella cheese, and fresh basil leaves. It is known for its simplicity and vibrant flavors.', 560, 'MARGHERITA PIZZA - Stefano Faita.jpg', 1),
(2, 'Pepperoni', 'One of the most popular pizzas in the United States, featuring tomato sauce, mozzarella cheese, and slices of pepperoni sausage. It is known for its spicy and savory taste.', 670, 'Homemade Pepperoni Pizza [105 Minutes].jpg', 0),
(3, 'BBQ Chicken', 'This pizza is topped with barbecue sauce, grilled chicken, red onions, mozzarella cheese, and cilantro. It is a sweet and smoky variation that many people love.', 730, 'Cheesy BBQ Chicken Pizza.jpg', 1),
(4, 'Hawaiian', 'A controversial yet popular pizza topped with tomato sauce, mozzarella cheese, ham, and pineapple. The combination of sweet and savory flavors makes it unique.', 670, 'Hawaiian Pizza.jpg', 0),
(5, 'Meat Lovers', 'A hearty pizza loaded with a variety of meats such as pepperoni, sausage, ham, bacon, and sometimes ground beef, all atop tomato sauce and mozzarella cheese.', 790, 'Meat Lovers Pizza.jpg', 0),
(6, 'Veggie', 'A pizza topped with a variety of fresh vegetables like bell peppers, onions, mushrooms, olives, and tomatoes, along with tomato sauce and mozzarella cheese. It is a lighter and healthier option.', 620, 'Veggie Deluxe Pizza.jpg', 0),
(7, 'Four Cheese', 'This pizza features a rich blend of four different cheeses, typically including mozzarella, gorgonzola, parmesan, and ricotta, on a tomato sauce base. It is the dream for cheese lovers.', 730, 'Cheesy Pizza Crust - Layers of Happiness.jpg', 0),
(8, 'Buffalo Chicken', 'Topped with buffalo sauce, grilled chicken, mozzarella cheese, and often blue cheese or ranch dressing. This pizza is spicy, tangy, and delicious.', 730, 'Buffalo Chicken Pizza - The Slimmer Kitchen.jpg', 0),
(9, 'Pesto', 'Instead of tomato sauce, this pizza uses pesto sauce and is typically topped with mozzarella cheese, cherry tomatoes, and sometimes fresh basil or ricotta cheese for a fresh, herby flavor.', 670, 'Green Vegetable Pesto Garden Party Vegetarian Pizza.jpg', 0),
(10, 'Supreme', 'A loaded pizza that includes a variety of toppings like pepperoni, sausage, bell peppers, onions, mushrooms, and olives, all on a tomato sauce and mozzarella cheese base. It is a great choice for those who want a bit of everything.', 790, 'An excellent NO YEAST Pizza Dough - super quick!.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
