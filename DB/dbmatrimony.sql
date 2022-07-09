/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - dbmatrimony
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbmatrimony` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbmatrimony`;

/*Table structure for table `answer` */

DROP TABLE IF EXISTS `answer`;

CREATE TABLE `answer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) DEFAULT NULL,
  `cid` varchar(150) DEFAULT NULL,
  `answer` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;

/*Data for the table `answer` */

insert  into `answer`(`aid`,`qid`,`cid`,`answer`) values 
(61,1,'chandu@gmail.com','Red'),
(62,2,'chandu@gmail.com','Meat'),
(63,3,'chandu@gmail.com','Tea'),
(64,4,'chandu@gmail.com','Mountains'),
(65,5,'chandu@gmail.com','Sweater'),
(66,6,'chandu@gmail.com','Car'),
(67,7,'chandu@gmail.com','Sandwich'),
(68,8,'chandu@gmail.com','Spend'),
(69,9,'chandu@gmail.com','Jogging'),
(70,10,'chandu@gmail.com','Dog');

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chat` */

insert  into `chat`(`chatid`,`sender`,`receiver`,`date`,`message`) values 
(11,'chandu@gmail.com','vyshu@gmail.com','2022-06-19','hello'),
(12,'vyshu@gmail.com','chandu@gmail.com','2022-06-19','hai'),
(13,'vyshu@gmail.com','chandu@gmail.com','2022-06-19','hmm'),
(14,'chandu@gmail.com','vyshu@gmail.com','2022-06-19','wow');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `profor` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `caste` varchar(150) DEFAULT NULL,
  `martialstatus` varchar(150) DEFAULT NULL,
  `height` varchar(150) DEFAULT NULL,
  `familytype` varchar(150) DEFAULT NULL,
  `education` varchar(150) DEFAULT NULL,
  `employedin` varchar(150) DEFAULT NULL,
  `occupation` varchar(150) DEFAULT NULL,
  `lat` decimal(50,0) DEFAULT NULL,
  `lon` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`cid`,`name`,`email`,`phone`,`address`,`profor`,`gender`,`religion`,`dob`,`file`,`caste`,`martialstatus`,`height`,`familytype`,`education`,`employedin`,`occupation`,`lat`,`lon`) values 
(11,'chandu','chandu@gmail.com','8921406960','28/246','Myself','Male','Hindu','1998-04-10','images/banner.jpg','vaishya','Single','173cm','Joint','Graduation','Private','software engineer',10,76),
(12,'abhijith','abhi@gmail.com',' 7306363993','28/244 pattalam','Myself','Male','Hindu','1994-05-23','images/abhijith.png','vaishya','Single','165cm','Joint','Graduation','Private','Software Engineer',9,77),
(22,'vyshnavi','vyshu@gmail.com',' 9875543322','28/246 kochi','Sister','Female','Hindu','2000-09-11','images/download (1).jpg','vaishya','Single','165cm','Joint','Graduation','Private','Accounts',10,76),
(23,'aadithya','aadhi@gmail.com',' 8921406960','28/987 ooturaliroad palliyekkal','Son','Male','Hindu','1997-02-18','images/download.jpg','vaishya','Single','165cm','Joint','Graduation','Private','Accounts',10,76),
(25,'vijeesh','vijeesh@gmail.com',' 9899278892','28/987 valavil lane','Myself','Male','Hindu','1996-06-21','images/customers.jpg','SNDP','Single','170cm','Nuclear','Graduation','Private','Accounts',11,77),
(27,'Nayana','nayana@gmail.com',' 9886768767','kalamassery,kochi','Daughter','Female','Hindu','2000-02-21','images/download (2).jpg','ezhava','Single','170cm','Nuclear','PostGraduation','Private','Faculty',10,76);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `utype` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`lid`,`uid`,`uname`,`password`,`utype`,`status`) values 
(0,0,'admin@gmail.com','admin','Admin','1'),
(9,11,'chandu@gmail.com','12345','Customer','1'),
(10,12,'abhi@gmail.com','abhi123','Customer','1'),
(15,22,'vyshu@gmail.com','vyshu@123','Customer','1'),
(16,23,'aadhi@gmail.com','aadhi123','Customer','1'),
(18,25,'vijeesh@gmail.com','vijeesh@123','Customer','1'),
(20,27,'nayana@gmail.com','nayana123','Customer','1');

