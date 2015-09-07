CREATE TABLE IF NOT EXISTS `rights` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `title` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rightvalue` char(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;