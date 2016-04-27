CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `rightvalue` char(3) DEFAULT NULL,
  `last_connect` time DEFAULT NULL,
  `last_ip` varchar(20) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `trash` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
