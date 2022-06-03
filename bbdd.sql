CREATE TABLE usuarios (
nombre VARCHAR (25),
pass VARCHAR (6),
puntos BIGINT (5),
aciertos BIGINT (5),
fallos BIGINT (5),
permisos VARCHAR (3),
id VARCHAR (6));

CREATE TABLE contacto (
nombre VARCHAR (25),
correo VARCHAR (50),
mensaje TEXT (500));

CREATE TABLE permisos (
tipo VARCHAR (25),
codigo VARCHAR (3));

CREATE TABLE freeuser (
registro DATETIME (6));

CREATE TABLE acountuser (
registro DATETIME (6),
id VARCHAR (6),
permisos VARCHAR (3));

CREATE TABLE incidencias (
id VARCHAR (6),
mensaje TEXT (500));

INSERT INTO usuarios (nombre, pass, puntos, aciertos, fallos, permisos, id) values ("User","123456","50","0","0","CCC", "A1B2C3");
INSERT INTO usuarios (nombre, pass, puntos, aciertos, fallos, permisos, id) values ("User","789101","0","0","0", "AAA", "D2E3F4");

INSERT INTO permisos (tipo, codigo) values ("Administrador", "AAA");
INSERT INTO permisos (tipo, codigo) values ("Empleado", "BBB");
INSERT INTO permisos (tipo, codigo) values ("Usuario", "CCC");

