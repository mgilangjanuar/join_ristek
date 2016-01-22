/*
Navicat MySQL Data Transfer

Source Server         : oprecristek
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : oprecristek2016

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2016-01-23 01:20:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
  username varchar(30) NOT NULL,
  role char(2) NOT NULL,
  PRIMARY KEY (username)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO admin VALUES ('ammar.fathin', 'cs');
INSERT INTO admin VALUES ('anthony31', 'cp');
INSERT INTO admin VALUES ('ilham.fathy', 'dv');
INSERT INTO admin VALUES ('jatmiko.budi', 'ds');
INSERT INTO admin VALUES ('jundi.ahmad', 'sp');
INSERT INTO admin VALUES ('kustiawanto.halim', 'es');
INSERT INTO admin VALUES ('made.nindyatama', 'pr');
INSERT INTO admin VALUES ('mohammad.awwaab', 'sp');
INSERT INTO admin VALUES ('muhammad.azmi41', 'gd');
INSERT INTO admin VALUES ('muhammad.firza', 'sp');
INSERT INTO admin VALUES ('rahma.khairunisa', 'wb');
INSERT INTO admin VALUES ('rizki.mubarok', 'ns');
INSERT INTO admin VALUES ('shylla.estee', 'ux');
INSERT INTO admin VALUES ('siti.fatimah34', 'sp');
INSERT INTO admin VALUES ('teresa.pranyoto', 'md');

-- ----------------------------
-- Table structure for biodata
-- ----------------------------
DROP TABLE IF EXISTS biodata;
CREATE TABLE biodata (
  timestamp datetime(6) DEFAULT NULL,
  username varchar(30) NOT NULL,
  name varchar(100) NOT NULL,
  npm char(10) NOT NULL,
  jurusan varchar(50) NOT NULL,
  angkatan char(4) NOT NULL,
  email varchar(50) DEFAULT NULL,
  phone varchar(20) DEFAULT NULL,
  PRIMARY KEY (username),
  UNIQUE KEY npm (npm),
  UNIQUE KEY email (email)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of biodata
-- ----------------------------
INSERT INTO biodata VALUES ('2016-01-22 09:36:31.000000', 'anak.ilang', 'Anak Ilang', '1301234567', 'Ilmu Sihir', '2013', 'anak.ilang@gmail.com', '+6281313121214');
INSERT INTO biodata VALUES ('2016-01-22 09:58:46.000000', 'ginevra.molly', 'Ginevra Molly Weasly', '1308291042', 'Ilmu Sihir', '2013', 'ginevra.weasly@gmail.com', '+6285710294231');
INSERT INTO biodata VALUES ('2016-01-22 09:36:31.000000', 'harry.james', 'Harry James Potter', '1301301301', 'Ilmu Sihir', '2013', 'harry.potter@gmail.com', '+6281324354678');
INSERT INTO biodata VALUES ('2016-01-22 09:50:06.000000', 'hermione.jean', 'Hermione Jean Granger', '1304829384', 'Ilmu Sihir', '2013', 'hermione.granger@gmail.com', '+628782049128');
INSERT INTO biodata VALUES ('2016-01-17 07:18:28.000000', 'jundi.ahmad', 'Jundi Ahmad Alwan', '1306464114', 'Sistem Informasi (Information System)', '2013', 'jundi.alwan@gmail.com', '+6281399274252');
INSERT INTO biodata VALUES ('2016-01-22 09:58:46.000000', 'luna.lovegood', 'Luna Lovegood', '1302719923', 'Ilmu Sihir', '2013', 'luna.lovegood@gmail.com', '+6282201993488');
INSERT INTO biodata VALUES ('2016-01-22 09:50:06.000000', 'ronald.bilius', 'Ronlad Bilius Weasly', '1309876543', 'Ilmu Sihir', '2013', 'ronald.weasly@gmail.com', '+628123456789');

-- ----------------------------
-- Table structure for kualifikasi
-- ----------------------------
DROP TABLE IF EXISTS kualifikasi;
CREATE TABLE kualifikasi (
  username varchar(30) NOT NULL,
  isPil1Qualified int(1) NOT NULL DEFAULT '0',
  isPil2Qualified int(1) NOT NULL DEFAULT '0',
  biohash char(32) NOT NULL,
  PRIMARY KEY (username)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kualifikasi
-- ----------------------------
INSERT INTO kualifikasi VALUES ('anak.ilang', '1', '0', 'ae45fa0dca191bb80671c6b4508793bd');
INSERT INTO kualifikasi VALUES ('ginevra.molly', '0', '0', 'e052eeba315ff22135376d1b4299dccb');
INSERT INTO kualifikasi VALUES ('harry.james', '0', '0', '2abd2d843c8c68ce365107f8cfad74c7');
INSERT INTO kualifikasi VALUES ('hermione.jean', '1', '0', 'd19deb18e99cf9576e1d5bde708978c0');
INSERT INTO kualifikasi VALUES ('jundi.ahmad', '1', '0', '1b7d12f0f59e04efc3c3e269782bf665');
INSERT INTO kualifikasi VALUES ('luna.lovegood', '0', '1', '78653141b1044d331eb3f30e42b40cb6');
INSERT INTO kualifikasi VALUES ('ronald.bilius', '1', '0', '3ea6de57d6b0f94418719bc436f4114b');

-- ----------------------------
-- Table structure for pilihan
-- ----------------------------
DROP TABLE IF EXISTS pilihan;
CREATE TABLE pilihan (
  username varchar(50) NOT NULL,
  sig1 char(2) DEFAULT NULL,
  alasan1 text,
  sig2 char(2) DEFAULT NULL,
  alasan2 text,
  PRIMARY KEY (username),
  CONSTRAINT pilihan_ibfk_1 FOREIGN KEY (username) REFERENCES biodata (username) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pilihan
-- ----------------------------
INSERT INTO pilihan VALUES ('anak.ilang', 'cp', 'lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet', 'wb', 'lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet lorep ipsum dolor sit maet');
INSERT INTO pilihan VALUES ('ginevra.molly', 'pr', 'I love writing and relate with others', 'pr', 'I love writing and relate with others');
INSERT INTO pilihan VALUES ('harry.james', 'es', 'di hogwarts gak ada embed', 'ux', 'sekarang ux banyak permintaannya');
INSERT INTO pilihan VALUES ('hermione.jean', 'ds', 'data is my life', 'ds', 'data is my life');
INSERT INTO pilihan VALUES ('jundi.ahmad', 'cp', 'asd', 'ux', 'qwe');
INSERT INTO pilihan VALUES ('luna.lovegood', 'hr', 'caring is love and love is good :)', 'hr', 'caring is love and love is good :)');
INSERT INTO pilihan VALUES ('ronald.bilius', 'gd', 'gak ada dosen gamedev di hogwarts', 'gd', 'gak ada dosen gamedev di hogwarts');

-- ----------------------------
-- Table structure for sigproperty
-- ----------------------------
DROP TABLE IF EXISTS sigproperty;
CREATE TABLE sigproperty (
  sig char(2) NOT NULL,
  booklink varchar(50) NOT NULL,
  linkname varchar(100) NOT NULL,
  logolink varchar(50) NOT NULL,
  signame varchar(50) NOT NULL,
  sigshortname varchar(10) NOT NULL,
  tasklink varchar(100) NOT NULL,
  PRIMARY KEY (sig)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sigproperty
-- ----------------------------
INSERT INTO sigproperty VALUES ('cp', 'https://ristek2016-cp.youcanbook.me', 'Youcanbook.me Competitive Programming SIG', 'assets/img/cp.png', 'Competitive Programming SIG', 'CP', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('ds', 'https://ristek2016-ds.youcanbook.me/', 'Youcanbook.me Data Science SIG', 'assets/img/ds.png', 'Data Science SIG', 'DatSci', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('es', 'https://ristek2016-embed.youcanbook.me/', 'Youcanbook.me Embedded System SIG', 'assets/img/embed.png', 'Embedded System SIG', 'Embed', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('gd', 'https://ristek2016-game.youcanbook.me/', 'Youcanbook.me Game Development SIG', 'assets/img/game.png', 'Game Development SIG', 'GameDev', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('hr', 'https://ristek2016-hrd.youcanbook.me/', 'Youcanbook.me Human Resource Management Division', 'assets/img/hr.png', 'Human Resource Management Division', 'HRM', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('md', 'https://ristek2016-mobapp.youcanbook.me/', 'Youcanbook.me Mobile Application Development SIG', 'assets/img/mob.png', 'Mobile Application Development SIG', 'MobApp', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('ns', 'https://ristek2016-netsos.youcanbook.me/', 'Youcanbook.me Network Security and Operating System SIG', 'assets/img/netsos.png', 'Network Security and Operating System SIG', 'NetSos', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('pr', 'https://ristek2016-pr.youcanbook.me/', 'Youcanbook.me Public Relation Division', 'assets/img/pr.png', 'Public Relation Division', 'PR', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('ux', 'https://ristek2016-uiux.youcanbook.me/', 'Youcanbook.me UI/UX SIG', 'assets/img/ux.png', 'UI/UX SIG', 'UI/UX', 'files/template_resume_ristek.docx');
INSERT INTO sigproperty VALUES ('wb', 'https://ristek2016-web.youcanbook.me/', 'Youcanbook.me Web Development SIG', 'assets/img/web.png', 'Web Development SIG', 'WebDev', 'files/template_resume_ristek.docx');

-- ----------------------------
-- Table structure for tugas
-- ----------------------------
DROP TABLE IF EXISTS tugas;
CREATE TABLE tugas (
  username varchar(30) NOT NULL,
  essay varchar(200) DEFAULT NULL,
  resume varchar(200) DEFAULT NULL,
  tugas1 varchar(200) DEFAULT NULL,
  tugas2 varchar(200) DEFAULT NULL,
  PRIMARY KEY (username),
  CONSTRAINT tugas_ibfk_1 FOREIGN KEY (username) REFERENCES biodata (username) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tugas
-- ----------------------------
INSERT INTO tugas VALUES ('anak.ilang', null, null, null, null);
INSERT INTO tugas VALUES ('ginevra.molly', null, null, null, null);
INSERT INTO tugas VALUES ('harry.james', null, null, null, null);
INSERT INTO tugas VALUES ('hermione.jean', null, null, null, null);
INSERT INTO tugas VALUES ('jundi.ahmad', null, 'http://facebook.com/jundi.alwan', null, 'http://facebook.com');
INSERT INTO tugas VALUES ('luna.lovegood', null, null, null, null);
INSERT INTO tugas VALUES ('ronald.bilius', null, null, null, null);
