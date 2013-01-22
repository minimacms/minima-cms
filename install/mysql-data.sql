-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Lis 14, 2012 u 05:10 
-- Verzija poslužitelja: 5.5.16
-- PHP verzija: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza podataka: `minima`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `cms_content`
--

CREATE TABLE IF NOT EXISTS `cms_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Izbacivanje podataka za tablicu `cms_content`
--

INSERT INTO `cms_content` (`id`, `title`, `body`, `email`, `delcode`, `author`) VALUES
(20, 'Dracula is alive.', 'So, you installed 1.1.1 Dracula. Yay! :)', '', 0, 'derp');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `defaulttheme`
--

CREATE TABLE IF NOT EXISTS `defaulttheme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inc` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Izbacivanje podataka za tablicu `defaulttheme`
--

INSERT INTO `defaulttheme` (`id`, `inc`) VALUES
(1, '<link href="ant/themes/simple.css" rel="stylesheet" type="text/css"/>');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Izbacivanje podataka za tablicu `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `email`, `delcode`, `author`) VALUES
(21, '123, a sample page', '... ', '', 0, '...');
