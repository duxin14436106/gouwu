/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2018-05-23 02:05:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
`id`  int(4) NOT NULL DEFAULT 0 ,
`name`  varchar(13) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`pwd`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci

;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('0', 'admin', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

-- ----------------------------
-- Table structure for gonggao
-- ----------------------------
DROP TABLE IF EXISTS `gonggao`;
CREATE TABLE `gonggao` (
`id`  int(10) NOT NULL AUTO_INCREMENT ,
`title`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL ,
`content`  text CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL ,
`time`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=32

;

-- ----------------------------
-- Records of gonggao
-- ----------------------------
BEGIN;
INSERT INTO `gonggao` VALUES ('26', '联想乐基金获评2015年度中国最佳天使和早期投资机构', '重视核心技术 助推科技升级\r\n\r\n        活动当天，联想集团副总裁、联想乐基金总经理宋春雨应邀分享联想投资之道。宋春雨表示，未来30年，中国的发展将会完成一个巨大的转型，将改变传统依赖粗放式的投入获得经济增长的模式。核心技术推动社会发展的趋势将会越加明显，核心技术代表着未来。联想乐基金将持续把核心技术投资作为核心竞争力，投资与扶持更多的创新型核心技术企业，推动科技的升级，促进社会效率的提升。\r\n\r\n        据悉，在联想乐基金已投资的40多家优秀企业中，拥有核心技术的企业超过80%。这些核心技术已陆续应用到相关行业和个人生活中，有效地提升了社会效率，这些核心技术包括：SMARTX 的企业云存储计算技术、Face++的Deep Learning人脸识别与人工智能技术、Nok Nok Labs的互联网生物特征安全认证技术、商派 Shopex的电商SaaS平台，谛听科技的智能路由器操作系统newifi OS、点乐/捷酷/爱调研的移动广告大数据、慧理财APP基于金融大数据的机器人资管投顾平台、细刻（StyleWe）基于大数据的机器人买手等等。\r\n\r\n        宋春雨认为，未来30年，创业和投资的机会都在中国。中国也将改变过去依赖规模化投入的粗放发展模式，核心技术在驱动中国经济发展的道路上，将变得越来越重要。拥有核心技术的企业，将越来越有价值，只有拥有核心技术，才能走得长远。\r\n', '2018-05-8'), ('27', '联想企业网盘连续两年获可信云服务认证 系国内首家', '4月13日，投中信息主办的2016中国投资年会，在上海成功落下帷幕。峰会现场发布“2015年度中国最佳天使和早期投资机构榜”榜单，专注于投资创新型核心技术企业的联想乐基金，凭借2015年度优秀的投资业绩和较高的投资回报率，成功当选2015年度中国最佳天使和早期投资机构（TOP5）。同时联想乐基金投资的旷视科技（Face++）入选2015年度中国最佳天使和早期投资退出案例（TOP10）。联想乐基金是联想集团全球科技创投基金，以投资手段为联想布局互联网生态系统，专注于投资优秀科技创新和互联网企业。管理资金规模包含20亿人民币基金和4亿美元基金，投资领域均为产业最前沿的创新技术与产品。', '2018-05-8'), ('31', '售后服务', 'Lenovo产品服务热线：400-990-8888\r\n联想ThinkPad产品客服热线：400-898-9006\r\n联想扬天产品售前咨询：400-990-9090\r\nLenovo产品售前咨询：800-810-8888\r\nLenovo产品售前咨询：400-100-8002', '2018-05-16');
COMMIT;

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`mingcheng`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`jianjie`  mediumtext CHARACTER SET gbk COLLATE gbk_chinese_ci NULL ,
`addtime`  date NULL DEFAULT NULL ,
`xinghao`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`tupian`  varchar(200) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`shuliang`  int(4) NULL DEFAULT NULL ,
`cishu`  int(4) NULL DEFAULT NULL ,
`tuijian`  int(4) NULL DEFAULT NULL ,
`typeid`  int(4) NULL DEFAULT NULL ,
`huiyuanjia`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`shichangjia`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`pinpai`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`tejia`  int(2) NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=249

;

-- ----------------------------
-- Records of goods
-- ----------------------------
BEGIN;
INSERT INTO `goods` VALUES ('242', 'ThinkPad S2 2018 20L1A001', '13.3英寸 8代新品银色时尚', '2018-05-08', ' 20L1A001CD', 'admin/upimages/40.jpg', '0', '1', '1', '50', '5999', '6999', 'ThinkPad', '0'), ('241', 'Lenovo/联想 小新 潮5000轻薄便携学生游', 'i7处理器 轻薄便携大屏独显笔记本', '0000-00-00', '潮5000', 'admin/upimages/39.jpg', '12', '0', '1', '50', '4999', '6399', 'Lenovo/联想', '1'), ('240', 'Lenovo/联想 拯救者 R720-15IKBN', 'GTX 1050Ti 4G大屏游戏本', '2018-05-08', 'R720-15IKBN I5', 'admin/upimages/38.jpg', '3', '0', '1', '48', '5799', '6099', ' Lenovo/联想', '0'), ('239', 'Lenovo/联想 小新 潮7000-13 i5八', 'i5-8250U/8G/256G SSD', '0000-00-00', '潮7000-13 i5', 'admin/upimages/37.jpg', '2', '0', '0', '50', '5199', '5499', 'Lenovo/联想', '0'), ('243', 'ThinkPad X1 Carbon 20HRA0', '轻至1.13kg 薄至15.95mm', '2018-05-08', '20HRA01DCD', 'admin/upimages/41.jpg', '0', '1', '1', '46', '12399', '13299', 'ThinkPad', '0'), ('245', '小新 Air 15 15.6英寸超轻薄笔记本 星河', 'i5-8250U/Windows 10 家庭中文版/15.6英寸/8G/256G SSD/GeForce MX150 2G独显/星河银', '2018-05-16', 'i5-8250U', 'admin/upimages/43.jpg', '2', '0', '1', '50', '4999', '5388', '联想', '0'), ('247', '小新 Air 15 15.6英寸超轻薄笔记本', '', '2018-05-16', 'i5-8250U', 'admin/upimages/45.jpg', '2', '0', '1', '52', '5999', '6799', '联想', '0'), ('248', '天逸 310-14IKB 14.0英寸笔记本 黑色', '第七代Kabylake智能英特尔&#174; 酷睿&#8482; i5 处理器', '2018-05-16', '联想', 'admin/upimages/46.jpg', '2', '0', '0', '52', '5777', '6399', 'i7', '0');
COMMIT;

-- ----------------------------
-- Table structure for links
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`linkname`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL ,
`linkurl`  varchar(100) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=15

;

-- ----------------------------
-- Records of links
-- ----------------------------
BEGIN;
INSERT INTO `links` VALUES ('13', '联想官网1', 'https://www.lenovo.com.cn/'), ('14', '淘宝', 'https://www.taobao.com/');
COMMIT;

-- ----------------------------
-- Table structure for liuyan
-- ----------------------------
DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE `liuyan` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`userid`  int(4) NULL DEFAULT NULL ,
`title`  varchar(200) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`content`  text CHARACTER SET gbk COLLATE gbk_chinese_ci NULL ,
`time`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of liuyan
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`dingdanhao`  varchar(125) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`spc`  varchar(125) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`slc`  varchar(125) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`shouhuoren`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`sex`  varchar(2) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`dizhi`  varchar(125) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`youbian`  varchar(10) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`tel`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`email`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`shff`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`zfff`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`leaveword`  mediumtext CHARACTER SET gbk COLLATE gbk_chinese_ci NULL ,
`time`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`xiadanren`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`zt`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`total`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`liuyan`  text CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=106

;

-- ----------------------------
-- Records of orders
-- ----------------------------
BEGIN;
INSERT INTO `orders` VALUES ('104', '20180516023144', '242@', '1@', '谭一钱', '女', '湖南人文科技学院', '200012', '15702153435', '', '特快专递', '微信', null, '2018-05-16 02:31:44', 'admin', '已发货', '5999', '配件麻烦配好'), ('105', '2018051805133856', '243@', '1@', '都欣', '男', '湖南人文科技学院', '20012', '12345678901', '', '特快专递', '微信', null, '2018-05-18 05:13:39', '都欣', '已发货', '12399', '速度发货'), ('102', '2018032510554755', '237@', '1@', '都欣', '男', '上海浦东新区', '200120', '15702153435', '', '特快专递', '微信', null, '2018-03-25 10:55:47', 'duxin', '已发货', '2899', '尽快'), ('103', '201805512355555', '238@', '1@', '杜雅煊', '女', '湖南', '200120', '111111111111', '', '送货上门', '支付宝', null, '2018-05-5 12:35:55', 'duxin', '已发货', '1899', '速度');
COMMIT;

-- ----------------------------
-- Table structure for pingjia
-- ----------------------------
DROP TABLE IF EXISTS `pingjia`;
CREATE TABLE `pingjia` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`userid`  int(4) NULL DEFAULT NULL ,
`spid`  int(4) NULL DEFAULT NULL ,
`title`  varchar(200) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`content`  text CHARACTER SET gbk COLLATE gbk_chinese_ci NULL ,
`time`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NOT NULL DEFAULT '' ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=21

;

-- ----------------------------
-- Records of pingjia
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`typename`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=54

;

-- ----------------------------
-- Records of type
-- ----------------------------
BEGIN;
INSERT INTO `type` VALUES ('48', '高清游戏'), ('52', '游戏专属'), ('46', '商务办公'), ('49', '学生潮本'), ('50', '白领专用');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
`id`  int(4) NOT NULL AUTO_INCREMENT ,
`name`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`pwd`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`dongjie`  int(4) NULL DEFAULT NULL ,
`email`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`sfzh`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`tel`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`qq`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`ip`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`tishi`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`huida`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`dizhi`  varchar(100) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`youbian`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`regtime`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`lastlogintime`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`logincishu`  int(4) NULL DEFAULT NULL ,
`truename`  varchar(25) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
`pwd1`  varchar(50) CHARACTER SET gbk COLLATE gbk_chinese_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
AUTO_INCREMENT=57

;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES ('56', '都欣', 'e10adc3949ba59abbe56e057f20f883e', '0', '910049850@qq.com', '130984199502033456', '13119980288', '910049850', '127.0.0.1', '', '', '湖南人文科技', '111111', '2018-05-16', '2018-05-16', '1', '都欣', '123456');
COMMIT;

-- ----------------------------
-- Auto increment value for gonggao
-- ----------------------------
ALTER TABLE `gonggao` AUTO_INCREMENT=32;

-- ----------------------------
-- Auto increment value for goods
-- ----------------------------
ALTER TABLE `goods` AUTO_INCREMENT=249;

-- ----------------------------
-- Auto increment value for links
-- ----------------------------
ALTER TABLE `links` AUTO_INCREMENT=15;

-- ----------------------------
-- Auto increment value for liuyan
-- ----------------------------
ALTER TABLE `liuyan` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for orders
-- ----------------------------
ALTER TABLE `orders` AUTO_INCREMENT=106;

-- ----------------------------
-- Auto increment value for pingjia
-- ----------------------------
ALTER TABLE `pingjia` AUTO_INCREMENT=21;

-- ----------------------------
-- Auto increment value for type
-- ----------------------------
ALTER TABLE `type` AUTO_INCREMENT=54;

-- ----------------------------
-- Auto increment value for user
-- ----------------------------
ALTER TABLE `user` AUTO_INCREMENT=57;
