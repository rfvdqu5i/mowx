/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mowx

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-29 07:54:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `bill_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_money` decimal(50,0) DEFAULT NULL,
  `time_bill` datetime DEFAULT NULL,
  `employee_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `customer_code` (`customer_code`),
  KEY `employee_code` (`employee_code`),
  KEY `bill_code` (`bill_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bills
-- ----------------------------
INSERT INTO `bills` VALUES ('HD1559064188', 'KH1559064176', '1099000', '2019-05-29 00:23:08', 'ONLINE');
INSERT INTO `bills` VALUES ('HD1559066807', 'KH1559066709', '689000', '2019-05-29 01:06:47', 'ONLINE');
INSERT INTO `bills` VALUES ('HD1559067002', 'KH1559066984', '470000', '2019-05-29 01:10:02', 'ONLINE');
INSERT INTO `bills` VALUES ('HD1559067192', 'KH1559067146', '470000', '2019-05-29 01:13:12', 'ONLINE');
INSERT INTO `bills` VALUES ('HD1559067330', 'KH1559067310', '800000', '2019-05-29 01:15:30', 'ONLINE');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `customer_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_birthday` date DEFAULT NULL,
  `customer_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('KH1559064176', 'Nguyễn Đức Anh', 'Văn Bàn - Lào Cai', '1997-04-25', 'rfvdqu5i@gmail.com', '0838921897', 'Kh4l7991@');
INSERT INTO `customers` VALUES ('KH1559066709', 'Trần Xuân Diệu', 'Thái Thụy - Thái Bình', '1998-09-05', 'trandieutd@gmail.com', '0123456789', '123');
INSERT INTO `customers` VALUES ('KH1559066984', 'Phạm Thanh Hải', 'Trưng Trắc - Vĩnh Phúc', '1998-10-25', 'phamthanhhai251098@gmail.com', '0123456789', '123');
INSERT INTO `customers` VALUES ('KH1559067146', 'Trịnh Hải Linh', 'Hạ Long - Quảng Ninh', '1998-11-30', 'plnhailinh@gmail.com', '0123456789', '123');
INSERT INTO `customers` VALUES ('KH1559067310', 'Nguyễn Văn Tình', 'Thạch Thất - Hà Nội', '1998-03-14', 'vanlove9a5@gmail.com', '0123456789', '123');

-- ----------------------------
-- Table structure for detail_bill
-- ----------------------------
DROP TABLE IF EXISTS `detail_bill`;
CREATE TABLE `detail_bill` (
  `bill_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity_buy` int(11) DEFAULT NULL,
  `into_money` decimal(50,0) DEFAULT NULL,
  KEY `product_code` (`product_code`),
  KEY `bill_code` (`bill_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of detail_bill
