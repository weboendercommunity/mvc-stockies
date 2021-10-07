-- SQL dump generated using DBML (dbml-lang.org)
-- Database: MySQL
-- Generated at: 2021-10-07T14:04:21.702Z

CREATE TABLE `Sample` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `Employees` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `employee_code` varchar(255),
  `employee_fullname` varchar(255),
  `phone_number` varchar(255),
  `address` text,
  `role` ENUM ('Staff', 'Manager', 'Owner', 'Admin')
);

CREATE TABLE `Suppliers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `company_name` varchar(255),
  `contact_name` varchar(255),
  `phone_number` varchar(255),
  `address` text
);

CREATE TABLE `Categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `category_name` varchar(255),
  `description` text
);

CREATE TABLE `Products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_name` varchar(255),
  `product_qty` int,
  `unit_price` int,
  `supplier_id` int,
  `category_id` int
);

CREATE TABLE `Shippers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `company_name` varchar(255),
  `phone_number` varchar(255)
);

CREATE TABLE `Customers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `customer_fullname` varchar(255),
  `phone_number` varchar(255),
  `email` varchar(255),
  `address` text
);

CREATE TABLE `Orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_date` timestamp DEFAULT (now()),
  `shipped_date` date,
  `shipper_id` int,
  `customer_id` int,
  `employee_id` int
);

CREATE TABLE `OrderDetails` (
  `order_id` int,
  `product_id` int,
  `total_price` int,
  `total_qty` int,
  `payment_status` ENUM ('done', 'delay', 'onProgress')
);

ALTER TABLE `Products` ADD FOREIGN KEY (`supplier_id`) REFERENCES `Suppliers` (`id`);

ALTER TABLE `Products` ADD FOREIGN KEY (`category_id`) REFERENCES `Categories` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`shipper_id`) REFERENCES `Shippers` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`employee_id`) REFERENCES `Employees` (`id`);

ALTER TABLE `OrderDetails` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

ALTER TABLE `OrderDetails` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);
