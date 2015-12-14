-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 02:54 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourmaline_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `link` varchar(450) DEFAULT NULL,
  `show` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `link`, `show`) VALUES
(1, 'banner1', '900x300.png', 0),
(2, 'banner2', '900x300.png', 0),
(3, 'banner3', '900x300.png', 0),
(4, 'B1', '185a4-1.jpg', 1),
(5, 'B2', '0c369-2.jpg', 1),
(6, 'B3', '49df4-3.jpg', 1),
(7, 'B4', '51ba6-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `category_name_eng` varchar(45) DEFAULT NULL,
  `category_link` varchar(255) NOT NULL,
  `g_category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_name_eng`, `category_link`, `g_category_id`) VALUES
(1, 'ไทย 1', 'Thailand 1', 'index/index/', 49),
(2, 'ทัวร์ออสเตรีย 1', 'Austria 1', 'index/index/', 5),
(3, 'ทัวร์เบลเยียม 1', 'Belgium 1', 'index/index/', 6),
(4, 'ทัวร์บรูไนดารุสซาลาม 1', 'Brunei Darussalam 1', 'index/index/', 7),
(5, 'ทัวร์กัมพูชา 1', 'Cambodia 1', 'index/index/', 8),
(6, 'ทัวร์แคนาดา 1', 'Canada 1', 'index/index/', 9),
(7, 'ทัวร์สาธารณรัฐเช็ค 1', 'Czech 1', 'index/index/', 10),
(8, 'ทัวร์เดนมาร์ก 1', 'Denmark 1', 'index/index/', 11),
(9, 'ทัวร์ดูไบ 1', 'Dubai 1', 'index/index/', 12),
(10, 'ทัวร์เอสโตเนีย 1', 'Estonia 1', 'index/index/', 13),
(11, 'ทัวร์ฟินแลนด์ 1', 'Finland 1', 'index/index/', 14),
(12, 'ทัวร์ฝรั่งเศส 1', 'France 1', 'index/index/', 15),
(13, 'ทัวร์เยอรมนี 1', 'Germary 1', 'index/index/', 16),
(14, 'ทัวร์ฮ่องกง 1', 'Hongkong 1', 'index/index/', 17),
(15, 'ทัวร์ฮังการี 1', 'Hungary 1', 'index/index/', 18),
(16, 'ทัวร์อินโดนีเซีย 1', 'Indonesia 1', 'index/index/', 19),
(17, 'ทัวร์อิตาลี 1', 'Italy 1', 'index/index/', 20),
(18, 'ทัวร์ลาว 1', 'Lao 1', 'index/index/', 21),
(19, 'ทัวร์ลัตเวีย 1', 'Latvia 1', 'index/index/', 22),
(20, 'ทัวร์ลิทัวเนีย 1', 'Lithuania 1', 'index/index/', 23),
(21, 'ทัวร์ลักเซมเบิร์ก 1', 'Luxembourg 1', 'index/index/', 24),
(22, 'ทัวร์โมรอคโค 1', 'Morocco 1', 'index/index/', 25),
(23, 'ทัวร์เนเธอร์แลนด์ 1', 'Netherlands 1', 'index/index/', 26),
(24, 'ทัวร์นอร์เวย์ 1', 'Norway 1', 'index/index/', 27),
(25, 'ทัวร์ฟิลิปปินส์ 1', 'Philippines 1', 'index/index/', 28),
(26, 'ทัวร์โปรตุเกส 1', 'Portugal 1', 'index/index/', 29),
(27, 'ทัวร์รัสเซีย 1', 'Russia 1', 'index/index/', 30),
(28, 'ทัวร์สโลวาเกีย 1', 'Slovakia 1', 'index/index/', 31),
(29, 'ทัวร์แอฟริกาใต้ 1', 'South Africa 1', 'index/index/', 32),
(30, 'ทัวร์สเปน 1', 'Spain 1', 'index/index/', 33),
(31, 'ทัวร์สวีเดน 1', 'Sweden 1', 'index/index/', 34),
(32, 'ทัวร์สวิตเซอร์แลนด์ 1', 'Switzerland 1', 'index/index/', 35),
(33, 'ทัวร์ตุรกี 1', 'Turkey 1', 'index/index/', 36),
(34, 'ทัวร์อังกฤษ 1', 'English 1', 'index/index/', 37),
(35, 'ทัวร์สหรัฐอเมริกา 1', 'America 1', 'index/index/', 38),
(36, 'ทัวร์จีน 1', 'China 1', 'index/index/', 39),
(37, 'ทัวร์ญี่ปุ่น 1', 'Japan 1', 'index/index/', 40),
(38, 'ทัวร์อินเดีย 1', 'India 1', 'index/index/', 41),
(39, 'ทัวร์เกาหลี 1', 'Korea 1', 'index/index/', 42),
(40, 'ทัวร์เวียดนาม 1', 'Vietnam 1', 'index/index/', 43),
(41, 'ทัวร์มาเลเซีย 1', 'Malaysia 1', 'index/index/', 44),
(42, 'ทัวร์สิงคโปร์ 1', 'Singapore 1', 'index/index/', 45),
(43, 'ทัวร์พม่า 1', 'Myanmar 1', 'index/index/', 46),
(44, 'ทัวร์ไต้หวัน 1', 'Taiwan 1', 'index/index/', 47),
(45, 'ทัวร์มาเก๊า 1', 'Macao 1', 'index/index/', 48);

