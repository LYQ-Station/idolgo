# ************************************************************
# Sequel Pro SQL dump
# Version 3574
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: kaiganba
# Generation Time: 2012-04-21 00:14:02 +0800
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table acl_token
# ------------------------------------------------------------

DROP TABLE IF EXISTS `acl_token`;

CREATE TABLE `acl_token` (
  `sn` char(16) NOT NULL COMMENT 'token编号',
  `uid` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `uname` varchar(64) DEFAULT NULL COMMENT '用户名',
  `nickname` varchar(64) DEFAULT NULL,
  `login_time` int(11) unsigned DEFAULT NULL COMMENT '登录时间',
  `sync_time` int(11) unsigned DEFAULT NULL COMMENT '同步时间',
  `login_ip` int(11) unsigned DEFAULT NULL COMMENT '登录ip',
  UNIQUE KEY `sn` (`sn`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COMMENT='登录令牌';



# Dump of table acl_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `acl_user`;

CREATE TABLE `acl_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sn` char(16) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `nickname` varchar(64) DEFAULT NULL,
  `passwd` char(32) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `avator` varchar(64) DEFAULT NULL,
  `web` varchar(512) DEFAULT NULL,
  `reg_ip` int(11) unsigned DEFAULT NULL,
  `reg_time` datetime DEFAULT NULL,
  `last_login_ip` int(11) unsigned DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

LOCK TABLES `acl_user` WRITE;
/*!40000 ALTER TABLE `acl_user` DISABLE KEYS */;

INSERT INTO `acl_user` (`id`, `sn`, `username`, `nickname`, `passwd`, `status`, `avator`, `web`, `reg_ip`, `reg_time`, `last_login_ip`, `last_login_time`)
VALUES
	(1,'123','admin','admin','202cb962ac59075b964b07152d234b70',0,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `acl_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kg_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_category`;

CREATE TABLE `kg_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sn` varchar(128) NOT NULL DEFAULT '',
  `title` varchar(64) NOT NULL DEFAULT '',
  `condition` varchar(512) DEFAULT NULL COMMENT '附加查询条件',
  `ctime` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `kg_category` WRITE;
/*!40000 ALTER TABLE `kg_category` DISABLE KEYS */;

INSERT INTO `kg_category` (`id`, `sn`, `title`, `condition`, `ctime`, `status`)
VALUES
	(1,'design','设计',NULL,'2012-05-01 00:00:00',NULL),
	(2,'cc','cc','','2012-04-11 22:06:24',0),
	(3,'ggg','gg','','2012-04-11 22:07:02',0),
	(4,'xx','xx','','2012-04-11 22:07:35',0),
	(5,'aa','aa','','2012-04-11 22:08:04',0);

/*!40000 ALTER TABLE `kg_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kg_project
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_project`;

CREATE TABLE `kg_project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `manager_id` int(10) unsigned DEFAULT NULL,
  `create_loction` int(11) DEFAULT NULL,
  `contents` text,
  `cover` varchar(1024) DEFAULT NULL,
  `ctime` timestamp NULL DEFAULT NULL,
  `deadline` int(10) unsigned DEFAULT NULL,
  `is_product` tinyint(1) DEFAULT NULL,
  `in_store` tinyint(1) DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `online_days` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `kg_project` WRITE;
/*!40000 ALTER TABLE `kg_project` DISABLE KEYS */;

INSERT INTO `kg_project` (`id`, `title`, `manager_id`, `create_loction`, `contents`, `cover`, `ctime`, `deadline`, `is_product`, `in_store`, `total_amount`, `online_days`)
VALUES
	(1,'test',1,0,'testteststest',NULL,'2012-03-01 00:00:00',NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `kg_project` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kg_project_follower
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_project_follower`;

CREATE TABLE `kg_project_follower` (
  `pid` int(11) unsigned NOT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table kg_project_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_project_post`;

CREATE TABLE `kg_project_post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `proj_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `ctime` timestamp NULL DEFAULT NULL,
  `creator` int(10) unsigned DEFAULT NULL,
  `contents` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table kg_project_provide_option
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_project_provide_option`;

CREATE TABLE `kg_project_provide_option` (
  `pid` int(11) unsigned NOT NULL,
  `amount` float DEFAULT NULL,
  `contents` varchar(512) DEFAULT NULL,
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table kg_project_provider
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_project_provider`;

CREATE TABLE `kg_project_provider` (
  `pid` int(11) unsigned NOT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  `amount` float DEFAULT NULL,
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table kg_trade
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_trade`;

CREATE TABLE `kg_trade` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sn` char(64) DEFAULT NULL,
  `proj_id` int(10) unsigned DEFAULT NULL,
  `proj_name` varchar(128) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `agent_sn` char(16) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ctime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table kg_user_follower
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kg_user_follower`;

CREATE TABLE `kg_user_follower` (
  `uid` int(11) unsigned NOT NULL,
  `f_uid` int(10) unsigned DEFAULT NULL,
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
