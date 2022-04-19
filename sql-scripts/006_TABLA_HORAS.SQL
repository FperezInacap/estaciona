-- estaciona.horas definition

CREATE TABLE `horas` (
  `hora_Id` int(11) NOT NULL,
  `Horas` time DEFAULT NULL,
  PRIMARY KEY (`hora_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;