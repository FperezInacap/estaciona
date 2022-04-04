-- bitnami_myapp.conciertos definition

CREATE TABLE `conciertos` (
  `concierto_id` int(11) NOT NULL AUTO_INCREMENT,
  `concierto_nombre` varchar(100) DEFAULT NULL,
  `concierto_ubicacion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`concierto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;