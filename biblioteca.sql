/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : biblioteca

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 11/04/2023 21:27:46
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
  PRIMARY KEY (`Id_autor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of autores
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of consulta
-- ----------------------------

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
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle
-- ----------------------------

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
  CONSTRAINT `FK_empleados_personas` FOREIGN KEY (`Id_persona`) REFERENCES `personas` (`Id_persona`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `FK_empleados_puesto` FOREIGN KEY (`Id_puesto`) REFERENCES `puesto` (`Id_puesto`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of empleados
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of libros
-- ----------------------------

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `Id_persona` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CI` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Sexo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Fecha_inscripcion` date NOT NULL,
  `Direccion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Telefono` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_persona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (0, 'Ronal Zambrano Ferrer', '94012720664', 'Masculino', '1994-01-27', '', '53843778', 0);

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of prestamos
-- ----------------------------

-- ----------------------------
-- Table structure for puesto
-- ----------------------------
DROP TABLE IF EXISTS `puesto`;
CREATE TABLE `puesto`  (
  `Id_puesto` int NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_puesto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

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
  `Id_persona` int NOT NULL,
  `Nombre_usuario` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`Id_usuario`) USING BTREE,
  INDEX `FK_usuarios_empleados`(`Id_persona` ASC) USING BTREE,
  CONSTRAINT `FK_usuarios_empleados` FOREIGN KEY (`Id_persona`) REFERENCES `personas` (`Id_persona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (0, 0, 'admin', 'admin123', b'1');

SET FOREIGN_KEY_CHECKS = 1;
