/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50727
 Source Host           : localhost:3306
 Source Schema         : zhaoshang

 Target Server Type    : MySQL
 Target Server Version : 50727
 File Encoding         : 65001

 Date: 25/10/2019 18:37:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for zs_admin
-- ----------------------------
DROP TABLE IF EXISTS `zs_admin`;
CREATE TABLE `zs_admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '昵称',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '密码盐',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '头像',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '电子邮箱',
  `loginfailure` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '失败次数',
  `logintime` int(10) NULL DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '登录IP',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `token` varchar(59) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'Session标识',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'normal' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '管理员表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_admin
-- ----------------------------
INSERT INTO `zs_admin` VALUES (1, 'admin', 'Admin', 'eff087d0fb317e7ae52e5355b8675e9d', '2d4adb', '/assets/img/avatar.png', 'admin@admin.com', 0, 1571995107, '127.0.0.1', 1492186163, 1571995107, 'c636016f-84e3-497b-acdd-d8af9c28c2cf', 'normal');

-- ----------------------------
-- Table structure for zs_admin_log
-- ----------------------------
DROP TABLE IF EXISTS `zs_admin_log`;
CREATE TABLE `zs_admin_log`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '管理员ID',
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '管理员名字',
  `url` varchar(1500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '操作页面',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '日志标题',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'IP',
  `useragent` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'User-Agent',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `name`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 599 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '管理员日志表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_admin_log
-- ----------------------------
INSERT INTO `zs_admin_log` VALUES (1, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php', '', '{\"url\":\"\\/admin.php\",\"__token__\":\"46a2739741e0dd44ddf86f1833ff7563\",\"username\":\"admin\",\"captcha\":\"nfmw\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570098026);
INSERT INTO `zs_admin_log` VALUES (2, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"3af5ac8c85368185813b91169124668c\",\"username\":\"admin\",\"captcha\":\"5btq\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570098032);
INSERT INTO `zs_admin_log` VALUES (3, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"5869a4287f215f115a7c7bf582498cb3\",\"username\":\"admin\",\"captcha\":\"fuem\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570154679);
INSERT INTO `zs_admin_log` VALUES (4, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fuser%2Frule%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/user\\/rule?ref=addtabs\",\"__token__\":\"61b91fa0311599e49077bc68a5b6bf03\",\"username\":\"admin\",\"captcha\":\"rxvb\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570183901);
INSERT INTO `zs_admin_log` VALUES (5, 1, 'admin', '/admin.php/addon/install', '插件管理 安装', '{\"name\":\"qrcode\",\"force\":\"0\",\"uid\":\"0\",\"token\":\"\",\"version\":\"1.0.3\",\"faversion\":\"1.0.0.20190930_beta\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184039);
INSERT INTO `zs_admin_log` VALUES (6, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,6,5,8,3,1\",\"name\":\"\\u4f1a\\u5458\\u9ed8\\u8ba4\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184278);
INSERT INTO `zs_admin_log` VALUES (7, 1, 'admin', '/admin.php/user/rule/edit/ids/1?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"1\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184367);
INSERT INTO `zs_admin_log` VALUES (8, 1, 'admin', '/admin.php/user/rule/edit/ids/1?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u7528\\u6237\\u4f1a\\u5458\",\"remark\":\"\",\"weigh\":\"1\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184396);
INSERT INTO `zs_admin_log` VALUES (9, 1, 'admin', '/admin.php/user/rule/edit/ids/3?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u6a21\\u5757\",\"remark\":\"\",\"weigh\":\"12\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184453);
INSERT INTO `zs_admin_log` VALUES (10, 1, 'admin', '/admin.php/user/rule/edit/ids/3?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"1\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u6a21\\u5757\",\"remark\":\"\",\"weigh\":\"12\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184514);
INSERT INTO `zs_admin_log` VALUES (11, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"index\\/user\\/index\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184542);
INSERT INTO `zs_admin_log` VALUES (12, 1, 'admin', '/admin.php/user/rule/del/ids/1', '会员管理 会员规则 删除', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184549);
INSERT INTO `zs_admin_log` VALUES (13, 1, 'admin', '/admin.php/user/rule/multi/ids/2', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"ismenu=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184811);
INSERT INTO `zs_admin_log` VALUES (14, 1, 'admin', '/admin.php/user/rule/multi/ids/4', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"4\",\"params\":\"ismenu=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184814);
INSERT INTO `zs_admin_log` VALUES (15, 1, 'admin', '/admin.php/user/rule/multi/ids/7', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"7\",\"params\":\"ismenu=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184885);
INSERT INTO `zs_admin_log` VALUES (16, 1, 'admin', '/admin.php/user/rule/multi/ids/2', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"ismenu=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184886);
INSERT INTO `zs_admin_log` VALUES (17, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570184928);
INSERT INTO `zs_admin_log` VALUES (18, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"7\",\"name\":\"index\\/user\\/index\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185009);
INSERT INTO `zs_admin_log` VALUES (19, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185040);
INSERT INTO `zs_admin_log` VALUES (20, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"7\",\"name\":\"index\\/user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185091);
INSERT INTO `zs_admin_log` VALUES (21, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/user\\/profile\",\"title\":\"\\u4e2a\\u4eba\\u8d44\\u6599\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185140);
INSERT INTO `zs_admin_log` VALUES (22, 1, 'admin', '/admin.php/user/rule/multi/ids/14', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"14\",\"params\":\"ismenu=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185144);
INSERT INTO `zs_admin_log` VALUES (23, 1, 'admin', '/admin.php/user/rule/edit/ids/14?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/user\\/profile\",\"title\":\"\\u4e2a\\u4eba\\u8d44\\u6599\",\"remark\":\"\",\"weigh\":\"14\",\"status\":\"normal\"},\"ids\":\"14\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185151);
INSERT INTO `zs_admin_log` VALUES (24, 1, 'admin', '/admin.php/user/rule/multi/ids/13', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"13\",\"params\":\"ismenu=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185158);
INSERT INTO `zs_admin_log` VALUES (25, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"b73f2218f3a78daeb22d35da89c0aea0\",\"row\":{\"categorytype\":\"{\\\"default\\\":\\\"Default\\\",\\\"page\\\":\\\"Page\\\",\\\"article\\\":\\\"Article\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185655);
INSERT INTO `zs_admin_log` VALUES (26, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"2269130f4507b32c111f689e4d06567a\",\"row\":{\"categorytype\":\"{\\\"default\\\":\\\"Default\\\",\\\"page\\\":\\\"Page\\\",\\\"article\\\":\\\"Article\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185683);
INSERT INTO `zs_admin_log` VALUES (27, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"3ed7825dd444f90f4c5cb69e7f96b863\",\"row\":{\"categorytype\":\"{\\\"default\\\":\\\"Default\\\",\\\"page\\\":\\\"Page\\\",\\\"article\\\":\\\"Article\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185699);
INSERT INTO `zs_admin_log` VALUES (28, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"4dbed9701d01debb963dabf250533072\",\"row\":{\"categorytype\":\"{\\\"default\\\":\\\"Default\\\",\\\"page\\\":\\\"Page\\\",\\\"article\\\":\\\"Article\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185776);
INSERT INTO `zs_admin_log` VALUES (29, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"746504ac47a8e2b09de4b35a6a916d1e\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"Article\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185820);
INSERT INTO `zs_admin_log` VALUES (30, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"746504ac47a8e2b09de4b35a6a916d1e\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185831);
INSERT INTO `zs_admin_log` VALUES (31, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"f282f67d69e044554bf0ff335641c92d\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185835);
INSERT INTO `zs_admin_log` VALUES (32, 1, 'admin', '/admin.php/category/del/ids/13,12,5,7,11,10,6,9,8,2,4,3,1', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"13,12,5,7,11,10,6,9,8,2,4,3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185887);
INSERT INTO `zs_admin_log` VALUES (33, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"e31b18445958950960b5f58b08fc93a7\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u8d44\\u8baf\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570185966);
INSERT INTO `zs_admin_log` VALUES (34, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"8c07ab8cafc46ab4aec4f103e764b519\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u8d44\\u8baf\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\",\\\"aa\\\":\\\"aa\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186098);
INSERT INTO `zs_admin_log` VALUES (35, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"11ad37267729edf31826f8fe902580dc\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u8d44\\u8baf\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186144);
INSERT INTO `zs_admin_log` VALUES (36, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186261);
INSERT INTO `zs_admin_log` VALUES (37, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"ee56dc111f1b4a671c822be9d5b2060f\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u6587\\u7ae0\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186299);
INSERT INTO `zs_admin_log` VALUES (38, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\",\"nickname\":\"\\u7f8e\\u5bb9\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186322);
INSERT INTO `zs_admin_log` VALUES (39, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"5ec8da297ae0f15ded1d849b1ab917a3\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u6587\\u7ae0\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\",\\\"cc\\\":\\\"cc\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186656);
INSERT INTO `zs_admin_log` VALUES (40, 1, 'admin', '/admin.php/category/del/ids/15', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"15\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186704);
INSERT INTO `zs_admin_log` VALUES (41, 1, 'admin', '/admin.php/category/del/ids/14', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"14\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570186708);
INSERT INTO `zs_admin_log` VALUES (42, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"fffda83b262c1a3dc5e1a436e25c1013\",\"username\":\"admin\",\"captcha\":\"vd56\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570414629);
INSERT INTO `zs_admin_log` VALUES (43, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"5bcad6f183937d42988a688b9c1954c1\",\"username\":\"admin\",\"captcha\":\"pcc8\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570414635);
INSERT INTO `zs_admin_log` VALUES (44, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"2d44b7430e5e3f799fd45d8b27211d6f\",\"username\":\"admin\",\"captcha\":\"eybz\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570414640);
INSERT INTO `zs_admin_log` VALUES (45, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570415171);
INSERT INTO `zs_admin_log` VALUES (46, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"1\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570415190);
INSERT INTO `zs_admin_log` VALUES (47, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u7279\\u8272\\u9910\\u996e\",\"nickname\":\"\\u7279\\u8272\\u9910\\u996e\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570415290);
INSERT INTO `zs_admin_log` VALUES (48, 1, 'admin', '/admin.php/category/edit/ids/2?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7279\\u8272\\u9910\\u996e\",\"nickname\":\"\\u7279\\u8272\\u9910\\u996e\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"2\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570415302);
INSERT INTO `zs_admin_log` VALUES (49, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570415338);
INSERT INTO `zs_admin_log` VALUES (50, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"nickname\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"flag\":[\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570420584);
INSERT INTO `zs_admin_log` VALUES (51, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"nickname\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"flag\":[\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570420619);
INSERT INTO `zs_admin_log` VALUES (52, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"4be9e71da7e75761b2692230eeaad0e8\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u6587\\u7ae0\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570421731);
INSERT INTO `zs_admin_log` VALUES (53, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"90c29dd44be0a9988fb40dd3404eb654\",\"username\":\"admin\",\"captcha\":\"zi42\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570428792);
INSERT INTO `zs_admin_log` VALUES (54, 1, 'admin', '/admin.php/category/edit/ids/3?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"3\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570429513);
INSERT INTO `zs_admin_log` VALUES (55, 1, 'admin', '/admin.php/category/edit/ids/2?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7279\\u8272\\u9910\\u996e\",\"nickname\":\"\\u7279\\u8272\\u9910\\u996e\",\"flag\":[\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"2\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570429522);
INSERT INTO `zs_admin_log` VALUES (56, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"1\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570429531);
INSERT INTO `zs_admin_log` VALUES (57, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"cb55463445c79300c1866f67c642796f\",\"username\":\"admin\",\"captcha\":\"jmjj\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570431249);
INSERT INTO `zs_admin_log` VALUES (58, 1, 'admin', '/admin.php/category/edit/ids/2?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7279\\u8272\\u9910\\u996e\",\"nickname\":\"\\u7279\\u8272\\u9910\\u996e\",\"flag\":[\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"2\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570431305);
INSERT INTO `zs_admin_log` VALUES (59, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"1\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570431338);
INSERT INTO `zs_admin_log` VALUES (60, 1, 'admin', '/admin.php/category/edit/ids/4?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"nickname\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"flag\":[\"nav\",\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"4\",\"status\":\"normal\"},\"ids\":\"4\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570431932);
INSERT INTO `zs_admin_log` VALUES (61, 1, 'admin', '/admin.php/category/edit/ids/4?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"nickname\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"flag\":[\"nav\",\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"4\",\"status\":\"normal\"},\"ids\":\"4\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570431957);
INSERT INTO `zs_admin_log` VALUES (62, 1, 'admin', '/admin.php/category/edit/ids/3?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"menu\",\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"3\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570432108);
INSERT INTO `zs_admin_log` VALUES (63, 1, 'admin', '/admin.php/category/edit/ids/2?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7279\\u8272\\u9910\\u996e\",\"nickname\":\"\\u7279\\u8272\\u9910\\u996e\",\"flag\":[\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"2\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570432601);
INSERT INTO `zs_admin_log` VALUES (64, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"1\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570432610);
INSERT INTO `zs_admin_log` VALUES (65, 1, 'admin', '/admin.php/category/edit/ids/3?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"3\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570433835);
INSERT INTO `zs_admin_log` VALUES (66, 1, 'admin', '/admin.php/category/edit/ids/3?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"menu\",\"recommend\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"3\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570433850);
INSERT INTO `zs_admin_log` VALUES (67, 1, 'admin', '/admin.php/category/edit/ids/3?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"3\",\"status\":\"normal\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570433880);
INSERT INTO `zs_admin_log` VALUES (68, 1, 'admin', '/admin.php/category/edit/ids/5?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"nickname\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"5\",\"status\":\"normal\",\"flag\":[\"\"]},\"ids\":\"5\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570434935);
INSERT INTO `zs_admin_log` VALUES (69, 1, 'admin', '/admin.php/category/edit/ids/5?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"nickname\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"flag\":[\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"5\",\"status\":\"normal\"},\"ids\":\"5\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570434945);
INSERT INTO `zs_admin_log` VALUES (70, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u4e2d\\u9910\",\"nickname\":\"\\u4e2d\\u9910\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570437117);
INSERT INTO `zs_admin_log` VALUES (71, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u897f\\u9910\",\"nickname\":\"\\u897f\\u9910\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570437138);
INSERT INTO `zs_admin_log` VALUES (72, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u8336\\u996e\",\"nickname\":\"\\u8336\\u996e\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570437169);
INSERT INTO `zs_admin_log` VALUES (73, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u5c0f\\u5403\",\"nickname\":\"\\u5c0f\\u5403\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570437184);
INSERT INTO `zs_admin_log` VALUES (74, 1, 'admin', '/admin.php/category/del/ids/3', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"3\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570440291);
INSERT INTO `zs_admin_log` VALUES (75, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"d6b4352e00fb580504ef0c09edf4db43\",\"username\":\"admin\",\"captcha\":\"dwma\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570443616);
INSERT INTO `zs_admin_log` VALUES (76, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570443653);
INSERT INTO `zs_admin_log` VALUES (77, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"d7f62700dce2a37787a8b7a294bfeffa\",\"username\":\"admin\",\"captcha\":\"tmdo\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570502610);
INSERT INTO `zs_admin_log` VALUES (78, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"51eeffaa3cee69e86825deab9d442fc5\",\"username\":\"admin\",\"captcha\":\"wamh\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570502618);
INSERT INTO `zs_admin_log` VALUES (79, 1, 'admin', '/admin.php/general.config/edit', '常规管理 系统配置 编辑', '{\"__token__\":\"40f3392824369d03d707f32d3a7094b1\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570503889);
INSERT INTO `zs_admin_log` VALUES (80, 1, 'admin', '/admin.php/auth/rule/edit/ids/6?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"97ba7faac26568691e477fc09de5c665\",\"row\":{\"ismenu\":\"1\",\"pid\":\"2\",\"name\":\"general\\/config\",\"title\":\"\\u540e\\u53f0\\u914d\\u7f6e\",\"icon\":\"fa fa-cog\",\"weigh\":\"60\",\"condition\":\"\",\"remark\":\"Config tips\",\"status\":\"normal\"},\"ids\":\"6\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504079);
INSERT INTO `zs_admin_log` VALUES (81, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504079);
INSERT INTO `zs_admin_log` VALUES (82, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"fb5a484fdab1a80d827aa5c095df99b7\",\"row\":{\"ismenu\":\"1\",\"pid\":\"2\",\"name\":\"general\\/home\",\"title\":\"\\u524d\\u53f0\\u914d\\u7f6e\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504153);
INSERT INTO `zs_admin_log` VALUES (83, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504153);
INSERT INTO `zs_admin_log` VALUES (84, 1, 'admin', '/admin.php/ajax/weigh', '', '{\"ids\":\"1,2,6,85,7,8,3,5,9,10,11,12,4,66,67,73,79\",\"changeid\":\"85\",\"pid\":\"2\",\"field\":\"weigh\",\"orderway\":\"desc\",\"table\":\"auth_rule\",\"pk\":\"id\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504188);
INSERT INTO `zs_admin_log` VALUES (85, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504188);
INSERT INTO `zs_admin_log` VALUES (86, 1, 'admin', '/admin.php/auth/rule/edit/ids/85?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"0888deddfc658cd8871d8603c8ff5d34\",\"row\":{\"ismenu\":\"1\",\"pid\":\"2\",\"name\":\"general\\/home\",\"title\":\"\\u524d\\u53f0\\u914d\\u7f6e\",\"icon\":\"fa fa-home\",\"weigh\":\"53\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"85\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504205);
INSERT INTO `zs_admin_log` VALUES (87, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570504205);
INSERT INTO `zs_admin_log` VALUES (88, 1, 'admin', '/admin.php/general.config/add', '常规管理 后台配置 添加', '{\"__token__\":\"ce72525ed323440d3ae831d99acfcf8e\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570507255);
INSERT INTO `zs_admin_log` VALUES (89, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"285186c4f1abe88bb1d218ed0f95276e\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570507283);
INSERT INTO `zs_admin_log` VALUES (90, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"ccf96859e25d305372cd7ea19bc440f1\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570507292);
INSERT INTO `zs_admin_log` VALUES (91, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fgeneral%2Fhome%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/general\\/home?ref=addtabs\",\"__token__\":\"0bf8ad339a28f15b8706f30c3b6e4237\",\"username\":\"admin\",\"captcha\":\"8u68\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570516460);
INSERT INTO `zs_admin_log` VALUES (92, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Fuser%2Fgroup%3Faddtabs%3D1', '', '{\"url\":\"\\/admin.php\\/user\\/group?addtabs=1\",\"__token__\":\"081ef626bdbbef38cca7f9bdf8ff86b0\",\"username\":\"admin\",\"captcha\":\"\\uff43\\uff48\\uff46\\uff52\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570520569);
INSERT INTO `zs_admin_log` VALUES (93, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fuser%2Fgroup%3Faddtabs%3D1', '登录', '{\"url\":\"\\/admin.php\\/user\\/group?addtabs=1\",\"__token__\":\"877f9a7fc5b097c9d9ffa0858f12190c\",\"username\":\"admin\",\"captcha\":\"bhu4\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570520574);
INSERT INTO `zs_admin_log` VALUES (94, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"9d3441b11e73e27088df88178ebb20e8\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570520678);
INSERT INTO `zs_admin_log` VALUES (95, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"c14ba99e429e4288e4c232f48c20fed7\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570520685);
INSERT INTO `zs_admin_log` VALUES (96, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"e7e94f684e85f482f37d50f43ca677e9\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521216);
INSERT INTO `zs_admin_log` VALUES (97, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"7aec23290619db6f22f3379aa170706f\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521223);
INSERT INTO `zs_admin_log` VALUES (98, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"075e0b30b1046c5c09962a1f56c0b36d\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521230);
INSERT INTO `zs_admin_log` VALUES (99, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"67a351ac50637028d478293dc811f189\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521244);
INSERT INTO `zs_admin_log` VALUES (100, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"76620826f6fc3b5fc3a7ac5ca36baa34\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521314);
INSERT INTO `zs_admin_log` VALUES (101, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"086a66433ec55492a6e20a231c6c1cd4\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521317);
INSERT INTO `zs_admin_log` VALUES (102, 1, 'admin', '/admin.php/general.home/edit', '', '{\"__token__\":\"03ea26110b922f0505a2249eddf0ac97\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521379);
INSERT INTO `zs_admin_log` VALUES (103, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"a47298b06b774fd8c920f5bea523ef57\",\"row\":{\"mail_type\":\"1\",\"mail_smtp_host\":\"smtp.qq.com\",\"mail_smtp_port\":\"465\",\"mail_smtp_user\":\"10000\",\"mail_smtp_pass\":\"password\",\"mail_verify_type\":\"2\",\"mail_from\":\"10000@qq.com\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521465);
INSERT INTO `zs_admin_log` VALUES (104, 1, 'admin', '/admin.php/auth/rule/edit/ids/85?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"015b698339bdddc9a8453d07389829a9\",\"row\":{\"ismenu\":\"1\",\"pid\":\"2\",\"name\":\"general\\/web\",\"title\":\"\\u524d\\u53f0\\u914d\\u7f6e\",\"icon\":\"fa fa-home\",\"weigh\":\"53\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"85\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521699);
INSERT INTO `zs_admin_log` VALUES (105, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521699);
INSERT INTO `zs_admin_log` VALUES (106, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"12dfe1a8b2847d9ee0492613780df2e5\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570521754);
INSERT INTO `zs_admin_log` VALUES (107, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"ee645d862f0cec4dbc30f430c542c5e5\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"status\":\"1\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570522860);
INSERT INTO `zs_admin_log` VALUES (108, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"b824a49b4b3474244dec125fb6e238ff\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525877);
INSERT INTO `zs_admin_log` VALUES (109, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"f62af4f7f06cdb1267c6e8f13b13dcfa\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525894);
INSERT INTO `zs_admin_log` VALUES (110, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"f62af4f7f06cdb1267c6e8f13b13dcfa\",\"row\":{\"mail_type\":\"1\",\"mail_smtp_host\":\"smtp.qq.com\",\"mail_smtp_port\":\"465\",\"mail_smtp_user\":\"10000\",\"mail_smtp_pass\":\"password\",\"mail_verify_type\":\"2\",\"mail_from\":\"10000@qq.com\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525897);
INSERT INTO `zs_admin_log` VALUES (111, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"f62af4f7f06cdb1267c6e8f13b13dcfa\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u6587\\u7ae0\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525902);
INSERT INTO `zs_admin_log` VALUES (112, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"afd4a190b8313232cc338564650154d4\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525920);
INSERT INTO `zs_admin_log` VALUES (113, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"afd4a190b8313232cc338564650154d4\",\"row\":{\"categorytype\":\"{\\\"article\\\":\\\"\\u6587\\u7ae0\\\",\\\"project\\\":\\\"\\u9879\\u76ee\\\"}\",\"configgroup\":\"{\\\"basic\\\":\\\"Basic\\\",\\\"email\\\":\\\"Email\\\",\\\"dictionary\\\":\\\"Dictionary\\\",\\\"user\\\":\\\"User\\\",\\\"example\\\":\\\"Example\\\"}\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525925);
INSERT INTO `zs_admin_log` VALUES (114, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"afd4a190b8313232cc338564650154d4\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525932);
INSERT INTO `zs_admin_log` VALUES (115, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"d30e437b2159cec5311b12e0ddc2652d\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525946);
INSERT INTO `zs_admin_log` VALUES (116, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"74dcbbc2a4367fe63d437d2439c8ce45\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525951);
INSERT INTO `zs_admin_log` VALUES (117, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"6f96a893185c2c29a4ca5003553ad3f9\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525952);
INSERT INTO `zs_admin_log` VALUES (118, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"4bb33c5578dd785ca3a21f69613c4513\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525953);
INSERT INTO `zs_admin_log` VALUES (119, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"d30e437b2159cec5311b12e0ddc2652d\",\"row\":{\"mail_type\":\"1\",\"mail_smtp_host\":\"smtp.qq.com\",\"mail_smtp_port\":\"465\",\"mail_smtp_user\":\"10000\",\"mail_smtp_pass\":\"password\",\"mail_verify_type\":\"2\",\"mail_from\":\"10000@qq.com\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525956);
INSERT INTO `zs_admin_log` VALUES (120, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"f66d11807f3d8a461df253be06a3a477\",\"row\":{\"mail_type\":\"1\",\"mail_smtp_host\":\"smtp.qq.com\",\"mail_smtp_port\":\"465\",\"mail_smtp_user\":\"10000\",\"mail_smtp_pass\":\"password\",\"mail_verify_type\":\"2\",\"mail_from\":\"10000@qq.com\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525957);
INSERT INTO `zs_admin_log` VALUES (121, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"aa5ca58a6d432d724a041c0c5e6a2a5e\",\"row\":{\"mail_type\":\"1\",\"mail_smtp_host\":\"smtp.qq.com\",\"mail_smtp_port\":\"465\",\"mail_smtp_user\":\"10000\",\"mail_smtp_pass\":\"password\",\"mail_verify_type\":\"2\",\"mail_from\":\"10000@qq.com\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525960);
INSERT INTO `zs_admin_log` VALUES (122, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"50244604cc887eb16d62a5540e3c44ca\",\"row\":{\"mail_type\":\"1\",\"mail_smtp_host\":\"smtp.qq.com\",\"mail_smtp_port\":\"465\",\"mail_smtp_user\":\"10000\",\"mail_smtp_pass\":\"password\",\"mail_verify_type\":\"2\",\"mail_from\":\"10000@qq.com\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570525966);
INSERT INTO `zs_admin_log` VALUES (123, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"909bd1655d6e03203d58cdde82323a8b\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526012);
INSERT INTO `zs_admin_log` VALUES (124, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"4deeb47884ce0bbb3171da1be40ddce8\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526373);
INSERT INTO `zs_admin_log` VALUES (125, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"ac16425c1d3d91b79d2b25bfed86d798\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526391);
INSERT INTO `zs_admin_log` VALUES (126, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"1b79475ac093c6154f996b1bbf469a95\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526424);
INSERT INTO `zs_admin_log` VALUES (127, 1, 'admin', '/admin.php/general.config/edit', '常规管理 后台配置 编辑', '{\"__token__\":\"d6698715d403977498f7f415b97c4484\",\"row\":{\"name\":\"\\u62db\\u5546\\u7f51\",\"beian\":\"\",\"cdnurl\":\"\",\"version\":\"1.0.1\",\"timezone\":\"Asia\\/Shanghai\",\"forbiddenip\":\"\",\"languages\":\"{\\\"backend\\\":\\\"zh-cn\\\",\\\"frontend\\\":\\\"zh-cn\\\"}\",\"fixedpage\":\"dashboard\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526523);
INSERT INTO `zs_admin_log` VALUES (128, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"90309b6d5ce3c9704749fd22cadb105d\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526567);
INSERT INTO `zs_admin_log` VALUES (129, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"0c0738432ec851a6fe9b4bfc6ee63371\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_black_ip\":\"aa\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526574);
INSERT INTO `zs_admin_log` VALUES (130, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"90309b6d5ce3c9704749fd22cadb105d\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_logo\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_beian\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_icp\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_copyright\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_email\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_phone\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_qq\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_baidu\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526701);
INSERT INTO `zs_admin_log` VALUES (131, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"6b3a54b949f3b858674b0b197da3aed3\",\"row\":{\"web_name\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_logo\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_beian\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_icp\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_copyright\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_email\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_phone\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_qq\":\"\\u7f51\\u7ad9\\u540d\\u79f0\",\"web_baidu\":\"\\u7f51\\u7ad9\\u540d\\u79f0\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570526705);
INSERT INTO `zs_admin_log` VALUES (132, 1, 'admin', '/admin.php/general.web/tdk', '', '{\"__token__\":\"e7ba83e0b8d879553f90c041ccb0fc52\",\"row\":{\"1\":{\"title\":\"\\u9996\\u9875\\uff11\",\"id\":\"1\",\"keyword\":\"\\u9996\\u9875\",\"description\":\"\\u9996\\u9875\"},\"2\":{\"title\":\"\\u8d44\\u8baf\",\"id\":\"2\",\"keyword\":\"\\u8d44\\u8baf\",\"description\":\"\\u8d44\\u8baf\"},\"3\":{\"title\":\"\\u8d44\\u8baf\\u5217\\u8868\",\"id\":\"3\",\"keyword\":\"\\u8d44\\u8baf\\u5217\\u8868\",\"description\":\"\\u8d44\\u8baf\\u5217\\u8868\"},\"4\":{\"title\":\"\\u9879\\u76ee\\u5217\\u8868\",\"id\":\"4\",\"keyword\":\"\\u9879\\u76ee\\u5217\\u8868\",\"description\":\"\\u9879\\u76ee\\u5217\\u8868\"},\"5\":{\"title\":\"\\u5e2e\\u52a9\",\"id\":\"5\",\"keyword\":\"\\u5e2e\\u52a9\",\"description\":\"\\u5e2e\\u52a9\"},\"6\":{\"title\":\"\\u6392\\u884c\",\"id\":\"6\",\"keyword\":\"\\u6392\\u884c\",\"description\":\"\\u6392\\u884c\"}}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570529568);
INSERT INTO `zs_admin_log` VALUES (133, 1, 'admin', '/admin.php/general.web/tdk', '', '{\"__token__\":\"a7e6ee21d6ffc59a6751173df7856cc7\",\"row\":{\"1\":{\"title\":\"\\u9996\\u9875\\uff11\",\"id\":\"1\",\"keyword\":\"\\u9996\\u9875\",\"description\":\"\\u9996\\u9875\"},\"2\":{\"title\":\"\\u8d44\\u8baf\",\"id\":\"2\",\"keyword\":\"\\u8d44\\u8baf\",\"description\":\"\\u8d44\\u8baf\"},\"3\":{\"title\":\"\\u8d44\\u8baf\\u5217\\u8868\",\"id\":\"3\",\"keyword\":\"\\u8d44\\u8baf\\u5217\\u8868\",\"description\":\"\\u8d44\\u8baf\\u5217\\u8868\"},\"4\":{\"title\":\"\\u9879\\u76ee\\u5217\\u8868\",\"id\":\"4\",\"keyword\":\"\\u9879\\u76ee\\u5217\\u8868\",\"description\":\"\\u9879\\u76ee\\u5217\\u8868\"},\"5\":{\"title\":\"\\u5e2e\\u52a9\",\"id\":\"5\",\"keyword\":\"\\u5e2e\\u52a9\",\"description\":\"\\u5e2e\\u52a9\"},\"6\":{\"title\":\"\\u6392\\u884c\",\"id\":\"6\",\"keyword\":\"\\u6392\\u884c\",\"description\":\"\\u6392\\u884c\"}}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570529712);
INSERT INTO `zs_admin_log` VALUES (134, 1, 'admin', '/admin.php/ajax/upload', '', '{\"name\":\"2019-10-07 14-41-52 \\u7684\\u5c4f\\u5e55\\u622a\\u56fe.png\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570530367);
INSERT INTO `zs_admin_log` VALUES (135, 1, 'admin', '/admin.php/general/attachment/del/ids/2', '常规管理 附件管理 删除', '{\"action\":\"del\",\"ids\":\"2\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570530391);
INSERT INTO `zs_admin_log` VALUES (136, 1, 'admin', '/admin.php/ajax/upload', '', '{\"name\":\"\\u5c4f\\u5e55\\u622a\\u56fe.png\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570530790);
INSERT INTO `zs_admin_log` VALUES (137, 1, 'admin', '/admin.php/general/attachment/del/ids/3', '常规管理 附件管理 删除', '{\"action\":\"del\",\"ids\":\"3\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570531015);
INSERT INTO `zs_admin_log` VALUES (138, 1, 'admin', '/admin.php/ajax/upload', '', '{\"name\":\"\\u5c4f\\u5e55\\u622a\\u56fe.png\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570531024);
INSERT INTO `zs_admin_log` VALUES (139, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"10383ee75c5f835e4b1cd339088dfba0\",\"row\":{\"web_name\":\"\\u62db\\u5546\\u7f51\\u7ad9\",\"web_logo\":\"\\/uploads\\/20191008\\/70579d8bb412a6aa768564a881dca806.png\",\"web_beian\":\"\\u7ca4\\u516c\\u5b89\\u7f51\\u5907123456789-0\\u53f7\",\"web_icp\":\"\\u7ca4ICP\\u5907123456789-0\\u53f7\",\"web_copyright\":\"\\u6728\\u5e06\\u79d1\\u6280\",\"web_email\":\"123@qq.com\",\"web_phone\":\"17819180343\",\"web_qq\":\"572779486\",\"web_baidu\":\"<script> var _hmt = _hmt || []; (function() { var hm = document.createElement(\\\"script\\\"); hm.src = \\\"\\/\\/hm.baidu.com\\/hm.js?XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX\\\"; var s = document.getElementsByTagName(\\\"script\\\")[0]; s.parentNode.insertBefore(hm, s); })(); <\\/script>\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570531149);
INSERT INTO `zs_admin_log` VALUES (140, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"a5147824513d13227899d53444541fdf\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u7ef4\\u62a4\\u5347\\u7ea7\\u4e2d\\u3002\\u3002\\u3002\\u3002\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u7ef4\\u62a4\\u5347\\u7ea7\\u4e2d\\u3002\\u3002\\u3002\",\"web_black_ip\":\"\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570531308);
INSERT INTO `zs_admin_log` VALUES (141, 1, 'admin', '/admin.php/general.web/edit', '', '{\"__token__\":\"23d6c13a95a80784f63a2aa8bdb1d1c6\",\"row\":{\"web_status\":\"1\",\"web_status_reason\":\"\\u7f51\\u7ad9\\u7ef4\\u62a4\\u5347\\u7ea7\\u4e2d\\u3002\\u3002\\u3002\\u3002\",\"web_register\":\"1\",\"web_register_reason\":\"\\u7f51\\u7ad9\\u7ef4\\u62a4\\u5347\\u7ea7\\u4e2d\\u3002\\u3002\\u3002\",\"web_black_ip\":\"\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570531310);
INSERT INTO `zs_admin_log` VALUES (142, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fgeneral%2Fweb%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/general\\/web?ref=addtabs\",\"__token__\":\"ba3f8547bd0fc6fad62a11a8d8573a5a\",\"username\":\"admin\",\"captcha\":\"tlyn\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570587629);
INSERT INTO `zs_admin_log` VALUES (143, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fcategory%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/category?ref=addtabs\",\"__token__\":\"57f192b62e90e8f1852fbee0e581b88c\",\"username\":\"admin\",\"captcha\":\"8zbe\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570590675);
INSERT INTO `zs_admin_log` VALUES (144, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570591002);
INSERT INTO `zs_admin_log` VALUES (145, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570591003);
INSERT INTO `zs_admin_log` VALUES (146, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570591141);
INSERT INTO `zs_admin_log` VALUES (147, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570591142);
INSERT INTO `zs_admin_log` VALUES (148, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570593999);
INSERT INTO `zs_admin_log` VALUES (149, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570594002);
INSERT INTO `zs_admin_log` VALUES (150, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570594002);
INSERT INTO `zs_admin_log` VALUES (151, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570594036);
INSERT INTO `zs_admin_log` VALUES (152, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570594037);
INSERT INTO `zs_admin_log` VALUES (153, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570594038);
INSERT INTO `zs_admin_log` VALUES (154, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570594039);
INSERT INTO `zs_admin_log` VALUES (155, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Findex%2Flogout', '', '{\"url\":\"\\/admin.php\\/index\\/logout\",\"__token__\":\"88adb83a1638d9bb90774ff046cf85e8\",\"username\":\"admin\",\"captcha\":\"\\uff15\\uff17\\uff51\\uff52\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602450);
INSERT INTO `zs_admin_log` VALUES (156, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Findex%2Flogout', '', '{\"url\":\"\\/admin.php\\/index\\/logout\",\"__token__\":\"b3ff560730e58bbdf743f74854a99c2b\",\"username\":\"admin\",\"captcha\":\"kx65\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602455);
INSERT INTO `zs_admin_log` VALUES (157, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php%2Findex%2Flogout', '', '{\"url\":\"\\/admin.php\\/index\\/logout\",\"__token__\":\"6a7ad83a65c8e5300e213e469195fbdd\",\"username\":\"admin\",\"captcha\":\"6me2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602461);
INSERT INTO `zs_admin_log` VALUES (158, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Findex%2Flogout', '登录', '{\"url\":\"\\/admin.php\\/index\\/logout\",\"__token__\":\"e8dc54e6f0dec48d41a76cef5d972471\",\"username\":\"admin\",\"captcha\":\"2c34\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602467);
INSERT INTO `zs_admin_log` VALUES (159, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"2226fe79b945abad3a48c6ce0811135e\",\"username\":\"admin\",\"captcha\":\"bfbn\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602478);
INSERT INTO `zs_admin_log` VALUES (160, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602657);
INSERT INTO `zs_admin_log` VALUES (161, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12,13\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12,13\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602657);
INSERT INTO `zs_admin_log` VALUES (162, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602758);
INSERT INTO `zs_admin_log` VALUES (163, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602761);
INSERT INTO `zs_admin_log` VALUES (164, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602764);
INSERT INTO `zs_admin_log` VALUES (165, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602765);
INSERT INTO `zs_admin_log` VALUES (166, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602766);
INSERT INTO `zs_admin_log` VALUES (167, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602766);
INSERT INTO `zs_admin_log` VALUES (168, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602766);
INSERT INTO `zs_admin_log` VALUES (169, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602768);
INSERT INTO `zs_admin_log` VALUES (170, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602768);
INSERT INTO `zs_admin_log` VALUES (171, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602769);
INSERT INTO `zs_admin_log` VALUES (172, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602769);
INSERT INTO `zs_admin_log` VALUES (173, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602770);
INSERT INTO `zs_admin_log` VALUES (174, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602770);
INSERT INTO `zs_admin_log` VALUES (175, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602770);
INSERT INTO `zs_admin_log` VALUES (176, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602770);
INSERT INTO `zs_admin_log` VALUES (177, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602772);
INSERT INTO `zs_admin_log` VALUES (178, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602772);
INSERT INTO `zs_admin_log` VALUES (179, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602774);
INSERT INTO `zs_admin_log` VALUES (180, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602774);
INSERT INTO `zs_admin_log` VALUES (181, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602775);
INSERT INTO `zs_admin_log` VALUES (182, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602775);
INSERT INTO `zs_admin_log` VALUES (183, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602776);
INSERT INTO `zs_admin_log` VALUES (184, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602776);
INSERT INTO `zs_admin_log` VALUES (185, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602776);
INSERT INTO `zs_admin_log` VALUES (186, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602776);
INSERT INTO `zs_admin_log` VALUES (187, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602776);
INSERT INTO `zs_admin_log` VALUES (188, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602776);
INSERT INTO `zs_admin_log` VALUES (189, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (190, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (191, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (192, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (193, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (194, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (195, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (196, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602777);
INSERT INTO `zs_admin_log` VALUES (197, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602778);
INSERT INTO `zs_admin_log` VALUES (198, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602778);
INSERT INTO `zs_admin_log` VALUES (199, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602786);
INSERT INTO `zs_admin_log` VALUES (200, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570602787);
INSERT INTO `zs_admin_log` VALUES (201, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"712f6d43583d423f12be479ae3cf2af6\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"project\",\"title\":\"\\u9879\\u76ee\\u7ba1\\u7406\",\"icon\":\"fa fa-database\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570603257);
INSERT INTO `zs_admin_log` VALUES (202, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570603257);
INSERT INTO `zs_admin_log` VALUES (203, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604048);
INSERT INTO `zs_admin_log` VALUES (204, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12,13\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12,13\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604048);
INSERT INTO `zs_admin_log` VALUES (205, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604489);
INSERT INTO `zs_admin_log` VALUES (206, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12,13\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12,13\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604489);
INSERT INTO `zs_admin_log` VALUES (207, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604509);
INSERT INTO `zs_admin_log` VALUES (208, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12,13\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12,13\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604509);
INSERT INTO `zs_admin_log` VALUES (209, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604545);
INSERT INTO `zs_admin_log` VALUES (210, 1, 'admin', '/admin.php/category/selectpage', '', '{\"searchTable\":\"tbl\",\"searchKey\":\"id\",\"searchValue\":\"12,13\",\"orderBy\":[[\"name\",\"ASC\"]],\"showField\":\"name\",\"keyField\":\"id\",\"keyValue\":\"12,13\",\"searchField\":[\"name\"]}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570604545);
INSERT INTO `zs_admin_log` VALUES (211, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605683);
INSERT INTO `zs_admin_log` VALUES (212, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605684);
INSERT INTO `zs_admin_log` VALUES (213, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605685);
INSERT INTO `zs_admin_log` VALUES (214, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605697);
INSERT INTO `zs_admin_log` VALUES (215, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605710);
INSERT INTO `zs_admin_log` VALUES (216, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605714);
INSERT INTO `zs_admin_log` VALUES (217, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605715);
INSERT INTO `zs_admin_log` VALUES (218, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605716);
INSERT INTO `zs_admin_log` VALUES (219, 1, 'admin', '/admin.php/test/multi/ids/1', '测试管理 批量更新', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605722);
INSERT INTO `zs_admin_log` VALUES (220, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605952);
INSERT INTO `zs_admin_log` VALUES (221, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570605955);
INSERT INTO `zs_admin_log` VALUES (222, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570606435);
INSERT INTO `zs_admin_log` VALUES (223, 1, 'admin', '/admin.php/category/selectpage', '', '{\"q_word\":[\"\"],\"pageNumber\":\"1\",\"pageSize\":\"10\",\"andOr\":\"AND\",\"orderBy\":[[\"name\",\"ASC\"]],\"searchTable\":\"tbl\",\"showField\":\"name\",\"keyField\":\"id\",\"searchField\":[\"name\"],\"name\":\"\",\"custom\":{\"type\":\"test\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570606438);
INSERT INTO `zs_admin_log` VALUES (224, 1, 'admin', '/admin.php/ajax/upload', '', '{\"name\":\"\\u5c4f\\u5e55\\u622a\\u56fe.png\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570608548);
INSERT INTO `zs_admin_log` VALUES (225, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"pid\":\"3\",\"flag\":[\"index\",\"3\"],\"name\":\"\\u6b23\\u6b23\\u5976\\u8336\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"prouse\":\"\\u597d\\u559d\",\"content\":\"\\u597d\\u559d\",\"city\":\"\\u6e56\\u5357\\u7701\\/\\u90b5\\u9633\\u5e02\\/\\u90b5\\u4e1c\\u53bf\",\"views\":\"1110\",\"weigh\":\"-6\",\"switch\":\"1\",\"title\":\"\\u5976\\u8336\",\"keywords\":\"\\u5976\\u8336\",\"description\":\"\\u5976\\u8336\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570609079);
INSERT INTO `zs_admin_log` VALUES (226, 1, 'admin', '/admin.php/project/edit/ids/2?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"8\",\"flag\":[\"hot\"],\"title\":\"\\u5976\\u8336\",\"content\":\"\\u597d\\u559d\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"keywords\":\"\\u5976\\u8336\",\"description\":\"\\u5976\\u8336\",\"city\":\"\\u6e56\\u5357\\u7701\\/\\u90b5\\u9633\\u5e02\\/\\u90b5\\u4e1c\\u53bf\",\"price\":\"4\",\"views\":\"1110\",\"weigh\":\"2\",\"switch\":\"0\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570609986);
INSERT INTO `zs_admin_log` VALUES (227, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570609989);
INSERT INTO `zs_admin_log` VALUES (228, 1, 'admin', '/admin.php/project/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570609991);
INSERT INTO `zs_admin_log` VALUES (229, 1, 'admin', '/admin.php/project/edit/ids/2?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"8\",\"flag\":[\"hot\"],\"title\":\"\\u5976\\u8336\",\"content\":\"\\u597d\\u559d\\uff10\\uff10\\uff10\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"keywords\":\"\\u5976\\u8336\",\"description\":\"\\u5976\\u8336\",\"city\":\"\\u6e56\\u5357\\u7701\\/\\u90b5\\u9633\\u5e02\\/\\u90b5\\u4e1c\\u53bf\",\"price\":\"4\",\"views\":\"1110\",\"weigh\":\"2\",\"switch\":\"1\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570610002);
INSERT INTO `zs_admin_log` VALUES (230, 1, 'admin', '/admin.php/project/del/ids/1', '', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570610085);
INSERT INTO `zs_admin_log` VALUES (231, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570610091);
INSERT INTO `zs_admin_log` VALUES (232, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611697);
INSERT INTO `zs_admin_log` VALUES (233, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611697);
INSERT INTO `zs_admin_log` VALUES (234, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611847);
INSERT INTO `zs_admin_log` VALUES (235, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611848);
INSERT INTO `zs_admin_log` VALUES (236, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611848);
INSERT INTO `zs_admin_log` VALUES (237, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611849);
INSERT INTO `zs_admin_log` VALUES (238, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611850);
INSERT INTO `zs_admin_log` VALUES (239, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570611948);
INSERT INTO `zs_admin_log` VALUES (240, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612039);
INSERT INTO `zs_admin_log` VALUES (241, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612046);
INSERT INTO `zs_admin_log` VALUES (242, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612064);
INSERT INTO `zs_admin_log` VALUES (243, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612071);
INSERT INTO `zs_admin_log` VALUES (244, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612221);
INSERT INTO `zs_admin_log` VALUES (245, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612341);
INSERT INTO `zs_admin_log` VALUES (246, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612413);
INSERT INTO `zs_admin_log` VALUES (247, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612417);
INSERT INTO `zs_admin_log` VALUES (248, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612546);
INSERT INTO `zs_admin_log` VALUES (249, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612549);
INSERT INTO `zs_admin_log` VALUES (250, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612550);
INSERT INTO `zs_admin_log` VALUES (251, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612622);
INSERT INTO `zs_admin_log` VALUES (252, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612685);
INSERT INTO `zs_admin_log` VALUES (253, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612687);
INSERT INTO `zs_admin_log` VALUES (254, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612716);
INSERT INTO `zs_admin_log` VALUES (255, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612725);
INSERT INTO `zs_admin_log` VALUES (256, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612726);
INSERT INTO `zs_admin_log` VALUES (257, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612726);
INSERT INTO `zs_admin_log` VALUES (258, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612728);
INSERT INTO `zs_admin_log` VALUES (259, 1, 'admin', '/admin.php/project/edit/ids/2?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"8\",\"flag\":[\"hot\"],\"title\":\"\\u5976\\u8336\",\"content\":\"\\u597d\\u559d\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"keywords\":\"\\u5976\\u8336\",\"description\":\"\\u5976\\u8336\",\"city\":\"\\u6e56\\u5357\\u7701\\/\\u90b5\\u9633\\u5e02\\/\\u90b5\\u4e1c\\u53bf\",\"price\":\"4\",\"views\":\"1110\",\"weigh\":\"2\",\"switch\":\"1\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612785);
INSERT INTO `zs_admin_log` VALUES (260, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"\\u251c \\u5c0f\\u5403\",\"flag\":[\"index\"],\"name\":\"aaa\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"prouse\":\"a\",\"content\":\"aaa\",\"city\":\"\\u6cb3\\u5317\\u7701\\/\\u79e6\\u7687\\u5c9b\\u5e02\\/\\u5317\\u6234\\u6cb3\\u533a\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"title\":\"a\",\"keywords\":\"a\",\"description\":\"a\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612979);
INSERT INTO `zs_admin_log` VALUES (261, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"\\u251c \\u5c0f\\u5403\",\"flag\":[\"index\"],\"name\":\"aaa\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"prouse\":\"a\",\"content\":\"aaa\",\"city\":\"\\u6cb3\\u5317\\u7701\\/\\u79e6\\u7687\\u5c9b\\u5e02\\/\\u5317\\u6234\\u6cb3\\u533a\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"title\":\"a\",\"keywords\":\"a\",\"description\":\"a\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570612982);
INSERT INTO `zs_admin_log` VALUES (262, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"vo.id\",\"flag\":[\"index\"],\"name\":\"a\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"prouse\":\"a\",\"content\":\"a\",\"city\":\"\\u5317\\u4eac\\/\\u5317\\u4eac\\u5e02\\/\\u897f\\u57ce\\u533a\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"title\":\"q\",\"keywords\":\"qq\",\"description\":\"q\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613062);
INSERT INTO `zs_admin_log` VALUES (263, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"vo.id\",\"flag\":[\"index\"],\"name\":\"a\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"prouse\":\"a\",\"content\":\"a\",\"city\":\"\\u5317\\u4eac\\/\\u5317\\u4eac\\u5e02\\/\\u897f\\u57ce\\u533a\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"title\":\"q\",\"keywords\":\"qq\",\"description\":\"q\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613071);
INSERT INTO `zs_admin_log` VALUES (264, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"9\",\"flag\":[\"index\"],\"name\":\"qqq\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"prouse\":\"qqqqqqqq\",\"content\":\"q\",\"city\":\"\\u5317\\u4eac\\/\\u5317\\u4eac\\u5e02\\/\\u4e1c\\u57ce\\u533a\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"title\":\"q\",\"keywords\":\"q\",\"description\":\"q\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613181);
INSERT INTO `zs_admin_log` VALUES (265, 1, 'admin', '/admin.php/ajax/weigh', '', '{\"ids\":\"2,3\",\"changeid\":\"2\",\"pid\":\"\",\"field\":\"weigh\",\"orderway\":\"desc\",\"table\":\"project\",\"pk\":\"id\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613189);
INSERT INTO `zs_admin_log` VALUES (266, 1, 'admin', '/admin.php/project/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613783);
INSERT INTO `zs_admin_log` VALUES (267, 1, 'admin', '/admin.php/project/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613784);
INSERT INTO `zs_admin_log` VALUES (268, 1, 'admin', '/admin.php/test/del/ids/1', '测试管理 删除', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613851);
INSERT INTO `zs_admin_log` VALUES (269, 1, 'admin', '/admin.php/test/restore/ids/1', '测试管理 还原', '{\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613868);
INSERT INTO `zs_admin_log` VALUES (270, 1, 'admin', '/admin.php/project/del/ids/3', '', '{\"action\":\"del\",\"ids\":\"3\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570613877);
INSERT INTO `zs_admin_log` VALUES (271, 1, 'admin', '/admin.php/test/del/ids/1', '测试管理 删除', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614013);
INSERT INTO `zs_admin_log` VALUES (272, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614033);
INSERT INTO `zs_admin_log` VALUES (273, 1, 'admin', '/admin.php/test/del/ids/1', '测试管理 删除', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614194);
INSERT INTO `zs_admin_log` VALUES (274, 1, 'admin', '/admin.php/test/restore/ids/1', '测试管理 还原', '{\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614214);
INSERT INTO `zs_admin_log` VALUES (275, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614328);
INSERT INTO `zs_admin_log` VALUES (276, 1, 'admin', '/admin.php/test/del/ids/1', '测试管理 删除', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614655);
INSERT INTO `zs_admin_log` VALUES (277, 1, 'admin', '/admin.php/test/restore/ids/1', '测试管理 还原', '{\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614665);
INSERT INTO `zs_admin_log` VALUES (278, 1, 'admin', '/admin.php/test/destroy', '测试管理 真实删除', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614766);
INSERT INTO `zs_admin_log` VALUES (279, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"2d82555218fd2c8a920d873fdcd84b37\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"project\\/edit\",\"title\":\"\\u4fee\\u6539\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614858);
INSERT INTO `zs_admin_log` VALUES (280, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"355a8008ebe60af434cfb4499c2da464\",\"row\":{\"ismenu\":\"0\",\"pid\":\"95\",\"name\":\"project\\/edit\",\"title\":\"\\u4fee\\u6539\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614864);
INSERT INTO `zs_admin_log` VALUES (281, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614864);
INSERT INTO `zs_admin_log` VALUES (282, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"3eabe2bf230d503396dff42d448d0b9c\",\"row\":{\"ismenu\":\"0\",\"pid\":\"95\",\"name\":\"project\\/del\",\"title\":\"\\u6c38\\u4e45\\u5220\\u9664\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614892);
INSERT INTO `zs_admin_log` VALUES (283, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614892);
INSERT INTO `zs_admin_log` VALUES (284, 1, 'admin', '/admin.php/auth/rule/edit/ids/97?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"a032ba955f334c1627b4b29164666d1a\",\"row\":{\"ismenu\":\"0\",\"pid\":\"95\",\"name\":\"project\\/del\",\"title\":\"\\u5220\\u9664\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"97\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614922);
INSERT INTO `zs_admin_log` VALUES (285, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614922);
INSERT INTO `zs_admin_log` VALUES (286, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"e956bf8fd73949352c91e4b1441af54f\",\"row\":{\"ismenu\":\"0\",\"pid\":\"95\",\"name\":\"project\\/destroy\",\"title\":\"\\u6c38\\u4e45\\u5220\\u9664\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614947);
INSERT INTO `zs_admin_log` VALUES (287, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614948);
INSERT INTO `zs_admin_log` VALUES (288, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"1e608ef0fe694e294551d190cc32c836\",\"row\":{\"ismenu\":\"0\",\"pid\":\"95\",\"name\":\"project\\/restore\",\"title\":\"\\u8fd8\\u539f\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614991);
INSERT INTO `zs_admin_log` VALUES (289, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570614991);
INSERT INTO `zs_admin_log` VALUES (290, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"d04019b9e5687bb11950101348350531\",\"row\":{\"ismenu\":\"0\",\"pid\":\"95\",\"name\":\"project\\/recyclebin\",\"title\":\"\\u56de\\u6536\\u7ad9\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615050);
INSERT INTO `zs_admin_log` VALUES (291, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615050);
INSERT INTO `zs_admin_log` VALUES (292, 1, 'admin', '/admin.php/auth/group/roletree', '', '{\"id\":\"2\",\"pid\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615055);
INSERT INTO `zs_admin_log` VALUES (293, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"5b2641810c7da34dbd2c6868748cb6bf\",\"row\":{\"ismenu\":\"0\",\"pid\":\"85\",\"name\":\"general\\/web\\/edit\",\"title\":\"\\u66f4\\u65b0\\u914d\\u7f6e\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615161);
INSERT INTO `zs_admin_log` VALUES (294, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615161);
INSERT INTO `zs_admin_log` VALUES (295, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"376d8770c988f9719972a5a26ba9d8d4\",\"row\":{\"ismenu\":\"0\",\"pid\":\"85\",\"name\":\"general\\/web\\/tdk\",\"title\":\"TDK\",\"icon\":\"fa fa-circle-o\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615189);
INSERT INTO `zs_admin_log` VALUES (296, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615189);
INSERT INTO `zs_admin_log` VALUES (297, 1, 'admin', '/admin.php/auth/group/roletree', '', '{\"id\":\"2\",\"pid\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615199);
INSERT INTO `zs_admin_log` VALUES (298, 1, 'admin', '/admin.php/auth/group/edit/ids/2?dialog=1', '权限管理 角色组 编辑', '{\"dialog\":\"1\",\"__token__\":\"c0c3a205af947ca01ca74f4028e45b54\",\"row\":{\"rules\":\"1,2,4,6,7,8,9,10,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,85,101,102,5\",\"pid\":\"1\",\"name\":\"\\u4e8c\\u7ea7\\u7ba1\\u7406\\u7ec4\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615212);
INSERT INTO `zs_admin_log` VALUES (299, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615339);
INSERT INTO `zs_admin_log` VALUES (300, 1, 'admin', '/admin.php/project/multi/ids/2', '', '{\"action\":\"\",\"ids\":\"2\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615339);
INSERT INTO `zs_admin_log` VALUES (301, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615469);
INSERT INTO `zs_admin_log` VALUES (302, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615473);
INSERT INTO `zs_admin_log` VALUES (303, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615475);
INSERT INTO `zs_admin_log` VALUES (304, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615476);
INSERT INTO `zs_admin_log` VALUES (305, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615477);
INSERT INTO `zs_admin_log` VALUES (306, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615484);
INSERT INTO `zs_admin_log` VALUES (307, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615538);
INSERT INTO `zs_admin_log` VALUES (308, 1, 'admin', '/admin.php/test/restore', '测试管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615565);
INSERT INTO `zs_admin_log` VALUES (309, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615579);
INSERT INTO `zs_admin_log` VALUES (310, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615681);
INSERT INTO `zs_admin_log` VALUES (311, 1, 'admin', '/admin.php/test/restore/ids/3,1', '测试管理 还原', '{\"action\":\"restore\",\"ids\":\"3,1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615692);
INSERT INTO `zs_admin_log` VALUES (312, 1, 'admin', '/admin.php/project/restore', '项目管理 还原', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570615762);
INSERT INTO `zs_admin_log` VALUES (313, 1, 'admin', '/admin.php/project/edit/ids/1?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"9\",\"flag\":[\"index\"],\"title\":\"\\u6211\\u662f\\u4e00\\u7bc7\\u6d4b\\u8bd5\\u6587\\u7ae0\",\"content\":\"<p>\\u6211\\u662f\\u6d4b\\u8bd5\\u5185\\u5bb9<\\/p>\",\"image\":\"\\/assets\\/img\\/avatar.png\",\"keywords\":\"\\u5173\\u952e\\u5b57\",\"description\":\"\\u63cf\\u8ff0\",\"city\":\"\\u5e7f\\u897f\\u58ee\\u65cf\\u81ea\\u6cbb\\u533a\\/\\u5357\\u5b81\\u5e02\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570616895);
INSERT INTO `zs_admin_log` VALUES (314, 1, 'admin', '/admin.php/project/edit/ids/3?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"9\",\"flag\":[\"hot\"],\"title\":\"q\",\"content\":\"q\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"keywords\":\"q\",\"description\":\"q\",\"city\":\"\\u5b89\\u5fbd\\u7701\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"2\",\"switch\":\"0\"},\"ids\":\"3\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570616908);
INSERT INTO `zs_admin_log` VALUES (315, 1, 'admin', '/admin.php/auth/rule/add?dialog=1', '权限管理 菜单规则 添加', '{\"dialog\":\"1\",\"__token__\":\"73af0fe030d4ab26205cc50a91c4a426\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"article\",\"title\":\"\\u6587\\u7ae0\\u7ba1\\u7406\",\"icon\":\"fa fa-book\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570616980);
INSERT INTO `zs_admin_log` VALUES (316, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570616980);
INSERT INTO `zs_admin_log` VALUES (317, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570617480);
INSERT INTO `zs_admin_log` VALUES (318, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570617481);
INSERT INTO `zs_admin_log` VALUES (319, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php%2Fgeneral%2Fweb%3Fref%3Daddtabs', '登录', '{\"url\":\"\\/admin.php\\/general\\/web?ref=addtabs\",\"__token__\":\"09dea371c63f4e18a2a84e85ff8153aa\",\"username\":\"admin\",\"captcha\":\"jywc\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1570699516);
INSERT INTO `zs_admin_log` VALUES (320, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"ab4e029c894b59be8b22040764b51f6c\",\"username\":\"admin\",\"captcha\":\"lxyh\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571041946);
INSERT INTO `zs_admin_log` VALUES (321, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"5\",\"name\":\"\\u996e\\u98df\\u884c\\u4e1a\",\"nickname\":\"\\u996e\\u98df\\u884c\\u4e1a\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571042059);
INSERT INTO `zs_admin_log` VALUES (322, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"5\",\"name\":\"\\u670d\\u88c5\",\"nickname\":\"\\u670d\\u88c5\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571043823);
INSERT INTO `zs_admin_log` VALUES (323, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"4\",\"name\":\"\\u8fd0\\u8f93\",\"nickname\":\"\\u8fd0\\u8f93\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571043852);
INSERT INTO `zs_admin_log` VALUES (324, 1, 'admin', '/admin.php/auth/rule/edit/ids/66?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"d209f7ae7f7b0b6513e4c696a664fcfe\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/menber\",\"title\":\"\\u7528\\u6237\\u4e2d\\u5fc3\\u540e\\u53f0\",\"icon\":\"fa fa-list\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"66\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045176);
INSERT INTO `zs_admin_log` VALUES (325, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045176);
INSERT INTO `zs_admin_log` VALUES (326, 1, 'admin', '/admin.php/auth/rule/edit/ids/67?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"c04b29c72494e0d027fec3140f02fa29\",\"row\":{\"ismenu\":\"1\",\"pid\":\"66\",\"name\":\"menber\\/user\\/user\",\"title\":\"\\u4f1a\\u5458\\u7ba1\\u7406\",\"icon\":\"fa fa-user\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"67\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045202);
INSERT INTO `zs_admin_log` VALUES (327, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045202);
INSERT INTO `zs_admin_log` VALUES (328, 1, 'admin', '/admin.php/auth/rule/edit/ids/66?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"817642578d26b71fd67b99c37e30d9f5\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u7ba1\\u7406\",\"icon\":\"fa fa-list\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"66\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045232);
INSERT INTO `zs_admin_log` VALUES (329, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045232);
INSERT INTO `zs_admin_log` VALUES (330, 1, 'admin', '/admin.php/auth/rule/edit/ids/67?dialog=1', '权限管理 菜单规则 编辑', '{\"dialog\":\"1\",\"__token__\":\"1019182a8cf1931539dcf40c93098615\",\"row\":{\"ismenu\":\"1\",\"pid\":\"66\",\"name\":\"user\\/user\",\"title\":\"\\u4f1a\\u5458\\u7ba1\\u7406\",\"icon\":\"fa fa-user\",\"weigh\":\"0\",\"condition\":\"\",\"remark\":\"\",\"status\":\"normal\"},\"ids\":\"67\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045239);
INSERT INTO `zs_admin_log` VALUES (331, 1, 'admin', '/admin.php/index/index', '', '{\"action\":\"refreshmenu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045239);
INSERT INTO `zs_admin_log` VALUES (332, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"menber\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045257);
INSERT INTO `zs_admin_log` VALUES (333, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"menber\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\\u540e\\u53f0\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045271);
INSERT INTO `zs_admin_log` VALUES (334, 1, 'admin', '/admin.php/user/rule/edit/ids/14?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"index\\/menber\\/user\\/profile\",\"title\":\"\\u4e2a\\u4eba\\u8d44\\u6599\",\"remark\":\"\",\"weigh\":\"14\",\"status\":\"normal\"},\"ids\":\"14\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045284);
INSERT INTO `zs_admin_log` VALUES (335, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"menber\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\\u540e\\u53f0\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045299);
INSERT INTO `zs_admin_log` VALUES (336, 1, 'admin', '/admin.php/user/rule/edit/ids/14?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/menber\\/user\\/profile\",\"title\":\"\\u4e2a\\u4eba\\u8d44\\u6599\",\"remark\":\"\",\"weigh\":\"14\",\"status\":\"normal\"},\"ids\":\"14\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045304);
INSERT INTO `zs_admin_log` VALUES (337, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/menber\\/user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045318);
INSERT INTO `zs_admin_log` VALUES (338, 1, 'admin', '/admin.php/user/rule/edit/ids/14?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/user\\/profile\",\"title\":\"\\u4e2a\\u4eba\\u8d44\\u6599\",\"remark\":\"\",\"weigh\":\"14\",\"status\":\"normal\"},\"ids\":\"14\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045383);
INSERT INTO `zs_admin_log` VALUES (339, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045391);
INSERT INTO `zs_admin_log` VALUES (340, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045566);
INSERT INTO `zs_admin_log` VALUES (341, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/user\\/article\",\"title\":\"\\u6587\\u7ae0\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045631);
INSERT INTO `zs_admin_log` VALUES (342, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"index\\/user\\/article\\/list\",\"title\":\"\\u6587\\u7ae0\\u5217\\u8868\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045642);
INSERT INTO `zs_admin_log` VALUES (343, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"index\\/user\\/article\\/add\",\"title\":\"\\u53d1\\u5e03\\u6587\\u7ae0\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045661);
INSERT INTO `zs_admin_log` VALUES (344, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"index\\/user\\/article\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045712);
INSERT INTO `zs_admin_log` VALUES (345, 1, 'admin', '/admin.php/user/rule/edit/ids/18?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"index\\/user\\/article\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045720);
INSERT INTO `zs_admin_log` VALUES (346, 1, 'admin', '/admin.php/user/rule/edit/ids/17?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"index\\/user\\/article\\/add\",\"title\":\"\\u53d1\\u5e03\",\"remark\":\"\",\"weigh\":\"17\",\"status\":\"normal\"},\"ids\":\"17\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045726);
INSERT INTO `zs_admin_log` VALUES (347, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"index\\/user\\/article\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045748);
INSERT INTO `zs_admin_log` VALUES (348, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"16,15\",\"name\":\"\\u4f1a\\u5458\\u9ed8\\u8ba4\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045788);
INSERT INTO `zs_admin_log` VALUES (349, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"16,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045827);
INSERT INTO `zs_admin_log` VALUES (350, 1, 'admin', '/admin.php/user/rule/edit/ids/15?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"user\\/article\",\"title\":\"\\u6587\\u7ae0\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045880);
INSERT INTO `zs_admin_log` VALUES (351, 1, 'admin', '/admin.php/user/rule/edit/ids/19?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"user\\/article\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"19\",\"status\":\"normal\"},\"ids\":\"19\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045894);
INSERT INTO `zs_admin_log` VALUES (352, 1, 'admin', '/admin.php/user/rule/edit/ids/18?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"user\\/article\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045901);
INSERT INTO `zs_admin_log` VALUES (353, 1, 'admin', '/admin.php/user/rule/edit/ids/17?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"user\\/article\\/add\",\"title\":\"\\u53d1\\u5e03\",\"remark\":\"\",\"weigh\":\"17\",\"status\":\"normal\"},\"ids\":\"17\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045906);
INSERT INTO `zs_admin_log` VALUES (354, 1, 'admin', '/admin.php/user/rule/edit/ids/16?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"user\\/article\\/list\",\"title\":\"\\u6587\\u7ae0\\u5217\\u8868\",\"remark\":\"\",\"weigh\":\"16\",\"status\":\"normal\"},\"ids\":\"16\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571045915);
INSERT INTO `zs_admin_log` VALUES (355, 1, 'admin', '/admin.php/user/user/edit/ids/2?dialog=1', '会员管理 会员管理 编辑', '{\"dialog\":\"1\",\"row\":{\"group_id\":\"1\",\"username\":\"ygf2019\",\"nickname\":\"ygf2019\",\"password\":\"123456\",\"email\":\"572779486@qq.com\",\"mobile\":\"17819180328\",\"avatar\":\"\",\"level\":\"1\",\"gender\":\"0\",\"birthday\":\"\",\"bio\":\"\",\"money\":\"0.00\",\"score\":\"0\",\"successions\":\"1\",\"maxsuccessions\":\"1\",\"prevtime\":\"2019-10-04 18:10:24\",\"logintime\":\"2019-10-14 17:31:22\",\"loginip\":\"127.0.0.1\",\"loginfailure\":\"0\",\"joinip\":\"127.0.0.1\",\"jointime\":\"2019-10-04 17:02:04\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571046082);
INSERT INTO `zs_admin_log` VALUES (356, 1, 'admin', '/admin.php/user/user/edit/ids/2?dialog=1', '会员管理 会员管理 编辑', '{\"dialog\":\"1\",\"row\":{\"group_id\":\"1\",\"username\":\"ygf2019\",\"nickname\":\"ygf2019\",\"password\":\"123456\",\"email\":\"572779486@qq.com\",\"mobile\":\"17819180328\",\"avatar\":\"\",\"level\":\"1\",\"gender\":\"0\",\"birthday\":\"\",\"bio\":\"\",\"money\":\"0.00\",\"score\":\"0\",\"successions\":\"1\",\"maxsuccessions\":\"1\",\"prevtime\":\"2019-10-04 18:10:24\",\"logintime\":\"2019-10-14 17:31:22\",\"loginip\":\"127.0.0.1\",\"loginfailure\":\"0\",\"joinip\":\"127.0.0.1\",\"jointime\":\"2019-10-04 17:02:04\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571046084);
INSERT INTO `zs_admin_log` VALUES (357, 1, 'admin', '/admin.php/user/user/edit/ids/2?dialog=1', '会员管理 会员管理 编辑', '{\"dialog\":\"1\",\"row\":{\"group_id\":\"1\",\"username\":\"ygf2019\",\"nickname\":\"ygf2019\",\"password\":\"123456\",\"email\":\"572779486@qq.com\",\"mobile\":\"17819180328\",\"avatar\":\"\",\"level\":\"1\",\"gender\":\"0\",\"birthday\":\"2019-10-14\",\"bio\":\"\",\"money\":\"0.00\",\"score\":\"0\",\"successions\":\"1\",\"maxsuccessions\":\"1\",\"prevtime\":\"2019-10-04 18:10:24\",\"logintime\":\"2019-10-14 17:31:22\",\"loginip\":\"127.0.0.1\",\"loginfailure\":\"0\",\"joinip\":\"127.0.0.1\",\"jointime\":\"2019-10-04 17:02:04\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571046092);
INSERT INTO `zs_admin_log` VALUES (358, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', 'Login', '{\"url\":\"\\/admin.php\",\"__token__\":\"f3db60e0cc14340f9bfef0cd77a27e16\",\"username\":\"admin\",\"captcha\":\"wbqa\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571046200);
INSERT INTO `zs_admin_log` VALUES (359, 0, 'Unknown', '/admin.php/index/login?url=%2Fadmin.php', '', '{\"url\":\"\\/admin.php\",\"__token__\":\"fa7b1134c3b24894560c09e7a47fb60d\",\"username\":\"admin\",\"captcha\":\"oapf\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571130931);
INSERT INTO `zs_admin_log` VALUES (360, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"b6d7ccf6ae6353ec761ee3e07d67b510\",\"username\":\"admin\",\"captcha\":\"88vj\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571130935);
INSERT INTO `zs_admin_log` VALUES (361, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131090);
INSERT INTO `zs_admin_log` VALUES (362, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"13,16,7,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131156);
INSERT INTO `zs_admin_log` VALUES (363, 1, 'admin', '/admin.php/user/rule/edit/ids/15?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"menber\\/user\\/article\",\"title\":\"\\u6587\\u7ae0\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131905);
INSERT INTO `zs_admin_log` VALUES (364, 1, 'admin', '/admin.php/user/rule/edit/ids/19?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"menber\\/user\\/article\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"19\",\"status\":\"normal\"},\"ids\":\"19\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131913);
INSERT INTO `zs_admin_log` VALUES (365, 1, 'admin', '/admin.php/user/rule/edit/ids/18?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"menber\\/user\\/article\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131921);
INSERT INTO `zs_admin_log` VALUES (366, 1, 'admin', '/admin.php/user/rule/edit/ids/16?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"menber\\/user\\/article\\/list\",\"title\":\"\\u6587\\u7ae0\\u5217\\u8868\",\"remark\":\"\",\"weigh\":\"16\",\"status\":\"normal\"},\"ids\":\"16\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131929);
INSERT INTO `zs_admin_log` VALUES (367, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"menber\\/user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131939);
INSERT INTO `zs_admin_log` VALUES (368, 1, 'admin', '/admin.php/user/rule/edit/ids/7?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"menber\\/user\",\"title\":\"\\u4f1a\\u5458\\u4e2d\\u5fc3\",\"remark\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571131950);
INSERT INTO `zs_admin_log` VALUES (369, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"menber\\/user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571132005);
INSERT INTO `zs_admin_log` VALUES (370, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,16,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571132022);
INSERT INTO `zs_admin_log` VALUES (371, 1, 'admin', '/admin.php/user/user/del/ids/1', '会员管理 会员管理 删除', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571132256);
INSERT INTO `zs_admin_log` VALUES (372, 1, 'admin', '/admin.php/user/rule/edit/ids/13?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/menber\\/user\\/index\",\"title\":\"\\u9996\\u9875\",\"remark\":\"\",\"weigh\":\"13\",\"status\":\"normal\"},\"ids\":\"13\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571132683);
INSERT INTO `zs_admin_log` VALUES (373, 1, 'admin', '/admin.php/user/rule/edit/ids/16?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"index\\/menber\\/article\\/list\",\"title\":\"\\u6587\\u7ae0\\u5217\\u8868\",\"remark\":\"\",\"weigh\":\"16\",\"status\":\"normal\"},\"ids\":\"16\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133073);
INSERT INTO `zs_admin_log` VALUES (374, 1, 'admin', '/admin.php/user/rule/edit/ids/19?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"menber\\/article\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"19\",\"status\":\"normal\"},\"ids\":\"19\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133188);
INSERT INTO `zs_admin_log` VALUES (375, 1, 'admin', '/admin.php/user/rule/edit/ids/15?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"menber\\/article\",\"title\":\"\\u6587\\u7ae0\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133197);
INSERT INTO `zs_admin_log` VALUES (376, 1, 'admin', '/admin.php/user/rule/edit/ids/18?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"menber\\/article\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133203);
INSERT INTO `zs_admin_log` VALUES (377, 1, 'admin', '/admin.php/user/rule/edit/ids/17?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"menber\\/article\\/add\",\"title\":\"\\u53d1\\u5e03\",\"remark\":\"\",\"weigh\":\"17\",\"status\":\"normal\"},\"ids\":\"17\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133211);
INSERT INTO `zs_admin_log` VALUES (378, 1, 'admin', '/admin.php/user/rule/edit/ids/15?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/menber\\/article\",\"title\":\"\\u6587\\u7ae0\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133260);
INSERT INTO `zs_admin_log` VALUES (379, 1, 'admin', '/admin.php/user/rule/edit/ids/19?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"index\\/menber\\/article\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"19\",\"status\":\"normal\"},\"ids\":\"19\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133265);
INSERT INTO `zs_admin_log` VALUES (380, 1, 'admin', '/admin.php/user/rule/edit/ids/18?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"15\",\"name\":\"index\\/menber\\/article\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133273);
INSERT INTO `zs_admin_log` VALUES (381, 1, 'admin', '/admin.php/user/rule/edit/ids/17?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"index\\/menber\\/article\\/add\",\"title\":\"\\u53d1\\u5e03\",\"remark\":\"\",\"weigh\":\"17\",\"status\":\"normal\"},\"ids\":\"17\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133278);
INSERT INTO `zs_admin_log` VALUES (382, 1, 'admin', '/admin.php/user/rule/edit/ids/14?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/menber\\/user\\/profile\",\"title\":\"\\u4e2a\\u4eba\\u8d44\\u6599\",\"remark\":\"\",\"weigh\":\"14\",\"status\":\"normal\"},\"ids\":\"14\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133290);
INSERT INTO `zs_admin_log` VALUES (383, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/menber\\/user\\/weclome\",\"title\":\"\\u6b22\\u8fce\\u9875\\u9762\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133599);
INSERT INTO `zs_admin_log` VALUES (384, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,16,20,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133607);
INSERT INTO `zs_admin_log` VALUES (385, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,16,17,20,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133706);
INSERT INTO `zs_admin_log` VALUES (386, 1, 'admin', '/admin.php/user/rule/edit/ids/20?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"7\",\"name\":\"index\\/menber\\/user\\/welcome\",\"title\":\"\\u6b22\\u8fce\\u9875\\u9762\",\"remark\":\"\",\"weigh\":\"20\",\"status\":\"normal\"},\"ids\":\"20\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571133734);
INSERT INTO `zs_admin_log` VALUES (387, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"22a0027ba345dab85b27ab4cf095b72a\",\"username\":\"admin\",\"captcha\":\"rspt\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571294902);
INSERT INTO `zs_admin_log` VALUES (388, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,16,17,18,20,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571294918);
INSERT INTO `zs_admin_log` VALUES (389, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,20\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571294929);
INSERT INTO `zs_admin_log` VALUES (390, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"18,17,16,20,14,13,7,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571295077);
INSERT INTO `zs_admin_log` VALUES (391, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,20\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571295109);
INSERT INTO `zs_admin_log` VALUES (392, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"18,17,16,20,14,13,7,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571295150);
INSERT INTO `zs_admin_log` VALUES (393, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,20\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571295291);
INSERT INTO `zs_admin_log` VALUES (394, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"3859bfd9ee1ce36078c7be018eb450b8\",\"username\":\"admin\",\"captcha\":\"tqbu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571301074);
INSERT INTO `zs_admin_log` VALUES (395, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"19,18,17,16,20,13,15,7\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571301082);
INSERT INTO `zs_admin_log` VALUES (396, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"4ffe09000284c689a019b52a863a2a76\",\"username\":\"admin\",\"captcha\":\"jjby\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571302707);
INSERT INTO `zs_admin_log` VALUES (397, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,20\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571302716);
INSERT INTO `zs_admin_log` VALUES (398, 1, 'admin', '/admin.php/index/login?url=%2Fadmin.php', '登录', '{\"url\":\"\\/admin.php\",\"__token__\":\"d042ff990c1182b7d5aa6dbd5f982d39\",\"username\":\"admin\",\"captcha\":\"uaqa\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571307671);
INSERT INTO `zs_admin_log` VALUES (399, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"19,18,16,20,14,13,7,15\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571307681);
INSERT INTO `zs_admin_log` VALUES (400, 1, 'admin', '/admin.php/user/rule/multi/ids/14', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"14\",\"params\":\"ismenu=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571307852);
INSERT INTO `zs_admin_log` VALUES (401, 1, 'admin', '/admin.php/user/rule/multi/ids/20', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"20\",\"params\":\"ismenu=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571307853);
INSERT INTO `zs_admin_log` VALUES (402, 1, 'admin', '/admin.php/user/rule/multi/ids/13', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"13\",\"params\":\"ismenu=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571307854);
INSERT INTO `zs_admin_log` VALUES (403, 1, 'admin', '/admin.php/user/rule/multi/ids/13', '会员管理 会员规则 批量更新', '{\"action\":\"\",\"ids\":\"13\",\"params\":\"ismenu=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0', 1571307858);
INSERT INTO `zs_admin_log` VALUES (404, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"efbe653988c69cff4a6cc6ff70a5c31b\",\"username\":\"admin\",\"captcha\":\"hsxy\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644255);
INSERT INTO `zs_admin_log` VALUES (405, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,20\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644265);
INSERT INTO `zs_admin_log` VALUES (406, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/menber\\/project\",\"title\":\"\\u9879\\u76ee\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644565);
INSERT INTO `zs_admin_log` VALUES (407, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"21\",\"name\":\"index\\/menber\\/project\\/list\",\"title\":\"\\u9879\\u76ee\\u5217\\u8868\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644604);
INSERT INTO `zs_admin_log` VALUES (408, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"21\",\"name\":\"index\\/menber\\/project\\/add\",\"title\":\"\\u53d1\\u5e03\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644626);
INSERT INTO `zs_admin_log` VALUES (409, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"21\",\"name\":\"index\\/menber\\/project\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644650);
INSERT INTO `zs_admin_log` VALUES (410, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"21\",\"name\":\"index\\/menber\\/project\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644671);
INSERT INTO `zs_admin_log` VALUES (411, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,20,21,22,23,24,25\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644749);
INSERT INTO `zs_admin_log` VALUES (412, 1, 'admin', '/admin.php/user/rule/del/ids/20', '会员管理 会员规则 删除', '{\"action\":\"del\",\"ids\":\"20\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571644854);
INSERT INTO `zs_admin_log` VALUES (413, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"bc78d6fe7304d65bef539f0991dcdfff\",\"username\":\"admin\",\"captcha\":\"zihu\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571648369);
INSERT INTO `zs_admin_log` VALUES (414, 0, 'Unknown', '/admin.php/index/login', '', '{\"__token__\":\"80b5ad327069c277061e3b8c90a1b4db\",\"username\":\"admin\",\"captcha\":\"gztr\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571802878);
INSERT INTO `zs_admin_log` VALUES (415, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"3cf0ff76f018928d5c80482e7a0eb334\",\"username\":\"admin\",\"captcha\":\"pacm\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571802882);
INSERT INTO `zs_admin_log` VALUES (416, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u7f8e\\u7532\",\"nickname\":\"\\u7f8e\\u7532\",\"flag\":[\"hot\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571802913);
INSERT INTO `zs_admin_log` VALUES (417, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u8010\\u514b\",\"nickname\":\"\\u8010\\u514b\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571802927);
INSERT INTO `zs_admin_log` VALUES (418, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"6e4707b873facc451f5f6585e8c9f9bd\",\"username\":\"admin\",\"captcha\":\"iv2g\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571811639);
INSERT INTO `zs_admin_log` VALUES (419, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"21\",\"name\":\"index\\/menber\\/project\\/msg\",\"title\":\"\\u9879\\u76ee\\u7559\\u8a00\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571814613);
INSERT INTO `zs_admin_log` VALUES (420, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,21,22,23,24,25,26\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571814626);
INSERT INTO `zs_admin_log` VALUES (421, 0, 'Unknown', '/admin.php/index/login', '', '{\"__token__\":\"3c12f3f205de46127816acac2a4d2c62\",\"username\":\"admin\",\"captcha\":\"bgpp\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571818947);
INSERT INTO `zs_admin_log` VALUES (422, 0, 'Unknown', '/admin.php/index/login', '', '{\"__token__\":\"a34c63316f2f2b06a5e1436a2ddb0a0a\",\"username\":\"admin\",\"captcha\":\"znyp\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571818951);
INSERT INTO `zs_admin_log` VALUES (423, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"5fdee975d3ee59f33c514ac65bc3c114\",\"username\":\"admin\",\"captcha\":\"lf52\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571818958);
INSERT INTO `zs_admin_log` VALUES (424, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"15\",\"name\":\"index\\/menber\\/article\\/comment\",\"title\":\"\\u6587\\u7ae0\\u8bc4\\u8bba\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819257);
INSERT INTO `zs_admin_log` VALUES (425, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,21,22,23,24,25,26,27\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819262);
INSERT INTO `zs_admin_log` VALUES (426, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819811);
INSERT INTO `zs_admin_log` VALUES (427, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819812);
INSERT INTO `zs_admin_log` VALUES (428, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819812);
INSERT INTO `zs_admin_log` VALUES (429, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819813);
INSERT INTO `zs_admin_log` VALUES (430, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819813);
INSERT INTO `zs_admin_log` VALUES (431, 1, 'admin', '/admin.php/article/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819817);
INSERT INTO `zs_admin_log` VALUES (432, 1, 'admin', '/admin.php/article/multi/ids/1', '', '{\"action\":\"\",\"ids\":\"1\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571819818);
INSERT INTO `zs_admin_log` VALUES (433, 1, 'admin', '/admin.php/article/edit/ids/1?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"13\",\"flag\":[\"index\"],\"title\":\"\\uff11\",\"content\":\"<p>\\u6211\\u662f\\u6d4b\\u8bd5\\u5185\\u5bb9<\\/p>\",\"image\":\"\\uff11\",\"tdk_key\":\"\\u5173\\u952e\\u5b57\",\"tdk_desc\":\"\\u63cf\\u8ff0\\uff11\",\"views\":\"1\",\"weigh\":\"-1\",\"switch\":\"0\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571820534);
INSERT INTO `zs_admin_log` VALUES (434, 1, 'admin', '/admin.php/article/edit/ids/1?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"13\",\"flag\":[\"index\"],\"title\":\"\\uff11\",\"content\":\"<p>\\u6211\\u662f\\u6d4b\\u8bd5\\u5185\\u5bb9<\\/p>\",\"image\":\"\\uff11\\uff12\",\"tdk_key\":\"\\u5173\\u952e\\u5b57\",\"tdk_desc\":\"\\u63cf\\u8ff0\\uff11\",\"views\":\"1\",\"weigh\":\"-1\",\"switch\":\"0\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571820546);
INSERT INTO `zs_admin_log` VALUES (435, 1, 'admin', '/admin.php/article/del/ids/1', '', '{\"action\":\"del\",\"ids\":\"1\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571820550);
INSERT INTO `zs_admin_log` VALUES (436, 1, 'admin', '/admin.php/article/edit/ids/17?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"12\",\"flag\":[\"hot\"],\"title\":\"\\uff11\\uff11\\uff11\\uff11\",\"content\":\"\\uff11\\uff11\\uff11\\uff11\",\"image\":\"\",\"tdk_key\":\"\",\"tdk_desc\":\"\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"17\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571820601);
INSERT INTO `zs_admin_log` VALUES (437, 1, 'admin', '/admin.php/category/edit/ids/15?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u5973\\u88c5\",\"nickname\":\"\\u5973\\u88c5\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"15\",\"status\":\"normal\",\"flag\":[\"\"]},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821696);
INSERT INTO `zs_admin_log` VALUES (438, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u7537\\u88c5\",\"nickname\":\"\\u7537\\u88c5\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821708);
INSERT INTO `zs_admin_log` VALUES (439, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u7bb1\\u5305\",\"nickname\":\"\\u7bb1\\u5305\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821722);
INSERT INTO `zs_admin_log` VALUES (440, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u793c\\u670d\",\"nickname\":\"\\u793c\\u670d\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821739);
INSERT INTO `zs_admin_log` VALUES (441, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u5316\\u5986\\u54c1\",\"nickname\":\"\\u5316\\u5986\\u54c1\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821790);
INSERT INTO `zs_admin_log` VALUES (442, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u62a4\\u80a4\\u54c1\",\"nickname\":\"\\u62a4\\u80a4\\u54c1\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821804);
INSERT INTO `zs_admin_log` VALUES (443, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571821822);
INSERT INTO `zs_admin_log` VALUES (444, 1, 'admin', '/admin.php/project/del/ids/4', '项目管理 删除', '{\"action\":\"del\",\"ids\":\"4\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822457);
INSERT INTO `zs_admin_log` VALUES (445, 1, 'admin', '/admin.php/project/multi/ids/7', '', '{\"action\":\"\",\"ids\":\"7\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822707);
INSERT INTO `zs_admin_log` VALUES (446, 1, 'admin', '/admin.php/project/multi/ids/7', '', '{\"action\":\"\",\"ids\":\"7\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822708);
INSERT INTO `zs_admin_log` VALUES (447, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822779);
INSERT INTO `zs_admin_log` VALUES (448, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822874);
INSERT INTO `zs_admin_log` VALUES (449, 1, 'admin', '/admin.php/project/add?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"21\",\"flag\":[\"menu\"],\"name\":\"\\uff11\",\"image\":\"\\uff11\",\"prouse\":\"\\uff11\",\"content\":\"\\uff11\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"title\":\"\\uff11\\uff11\",\"keywords\":\"\\uff11\",\"description\":\"\\uff11\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822916);
INSERT INTO `zs_admin_log` VALUES (450, 1, 'admin', '/admin.php/project/del/ids/8', '项目管理 删除', '{\"action\":\"del\",\"ids\":\"8\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822926);
INSERT INTO `zs_admin_log` VALUES (451, 1, 'admin', '/admin.php/project/destroy', '项目管理 永久删除', '[]', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571822931);
INSERT INTO `zs_admin_log` VALUES (452, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag[\":\"hot\",\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823718);
INSERT INTO `zs_admin_log` VALUES (453, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag[\":\"menu\",\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823737);
INSERT INTO `zs_admin_log` VALUES (454, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":\"recommend\",\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823806);
INSERT INTO `zs_admin_log` VALUES (455, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":\"recommend\",\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823826);
INSERT INTO `zs_admin_log` VALUES (456, 1, 'admin', '/admin.php/category/edit/ids/21?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"21\",\"status\":\"normal\"},\"ids\":\"21\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823896);
INSERT INTO `zs_admin_log` VALUES (457, 1, 'admin', '/admin.php/category/edit/ids/21?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"21\",\"status\":\"normal\",\"flag\":[\"\"]},\"ids\":\"21\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823902);
INSERT INTO `zs_admin_log` VALUES (458, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571823978);
INSERT INTO `zs_admin_log` VALUES (459, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824065);
INSERT INTO `zs_admin_log` VALUES (460, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824083);
INSERT INTO `zs_admin_log` VALUES (461, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824222);
INSERT INTO `zs_admin_log` VALUES (462, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824280);
INSERT INTO `zs_admin_log` VALUES (463, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824753);
INSERT INTO `zs_admin_log` VALUES (464, 1, 'admin', '/admin.php/category/edit/ids/21?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"flag\":[\"index\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"21\",\"status\":\"normal\"},\"ids\":\"21\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824957);
INSERT INTO `zs_admin_log` VALUES (465, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571824995);
INSERT INTO `zs_admin_log` VALUES (466, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825166);
INSERT INTO `zs_admin_log` VALUES (467, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"menu\",\"hot\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825337);
INSERT INTO `zs_admin_log` VALUES (468, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"hot\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825433);
INSERT INTO `zs_admin_log` VALUES (469, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"menu\",\"hot\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825441);
INSERT INTO `zs_admin_log` VALUES (470, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"menu\",\"hot\",\"recommend\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825719);
INSERT INTO `zs_admin_log` VALUES (471, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825782);
INSERT INTO `zs_admin_log` VALUES (472, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"hot\",\"recommend\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"2\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571825792);
INSERT INTO `zs_admin_log` VALUES (473, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\"],\"title\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826023);
INSERT INTO `zs_admin_log` VALUES (474, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"hot\",\"recommend\"],\"title\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826029);
INSERT INTO `zs_admin_log` VALUES (475, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\",\"recommend\"],\"title\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826072);
INSERT INTO `zs_admin_log` VALUES (476, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"flag\":[\"\"]},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826079);
INSERT INTO `zs_admin_log` VALUES (477, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\",\"hot\",\"recommend\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826092);
INSERT INTO `zs_admin_log` VALUES (478, 0, 'Unknown', '/admin.php/index/login', '', '{\"__token__\":\"5aa73519ca38cd327dc1c46a4949d48c\",\"username\":\"admin\",\"captcha\":\"26mn\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826248);
INSERT INTO `zs_admin_log` VALUES (479, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"045e8fbe1da49686cd2f89a4189bdcb1\",\"username\":\"admin\",\"captcha\":\"qavd\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826254);
INSERT INTO `zs_admin_log` VALUES (480, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"menu\",\"hot\",\"recommend\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571826620);
INSERT INTO `zs_admin_log` VALUES (481, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"hot\",\"index\",\"recommend\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"11\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571827221);
INSERT INTO `zs_admin_log` VALUES (482, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"49badb47c990e4485ab9885651816183\",\"username\":\"admin\",\"captcha\":\"pu5f\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571885464);
INSERT INTO `zs_admin_log` VALUES (483, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571885551);
INSERT INTO `zs_admin_log` VALUES (484, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"hot\",\"index\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571885589);
INSERT INTO `zs_admin_log` VALUES (485, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"recommend\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571885610);
INSERT INTO `zs_admin_log` VALUES (486, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"recommend\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571886707);
INSERT INTO `zs_admin_log` VALUES (487, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"recommend\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571886812);
INSERT INTO `zs_admin_log` VALUES (488, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887103);
INSERT INTO `zs_admin_log` VALUES (489, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887123);
INSERT INTO `zs_admin_log` VALUES (490, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887178);
INSERT INTO `zs_admin_log` VALUES (491, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"hot\",\"index\",\"recommend\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887192);
INSERT INTO `zs_admin_log` VALUES (492, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887204);
INSERT INTO `zs_admin_log` VALUES (493, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"hot\",\"index\",\"recommend\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887253);
INSERT INTO `zs_admin_log` VALUES (494, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887895);
INSERT INTO `zs_admin_log` VALUES (495, 1, 'admin', '/admin.php/category/edit/ids/21?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"21\",\"status\":\"normal\"},\"ids\":\"21\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887901);
INSERT INTO `zs_admin_log` VALUES (496, 1, 'admin', '/admin.php/category/edit/ids/21?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"flag\":[\"index\",\"menu\",\"hot\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"21\",\"status\":\"normal\"},\"ids\":\"21\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571887908);
INSERT INTO `zs_admin_log` VALUES (497, 1, 'admin', '/admin.php/article/edit/ids/18?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"12\",\"flag\":[\"recommend\"],\"title\":\"\\u9879\\u76ee\\u7ba1\\u7406\",\"content\":\"\\uff11\",\"image\":\"\",\"tdk_key\":\"\",\"tdk_desc\":\"\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571888029);
INSERT INTO `zs_admin_log` VALUES (498, 1, 'admin', '/admin.php/article/edit/ids/2?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"12\",\"flag\":[\"hot\",\"index\"],\"title\":\"\\u6b23\\u6b23\\u5976\\u8336\",\"content\":\"\\u597d\\u559d\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"tdk_key\":\"\\u5976\\u8336\",\"tdk_desc\":\"\\u5976\\u8336\",\"views\":\"1110\",\"weigh\":\"3\",\"switch\":\"1\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571888103);
INSERT INTO `zs_admin_log` VALUES (499, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"flag\":[\"\"]},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889024);
INSERT INTO `zs_admin_log` VALUES (500, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889115);
INSERT INTO `zs_admin_log` VALUES (501, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"hot\",\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889120);
INSERT INTO `zs_admin_log` VALUES (502, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889129);
INSERT INTO `zs_admin_log` VALUES (503, 1, 'admin', '/admin.php/article/edit/ids/2?dialog=1', '', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"12\",\"flag\":[\"hot\",\"index\"],\"title\":\"\\u6b23\\u6b23\\u5976\\u8336\",\"content\":\"\\u597d\\u559d\",\"image\":\"\\/uploads\\/20191009\\/70579d8bb412a6aa768564a881dca806.png\",\"tdk_key\":\"\\u5976\\u8336\",\"tdk_desc\":\"\\u5976\\u8336\",\"views\":\"1110\",\"weigh\":\"3\",\"switch\":\"1\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889259);
INSERT INTO `zs_admin_log` VALUES (504, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=0\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889272);
INSERT INTO `zs_admin_log` VALUES (505, 1, 'admin', '/admin.php/article/multi/ids/3', '', '{\"action\":\"\",\"ids\":\"3\",\"params\":\"switch=1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889273);
INSERT INTO `zs_admin_log` VALUES (506, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"11\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"flag\":[\"\"]},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889975);
INSERT INTO `zs_admin_log` VALUES (507, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\",\"flag\":[\"\"]},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889979);
INSERT INTO `zs_admin_log` VALUES (508, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"11\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571889997);
INSERT INTO `zs_admin_log` VALUES (509, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"menu\"],\"title\":\"\\uff11\\u82ae\\u6b27\\u7ae5\\u88c5\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571890041);
INSERT INTO `zs_admin_log` VALUES (510, 1, 'admin', '/admin.php/category/edit/ids/15?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u5973\\u88c5\",\"nickname\":\"\\u5973\\u88c5\",\"flag\":[\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571890857);
INSERT INTO `zs_admin_log` VALUES (511, 1, 'admin', '/admin.php/category/edit/ids/16?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u7537\\u88c5\",\"nickname\":\"\\u7537\\u88c5\",\"flag\":[\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"16\",\"status\":\"normal\"},\"ids\":\"16\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571891074);
INSERT INTO `zs_admin_log` VALUES (512, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"7e324ee9a057ce46f77be826fa808e33\",\"username\":\"admin\",\"captcha\":\"m2nx\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571897166);
INSERT INTO `zs_admin_log` VALUES (513, 1, 'admin', '/admin.php/category/edit/ids/15?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u5973\\u88c5\",\"nickname\":\"\\u5973\\u88c5\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571897401);
INSERT INTO `zs_admin_log` VALUES (514, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"581971934a9d0b2eff2686da3d0fc932\",\"username\":\"admin\",\"captcha\":\"vrmk\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571901412);
INSERT INTO `zs_admin_log` VALUES (515, 1, 'admin', '/admin.php/category/edit/ids/16?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u7537\\u88c5\",\"nickname\":\"\\u7537\\u88c5\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"16\",\"status\":\"normal\"},\"ids\":\"16\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571901426);
INSERT INTO `zs_admin_log` VALUES (516, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571902252);
INSERT INTO `zs_admin_log` VALUES (517, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"11\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571902259);
INSERT INTO `zs_admin_log` VALUES (518, 1, 'admin', '/admin.php/project/edit/ids/10?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"\\uff11\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\uff11\",\"description\":\"\\uff11\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571903362);
INSERT INTO `zs_admin_log` VALUES (519, 1, 'admin', '/admin.php/project/edit/ids/11?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"\\uff11\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\uff11\",\"description\":\"\\uff11\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"11\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571903372);
INSERT INTO `zs_admin_log` VALUES (520, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"index\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"28\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571903499);
INSERT INTO `zs_admin_log` VALUES (521, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"index\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"22\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571903531);
INSERT INTO `zs_admin_log` VALUES (522, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"1f62a71d149ae4adc561e72b8eb02d9a\",\"username\":\"admin\",\"captcha\":\"2era\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571905730);
INSERT INTO `zs_admin_log` VALUES (523, 1, 'admin', '/admin.php/category/del/ids/12', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"12\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906198);
INSERT INTO `zs_admin_log` VALUES (524, 1, 'admin', '/admin.php/category/del/ids/11', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"11\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906201);
INSERT INTO `zs_admin_log` VALUES (525, 1, 'admin', '/admin.php/category/del/ids/13', '分类管理 删除', '{\"action\":\"del\",\"ids\":\"13\",\"params\":\"\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906203);
INSERT INTO `zs_admin_log` VALUES (526, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u5e02\\u573a\\u884c\\u60c5\",\"nickname\":\"\\u5e02\\u573a\\u884c\\u60c5\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906779);
INSERT INTO `zs_admin_log` VALUES (527, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u4f73\\u5546\\u673a\",\"nickname\":\"\\u6700\\u4f73\\u5546\\u673a\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906798);
INSERT INTO `zs_admin_log` VALUES (528, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u9879\\u76ee\\u5206\\u6790\",\"nickname\":\"\\u9879\\u76ee\\u5206\\u6790\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906819);
INSERT INTO `zs_admin_log` VALUES (529, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u8349\\u6839\\u5fc5\\u8bfb\",\"nickname\":\"\\u8349\\u6839\\u5fc5\\u8bfb\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906828);
INSERT INTO `zs_admin_log` VALUES (530, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u95ee\\u7b54\",\"nickname\":\"\\u521b\\u4e1a\\u95ee\\u7b54\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906845);
INSERT INTO `zs_admin_log` VALUES (531, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u79d8\\u7c4d\",\"nickname\":\"\\u521b\\u4e1a\\u79d8\\u7c4d\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906864);
INSERT INTO `zs_admin_log` VALUES (532, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"nickname\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571906874);
INSERT INTO `zs_admin_log` VALUES (533, 1, 'admin', '/admin.php/category/edit/ids/22?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u5e02\\u573a\\u884c\\u60c5\",\"nickname\":\"\\u5e02\\u573a\\u884c\\u60c5\",\"flag\":[\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"22\",\"status\":\"normal\"},\"ids\":\"22\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907045);
INSERT INTO `zs_admin_log` VALUES (534, 1, 'admin', '/admin.php/category/edit/ids/23?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u4f73\\u5546\\u673a\",\"nickname\":\"\\u6700\\u4f73\\u5546\\u673a\",\"flag\":[\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"23\",\"status\":\"normal\"},\"ids\":\"23\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907057);
INSERT INTO `zs_admin_log` VALUES (535, 1, 'admin', '/admin.php/category/edit/ids/24?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u9879\\u76ee\\u5206\\u6790\",\"nickname\":\"\\u9879\\u76ee\\u5206\\u6790\",\"flag\":[\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"24\",\"status\":\"normal\"},\"ids\":\"24\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907063);
INSERT INTO `zs_admin_log` VALUES (536, 1, 'admin', '/admin.php/category/edit/ids/24?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u9879\\u76ee\\u5206\\u6790\",\"nickname\":\"\\u9879\\u76ee\\u5206\\u6790\",\"flag\":[\"index\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"24\",\"status\":\"normal\"},\"ids\":\"24\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907092);
INSERT INTO `zs_admin_log` VALUES (537, 1, 'admin', '/admin.php/category/edit/ids/23?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u4f73\\u5546\\u673a\",\"nickname\":\"\\u6700\\u4f73\\u5546\\u673a\",\"flag\":[\"index\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"23\",\"status\":\"normal\"},\"ids\":\"23\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907097);
INSERT INTO `zs_admin_log` VALUES (538, 1, 'admin', '/admin.php/category/edit/ids/22?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u5e02\\u573a\\u884c\\u60c5\",\"nickname\":\"\\u5e02\\u573a\\u884c\\u60c5\",\"flag\":[\"index\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"22\",\"status\":\"normal\"},\"ids\":\"22\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907102);
INSERT INTO `zs_admin_log` VALUES (539, 1, 'admin', '/admin.php/category/edit/ids/5?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"nickname\":\"\\u6700\\u65b0\\u52a8\\u6001\",\"flag\":[\"index\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"5\",\"status\":\"normal\"},\"ids\":\"5\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907111);
INSERT INTO `zs_admin_log` VALUES (540, 1, 'admin', '/admin.php/category/edit/ids/4?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"nickname\":\"\\u521b\\u4e1a\\u6307\\u5357\",\"flag\":[\"index\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"4\",\"status\":\"normal\"},\"ids\":\"4\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571907130);
INSERT INTO `zs_admin_log` VALUES (541, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"35763eb57fd3d6ee8c4b7235d39c3b89\",\"username\":\"admin\",\"captcha\":\"hy7x\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571912897);
INSERT INTO `zs_admin_log` VALUES (542, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"efba4f6f410e106d2fc4de8d9f1cd855\",\"username\":\"admin\",\"captcha\":\"zhfe\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571912973);
INSERT INTO `zs_admin_log` VALUES (543, 1, 'admin', '/admin.php/category/edit/ids/6?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u4e2d\\u9910\",\"nickname\":\"\\u4e2d\\u9910\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"6\",\"status\":\"normal\"},\"ids\":\"6\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571912993);
INSERT INTO `zs_admin_log` VALUES (544, 1, 'admin', '/admin.php/category/edit/ids/7?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u897f\\u9910\",\"nickname\":\"\\u897f\\u9910\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"7\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571912999);
INSERT INTO `zs_admin_log` VALUES (545, 1, 'admin', '/admin.php/category/edit/ids/8?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u8336\\u996e\",\"nickname\":\"\\u8336\\u996e\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"8\",\"status\":\"normal\"},\"ids\":\"8\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571913004);
INSERT INTO `zs_admin_log` VALUES (546, 1, 'admin', '/admin.php/category/edit/ids/18?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u793c\\u670d\",\"nickname\":\"\\u793c\\u670d\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571913009);
INSERT INTO `zs_admin_log` VALUES (547, 1, 'admin', '/admin.php/category/edit/ids/20?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u62a4\\u80a4\\u54c1\",\"nickname\":\"\\u62a4\\u80a4\\u54c1\",\"flag\":[\"index\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"20\",\"status\":\"normal\"},\"ids\":\"20\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571913014);
INSERT INTO `zs_admin_log` VALUES (548, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"805a859cfd01c48bc498912640433808\",\"username\":\"admin\",\"captcha\":\"p2kp\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571994799);
INSERT INTO `zs_admin_log` VALUES (549, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"22\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571994831);
INSERT INTO `zs_admin_log` VALUES (550, 1, 'admin', '/admin.php/category/edit/ids/28?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"nickname\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"flag\":[\"navs\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"28\",\"status\":\"normal\"},\"ids\":\"28\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995001);
INSERT INTO `zs_admin_log` VALUES (551, 1, 'admin', '/admin.php/category/edit/ids/28?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"nickname\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"flag\":[\"index\",\"navs\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"28\",\"status\":\"normal\"},\"ids\":\"28\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995006);
INSERT INTO `zs_admin_log` VALUES (552, 1, 'admin', '/admin.php/category/edit/ids/28?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"nickname\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"flag\":[\"index\",\"navs\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"28\",\"status\":\"normal\"},\"ids\":\"28\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995012);
INSERT INTO `zs_admin_log` VALUES (553, 1, 'admin', '/admin.php/index/login', '登录', '{\"__token__\":\"8ce81221c035c63ab9bc2960a0bdc4b1\",\"username\":\"admin\",\"captcha\":\"chav\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995107);
INSERT INTO `zs_admin_log` VALUES (554, 1, 'admin', '/admin.php/category/edit/ids/27?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u79d8\\u7c4d\",\"nickname\":\"\\u521b\\u4e1a\\u79d8\\u7c4d\",\"flag\":[\"navs\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"27\",\"status\":\"normal\"},\"ids\":\"27\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995369);
INSERT INTO `zs_admin_log` VALUES (555, 1, 'admin', '/admin.php/category/edit/ids/27?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u521b\\u4e1a\\u79d8\\u7c4d\",\"nickname\":\"\\u521b\\u4e1a\\u79d8\\u7c4d\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"27\",\"status\":\"normal\",\"flag\":[\"\"]},\"ids\":\"27\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995378);
INSERT INTO `zs_admin_log` VALUES (556, 1, 'admin', '/admin.php/category/edit/ids/28?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"nickname\":\"\\u66b4\\u529b\\u884c\\u4e1a\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"28\",\"status\":\"normal\",\"flag\":[\"\"]},\"ids\":\"28\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995385);
INSERT INTO `zs_admin_log` VALUES (557, 1, 'admin', '/admin.php/category/edit/ids/17?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u7bb1\\u5305\",\"nickname\":\"\\u7bb1\\u5305\",\"flag\":[\"navs\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"17\",\"status\":\"normal\"},\"ids\":\"17\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995393);
INSERT INTO `zs_admin_log` VALUES (558, 1, 'admin', '/admin.php/category/edit/ids/18?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u793c\\u670d\",\"nickname\":\"\\u793c\\u670d\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"18\",\"status\":\"normal\"},\"ids\":\"18\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995409);
INSERT INTO `zs_admin_log` VALUES (559, 1, 'admin', '/admin.php/category/edit/ids/16?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u7537\\u88c5\",\"nickname\":\"\\u7537\\u88c5\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"16\",\"status\":\"normal\"},\"ids\":\"16\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995418);
INSERT INTO `zs_admin_log` VALUES (560, 1, 'admin', '/admin.php/category/edit/ids/15?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"1\",\"name\":\"\\u5973\\u88c5\",\"nickname\":\"\\u5973\\u88c5\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"15\",\"status\":\"normal\"},\"ids\":\"15\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995425);
INSERT INTO `zs_admin_log` VALUES (561, 1, 'admin', '/admin.php/category/edit/ids/10?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"nickname\":\"\\u7f8e\\u5bb9\\u517b\\u751f\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"10\",\"status\":\"normal\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995431);
INSERT INTO `zs_admin_log` VALUES (562, 1, 'admin', '/admin.php/category/edit/ids/21?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u4fdd\\u5065\\u54c1\",\"nickname\":\"\\u4fdd\\u5065\\u54c1\",\"flag\":[\"index\",\"navs\",\"menu\",\"hot\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"21\",\"status\":\"normal\"},\"ids\":\"21\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995436);
INSERT INTO `zs_admin_log` VALUES (563, 1, 'admin', '/admin.php/category/edit/ids/20?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u62a4\\u80a4\\u54c1\",\"nickname\":\"\\u62a4\\u80a4\\u54c1\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"20\",\"status\":\"normal\"},\"ids\":\"20\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995441);
INSERT INTO `zs_admin_log` VALUES (564, 1, 'admin', '/admin.php/category/edit/ids/2?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u7279\\u8272\\u9910\\u996e\",\"nickname\":\"\\u7279\\u8272\\u9910\\u996e\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"2\",\"status\":\"normal\"},\"ids\":\"2\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995446);
INSERT INTO `zs_admin_log` VALUES (565, 1, 'admin', '/admin.php/category/edit/ids/9?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u5c0f\\u5403\",\"nickname\":\"\\u5c0f\\u5403\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"9\",\"status\":\"normal\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995452);
INSERT INTO `zs_admin_log` VALUES (566, 1, 'admin', '/admin.php/category/edit/ids/8?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u8336\\u996e\",\"nickname\":\"\\u8336\\u996e\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"8\",\"status\":\"normal\"},\"ids\":\"8\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995457);
INSERT INTO `zs_admin_log` VALUES (567, 1, 'admin', '/admin.php/category/edit/ids/19?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u5316\\u5986\\u54c1\",\"nickname\":\"\\u5316\\u5986\\u54c1\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"19\",\"status\":\"normal\"},\"ids\":\"19\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995463);
INSERT INTO `zs_admin_log` VALUES (568, 1, 'admin', '/admin.php/category/edit/ids/14?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"10\",\"name\":\"\\u7f8e\\u7532\",\"nickname\":\"\\u7f8e\\u7532\",\"flag\":[\"index\",\"navs\",\"hot\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"14\",\"status\":\"normal\"},\"ids\":\"14\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995468);
INSERT INTO `zs_admin_log` VALUES (569, 1, 'admin', '/admin.php/category/edit/ids/7?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"2\",\"name\":\"\\u897f\\u9910\",\"nickname\":\"\\u897f\\u9910\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"7\",\"status\":\"normal\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571995478);
INSERT INTO `zs_admin_log` VALUES (570, 1, 'admin', '/admin.php/project/edit/ids/7?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"navs\",\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p>\\u5973\\u795e\\u88c5\\u626e<\\/p>\",\"image\":\"\\/uploads\\/20191023\\/3b0e4f478342f2af11dcea44fb2a6730.jpg\",\"keywords\":\"11\\u5973\\u795e\\u88c5\\u626e\",\"description\":\"\\u5973\\u795e\\u88c5\\u626e\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"7\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996239);
INSERT INTO `zs_admin_log` VALUES (571, 1, 'admin', '/admin.php/project/edit/ids/9?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"navs\",\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"<p><span style=\\\"color: rgb(102, 102, 102); font-family: \\u5fae\\u8f6f\\u96c5\\u9ed1; font-size: 14px; background-color: rgb(255, 255, 255);\\\">\\u82ae\\u6b27\\u7ae5\\u88c5<\\/span><\\/p>\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"description\":\"\\u82ae\\u6b27\\u7ae5\\u88c5\",\"price\":\"3\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"9\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996250);
INSERT INTO `zs_admin_log` VALUES (572, 1, 'admin', '/admin.php/project/edit/ids/10?dialog=1', '项目管理 修改', '{\"dialog\":\"1\",\"row\":{\"category_id\":\"15\",\"flag\":[\"navs\",\"index\",\"menu\"],\"title\":\"\\u5973\\u795e\\u88c5\\u626e\",\"content\":\"\\uff11\",\"image\":\"\\/uploads\\/20191023\\/031dcc72e221e406ff98be29c94aff1b.gif\",\"keywords\":\"\\uff11\",\"description\":\"\\uff11\",\"price\":\"1\",\"views\":\"0\",\"weigh\":\"0\",\"switch\":\"0\"},\"ids\":\"10\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996256);
INSERT INTO `zs_admin_log` VALUES (573, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u6559\\u80b2\\u7f51\\u7edc\",\"nickname\":\"\\u6559\\u80b2\\u7f51\\u7edc\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996517);
INSERT INTO `zs_admin_log` VALUES (574, 1, 'admin', '/admin.php/category/edit/ids/29?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u6559\\u80b2\\u7f51\\u7edc\",\"nickname\":\"\\u6559\\u80b2\\u7f51\\u7edc\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"29\",\"status\":\"normal\"},\"ids\":\"29\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996535);
INSERT INTO `zs_admin_log` VALUES (575, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"article\",\"pid\":\"0\",\"name\":\"\\u5bb6\\u5177\\u73af\\u4fdd\",\"nickname\":\"\\u5bb6\\u5177\\u73af\\u4fdd\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996555);
INSERT INTO `zs_admin_log` VALUES (576, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u6bcd\\u5a74\\u7528\\u54c1\",\"nickname\":\"\\u6bcd\\u5a74\\u7528\\u54c1\",\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\",\"flag\":[\"\"]}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996573);
INSERT INTO `zs_admin_log` VALUES (577, 1, 'admin', '/admin.php/category/edit/ids/31?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u6bcd\\u5a74\\u7528\\u54c1\",\"nickname\":\"\\u6bcd\\u5a74\\u7528\\u54c1\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"31\",\"status\":\"normal\"},\"ids\":\"31\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996583);
INSERT INTO `zs_admin_log` VALUES (578, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u793c\\u54c1\\u88c5\\u9970\",\"nickname\":\"\\u793c\\u54c1\\u88c5\\u9970\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996605);
INSERT INTO `zs_admin_log` VALUES (579, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u5efa\\u6750\\u539f\\u6599\",\"nickname\":\"\\u5efa\\u6750\\u539f\\u6599\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996623);
INSERT INTO `zs_admin_log` VALUES (580, 1, 'admin', '/admin.php/category/edit/ids/30?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u5bb6\\u5177\\u73af\\u4fdd\",\"nickname\":\"\\u5bb6\\u5177\\u73af\\u4fdd\",\"flag\":[\"index\",\"navs\",\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"30\",\"status\":\"normal\"},\"ids\":\"30\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996720);
INSERT INTO `zs_admin_log` VALUES (581, 1, 'admin', '/admin.php/category/add?dialog=1', '分类管理 添加', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u9152\\u6c34\\u996e\\u6599\",\"nickname\":\"\\u9152\\u6c34\\u996e\\u6599\",\"flag\":[\"menu\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996759);
INSERT INTO `zs_admin_log` VALUES (582, 1, 'admin', '/admin.php/category/edit/ids/34?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u9152\\u6c34\\u996e\\u6599\",\"nickname\":\"\\u9152\\u6c34\\u996e\\u6599\",\"flag\":[\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"34\",\"status\":\"normal\"},\"ids\":\"34\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996892);
INSERT INTO `zs_admin_log` VALUES (583, 1, 'admin', '/admin.php/category/edit/ids/33?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u5efa\\u6750\\u539f\\u6599\",\"nickname\":\"\\u5efa\\u6750\\u539f\\u6599\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"33\",\"status\":\"normal\"},\"ids\":\"33\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996896);
INSERT INTO `zs_admin_log` VALUES (584, 1, 'admin', '/admin.php/category/edit/ids/32?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u793c\\u54c1\\u88c5\\u9970\",\"nickname\":\"\\u793c\\u54c1\\u88c5\\u9970\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"32\",\"status\":\"normal\"},\"ids\":\"32\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996901);
INSERT INTO `zs_admin_log` VALUES (585, 1, 'admin', '/admin.php/category/edit/ids/31?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u6bcd\\u5a74\\u7528\\u54c1\",\"nickname\":\"\\u6bcd\\u5a74\\u7528\\u54c1\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"31\",\"status\":\"normal\"},\"ids\":\"31\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996905);
INSERT INTO `zs_admin_log` VALUES (586, 1, 'admin', '/admin.php/category/edit/ids/1?dialog=1', '分类管理 编辑', '{\"dialog\":\"1\",\"row\":{\"type\":\"project\",\"pid\":\"0\",\"name\":\"\\u670d\\u9970\\u978b\\u5305\",\"nickname\":\"\\u670d\\u9970\\u978b\\u5305\",\"flag\":[\"index\",\"navs\",\"menu\",\"top\"],\"image\":\"\",\"keywords\":\"\",\"description\":\"\",\"weigh\":\"35\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571996970);
INSERT INTO `zs_admin_log` VALUES (587, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"25,24,23,22,27,19,18,17,16,14,13,15,7,21\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997637);
INSERT INTO `zs_admin_log` VALUES (588, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/menber\\/advert\\/list\",\"title\":\"\\u5e7f\\u544a\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997827);
INSERT INTO `zs_admin_log` VALUES (589, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"28\",\"name\":\"index\\/menber\\/advert\\/add\",\"title\":\"\\u6dfb\\u52a0\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997855);
INSERT INTO `zs_admin_log` VALUES (590, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"28\",\"name\":\"index\\/menber\\/advert\\/edit\",\"title\":\"\\u4fee\\u6539\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997879);
INSERT INTO `zs_admin_log` VALUES (591, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"0\",\"name\":\"index\\/menber\\/advert\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997897);
INSERT INTO `zs_admin_log` VALUES (592, 1, 'admin', '/admin.php/user/rule/edit/ids/31?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"21\",\"name\":\"index\\/menber\\/advert\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"31\",\"status\":\"normal\"},\"ids\":\"31\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997905);
INSERT INTO `zs_admin_log` VALUES (593, 1, 'admin', '/admin.php/user/rule/edit/ids/31?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"28\",\"name\":\"index\\/menber\\/advert\\/del\",\"title\":\"\\u5220\\u9664\",\"remark\":\"\",\"weigh\":\"31\",\"status\":\"normal\"},\"ids\":\"31\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571997922);
INSERT INTO `zs_admin_log` VALUES (594, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,21,22,23,24,25,26,27,28,29,30,31\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571998012);
INSERT INTO `zs_admin_log` VALUES (595, 1, 'admin', '/admin.php/user/rule/edit/ids/28?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"0\",\"name\":\"index\\/menber\\/advert\",\"title\":\"\\u5e7f\\u544a\\u7ba1\\u7406\",\"remark\":\"\",\"weigh\":\"28\",\"status\":\"normal\"},\"ids\":\"28\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571999456);
INSERT INTO `zs_admin_log` VALUES (596, 1, 'admin', '/admin.php/user/rule/add?dialog=1', '会员管理 会员规则 添加', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"1\",\"pid\":\"28\",\"name\":\"index\\/menber\\/advert\\/list\",\"title\":\"\\u5e7f\\u544a\\u5217\\u8868\",\"remark\":\"\",\"weigh\":\"0\",\"status\":\"normal\"}}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571999480);
INSERT INTO `zs_admin_log` VALUES (597, 1, 'admin', '/admin.php/user/rule/edit/ids/29?dialog=1', '会员管理 会员规则 编辑', '{\"dialog\":\"1\",\"row\":{\"ismenu\":\"0\",\"pid\":\"28\",\"name\":\"index\\/menber\\/advert\\/add\",\"title\":\"\\u6dfb\\u52a0\",\"remark\":\"\",\"weigh\":\"29\",\"status\":\"normal\"},\"ids\":\"29\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571999502);
INSERT INTO `zs_admin_log` VALUES (598, 1, 'admin', '/admin.php/user/group/edit/ids/1?dialog=1', '会员管理 会员分组 编辑', '{\"dialog\":\"1\",\"row\":{\"rules\":\"7,13,14,15,16,17,18,19,21,22,23,24,25,26,27,28,29,30,31,32\",\"name\":\"\\u6d4b\\u8bd5\\u7ec4\",\"status\":\"normal\"},\"ids\":\"1\"}', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', 1571999534);

-- ----------------------------
-- Table structure for zs_advert
-- ----------------------------
DROP TABLE IF EXISTS `zs_advert`;
CREATE TABLE `zs_advert`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `admin_id` int(11) NULL DEFAULT NULL COMMENT '公司ｉｄ',
  `flag` set('a') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '标志',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `url` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '链接地址',
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片地址',
  `lavel` int(11) NULL DEFAULT NULL COMMENT '权重',
  `createtime` int(11) NULL DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '图文广告表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for zs_article
-- ----------------------------
DROP TABLE IF EXISTS `zs_article`;
CREATE TABLE `zs_article`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) NOT NULL DEFAULT 0 COMMENT '用户ID',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '分类ID(单选)',
  `flag` set('hot','index','recommend') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '标志(多选):hot=热门,index=首页,recommend=推荐',
  `tdk_title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'tdk-标题',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '文章标题',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '缩略图片',
  `tdk_key` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'tdk-关键字',
  `tdk_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'tdk-描述',
  `views` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '点击',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `deletetime` int(10) NULL DEFAULT NULL COMMENT '删除时间',
  `weigh` int(10) NULL DEFAULT 0 COMMENT '权重',
  `switch` int(1) NULL DEFAULT 0 COMMENT '开关',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '文章资讯表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_article
-- ----------------------------
INSERT INTO `zs_article` VALUES (1, 2, 13, 'hot,index', '我是一篇测试文章', '１', '<p>我是测试内容</p>', '１２', '关键字', '描述１', 1, 1499682526, 1571820550, 1571820550, -1, 0);
INSERT INTO `zs_article` VALUES (2, 2, 12, 'hot,index', '奶茶', '欣欣奶茶', '好喝', '/uploads/20191009/70579d8bb412a6aa768564a881dca806.png', '奶茶', '奶茶', 1110, 1570609079, 1571889259, NULL, 3, 1);
INSERT INTO `zs_article` VALUES (3, 2, 9, '', 'q', 'qqq', 'q', '/uploads/20191009/70579d8bb412a6aa768564a881dca806.png', 'q', 'q', 0, 1570613181, 1571889273, NULL, 2, 1);
INSERT INTO `zs_article` VALUES (16, 2, 2, '', '１１', '１１１', '<p>１</p>', NULL, '１', '１', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (17, 2, 12, '', '', '１１１１', '１１１１', '', '', '', 0, NULL, 1571820601, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (18, 2, 12, '', '', '项目管理', '１', '', '', '', 0, NULL, 1571888029, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (19, 4, 4, '', 'q', '111111', '<p>1111111</p>', NULL, 'q', '去q', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (20, 4, 5, '', '', '22222', '<p>222222</p>', NULL, '', '', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (21, 4, 4, '', '', '33333333', '<p>33333</p>', NULL, '', '', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (22, 4, 5, '', '', '１１１１１', '<p>１１１１１</p>', NULL, '', '', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (23, 4, 22, '', '', '１１１１', '<p>１１１</p>', NULL, '', '１１１１', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (24, 4, 23, '', '', '１１１', '<p>１１１</p>', NULL, '', '１１', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (25, 4, 24, '', '', '１１１', '<p>１１１</p>', NULL, '', '１１', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (26, 4, 25, '', '', '１１１', '<p>１１１</p>', NULL, '', '１１', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (27, 4, 26, '', '', '１１１１', '<p>１１１１</p>', NULL, '', '', 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_article` VALUES (28, 4, 27, '', '', '１１１１', '<p>１１１１</p>', NULL, '', '', 0, NULL, NULL, NULL, 0, 0);

