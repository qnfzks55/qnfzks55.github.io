# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# 硲什闘: localhost
# 坦軒廃 獣娃: 10-09-04 10:11 
# 辞獄 獄穿: 4.0.18
# PHP 獄穿: 4.3.6
# 
# 汽戚斗今戚什 : `portfolio`
# 

# --------------------------------------------------------

#
# 砺戚鷺 姥繕 `board`
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
# 砺戚鷺税 棋覗 汽戚斗 `board`
#

INSERT INTO `board` VALUES (21, 'community', 'board', '亜蟹陥虞原郊切紫焼切朝', '砺什闘 掻脊艦陥.', '砺什闘 掻脊艦陥.<br />\r\n砺什闘 掻脊艦陥.砺什闘 掻脊艦陥.<br />\r\n砺什闘 掻脊艦陥.<br />\r\n砺什闘 掻脊艦陥.<br />\r\n砺什闘 掻脊艦陥<br />\r\n<br />\r\n砺什闘 掻脊艦陥.<br />\r\n穿秦昔 匙亜', '2010-08-20', 5, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (20, 'community', 'board', '戚誤曽', '照括馬室推 砺什闘 掻脊艦陥.', '照括馬室推 砺什闘 掻脊艦陥.<br />\r\n照括馬室推 砺什闘 掻脊艦陥.<br />\r\n照括馬室推 砺什闘 掻脊艦陥.照括馬室推 砺什闘 掻脊艦陥.<br />\r\n<br />\r\n照括馬室推 砺什闘 掻脊艦陥.<br />\r\n照括馬室推 砺什闘 掻脊艦陥.<br />\r\n照括馬室推 砺什闘 掻脊艦陥.', '2010-08-20', 14, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (22, 'community', 'board', '戚誤曽', '薄仙 幡凪戚走 砺什闘 掻脊艦陥. 阻勺杯艦陥.', '薄仙 幡凪戚走 砺什闘 掻脊艦陥. 阻勺杯艦陥.<br />\r\n薄仙 幡凪戚走 砺什闘 掻脊艦陥. 阻勺杯艦陥.<br />\r\n<br />\r\n<br />\r\n薄仙 幡凪戚走 砺什闘 掻脊艦陥. 阻勺杯艦陥.<br />\r\n薄仙 幡凪戚走 砺什闘 掻脊艦陥. 阻勺杯艦陥.', '2010-08-20', 10, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (23, 'community', 'board', '戚誤曽', '幡凪戚走 砺什闘 掻脊艦陥.', '幡凪戚走 砺什闘 掻脊艦陥.<br />\r\n幡凪戚走 砺什闘 掻脊艦陥.<br />\r\n幡凪戚走 砺什闘 掻脊艦陥.<br />\r\n<br />\r\n幡凪戚走 砺什闘 掻脊艦陥.幡凪戚走 砺什闘 掻脊艦陥.<br />\r\n<br />\r\n幡凪戚走 砺什闘 掻脊艦陥.<br />\r\n幡凪戚走 砺什闘 掻脊艦陥.<br />\r\n幡凪戚走 砺什闘 掻脊艦陥.', '2010-08-20', 25, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (24, 'community', 'gallery', '淫軒切', '斡君軒 砺什闘', '斡君軒 砺什闘 掻脊艦陥.\r\n松降歯晦級焼', '2010-08-23', 0, '0', '0');
INSERT INTO `board` VALUES (25, 'community', 'board', '砺什闘', 'test', 'test', '2010-08-26', 12, '', '378b243e220ca493');
INSERT INTO `board` VALUES (26, 'community', 'board', '舌井旦', '獣降叶級', '鯵戚 磁叶焼', '2010-08-30', 4, '', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (27, 'community', 'board', '錘周戚', '誓据越', '走曽戚亜 誓据越聖 含焼含虞鎧食<br />\r\n曽娃蟹歯晦..<br />\r\n戚暗 瑛&#52291;革...<br />\r\n雇凶軒陥亜 艦 革宕企鉢左壱 格税<br />\r\n短聖 級嬢匝形壱<br />\r\n戚係惟尽陥<br />\r\n室稽稽 石嬢 --<br />\r\n<br />\r\n<br />\r\n---------------------<br />\r\nせせせせせせせせせせせせ焼 周戚<br />\r\n位蟹 左壱粛嬢..ぬぬ', '2010-08-30', 5, '', '378b243e220ca493');
INSERT INTO `board` VALUES (28, 'community', 'board', '錘周戚', '【』【』【』【』【』渋軒税 錘周戚【』【』【』【』【』', ' ', '2010-08-30', 2, '', '773359240eb9a1d9');
INSERT INTO `board` VALUES (30, 'community', 'board', '【』渋軒税 錘周戚【』', '【』渋軒税 錘周戚【』', ' ', '2010-08-30', 1, '', '5030573512345671');
INSERT INTO `board` VALUES (98, 'community', 'board', '砺什闘 脊艦陥. 砺什闘 脊艦陥.砺什闘 脊艦陥.', '砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.', '砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.砺什闘 脊艦陥.', '2010-09-04', 9, '', '1794883b0c2a2fb3');
INSERT INTO `board` VALUES (32, 'community', 'board', '【』渋軒税 錘周戚【』', '【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』', '【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』<br />\r\n--------------------------------------------<br />\r\n走偶せせせせせせせせせせせせせせせせせせせせせせせ穿厩企噺 脊雌 公馬檎 巨遭陥 遭促..', '2010-08-30', 3, '', '378b243e220ca493');
INSERT INTO `board` VALUES (33, 'community', 'board', '【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』', '【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』', '走偶せせせせせせせせせせせせせせせせせせせせせせせ穿厩企噺 脊雌 公馬檎 巨遭陥 遭促..', '2010-08-30', 2, '', '378b243e220ca493');
INSERT INTO `board` VALUES (34, 'community', 'board', '【』渋軒税 錘周戚【』', '【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』', '走偶せせせせせせせせせせせせせせせせせせせせせせせ穿厩企噺 脊雌 公馬檎 巨遭陥 遭促..', '2010-08-30', 4, '', '378b243e220ca493');
INSERT INTO `board` VALUES (35, 'community', 'board', '【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』', 'せせせせせせせ【』渋軒税 錘周戚【』【』渋軒税 錘周戚【』', '走偶せせせせせせせせせせせせせせせせせせせせせせせ穿厩企噺 脊雌 公馬檎 巨遭陥 遭促..', '2010-08-30', 10, '', '378b243e220ca493');
INSERT INTO `board` VALUES (99, 'community', 'board', 'けけけけけけけけけけけけけ', 'けけけけけけけけけけけけけけけけけけけけけけけけけけけけけけけけ', 'けけけけけけけけけけけけけけけけけけけけけけけけけ', '2010-09-04', 4, '', '032f4e0c1bcafab2');
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
INSERT INTO `board` VALUES (95, 'community', 'board', 'ttttt', '松降 歯晦級戚 鯵歯晦級焼 ご級焼 松降 歯晦級戚 鯵歯晦級焼 ご級焼', '松降 歯晦級戚 鯵歯晦級焼 ご級焼松降 歯晦級戚 鯵歯晦級焼 ご級焼松降 歯晦級戚 鯵歯晦級焼 ご級焼松降 歯晦級戚 鯵歯晦級焼 ご級焼松降 歯晦級戚 鯵歯晦級焼 ご級焼松降 歯晦級戚 鯵歯晦級焼 ご級焼', '2010-09-04', 13, '', '446a12100c856ce9');

# --------------------------------------------------------

#
# 砺戚鷺 姥繕 `main_menu`
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
# 砺戚鷺税 棋覗 汽戚斗 `main_menu`
#

INSERT INTO `main_menu` VALUES (1, 'profile', 'PROFILE', 1, '0');
INSERT INTO `main_menu` VALUES (2, 'portfolio', 'PORTFOLIO', 2, '0');
INSERT INTO `main_menu` VALUES (3, 'sitelink', 'SITELINK', 3, '0');
INSERT INTO `main_menu` VALUES (4, 'skills', 'SKILLS', 4, '0');
INSERT INTO `main_menu` VALUES (5, 'community', 'COMMUNITY', 5, '0');

# --------------------------------------------------------

#
# 砺戚鷺 姥繕 `portfolio`
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
# 砺戚鷺税 棋覗 汽戚斗 `portfolio`
#

INSERT INTO `portfolio` VALUES (1, 'portfolio', 'portfolio', 'WorldSkillsKorea', '', 'http://www.skillteacher.co.kr', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n瀬遁鷺軒縮 (100%)<br />\r\n乞芝益掘波 (50%)<br />\r\n', 1, '<img src="../images/contents/portfolio/web_19.jpg" width="191" height="124" alt="壕陥軒謎芝" />', 'url');
INSERT INTO `portfolio` VALUES (2, 'portfolio', 'portfolio', '廃厩仙醗遂至穣鯵降', '', 'http://www.hankookr.com', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n瀬遁鷺軒縮 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n瀬覗稽益轡 PHP,MYSQL (100%)', 2, '<img src="../images/contents/portfolio/web_2.jpg" width="191" height="124" alt="廃厩仙醗遂至穣鯵降" />', 'url');
INSERT INTO `portfolio` VALUES (3, 'portfolio', 'portfolio', '廃厩土傾爪', '', 'telecom1/', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n\r\n', 3, '<img src="../images/contents/portfolio/web_3.jpg" width="191" height="124" alt="廃厩土傾爪 (獣照1)" />', 'local');
INSERT INTO `portfolio` VALUES (4, 'portfolio', 'portfolio', '廃厩土傾爪', '', 'telecom2', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n\r\n', 4, '<img src="../images/contents/portfolio/web_4.jpg" width="191" height="124" alt="廃厩土傾爪 (獣照2)" />', 'local');
INSERT INTO `portfolio` VALUES (5, 'portfolio', 'portfolio', '虞督燭 神杷什土', '', 'http://www.raphaeloffice.com/', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n瀬覗稽益轡 PHP,MYSQL (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n', 5, '<img src="../images/contents/portfolio/web_5.jpg" width="191" height="124" alt="虞督燭 神杷什土" />', 'url');
INSERT INTO `portfolio` VALUES (6, 'portfolio', 'portfolio', 'INTEC into English Instruction', '', 'intec', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n瀬覗稽益轡 PHP (100%)<br />\r\n乞芝益掘波 (100%)<br />', 6, '<img src="../images/contents/portfolio/web_6.jpg" width="191" height="124" alt="INTEC into English Instruction" />', 'local');
INSERT INTO `portfolio` VALUES (7, 'portfolio', 'portfolio', '瀬生稽 壕酔澗 亜車鍵奄淫', '', 'motor', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n瀬遁鷺軒縮 (100%)<br />\r\n乞芝益掘波 (100%)<br />', 7, '<img src="../images/contents/portfolio/web_7.jpg" width="191" height="124" alt="瀬生稽 壕酔澗 亜車鍵奄淫" />', 'local');
INSERT INTO `portfolio` VALUES (8, 'portfolio', 'portfolio', '瀬生稽 壕酔澗 亜車鍵奄淫', '', 'motor2', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n瀬遁鷺軒縮 (100%)<br />\r\n乞芝益掘波 (100%)<br />', 8, '<img src="../images/contents/portfolio/web_8.jpg" width="191" height="124" alt="瀬生稽 壕酔澗 亜車鍵奄淫2" />', 'local');
INSERT INTO `portfolio` VALUES (17, 'portfolio', 'portfolio', '繕識叡曳', '', 'josun', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n\r\n', 17, '<img src="../images/contents/portfolio/web_17.jpg" width="191" height="124" alt="繕識叡曳" />', 'local');
INSERT INTO `portfolio` VALUES (13, 'portfolio', 'portfolio', '虞督燭 神杷什土', 'web_13_b', 'Design plan', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n', 13, '<img src="../images/contents/portfolio/web_13.jpg" width="191" height="124" alt="虞督燭 神杷什土" />', 'design');
INSERT INTO `portfolio` VALUES (9, 'portfolio', 'portfolio', '廃厩 土傾爪', '', 'telecom3', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n\r\n', 9, '<img src="../images/contents/portfolio/web_9.jpg" width="191" height="124" alt="廃厩 土傾爪 (獣照3)" />', 'local');
INSERT INTO `portfolio` VALUES (10, 'portfolio', 'portfolio', '廃厩謎芝', '', 'pension', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n', 10, '<img src="../images/contents/portfolio/web_10.jpg" width="191" height="124" alt="廃厩謎芝" />', 'local');
INSERT INTO `portfolio` VALUES (11, 'portfolio', 'portfolio', '廃厩謎芝', 'web_11_b', 'Design plan', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n', 11, '<img src="../images/contents/portfolio/web_11.jpg" width="191" height="124" alt="廃厩謎芝" />', 'design');
INSERT INTO `portfolio` VALUES (12, 'portfolio', 'portfolio', 'INTEC into English Instruction', '', 'http://www.intec.or.kr/', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n瀬覗稽益轡 PHP,MYSQL (100%)\r\n\r\n', 12, '<img src="../images/contents/portfolio/web_12.jpg" width="191" height="124" alt="INTEC into English Instruction" />', 'url');
INSERT INTO `portfolio` VALUES (16, 'portfolio', 'portfolio', '匂塘原艦焼', '', 'photomania', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n瀬遁鷺軒縮 (100%)<br />\r\n乞芝益掘波 (100%)<br />', 16, '<img src="../images/contents/portfolio/web_16.jpg" width="191" height="124" alt="匂塘原艦焼" />', 'local');
INSERT INTO `portfolio` VALUES (14, 'portfolio', 'portfolio', '稽鐘 馬酔什', 'web_14_b', 'Design plan', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n', 14, '<img src="../images/contents/portfolio/web_14.jpg" width="191" height="124" alt="稽鐘 馬酔什" />', 'design');
INSERT INTO `portfolio` VALUES (15, 'portfolio', 'portfolio', '廃厩土傾爪', '', 'telecom4', '凧食亀 : 瀬巨切昔 (100%)<br />\r\n瀬遁鷺軒縮 (100%)<br />\r\n乞芝益掘波 (100%)<br />', 15, '<img src="../images/contents/portfolio/web_15.jpg" width="191" height="124" alt="廃厩土傾爪" />', 'local');
INSERT INTO `portfolio` VALUES (18, 'portfolio', 'portfolio', '繕識叡曳', '', 'josun2', '凧食亀 : 瀬遁鷺軒縮 (100%)<br />\r\n瀬巨切昔 (100%)<br />\r\n乞芝益掘波 (100%)<br />\r\n', 18, '<img src="../images/contents/portfolio/web_18.jpg" width="191" height="124" alt="繕識叡曳" />', 'local');

# --------------------------------------------------------

#
# 砺戚鷺 姥繕 `sub_menu`
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
# 砺戚鷺税 棋覗 汽戚斗 `sub_menu`
#

INSERT INTO `sub_menu` VALUES (1, 'profile', 'about_me', 'ABOUT ME', '蟹研 社鯵杯艦陥.', 'about_me', 1);
INSERT INTO `sub_menu` VALUES (2, 'profile', 'my_way', 'MY WAY', '珍澱闘', 'my_way', 2);
INSERT INTO `sub_menu` VALUES (3, 'community', 'board', 'BOARD', '', 'board_list', 1);
INSERT INTO `sub_menu` VALUES (4, 'community', 'gallery', 'GALLERY', '', 'gallery_list', 2);
INSERT INTO `sub_menu` VALUES (6, 'portfolio', 'portfolio', 'PORTFOLIO', '', 'portfolio', 1);
INSERT INTO `sub_menu` VALUES (7, 'sitelink', 'sitelink', 'SITELINK', '', 'sitelink', 1);
INSERT INTO `sub_menu` VALUES (8, 'skills', 'skills', 'SKILLS', '', 'skills', 1);
