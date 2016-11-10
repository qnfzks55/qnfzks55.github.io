# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# 호스트: localhost
# 처리한 시간: 10-07-18 19:28 
# 서버 버전: 4.0.18
# PHP 버전: 4.3.6
# 
# 데이터베이스 : `portfolio`
# 

# --------------------------------------------------------

#
# 테이블 구조 `board`
#

CREATE TABLE `board` (
  `no` int(11) NOT NULL auto_increment,
  `main_id` varchar(100) NOT NULL default '',
  `sub_id` varchar(100) NOT NULL default '',
  `name` varchar(200) NOT NULL default '',
  `subject` varchar(200) NOT NULL default '',
  `contents` text NOT NULL,
  `date` date NOT NULL default '0000-00-00',
  `hit` int(11) NOT NULL default '0',
  `fam` int(11) NOT NULL default '0',
  `password` int(11) NOT NULL default '0',
  PRIMARY KEY  (`no`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

#
# 테이블의 덤프 데이터 `board`
#

INSERT INTO `board` VALUES (1, 'community', 'freeboard', '이명종', '안녕하세요 테스트 중입니다.', '안녕하세요 테스트 중입니다.', '2010-07-18', 0, 0, 0);

# --------------------------------------------------------

#
# 테이블 구조 `main_menu`
#

CREATE TABLE `main_menu` (
  `no` int(11) NOT NULL auto_increment,
  `main_id` varchar(100) NOT NULL default '',
  `main_title` varchar(200) NOT NULL default '',
  `od` int(11) NOT NULL default '0',
  `hidden` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`no`)
) TYPE=MyISAM AUTO_INCREMENT=6 ;

#
# 테이블의 덤프 데이터 `main_menu`
#

INSERT INTO `main_menu` VALUES (1, 'profile', 'PROFILE', 1, '0');
INSERT INTO `main_menu` VALUES (2, 'portfolio', 'PORTFOLIO', 2, '0');
INSERT INTO `main_menu` VALUES (3, 'experience', 'EXPERIENCE', 3, '0');
INSERT INTO `main_menu` VALUES (4, 'skills', 'SKILLS', 4, '0');
INSERT INTO `main_menu` VALUES (5, 'community', 'COMMUNITY', 5, '0');
