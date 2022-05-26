-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `itsupport`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `borroworreturn`
-- 

CREATE TABLE `borroworreturn` (
  `requestnumbr` int(5) unsigned zerofill NOT NULL auto_increment,
  `ID` int(5) unsigned zerofill NOT NULL,
  `requesterbr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `requesteridbr` int(10) NOT NULL,
  `positionbr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `workbr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `partworkbr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `officebr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `telinbr` int(11) NOT NULL,
  `requestdatebr` date NOT NULL,
  `requestcasebr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `codeitembr` text collate utf8_unicode_ci NOT NULL,
  `requestnotebr` text collate utf8_unicode_ci NOT NULL,
  `borrowdate` date NOT NULL,
  `borrownote` text collate utf8_unicode_ci NOT NULL,
  `requeststatusbr` varchar(200) collate utf8_unicode_ci NOT NULL,
  `supporterbr` varchar(100) collate utf8_unicode_ci NOT NULL,
  `supporterre` varchar(100) collate utf8_unicode_ci NOT NULL,
  `returndate` date NOT NULL,
  `returnnote` text collate utf8_unicode_ci NOT NULL,
  `b_borr_date` date NOT NULL,
  `b_borr_note` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b_borr_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b_borr_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_borr_date` date NOT NULL,
  `b1_borr_note` text collate utf8_unicode_ci NOT NULL,
  `b1_borr_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_borr_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_borr_date` date NOT NULL,
  `bit_borr_note` text collate utf8_unicode_ci NOT NULL,
  `bit_borr_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_borr_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_borr_date` date NOT NULL,
  `bit1_borr_note` text collate utf8_unicode_ci NOT NULL,
  `bit1_borr_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_borr_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`requestnumbr`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

-- 
-- dump ตาราง `borroworreturn`
-- 

INSERT INTO `borroworreturn` VALUES (00002, 00000, 'กุมภา เสาร์', 15322, 'เจ้าหน้าที่วิเคราะห์ 4', 'ตรวจจ่าย', 'สงงป.', 'งบประมาณ', 19946, '2020-01-03', 'คีย์บอร์ด', '', 'ตรวจจ่าย สงงป. ของ งบประมาณ จำนวน 1 ตัว', '0000-00-00', '', '2', '', '', '0000-00-00', '', '2021-02-23', 'หมายเหตุคำขอ :	', '3', 'หน.ส่วนงาน M:	', '2021-03-02', '123456', '1', 'ชนะชัย มะอุอะ', '2021-04-01', '***', '3', 'bossit', '2021-03-09', 'hidden ', '3', 'bossit1');
INSERT INTO `borroworreturn` VALUES (00029, 00041, 'peecha Lala', 11255, 'เอไอ', 'บีบ', 'กาแฟ', 'อมยิ้ม', 15322, '2021-04-05', 'เครื่องคอมพิวเตอร์', '15555555', '1582', '0000-00-00', '', '1', '', '', '0000-00-00', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `borroworreturn` VALUES (00003, 00000, 'a', 1150, 'บัญชี', 'ตรวจจ่าย', 'พัสดุ', 'กฎหมาย', 18495, '2020-01-04', 'printer', '', 's', '0000-00-00', '', '3', '', '', '0000-00-00', '', '2021-02-24', 'ka', '3', 'Boss4', '2021-04-01', 'asd', '3', 'asd', '2021-04-01', 'asd', '3', 'asd', '2021-04-01', 'asd', '3', 'asd');
INSERT INTO `borroworreturn` VALUES (00005, 00000, 'Thawatchai Sornchun', 15322, '11111', 'it', 'it', 'it', 1555, '2020-02-01', 'คีย์บอร์ด', '', 'it', '0000-00-00', '', '2', '', '', '0000-00-00', '', '2020-02-10', 'คีย์บอร์ด', '3', 'boss', '2021-04-01', 'asd', '3', 'asd', '2021-04-01', 'asd', '3', 'asd', '2021-04-01', 'asd', '3', 'asd');
INSERT INTO `borroworreturn` VALUES (00006, 00000, 'Thawatchai Sornchun', 0, 'asd', 'asd', 'asd', 'asd', 0, '2020-02-01', 'เมาส์', '', 'asd', '0000-00-00', '', '3', '', '', '0000-00-00', '', '2021-03-10', 'หมายเหตุคำขอ :	', '3', 'ลงชื่อ หน.ส่วนงาน M', '2021-04-01', 'asd', '3', 'asd', '2021-04-01', 'asd', '3', 'asd', '2021-04-01', 'asd', '3', 'asd');
INSERT INTO `borroworreturn` VALUES (00007, 00000, 'Kookkik Sudchumphae', 11541, 'พนักงานบัญชี', 'บัญชีงบประมาณ', 'งบประมาณ', 'งบประมาณ', 1248, '2020-02-07', 'เครื่องคอมพิวเตอร์', '', 'BlueScreen จอสีฟ้า', '2021-02-22', 'bbb', '2', '222', 'aaa', '2021-02-22', '333333', '2021-02-22', 'aaa', '3', '111', '0000-00-00', '', '2', '', '0000-00-00', '', '2', '', '2021-04-01', 'asd', '3', 'asd');
INSERT INTO `borroworreturn` VALUES (00008, 00000, 'Kookkik Sudchumphae', 11541, 'พนักงานบัญชี', 'บัญชีงบประมาณ', 'งบประมาณ', 'งบประมาณ', 1248, '2020-02-07', 'เครื่องคอมพิวเตอร์', '', 'บัญชี', '2020-02-07', '', '2', 'c', '', '0000-00-00', '', '2021-03-10', 'หมายเหตุคำขอ :	', '3', 'ลงชื่อ หน.ส่วนงาน M', '0000-00-00', '', '3', '', '0000-00-00', '', '3', '', '2021-04-01', 'asd', '3', 'asd');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `devsystem`
-- 

CREATE TABLE `devsystem` (
  `devsys_num` int(4) unsigned zerofill NOT NULL auto_increment,
  `ID` int(5) unsigned zerofill NOT NULL,
  `fname_devsys` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `id_devsys` int(10) NOT NULL,
  `posit_devsys` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `pwork_devsys` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `offi_devsys` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `tel_devsys` int(11) NOT NULL,
  `name_devsys` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `lis_devsys` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `note_devsys` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `devsysdate` date NOT NULL,
  `servicedevdate` date NOT NULL,
  `servicedevnote` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `devsys_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `servicedevname` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b_dev_date` date NOT NULL,
  `b_dev_note` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `b_dev_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b_dev_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b1_dev_date` date NOT NULL,
  `b1_dev_note` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `b1_dev_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b1_dev_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit_dev_date` date NOT NULL,
  `bit_dev_note` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit_dev_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit_dev_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit1_dev_date` date NOT NULL,
  `bit1_dev_note` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit1_dev_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit1_dev_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`devsys_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- dump ตาราง `devsystem`
-- 

INSERT INTO `devsystem` VALUES (0006, 00000, 'นาย โอมาน ฮาซันนี่', 18744, 'PR', 'PR CR', 'PWO', 4415, 'บัญชีแยกประเภท', 'ปรับปรุง/จัดทำระบบงาน', 'เรียกรายงานไม่ได้', '2021-03-11', '0000-00-00', '', '1', '', '2021-04-02', 'boss4***', '3', 'boss4', '2021-04-05', 'ok pass ', '3', 'boss5', '2021-04-05', 'ok pass', '3', 'bossit6', '0000-00-00', '', '1', '');
INSERT INTO `devsystem` VALUES (0007, 00000, 'jjj', 0, 'jjj', 'jjj', 'jjj', 0, 'jjj', 'อื่นๆ', 'jjj', '2021-03-11', '0000-00-00', '', '1', '', '2021-04-02', 'pass', '3', 'boss4', '2021-04-05', 'ok ', '1', 'boss5', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `devsystem` VALUES (0012, 00041, 'peecha Lala', 1111, 'ลูกจ้าง', 'พัฒนา', 'ไอที', 5184, 'asdf', 'ปรับปรุง/จัดทำระบบงาน', 'เรียกรายงานไม่ขึ้น', '2021-03-26', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '', '', '2021-04-01', 'pass', '3', 'bossit7');
INSERT INTO `devsystem` VALUES (0010, 00041, 'Chatna Lala', 11221150, 'AABB', 'AABB', 'BBCC', 11221150, 'AACC', 'อื่นๆ', 'any thing', '2021-03-23', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `devsystem` VALUES (0011, 00041, 'Chatna Lala', 1150, 'AA', 'BB', 'CC', 1122, 'ACC', 'ปรับปรุง/จัดทำระบบงาน', 'GL', '2021-03-23', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `regdelsystem`
-- 

CREATE TABLE `regdelsystem` (
  `system_num` int(4) unsigned zerofill NOT NULL auto_increment,
  `ID` int(5) unsigned zerofill NOT NULL,
  `fname_sys` varchar(100) NOT NULL,
  `id_sys` int(10) NOT NULL,
  `posit_sys` varchar(50) NOT NULL,
  `pwork_sys` varchar(50) NOT NULL,
  `offi_sys` varchar(50) NOT NULL,
  `tel_sys` text NOT NULL,
  `reg_del_sys` varchar(50) NOT NULL,
  `name_sys` text NOT NULL,
  `note_sys` text NOT NULL,
  `systemdate` date NOT NULL,
  `servicesysdate` date NOT NULL,
  `servicesysnote` text NOT NULL,
  `system_status` varchar(100) NOT NULL,
  `servicesysname` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b_sys_date` date NOT NULL,
  `b_sys_note` text NOT NULL,
  `b_sys_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b_sys_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b1_sys_date` date NOT NULL,
  `b1_sys_note` text NOT NULL,
  `b1_sys_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `b1_sys_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit_sys_date` date NOT NULL,
  `bit_sys_note` text NOT NULL,
  `bit_sys_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit_sys_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit1_sys_date` date NOT NULL,
  `bit1_sys_note` text NOT NULL,
  `bit1_sys_status` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bit1_sys_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`system_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- dump ตาราง `regdelsystem`
-- 

INSERT INTO `regdelsystem` VALUES (0001, 00000, 'aaa', 0, 'aaa', 'aaa', 'aaa', 'aaa', 'ขอใช้งาน', 'aaa', 'aaa', '2021-03-05', '0000-00-00', '', '2', '', '2021-03-10', '**', '3', 'หน.ส่วนงาน ', '2021-03-09', 'ok na ', '2', 'boss', '2021-03-12', '**', '3', 'bossit', '2021-04-01', 'aaa', '3', 'aaa');
INSERT INTO `regdelsystem` VALUES (0004, 00000, 'uuu', 0, 'uuuu', 'uuuu', 'uuuu', 'uuuu', 'ขอยกเลิกใช้งาน', 'uuuu', 'uuuu', '2021-03-05', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0005, 00000, 'rrr', 0, 'rrr', 'rrr', 'rrr', 'rrr', 'ขอยกเลิกใช้งาน', 'rrr', 'rrr', '2021-03-05', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '2021-03-09', 'qqq', '1', 'qqq', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0006, 00000, 'vb', 0, 'vb', 'vb', 'vb', 'vb', 'ขอใช้งาน', 'vb', 'vb', '2021-03-08', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0007, 00000, 'นาย มานะ ลาลาลอย', 16445, 'CR', 'CR', 'CR HR', '2142', 'ขอใช้งาน', 'ระบบบัญชีแยกประเภท', 'ขอระบบบัญชีแยกประเภท', '2021-03-11', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0008, 00000, 'hhh', 0, 'hhh', 'hhh', 'hhh', 'hhh', 'ขอยกเลิกใช้งาน', 'hhh', 'hhh', '2021-03-11', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0009, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 'ขอใช้งาน', 'asd', 'asd', '2021-03-19', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0010, 00041, 'Chatna Lala', 11, 'position', 'part work', 'office', 'tel in', 'requiment', 'system name', 'detail', '2021-03-22', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `regdelsystem` VALUES (0012, 00041, 'peecha Lala', 1153, 'ไอที', 'พัฒนา', 'เทคโน', '5184', 'ขอใช้งาน', '', '\r\n\r\n\r\n', '2021-03-26', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `requests`
-- 

CREATE TABLE `requests` (
  `requestnum` int(4) unsigned zerofill NOT NULL auto_increment COMMENT 'เลขที่รายการ',
  `ID` int(5) unsigned zerofill NOT NULL,
  `requester` varchar(50) collate utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้ร้องขอ',
  `requesterid` int(10) NOT NULL,
  `position` varchar(100) collate utf8_unicode_ci NOT NULL,
  `work` varchar(100) collate utf8_unicode_ci NOT NULL,
  `partwork` varchar(100) collate utf8_unicode_ci NOT NULL,
  `office` varchar(100) collate utf8_unicode_ci NOT NULL,
  `telin` int(10) NOT NULL,
  `requestdate` date NOT NULL COMMENT 'วันที่ร้องขอ',
  `requestcase` varchar(100) collate utf8_unicode_ci NOT NULL COMMENT 'รายการที่ร้องขอ',
  `codeitem` text collate utf8_unicode_ci NOT NULL,
  `requestnote` text collate utf8_unicode_ci NOT NULL COMMENT 'หมายเหตุการร้องขอ',
  `servicedate` date NOT NULL COMMENT 'วันที่ให้บริการ',
  `servicenote` text collate utf8_unicode_ci NOT NULL COMMENT 'หมายเหตุการให้บริการ',
  `requeststatus` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT 'สถานะ 1.ร้องขอ 2.อยู่ระหว่างดำเนินการ 3.ไม่สำเร็จ 4.สำเร็จ',
  `supporter` varchar(100) collate utf8_unicode_ci NOT NULL COMMENT 'ผู้ให้บริการตามคำร้องขอ',
  `b_req_date` date NOT NULL,
  `b_req_note` text collate utf8_unicode_ci NOT NULL,
  `b_req_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b_req_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_req_date` date NOT NULL,
  `b1_req_note` text collate utf8_unicode_ci NOT NULL,
  `b1_req_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_req_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_req_date` date NOT NULL,
  `bit_req_note` text collate utf8_unicode_ci NOT NULL,
  `bit_req_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_req_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_req_date` date NOT NULL,
  `bit1_req_note` text collate utf8_unicode_ci NOT NULL,
  `bit1_req_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_req_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`requestnum`),
  KEY `ID` (`ID`),
  FULLTEXT KEY `requester` (`requester`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

-- 
-- dump ตาราง `requests`
-- 

INSERT INTO `requests` VALUES (0002, 00000, 'ฟาน', 0, '', '', '', '', 0, '2019-12-17', 'อินเทอร์เน็ต', 'aaaa', 'ด่วน*********', '0000-00-00', '', '2', '', '2021-03-15', '***', '3', 'ลงชื่อ หน.ส่วนงาน M:	', '2021-03-29', 'หมายเหตุคำขอ :	', '3', 'ผู้อำนวยการ M', '2021-03-04', 'required', '3', 'boss', '2021-03-04', 'boss7', '3', 'bossit7');
INSERT INTO `requests` VALUES (0056, 00061, 'เอก นาคำ', 15322, 'พัฒนาระบบ', 'พัฒนาเทคโนโลยีดิจิทัล', 'พัฒนา', 'ไอที', 5111, '2021-04-01', 'printer', '11AA2345BB', 'ปริ้นไม่ออก', '2021-04-01', 'ลงโปรแกรม printer ใหม่', '4', 'เอก', '2021-04-01', 'ok ', '3', 'boss4', '2021-04-01', 'ok ', '3', 'boss5', '2021-04-01', 'ok', '3', 'bossit6', '2021-04-01', 'ok', '3', 'bossit7');
INSERT INTO `requests` VALUES (0054, 00041, 'peecha Lala', 15322, 'ลูกจ้าง', 'บริการ', 'โปรโมท', 'เทคโนโลยีสารสนเทศ', 11545, '2021-03-25', 'เครื่องคอมพิวเตอร์', 'ไม่มี', 'เปิดไม่ติด', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0055, 00041, 'peecha Lala', 15322, 'ลูกจ้าง', 'บริการ', 'โปรโมท', 'เทคโนโลยีสารสนเทศ', 15322, '2021-03-25', 'คีย์บอร์ด', '1111', 'How', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0053, 00041, 'peecha Lala', 15322, 'ลูกจ้าง', 'พัฒนาระบบ', 'พัฒนาระบบเทคโนโลยีดิจิทัล', 'เทคโนโลยีสารสนเทศ', 15322, '2021-03-25', 'คีย์บอร์ด', '1ฟAas', '\r\n', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0032, 00000, '123', 123, '123', '123', '123', '123', 123, '2021-03-05', 'Tablet', '123', '123', '0000-00-00', '', '1', '', '2021-03-29', 'ok ', '3', 'boss4', '2021-03-29', 'ok pass', '3', 'Boss5', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0033, 00000, 'นายธันวา มีคม', 15322, 'IT', 'ITD', 'DEV ITD', 'PWO', 5184, '2021-03-11', 'เครื่องคอมพิวเตอร์', '1115B4478xa41', 'เปิดไม่ติด', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0034, 00000, 'dfg', 0, 'dfg', 'dfg', 'dfg', 'dfg', 0, '2021-03-11', 'Projector', 'dfg', 'dfg', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0035, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'Projector', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0036, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'Projector', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0037, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'Projector', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0038, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'Projector', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0039, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'Projector', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0041, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'Projector', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '2021-04-01', 'ok', '3', 'bossit7');
INSERT INTO `requests` VALUES (0042, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-11', 'คีย์บอร์ด', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0043, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'as', 0, '2021-03-11', 'เครื่องคอมพิวเตอร์', 'asd', 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0044, 00000, 'eee', 0, 'eee', 'eee', 'eee', 'eee', 0, '2021-03-11', 'อื่นๆ', 'eee', 'eee', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0049, 00041, 'Chana Lala', 15322, 'asdas', 'ao', 'dw', 'pwo', 23, '2021-03-20', 'คีย์บอร์ด', '1212', 'กดไม่ติด', '0000-00-00', '', '1', '', '2021-03-27', 'ss', '3', 'ss', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0047, 00000, 'ฟหก', 0, 'ฟหก', 'ฟหก', 'ฟหก', 'ฟหก', 0, '2021-03-19', 'คีย์บอร์ด', 'ฟหก', 'ฟหก', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0050, 00041, 'Chana Lala', 15322, 'AO', 'PT', 'GL', 'PWO', 1150, '2021-03-20', 'Notebook', '1847DER88887', 'ลงโปรแกรมเพิ่ม', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `requests` VALUES (0052, 00041, 'Chana Lala', 1112, 'PR b', 'PR e', 'PR a', 'PR PWO', 1145, '2021-03-21', 'Monitor(จอภาพ)', '47TV4', 'เปิดไม่ติด', '0000-00-00', '', '2', '', '2021-03-21', 'หมายเหตุคำขอ', '3', ' หน.ส่วนงาน M', '2021-03-21', 'หมายเหตุคำขอ : ', '3', 'ผอ.m', '2021-03-21', 'หมายเหตุคำขอ : ', '3', 'ลงชื่อ หน.ส่วนงาน IT: ', '2021-03-21', 'หม', '3', 'ผู้อำนวยการ IT');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `servicemember`
-- 

CREATE TABLE `servicemember` (
  `memberid` int(5) unsigned zerofill NOT NULL auto_increment,
  `ID` int(5) unsigned zerofill NOT NULL,
  `membername` varchar(200) collate utf8_unicode_ci NOT NULL,
  `membernum` int(15) NOT NULL,
  `memberposition` varchar(200) collate utf8_unicode_ci NOT NULL,
  `memberwork` varchar(200) collate utf8_unicode_ci NOT NULL,
  `memberpwork` varchar(200) collate utf8_unicode_ci NOT NULL,
  `memberoffice` varchar(200) collate utf8_unicode_ci NOT NULL,
  `membertel` int(11) NOT NULL,
  `memberdate` date NOT NULL,
  `membercase` varchar(200) collate utf8_unicode_ci NOT NULL,
  `memberdata` varchar(200) collate utf8_unicode_ci NOT NULL,
  `memberthai` varchar(200) collate utf8_unicode_ci NOT NULL,
  `membereng` varchar(200) collate utf8_unicode_ci NOT NULL,
  `memberidnum` int(20) NOT NULL,
  `memberphone` int(15) NOT NULL,
  `membernote` text collate utf8_unicode_ci NOT NULL,
  `servicememdate` date NOT NULL,
  `servicememnote` text collate utf8_unicode_ci NOT NULL,
  `memberstatus` varchar(200) collate utf8_unicode_ci NOT NULL,
  `servicename` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b_ser_date` date NOT NULL,
  `b_ser_note` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b_ser_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b_ser_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_ser_date` date NOT NULL,
  `b1_ser_note` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_ser_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `b1_ser_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_ser_date` date NOT NULL,
  `bit_ser_note` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_ser_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit_ser_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_ser_date` date NOT NULL,
  `bit1_ser_note` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_ser_status` varchar(200) collate utf8_unicode_ci NOT NULL,
  `bit1_ser_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`memberid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

-- 
-- dump ตาราง `servicemember`
-- 

INSERT INTO `servicemember` VALUES (00001, 00000, 'Majadoom', 15322, 'MT', 'MT', 'MT', 'PWO', 965454514, '2021-01-24', '??????', 'GL', 'มาจาดูม', 'majadoom', 15322, 613894465, '123 - ok', '2021-03-14', 'asd44333555', '2', 'asd', '2021-03-15', 'หมายเหตุคำขอ :	', '3', 'ลงชื่อ หน.ส่วนงาน M:	', '2021-03-02', 'ok', '3', 'ชนะชัย ไวมาก', '2021-03-04', 'ok pass', '3', 'bossit', '2021-03-04', 'ok', '3', 'boss7');
INSERT INTO `servicemember` VALUES (00010, 00000, 'asd', 0, 'asd', 'asd', 'asd', 'asd', 0, '2021-03-02', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', '', 0, 0, 'asd', '2021-03-10', 'asd', '1', 'admin', '2021-03-10', 'ok ok ', '3', 'boss4', '2021-03-10', 'ok ok ', '3', 'boss5', '2021-03-10', 'ok ok ', '3', 'boss it 6', '2021-03-10', 'ok ok  boss it 7', '3', 'boss it 7');
INSERT INTO `servicemember` VALUES (00017, 00000, 'ttt', 0, 'ttt', 'ttt', 'ttt', 'ttt', 0, '2021-03-05', 'Network System(ระบบเครือข่าย) WI-FI', '', '', '', 0, 0, '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00018, 00000, 'นาย เกอ มามาก้า', 5432, 'HM', 'HM', ' HM MM', 'PWO', 3244, '2021-03-11', 'ขอใช้อีเมล์ของหน่วยงาน(E-mail@pwo.mail.go.th)', '', 'นาย เกอ มามาก้า', 'Mr. GER MAMAKA', 2147483647, 968474417, 'ขอใช้อีเมล์ของหน่วยงานPWO', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00019, 00000, 'kkkk', 0, 'kkk', 'kkk', 'kkk', 'kkk', 0, '2021-03-11', 'Database System(ระบบฐานข้อมูล)', 'kkk', '', '', 0, 0, '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00020, 00000, 'dfg', 0, 'dfg', 'dfg', 'dfg', 'dfg', 0, '2021-03-11', 'Database System(ระบบฐานข้อมูล)', 'dfg', '', '', 0, 0, 'dfg', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00021, 00000, 'Chana Lala', 1111, 'AA', 'BB', 'CC', 'DD', 2222, '2021-03-22', 'ขอใช้อีเมล์ของหน่วยงาน(E-mail@pwo.mail.go.th)', '', 'ชนา ลาลา', 'Chana Lala', 2147483647, 612458748, 'no more', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00024, 00041, 'Chatna Lal', 12, 'c', 'b', 's', 'f', 8, '2021-03-22', 'Database System(ระบบฐานข้อมูล)', 'acc', 'sd', 'sad', 1, 2, 'asd', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00025, 00041, 'Chatna Lala', 123, 'c', 'bb', 'ss', 'ff', 66, '2021-03-22', 'ขอใช้อีเมล์ของหน่วยงาน(E-mail@pwo.mail.go.th)', 'df', 'aaa', 'ssss', 0, 0, 'df', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');
INSERT INTO `servicemember` VALUES (00026, 00041, 'peecha Lala', 15322, 'เอไอ', 'บีที', 'เวอร์ชั่น', 'ไอที', 5184, '2021-03-26', 'ขอใช้อีเมล์ของหน่วยงาน(E-mail@pwo.mail.go.th)', '', '', '', 0, 0, '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '', '0000-00-00', '', '1', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `serviceuser`
-- 

CREATE TABLE `serviceuser` (
  `useridnum` int(5) unsigned zerofill NOT NULL auto_increment,
  `ID` int(5) unsigned zerofill NOT NULL,
  `username` varchar(100) collate utf8_unicode_ci NOT NULL,
  `useroffice` varchar(100) collate utf8_unicode_ci NOT NULL,
  `userid` int(50) NOT NULL,
  `usertel` int(10) unsigned zerofill NOT NULL,
  `useremail` varchar(100) collate utf8_unicode_ci NOT NULL,
  `usercase` varchar(100) collate utf8_unicode_ci NOT NULL,
  `usersystem` varchar(100) collate utf8_unicode_ci NOT NULL,
  `usernote1` varchar(100) collate utf8_unicode_ci NOT NULL,
  `usernote2` varchar(100) collate utf8_unicode_ci NOT NULL,
  `userdate` date NOT NULL,
  `serviceuserdate` date NOT NULL,
  `serviceusernote` text collate utf8_unicode_ci NOT NULL,
  `userstatus` varchar(200) collate utf8_unicode_ci NOT NULL,
  `suppuser` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`useridnum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

-- 
-- dump ตาราง `serviceuser`
-- 

INSERT INTO `serviceuser` VALUES (00033, 00000, 'Thicha', 'Sudchama', 2147483647, 0618457741, 'Thicha@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'asd', 'asd', '', '2021-03-02', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00002, 00000, 'Thawatchai', 'asdasdasd', 0, 0613225445, 'anabaelll@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'asdsad', 'asdsadsad', '', '2020-02-01', '2021-02-24', 'service', '2', 'Nieerrr');
INSERT INTO `serviceuser` VALUES (00003, 00000, 'thawatchai', 'asdasdasd', 0, 0000000000, 'asd', 'Network System(ระบบเครือข่าย)', '', '', 'sadasdasd', '2020-02-01', '2021-02-25', '', '3', 'a');
INSERT INTO `serviceuser` VALUES (00004, 00000, 'thawatchai', 'asdasdasd', 0, 0000000000, 'anabaelll@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'asdsad', 'asdsad', '', '2020-02-01', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00036, 00000, 'ธิชารัตน์ ชุดชุมแพ', 'อคส', 2147483647, 0968614712, '', 'Database System(ระบบฐานข้อมูล)', 'GG', '', '', '2021-03-05', '2021-03-05', '', '3', 'admin');
INSERT INTO `serviceuser` VALUES (00006, 00000, 'เอก นาทอง', 'asdasdasd', 11547844, 0613225445, 'asdasddsa', 'Network System(ระบบเครือข่าย)', 'zzzzzzzzzzz', '', '', '2020-02-01', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00007, 00000, 'thawatchai', 'asdasdasd', 0, 0000000000, 'asd', 'Database System(ระบบฐานข้อมูล)', 'asdsad', 'asd', '', '2020-02-01', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00008, 00000, 'thawatchai', 'asdasdasd', 0, 0000000000, 'asd', 'Network System(ระบบเครือข่าย)', 'asdsad', 'zxczxczxczxc', 'zxczxczxczxc', '2020-02-01', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00039, 00000, 'asd', 'asd', 0, 0000000000, 'asd', 'Database System(ระบบฐานข้อมูล)', 'asd', 'asd', '', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00038, 00000, 'aaa', 'aaa', 0, 0000000000, 'aaaa', 'Database System(ระบบฐานข้อมูล)', 'aaa', 'aaa', '', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00013, 00000, 'qwe', 'qwe', 0, 0000000000, 'qwe', 'Database System(ระบบฐานข้อมูล)', 'qwe', 'qwe', '', '2020-02-04', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00015, 00000, 'asdasd', 'asdasd', 0, 0000000000, 'asdasd', 'Database System(ระบบฐานข้อมูล)', 'asdsad', 'asdsad', '', '2020-02-04', '2021-02-23', 'aaa', '3', 'aaa');
INSERT INTO `serviceuser` VALUES (00032, 00000, 'ธวัชชัย สอนจันทร์', 'ไอทีพีเอ็นอาร์ยู ดอทคอม', 2147483647, 2147483647, 'Majadoom@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'GL', 'บัญชีแยกประเภท', '', '2021-02-23', '2021-02-23', 'รอส่ง [ID Password]', '3', 'Aek Majadoom');
INSERT INTO `serviceuser` VALUES (00017, 00000, 'asdasd', 'asdasd', 0, 0000000000, 'asd', 'Database System(ระบบฐานข้อมูล)', 'asd', 'asd', '', '2020-02-08', '2020-02-08', 'asd', '3', 'k');
INSERT INTO `serviceuser` VALUES (00019, 00000, 'asdasd', 'asdasd', 0, 0000000000, 'a', 'Database System(ระบบฐานข้อมูล)', 'asdsad', 'a', '', '2020-02-08', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00020, 00000, 'asd', 'asd', 0, 0000000000, 'dasd', 'Database System(ระบบฐานข้อมูล)', 'sd', 'asd', '', '2020-02-10', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00021, 00000, 'A', 'a', 11, 0000000011, '11', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'ขาด', '2021-02-02', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00037, 00000, 'thawatchai', 'asd', 0, 0000000000, 'asd', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'asd', '2021-03-10', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00034, 00000, 'asd', 'asd', 0, 0000000000, 'asd', 'Database System(ระบบฐานข้อมูล)', 'asd', 'asd', '', '2021-03-02', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00035, 00000, 'ert', 'ert', 0, 0000000000, 'ert', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'ert', '2021-03-02', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00026, 00000, 'Numrin', 'Numrin.cvo.th', 2147483647, 0613554487, 'Numrin.Ogmail.com', 'Network System(ระบบเครือข่าย) WI-FI', '', '', 'ขอ ID password Wifi', '2021-02-15', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00027, 00000, 'Thawatchai', 'Raceree.cvo.th', 2147483647, 0645145777, 'Majadoom@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'ระบบงบประมาณ ', 'ระบบงบประมาณ ', '', '2021-02-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00028, 00000, 'Thawatchai', 'Raceree.cvo.th', 2147483647, 0645145777, 'Majadoom@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'ระบบงบประมาณ ', 'ระบบงบประมาณ ', '', '2021-02-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00029, 00000, 'Thawatchai', 'Raceree.cvo.th', 2147483647, 0645145777, 'Majadoom@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'ระบบงบประมาณ ', 'ระบบงบประมาณ ', '', '2021-02-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00030, 00000, 'Thawatchai', 'Raceree.cvo.th', 2147483647, 0645145777, 'Majadoom@gmail.com', 'Database System(ระบบฐานข้อมูล)', 'ระบบงบประมาณ ', 'ระบบงบประมาณ ', '', '2021-02-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00031, 00000, 'admin', 'Pwo', 0, 0000000000, 'bbbb', 'Database System(ระบบฐานข้อมูล)', 'ss', 'ss', '', '2021-02-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00040, 00000, 'rrr', 'rrr', 0, 0000000000, 'rrr', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'rrr', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00041, 00000, 'rrr', 'rrr', 0, 0000000000, 'rrr', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'rrr', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00042, 00000, 'rrr', 'rrr', 0, 0000000000, 'rrr', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'rrr', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00043, 00000, 'vvv', 'vvv', 0, 0000000000, 'vvvv', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'vvv', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00044, 00000, 'นาย มีชัย นายนะ', 'แอคคอดดิ้งเทรดเดอร์', 2147483647, 0613225444, 'Accordingtread.co.th', 'Network System(ระบบเครือข่าย) WI-FI', '', '', 'ขอ ID Password', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00045, 00000, 'asd', 'asd', 0, 0000000000, 'asd', 'Database System(ระบบฐานข้อมูล)', 'asd', 'asd', '', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00046, 00000, 'asd', 'asd', 0, 0000000000, 'asd', 'Database System(ระบบฐานข้อมูล)', 'asd', 'asd', '', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00047, 00000, 'llsj', 'llsj', 0, 0000000000, 'llsj', 'Database System(ระบบฐานข้อมูล)', 'llsj', 'llsj', '', '2021-03-11', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00048, 00000, 'oooooo', 'ooooo', 0, 0000000000, 'ooooo', 'Database System(ระบบฐานข้อมูล)', 'ooooo', 'ooooo', '', '2021-03-14', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00060, 00025, 'บังหมุดดู เซาะมะซะ', 'test jumked', 2147483647, 0618745574, 'test@.com', 'Database System(ระบบฐานข้อมูล)', 'ชื่อระบบ', 'เพื่อใช้ในงานจัดการ', 'เพื่อใช้ในงานจัดการ', '2021-03-18', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00074, 00025, 'บังหมุดดู เซาะเมะกะ', 'เซาะเมะกะ', 2147483647, 0613894444, 'Sorma@gmail.com', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'สายขาด', '2021-03-26', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00062, 00025, 'บังหมุดดู เซาะเมะกะ', 'far far away co.th', 2147483647, 0061444787, 'Faaway@gmail.com', 'Network System(ระบบเครือข่าย) สาย LAN', '', '', 'type ??? ', '2021-03-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00063, 00044, 'ธิชารัตน์ ชุมสุดแพง', 'RAcing', 2147483647, 0614447874, 'Faaway@gmail.com', 'Database System(ระบบฐานข้อมูล)', '$i = 2', 'ok ja', '', '2021-03-19', '0000-00-00', '', '1', '');
INSERT INTO `serviceuser` VALUES (00073, 00025, 'บังหมุดดู เซาะเมะกะ', 'ฟหก', 2147483647, 0613894465, 'nasd@gmail.com', 'Network System(ระบบเครือข่าย) WI-FI', '', '', 'user password', '2021-03-25', '0000-00-00', '', '1', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `ID` int(5) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Phone` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Email` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Regidate` date NOT NULL,
  `supportdate` date NOT NULL,
  `supportnote` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Userlevel` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL COMMENT '"Admin=1", "User=2", "Member=3", "Boss=4", "Boss1=5, "Bossit=6, "Bossit1=7"',
  `supportuser` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES (00002, 'admin', '1234', 'Master', 'Super', '089x-xxx-xxxx', 'MS@gmail.com', '2020-03-21', '2021-02-22', 'Test System ', '1', 'majadoom');
INSERT INTO `user` VALUES (00042, 'Aek', '15322', 'Thawatchai', 'Sornchan', '0613894465', 'Majadoom@gmail.com', '2021-03-04', '2021-03-11', '', '2', 'Aek');
INSERT INTO `user` VALUES (00043, 'Thicha', '1145', 'Thicha', 'Sornchan', '0613894465', 'Majadoom@gmail.com', '2021-03-04', '2021-03-04', 'เปลี่ยน สถานะ', '3', 'Admin');
INSERT INTO `user` VALUES (00076, 'spider', 'Aek15322', 'สไปเดอร์', 'เวอร์เจอร์', '0913465257', 'spider@gmail.com', '2021-04-07', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00037, 'boss5', '1234', 'สมหมาย', 'กลายพร', '15322', 'boss1@yahoo.com', '2021-02-15', '2021-02-15', '', '5', 'Aek');
INSERT INTO `user` VALUES (00023, 'aaa', '1234', 'Nawin', 'Krurusapun', '06485597e', 'USer@yahoo.co.thr', '2020-03-25', '2021-02-23', 'asd', '3', 'Aek');
INSERT INTO `user` VALUES (00025, 'user', '1234', 'บังหมุดดู', 'เซาะเมะกะ', '061897445', 'USer@yahoo.co.th', '2021-03-01', '2021-02-09', 'แก้ไขแล้ว', '2', 'Aek');
INSERT INTO `user` VALUES (00036, 'boss4', '1234', 'อำนาจ', 'บารมี', '15322', 'boss55@yahoo.com', '2021-02-15', '2021-02-15', '', '4', 'Aek');
INSERT INTO `user` VALUES (00041, 'member', '1234', 'peecha', 'Lala', '15314', 'Majadoom@gmail.com', '2021-02-23', '2021-02-24', 'Pass', '3', 'Majadoom');
INSERT INTO `user` VALUES (00048, 'sad', 'asd', 'asd', 'sad', 'asd', 'asd', '2021-03-21', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00040, 'bossit7', '1234', 'อภิสิทธิ์', 'มหานาก', '15322', 'apisit@gmail.com', '2021-02-15', '2021-02-15', '', '7', 'Aek');
INSERT INTO `user` VALUES (00039, 'bossit6', '1234', 'มาลัย', 'สิบมิตร', '15322', 'bossit1@zet.co.th', '2021-02-15', '2021-02-15', '', '6', 'Aek');
INSERT INTO `user` VALUES (00050, 'Aeker', '1234', 'Chatna', 'มาจิส', '8899', 'Aek_majis@gmail.com', '2021-03-23', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00075, 'Majadoomer', 'Aek15322', 'มานิส', 'มิสเตอร์', '0916342241', 'Manis@yahoo.com', '2021-03-29', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00052, 'ddd', 'ddd', 'ddd', 'ddd', '11', 'a@gmail.co', '2020-03-24', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00077, 'ssss', 'Aek15322', 'เอก', 'นาทอง', '0613879948', 'natong@gmail.com', '2021-04-08', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00059, 'Master', '7894', 'มาสเตอร์', 'โอเค', '0613894474', 'Master@gmail.com', '2021-03-25', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00056, 'sss', '123', 'ฟหก', 'ฟหก', '122333333', 'asd@gmail.com', '2021-03-24', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00060, 'kookkik', '1234', 'เอก', 'ทำนอง', '1222222222', 'asd@gmail.com', '2021-03-25', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00061, 'majadoom', 'Aek15322', 'เอก', 'นาคำ', '0613894474', 'Doomer@gmail.com', '2021-03-25', '0000-00-00', '', '3', '');
INSERT INTO `user` VALUES (00063, 'maj', 'Kook1234', 'ฟหก', 'ฟหก', '0678894565', 'maj@gmail.com', '2021-03-25', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00066, 'king', 'Aek15322', 'เอก', 'นาทอง', '0613894444', 'G@mail.com', '2020-03-27', '0000-00-00', '', '2', '');
INSERT INTO `user` VALUES (00074, 'thawatchai', '190822Aek', 'ธวัชชัย', 'สอนจันทร์', '0613894465', 'aek_sornchun@hotmail.com', '2021-03-27', '0000-00-00', '', '2', '');
