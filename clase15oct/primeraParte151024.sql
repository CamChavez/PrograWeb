use fes_aragon;

-- crear una tabla
-- comillas al reves, option y corchete de cerrar
CREATE TABLE `alumno` (
    `nombre_usuario` text not null,
    `carrera` text not null,
    `no_cuenta` int(10) not null,
    `direccion` text not null,
    `telefono` varchar(10) not null,
    `email` text not null,
    `password` varchar(10) not null,
    `fecha_registro` datetime not null DEFAULT current_timestamp,
    `permisos` int(11) not null default '2'
);

ALTER TABLE alumno ADD PRIMARY KEY (`no_cuenta`);

SELECT*FROM alumno;