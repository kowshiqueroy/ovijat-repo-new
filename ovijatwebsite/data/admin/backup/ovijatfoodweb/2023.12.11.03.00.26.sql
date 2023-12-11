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
  `details` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO item VALUES("151","cascas","banner","cascasbanner.jpeg","sacasc");
INSERT INTO item VALUES("154","12.09","top wish","12.09top wish.jpeg","kjhccjahhashcjashhcassh");
INSERT INTO item VALUES("155","sdgsdgsdg","spices","sdgsdgsdgspices.jpeg","fhfdhdfhdfhdfhdfhdfhdf <br> cskdkasdhas");
INSERT INTO item VALUES("156","2023.12.13","job","2023.12.13job.jpeg","khsdfhsdhfhdsjflhsdhfjlsdhfjhsdjhfjsdh");
INSERT INTO item VALUES("159","active","top wish","activetop wish.png","czxczx");
INSERT INTO item VALUES("160","12","top wish","12top wish.jpeg","test details");
INSERT INTO item VALUES("161","123","top wish","123top wish.jpeg","123");



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
INSERT INTO log VALUES("OUT g ::1","2023-12-07 20:19:02");
INSERT INTO log VALUES("IN g ::1","2023-12-07 20:19:04");
INSERT INTO log VALUES("OUT g ::1","2023-12-07 20:19:47");
INSERT INTO log VALUES("IN g ::1","2023-12-07 20:19:54");
INSERT INTO log VALUES("IN g ::1","2023-12-07 20:33:41");
INSERT INTO log VALUES("IN g ::1","2023-12-07 21:34:54");
INSERT INTO log VALUES("IN g ::1","2023-12-07 21:39:39");
INSERT INTO log VALUES("IN g ::1","2023-12-08 02:19:50");
INSERT INTO log VALUES("IN g ::1","2023-12-09 21:26:18");
INSERT INTO log VALUES("IN g ::1","2023-12-10 13:21:52");
INSERT INTO log VALUES("IN g ::1","2023-12-11 15:00:22");



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



