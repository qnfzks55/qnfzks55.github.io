# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# ȣ��Ʈ: localhost
# ó���� �ð�: 10-09-04 10:11 
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
  `mid` varchar(100) NOT NULL default '',
  `sid` varchar(100) NOT NULL default '',
  `name` varchar(200) NOT NULL default '',
  `subject` varchar(200) NOT NULL default '',
  `contents` text NOT NULL,
  `date` date NOT NULL default '0000-00-00',
  `hit` int(11) NOT NULL default '0',
  `images` varchar(100) NOT NULL default '',
  `password` varchar(100) NOT NULL default '0',
  PRIMARY KEY  (`no`)
) TYPE=MyISAM AUTO_INCREMENT=100 ;

#
# ���̺��� ���� ������ `board`
#

INSERT INTO `board` VALUES (21, 'community', 'board', '�����ٶ󸶹��ڻ����ī', '�׽�Ʈ ���Դϴ�.', '�׽�Ʈ ���Դϴ�.<br />\r\n�׽�Ʈ ���Դϴ�.�׽�Ʈ ���Դϴ�.<br />\r\n�׽�Ʈ ���Դϴ�.<br />\r\n�׽�Ʈ ���Դϴ�.<br />\r\n�׽�Ʈ ���Դϴ�<br />\r\n<br />\r\n�׽�Ʈ ���Դϴ�.<br />\r\n������ ����', '2010-08-20', 5, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (20, 'community', 'board', '�̸���', '�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.', '�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.<br />\r\n�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.<br />\r\n�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.<br />\r\n<br />\r\n�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.<br />\r\n�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.<br />\r\n�ȳ��ϼ��� �׽�Ʈ ���Դϴ�.', '2010-08-20', 14, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (22, 'community', 'board', '�̸���', '���� Ȩ������ �׽�Ʈ ���Դϴ�. �˼��մϴ�.', '���� Ȩ������ �׽�Ʈ ���Դϴ�. �˼��մϴ�.<br />\r\n���� Ȩ������ �׽�Ʈ ���Դϴ�. �˼��մϴ�.<br />\r\n<br />\r\n<br />\r\n���� Ȩ������ �׽�Ʈ ���Դϴ�. �˼��մϴ�.<br />\r\n���� Ȩ������ �׽�Ʈ ���Դϴ�. �˼��մϴ�.', '2010-08-20', 10, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (23, 'community', 'board', '�̸���', 'Ȩ������ �׽�Ʈ ���Դϴ�.', 'Ȩ������ �׽�Ʈ ���Դϴ�.<br />\r\nȨ������ �׽�Ʈ ���Դϴ�.<br />\r\nȨ������ �׽�Ʈ ���Դϴ�.<br />\r\n<br />\r\nȨ������ �׽�Ʈ ���Դϴ�.Ȩ������ �׽�Ʈ ���Դϴ�.<br />\r\n<br />\r\nȨ������ �׽�Ʈ ���Դϴ�.<br />\r\nȨ������ �׽�Ʈ ���Դϴ�.<br />\r\nȨ������ �׽�Ʈ ���Դϴ�.', '2010-08-20', 25, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (24, 'community', 'gallery', '������', '������ �׽�Ʈ', '������ �׽�Ʈ ���Դϴ�.\r\n���߻������', '2010-08-23', 0, '0', '0');
INSERT INTO `board` VALUES (25, 'community', 'board', '�׽�Ʈ', 'test', 'test', '2010-08-26', 12, '', '378b243e220ca493');
INSERT INTO `board` VALUES (26, 'community', 'board', '���ö', '�ù߳��', '���� �����', '2010-08-30', 4, '', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (27, 'community', 'board', '�����', '������', '�����̰� �������� �޾ƴ޶󳻿�<br />\r\n����������..<br />\r\n�̰� ��&#52291;��...<br />\r\n�۶����ٰ� �� �����ȭ���� ����<br />\r\nû�� ����ٷ���<br />\r\n�̷��ԿԴ�<br />\r\n���η� �о� --<br />\r\n<br />\r\n<br />\r\n---------------------<br />\r\n�������������������������� ����<br />\r\n�̳� ����;�..�̤�', '2010-08-30', 5, '', '378b243e220ca493');
INSERT INTO `board` VALUES (28, 'community', 'board', '�����', '�ڡ١ڡ١ڡ١ڡ١ڡٽ¸��� ����̡ڡ١ڡ١ڡ١ڡ١ڡ�', ' ', '2010-08-30', 2, '', '773359240eb9a1d9');
INSERT INTO `board` VALUES (30, 'community', 'board', '�ڡٽ¸��� ����̡ڡ�', '�ڡٽ¸��� ����̡ڡ�', ' ', '2010-08-30', 1, '', '5030573512345671');
INSERT INTO `board` VALUES (98, 'community', 'board', '�׽�Ʈ �Դϴ�. �׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.', '�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.', '�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.�׽�Ʈ �Դϴ�.', '2010-09-04', 9, '', '1794883b0c2a2fb3');
INSERT INTO `board` VALUES (32, 'community', 'board', '�ڡٽ¸��� ����̡ڡ�', '�ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�', '�ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�<br />\r\n--------------------------------------------<br />\r\n��������������������������������������������������������ȸ �Ի� ���ϸ� ������ ��¥..', '2010-08-30', 3, '', '378b243e220ca493');
INSERT INTO `board` VALUES (33, 'community', 'board', '�ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�', '�ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�', '��������������������������������������������������������ȸ �Ի� ���ϸ� ������ ��¥..', '2010-08-30', 2, '', '378b243e220ca493');
INSERT INTO `board` VALUES (34, 'community', 'board', '�ڡٽ¸��� ����̡ڡ�', '�ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�', '��������������������������������������������������������ȸ �Ի� ���ϸ� ������ ��¥..', '2010-08-30', 4, '', '378b243e220ca493');
INSERT INTO `board` VALUES (35, 'community', 'board', '�ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�', '���������������ڡٽ¸��� ����̡ڡ١ڡٽ¸��� ����̡ڡ�', '��������������������������������������������������������ȸ �Ի� ���ϸ� ������ ��¥..', '2010-08-30', 10, '', '378b243e220ca493');
INSERT INTO `board` VALUES (99, 'community', 'board', '��������������������������', '����������������������������������������������������������������', '��������������������������������������������������', '2010-09-04', 4, '', '032f4e0c1bcafab2');
INSERT INTO `board` VALUES (85, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 0, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (86, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 0, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (87, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 0, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (88, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 0, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (89, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 1, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (90, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 1, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (91, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 4, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (92, 'community', 'board', 'HACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-03', 8, '', '2611d5bd207fad47');
INSERT INTO `board` VALUES (93, 'community', 'board', 'dsada', 'dsadsdsadasdasdasdsadsadsadsadsasadsadsa', 'dsadsadas', '2010-09-04', 2, '', '446a12100c856ce9');
INSERT INTO `board` VALUES (94, 'community', 'board', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHAHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKCKHACKHACKHACKHACK', 'HACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACKHACK', '2010-09-04', 5, '', '7dbe22a123d2fbe6');
INSERT INTO `board` VALUES (95, 'community', 'board', 'ttttt', '���� �������� ��������� ����� ���� �������� ��������� �����', '���� �������� ��������� ����ƾ��� �������� ��������� ����ƾ��� �������� ��������� ����ƾ��� �������� ��������� ����ƾ��� �������� ��������� ����ƾ��� �������� ��������� �����', '2010-09-04', 13, '', '446a12100c856ce9');

# --------------------------------------------------------

#
# ���̺� ���� `main_menu`
#

CREATE TABLE `main_menu` (
  `no` int(11) NOT NULL auto_increment,
  `mid` varchar(100) NOT NULL default '',
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
INSERT INTO `main_menu` VALUES (3, 'sitelink', 'SITELINK', 3, '0');
INSERT INTO `main_menu` VALUES (4, 'skills', 'SKILLS', 4, '0');
INSERT INTO `main_menu` VALUES (5, 'community', 'COMMUNITY', 5, '0');

# --------------------------------------------------------

#
# ���̺� ���� `portfolio`
#

CREATE TABLE `portfolio` (
  `no` int(11) NOT NULL auto_increment,
  `mid` varchar(100) NOT NULL default '',
  `sid` varchar(100) NOT NULL default '',
  `title` varchar(200) NOT NULL default '',
  `img_title` varchar(200) NOT NULL default '',
  `url` varchar(200) NOT NULL default '',
  `description` text NOT NULL,
  `od` int(11) NOT NULL default '0',
  `img` varchar(255) NOT NULL default '',
  `hidden` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`no`)
) TYPE=MyISAM AUTO_INCREMENT=19 ;

#
# ���̺��� ���� ������ `portfolio`
#

INSERT INTO `portfolio` VALUES (1, 'portfolio', 'portfolio', 'WorldSkillsKorea', '', 'http://www.skillteacher.co.kr', '������ : �������� (100%)<br />\r\n���ۺ��� (100%)<br />\r\n��Ǳ׷��� (50%)<br />\r\n', 1, '<img src="../images/contents/portfolio/web_19.jpg" width="191" height="124" alt="��ٸ����" />', 'url');
INSERT INTO `portfolio` VALUES (2, 'portfolio', 'portfolio', '�ѱ���Ȱ��������', '', 'http://www.hankookr.com', '������ : �������� (100%)<br />\r\n���ۺ��� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n�����α׷� PHP,MYSQL (100%)', 2, '<img src="../images/contents/portfolio/web_2.jpg" width="191" height="124" alt="�ѱ���Ȱ��������" />', 'url');
INSERT INTO `portfolio` VALUES (3, 'portfolio', 'portfolio', '�ѱ��ڷ���', '', 'telecom1/', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n\r\n', 3, '<img src="../images/contents/portfolio/web_3.jpg" width="191" height="124" alt="�ѱ��ڷ��� (�þ�1)" />', 'local');
INSERT INTO `portfolio` VALUES (4, 'portfolio', 'portfolio', '�ѱ��ڷ���', '', 'telecom2', '������ : �������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n\r\n', 4, '<img src="../images/contents/portfolio/web_4.jpg" width="191" height="124" alt="�ѱ��ڷ��� (�þ�2)" />', 'local');
INSERT INTO `portfolio` VALUES (5, 'portfolio', 'portfolio', '���Ŀ� ���ǽ���', '', 'http://www.raphaeloffice.com/', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n�����α׷� PHP,MYSQL (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n', 5, '<img src="../images/contents/portfolio/web_5.jpg" width="191" height="124" alt="���Ŀ� ���ǽ���" />', 'url');
INSERT INTO `portfolio` VALUES (6, 'portfolio', 'portfolio', 'INTEC into English Instruction', '', 'intec', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n�����α׷� PHP (100%)<br />\r\n��Ǳ׷��� (100%)<br />', 6, '<img src="../images/contents/portfolio/web_6.jpg" width="191" height="124" alt="INTEC into English Instruction" />', 'local');
INSERT INTO `portfolio` VALUES (7, 'portfolio', 'portfolio', '������ ���� ���ָ����', '', 'motor', '������ : �������� (100%)<br />\r\n���ۺ��� (100%)<br />\r\n��Ǳ׷��� (100%)<br />', 7, '<img src="../images/contents/portfolio/web_7.jpg" width="191" height="124" alt="������ ���� ���ָ����" />', 'local');
INSERT INTO `portfolio` VALUES (8, 'portfolio', 'portfolio', '������ ���� ���ָ����', '', 'motor2', '������ : �������� (100%)<br />\r\n���ۺ��� (100%)<br />\r\n��Ǳ׷��� (100%)<br />', 8, '<img src="../images/contents/portfolio/web_8.jpg" width="191" height="124" alt="������ ���� ���ָ����2" />', 'local');
INSERT INTO `portfolio` VALUES (17, 'portfolio', 'portfolio', '�����ñ�', '', 'josun', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n\r\n', 17, '<img src="../images/contents/portfolio/web_17.jpg" width="191" height="124" alt="�����ñ�" />', 'local');
INSERT INTO `portfolio` VALUES (13, 'portfolio', 'portfolio', '���Ŀ� ���ǽ���', 'web_13_b', 'Design plan', '������ : �������� (100%)<br />\r\n', 13, '<img src="../images/contents/portfolio/web_13.jpg" width="191" height="124" alt="���Ŀ� ���ǽ���" />', 'design');
INSERT INTO `portfolio` VALUES (9, 'portfolio', 'portfolio', '�ѱ� �ڷ���', '', 'telecom3', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n\r\n', 9, '<img src="../images/contents/portfolio/web_9.jpg" width="191" height="124" alt="�ѱ� �ڷ��� (�þ�3)" />', 'local');
INSERT INTO `portfolio` VALUES (10, 'portfolio', 'portfolio', '�ѱ����', '', 'pension', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n', 10, '<img src="../images/contents/portfolio/web_10.jpg" width="191" height="124" alt="�ѱ����" />', 'local');
INSERT INTO `portfolio` VALUES (11, 'portfolio', 'portfolio', '�ѱ����', 'web_11_b', 'Design plan', '������ : �������� (100%)<br />\r\n', 11, '<img src="../images/contents/portfolio/web_11.jpg" width="191" height="124" alt="�ѱ����" />', 'design');
INSERT INTO `portfolio` VALUES (12, 'portfolio', 'portfolio', 'INTEC into English Instruction', '', 'http://www.intec.or.kr/', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n�����α׷� PHP,MYSQL (100%)\r\n\r\n', 12, '<img src="../images/contents/portfolio/web_12.jpg" width="191" height="124" alt="INTEC into English Instruction" />', 'url');
INSERT INTO `portfolio` VALUES (16, 'portfolio', 'portfolio', '���丶�Ͼ�', '', 'photomania', '������ : �������� (100%)<br />\r\n���ۺ��� (100%)<br />\r\n��Ǳ׷��� (100%)<br />', 16, '<img src="../images/contents/portfolio/web_16.jpg" width="191" height="124" alt="���丶�Ͼ�" />', 'local');
INSERT INTO `portfolio` VALUES (14, 'portfolio', 'portfolio', '�ξ� �Ͽ콺', 'web_14_b', 'Design plan', '������ : �������� (100%)<br />\r\n', 14, '<img src="../images/contents/portfolio/web_14.jpg" width="191" height="124" alt="�ξ� �Ͽ콺" />', 'design');
INSERT INTO `portfolio` VALUES (15, 'portfolio', 'portfolio', '�ѱ��ڷ���', '', 'telecom4', '������ : �������� (100%)<br />\r\n���ۺ��� (100%)<br />\r\n��Ǳ׷��� (100%)<br />', 15, '<img src="../images/contents/portfolio/web_15.jpg" width="191" height="124" alt="�ѱ��ڷ���" />', 'local');
INSERT INTO `portfolio` VALUES (18, 'portfolio', 'portfolio', '�����ñ�', '', 'josun2', '������ : ���ۺ��� (100%)<br />\r\n�������� (100%)<br />\r\n��Ǳ׷��� (100%)<br />\r\n', 18, '<img src="../images/contents/portfolio/web_18.jpg" width="191" height="124" alt="�����ñ�" />', 'local');

# --------------------------------------------------------

#
# ���̺� ���� `sub_menu`
#

CREATE TABLE `sub_menu` (
  `no` int(11) NOT NULL auto_increment,
  `mid` varchar(100) NOT NULL default '',
  `sid` varchar(100) NOT NULL default '',
  `sub_title` varchar(200) NOT NULL default '',
  `contents` text NOT NULL,
  `property` varchar(30) NOT NULL default '',
  `od` int(11) NOT NULL default '0',
  PRIMARY KEY  (`no`)
) TYPE=MyISAM AUTO_INCREMENT=9 ;

#
# ���̺��� ���� ������ `sub_menu`
#

INSERT INTO `sub_menu` VALUES (1, 'profile', 'about_me', 'ABOUT ME', '���� �Ұ��մϴ�.', 'about_me', 1);
INSERT INTO `sub_menu` VALUES (2, 'profile', 'my_way', 'MY WAY', '����Ʈ', 'my_way', 2);
INSERT INTO `sub_menu` VALUES (3, 'community', 'board', 'BOARD', '', 'board_list', 1);
INSERT INTO `sub_menu` VALUES (4, 'community', 'gallery', 'GALLERY', '', 'gallery_list', 2);
INSERT INTO `sub_menu` VALUES (6, 'portfolio', 'portfolio', 'PORTFOLIO', '', 'portfolio', 1);
INSERT INTO `sub_menu` VALUES (7, 'sitelink', 'sitelink', 'SITELINK', '', 'sitelink', 1);
INSERT INTO `sub_menu` VALUES (8, 'skills', 'skills', 'SKILLS', '', 'skills', 1);
