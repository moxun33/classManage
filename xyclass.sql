-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-06-11 10:13:47
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xyclass`
--

-- --------------------------------------------------------

--
-- 表的结构 `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `activity_type` varchar(10) NOT NULL,
  `class` varchar(15) NOT NULL,
  `status` int(2) NOT NULL,
  `originator_name` int(11) NOT NULL COMMENT '发起者名字',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `editor_name` varchar(20) NOT NULL,
  `cname` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `article_title` varchar(20) NOT NULL,
  `article_content` varchar(1000) NOT NULL,
  `thumb_url` varchar(50) NOT NULL,
  `img_url` varchar(70) NOT NULL,
  `publish_time` date NOT NULL,
  `reviewer_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `editor_name`, `cname`, `article_title`, `article_content`, `thumb_url`, `img_url`, `publish_time`, `reviewer_name`, `status`) VALUES
(14, 'mxx', '班级通知', '电气院-二手超市”活动', '【转】  师兄师姐们，电气院学生会将于28号办“二手超市”活动，帮助师兄师姐们卖掉较有价值的二手品，原则上单件商品50元以下可以申请工作人员代买；单件商品50元以上需由卖家亲自摆摊或找朋友代买。我们会去“扫楼”，详情可看传单，报名截止时间23号晚上11点，若报名可联系以下负责人（报名信息：姓名、专业、联系方式、物品、报价）\r\n\r\n软工  陈同学158********/62****\r\n信安  林同学158********/61**** \r\n电信  袁同学131******** \r\n包装  司徒同学158********/61****   \r\n电气  郭同学158********/61**** \r\n自动化 黄同学158********/ 61****', '', './Uploads/2015-05-20/555c47bc8a521.jpg', '2015-05-20', '', 1),
(15, 'ss', '班级新闻', '毕业季-你最想说什么？', '导语：长亭外，古道边，芳草碧连天。唱到一半，就已泪流满面。 毕业了，面对那些爱情，友情，还有眷恋的校园，你是不是还有很多的话要说，是不是还有很多的心愿没有实现。  \r\n\r\n毕业的经典语录\r\n1。用四（三）年的时间换一个心底永远的回忆。\r\n2。曾经抱怨，曾经感慨，如今只剩满腔留恋。\r\n\r\n3。就这样眨眼间毕业了。如果上天再给我一次机会，我要永远不毕业。\r\n\r\n4。朋友，让我轻轻的说声你好，虽然人生难免有聚有散，但你却是我心中，最珍惜最难忘的朋友。\r\n\r\n5。人世间最珍贵的，莫过于真诚的友情，深切的怀念，像幽香的小花，开在深谷。一点点语录网\r\n\r\n6。山海可以阻隔彼此，却阻隔不了我的思念，距离可以拉开你我，却拉不开真挚的情谊，时间可以淡忘过去，却忘不了永远的朋友。 \r\n\r\n7。时光匆匆，当我伸手去拦时，它却如悄悄地从指边溜掉了。我的大学生活就如这流水般缓缓而又匆匆地流淌着到了她的尽头，留给我的，是无尽的感慨收获和即将入海的宽广无限。 \r\n\r\n8。所谓好朋友就像我们一样，可以畅谈心中的感觉，彼此关心，彼此照顾，时而哈哈大笑，时而争得面红赤，却不会放在心上。\r\n\r\n9。天下没有不散的宴席，转眼间，大学四年的美丽年代就快到了要结束的时候。回首这四年，有过欢乐兴奋、也有痛苦悲伤，付出过汗水泪水，也有收获与成就。有人说过，忘记过去就意味着背叛，所以，我们回味过去，为的是未来。 \r\n\r\n10。希望几年后我能当你孩子他干爹！\r\n\r\n11。许多老房子消失了，校园里正在大兴土木。老房子留在照片里，我们呢？我们也能留在照片里吗？包括那些做作的微笑和夸张的“V ”形手势？  \r\n \r\n12。在成长的岁月中，曾经陪你笑陪你愁的朋友，是一辈子都不会忘记的，愿彼此都能珍惜这份友谊，做个永远的朋友。\r\n\r\n13。在我们相聚的日子里，有着最珍惜的情谊，在我们年轻的岁月中，有着最真挚的相知，这份缘值得我们珍惜。\r\n\r\n14。在这个阳光热辣的季节里，我们就要离去，www.yikexun.cn为着更好的宴会，更多的热闹\r\n\r\n15。几个人用同样钥匙是打开同一扇门；几个人用同样的目光，跟空荡的寝室说再见。\r\n\r\n16。看着空荡荡的宿舍和柜子，总觉得留下了什么，原来我留下了我对你们的思念。\r\n\r\n17。吵架也好，斗嘴也好，开心也好，出气也好，你永远是我心中最好的死党。 \r\n\r\n18。风是透明的，雨是滴答的，云是', '', './Uploads/2015-05-20/555c5068c6220.png', '2015-05-20', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL,
  `hot_number` int(20) NOT NULL,
  `students_numbers` int(20) NOT NULL,
  `class_grade` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`id`, `class_name`, `hot_number`, `students_numbers`, `class_grade`) VALUES
(1, '信息安全1班', 9, 25, 2011),
(2, '信息安全2班', 11, 30, 2012),
(3, '软件工程2班', 1, 5, 2013),
(4, '计算机科学技术2班', 4, 55, 2013),
(5, '工商管理1班', 45, 40, 2014),
(6, '信息安全', 47, 50, 2011),
(7, '翻译1班', 4, 78, 0),
(8, '软工1班', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ea_admin`
--

