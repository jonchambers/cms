/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50525
 Source Host           : localhost
 Source Database       : cms

 Target Server Type    : MySQL
 Target Server Version : 50525
 File Encoding         : utf-8

 Date: 03/09/2015 19:32:22 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `About`
-- ----------------------------
DROP TABLE IF EXISTS `About`;
CREATE TABLE `About` (
  `about` text NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `About`
-- ----------------------------
BEGIN;
INSERT INTO `About` VALUES ('<h2><strong>This is the text on the about page.</strong></h2>\r\n<p>&nbsp;</p>\r\n<p style=\"padding-left: 30px;\"><strong>&nbsp;</strong></p>', '1');
COMMIT;

-- ----------------------------
--  Table structure for `Contact`
-- ----------------------------
DROP TABLE IF EXISTS `Contact`;
CREATE TABLE `Contact` (
  `contact` text NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `Contact`
-- ----------------------------
BEGIN;
INSERT INTO `Contact` VALUES ('<h2><strong>This is the contact page.</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"padding-left: 30px;\"><strong>&nbsp;</strong></p>', '1');
COMMIT;

-- ----------------------------
--  Table structure for `GD`
-- ----------------------------
DROP TABLE IF EXISTS `GD`;
CREATE TABLE `GD` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Text` char(100) DEFAULT NULL,
  `Img_id` char(50) DEFAULT NULL,
  `Img_lg` char(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `GD`
-- ----------------------------
BEGIN;
INSERT INTO `GD` VALUES ('1', '1', 'gd1thumb.jpg', 'gd1.jpg'), ('2', '2', 'gd2thumb.jpg', 'gd2.jpg'), ('3', '3', 'gd3thumb.jpg', 'gd3.jpg'), ('4', '4', 'gd4thumb.jpg', 'gd4.jpg'), ('5', '5', 'gd5thumb.jpg', 'gd5.jpg'), ('6', '6', 'gd6thumb.jpg', 'gd6.jpg');
COMMIT;

-- ----------------------------
--  Table structure for `Photo`
-- ----------------------------
DROP TABLE IF EXISTS `Photo`;
CREATE TABLE `Photo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Text` char(100) DEFAULT NULL,
  `Img_id` char(50) DEFAULT NULL,
  `Img_lg` char(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `Photo`
-- ----------------------------
BEGIN;
INSERT INTO `Photo` VALUES ('4', '1', 'photo1thumb.jpg', 'photo1.jpg'), ('5', '2', 'photo2thumb.jpg', 'photo2.jpg'), ('6', '3', 'photo3thumb.jpg', 'photo3.jpg'), ('7', '4', 'photo4thumb.jpg', 'photo4.jpg'), ('8', '5', 'photo5thumb.jpg', 'photo5.jpg'), ('9', '6', 'photo6thumb.jpg', 'photo6.jpg');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
