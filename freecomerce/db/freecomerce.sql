-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 18. Jan 2014 um 14:01
-- Server Version: 5.5.34-0ubuntu0.13.10.1
-- PHP-Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `freecomerce`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie_id` int(20) NOT NULL,
  `text_de` varchar(100) COLLATE utf8_bin NOT NULL,
  `text_en` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `categorie`
--

INSERT INTO `categorie` (`categorie_id`, `text_de`, `text_en`) VALUES
(1, 'Grüntee', 'Greentea'),
(2, 'Schwarztee', 'Blacktea'),
(3, 'Weisstee', 'Whitetea'),
(4, 'Blautee', 'Bluetea');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `prod_id` int(20) NOT NULL AUTO_INCREMENT,
  `text_de` varchar(100) COLLATE utf8_bin NOT NULL,
  `text_en` varchar(100) COLLATE utf8_bin NOT NULL,
  `img` varchar(100) COLLATE utf8_bin NOT NULL,
  `preis` decimal(10,4) NOT NULL,
  `prod_cat_id` int(20) NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `herkunft` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`prod_id`, `text_de`, `text_en`, `img`, `preis`, `prod_cat_id`, `text`, `herkunft`) VALUES
(1, 'Noir d''Orange', 'Black orange', 'gfx/noir-de-luxe.jpg', 10.9000, 1, 'aslfdkjasslödfkjaöslkdfjaölksdfjlaskjdfask', 'Japan'),
(2, 'Supreme-darjeeling', 'Supreme-darjeeling', 'gfx/supreme-darjeeling.jpg', 13.0000, 1, 'asdfasfdasfasfdasfdasfdasdfasfasdfsd', 'China'),
(3, 'Pai-mu-tan', 'Pai-mu-tan', 'gfx/pai-mu-tan.jpg', 17.0000, 1, 'asdfasdfasdfasdfasfdasfaffdfasddasss', 'Sri-Lanka'),
(4, 'Oolong-fujian', 'Oolong-fujian', 'gfx/oolong-fujian.jpg', 9.1000, 2, 'afsafsafdsadsfdasffads asfdafsdsdf', 'Japan'),
(5, 'Sencha-shizuoka', 'Sencha-shizuoka', 'gfx/sencha-shizuoka.jpg', 15.1000, 3, 'asfd232fsaasdfe evverfqq', 'Pakistan'),
(6, 'Ceylong-nuwara', 'Ceylong-nuwara', 'gfx/ceylon-nuwara.jpg', 973.2000, 4, 'ffasfasfasfa afdwwwwwfaa', 'Indien'),
(7, 'Noir d''Orange', 'Noir d''Orange', 'gfx/ceylon-nuwara.jpg', 2221.3000, 4, 'asdffsasdf asfdasdfd asfasdf', 'Japan');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `address`, `email`, `password`, `lastlogin`, `created`) VALUES
(0, '', 'asdf', 'asdf', 'asfd', 'asfd', 'asfd', NULL, '2014-01-18 13:28:02'),
(1, '', 'Swen', 'Lanthemann', 'Tschamerie 18\r\n3415 Hasle b. Burgdorf', 'swen.lanthemann@gmail.com', 'asdf', '2014-01-05 23:00:00', '2014-01-06 17:06:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;