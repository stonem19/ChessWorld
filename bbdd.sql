CREATE TABLE usuarios (
nombre VARCHAR (25),
pass VARCHAR (6),
dni VARCHAR (9),
aciertos BIGINT (5),
fallos BIGINT (5),
permisos VARCHAR (3),
id VARCHAR (36));

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
usuario VARCHAR (6));

CREATE TABLE incidencias (
id VARCHAR (6),
mensaje TEXT (500));

INSERT INTO usuarios (nombre, pass, dni, aciertos, fallos, permisos, id) values ("User","123456","14512684H","0","0","CCC", uuid());
INSERT INTO usuarios (nombre, pass, dni, aciertos, fallos, permisos, id) values ("User","789101","54848741K","0","0", "AAA", uuid());

INSERT INTO permisos (tipo, codigo) values ("Administrador", "AAA");
INSERT INTO permisos (tipo, codigo) values ("Empleado", "BBB");
INSERT INTO permisos (tipo, codigo) values ("Usuario", "CCC");

SELECT tipo, codigo from permisos;

select id from usuarios where dni = "14512684H";

select now();

INSERT INTO acountuser (registro) VALUES(NOW());

SELECT LEFT(UUID(), 6);

select uuid() as uid;

INSERT INTO freeuser (registro) VALUES(NOW())
