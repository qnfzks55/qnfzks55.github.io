# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# 호스트: localhost
# 처리한 시간: 10-09-04 10:11 
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
# 테이블의 덤프 데이터 `board`
#

INSERT INTO `board` VALUES (21, 'community', 'board', '가나다라마바자사아자카', '테스트 중입니다.', '테스트 중입니다.<br />\r\n테스트 중입니다.테스트 중입니다.<br />\r\n테스트 중입니다.<br />\r\n테스트 중입니다.<br />\r\n테스트 중입니다<br />\r\n<br />\r\n테스트 중입니다.<br />\r\n전옥인 빠가', '2010-08-20', 5, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (20, 'community', 'board', '이명종', '안녕하세요 테스트 중입니다.', '안녕하세요 테스트 중입니다.<br />\r\n안녕하세요 테스트 중입니다.<br />\r\n안녕하세요 테스트 중입니다.안녕하세요 테스트 중입니다.<br />\r\n<br />\r\n안녕하세요 테스트 중입니다.<br />\r\n안녕하세요 테스트 중입니다.<br />\r\n안녕하세요 테스트 중입니다.', '2010-08-20', 14, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (22, 'community', 'board', '이명종', '현재 홈페이지 테스트 중입니다. 죄송합니다.', '현재 홈페이지 테스트 중입니다. 죄송합니다.<br />\r\n현재 홈페이지 테스트 중입니다. 죄송합니다.<br />\r\n<br />\r\n<br />\r\n현재 홈페이지 테스트 중입니다. 죄송합니다.<br />\r\n현재 홈페이지 테스트 중입니다. 죄송합니다.', '2010-08-20', 10, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (23, 'community', 'board', '이명종', '홈페이지 테스트 중입니다.', '홈페이지 테스트 중입니다.<br />\r\n홈페이지 테스트 중입니다.<br />\r\n홈페이지 테스트 중입니다.<br />\r\n<br />\r\n홈페이지 테스트 중입니다.홈페이지 테스트 중입니다.<br />\r\n<br />\r\n홈페이지 테스트 중입니다.<br />\r\n홈페이지 테스트 중입니다.<br />\r\n홈페이지 테스트 중입니다.', '2010-08-20', 25, '0', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (24, 'community', 'gallery', '관리자', '갤러리 테스트', '갤러리 테스트 중입니다.\r\n씨발새끼들아', '2010-08-23', 0, '0', '0');
INSERT INTO `board` VALUES (25, 'community', 'board', '테스트', 'test', 'test', '2010-08-26', 12, '', '378b243e220ca493');
INSERT INTO `board` VALUES (26, 'community', 'board', '장경철', '시발놈들', '개이 샹놈아', '2010-08-30', 4, '', '7da823ed4fac6ae5');
INSERT INTO `board` VALUES (27, 'community', 'board', '운숭이', '응원글', '지종이가 응원글을 달아달라내여<br />\r\n종간나새끼..<br />\r\n이거 귀&#52291;네...<br />\r\n멍때리다가 니 네톤대화보고 너의<br />\r\n청을 들어줄려고<br />\r\n이렇게왔다<br />\r\n세로로 읽어 --<br />\r\n<br />\r\n<br />\r\n---------------------<br />\r\nㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ아 숭이<br />\r\n겁나 보고싶어..ㅜㅜ', '2010-08-30', 5, '', '378b243e220ca493');
INSERT INTO `board` VALUES (28, 'community', 'board', '운숭이', '★☆★☆★☆★☆★☆승리의 운숭이★☆★☆★☆★☆★☆', ' ', '2010-08-30', 2, '', '773359240eb9a1d9');
INSERT INTO `board` VALUES (30, 'community', 'board', '★☆승리의 운숭이★☆', '★☆승리의 운숭이★☆', ' ', '2010-08-30', 1, '', '5030573512345671');
INSERT INTO `board` VALUES (98, 'community', 'board', '테스트 입니다. 테스트 입니다.테스트 입니다.', '테스트 입니다.테스트 입니다.테스트 입니다.', '테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.테스트 입니다.', '2010-09-04', 9, '', '1794883b0c2a2fb3');
INSERT INTO `board` VALUES (32, 'community', 'board', '★☆승리의 운숭이★☆', '★☆승리의 운숭이★☆★☆승리의 운숭이★☆', '★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆<br />\r\n--------------------------------------------<br />\r\n지랄ㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ전국대회 입상 못하면 디진다 진짜..', '2010-08-30', 3, '', '378b243e220ca493');
INSERT INTO `board` VALUES (33, 'community', 'board', '★☆승리의 운숭이★☆★☆승리의 운숭이★☆', '★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆', '지랄ㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ전국대회 입상 못하면 디진다 진짜..', '2010-08-30', 2, '', '378b243e220ca493');
INSERT INTO `board` VALUES (34, 'community', 'board', '★☆승리의 운숭이★☆', '★☆승리의 운숭이★☆★☆승리의 운숭이★☆★☆승리의 운숭이★☆', '지랄ㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ전국대회 입상 못하면 디진다 진짜..', '2010-08-30', 4, '', '378b243e220ca493');
INSERT INTO `board` VALUES (35, 'community', 'board', '★☆승리의 운숭이★☆★☆승리의 운숭이★☆', 'ㅋㅋㅋㅋㅋㅋㅋ★☆승리의 운숭이★☆★☆승리의 운숭이★☆', '지랄ㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ전국대회 입상 못하면 디진다 진짜..', '2010-08-30', 10, '', '378b243e220ca493');
INSERT INTO `board` VALUES (99, 'community', 'board', 'ㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁ', 'ㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁ', 'ㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁ', '2010-09-04', 4, '', '032f4e0c1bcafab2');
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
INSERT INTO `board` VALUES (95, 'community', 'board', 'ttttt', '씨발 새끼들이 개새끼들아 ㅄ들아 씨발 새끼들이 개새끼들아 ㅄ들아', '씨발 새끼들이 개새끼들아 ㅄ들아씨발 새끼들이 개새끼들아 ㅄ들아씨발 새끼들이 개새끼들아 ㅄ들아씨발 새끼들이 개새끼들아 ㅄ들아씨발 새끼들이 개새끼들아 ㅄ들아씨발 새끼들이 개새끼들아 ㅄ들아', '2010-09-04', 13, '', '446a12100c856ce9');

# --------------------------------------------------------

#
# 테이블 구조 `main_menu`
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
# 테이블의 덤프 데이터 `main_menu`
#

INSERT INTO `main_menu` VALUES (1, 'profile', 'PROFILE', 1, '0');
INSERT INTO `main_menu` VALUES (2, 'portfolio', 'PORTFOLIO', 2, '0');
INSERT INTO `main_menu` VALUES (3, 'sitelink', 'SITELINK', 3, '0');
INSERT INTO `main_menu` VALUES (4, 'skills', 'SKILLS', 4, '0');
INSERT INTO `main_menu` VALUES (5, 'community', 'COMMUNITY', 5, '0');

# --------------------------------------------------------

#
# 테이블 구조 `portfolio`
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
# 테이블의 덤프 데이터 `portfolio`
#

INSERT INTO `portfolio` VALUES (1, 'portfolio', 'portfolio', 'WorldSkillsKorea', '', 'http://www.skillteacher.co.kr', '참여도 : 웹디자인 (100%)<br />\r\n웹퍼블리싱 (100%)<br />\r\n모션그래픽 (50%)<br />\r\n', 1, '<img src="../images/contents/portfolio/web_19.jpg" width="191" height="124" alt="배다리펜션" />', 'url');
INSERT INTO `portfolio` VALUES (2, 'portfolio', 'portfolio', '한국재활용산업개발', '', 'http://www.hankookr.com', '참여도 : 웹디자인 (100%)<br />\r\n웹퍼블리싱 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n웹프로그램 PHP,MYSQL (100%)', 2, '<img src="../images/contents/portfolio/web_2.jpg" width="191" height="124" alt="한국재활용산업개발" />', 'url');
INSERT INTO `portfolio` VALUES (3, 'portfolio', 'portfolio', '한국텔레콤', '', 'telecom1/', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n\r\n', 3, '<img src="../images/contents/portfolio/web_3.jpg" width="191" height="124" alt="한국텔레콤 (시안1)" />', 'local');
INSERT INTO `portfolio` VALUES (4, 'portfolio', 'portfolio', '한국텔레콤', '', 'telecom2', '참여도 : 웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n\r\n', 4, '<img src="../images/contents/portfolio/web_4.jpg" width="191" height="124" alt="한국텔레콤 (시안2)" />', 'local');
INSERT INTO `portfolio` VALUES (5, 'portfolio', 'portfolio', '라파엘 오피스텔', '', 'http://www.raphaeloffice.com/', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n웹프로그램 PHP,MYSQL (100%)<br />\r\n모션그래픽 (100%)<br />\r\n', 5, '<img src="../images/contents/portfolio/web_5.jpg" width="191" height="124" alt="라파엘 오피스텔" />', 'url');
INSERT INTO `portfolio` VALUES (6, 'portfolio', 'portfolio', 'INTEC into English Instruction', '', 'intec', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n웹프로그램 PHP (100%)<br />\r\n모션그래픽 (100%)<br />', 6, '<img src="../images/contents/portfolio/web_6.jpg" width="191" height="124" alt="INTEC into English Instruction" />', 'local');
INSERT INTO `portfolio` VALUES (7, 'portfolio', 'portfolio', '웹으로 배우는 가솔린기관', '', 'motor', '참여도 : 웹디자인 (100%)<br />\r\n웹퍼블리싱 (100%)<br />\r\n모션그래픽 (100%)<br />', 7, '<img src="../images/contents/portfolio/web_7.jpg" width="191" height="124" alt="웹으로 배우는 가솔린기관" />', 'local');
INSERT INTO `portfolio` VALUES (8, 'portfolio', 'portfolio', '웹으로 배우는 가솔린기관', '', 'motor2', '참여도 : 웹디자인 (100%)<br />\r\n웹퍼블리싱 (100%)<br />\r\n모션그래픽 (100%)<br />', 8, '<img src="../images/contents/portfolio/web_8.jpg" width="191" height="124" alt="웹으로 배우는 가솔린기관2" />', 'local');
INSERT INTO `portfolio` VALUES (17, 'portfolio', 'portfolio', '조선궁궐', '', 'josun', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n\r\n', 17, '<img src="../images/contents/portfolio/web_17.jpg" width="191" height="124" alt="조선궁궐" />', 'local');
INSERT INTO `portfolio` VALUES (13, 'portfolio', 'portfolio', '라파엘 오피스텔', 'web_13_b', 'Design plan', '참여도 : 웹디자인 (100%)<br />\r\n', 13, '<img src="../images/contents/portfolio/web_13.jpg" width="191" height="124" alt="라파엘 오피스텔" />', 'design');
INSERT INTO `portfolio` VALUES (9, 'portfolio', 'portfolio', '한국 텔레콤', '', 'telecom3', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n\r\n', 9, '<img src="../images/contents/portfolio/web_9.jpg" width="191" height="124" alt="한국 텔레콤 (시안3)" />', 'local');
INSERT INTO `portfolio` VALUES (10, 'portfolio', 'portfolio', '한국펜션', '', 'pension', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n', 10, '<img src="../images/contents/portfolio/web_10.jpg" width="191" height="124" alt="한국펜션" />', 'local');
INSERT INTO `portfolio` VALUES (11, 'portfolio', 'portfolio', '한국펜션', 'web_11_b', 'Design plan', '참여도 : 웹디자인 (100%)<br />\r\n', 11, '<img src="../images/contents/portfolio/web_11.jpg" width="191" height="124" alt="한국펜션" />', 'design');
INSERT INTO `portfolio` VALUES (12, 'portfolio', 'portfolio', 'INTEC into English Instruction', '', 'http://www.intec.or.kr/', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n웹프로그램 PHP,MYSQL (100%)\r\n\r\n', 12, '<img src="../images/contents/portfolio/web_12.jpg" width="191" height="124" alt="INTEC into English Instruction" />', 'url');
INSERT INTO `portfolio` VALUES (16, 'portfolio', 'portfolio', '포토마니아', '', 'photomania', '참여도 : 웹디자인 (100%)<br />\r\n웹퍼블리싱 (100%)<br />\r\n모션그래픽 (100%)<br />', 16, '<img src="../images/contents/portfolio/web_16.jpg" width="191" height="124" alt="포토마니아" />', 'local');
INSERT INTO `portfolio` VALUES (14, 'portfolio', 'portfolio', '로얄 하우스', 'web_14_b', 'Design plan', '참여도 : 웹디자인 (100%)<br />\r\n', 14, '<img src="../images/contents/portfolio/web_14.jpg" width="191" height="124" alt="로얄 하우스" />', 'design');
INSERT INTO `portfolio` VALUES (15, 'portfolio', 'portfolio', '한국텔레콤', '', 'telecom4', '참여도 : 웹디자인 (100%)<br />\r\n웹퍼블리싱 (100%)<br />\r\n모션그래픽 (100%)<br />', 15, '<img src="../images/contents/portfolio/web_15.jpg" width="191" height="124" alt="한국텔레콤" />', 'local');
INSERT INTO `portfolio` VALUES (18, 'portfolio', 'portfolio', '조선궁궐', '', 'josun2', '참여도 : 웹퍼블리싱 (100%)<br />\r\n웹디자인 (100%)<br />\r\n모션그래픽 (100%)<br />\r\n', 18, '<img src="../images/contents/portfolio/web_18.jpg" width="191" height="124" alt="조선궁궐" />', 'local');

# --------------------------------------------------------

#
# 테이블 구조 `sub_menu`
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
# 테이블의 덤프 데이터 `sub_menu`
#

INSERT INTO `sub_menu` VALUES (1, 'profile', 'about_me', 'ABOUT ME', '나를 소개합니다.', 'about_me', 1);
INSERT INTO `sub_menu` VALUES (2, 'profile', 'my_way', 'MY WAY', '컨택트', 'my_way', 2);
INSERT INTO `sub_menu` VALUES (3, 'community', 'board', 'BOARD', '', 'board_list', 1);
INSERT INTO `sub_menu` VALUES (4, 'community', 'gallery', 'GALLERY', '', 'gallery_list', 2);
INSERT INTO `sub_menu` VALUES (6, 'portfolio', 'portfolio', 'PORTFOLIO', '', 'portfolio', 1);
INSERT INTO `sub_menu` VALUES (7, 'sitelink', 'sitelink', 'SITELINK', '', 'sitelink', 1);
INSERT INTO `sub_menu` VALUES (8, 'skills', 'skills', 'SKILLS', '', 'skills', 1);
