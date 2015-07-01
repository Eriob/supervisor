SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
CREATE TABLE IF NOT EXISTS `machines` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `hostname` varchar(50) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `constructeur` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `readed` tinyint(1) NOT NULL,
  `author` varchar(50) NOT NULL,
  `recipient` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  KEY `recipient` (`recipient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL,
  `machine_id` int(11) unsigned NOT NULL,
  `date_received` date NOT NULL,
  `content` text NOT NULL,
  `action` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `machine_id` (`machine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rights` varchar(30) NOT NULL,
  `ban` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `informations` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `connected` int(11) NOT NULL,
  `lostpaquet` int(11) NOT NULL,
  `avalability` int(11) NOT NULL,
  `responsetime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`recipient`) REFERENCES `users` (`id`);
 
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

INSERT INTO `users` VALUES ('0', 'Alababa', 'Alan', 'Barthelemy', '21232f297a57a5a743894a0e4a801fc3', 'a@a.com', 'administrator', '0');
INSERT INTO `users` VALUES ('1', 'Zuzuwin', 'Julien', 'Cartier', '21232f297a57a5a743894a0e4a801fc3', 'a@a.com', 'user', '1');
INSERT INTO `machines` VALUES ('1', 'Alababa-PC', '10.8.111.210', 'FA:3D:2F:3H:2D', 'Hewlett Packard');
INSERT INTO `machines` VALUES ('2', 'Julien-PC', '10.8.109.142', 'F5:3D:3E:D9:G1', 'Hewlett Packard');
INSERT INTO `machines` VALUES ('3', 'Simon-PC', '10.8.113.251', '0D:00:3K:6D:H9', 'Asus');
INSERT INTO `machines` VALUES ('4', 'Margaux-PC', '10.8.103.101', '7F:08:7F:AF:F9', 'Asus');
INSERT INTO `machines` VALUES ('5', 'Pierrick-PC', '10.8.98.67', '00:J9:4D:FD:29', 'Asus');