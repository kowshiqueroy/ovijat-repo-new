DROP TABLE company;

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `details` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO company VALUES("1","Test Company Name","+8801765236683","info@ovijatfood.com","Nilphamari open menu and setup your company info.");



DROP TABLE department;

CREATE TABLE `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO department VALUES("12","Test Department");
INSERT INTO department VALUES("13","Test Department 2");
INSERT INTO department VALUES("15","Khoushik");



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
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO entry VALUES("210","In","Test Department","Headphone a (PCS)","6","0","Y.m.d","0","N/A","g","2023-12-07 06:02:49");



DROP TABLE ip;

CREATE TABLE `ip` (
  `ipname` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  PRIMARY KEY (`ipname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO ip VALUES("103.106.239.188","mahin");
INSERT INTO ip VALUES("103.106.239.79","kush1added");
INSERT INTO ip VALUES("103.152.18.168","atosh");
INSERT INTO ip VALUES("2001:bc8:5090:7e:dc00:ff:fe12:","2001:bc8:5090:7e:dc00:ff:fe12:20e3");
INSERT INTO ip VALUES("::1","localhost");



DROP TABLE item;

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(100) NOT NULL,
  `pagename` varchar(40) NOT NULL,
  `photo` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO item VALUES("98","a","a","1701957056kowshiqueroy016329501792.jpg");
INSERT INTO item VALUES("99","b","b","1701957413t.jpg");
INSERT INTO item VALUES("100","aa","hh","1701958278kowshiqueroy016329501792.jpg");



DROP TABLE log;

CREATE TABLE `log` (
  `data` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 12:46:19");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 12:46:28");
INSERT INTO log VALUES("IN mahin 103.106.239.188","2023-12-06 12:50:47");
INSERT INTO log VALUES("IN srk 103.106.239.79","2023-12-06 13:16:44");
INSERT INTO log VALUES("OUT srk 103.106.239.79","2023-12-06 13:20:48");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 13:20:55");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 13:33:47");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 14:00:20");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 14:02:38");
INSERT INTO log VALUES("OUT a 2001:bc8:5090:7e:dc00:ff:fe12:20e3","2023-12-06 14:04:28");
INSERT INTO log VALUES("OUT a 51.89.226.250","2023-12-06 14:11:18");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 14:12:27");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 14:12:33");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 14:14:31");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 18:34:28");
INSERT INTO log VALUES("IN atosh 103.152.18.168","2023-12-06 19:15:55");
INSERT INTO log VALUES("OUT atosh 103.152.18.168","2023-12-06 19:53:14");
INSERT INTO log VALUES("IN atosh 103.152.18.168","2023-12-06 19:53:23");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:11:41");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:30:04");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:30:48");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:32:26");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:32:33");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:39:06");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:39:14");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:43:18");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:53:02");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:53:17");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:54:47");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:55:35");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:56:35");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:58:00");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 21:59:27");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 21:59:40");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:00:51");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:03:52");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:05:52");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:05:57");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:06:04");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:06:43");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:06:50");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:07:53");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:07:59");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:33:00");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:37:06");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:43:58");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 22:48:15");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 22:48:48");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:05:22");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 23:07:16");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:21:38");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:22:09");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:22:52");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 23:24:29");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:28:26");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 23:28:39");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:33:18");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 23:37:21");
INSERT INTO log VALUES("IN d 103.106.239.79","2023-12-06 23:37:30");
INSERT INTO log VALUES("OUT d 103.106.239.79","2023-12-06 23:42:14");
INSERT INTO log VALUES("IN f 103.106.239.79","2023-12-06 23:50:11");
INSERT INTO log VALUES("OUT f 103.106.239.79","2023-12-06 23:51:09");
INSERT INTO log VALUES("IN g 103.106.239.79","2023-12-06 23:51:15");
INSERT INTO log VALUES("OUT g 103.106.239.79","2023-12-06 23:52:16");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 23:52:22");
INSERT INTO log VALUES("IN g ::1","2023-12-07 00:05:22");
INSERT INTO log VALUES("IN g ::1","2023-12-07 00:12:38");
INSERT INTO log VALUES("IN g ::1","2023-12-07 03:29:53");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 06:30:59");
INSERT INTO log VALUES("IN g ::1","2023-12-07 06:31:19");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 06:31:59");
INSERT INTO log VALUES("IN g ::1","2023-12-07 06:33:42");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 06:33:55");
INSERT INTO log VALUES("IN g ::1","2023-12-07 16:18:16");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:40:51");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:42:02");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:42:07");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:42:12");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:42:16");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:44:10");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:46:09");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:47:03");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 17:47:32");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:49:50");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 17:49:56");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:50:02");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:50:48");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:55:45");
INSERT INTO log VALUES("IN g ::1","2023-12-07 17:57:41");
INSERT INTO log VALUES("IN g ::1","2023-12-07 18:06:01");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 20:16:32");
INSERT INTO log VALUES("IN g ::1","2023-12-07 20:16:35");



