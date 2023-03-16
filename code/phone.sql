-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phoneID` int(11) NOT NULL,
  `phone_name` varchar(32) NOT NULL,
  `phone_price` text NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `brandname` varchar(64) DEFAULT NULL,
  `phone_date` varchar(255) DEFAULT NULL,
  `megapixel` varchar(20) DEFAULT NULL,
  `battery` varchar(20) DEFAULT NULL,
  `screensize` varchar(20) DEFAULT NULL,
  `WIFI` varchar(20) DEFAULT NULL,
  `GPS` varchar(20) DEFAULT NULL,
  `RAM` varchar(20) DEFAULT NULL,
  `selfiecamera` varchar(20) DEFAULT NULL,
  `OS` varchar(20) DEFAULT NULL,
  `store` varchar(120) DEFAULT NULL,
  `design` varchar(20) DEFAULT NULL,
  `performance` varchar(20) DEFAULT NULL,
  `camera` varchar(20) DEFAULT NULL,
  `display` varchar(20) DEFAULT NULL,
  `batteries` varchar(20) DEFAULT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phoneID`, `phone_name`, `phone_price`, `image`, `brandname`, `phone_date`, `megapixel`, `battery`, `screensize`, `WIFI`, `GPS`, `RAM`, `selfiecamera`, `OS`, `store`, `design`, `performance`, `camera`, `display`, `batteries`, `link`) VALUES
