-- estaciona.estacionamientos definition

CREATE TABLE `estacionamientos` (
  `estacionamiento_id` int(11) NOT NULL,
  `alias_estacionamiento` varchar(100) DEFAULT NULL,
  `direccion_estacionamiento` varchar(100) DEFAULT NULL,
  `precio_medio_minuto` int(11) DEFAULT NULL,
  `precio_medio_dia` int(11) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`estacionamiento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;