-- estaciona.reservas definition

CREATE TABLE `reservas` (
  `estacionamiento_id` int(11) NOT NULL,
  `estacionamiento_codigo` varchar(100) DEFAULT NULL,
  `tarifa_minuto` int(11) DEFAULT NULL,
  `tarifa_dia` int(11) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `alias_estacionamiento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`estacionamiento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;