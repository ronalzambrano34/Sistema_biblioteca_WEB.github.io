/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : biblioteca

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 01/04/2023 13:11:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for autores
-- ----------------------------
DROP TABLE IF EXISTS `autores`;
CREATE TABLE `autores`  (
  `Id_autor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nacimiento` int NULL DEFAULT NULL,
  `Muerte` int NULL DEFAULT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_autor`) USING BTREE,
  INDEX `FK_autores_libros`(`Nacimiento` ASC) USING BTREE,
  CONSTRAINT `FK_autores_libros` FOREIGN KEY (`Nacimiento`) REFERENCES `libros` (`Id_libro`) ON DELETE NO ACTION ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of autores
-- ----------------------------
INSERT INTO `autores` VALUES (6, 'Gabriel Garcia Marquez', 3, NULL, 1);
INSERT INTO `autores` VALUES (7, 'Pedro Lopez', 6, NULL, 1);

-- ----------------------------
-- Table structure for consulta
-- ----------------------------
DROP TABLE IF EXISTS `consulta`;
CREATE TABLE `consulta`  (
  `Id_consulta` int NOT NULL AUTO_INCREMENT,
  `Id_persona` int NOT NULL,
  `Id_libro` int NOT NULL,
  `Fecha_visita` date NOT NULL,
  `Hora_entrada` time NOT NULL,
  `Hora_salida` time NOT NULL,
  PRIMARY KEY (`Id_consulta`) USING BTREE,
  INDEX `FK__personas`(`Id_persona` ASC) USING BTREE,
  INDEX `FK_consulta_libros`(`Id_libro` ASC) USING BTREE,
  CONSTRAINT `FK__personas` FOREIGN KEY (`Id_persona`) REFERENCES `personas` (`Id_persona`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `FK_consulta_libros` FOREIGN KEY (`Id_libro`) REFERENCES `libros` (`Id_libro`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of consulta
-- ----------------------------
INSERT INTO `consulta` VALUES (1, 3, 4, '2020-07-07', '09:10:00', '11:10:00');
INSERT INTO `consulta` VALUES (2, 4, 6, '2020-07-06', '03:10:00', '05:10:00');
INSERT INTO `consulta` VALUES (3, 3, 3, '2020-07-05', '13:11:00', '16:11:00');
INSERT INTO `consulta` VALUES (4, 4, 9, '2020-07-04', '02:11:00', '03:11:00');
INSERT INTO `consulta` VALUES (5, 1, 12, '2020-07-04', '14:11:00', '16:16:00');
INSERT INTO `consulta` VALUES (6, 1, 1, '2020-06-28', '14:13:00', '16:00:00');
INSERT INTO `consulta` VALUES (7, 6, 5, '2020-07-10', '15:21:00', '18:23:00');
INSERT INTO `consulta` VALUES (8, 2, 15, '2020-05-08', '16:18:00', '18:30:00');
INSERT INTO `consulta` VALUES (10, 5, 17, '2020-06-29', '10:20:00', '12:20:00');
INSERT INTO `consulta` VALUES (11, 3, 9, '2020-07-16', '13:23:00', '17:21:00');
INSERT INTO `consulta` VALUES (12, 1, 12, '2020-02-05', '23:25:00', '13:11:00');
INSERT INTO `consulta` VALUES (13, 5, 13, '2019-07-20', '13:30:00', '15:10:00');
INSERT INTO `consulta` VALUES (14, 4, 7, '2020-03-10', '08:26:00', '10:30:00');
INSERT INTO `consulta` VALUES (16, 3, 13, '2020-05-13', '15:30:00', '17:25:00');
INSERT INTO `consulta` VALUES (17, 6, 2, '2020-01-20', '12:26:00', '14:29:00');
INSERT INTO `consulta` VALUES (18, 1, 6, '2020-03-25', '22:27:00', '12:34:00');
INSERT INTO `consulta` VALUES (19, 4, 5, '2019-08-05', '15:29:00', '17:33:00');
INSERT INTO `consulta` VALUES (20, 6, 10, '2017-01-15', '14:10:00', '16:59:00');
INSERT INTO `consulta` VALUES (21, 1, 1, '2023-03-27', '02:02:00', '03:03:00');
INSERT INTO `consulta` VALUES (22, 1, 1, '2023-03-28', '08:00:00', '09:00:00');

-- ----------------------------
-- Table structure for detalle
-- ----------------------------
DROP TABLE IF EXISTS `detalle`;
CREATE TABLE `detalle`  (
  `Id_prestamo` int NOT NULL,
  `Id_libro` int NOT NULL,
  `Descripcion` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  INDEX `FK_detalle_libros`(`Id_libro` ASC) USING BTREE,
  INDEX `FK_detalle_prestamos`(`Id_prestamo` ASC) USING BTREE,
  CONSTRAINT `FK_detalle_libros` FOREIGN KEY (`Id_libro`) REFERENCES `libros` (`Id_libro`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_detalle_prestamos` FOREIGN KEY (`Id_prestamo`) REFERENCES `prestamos` (`Id_prestamo`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detalle
-- ----------------------------
INSERT INTO `detalle` VALUES (11, 2, '');

-- ----------------------------
-- Table structure for empleados
-- ----------------------------
DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados`  (
  `Id_empleado` int NOT NULL AUTO_INCREMENT,
  `Id_persona` int NOT NULL,
  `Id_puesto` int NOT NULL,
  `Fecha_contratacion` date NOT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_empleado`) USING BTREE,
  INDEX `FK_empleados_puesto`(`Id_puesto` ASC) USING BTREE,
  INDEX `FK_empleados_personas`(`Id_persona` ASC) USING BTREE,
  CONSTRAINT `FK_empleados_personas` FOREIGN KEY (`Id_persona`) REFERENCES `personas` (`Id_persona`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_empleados_puesto` FOREIGN KEY (`Id_puesto`) REFERENCES `puesto` (`Id_puesto`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of empleados
-- ----------------------------
INSERT INTO `empleados` VALUES (1, 1, 2, '2020-06-01', 1);
INSERT INTO `empleados` VALUES (2, 5, 2, '2020-06-25', 1);
INSERT INTO `empleados` VALUES (3, 6, 2, '2020-06-30', 1);

-- ----------------------------
-- Table structure for libros
-- ----------------------------
DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros`  (
  `Id_libro` int NOT NULL AUTO_INCREMENT,
  `Clasificacion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Id_autor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Titulo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Edicion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Editorial` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Anno` int NOT NULL,
  `Lugar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Cant_pag` int NOT NULL,
  `Materia` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_libro`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of libros
-- ----------------------------
INSERT INTO `libros` VALUES (1, '', '6', 'los 3 cerditos', '3', 'Trillas', 0, NULL, 1, 'Cuentos infantiles', 1);
INSERT INTO `libros` VALUES (2, '', '6', 'Pinocho', '3', 'Trillas', 0, NULL, 2, 'Cuentos ', 1);
INSERT INTO `libros` VALUES (3, 'eseee', '6', 'eseee', 'eseee', 'eseee', 1901, 'eseee', 21, 'ese', 1);
INSERT INTO `libros` VALUES (4, '', '6', 'Base de datos', '2', 'Trillas', 0, NULL, 2, 'Informática', 1);
INSERT INTO `libros` VALUES (5, '', '7', 'POO', '2', 'Omega', 0, NULL, 3, 'Informática', 1);
INSERT INTO `libros` VALUES (6, '', '7', 'Frances', '3', 'Trillas', 0, NULL, 3, 'Idiomas', 1);
INSERT INTO `libros` VALUES (7, '', '7', 'Álgebra', '3', 'Omega', 0, NULL, 3, 'Matemáticas', 1);
INSERT INTO `libros` VALUES (8, '', '7', 'Cálculo', '3', 'Omega', 0, NULL, 3, 'Matemáticas', 1);
INSERT INTO `libros` VALUES (9, '', '7', 'Programación', '3', 'Trillas', 0, NULL, 1, 'Informática', 1);
INSERT INTO `libros` VALUES (10, '', '7', 'Anatomia', '2', 'Trillas', 0, NULL, 1, 'Salud', 1);
INSERT INTO `libros` VALUES (12, '', '7', 'Los frijoles magicos', '1', 'Omega', 0, NULL, 1, 'Matemáticas', 1);
INSERT INTO `libros` VALUES (13, '', '7', 'Ingles 2', '3', 'Trillas', 0, NULL, 1, 'Idiomas', 1);
INSERT INTO `libros` VALUES (14, '', '6', 'Ingles 3', '3', 'Omega', 0, NULL, 3, 'Idiomas', 1);
INSERT INTO `libros` VALUES (15, '', '6', 'HTML 5', '3', 'Omega', 0, NULL, 3, 'Informática', 1);
INSERT INTO `libros` VALUES (16, '', '7', 'HTML 3', '1', 'Omega', 0, NULL, 2, 'Informática', 1);
INSERT INTO `libros` VALUES (17, '', '7', 'Caperucita roja', '3', 'Omega', 0, NULL, 2, 'Cuentos ', 1);
INSERT INTO `libros` VALUES (19, '', '7', 'Los frijoles magicos', '3', 'Omega', 0, NULL, 5, 'Matemáticas', 1);
INSERT INTO `libros` VALUES (22, '', '7', 'Base de datos', '3', 'Trillas', 0, NULL, 3, 'Idiomas', 1);
INSERT INTO `libros` VALUES (23, '', '7', 'Ingles 2', '3', 'Omega', 0, NULL, 2, 'Matemáticas', 1);
INSERT INTO `libros` VALUES (24, '', '7', 'Ingles 3', '3', 'Omega', 0, NULL, 1, 'Informática', 1);
INSERT INTO `libros` VALUES (25, '', '7', 'La casa de piedra', '3', 'Omega', 0, NULL, 3, 'Cuentos ', 1);
INSERT INTO `libros` VALUES (26, '', '7', 'asa', '1', 'asa', 0, NULL, 1, 'asa', 0);
INSERT INTO `libros` VALUES (27, '', '6', 'a', '2', 'a', 0, NULL, 2, 'a', 0);
INSERT INTO `libros` VALUES (28, '', '6', 'a', '1', 'a', 0, NULL, 1, 'asa', 0);
INSERT INTO `libros` VALUES (29, '', '6', 'a', '1', 'a', 0, NULL, 2, 'a', 0);
INSERT INTO `libros` VALUES (30, '', '6', 'a', '1', 'a', 0, NULL, 1, 'a', 0);
INSERT INTO `libros` VALUES (31, '', '6', 'a', '3', 'a', 0, NULL, 1, 'a', 0);
INSERT INTO `libros` VALUES (34, 'ese', '6', 'ese', 'ese', 'ese', 1200, 'ese', 20, 'ese', 0);
INSERT INTO `libros` VALUES (35, 'opi', '6', 'oip', 'iop', 'iop', 1200, 'iop', 21, 'iop', 1);

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `Id_persona` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CI` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `Sexo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Fecha_inscripcion` date NOT NULL,
  `Direccion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Telefono` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_persona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 180 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (1, 'Ronal Zambrano Ferrer', '94012720664', 'Masculino', '1994-01-27', '', '53843778', 1);
INSERT INTO `personas` VALUES (2, 'Alfredo Gómez López', NULL, 'Masculino', '2001-07-07', '', '53843778', 0);
INSERT INTO `personas` VALUES (3, 'Esther López Cruz', '94012720664', 'Masculino', '2023-04-01', '', '', 1);
INSERT INTO `personas` VALUES (4, 'Pedro López Gómez', NULL, 'Masculino', '2020-06-24', '', '53843778', 1);
INSERT INTO `personas` VALUES (5, 'pedro lopez', NULL, 'Femenino', '2020-07-05', '', '53843778', 1);
INSERT INTO `personas` VALUES (6, 'Enrique lopez', NULL, 'Masculino', '1995-10-13', '', '53843778', 0);
INSERT INTO `personas` VALUES (7, 'raa', '94012720664', 'Masculino', '2023-03-28', '', '53843778', 1);
INSERT INTO `personas` VALUES (8, 'aaa', '11111111111', 'Masculino', '2023-03-30', '', '', 1);
INSERT INTO `personas` VALUES (175, 'sad', '94012720664', 'Masculino', '2023-03-30', '', '', 1);
INSERT INTO `personas` VALUES (176, 'sss', '11111111111', 'Masculino', '2023-03-30', '', '', 1);
INSERT INTO `personas` VALUES (177, 'qqq', '12345678910', 'Femenino', '2023-03-30', '', '', 1);
INSERT INTO `personas` VALUES (178, 'dsd', '12345678910', 'Masculino', '2023-03-30', '', '', 0);
INSERT INTO `personas` VALUES (179, 'ddd', '11111111111', 'Femenino', '2023-03-30', '', '', 1);

-- ----------------------------
-- Table structure for prestamos
-- ----------------------------
DROP TABLE IF EXISTS `prestamos`;
CREATE TABLE `prestamos`  (
  `Id_prestamo` int NOT NULL AUTO_INCREMENT,
  `Id_empleado` int NOT NULL,
  `Id_persona` int NOT NULL,
  `Cantidad` int NOT NULL,
  `Identificacion` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Fecha_prestamo` date NOT NULL,
  `Fecha_devolucion` date NOT NULL,
  `Estatus` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Id_prestamo`) USING BTREE,
  INDEX `FK__empleados`(`Id_empleado` ASC) USING BTREE,
  INDEX `FK_prestamos_personas`(`Id_persona` ASC) USING BTREE,
  CONSTRAINT `FK__empleados` FOREIGN KEY (`Id_empleado`) REFERENCES `empleados` (`Id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_prestamos_personas` FOREIGN KEY (`Id_persona`) REFERENCES `personas` (`Id_persona`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prestamos
-- ----------------------------
INSERT INTO `prestamos` VALUES (11, 1, 4, 1, 'dsf', '2023-03-28', '2023-03-29', 'Pendiente');

-- ----------------------------
-- Table structure for puesto
-- ----------------------------
DROP TABLE IF EXISTS `puesto`;
CREATE TABLE `puesto`  (
  `Id_puesto` int NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_puesto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of puesto
-- ----------------------------
INSERT INTO `puesto` VALUES (1, 'Encargado', 1);
INSERT INTO `puesto` VALUES (2, 'Supervisor', 1);

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `Id_usuario` int NOT NULL AUTO_INCREMENT,
  `Id_empleado` int NOT NULL,
  `Nombre_usuario` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`Id_usuario`) USING BTREE,
  INDEX `FK_usuarios_empleados`(`Id_empleado` ASC) USING BTREE,
  CONSTRAINT `FK_usuarios_empleados` FOREIGN KEY (`Id_empleado`) REFERENCES `empleados` (`Id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 1, 'admin', 'admin', b'1');

SET FOREIGN_KEY_CHECKS = 1;
