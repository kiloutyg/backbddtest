#!/bin/sh
# mariadb -u $MYSQL_USER -p $MYSQL_PASSWORD -e 
mariadb -u $MYSQL_USER -p $MYSQL_PASSWORD $MYSQL_DATABASE -e "
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `astrological_sign` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `users`
ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;" 