/*Table structure for table `plan` */

DROP TABLE IF EXISTS `plan`;

CREATE TABLE `plan` (
  `plid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `desc` varchar(250) DEFAULT NULL,
  `amount` varchar(150) DEFAULT NULL,
  `months` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`plid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plan` */

insert  into `plan`(`plid`,`name`,`details`,`desc`,`amount`,`months`) values 
(1,'Gold','Send unlimited messages, chat and make video calls*','Access 40 verified mobile numbers','4700','3'),
(2,'Diamond','Send unlimited messages, chat and make video calls*','Access 50 verified mobile numbers','5500','3'),
(3,'Platinum','Send unlimited messages, chat and make video calls*','Access 80 verified mobile numbers','6600','6');

/*Table structure for table `preference` */

DROP TABLE IF EXISTS `preference`;

CREATE TABLE `preference` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(150) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `height` varchar(150) DEFAULT NULL,
  `familytype` varchar(150) DEFAULT NULL,
  `education` varchar(150) DEFAULT NULL,
  `employedin` varchar(150) DEFAULT NULL,
  `occupation` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `preference` */

insert  into `preference`(`pid`,`cid`,`religion`,`height`,`familytype`,`education`,`employedin`,`occupation`) values 
(3,'chandu@gmail.com','Hindu','All','All','Graduation','Private',NULL),
(4,'abhi@gmail.com','Hindu','All','All','All','Private',NULL),
(5,'vyshu@gmail.com','Hindu','160-165','Joint','All','All',NULL),
(6,'aadhi@gmail.com','All','All','All','Graduation','All',NULL);

/*Table structure for table `premiumbook` */

DROP TABLE IF EXISTS `premiumbook`;

CREATE TABLE `premiumbook` (
  `prid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(150) DEFAULT NULL,
  `plid` int(11) DEFAULT NULL,
  `fromdate` varchar(150) DEFAULT NULL,
  `expdate` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`prid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `premiumbook` */

insert  into `premiumbook`(`prid`,`cid`,`plid`,`fromdate`,`expdate`) values 
(3,'chandu@gmail.com',3,'2022-06-18','2022-12-18');

/*Table structure for table `profileview` */

DROP TABLE IF EXISTS `profileview`;

CREATE TABLE `profileview` (
  `pvid` int(11) NOT NULL AUTO_INCREMENT,
  `viewedby` varchar(150) DEFAULT NULL,
  `viewed` varchar(150) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pvid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `profileview` */

insert  into `profileview`(`pvid`,`viewedby`,`viewed`,`status`) values 
(1,'abhi@gmail.com','nayana@gmail.com','0'),
(2,'abhi@gmail.com','chandu@gmail.com','0'),
(3,'chandu@gmail.com','abhi@gmail.com','0'),
(4,'chandu@gmail.com','vyshu@gmail.com','1');

/*Table structure for table `qualification` */

DROP TABLE IF EXISTS `qualification`;

CREATE TABLE `qualification` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `qualification` */

insert  into `qualification`(`qid`,`qualification`) values 
(1,'Graduation'),
(2,'PostGraduation'),
(3,'HigherSecondory'),
(4,'PHD');

/*Table structure for table `question` */

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(150) DEFAULT NULL,
  `option1` varchar(150) DEFAULT NULL,
  `option2` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `question` */

insert  into `question`(`qid`,`question`,`option1`,`option2`) values 
(1,'Blue or Red','Blue','Red'),
(2,'Meat or Vegetables','Meat','Vegetables'),
(3,'Coffee or Tea','Coffee','Tea'),
(4,'Ocean or Mountains','Ocean','Mountains'),
(5,'Sweater or Hoodie','Sweater','Hoodie'),
(6,'Bike or Car','Bike','Car'),
(7,'Soup or Sandwich','Soup','Sandwich'),
(8,'Save or Spend','Save','Spend'),
(9,'Jogging or Hiking','Jogging','Hiking'),
(10,'Dog or Cat','Dog','Cat');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
