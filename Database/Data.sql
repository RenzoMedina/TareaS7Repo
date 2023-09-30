/*creación de la base datos*/
CREATE DATABASE IF NOT EXISTS ie_secundaria;

/*selecionamos la base de datos*/
USE ie_secundaria;

/*creacción de la tabla del personal*/
CREATE TABLE personal (id INT AUTO_INCREMENT PRIMARY KEY , 
                        rut VARCHAR(13) NOT NULL UNIQUE, 
                        nombre VARCHAR(70) NOT NULL, 
                        apellido VARCHAR(150) NOT NULL, 
                        contrasena VARCHAR(35) NOT NULL, 
                        cargo ENUM('administrador','docente','coordinador'), 
                        estado BOOLEAN NOT NULL);

/*creación de la tabla de asitencia, junto con su relacion hacia el docente*/
CREATE TABLE asistencia(id INT AUTO_INCREMENT PRIMARY KEY, 
                        id_docente INT NOT NULL, 
                        nombre_curso VARCHAR(40) NOT NULL, 
                        fecha_curso DATE, 
                        hora_inicio TIME, 
                        hora_final TIME, 
                        asistio VARCHAR(2) NOT NULL, 
                        inicio_clase TIME, 
                        final_clase TIME, 
                        justificacion VARCHAR(3) NOT NULL, 
                        observaciones TEXT, 
                        FOREIGN KEY (id_docente) REFERENCES personal (id) ON UPDATE CASCADE);