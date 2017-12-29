/*
Navicat MySQL Data Transfer

Source Server         : honghu
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : first

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-29 17:17:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for upload
-- ----------------------------
DROP TABLE IF EXISTS `upload`;
CREATE TABLE `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `key` varchar(255) DEFAULT NULL,
  `save_name` varchar(255) DEFAULT NULL,
  `save_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upload
-- ----------------------------
INSERT INTO `upload` VALUES ('1', '2017-12-13 09:52:02', 'one', null, '20171213/');
INSERT INTO `upload` VALUES ('2', '2017-12-13 09:52:38', 'one', '5a3087e66dc08.jpg', '20171213/');
INSERT INTO `upload` VALUES ('3', '2017-12-13 09:56:57', 'one', '5a3088e99e0ca.jpg', '20171213/');
INSERT INTO `upload` VALUES ('4', '2017-12-13 09:56:57', 'two', '5a3088e99fc22.jpg', '20171213/');
INSERT INTO `upload` VALUES ('5', '2017-12-13 09:56:57', 'three', '5a3088e9a5dcc.jpg', '20171213/');
INSERT INTO `upload` VALUES ('6', '2017-12-13 09:56:57', 'four', '5a3088e9a753c.jpg', '20171213/');
INSERT INTO `upload` VALUES ('7', '2017-12-13 09:56:57', 'five', '5a3088e9a8cac.jpg', '20171213/');
INSERT INTO `upload` VALUES ('8', '2017-12-13 09:56:57', 'six', '5a3088e9aa035.jpg', '20171213/');
INSERT INTO `upload` VALUES ('9', '2017-12-13 09:58:09', 'one', '5a3089318338a.jpg', '20171213/');
INSERT INTO `upload` VALUES ('10', '2017-12-13 09:58:09', 'two', '5a30893184afa.jpg', '20171213/');
INSERT INTO `upload` VALUES ('11', '2017-12-13 09:58:09', 'three', '5a3089318626a.jpg', '20171213/');
INSERT INTO `upload` VALUES ('12', '2017-12-13 09:58:09', 'four', '5a308931879db.jpg', '20171213/');
INSERT INTO `upload` VALUES ('13', '2017-12-13 09:58:09', 'five', '5a3089318cbe4.jpg', '20171213/');
INSERT INTO `upload` VALUES ('14', '2017-12-13 09:58:09', 'six', '5a3089318e354.jpg', '20171213/');
INSERT INTO `upload` VALUES ('15', '2017-12-13 02:16:50', 'Filedata', '5a30c5d2cff13.jpg', '20171213/');
INSERT INTO `upload` VALUES ('16', '2017-12-13 02:16:50', 'Filedata', '5a30c5d2ef31a.jpg', '20171213/');
INSERT INTO `upload` VALUES ('17', '2017-12-13 02:16:51', 'Filedata', '5a30c5d3181b9.jpg', '20171213/');
INSERT INTO `upload` VALUES ('18', '2017-12-13 02:16:51', 'Filedata', '5a30c5d336620.jpg', '20171213/');
INSERT INTO `upload` VALUES ('19', '2017-12-13 02:16:51', 'Filedata', '5a30c5d353ecf.jpg', '20171213/');
INSERT INTO `upload` VALUES ('20', '2017-12-13 02:16:51', 'Filedata', '5a30c5d375217.jpg', '20171213/');
INSERT INTO `upload` VALUES ('21', '2017-12-13 02:18:16', 'Filedata', '5a30c62819c87.jpg', '20171213/');
INSERT INTO `upload` VALUES ('22', '2017-12-13 02:18:16', 'Filedata', '5a30c6283232d.jpg', '20171213/');
INSERT INTO `upload` VALUES ('23', '2017-12-13 02:18:16', 'Filedata', '5a30c628522ed.jpg', '20171213/');
INSERT INTO `upload` VALUES ('24', '2017-12-13 02:18:16', 'Filedata', '5a30c62868282.jpg', '20171213/');
INSERT INTO `upload` VALUES ('25', '2017-12-13 02:18:16', 'Filedata', '5a30c62881cb0.jpg', '20171213/');
INSERT INTO `upload` VALUES ('26', '2017-12-13 02:18:16', 'Filedata', '5a30c628968bd.jpg', '20171213/');
INSERT INTO `upload` VALUES ('27', '2017-12-13 02:18:16', 'Filedata', '5a30c628b6c64.jpg', '20171213/');
INSERT INTO `upload` VALUES ('28', '2017-12-13 02:21:00', 'Filedata', '5a30c6cca77c5.jpg', '20171213/');
INSERT INTO `upload` VALUES ('29', '2017-12-13 02:21:39', 'Filedata', '5a30c6f3c5d13.jpg', '20171213/');
INSERT INTO `upload` VALUES ('30', '2017-12-13 02:22:48', 'Filedata', '5a30c738cc657.jpg', '20171213/');
INSERT INTO `upload` VALUES ('31', '2017-12-13 02:23:31', 'Filedata', '5a30c763e71f0.jpg', '20171213/');
INSERT INTO `upload` VALUES ('32', '2017-12-13 02:43:24', 'one', '5a30cc0cadcd7.jpg', '20171213/');
INSERT INTO `upload` VALUES ('33', '2017-12-13 02:43:24', 'two', '5a30cc0cb32c8.jpg', '20171213/');
INSERT INTO `upload` VALUES ('34', '2017-12-13 02:43:24', 'three', '5a30cc0cb4e20.jpg', '20171213/');
INSERT INTO `upload` VALUES ('35', '2017-12-13 02:43:24', 'four', '5a30cc0cb6979.jpg', '20171213/');
INSERT INTO `upload` VALUES ('36', '2017-12-13 02:43:24', 'five', '5a30cc0cb84d1.jpg', '20171213/');
INSERT INTO `upload` VALUES ('37', '2017-12-13 02:43:24', 'six', '5a30cc0cba412.jpg', '20171213/');
INSERT INTO `upload` VALUES ('38', '2017-12-13 03:56:38', 'six', '5a30dd361b637.jpg', '20171213/');
INSERT INTO `upload` VALUES ('39', '2017-12-13 03:57:00', 'five', '5a30dd4c418a2.jpg', '20171213/');
INSERT INTO `upload` VALUES ('40', '2017-12-13 03:57:00', 'six', '5a30dd4c43012.jpg', '20171213/');
INSERT INTO `upload` VALUES ('41', '2017-12-13 04:06:57', 'five', '5a30dfa19be9a.jpg', '20171213/');
INSERT INTO `upload` VALUES ('42', '2017-12-13 04:07:59', 'four', '5a30dfdf76b0b.jpg', '20171213/');
INSERT INTO `upload` VALUES ('43', '2017-12-13 04:07:59', 'five', '5a30dfdf78664.jpg', '20171213/');
INSERT INTO `upload` VALUES ('44', '2017-12-13 04:08:37', 'four', '5a30e0054cfb7.jpg', '20171213/');
INSERT INTO `upload` VALUES ('45', '2017-12-13 04:08:37', 'five', '5a30e0054eef7.jpg', '20171213/');
INSERT INTO `upload` VALUES ('46', '2017-12-13 04:37:24', 'one', '5a30e6c444238.jpg', '20171213/');
INSERT INTO `upload` VALUES ('47', '2017-12-13 04:37:54', 'one', '5a30e6e2093a6.jpg', '20171213/');
INSERT INTO `upload` VALUES ('48', '2017-12-13 04:37:58', 'one', '5a30e6e622ad0.jpg', '20171213/');
INSERT INTO `upload` VALUES ('49', '2017-12-13 04:38:25', 'one', '5a30e701a81e0.jpg', '20171213/');
INSERT INTO `upload` VALUES ('50', '2017-12-13 04:38:35', 'one', '5a30e70b9ad41.jpg', '20171213/');
INSERT INTO `upload` VALUES ('51', '2017-12-13 04:39:00', 'one', '5a30e7245808f.jpg', '20171213/');
INSERT INTO `upload` VALUES ('52', '2017-12-13 04:39:08', 'two', '5a30e72c43264.jpg', '20171213/');
INSERT INTO `upload` VALUES ('53', '2017-12-13 04:39:09', 'two', '5a30e72d93fa8.jpg', '20171213/');
INSERT INTO `upload` VALUES ('54', '2017-12-13 04:39:48', 'one', '5a30e75409d7e.jpg', '20171213/');
INSERT INTO `upload` VALUES ('55', '2017-12-13 04:40:12', 'one', '5a30e76c1b44f.jpg', '20171213/');
INSERT INTO `upload` VALUES ('56', '2017-12-13 04:40:37', 'one', '5a30e785ae5af.jpg', '20171213/');
INSERT INTO `upload` VALUES ('57', '2017-12-13 04:41:22', 'one', '5a30e7b2415bc.jpg', '20171213/');
INSERT INTO `upload` VALUES ('58', '2017-12-13 04:41:50', 'one', '5a30e7ce81b7c.jpg', '20171213/');
INSERT INTO `upload` VALUES ('59', '2017-12-13 04:41:56', 'one', '5a30e7d47b35a.jpg', '20171213/');
INSERT INTO `upload` VALUES ('60', '2017-12-13 04:42:07', 'one', '5a30e7df033d3.jpg', '20171213/');
INSERT INTO `upload` VALUES ('61', '2017-12-13 04:42:17', 'one', '5a30e7e9e056b.jpg', '20171213/');
INSERT INTO `upload` VALUES ('62', '2017-12-13 04:42:32', 'one', '5a30e7f857d25.jpg', '20171213/');
INSERT INTO `upload` VALUES ('63', '2017-12-13 04:42:48', 'six', '5a30e8088ad44.jpg', '20171213/');
INSERT INTO `upload` VALUES ('64', '2017-12-13 04:44:42', 'file', '5a30e87a10258.jpg', '20171213/');
