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

INSERT INTO company VALUES("1","Open/Close Menu by clicking the green area. And Set Company Name in info. ","+8801765236683","info@ovijatfood.com","Nilphamari open menu and setup your company info.");



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
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO entry VALUES("198","Out","Test Department","Test Category 2 wire (PCS)","2","0","Y.m.d","0","N/A","a","2023-12-06 06:55:06");
INSERT INTO entry VALUES("199","In","Test Department","Test Category Test Item (PCS)","2","0","Y.m.d","0","N/A","a","2023-12-06 06:56:55");



DROP TABLE ip;

CREATE TABLE `ip` (
  `ipname` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  PRIMARY KEY (`ipname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO ip VALUES("103.106.239.188","mahin");
INSERT INTO ip VALUES("103.106.239.79","kush1added");
INSERT INTO ip VALUES("2001:bc8:5090:7e:dc00:ff:fe12:","2001:bc8:5090:7e:dc00:ff:fe12:20e3");
INSERT INTO ip VALUES("::1","localhost");



DROP TABLE item;

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(40) NOT NULL,
  `categoryname` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `stock` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO item VALUES("36","Test Item","Test Category","PCS","3");
INSERT INTO item VALUES("37","wire","Test Category 2","PCS","42");



DROP TABLE log;

CREATE TABLE `log` (
  `data` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 06:46:19");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 06:46:28");
INSERT INTO log VALUES("IN mahin 103.106.239.188","2023-12-06 06:50:47");
INSERT INTO log VALUES("IN srk 103.106.239.79","2023-12-06 07:16:44");
INSERT INTO log VALUES("OUT srk 103.106.239.79","2023-12-06 07:20:48");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 07:20:55");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 07:33:47");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 08:00:20");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 08:02:38");
INSERT INTO log VALUES("OUT a 2001:bc8:5090:7e:dc00:ff:fe12:20e3","2023-12-06 08:04:28");
INSERT INTO log VALUES("OUT a 51.89.226.250","2023-12-06 08:11:18");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 08:12:27");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 08:12:33");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 08:14:31");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 12:34:28");



DROP TABLE logdel;

CREATE TABLE `logdel` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE logtry;

CREATE TABLE `logtry` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logtry VALUES("Try mahin 103-106-239-188.nilphamari.carnival.com.bd Nilphamari Rangpur Division BD 25.9417,88.8467 AS63526 Systems Solutions & development Technologies Limited 5300 Asia/Dhaka 1701845216","2023-12-06 06:46:56");
INSERT INTO logtry VALUES("Try mahin 103-106-239-188.nilphamari.carnival.com.bd Nilphamari Rangpur Division BD 25.9417,88.8467 AS63526 Systems Solutions & development Technologies Limited 5300 Asia/Dhaka 1701845288","2023-12-06 06:48:08");
INSERT INTO logtry VALUES("Try mahin 103-106-239-188.nilphamari.carnival.com.bd Nilphamari Rangpur Division BD 25.9417,88.8467 AS63526 Systems Solutions & development Technologies Limited 5300 Asia/Dhaka 1701845378","2023-12-06 06:49:38");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848032","2023-12-06 07:33:52");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848404","2023-12-06 07:40:04");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848413","2023-12-06 07:40:13");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848506","2023-12-06 07:41:46");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848525","2023-12-06 07:42:05");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848549","2023-12-06 07:42:29");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848630","2023-12-06 07:43:50");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848674","2023-12-06 07:44:34");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848711","2023-12-06 07:45:11");
INSERT INTO logtry VALUES("Try a 103-106-239-79.nilphamari.carnival.com.bd Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848931","2023-12-06 07:48:51");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701848955","2023-12-06 07:49:15");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849141","2023-12-06 07:52:21");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849178","2023-12-06 07:52:58");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849250","2023-12-06 07:54:10");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849267","2023-12-06 07:54:27");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849273","2023-12-06 07:54:33");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849343","2023-12-06 07:55:43");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849370","2023-12-06 07:56:10");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849395","2023-12-06 07:56:35");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849425","2023-12-06 07:57:05");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849461","2023-12-06 07:57:41");
INSERT INTO logtry VALUES("Try a 103.106.239.79 Dinājpur Rangpur Division BD 25.6274,88.6378 AS63526 Systems Solutions & development Technologies Limited 5220 Asia/Dhaka 1701849501","2023-12-06 07:58:21");
INSERT INTO logtry VALUES("Try a 2001:bc8:5090:7e:dc00:ff:fe12:20e3 Haarlem North Holland NL 52.3808,4.6368 AS12876 SCALEWAY S.A.S. 2011 Europe/Amsterdam 1701849877","2023-12-06 08:04:37");
INSERT INTO logtry VALUES("Try a 2001:bc8:5090:7e:dc00:ff:fe12:20e3 Haarlem North Holland NL 52.3808,4.6368 AS12876 SCALEWAY S.A.S. 2011 Europe/Amsterdam 1701850014","2023-12-06 08:06:54");
INSERT INTO logtry VALUES("Try a 51.89.226.250 Bexley England GB 51.4416,0.1487 AS16276 OVH SAS DA15 Europe/London 1701850286","2023-12-06 08:11:26");



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

INSERT INTO users VALUES("a","a","admin","2023-12-04 09:19:23","admin","active");
INSERT INTO users VALUES("b","b","manager","2023-12-04 09:44:27","a","active");
INSERT INTO users VALUES("mahin","1234","admin","2023-12-04 08:46:43","admin","active");
INSERT INTO users VALUES("srk","srk","admin","2023-12-06 07:13:51","a","active");



