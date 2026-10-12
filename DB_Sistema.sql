CREATE DATABASE IF NOT EXISTS `sistema_incidencias`;

USE `sistema_incidencias`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`nombre`, `email`, `password`) VALUES
('Felipe Rojas', 'rojas@admin.com', 'rojas123');

CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `laboratorio` text NOT NULL,
  `equipo_afectado` text NOT NULL,
  `descripcion` text NOT NULL,
  `prioridad` enum('baja','media','alta') NOT NULL DEFAULT 'media',
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('pendiente','en_proceso','resuelta') NOT NULL DEFAULT 'pendiente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

