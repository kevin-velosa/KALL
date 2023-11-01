
create databse empleos ;

 USE empleos;




CREATE TABLE `registros_usu` (
  `id_usu` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Edad` int(3) NOT NULL,
  `habilidad` varchar(40) NOT NULL,
  `descripcion` varchar(3000) NOT NULL,
  `telefono` int(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `n_usuario` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL
);

INSERT INTO `registros_usu` (`id_usu`, `Nombre`, `Apellido`, `Edad`, `habilidad`, `descripcion`, `telefono`, `correo`, `cargo`, `n_usuario`, `contraseña`) VALUES
(3, '1vak', 'jj', 23, 'programador', 'uuuuuuuuu', 123333, 'juan@gmail.com', 'empleado', 'juan99', '4555'),
(4, '', '', 0, '', '', 0, '', 'contratador', 'juan9', '123'),
(5, 'PABLO', 'gonzalez', 45, 'fotografo', 'soy gonzalo y soy fotografo', 123654, 'g@gmail.com', 'contratador', 'gonxalo_2', '456'),
(6, 'harry', 'hernandez', 23, 'programador', 'soy programador', 1233336, 'juan3@gmail.com', 'empleado', '', '888');


ALTER TABLE `registros_usu`
  ADD PRIMARY KEY (`id_usu`);

ALTER TABLE `registros_usu`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
