DROP DATABASE IF EXISTS TodolistAlberto;

CREATE DATABASE TodolistAlberto;
USE TodolistAlberto;

CREATE TABLE usuarios(
	usuario varchar(45) PRIMARY KEY,
	clave varchar(45) NOT NULL,
	admin boolean NOT NULL
);

CREATE TABLE datosPersonales(
	usuario varchar(45) PRIMARY KEY,
	nombre varchar(65),
	email varchar(45),
	FOREIGN KEY (usuario) REFERENCES usuarios(usuario)
);

CREATE TABLE IF NOT EXISTS listaTareas (
  cod_alumno int NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  usuario varchar(50) NOT NULL,
  asunto varchar(300) NOT NULL,
  estado varchar(30) NOT NULL
 
) ;

CREATE TABLE categorias(
	ID_Categoria int AUTO_INCREMENT PRIMARY KEY,
	categoria varchar(45) NOT NULL,
	descripcion varchar(255) NOT NULL,
	ruta varchar(40) NOT NULL
);

CREATE TABLE permisos(
	usuario varchar(45),
	ID_Categoria int,
	PRIMARY KEY (usuario, ID_Categoria),
	FOREIGN KEY (usuario) REFERENCES usuarios(usuario),
	FOREIGN KEY (ID_Categoria) REFERENCES categorias(ID_Categoria)
);

INSERT categorias VALUES
(NULL, 'Master Todolist', 'Elimina,edita y agrega tareas', 'categoria-listadetareas.php'), -- 1
(NULL, 'Ver Tareas', 'Revisa las tareas para esta semana', 'categoria-vertareas.php'),
(NULL, 'Editar Tareas', 'Edita las tareas pendientes', 'categoria-editartareas.php'), -- 3
(NULL, 'Eliminar Tareas', 'Elimina tareas culminadas', 'categoria-eliminartarea.php'); -- 4

INSERT usuarios VALUES
('UsuarioTest', '1234', 0),
('UsuarioPrueba', '1234', 0),
('Admin', '1234', 1);

INSERT permisos VALUES
('UsuarioTest', 1), ('UsuarioTest', 2),('UsuarioTest', 3),('UsuarioTest', 4),
('UsuarioPrueba', 2), ('UsuarioPrueba', 3);



INSERT INTO  listaTareas (cod_alumno, usuario, asunto,estado) VALUES
(1, 'Alberto Sanchez', 'Programacion Movil','pendiente'),
(2, 'Juancarlos Flores', 'Ingienieria de Software','pendiente');


-- app chatmessenger
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
