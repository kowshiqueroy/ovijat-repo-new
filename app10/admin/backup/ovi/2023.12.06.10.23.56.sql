DROP TABLE category;

CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO category VALUES("17","Test Category");
INSERT INTO category VALUES("18","Test Category 2");
INSERT INTO category VALUES("19","Test Category 3");



DROP TABLE company;

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `details` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO company VALUES("1","Ovijat Food & Beverage Industries Limited","+8801765236683","info@ovijatfood.com","Ramgonj Doghochi, Nilphamari");



DROP TABLE department;

CREATE TABLE `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO department VALUES("12","Test Department");
INSERT INTO department VALUES("13","Test Department 2");



DROP TABLE entry;

CREATE TABLE `entry` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `dps` varchar(60) NOT NULL,
  `itemcategoryunit` varchar(80) NOT NULL,
  `unit` double NOT NULL,
  `slip` varchar(20) NOT NULL,
  `expiring` varchar(15) NOT NULL,
  `price` double NOT NULL,
  `notes` varchar(100) NOT NULL,
  `entryby` varchar(50) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO entry VALUES("183","In","Test Department","Test Category Test Item (PCS)","0","0","Y.m.d","0","N/A","a","2023-12-06 00:07:38");
INSERT INTO entry VALUES("184","In","Test Department","Test Category 2 Test Item 2 (PCS)","0","0","Y.m.d","0","N/A","a","2023-12-05 00:07:49");
INSERT INTO entry VALUES("186","Out","Test Department","Test Category Test Item (PCS)","0","0","Y.m.d","0","N/A","a","2023-12-06 00:53:36");
INSERT INTO entry VALUES("187","In","Test Department","Test Category Test Item (PCS)","1","0","Y.m.d","0","N/A","a","2023-12-06 01:47:41");
INSERT INTO entry VALUES("188","Out","Test Department","Test Category Test Item (PCS)","1","0","Y.m.d","0","N/A","a","2023-12-06 01:47:45");
INSERT INTO entry VALUES("189","In","Test Department","Test Category Test Item (PCS)","2","0","Y.m.d","0","N/A","a","2023-12-06 01:47:51");
INSERT INTO entry VALUES("190","In","Test Department","Test Category m (PCS)","1","0","Y.m.d","0","N/A","a","2023-12-06 02:53:20");
INSERT INTO entry VALUES("191","In","Test Department","Test Category n (PCS)","1","0","Y.m.d","0","N/A","a","2023-12-06 02:53:29");
INSERT INTO entry VALUES("192","In","Test Department","Test Category v (Other)","1","0","Y.m.d","0","N/A","a","2023-12-06 02:53:36");
INSERT INTO entry VALUES("193","In","Test Department","Test Category z (PCS)","1","0","Y.m.d","0","N/A","a","2023-12-06 02:53:44");



DROP TABLE ip;

CREATE TABLE `ip` (
  `ipname` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL,
  PRIMARY KEY (`ipname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO ip VALUES("5345","435435");
INSERT INTO ip VALUES("::1","new");



DROP TABLE item;

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(40) NOT NULL,
  `categoryname` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `stock` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO item VALUES("25","Test Item","Test Category","PCS","2");
INSERT INTO item VALUES("26","Test Item 2","Test Category 2","PCS","0");
INSERT INTO item VALUES("27","Test Item 3","Test Category 3","PCS","0");
INSERT INTO item VALUES("28","Test Item 2","Test Category 2","PCS","0");
INSERT INTO item VALUES("29","i1","Test Category 2","PCS","0");
INSERT INTO item VALUES("30","Test Item","Test Category","ML","0");
INSERT INTO item VALUES("31","z","Test Category","PCS","1");
INSERT INTO item VALUES("32","v","Test Category","Other","1");
INSERT INTO item VALUES("33","m","Test Category","PCS","1");
INSERT INTO item VALUES("34","n","Test Category","ML","1");
INSERT INTO item VALUES("35","p","Test Category","ML","0");



DROP TABLE log;

CREATE TABLE `log` (
  `data` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 07:01:26");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 07:01:35");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 12:16:22");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 12:17:03");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 12:18:27");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 12:35:25");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 12:39:01");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 12:39:12");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 14:45:31");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 14:46:07");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 14:55:03");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 14:55:51");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 15:17:39");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-05 19:10:34");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-05 21:22:35");