-- --------------------------------------------------------

--
-- Table structure for table `example_1`
--

CREATE TABLE IF NOT EXISTS `example_1` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `example_1`
--

INSERT INTO `example_1` (`id`, `url`) VALUES
(172, 'c360-9.jpg'),
(176, 'b7b8-18.jpg'),
(177, '3fd6-21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `example_2`
--

CREATE TABLE IF NOT EXISTS `example_2` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `example_2`
--

INSERT INTO `example_2` (`id`, `url`, `priority`) VALUES
(172, 'eb4f-51.jpg', 1),
(173, 'ac84-52.jpg', 3),
(176, '7ad8-63.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `example_3`
--

CREATE TABLE IF NOT EXISTS `example_3` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `example_3`
--

INSERT INTO `example_3` (`id`, `url`, `category_id`, `priority`) VALUES
(172, 'a48d-88.jpg', 2, 3),
(173, '5e32-89.jpg', 22, 1),
(174, '7628-90.jpg', 22, 2);

-- --------------------------------------------------------

--
-- Table structure for table `example_4`
--

CREATE TABLE IF NOT EXISTS `example_4` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `example_4`
--

INSERT INTO `example_4` (`id`, `title`, `url`, `priority`) VALUES
(172, 'My house!', 'eb4f-51.jpg', 1),
(173, 'Some flowers', 'ac84-52.jpg', 3),
(176, 'My garden!', '7ad8-63.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `gallery_header` varchar(45) DEFAULT NULL,
  `gallery_details` varchar(45) DEFAULT NULL,
  `gallery_link` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_category`
--

CREATE TABLE IF NOT EXISTS `group_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_eng` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `show` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_category`
--

INSERT INTO `group_category` (`id`, `name`, `name_eng`, `icon`, `show`) VALUES
(5, 'ทัวร์ออสเตรีย', 'Austria', 'flag-austria.png', 1),
(6, 'ทัวร์เบลเยียม', 'Belgium', NULL, 1),
(7, 'ทัวร์บรูไนดารุสซาลาม', 'Brunei Darussalam', NULL, 1),
(8, 'ทัวร์กัมพูชา', 'Cambodia', NULL, 1),
(9, 'ทัวร์แคนาดา', 'Canada', NULL, 1),
(10, 'ทัวร์สาธารณรัฐเช็ค', 'Czech', NULL, 1),
(11, 'ทัวร์เดนมาร์ก', 'Denmark', NULL, 1),
(12, 'ทัวร์ดูไบ', 'Dubai', NULL, 1),
(13, 'ทัวร์เอสโตเนีย', 'Estonia', NULL, 1),
(14, 'ทัวร์ฟินแลนด์', 'Finland', NULL, 1),
(15, 'ทัวร์ฝรั่งเศส', 'France', NULL, 1),
(16, 'ทัวร์เยอรมนี', 'Germary', NULL, 1),
(17, 'ทัวร์ฮ่องกง', 'Hongkong', NULL, 1),
(18, 'ทัวร์ฮังการี', 'Hungary', NULL, 1),
(19, 'ทัวร์อินโดนีเซีย', 'Indonesia', NULL, 1),
(20, 'ทัวร์อิตาลี', 'Italy', NULL, 1),
(21, 'ทัวร์ลาว', 'Lao', NULL, 1),
(22, 'ทัวร์ลัตเวีย', 'Latvia', NULL, 1),
(23, 'ทัวร์ลิทัวเนีย', 'Lithuania', NULL, 1),
(24, 'ทัวร์ลักเซมเบิร์ก', 'Luxembourg', NULL, 1),
(25, 'ทัวร์โมรอคโค', 'Morocco', NULL, 1),
(26, 'ทัวร์เนเธอร์แลนด์', 'Netherlands', NULL, 1),
(27, 'ทัวร์นอร์เวย์', 'Norway', NULL, 1),
(28, 'ทัวร์ฟิลิปปินส์', 'Philippines', NULL, 1),
(29, 'ทัวร์โปรตุเกส', 'Portugal', NULL, 1),
(30, 'ทัวร์รัสเซีย', 'Russia', NULL, 1),
(31, 'ทัวร์สโลวาเกีย', 'Slovakia', NULL, 1),
(32, 'ทัวร์แอฟริกาใต้', 'South Africa', NULL, 1),
(33, 'ทัวร์สเปน', 'Spain', NULL, 1),
(34, 'ทัวร์สวีเดน', 'Sweden', NULL, 1),
(35, 'ทัวร์สวิตเซอร์แลนด์', 'Switzerland', NULL, 1),
(36, 'ทัวร์ตุรกี', 'Turkey', NULL, 1),
(37, 'ทัวร์อังกฤษ', 'English', NULL, 1),
(38, 'ทัวร์สหรัฐอเมริกา', 'America', NULL, 1),
(39, 'ทัวร์จีน', 'China', 'flag-china.png', 1),
(40, 'ทัวร์ญี่ปุ่น', 'Japan', NULL, 1),
(41, 'ทัวร์อินเดีย', 'India', NULL, 1),
(42, 'ทัวร์เกาหลี', 'Korea', NULL, 1),
(43, 'ทัวร์เวียดนาม', 'Vietnam', NULL, 1),
(44, 'ทัวร์มาเลเซีย', 'Malaysia', NULL, 1),
(45, 'ทัวร์สิงคโปร์', 'Singapore', NULL, 1),
(46, 'ทัวร์พม่า', 'Myanmar', NULL, 1),
(47, 'ทัวร์ไต้หวัน', 'Taiwan', NULL, 1),
(48, 'ทัวร์มาเก๊า', 'Macao', NULL, 1),
(49, 'ทัวร์ไทย', 'Thailand', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(45) NOT NULL,
  `page_h_header` varchar(45) NOT NULL,
  `page_s_header` varchar(45) DEFAULT NULL,
  `page_details` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_h_header`, `page_s_header`, `page_details`) VALUES
(1, 'contact', 'Contact Us', NULL, '<p>\r\n	<span style="color: rgb(20, 24, 35); font-family: helvetica; font-size: 16px; white-space: pre-wrap;">29/276 หมู่ 1 ต. คลองหก อ. คลองหลวง จ. ปทุมธานี 12120 </span></p>\r\n<p>\r\n	<span style="color: rgb(20, 24, 35); font-family: helvetica; font-size: 16px; white-space: pre-wrap;">29/276 Village no. 1, Khlong Hok Sub-district, </span></p>\r\n<p>\r\n	<span style="color: rgb(20, 24, 35); font-family: helvetica; font-size: 16px; white-space: pre-wrap;">Khlong Luang District 12120, Thailand </span></p>\r\n<p>\r\n	<span style="color: rgb(20, 24, 35); font-family: helvetica; font-size: 16px; white-space: pre-wrap;">Tel. +66(0)2577 2556 </span></p>\r\n<p>\r\n	<span style="color: rgb(20, 24, 35); font-family: helvetica; font-size: 16px; white-space: pre-wrap;">Fax. +66(0)2902 5098 </span></p>\r\n<p>\r\n	<span style="color: rgb(20, 24, 35); font-family: helvetica; font-size: 16px; white-space: pre-wrap;">Mobile: +66(0)98 556 6415, +66(0)85 123 434 </span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color:#0099ff;"><span style="font-family: helvetica; font-size: 16px; white-space: pre-wrap;">Email: info@tourmaline-travel.com </span></span></p>\r\n<p>\r\n	<span style="color:#0099ff;"><span style="font-family: helvetica; font-size: 16px; white-space: pre-wrap;">www.tourmaline-travel.com </span></span></p>\r\n<p>\r\n	<span style="color:#0099ff;"><span style="font-family: helvetica; font-size: 16px; white-space: pre-wrap;">www.facebook.com/tmltravel</span></span></p>\r\n'),
(2, 'about', 'About Us', NULL, '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgba(217, 237, 247, 0.188235);">We at Tourmaline Travel agency provide flexible and reliable service for your unforgettable holiday experience. </span></p>\r\n<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgba(217, 237, 247, 0.188235);">We offer exciting package tours within Thailand, Asia, Europe and other destinations to give you the relaxing retreat or exhilarating voyage you deserve. </span></p>\r\n<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgba(217, 237, 247, 0.188235);">Life is a journey and we don&rsquo;t want you to miss it. Therefore our helpful and friendly staff members at Tourmaline Travel are here to assist you to find your ultimate holiday experience.</span></p>\r\n'),
(3, 'footer1', 'footer1', 'col-lg-4 col-md-4 col-sm-4', '<p>\r\n	<img alt="" src="http://localhost/tourmaline/assets/themes/default/images/logo-01.png" width="200px" /></p>\r\n<p>\r\n	TAT&nbsp; License No. 11/08118</p>\r\n'),
(4, 'footer2', 'footer2', 'col-lg-4 col-md-4 col-sm-4', '<p>\r\n	Contact us</p>\r\n<p>\r\n	Tourmaline Travel Co., Ltd,<br />\r\n	<br />\r\n	29/276 Moo. 1, Khlong Hok Sub-district,<br />\r\n	Khlong Luang District, Pathum Thani 12120<br />\r\n	Tel. 0-2577 2556 Fax. 0-2902-5098<br />\r\n	Email: info@tourmaline-travel.com</p>\r\n<p>\r\n	นัยนันทน์ (ตั้ว) +66(0)85 123 4348 /Line ID: naiya65<br />\r\n	ณัฏฐ์กาญจน์ (วารี) +66(0)98 55 66 415 /Line ID: 084 433 5645</p>\r\n'),
(5, 'footer3', 'footer3', 'col-lg-4 col-md-4 col-sm-4', '<p>\r\n	Facebook (link)</p>\r\n<p>\r\n	Line (link)</p>\r\n<p>\r\n	&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `product_code` varchar(45) DEFAULT NULL,
  `product_banner_link` varchar(450) DEFAULT NULL,
  `product_country` varchar(45) NOT NULL,
  `product_header` varchar(45) NOT NULL,
  `product_sub_header` text NOT NULL,
  `product_program` varchar(255) DEFAULT NULL,
  `product_details` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_period` varchar(45) DEFAULT NULL,
  `product_itinerary` varchar(45) DEFAULT NULL,
  `product_pdf_link` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `star` enum('1','2','3','4','5') DEFAULT NULL,
  `show` int(1) DEFAULT '0',
  `highlight` int(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_code`, `product_banner_link`, `product_country`, `product_header`, `product_sub_header`, `product_program`, `product_details`, `product_price`, `product_period`, `product_itinerary`, `product_pdf_link`, `category_id`, `star`, `show`, `highlight`) VALUES
(4, '1', '3bb36-12299222_10201019470486032_4293378139977660178_n.jpg', 'ญี่ปุ่น', 'Tokyo Osaka', '<p>\r\n	See more snippets like this online store item at <a href="http://www.bootsnipp.com" target="_blank">Bootsnipp - http://bootsnipp.com</a>.</p>\r\n', '3D2N BY THAI LION AIR ', '<div id="p_info" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: rgb(102, 102, 102);">\r\n	สวนสาธารณะยงดูซาน+หอคอยพูซาน &ndash; หมู่บ้านวัฒนธรรมคัมชอน&nbsp;<br />\r\n	อุทยานแทจงแด ตั้งอยู่ที่เกาะยงโด - ศูนย์เครื่องสำอางเวชสำอาง<br />\r\n	ดิวตรี้ฟรี - แวะตลาดปลาชาลกาชิ - พักพูซาน 2 คืน<br />\r\n	วัดแห่งทะเลตะวันออก &quot; แฮดงยงกุงซา &quot;-เทศกาลเล่นสกีสโนว์&nbsp;<br />\r\n	(ไม่รวมค่าอุปกรณ์ทุกชนิด) Eden Valley Resort&nbsp;<br />\r\n	สกีรีสอร์ทแห่งเดียวทางภาคตะวันออกเฉียงใต้ของเกาหลี<br />\r\n	ศูนย์โสมเกาหลี - ศูนย์ฮ๊อกเก็ตนามู - แวะย่านเซ็นเตอร์พ้อยพูซาน&nbsp;<br />\r\n	ที่ตั้งของ PIFF สแควร์ (Busan International Film Festival)&nbsp;<br />\r\n	พักพูซาน - ศูนย์น้ำมันสนเข็มแดง Red Pine - สะพานแขวนควังอัน<br />\r\n	พิพิธภัณฑ์ศิลปะเมืองปูซาน - ชายหาดแฮฮุนเด รูปปั้นเมอร์เมด&nbsp;<br />\r\n	อาคารกระจกกันกระสุนโนริมารุ APEC (ด้านนอก)<br />\r\n	ห้างสรรพสินค้า Shinsegae Centum City&nbsp;<br />\r\n	สายการบิน EASTAR JET</div>\r\n<div id="p_day" style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 102, 153);">\r\n	วันเดินทาง :&nbsp;<br />\r\n	<p>\r\n		8-11 , 10-13 , 11-141ธ.ค.58 = 12900.-<br />\r\n		15-18 , 16-19 , 17-20 , 18-21ธ.ค.58 = 12900.-<br />\r\n		9-12ธ.ค.58 = 13900.-<br />\r\n		23-26 , 24-27 , 25-28ธ.ค.58 = 15900.-<br />\r\n		29ธ.ค.-1ม.ค.59 = 18900.-<br />\r\n		30ธ.ค.-2ม.ค.59 = 19900.-<br />\r\n		31ธ.ค.-3ม.ค.59 = 19900.-</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 12000, '2 วัน 1 คืน', 'มกราคม', 'dd38c-4219.pdf', 37, '5', 1, 1),
(5, '2', '24bca-12226921_10201018492901593_4417345912577383083_n.jpg', '', 'Second Product', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>\r\n', NULL, '<p>\r\n	Details :&nbsp;<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p>\r\n', 29000, '1 วัน 1 คืน', 'เมษายน', NULL, 37, '2', 1, 1),
(6, '3', 'c2b19-12301604_10201019479166249_8424946767484330487_n.jpg', '', 'Fourth Product', '<p style="box-sizing: border-box; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 18px;">\r\n	<span style="font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur&nbsp;</span></p>\r\n', NULL, '<p>\r\n	Details :&nbsp;<span style="font-size: 14px; line-height: 20px; color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; white-space: nowrap;">This is a short description. Lorem ipsum dolor sit amet, consectetur&nbsp;</span></p>\r\n', 33000, '3 วัน 1 คืน', 'มกราคม - ธันวาคม', NULL, 5, '3', 1, 1),
(7, '4', '0cae6-12299222_10201019470486032_4293378139977660178_n.jpg', '', 'Fourth Product', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur&nbsp;</span></p>\r\n<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur&nbsp;</span></p>\r\n<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur&nbsp;</span></p>\r\n', NULL, '<p>\r\n	Details :&nbsp;<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur&nbsp;</span></p>\r\n', 15900, '7 วัน 6 คืน', 'ปีใหม่', NULL, 36, NULL, 1, 1),
(8, '5', '1b174-12140682_10201019515927168_2190754436741919603_n.jpg', '', 'Fifth Product', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur</span></p>\r\n', NULL, '<p>\r\n	Details :&nbsp;<span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">This is a short description. Lorem ipsum dolor sit amet, consectetur</span></p>\r\n', 50000, NULL, NULL, 'af37e-4219.pdf', 36, '3', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `g_category_id_idx` (`g_category_id`);

--
-- Indexes for table `example_1`
--
ALTER TABLE `example_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example_2`
--
ALTER TABLE `example_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example_3`
--
ALTER TABLE `example_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example_4`
--
ALTER TABLE `example_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_category`
--
ALTER TABLE `group_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_name_UNIQUE` (`page_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_idx` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `example_1`
--
ALTER TABLE `example_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `example_2`
--
ALTER TABLE `example_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `example_3`
--
ALTER TABLE `example_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `example_4`
--
ALTER TABLE `example_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `group_category`
--
ALTER TABLE `group_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `g_category_id` FOREIGN KEY (`g_category_id`) REFERENCES `group_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
