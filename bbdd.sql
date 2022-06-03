CREATE TABLE usuarios (
nombre VARCHAR (25),
pass VARCHAR (6),
puntos BIGINT (255),
aciertos BIGINT (255),
fallos BIGINT (255),
permisos VARCHAR (3));

CREATE TABLE contacto (
nombre VARCHAR (25),
correo VARCHAR (50),
mensaje VARCHAR (255));

CREATE TABLE permisos (
tipo VARCHAR (25),
codigo VARCHAR (3));

INSERT INTO usuarios (nombre, pass, puntos, aciertos, fallos, permisos) values ("User","123456","50","0","0","CCC");
INSERT INTO usuarios (nombre, pass, puntos, aciertos, fallos, permisos) values ("User","789101","0","0","0", "CCC");

INSERT INTO permisos (tipo, codigo) values ("Administrador", "AAA");
INSERT INTO permisos (tipo, codigo) values ("Empleado", "BBB");
INSERT INTO permisos (tipo, codigo) values ("Usuario", "CCC");