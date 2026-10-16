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

CREATE TABLE `incidencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `laboratorio` enum ('Laboratorio de Redes 1','Laboratorio de Cómputo B','Laboratorio de Inteligencia Artificial','Laboratorio de Electrónica','Laboratorio de Multimedia') NOT NULL,
  `equipo_afectado` text NOT NULL,
  `descripcion` text NOT NULL,
  `prioridad` enum('baja','media','alta') NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('pendiente','en proceso','resuelta') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `incidencias` (`nombre`, `laboratorio`, `equipo_afectado`, `descripcion`, `prioridad`, `estado`) VALUES
('Carlos Mendoza', 'Laboratorio de Redes 1', 'Switch Cisco Catalyst 2960', 'El puerto 12 no da enlace de red y presenta intermitencia constante.', 'alta', 'en proceso'),
('Ana Gómez', 'Laboratorio de Cómputo B', 'PC Estudiante 14', 'La computadora no enciende al presionar el botón de poder; posible fallo en la fuente de poder.', 'media', 'pendiente'),
('Luis Rodríguez', 'Laboratorio de Inteligencia Artificial', 'Proyector Epson PowerLite', 'La lámpara parpadea y muestra advertencia de temperatura alta tras 10 minutos de uso.', 'alta', 'pendiente'),
('Sofía Torres', 'Laboratorio de Electrónica', 'Osciloscopio Rigol DS1054Z', 'El canal 2 no calibrado correctamente, muestra ruido excesivo en la señal de entrada.', 'baja', 'resuelta'),
('Miguel Ángel Pérez', 'Laboratorio de Multimedia', 'Impresora 3D Creality Ender 3', 'Atasco de filamento en el extrusor y la cama caliente no alcanza la temperatura configurada.', 'media', 'en proceso');