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
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE ip;

CREATE TABLE `ip` (
  `ipname` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL,
  PRIMARY KEY (`ipname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO ip VALUES("103.106.239.79","kush");
INSERT INTO ip VALUES("::1","localhost");



DROP TABLE item;

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(40) NOT NULL,
  `categoryname` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `stock` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE log;

CREATE TABLE `log` (
  `data` varchar(100) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




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
INSERT INTO users VALUES("aa","aa","admin","2023-12-04 08:46:43","admin","active");
INSERT INTO users VALUES("b","b","manager","2023-12-04 09:44:27","a","active");



