CREATE TABLE `fotos_usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(200) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8