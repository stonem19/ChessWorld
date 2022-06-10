/* TABLAS A CREAR */
CREATE TABLE usuarios (
nombre VARCHAR (25) NOT NULL PRIMARY KEY,
pass VARCHAR (6),
dni VARCHAR (9) UNIQUE,
puntos BIGINT (5),
permisos VARCHAR (3),
id VARCHAR (36));

CREATE TABLE acountuser (
registro DATETIME (6),
usuario VARCHAR (6));

CREATE TABLE tramites (
nombre VARCHAR (25),
correo VARCHAR (50),
tipo VARCHAR (10),
mensaje TEXT (500));

CREATE TABLE permisos (
tipo VARCHAR (25),
codigo VARCHAR (3));

CREATE TABLE freeuser (
registro DATETIME (6),
hostinfo VARCHAR (10));

INSERT INTO usuarios (nombre, pass, dni, puntos, permisos, id) values ("Usuario","123456","14512684H","0","CCC", uuid());
INSERT INTO usuarios (nombre, pass, dni, puntos, permisos, id) values ("Admin","789101","54848741K","0", "AAA", uuid());

INSERT INTO permisos (tipo, codigo) values ("Administrador", "AAA");
INSERT INTO permisos (tipo, codigo) values ("Empleado", "BBB");
INSERT INTO permisos (tipo, codigo) values ("Usuario", "CCC");

Insert into contacto (nombre, correo, mensaje) VALUES ("Pedro", "pedrochess@aol.es", "Me gustaría ahcer una colaboración publicitaria con vosotros. Nuestra web ofrece productos enfocados a jugadores de ajerez. Un saludo");
insert into incidencias (nombre, correo, mensaje) values ("Jose", "josealfil@hotmail.com", "El formulario 2 del test, no registra cuando fallo. No es grave, pero me gustaría que funcionara. Gracias");

insert into tramites (nombre, correo, tipo, mensaje) values ("Jose", "josealfil@hotmail.com", "Incidencia", "El formulario 2 del test, no registra cuando fallo. No es grave, pero me gustaría que funcionara. Gracias");
Insert into tramites (nombre, correo, tipo, mensaje) VALUES ("Pedro", "pedrochess@aol.es", "Contacto", "Me gustaría ahcer una colaboración publicitaria con vosotros. Nuestra web ofrece productos enfocados a jugadores de ajerez. Un saludo");

/* Pruebas de consultas realizadas [NO EJECUTAR] */
SELECT tipo, codigo from permisos;
select id from usuarios where dni = "14512684H";
INSERT INTO acountuser (registro) VALUES(NOW());
SELECT LEFT(UUID(), 6);
select uuid() as uid;
INSERT INTO freeuser (registro) VALUES(NOW());
UPDATE usuarios set aciertos=aciertos+1 where nombre= 'Jose';

insert into freeuser (registro, hostinfo) values(now(), connection_id());
select host from information_schema.processlist WHERE ID=connection_id();
INSERT INTO freeuser (registro, hostinfo) VALUES(NOW(), connection_id());
select * from freeuser;

