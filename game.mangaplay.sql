/*
 Navicat Premium Data Transfer

 Source Server         : passport.dev
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : game.mangaplay

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 21/08/2020 16:21:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (9, 'phuoctrung998@gmail.com', 'Trung Nguyen', '$2y$10$RZPXo2oBsGeeAAN7VLwrkOwony0opd7/UzaVWt5v8gscucDxJ6MOe', '2020-07-31 03:23:11', '2020-07-31 03:23:11');
INSERT INTO `admins` VALUES (10, 'trung9@gmail.com', 'Trung', '$2y$10$GpfIJjZ75G/NU70FafIHuuOwqPKwriqT2EI2n0EsnAVYKGPn7teRW', '2020-08-20 04:16:06', '2020-08-20 04:16:06');
INSERT INTO `admins` VALUES (8, 'trung1999@gmail.com', 'Trung', '$2y$10$Dtchqmo6zKm1eZ5zbsR8UuTmNW7v4vG0xX2hOOzNAsqc8.rah7ZHS', '2020-07-31 10:21:43', '2020-08-14 02:24:00');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for giftcode
-- ----------------------------
DROP TABLE IF EXISTS `giftcode`;
CREATE TABLE `giftcode`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `giftcode` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 0 COMMENT '0:none 1:active',
  `member_id` int(11) NULL DEFAULT NULL,
  `giftcode_cate_id` int(11) NULL DEFAULT 0,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 287134 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of giftcode
-- ----------------------------
INSERT INTO `giftcode` VALUES (287130, '1456311111', 1, 1213, 11111, '2020-07-29', '2020-08-13');
INSERT INTO `giftcode` VALUES (287132, '1235', 1, 12, 123, '2020-08-13', '2020-08-13');
INSERT INTO `giftcode` VALUES (287133, '1234124aa', 0, 2, 11111, '2020-08-20', '2020-08-20');

-- ----------------------------
-- Table structure for giftcode_cates
-- ----------------------------
DROP TABLE IF EXISTS `giftcode_cates`;
CREATE TABLE `giftcode_cates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `code` int(11) NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT NULL,
  `flag_home` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of giftcode_cates
-- ----------------------------
INSERT INTO `giftcode_cates` VALUES (30, 'test11', 11111, 0, 2, '2020-07-29 09:25:52', '2020-08-13 09:45:31');
INSERT INTO `giftcode_cates` VALUES (31, 'tesst', 123, 1, 2, '2020-08-13 09:20:26', '2020-08-13 09:20:26');
INSERT INTO `giftcode_cates` VALUES (32, 'Test', 21324, 0, 2, '2020-08-20 03:58:01', '2020-08-20 03:58:01');
INSERT INTO `giftcode_cates` VALUES (33, 'Test', 1242, 0, 1, '2020-08-20 03:58:32', '2020-08-20 03:58:32');
INSERT INTO `giftcode_cates` VALUES (34, 'Test', 1111111111, 1, 1, '2020-08-20 03:59:18', '2020-08-20 03:59:18');
INSERT INTO `giftcode_cates` VALUES (35, 'Test', 111111, 1, 2, '2020-08-20 03:59:30', '2020-08-20 03:59:30');
INSERT INTO `giftcode_cates` VALUES (36, 'Test', 1124213, 1, 1, '2020-08-20 03:59:47', '2020-08-20 03:59:47');
INSERT INTO `giftcode_cates` VALUES (37, 'Test', 12121, 0, 2, '2020-08-20 03:59:57', '2020-08-20 03:59:57');
INSERT INTO `giftcode_cates` VALUES (38, 'Test', 123213, 1, 1, '2020-08-20 04:00:45', '2020-08-20 04:00:45');
INSERT INTO `giftcode_cates` VALUES (39, 'Test', 1123, 1, 3, '2020-08-20 04:02:28', '2020-08-20 04:02:28');
INSERT INTO `giftcode_cates` VALUES (40, 'Test', 11111111, 1, 3, '2020-08-20 04:03:27', '2020-08-20 04:03:41');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (25, '2014_10_12_000000_create_users_table', 4);
INSERT INTO `migrations` VALUES (26, '2014_10_12_100000_create_password_resets_table', 4);
INSERT INTO `migrations` VALUES (27, '2019_08_19_000000_create_failed_jobs_table', 4);
INSERT INTO `migrations` VALUES (23, '2020_07_23_021719_create_tbl_admin', 2);
INSERT INTO `migrations` VALUES (24, '2020_07_25_160331_loyal_customers', 3);

-- ----------------------------
-- Table structure for minigame_outcome
-- ----------------------------
DROP TABLE IF EXISTS `minigame_outcome`;
CREATE TABLE `minigame_outcome`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NULL DEFAULT NULL,
  `flag_win` int(11) NULL DEFAULT NULL,
  `reward_id` int(11) NULL DEFAULT NULL,
  `reward2_id` int(11) NULL DEFAULT NULL,
  `reward3_id` int(11) NULL DEFAULT NULL,
  `point` int(11) NOT NULL DEFAULT 0,
  `create_time` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53298 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of minigame_outcome
-- ----------------------------

-- ----------------------------
-- Table structure for minigame_sharefb
-- ----------------------------
DROP TABLE IF EXISTS `minigame_sharefb`;
CREATE TABLE `minigame_sharefb`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `create_time` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4200 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of minigame_sharefb
-- ----------------------------

-- ----------------------------
-- Table structure for minigame_vongxoay_reward
-- ----------------------------
DROP TABLE IF EXISTS `minigame_vongxoay_reward`;
CREATE TABLE `minigame_vongxoay_reward`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sort` int(10) NOT NULL DEFAULT 0,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `quote` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `percent` int(10) NULL DEFAULT NULL,
  `score` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of minigame_vongxoay_reward
-- ----------------------------

-- ----------------------------
-- Table structure for mkt
-- ----------------------------
DROP TABLE IF EXISTS `mkt`;
CREATE TABLE `mkt`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `member_id` int(11) NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `action` tinyint(4) NULL DEFAULT 0 COMMENT '0: click, 1: register, 2: user ogames login',
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 309270 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mkt
-- ----------------------------
INSERT INTO `mkt` VALUES (309264, 'test', 12, 'trung', '2020-07-29 07:21:24', 2, '2020-08-20');
INSERT INTO `mkt` VALUES (309266, 'test', 1213, 'phuoctrung998', '2020-08-13 04:41:11', 2, '2020-08-13');
INSERT INTO `mkt` VALUES (309267, 'test', 4, 'trung111', '2020-08-20 03:43:57', 1, '2020-08-20');
INSERT INTO `mkt` VALUES (309268, 'test', 4, 'trung111', '2020-08-20 03:43:57', 1, '2020-08-20');
INSERT INTO `mkt` VALUES (309269, 'test', 4, 'trung111', '2020-08-20 03:43:57', 1, '2020-08-20');

-- ----------------------------
-- Table structure for moneymkt
-- ----------------------------
DROP TABLE IF EXISTS `moneymkt`;
CREATE TABLE `moneymkt`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `money` int(100) NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of moneymkt
-- ----------------------------
INSERT INTO `moneymkt` VALUES (2, 'test', 1000000, '2020-07-29', '2020-07-29');
INSERT INTO `moneymkt` VALUES (3, 'test1', 2000000000, '2020-07-29', '2020-07-29');
INSERT INTO `moneymkt` VALUES (5, 'test', 10000001, '2020-08-20', '2020-08-20');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for post_cates
-- ----------------------------
DROP TABLE IF EXISTS `post_cates`;
CREATE TABLE `post_cates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `meta_description` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of post_cates
-- ----------------------------
INSERT INTO `post_cates` VALUES (16, 'test hình ảnh', 1, '/uploads/images/post/1597893106.png', 'test hình ảnh', 'test hình ảnh', '2020-08-13 03:53:26', '2020-08-20 03:11:46');
INSERT INTO `post_cates` VALUES (17, 'Test fom', 3, '/uploads/images/post/1597893206.png', 'Test fom', 'Test fom', '2020-08-20 03:05:35', '2020-08-20 03:13:26');
INSERT INTO `post_cates` VALUES (18, 'Test', 2, '/uploads/images/post/1597893236.png', 'Test fom', 'Test fom', '2020-08-20 03:07:32', '2020-08-20 03:13:56');
INSERT INTO `post_cates` VALUES (19, 'test hình ảnh', 3, '/uploads/images/post/1597893224.png', 'Test fom', 'Test fom', '2020-08-20 03:07:55', '2020-08-20 03:13:44');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `cate_id` int(11) NULL DEFAULT NULL COMMENT 'id danh mục',
  `post_cat_id` int(11) NULL DEFAULT NULL,
  `is_hot` int(11) NULL DEFAULT NULL COMMENT 'hot hay thường',
  `meta_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `meta_description` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `quote` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `is_timer` int(11) NULL DEFAULT NULL COMMENT 'hẹn giờ hoặc không',
  `status` int(255) NULL DEFAULT NULL COMMENT 'mở hoặc đóng',
  `timer` datetime(0) NULL DEFAULT NULL COMMENT 'time nếu hẹn giờ là có',
  `author_id` int(11) NULL DEFAULT NULL COMMENT 'id tài khoản post bài',
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 99 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (28, 'Test form mới', 1, 1, 0, 'tessst aaa', 'Test form mới', '/uploads/images/post/1597978896.png', 'Test form mới', '<p>Test form mới</p>', 'tessst-aaa', 0, NULL, NULL, 1, '2020-08-07', '2020-08-21');
INSERT INTO `posts` VALUES (32, 'Thông tin mới nhất', 6, 2, 0, 'tessst', 'Thông tin mới nhất', '/uploads/images/post/1597892559.png', 'Thông tin mới nhất', '<p>Cổng game giải tr&iacute; trực tuyến MangaPlay</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/img1.png\" style=\"height:442px; width:498px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/1596790341.png\" style=\"height:304px; width:300px\" /></p>', 'thong-tin-moi-nhat', 0, NULL, NULL, 5, '2020-08-10', '2020-08-20');
INSERT INTO `posts` VALUES (35, 'Test', 3, 2, 0, 'a', 'a', '/uploads/images/1597118344.png', 'a', '<p>a</p>', 'test-2', NULL, NULL, NULL, NULL, '2020-08-11', '2020-08-11');
INSERT INTO `posts` VALUES (82, 'Test', 6, 2, 1, 'Test', 'Thông tin mới nhất', '/uploads/images/post/1597891442.png', 'Thông tin mới nhất', '<p>Test</p>', 'test-3', 0, NULL, NULL, NULL, '2020-08-13', '2020-08-20');
INSERT INTO `posts` VALUES (83, 'Test upload hình ảnh', 6, 2, 1, 'upload hình ảnh', 'Test', '/uploads/images/post/1597828718.png', 'Test', '<p>upload h&igrave;nh ảnh</p>', 'test-upload-hinh-anh', 1, NULL, '2020-08-30 00:00:00', NULL, '2020-08-13', '2020-08-19');
INSERT INTO `posts` VALUES (85, 'test thư mục chứa file', 6, 1, 0, 'test thư mục chứa file', 'Thông tin mới nhất', '/uploads/images/post/1597891572.png', 'Thông tin mới nhất', '<p>test thư mục chứa file</p>', 'test-thu-muc-chua-file-1', 1, NULL, '2020-08-21 00:00:00', NULL, '2020-08-13', '2020-08-20');
INSERT INTO `posts` VALUES (86, 'Test form mới', 6, 1, 1, 'Test form mới', 'Test form mới', '/uploads/images/post/1597633122.png', 'Test form mới', '<p>Test form mới</p>', 'test-form-moi', 0, NULL, NULL, NULL, '2020-08-17', '2020-08-17');
INSERT INTO `posts` VALUES (87, 'edit', 6, 1, 0, 'edit', 'edit', '/uploads/images/post/1597808760.png', 'edit', '<p>edit&nbsp;</p>', 'edit', 0, NULL, NULL, NULL, '2020-08-19', '2020-08-19');
INSERT INTO `posts` VALUES (89, 'Test body', 6, 2, 0, 'Test body', 'Thông tin mới nhất', '/uploads/images/post/1597891070.png', 'Thông tin mới nhất', '<p>Test body</p>', 'test-body-1', 0, NULL, NULL, NULL, '2020-08-19', '2020-08-20');
INSERT INTO `posts` VALUES (90, 'Test', 6, 1, 1, 'Test', 'Thông tin mới nhất', '/uploads/images/post/1597891219.png', 'Thông tin mới nhất', '<p>Test</p>', 'test-4', 0, NULL, NULL, NULL, '2020-08-19', '2020-08-20');
INSERT INTO `posts` VALUES (91, 'Test', 6, 1, 0, 'Test', 'Test', '/uploads/images/post/1597828624.png', 'Test', '<p>Test</p>', 'test-5', 0, NULL, NULL, NULL, '2020-08-19', '2020-08-19');
INSERT INTO `posts` VALUES (92, 'Test', 6, 1, 0, 'Test', 'test hình ảnh', '/uploads/images/post/1597890908.png', 'test hình ảnh', '<p>Test</p>', 'test-6', 0, NULL, NULL, NULL, '2020-08-19', '2020-08-20');
INSERT INTO `posts` VALUES (93, 'Test', 6, 1, 1, 'Test', 'Thông tin mới nhất', '/uploads/images/post/1597891187.png', 'Thông tin mới nhất', '<p>Test</p>', 'test-7', 0, NULL, NULL, NULL, '2020-08-19', '2020-08-20');
INSERT INTO `posts` VALUES (95, 'test hệ thống', 6, 2, 1, 'test hệ thống', 'test hình ảnh', '/uploads/images/post/1597889981.png', 'test hình ảnh', '<p>test hệ thống</p>', 'test-he-thong', 0, NULL, NULL, NULL, '2020-08-20', '2020-08-20');
INSERT INTO `posts` VALUES (96, 'test hình ảnh', 9, 1, 0, 'test hình ảnh', 'test hình ảnh', '/uploads/images/post/1597893329.png', 'test hình ảnh', '<p>test h&igrave;nh ảnh</p>', 'test-hinh-anh', 0, NULL, NULL, NULL, '2020-08-20', '2020-08-20');
INSERT INTO `posts` VALUES (97, 'Testac', 1, 1, 0, 'Testac', 'Testac', '/uploads/images/post/1597897226.png', 'Testac', '<p>Testac</p>', 'testac', 1, NULL, '2020-08-25 00:00:00', NULL, '2020-08-20', '2020-08-20');

-- ----------------------------
-- Table structure for slider_cates
-- ----------------------------
DROP TABLE IF EXISTS `slider_cates`;
CREATE TABLE `slider_cates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codes` int(255) NOT NULL,
  `status` int(11) NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slider_cates
-- ----------------------------
INSERT INTO `slider_cates` VALUES (1, 'Testtt form', 1, 1, '2020-07-28', '2020-08-20');
INSERT INTO `slider_cates` VALUES (2, 'Tess', 1, 2, '2020-07-28', '2020-07-28');
INSERT INTO `slider_cates` VALUES (5, 'Test slider', 12, 1, '2020-08-13', '2020-08-13');
INSERT INTO `slider_cates` VALUES (6, 'Test', 1, 1, '2020-08-13', '2020-08-13');
INSERT INTO `slider_cates` VALUES (8, 'Test', 3, 1, '2020-08-20', '2020-08-20');

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `slider_cate_id` int(11) NULL DEFAULT NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `sort` int(11) NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (26, 'Test', 1, '/uploads/images/slider/1597739532.png', 'http://game.mangaplay.com/tin-tuc', 'Test', 12, 1, '2020-08-13', '2020-08-18');
INSERT INTO `sliders` VALUES (27, 'Test slider', 1, '/uploads/images/slider/1597739539.png', 'http://game.mangaplay.com/test-form-moi', 'tesst', 1, 1, '2020-08-17', '2020-08-18');
INSERT INTO `sliders` VALUES (28, 'Test', 1, '/uploads/images/slider/1597742795.png', 'http://game.mangaplay.com/tin-tuc', 'test', 1, 1, '2020-08-18', '2020-08-18');
INSERT INTO `sliders` VALUES (29, 'Test slier', 12, '/uploads/images/slider/1597890574.png', 'http://game.mangaplay.com/tin-tuc', 'aaa', 12, 1, '2020-08-18', '2020-08-20');

-- ----------------------------
-- Table structure for systems_config
-- ----------------------------
DROP TABLE IF EXISTS `systems_config`;
CREATE TABLE `systems_config`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `data_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'so,text,van ban..json vv',
  `data` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of systems_config
-- ----------------------------

-- ----------------------------
-- Table structure for systems_config_value
-- ----------------------------
DROP TABLE IF EXISTS `systems_config_value`;
CREATE TABLE `systems_config_value`  (
  `systems_config_id` int(11) NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`systems_config_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of systems_config_value
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Trung', 'phuoctrung998@gmail.com', NULL, '$2y$10$zLPzQajDb/IwmcJHHhaguuyjFz4w1nmcmT8oBpnK9lfolm16aBL1m', NULL, '2020-08-07 03:37:03', '2020-08-07 03:37:03');
INSERT INTO `users` VALUES (2, 'Trung Nguyen', 'trung@gmail.com', NULL, '$2y$10$4hGe5jk8.M6AzhGR6bRJL.fiw.sSYzjdjlthlE0seoTY98Gu.14Ca', NULL, '2020-08-07 03:41:22', '2020-08-07 03:41:22');

SET FOREIGN_KEY_CHECKS = 1;
