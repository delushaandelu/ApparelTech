-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2016 at 07:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apperaltec`
--

-- --------------------------------------------------------

--
-- Table structure for table `boughtitem`
--

CREATE TABLE `boughtitem` (
  `supplier_id` int(5) NOT NULL,
  `item_id` varchar(5) NOT NULL,
  `boughtQty` int(5) NOT NULL,
  `deateOfPurchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL,
  `nic` varchar(11) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `companyName` varchar(32) NOT NULL,
  `address` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `photo` varchar(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customercontect`
--

CREATE TABLE `customercontect` (
  `customer_id` int(5) NOT NULL,
  `contectNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `note_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `deliveryQty` int(5) NOT NULL,
  `deliveryAddress` varchar(128) NOT NULL,
  `deliveryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryrequest`
--

CREATE TABLE `deliveryrequest` (
  `note_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `deliveryRequest` varchar(16) NOT NULL,
  `status` varchar(16) NOT NULL,
  `driver_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(5) NOT NULL,
  `driverName` varchar(64) NOT NULL,
  `LicenceNo` int(11) NOT NULL,
  `driverAddress` varchar(128) NOT NULL,
  `vechicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drivercontact`
--

CREATE TABLE `drivercontact` (
  `driver_id` int(5) NOT NULL,
  `contactNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(5) NOT NULL,
  `itemName` varchar(32) NOT NULL,
  `buyingPrice` int(6) NOT NULL,
  `sellingPrice` int(6) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `catagery` varchar(32) NOT NULL,
  `stockQty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poitem`
--

CREATE TABLE `poitem` (
  `order_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `orderQty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `customer_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `po_date` date NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotation_id` int(5) NOT NULL,
  `quotationDate` date NOT NULL,
  `supplier_id` int(5) NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renteditem`
--

CREATE TABLE `renteditem` (
  `rent_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `rentedQty` int(5) NOT NULL,
  `rentedOrderAmount` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rentrequest`
--

CREATE TABLE `rentrequest` (
  `customer_id` int(5) NOT NULL,
  `rent_id` int(5) NOT NULL,
  `status` varchar(16) NOT NULL,
  `rentRequestDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returnitem`
--

CREATE TABLE `returnitem` (
  `customer_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `returnItemQty` int(5) NOT NULL,
  `returnDate` date NOT NULL,
  `description` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(5) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `address` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliercontact`
--

CREATE TABLE `suppliercontact` (
  `supplier_id` int(5) NOT NULL,
  `contactNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `accessLevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(5) NOT NULL,
  `vehicleNo` varchar(12) NOT NULL,
  `capacity` varchar(16) NOT NULL,
  `vehicleType` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boughtitem`
--
ALTER TABLE `boughtitem`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customercontect`
--
ALTER TABLE `customercontect`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `deliveryrequest`
--
ALTER TABLE `deliveryrequest`
  ADD PRIMARY KEY (`note_id`,`customer_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `drivercontact`
--
ALTER TABLE `drivercontact`
  ADD PRIMARY KEY (`driver_id`,`contactNo`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `poitem`
--
ALTER TABLE `poitem`
  ADD PRIMARY KEY (`order_id`,`item_id`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`customer_id`,`order_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotation_id`);

--
-- Indexes for table `renteditem`
--
ALTER TABLE `renteditem`
  ADD PRIMARY KEY (`rent_id`,`item_id`);

--
-- Indexes for table `rentrequest`
--
ALTER TABLE `rentrequest`
  ADD PRIMARY KEY (`customer_id`,`rent_id`);

--
-- Indexes for table `returnitem`
--
ALTER TABLE `returnitem`
  ADD PRIMARY KEY (`customer_id`,`item_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `suppliercontact`
--
ALTER TABLE `suppliercontact`
  ADD PRIMARY KEY (`supplier_id`,`contactNumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boughtitem`
--
ALTER TABLE `boughtitem`
  MODIFY `supplier_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `note_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quotation_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `renteditem`
--
ALTER TABLE `renteditem`
  MODIFY `rent_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