(1, 'iPhone 4s(2011)', '55', 'images/iphone4s.png', '1', '14th October 2011', '8', '1432mAh', '3.5', '	&#10003;', 'Yes, with A-GPS, GLO', '512MB', '480p@30fps', 'IOS 7', NULL, '35', '20', '37', '26', '31', 'https://www.onbuy.com/gb/unlocked-8gb-apple-iphone-4s-white~c12871~p8479898/?condition=refurbished'),
(2, 'iPhone 6 (2014)', '120', 'images/iphone6111.png', '1', 'September 25, 2014', '12', '1715mAh', '4.7\"', '&#10003;', '16GB 2GB RAM, 32GB 2', '2GB RAM', '5 MP, f/2.2, 31mm ', 'iOS 9', 'images/onbuy.png', '36', '57', '61', '43', '43', 'https://www.onbuy.com/gb/apple-iphone-6-space-grey~c12871~p7687115/'),
(3, 'iPhone 7(2016)', '185', 'images/iphone7.png', '1', '16th September 2016', '12', '1960mAh', '4.7', '	&#10003;', 'Yes, with A-GPS', '2GB', '7 MP, f/2.2', 'IOS 15', NULL, '80', '61', '74', '46', '43', 'https://www.amazon.co.uk/dp/B06Y5WDJ5G?tag=versus06e-21&linkCode=osi&th=1&psc=1'),
(4, 'Samsung Galaxy S4(2013)', '109', 'images/galaxys41.png', '2', 'April 13, 2013', '13', '2600mAh', '5.0\"', '&#10003;', '16GB 2GB RAM, 32GB ', '2GB RAM', '2 MP, f/2.4, 31mm', 'Android Jelly Bean', NULL, '37', '54', '50', '49', '48', 'https://www.amazon.co.uk/Samsung-Smartphone-AMOLED-Touchscreen-Megapixel-white-frost-white/dp/B00CQW2XXW/ref=asc_df_B00CQW2XXW/?tag=googshopuk-21&linkCode=df0&hvadid=328082311356&hvpos=&hvnetw=g&hvrand=10080516786688110285&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9044955&hvtargid=pla-682401790962&psc=1'),
(5, 'Samsung Galaxy A5(2015)', '160', 'images/galaxya51.png', '2', 'January 2017', '16', '3000mAh', '5.2\"', '&#10003;', '32GB , 64GB ', '3GB RAM', '16 MP, f/1.9, 26mm', 'Android Marshmallow', NULL, '38', '36', '26', '31', '32', 'https://www.onbuy.com/gb/unlocked-black-sky-samsung-galaxy-a5-2017-single-sim-32gb-3gb-ram~c12871~p7687457/'),
(8, 'Samsung Galaxy S8(2017)', '290', 'images/galaxys81.png', '2', 'April 17, 2021', '12', '3000mAh', '5.8\"', '&#10003;', '64GB', '4GB', '12 MP, f/1.7, 26mm', 'Android 7.0 (Nougat)', NULL, '79', '78', '73', '71', '73', 'https://www.amazon.co.uk/dp/B076X8K1ND?tag=versus06e-21&linkCode=ogi&th=1&psc=1'),
(9, 'Samsung Galaxy S21(2021)', '709', 'images/galaxys21.png', '2', 'September 17,2021', '64', '4000mAh', '6.2\"', '&#10003;', '128GB 8GB, 256GB', '8GB RAM', '12 MP, f/1.8, 26mm ', 'Android 11', NULL, '82', '96', '84', '83', '94', 'https://www.amazon.co.uk/dp/B08QNCPQR5?tag=versus06e-21&linkCode=osi&th=1&psc=1'),
(12, 'iPhone XR(2018)', '257', 'images/iphonexr11.png', '1', 'October 26, 2018', '12', '2942mAh', '6.1\"', '&#10003;', '64GB 3GB RAM, 128GB', '3GB RAM', '7 MP, f/2.2, 32mm (', 'iOS 12', NULL, '81', '70', '80', '56', '72', 'https://www.amazon.co.uk/s?k=iphone+xr&crid=12HPEK1A1T0F&sprefix=iphone+xr%2Caps%2C61&ref=nb_sb_noss_1'),
(13, 'iPhone 13(2021)', '769', 'images/iphone13.png', '1', 'September 24, 2021', '12', '3240mAh', '6.1\"', '&#10003;', '128GB, 256GB, 512GB', '4GB RAM', '12 MP, f/2.2, 23mm', 'iOS 15', NULL, '93', '86', '80', '71', '67', 'https://www.amazon.co.uk/dp/B09G9HQHRH?tag=versus06e-21&linkCode=osi&th=1&psc=1'),
(15, 'Google Nexus 5X(2015)', '147', 'images/nexus.png', '3', '29th September 2015', '12', '2700 mAh', '5.2', '	&#10003;', '16GB 2GB RAM, 32GB 2', '2GB', '5 MP', 'Android 8.0 (Oreo)', NULL, '36', '64', '57', '32', '48', 'https://www.amazon.co.uk/LG-Electronics-Nexus-5X-Smartphone-Black/dp/B016B7INC2/ref=asc_df_B016B7INC2/?tag=googshopuk-21&linkCode=df0&hvadid=309785494452&hvpos=&hvnetw=g&hvrand=18179744807956504011&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1006965&hvtargid=pla-442456378217&psc=1'),
(17, 'Google Pixel 2(2016)', '189', 'images/Pixel21.png', '3', '4th October 2016', '12', '2770 mAh', '5.0', '	&#10003;', '32GB 4GB RAM, 128GB', '4GB', '8 MP', 'Android 10', NULL, '79', '76', '74', '54', '63', 'https://www.amazon.co.uk/Google-Pixel-SIM-Free-Smartphone-Kinda/dp/B076KM3PYP/ref=sr_1_7?crid=3NRZZW6LCNSYX&keywords=google+pixel+2&qid=1641678980&s=electronics&sprefix=google+pixel+2%2Celectronics%2C54&sr=1-7'),
(18, 'Google Pixel 4(2019)', '233', 'images/pixel41.png', '3', '15th October 2019', '16', '2800 mAh', '5.7', '	&#10003;', '64GB 6GB RAM', '6GB RAM', '8 MP', 'Android 12', NULL, '74', '84', '81', '64', '93', 'https://www.amazon.co.uk/dp/B084X4PW7R?tag=versus06e-21&linkCode=osi&th=1&psc=1'),
(19, 'Google Pixel 6 Pro(2021)', '849', 'images/pixel66.png', '3', 'October 19,2021', '50', '5000mAh', '6.71\"', '&#10003;', '128GB, 256GB, 512GB', '12GB', '11.1 MP, f/2.2, 20mm', 'Android Marshmallow', NULL, '80', '83', '82', '95', '85', 'https://www.currys.co.uk/mobile/phones/p/google-pixel-6-pro-black-128gb-10232086/?howtopay=Outright&networkplan=no&upgrade=no&sim=&srcid=198&cmpid=ppc~gg~0061%20(Shopping%20Ads)%20Mobile%20Phones%20-%20Handsets%20-%20Google%20-%20Google%20Pixel%206%20Pro%20-%20Sim%20Free~Google%20-%20Google%20Pixel%206%20Pro%20-%20Sim%20Free~Exact&mctag=gg_goog_7904&kwid=GOOGLE&device=c&ds_kids=92700067215432166&tgtid=0061%20(Shopping%20Ads)%20Mobile%20Phones%20-%20Handsets%20-%20Google%20-%20Google%20Pixel%206%20Pro%20-%20Sim%20Free&gclid=Cj0KCQiA2sqOBhCGARIsAPuPK0hSUFnXpRiybf1WWPdBRz7Ht9D7foOzvvoqASw5lRdJPAFfdylIpKYaAkUuEALw_wcB&gclsrc=aw.ds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phoneID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
