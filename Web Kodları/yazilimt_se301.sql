-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 01 Oca 2017, 23:57:20
-- Sunucu sürümü: 10.0.27-MariaDB
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `yazilimt_se301`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_ID` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` text NOT NULL,
  `adminpass` text NOT NULL,
  `admintype` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_username`, `adminpass`, `admintype`) VALUES
(27, 'admin', 'admin', 'Admin'),
(29, 'product', '123', 'Product Manager');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_image_URL` text NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_description` text NOT NULL,
  `category_gender` varchar(10) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`category_id`, `category_image_URL`, `category_name`, `category_description`, `category_gender`) VALUES
(1, 'women_hat (1)', 'HAT', 'Description of Hat		', 'man'),
(2, 'women_hat (1)', 'HAT', 'Description of Hat				', 'kid'),
(3, 'women_hat (1)', 'HAT', 'Description of Hat\r\n					', 'woman'),
(4, '', 'Jersey', 'Description of Jersey\r\n					', 'woman');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) NOT NULL,
  `emailadres` text NOT NULL,
  `mesaj` text NOT NULL,
  UNIQUE KEY `contact_id_3` (`contact_id`),
  KEY `contact_id` (`contact_id`),
  KEY `contact_id_2` (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `ad`, `emailadres`, `mesaj`) VALUES
(1, 'Tahir Onural TekizbaÅŸ', 'otekizbas@hotmail.com', 'Siteniz gerÃ§ekten kullanÄ±mÄ± kolay ve gÃ¼zel bir site olmuÅŸ'),
(2, 'Tahir Onural TekizbaÅŸ', 'otekizbas@hotmail.com', 'KullanÄ±mÄ± kolay gÃ¼zel bir site olmuÅŸ. Ellerinize saÄŸlÄ±k arkadaÅŸlar.TasarÄ±mcÄ±larÄ±n adlarÄ±nÄ± lÃ¼tfen yazÄ±n. Siteyi Ã§ok beÄŸendim.'),
(3, 'Tahir Onural TekizbaÅŸ', 'otekizbas@hotmail.com', 'LÃ¼tfen tasarÄ±mcÄ±larÄ±n adlarÄ±nÄ± yazÄ±n. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

CREATE TABLE IF NOT EXISTS `favoriler` (
  `favori_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`favori_id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `favoriler`
--

INSERT INTO `favoriler` (`favori_id`, `product_id`, `username`, `product_name`, `product_price`) VALUES
(1, 2, '', 'Hat', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forgatpassword`
--

CREATE TABLE IF NOT EXISTS `forgatpassword` (
  `username` text NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `forgatpassword`
--

INSERT INTO `forgatpassword` (`username`, `firstname`, `lastname`, `email`) VALUES
('otekizbas', 'Tahir Onural', 'TekizbaÅŸ', 'otekizbas@hotmail.com'),
('otekizbas', 'Tahir Onural', 'TekizbaÅŸ', 'otekizbas@hotmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `adet` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `orderstatus` varchar(30) NOT NULL,
  `order_adres` text NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `product_description` text NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_gender` varchar(10) NOT NULL,
  `product_image` text NOT NULL,
  `numberofproduct` int(11) NOT NULL,
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `category_name`, `product_price`, `product_gender`, `product_image`, `numberofproduct`) VALUES
(1, 'Hat', 'Hat Description			', 'HAT', 5, 'man', 'women_hat (1)', 5),
(2, 'Hat', 'Hat Description\r\n					', 'HAT', 5, 'man', 'women_hat (1)', 5),
(3, 'Hat', 'Hat Description\r\n					', 'HAT', 5, 'man', 'women_hat (1)', 5),
(4, 'Hat', 'Hat Description\r\n					', 'HAT', 5, 'man', 'women_hat (1)', 5),
(5, 'Jersey', '\r\nJersey Description					', 'Jersey', 20, 'woman', '', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `shoppingcart_ID` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `adet` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`shoppingcart_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `shoppingcart`
--

INSERT INTO `shoppingcart` (`shoppingcart_ID`, `product_id`, `product_name`, `email`, `adet`, `product_price`) VALUES
(1, 2, 'Hat', 'otekizbas@hotmail.com', 1, 5),
(2, 5, 'Jersey', 'sahra.gurel@isik.edu.tr', 2, 20),
(3, 2, 'Hat', 'otekizbas@hotmail.com', 1, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `userpassword` text NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `adres` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  UNIQUE KEY `email` (`email`(21)),
  UNIQUE KEY `username` (`username`(30)),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `username`, `userpassword`, `firstname`, `lastname`, `adres`, `telephone`, `email`) VALUES
(1, 'snur', '1234567', 'nur', 'gurel', 'Ýstanbul', '05333333', 'snurgurel@gmail.com'),
(2, 'tetete', '12345qwer', 'Tahir Onural', 'gurel', 'dbhwr', '232424242', 'otekizbas@hotmail'),
(3, 'otekizbas', 'o1002199', 'Tahir Onural', 'Tekizbaþ', 'Ýstanbul', '05436017610', 'otekizbas@hotmail.com'),
(4, 'snurgurel', '123abc', 'nur', 'n', 'ankara', '05555555', 'sahra.gurel@isik.edu.tr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
