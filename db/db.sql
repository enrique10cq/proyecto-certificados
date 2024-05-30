create database db_certificados;
use db_certificados;

CREATE TABLE certificado (
  id_certificado int auto_increment primary key NOT NULL,
  codigo varchar(20) NOT NULL,
  curso varchar(50) NOT NULL,
  descripcion varchar(100),
  nombre_archivo varchar(50),
  fecha date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE alumno (
  id_alumno int auto_increment primary key NOT NULL,
  nombres varchar(60) NOT NULL,
  apellidos varchar(60) NOT NULL,
  tipo_documento varchar(20) NOT NULL,
  documento varchar(20) NOT NULL,
  correo varchar(60) NOT NULL,
  id_certificado int not null,
  FOREIGN KEY (id_certificado) REFERENCES certificado(id_certificado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE usuario (
  id_usuario int NOT NULL AUTO_INCREMENT primary key,
  nombre varchar(60) NOT NULL,
  correo varchar(60) not NULL,
  clave varchar(100) not null,
  estado bit
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

drop table usuario;
INSERT INTO certificado (codigo, curso, descripcion, nombre_archivo, fecha) VALUES
('002','ingles intermedio','culminó sin notas','certificado1.pdf',curdate());

INSERT INTO alumno (nombres, apellidos, tipo_documento, documento, correo, id_certificado) VALUES
('enrique','carbajal quispe','dni','78787878','enrique@gmail.com',1),
('enrique','carbajal quispe','dni','78787878','enrique@gmail.com',2);

INSERT INTO usuario (nombre, correo, clave, estado) VALUES
('admin', 'admin@gmail.com', '1234', 1);

select * from usuario;
select * from alumno;
select * from certificado;

SELECT a.id_alumno, CONCAT(a.nombres, ' ', a.apellidos)
AS alumno, a.documento, a.correo, c.curso, c.codigo, c.fecha
FROM certificado c JOIN alumno a ON c.id_certificado = a.id_certificado;

SELECT alumno.*, certificado.codigo, certificado.curso, certificado.descripcion 
FROM alumno 
JOIN certificado ON alumno.id_alumno = certificado.id_alumno 
WHERE alumno.id_alumno = 7 LIMIT 1;