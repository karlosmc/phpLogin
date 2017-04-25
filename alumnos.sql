/*
Navicat MySQL Data Transfer

Source Server         : hola
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : alumnos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-24 19:10:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_email` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('5', 'k4rlos.mc@gmail.com', '2017-04-24 18:05:36');
INSERT INTO `cart` VALUES ('6', 'k4rlos.mc@gmail.com', '2017-04-24 18:06:25');
INSERT INTO `cart` VALUES ('7', 'k4rlos.mc@gmail.com', '2017-04-24 18:08:17');
INSERT INTO `cart` VALUES ('8', 'carlos_hope2@hotmail.com', '2017-04-24 18:10:13');
INSERT INTO `cart` VALUES ('9', 'carlos_hope2@hotmail.com', '2017-04-24 18:24:55');

-- ----------------------------
-- Table structure for cart_product
-- ----------------------------
DROP TABLE IF EXISTS `cart_product`;
CREATE TABLE `cart_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `q` float DEFAULT NULL,
  `cart_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cart_product
-- ----------------------------
INSERT INTO `cart_product` VALUES ('1', '2', '1', '7');
INSERT INTO `cart_product` VALUES ('2', '3', '1', '7');
INSERT INTO `cart_product` VALUES ('3', '2', '3', '8');
INSERT INTO `cart_product` VALUES ('4', '3', '3', '8');
INSERT INTO `cart_product` VALUES ('5', '4', '2', '8');
INSERT INTO `cart_product` VALUES ('6', '4', '4', '9');
INSERT INTO `cart_product` VALUES ('7', '5', '1', '9');

-- ----------------------------
-- Table structure for estudiante
-- ----------------------------
DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apellido` varchar(50) NOT NULL DEFAULT '0',
  `telefono` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `promedio` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of estudiante
-- ----------------------------
INSERT INTO `estudiante` VALUES ('10', '45443322', 'MARITZA MILAGROS', 'CHOQUE YARESSI', '88238383', '32', '25', '2017-03-31 12:51:18');
INSERT INTO `estudiante` VALUES ('11', '78964', 'PEDRO PABLO', 'KUCZYNSKI', '7854545', '60', '10', '2017-04-20 10:30:12');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Mouse', '9');
INSERT INTO `product` VALUES ('2', 'Teclado', '10');
INSERT INTO `product` VALUES ('3', 'CPU', '50');
INSERT INTO `product` VALUES ('4', 'Monitor', '25');
INSERT INTO `product` VALUES ('5', 'Altavoces', '11');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(10) DEFAULT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'cmaq', 'carlos maquera', 'andale');
INSERT INTO `usuario` VALUES ('2', 'r10', 'ronaldinho', 'gaucho');
