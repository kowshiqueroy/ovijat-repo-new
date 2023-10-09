DROP TABLE administrator;

CREATE TABLE `administrator` (
  `Firstname` varchar(30) NOT NULL,
  `Sirname` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO administrator VALUES("fsdf","dsfds","dsfds","dsfds");
INSERT INTO administrator VALUES("IT","Ovijat","itovijat12","it.ovijat@gmail.com");



DROP TABLE files;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(300) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Size` decimal(10,0) DEFAULT NULL,
  `content` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO files VALUES("1","Staff","staff.csv","application/vnd.ms-excel","76","");



DROP TABLE inorg;

CREATE TABLE `inorg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(300) NOT NULL,
  `year` varchar(200) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE jobs;

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_deadline` varchar(20) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_details` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO jobs VALUES("1","2023.10.09","Urgent Job Post: ","Qualification: Experience: Others: ");
INSERT INTO jobs VALUES("2","2023.10.11","Urgent Job Post: ","Qualification: Experience: Others: ");



DROP TABLE notices;

CREATE TABLE `notices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_date` varchar(200) NOT NULL,
  `notice_title` varchar(200) NOT NULL,
  `notice_details` varchar(400) NOT NULL,
  `notice_person` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO notices VALUES("1","2023.10.09: it.ovijat@gmail.com","test","sdfsd","");
INSERT INTO notices VALUES("2","2023.10.09: it.ovijat@gmail.com","ads","sad","");
INSERT INTO notices VALUES("3","2023.10.09: it.ovijat@gmail.com","sfd","dsf","");



DROP TABLE profilepictures;

CREATE TABLE `profilepictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ids` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `Size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) NOT NULL,
  `Sirname` varchar(50) NOT NULL,
  `Mtitle` varchar(30) NOT NULL,
  `MStatus` varchar(30) NOT NULL,
  `Joining` varchar(30) DEFAULT NULL,
  `Dissmissed` varchar(30) NOT NULL,
  `Rank` varchar(30) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NID` varchar(50) NOT NULL,
  `Staffid` varchar(10) NOT NULL,
  `Online` varchar(300) NOT NULL,
  `Picname` varchar(1000) NOT NULL,
  `Time` bigint(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("1","a","a","a","active","09-10-2023","","a","a","a","it.ovijat@gmail.com","a","a","Offline","","0");
INSERT INTO users VALUES("2","b","b","b","active","09-10-2023","","b","b","b","kowshiqueroy@gmail.com","b","b","Offline","","0");