DROP TABLE logdel;

CREATE TABLE `logdel` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logdel VALUES("DELETED Entry 198OutTest DepartmentTest Category 2 wire (PCS)20Y.m.d0N/Aa2023-12-06 06:55:06 2023-12-06 atosh 103.152.18.168","2023-12-06 19:49:30");
INSERT INTO logdel VALUES("DELETED Entry 199InTest DepartmentTest Category Test Item (PCS)20Y.m.d0N/Aa2023-12-06 12:56:55 2023-12-07 g ::1","2023-12-07 06:02:24");
INSERT INTO logdel VALUES("DELETED Entry 200PurchaseKhoushiklaptop M2 (PCS)100Y.m.d20000N/Aatosh2023-12-06 19:22:55 2023-12-07 g ::1","2023-12-07 06:02:23");
INSERT INTO logdel VALUES("DELETED Entry 201OutTest Departmentlaptop M2 (PCS)10Y.m.d0N/Aatosh2023-12-06 19:24:06 2023-12-07 g ::1","2023-12-07 06:02:21");
INSERT INTO logdel VALUES("DELETED Entry 202InTest Department 2Test Category Test Item (PCS)30Y.m.d0N/Aatosh2023-12-06 19:24:43 2023-12-07 g ::1","2023-12-07 06:02:20");
INSERT INTO logdel VALUES("DELETED Entry 203LendingKhoushiklaptop del x2 (PCS)1123456Y.m.d2N/Aatosh2023-12-06 19:25:44 2023-12-07 g ::1","2023-12-07 06:02:19");
INSERT INTO logdel VALUES("DELETED Entry 204InTest Department 2টি শার্ট M (PCS)100Y.m.d0N/Aatosh2023-12-06 13:42:41 2023-12-06 a 103.106.239.79","2023-12-06 21:38:44");
INSERT INTO logdel VALUES("DELETED Entry 205InKhoushikTest Category 2 wire (PCS)00Y.m.d0N/Aatosh2023-12-06 14:07:56 2023-12-06 a 103.106.239.79","2023-12-06 21:36:33");
INSERT INTO logdel VALUES("DELETED Entry 206InKhoushiklaptop M20 (PCS)0১Y.m.d0N/Aatosh2023-12-06 20:08:46 2023-12-07 g ::1","2023-12-07 06:02:17");
INSERT INTO logdel VALUES("DELETED Entry 207InTest Departmentlaptop a (CTN)1120Y.m.d0N/Ag2023-12-07 05:26:13 2023-12-07 g ::1","2023-12-07 06:02:16");
INSERT INTO logdel VALUES("DELETED Entry 208InTest DepartmentHeadphone a (PCS)10Y.m.d0N/Ag2023-12-07 05:51:39 2023-12-07 g ::1","2023-12-07 06:02:13");
INSERT INTO logdel VALUES("DELETED Entry 209OutTest DepartmentHeadphone a (PCS)20Y.m.d0N/Ag2023-12-07 05:51:50 2023-12-07 g ::1","2023-12-07 06:02:12");