-- ----------------------------
-- Table structure for zs_attachment
-- ----------------------------
DROP TABLE IF EXISTS `zs_attachment`;
CREATE TABLE `zs_attachment`  (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '管理员ID',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '会员ID',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '物理路径',
  `imagewidth` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '宽度',
  `imageheight` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '高度',
  `imagetype` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图片类型',
  `imageframes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '图片帧数',
  `filesize` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '文件大小',
  `mimetype` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'mime类型',
  `extparam` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '透传数据',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建日期',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `uploadtime` int(10) NULL DEFAULT NULL COMMENT '上传时间',
  `storage` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'local' COMMENT '存储位置',
  `sha1` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '文件 sha1编码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '附件表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_attachment
-- ----------------------------
INSERT INTO `zs_attachment` VALUES (1, 1, 0, '/assets/img/qrcode.png', '150', '150', 'png', 0, 21859, 'image/png', '', 1499681848, 1499681848, 1499681848, 'local', '17163603d0263e4838b9387ff2cd4877e8b018f6');
INSERT INTO `zs_attachment` VALUES (4, 1, 0, '/uploads/20191008/70579d8bb412a6aa768564a881dca806.png', '235', '74', 'png', 0, 4033, 'image/png', '{\"name\":\"\\u5c4f\\u5e55\\u622a\\u56fe.png\"}', 1570531024, 1570531024, 1570531024, 'local', 'df52e4c77288f1be8892534848769c5bf0f5fc59');
INSERT INTO `zs_attachment` VALUES (5, 1, 0, '/uploads/20191009/70579d8bb412a6aa768564a881dca806.png', '235', '74', 'png', 0, 4033, 'image/png', '{\"name\":\"\\u5c4f\\u5e55\\u622a\\u56fe.png\"}', 1570608548, 1570608548, 1570608548, 'local', 'df52e4c77288f1be8892534848769c5bf0f5fc59');
INSERT INTO `zs_attachment` VALUES (6, 0, 2, '/uploads/20191021/90a36855cf364313ae2fd4e628ceb3ed.png', '755', '349', 'png', 0, 31865, 'image/png', '', 1571653626, 1571653626, 1571653626, 'local', '5debafc36a5aed23745f166994db6ed49993eddf');
INSERT INTO `zs_attachment` VALUES (7, 0, 2, '/uploads/20191021/70579d8bb412a6aa768564a881dca806.png', '235', '74', 'png', 0, 4033, 'image/png', '', 1571653633, 1571653633, 1571653633, 'local', 'df52e4c77288f1be8892534848769c5bf0f5fc59');
INSERT INTO `zs_attachment` VALUES (8, 0, 4, '/uploads/20191023/3b0e4f478342f2af11dcea44fb2a6730.jpg', '120', '90', 'jpg', 0, 4400, 'image/jpeg', '', 1571822352, 1571822352, 1571822352, 'local', '2996ce9df3cbc07bef1d40a48c1b5ab52f776ee7');
INSERT INTO `zs_attachment` VALUES (9, 0, 4, '/uploads/20191023/031dcc72e221e406ff98be29c94aff1b.gif', '200', '150', 'gif', 0, 16179, 'image/gif', '', 1571823550, 1571823550, 1571823550, 'local', '261e02ff00b7b033b1fd9668b98bc3d44e76d3fe');

-- ----------------------------
-- Table structure for zs_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `zs_auth_group`;
CREATE TABLE `zs_auth_group`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '父组别',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '组名',
  `rules` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '规则ID',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '分组表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_auth_group
-- ----------------------------
INSERT INTO `zs_auth_group` VALUES (1, 0, 'Admin group', '*', 1490883540, 149088354, 'normal');
INSERT INTO `zs_auth_group` VALUES (2, 1, '二级管理组', '1,2,4,6,7,8,9,10,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,85,101,102,5', 1490883540, 1570615212, 'normal');
INSERT INTO `zs_auth_group` VALUES (3, 2, 'Third group', '1,4,9,10,11,13,14,15,16,17,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,5', 1490883540, 1502205322, 'normal');
INSERT INTO `zs_auth_group` VALUES (4, 1, 'Second group 2', '1,4,13,14,15,16,17,55,56,57,58,59,60,61,62,63,64,65', 1490883540, 1502205350, 'normal');
INSERT INTO `zs_auth_group` VALUES (5, 2, 'Third group 2', '1,2,6,7,8,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34', 1490883540, 1502205344, 'normal');

-- ----------------------------
-- Table structure for zs_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `zs_auth_group_access`;
CREATE TABLE `zs_auth_group_access`  (
  `uid` int(10) UNSIGNED NOT NULL COMMENT '会员ID',
  `group_id` int(10) UNSIGNED NOT NULL COMMENT '级别ID',
  UNIQUE INDEX `uid_group_id`(`uid`, `group_id`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE,
  INDEX `group_id`(`group_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '权限分组表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_auth_group_access
-- ----------------------------
INSERT INTO `zs_auth_group_access` VALUES (1, 1);

-- ----------------------------
-- Table structure for zs_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `zs_auth_rule`;
CREATE TABLE `zs_auth_rule`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('menu','file') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'file' COMMENT 'menu为菜单,file为权限节点',
  `pid` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '父ID',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '规则名称',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '规则名称',
  `icon` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图标',
  `condition` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '条件',
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '备注',
  `ismenu` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否为菜单',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT 0 COMMENT '权重',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE,
  INDEX `weigh`(`weigh`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 104 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '节点表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_auth_rule
-- ----------------------------
INSERT INTO `zs_auth_rule` VALUES (1, 'file', 0, 'dashboard', 'Dashboard', 'fa fa-dashboard', '', 'Dashboard tips', 1, 1497429920, 1497429920, 143, 'normal');
INSERT INTO `zs_auth_rule` VALUES (2, 'file', 0, 'general', 'General', 'fa fa-cogs', '', '', 1, 1497429920, 1497430169, 137, 'normal');
INSERT INTO `zs_auth_rule` VALUES (3, 'file', 0, 'category', 'Category', 'fa fa-leaf', '', 'Category tips', 1, 1497429920, 1497429920, 119, 'normal');
INSERT INTO `zs_auth_rule` VALUES (4, 'file', 0, 'addon', 'Addon', 'fa fa-rocket', '', 'Addon tips', 1, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (5, 'file', 0, 'auth', 'Auth', 'fa fa-group', '', '', 1, 1497429920, 1497430092, 99, 'normal');
INSERT INTO `zs_auth_rule` VALUES (6, 'file', 2, 'general/config', '后台配置', 'fa fa-cog', '', 'Config tips', 1, 1497429920, 1570504079, 60, 'normal');
INSERT INTO `zs_auth_rule` VALUES (7, 'file', 2, 'general/attachment', 'Attachment', 'fa fa-file-image-o', '', 'Attachment tips', 1, 1497429920, 1497430699, 34, 'normal');
INSERT INTO `zs_auth_rule` VALUES (8, 'file', 2, 'general/profile', 'Profile', 'fa fa-user', '', '', 1, 1497429920, 1497429920, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (9, 'file', 5, 'auth/admin', 'Admin', 'fa fa-user', '', 'Admin tips', 1, 1497429920, 1497430320, 118, 'normal');
INSERT INTO `zs_auth_rule` VALUES (10, 'file', 5, 'auth/adminlog', 'Admin log', 'fa fa-list-alt', '', 'Admin log tips', 1, 1497429920, 1497430307, 113, 'normal');
INSERT INTO `zs_auth_rule` VALUES (11, 'file', 5, 'auth/group', 'Group', 'fa fa-group', '', 'Group tips', 1, 1497429920, 1497429920, 109, 'normal');
INSERT INTO `zs_auth_rule` VALUES (12, 'file', 5, 'auth/rule', 'Rule', 'fa fa-bars', '', 'Rule tips', 1, 1497429920, 1497430581, 104, 'normal');
INSERT INTO `zs_auth_rule` VALUES (13, 'file', 1, 'dashboard/index', 'View', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 136, 'normal');
INSERT INTO `zs_auth_rule` VALUES (14, 'file', 1, 'dashboard/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 135, 'normal');
INSERT INTO `zs_auth_rule` VALUES (15, 'file', 1, 'dashboard/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 133, 'normal');
INSERT INTO `zs_auth_rule` VALUES (16, 'file', 1, 'dashboard/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 134, 'normal');
INSERT INTO `zs_auth_rule` VALUES (17, 'file', 1, 'dashboard/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 132, 'normal');
INSERT INTO `zs_auth_rule` VALUES (18, 'file', 6, 'general/config/index', 'View', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 52, 'normal');
INSERT INTO `zs_auth_rule` VALUES (19, 'file', 6, 'general/config/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 51, 'normal');
INSERT INTO `zs_auth_rule` VALUES (20, 'file', 6, 'general/config/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 50, 'normal');
INSERT INTO `zs_auth_rule` VALUES (21, 'file', 6, 'general/config/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 49, 'normal');
INSERT INTO `zs_auth_rule` VALUES (22, 'file', 6, 'general/config/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 48, 'normal');
INSERT INTO `zs_auth_rule` VALUES (23, 'file', 7, 'general/attachment/index', 'View', 'fa fa-circle-o', '', 'Attachment tips', 0, 1497429920, 1497429920, 59, 'normal');
INSERT INTO `zs_auth_rule` VALUES (24, 'file', 7, 'general/attachment/select', 'Select attachment', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 58, 'normal');
INSERT INTO `zs_auth_rule` VALUES (25, 'file', 7, 'general/attachment/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 57, 'normal');
INSERT INTO `zs_auth_rule` VALUES (26, 'file', 7, 'general/attachment/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 56, 'normal');
INSERT INTO `zs_auth_rule` VALUES (27, 'file', 7, 'general/attachment/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 55, 'normal');
INSERT INTO `zs_auth_rule` VALUES (28, 'file', 7, 'general/attachment/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 54, 'normal');
INSERT INTO `zs_auth_rule` VALUES (29, 'file', 8, 'general/profile/index', 'View', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 33, 'normal');
INSERT INTO `zs_auth_rule` VALUES (30, 'file', 8, 'general/profile/update', 'Update profile', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 32, 'normal');
INSERT INTO `zs_auth_rule` VALUES (31, 'file', 8, 'general/profile/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 31, 'normal');
INSERT INTO `zs_auth_rule` VALUES (32, 'file', 8, 'general/profile/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 30, 'normal');
INSERT INTO `zs_auth_rule` VALUES (33, 'file', 8, 'general/profile/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 29, 'normal');
INSERT INTO `zs_auth_rule` VALUES (34, 'file', 8, 'general/profile/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 28, 'normal');
INSERT INTO `zs_auth_rule` VALUES (35, 'file', 3, 'category/index', 'View', 'fa fa-circle-o', '', 'Category tips', 0, 1497429920, 1497429920, 142, 'normal');
INSERT INTO `zs_auth_rule` VALUES (36, 'file', 3, 'category/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 141, 'normal');
INSERT INTO `zs_auth_rule` VALUES (37, 'file', 3, 'category/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 140, 'normal');
INSERT INTO `zs_auth_rule` VALUES (38, 'file', 3, 'category/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 139, 'normal');
INSERT INTO `zs_auth_rule` VALUES (39, 'file', 3, 'category/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 138, 'normal');
INSERT INTO `zs_auth_rule` VALUES (40, 'file', 9, 'auth/admin/index', 'View', 'fa fa-circle-o', '', 'Admin tips', 0, 1497429920, 1497429920, 117, 'normal');
INSERT INTO `zs_auth_rule` VALUES (41, 'file', 9, 'auth/admin/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 116, 'normal');
INSERT INTO `zs_auth_rule` VALUES (42, 'file', 9, 'auth/admin/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 115, 'normal');
INSERT INTO `zs_auth_rule` VALUES (43, 'file', 9, 'auth/admin/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 114, 'normal');
INSERT INTO `zs_auth_rule` VALUES (44, 'file', 10, 'auth/adminlog/index', 'View', 'fa fa-circle-o', '', 'Admin log tips', 0, 1497429920, 1497429920, 112, 'normal');
INSERT INTO `zs_auth_rule` VALUES (45, 'file', 10, 'auth/adminlog/detail', 'Detail', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 111, 'normal');
INSERT INTO `zs_auth_rule` VALUES (46, 'file', 10, 'auth/adminlog/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 110, 'normal');
INSERT INTO `zs_auth_rule` VALUES (47, 'file', 11, 'auth/group/index', 'View', 'fa fa-circle-o', '', 'Group tips', 0, 1497429920, 1497429920, 108, 'normal');
INSERT INTO `zs_auth_rule` VALUES (48, 'file', 11, 'auth/group/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 107, 'normal');
INSERT INTO `zs_auth_rule` VALUES (49, 'file', 11, 'auth/group/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 106, 'normal');
INSERT INTO `zs_auth_rule` VALUES (50, 'file', 11, 'auth/group/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 105, 'normal');
INSERT INTO `zs_auth_rule` VALUES (51, 'file', 12, 'auth/rule/index', 'View', 'fa fa-circle-o', '', 'Rule tips', 0, 1497429920, 1497429920, 103, 'normal');
INSERT INTO `zs_auth_rule` VALUES (52, 'file', 12, 'auth/rule/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 102, 'normal');
INSERT INTO `zs_auth_rule` VALUES (53, 'file', 12, 'auth/rule/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 101, 'normal');
INSERT INTO `zs_auth_rule` VALUES (54, 'file', 12, 'auth/rule/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 100, 'normal');
INSERT INTO `zs_auth_rule` VALUES (55, 'file', 4, 'addon/index', 'View', 'fa fa-circle-o', '', 'Addon tips', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (56, 'file', 4, 'addon/add', 'Add', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (57, 'file', 4, 'addon/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (58, 'file', 4, 'addon/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (59, 'file', 4, 'addon/local', 'Local install', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (60, 'file', 4, 'addon/state', 'Update state', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (61, 'file', 4, 'addon/install', 'Install', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (62, 'file', 4, 'addon/uninstall', 'Uninstall', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (63, 'file', 4, 'addon/config', 'Setting', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (64, 'file', 4, 'addon/refresh', 'Refresh', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (65, 'file', 4, 'addon/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (66, 'file', 0, 'user', '会员管理', 'fa fa-list', '', '', 1, 1516374729, 1571045232, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (67, 'file', 66, 'user/user', '会员管理', 'fa fa-user', '', '', 1, 1516374729, 1571045239, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (68, 'file', 67, 'user/user/index', 'View', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (69, 'file', 67, 'user/user/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (70, 'file', 67, 'user/user/add', 'Add', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (71, 'file', 67, 'user/user/del', 'Del', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (72, 'file', 67, 'user/user/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (73, 'file', 66, 'user/group', 'User group', 'fa fa-users', '', '', 1, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (74, 'file', 73, 'user/group/add', 'Add', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (75, 'file', 73, 'user/group/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (76, 'file', 73, 'user/group/index', 'View', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (77, 'file', 73, 'user/group/del', 'Del', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (78, 'file', 73, 'user/group/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (79, 'file', 66, 'user/rule', 'User rule', 'fa fa-circle-o', '', '', 1, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (80, 'file', 79, 'user/rule/index', 'View', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (81, 'file', 79, 'user/rule/del', 'Del', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (82, 'file', 79, 'user/rule/add', 'Add', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (83, 'file', 79, 'user/rule/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (84, 'file', 79, 'user/rule/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (85, 'file', 2, 'general/web', '前台配置', 'fa fa-home', '', '', 1, 1570504153, 1570521699, 53, 'normal');
INSERT INTO `zs_auth_rule` VALUES (86, 'file', 0, 'test', '测试管理', 'fa fa-circle-o', '', '', 1, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (87, 'file', 86, 'test/index', '查看', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (88, 'file', 86, 'test/recyclebin', '回收站', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (89, 'file', 86, 'test/add', '添加', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (90, 'file', 86, 'test/edit', '编辑', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (91, 'file', 86, 'test/del', '删除', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (92, 'file', 86, 'test/destroy', '真实删除', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (93, 'file', 86, 'test/restore', '还原', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (94, 'file', 86, 'test/multi', '批量更新', 'fa fa-circle-o', '', '', 0, 1570590970, 1570590970, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (95, 'file', 0, 'project', '项目管理', 'fa fa-database', '', '', 1, 1570603257, 1570603257, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (96, 'file', 95, 'project/edit', '修改', 'fa fa-circle-o', '', '', 0, 1570614864, 1570614864, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (97, 'file', 95, 'project/del', '删除', 'fa fa-circle-o', '', '', 0, 1570614892, 1570614922, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (98, 'file', 95, 'project/destroy', '永久删除', 'fa fa-circle-o', '', '', 0, 1570614947, 1570614947, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (99, 'file', 95, 'project/restore', '还原', 'fa fa-circle-o', '', '', 0, 1570614991, 1570614991, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (100, 'file', 95, 'project/recyclebin', '回收站', 'fa fa-circle-o', '', '', 0, 1570615050, 1570615050, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (101, 'file', 85, 'general/web/edit', '更新配置', 'fa fa-circle-o', '', '', 0, 1570615161, 1570615161, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (102, 'file', 85, 'general/web/tdk', 'TDK', 'fa fa-circle-o', '', '', 0, 1570615189, 1570615189, 0, 'normal');
INSERT INTO `zs_auth_rule` VALUES (103, 'file', 0, 'article', '文章管理', 'fa fa-book', '', '', 1, 1570616980, 1570616980, 0, 'normal');

-- ----------------------------
-- Table structure for zs_category
-- ----------------------------
DROP TABLE IF EXISTS `zs_category`;
CREATE TABLE `zs_category`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '父ID',
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '栏目类型',
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `flag` set('hot','index','recommend','top','menu','navs') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图片',
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '描述',
  `diyname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '自定义名称',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT 0 COMMENT '权重',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `weigh`(`weigh`, `id`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '分类表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_category
-- ----------------------------
INSERT INTO `zs_category` VALUES (1, 0, 'project', '服饰鞋包', '服饰鞋包', 'index,top,menu,navs', '', '', '', '', 1570415171, 1571996970, 35, 'normal');
INSERT INTO `zs_category` VALUES (2, 0, 'project', '特色餐饮', '特色餐饮', 'index,top,menu,navs', '', '', '', '', 1570415290, 1571995446, 2, 'normal');
INSERT INTO `zs_category` VALUES (4, 0, 'article', '创业指南', '创业指南', 'index,top', '', '', '', '', 1570420584, 1571907130, 4, 'normal');
INSERT INTO `zs_category` VALUES (5, 0, 'article', '最新动态', '最新动态', 'index,top', '', '', '', '', 1570420619, 1571907111, 5, 'normal');
INSERT INTO `zs_category` VALUES (6, 2, 'project', '中餐', '中餐', 'index,menu', '', '', '', '', 1570437117, 1571912993, 6, 'normal');
INSERT INTO `zs_category` VALUES (7, 2, 'project', '西餐', '西餐', 'index,menu,navs', '', '', '', '', 1570437138, 1571995478, 7, 'normal');
INSERT INTO `zs_category` VALUES (8, 2, 'project', '茶饮', '茶饮', 'index,menu,navs', '', '', '', '', 1570437169, 1571995457, 8, 'normal');
INSERT INTO `zs_category` VALUES (9, 2, 'project', '小吃', '小吃', 'index,menu,navs', '', '', '', '', 1570437184, 1571995452, 9, 'normal');
INSERT INTO `zs_category` VALUES (10, 0, 'project', '美容养生', '美容养生', 'index,top,menu,navs', '', '', '', '', 1570443653, 1571995431, 10, 'normal');
INSERT INTO `zs_category` VALUES (14, 10, 'project', '美甲', '美甲', 'hot,index,navs', '', '', '', '', 1571802913, 1571995468, 14, 'normal');
INSERT INTO `zs_category` VALUES (15, 1, 'project', '女装', '女装', 'index,menu,navs', '', '', '', '', 1571802927, 1571995425, 15, 'normal');
INSERT INTO `zs_category` VALUES (16, 1, 'project', '男装', '男装', 'index,menu,navs', '', '', '', '', 1571821708, 1571995418, 16, 'normal');
INSERT INTO `zs_category` VALUES (17, 1, 'project', '箱包', '箱包', 'navs', '', '', '', '', 1571821722, 1571995393, 17, 'normal');
INSERT INTO `zs_category` VALUES (18, 1, 'project', '礼服', '礼服', 'index,menu,navs', '', '', '', '', 1571821739, 1571995409, 18, 'normal');
INSERT INTO `zs_category` VALUES (19, 10, 'project', '化妆品', '化妆品', 'index,menu,navs', '', '', '', '', 1571821790, 1571995463, 19, 'normal');
INSERT INTO `zs_category` VALUES (20, 10, 'project', '护肤品', '护肤品', 'index,menu,navs', '', '', '', '', 1571821804, 1571995441, 20, 'normal');
INSERT INTO `zs_category` VALUES (21, 10, 'project', '保健品', '保健品', 'hot,index,menu,navs', '', '', '', '', 1571821822, 1571995436, 21, 'normal');
INSERT INTO `zs_category` VALUES (22, 0, 'article', '市场行情', '市场行情', 'index,top', '', '', '', '', 1571906779, 1571907102, 22, 'normal');
INSERT INTO `zs_category` VALUES (23, 0, 'article', '最佳商机', '最佳商机', 'index,top', '', '', '', '', 1571906798, 1571907097, 23, 'normal');
INSERT INTO `zs_category` VALUES (24, 0, 'article', '项目分析', '项目分析', 'index,top', '', '', '', '', 1571906819, 1571907092, 24, 'normal');
INSERT INTO `zs_category` VALUES (25, 0, 'article', '草根必读', '草根必读', '', '', '', '', '', 1571906828, 1571906828, 25, 'normal');
INSERT INTO `zs_category` VALUES (26, 0, 'article', '创业问答', '创业问答', '', '', '', '', '', 1571906845, 1571906845, 26, 'normal');
INSERT INTO `zs_category` VALUES (27, 0, 'article', '创业秘籍', '创业秘籍', '', '', '', '', '', 1571906864, 1571995378, 27, 'normal');
INSERT INTO `zs_category` VALUES (28, 0, 'article', '暴力行业', '暴力行业', '', '', '', '', '', 1571906874, 1571995385, 28, 'normal');
INSERT INTO `zs_category` VALUES (29, 0, 'project', '教育网络', '教育网络', 'index,menu,navs', '', '', '', '', 1571996517, 1571996535, 29, 'normal');
INSERT INTO `zs_category` VALUES (30, 0, 'project', '家具环保', '家具环保', 'index,menu,navs', '', '', '', '', 1571996555, 1571996720, 30, 'normal');
INSERT INTO `zs_category` VALUES (31, 0, 'project', '母婴用品', '母婴用品', 'index,top,menu,navs', '', '', '', '', 1571996573, 1571996905, 31, 'normal');
INSERT INTO `zs_category` VALUES (32, 0, 'project', '礼品装饰', '礼品装饰', 'index,top,menu,navs', '', '', '', '', 1571996605, 1571996901, 32, 'normal');
INSERT INTO `zs_category` VALUES (33, 0, 'project', '建材原料', '建材原料', 'index,top,menu,navs', '', '', '', '', 1571996623, 1571996896, 33, 'normal');
INSERT INTO `zs_category` VALUES (34, 0, 'project', '酒水饮料', '酒水饮料', 'top,menu', '', '', '', '', 1571996759, 1571996892, 34, 'normal');

-- ----------------------------
-- Table structure for zs_china
-- ----------------------------
DROP TABLE IF EXISTS `zs_china`;
CREATE TABLE `zs_china`  (
  `id` int(10) NOT NULL COMMENT 'ID',
  `areaname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '栏目名',
  `parentid` int(10) NULL DEFAULT NULL COMMENT '父栏目',
  `shortname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1.省 2.市 3.区',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parentid`(`parentid`) USING BTREE,
  CONSTRAINT `zs_china_ibfk_1` FOREIGN KEY (`parentid`) REFERENCES `zs_china` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '省市区表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zs_china
-- ----------------------------
INSERT INTO `zs_china` VALUES (1, '中国', NULL, '0', 0);
INSERT INTO `zs_china` VALUES (110000, '北京', 1, '北京', 1);
INSERT INTO `zs_china` VALUES (110100, '北京市', 110000, '北京', 2);
INSERT INTO `zs_china` VALUES (120000, '天津', 1, '天津', 1);
INSERT INTO `zs_china` VALUES (120100, '天津市', 120000, '天津', 2);
INSERT INTO `zs_china` VALUES (130000, '河北省', 1, '河北', 1);
INSERT INTO `zs_china` VALUES (130100, '石家庄市', 130000, '石家庄', 2);
INSERT INTO `zs_china` VALUES (130200, '唐山市', 130000, '唐山', 2);
INSERT INTO `zs_china` VALUES (130300, '秦皇岛市', 130000, '秦皇岛', 2);
INSERT INTO `zs_china` VALUES (130400, '邯郸市', 130000, '邯郸', 2);
INSERT INTO `zs_china` VALUES (130500, '邢台市', 130000, '邢台', 2);
INSERT INTO `zs_china` VALUES (130600, '保定市', 130000, '保定', 2);
INSERT INTO `zs_china` VALUES (130700, '张家口市', 130000, '张家口', 2);
INSERT INTO `zs_china` VALUES (130800, '承德市', 130000, '承德', 2);
INSERT INTO `zs_china` VALUES (130900, '沧州市', 130000, '沧州', 2);
INSERT INTO `zs_china` VALUES (131000, '廊坊市', 130000, '廊坊', 2);
INSERT INTO `zs_china` VALUES (131100, '衡水市', 130000, '衡水', 2);
INSERT INTO `zs_china` VALUES (140000, '山西省', 1, '山西', 1);
INSERT INTO `zs_china` VALUES (140100, '太原市', 140000, '太原', 2);
INSERT INTO `zs_china` VALUES (140200, '大同市', 140000, '大同', 2);
INSERT INTO `zs_china` VALUES (140300, '阳泉市', 140000, '阳泉', 2);
INSERT INTO `zs_china` VALUES (140400, '长治市', 140000, '长治', 2);
INSERT INTO `zs_china` VALUES (140500, '晋城市', 140000, '晋城', 2);
INSERT INTO `zs_china` VALUES (140600, '朔州市', 140000, '朔州', 2);
INSERT INTO `zs_china` VALUES (140700, '晋中市', 140000, '晋中', 2);
INSERT INTO `zs_china` VALUES (140800, '运城市', 140000, '运城', 2);
INSERT INTO `zs_china` VALUES (140900, '忻州市', 140000, '忻州', 2);
INSERT INTO `zs_china` VALUES (141000, '临汾市', 140000, '临汾', 2);
INSERT INTO `zs_china` VALUES (141100, '吕梁市', 140000, '吕梁', 2);
INSERT INTO `zs_china` VALUES (150000, '内蒙古自治区', 1, '内蒙古', 1);
INSERT INTO `zs_china` VALUES (150100, '呼和浩特市', 150000, '呼和浩特', 2);
INSERT INTO `zs_china` VALUES (150200, '包头市', 150000, '包头', 2);
INSERT INTO `zs_china` VALUES (150300, '乌海市', 150000, '乌海', 2);
INSERT INTO `zs_china` VALUES (150400, '赤峰市', 150000, '赤峰', 2);
INSERT INTO `zs_china` VALUES (150500, '通辽市', 150000, '通辽', 2);
INSERT INTO `zs_china` VALUES (150600, '鄂尔多斯市', 150000, '鄂尔多斯', 2);
INSERT INTO `zs_china` VALUES (150700, '呼伦贝尔市', 150000, '呼伦贝尔', 2);
INSERT INTO `zs_china` VALUES (150800, '巴彦淖尔市', 150000, '巴彦淖尔', 2);
INSERT INTO `zs_china` VALUES (150900, '乌兰察布市', 150000, '乌兰察布', 2);
INSERT INTO `zs_china` VALUES (152200, '兴安盟', 150000, '兴安', 2);
INSERT INTO `zs_china` VALUES (152500, '锡林郭勒盟', 150000, '锡林郭勒', 2);
INSERT INTO `zs_china` VALUES (152900, '阿拉善盟', 150000, '阿拉善', 2);
INSERT INTO `zs_china` VALUES (210000, '辽宁省', 1, '辽宁', 1);
INSERT INTO `zs_china` VALUES (210100, '沈阳市', 210000, '沈阳', 2);
INSERT INTO `zs_china` VALUES (210200, '大连市', 210000, '大连', 2);
INSERT INTO `zs_china` VALUES (210300, '鞍山市', 210000, '鞍山', 2);
INSERT INTO `zs_china` VALUES (210400, '抚顺市', 210000, '抚顺', 2);
INSERT INTO `zs_china` VALUES (210500, '本溪市', 210000, '本溪', 2);
INSERT INTO `zs_china` VALUES (210600, '丹东市', 210000, '丹东', 2);
INSERT INTO `zs_china` VALUES (210700, '锦州市', 210000, '锦州', 2);
INSERT INTO `zs_china` VALUES (210800, '营口市', 210000, '营口', 2);
INSERT INTO `zs_china` VALUES (210900, '阜新市', 210000, '阜新', 2);
INSERT INTO `zs_china` VALUES (211000, '辽阳市', 210000, '辽阳', 2);
INSERT INTO `zs_china` VALUES (211100, '盘锦市', 210000, '盘锦', 2);
INSERT INTO `zs_china` VALUES (211200, '铁岭市', 210000, '铁岭', 2);
INSERT INTO `zs_china` VALUES (211300, '朝阳市', 210000, '朝阳', 2);
INSERT INTO `zs_china` VALUES (211400, '葫芦岛市', 210000, '葫芦岛', 2);
INSERT INTO `zs_china` VALUES (220000, '吉林省', 1, '吉林', 1);
INSERT INTO `zs_china` VALUES (220100, '长春市', 220000, '长春', 2);
INSERT INTO `zs_china` VALUES (220200, '吉林市', 220000, '吉林', 2);
INSERT INTO `zs_china` VALUES (220300, '四平市', 220000, '四平', 2);
INSERT INTO `zs_china` VALUES (220400, '辽源市', 220000, '辽源', 2);
INSERT INTO `zs_china` VALUES (220500, '通化市', 220000, '通化', 2);
INSERT INTO `zs_china` VALUES (220600, '白山市', 220000, '白山', 2);
INSERT INTO `zs_china` VALUES (220700, '松原市', 220000, '松原', 2);
INSERT INTO `zs_china` VALUES (220800, '白城市', 220000, '白城', 2);
INSERT INTO `zs_china` VALUES (222400, '延边朝鲜族自治州', 220000, '延边朝鲜族', 2);
INSERT INTO `zs_china` VALUES (230000, '黑龙江省', 1, '黑龙江', 1);
INSERT INTO `zs_china` VALUES (230100, '哈尔滨市', 230000, '哈尔滨', 2);
INSERT INTO `zs_china` VALUES (230200, '齐齐哈尔市', 230000, '齐齐哈尔', 2);
INSERT INTO `zs_china` VALUES (230300, '鸡西市', 230000, '鸡西', 2);
INSERT INTO `zs_china` VALUES (230400, '鹤岗市', 230000, '鹤岗', 2);
INSERT INTO `zs_china` VALUES (230500, '双鸭山市', 230000, '双鸭山', 2);
INSERT INTO `zs_china` VALUES (230600, '大庆市', 230000, '大庆', 2);
INSERT INTO `zs_china` VALUES (230700, '伊春市', 230000, '伊春', 2);
INSERT INTO `zs_china` VALUES (230800, '佳木斯市', 230000, '佳木斯', 2);
INSERT INTO `zs_china` VALUES (230900, '七台河市', 230000, '七台河', 2);
INSERT INTO `zs_china` VALUES (231000, '牡丹江市', 230000, '牡丹江', 2);
INSERT INTO `zs_china` VALUES (231100, '黑河市', 230000, '黑河', 2);
INSERT INTO `zs_china` VALUES (231200, '绥化市', 230000, '绥化', 2);
INSERT INTO `zs_china` VALUES (232700, '大兴安岭地区', 230000, '大兴安岭', 2);
INSERT INTO `zs_china` VALUES (310000, '上海', 1, '上海', 1);
INSERT INTO `zs_china` VALUES (310100, '上海市', 310000, '上海', 2);
INSERT INTO `zs_china` VALUES (320000, '江苏省', 1, '江苏', 1);
INSERT INTO `zs_china` VALUES (320100, '南京市', 320000, '南京', 2);
INSERT INTO `zs_china` VALUES (320200, '无锡市', 320000, '无锡', 2);
INSERT INTO `zs_china` VALUES (320300, '徐州市', 320000, '徐州', 2);
INSERT INTO `zs_china` VALUES (320400, '常州市', 320000, '常州', 2);
INSERT INTO `zs_china` VALUES (320500, '苏州市', 320000, '苏州', 2);
INSERT INTO `zs_china` VALUES (320600, '南通市', 320000, '南通', 2);
INSERT INTO `zs_china` VALUES (320700, '连云港市', 320000, '连云港', 2);
INSERT INTO `zs_china` VALUES (320800, '淮安市', 320000, '淮安', 2);
INSERT INTO `zs_china` VALUES (320900, '盐城市', 320000, '盐城', 2);
INSERT INTO `zs_china` VALUES (321000, '扬州市', 320000, '扬州', 2);
INSERT INTO `zs_china` VALUES (321100, '镇江市', 320000, '镇江', 2);
INSERT INTO `zs_china` VALUES (321200, '泰州市', 320000, '泰州', 2);
INSERT INTO `zs_china` VALUES (321300, '宿迁市', 320000, '宿迁', 2);
INSERT INTO `zs_china` VALUES (330000, '浙江省', 1, '浙江', 1);
INSERT INTO `zs_china` VALUES (330100, '杭州市', 330000, '杭州', 2);
INSERT INTO `zs_china` VALUES (330200, '宁波市', 330000, '宁波', 2);
INSERT INTO `zs_china` VALUES (330300, '温州市', 330000, '温州', 2);
INSERT INTO `zs_china` VALUES (330400, '嘉兴市', 330000, '嘉兴', 2);
INSERT INTO `zs_china` VALUES (330500, '湖州市', 330000, '湖州', 2);
INSERT INTO `zs_china` VALUES (330600, '绍兴市', 330000, '绍兴', 2);
INSERT INTO `zs_china` VALUES (330700, '金华市', 330000, '金华', 2);
INSERT INTO `zs_china` VALUES (330800, '衢州市', 330000, '衢州', 2);
INSERT INTO `zs_china` VALUES (330900, '舟山市', 330000, '舟山', 2);
INSERT INTO `zs_china` VALUES (331000, '台州市', 330000, '台州', 2);
INSERT INTO `zs_china` VALUES (331100, '丽水市', 330000, '丽水', 2);
INSERT INTO `zs_china` VALUES (340000, '安徽省', 1, '安徽', 1);
INSERT INTO `zs_china` VALUES (340100, '合肥市', 340000, '合肥', 2);
INSERT INTO `zs_china` VALUES (340200, '芜湖市', 340000, '芜湖', 2);
INSERT INTO `zs_china` VALUES (340300, '蚌埠市', 340000, '蚌埠', 2);
INSERT INTO `zs_china` VALUES (340400, '淮南市', 340000, '淮南', 2);
INSERT INTO `zs_china` VALUES (340500, '马鞍山市', 340000, '马鞍山', 2);
INSERT INTO `zs_china` VALUES (340600, '淮北市', 340000, '淮北', 2);
INSERT INTO `zs_china` VALUES (340700, '铜陵市', 340000, '铜陵', 2);
INSERT INTO `zs_china` VALUES (340800, '安庆市', 340000, '安庆', 2);
INSERT INTO `zs_china` VALUES (341000, '黄山市', 340000, '黄山', 2);
INSERT INTO `zs_china` VALUES (341100, '滁州市', 340000, '滁州', 2);
INSERT INTO `zs_china` VALUES (341200, '阜阳市', 340000, '阜阳', 2);
INSERT INTO `zs_china` VALUES (341300, '宿州市', 340000, '宿州', 2);
INSERT INTO `zs_china` VALUES (341500, '六安市', 340000, '六安', 2);
INSERT INTO `zs_china` VALUES (341600, '亳州市', 340000, '亳州', 2);
INSERT INTO `zs_china` VALUES (341700, '池州市', 340000, '池州', 2);
INSERT INTO `zs_china` VALUES (341800, '宣城市', 340000, '宣城', 2);
INSERT INTO `zs_china` VALUES (350000, '福建省', 1, '福建', 1);
INSERT INTO `zs_china` VALUES (350100, '福州市', 350000, '福州', 2);
INSERT INTO `zs_china` VALUES (350200, '厦门市', 350000, '厦门', 2);
INSERT INTO `zs_china` VALUES (350300, '莆田市', 350000, '莆田', 2);
INSERT INTO `zs_china` VALUES (350400, '三明市', 350000, '三明', 2);
INSERT INTO `zs_china` VALUES (350500, '泉州市', 350000, '泉州', 2);
INSERT INTO `zs_china` VALUES (350600, '漳州市', 350000, '漳州', 2);
INSERT INTO `zs_china` VALUES (350700, '南平市', 350000, '南平', 2);
INSERT INTO `zs_china` VALUES (350800, '龙岩市', 350000, '龙岩', 2);
INSERT INTO `zs_china` VALUES (350900, '宁德市', 350000, '宁德', 2);
INSERT INTO `zs_china` VALUES (360000, '江西省', 1, '江西', 1);
INSERT INTO `zs_china` VALUES (360100, '南昌市', 360000, '南昌', 2);
INSERT INTO `zs_china` VALUES (360200, '景德镇市', 360000, '景德镇', 2);
INSERT INTO `zs_china` VALUES (360300, '萍乡市', 360000, '萍乡', 2);
INSERT INTO `zs_china` VALUES (360400, '九江市', 360000, '九江', 2);
INSERT INTO `zs_china` VALUES (360500, '新余市', 360000, '新余', 2);
INSERT INTO `zs_china` VALUES (360600, '鹰潭市', 360000, '鹰潭', 2);
INSERT INTO `zs_china` VALUES (360700, '赣州市', 360000, '赣州', 2);
INSERT INTO `zs_china` VALUES (360800, '吉安市', 360000, '吉安', 2);
INSERT INTO `zs_china` VALUES (360900, '宜春市', 360000, '宜春', 2);
INSERT INTO `zs_china` VALUES (361000, '抚州市', 360000, '抚州', 2);
INSERT INTO `zs_china` VALUES (361100, '上饶市', 360000, '上饶', 2);
INSERT INTO `zs_china` VALUES (370000, '山东省', 1, '山东', 1);
INSERT INTO `zs_china` VALUES (370100, '济南市', 370000, '济南', 2);
INSERT INTO `zs_china` VALUES (370200, '青岛市', 370000, '青岛', 2);
INSERT INTO `zs_china` VALUES (370300, '淄博市', 370000, '淄博', 2);
INSERT INTO `zs_china` VALUES (370400, '枣庄市', 370000, '枣庄', 2);
INSERT INTO `zs_china` VALUES (370500, '东营市', 370000, '东营', 2);
INSERT INTO `zs_china` VALUES (370600, '烟台市', 370000, '烟台', 2);
INSERT INTO `zs_china` VALUES (370700, '潍坊市', 370000, '潍坊', 2);
INSERT INTO `zs_china` VALUES (370800, '济宁市', 370000, '济宁', 2);
INSERT INTO `zs_china` VALUES (370900, '泰安市', 370000, '泰安', 2);
INSERT INTO `zs_china` VALUES (371000, '威海市', 370000, '威海', 2);
INSERT INTO `zs_china` VALUES (371100, '日照市', 370000, '日照', 2);
INSERT INTO `zs_china` VALUES (371200, '莱芜市', 370000, '莱芜', 2);
INSERT INTO `zs_china` VALUES (371300, '临沂市', 370000, '临沂', 2);
INSERT INTO `zs_china` VALUES (371400, '德州市', 370000, '德州', 2);
INSERT INTO `zs_china` VALUES (371500, '聊城市', 370000, '聊城', 2);
INSERT INTO `zs_china` VALUES (371600, '滨州市', 370000, '滨州', 2);
INSERT INTO `zs_china` VALUES (371700, '菏泽市', 370000, '菏泽', 2);
INSERT INTO `zs_china` VALUES (410000, '河南省', 1, '河南', 1);
INSERT INTO `zs_china` VALUES (410100, '郑州市', 410000, '郑州', 2);
INSERT INTO `zs_china` VALUES (410200, '开封市', 410000, '开封', 2);
INSERT INTO `zs_china` VALUES (410300, '洛阳市', 410000, '洛阳', 2);
INSERT INTO `zs_china` VALUES (410400, '平顶山市', 410000, '平顶山', 2);
INSERT INTO `zs_china` VALUES (410500, '安阳市', 410000, '安阳', 2);
INSERT INTO `zs_china` VALUES (410600, '鹤壁市', 410000, '鹤壁', 2);
INSERT INTO `zs_china` VALUES (410700, '新乡市', 410000, '新乡', 2);
INSERT INTO `zs_china` VALUES (410800, '焦作市', 410000, '焦作', 2);
INSERT INTO `zs_china` VALUES (410881, '济源市', 410000, '济源', 2);
INSERT INTO `zs_china` VALUES (410900, '濮阳市', 410000, '濮阳', 2);
INSERT INTO `zs_china` VALUES (411000, '许昌市', 410000, '许昌', 2);
INSERT INTO `zs_china` VALUES (411100, '漯河市', 410000, '漯河', 2);
INSERT INTO `zs_china` VALUES (411200, '三门峡市', 410000, '三门峡', 2);
INSERT INTO `zs_china` VALUES (411300, '南阳市', 410000, '南阳', 2);
INSERT INTO `zs_china` VALUES (411400, '商丘市', 410000, '商丘', 2);
INSERT INTO `zs_china` VALUES (411500, '信阳市', 410000, '信阳', 2);
INSERT INTO `zs_china` VALUES (411600, '周口市', 410000, '周口', 2);
INSERT INTO `zs_china` VALUES (411700, '驻马店市', 410000, '驻马店', 2);
INSERT INTO `zs_china` VALUES (420000, '湖北省', 1, '湖北', 1);
INSERT INTO `zs_china` VALUES (420100, '武汉市', 420000, '武汉', 2);
INSERT INTO `zs_china` VALUES (420200, '黄石市', 420000, '黄石', 2);
INSERT INTO `zs_china` VALUES (420300, '十堰市', 420000, '十堰', 2);
INSERT INTO `zs_china` VALUES (420500, '宜昌市', 420000, '宜昌', 2);
INSERT INTO `zs_china` VALUES (420600, '襄阳市', 420000, '襄阳', 2);
INSERT INTO `zs_china` VALUES (420700, '鄂州市', 420000, '鄂州', 2);
INSERT INTO `zs_china` VALUES (420800, '荆门市', 420000, '荆门', 2);
INSERT INTO `zs_china` VALUES (420900, '孝感市', 420000, '孝感', 2);
INSERT INTO `zs_china` VALUES (421000, '荆州市', 420000, '荆州', 2);
INSERT INTO `zs_china` VALUES (421100, '黄冈市', 420000, '黄冈', 2);
INSERT INTO `zs_china` VALUES (421200, '咸宁市', 420000, '咸宁', 2);
INSERT INTO `zs_china` VALUES (421300, '随州市', 420000, '随州', 2);
INSERT INTO `zs_china` VALUES (422800, '恩施土家族苗族自治州', 420000, '恩施', 2);
INSERT INTO `zs_china` VALUES (429004, '仙桃市', 420000, '仙桃', 2);
INSERT INTO `zs_china` VALUES (429005, '潜江市', 420000, '潜江', 2);
INSERT INTO `zs_china` VALUES (429006, '天门市', 420000, '天门', 2);
INSERT INTO `zs_china` VALUES (429021, '神农架林区', 420000, '神农架', 2);
INSERT INTO `zs_china` VALUES (430000, '湖南省', 1, '湖南', 1);
INSERT INTO `zs_china` VALUES (430100, '长沙市', 430000, '长沙', 2);
INSERT INTO `zs_china` VALUES (430200, '株洲市', 430000, '株洲', 2);
INSERT INTO `zs_china` VALUES (430300, '湘潭市', 430000, '湘潭', 2);
INSERT INTO `zs_china` VALUES (430400, '衡阳市', 430000, '衡阳', 2);
INSERT INTO `zs_china` VALUES (430500, '邵阳市', 430000, '邵阳', 2);
INSERT INTO `zs_china` VALUES (430600, '岳阳市', 430000, '岳阳', 2);
INSERT INTO `zs_china` VALUES (430700, '常德市', 430000, '常德', 2);
INSERT INTO `zs_china` VALUES (430800, '张家界市', 430000, '张家界', 2);
INSERT INTO `zs_china` VALUES (430900, '益阳市', 430000, '益阳', 2);
INSERT INTO `zs_china` VALUES (431000, '郴州市', 430000, '郴州', 2);
INSERT INTO `zs_china` VALUES (431100, '永州市', 430000, '永州', 2);
INSERT INTO `zs_china` VALUES (431200, '怀化市', 430000, '怀化', 2);
INSERT INTO `zs_china` VALUES (431300, '娄底市', 430000, '娄底', 2);
INSERT INTO `zs_china` VALUES (433100, '湘西土家族苗族自治州', 430000, '湘西', 2);
INSERT INTO `zs_china` VALUES (440000, '广东省', 1, '广东', 1);
INSERT INTO `zs_china` VALUES (440100, '广州市', 440000, '广州', 2);
INSERT INTO `zs_china` VALUES (440200, '韶关市', 440000, '韶关', 2);
INSERT INTO `zs_china` VALUES (440300, '深圳市', 440000, '深圳', 2);
INSERT INTO `zs_china` VALUES (440400, '珠海市', 440000, '珠海', 2);
INSERT INTO `zs_china` VALUES (440500, '汕头市', 440000, '汕头', 2);
INSERT INTO `zs_china` VALUES (440600, '佛山市', 440000, '佛山', 2);
INSERT INTO `zs_china` VALUES (440700, '江门市', 440000, '江门', 2);
INSERT INTO `zs_china` VALUES (440800, '湛江市', 440000, '湛江', 2);
INSERT INTO `zs_china` VALUES (440900, '茂名市', 440000, '茂名', 2);
INSERT INTO `zs_china` VALUES (441200, '肇庆市', 440000, '肇庆', 2);
INSERT INTO `zs_china` VALUES (441300, '惠州市', 440000, '惠州', 2);
INSERT INTO `zs_china` VALUES (441400, '梅州市', 440000, '梅州', 2);
INSERT INTO `zs_china` VALUES (441500, '汕尾市', 440000, '汕尾', 2);
INSERT INTO `zs_china` VALUES (441600, '河源市', 440000, '河源', 2);
INSERT INTO `zs_china` VALUES (441700, '阳江市', 440000, '阳江', 2);
INSERT INTO `zs_china` VALUES (441800, '清远市', 440000, '清远', 2);
INSERT INTO `zs_china` VALUES (441900, '东莞市', 440000, '东莞', 2);
INSERT INTO `zs_china` VALUES (442000, '中山市', 440000, '中山', 2);
INSERT INTO `zs_china` VALUES (442101, '东沙群岛', NULL, '东沙', 2);
INSERT INTO `zs_china` VALUES (445100, '潮州市', 440000, '潮州', 2);
INSERT INTO `zs_china` VALUES (445200, '揭阳市', 440000, '揭阳', 2);
INSERT INTO `zs_china` VALUES (445300, '云浮市', 440000, '云浮', 2);
INSERT INTO `zs_china` VALUES (450000, '广西壮族自治区', 1, '广西', 1);
INSERT INTO `zs_china` VALUES (450100, '南宁市', 450000, '南宁', 2);
INSERT INTO `zs_china` VALUES (450200, '柳州市', 450000, '柳州', 2);
INSERT INTO `zs_china` VALUES (450300, '桂林市', 450000, '桂林', 2);
INSERT INTO `zs_china` VALUES (450400, '梧州市', 450000, '梧州', 2);
INSERT INTO `zs_china` VALUES (450500, '北海市', 450000, '北海', 2);
INSERT INTO `zs_china` VALUES (450600, '防城港市', 450000, '防城港', 2);
INSERT INTO `zs_china` VALUES (450700, '钦州市', 450000, '钦州', 2);
INSERT INTO `zs_china` VALUES (450800, '贵港市', 450000, '贵港', 2);
INSERT INTO `zs_china` VALUES (450900, '玉林市', 450000, '玉林', 2);
INSERT INTO `zs_china` VALUES (451000, '百色市', 450000, '百色', 2);
INSERT INTO `zs_china` VALUES (451100, '贺州市', 450000, '贺州', 2);
INSERT INTO `zs_china` VALUES (451200, '河池市', 450000, '河池', 2);
INSERT INTO `zs_china` VALUES (451300, '来宾市', 450000, '来宾', 2);
INSERT INTO `zs_china` VALUES (451400, '崇左市', 450000, '崇左', 2);
INSERT INTO `zs_china` VALUES (460000, '海南省', 1, '海南', 1);
INSERT INTO `zs_china` VALUES (460100, '海口市', 460000, '海口', 2);
INSERT INTO `zs_china` VALUES (460200, '三亚市', 460000, '三亚', 2);
INSERT INTO `zs_china` VALUES (460300, '三沙市', 460000, '三沙', 2);
INSERT INTO `zs_china` VALUES (469001, '五指山市', 460000, '五指山', 2);
INSERT INTO `zs_china` VALUES (469002, '琼海市', 460000, '琼海', 2);
INSERT INTO `zs_china` VALUES (469003, '儋州市', 460000, '儋州', 2);
INSERT INTO `zs_china` VALUES (469005, '文昌市', 460000, '文昌', 2);
INSERT INTO `zs_china` VALUES (469006, '万宁市', 460000, '万宁', 2);
INSERT INTO `zs_china` VALUES (469007, '东方市', 460000, '东方', 2);
INSERT INTO `zs_china` VALUES (469025, '定安县', 460000, '定安', 2);
INSERT INTO `zs_china` VALUES (469026, '屯昌县', 460000, '屯昌', 2);
INSERT INTO `zs_china` VALUES (469027, '澄迈县', 460000, '澄迈', 2);
INSERT INTO `zs_china` VALUES (469028, '临高县', 460000, '临高', 2);
INSERT INTO `zs_china` VALUES (469030, '白沙黎族自治县', 460000, '白沙', 2);
INSERT INTO `zs_china` VALUES (469031, '昌江黎族自治县', 460000, '昌江', 2);
INSERT INTO `zs_china` VALUES (469033, '乐东黎族自治县', 460000, '乐东', 2);
INSERT INTO `zs_china` VALUES (469034, '陵水黎族自治县', 460000, '陵水', 2);
INSERT INTO `zs_china` VALUES (469035, '保亭黎族苗族自治县', 460000, '保亭', 2);
INSERT INTO `zs_china` VALUES (469036, '琼中黎族苗族自治县', 460000, '琼中', 2);
INSERT INTO `zs_china` VALUES (500000, '重庆', 1, '重庆', 1);
INSERT INTO `zs_china` VALUES (500100, '重庆市', 500000, '重庆', 2);
INSERT INTO `zs_china` VALUES (510000, '四川省', 1, '四川', 1);
INSERT INTO `zs_china` VALUES (510100, '成都市', 510000, '成都', 2);
INSERT INTO `zs_china` VALUES (510300, '自贡市', 510000, '自贡', 2);
INSERT INTO `zs_china` VALUES (510400, '攀枝花市', 510000, '攀枝花', 2);
INSERT INTO `zs_china` VALUES (510500, '泸州市', 510000, '泸州', 2);
INSERT INTO `zs_china` VALUES (510600, '德阳市', 510000, '德阳', 2);
INSERT INTO `zs_china` VALUES (510700, '绵阳市', 510000, '绵阳', 2);
INSERT INTO `zs_china` VALUES (510800, '广元市', 510000, '广元', 2);
INSERT INTO `zs_china` VALUES (510900, '遂宁市', 510000, '遂宁', 2);
INSERT INTO `zs_china` VALUES (511000, '内江市', 510000, '内江', 2);
INSERT INTO `zs_china` VALUES (511100, '乐山市', 510000, '乐山', 2);
INSERT INTO `zs_china` VALUES (511300, '南充市', 510000, '南充', 2);
INSERT INTO `zs_china` VALUES (511400, '眉山市', 510000, '眉山', 2);
INSERT INTO `zs_china` VALUES (511500, '宜宾市', 510000, '宜宾', 2);
INSERT INTO `zs_china` VALUES (511600, '广安市', 510000, '广安', 2);
INSERT INTO `zs_china` VALUES (511700, '达州市', 510000, '达州', 2);
INSERT INTO `zs_china` VALUES (511800, '雅安市', 510000, '雅安', 2);
INSERT INTO `zs_china` VALUES (511900, '巴中市', 510000, '巴中', 2);
INSERT INTO `zs_china` VALUES (512000, '资阳市', 510000, '资阳', 2);
INSERT INTO `zs_china` VALUES (513200, '阿坝藏族羌族自治州', 510000, '阿坝', 2);
INSERT INTO `zs_china` VALUES (513300, '甘孜藏族自治州', 510000, '甘孜', 2);
INSERT INTO `zs_china` VALUES (513400, '凉山彝族自治州', 510000, '凉山', 2);
INSERT INTO `zs_china` VALUES (520000, '贵州省', 1, '贵州', 1);
INSERT INTO `zs_china` VALUES (520100, '贵阳市', 520000, '贵阳', 2);
INSERT INTO `zs_china` VALUES (520200, '六盘水市', 520000, '六盘水', 2);
INSERT INTO `zs_china` VALUES (520300, '遵义市', 520000, '遵义', 2);
INSERT INTO `zs_china` VALUES (520400, '安顺市', 520000, '安顺', 2);
INSERT INTO `zs_china` VALUES (522200, '铜仁市', 520000, '铜仁', 2);
INSERT INTO `zs_china` VALUES (522300, '黔西南布依族苗族自治州', 520000, '黔西南', 2);
INSERT INTO `zs_china` VALUES (522400, '毕节市', 520000, '毕节', 2);
INSERT INTO `zs_china` VALUES (522600, '黔东南苗族侗族自治州', 520000, '黔东南', 2);
INSERT INTO `zs_china` VALUES (522700, '黔南布依族苗族自治州', 520000, '黔南', 2);
INSERT INTO `zs_china` VALUES (530000, '云南省', 1, '云南', 1);
INSERT INTO `zs_china` VALUES (530100, '昆明市', 530000, '昆明', 2);
INSERT INTO `zs_china` VALUES (530300, '曲靖市', 530000, '曲靖', 2);
INSERT INTO `zs_china` VALUES (530400, '玉溪市', 530000, '玉溪', 2);
INSERT INTO `zs_china` VALUES (530500, '保山市', 530000, '保山', 2);
INSERT INTO `zs_china` VALUES (530600, '昭通市', 530000, '昭通', 2);
INSERT INTO `zs_china` VALUES (530700, '丽江市', 530000, '丽江', 2);
INSERT INTO `zs_china` VALUES (530800, '普洱市', 530000, '普洱', 2);
INSERT INTO `zs_china` VALUES (530900, '临沧市', 530000, '临沧', 2);
INSERT INTO `zs_china` VALUES (532300, '楚雄彝族自治州', 530000, '楚雄', 2);
INSERT INTO `zs_china` VALUES (532500, '红河哈尼族彝族自治州', 530000, '红河', 2);
INSERT INTO `zs_china` VALUES (532600, '文山壮族苗族自治州', 530000, '文山', 2);
INSERT INTO `zs_china` VALUES (532800, '西双版纳傣族自治州', 530000, '西双版纳', 2);
INSERT INTO `zs_china` VALUES (532900, '大理白族自治州', 530000, '大理', 2);
INSERT INTO `zs_china` VALUES (533100, '德宏傣族景颇族自治州', 530000, '德宏', 2);
INSERT INTO `zs_china` VALUES (533300, '怒江傈僳族自治州', 530000, '怒江', 2);
INSERT INTO `zs_china` VALUES (533400, '迪庆藏族自治州', 530000, '迪庆', 2);
INSERT INTO `zs_china` VALUES (540000, '西藏自治区', 1, '西藏', 1);
INSERT INTO `zs_china` VALUES (540100, '拉萨市', 540000, '拉萨', 2);
INSERT INTO `zs_china` VALUES (542100, '昌都地区', 540000, '昌都', 2);
INSERT INTO `zs_china` VALUES (542200, '山南地区', 540000, '山南', 2);
INSERT INTO `zs_china` VALUES (542300, '日喀则地区', 540000, '日喀则', 2);
INSERT INTO `zs_china` VALUES (542400, '那曲地区', 540000, '那曲', 2);
INSERT INTO `zs_china` VALUES (542500, '阿里地区', 540000, '阿里', 2);
INSERT INTO `zs_china` VALUES (542600, '林芝地区', 540000, '林芝', 2);
INSERT INTO `zs_china` VALUES (610000, '陕西省', 1, '陕西', 1);
INSERT INTO `zs_china` VALUES (610100, '西安市', 610000, '西安', 2);
INSERT INTO `zs_china` VALUES (610200, '铜川市', 610000, '铜川', 2);
INSERT INTO `zs_china` VALUES (610300, '宝鸡市', 610000, '宝鸡', 2);
INSERT INTO `zs_china` VALUES (610400, '咸阳市', 610000, '咸阳', 2);
INSERT INTO `zs_china` VALUES (610500, '渭南市', 610000, '渭南', 2);
INSERT INTO `zs_china` VALUES (610600, '延安市', 610000, '延安', 2);
INSERT INTO `zs_china` VALUES (610700, '汉中市', 610000, '汉中', 2);
INSERT INTO `zs_china` VALUES (610800, '榆林市', 610000, '榆林', 2);
INSERT INTO `zs_china` VALUES (610900, '安康市', 610000, '安康', 2);
INSERT INTO `zs_china` VALUES (611000, '商洛市', 610000, '商洛', 2);
INSERT INTO `zs_china` VALUES (620000, '甘肃省', 1, '甘肃', 1);
INSERT INTO `zs_china` VALUES (620100, '兰州市', 620000, '兰州', 2);
INSERT INTO `zs_china` VALUES (620200, '嘉峪关市', 620000, '嘉峪关', 2);
INSERT INTO `zs_china` VALUES (620300, '金昌市', 620000, '金昌', 2);
INSERT INTO `zs_china` VALUES (620400, '白银市', 620000, '白银', 2);
INSERT INTO `zs_china` VALUES (620500, '天水市', 620000, '天水', 2);
INSERT INTO `zs_china` VALUES (620600, '武威市', 620000, '武威', 2);
INSERT INTO `zs_china` VALUES (620700, '张掖市', 620000, '张掖', 2);
INSERT INTO `zs_china` VALUES (620800, '平凉市', 620000, '平凉', 2);
INSERT INTO `zs_china` VALUES (620900, '酒泉市', 620000, '酒泉', 2);
INSERT INTO `zs_china` VALUES (621000, '庆阳市', 620000, '庆阳', 2);
INSERT INTO `zs_china` VALUES (621100, '定西市', 620000, '定西', 2);
INSERT INTO `zs_china` VALUES (621200, '陇南市', 620000, '陇南', 2);
INSERT INTO `zs_china` VALUES (622900, '临夏回族自治州', 620000, '临夏', 2);
INSERT INTO `zs_china` VALUES (623000, '甘南藏族自治州', 620000, '甘南', 2);
INSERT INTO `zs_china` VALUES (630000, '青海省', 1, '青海', 1);
INSERT INTO `zs_china` VALUES (630100, '西宁市', 630000, '西宁', 2);
INSERT INTO `zs_china` VALUES (632100, '海东市', 630000, '海东', 2);
INSERT INTO `zs_china` VALUES (632200, '海北藏族自治州', 630000, '海北', 2);
INSERT INTO `zs_china` VALUES (632300, '黄南藏族自治州', 630000, '黄南', 2);
INSERT INTO `zs_china` VALUES (632500, '海南藏族自治州', 630000, '海南藏族', 2);
INSERT INTO `zs_china` VALUES (632600, '果洛藏族自治州', 630000, '果洛', 2);
INSERT INTO `zs_china` VALUES (632700, '玉树藏族自治州', 630000, '玉树', 2);
INSERT INTO `zs_china` VALUES (632800, '海西蒙古族藏族自治州', 630000, '海西', 2);
INSERT INTO `zs_china` VALUES (640000, '宁夏回族自治区', 1, '宁夏', 1);
INSERT INTO `zs_china` VALUES (640100, '银川市', 640000, '银川', 2);
INSERT INTO `zs_china` VALUES (640200, '石嘴山市', 640000, '石嘴山', 2);
INSERT INTO `zs_china` VALUES (640300, '吴忠市', 640000, '吴忠', 2);
INSERT INTO `zs_china` VALUES (640400, '固原市', 640000, '固原', 2);
INSERT INTO `zs_china` VALUES (640500, '中卫市', 640000, '中卫', 2);
INSERT INTO `zs_china` VALUES (650000, '新疆维吾尔自治区', 1, '新疆', 1);
INSERT INTO `zs_china` VALUES (650100, '乌鲁木齐市', 650000, '乌鲁木齐', 2);
INSERT INTO `zs_china` VALUES (650200, '克拉玛依市', 650000, '克拉玛依', 2);
INSERT INTO `zs_china` VALUES (652100, '吐鲁番地区', 650000, '吐鲁番', 2);
INSERT INTO `zs_china` VALUES (652200, '哈密地区', 650000, '哈密', 2);
INSERT INTO `zs_china` VALUES (652300, '昌吉回族自治州', 650000, '昌吉', 2);
INSERT INTO `zs_china` VALUES (652700, '博尔塔拉蒙古自治州', 650000, '博尔塔拉', 2);
INSERT INTO `zs_china` VALUES (652800, '巴音郭楞蒙古自治州', 650000, '巴音郭楞', 2);
INSERT INTO `zs_china` VALUES (652900, '阿克苏地区', 650000, '阿克苏', 2);
INSERT INTO `zs_china` VALUES (653000, '克孜勒苏柯尔克孜自治州', 650000, '克孜勒苏柯尔克孜', 2);
INSERT INTO `zs_china` VALUES (653100, '喀什地区', 650000, '喀什', 2);
INSERT INTO `zs_china` VALUES (653200, '和田地区', 650000, '和田', 2);
INSERT INTO `zs_china` VALUES (654000, '伊犁哈萨克自治州', 650000, '伊犁', 2);
INSERT INTO `zs_china` VALUES (654200, '塔城地区', 650000, '塔城', 2);
INSERT INTO `zs_china` VALUES (654300, '阿勒泰地区', 650000, '阿勒泰', 2);
INSERT INTO `zs_china` VALUES (659001, '石河子市', 650000, '石河子', 2);
INSERT INTO `zs_china` VALUES (659002, '阿拉尔市', 650000, '阿拉尔', 2);
INSERT INTO `zs_china` VALUES (659003, '图木舒克市', 650000, '图木舒克', 2);
INSERT INTO `zs_china` VALUES (659004, '五家渠市', 650000, '五家渠', 2);
INSERT INTO `zs_china` VALUES (710000, '台湾', 1, '台湾', 1);
INSERT INTO `zs_china` VALUES (710100, '台北市', 710000, '台北', 2);
INSERT INTO `zs_china` VALUES (710200, '高雄市', 710000, '高雄', 2);
INSERT INTO `zs_china` VALUES (710300, '台南市', 710000, '台南', 2);
INSERT INTO `zs_china` VALUES (710400, '台中市', 710000, '台中', 2);
INSERT INTO `zs_china` VALUES (710500, '金门县', 710000, '金门', 2);
INSERT INTO `zs_china` VALUES (710600, '南投县', 710000, '南投', 2);
INSERT INTO `zs_china` VALUES (710700, '基隆市', 710000, '基隆', 2);
INSERT INTO `zs_china` VALUES (710800, '新竹市', 710000, '新竹', 2);
INSERT INTO `zs_china` VALUES (710900, '嘉义市', 710000, '嘉义', 2);
INSERT INTO `zs_china` VALUES (711100, '新北市', 710000, '新北', 2);
INSERT INTO `zs_china` VALUES (711200, '宜兰县', 710000, '宜兰', 2);
INSERT INTO `zs_china` VALUES (711300, '新竹县', 710000, '新竹', 2);
INSERT INTO `zs_china` VALUES (711400, '桃园县', 710000, '桃园', 2);
INSERT INTO `zs_china` VALUES (711500, '苗栗县', 710000, '苗栗', 2);
INSERT INTO `zs_china` VALUES (711700, '彰化县', 710000, '彰化', 2);
INSERT INTO `zs_china` VALUES (711900, '嘉义县', 710000, '嘉义', 2);
INSERT INTO `zs_china` VALUES (712100, '云林县', 710000, '云林', 2);
INSERT INTO `zs_china` VALUES (712400, '屏东县', 710000, '屏东', 2);
INSERT INTO `zs_china` VALUES (712500, '台东县', 710000, '台东', 2);
INSERT INTO `zs_china` VALUES (712600, '花莲县', 710000, '花莲', 2);
INSERT INTO `zs_china` VALUES (712700, '澎湖县', 710000, '澎湖', 2);
INSERT INTO `zs_china` VALUES (712800, '连江县', 710000, '连江', 2);
INSERT INTO `zs_china` VALUES (810000, '香港特别行政区', 1, '香港', 1);
INSERT INTO `zs_china` VALUES (810100, '香港岛', 810000, '香港岛', 2);
INSERT INTO `zs_china` VALUES (810200, '九龙', 810000, '九龙', 2);
INSERT INTO `zs_china` VALUES (810300, '新界', 810000, '新界', 2);
INSERT INTO `zs_china` VALUES (820000, '澳门特别行政区', 1, '澳门', 1);
INSERT INTO `zs_china` VALUES (820100, '澳门半岛', 820000, '澳门半岛', 2);
INSERT INTO `zs_china` VALUES (820200, '离岛', 820000, '离岛', 2);

-- ----------------------------
-- Table structure for zs_comment
-- ----------------------------
DROP TABLE IF EXISTS `zs_comment`;
CREATE TABLE `zs_comment`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `admin_id` int(11) NULL DEFAULT NULL COMMENT '公司id',
  `aid` int(11) NULL DEFAULT NULL COMMENT '所属文章',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '内容',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '文字评论表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zs_comment
-- ----------------------------
INSERT INTO `zs_comment` VALUES (1, 2, 4, '1', '1', NULL);

-- ----------------------------
-- Table structure for zs_config
-- ----------------------------
DROP TABLE IF EXISTS `zs_config`;
CREATE TABLE `zs_config`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量名',
  `group` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '分组',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量标题',
  `tip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量描述',
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '类型:string,text,int,bool,array,datetime,date,file',
  `value` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '变量值',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '变量字典数据',
  `rule` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '验证规则',
  `extend` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '扩展属性',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '系统配置' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_config
-- ----------------------------
INSERT INTO `zs_config` VALUES (1, 'name', 'basic', 'Site name', '请填写站点名称', 'string', '招商网', '', 'required', '');
INSERT INTO `zs_config` VALUES (2, 'beian', 'basic', 'Beian', '粤ICP备15000000号-1', 'string', '', '', '', '');
INSERT INTO `zs_config` VALUES (3, 'cdnurl', 'basic', 'Cdn url', '如果静态资源使用第三方云储存请配置该值', 'string', '', '', '', '');
INSERT INTO `zs_config` VALUES (4, 'version', 'basic', 'Version', '如果静态资源有变动请重新配置该值', 'string', '1.0.1', '', 'required', '');
INSERT INTO `zs_config` VALUES (5, 'timezone', 'basic', 'Timezone', '', 'string', 'Asia/Shanghai', '', 'required', '');
INSERT INTO `zs_config` VALUES (6, 'forbiddenip', 'basic', 'Forbidden ip', '一行一条记录', 'text', '', '', '', '');
INSERT INTO `zs_config` VALUES (7, 'languages', 'basic', 'Languages', '', 'array', '{\"backend\":\"zh-cn\",\"frontend\":\"zh-cn\"}', '', 'required', '');
INSERT INTO `zs_config` VALUES (8, 'fixedpage', 'basic', 'Fixed page', '请尽量输入左侧菜单栏存在的链接', 'string', 'dashboard', '', 'required', '');
INSERT INTO `zs_config` VALUES (9, 'categorytype', 'dictionary', 'Category type', '', 'array', '{\"article\":\"文章\",\"project\":\"项目\"}', '', '', '');
INSERT INTO `zs_config` VALUES (10, 'configgroup', 'dictionary', 'Config group', '', 'array', '{\"basic\":\"Basic\",\"email\":\"Email\",\"dictionary\":\"Dictionary\",\"user\":\"User\",\"example\":\"Example\"}', '', '', '');
INSERT INTO `zs_config` VALUES (11, 'mail_type', 'email', 'Mail type', '选择邮件发送方式', 'select', '1', '[\"Please select\",\"SMTP\",\"Mail\"]', '', '');
INSERT INTO `zs_config` VALUES (12, 'mail_smtp_host', 'email', 'Mail smtp host', '错误的配置发送邮件会导致服务器超时', 'string', 'smtp.qq.com', '', '', '');
INSERT INTO `zs_config` VALUES (13, 'mail_smtp_port', 'email', 'Mail smtp port', '(不加密默认25,SSL默认465,TLS默认587)', 'string', '465', '', '', '');
INSERT INTO `zs_config` VALUES (14, 'mail_smtp_user', 'email', 'Mail smtp user', '（填写完整用户名）', 'string', '10000', '', '', '');
INSERT INTO `zs_config` VALUES (15, 'mail_smtp_pass', 'email', 'Mail smtp password', '（填写您的密码）', 'string', 'password', '', '', '');
INSERT INTO `zs_config` VALUES (16, 'mail_verify_type', 'email', 'Mail vertify type', '（SMTP验证方式[推荐SSL]）', 'select', '2', '[\"None\",\"TLS\",\"SSL\"]', '', '');
INSERT INTO `zs_config` VALUES (17, 'mail_from', 'email', 'Mail from', '', 'string', '10000@qq.com', '', '', '');

-- ----------------------------
-- Table structure for zs_ems
-- ----------------------------
DROP TABLE IF EXISTS `zs_ems`;
CREATE TABLE `zs_ems`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `event` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '事件',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '邮箱',
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '验证码',
  `times` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '验证次数',
  `ip` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'IP',
  `createtime` int(10) UNSIGNED NULL DEFAULT 0 COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '邮箱验证码表' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for zs_message
-- ----------------------------
DROP TABLE IF EXISTS `zs_message`;
CREATE TABLE `zs_message`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `admin_id` int(11) NULL DEFAULT NULL COMMENT '公司id',
  `pid` int(11) NULL DEFAULT NULL COMMENT '所属项目',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电话',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '内容',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '项目留言表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zs_message
-- ----------------------------
INSERT INTO `zs_message` VALUES (1, 2, 4, '1', '1', '1', '1', NULL);

-- ----------------------------
-- Table structure for zs_msg
-- ----------------------------
DROP TABLE IF EXISTS `zs_msg`;
CREATE TABLE `zs_msg`  (
  `id` int(11) NOT NULL COMMENT 'id',
  `pid` int(11) NULL DEFAULT NULL COMMENT '所属项目id',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电话',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '内容',
  `careatime` int(11) NULL DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '项目留言' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for zs_project
-- ----------------------------
DROP TABLE IF EXISTS `zs_project`;
CREATE TABLE `zs_project`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) NOT NULL DEFAULT 0 COMMENT '用户ID',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '分类ID(单选)',
  `flag` set('hot','index','recommend','menu','navs') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'tdk-标题',
  `prouse` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '主要特点',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '项目名称',
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '加盟手机',
  `moblie` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '加盟电话',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '内容',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '缩略图片',
  `keywords` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'tdk-关键字',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT 'tdk-描述',
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '省市',
  `price` int(1) UNSIGNED NULL DEFAULT NULL COMMENT '投资金额',
  `views` int(10) UNSIGNED NULL DEFAULT 0 COMMENT '点击',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `deletetime` int(10) NULL DEFAULT NULL COMMENT '删除时间',
  `weigh` int(10) NULL DEFAULT 0 COMMENT '权重',
  `switch` int(1) NULL DEFAULT 0 COMMENT '开关',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '项目表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_project
-- ----------------------------
INSERT INTO `zs_project` VALUES (7, 4, 15, 'index,menu,navs', '女神装扮', '很美', '女神装扮', '17818182223', '4008892333', '<p>女神装扮</p>', '/uploads/20191023/3b0e4f478342f2af11dcea44fb2a6730.jpg', '11女神装扮', '女神装扮', '', 3, 0, 1571822373, 1571996239, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (9, 4, 15, 'index,menu,navs', '女神装扮', '芮欧童装', '芮欧童装', '17818182222', '4003338888', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);\">芮欧童装</span></p>', '/uploads/20191023/031dcc72e221e406ff98be29c94aff1b.gif', '芮欧童装', '芮欧童装', '140600,140800', 3, 0, 1571823556, 1571996250, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (10, 0, 15, 'index,menu,navs', '女神装扮', NULL, '女神装扮', NULL, NULL, '１', '/uploads/20191023/031dcc72e221e406ff98be29c94aff1b.gif', '１', '１', '', 1, 0, NULL, 1571996256, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (11, 0, 15, 'index,menu', '女神装扮', NULL, '女神装扮', NULL, NULL, '１', '/uploads/20191023/031dcc72e221e406ff98be29c94aff1b.gif', '１', '１', '', 1, 0, NULL, 1571903372, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (12, 0, 15, 'index,menu', '女神装扮', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (13, 0, 15, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (14, 0, 15, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (15, 0, 15, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (16, 0, 16, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (17, 0, 16, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (18, 0, 16, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (19, 0, 16, 'index,menu', '', NULL, '女神装扮', NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (20, 0, 16, 'index,menu', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, 0, NULL, NULL, NULL, 0, 0);
INSERT INTO `zs_project` VALUES (21, 4, 15, '', '１１', '１１１１', '１１１', '１１', '１１１', '<p>１１１１</p>', NULL, '１', '１１', '130800,210200', 3, 0, 1571987149, NULL, NULL, 0, 0);

-- ----------------------------
-- Table structure for zs_sms
-- ----------------------------
DROP TABLE IF EXISTS `zs_sms`;
CREATE TABLE `zs_sms`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `event` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '事件',
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '手机号',
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '验证码',
  `times` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '验证次数',
  `ip` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'IP',
  `createtime` int(10) UNSIGNED NULL DEFAULT 0 COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '短信验证码表' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for zs_test
-- ----------------------------
DROP TABLE IF EXISTS `zs_test`;
CREATE TABLE `zs_test`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) NOT NULL DEFAULT 0 COMMENT '管理员ID',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '分类ID(单选)',
  `category_ids` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '分类ID(多选)',
  `week` enum('monday','tuesday','wednesday') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '星期(单选):monday=星期一,tuesday=星期二,wednesday=星期三',
  `flag` set('hot','index','recommend') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '标志(多选):hot=热门,index=首页,recommend=推荐',
  `genderdata` enum('male','female') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'male' COMMENT '性别(单选):male=男,female=女',
  `hobbydata` set('music','reading','swimming') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '爱好(多选):music=音乐,reading=读书,swimming=游泳',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '标题',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图片',
  `images` varchar(1500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图片组',
  `attachfile` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '附件',
  `keywords` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '描述',
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '省市',
  `json` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '配置:key=名称,value=值',
  `price` float(10, 2) UNSIGNED NOT NULL DEFAULT 0.00 COMMENT '价格',
  `views` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '点击',
  `startdate` date NULL DEFAULT NULL COMMENT '开始日期',
  `activitytime` datetime(0) NULL DEFAULT NULL COMMENT '活动时间(datetime)',
  `year` year NULL DEFAULT NULL COMMENT '年',
  `times` time(0) NULL DEFAULT NULL COMMENT '时间',
  `refreshtime` int(10) NULL DEFAULT NULL COMMENT '刷新时间(int)',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `deletetime` int(10) NULL DEFAULT NULL COMMENT '删除时间',
  `weigh` int(10) NOT NULL DEFAULT 0 COMMENT '权重',
  `switch` tinyint(1) NOT NULL DEFAULT 0 COMMENT '开关',
  `status` enum('normal','hidden') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'normal' COMMENT '状态',
  `state` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1' COMMENT '状态值:0=禁用,1=正常,2=推荐',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '测试表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_test
-- ----------------------------
INSERT INTO `zs_test` VALUES (1, 0, 12, '12,13', 'monday', 'hot,index', 'male', 'music,reading', '我是一篇测试文章', '<p>我是测试内容</p>', '/assets/img/avatar.png', '/assets/img/avatar.png,/assets/img/qrcode.png', '/assets/img/avatar.png', '关键字', '描述', '广西壮族自治区/百色市/平果县', '{\"a\":\"1\",\"b\":\"2\"}', 0.00, 0, '2017-07-10', '2017-07-10 18:24:45', 2017, '18:24:45', 1499682285, 1499682526, 1570614655, NULL, 0, 1, 'normal', '1');

-- ----------------------------
-- Table structure for zs_user
-- ----------------------------
DROP TABLE IF EXISTS `zs_user`;
CREATE TABLE `zs_user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT '组别ID',
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '昵称',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '密码',
  `company_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '未知' COMMENT '公司名称',
  `salt` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '密码盐',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '电子邮箱',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '手机号',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '头像',
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '等级',
  `gender` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '性别',
  `birthday` date NULL DEFAULT NULL COMMENT '生日',
  `bio` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '格言',
  `company_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '公司介绍',
  `money` decimal(10, 2) UNSIGNED NOT NULL DEFAULT 0.00 COMMENT '余额',
  `score` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '积分',
  `successions` int(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT '连续登录天数',
  `maxsuccessions` int(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT '最大连续登录天数',
  `prevtime` int(10) NULL DEFAULT NULL COMMENT '上次登录时间',
  `logintime` int(10) NULL DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '登录IP',
  `loginfailure` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '失败次数',
  `joinip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '加入IP',
  `jointime` int(10) NULL DEFAULT NULL COMMENT '加入时间',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `token` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT 'Token',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '状态',
  `verification` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '验证',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `username`(`username`) USING BTREE,
  INDEX `email`(`email`) USING BTREE,
  INDEX `mobile`(`mobile`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '会员表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_user
-- ----------------------------
INSERT INTO `zs_user` VALUES (4, 1, 'ygf2019', 'ygf2019', 'babc9924e2f89c7350dad8c47769d7e0', '未知', 'nid4S5', '123@qq.com', '17819192234', '', 1, 0, NULL, '', '', 0.00, 0, 3, 3, 1571885412, 1571997469, '127.0.0.1', 0, '127.0.0.1', 1571817612, 1571817612, 1571997469, '', 'normal', '');

-- ----------------------------
-- Table structure for zs_user_group
-- ----------------------------
DROP TABLE IF EXISTS `zs_user_group`;
CREATE TABLE `zs_user_group`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '组名',
  `rules` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '权限节点',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '添加时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `status` enum('normal','hidden') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '会员组表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_user_group
-- ----------------------------
INSERT INTO `zs_user_group` VALUES (1, '测试组', '7,13,14,15,16,17,18,19,21,22,23,24,25,26,27,28,29,30,31,32', 1515386468, 1571999534, 'normal');

-- ----------------------------
-- Table structure for zs_user_money_log
-- ----------------------------
DROP TABLE IF EXISTS `zs_user_money_log`;
CREATE TABLE `zs_user_money_log`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '会员ID',
  `money` decimal(10, 2) NOT NULL DEFAULT 0.00 COMMENT '变更余额',
  `before` decimal(10, 2) NOT NULL DEFAULT 0.00 COMMENT '变更前余额',
  `after` decimal(10, 2) NOT NULL DEFAULT 0.00 COMMENT '变更后余额',
  `memo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '备注',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '会员余额变动表' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for zs_user_rule
-- ----------------------------
DROP TABLE IF EXISTS `zs_user_rule`;
CREATE TABLE `zs_user_rule`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pid` int(10) NULL DEFAULT NULL COMMENT '父ID',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '名称',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '标题',
  `remark` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '备注',
  `ismenu` tinyint(1) NULL DEFAULT NULL COMMENT '是否菜单',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) NULL DEFAULT NULL COMMENT '更新时间',
  `weigh` int(10) NULL DEFAULT 0 COMMENT '权重',
  `status` enum('normal','hidden') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '会员规则表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_user_rule
-- ----------------------------
INSERT INTO `zs_user_rule` VALUES (2, 0, 'api', 'API接口', '', 1, 1516168062, 1570184886, 2, 'normal');
INSERT INTO `zs_user_rule` VALUES (4, 2, 'user', '会员模块', '', 0, 1515386221, 1570184814, 11, 'normal');
INSERT INTO `zs_user_rule` VALUES (7, 0, 'menber/user', '会员中心', '', 1, 1516015012, 1571131950, 9, 'normal');
INSERT INTO `zs_user_rule` VALUES (9, 4, 'api/user/login', '登录', '', 0, 1515386247, 1515386247, 6, 'normal');
INSERT INTO `zs_user_rule` VALUES (10, 4, 'api/user/register', '注册', '', 0, 1515386262, 1516015236, 8, 'normal');
INSERT INTO `zs_user_rule` VALUES (11, 4, 'api/user/index', '会员中心', '', 0, 1516015012, 1516015012, 10, 'normal');
INSERT INTO `zs_user_rule` VALUES (12, 4, 'api/user/profile', '个人资料', '', 0, 1516015012, 1516015012, 3, 'normal');
INSERT INTO `zs_user_rule` VALUES (13, 7, 'index/menber/user/index', '首页', '', 0, 1570185009, 1571307858, 13, 'normal');
INSERT INTO `zs_user_rule` VALUES (14, 7, 'index/menber/user/profile', '个人资料', '', 1, 1570185140, 1571307852, 14, 'normal');
INSERT INTO `zs_user_rule` VALUES (15, 0, 'index/menber/article', '文章管理', '', 1, 1571045631, 1571133260, 15, 'normal');
INSERT INTO `zs_user_rule` VALUES (16, 15, 'index/menber/article/list', '文章列表', '', 1, 1571045642, 1571133073, 16, 'normal');
INSERT INTO `zs_user_rule` VALUES (17, 15, 'index/menber/article/add', '发布', '', 1, 1571045661, 1571133278, 17, 'normal');
INSERT INTO `zs_user_rule` VALUES (18, 15, 'index/menber/article/edit', '修改', '', 0, 1571045712, 1571133273, 18, 'normal');
INSERT INTO `zs_user_rule` VALUES (19, 15, 'index/menber/article/del', '删除', '', 0, 1571045748, 1571133265, 19, 'normal');
INSERT INTO `zs_user_rule` VALUES (21, 0, 'index/menber/project', '项目管理', '', 1, 1571644565, 1571644565, 21, 'normal');
INSERT INTO `zs_user_rule` VALUES (22, 21, 'index/menber/project/list', '项目列表', '', 1, 1571644604, 1571644604, 22, 'normal');
INSERT INTO `zs_user_rule` VALUES (23, 21, 'index/menber/project/add', '发布', '', 1, 1571644626, 1571644626, 23, 'normal');
INSERT INTO `zs_user_rule` VALUES (24, 21, 'index/menber/project/del', '删除', '', 0, 1571644650, 1571644650, 24, 'normal');
INSERT INTO `zs_user_rule` VALUES (25, 21, 'index/menber/project/edit', '修改', '', 0, 1571644671, 1571644671, 25, 'normal');
INSERT INTO `zs_user_rule` VALUES (26, 21, 'index/menber/project/msg', '项目留言', '', 1, 1571814613, 1571814613, 26, 'normal');
INSERT INTO `zs_user_rule` VALUES (27, 15, 'index/menber/article/comment', '文章评论', '', 1, 1571819257, 1571819257, 27, 'normal');
INSERT INTO `zs_user_rule` VALUES (28, 0, 'index/menber/advert', '广告管理', '', 1, 1571997827, 1571999456, 28, 'normal');
INSERT INTO `zs_user_rule` VALUES (29, 28, 'index/menber/advert/add', '添加', '', 0, 1571997855, 1571999502, 29, 'normal');
INSERT INTO `zs_user_rule` VALUES (30, 28, 'index/menber/advert/edit', '修改', '', 0, 1571997879, 1571997879, 30, 'normal');
INSERT INTO `zs_user_rule` VALUES (31, 28, 'index/menber/advert/del', '删除', '', 0, 1571997897, 1571997922, 31, 'normal');
INSERT INTO `zs_user_rule` VALUES (32, 28, 'index/menber/advert/list', '广告列表', '', 1, 1571999480, 1571999480, 32, 'normal');

-- ----------------------------
-- Table structure for zs_user_score_log
-- ----------------------------
DROP TABLE IF EXISTS `zs_user_score_log`;
CREATE TABLE `zs_user_score_log`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '会员ID',
  `score` int(10) NOT NULL DEFAULT 0 COMMENT '变更积分',
  `before` int(10) NOT NULL DEFAULT 0 COMMENT '变更前积分',
  `after` int(10) NOT NULL DEFAULT 0 COMMENT '变更后积分',
  `memo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '备注',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '会员积分变动表' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for zs_user_token
-- ----------------------------
DROP TABLE IF EXISTS `zs_user_token`;
CREATE TABLE `zs_user_token`  (
  `token` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Token',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '会员ID',
  `createtime` int(10) NULL DEFAULT NULL COMMENT '创建时间',
  `expiretime` int(10) NULL DEFAULT NULL COMMENT '过期时间',
  PRIMARY KEY (`token`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '会员Token表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_user_token
-- ----------------------------
INSERT INTO `zs_user_token` VALUES ('0f5c1f8bcfd47d40f5c741fe52a879ea67318b2f', 2, 1570179724, 1572771724);
INSERT INTO `zs_user_token` VALUES ('2fd2af02e20b52719c47b115341b8f0e20065755', 2, 1570179842, 1572771842);
INSERT INTO `zs_user_token` VALUES ('432d2d42fcca8a4c4fa7a33924d94ee53a153b8a', 4, 1571885412, 1574477412);
INSERT INTO `zs_user_token` VALUES ('5db12840fd06c2d381d29b2a425ecca1240a0ebe', 2, 1570179746, 1572771746);
INSERT INTO `zs_user_token` VALUES ('6618a28bc114e3a6210d5bb5499e9032143b28ce', 4, 1571997469, 1574589469);
INSERT INTO `zs_user_token` VALUES ('683a840be814c5d32ee0440b082239ab664ae3e4', 1, 1570178605, 1572770605);
INSERT INTO `zs_user_token` VALUES ('8ffce403949324c878e566e2964613a9b5513d01', 3, 1571817212, 1574409212);
INSERT INTO `zs_user_token` VALUES ('a62c4daa1ab43df9b030d2d375739e8446a70036', 2, 1570181194, 1572773194);
INSERT INTO `zs_user_token` VALUES ('b35b3400973084f85d906ca4ca92bf118e5297a9', 2, 1571046115, 1573638115);
INSERT INTO `zs_user_token` VALUES ('ec0db32af1413e7d4f59ae5164a3fdec7e1cf122', 2, 1570181124, 1572773124);

-- ----------------------------
-- Table structure for zs_version
-- ----------------------------
DROP TABLE IF EXISTS `zs_version`;
CREATE TABLE `zs_version`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `oldversion` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '旧版本号',
  `newversion` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '新版本号',
  `packagesize` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '包大小',
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '升级内容',
  `downloadurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '下载地址',
  `enforce` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '强制更新',
  `createtime` int(10) NOT NULL DEFAULT 0 COMMENT '创建时间',
  `updatetime` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT 0 COMMENT '权重',
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '版本表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zs_version
-- ----------------------------
INSERT INTO `zs_version` VALUES (1, '1.1.1,2', '1.2.1', '20M', '更新内容', 'https://www.fastadmin.net/download.html', 1, 1520425318, 0, 0, 'normal');

-- ----------------------------
-- Table structure for zs_web_config
-- ----------------------------
DROP TABLE IF EXISTS `zs_web_config`;
CREATE TABLE `zs_web_config`  (
  `id` int(11) NOT NULL,
  `web_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '网站名称',
  `web_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '网站ｌｏｇｏ',
  `web_phone` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '手机号',
  `web_moblie` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电话号码',
  `web_icp` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ICP',
  `web_beian` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公安网备案号',
  `web_copyright` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '版权',
  `web_baidu` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '百度统计代码',
  `web_email` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  `web_qq` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ＱＱ',
  `web_status` int(1) NOT NULL DEFAULT 1 COMMENT '网站运行状态；1.正常,0.关闭',
  `web_status_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '关闭网站原因',
  `web_register` int(1) NOT NULL DEFAULT 1 COMMENT '前台用户注册；1.正常,0.关闭',
  `web_register_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '关闭用户注册原因',
  `web_black_ip` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '禁止访问的ＩＰ黑名单',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '网站信息' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zs_web_config
-- ----------------------------
INSERT INTO `zs_web_config` VALUES (1, '招商网站', '/uploads/20191008/70579d8bb412a6aa768564a881dca806.png', '17819180343', NULL, '粤ICP备123456789-0号', '粤公安网备123456789-0号', '木帆科技', '<script> var _hmt = _hmt || []; (function() { var hm = document.createElement(\"script\"); hm.src = \"//hm.baidu.com/hm.js?XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX\"; var s = document.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(hm, s); })(); </script>', '123@qq.com', '572779486', 1, '网站维护升级中。。。。', 1, '网站维护升级中。。。', '');

-- ----------------------------
-- Table structure for zs_web_tdk
-- ----------------------------
DROP TABLE IF EXISTS `zs_web_tdk`;
CREATE TABLE `zs_web_tdk`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `keyword` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '关键字',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '描述',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '页面名称',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '网站ｔｄｋ' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zs_web_tdk
-- ----------------------------
INSERT INTO `zs_web_tdk` VALUES (1, '首页', '首页１', '首页', '首页');
INSERT INTO `zs_web_tdk` VALUES (2, '资讯', '资讯', '资讯', '资讯');
INSERT INTO `zs_web_tdk` VALUES (3, '资讯列表', '资讯列表', '资讯列表', '资讯列表');
INSERT INTO `zs_web_tdk` VALUES (4, '项目列表', '项目列表', '项目列表', '项目列表');
INSERT INTO `zs_web_tdk` VALUES (5, '帮助', '帮助', '帮助', '帮助');
INSERT INTO `zs_web_tdk` VALUES (6, '排行', '排行', '排行', '排行');

SET FOREIGN_KEY_CHECKS = 1;