-- ----------------------------
INSERT INTO `detail_bill` VALUES ('HD1557550419', 'SP006', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1557550419', 'SP004', '1', '210000');
INSERT INTO `detail_bill` VALUES ('HD1557550419', 'SP002', '3', '687000');
INSERT INTO `detail_bill` VALUES ('HD1557550419', 'SP007', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557558191', 'SP002', '1', '229000');
INSERT INTO `detail_bill` VALUES ('HD1557558191', 'SP006', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1557558191', 'SP010', '1', '240000');
INSERT INTO `detail_bill` VALUES ('HD1557566617', 'SP003', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557566617', 'SP007', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557566774', 'SP003', '2', '400000');
INSERT INTO `detail_bill` VALUES ('HD1557566774', 'SP004', '1', '210000');
INSERT INTO `detail_bill` VALUES ('HD1557579002', 'SP004', '3', '630000');
INSERT INTO `detail_bill` VALUES ('HD1557579002', 'SP003', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557579067', 'SP002', '1', '229000');
INSERT INTO `detail_bill` VALUES ('HD1557579067', 'SP006', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1557581445', 'SP003', '3', '600000');
INSERT INTO `detail_bill` VALUES ('HD1557628111', 'SP003', '3', '600000');
INSERT INTO `detail_bill` VALUES ('HD1557628111', 'SP002', '3', '687000');
INSERT INTO `detail_bill` VALUES ('HD1557628111', 'SP006', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1557634207', 'SP003', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557648308', 'SP006', '5', '1100000');
INSERT INTO `detail_bill` VALUES ('HD1557648925', 'SP003', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557648925', 'SP004', '1', '210000');
INSERT INTO `detail_bill` VALUES ('HD1557649773', 'SP003', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557649773', 'SP004', '1', '210000');
INSERT INTO `detail_bill` VALUES ('HD1557656434', 'SP003', '2', '400000');
INSERT INTO `detail_bill` VALUES ('HD1557656434', 'SP004', '1', '210000');
INSERT INTO `detail_bill` VALUES ('HD1557660494', 'SP003', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1557660522', 'SP002', '1', '229000');
INSERT INTO `detail_bill` VALUES ('HD1557711060', 'SP009', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1557711060', 'SP007', '1', '200000');
INSERT INTO `detail_bill` VALUES ('HD1559064188', 'SP006', '3', '660000');
INSERT INTO `detail_bill` VALUES ('HD1559064188', 'SP002', '1', '229000');
INSERT INTO `detail_bill` VALUES ('HD1559064188', 'SP004', '1', '210000');
INSERT INTO `detail_bill` VALUES ('HD1559066807', 'SP002', '1', '229000');
INSERT INTO `detail_bill` VALUES ('HD1559066807', 'SP009', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1559066807', 'SP010', '1', '240000');
INSERT INTO `detail_bill` VALUES ('HD1559067002', 'SP006', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1559067002', 'SP005', '1', '250000');
INSERT INTO `detail_bill` VALUES ('HD1559067192', 'SP011', '1', '250000');
INSERT INTO `detail_bill` VALUES ('HD1559067192', 'SP012', '1', '220000');
INSERT INTO `detail_bill` VALUES ('HD1559067330', 'SP003', '4', '800000');

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `employee_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `employee_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_address` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_birthday` date DEFAULT NULL,
  `employee_image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`employee_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('NV001', 'Nguyễn Đức Anh', 'Văn Bàn - Lào Cai', 'rfvdqu5i@gmail.com', 'myancutcho', '0123456789', '1997-04-25', null);
INSERT INTO `employees` VALUES ('NV002', 'Nguyễn Vũ Đức Anh', 'Văn Bàn - Lào Cai', 'ducanh.lc9x@gmail.com', '123', '0838921897', '1997-04-25', null);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_price` decimal(50,0) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_code`),
  KEY `category_code` (`category_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('SP002', 'Áo khoác kaki STC', '-1', '229000', 'kaki-black-and-white.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP003', 'Áo khoác kaki form rộng', '25', '200000', 'kaki-form-rong.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP004', 'Áo khoác kaki Fanyu', '16', '210000', 'kaki-fanyu.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP005', 'Áo khoác kaki End', '11', '250000', 'kaki-end.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP006', 'Áo khoác kaki Jordan', '1', '220000', 'kaki_jordan.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP007', 'Áo khoác kaki Mchun', '14', '200000', 'kaki-mchun.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP008', 'Áo khoác kaki phối màu', '15', '210000', 'kaki-phoi-mau.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP009', 'Áo khoác kaki in dọc mũ', '10', '220000', 'kaki-in-doc-mu.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP010', 'Áo khoác kaki hươu cao cổ', '17', '240000', 'kaki-hou-cao-co.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP011', 'Áo khoác kaki phối túi hộp', '12', '250000', 'kaki-phoi-tui-hop.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP012', 'Áo khoác kaki phối túi', '13', '220000', 'kaki-phoi-tui.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP013', 'Áo khoác kaki phối màu 6 túi', '14', '210000', 'kaki-phoi-mau-6-tui.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP014', 'Áo khoác kaki phối màu 4 túi', '12', '200000', 'kaki-phoi-mau-4-tui.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP015', 'Áo khoác kaki túi sau', '14', '230000', 'kaki-tui-sau.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP016', 'Áo khoác kaki túi hộp', '17', '230000', 'kaki-tui-hop.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP017', 'Áo khoác kaki tay sọc', '14', '190000', 'kaki-tay-soc.png', 'Áo kaki');
INSERT INTO `products` VALUES ('SP018', 'Áo khoác kaki spaldcteg', '15', '200000', 'kaki-spaldcteg.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP019', 'Áo khoác kaki yoeto', '16', '230000', 'kaki-yoeto.jpg', 'Áo kaki');
INSERT INTO `products` VALUES ('SP020', 'Áo thun Stan Lee', '14', '150000', '58382220_2384241508455012_2040436574604230656_n.jpg', 'Áo thun');
