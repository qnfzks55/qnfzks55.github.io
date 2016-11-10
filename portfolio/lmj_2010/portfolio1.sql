# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# ȣ��Ʈ: localhost
# ó���� �ð�: 10-07-18 19:28 
# ���� ����: 4.0.18
# PHP ����: 4.3.6
# 
# �����ͺ��̽� : `portfolio`
# 

# --------------------------------------------------------

#
# ���̺� ���� `board`
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
# ���̺��� ���� ������ `board`
#

INSERT INTO `board` VALUES (1, 'community', 'freeboard', '�̸���', '�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.', '�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.', '2010-07-18', 0, 0, 0);

# --------------------------------------------------------

#
# ���̺� ���� `main_menu`
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
# ���̺��� ���� ������ `main_menu`
#

INSERT INTO `main_menu` VALUES (1, 'profile', 'PROFILE', 1, '0');
INSERT INTO `main_menu` VALUES (2, 'portfolio', 'PORTFOLIO', 2, '0');
INSERT INTO `main_menu` VALUES (3, 'experience', 'EXPERIENCE', 3, '0');
INSERT INTO `main_menu` VALUES (4, 'skills', 'SKILLS', 4, '0');
INSERT INTO `main_menu` VALUES (5, 'community', 'COMMUNITY', 5, '0');
