/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : myapp_sjk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-10 20:49:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `number` varchar(20) NOT NULL,
  `id` varchar(20) DEFAULT NULL,
  `passworld` varchar(22) DEFAULT NULL,
  `passworlds` varchar(22) DEFAULT NULL,
  `money` int(255) DEFAULT '0',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('13975698680', '430703199710051670', '19971003qq', '19971003qq', '0');
INSERT INTO `user` VALUES ('13975698685', '430703199710051673', '19971003qaz', '19971003qaz', '0');
INSERT INTO `user` VALUES ('15211200000', '430703199710050000', '19971003qq', '19971003qq', '14');
INSERT INTO `user` VALUES ('15211206000', '430703199710051000', '19971003qq', '19971003qq', '2');
INSERT INTO `user` VALUES ('15211206600', '430703199710051600', '19971003qq', '19971003qq', '0');
INSERT INTO `user` VALUES ('15211206622', '430703199710051674', '19971003qq', '19971003qq', '0');
INSERT INTO `user` VALUES ('15211206635', '430703199710051675', '19971003qq', '19971003qq', '70');
INSERT INTO `user` VALUES ('15211626161', '430703199710051000', '19971003qq', '19971003qq', '0');
INSERT INTO `user` VALUES ('2147483647', '430703199710051675', '19971003qq', '19971003qq', '0');
