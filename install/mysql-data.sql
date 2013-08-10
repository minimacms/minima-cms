SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE TABLE IF NOT EXISTS `cms_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

INSERT INTO `cms_content` (`id`, `title`, `body`, `email`, `delcode`, `author`) VALUES
(21, 'Hello, Erwin.', 'Oh, hi. I didn''t see you there. \r\n<br><br>\r\nThis is Minima 1.4, codenamed Erwin. That''s not after some boring German accountant, but after this handsome looking fella'': \r\n<br><br>\r\n<div class="row"><div class="four columns"><img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Erwin_Schr%C3%B6dinger.jpg"></div><div class="eight columns">That''s <a href="https://en.wikipedia.org/wiki/Erwin_Schr%C3%B6dinger">Erwin SchrÃ¶dinger</a>, the cat-hating physicist. Erwin, along with superpositioned cats, brings a lot of changes. To see what''s new, read <a href="changelog.html">the changelog.</a></div></div>\r\n<br><br>\r\n<strong>Thanks for using Minima, and be sure to report bugs if you find them!</strong>\r\n\r\n:)', '', 0, 'XxIHateCatsxX');

CREATE TABLE IF NOT EXISTS `comments` (
  `commid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `commauth` varchar(255) NOT NULL,
  `commemail` varchar(255) NOT NULL,
  `commbody` text NOT NULL,
  PRIMARY KEY (`commid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `comments` (`commid`, `postid`, `commauth`, `commemail`, `commbody`) VALUES
(3, 21, 'Albert', 'aeinstein@gmail.com', '<p>Great post there, Mate!</p>');

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  `redirect` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

INSERT INTO `pages` (`id`, `title`, `body`, `email`, `delcode`, `author`, `redirect`) VALUES
(23, 'This is a page.', '<p>Pages are bits of static content or redirects that are shown in the navbar.</p>  :)', '', 0, 'Erwin', '');

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `value` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'sitename', 'A fresh Minima');
