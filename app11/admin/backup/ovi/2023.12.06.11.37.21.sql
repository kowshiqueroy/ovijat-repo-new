DROP TABLE category;

CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO category VALUES("17","Dal Vaja");
INSERT INTO category VALUES("19","Headphone");
INSERT INTO category VALUES("20","laptop");
INSERT INTO category VALUES("21","Phone");
INSERT INTO category VALUES("22","টি শার্ট");



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
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO entry VALUES("199","In","Test Department","Test Category Test Item (PCS)","2","0","Y.m.d","0","N/A","a","2023-12-06 06:56:55");
INSERT INTO entry VALUES("200","Purchase","Khoushik","laptop M2 (PCS)","10","0","Y.m.d","20000","N/A","atosh","2023-12-06 13:22:55");
INSERT INTO entry VALUES("201","Out","Test Department","laptop M2 (PCS)","1","0","Y.m.d","0","N/A","atosh","2023-12-06 13:24:06");
INSERT INTO entry VALUES("202","In","Test Department 2","Test Category Test Item (PCS)","3","0","Y.m.d","0","N/A","atosh","2023-12-06 13:24:43");
INSERT INTO entry VALUES("203","Lending","Khoushik","laptop del x2 (PCS)","1","123456","Y.m.d","2","N/A","atosh","2023-12-06 13:25:44");
INSERT INTO entry VALUES("206","In","Khoushik","laptop M20 (PCS)","0","১","Y.m.d","0","N/A","atosh","2023-12-06 14:08:46");



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
  `itemname` varchar(40) NOT NULL,
  `categoryname` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `stock` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO item VALUES("36","Test Item","Test Category","PCS","6");
INSERT INTO item VALUES("37","wire","Test Category 2","PCS","44");
INSERT INTO item VALUES("38","M20","laptop","PCS","14");
INSERT INTO item VALUES("39","del x2","laptop","PCS","9");
INSERT INTO item VALUES("41","M","Headphone","PCS","123567898765432");
INSERT INTO item VALUES("42","M2","Dal Vaja","PCS","1234567890");



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
INSERT INTO log VALUES("IN atosh 103.152.18.168","2023-12-06 13:15:55");
INSERT INTO log VALUES("OUT atosh 103.152.18.168","2023-12-06 13:53:14");
INSERT INTO log VALUES("IN atosh 103.152.18.168","2023-12-06 13:53:23");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:11:41");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:30:04");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:30:48");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:32:26");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:32:33");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:39:06");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:39:14");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:43:18");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:53:02");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:53:17");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:54:47");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:55:35");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:56:35");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:58:00");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 15:59:27");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 15:59:40");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:00:51");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:03:52");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:05:52");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:05:57");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:06:04");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:06:43");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:06:50");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:07:53");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:07:59");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:33:00");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:37:06");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:43:58");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 16:48:15");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 16:48:48");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 17:05:22");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 17:07:16");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 17:21:38");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 17:22:09");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 17:22:52");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 17:24:29");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 17:28:26");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 17:28:39");
INSERT INTO log VALUES("IN a 103.106.239.79","2023-12-06 17:33:18");
INSERT INTO log VALUES("OUT a 103.106.239.79","2023-12-06 17:37:21");



DROP TABLE logdel;

CREATE TABLE `logdel` (
  `data` varchar(300) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO logdel VALUES("DELETED Entry 198OutTest DepartmentTest Category 2 wire (PCS)20Y.m.d0N/Aa2023-12-06 06:55:06 2023-12-06 atosh 103.152.18.168","2023-12-06 13:49:30");
INSERT INTO logdel VALUES("DELETED Entry 204InTest Department 2টি শার্ট M (PCS)100Y.m.d0N/Aatosh2023-12-06 13:42:41 2023-12-06 a 103.106.239.79","2023-12-06 15:38:44");
INSERT INTO logdel VALUES("DELETED Entry 205InKhoushikTest Category 2 wire (PCS)00Y.m.d0N/Aatosh2023-12-06 14:07:56 2023-12-06 a 103.106.239.79","2023-12-06 15:36:33");



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
INSERT INTO logtry VALUES("Try atosh 103.152.18.168 Rangpur Rangpur Division BD 25.7466,89.2517 AS140711 Deshnet Broadband 5400 Asia/Dhaka 1701868518","2023-12-06 13:15:18");



DROP TABLE users;

CREATE TABLE `users` (
  `usermail` varchar(50) NOT NULL,
  `userpassword` varchar(80) NOT NULL,
  `role` varchar(15) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `regby` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`usermail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("a","a","admin","2023-12-06 17:15:57","","active");
INSERT INTO users VALUES("b","$2y$10$oZUtRrECzg1zu0O5EKQdCeV63QLoK5JO7E2MMWBaHMFm1Zn4/65.6","admin","2023-12-06 17:16:31","a","active");
INSERT INTO users VALUES("d","8277e0910d750195b448797616e091ad","admin","2023-12-06 17:35:18","a","active");



