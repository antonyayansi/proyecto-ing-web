-- Tabla de usuarios (quienes descargan y usan el sistema)
CREATE TABLE usuarios (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100) NOT NULL,
    dni varchar(8),
    correo VARCHAR(100) UNIQUE NOT NULL,
    contrasena TEXT NOT NULL,
    institucion VARCHAR(150),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de productos de software
CREATE TABLE productos (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio decimal(10,2),
    imagen varchar(255) null,
    tipo enum('comercial', 'gubernamental'),
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de versiones del producto
CREATE TABLE versiones (
    id SERIAL PRIMARY KEY,
    producto_id INT,
    version VARCHAR(20) NOT NULL,
    fecha_lanzamiento DATE NOT NULL,
    url_descarga TEXT NOT NULL,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

-- Tabla de manuales por producto o versión
CREATE TABLE manuales (
    id SERIAL PRIMARY KEY,
    producto_id INT,
    titulo VARCHAR(150) NOT NULL,
    url_manual TEXT NOT NULL,
    tipo VARCHAR(50) DEFAULT 'VIDEO', -- o VIDEO, etc.
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

-- Tabla de certificados generados
CREATE TABLE certificados (
    id SERIAL PRIMARY KEY,
    usuario_id INT,
    producto_id INT,
    url_certificado TEXT NOT NULL,
    QR varchar(255) null,
    fecha_emision TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (producto_id) REFERENCES productos(id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
