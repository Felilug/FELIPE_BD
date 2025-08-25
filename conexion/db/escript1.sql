create database db_logincen;
use db_logincen;
create table alumnos(
id int not null primary key auto_increment,
nombre varchar(100),
apellido varchar(100)
);
ALTER TABLE alumnos
ADD COLUMN telefono VARCHAR(20) NOT NULL,
ADD COLUMN email VARCHAR(100) NOT NULL,
ADD COLUMN contrasenia VARCHAR(255) NOT NULL,
ADD COLUMN dni VARCHAR(20) NOT NULL;


select * FROM alumnos;	