DROP TABLE logtry;

CREATE TABLE `logtry` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logtry VALUES("Try mahin 103-106-239-188.nilphamari.carnival.com.bd Nilphamari Rangpur Division BD 25.9417,88.8467 AS63526 Systems Solutions & development Technologies Limited 5300 Asia/Dhaka 1701845216","2023-12-06 12:46:56");
INSERT INTO logtry VALUES("Try mahin 103-106-239-188.nilphamari.carnival.com.bd Nilphamari Rangpur Division BD 25.9417,88.8467 AS63526 Systems Solutions & development Technologies Limited 5300 Asia/Dhaka 1701845288","2023-12-06 12:48:08");
INSERT INTO logtry VALUES("Try mahin 103-106-239-188.nilphamari.carnival.com.bd Nilphamari Rangpur Division BD 25.9417,88.8467 AS63526 Systems Solutions & development Technologies Limited 5300 Asia/Dhaka 1701845378","2023-12-06 12:49:38");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848032","2023-12-06 13:33:52");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848404","2023-12-06 13:40:04");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848413","2023-12-06 13:40:13");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848506","2023-12-06 13:41:46");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848525","2023-12-06 13:42:05");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848549","2023-12-06 13:42:29");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848630","2023-12-06 13:43:50");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848674","2023-12-06 13:44:34");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848711","2023-12-06 13:45:11");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848931","2023-12-06 13:48:51");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848955","2023-12-06 13:49:15");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849141","2023-12-06 13:52:21");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849178","2023-12-06 13:52:58");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849250","2023-12-06 13:54:10");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849267","2023-12-06 13:54:27");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849273","2023-12-06 13:54:33");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849343","2023-12-06 13:55:43");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849370","2023-12-06 13:56:10");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849395","2023-12-06 13:56:35");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849425","2023-12-06 13:57:05");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849461","2023-12-06 13:57:41");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849501","2023-12-06 13:58:21");
INSERT INTO logtry VALUES("Try a 2001:bc8:5090:7e:dc00:ff:fe12:20e3 Haarlem North Holland NL 52.3808,4.6368 AS12876 SCALEWAY S.A.S. 2011 Europe/Amsterdam 1701849877","2023-12-06 14:04:37");
INSERT INTO logtry VALUES("Try a 2001:bc8:5090:7e:dc00:ff:fe12:20e3 Haarlem North Holland NL 52.3808,4.6368 AS12876 SCALEWAY S.A.S. 2011 Europe/Amsterdam 1701850014","2023-12-06 14:06:54");
INSERT INTO logtry VALUES("Try a 51.89.226.250 Bexley England GB 51.4416,0.1487 AS16276 OVH SAS DA15 Europe/London 1701850286","2023-12-06 14:11:26");
INSERT INTO logtry VALUES("Try atosh 103.152.18.168 Rangpur Rangpur Division BD 25.7466,89.2517 AS140711 Deshnet Broadband 5400 Asia/Dhaka 1701868518","2023-12-06 19:15:18");



DROP TABLE users;

CREATE TABLE `users` (
  `usermail` varchar(50) NOT NULL,
  `userpassword` varchar(32) NOT NULL,
  `role` varchar(15) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `regby` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`usermail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("a","21608b0a52530f001e1b0068752f262d","admin","2023-12-06 23:52:10","g","active");
INSERT INTO users VALUES("atosh","705163ef676cfd034e36fe1a7c47c092","admin","2023-12-06 23:52:43","a","active");
INSERT INTO users VALUES("g","7770ad443dfb889666565257bc7bb1fc","admin","2023-12-06 23:50:59","f","active");
INSERT INTO users VALUES("srk","f114758b9e052764073b29fdc5cdd969","admin","2023-12-06 23:53:08","a","active");



