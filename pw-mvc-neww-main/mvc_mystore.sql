CREATE DATABASE IF NOT EXISTS mvc_mystore CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE mvc_mystore;
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS users;
SET FOREIGN_KEY_CHECKS=1;
CREATE TABLE categories (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(100) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE products (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 price DECIMAL(15,2) NOT NULL DEFAULT 0,
 stock INT NOT NULL DEFAULT 0,
 created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 category_id INT NULL,
 CONSTRAINT fk_products_category FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO categories(name) VALUES ('Laptop'),('Aksesoris'),('Komponen PC'),('Periferal');
INSERT INTO users(username,password) VALUES ('admin','$2y$12$ksL9golyobC1mahYVSlDHegm0hHsm8zg9FoC//pDmIgRTLZk24lGW');
INSERT INTO products(name,price,stock,category_id) VALUES
('Laptop ASUS VivoBook 14',7800000,8,1),
('Laptop Lenovo IdeaPad Slim 3',7200000,6,1),
('Laptop Acer Aspire 5',8500000,5,1),
('Laptop HP 14s',6900000,7,1),
('Laptop Dell Inspiron 14',9200000,4,1),
('Laptop ASUS TUF Gaming F15',14500000,3,1),
('Laptop Lenovo LOQ 15',13900000,3,1),
('Mouse Logitech M170',125000,20,2),
('Mouse Logitech M331 Silent',235000,15,2),
('Mouse Rexus Xierra G7',175000,12,2),
('Keyboard Logitech K120',115000,18,2),
('Keyboard Mechanical Fantech',425000,9,2),
('Headset JBL Quantum 100',480000,8,2),
('Webcam Logitech C270',520000,6,2),
('Flashdisk Sandisk 32GB',85000,25,2),
('SSD Kingston 480GB',650000,10,3),
('SSD WD Blue 1TB',1250000,7,3),
('RAM Kingston DDR4 8GB',420000,12,3),
('RAM Corsair DDR4 16GB',780000,6,3),
('Processor Intel Core i5 Gen 12',2850000,4,3),
('Processor AMD Ryzen 5 5600',1950000,5,3),
('Motherboard ASUS Prime B550M',1750000,4,3),
('Power Supply Cooler Master 550W',890000,5,3),
('Monitor LG 24 inch',1850000,6,4),
('Printer Epson L3210',2450000,4,4);