INSERT INTO log VALUES("IN a ::1","2023-12-05 21:30:28");
INSERT INTO log VALUES("IN a ::1","2023-12-06 04:47:30");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-06 05:11:51");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-06 06:32:12");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-06 06:34:53");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-06 06:36:10");
INSERT INTO log VALUES("IN a@a.a ::1","2023-12-06 06:36:57");
INSERT INTO log VALUES("OUT a@a.a ::1","2023-12-06 06:37:59");
INSERT INTO log VALUES("IN a ::1","2023-12-06 06:38:07");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 06:54:14");
INSERT INTO log VALUES("IN a ::1","2023-12-06 06:59:09");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 07:01:29");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:01:36");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 07:04:52");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:04:59");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:05:50");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:06:10");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:07:19");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:08:29");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:09:03");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 07:10:22");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:10:29");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 07:11:24");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:11:28");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 07:15:13");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:15:36");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:16:39");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:17:52");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:19:21");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:20:30");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:20:45");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:22:47");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:23:44");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:25:30");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:29:24");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:31:24");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:32:40");
INSERT INTO log VALUES("Tr a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 ","2023-12-06 07:40:49");
INSERT INTO log VALUES("IN a ::1","2023-12-06 07:41:13");
INSERT INTO log VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526","2023-12-06 07:42:45");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:06:38");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 08:06:40");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:08:32");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 08:08:33");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:09:03");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 08:12:34");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:14:25");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 08:14:26");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:16:59");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 08:17:04");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:17:38");
INSERT INTO log VALUES("OUT a ::1","2023-12-06 08:17:39");
INSERT INTO log VALUES("IN a ::1","2023-12-06 08:17:58");
INSERT INTO log VALUES("IN a ::1","2023-12-06 09:42:23");
INSERT INTO log VALUES("IN a ::1","2023-12-06 10:23:55");



DROP TABLE logdel;

CREATE TABLE `logdel` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logdel VALUES("DELETED Entry 159InoilFoil Test Item (CTN)100Y.m.d0N/Aa@a.a2023-12-05 21:08:37 2023-12-05 a@a.a ::1","2023-12-05 21:08:53");
INSERT INTO logdel VALUES("DELETED Entry 160GiftoilFoil Test Item (CTN)10Y.m.d0N/Aa@a.a2023-12-05 21:08:45 2023-12-05 a@a.a ::1","2023-12-05 21:08:50");
INSERT INTO logdel VALUES("DELETED Entry 161InTest DepartmentTest Category Test Item (PCS)100Y.m.d0N/Aa@a.a2023-12-05 21:12:22 2023-12-05 a@a.a ::1","2023-12-05 21:12:53");
INSERT INTO logdel VALUES("DELETED Entry 162InTest DepartmentTest Category Test Item (PCS)110Y.m.d0N/Aa@a.a2023-12-05 21:12:35 2023-12-05 a@a.a ::1","2023-12-05 21:12:51");
INSERT INTO logdel VALUES("DELETED Entry 163OutTest DepartmentTest Category Test Item (PCS)10Y.m.d0N/Aa@a.a2023-12-05 21:12:41 2023-12-05 a@a.a ::1","2023-12-05 21:12:46");
INSERT INTO logdel VALUES("DELETED Entry 175InTest DepartmentTest Category Test Item (PCS)10Y.m.d0N/Aa2023-12-05 21:38:42 2023-12-05 a ::1","2023-12-05 22:15:43");
INSERT INTO logdel VALUES("DELETED Entry 176InTest DepartmentTest Category Test Item (PCS)40Y.m.d0N/Aa2023-12-05 21:56:35 2023-12-05 a ::1","2023-12-05 22:15:24");
INSERT INTO logdel VALUES("DELETED Entry 177InTest DepartmentTest Category Test Item (PCS)30Y.m.d0N/Aa2023-12-05 21:56:43 2023-12-05 a ::1","2023-12-05 22:13:05");
INSERT INTO logdel VALUES("DELETED Entry 178InTest DepartmentTest Category Test Item (PCS)2.20Y.m.d0N/Aa2023-12-05 21:56:47 2023-12-05 a ::1","2023-12-05 22:12:42");



DROP TABLE logtry;

CREATE TABLE `logtry` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logtry VALUES("IN a ::1","2023-12-06 07:31:24");
INSERT INTO logtry VALUES("IN a ::1","2023-12-06 07:32:40");
INSERT INTO logtry VALUES("Tr a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 ","2023-12-06 07:40:49");
INSERT INTO logtry VALUES("IN a ::1","2023-12-06 07:41:13");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka","2023-12-06 07:42:45");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827192","2023-12-06 07:46:32");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827326","2023-12-06 07:48:46");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827355","2023-12-06 07:49:15");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827413","2023-12-06 07:50:13");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827506","2023-12-06 07:51:46");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827626","2023-12-06 07:53:46");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827850","2023-12-06 07:57:30");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827865","2023-12-06 07:57:45");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827924","2023-12-06 07:58:44");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701827943","2023-12-06 07:59:03");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701828382","2023-12-06 08:06:22");



DROP TABLE users;

CREATE TABLE `users` (
  `usermail` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `regby` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`usermail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("a","a","admin","2023-12-04 15:19:23","admin","active");
INSERT INTO users VALUES("a@a.a","aa","admin","2023-12-04 14:46:43","admin","active");
INSERT INTO users VALUES("admin","admin123","admin","2023-12-04 15:44:27","a@a.a","inactive");



