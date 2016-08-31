/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : moi

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2016-08-31 11:02:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'butnariu@w.cpm', 'ioana', '5');
INSERT INTO `users` VALUES ('f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'test@sdds.com', 'test', '7');
INSERT INTO `users` VALUES ('7c222fb2927d828af22f592134e8932480637c0d', 'ioana@fd.com', 'ioana1', '8');
SET FOREIGN_KEY_CHECKS=1;
