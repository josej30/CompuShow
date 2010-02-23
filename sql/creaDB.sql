/*create user 'compushow'@'localhost' identified by 'compushow';
create database compushow ;
grant all privileges on compushow.* to 'compushow'@'localhost' with grant option;*/
 
use compushow;
 
DROP TABLE IF EXISTS PERFIL;
DROP TABLE IF EXISTS CATEGORIA;
DROP TABLE IF EXISTS NOMINACION;
DROP TABLE IF EXISTS VOTOS;
 
create table PERFIL (
  nombreP VARCHAR(40),
  apellidoP VARCHAR(40),	
  carnetP VARCHAR(8) UNIQUE, 
  email VARCHAR(30) UNIQUE,
  password VARCHAR(30)
)
;
 
create table CATEGORIA(
  nombreC VARCHAR(20) UNIQUE,
  ganador varchar(40),
  FOREIGN KEY (ganador) REFERENCES PERFIL(nombreP) ON DELETE CASCADE ON UPDATE CASCADE 
)
;
 
create table NOMINACION(
  categoria VARCHAR(20),
  nombreNominado VARCHAR(200),
  carnetNominador VARCHAR(8),
  PRIMARY KEY (categoria, nombreNominado, carnetNominador),
  FOREIGN KEY (categoria) REFERENCES CATEGORIA(nombreC) ON DELETE CASCADE ON UPDATE CASCADE, 
  FOREIGN KEY (carnetNominador) REFERENCES PERFIL(carnetP) ON DELETE CASCADE ON UPDATE CASCADE
)
;
 
create table VOTOS(
  categoria VARCHAR(20),
  nombreNominado VARCHAR(200),
  carnetVotante VARCHAR(8),
  PRIMARY KEY (categoria, nombreNominado, carnetVotante),
  FOREIGN KEY (categoria) REFERENCES NOMINACION(categoria) ON DELETE CASCADE ON UPDATE CASCADE, 
  FOREIGN KEY (nombreNominado) REFERENCES NOMINACION(nombreNominado) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (carnetVotante) REFERENCES PERFIL(carnetP) ON DELETE CASCADE ON UPDATE CASCADE
)
 
