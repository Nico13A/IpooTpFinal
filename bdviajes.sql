CREATE DATABASE bdviajes; 

CREATE TABLE empresa(
    idempresa bigint AUTO_INCREMENT,
    enombre varchar(150),
    edireccion varchar(150),
    PRIMARY KEY (idempresa)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE persona (
    nrodoc varchar(15),
    nombre varchar(150),
    apellido varchar(150),
    telefono int,
    PRIMARY KEY (nrodoc)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE responsable (
    rnumeroempleado bigint AUTO_INCREMENT,
    rnumerolicencia bigint,
    nrodoc varchar(15),
    PRIMARY KEY (rnumeroempleado),
    FOREIGN KEY (nrodoc) REFERENCES persona (nrodoc)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    )ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
	
CREATE TABLE viaje (
    idviaje bigint AUTO_INCREMENT, /*codigo de viaje*/
	vdestino varchar(150),
    vcantmaxpasajeros int,
	idempresa bigint,
    rnumeroempleado bigint,
    vimporte float,
    PRIMARY KEY (idviaje),
    FOREIGN KEY (idempresa) REFERENCES empresa (idempresa),
	FOREIGN KEY (rnumeroempleado) REFERENCES responsable (rnumeroempleado)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT = 1;
	
CREATE TABLE pasajero (
    nropasaje bigint AUTO_INCREMENT,
    nrodoc varchar(15),
	idviaje bigint,
    PRIMARY KEY (nropasaje),
    FOREIGN KEY (nrodoc) REFERENCES persona (nrodoc) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idviaje) REFERENCES viaje (idviaje)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1; 
 