CREATE TABLE IF NOT EXISTS `ea_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `role_id` int(11) NOT NULL COMMENT '所属角色id',
  `email` varchar(64) NOT NULL COMMENT '登录邮箱',
  `password` varchar(32) NOT NULL COMMENT '登录密码',
  `mail_hash` varchar(36) NOT NULL COMMENT '邮件hash值',
  `remark` text NOT NULL COMMENT '管理员备注信息',
  `is_super` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否超级管理员',
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否启用',
  `last_login_at` int(11) NOT NULL COMMENT '最后登录时间',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`),
  KEY `fk_admin_role` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ea_admin`
--

INSERT INTO `ea_admin` (`id`, `role_id`, `email`, `password`, `mail_hash`, `remark`, `is_super`, `is_active`, `last_login_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@admin.com', '543fa5577b1207474bf330676291108c', '', '超级管理员', 1, 1, 1432111189, 1431840431, 1431840431);

-- --------------------------------------------------------

--
-- 表的结构 `ea_field`
--

CREATE TABLE IF NOT EXISTS `ea_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `model_id` int(11) NOT NULL COMMENT '所属模型id',
  `name` varchar(128) NOT NULL COMMENT '字段名称',
  `comment` varchar(32) NOT NULL COMMENT '字段注释',
  `type` varchar(32) NOT NULL COMMENT '字段类型',
  `length` varchar(16) NOT NULL COMMENT '字段长度',
  `value` varchar(128) NOT NULL COMMENT '字段默认值',
  `is_require` tinyint(4) DEFAULT '0' COMMENT '是否必需',
  `is_unique` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否唯一',
  `is_index` tinyint(4) DEFAULT '0' COMMENT '是否添加索引',
  `is_system` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否系统字段',
  `is_list_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '列表中显示',
  `auto_filter` varchar(32) NOT NULL COMMENT '自动过滤函数',
  `auto_fill` varchar(32) NOT NULL COMMENT '自动完成函数',
  `fill_time` varchar(16) NOT NULL DEFAULT 'both' COMMENT '填充时机',
  `relation_model` int(11) NOT NULL COMMENT '关联的模型',
  `relation_field` varchar(128) NOT NULL COMMENT '关联的字段',
  `relation_value` varchar(128) NOT NULL COMMENT '关联显示的值',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `fk_field_model` (`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据模型字段' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ea_model`
--

CREATE TABLE IF NOT EXISTS `ea_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(32) NOT NULL COMMENT '模型名称',
  `tbl_name` varchar(32) NOT NULL COMMENT '数据表名称',
  `menu_name` varchar(32) NOT NULL COMMENT '菜单名称',
  `is_inner` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否为内部表',
  `has_pk` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否包含主键',
  `tbl_engine` varchar(16) NOT NULL DEFAULT 'InnoDB' COMMENT '引擎类型',
  `description` text NOT NULL COMMENT '模型描述',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据模型信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ea_role`
--

CREATE TABLE IF NOT EXISTS `ea_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `pid` int(11) NOT NULL COMMENT '父角色id',
  `name` varchar(32) NOT NULL COMMENT '角色名称',
  `description` text NOT NULL COMMENT '角色描述',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '角色状态',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='角色表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ea_role`
--

INSERT INTO `ea_role` (`id`, `pid`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '超级管理员', '系统内置超级管理员组，不受权限分配账号限制', 1, 1431840431, 1431840431);

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(5) NOT NULL,
  `group_name` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  `numbers` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `group`
--

INSERT INTO `group` (`id`, `group_name`, `status`, `numbers`) VALUES
(2, '辅导员', 1, 5),
(3, '班主任', 1, 1),
(1, '管理员', 1, 0),
(4, '班干部', 1, 3),
(7, '普通学生', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `message_content` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `user_name`, `message_content`, `status`) VALUES
(19, 'ss', '没有什么人能一路单纯到底，但要记住，别忘了最初的自己。', 1),
(18, 'ss', '愿你的生命有够多的云翳，造成一个美丽的黄昏。', 1),
(17, 'mxx', '一个有信仰的人生，不管成不成功，至少不会迷茫。', 1),
(16, 'mxx', '青春，就要华丽的跌倒，骄傲的站起。', 1);

-- --------------------------------------------------------

--
-- 表的结构 `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `cid` int(5) NOT NULL,
  `gid` int(5) NOT NULL,
  `article_hit` int(5) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `system_news_title` varchar(20) NOT NULL,
  `system_news` varchar(1000) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `real_name` varchar(30) NOT NULL,
  `user_passwd` varchar(20) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `user_class` varchar(25) NOT NULL,
  `user_grade` int(5) DEFAULT NULL,
  `student_id` int(15) DEFAULT NULL,
  `gid` int(5) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `reg_ip` varchar(16) NOT NULL,
  `log_ip` varchar(16) NOT NULL,
  `reg_time` datetime NOT NULL,
  `log_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user_role`, `user_name`, `real_name`, `user_passwd`, `gender`, `user_class`, `user_grade`, `student_id`, `gid`, `avatar`, `status`, `reg_ip`, `log_ip`, `reg_time`, `log_time`) VALUES
(2, '班主任', 'huang', '黄', 'dss123', '女', '信息安全1班', 2011, 5552452, 3, './Uploads/avatar/avatar.png', 1, '127.0.0.1', '::1', '2015-05-19 14:39:23', '2015-05-22 20:58:04'),
(3, '辅导员', 'xinan', '闲的', '123456', '女', '信息安全1班', 2012, 20125788, 2, './Uploads/avatar/avatar.png', 1, '127.0.0.1', '127.0.0.1', '2015-05-20 01:25:46', '2015-05-20 01:25:56'),
(5, '普通学生', 'ss', '好好过', '123456', '男', '信息安全1班', 2012, 564534, 7, './Uploads/avatar/avatar.png', 1, '::1', '::1', '2015-05-22 18:22:54', '2015-05-22 23:20:53'),
(1, '班干部', 'momo', '莫匀', 'mxxmxx', '男', '信息安全1班', 2012, 2147483647, 1, './Uploads/avatar/avatar.png', 1, '::1', '::1', '2015-05-22 19:10:44', '2015-06-04 11:14:08');

-- --------------------------------------------------------

--
-- 表的结构 `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(15) NOT NULL,
  `class_name` varchar(15) NOT NULL,
  `vote_type` varchar(10) NOT NULL,
  `title` varchar(22) NOT NULL,
  `description` varchar(500) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `vote_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `vote_log`
--

CREATE TABLE IF NOT EXISTS `vote_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `option` varchar(200) NOT NULL,
  `vote_time` datetime NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `vote_option`
--

CREATE TABLE IF NOT EXISTS `vote_option` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `class_name` varchar(25) NOT NULL,
  `opt_name` varchar(255) NOT NULL,
  `opt_count` int(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 限制导出的表
--

--
-- 限制表 `ea_admin`
--
ALTER TABLE `ea_admin`
  ADD CONSTRAINT `fk_admin_role` FOREIGN KEY (`role_id`) REFERENCES `ea_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `ea_field`
--
ALTER TABLE `ea_field`
  ADD CONSTRAINT `fk_field_model` FOREIGN KEY (`model_id`) REFERENCES `ea_model` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
