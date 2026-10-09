CREATE DATABASE IF NOT EXISTS gracias_lionel CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE gracias_lionel;

CREATE TABLE IF NOT EXISTS mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(60) NOT NULL,
    ciudad VARCHAR(60) NOT NULL,
    mensaje TEXT NOT NULL,
    publico TINYINT(1) NOT NULL DEFAULT 0,
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mensajes (nombre, ciudad, mensaje, publico) VALUES
('Una hincha', 'Rosario', 'Gracias por enseñarnos a caerse no es el final. Que se puede volver, y volver, hasta abrazar el sueño.', 1),
('Un hincha', 'La Plata', 'Mi primer recuerdo de un Mundial es tu sonrisa con la Copa. No sé si hay una mejor forma de empezar a querer el fútbol.', 1),
('Una hincha', 'Mar del Plata', 'En mi casa no festejamos un gol. Nos abrazamos todos. Gracias por regalarnos esos segundos que van a durar toda la vida.', 1);
