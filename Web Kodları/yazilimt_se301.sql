-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 04 Ara 2016, 18:49:45
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
  `admintype` text NOT NULL,
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
  `category_name` text NOT NULL,
  `category_URL` text NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`category_id`, `category_image_URL`, `category_name`, `category_URL`, `category_description`) VALUES
(2, '', 'Þapka', 'sapka.php', '\r\n		Þapka			'),
(3, '', 'tþort', 'mont.php', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ad` text NOT NULL,
  `emailadres` text NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forgatpassword`
--

CREATE TABLE IF NOT EXISTS `forgatpassword` (
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` text NOT NULL,
  `productprice` int(11) NOT NULL,
  `orderstatus` text NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orderDurumu`
--

CREATE TABLE IF NOT EXISTS `orderDurumu` (
  `orderstatus` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `path`
--

CREATE TABLE IF NOT EXISTS `path` (
  `path_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`path_id`),
  UNIQUE KEY `category_ID` (`category_id`),
  UNIQUE KEY `path_id` (`path_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_category_name` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_gender` text NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text NOT NULL,
  `numberofproduct` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category_name`, `product_price`, `product_gender`, `product_description`, `product_image`, `numberofproduct`) VALUES
(1, '', '', 0, '', '', 'images/', 0),
(2, '', '', 0, '', '', 'IMG_20161015_155813.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `statusname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `userpassword` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `adres` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `username`, `userpassword`, `firstname`, `lastname`, `adres`, `telephone`, `email`) VALUES
(1, 'otekizbas', '10021990', 'Tahir Onural', 'Tekizbaþ', 'Kozyataðý', '5436017610', 'otekizbas@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
